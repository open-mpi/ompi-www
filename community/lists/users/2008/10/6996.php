<?
$subject_val = "Re: [OMPI users] on SEEK_*";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 16 07:57:44 2008" -->
<!-- isoreceived="20081016115744" -->
<!-- sent="Thu, 16 Oct 2008 13:57:37 +0200" -->
<!-- isosent="20081016115737" -->
<!-- name="Jed Brown" -->
<!-- email="jed_at_[hidden]" -->
<!-- subject="Re: [OMPI users] on SEEK_*" -->
<!-- id="20081016115737.GB30398_at_brakk.ethz.ch" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="A843C2D8-18FA-421E-BA45-1A4B4551A185_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] on SEEK_*<br>
<strong>From:</strong> Jed Brown (<em>jed_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-16 07:57:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6997.php">Francesco Iannone: "Re: [OMPI users] OPENMPI 1.2.7 &amp; PGI compilers: configure option --disable-ptmalloc2-opt-sbrk"</a>
<li><strong>Previous message:</strong> <a href="6995.php">Jeff Squyres: "Re: [OMPI users] on SEEK_*"</a>
<li><strong>In reply to:</strong> <a href="6995.php">Jeff Squyres: "Re: [OMPI users] on SEEK_*"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6998.php">Jeff Squyres: "Re: [OMPI users] on SEEK_*"</a>
<li><strong>Reply:</strong> <a href="6998.php">Jeff Squyres: "Re: [OMPI users] on SEEK_*"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu 2008-10-16 07:43, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Oct 16, 2008, at 6:29 AM, Jed Brown wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Open MPI doesn't require undef'ing of anything.  It should also not  
</span><br>
<span class="quotelev1">&gt; require any special ordering of include files.  Specifically, the  
</span><br>
<span class="quotelev1">&gt; following codes both compile fine for me with 1.2.8 and the OMPI SVN  
</span><br>
<span class="quotelev1">&gt; trunk (which is what I assume you mean by &quot;-dev&quot;?):
</span><br>
<p>That's what I meant.  This, works with 1.2.7 but not with -dev:
<br>
<p>#include &lt;iostream&gt;
<br>
#undef SEEK_SET
<br>
#undef SEEK_CUR
<br>
#undef SEEK_END
<br>
#include &lt;mpi.h&gt;
<br>
<p>If iostream is replaced by stdio, then both fail.
<br>
<p><span class="quotelev1">&gt; This is actually a problem in the MPI-2 spec; the names &quot;MPI::SEEK_SET&quot; 
</span><br>
<span class="quotelev1">&gt; (and friends) were unfortunately chosen poorly.  Hopefully that'll be 
</span><br>
<span class="quotelev1">&gt; fixed relatively soon, in MPI-2.2.
</span><br>
<p>It wasn't addressed in the MPI-2.1 spec I was reading, hence my
<br>
confusion.  When namespaces and macros don't play well.
<br>
<p><span class="quotelev1">&gt; MPICH chose to handle this situation a different way than we did, and  
</span><br>
<span class="quotelev1">&gt; apparently requires that you either #undef something or you #define an  
</span><br>
<span class="quotelev1">&gt; MPICH-specific macro.  I guess the portable way might be to just always 
</span><br>
<span class="quotelev1">&gt; define that MPICH-specific macro.  It should be harmless for OMPI.
</span><br>
<p>I'll go with this, thanks.
<br>
<p><span class="quotelev1">&gt; FWIW, I was chatting with the MPICH developers at the recent MPI Forum  
</span><br>
<span class="quotelev1">&gt; meeting and showed them how we did our SEEK_* solution in Open MPI.
</span><br>
<p>Certainly the OMPI solution is better for users.
<br>
<p>Jed
<br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6996/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6997.php">Francesco Iannone: "Re: [OMPI users] OPENMPI 1.2.7 &amp; PGI compilers: configure option --disable-ptmalloc2-opt-sbrk"</a>
<li><strong>Previous message:</strong> <a href="6995.php">Jeff Squyres: "Re: [OMPI users] on SEEK_*"</a>
<li><strong>In reply to:</strong> <a href="6995.php">Jeff Squyres: "Re: [OMPI users] on SEEK_*"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6998.php">Jeff Squyres: "Re: [OMPI users] on SEEK_*"</a>
<li><strong>Reply:</strong> <a href="6998.php">Jeff Squyres: "Re: [OMPI users] on SEEK_*"</a>
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
