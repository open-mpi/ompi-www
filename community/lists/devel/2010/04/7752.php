<?
$subject_val = "[OMPI devel] RFC: Deprecate rankfile?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 15 18:00:28 2010" -->
<!-- isoreceived="20100415220028" -->
<!-- sent="Thu, 15 Apr 2010 18:00:23 -0400" -->
<!-- isosent="20100415220023" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: Deprecate rankfile?" -->
<!-- id="30110365-51C1-4033-A3F1-AC0C5320657E_at_cisco.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: Deprecate rankfile?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-15 18:00:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7753.php">Graham, Richard L.: "Re: [OMPI devel] RFC: Deprecate rankfile?"</a>
<li><strong>Previous message:</strong> <a href="7751.php">Rolf vandeVaart: "[OMPI devel] Elimination of des-&gt;des_context entry"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7753.php">Graham, Richard L.: "Re: [OMPI devel] RFC: Deprecate rankfile?"</a>
<li><strong>Reply:</strong> <a href="7753.php">Graham, Richard L.: "Re: [OMPI devel] RFC: Deprecate rankfile?"</a>
<li><strong>Reply:</strong> <a href="7754.php">Eugene Loh: "Re: [OMPI devel] RFC: Deprecate rankfile?"</a>
<li><strong>Reply:</strong> <a href="7755.php">Ralph Castain: "Re: [OMPI devel] RFC: Deprecate rankfile?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
WHAT: Deprecate the &quot;rankfile&quot; component in the v1.5 series; remove it in the 1.7 series
<br>
<p>WHY: It's old, creaky, and difficult to maintain.  It'll require maintenance someday soon, when we support hardware / hyperthreads in OMPI.
<br>
<p>WHERE: svn rm orte/mca/rmaps/rank_file
<br>
<p>WHEN: Deprecate in 1.5, remove in 1.7.
<br>
<p>TIMEOUT: Teleconf on Tue, 27 April 2010
<br>
<p>-----
<br>
<p>Now that we have nice paffinity binding options, can we deprecate rankfile in the 1.5 series and remove it in 1.7?
<br>
<p>I only ask because it's kind of a pain to maintain.  It's not a huge deal, but Ralph and I were talking about another paffinity issue today and we both groaned at the prospect of extending rank file to support hyperthreads (and/or boards).  Perhaps it should just go away...?
<br>
<p>Pro: less maintenance, especially since the original developers no longer maintain it
<br>
<p>Con: it's the only way to have completely custom affinity bindings (i.e., outside of our pre-constructed &quot;bind to socket&quot;, &quot;bind to core&quot;, etc. options).  ...do any other MPI's offer completely custom binding options?  I.e., do any real users care?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7753.php">Graham, Richard L.: "Re: [OMPI devel] RFC: Deprecate rankfile?"</a>
<li><strong>Previous message:</strong> <a href="7751.php">Rolf vandeVaart: "[OMPI devel] Elimination of des-&gt;des_context entry"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7753.php">Graham, Richard L.: "Re: [OMPI devel] RFC: Deprecate rankfile?"</a>
<li><strong>Reply:</strong> <a href="7753.php">Graham, Richard L.: "Re: [OMPI devel] RFC: Deprecate rankfile?"</a>
<li><strong>Reply:</strong> <a href="7754.php">Eugene Loh: "Re: [OMPI devel] RFC: Deprecate rankfile?"</a>
<li><strong>Reply:</strong> <a href="7755.php">Ralph Castain: "Re: [OMPI devel] RFC: Deprecate rankfile?"</a>
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
