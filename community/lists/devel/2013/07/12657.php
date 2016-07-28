<?
$subject_val = "Re: [OMPI devel] ompi_info";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 18 12:05:58 2013" -->
<!-- isoreceived="20130718160558" -->
<!-- sent="Thu, 18 Jul 2013 10:05:54 -0600" -->
<!-- isosent="20130718160554" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] ompi_info" -->
<!-- id="20130718160554.GC61468_at_pantheralanlgov.local" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="A97BE23A-7923-48FA-A5DF-4F33AF85863C_at_icl.utk.edu" -->
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
<strong>Date:</strong> 2013-07-18 12:05:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12658.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] ompi_info"</a>
<li><strong>Previous message:</strong> <a href="12656.php">Aur&#233;lien Bouteiller: "Re: [OMPI devel] KNEM + user-space hybrid for sm BTL"</a>
<li><strong>In reply to:</strong> <a href="12655.php">George Bosilca: "Re: [OMPI devel] ompi_info"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12658.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] ompi_info"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Jul 18, 2013 at 05:50:40PM +0200, George Bosilca wrote:
<br>
<span class="quotelev1">&gt; On Jul 18, 2013, at 17:07 , Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; This was discussed in depth before the MCA rewrite came into the trunk. There are only two cases where we load and register all the available components: ompi_info, and MPI_T_init_thread(). The normal MPI case does not have this behavior and instead loads only the requested components.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; How is this part of the code validated? It might capitalize on some type of &quot;trust&quot;. Unfortunately ? I have no such notion.
</span><br>
<p>The fact that ompi_mpi_init never call ompi_info_register_params() which is the only path that sets the MCA_BASE_REGISTER_ALL when registering framework pameters. The register all behavior has to be explicitly asked for.
<br>
<p><span class="quotelev1">&gt; I would rather take the path of the &quot;least astonishment&quot;, a __consistent__ behavior where we always abide to the configuration files (user level as well as system level). If you want to see every single parameter possibly available to you (based on your rights of course), temporary remove the configuration file. Or we can provide a specific ompi_info option to ignore the configuration files, but not make this the default.
</span><br>
<p>In some ways this was the default behavior (if no file values were set). The current behavior was chosen to be consistent and reflect what I thought was the original intent. The old behavior would ignore component selection variables set in the environment (ompi_info actually unset them). So, if you set one of these variables in the environment (or the ompi_info command line) you would 1) still get all components in the framework, and 2) not see the variable as set even though it is in an actual run.
<br>
<p>So, if I did:
<br>
<p>export OMPI_MCA_btl=self,sm
<br>
<p>or added --mca btl self,sm to the ompi_info command line
<br>
<p>I would still see all the btls + this:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: parameter &quot;btl&quot; (current value: &quot;&quot;, data source: default, level: 2 user/detail, type: string)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Default selection set of components for the btl framework (&lt;none&gt; means use all components that can be found)
<br>
<p>instead of:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: parameter &quot;btl&quot; (current value: &quot;self,sm&quot;, data source: environment, level: 2 user/detail, type: string)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Default selection set of components for the btl framework (&lt;none&gt; means use all components that can be found)
<br>
<p>Very annoying!
<br>
<p>That said. The register all behavior is easy to control. If there is a consensus that we need another ompi_info option I am more than happy to add it. But then again, --all should mean all components, all frameworks, all levels. 
<br>
<p>-Nathan
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12658.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] ompi_info"</a>
<li><strong>Previous message:</strong> <a href="12656.php">Aur&#233;lien Bouteiller: "Re: [OMPI devel] KNEM + user-space hybrid for sm BTL"</a>
<li><strong>In reply to:</strong> <a href="12655.php">George Bosilca: "Re: [OMPI devel] ompi_info"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12658.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] ompi_info"</a>
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
