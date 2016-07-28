<?
$subject_val = "Re: [OMPI devel] Need v1.3 RM ruling (was: Help on building	openmpi with &quot;-Wl, --as-needed -Wl, --no-undefined&quot;)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 25 17:21:21 2008" -->
<!-- isoreceived="20080725212121" -->
<!-- sent="Fri, 25 Jul 2008 17:21:14 -0400" -->
<!-- isosent="20080725212114" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Need v1.3 RM ruling (was: Help on building	openmpi with &amp;quot;-Wl, --as-needed -Wl, --no-undefined&amp;quot;)" -->
<!-- id="1D3E7739-FF05-4A83-BF85-C35503A892EB_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="5A09B461-69A5-4463-9636-E1B3F08ECC81_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Need v1.3 RM ruling (was: Help on building	openmpi with &quot;-Wl, --as-needed -Wl, --no-undefined&quot;)<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-25 17:21:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4437.php">Jeff Squyres: "Re: [OMPI devel] === CREATE FAILURE ==="</a>
<li><strong>Previous message:</strong> <a href="4435.php">Jeff Squyres: "[OMPI devel] moving code to trunk"</a>
<li><strong>In reply to:</strong> <a href="4428.php">Jeff Squyres: "Re: [OMPI devel] Need v1.3 RM ruling (was: Help on building	openmpi with &quot;-Wl, --as-needed -Wl, --no-undefined&quot;)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Fix committed to trunk in r19040.  I'll let it soak for a few days  
<br>
before moving it to v1.3.
<br>
<p>Given that the fix was a bit hairy, I'd prefer not to port it back to  
<br>
v1.2 unless absolutely required...
<br>
<p><p>On Jul 24, 2008, at 10:49 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Jul 24, 2008, at 8:44 AM, Ralf Wildenhues wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have no idea what Jeff's approach is,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My approach was to move some of the f77 files so that we could  
</span><br>
<span class="quotelev1">&gt; traverse directories in order nicely.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; and I would not recommend
</span><br>
<span class="quotelev2">&gt;&gt; entering some makefiles more than once, but what you can do is list
</span><br>
<span class="quotelev2">&gt;&gt; some files outside their directory.  I.e, you could have
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- mpi/f77/Makefile_base.am --
</span><br>
<span class="quotelev2">&gt;&gt; libmpi_f77_base_la_SOURCES = mpi/f77/file1.f ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- Makefile.am --
</span><br>
<span class="quotelev2">&gt;&gt; include mpi/f77/Makefile_base.am
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- mpi/f77/Makefile.am --
</span><br>
<span class="quotelev2">&gt;&gt; # This will appear later in SUBDIRS
</span><br>
<span class="quotelev2">&gt;&gt; libmpi_f77_la_SOURCES = file3.f ...
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I had this same idea while reading George's initial post -- using  
</span><br>
<span class="quotelev1">&gt; multiple Makefile_&lt;foo&gt;'s in the f77 dir that then get included from  
</span><br>
<span class="quotelev1">&gt; other places to enforce the build order.  We already use &quot;include&quot; a  
</span><br>
<span class="quotelev1">&gt; bit to decrease build times, so this isn't too much of a stretch for  
</span><br>
<span class="quotelev1">&gt; us.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This seems like a workable approach, and addresses George's concern  
</span><br>
<span class="quotelev1">&gt; of keeping all the Fortran code together (I agree: splitting the  
</span><br>
<span class="quotelev1">&gt; Fortran code into multiple places is kinda icky; it would be nice to  
</span><br>
<span class="quotelev1">&gt; not have to put multiple subdirs under ompi/mpi/f77).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'll run with this and see what I can come up with.
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
<li><strong>Next message:</strong> <a href="4437.php">Jeff Squyres: "Re: [OMPI devel] === CREATE FAILURE ==="</a>
<li><strong>Previous message:</strong> <a href="4435.php">Jeff Squyres: "[OMPI devel] moving code to trunk"</a>
<li><strong>In reply to:</strong> <a href="4428.php">Jeff Squyres: "Re: [OMPI devel] Need v1.3 RM ruling (was: Help on building	openmpi with &quot;-Wl, --as-needed -Wl, --no-undefined&quot;)"</a>
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
