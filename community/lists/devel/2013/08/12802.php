<?
$subject_val = "Re: [OMPI devel] ompi_info";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 27 13:24:44 2013" -->
<!-- isoreceived="20130827172444" -->
<!-- sent="Tue, 27 Aug 2013 11:24:43 -0600" -->
<!-- isosent="20130827172443" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] ompi_info" -->
<!-- id="20130827172443.GJ2788_at_panthera.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C6A93BDB-68FA-4502-8821-7E3EA1477A76_at_icl.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] ompi_info<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-27 13:24:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12803.php">Rolf vandeVaart: "[OMPI devel] Quick observation - component ignored for 7 years"</a>
<li><strong>Previous message:</strong> <a href="12801.php">George Bosilca: "Re: [OMPI devel] ompi_info"</a>
<li><strong>In reply to:</strong> <a href="12801.php">George Bosilca: "Re: [OMPI devel] ompi_info"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12806.php">Nathan Hjelm: "Re: [OMPI devel] ompi_info"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Aug 27, 2013 at 06:57:09PM +0200, George Bosilca wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jul 19, 2013, at 17:57 , Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I've now talked to both George and Nathan.  Let me summarize for the web archives / community:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 1. There are two main points of contention:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;   1a. ompi_info has a *very long-standing precedent* behavior of using &lt;framework&gt; MCA params to exclude the display of components (and their params). Users have come to rely on this behavior to test that OMPI is honoring their $HOME/.openmpi-mca-params.conf file (for example) because -- at least prior to new ompi_info -- there was no other way to verify that.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;   1b. It seems meaningless for MPI_T_Init to open *all* components when we're just going to be exposing a bunch of components/parameters that will not be used.  Easy example: MPI_T_Init will open all the PMLs, but we'll only end up using one of them.  Why have all the rest?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any progress on this?
</span><br>
<p>There was until a bad puppet script wiped out all my data on my work
<br>
computer. I will work on it today and should have something ready to
<br>
push tomorrow.
<br>
<p>To summarize what will be done:
<br>
<p>1) --all without a --level will assume --level 9
<br>
2) Either a) add an option to ompi_info to suppress registering all
<br>
components when a component selection parameter is set (ie. --mca btl
<br>
self,sm) or b) somehow mark the parameters of unused components as such.
<br>
<p>1 and 2a are easy. 2b is a little harder.
<br>
<p>-Nathan
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12803.php">Rolf vandeVaart: "[OMPI devel] Quick observation - component ignored for 7 years"</a>
<li><strong>Previous message:</strong> <a href="12801.php">George Bosilca: "Re: [OMPI devel] ompi_info"</a>
<li><strong>In reply to:</strong> <a href="12801.php">George Bosilca: "Re: [OMPI devel] ompi_info"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12806.php">Nathan Hjelm: "Re: [OMPI devel] ompi_info"</a>
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
