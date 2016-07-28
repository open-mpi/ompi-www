<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct 15 13:57:02 2007" -->
<!-- isoreceived="20071015175702" -->
<!-- sent="Mon, 15 Oct 2007 13:56:51 -0400" -->
<!-- isosent="20071015175651" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: versioning OMPI libraries" -->
<!-- id="290E4B36-7309-443C-AB52-C6C0AA862F29_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20071015171610.GO1707_at_mv.qlogic.com" -->
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
<strong>Date:</strong> 2007-10-15 13:56:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2451.php">Brian Barrett: "Re: [OMPI devel] RFC: versioning OMPI libraries"</a>
<li><strong>Previous message:</strong> <a href="2449.php">Terry Dontje: "Re: [OMPI devel] RFC: versioning OMPI libraries"</a>
<li><strong>In reply to:</strong> <a href="2448.php">Christian Bell: "Re: [OMPI devel] RFC: versioning OMPI libraries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2451.php">Brian Barrett: "Re: [OMPI devel] RFC: versioning OMPI libraries"</a>
<li><strong>Reply:</strong> <a href="2451.php">Brian Barrett: "Re: [OMPI devel] RFC: versioning OMPI libraries"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ok, having read the libtool docs now, I see why the release number is  
<br>
a bad idea.  :-)
<br>
<p>I'm assuming that:
<br>
<p>- The libmpi interface will rarely change, but we may add to it over  
<br>
time (there's a specific point about this in the libtool docs -- no  
<br>
problem)
<br>
- The libopen-rte interface historically has had major changes  
<br>
between major releases and may have interface changes between minor  
<br>
releases, too
<br>
- The libopen-pal interface is relatively stable -- I actually  
<br>
haven't been checking how often it changes
<br>
<p>So if we do this, I think the RM's would need to be responsible for  
<br>
marshaling this information and setting the appropriate values.  I  
<br>
can convert the build system to do use this kind of information; the  
<br>
real question is whether the community wants to utilize it or not  
<br>
(and whether the RM's will take on the responsibility of gathering  
<br>
this data for each release).
<br>
<p><p>On Oct 15, 2007, at 1:16 PM, Christian Bell wrote:
<br>
<p><span class="quotelev1">&gt; On Mon, 15 Oct 2007, Brian Barrett wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Nooooo! :)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It would be good for everyone to read the Libtool documentation to
</span><br>
<span class="quotelev2">&gt;&gt; see why versioning on the release number would be a really bad idea.
</span><br>
<span class="quotelev2">&gt;&gt; Then comment.  But my opinion would be that you should change based
</span><br>
<span class="quotelev2">&gt;&gt; on interface changes, not based on release numbers.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, I second Brian.  Notwithstanding what the popular vote is on MPI
</span><br>
<span class="quotelev1">&gt; ABI compatibility across MPI implementations, I think that
</span><br>
<span class="quotelev1">&gt; major/minor numbering within an implementation should be used to
</span><br>
<span class="quotelev1">&gt; indiciate when interfaces break, not give hints as to what release
</span><br>
<span class="quotelev1">&gt; they pertain to.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     . . christian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; christian.bell_at_[hidden]
</span><br>
<span class="quotelev1">&gt; (QLogic Host Solutions Group, formerly Pathscale)
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
<li><strong>Next message:</strong> <a href="2451.php">Brian Barrett: "Re: [OMPI devel] RFC: versioning OMPI libraries"</a>
<li><strong>Previous message:</strong> <a href="2449.php">Terry Dontje: "Re: [OMPI devel] RFC: versioning OMPI libraries"</a>
<li><strong>In reply to:</strong> <a href="2448.php">Christian Bell: "Re: [OMPI devel] RFC: versioning OMPI libraries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2451.php">Brian Barrett: "Re: [OMPI devel] RFC: versioning OMPI libraries"</a>
<li><strong>Reply:</strong> <a href="2451.php">Brian Barrett: "Re: [OMPI devel] RFC: versioning OMPI libraries"</a>
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
