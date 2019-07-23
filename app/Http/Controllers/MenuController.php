<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    static private $menuItem = '<li class="{$active}"><a href="{$link}" aria-expanded="false"><i class="{$icon}"></i><span class="hide-menu">{$name}</span></a></li>';
    static private $parent_level_one = '<li class="{$active}"><a class="has-arrow " href="#" aria-expanded="false"><i class="mdi {$icon}"></i><span class="hide-menu">{$name}</span></a><ul aria-expanded="false" class="collapse" style="height: 0px;">{$menu}</ul></li>';
    static private $parent_level_other = '<li class="{$active}"><a class="has-arrow" href="#" aria-expanded="false">{$name}</a><ul aria-expanded="true" class="collapse" style="">{$menu}</ul>';
    static private $menutop = '<nav class="sidebar-nav"><ul id="sidebarnav">';
    static private $menutitle = '<li class="nav-small-cap">{$name}</li>';
    static private $menubottom = '</ul></nav>';

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Menu $menu
     * @return \Illuminate\Http\Response
     */
    public function show(Menu $menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Menu $menu
     * @return \Illuminate\Http\Response
     */
    public function edit(Menu $menu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Menu $menu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Menu $menu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Menu $menu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menu $menu)
    {
        //
    }

    static public function build($id = 0)
    {
        if ($id != 0) {
            $menu = Menu::find($id);
            $data = Menu::where('parent', $id)->orderBy('level', 'asc')->get();
            if ($data->count()>0) {
                $tempmenu = '';
                foreach ($data as $val) {
                    $tempmenu .=SELF::build($val->id);
                }
                $vars = [
                    '{$name}' => $menu->name,
                    '{$icon}' => $menu->icon,
                    '{$link}' => $menu->link,
                    '{$menu}' => $tempmenu,
                    '{$active}'=>''
                ];
                if ($menu->parent == 0) {
                    return strtr(SELF::$parent_level_one, $vars);
                } else {
                    return strtr(SELF::$parent_level_other, $vars);
                }
            } else {
                $vars = [
                    '{$name}' => $menu->name,
                    '{$icon}' => $menu->icon,
                    '{$link}' => $menu->link,
                    '{$active}'=>''
                ];
                if ($menu->link=="" && $menu->parent==0) return strtr(SELF::$menutitle, $vars);
                else return strtr(SELF::$menuItem, $vars);
            }
        }else{
            $data = Menu::where('parent', $id)->orderBy('level', 'asc')->get();
            $tempmenu="";
            //var_dump($data);
            if ($data->count()>0) {
                foreach ($data as $val) {
                    $tempmenu .=SELF::build($val->id);
                }
            }
            return SELF::$menutop.$tempmenu.SELF::$menubottom;
        }

    }
}
