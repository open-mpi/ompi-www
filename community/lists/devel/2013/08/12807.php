<?
$subject_val = "Re: [OMPI devel] ompi_info";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 27 16:10:58 2013" -->
<!-- isoreceived="20130827201058" -->
<!-- sent="Tue, 27 Aug 2013 20:10:56 +0000" -->
<!-- isosent="20130827201056" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] ompi_info" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F83AE46_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20130827191336.GC78270_at_panthera.lanl.gov" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-27 16:10:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12808.php">George Bosilca: "Re: [OMPI devel] ompi_info"</a>
<li><strong>Previous message:</strong> <a href="12806.php">Nathan Hjelm: "Re: [OMPI devel] ompi_info"</a>
<li><strong>In reply to:</strong> <a href="12806.php">Nathan Hjelm: "Re: [OMPI devel] ompi_info"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12808.php">George Bosilca: "Re: [OMPI devel] ompi_info"</a>
<li><strong>Reply:</strong> <a href="12808.php">George Bosilca: "Re: [OMPI devel] ompi_info"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 27, 2013, at 3:13 PM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev3">&gt;&gt;&gt;  1a. ompi_info has a *very long-standing precedent* behavior of using &lt;framework&gt; MCA params to exclude the display of components (and their params). Users have come to rely on this behavior to test that OMPI is honoring their $HOME/.openmpi-mca-params.conf file (for example) because -- at least prior to new ompi_info -- there was no other way to verify that.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please take a look @ r29070. I changed the default behavior of ompi_info
</span><br>
<span class="quotelev1">&gt; -a when --level is not specified to assume level 9. I also added an
</span><br>
<span class="quotelev1">&gt; option (--selected-only/-s) that limits the output to components that
</span><br>
<span class="quotelev1">&gt; may be selected. Let me know if this fix is ok.
</span><br>
<p><p>I don't think it's going to be enough.
<br>
<p>George's point is that the *default behavior* for ompi_info for years has been to do what --selected-only does.  So adding a non-default option to get that same behavior... I think George will hate that.  Right, George?  :-)
<br>
<p>I think your option 2b) from your previous mail was the compromise:
<br>
<p>-----
<br>
To summarize what will be done:
<br>
<p>1) --all without a --level will assume --level 9
<br>
2) Either a) add an option to ompi_info to suppress registering all
<br>
components when a component selection parameter is set (ie. --mca btl
<br>
self,sm) or b) somehow mark the parameters of unused components as such.
<br>
-----
<br>
<p>I.e., show all components, but mark those who are not selected somehow.
<br>
<p>Sorry.  :-\
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
<li><strong>Next message:</strong> <a href="12808.php">George Bosilca: "Re: [OMPI devel] ompi_info"</a>
<li><strong>Previous message:</strong> <a href="12806.php">Nathan Hjelm: "Re: [OMPI devel] ompi_info"</a>
<li><strong>In reply to:</strong> <a href="12806.php">Nathan Hjelm: "Re: [OMPI devel] ompi_info"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12808.php">George Bosilca: "Re: [OMPI devel] ompi_info"</a>
<li><strong>Reply:</strong> <a href="12808.php">George Bosilca: "Re: [OMPI devel] ompi_info"</a>
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
