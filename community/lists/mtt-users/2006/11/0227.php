<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Nov 16 12:58:37 2006" -->
<!-- isoreceived="20061116175837" -->
<!-- sent="Thu, 16 Nov 2006 12:58:30 -0500" -->
<!-- isosent="20061116175830" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT users] Corrupted MTT database or incorrucet query" -->
<!-- id="20061116175829.GL1608_at_sr1-ubur-03.East.Sun.COM" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="ea86ce220611121434w134102cdu4aa35a5a8e12315_at_mail.gmail.com" -->
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
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-16 12:58:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0228.php">Jeff Squyres: "[MTT users] Updates to ini files"</a>
<li><strong>Previous message:</strong> <a href="0226.php">Ethan Mallove: "Re: [MTT users] Corrupted MTT database or incorrucet query"</a>
<li><strong>In reply to:</strong> <a href="0222.php">Tim Mattox: "[MTT users] Corrupted MTT database or incorrucet query"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Folks,
<br>
<p>I've done a few things to address the mismatched
<br>
configuration/results that Tim originally reported. That is,
<br>
I cleaned out the corrupted records, removed a race
<br>
condition, and made mtt print out SQL errors. As I have not
<br>
had success reproducing the issue on my own, I would greatly
<br>
appreciate it if you could forward me (and/or the list) any
<br>
output from the client that you see which looks something
<br>
like this:
<br>
<p>*** WARNING:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;############################################################
<br>
&nbsp;&nbsp;&nbsp;&nbsp;#
<br>
&nbsp;&nbsp;&nbsp;&nbsp;# 1 MTTDatabase server error
<br>
&nbsp;&nbsp;&nbsp;&nbsp;# The data that failed to submit is in *.txt
<br>
&nbsp;&nbsp;&nbsp;&nbsp;# See the above output for more info.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;#
<br>
&nbsp;&nbsp;&nbsp;&nbsp;############################################################
<br>
<p><pre>
--
-Ethan
On Sun, Nov/12/2006 05:34:23PM, Tim Mattox wrote:
&gt; Hello,
&gt; I just noticed that the MTT summary page is presenting
&gt; incorrect information for our recent runs at IU.  It is
&gt; showing failures for the 1.2b1 that actaully came from the
&gt; trunk!  See the first entry in this table:
&gt; <a href="http://www.open-mpi.org/mtt/reporter.php?&amp;maf_start_test_timestamp=2006-11-12%2019:12:02%20through%202006-11-12%2022:12:02&amp;ft_platform_id=contains&amp;tf_platform_id=IU&amp;maf_phase=runs&amp;maf_success=fail&amp;by_atom=*by_test_case&amp;go=Table&amp;maf_agg_timestamp=-&amp;mef_mpi_name=A">http://www.open-mpi.org/mtt/reporter.php?&amp;maf_start_test_timestamp=2006-11-12%2019:12:02%20through%202006-11-12%2022:12:02&amp;ft_platform_id=contains&amp;tf_platform_id=IU&amp;maf_phase=runs&amp;maf_success=fail&amp;by_atom=*by_test_case&amp;go=Table&amp;maf_agg_timestamp=-&amp;mef_mpi_name=A</a>ll&amp;mef_mpi_version=All&amp;mef_os_name=All&amp;mef_os_version=All&amp;mef_platform_hardware=All&amp;mef_platform_id=All&amp;agg_platform_id=off&amp;1-page=off&amp;no_bookmarks&amp;no_bookmarks
&gt; 
&gt; Click on the [i] in the upper right (the first entry) to get the popup
&gt; window which shows the MPIRrun cmd as:
&gt; 
&gt; mpirun -mca btl tcp,sm,self -np 6 --prefix
&gt; /san/homedirs/mpiteam/mtt-runs/odin/20061112-Testing-NOCLN/parallel-block-3/installs/ompi-nightly-trunk/odin_64_bit_gcc/1.3a1r12559/install
&gt; dynamic/spawn
&gt; 
&gt; Note the path has &quot;1.3a1r12559&quot; in the name... it's a run
&gt; from the trunk, yet the table showed this as a 1.2b1 run.
&gt; 
&gt; There are several of these missattributed errors.
&gt; 
&gt; This would explain why Jeff saw some ddt errors on the 1.2
&gt; brach yesterday, but was unable to reproduce them.  They
&gt; were from the trunk!
&gt; -- 
&gt; Tim Mattox - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
&gt;  tmattox_at_[hidden] || timattox_at_[hidden]
&gt;     I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
&gt; _______________________________________________
&gt; mtt-users mailing list
&gt; mtt-users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
-- 
-Ethan
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0228.php">Jeff Squyres: "[MTT users] Updates to ini files"</a>
<li><strong>Previous message:</strong> <a href="0226.php">Ethan Mallove: "Re: [MTT users] Corrupted MTT database or incorrucet query"</a>
<li><strong>In reply to:</strong> <a href="0222.php">Tim Mattox: "[MTT users] Corrupted MTT database or incorrucet query"</a>
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
