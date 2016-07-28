<?
$subject_val = "Re: [OMPI devel] Bug";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 22 10:28:44 2015" -->
<!-- isoreceived="20150622142844" -->
<!-- sent="Mon, 22 Jun 2015 09:28:23 -0500" -->
<!-- isosent="20150622142823" -->
<!-- name="Lisandro Dalcin" -->
<!-- email="dalcinl_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Bug" -->
<!-- id="CAEcYPwArm+034_fY6Lowbjky7=bHJfj-9Mp_uYvExp17gjb-Hw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="55875BBF.4070807_at_rist.or.jp" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Bug<br>
<strong>From:</strong> Lisandro Dalcin (<em>dalcinl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-22 10:28:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17518.php">Lisandro Dalcin: "[OMPI devel] Regressions: MPI_Win_{start|post}() with MPI_GROUP_EMPTY"</a>
<li><strong>Previous message:</strong> <a href="17516.php">Gilles Gouaillardet: "Re: [OMPI devel] v2.0 branch has been created"</a>
<li><strong>In reply to:</strong> <a href="17513.php">Gilles Gouaillardet: "Re: [OMPI devel] Bug"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17520.php">Gilles Gouaillardet: "Re: [OMPI devel] Bug"</a>
<li><strong>Reply:</strong> <a href="17520.php">Gilles Gouaillardet: "Re: [OMPI devel] Bug"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 21 June 2015 at 19:50, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Lisandro,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; there was a regression in 1.8.6 with NBC and zero size messages.
</span><br>
<span class="quotelev1">&gt; (ironically, the bug was introduced when silencing zero size malloc you
</span><br>
<span class="quotelev1">&gt; reported
</span><br>
<span class="quotelev1">&gt; in <a href="http://www.open-mpi.org/community/lists/devel/2015/05/17388.php">http://www.open-mpi.org/community/lists/devel/2015/05/17388.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; the attached patch fixes the issue
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>OK, I'll try to update 1.8.6 with that patch in my CI infraestructure
<br>
<a href="https://binstar.org/mpi4py/mpi4py/builds">https://binstar.org/mpi4py/mpi4py/builds</a> . I'll let you know how it
<br>
goes.
<br>
<p><p><span class="quotelev1">&gt; in your initial report, you mentionned messages coming from
</span><br>
<span class="quotelev1">&gt; coll_libnbc_ireduce_scatter_block.c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; there might be a bug left in this area, but i was unable to reproduce it.
</span><br>
<span class="quotelev1">&gt; could you please post the code you used initially ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I'm not sure about your question. The message I reported was about
<br>
malloc(0) warnings with 1.8.5. Perhaps other changes in 1.8.6 silenced
<br>
the warnings? IIRC, I reported other problems with (i?)reduce-scatter,
<br>
but these where fixed in 1.8.5
<br>
<p><p><p><pre>
-- 
Lisandro Dalcin
============
Research Scientist
Computer, Electrical and Mathematical Sciences &amp; Engineering (CEMSE)
Numerical Porous Media Center (NumPor)
King Abdullah University of Science and Technology (KAUST)
<a href="http://numpor.kaust.edu.sa/">http://numpor.kaust.edu.sa/</a>
4700 King Abdullah University of Science and Technology
al-Khawarizmi Bldg (Bldg 1), Office # 4332
Thuwal 23955-6900, Kingdom of Saudi Arabia
<a href="http://www.kaust.edu.sa">http://www.kaust.edu.sa</a>
Office Phone: +966 12 808-0459
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17518.php">Lisandro Dalcin: "[OMPI devel] Regressions: MPI_Win_{start|post}() with MPI_GROUP_EMPTY"</a>
<li><strong>Previous message:</strong> <a href="17516.php">Gilles Gouaillardet: "Re: [OMPI devel] v2.0 branch has been created"</a>
<li><strong>In reply to:</strong> <a href="17513.php">Gilles Gouaillardet: "Re: [OMPI devel] Bug"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17520.php">Gilles Gouaillardet: "Re: [OMPI devel] Bug"</a>
<li><strong>Reply:</strong> <a href="17520.php">Gilles Gouaillardet: "Re: [OMPI devel] Bug"</a>
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
