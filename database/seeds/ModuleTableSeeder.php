<?php

use Illuminate\Database\Seeder;
use App\Module;
use App\Accion;
use App\Role;
use App\AccionRole;
use App\CounterPage;
use App\User;

use App\Client;
use App\Employee;


class ModuleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    ##role
    ##['role', 'description'];
    # AccionRole
    #['accion_id', 'role_id'];
    public function run()
    {
    	##Gestio de clientes
        $gcliente = new Module;
        $gcliente->name = 'Gestión de Clientes';
        $gcliente->description = 'Conjunto de acciones para administrar clientes';
        $gcliente->visitcount = 0;
        $gcliente->save();
        ##Acciones de gestionar cliente
        		#Accion crear cliente	
		        $ccliente = new Accion;
		        $ccliente ->name= 'Crear cliente';
		        $counterpage = new CounterPage;
		        $counterpage ->visitcount = 0;		        
		        $counterpage->pageroute ='/clients/create';
		        $counterpage->save();
		        $ccliente ->pageroute ='/clients/create';
		        $ccliente ->module_id = $gcliente->id;
		        $ccliente ->save();
		        $prcliente = new Accion;
		        $prcliente->name= 'Papelera de reciclaje';
		        $counterpage = new CounterPage;
		        $counterpage ->visitcount = 0;
		        $counterpage->pageroute ='/clients/trash';
		        $counterpage->save();
		        $prcliente->pageroute ='/clients/trash';
		        $prcliente->module_id = $gcliente->id;
		        $prcliente->save();
		        $mcliente = new Accion;
		        $mcliente->name= 'Mostrar clientes';
		        $counterpage = new CounterPage;
		        $counterpage ->visitcount = 0;
		        $counterpage->pageroute ='/clients/index/index';
		        $counterpage->save();
		        $mcliente->pageroute ='/clients/index/index';
		        $mcliente->module_id = $gcliente->id;
		        $mcliente->save();
		        $mocliente = new Accion;
		        $mocliente->name= 'Modificar clientes';
		        $counterpage = new CounterPage;
		        $counterpage ->visitcount = 0;
		        $counterpage->pageroute ='/clients/index/indexedit';
		        $counterpage->save();
		        $counterpage = new CounterPage;
		        $counterpage ->visitcount = 0;		        
		        $counterpage->pageroute ='/clients/edit';
		        $counterpage->save();		        
		        $mocliente->pageroute ='/clients/index/indexedit';
		        $mocliente->module_id = $gcliente->id;
		        $mocliente->save();
		        $ecliente = new Accion;
		        $ecliente->name= 'Eliminar clientes';    
		        $counterpage = new CounterPage;
		        $counterpage ->visitcount = 0;
		        $counterpage->pageroute ='/clients/index/indexdelete';
		        $counterpage->save();		        
		        $ecliente->pageroute ='/clients/index/indexdelete';
		        $ecliente->module_id = $gcliente->id;
		        $ecliente->save();
		        ##Gestion de personal
        $gpersonal = new Module;
        $gpersonal->name = 'Gestión de personal';
        $gpersonal->description = 'Conjunto de acciones para administrar el personal de la empresa';
        $gpersonal->visitcount = 0;
        $gpersonal->save();
         ##Acciones de gestionar personal
		        $cpersonal = new Accion;
		        $cpersonal->name= 'Crear personal';
		        $counterpage = new CounterPage;
		        $counterpage ->visitcount = 0;
		        $counterpage->pageroute ='/employees/create';
		        $counterpage->save();		        
		        $cpersonal->pageroute ='/employees/create';
		        $cpersonal->module_id = $gpersonal->id;
		        $cpersonal->save();
		        $prpersonal = new Accion;
		        $prpersonal->name= 'Papelera de reciclaje';
		        $counterpage = new CounterPage;
		        $counterpage ->visitcount = 0;
		        $counterpage->pageroute ='/employees/trash';
		        $counterpage->save();		        
		        $prpersonal->pageroute ='/employees/trash';
		        $prpersonal->module_id = $gpersonal->id;
		        $prpersonal->save();
		        $mpersonal = new Accion;
		        $mpersonal->name= 'Mostrar personal';
		        $counterpage = new CounterPage;
		        $counterpage ->visitcount = 0;
		        $counterpage->pageroute ='/employees/index/index';
		        $counterpage->save();		        
		        $mpersonal->pageroute ='/employees/index/index';
		        $mpersonal->module_id = $gpersonal->id;
		        $mpersonal->save();
		        $mopersonal = new Accion;
		        $mopersonal->name= 'Modificar personal';
		        $counterpage = new CounterPage;
		        $counterpage ->visitcount = 0;
		        $counterpage->pageroute ='/employees/index/indexedit';
		        $counterpage->save();
		        $counterpage = new CounterPage;
		        $counterpage ->visitcount = 0;		        
		        $counterpage->pageroute ='/employees/edit';
		        $counterpage->save();		        
		        $mopersonal->pageroute ='/employees/index/indexedit';
		        $mopersonal->module_id = $gpersonal->id;
		        $mopersonal->save();
		        $epersonal = new Accion;
		        $epersonal->name= 'Eliminar personal';
		        $counterpage = new CounterPage;
		        $counterpage ->visitcount = 0;
		        $counterpage->pageroute ='/employees/index/indexdelete';
		        $counterpage->save();		        
		        $epersonal->pageroute ='/employees/index/indexdelete';
		        $epersonal->module_id = $gpersonal->id;
		        $epersonal->save();
		                ##Gestion de producto
        $gproducto = new Module;
        $gproducto->name = 'Gestión de productos';
        $gproducto->description = 'Conjunto de Acciones para gestionar los productos de Hinolux';
        $gproducto->visitcount = 0;
        $gproducto->save();
##Acciones de gestionar cliente
		        $cproducto = new Accion;
		        $cproducto->name= 'Adicionar producto';
		        $counterpage = new CounterPage;
		        $counterpage ->visitcount = 0;
		        $counterpage->pageroute ='/products/create';
		        $counterpage->save();		        
		        $cproducto->pageroute ='/products/create';
		        $cproducto->module_id = $gproducto->id;
		        $cproducto->save();
		        $prproducto = new Accion;
		        $prproducto->name= 'Papelera de reciclaje';
		        $counterpage = new CounterPage;
		        $counterpage ->visitcount = 0;
		        $counterpage->pageroute ='/products/trash';
		        $counterpage->save();		        
		        $prproducto->pageroute ='/products/trash';
		        $prproducto->module_id = $gproducto->id;
		        $prproducto->save();
		        $mproducto = new Accion;
		        $mproducto->name= 'Mostrar producto';
		        $counterpage = new CounterPage;
		        $counterpage ->visitcount = 0;
		        $counterpage->pageroute ='/products/index/index';
		        $counterpage->save();		        
		        $mproducto->pageroute ='/products/index/index';
		        $mproducto->module_id = $gproducto->id;
		        $mproducto->save();
		        $moproducto = new Accion;
		        $moproducto->name= 'Modificar producto';
		        $counterpage = new CounterPage;
		        $counterpage ->visitcount = 0;
		        $counterpage->pageroute ='/products/index/indexedit';
		        $counterpage->save();
		        $counterpage = new CounterPage;
		        $counterpage ->visitcount = 0;
		        $counterpage->pageroute ='/products/edit';
		        $counterpage->save();		        
		        $moproducto->pageroute ='/products/index/indexedit';
		        $moproducto->module_id = $gproducto->id;
		        $moproducto->save();
		        $eproducto = new Accion;
		        $eproducto->name= 'Eliminar producto';
		        $counterpage = new CounterPage;
		        $counterpage ->visitcount = 0;
		        $counterpage->pageroute ='/products/index/indexdelete';
		        $counterpage->save();		        
		        $eproducto->pageroute ='/products/index/indexdelete';
		        $eproducto->module_id = $gproducto->id;
		        $eproducto->save();
 ##Gestion de categoria de producto
        $gcatpro = new Module;
        $gcatpro->name = 'Gestión de categoria-Productos';
        $gcatpro->description = 'Acciones para gestionar las distintas categorias de productos';
        $gcatpro->visitcount = 0;
        $gcatpro->save();
##Acciones de gestionar cliente
		        $ccatpro = new Accion;
		        $ccatpro->name= 'Adicionar categoria';
		        $counterpage = new CounterPage;
		        $counterpage ->visitcount = 0;
		        $counterpage->pageroute ='/product-categories/create';
		        $counterpage->save();		        
		        $ccatpro->pageroute ='/product-categories/create';
		        $ccatpro->module_id = $gcatpro->id;
		        $ccatpro->save();
		        $prcatpro = new Accion;
		        $prcatpro->name= 'Papelera de reciclaje';
		        $counterpage = new CounterPage;
		        $counterpage ->visitcount = 0;
		        $counterpage->pageroute ='/product-categories/trash';
		        $counterpage->save();		        
		        $prcatpro->pageroute ='/product-categories/trash';
		        $prcatpro->module_id = $gcatpro->id;
		        $prcatpro->save();
		        $mcatpro = new Accion;
		        $mcatpro->name= 'Mostrar categorias';
		        $counterpage = new CounterPage;
		        $counterpage ->visitcount = 0;
		        $counterpage->pageroute ='/product-categories/index/index';
		        $counterpage->save();		        
		        $mcatpro->pageroute ='/product-categories/index/index';
		        $mcatpro->module_id = $gcatpro->id;
		        $mcatpro->save();
		        $mocatpro = new Accion;
		        $mocatpro->name= 'Modificar categoria';
		        $counterpage = new CounterPage;
		        $counterpage ->visitcount = 0;
		        $counterpage->pageroute ='/product-categories/index/indexedit';
		        $counterpage->save();
		        $counterpage = new CounterPage;
		        $counterpage ->visitcount = 0;
		        $counterpage->pageroute ='/product-categories/edit';
		        $counterpage->save();		        
		        $mocatpro->pageroute ='/product-categories/index/indexedit';
		        $mocatpro->module_id = $gcatpro->id;
		        $mocatpro->save();
		        $ecatpro = new Accion;
		        $ecatpro->name= 'Eliminar categoria';
		        $counterpage = new CounterPage;
		        $counterpage ->visitcount = 0;
		        $counterpage->pageroute ='/product-categories/index/indexdelete';
		        $counterpage->save();		        
		        $ecatpro->pageroute ='/product-categories/index/indexdelete';
		        $ecatpro->module_id = $gcatpro->id;
		        $ecatpro->save();
 ##Gestion de  provedores
		        ##sales-bills
		        ##purchases-bills
        $gproveedor = new Module;
        $gproveedor->name = 'Gestión de Proveedores';
        $gproveedor->description = 'Abarca todas las acciones para administrar la información de los proveedores asociados';
        $gproveedor->visitcount = 0;
        $gproveedor->save();
##Acciones de gestionar proveedor
		        $cproveedor = new Accion;
		        $cproveedor->name= 'Crear proveedor';
		        $counterpage = new CounterPage;
		        $counterpage ->visitcount = 0;
		        $counterpage->pageroute ='/suppliers/create';
		        $counterpage->save();		        
		        $cproveedor->pageroute ='/suppliers/create';
		        $cproveedor->module_id = $gproveedor->id;
		        $cproveedor->save();
		        $mproveedor = new Accion;
		        $mproveedor->name= 'Mostrar proveedor';
		        $counterpage = new CounterPage;
		        $counterpage ->visitcount = 0;
		        $counterpage->pageroute ='/suppliers/index/index';
		        $counterpage->save();		        
		        $mproveedor->pageroute ='/suppliers/index/index';
		        $mproveedor->module_id = $gproveedor->id;
		        $mproveedor->save();
		        $moproveedor = new Accion;
		        $moproveedor->name= 'Modificar proveedor';
		        $counterpage = new CounterPage;
		        $counterpage ->visitcount = 0;
		        $counterpage->pageroute ='/suppliers/index/indexedit';
		        $counterpage->save();
		        $counterpage = new CounterPage;
		        $counterpage ->visitcount = 0;
		        $counterpage->pageroute ='/suppliers/edit';
		        $counterpage->save();		        
		        $moproveedor->pageroute ='/suppliers/index/indexedit';
		        $moproveedor->module_id = $gproveedor->id;
		        $moproveedor->save();
		        $eproveedor = new Accion;
		        $eproveedor->name= 'Eliminar proveedor';
		        $counterpage = new CounterPage;
		        $counterpage ->visitcount = 0;
		        $counterpage->pageroute ='/suppliers/index/indexdelete';
		        $counterpage->save();		        
		        $eproveedor->pageroute ='/suppliers/index/indexdelete';
		        $eproveedor->module_id = $gproveedor->id;
		        $eproveedor->save();
		        ##sales-bills
        $gventas = new Module;
        $gventas->name = 'Gestión de ventas';
        $gventas->description = 'Abarca todas las acciones para el maneja transaccional de ventas';
        $gventas->visitcount = 0;
        $gventas->save();

        		$cventa = new Accion;
		        $cventa->name= 'Nueva venta';
		        $counterpage = new CounterPage;
		        $counterpage ->visitcount = 0;
		        $counterpage->pageroute ='/sales-bills/create';
		        $counterpage->save();
		        $counterpage = new CounterPage;
		        $counterpage ->visitcount = 0;
		        $counterpage->pageroute ='/sales-bills/show';
		        $counterpage->save();
		        $counterpage = new CounterPage;
		        $counterpage ->visitcount = 0;
		        $counterpage->pageroute ='/sales-bills-details/create';
		        $counterpage->save();			        
		        $cventa->pageroute ='/sales-bills/create';
		        $cventa->module_id = $gventas->id;
		        $cventa->save();
		        $mventa = new Accion;
		        $mventa->name= 'Mostrar ventas';
		        $counterpage = new CounterPage;
		        $counterpage ->visitcount = 0;
		        $counterpage->pageroute ='/sales-bills/index/index';
		        $counterpage->save();		        
		        $mventa->pageroute ='/sales-bills/index/index';
		        $mventa->module_id = $gventas->id;
		        $mventa->save();
		        $eventa = new Accion;
		        $eventa->name= 'Eliminar venta';
		        $counterpage = new CounterPage;
		        $counterpage ->visitcount = 0;
		        $counterpage->pageroute ='/sales-bills/index/indexdelete';
		        $counterpage->save();		        
		        $eventa->pageroute ='/sales-bills/index/indexdelete';
		        $eventa->module_id = $gventas->id;
		        $eventa->save();
		        ##purchases-bills
		$gcompras = new Module;
        $gcompras->name = 'Gestión de compras';
        $gcompras->description = 'Abarca todas las acciones para el maneja transaccional de compras realizadas a nombre de la empresa';
        $gcompras->visitcount = 0;
        $gcompras->save();

        		$ccompra = new Accion;
		        $ccompra->name= 'Nueva compra';
		        $counterpage = new CounterPage;
		        $counterpage ->visitcount = 0;
		        $counterpage->pageroute ='/purchases-bills/create';
		        $counterpage->save();
		       	$counterpage = new CounterPage;
		        $counterpage ->visitcount = 0;
		        $counterpage->pageroute ='/purchases-bills/show';
		        $counterpage->save();
		        $counterpage = new CounterPage;
		        $counterpage ->visitcount = 0;
		        $counterpage->pageroute ='/purchases-bills-details/create';
		        $counterpage->save();			        
		        $ccompra->pageroute ='/purchases-bills/create';
		        $ccompra->module_id = $gcompras->id;
		        $ccompra->save();
		        $mcompra = new Accion;
		        $mcompra->name= 'Mostrar compra';
		        $counterpage = new CounterPage;
		        $counterpage ->visitcount = 0;
		        $counterpage->pageroute ='/purchases-bills/index/index';
		        $counterpage->save();		        
		        $mcompra->pageroute ='/purchases-bills/index/index';
		        $mcompra->module_id = $gcompras->id;
		        $mcompra->save();
		        $ecompra = new Accion;
		        $ecompra->name= 'Eliminar compra';
		        $counterpage = new CounterPage;
		        $counterpage ->visitcount = 0;
		        $counterpage->pageroute ='/purchases-bills/index/indexdelete';
		        $counterpage->save();		        
		        $ecompra->pageroute ='/purchases-bills/index/indexdelete';
		        $ecompra->module_id = $gcompras->id;
		        $ecompra->save();

		$glogin = new Module;
        $glogin->name = 'Login';
        $glogin->description = 'Abarca todas las acciones para el maneja de ingresos al sistema';
        $glogin->visitcount = 0;
        $glogin->save();
        	   	
        	   	$mlogin = new Accion;
        	   	$mlogin->name='Mostrar modulos';
        	   	$counterpage = new CounterPage;
        	   	$counterpage->visitcount = 0;
        	   	$counterpage->pageroute = '/modules';
        	   	$counterpage->save();
        	   	$counterpage = new CounterPage;
        	   	$counterpage->visitcount = 0;
        	   	$counterpage->pageroute = '/modules/show';
        	   	$counterpage->save();
        	   	$mlogin->pageroute = '/modules';
        	   	$mlogin->module_id = $glogin->id;
        	   	$mlogin->save();


        	   	$crole = new Accion;
        	   	$crole->name='Crear Rol';
        	   	$counterpage = new CounterPage;
        	   	$counterpage->visitcount = 0;
        	   	$counterpage->pageroute = '/roles/create';
        	   	$counterpage->save();
        	   	$crole->pageroute = '/roles/create';
        	   	$crole->module_id = $glogin->id;
        	   	$crole->save();
        	   	$mrole = new Accion;
        	   	$mrole->name='Mostrar Roles';
        	   	$counterpage = new CounterPage;
        	   	$counterpage->visitcount = 0;
        	   	$counterpage->pageroute = '/roles/index/index';
        	   	$counterpage->save();
        	   	$counterpage = new CounterPage;
        	   	$counterpage->visitcount = 0;
        	   	$counterpage->pageroute = '/roles/show';
        	   	$counterpage->save();
        	   	$mrole->pageroute = '/roles/index/index';
        	   	$mrole->module_id = $glogin->id;
        	   	$mrole->save();
        	   	$morole = new Accion;
        	   	$morole->name='Modificar Roles';
        	   	$counterpage = new CounterPage;
        	   	$counterpage->visitcount = 0;
        	   	$counterpage->pageroute = '/roles/index/indexedit';
        	   	$counterpage->save();
        	   	$counterpage = new CounterPage;
        	   	$counterpage->visitcount = 0;
        	   	$counterpage->pageroute = '/roles/edit';
        	   	$counterpage->save();
        	   	$morole->pageroute = '/roles/index/indexedit';
        	   	$morole->module_id = $glogin->id;
        	   	$morole->save();
        	   	$erole = new Accion;
        	   	$erole->name='Eliminar Roles';
        	   	$counterpage = new CounterPage;
        	   	$counterpage->visitcount = 0;
        	   	$counterpage->pageroute = '/roles/index/indexdelete';
        	   	$counterpage->save();
        	   	$erole->pageroute = '/roles/index/indexdelete';
        	   	$erole->module_id = $glogin->id;
        	   	$erole->save();
        	   	$arole = new Accion;
        	   	$arole->name='Asignar usuario al Rol';
        	   	$counterpage = new CounterPage;
        	   	$counterpage->visitcount = 0;
        	   	$counterpage->pageroute = '/roles/index/signups';
        	   	$counterpage->save();
        	   	$counterpage = new CounterPage;
        	   	$counterpage->visitcount = 0;
        	   	$counterpage->pageroute = '/roles/signup';
        	   	$counterpage->save();
        	   	$arole->pageroute = '/roles/index/signups';
        	   	$arole->module_id = $glogin->id;
        	   	$arole->save();

        	   	#Contador de Customizes	
       		    $counterpage = new CounterPage;
		        $counterpage ->visitcount = 0;
		        $counterpage->pageroute ='/customizes/create';
		        $counterpage->save();
       		    $counterpage = new CounterPage;
		        $counterpage ->visitcount = 0;
		        $counterpage->pageroute ='/customizes/edit';
		        $counterpage->save();

		        ##Estadisticas de ventas
		       	$estventa = new Accion;
		        $estventa->name= 'Estadisticas venta';
		        $counterpage = new CounterPage;
		        $counterpage ->visitcount = 0;
		        $counterpage->pageroute ='/sales-bills/statistics';
		        $counterpage->save();		        
		        $estventa->pageroute ='/sales-bills/statistics';
		        $estventa->module_id = $gventas->id;
		        $estventa->save();

		        ## Contador de buscador
		        $counterpage = new CounterPage;
		        $counterpage ->visitcount = 0;
		        $counterpage->pageroute ='/modules/search';
		        $counterpage->save();

		        ##Contador del main

		        $counterpage = new CounterPage;
		        $counterpage ->visitcount = 0;
		        $counterpage->pageroute ='/main';
		        $counterpage->save();





		
		#rol de administrador

		$adm = new Role;
		$adm->role = 'Administrador';
		$adm->description = 'Personal encargado de manejar el sistema';
		$adm->save();

		$clientec = new AccionRole;
		$clientec->accion_id = $ccliente->id;
		$clientec->role_id = $adm->id;
		$clientec->save();
		$clientepr = new AccionRole;
		$clientepr->accion_id = $prcliente->id;
		$clientepr->role_id = $adm->id;
		$clientepr->save();
		$clientem = new AccionRole;
		$clientem->accion_id = $mcliente->id;
		$clientem->role_id = $adm->id;
		$clientem->save();
		$clientemo = new AccionRole;
		$clientemo->accion_id = $mocliente->id;
		$clientemo->role_id = $adm->id;
		$clientemo->save();
		$clientee = new AccionRole;
		$clientee->accion_id = $ecliente->id;
		$clientee->role_id = $adm->id;
		$clientee->save();
		$personalc = new AccionRole;
		$personalc->accion_id = $cpersonal->id;
		$personalc->role_id = $adm->id;
		$personalc->save();
		$personalpr = new AccionRole;
		$personalpr->accion_id = $prpersonal->id;
		$personalpr->role_id = $adm->id;
		$personalpr->save();
		$personalm = new AccionRole;
		$personalm->accion_id = $mpersonal->id;
		$personalm->role_id = $adm->id;
		$personalm->save();		
		$personalmo = new AccionRole;
		$personalmo->accion_id = $mopersonal->id;
		$personalmo->role_id = $adm->id;
		$personalmo->save();	
		$personale = new AccionRole;
		$personale->accion_id = $epersonal->id;
		$personale->role_id = $adm->id;
		$personale->save();	    
		$productoc = new AccionRole;
		$productoc->accion_id = $cproducto->id;
		$productoc->role_id = $adm->id;
		$productoc->save();    
		$productopr = new AccionRole;
		$productopr->accion_id = $prproducto->id;
		$productopr->role_id = $adm->id;
		$productopr->save();  
		$productom = new AccionRole;
		$productom->accion_id = $mproducto->id;
		$productom->role_id = $adm->id;
		$productom->save();  
		$productomo = new AccionRole;
		$productomo->accion_id = $moproducto->id;
		$productomo->role_id = $adm->id;
		$productomo->save();  
		$productoe = new AccionRole;
		$productoe->accion_id = $eproducto->id;
		$productoe->role_id = $adm->id;
		$productoe->save();  
		$catproc = new AccionRole;
		$catproc->accion_id = $ccatpro->id;
		$catproc->role_id = $adm->id;
		$catproc->save();  
		$catpropr = new AccionRole;
		$catpropr->accion_id = $prcatpro->id;
		$catpropr->role_id = $adm->id;
		$catpropr->save();  
		$catprom = new AccionRole;
		$catprom->accion_id = $mcatpro->id;
		$catprom->role_id = $adm->id;
		$catprom->save();  
		$catpromo = new AccionRole;
		$catpromo->accion_id = $mocatpro->id;
		$catpromo->role_id = $adm->id;
		$catpromo->save();  
		$catproe = new AccionRole;
		$catproe->accion_id = $ecatpro->id;
		$catproe->role_id = $adm->id;
		$catproe->save(); 
		$proveedorc = new AccionRole;
		$proveedorc->accion_id = $cproveedor->id;
		$proveedorc->role_id = $adm->id;
		$proveedorc->save();   
		$proveedorm = new AccionRole;
		$proveedorm->accion_id = $mproveedor->id;
		$proveedorm->role_id = $adm->id;
		$proveedorm->save(); 
		$proveedormo = new AccionRole;
		$proveedormo->accion_id = $moproveedor->id;
		$proveedormo->role_id = $adm->id;
		$proveedormo->save();
		$proveedore = new AccionRole;
		$proveedore->accion_id = $eproveedor->id;
		$proveedore->role_id = $adm->id;
		$proveedore->save();  
		$ventac = new AccionRole;
		$ventac->accion_id = $cventa->id;
		$ventac->role_id = $adm->id;
		$ventac->save(); 
		$ventam = new AccionRole;
		$ventam->accion_id = $mventa->id;
		$ventam->role_id = $adm->id;
		$ventam->save();  
		$ventae = new AccionRole;
		$ventae->accion_id = $eventa->id;
		$ventae->role_id = $adm->id;
		$ventae->save(); 
		$comprac = new AccionRole;
		$comprac->accion_id = $ccompra->id;
		$comprac->role_id = $adm->id;
		$comprac->save();
		$compram = new AccionRole;
		$compram->accion_id = $mcompra->id;
		$compram->role_id = $adm->id;
		$compram->save(); 
		$comprae = new AccionRole;
		$comprae->accion_id = $ecompra->id;
		$comprae->role_id = $adm->id;
		$comprae->save();
		$loginm = new AccionRole;
		$loginm->accion_id = $mlogin->id;
		$loginm->role_id = $adm->id;
		$loginm->save();
		$rolec = new AccionRole;
		$rolec->accion_id = $crole->id;
		$rolec->role_id = $adm->id;
		$rolec->save();
		$rolem = new AccionRole;
		$rolem->accion_id = $mrole->id;
		$rolem->role_id = $adm->id;
		$rolem->save();
		$rolemo = new AccionRole;
		$rolemo->accion_id = $morole->id;
		$rolemo->role_id = $adm->id;
		$rolemo->save();
		$rolee = new AccionRole;
		$rolee->accion_id = $erole->id;
		$rolee->role_id = $adm->id;
		$rolee->save();
		$rolea = new AccionRole;
		$rolea->accion_id = $arole->id;
		$rolea->role_id = $adm->id;
		$rolea->save();
		$ventaes = new AccionRole;
		$ventaes->accion_id = $estventa->id;
		$ventaes->role_id = $adm->id;
		$ventaes->save();

		##Creando un el administrador root
		$user = new User;
		$user->username = 'root';
		$user->password = 'root';
		$user->email = 'root@hinolux.com';
		$user->role_id = $adm->id;
		$user->save();

		$employee = new Employee;
		$employee->name = 'hinolux';
		$employee->lastname = 'Srl';
		$employee->sex = 'Masculino';
		$employee->age = 1;
		$employee->career = 'owner';
		$employee->user_id = $user->id;
		$employee->save(); 


		#Rol de ventas
		$venta = new Role;
		$venta->role = 'Ventas';
		$venta->description = 'Personal encargado del área de ventas de la empresa';
		$venta->save();

		$clientec = new AccionRole;
		$clientec->accion_id = $ccliente->id;
		$clientec->role_id = $venta->id;
		$clientec->save();
		$clientem = new AccionRole;
		$clientem->accion_id = $mcliente->id;
		$clientem->role_id = $venta->id;
		$clientem->save();
		$clientemo = new AccionRole;
		$clientemo->accion_id = $mocliente->id;
		$clientemo->role_id = $venta->id;
		$clientemo->save();
		$productom = new AccionRole;
		$productom->accion_id = $mproducto->id;
		$productom->role_id = $venta->id;
		$productom->save();
		$catprom = new AccionRole;
		$catprom->accion_id = $mcatpro->id;
		$catprom->role_id = $venta->id;
		$catprom->save();
		$proveedorm = new AccionRole;
		$proveedorm->accion_id = $mproveedor->id;
		$proveedorm->role_id = $venta->id;
		$proveedorm->save();   
		$ventac = new AccionRole;
		$ventac->accion_id = $cventa->id;
		$ventac->role_id = $venta->id;
		$ventac->save(); 
		$ventam = new AccionRole;
		$ventam->accion_id = $mventa->id;
		$ventam->role_id = $venta->id;
		$ventam->save();  
		$ventae = new AccionRole;
		$ventae->accion_id = $eventa->id;
		$ventae->role_id = $venta->id;
		$ventae->save();
		$compram = new AccionRole;
		$compram->accion_id = $mcompra->id;
		$compram->role_id = $venta->id;
		$compram->save(); 

  



    }
}