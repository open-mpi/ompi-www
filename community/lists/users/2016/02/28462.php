<?
$subject_val = "Re: [OMPI users] Fortran vs C reductions";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  8 08:59:51 2016" -->
<!-- isoreceived="20160208135951" -->
<!-- sent="Mon, 8 Feb 2016 08:59:49 -0500" -->
<!-- isosent="20160208135949" -->
<!-- name="Brian Taylor" -->
<!-- email="spam.brian.taylor_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fortran vs C reductions" -->
<!-- id="CAKRe6eBRxiXRzhR9LWOp9Mcz5Lm0QvN64zzz9BN_e=RjNK_U0Q_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAGKz=uL=jBF7M7be7RyVFhe6zwGKC7+2skZoD6OUKN7AoHQXuA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Fortran vs C reductions<br>
<strong>From:</strong> Brian Taylor (<em>spam.brian.taylor_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-08 08:59:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28463.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
<li><strong>Previous message:</strong> <a href="28461.php">Jeff Hammond: "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
<li><strong>In reply to:</strong> <a href="28458.php">Jeff Hammond: "Re: [OMPI users] Fortran vs C reductions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28464.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Fortran vs C reductions"</a>
<li><strong>Reply:</strong> <a href="28464.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Fortran vs C reductions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Feb 8, 2016 at 12:31 AM, Jeff Hammond &lt;jeff.science_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; BTW: is there a reason you don't want to just use the C datatypes?  The
</span><br>
<span class="quotelev2">&gt;&gt; fundamental output of the index is an integer value -- casting it to a
</span><br>
<span class="quotelev2">&gt;&gt; float of some flavor doesn't fundamentally change its value.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The code in question is not mine.  I have suggested to the developers
</span><br>
<span class="quotelev2">&gt;&gt; that they should use the correct C types.  The reason I became aware of
</span><br>
<span class="quotelev2">&gt;&gt; this issue is that one of my colleagues compiled and ran this code on a
</span><br>
<span class="quotelev2">&gt;&gt; system where OpenMPI was built without Fortran support and the code started
</span><br>
<span class="quotelev2">&gt;&gt; failing with errors from MPI which were not seen on other systems.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; If you use an MPI library compiled without Fortran support, you should
</span><br>
<span class="quotelev1">&gt; expect precisely nothing related to Fortran to work.  You might get more
</span><br>
<span class="quotelev1">&gt; than this because the universe is being nice to you, but you should treat
</span><br>
<span class="quotelev1">&gt; it as serendipity when something works, not a bug when something doesn't.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff, I think you have it backwards or perhaps you haven't read the whole
</span><br>
thread to understand the context.  I'm trying to understand why an MPI
<br>
library compiled without MPI support is trying to do anything at all with
<br>
Fortran-related types.  Given that there was no Fortran compiler to get
<br>
type information from, why are the Fortran types still defined by the MPI
<br>
library?  The library cannot possibly know what the right thing to do is,
<br>
so why is it trying to do anything at all?
<br>
<p>I want a program that's using Fortran MPI types to **FAIL** when built
<br>
against an MPI library that doesn't support Fortran, preferably at compile
<br>
time, with a very loud &quot;NO FORTRAN SUPPORT!!!&quot; error message.  I don't
<br>
expect, nor want, anything Fortran-related to work in this case.  That
<br>
saves me from having to track down stuff like this which, as you say, if it
<br>
works at all is just serendipitous.
<br>
<p>Cheers,
<br>
Brian
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28462/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28463.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
<li><strong>Previous message:</strong> <a href="28461.php">Jeff Hammond: "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
<li><strong>In reply to:</strong> <a href="28458.php">Jeff Hammond: "Re: [OMPI users] Fortran vs C reductions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28464.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Fortran vs C reductions"</a>
<li><strong>Reply:</strong> <a href="28464.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Fortran vs C reductions"</a>
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
