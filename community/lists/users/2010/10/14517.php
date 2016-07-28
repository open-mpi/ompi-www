<?
$subject_val = "Re: [OMPI users] OpenMPI 1.4.2 with Myrinet MX, mpirun seg faults";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 20 21:39:07 2010" -->
<!-- isoreceived="20101021013907" -->
<!-- sent="Wed, 20 Oct 2010 20:38:56 -0500" -->
<!-- isosent="20101021013856" -->
<!-- name="Raymond Muno" -->
<!-- email="muno_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.4.2 with Myrinet MX, mpirun seg faults" -->
<!-- id="4CBF99B0.8040601_at_aem.umn.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="6592652A-DE08-462D-B372-28C030191BEA_at_myri.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI 1.4.2 with Myrinet MX, mpirun seg faults<br>
<strong>From:</strong> Raymond Muno (<em>muno_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-20 21:38:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14518.php">Raymond Muno: "Re: [OMPI users] OpenMPI 1.4.2 with Myrinet MX, mpirun seg faults"</a>
<li><strong>Previous message:</strong> <a href="14516.php">Scott Atchley: "Re: [OMPI users] OpenMPI 1.4.2 with Myrinet MX, mpirun seg faults"</a>
<li><strong>In reply to:</strong> <a href="14516.php">Scott Atchley: "Re: [OMPI users] OpenMPI 1.4.2 with Myrinet MX, mpirun seg faults"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14518.php">Raymond Muno: "Re: [OMPI users] OpenMPI 1.4.2 with Myrinet MX, mpirun seg faults"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;&nbsp;On 10/20/2010 8:30 PM, Scott Atchley wrote:
<br>
<span class="quotelev1">&gt; On Oct 20, 2010, at 9:22 PM, Raymond Muno wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 10/20/2010 7:59 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The error message seems to imply that mpirun itself didn't segfault, but that something else did. Is that segfault pid from mpirun?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This kind of problem usually is caused by mismatched builds - i.e., you compile against your new build, but you pick up the Myrinet build when you try to run because of path and ld_library_path issues. You might check to ensure you are running against what you built with.
</span><br>
<span class="quotelev2">&gt;&gt; The PATH and LD_LIBRARY_PATH are set explicitly (through modules) on the frontend and each node.  The PGI compiler and the OpenMPI I am trying to run is set for each.
</span><br>
<span class="quotelev2">&gt;&gt; &lt;snip&gt;
</span><br>
<span class="quotelev1">&gt; Are you building OMPI with support for both MX and IB? If not and you only want MX support, try configuring OMPI using --disable-memory-manager (check configure for the exact option).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We have fixed this bug in the most recent 1.4.x and 1.5.x releases.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Scott
</span><br>
<span class="quotelev1">&gt;
</span><br>
I just downloaded 1.4.3 and compiled it with PGI 10.4.   I get the same 
<br>
result.
<br>
<p>I did confirm that the process ID shown is that of mpirun.
<br>
<p>This cluster only has Myrinet.  The install is separate from the IB 
<br>
cluster and a fresh build.   I will try the configure option.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14518.php">Raymond Muno: "Re: [OMPI users] OpenMPI 1.4.2 with Myrinet MX, mpirun seg faults"</a>
<li><strong>Previous message:</strong> <a href="14516.php">Scott Atchley: "Re: [OMPI users] OpenMPI 1.4.2 with Myrinet MX, mpirun seg faults"</a>
<li><strong>In reply to:</strong> <a href="14516.php">Scott Atchley: "Re: [OMPI users] OpenMPI 1.4.2 with Myrinet MX, mpirun seg faults"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14518.php">Raymond Muno: "Re: [OMPI users] OpenMPI 1.4.2 with Myrinet MX, mpirun seg faults"</a>
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
