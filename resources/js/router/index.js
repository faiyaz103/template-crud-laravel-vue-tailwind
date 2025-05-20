import { createRouter, createWebHistory } from "vue-router";
import Home from '../pages/Home.vue';
import Works from '../pages/public-profile/Works.vue';
import Default from "../pages/public-profile/profiles/Default.vue";
import Creator from "../pages/public-profile/profiles/Creator.vue";
import Company from "../pages/public-profile/profiles/Company.vue";
import Col2 from "../pages/public-profile/projects/Columns-2.vue";
import Col3 from "../pages/public-profile/projects/Columns-3.vue";
import Teams from "../pages/public-profile/Teams.vue";
import Network from "../pages/public-profile/Network.vue";
import Empty from "../pages/public-profile/Empty.vue";
import Activity from "../pages/public-profile/Activity.vue";
import Products from "../pages/store-admin/products/Products.vue";
import AddProduct from "../pages/store-admin/products/AddProduct.vue";
import Units from "../pages/store-admin/units/Units.vue";
import AddUnit from "../pages/store-admin/units/AddUnit.vue";
import EditUnit from "../pages/store-admin/units/EditUnit.vue";
import Categories from "../pages/store-admin/categories/Categories.vue";
import AddCategory from "../pages/store-admin/categories/AddCategory.vue";
import EditCategory from "../pages/store-admin/categories/EditCategory.vue";
import Brands from "../pages/store-admin/brands/Brands.vue";
import AddBrand from "../pages/store-admin/brands/AddBrand.vue";
import EditBrand from "../pages/store-admin/brands/EditBrand.vue";

const routes = [
    {path: '/', component:Home},
    {path: '/works', component:Works},
    {path: '/default', component:Default},
    {path: '/creator', component:Creator},
    {path: '/company', component:Company},
    {path: '/columns-2', component:Col2},
    {path: '/columns-3', component:Col3},
    {path: '/teams', component:Teams},
    {path: '/network', component:Network},
    {path: '/empty', component:Empty},
    {path: '/activity', component:Activity},

    {path: '/products', component:Products},
    {path: '/add-product', component:AddProduct},

    {path: '/units', component:Units},
    {path: '/add-unit', component:AddUnit},
    {path: '/edit-unit/:id', component:EditUnit},

    {path: '/categories', component:Categories},
    {path: '/add-category', component:AddCategory},
    {path: '/edit-category/:id', component:EditCategory},

    {path: '/brands', component:Brands},
    {path: '/add-brand', component:AddBrand},
    {path: '/edit-brand/:id', component:EditBrand},
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;