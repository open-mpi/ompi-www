<?
$subject_val = "Re: [OMPI devel] [EXTERNAL] Re:	[OMPI	svn-full]	svn:open-mpi	r29703	-	in	trunk:	contrib/platform/iu/odin	ompi/mca/btl/openib	ompi/mca/btl/openib/connect";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 15 00:30:39 2013" -->
<!-- isoreceived="20131115053039" -->
<!-- sent="Thu, 14 Nov 2013 21:29:37 -0800" -->
<!-- isosent="20131115052937" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL] Re:	[OMPI	svn-full]	svn:open-mpi	r29703	-	in	trunk:	contrib/platform/iu/odin	ompi/mca/btl/openib	ompi/mca/btl/openib/connect" -->
<!-- id="C866BC8F-52EE-4A56-8CD6-7B38D4239523_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="8EDEBDDE2C39D447A738659597BBB63A37F6F632_at_MTIDAG01.mtl.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [EXTERNAL] Re:	[OMPI	svn-full]	svn:open-mpi	r29703	-	in	trunk:	contrib/platform/iu/odin	ompi/mca/btl/openib	ompi/mca/btl/openib/connect<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-15 00:29:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13285.php">George Bosilca: "Re: [OMPI devel] RFC: usnic BTL MPI_T pvar scheme"</a>
<li><strong>Previous message:</strong> <a href="13283.php">Joshua Ladd: "Re: [OMPI devel] [EXTERNAL] Re:	[OMPI	svn-full]	svn:open-mpi	r29703	-	in	trunk:	contrib/platform/iu/odin	ompi/mca/btl/openib	ompi/mca/btl/openib/connect"</a>
<li><strong>In reply to:</strong> <a href="13283.php">Joshua Ladd: "Re: [OMPI devel] [EXTERNAL] Re:	[OMPI	svn-full]	svn:open-mpi	r29703	-	in	trunk:	contrib/platform/iu/odin	ompi/mca/btl/openib	ompi/mca/btl/openib/connect"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 14, 2013, at 7:48 PM, Joshua Ladd &lt;joshual_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; The proof of the pudding is that all of the MPI layer has been adapted to the new async behavior -except- for the openib cpc's. The issue of what to do with these has been raised several times, especially once the ofacm code was committed. Unfortunately, lack of time and priorities left this code to bitrot.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; [Josh] Not completely true, UDCM is supposed to be the alternative, at least for RC. It&#146;s easy to say - &#147;well, everything works now except OpenIB&#148;. If we&#146;re working under the assumption that these were community decisions wholeheartedly agreed upon and fully endorsed by all members, well then we have to also believe that we agreed as a community to the following list of tasks and nobody&#146;s done anything. The only ones explicitly committed to technical work - Mellanox.  Per Jeff&#146;s words, &#147;the next dominos to fall&#148; implies at least a partial ordering. We need a functioning UDCM before we can study it and figure out how to adapt it to XRC - maybe it is functioning perfectly, who knows??! Nobody, apparently - seems like it should&#146;ve been released into the wild in 1.7.3. Are there some ppt slides that we can look at from the RFC? If so, I&#146;ve been unable to locate them. Unfortunately, this is just one piece of what&#146;s missing and we are relying on the rest of the community that agreed to these changes to make good on their promises. My biggest issue this morning is that UDCM is not in 1.7 but the OOB change is - that&#146;s a problem. You skipped steps 1, 2, 3, and 4 and went right to 5 - that&#146;s a problem. That&#146;s not what we as a community agreed upon.  
</span><br>
<p>As you may recall, I deleted those from 1.7.4 because they don't work - as you folks repeatedly noted. The problem is that this change has been in the trunk, including the deprecation of the OOB cpc's per your noting that they weren't working on the trunk, for quite some time.
<br>
<p>So this has actually been a good thing as it is finally forcing the corrective action to be taken. Nobody is blaming Mellanox, but this has to be resolved, and it clearly wasn't going to happen until a forcing event occurred.
<br>
<p>Hopefully, Pasha and Nathan will be able to help you guys figure out how get udcm working and validated.
<br>
Ralph
<br>
<p><p><span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Josh
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI devel] Openib + common/verbs CPC consolidation
</span><br>
<span class="quotelev1">&gt; From: Jeff Squyres (jsquyres) (jsquyres_at_[hidden])
</span><br>
<span class="quotelev1">&gt; Date: 2013-05-14 15:29:15
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Next message: Rolf vandeVaart: &quot;[OMPI devel] Build warnings in trunk&quot;
</span><br>
<span class="quotelev1">&gt; Previous message: Ralph Castain: &quot;[OMPI devel] RFC: rewrite of ORTE OOB&quot;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  FYI: On the teleconf today, we talked about the next dominos to fall in the quest to move the BTLs down to OPAL:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. Nathan will make the openib &quot;udcm&quot; CPC the default in the immediate future 
</span><br>
<span class="quotelev1">&gt;    --&gt; This paves the way to ditch the problematic &quot;oob&quot; openib CPC 
</span><br>
<span class="quotelev1">&gt;    --&gt; This also will give udcm more widespread testing 
</span><br>
<span class="quotelev1">&gt; 2. Mellanox will add XRC support to udcm 
</span><br>
<span class="quotelev1">&gt;    --&gt; This paves the way to ditch the problematic &quot;xoob&quot; openib CPC 
</span><br>
<span class="quotelev1">&gt;    --&gt; Josh thought they could do this within a month, but that's a SWAG and subject to change 
</span><br>
<span class="quotelev1">&gt; 3. I will ping Chelsio about getting them to add proper iWARP support into common/ofacm 
</span><br>
<span class="quotelev1">&gt;    --&gt; This paves the way to eliminate btl/openib/cpc 
</span><br>
<span class="quotelev1">&gt;    --&gt; No idea on timeframe yet 
</span><br>
<span class="quotelev1">&gt; 4. Once #3 is done, make openib use common/ofacm 
</span><br>
<span class="quotelev1">&gt; 5. Once #2, #3, and #4 are done, delete btl/openib/cpc
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #1-3 have people assigned to them. #4 does not (#5 is pretty trivial -- an svn rm plus some Makefile.am mods).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13284/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13285.php">George Bosilca: "Re: [OMPI devel] RFC: usnic BTL MPI_T pvar scheme"</a>
<li><strong>Previous message:</strong> <a href="13283.php">Joshua Ladd: "Re: [OMPI devel] [EXTERNAL] Re:	[OMPI	svn-full]	svn:open-mpi	r29703	-	in	trunk:	contrib/platform/iu/odin	ompi/mca/btl/openib	ompi/mca/btl/openib/connect"</a>
<li><strong>In reply to:</strong> <a href="13283.php">Joshua Ladd: "Re: [OMPI devel] [EXTERNAL] Re:	[OMPI	svn-full]	svn:open-mpi	r29703	-	in	trunk:	contrib/platform/iu/odin	ompi/mca/btl/openib	ompi/mca/btl/openib/connect"</a>
<!-- nextthread="start" -->
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
