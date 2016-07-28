<?
$subject_val = "Re: [OMPI devel] RFC: Deprecate rankfile?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 15 19:16:34 2010" -->
<!-- isoreceived="20100415231634" -->
<!-- sent="Thu, 15 Apr 2010 19:16:19 -0400" -->
<!-- isosent="20100415231619" -->
<!-- name="Graham, Richard L." -->
<!-- email="rlgraham_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Deprecate rankfile?" -->
<!-- id="C7ED1683.A7AD%rlgraham_at_ornl.gov" -->
<!-- charset="iso-8859-1" -->
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
<strong>From:</strong> Graham, Richard L. (<em>rlgraham_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-15 19:16:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7754.php">Eugene Loh: "Re: [OMPI devel] RFC: Deprecate rankfile?"</a>
<li><strong>Previous message:</strong> <a href="7752.php">Jeff Squyres: "[OMPI devel] RFC: Deprecate rankfile?"</a>
<li><strong>In reply to:</strong> <a href="7752.php">Jeff Squyres: "[OMPI devel] RFC: Deprecate rankfile?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7754.php">Eugene Loh: "Re: [OMPI devel] RFC: Deprecate rankfile?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
&nbsp;&nbsp;If I can't have that type of fine level control, it means that any new development we do will have to replicate this functionality.  While most users don't need this sort of capabilities, it is essential for experimenting with some algorithmic ideas as new code is being developed.  We actually plan to bring in some new capabilities into the code base soon, for which we need this functionality.  If you don't want to enhance it to support new hardware capabilities, then please leave it in, and those that need such h/w support can extend this.
<br>
<p>Rich
<br>
<p><p>On 4/15/10 6:00 PM, &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p>WHAT: Deprecate the &quot;rankfile&quot; component in the v1.5 series; remove it in the 1.7 series
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
_______________________________________________
devel mailing list
devel_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7754.php">Eugene Loh: "Re: [OMPI devel] RFC: Deprecate rankfile?"</a>
<li><strong>Previous message:</strong> <a href="7752.php">Jeff Squyres: "[OMPI devel] RFC: Deprecate rankfile?"</a>
<li><strong>In reply to:</strong> <a href="7752.php">Jeff Squyres: "[OMPI devel] RFC: Deprecate rankfile?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7754.php">Eugene Loh: "Re: [OMPI devel] RFC: Deprecate rankfile?"</a>
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
