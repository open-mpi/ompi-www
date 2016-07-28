<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Oct 16 14:15:27 2007" -->
<!-- isoreceived="20071016181527" -->
<!-- sent="Tue, 16 Oct 2007 14:15:15 -0400" -->
<!-- isosent="20071016181515" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: versioning OMPI libraries" -->
<!-- id="DBB0614D-73EB-4E0B-8F67-29484F9810BA_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4713B8C5.8030400_at_lbl.gov" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-16 14:15:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2454.php">Jeff Squyres: "Re: [OMPI devel] RFC: delete mvapi BTL for v1.3"</a>
<li><strong>Previous message:</strong> <a href="2452.php">Paul H. Hargrove: "Re: [OMPI devel] RFC: versioning OMPI libraries"</a>
<li><strong>In reply to:</strong> <a href="2452.php">Paul H. Hargrove: "Re: [OMPI devel] RFC: versioning OMPI libraries"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Per discussion on the teleconf today, since the only OMPI member who  
<br>
cares has a workaround in their packaging of Open MPI for library  
<br>
versioning (Sun / ClusterTools), we have dropped this issue.  When/if  
<br>
someone cares about it enough in the future, they can re-open the  
<br>
issue.  I have filed a ticket to capture the idea for posterity:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/ticket/1167">https://svn.open-mpi.org/trac/ompi/ticket/1167</a>
<br>
<p>This RFC is now considered closed.
<br>
<p><p><p>On Oct 15, 2007, at 3:00 PM, Paul H. Hargrove wrote:
<br>
<p><span class="quotelev1">&gt; Christian Bell wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Mon, 15 Oct 2007, Brian Barrett wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Nooooo! :)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It would be good for everyone to read the Libtool documentation to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; see why versioning on the release number would be a really bad idea.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Then comment.  But my opinion would be that you should change based
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on interface changes, not based on release numbers.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yes, I second Brian.  Notwithstanding what the popular vote is on MPI
</span><br>
<span class="quotelev2">&gt;&gt; ABI compatibility across MPI implementations, I think that
</span><br>
<span class="quotelev2">&gt;&gt; major/minor numbering within an implementation should be used to
</span><br>
<span class="quotelev2">&gt;&gt; indiciate when interfaces break, not give hints as to what release
</span><br>
<span class="quotelev2">&gt;&gt; they pertain to.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     . . christian
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I agree w/ Brian and Christian... version the file according to
</span><br>
<span class="quotelev1">&gt; *interface* chages, not releases.  This is, as Brian mentions, all
</span><br>
<span class="quotelev1">&gt; explained very well in the libtool docs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; HPC Research Department                   Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
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
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2454.php">Jeff Squyres: "Re: [OMPI devel] RFC: delete mvapi BTL for v1.3"</a>
<li><strong>Previous message:</strong> <a href="2452.php">Paul H. Hargrove: "Re: [OMPI devel] RFC: versioning OMPI libraries"</a>
<li><strong>In reply to:</strong> <a href="2452.php">Paul H. Hargrove: "Re: [OMPI devel] RFC: versioning OMPI libraries"</a>
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
