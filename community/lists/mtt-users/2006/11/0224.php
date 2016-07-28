<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Nov 13 10:27:24 2006" -->
<!-- isoreceived="20061113152724" -->
<!-- sent="Mon, 13 Nov 2006 10:27:16 -0500" -->
<!-- isosent="20061113152716" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT users] Corrupted MTT database or incorrucet query" -->
<!-- id="20061113152715.GF1608_at_sr1-ubur-03.East.Sun.COM" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C835B9C9CB0F1C4E9DA48913C9E8F8AF010D2CD8_at_xmb-rtp-215.amer.cisco.com" -->
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
<strong>Date:</strong> 2006-11-13 10:27:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0225.php">Josh Hursey: "Re: [MTT users] Corrupted MTT database or incorrucet query"</a>
<li><strong>Previous message:</strong> <a href="0223.php">Jeff Squyres \(jsquyres\): "Re: [MTT users] Corrupted MTT database or incorrucet query"</a>
<li><strong>In reply to:</strong> <a href="0223.php">Jeff Squyres \(jsquyres\): "Re: [MTT users] Corrupted MTT database or incorrucet query"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0225.php">Josh Hursey: "Re: [MTT users] Corrupted MTT database or incorrucet query"</a>
<li><strong>Reply:</strong> <a href="0225.php">Josh Hursey: "Re: [MTT users] Corrupted MTT database or incorrucet query"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I can infer that you have an MPI Install section labeled
<br>
&quot;odin 64 bit gcc&quot;. A few questions:
<br>
<p>* What is the mpi_get for that section (or how does that
<br>
&nbsp;&nbsp;parameter get filled in by your automated scripts)?  
<br>
* Do you start with a fresh scratch tree every run?
<br>
* Could you email me your scratch/installs/mpi_installs.xml
<br>
&nbsp;&nbsp;files?
<br>
<p>I checked on how widespread this issue is, and found that
<br>
18,700 out of 474,000 Test Run rows in the past month have a
<br>
mpi_version/command (v1.2-trunk) mismatch. Occuring in both
<br>
directions (version=1.2, command=trunk and vice versa).
<br>
They occur on these clusters:
<br>
<p>&nbsp;Cisco MPI development cluster
<br>
&nbsp;IU Odin
<br>
&nbsp;IU - Thor - TESTING
<br>
<p>There *is* that race condition in which one mtt submitting
<br>
could overwrite another's index. Do you have &quot;trunk&quot; and
<br>
&quot;1.2&quot; runs submitting to the database at the same time?
<br>
<p><p>On Sun, Nov/12/2006 06:04:17PM, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    I feel somewhat better now.  Ethan - can you fix?
</span><br>
<span class="quotelev1">&gt;     -----Original Message-----
</span><br>
<span class="quotelev1">&gt;    From:   Tim Mattox [[1]mailto:timattox_at_[hidden]]
</span><br>
<span class="quotelev1">&gt;    Sent:   Sunday, November 12, 2006 05:34 PM Eastern Standard Time
</span><br>
<span class="quotelev1">&gt;    To:     General user list for the MPI Testing Tool
</span><br>
<span class="quotelev1">&gt;    Subject:        [MTT users] Corrupted MTT database or incorrucet query
</span><br>
<span class="quotelev1">&gt;    Hello,
</span><br>
<span class="quotelev1">&gt;    I just noticed that the MTT summary page is presenting
</span><br>
<span class="quotelev1">&gt;    incorrect information for our recent runs at IU.  It is
</span><br>
<span class="quotelev1">&gt;    showing failures for the 1.2b1 that actaully came from
</span><br>
<span class="quotelev1">&gt;    the trunk!  See the first entry in this table:
</span><br>
<span class="quotelev1">&gt;    <a href="http://www.open-mpi.org/mtt/reporter.php?&amp;maf_start_test_timestamp=200">http://www.open-mpi.org/mtt/reporter.php?&amp;maf_start_test_timestamp=200</a>
</span><br>
<span class="quotelev1">&gt;    6-11-12%2019:12:02%20through%202006-11-12%2022:12:02&amp;ft_platform_id=co
</span><br>
<span class="quotelev1">&gt;    ntains&amp;tf_platform_id=IU&amp;maf_phase=runs&amp;maf_success=fail&amp;by_atom=*by_t
</span><br>
<span class="quotelev1">&gt;    est_case&amp;go=Table&amp;maf_agg_timestamp=-&amp;mef_mpi_name=All&amp;mef_mpi_version
</span><br>
<span class="quotelev1">&gt;    =All&amp;mef_os_name=All&amp;mef_os_version=All&amp;mef_platform_hardware=All&amp;mef_
</span><br>
<span class="quotelev1">&gt;    platform_id=All&amp;agg_platform_id=off&amp;1-page=off&amp;no_bookmarks&amp;no_bookmar
</span><br>
<span class="quotelev1">&gt;    ks
</span><br>
<span class="quotelev1">&gt;    Click on the [i] in the upper right (the first entry)
</span><br>
<span class="quotelev1">&gt;    to get the popup window which shows the MPIRrun cmd as:
</span><br>
<span class="quotelev1">&gt;    mpirun -mca btl tcp,sm,self -np 6 --prefix
</span><br>
<span class="quotelev1">&gt;    /san/homedirs/mpiteam/mtt-runs/odin/20061112-Testing-NOCLN/parallel-bl
</span><br>
<span class="quotelev1">&gt;    ock-3/installs/ompi-nightly-trunk/odin_64_bit_gcc/1.3a1r12559/install
</span><br>
<span class="quotelev1">&gt;    dynamic/spawn Note the path has &quot;1.3a1r12559&quot; in the
</span><br>
<span class="quotelev1">&gt;    name... it's a run from the trunk, yet the table showed
</span><br>
<span class="quotelev1">&gt;    this as a 1.2b1 run.  There are several of these
</span><br>
<span class="quotelev1">&gt;    missattributed errors.  This would explain why Jeff saw
</span><br>
<span class="quotelev1">&gt;    some ddt errors on the 1.2 brach yesterday, but was
</span><br>
<span class="quotelev1">&gt;    unable to reproduce them.  They were from the trunk!
</span><br>
<span class="quotelev1">&gt;    --
</span><br>
<span class="quotelev1">&gt;    Tim Mattox - [2]<a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
</span><br>
<span class="quotelev1">&gt;     tmattox_at_[hidden] || timattox_at_[hidden]
</span><br>
<span class="quotelev1">&gt;        I'm a bright... [3]<a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
</span><br>
<span class="quotelev1">&gt;    _______________________________________________
</span><br>
<span class="quotelev1">&gt;    mtt-users mailing list
</span><br>
<span class="quotelev1">&gt;    mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;    [4]<a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; References
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    1. mailto:timattox_at_[hidden]
</span><br>
<span class="quotelev1">&gt;    2. <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
</span><br>
<span class="quotelev1">&gt;    3. <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
</span><br>
<span class="quotelev1">&gt;    4. <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<p><p><pre>
-- 
-Ethan
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0225.php">Josh Hursey: "Re: [MTT users] Corrupted MTT database or incorrucet query"</a>
<li><strong>Previous message:</strong> <a href="0223.php">Jeff Squyres \(jsquyres\): "Re: [MTT users] Corrupted MTT database or incorrucet query"</a>
<li><strong>In reply to:</strong> <a href="0223.php">Jeff Squyres \(jsquyres\): "Re: [MTT users] Corrupted MTT database or incorrucet query"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0225.php">Josh Hursey: "Re: [MTT users] Corrupted MTT database or incorrucet query"</a>
<li><strong>Reply:</strong> <a href="0225.php">Josh Hursey: "Re: [MTT users] Corrupted MTT database or incorrucet query"</a>
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
