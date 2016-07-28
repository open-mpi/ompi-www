<?
$subject_val = "Re: [OMPI users] MPI and C++ - now Send and Receive of Classes and	STL containers";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul  7 06:59:19 2009" -->
<!-- isoreceived="20090707105919" -->
<!-- sent="Tue, 7 Jul 2009 12:59:14 +0200" -->
<!-- isosent="20090707105914" -->
<!-- name="Markus Blatt" -->
<!-- email="mblatt_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI and C++ - now Send and Receive of Classes and	STL containers" -->
<!-- id="20090707105914.GA32215_at_catania.iwr.uni-heidelberg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] MPI and C++ - now Send and Receive of Classes and	STL containers" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI and C++ - now Send and Receive of Classes and	STL containers<br>
<strong>From:</strong> Markus Blatt (<em>mblatt_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-07 06:59:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9861.php">Ashley Pittman: "Re: [OMPI users] Segmentation fault - Address not mapped"</a>
<li><strong>Previous message:</strong> <a href="9859.php">Catalin David: "Re: [OMPI users] Segmentation fault - Address not mapped"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>On Mon, Jul 06, 2009 at 03:24:07PM -0400, Luis Vitorio Cargnini wrote:
<br>
<span class="quotelev1">&gt; Thanks, but I really do not want to use Boost.
</span><br>
<span class="quotelev1">&gt; Is easier ? certainly is, but I want to make it using only MPI
</span><br>
<span class="quotelev1">&gt; itself
</span><br>
<span class="quotelev1">&gt; and not been dependent of a Library, or templates like the majority
</span><br>
<span class="quotelev1">&gt; of
</span><br>
<span class="quotelev1">&gt; boost a huge set of templates and wrappers for different libraries,
</span><br>
<span class="quotelev1">&gt; implemented in C, supplying a wrapper for C++.
</span><br>
<span class="quotelev1">&gt; I admit Boost is a valuable tool, but in my case, as much
</span><br>
<span class="quotelev1">&gt; independent I
</span><br>
<span class="quotelev1">&gt; could be from additional libs, better.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>If you do not want to use boost, then I suggest not using nested
<br>
vectors but just ones that contain PODs as value_type (or even
<br>
C-arrays).
<br>
<p><p>If you insist on using complicated containers you will end up
<br>
writing your own MPI-C++ abstraction (resulting in a library). This
<br>
will be a lot of (unnecessary and hard) work.
<br>
<p>Just my 2 cents.
<br>
<p>Cheers,
<br>
<p>Markus
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9861.php">Ashley Pittman: "Re: [OMPI users] Segmentation fault - Address not mapped"</a>
<li><strong>Previous message:</strong> <a href="9859.php">Catalin David: "Re: [OMPI users] Segmentation fault - Address not mapped"</a>
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
