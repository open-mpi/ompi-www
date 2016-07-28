<?
$subject_val = "Re: [OMPI users] Fortran vs C reductions";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  8 09:28:55 2016" -->
<!-- isoreceived="20160208142855" -->
<!-- sent="Mon, 8 Feb 2016 14:28:52 +0000" -->
<!-- isosent="20160208142852" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fortran vs C reductions" -->
<!-- id="99DBE62D-56C5-4D28-9B5C-23E0B1CFF4FE_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAKRe6eBRxiXRzhR9LWOp9Mcz5Lm0QvN64zzz9BN_e=RjNK_U0Q_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-08 09:28:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28465.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
<li><strong>Previous message:</strong> <a href="28463.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
<li><strong>In reply to:</strong> <a href="28462.php">Brian Taylor: "Re: [OMPI users] Fortran vs C reductions"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 8, 2016, at 8:59 AM, Brian Taylor &lt;spam.brian.taylor_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I want a program that's using Fortran MPI types to **FAIL** when built against an MPI library that doesn't support Fortran, preferably at compile time, with a very loud &quot;NO FORTRAN SUPPORT!!!&quot; error message.  I don't expect, nor want, anything Fortran-related to work in this case.  That saves me from having to track down stuff like this which, as you say, if it works at all is just serendipitous.
</span><br>
<p>I think that we're all converging on that.
<br>
<p>Jeff H's suggestion of a pragma-based failure conveying a &quot;you don't have Fortran&quot; compile error support seems like a good one.
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
<li><strong>Next message:</strong> <a href="28465.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
<li><strong>Previous message:</strong> <a href="28463.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
<li><strong>In reply to:</strong> <a href="28462.php">Brian Taylor: "Re: [OMPI users] Fortran vs C reductions"</a>
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
