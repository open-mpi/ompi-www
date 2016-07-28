<?
$subject_val = "Re: [OMPI users] Windows: MPI_Allreduce() crashes when using MPI_DOUBLE_PRECISION";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  9 10:17:01 2011" -->
<!-- isoreceived="20110509141701" -->
<!-- sent="Mon, 9 May 2011 07:17:02 -0700" -->
<!-- isosent="20110509141702" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Windows: MPI_Allreduce() crashes when using MPI_DOUBLE_PRECISION" -->
<!-- id="96868DAA-418D-4E92-B150-9F7BA532C893_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="BANLkTi=vt1-z=JCxmnK437JNsXhd66m+ew_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Windows: MPI_Allreduce() crashes when using MPI_DOUBLE_PRECISION<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-09 10:17:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16497.php">hi: "Re: [OMPI users] Windows: MPI_Allreduce() crashes when using MPI_DOUBLE_PRECISION"</a>
<li><strong>Previous message:</strong> <a href="16495.php">Jeff Squyres: "Re: [OMPI users] Request for F90 bindings for Windows Builds"</a>
<li><strong>In reply to:</strong> <a href="16493.php">hi: "Re: [OMPI users] Windows: MPI_Allreduce() crashes when using MPI_DOUBLE_PRECISION"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16497.php">hi: "Re: [OMPI users] Windows: MPI_Allreduce() crashes when using MPI_DOUBLE_PRECISION"</a>
<li><strong>Reply:</strong> <a href="16497.php">hi: "Re: [OMPI users] Windows: MPI_Allreduce() crashes when using MPI_DOUBLE_PRECISION"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 9, 2011, at 6:57 AM, hi wrote:
<br>
<p><span class="quotelev1">&gt; Test program works fine; but you can notice the difference between the
</span><br>
<span class="quotelev1">&gt; callstack images of test program and of my actual application.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In test program it calls mca_coll_self_allreduce_intra while in my
</span><br>
<p>It doesn't for me...?  
<br>
<p>The &quot;self&quot; in there refers to the fact that this is a collective on MPI_COMM_SELF (or a dup of it).  If you run with np -1, MPI_COMM_WORLD is effectively a dup of MPI_COMM_SEFL.
<br>
<p>Hence, it's essentially a no-op.
<br>
<p><span class="quotelev1">&gt; application it calls mca_coll_basic_allreduce_intra.
</span><br>
<p>The &quot;basic&quot; in there means that this is not a no-op and it needs to do something.
<br>
<p>I ran your test program with -np 2 and -np 4 and it seemed to work ok.
<br>
<p><span class="quotelev1">&gt; So I want to know which parameter or setting makes call to
</span><br>
<span class="quotelev1">&gt; mca_coll_basic_allreduce_intra compared to
</span><br>
<span class="quotelev1">&gt; mca_coll_self_allreduce.intra; if you can comment on this would be
</span><br>
<span class="quotelev1">&gt; helpful.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Just for more information:
</span><br>
<span class="quotelev1">&gt; op-&gt;o_func.intrinsic.fns[27]  points to 0 when using
</span><br>
<span class="quotelev1">&gt; MPI_Allreduce(...,...,...,MPI_DOUBLE_PRECISION, MPI_SUM,...,...)
</span><br>
<p>You didn't answer my prior questions.  :-)
<br>
<p>Also note that the op pointers are not set by communicator -- they're fixed for all uses of that op.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16497.php">hi: "Re: [OMPI users] Windows: MPI_Allreduce() crashes when using MPI_DOUBLE_PRECISION"</a>
<li><strong>Previous message:</strong> <a href="16495.php">Jeff Squyres: "Re: [OMPI users] Request for F90 bindings for Windows Builds"</a>
<li><strong>In reply to:</strong> <a href="16493.php">hi: "Re: [OMPI users] Windows: MPI_Allreduce() crashes when using MPI_DOUBLE_PRECISION"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16497.php">hi: "Re: [OMPI users] Windows: MPI_Allreduce() crashes when using MPI_DOUBLE_PRECISION"</a>
<li><strong>Reply:</strong> <a href="16497.php">hi: "Re: [OMPI users] Windows: MPI_Allreduce() crashes when using MPI_DOUBLE_PRECISION"</a>
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
