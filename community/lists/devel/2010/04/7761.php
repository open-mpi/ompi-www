<?
$subject_val = "Re: [OMPI devel] RFC: Deprecate rankfile?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 16 07:03:23 2010" -->
<!-- isoreceived="20100416110323" -->
<!-- sent="Fri, 16 Apr 2010 07:03:19 -0400" -->
<!-- isosent="20100416110319" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Deprecate rankfile?" -->
<!-- id="3F62D5E7-AEF5-4158-8DF2-AD12AA183311_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4BC83F36.4070502_at_oracle.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-16 07:03:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7762.php">Terry Dontje: "Re: [OMPI devel] RFC: Deprecate rankfile?"</a>
<li><strong>Previous message:</strong> <a href="7760.php">Terry Dontje: "Re: [OMPI devel] RFC: Deprecate rankfile?"</a>
<li><strong>In reply to:</strong> <a href="7760.php">Terry Dontje: "Re: [OMPI devel] RFC: Deprecate rankfile?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7762.php">Terry Dontje: "Re: [OMPI devel] RFC: Deprecate rankfile?"</a>
<li><strong>Reply:</strong> <a href="7762.php">Terry Dontje: "Re: [OMPI devel] RFC: Deprecate rankfile?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 16, 2010, at 6:43 AM, Terry Dontje wrote:
<br>
<p><span class="quotelev1">&gt; If you are suggesting that you will make code that breaks a current rankfile feature, note I am not talking about adding a new feature that isn't supported by rankfile but something that used to work, then I think you are acting in poor form.  At a minimum you should at least give the community a heads up that you are borking a feature.
</span><br>
<p>Er... no.
<br>
<p>There is nothing nefarious going on here.  Ralph and I were just chatting yesterday about some process affinity issues and the topic of rank_file came up (again).  Remember that rank_file was a &quot;throw over the wall&quot; kind of code contribution and has historically been difficult to maintain.  Neither of us were excited at the prospect of adding hyperthreading support (once hwloc is finally released -- unfortunately, it's blocking on me, at the moment...) and also having to extend rank file to support it.
<br>
<p>I asked Ralph if we should deprecate rank_file since the other binding options are available.  He assumed (correctly, it turns out) that no one would go for that.  But I figured I'd ask anyway.
<br>
<p>I think all Ralph is saying is that we're (I'm) likely to add hyperthreading support in the not-distant future (and maybe Oracle will add support for boards).  This work is not likely to *break* rank_file, but neither of us are excited about extending rank_file to support hyperthreading.  If no one else steps up to extend it, then it may become obsolete over time because it doesn't support the things that people want.
<br>
<p>Terry -- perhaps it's time to resurrect the new processor affinity proposal that you've been promising me for many months.  If rank_file were replaced with Something Better, I'd certainly be happy.  ;-)
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
<li><strong>Next message:</strong> <a href="7762.php">Terry Dontje: "Re: [OMPI devel] RFC: Deprecate rankfile?"</a>
<li><strong>Previous message:</strong> <a href="7760.php">Terry Dontje: "Re: [OMPI devel] RFC: Deprecate rankfile?"</a>
<li><strong>In reply to:</strong> <a href="7760.php">Terry Dontje: "Re: [OMPI devel] RFC: Deprecate rankfile?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7762.php">Terry Dontje: "Re: [OMPI devel] RFC: Deprecate rankfile?"</a>
<li><strong>Reply:</strong> <a href="7762.php">Terry Dontje: "Re: [OMPI devel] RFC: Deprecate rankfile?"</a>
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
