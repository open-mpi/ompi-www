<?
$subject_val = "Re: [OMPI devel] ompi_info";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 17 12:16:39 2013" -->
<!-- isoreceived="20130717161639" -->
<!-- sent="Wed, 17 Jul 2013 10:16:33 -0600" -->
<!-- isosent="20130717161633" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] ompi_info" -->
<!-- id="20130717161633.GP18047_at_pantheralanlgov.local" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="B7C1D578-B847-44B5-B84D-E2F430994175_at_icl.utk.edu" -->
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
<strong>Date:</strong> 2013-07-17 12:16:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12641.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] ompi_info"</a>
<li><strong>Previous message:</strong> <a href="12639.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: add support for large counts using derived datatypes"</a>
<li><strong>In reply to:</strong> <a href="12633.php">George Bosilca: "[OMPI devel] ompi_info"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12641.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] ompi_info"</a>
<li><strong>Reply:</strong> <a href="12641.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] ompi_info"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Jul 17, 2013 at 03:04:06AM +0200, George Bosilca wrote:
<br>
<span class="quotelev1">&gt; I would like to question the choice for the new ? spartan ompi_info output? I would not mind restoring the default behavior, aka. have a verbose &quot;--all&quot;, instead of some [random] MCA params.
</span><br>
<p>As Ralph suggested you need to pass the --level or -l option to see all the variables. --level 9 will print everything. If you think there are variables everyday users should see you are welcome to change them to OPAL_INFO_LVL_1. We are trying to avoid moving too many variables to this info level.
<br>
<p><span class="quotelev1">&gt; Btw, something is wrong i the following output. I have an &quot;btl = sm,self&quot; in my .openmpi/mca-params.conf so I should not even see the BTL TCP parameters.
</span><br>
<p>I think ompi_info has always shown all the variables despite what you have the selection variable set (at least in some cases). We now just display everything in all cases. An additional benefit to the updated code is that if you set a selection variable through the environment (OMPI_MCA_btl=self,sm) it no longer appears as unset in ompi_info. The old code unset all selection variables in order to ensure all parameters got printed (very annoying but necessary).
<br>
<p>-Nathan
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12641.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] ompi_info"</a>
<li><strong>Previous message:</strong> <a href="12639.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: add support for large counts using derived datatypes"</a>
<li><strong>In reply to:</strong> <a href="12633.php">George Bosilca: "[OMPI devel] ompi_info"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12641.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] ompi_info"</a>
<li><strong>Reply:</strong> <a href="12641.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] ompi_info"</a>
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
