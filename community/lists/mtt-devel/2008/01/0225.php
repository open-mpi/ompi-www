<?
$subject_val = "Re: [MTT devel] Database Notice";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 30 11:04:58 2008" -->
<!-- isoreceived="20080130160458" -->
<!-- sent="Wed, 30 Jan 2008 11:04:54 -0500" -->
<!-- isosent="20080130160454" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [MTT devel] Database Notice" -->
<!-- id="110F50D5-6B69-421C-8087-E5C12E7CA8DE_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20080109212753.GP17034_at_sun.com" -->
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
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-30 11:04:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0226.php">Josh Hursey: "[MTT devel] Reporter Slowness"</a>
<li><strong>Previous message:</strong> <a href="0224.php">Ethan Mallove: "[MTT devel] Crazy SkaMPI graph rendering"</a>
<li><strong>In reply to:</strong> <a href="0211.php">Ethan Mallove: "Re: [MTT devel] Database Notice"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The data misplacement is now fixed.
<br>
<p>Over the past 2 days I have been moving the data that was accidentally  
<br>
put in the master partition tables into their correct date partition  
<br>
tables. I still need to clean up test_run, but I am pushing that to  
<br>
this weekend since it will slow down the database for a few hours to  
<br>
do so.
<br>
<p>-- Josh
<br>
<p>On Jan 9, 2008, at 4:27 PM, Ethan Mallove wrote:
<br>
<p><span class="quotelev1">&gt; &quot;pg_dump -s&quot; seems to show that we are set until 2009?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (Just put a note in my calendar about this for late December 2008 :-))
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Jan/09/2008 04:07:01PM, Josh Hursey wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I was showing MTT to someone today and noticed that it was  
</span><br>
<span class="quotelev2">&gt;&gt; performing  a
</span><br>
<span class="quotelev2">&gt;&gt; bit slower than it should. After taking a look under the hood I
</span><br>
<span class="quotelev2">&gt;&gt; discovered that we were missing  the 2008 partition tables. :(
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'll keep you posted on this. Let me know if you have any problems in
</span><br>
<span class="quotelev2">&gt;&gt; the mean time.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- Josh
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Short Version:
</span><br>
<span class="quotelev2">&gt;&gt; --------------
</span><br>
<span class="quotelev2">&gt;&gt; We did not lose any data. The accumulated data was just put in a non-
</span><br>
<span class="quotelev2">&gt;&gt; optimal table, thus making queries slow. I added the 2008 partition
</span><br>
<span class="quotelev2">&gt;&gt; tables, and things should be back to normal. All new data will be
</span><br>
<span class="quotelev2">&gt;&gt; added correctly to the partition tables per usual.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; There will be a lingering slowdown if anyone queries for results from
</span><br>
<span class="quotelev2">&gt;&gt; Jan 1, 2008 00:00 to ~Jan 9, 2008 15:15. I'm trying to fix this at  
</span><br>
<span class="quotelev2">&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt; moment (see Long Version).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Long Version:
</span><br>
<span class="quotelev2">&gt;&gt; -------------
</span><br>
<span class="quotelev2">&gt;&gt; I totally forgot to upload the new tables to the database. Sorry  
</span><br>
<span class="quotelev2">&gt;&gt; guys :(
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; All the data accumulated from the first of the year was put in the
</span><br>
<span class="quotelev2">&gt;&gt; main table for mpi_install/test_build/test_run instead of in their
</span><br>
<span class="quotelev2">&gt;&gt; respective date partitioned tables. This means that when someone
</span><br>
<span class="quotelev2">&gt;&gt; searches for something in the date range Jan 1, 2008 00:00 to ~Jan 9,
</span><br>
<span class="quotelev2">&gt;&gt; 2008 15:15 the database is going to do a bit of thrashing since the
</span><br>
<span class="quotelev2">&gt;&gt; optimizer is going to try to look to the partition table first then
</span><br>
<span class="quotelev2">&gt;&gt; failing that it will look at *all* the tables including the root
</span><br>
<span class="quotelev2">&gt;&gt; table. Luckily the optimizer seems to start with the root table so it
</span><br>
<span class="quotelev2">&gt;&gt; is not as bad as it could be, but still slower than it should be. :/
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Currently this effects:
</span><br>
<span class="quotelev2">&gt;&gt;  mpi_install:       434 tuples
</span><br>
<span class="quotelev2">&gt;&gt;  test_build :     2,174 tuples
</span><br>
<span class="quotelev2">&gt;&gt;  test_run   : 1,077,117 tuples
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I think I can fix this but I want to experiment a bit before
</span><br>
<span class="quotelev2">&gt;&gt; manipulating real data. I think I can create a transaction that does
</span><br>
<span class="quotelev2">&gt;&gt; something like:
</span><br>
<span class="quotelev2">&gt;&gt; Start Transaction
</span><br>
<span class="quotelev2">&gt;&gt; Drop check constraints on test_run
</span><br>
<span class="quotelev2">&gt;&gt; Save effected tuples to disk
</span><br>
<span class="quotelev2">&gt;&gt; Drop effected tuples from test_run
</span><br>
<span class="quotelev2">&gt;&gt; Add back effected tuples to test_run (inserting into partition  
</span><br>
<span class="quotelev2">&gt;&gt; tables)
</span><br>
<span class="quotelev2">&gt;&gt; Add back check constraints
</span><br>
<span class="quotelev2">&gt;&gt; .. do the same for test_build, and mpi_install
</span><br>
<span class="quotelev2">&gt;&gt; End Transaction
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So you need to copy the data out of the root table into  
</span><br>
<span class="quotelev1">&gt; *_y2008_m01_wk1?
</span><br>
<span class="quotelev1">&gt; Something like the below does not work because it might collide with
</span><br>
<span class="quotelev1">&gt; someone trying to INSERT into this week's partition table?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  SELECT * FROM mpi_install INTO mpi_install_y2008_m01_wk1;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Could another option would be to turn off submit.php for
</span><br>
<span class="quotelev1">&gt; a few minutes and do the above SELECT INTO?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Ethan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Note for Josh: start_timestamp &gt;= DATE '2008-01-01' and
</span><br>
<span class="quotelev2">&gt;&gt; start_timestamp &lt; TIMESTAMP '2008-01-09 03:11'
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; mtt-devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
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
<li><strong>Next message:</strong> <a href="0226.php">Josh Hursey: "[MTT devel] Reporter Slowness"</a>
<li><strong>Previous message:</strong> <a href="0224.php">Ethan Mallove: "[MTT devel] Crazy SkaMPI graph rendering"</a>
<li><strong>In reply to:</strong> <a href="0211.php">Ethan Mallove: "Re: [MTT devel] Database Notice"</a>
<!-- nextthread="start" -->
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
