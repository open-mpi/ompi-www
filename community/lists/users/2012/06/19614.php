<?
$subject_val = "Re: [OMPI users] NVCC mpi.h: error: attribute &quot;__deprecated__&quot; does not take arguments";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 18 10:55:12 2012" -->
<!-- isoreceived="20120618145512" -->
<!-- sent="Mon, 18 Jun 2012 10:55:07 -0400" -->
<!-- isosent="20120618145507" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] NVCC mpi.h: error: attribute &amp;quot;__deprecated__&amp;quot; does not take arguments" -->
<!-- id="CC4BF3D3-7ADB-4E2A-8AA7-EFD9B0156652_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAGR4S9Gn-QBStaej2FkvhQ_=tskFftO4tQbJVuVKfWX4mTHvcg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] NVCC mpi.h: error: attribute &quot;__deprecated__&quot; does not take arguments<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-18 10:55:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19615.php">Dmitry N. Mikushin: "Re: [OMPI users] NVCC mpi.h: error: attribute &quot;__deprecated__&quot; does not take arguments"</a>
<li><strong>Previous message:</strong> <a href="19613.php">Harald Servat: "Re: [OMPI users] Executions in two different machines"</a>
<li><strong>In reply to:</strong> <a href="19612.php">Dmitry N. Mikushin: "Re: [OMPI users] NVCC mpi.h: error: attribute &quot;__deprecated__&quot; does not take arguments"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19615.php">Dmitry N. Mikushin: "Re: [OMPI users] NVCC mpi.h: error: attribute &quot;__deprecated__&quot; does not take arguments"</a>
<li><strong>Reply:</strong> <a href="19615.php">Dmitry N. Mikushin: "Re: [OMPI users] NVCC mpi.h: error: attribute &quot;__deprecated__&quot; does not take arguments"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 18, 2012, at 10:41 AM, Dmitry N. Mikushin wrote:
<br>
<p><span class="quotelev1">&gt; No, I'm configuring with gcc, and for openmpi-1.6 it works with nvcc without a problem.
</span><br>
<p>Then I think Rolf (from Nvidia) should figure this out; I don't have access to nvcc.  :-)
<br>
<p><span class="quotelev1">&gt; Actually, nvcc always meant to be more or less compatible with gcc, as far as I know. I'm guessing in case of trunk nvcc is the source of the issue.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And with ./configure CC=nvcc ....etc. it won't build:
</span><br>
<span class="quotelev1">&gt; /home/dmikushin/forge/openmpi-trunk/opal/mca/event/libevent2019/libevent/include/event2/util.h:126:2: error: #error &quot;No way to define ev_uint64_t&quot;
</span><br>
<p>You should complain to Nvidia about that.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19615.php">Dmitry N. Mikushin: "Re: [OMPI users] NVCC mpi.h: error: attribute &quot;__deprecated__&quot; does not take arguments"</a>
<li><strong>Previous message:</strong> <a href="19613.php">Harald Servat: "Re: [OMPI users] Executions in two different machines"</a>
<li><strong>In reply to:</strong> <a href="19612.php">Dmitry N. Mikushin: "Re: [OMPI users] NVCC mpi.h: error: attribute &quot;__deprecated__&quot; does not take arguments"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19615.php">Dmitry N. Mikushin: "Re: [OMPI users] NVCC mpi.h: error: attribute &quot;__deprecated__&quot; does not take arguments"</a>
<li><strong>Reply:</strong> <a href="19615.php">Dmitry N. Mikushin: "Re: [OMPI users] NVCC mpi.h: error: attribute &quot;__deprecated__&quot; does not take arguments"</a>
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
