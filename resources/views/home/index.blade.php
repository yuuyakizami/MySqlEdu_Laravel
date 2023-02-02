@extends('layout.app')

@section('title', "Home Page")

@section('content')
<div class="container bg-light">
@include('layout.carousel')
<div class="container-fluid p-5 mt-3 bg-primary text-white text-center">
  <h1>My Sql Edu</h1>
  <p>Resize this responsive page to see the effect!</p>
</div>
<div class="container mt-5">
  <div class="row">
    <div class="col-sm-4">
      <h3>Learn MySql</h3>
      <p>MySQL is an open-source relational database management system, Its name is a combination of "My", the name of co-founder Michael Widenius's daughter My,[7] and "SQL", the acronym for Structured Query Language. A relational database organizes data into one or more data tables in which data may be related to each other; these relations help structure the data. SQL is a language programmers use to create, modify and extract data from the relational database, as well as control user access to the database. In addition to relational databases and SQL, an RDBMS like MySQL works with an operating system to implement a relational database in a computer's storage system, manages users, allows for network access and facilitates testing database integrity and creation of backups.</p>
      <p>MySQL is free and open-source software under the terms of the GNU General Public License, and is also available under a variety of proprietary licenses. MySQL was owned and sponsored by the Swedish company MySQL AB, which was bought by Sun Microsystems (now Oracle Corporation). In 2010, when Oracle acquired Sun, Widenius forked the open-source MySQL project to create MariaDB.</p>
    </div>
    <div class="col-sm-4">
      <h3>The History of MySql</h3>
      <p>MySQL was created by a Swedish company, MySQL AB, founded by Swedes David Axmark, Allan Larsson and Finland Swede Michael "Monty" Widenius. Original development of MySQL by Widenius and Axmark began in 1994.[22] The first version of MySQL appeared on 23 May 1995. It was initially created for personal usage from mSQL based on the low-level language ISAM, which the creators considered too slow and inflexible. They created a new SQL interface, while keeping the same API as mSQL. By keeping the API consistent with the mSQL system, many developers were able to use MySQL instead of the (proprietarily licensed) mSQL antecedent.[23]</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
    <div class="col-sm-4">
      <h3>Main Features of MySql</h3>
      <ul>
        <li>Cross-platform support</li>
        <li>Unicode support</li>
        <li>Full-text indexing and searching</li>
        <li>Query caching</li>
        <li>SSL support</li>
        <li>And Many more....</li>
      </ul>
      <a class="text-wrap" href="{{ route('tutorial.index')}}"><h2>So what are waiting for Learn MySql now!</h2></a>
    </div>
  </div>
</div>
</div>
@endsection
@section('footer')
<div class="mx-auto justify-content-center"><h1>Mysql Edu</h1></div>
@endsection