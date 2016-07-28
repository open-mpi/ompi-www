<?
$subject_val = "Re: [OMPI users] Latest Intel Compilers (ICS, version 12.1.0.233 Build 20110811) issues ...";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 31 03:38:12 2012" -->
<!-- isoreceived="20120131083812" -->
<!-- sent="Tue, 31 Jan 2012 09:38:08 +0100" -->
<!-- isosent="20120131083808" -->
<!-- name="G&#246;tz Waschk" -->
<!-- email="goetz.waschk_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Latest Intel Compilers (ICS, version 12.1.0.233 Build 20110811) issues ..." -->
<!-- id="CACd6u-pzFV2d2AHUwiA6A-kUemrrcMeb+Xq+nGBV2=Syo=BLkw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="762096C11C5A044A9D92961C2E1A7CE8192A7A17_at_MBOX1.FLAS.CSI.CUNY.EDU" -->
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
<strong>Subject:</strong> Re: [OMPI users] Latest Intel Compilers (ICS, version 12.1.0.233 Build 20110811) issues ...<br>
<strong>From:</strong> G&#246;tz Waschk (<em>goetz.waschk_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-31 03:38:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18328.php">Gabriele Fatigati: "Re: [OMPI users] MPI_AllGather null terminator character"</a>
<li><strong>Previous message:</strong> <a href="18326.php">Rayson Ho: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<li><strong>In reply to:</strong> <a href="18316.php">Richard Walsh: "Re: [OMPI users] Latest Intel Compilers (ICS, version 12.1.0.233 Build 20110811) issues ..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18340.php">Richard Walsh: "Re: [OMPI users] Latest Intel Compilers (ICS, version 12.1.0.233 Build 20110811) issues ..."</a>
<li><strong>Reply:</strong> <a href="18340.php">Richard Walsh: "Re: [OMPI users] Latest Intel Compilers (ICS, version 12.1.0.233 Build 20110811) issues ..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Jan 30, 2012 at 5:11 PM, Richard Walsh
<br>
&lt;Richard.Walsh_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; I have not seen this mpirun error with the OpenMPI version I have built
</span><br>
<span class="quotelev1">&gt; with Intel 12.1 and the mpicc fix:
</span><br>
<span class="quotelev1">&gt; openmpi-1.5.5rc1.tar.bz2
</span><br>
<p>Hi,
<br>
<p>I haven't tried that version yet. I was trying to build a
<br>
supplementary package to the openmpi 1.5.3 shipped with RHEL6.2, the
<br>
same source, just built using the Intel compiler.
<br>
<p><span class="quotelev1">&gt; and from the looks of things, I wonder if your problem is related. &#160;The
</span><br>
<span class="quotelev1">&gt; solution in the original case was to conditionally dial-down optimization
</span><br>
<span class="quotelev1">&gt; when using the 12.1 compiler to prevent the compiler itself from crashing
</span><br>
<span class="quotelev1">&gt; during a compile. &#160;What you present is a failure during execution. &#160;Such
</span><br>
<span class="quotelev1">&gt; failures might be due to over zealous optimization, but there seems to be
</span><br>
<span class="quotelev1">&gt; little reason on the face of it to believe that there is a connection between
</span><br>
<span class="quotelev1">&gt; the former and the latter.
</span><br>
<p>Well, the similarity is that it is also a crash in the malloc routine.
<br>
I don't know if my optflags are too high, I have derived them from Red
<br>
Hat's, replacing the options unkown to icc:
<br>
-O2 -g -pipe -Wall -fexceptions -fstack-protector
<br>
--param=ssp-buffer-size=4 -m64 -mtune=pentium4
<br>
<p><span class="quotelev1">&gt; Does this failure occur with all attempts to use 'mpirun' whatever the source?
</span><br>
<span class="quotelev1">&gt; My 'mpicc' problem did. &#160;If this is true and If you believe it is an optimization
</span><br>
<span class="quotelev1">&gt; level issue you could try turning it off in the failing routine and see if that
</span><br>
<span class="quotelev1">&gt; produces a remedy. &#160;I would also try things with the very latest release.
</span><br>
<p>Yes, the mpicc crash happened every time, I could reproduce that.
<br>
<p>I have only tested the most basic code, the cpi.c example. The funny
<br>
thing is, that mpirun -np 8 cpi doesn't always crash, sometimes it
<br>
finishes just fine.
<br>
<p>Regards, G&#246;tz Waschk
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18328.php">Gabriele Fatigati: "Re: [OMPI users] MPI_AllGather null terminator character"</a>
<li><strong>Previous message:</strong> <a href="18326.php">Rayson Ho: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<li><strong>In reply to:</strong> <a href="18316.php">Richard Walsh: "Re: [OMPI users] Latest Intel Compilers (ICS, version 12.1.0.233 Build 20110811) issues ..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18340.php">Richard Walsh: "Re: [OMPI users] Latest Intel Compilers (ICS, version 12.1.0.233 Build 20110811) issues ..."</a>
<li><strong>Reply:</strong> <a href="18340.php">Richard Walsh: "Re: [OMPI users] Latest Intel Compilers (ICS, version 12.1.0.233 Build 20110811) issues ..."</a>
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
