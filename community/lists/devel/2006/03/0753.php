<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Mar 16 08:51:40 2006" -->
<!-- isoreceived="20060316135140" -->
<!-- sent="Thu, 16 Mar 2006 08:51:39 -0500" -->
<!-- isosent="20060316135139" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] ompi/Makefile.am: DIST_SUBDIRS" -->
<!-- id="234B144E-2E1E-4048-8477-0B53AC2F266B_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20060316134907.GA8580_at_iam.uni-bonn.de" -->
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
<strong>Date:</strong> 2006-03-16 08:51:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0754.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] ompi/Makefile.am: DIST_SUBDIRS"</a>
<li><strong>Previous message:</strong> <a href="0752.php">Ralf Wildenhues: "[OMPI devel] ompi/Makefile.am: DIST_SUBDIRS"</a>
<li><strong>In reply to:</strong> <a href="0752.php">Ralf Wildenhues: "[OMPI devel] ompi/Makefile.am: DIST_SUBDIRS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0754.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] ompi/Makefile.am: DIST_SUBDIRS"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We got this one already, but thanks! :)
<br>
<p>Our sysadmin is looking into why read-only access isn't working  
<br>
properly.
<br>
<p>Brian
<br>
<p>On Mar 16, 2006, at 8:49 AM, Ralf Wildenhues wrote:
<br>
<p><span class="quotelev1">&gt; Please distribute trunk/ompi/datatype as below, thanks!  :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; BTW, a 'svn update' currently wants a password from me:
</span><br>
<span class="quotelev1">&gt; | Authentication realm: &lt;<a href="http://svn.open-mpi.org:80">http://svn.open-mpi.org:80</a>&gt; Open MPI  
</span><br>
<span class="quotelev1">&gt; Subversion repositories access
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A bit weird for read-only access.. but I guess that is part of the
</span><br>
<span class="quotelev1">&gt; temporary changes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Ralf
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Index: ompi/Makefile.am
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- ompi/Makefile.am	(revision 9285)
</span><br>
<span class="quotelev1">&gt; +++ ompi/Makefile.am	(working copy)
</span><br>
<span class="quotelev1">&gt; @@ -64,6 +64,7 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  DIST_SUBDIRS = \
</span><br>
<span class="quotelev1">&gt;  	include \
</span><br>
<span class="quotelev1">&gt; +	datatype \
</span><br>
<span class="quotelev1">&gt;  	debuggers \
</span><br>
<span class="quotelev1">&gt;  	etc \
</span><br>
<span class="quotelev1">&gt;  	mpi \
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
<li><strong>Next message:</strong> <a href="0754.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] ompi/Makefile.am: DIST_SUBDIRS"</a>
<li><strong>Previous message:</strong> <a href="0752.php">Ralf Wildenhues: "[OMPI devel] ompi/Makefile.am: DIST_SUBDIRS"</a>
<li><strong>In reply to:</strong> <a href="0752.php">Ralf Wildenhues: "[OMPI devel] ompi/Makefile.am: DIST_SUBDIRS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0754.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] ompi/Makefile.am: DIST_SUBDIRS"</a>
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
