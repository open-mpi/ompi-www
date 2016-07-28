<?
$subject_val = "Re: [OMPI devel] malloc(0) warnings in post/wait and start/complete calls with GROUP_EMPTY";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  8 09:48:44 2016" -->
<!-- isoreceived="20160208144844" -->
<!-- sent="Mon, 8 Feb 2016 17:48:23 +0300" -->
<!-- isosent="20160208144823" -->
<!-- name="Lisandro Dalcin" -->
<!-- email="dalcinl_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] malloc(0) warnings in post/wait and start/complete calls with GROUP_EMPTY" -->
<!-- id="CAEcYPwBOAD6FB4aQZ7okpG137idAAYjNXCcc5OmL52b0LYBzbg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="56B063B8.4010108_at_rist.or.jp" -->
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
<strong>Subject:</strong> Re: [OMPI devel] malloc(0) warnings in post/wait and start/complete calls with GROUP_EMPTY<br>
<strong>From:</strong> Lisandro Dalcin (<em>dalcinl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-08 09:48:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18572.php">Michael Rezny: "[OMPI devel] Error using MPI_Pack_external / MPI_Unpack_external"</a>
<li><strong>Previous message:</strong> <a href="18570.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] orted hangs on SLES12 when running 80 ranks per node"</a>
<li><strong>In reply to:</strong> <a href="18534.php">Gilles Gouaillardet: "Re: [OMPI devel] malloc(0) warnings in post/wait and start/complete calls with GROUP_EMPTY"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 2 February 2016 at 11:07, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Lisandro,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; here is attached a patch (master does things differently, so this has to be
</span><br>
<span class="quotelev1">&gt; a one-off patch anyway)
</span><br>
<span class="quotelev1">&gt; could you please give it a try ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>OK, just tried your patch: the warnings went away, valgrind didn't complain.
<br>
<p><p><span class="quotelev1">&gt; btw, how do you get these warnings automatically ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>./configure --enable-debug --enable-mem-debug ...
<br>
<p>PS: Running a trivial program with MPI_Init()/Finalize() shows a few
<br>
memory leaks if run under valgrind. Just FYI, in case you want to take
<br>
a closer look.
<br>
<p><p><pre>
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
<li><strong>Next message:</strong> <a href="18572.php">Michael Rezny: "[OMPI devel] Error using MPI_Pack_external / MPI_Unpack_external"</a>
<li><strong>Previous message:</strong> <a href="18570.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] orted hangs on SLES12 when running 80 ranks per node"</a>
<li><strong>In reply to:</strong> <a href="18534.php">Gilles Gouaillardet: "Re: [OMPI devel] malloc(0) warnings in post/wait and start/complete calls with GROUP_EMPTY"</a>
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
