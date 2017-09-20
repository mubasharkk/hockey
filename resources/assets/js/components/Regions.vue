<template id="regions">
    <div class='row'>
        <h4>All Regions  ({{current}})</h4>
        <table class="table">
            <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
            </tr>
            </thead>
            <tbody>
            <tr class="" v-for="(item, index) in list">
                <td>{{item.id}}</td>
                <td>{{item.name}}</td>
            </tr>
            </tbody>
        </table>
    </div>
</template>