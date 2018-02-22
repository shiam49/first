<?php
interface IConnectInfo { 
const HOST='localhost';
const USERNAME='root';
const DBNAME='registrationbd';
const PW='';

function OpenDb();
function CloseDb();

}
