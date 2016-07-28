<?
$subject_val = "Re: [OMPI devel] RFC: Deprecate rankfile?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 16 08:33:59 2010" -->
<!-- isoreceived="20100416123359" -->
<!-- sent="Fri, 16 Apr 2010 06:33:50 -0600" -->
<!-- isosent="20100416123350" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Deprecate rankfile?" -->
<!-- id="6F3171A9-89B3-47A6-858A-AC72676765EA_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4BC8452C.4020507_at_oracle.com" -->
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
<strong>Date:</strong> 2010-04-16 08:33:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7764.php">Ralph Castain: "Re: [OMPI devel] &#231;&#173;&#148;&#229;&#164;&#141;:  Migrate the OpenMPI to VxWorks"</a>
<li><strong>Previous message:</strong> <a href="7762.php">Terry Dontje: "Re: [OMPI devel] RFC: Deprecate rankfile?"</a>
<li><strong>In reply to:</strong> <a href="7762.php">Terry Dontje: "Re: [OMPI devel] RFC: Deprecate rankfile?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7765.php">Terry Dontje: "Re: [OMPI devel] RFC: Deprecate rankfile?"</a>
<li><strong>Reply:</strong> <a href="7765.php">Terry Dontje: "Re: [OMPI devel] RFC: Deprecate rankfile?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
To be clear, I wasn't implying anyone would intentionally break rank_file. However, it is rarely (if ever?) tested before we release - AFAIK, none of the MTT tests run by the community test this feature. Thus, it inevitably breaks without detection as changes are made elsewhere in the system. We typically don't know it is broken until someone complains about it, which usually is several months after the release.
<br>
<p>So I'll stand by my &quot;self deprecate&quot; comment. It has been the history of this feature, and I don't see anything changing to improve that situation.
<br>
<p>Now if you implement a replacement... :-)
<br>
<p>On Apr 16, 2010, at 5:08 AM, Terry Dontje wrote:
<br>
<p><span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 16, 2010, at 6:43 AM, Terry Dontje wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If you are suggesting that you will make code that breaks a current rankfile feature, note I am not talking about adding a new feature that isn't supported by rankfile but something that used to work, then I think you are acting in poor form.  At a minimum you should at least give the community a heads up that you are borking a feature.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Er... no.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; There is nothing nefarious going on here.  Ralph and I were just chatting yesterday about some process affinity issues and the topic of rank_file came up (again).  Remember that rank_file was a &quot;throw over the wall&quot; kind of code contribution and has historically been difficult to maintain.  Neither of us were excited at the prospect of adding hyperthreading support (once hwloc is finally released -- unfortunately, it's blocking on me, at the moment...) and also having to extend rank file to support it.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I asked Ralph if we should deprecate rank_file since the other binding options are available.  He assumed (correctly, it turns out) that no one would go for that.  But I figured I'd ask anyway.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I think all Ralph is saying is that we're (I'm) likely to add hyperthreading support in the not-distant future (and maybe Oracle will add support for boards).  This work is not likely to *break* rank_file, but neither of us are excited about extending rank_file to support hyperthreading.  If no one else steps up to extend it, then it may become obsolete over time because it doesn't support the things that people want.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev1">&gt; I am ok with the above.  
</span><br>
<span class="quotelev2">&gt;&gt; Terry -- perhaps it's time to resurrect the new processor affinity proposal that you've been promising me for many months.  If rank_file were replaced with Something Better, I'd certainly be happy.  ;-)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev1">&gt; Can we then have Ralph implement it :-)...  That was a joke Ralph!!!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; &lt;Mail Attachment.gif&gt;
</span><br>
<span class="quotelev1">&gt; Terry D. Dontje | Principal Software Engineer
</span><br>
<span class="quotelev1">&gt; Developer Tools Engineering | +1.650.633.7054
</span><br>
<span class="quotelev1">&gt; Oracle - Performance Technologies
</span><br>
<span class="quotelev1">&gt; 95 Network Drive, Burlington, MA 01803
</span><br>
<span class="quotelev1">&gt; Email terry.dontje_at_[hidden]
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-7763/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7764.php">Ralph Castain: "Re: [OMPI devel] &#231;&#173;&#148;&#229;&#164;&#141;:  Migrate the OpenMPI to VxWorks"</a>
<li><strong>Previous message:</strong> <a href="7762.php">Terry Dontje: "Re: [OMPI devel] RFC: Deprecate rankfile?"</a>
<li><strong>In reply to:</strong> <a href="7762.php">Terry Dontje: "Re: [OMPI devel] RFC: Deprecate rankfile?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7765.php">Terry Dontje: "Re: [OMPI devel] RFC: Deprecate rankfile?"</a>
<li><strong>Reply:</strong> <a href="7765.php">Terry Dontje: "Re: [OMPI devel] RFC: Deprecate rankfile?"</a>
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
