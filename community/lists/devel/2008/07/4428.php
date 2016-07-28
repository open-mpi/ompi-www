<?
$subject_val = "Re: [OMPI devel] Need v1.3 RM ruling (was: Help on building	openmpi with &quot;-Wl, --as-needed -Wl, --no-undefined&quot;)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 24 10:49:50 2008" -->
<!-- isoreceived="20080724144950" -->
<!-- sent="Thu, 24 Jul 2008 10:49:43 -0400" -->
<!-- isosent="20080724144943" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Need v1.3 RM ruling (was: Help on building	openmpi with &amp;quot;-Wl, --as-needed -Wl, --no-undefined&amp;quot;)" -->
<!-- id="5A09B461-69A5-4463-9636-E1B3F08ECC81_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20080724124416.GA17264_at_ins.uni-bonn.de" -->
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
<strong>Date:</strong> 2008-07-24 10:49:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4429.php">Jeff Squyres: "Re: [OMPI devel] 1.3 branch"</a>
<li><strong>Previous message:</strong> <a href="4427.php">George Bosilca: "Re: [OMPI devel] 1.3 branch"</a>
<li><strong>In reply to:</strong> <a href="4424.php">Ralf Wildenhues: "Re: [OMPI devel] Need v1.3 RM ruling (was: Help on building	openmpi with &quot;-Wl, --as-needed -Wl, --no-undefined&quot;)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4436.php">Jeff Squyres: "Re: [OMPI devel] Need v1.3 RM ruling (was: Help on building	openmpi with &quot;-Wl, --as-needed -Wl, --no-undefined&quot;)"</a>
<li><strong>Reply:</strong> <a href="4436.php">Jeff Squyres: "Re: [OMPI devel] Need v1.3 RM ruling (was: Help on building	openmpi with &quot;-Wl, --as-needed -Wl, --no-undefined&quot;)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 24, 2008, at 8:44 AM, Ralf Wildenhues wrote:
<br>
<p><span class="quotelev1">&gt; I have no idea what Jeff's approach is,
</span><br>
<p>My approach was to move some of the f77 files so that we could  
<br>
traverse directories in order nicely.
<br>
<p><span class="quotelev1">&gt; and I would not recommend
</span><br>
<span class="quotelev1">&gt; entering some makefiles more than once, but what you can do is list
</span><br>
<span class="quotelev1">&gt; some files outside their directory.  I.e, you could have
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- mpi/f77/Makefile_base.am --
</span><br>
<span class="quotelev1">&gt; libmpi_f77_base_la_SOURCES = mpi/f77/file1.f ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Makefile.am --
</span><br>
<span class="quotelev1">&gt; include mpi/f77/Makefile_base.am
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- mpi/f77/Makefile.am --
</span><br>
<span class="quotelev1">&gt; # This will appear later in SUBDIRS
</span><br>
<span class="quotelev1">&gt; libmpi_f77_la_SOURCES = file3.f ...
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<p>I had this same idea while reading George's initial post -- using  
<br>
multiple Makefile_&lt;foo&gt;'s in the f77 dir that then get included from  
<br>
other places to enforce the build order.  We already use &quot;include&quot; a  
<br>
bit to decrease build times, so this isn't too much of a stretch for us.
<br>
<p>This seems like a workable approach, and addresses George's concern of  
<br>
keeping all the Fortran code together (I agree: splitting the Fortran  
<br>
code into multiple places is kinda icky; it would be nice to not have  
<br>
to put multiple subdirs under ompi/mpi/f77).
<br>
<p>I'll run with this and see what I can come up with.
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
<li><strong>Next message:</strong> <a href="4429.php">Jeff Squyres: "Re: [OMPI devel] 1.3 branch"</a>
<li><strong>Previous message:</strong> <a href="4427.php">George Bosilca: "Re: [OMPI devel] 1.3 branch"</a>
<li><strong>In reply to:</strong> <a href="4424.php">Ralf Wildenhues: "Re: [OMPI devel] Need v1.3 RM ruling (was: Help on building	openmpi with &quot;-Wl, --as-needed -Wl, --no-undefined&quot;)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4436.php">Jeff Squyres: "Re: [OMPI devel] Need v1.3 RM ruling (was: Help on building	openmpi with &quot;-Wl, --as-needed -Wl, --no-undefined&quot;)"</a>
<li><strong>Reply:</strong> <a href="4436.php">Jeff Squyres: "Re: [OMPI devel] Need v1.3 RM ruling (was: Help on building	openmpi with &quot;-Wl, --as-needed -Wl, --no-undefined&quot;)"</a>
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
