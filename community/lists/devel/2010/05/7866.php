<?
$subject_val = "Re: [OMPI devel] System V Shared Memory for Open MPI: Request	for	Community Input and Testing";
include("../../include/msg-header.inc");
?>
<!-- received="Sun May  2 09:48:30 2010" -->
<!-- isoreceived="20100502134830" -->
<!-- sent="02 May 2010 14:48:26 +0100" -->
<!-- isosent="20100502134826" -->
<!-- name="N.M. Maclaren" -->
<!-- email="nmm1_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] System V Shared Memory for Open MPI: Request	for	Community Input and Testing" -->
<!-- id="Prayer.1.3.2.1005021448260.9709_at_hermes-2.csi.cam.ac.uk" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="[OMPI devel] System V Shared Memory for Open MPI: Request	for	Community Input and Testing" -->
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
<strong>Subject:</strong> Re: [OMPI devel] System V Shared Memory for Open MPI: Request	for	Community Input and Testing<br>
<strong>From:</strong> N.M. Maclaren (<em>nmm1_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-02 09:48:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7867.php">Christopher Samuel: "[OMPI devel] Unchecked malloc()'s in OMPI 1.4.x"</a>
<li><strong>Previous message:</strong> <a href="7865.php">Christopher Samuel: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request	for Community Input and Testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7871.php">Samuel K. Gutierrez: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request	for	Community Input and Testing"</a>
<li><strong>Reply:</strong> <a href="7871.php">Samuel K. Gutierrez: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request	for	Community Input and Testing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 2 2010, Ashley Pittman wrote:
<br>
<span class="quotelev1">&gt;On 2 May 2010, at 04:03, Samuel K. Gutierrez wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As to performance there should be no difference in use between sys-V 
</span><br>
<span class="quotelev1">&gt; shared memory and file-backed shared memory, the instructions issued and 
</span><br>
<span class="quotelev1">&gt; the MMU flags for the page should both be the same so the performance 
</span><br>
<span class="quotelev1">&gt; should be identical.
</span><br>
<p>Not necessarily, and possibly not so even for far-future Linuces.
<br>
On at least one system I used, the poxious kernel wrote the complete
<br>
file to disk before returning - all right, it did that for System V
<br>
shared memory, too, just to a 'hidden' file!  But, if I recall, on
<br>
another it did that only for file-backed shared memory - however, it's
<br>
a decade ago now and I may be misremembering.
<br>
<p>Of course, that's a serious issue mainly for large segments.  I was
<br>
using multi-GB ones.  I don't know how big the ones you need are.
<br>
<p><span class="quotelev1">&gt; The one area you do need to keep an eye on for performance is on numa 
</span><br>
<span class="quotelev1">&gt; machines where it's important which process on a node touches each page 
</span><br>
<span class="quotelev1">&gt; first, you can end up using different areas (pages, not regions) for 
</span><br>
<span class="quotelev1">&gt; communicating in different directions between the same pair of processes. 
</span><br>
<span class="quotelev1">&gt; I don't believe this is any different to mmap backed shared memory 
</span><br>
<span class="quotelev1">&gt; though.
</span><br>
<p>On some systems it may be, but in bizarre, inconsistent, undocumented
<br>
and unpredictable ways :-(  Also, there are usually several system (and
<br>
sometimes user) configuration options that change the behaviour, so you
<br>
have to allow for that.  My experience of trying to use those is that
<br>
different uses have incompatible requirements, and most of the critical
<br>
configuration parameters apply to ALL uses!
<br>
<p>In my view, the configuration variability is the number one nightmare
<br>
for trying to write portable code that uses any form of shared memory.
<br>
ARMCI seem to agree.
<br>
<p><span class="quotelev2">&gt;&gt; Because of this, sysv support may be limited to Linux systems - that is,
</span><br>
<span class="quotelev2">&gt;&gt; until we can get a better sense of which systems provide the shmctl
</span><br>
<span class="quotelev2">&gt;&gt; IPC_RMID behavior that I am relying on.
</span><br>
<p>And, I suggest, whether they have an evil gotcha on one of the areas that
<br>
Ashley Pittman noted.
<br>
<p><p>Regards,
<br>
Nick Maclaren.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7867.php">Christopher Samuel: "[OMPI devel] Unchecked malloc()'s in OMPI 1.4.x"</a>
<li><strong>Previous message:</strong> <a href="7865.php">Christopher Samuel: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request	for Community Input and Testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7871.php">Samuel K. Gutierrez: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request	for	Community Input and Testing"</a>
<li><strong>Reply:</strong> <a href="7871.php">Samuel K. Gutierrez: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request	for	Community Input and Testing"</a>
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
