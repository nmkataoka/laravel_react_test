/**
 * Created by aksha on 2/25/2018.
 */
import React from 'react'
import { Switch, Route } from 'react-router-dom'
import Labs from './Labs'
import Faculties from './Faculties'
import Example from './Example'
import Students from './Students'
import Register from './Register'
import Users from './Users'
import Home from './Home'
import Login from './Login'
import PositionTest from './PositionTest'

const Main = () => (
    <main>
        <Switch>
            <Route exact path='/' component={Home}/>
            <Route path='/example' component={Example}/>
            <Route path='/users' component={Users}/>
            <Route path='/students' component={Students}/>
            <Route path='/faculties' component={Faculties}/>
            <Route path='/labs' component={Labs}/>
            <Route path='/positions' component={PositionTest}/>
            <Route path='/register' component={Register}/>
            <Route path='/login' component={Login}/>
        </Switch>
    </main>
);

export default Main
