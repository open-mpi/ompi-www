<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16691";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  8 08:02:24 2007" -->
<!-- isoreceived="20071108130224" -->
<!-- sent="Thu, 8 Nov 2007 08:02:09 -0500" -->
<!-- isosent="20071108130209" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16691" -->
<!-- id="5007EC59-0784-42E1-899C-63C50D2E08C1_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20071108125707.GQ6390_at_ltw.loris.tv" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16691<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-08 08:02:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2586.php">Terry Dontje: "Re: [OMPI devel] accessors to context id and message id's"</a>
<li><strong>Previous message:</strong> <a href="2584.php">Adrian Knoth: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16691"</a>
<li><strong>In reply to:</strong> <a href="2584.php">Adrian Knoth: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16691"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2597.php">Adrian Knoth: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16691"</a>
<li><strong>Reply:</strong> <a href="2597.php">Adrian Knoth: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16691"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 8, 2007, at 7:57 AM, Adrian Knoth wrote:
<br>
<p><span class="quotelev2">&gt;&gt; All ROMIO patches *must* be coordinated with the ROMIO maintainers.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Upstream? That's the upstream patch.
</span><br>
<p>That was extracted from ROMIO itself?  Which release?
<br>
<p><span class="quotelev1">&gt; Jiri Polach has extracted the fix for this problem. Updating OMPI to a
</span><br>
<span class="quotelev1">&gt; newer ROMIO version should do the trick, so we might want to revert
</span><br>
<span class="quotelev1">&gt; r16693 and r16691.
</span><br>
<p>It would be great to upgrade to a newer version of ROMIO.  Do you have  
<br>
the cycles to do it?
<br>
<p>If this is slated for v1.3, then I think it would be much better to  
<br>
back out that patch and then do a real upgrade.  I have a few ideas  
<br>
about making the integration easier (e.g., forget the whole idea of  
<br>
renaming files -- it was a good idea but has a) turned out to not  
<br>
really be necessary in practice [even though theoretically it's still  
<br>
the Right Thing to Do], and b) it's a giant PITA for continual  
<br>
integration), and Rob Latham has indicated that he was going to put  
<br>
ROMIO in its own SVN which might make 1 or 2 of the integration issues  
<br>
easier (but we're certainly not going to grab random snapshots :-) ).   
<br>
There was a short mail thread about this a while ago on this list.
<br>
<p>I'd be happy to point someone in the right direction for ROMIO  
<br>
maintenance, but I do not have the cycles to do this at the moment.   
<br>
Probably not until the January/February timeframe, unfortunately...
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2586.php">Terry Dontje: "Re: [OMPI devel] accessors to context id and message id's"</a>
<li><strong>Previous message:</strong> <a href="2584.php">Adrian Knoth: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16691"</a>
<li><strong>In reply to:</strong> <a href="2584.php">Adrian Knoth: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16691"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2597.php">Adrian Knoth: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16691"</a>
<li><strong>Reply:</strong> <a href="2597.php">Adrian Knoth: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16691"</a>
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
