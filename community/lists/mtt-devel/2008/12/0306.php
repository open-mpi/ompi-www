<?
$subject_val = "Re: [MTT devel] Time to make the 2009 mtt database partitions?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec  1 11:51:29 2008" -->
<!-- isoreceived="20081201165129" -->
<!-- sent="Mon, 1 Dec 2008 11:52:09 -0500" -->
<!-- isosent="20081201165209" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [MTT devel] Time to make the 2009 mtt database partitions?" -->
<!-- id="A0A28AA0-0DC4-4E34-A053-4C469ED2AB77_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="E79008DA-4AC9-4D2D-88BA-5A3B702442D7_at_open-mpi.org" -->
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
<strong>Date:</strong> 2008-12-01 11:52:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0307.php">Ethan Mallove: "Re: [MTT devel] Time to make the 2009 mtt database partitions?"</a>
<li><strong>Previous message:</strong> <a href="0305.php">Josh Hursey: "Re: [MTT devel] Time to make the 2009 mtt database partitions?"</a>
<li><strong>In reply to:</strong> <a href="0305.php">Josh Hursey: "Re: [MTT devel] Time to make the 2009 mtt database partitions?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0307.php">Ethan Mallove: "Re: [MTT devel] Time to make the 2009 mtt database partitions?"</a>
<li><strong>Reply:</strong> <a href="0307.php">Ethan Mallove: "Re: [MTT devel] Time to make the 2009 mtt database partitions?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I just created the partitions and updated the scripts so they Grant  
<br>
the proper permissions after creating the tables.
<br>
<p>I also updated the wiki to document how to add these new tables:
<br>
&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/mtt/wiki/">https://svn.open-mpi.org/trac/mtt/wiki/</a> 
<br>
ServerMaintenance#YearlyMaintenance
<br>
<p>So we should be all set for 2009 :)
<br>
<p>Cheers,
<br>
Josh
<br>
<p>On Dec 1, 2008, at 11:06 AM, Josh Hursey wrote:
<br>
<p><span class="quotelev1">&gt; Good catch. I have a reminder email set to be sent out later this  
</span><br>
<span class="quotelev1">&gt; month regarding this so we don't hit the same problem we had last  
</span><br>
<span class="quotelev1">&gt; year. But we should probably do it now so we don't forget later.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There is a script here:
</span><br>
<span class="quotelev1">&gt; server/sql/support/create-partitions.sh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This will generate SQL files for all of the tables and indexes that  
</span><br>
<span class="quotelev1">&gt; we need. For 2009 it looks something like (XX is a short-cut for all  
</span><br>
<span class="quotelev1">&gt; months):
</span><br>
<span class="quotelev1">&gt; ./create-partitions-mpi-install.pl 2009 XX &gt;  2009-mpi-install.sql
</span><br>
<span class="quotelev1">&gt; ./create-partitions-test-build.pl 2009 XX &gt;  2009-test-build.sql
</span><br>
<span class="quotelev1">&gt; ./create-partitions-test-run.pl 2009 XX &gt;  2009-test-run.sql
</span><br>
<span class="quotelev1">&gt; ./create-partition-indexes.pl 2009 XX &gt;  2009-indexes.sql
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Then just run the generated SQL scripts into the database to create  
</span><br>
<span class="quotelev1">&gt; the tables.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can do this today, and send an email when it is done. I'll also  
</span><br>
<span class="quotelev1">&gt; add some documentation about this to the Wiki.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 1, 2008, at 10:07 AM, Ethan Mallove wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Folks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; \dt doesn't show any 2009 tables in the &quot;mtt&quot; Postgres database. Will
</span><br>
<span class="quotelev2">&gt;&gt; the following commands (using 0-11) set us up for 2009?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ server/sql/support/create-partitions-mpi-install.pl 2009 00
</span><br>
<span class="quotelev2">&gt;&gt; $ server/sql/support/create-partitions-mpi-install.pl 2009 01
</span><br>
<span class="quotelev2">&gt;&gt; $ server/sql/support/create-partitions-mpi-install.pl 2009 02
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; $ server/sql/support/create-partitions-test-build.pl 2009 00
</span><br>
<span class="quotelev2">&gt;&gt; $ server/sql/support/create-partitions-test-build.pl 2009 01
</span><br>
<span class="quotelev2">&gt;&gt; $ server/sql/support/create-partitions-test-build.pl 2009 02
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; $ server/sql/support/create-partitions-test-run.pl 2009 00
</span><br>
<span class="quotelev2">&gt;&gt; $ server/sql/support/create-partitions-test-run.pl 2009 01
</span><br>
<span class="quotelev2">&gt;&gt; $ server/sql/support/create-partitions-test-run.pl 2009 02
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Ethan
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; mtt-devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="0307.php">Ethan Mallove: "Re: [MTT devel] Time to make the 2009 mtt database partitions?"</a>
<li><strong>Previous message:</strong> <a href="0305.php">Josh Hursey: "Re: [MTT devel] Time to make the 2009 mtt database partitions?"</a>
<li><strong>In reply to:</strong> <a href="0305.php">Josh Hursey: "Re: [MTT devel] Time to make the 2009 mtt database partitions?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0307.php">Ethan Mallove: "Re: [MTT devel] Time to make the 2009 mtt database partitions?"</a>
<li><strong>Reply:</strong> <a href="0307.php">Ethan Mallove: "Re: [MTT devel] Time to make the 2009 mtt database partitions?"</a>
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
