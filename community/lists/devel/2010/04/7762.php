<?
$subject_val = "Re: [OMPI devel] RFC: Deprecate rankfile?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 16 07:10:51 2010" -->
<!-- isoreceived="20100416111051" -->
<!-- sent="Fri, 16 Apr 2010 07:08:28 -0400" -->
<!-- isosent="20100416110828" -->
<!-- name="Terry Dontje" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Deprecate rankfile?" -->
<!-- id="4BC8452C.4020507_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="3F62D5E7-AEF5-4158-8DF2-AD12AA183311_at_cisco.com" -->
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
<strong>From:</strong> Terry Dontje (<em>terry.dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-16 07:08:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7763.php">Ralph Castain: "Re: [OMPI devel] RFC: Deprecate rankfile?"</a>
<li><strong>Previous message:</strong> <a href="7761.php">Jeff Squyres: "Re: [OMPI devel] RFC: Deprecate rankfile?"</a>
<li><strong>In reply to:</strong> <a href="7761.php">Jeff Squyres: "Re: [OMPI devel] RFC: Deprecate rankfile?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7763.php">Ralph Castain: "Re: [OMPI devel] RFC: Deprecate rankfile?"</a>
<li><strong>Reply:</strong> <a href="7763.php">Ralph Castain: "Re: [OMPI devel] RFC: Deprecate rankfile?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Apr 16, 2010, at 6:43 AM, Terry Dontje wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; If you are suggesting that you will make code that breaks a current rankfile feature, note I am not talking about adding a new feature that isn't supported by rankfile but something that used to work, then I think you are acting in poor form.  At a minimum you should at least give the community a heads up that you are borking a feature.
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Er... no.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There is nothing nefarious going on here.  Ralph and I were just chatting yesterday about some process affinity issues and the topic of rank_file came up (again).  Remember that rank_file was a &quot;throw over the wall&quot; kind of code contribution and has historically been difficult to maintain.  Neither of us were excited at the prospect of adding hyperthreading support (once hwloc is finally released -- unfortunately, it's blocking on me, at the moment...) and also having to extend rank file to support it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I asked Ralph if we should deprecate rank_file since the other binding options are available.  He assumed (correctly, it turns out) that no one would go for that.  But I figured I'd ask anyway.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think all Ralph is saying is that we're (I'm) likely to add hyperthreading support in the not-distant future (and maybe Oracle will add support for boards).  This work is not likely to *break* rank_file, but neither of us are excited about extending rank_file to support hyperthreading.  If no one else steps up to extend it, then it may become obsolete over time because it doesn't support the things that people want.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
I am ok with the above. 
<br>
<span class="quotelev1">&gt; Terry -- perhaps it's time to resurrect the new processor affinity proposal that you've been promising me for many months.  If rank_file were replaced with Something Better, I'd certainly be happy.  ;-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
Can we then have Ralph implement it :-)...  That was a joke Ralph!!!
<br>
<p><p><pre>
-- 
Oracle
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.650.633.7054
Oracle * - Performance Technologies*
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</pre>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-7762/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/devel/att-7762/02-part" alt="picture">
<!-- attachment="02-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7763.php">Ralph Castain: "Re: [OMPI devel] RFC: Deprecate rankfile?"</a>
<li><strong>Previous message:</strong> <a href="7761.php">Jeff Squyres: "Re: [OMPI devel] RFC: Deprecate rankfile?"</a>
<li><strong>In reply to:</strong> <a href="7761.php">Jeff Squyres: "Re: [OMPI devel] RFC: Deprecate rankfile?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7763.php">Ralph Castain: "Re: [OMPI devel] RFC: Deprecate rankfile?"</a>
<li><strong>Reply:</strong> <a href="7763.php">Ralph Castain: "Re: [OMPI devel] RFC: Deprecate rankfile?"</a>
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
