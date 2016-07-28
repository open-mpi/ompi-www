<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct 15 14:02:21 2007" -->
<!-- isoreceived="20071015180221" -->
<!-- sent="Mon, 15 Oct 2007 14:02:16 -0400" -->
<!-- isosent="20071015180216" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: versioning OMPI libraries" -->
<!-- id="93311073-8114-4D58-91EE-571AD6BE369D_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="290E4B36-7309-443C-AB52-C6C0AA862F29_at_cisco.com" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-15 14:02:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2452.php">Paul H. Hargrove: "Re: [OMPI devel] RFC: versioning OMPI libraries"</a>
<li><strong>Previous message:</strong> <a href="2450.php">Jeff Squyres: "Re: [OMPI devel] RFC: versioning OMPI libraries"</a>
<li><strong>In reply to:</strong> <a href="2450.php">Jeff Squyres: "Re: [OMPI devel] RFC: versioning OMPI libraries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2452.php">Paul H. Hargrove: "Re: [OMPI devel] RFC: versioning OMPI libraries"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
BTW, Here's the documentation I was referring to:
<br>
<p>&nbsp;&nbsp;&nbsp;<a href="http://www.gnu.org/software/libtool/manual.html#Versioning">http://www.gnu.org/software/libtool/manual.html#Versioning</a>
<br>
<p>Now, the problem Open MPI faces is that while our MPI interface  
<br>
rarely changes  (and almost never in a backwards-incompatible way),  
<br>
the interface between components and libraries does.  So that could  
<br>
cause some interesting heartaches.
<br>
<p>Good luck,
<br>
<p>Brian
<br>
<p>On Oct 15, 2007, at 1:56 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Ok, having read the libtool docs now, I see why the release number is
</span><br>
<span class="quotelev1">&gt; a bad idea.  :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm assuming that:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - The libmpi interface will rarely change, but we may add to it over
</span><br>
<span class="quotelev1">&gt; time (there's a specific point about this in the libtool docs -- no
</span><br>
<span class="quotelev1">&gt; problem)
</span><br>
<span class="quotelev1">&gt; - The libopen-rte interface historically has had major changes
</span><br>
<span class="quotelev1">&gt; between major releases and may have interface changes between minor
</span><br>
<span class="quotelev1">&gt; releases, too
</span><br>
<span class="quotelev1">&gt; - The libopen-pal interface is relatively stable -- I actually
</span><br>
<span class="quotelev1">&gt; haven't been checking how often it changes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So if we do this, I think the RM's would need to be responsible for
</span><br>
<span class="quotelev1">&gt; marshaling this information and setting the appropriate values.  I
</span><br>
<span class="quotelev1">&gt; can convert the build system to do use this kind of information; the
</span><br>
<span class="quotelev1">&gt; real question is whether the community wants to utilize it or not
</span><br>
<span class="quotelev1">&gt; (and whether the RM's will take on the responsibility of gathering
</span><br>
<span class="quotelev1">&gt; this data for each release).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 15, 2007, at 1:16 PM, Christian Bell wrote:
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; christian.bell_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; (QLogic Host Solutions Group, formerly Pathscale)
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<li><strong>Next message:</strong> <a href="2452.php">Paul H. Hargrove: "Re: [OMPI devel] RFC: versioning OMPI libraries"</a>
<li><strong>Previous message:</strong> <a href="2450.php">Jeff Squyres: "Re: [OMPI devel] RFC: versioning OMPI libraries"</a>
<li><strong>In reply to:</strong> <a href="2450.php">Jeff Squyres: "Re: [OMPI devel] RFC: versioning OMPI libraries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2452.php">Paul H. Hargrove: "Re: [OMPI devel] RFC: versioning OMPI libraries"</a>
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
