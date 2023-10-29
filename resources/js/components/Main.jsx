import React from "react";
import Card_C from "./Card_C";
import ListCards from "./ListCards";
import Menu from "./Menu";
import Login from "./Login"
import { Routes, Route, Navigate } from "react-router-dom";

function Main() {
    return(
        <Routes>
            <Route path="/Proyecto_Prueba/public" element={<Login />}>
                <Route path="card" element={<Card_C name='Jorge'/>}/>
                <Route path="Listcards" element={<ListCards/>}/>
                <Route path="*" element={<Navigate replace to="/" />}/>
            </Route>
        </Routes>
    )
}
export default Main;
