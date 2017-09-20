import React from 'react';
import ReactDom from 'react-dom';
import {HashRouter, Router, Route, Switch} from 'react-router-dom'

import RegionsTable from './components/RegionsTable';
import ClubsTable from './components/ClubsTable';

ReactDom.render(
    <HashRouter>
        <Switch>
            <Route exact path='/' component={RegionsTable}/>
            <Route path='/clubs/:region/:name' component={ClubsTable}/>
        </Switch>
    </HashRouter>,
    document.getElementById('root')
);