<?
$subject_val = "Re: [OMPI devel] The&quot; Missing Symbol&quot; issue and OpenMPI on NetBSD";
include("../../include/msg-header.inc");
?>
<!-- received="Sat May 15 08:12:55 2010" -->
<!-- isoreceived="20100515121255" -->
<!-- sent="Sat, 15 May 2010 08:12:49 -0400" -->
<!-- isosent="20100515121249" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] The&amp;quot; Missing Symbol&amp;quot; issue and OpenMPI on NetBSD" -->
<!-- id="21E7C156-8815-49AA-8729-7F81A8EC5ECD_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="0bca2d23702ba28361c107b5fd1e5f74.squirrel_at_mail.ecs.vuw.ac.nz" -->
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
<strong>Subject:</strong> Re: [OMPI devel] The&quot; Missing Symbol&quot; issue and OpenMPI on NetBSD<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-15 08:12:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7932.php">Ralph Castain: "Re: [OMPI devel] RFC: Remove all other paffinity components"</a>
<li><strong>Previous message:</strong> <a href="7930.php">Ralph Castain: "Re: [OMPI devel] Very poor performance with btl sm on twin nehalem servers with Mellanox ConnectX installed"</a>
<li><strong>In reply to:</strong> <a href="7913.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI devel] The&quot; Missing Symbol&quot; issue and OpenMPI on NetBSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7938.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI devel] The&quot; Missing Symbol&quot; issue and OpenMPI on NetBSD"</a>
<li><strong>Reply:</strong> <a href="7938.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI devel] The&quot; Missing Symbol&quot; issue and OpenMPI on NetBSD"</a>
<li><strong>Reply:</strong> <a href="7941.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI devel] The&quot; Missing Symbol&quot; issue and OpenMPI on NetBSD"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry for the delay in replying.
<br>
<p>I think that the issue here is the well-known libltdl &quot;reporting the wrong error message&quot; issue.  
<br>
<p>Specifically, sometimes libltdl fails to load a DSO for a good reason, but then libltdl fails to report the right reason as to why it failed to load the DSO.  Open MPI uses the function ld_dlerror() to get a printable string reason for why a DSO fails to load.  But sometimes that string reason is *wrong* (i.e., the DSO didn't load, but the reason OMPI printed out as to *why* it didn't load is incorrect).  And therefore what OMPI prints out is misleading, at best.
<br>
<p>Over time, we have tried two things to make this error message better:
<br>
<p>1. When we detect the &quot;wrong&quot; error message (i.e., if lt_dlerror() returns &quot;file not found&quot;), we actually use stat() to check for the presence of the file we were trying to open.  If we find the file, then we don't print the lt_dlerror(), but instead print the message you see:
<br>
<p>[europa.ecs.vuw.ac.nz:09687] mca: base: component_find: unable to open
<br>
/usr/pkg/lib/openmpi/mca_carto_auto_detect: perhaps a missing symbol, or
<br>
compiled for a different version of Open MPI? (ignored)
<br>
<p>So the error message is at least *somewhat* better than a totally misleading &quot;file not found&quot; message -- but it still only speculates on the real reason that libltdl failed to load the DSO.
<br>
<p>2. <a href="https://svn.open-mpi.org/trac/ompi/changeset/22806">https://svn.open-mpi.org/trac/ompi/changeset/22806</a> put in an OMPI-specific change to libltdl that avoids the incorrect error message altogether.  So now OMPI should print out the *real* reason libltdl failed to load the DSO.
<br>
<p>It does not look like this patch made it over into the v1.4 series; it is awaiting review before it moves to the v1.5 branch (<a href="https://svn.open-mpi.org/trac/ompi/ticket/2337">https://svn.open-mpi.org/trac/ompi/ticket/2337</a>).  
<br>
<p>Hope that all made sense!
<br>
<p>-----
<br>
<p>Now, all this being said, IIRC (and I very well may not!), the real underlying issue here is that R is dlopening libmpi.so, which, in turn, is dlopening its own DSOs.  Given the global linker scoping issues, OMPI's DSOs are unable to find the symbols they need to resolve in the process (because libmpi.so's was opened in a private scope).
<br>
<p>This probably is unfortunately larger than us (Open MPI) -- it's really a POSIX issue.  What would be ideal is if different linker namespaces could be something more fine-grained than &quot;global&quot; or &quot;private&quot; within a process.  E.g., if the private namespace of libmpi.so in the process could selectively make its symbol namespace available to the DSOs that it dlopens.  Right now, the only option libmpi.so has is to be opened with a public scope, which somewhat defeats the point of private scoping.
<br>
<p>Have you tried building Open MPI with the --disable-dlopen configure flag?  This will slurp all of OMPI's DSOs up into libmpi.so -- so there's no dlopening at run-time.  Hence, your app (R) can dlopen libmpi.so, but then libmpi.so doesn't dlopen anything else -- all of OMPI's plugins are physically located in libmpi.so.
<br>
<p><p><p><p>On May 11, 2010, at 8:33 PM, &lt;Kevin.Buckley_at_[hidden]&gt; &lt;Kevin.Buckley_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Which libltdl version is that NetBSD ltdl.h from?  Which version is
</span><br>
<span class="quotelev2">&gt; &gt; in opal/libltdl?  Have you tried not doing the above change?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; libltdl 2.2.x has incompatible changes over 1.5.x, both in the library
</span><br>
<span class="quotelev2">&gt; &gt; as well as in the header, as well as (I think) in preloaded modules.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hey Ralf,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The libtool distinfo file implies NetBSD currently uses libtool-2.2.6b.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; An ldd of mpirun shows  -lltdl.7 =&gt; /usr/pkg/lib/libltdl.so.7
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I do need to attempt a build of 1.4.2 here in ECS, so I'll try
</span><br>
<span class="quotelev1">&gt; building without the patches but I seem to recall that if those
</span><br>
<span class="quotelev1">&gt; libtool-related patches
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; opal/Makefile.in
</span><br>
<span class="quotelev1">&gt; configure
</span><br>
<span class="quotelev1">&gt; opal/mca/base/mca_base_component_find.c
</span><br>
<span class="quotelev1">&gt; opal/mca/base/mca_base_component_repository.c
</span><br>
<span class="quotelev1">&gt; test/support/components.h
</span><br>
<span class="quotelev1">&gt; test/support/components.c
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; were not applied, it did not even build. But we'll see.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And if you are reading this, Alexsej, have you,as the real
</span><br>
<span class="quotelev1">&gt; &quot;OpenMPI on NetBSD&quot; man, built a 1.4.2 as yet ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Kevin
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Kevin M. Buckley                                  Room:  CO327
</span><br>
<span class="quotelev1">&gt; School of Engineering and                         Phone: +64 4 463 5971
</span><br>
<span class="quotelev1">&gt;  Computer Science
</span><br>
<span class="quotelev1">&gt; Victoria University of Wellington
</span><br>
<span class="quotelev1">&gt; New Zealand
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
<span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7932.php">Ralph Castain: "Re: [OMPI devel] RFC: Remove all other paffinity components"</a>
<li><strong>Previous message:</strong> <a href="7930.php">Ralph Castain: "Re: [OMPI devel] Very poor performance with btl sm on twin nehalem servers with Mellanox ConnectX installed"</a>
<li><strong>In reply to:</strong> <a href="7913.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI devel] The&quot; Missing Symbol&quot; issue and OpenMPI on NetBSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7938.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI devel] The&quot; Missing Symbol&quot; issue and OpenMPI on NetBSD"</a>
<li><strong>Reply:</strong> <a href="7938.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI devel] The&quot; Missing Symbol&quot; issue and OpenMPI on NetBSD"</a>
<li><strong>Reply:</strong> <a href="7941.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI devel] The&quot; Missing Symbol&quot; issue and OpenMPI on NetBSD"</a>
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
