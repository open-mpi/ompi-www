<?
$subject_val = "Re: [MTT devel] Database Notice";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan  9 16:27:58 2008" -->
<!-- isoreceived="20080109212758" -->
<!-- sent="Wed, 9 Jan 2008 16:27:53 -0500" -->
<!-- isosent="20080109212753" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT devel] Database Notice" -->
<!-- id="20080109212753.GP17034_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="B8F166C4-37C6-46D8-9AAD-32EE10D02D72_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [MTT devel] Database Notice<br>
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-09 16:27:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0212.php">Josh Hursey: "[MTT devel] MTT Visualization"</a>
<li><strong>Previous message:</strong> <a href="0210.php">Josh Hursey: "[MTT devel] Database Notice"</a>
<li><strong>In reply to:</strong> <a href="0210.php">Josh Hursey: "[MTT devel] Database Notice"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0225.php">Josh Hursey: "Re: [MTT devel] Database Notice"</a>
<li><strong>Reply:</strong> <a href="0225.php">Josh Hursey: "Re: [MTT devel] Database Notice"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&quot;pg_dump -s&quot; seems to show that we are set until 2009?
<br>
<p>(Just put a note in my calendar about this for late December 2008 :-))
<br>
<p>On Wed, Jan/09/2008 04:07:01PM, Josh Hursey wrote:
<br>
<span class="quotelev1">&gt; I was showing MTT to someone today and noticed that it was performing  a
</span><br>
<span class="quotelev1">&gt; bit slower than it should. After taking a look under the hood I
</span><br>
<span class="quotelev1">&gt; discovered that we were missing  the 2008 partition tables. :(
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'll keep you posted on this. Let me know if you have any problems in  
</span><br>
<span class="quotelev1">&gt; the mean time.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- Josh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Short Version:
</span><br>
<span class="quotelev1">&gt; --------------
</span><br>
<span class="quotelev1">&gt; We did not lose any data. The accumulated data was just put in a non- 
</span><br>
<span class="quotelev1">&gt; optimal table, thus making queries slow. I added the 2008 partition  
</span><br>
<span class="quotelev1">&gt; tables, and things should be back to normal. All new data will be  
</span><br>
<span class="quotelev1">&gt; added correctly to the partition tables per usual.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There will be a lingering slowdown if anyone queries for results from  
</span><br>
<span class="quotelev1">&gt; Jan 1, 2008 00:00 to ~Jan 9, 2008 15:15. I'm trying to fix this at the  
</span><br>
<span class="quotelev1">&gt; moment (see Long Version).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Long Version:
</span><br>
<span class="quotelev1">&gt; -------------
</span><br>
<span class="quotelev1">&gt; I totally forgot to upload the new tables to the database. Sorry guys :(
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; All the data accumulated from the first of the year was put in the  
</span><br>
<span class="quotelev1">&gt; main table for mpi_install/test_build/test_run instead of in their  
</span><br>
<span class="quotelev1">&gt; respective date partitioned tables. This means that when someone  
</span><br>
<span class="quotelev1">&gt; searches for something in the date range Jan 1, 2008 00:00 to ~Jan 9,  
</span><br>
<span class="quotelev1">&gt; 2008 15:15 the database is going to do a bit of thrashing since the  
</span><br>
<span class="quotelev1">&gt; optimizer is going to try to look to the partition table first then  
</span><br>
<span class="quotelev1">&gt; failing that it will look at *all* the tables including the root  
</span><br>
<span class="quotelev1">&gt; table. Luckily the optimizer seems to start with the root table so it  
</span><br>
<span class="quotelev1">&gt; is not as bad as it could be, but still slower than it should be. :/
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Currently this effects:
</span><br>
<span class="quotelev1">&gt;   mpi_install:       434 tuples
</span><br>
<span class="quotelev1">&gt;   test_build :     2,174 tuples
</span><br>
<span class="quotelev1">&gt;   test_run   : 1,077,117 tuples
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think I can fix this but I want to experiment a bit before  
</span><br>
<span class="quotelev1">&gt; manipulating real data. I think I can create a transaction that does  
</span><br>
<span class="quotelev1">&gt; something like:
</span><br>
<span class="quotelev1">&gt; Start Transaction
</span><br>
<span class="quotelev1">&gt; Drop check constraints on test_run
</span><br>
<span class="quotelev1">&gt; Save effected tuples to disk
</span><br>
<span class="quotelev1">&gt; Drop effected tuples from test_run
</span><br>
<span class="quotelev1">&gt; Add back effected tuples to test_run (inserting into partition tables)
</span><br>
<span class="quotelev1">&gt; Add back check constraints
</span><br>
<span class="quotelev1">&gt; .. do the same for test_build, and mpi_install
</span><br>
<span class="quotelev1">&gt; End Transaction
</span><br>
<p>So you need to copy the data out of the root table into *_y2008_m01_wk1?
<br>
Something like the below does not work because it might collide with
<br>
someone trying to INSERT into this week's partition table?
<br>
<p>&nbsp;&nbsp;SELECT * FROM mpi_install INTO mpi_install_y2008_m01_wk1;
<br>
<p>Could another option would be to turn off submit.php for 
<br>
a few minutes and do the above SELECT INTO?
<br>
<p>-Ethan
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Note for Josh: start_timestamp &gt;= DATE '2008-01-01' and  
</span><br>
<span class="quotelev1">&gt; start_timestamp &lt; TIMESTAMP '2008-01-09 03:11'
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-devel mailing list
</span><br>
<span class="quotelev1">&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0212.php">Josh Hursey: "[MTT devel] MTT Visualization"</a>
<li><strong>Previous message:</strong> <a href="0210.php">Josh Hursey: "[MTT devel] Database Notice"</a>
<li><strong>In reply to:</strong> <a href="0210.php">Josh Hursey: "[MTT devel] Database Notice"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0225.php">Josh Hursey: "Re: [MTT devel] Database Notice"</a>
<li><strong>Reply:</strong> <a href="0225.php">Josh Hursey: "Re: [MTT devel] Database Notice"</a>
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
