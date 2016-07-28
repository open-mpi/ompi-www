<?
$subject_val = "Re: [OMPI devel] ompi_info";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 18 11:50:42 2013" -->
<!-- isoreceived="20130718155042" -->
<!-- sent="Thu, 18 Jul 2013 17:50:40 +0200" -->
<!-- isosent="20130718155040" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] ompi_info" -->
<!-- id="A97BE23A-7923-48FA-A5DF-4F33AF85863C_at_icl.utk.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="20130718150722.GA61468_at_pantheralanlgov.local" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-18 11:50:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12656.php">Aurélien Bouteiller: "Re: [OMPI devel] KNEM + user-space hybrid for sm BTL"</a>
<li><strong>Previous message:</strong> <a href="12654.php">Nathan Hjelm: "Re: [OMPI devel] ompi_info"</a>
<li><strong>In reply to:</strong> <a href="12649.php">Nathan Hjelm: "Re: [OMPI devel] ompi_info"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12657.php">Nathan Hjelm: "Re: [OMPI devel] ompi_info"</a>
<li><strong>Reply:</strong> <a href="12657.php">Nathan Hjelm: "Re: [OMPI devel] ompi_info"</a>
<li><strong>Reply:</strong> <a href="12658.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] ompi_info"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 18, 2013, at 17:07 , Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; This was discussed in depth before the MCA rewrite came into the trunk. There are only two cases where we load and register all the available components: ompi_info, and MPI_T_init_thread(). The normal MPI case does not have this behavior and instead loads only the requested components.
</span><br>
<p>How is this part of the code validated? It might capitalize on some type of &quot;trust&quot;. Unfortunately &#133; I have no such notion.
<br>
<p>I would rather take the path of the &quot;least astonishment&quot;, a __consistent__ behavior where we always abide to the configuration files (user level as well as system level). If you want to see every single parameter possibly available to you (based on your rights of course), temporary remove the configuration file. Or we can provide a specific ompi_info option to ignore the configuration files, but not make this the default.
<br>
<p>&nbsp;&nbsp;George.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12656.php">Aurélien Bouteiller: "Re: [OMPI devel] KNEM + user-space hybrid for sm BTL"</a>
<li><strong>Previous message:</strong> <a href="12654.php">Nathan Hjelm: "Re: [OMPI devel] ompi_info"</a>
<li><strong>In reply to:</strong> <a href="12649.php">Nathan Hjelm: "Re: [OMPI devel] ompi_info"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12657.php">Nathan Hjelm: "Re: [OMPI devel] ompi_info"</a>
<li><strong>Reply:</strong> <a href="12657.php">Nathan Hjelm: "Re: [OMPI devel] ompi_info"</a>
<li><strong>Reply:</strong> <a href="12658.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] ompi_info"</a>
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
