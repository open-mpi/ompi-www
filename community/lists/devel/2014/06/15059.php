<?
$subject_val = "Re: [OMPI devel] trunk broken";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 25 05:01:15 2014" -->
<!-- isoreceived="20140625090115" -->
<!-- sent="Wed, 25 Jun 2014 18:01:21 +0900" -->
<!-- isosent="20140625090121" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] trunk broken" -->
<!-- id="53AA8FE1.8010801_at_iferc.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="53AA6810.9070305_at_iferc.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] trunk broken<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-25 05:01:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15060.php">Mike Dubman: "Re: [OMPI devel] trunk broken"</a>
<li><strong>Previous message:</strong> <a href="15058.php">Ralph Castain: "Re: [OMPI devel] trunk broken"</a>
<li><strong>In reply to:</strong> <a href="15055.php">Gilles Gouaillardet: "Re: [OMPI devel] trunk broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15060.php">Mike Dubman: "Re: [OMPI devel] trunk broken"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Mike,
<br>
<p>by the way, i pushed r32081.
<br>
that might not be needed in your environment, but i get crash without it
<br>
in mine.
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 2014/06/25 15:11, Gilles Gouaillardet wrote:
<br>
<span class="quotelev1">&gt; could you try again with
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_btl=vader,self,openib
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; it seems the sm module causes a hang
</span><br>
<span class="quotelev1">&gt; (which later causes the timeout sending a SIGSEGV)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 2014/06/25 14:22, Mike Dubman wrote:
</span><br>
<span class="quotelev2">&gt;&gt; The following commit broke trunk in jenkins:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Per the OMPI developer conference, remove the last vestiges of
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_USE_PROGRESS_THREADS
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15060.php">Mike Dubman: "Re: [OMPI devel] trunk broken"</a>
<li><strong>Previous message:</strong> <a href="15058.php">Ralph Castain: "Re: [OMPI devel] trunk broken"</a>
<li><strong>In reply to:</strong> <a href="15055.php">Gilles Gouaillardet: "Re: [OMPI devel] trunk broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15060.php">Mike Dubman: "Re: [OMPI devel] trunk broken"</a>
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
