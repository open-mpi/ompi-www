<?
$subject_val = "Re: [OMPI users] Question about compilng with fPIC";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 21 11:52:50 2011" -->
<!-- isoreceived="20110921155250" -->
<!-- sent="Wed, 21 Sep 2011 11:52:44 -0400" -->
<!-- isosent="20110921155244" -->
<!-- name="Tim Prince" -->
<!-- email="n8tm_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question about compilng with fPIC" -->
<!-- id="4E7A084C.4010807_at_aol.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="E9F276A0010AF44ABD2C03ED2EDAE7DB275FC365A8_at_HDXMSPB.us.lmco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Question about compilng with fPIC<br>
<strong>From:</strong> Tim Prince (<em>n8tm_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-21 11:52:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17374.php">Henderson, Brent: "Re: [OMPI users] Large TCP cluster timeout issue"</a>
<li><strong>Previous message:</strong> <a href="17372.php">Blosch, Edwin L: "[OMPI users] Question about compilng with fPIC"</a>
<li><strong>In reply to:</strong> <a href="17372.php">Blosch, Edwin L: "[OMPI users] Question about compilng with fPIC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17375.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re:  Question about compilng with fPIC"</a>
<li><strong>Reply:</strong> <a href="17375.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re:  Question about compilng with fPIC"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 9/21/2011 11:44 AM, Blosch, Edwin L wrote:
<br>
<span class="quotelev1">&gt; Follow-up to a mislabeled thread:  &quot;How could OpenMPI (or MVAPICH) affect floating-point results?&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have found a solution to my problem, but I would like to understand the underlying issue better.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To rehash: An Intel-compiled executable linked with MVAPICH runs fine; linked with OpenMPI fails.  The earliest symptom I could see was some strange difference in numerical values of quantities that should be unaffected by MPI calls.  Tim's advice guided me to assume memory corruption. Eugene's advice guided me to explore the detailed differences in compilation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I observed that the MVAPICH mpif90 wrapper adds -fPIC.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tried adding -fPIC and -mcmodel=medium to the compilation of the OpenMPI-linked executable.  Now it works fine. I haven't tried without -mcmodel=medium, but my guess is -fPIC did the trick.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does anyone know why compiling with -fPIC has helped?  Does it suggest an application problem or an OpenMPI problem?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To note: This is an Infiniband-based cluster.  The application does pretty basic MPI-1 operations: send, recv, bcast, reduce, allreduce, gather, gather, isend, irecv, waitall.  There is one task that uses iprobe with MPI_ANY_TAG, but this task is only involved in certain cases (including this one). Conversely, cases that do not call iprobe have not yet been observed to crash.  I am deducing that this function is the problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>If you are making a .so, the included .o files should be built with 
<br>
-fPIC or similar. Ideally, the configure and build tools would enforce this.
<br>
<p><pre>
-- 
Tim Prince
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17374.php">Henderson, Brent: "Re: [OMPI users] Large TCP cluster timeout issue"</a>
<li><strong>Previous message:</strong> <a href="17372.php">Blosch, Edwin L: "[OMPI users] Question about compilng with fPIC"</a>
<li><strong>In reply to:</strong> <a href="17372.php">Blosch, Edwin L: "[OMPI users] Question about compilng with fPIC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17375.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re:  Question about compilng with fPIC"</a>
<li><strong>Reply:</strong> <a href="17375.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re:  Question about compilng with fPIC"</a>
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
