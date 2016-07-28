<?
$subject_val = "Re: [OMPI devel] RFC: Deprecate rankfile?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 15 23:26:29 2010" -->
<!-- isoreceived="20100416032629" -->
<!-- sent="Thu, 15 Apr 2010 21:26:19 -0600" -->
<!-- isosent="20100416032619" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Deprecate rankfile?" -->
<!-- id="CF14E539-603C-4078-A564-B49EE97210F2_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="30110365-51C1-4033-A3F1-AC0C5320657E_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Deprecate rankfile?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-15 23:26:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7756.php">’≈æß: "[OMPI devel] Migrate the OpenMPI to VxWorks"</a>
<li><strong>Previous message:</strong> <a href="7754.php">Eugene Loh: "Re: [OMPI devel] RFC: Deprecate rankfile?"</a>
<li><strong>In reply to:</strong> <a href="7752.php">Jeff Squyres: "[OMPI devel] RFC: Deprecate rankfile?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7760.php">Terry Dontje: "Re: [OMPI devel] RFC: Deprecate rankfile?"</a>
<li><strong>Reply:</strong> <a href="7760.php">Terry Dontje: "Re: [OMPI devel] RFC: Deprecate rankfile?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Read the other &quot;no&quot; votes, and I can understand the points made. I noted that neither respondent offered to maintain this feature, but indicated that it had some value.
<br>
<p>There really isn't any need to make a decision about this because it will take care of itself. Since no-one is maintaining it (and I really don't have time to continue to do so), and it tends to break easily, this module will &quot;self-deprecate&quot; rather soon. When that happens, we can wait and see if anyone cares enough to step forward and take responsibility for maintaining it.
<br>
<p>If not, then we can note that support for this feature went the way of other things that died due to lack of interest within the developer community (e.g., xgrid)...which is totally okay since this is, after all, an open source effort.
<br>
<p><p>On Apr 15, 2010, at 4:00 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; WHAT: Deprecate the &quot;rankfile&quot; component in the v1.5 series; remove it in the 1.7 series
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHY: It's old, creaky, and difficult to maintain.  It'll require maintenance someday soon, when we support hardware / hyperthreads in OMPI.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHERE: svn rm orte/mca/rmaps/rank_file
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHEN: Deprecate in 1.5, remove in 1.7.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; TIMEOUT: Teleconf on Tue, 27 April 2010
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now that we have nice paffinity binding options, can we deprecate rankfile in the 1.5 series and remove it in 1.7?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I only ask because it's kind of a pain to maintain.  It's not a huge deal, but Ralph and I were talking about another paffinity issue today and we both groaned at the prospect of extending rank file to support hyperthreads (and/or boards).  Perhaps it should just go away...?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Pro: less maintenance, especially since the original developers no longer maintain it
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Con: it's the only way to have completely custom affinity bindings (i.e., outside of our pre-constructed &quot;bind to socket&quot;, &quot;bind to core&quot;, etc. options).  ...do any other MPI's offer completely custom binding options?  I.e., do any real users care?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7756.php">’≈æß: "[OMPI devel] Migrate the OpenMPI to VxWorks"</a>
<li><strong>Previous message:</strong> <a href="7754.php">Eugene Loh: "Re: [OMPI devel] RFC: Deprecate rankfile?"</a>
<li><strong>In reply to:</strong> <a href="7752.php">Jeff Squyres: "[OMPI devel] RFC: Deprecate rankfile?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7760.php">Terry Dontje: "Re: [OMPI devel] RFC: Deprecate rankfile?"</a>
<li><strong>Reply:</strong> <a href="7760.php">Terry Dontje: "Re: [OMPI devel] RFC: Deprecate rankfile?"</a>
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
