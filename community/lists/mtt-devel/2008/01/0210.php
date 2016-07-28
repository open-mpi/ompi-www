<?
$subject_val = "[MTT devel] Database Notice";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan  9 16:07:06 2008" -->
<!-- isoreceived="20080109210706" -->
<!-- sent="Wed, 9 Jan 2008 16:07:01 -0500" -->
<!-- isosent="20080109210701" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="[MTT devel] Database Notice" -->
<!-- id="B8F166C4-37C6-46D8-9AAD-32EE10D02D72_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- expires="-1" -->
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<p class="headers">
<strong>Subject:</strong> [MTT devel] Database Notice<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-09 16:07:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0211.php">Ethan Mallove: "Re: [MTT devel] Database Notice"</a>
<li><strong>Previous message:</strong> <a href="0209.php">Jeff Squyres: "Re: [MTT devel] [OMPI devel] Cisco MTT runs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0211.php">Ethan Mallove: "Re: [MTT devel] Database Notice"</a>
<li><strong>Reply:</strong> <a href="0211.php">Ethan Mallove: "Re: [MTT devel] Database Notice"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I was showing MTT to someone today and noticed that it was performing  
<br>
a bit slower than it should.
<br>
After taking a look under the hood I discovered that we were missing  
<br>
the 2008 partition tables. :(
<br>
<p>I'll keep you posted on this. Let me know if you have any problems in  
<br>
the mean time.
<br>
<p>-- Josh
<br>
<p>Short Version:
<br>
--------------
<br>
We did not lose any data. The accumulated data was just put in a non- 
<br>
optimal table, thus making queries slow. I added the 2008 partition  
<br>
tables, and things should be back to normal. All new data will be  
<br>
added correctly to the partition tables per usual.
<br>
<p>There will be a lingering slowdown if anyone queries for results from  
<br>
Jan 1, 2008 00:00 to ~Jan 9, 2008 15:15. I'm trying to fix this at the  
<br>
moment (see Long Version).
<br>
<p>Long Version:
<br>
-------------
<br>
I totally forgot to upload the new tables to the database. Sorry guys :(
<br>
<p>All the data accumulated from the first of the year was put in the  
<br>
main table for mpi_install/test_build/test_run instead of in their  
<br>
respective date partitioned tables. This means that when someone  
<br>
searches for something in the date range Jan 1, 2008 00:00 to ~Jan 9,  
<br>
2008 15:15 the database is going to do a bit of thrashing since the  
<br>
optimizer is going to try to look to the partition table first then  
<br>
failing that it will look at *all* the tables including the root  
<br>
table. Luckily the optimizer seems to start with the root table so it  
<br>
is not as bad as it could be, but still slower than it should be. :/
<br>
<p>Currently this effects:
<br>
&nbsp;&nbsp;mpi_install:       434 tuples
<br>
&nbsp;&nbsp;test_build :     2,174 tuples
<br>
&nbsp;&nbsp;test_run   : 1,077,117 tuples
<br>
<p>I think I can fix this but I want to experiment a bit before  
<br>
manipulating real data. I think I can create a transaction that does  
<br>
something like:
<br>
Start Transaction
<br>
Drop check constraints on test_run
<br>
Save effected tuples to disk
<br>
Drop effected tuples from test_run
<br>
Add back effected tuples to test_run (inserting into partition tables)
<br>
Add back check constraints
<br>
.. do the same for test_build, and mpi_install
<br>
End Transaction
<br>
<p><p>Note for Josh: start_timestamp &gt;= DATE '2008-01-01' and  
<br>
start_timestamp &lt; TIMESTAMP '2008-01-09 03:11'
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0211.php">Ethan Mallove: "Re: [MTT devel] Database Notice"</a>
<li><strong>Previous message:</strong> <a href="0209.php">Jeff Squyres: "Re: [MTT devel] [OMPI devel] Cisco MTT runs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0211.php">Ethan Mallove: "Re: [MTT devel] Database Notice"</a>
<li><strong>Reply:</strong> <a href="0211.php">Ethan Mallove: "Re: [MTT devel] Database Notice"</a>
<!-- reply="end" -->
</ul>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<!-- trailer="footer" -->
<? include("../../include/msg-footer.inc") ?>
