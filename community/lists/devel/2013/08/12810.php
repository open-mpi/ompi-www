<?
$subject_val = "Re: [OMPI devel] ompi_info";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 28 09:22:18 2013" -->
<!-- isoreceived="20130828132218" -->
<!-- sent="Wed, 28 Aug 2013 13:22:17 +0000" -->
<!-- isosent="20130828132217" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] ompi_info" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F83D495_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="388D7BA7-AEDC-4B61-89F3-60FF0AA84742_at_icl.utk.edu" -->
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
<strong>Date:</strong> 2013-08-28 09:22:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12811.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29079 - in trunk: opal/mca/hwloc/base	orte/mca/rmaps/mindist"</a>
<li><strong>Previous message:</strong> <a href="12809.php">Chris Samuel: "[OMPI devel] Possible OMPI 1.6.5 bug?  SEGV in malloc.c"</a>
<li><strong>In reply to:</strong> <a href="12808.php">George Bosilca: "Re: [OMPI devel] ompi_info"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/07/12651.php">David Goodell (dgoodell): "Re: [OMPI devel] ompi_info"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Actually, the compromise was listed in my original mail:
<br>
<p>&nbsp;&nbsp;2a. Fair enough.  The long-standing ompi_info behavior precedent alone is probably enough to warrant re-thinking the new ompi_info behavior.  Nathan will implement a compromise (that George was ok with when I talked on the phone with him).  If you have a &lt;framework&gt; parameter somewhere that disables components (e.g., $HOME/.openmpi-mca-params.conf contains &quot;btl = tcp,sm,self&quot;), then ompi_info will somehow mark those components' parameters as &quot;inactive&quot; in the prettyprint and parseable outputs
<br>
<p><p><p>On Aug 28, 2013, at 2:50 AM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Jeff is indeed correct, the compromise we reached was to default to the historical behavior of showing only the parameters of selected components and have an option to show everything else.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  George.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; PS: Shouldn't &quot;ompi_info --param all all&quot; be identical to &quot;ompi_info --all&quot;?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Aug 27, 2013, at 22:10 , Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 27, 2013, at 3:13 PM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 1a. ompi_info has a *very long-standing precedent* behavior of using &lt;framework&gt; MCA params to exclude the display of components (and their params). Users have come to rely on this behavior to test that OMPI is honoring their $HOME/.openmpi-mca-params.conf file (for example) because -- at least prior to new ompi_info -- there was no other way to verify that.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Please take a look @ r29070. I changed the default behavior of ompi_info
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -a when --level is not specified to assume level 9. I also added an
</span><br>
<span class="quotelev3">&gt;&gt;&gt; option (--selected-only/-s) that limits the output to components that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; may be selected. Let me know if this fix is ok.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I don't think it's going to be enough.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; George's point is that the *default behavior* for ompi_info for years has been to do what --selected-only does.  So adding a non-default option to get that same behavior... I think George will hate that.  Right, George?  :-)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I think your option 2b) from your previous mail was the compromise:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -----
</span><br>
<span class="quotelev2">&gt;&gt; To summarize what will be done:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 1) --all without a --level will assume --level 9
</span><br>
<span class="quotelev2">&gt;&gt; 2) Either a) add an option to ompi_info to suppress registering all
</span><br>
<span class="quotelev2">&gt;&gt; components when a component selection parameter is set (ie. --mca btl
</span><br>
<span class="quotelev2">&gt;&gt; self,sm) or b) somehow mark the parameters of unused components as such.
</span><br>
<span class="quotelev2">&gt;&gt; -----
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I.e., show all components, but mark those who are not selected somehow.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Sorry.  :-\
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12811.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29079 - in trunk: opal/mca/hwloc/base	orte/mca/rmaps/mindist"</a>
<li><strong>Previous message:</strong> <a href="12809.php">Chris Samuel: "[OMPI devel] Possible OMPI 1.6.5 bug?  SEGV in malloc.c"</a>
<li><strong>In reply to:</strong> <a href="12808.php">George Bosilca: "Re: [OMPI devel] ompi_info"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/07/12651.php">David Goodell (dgoodell): "Re: [OMPI devel] ompi_info"</a>
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
