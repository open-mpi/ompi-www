<?
$subject_val = "Re: [OMPI users] location of ompi libraries";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct  5 17:42:31 2010" -->
<!-- isoreceived="20101005214231" -->
<!-- sent="Tue, 5 Oct 2010 15:42:18 -0600" -->
<!-- isosent="20101005214218" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [OMPI users] location of ompi libraries" -->
<!-- id="39B0D4BD-594F-4E4B-A48D-D7A44D70DB8E_at_sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4CAB98D4.9000708_at_lbl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] location of ompi libraries<br>
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-05 17:42:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14397.php">Götz Waschk: "[OMPI users] hdf5 build error using openmpi and Intel Fortran"</a>
<li><strong>Previous message:</strong> <a href="14395.php">David Turner: "Re: [OMPI users] location of ompi libraries"</a>
<li><strong>In reply to:</strong> <a href="14395.php">David Turner: "Re: [OMPI users] location of ompi libraries"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
David -
<br>
<p>You're correct - adding --enable-static (or it's file equivalent enable_static) causes components to be linked into libmpi instead of left as individual components.  This is probably a bug, but it's what Open MPI's done for it's entire life, so it's unlikely to change.  Removing the enable_dlopen=no means that Open MPI will look for other dynamicaly loaded components, so that should be sufficient for your use as long as mpicc properly added -Wl,--export-dynamic (which it used to do).  To be safe, however, you might want to also remove the enable_static line from the file.
<br>
<p>The static library warnings are more about doing a completely static link (including libc and crt0) than about linking against libmpi.a.  The memory tricks needed to support RDMA networks on Linux are the main driver behind those statements.
<br>
<p>Brian
<br>
<p><p>On Oct 5, 2010, at 3:29 PM, David Turner wrote:
<br>
<p><span class="quotelev1">&gt; Hi Jeff,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for the response.  Reviewing my builds, I realized that for
</span><br>
<span class="quotelev1">&gt; 1.4.2, I had configured using
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; contrib/platform/lanl/tlcc/optimized-nopanasas
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; per Ralph Castain's suggestion.  That file includes both:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; enable_dlopen=no
</span><br>
<span class="quotelev1">&gt; enable_shared=yes
</span><br>
<span class="quotelev1">&gt; enable_static=yes
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here is my *real* issue.  I am trying to test Voltaire's Fabric
</span><br>
<span class="quotelev1">&gt; Collective Accelerator, which extends mca_component_path, and
</span><br>
<span class="quotelev1">&gt; adds a few additional .so files.  It appears I must have
</span><br>
<span class="quotelev1">&gt; enable_dlopen=yes for this to work, which makes sense.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I assume that the shared/static settings above result in
</span><br>
<span class="quotelev1">&gt; *both* .a and .so versions of the ompi libraries getting
</span><br>
<span class="quotelev1">&gt; built.  I'm not sure if this will affect my ability to
</span><br>
<span class="quotelev1">&gt; use Voltaire's mca plugins, but I have determined that
</span><br>
<span class="quotelev1">&gt; simply removing the enable_dlopen=no is not sufficient
</span><br>
<span class="quotelev1">&gt; to restore all the ompi .so files.  I assume (haven't
</span><br>
<span class="quotelev1">&gt; tried it yet) that removing the enable_static=yes will
</span><br>
<span class="quotelev1">&gt; result in the ompi .so files getting created.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I guess I'm just looking for some guidance in the use
</span><br>
<span class="quotelev1">&gt; of the above options.  I have read many warnings on
</span><br>
<span class="quotelev1">&gt; the ompi website about trying to link statically.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 10/5/10 7:17 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; It is more than likely that you compiled Open MPI with --enable-static and/or --disable-dlopen.  In this case, all of Open MPI's plugins are slurped up into the libraries themselves (e.g., libmpi.so or libmpi.a).  That's why everything continues to work properly.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 4, 2010, at 6:58 PM, David Turner wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In Open MPI 1.4.1, the directory lib/openmpi contains about 130
</span><br>
<span class="quotelev3">&gt;&gt;&gt; entries, including such things as mca_btl_openib.so.  In my
</span><br>
<span class="quotelev3">&gt;&gt;&gt; build of Open MPI 1.4.2, lib/openmpi contains exactly three
</span><br>
<span class="quotelev3">&gt;&gt;&gt; items:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libompi_dbg_msgq.a  libompi_dbg_msgq.la  libompi_dbg_msgq.so
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have searched my 1.4.2 installation for mca_btl_openib.so,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to no avail.  And yet, 1.4.2 seems to work &quot;fine&quot;.  Is my
</span><br>
<span class="quotelev3">&gt;&gt;&gt; installation broken, or is the organization significantly
</span><br>
<span class="quotelev3">&gt;&gt;&gt; different between the two versions?  A quick scan of the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; release notes didn't help.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Best regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; David Turner
</span><br>
<span class="quotelev3">&gt;&gt;&gt; User Services Group        email: dpturner_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; NERSC Division             phone: (510) 486-4027
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Lawrence Berkeley Lab        fax: (510) 486-4316
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; David Turner
</span><br>
<span class="quotelev1">&gt; User Services Group        email: dpturner_at_[hidden]
</span><br>
<span class="quotelev1">&gt; NERSC Division             phone: (510) 486-4027
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley Lab        fax: (510) 486-4316
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><pre>
-- 
  Brian W. Barrett
  Dept. 1423: Scalable System Software
  Sandia National Laboratories
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14397.php">Götz Waschk: "[OMPI users] hdf5 build error using openmpi and Intel Fortran"</a>
<li><strong>Previous message:</strong> <a href="14395.php">David Turner: "Re: [OMPI users] location of ompi libraries"</a>
<li><strong>In reply to:</strong> <a href="14395.php">David Turner: "Re: [OMPI users] location of ompi libraries"</a>
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
