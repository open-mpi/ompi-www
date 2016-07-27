<?
$subject_val = "Re: [MTT devel] Time to make the 2009 mtt database partitions?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec  1 11:05:50 2008" -->
<!-- isoreceived="20081201160550" -->
<!-- sent="Mon, 1 Dec 2008 11:06:29 -0500" -->
<!-- isosent="20081201160629" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [MTT devel] Time to make the 2009 mtt database partitions?" -->
<!-- id="E79008DA-4AC9-4D2D-88BA-5A3B702442D7_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20081201150714.GC228_at_sun.com" -->
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
<strong>Subject:</strong> Re: [MTT devel] Time to make the 2009 mtt database partitions?<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-01 11:06:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0306.php">Josh Hursey: "Re: [MTT devel] Time to make the 2009 mtt database partitions?"</a>
<li><strong>Previous message:</strong> <a href="0304.php">Ethan Mallove: "[MTT devel] Time to make the 2009 mtt database partitions?"</a>
<li><strong>In reply to:</strong> <a href="0304.php">Ethan Mallove: "[MTT devel] Time to make the 2009 mtt database partitions?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0306.php">Josh Hursey: "Re: [MTT devel] Time to make the 2009 mtt database partitions?"</a>
<li><strong>Reply:</strong> <a href="0306.php">Josh Hursey: "Re: [MTT devel] Time to make the 2009 mtt database partitions?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Good catch. I have a reminder email set to be sent out later this  
<br>
month regarding this so we don't hit the same problem we had last  
<br>
year. But we should probably do it now so we don't forget later.
<br>
<p>There is a script here:
<br>
&nbsp;&nbsp;server/sql/support/create-partitions.sh
<br>
<p>This will generate SQL files for all of the tables and indexes that we  
<br>
need. For 2009 it looks something like (XX is a short-cut for all  
<br>
months):
<br>
./create-partitions-mpi-install.pl 2009 XX &gt;  2009-mpi-install.sql
<br>
./create-partitions-test-build.pl 2009 XX &gt;  2009-test-build.sql
<br>
./create-partitions-test-run.pl 2009 XX &gt;  2009-test-run.sql
<br>
./create-partition-indexes.pl 2009 XX &gt;  2009-indexes.sql
<br>
<p>Then just run the generated SQL scripts into the database to create  
<br>
the tables.
<br>
<p>I can do this today, and send an email when it is done. I'll also add  
<br>
some documentation about this to the Wiki.
<br>
<p>Thanks,
<br>
Josh
<br>
<p>On Dec 1, 2008, at 10:07 AM, Ethan Mallove wrote:
<br>
<p><span class="quotelev1">&gt; Folks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; \dt doesn't show any 2009 tables in the &quot;mtt&quot; Postgres database. Will
</span><br>
<span class="quotelev1">&gt; the following commands (using 0-11) set us up for 2009?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  $ server/sql/support/create-partitions-mpi-install.pl 2009 00
</span><br>
<span class="quotelev1">&gt;  $ server/sql/support/create-partitions-mpi-install.pl 2009 01
</span><br>
<span class="quotelev1">&gt;  $ server/sql/support/create-partitions-mpi-install.pl 2009 02
</span><br>
<span class="quotelev1">&gt;  ...
</span><br>
<span class="quotelev1">&gt;  $ server/sql/support/create-partitions-test-build.pl 2009 00
</span><br>
<span class="quotelev1">&gt;  $ server/sql/support/create-partitions-test-build.pl 2009 01
</span><br>
<span class="quotelev1">&gt;  $ server/sql/support/create-partitions-test-build.pl 2009 02
</span><br>
<span class="quotelev1">&gt;  ...
</span><br>
<span class="quotelev1">&gt;  $ server/sql/support/create-partitions-test-run.pl 2009 00
</span><br>
<span class="quotelev1">&gt;  $ server/sql/support/create-partitions-test-run.pl 2009 01
</span><br>
<span class="quotelev1">&gt;  $ server/sql/support/create-partitions-test-run.pl 2009 02
</span><br>
<span class="quotelev1">&gt;  ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Ethan
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
<li><strong>Next message:</strong> <a href="0306.php">Josh Hursey: "Re: [MTT devel] Time to make the 2009 mtt database partitions?"</a>
<li><strong>Previous message:</strong> <a href="0304.php">Ethan Mallove: "[MTT devel] Time to make the 2009 mtt database partitions?"</a>
<li><strong>In reply to:</strong> <a href="0304.php">Ethan Mallove: "[MTT devel] Time to make the 2009 mtt database partitions?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0306.php">Josh Hursey: "Re: [MTT devel] Time to make the 2009 mtt database partitions?"</a>
<li><strong>Reply:</strong> <a href="0306.php">Josh Hursey: "Re: [MTT devel] Time to make the 2009 mtt database partitions?"</a>
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
