<?
$subject_val = "Re: [OMPI devel] RFC: Rename --enable-*-threads and ENABLE*THREAD* (take 2)";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Mar  7 15:21:02 2010" -->
<!-- isoreceived="20100307202102" -->
<!-- sent="Sun, 7 Mar 2010 15:20:53 -0500" -->
<!-- isosent="20100307202053" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Rename --enable-*-threads and ENABLE*THREAD* (take 2)" -->
<!-- id="4176578C-4648-46CA-81E1-54BEFF8BFE12_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="FE9A3964-44FB-41AA-B76D-0133CA1FD42D_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Rename --enable-*-threads and ENABLE*THREAD* (take 2)<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-07 15:20:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7563.php">Ralph Castain: "Re: [OMPI devel] RFC: Rename --enable-*-threads and ENABLE*THREAD* (take 2)"</a>
<li><strong>Previous message:</strong> <a href="7561.php">George Bosilca: "Re: [OMPI devel] Adding error/verbose messages to the TCP BTL"</a>
<li><strong>In reply to:</strong> <a href="7530.php">Jeff Squyres: "[OMPI devel] RFC: Rename --enable-*-threads and ENABLE*THREAD* (take 2)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7563.php">Ralph Castain: "Re: [OMPI devel] RFC: Rename --enable-*-threads and ENABLE*THREAD* (take 2)"</a>
<li><strong>Reply:</strong> <a href="7563.php">Ralph Castain: "Re: [OMPI devel] RFC: Rename --enable-*-threads and ENABLE*THREAD* (take 2)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Quick question about this. We now have an OPAL level progress thread, which enables the machinery at the OPAL level. Unfortunately, this doesn't say anything about what the MPI level will do? Moreover, this is quite confusing as there are no communications layers in OPAL so one can ask what an OPAL level --enable-progress-thread means.
<br>
<p>This raise several related questions. Do you expect to have a ORTE level progress thread even if the MPI level do not have one? I didn't look at the code, but I have a strong doubt about such mix-up between threads requirements.
<br>
<p>How do we know when MPI needs a progress thread? There is no option for this. Or should we define that if MPI_THREAD_MULTIPLE is supported and OPAL_PROGRESS_THREAD is enabled this means the BTLs can register their own progress thread?
<br>
<p>george.
<br>
<p><p>On Mar 4, 2010, at 16:17 , Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; WHAT: Rename the --enable-*-threads configure switches and ENABLE*THREAD* macros.
</span><br>
<span class="quotelev1">&gt;      (see previous RFC: <a href="http://www.open-mpi.org/community/lists/devel/2010/01/7366.php">http://www.open-mpi.org/community/lists/devel/2010/01/7366.php</a>)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHY: The fact that thread safety in OPAL and ORTE requires a configure switch with &quot;mpi&quot; in the name is very non-intuitive.  Additionally, MPI_THREAD_MULTIPLE support is not necessarily the same thing as OPAL thread support (MTM needs OPAL thread support, but not the other way around), and we are seeing a growing advantage/need for ORTE to utilize threads in mpirun and orted irrespective of the MPI layer's threading abilities.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHERE: Mostly opal/config/opal_config_threads.m4, something new in ompi/config/*.m4, and wherever the current ENABLE*THREAD* macros are currently used in the current code base.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHEN: Next Friday COB
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; TIMEOUT: COB, Friday, Feb 5, 2010
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; More details:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cisco is starting to investigate using ORTE and OPAL in various threading scenarios.  The fact that you need to enable thread safety in ORTE/OPAL with a configure switch that has the word &quot;mpi&quot; in it is extremely counter-intuitive (it bit some of our engineers very badly, and they were mighty annoyed!!).  In addition, we ran into problems where it was advantageous to have threads in ORTE, but we couldn't do it without forcing thread support into the MPI layer because the switch is universal.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Since this functionality actually has nothing to do with MPI (it's actually the other way around -- MPI_THREAD_MULTIPLE needs this functionality), we really should divorce MPI threading functionality from whether threading machinery is enabled in OPAL or not. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; These names were proposed at the end of the previous RFC and no one objected, so I'm sending this around as a new RFC to ensure we're all on the same sheet of music:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --enable-opal-progress-threads: enables progress thread machinery in opal
</span><br>
<span class="quotelev1">&gt; --&gt; this is just a renaming from --enable-progress-threads
</span><br>
<span class="quotelev1">&gt; --&gt; the corresponding #define stays the same: OPAL_ENABLE_PROGRES_THREADS
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --enable-opal-multi-threads: enables multi threaded machinery in opal
</span><br>
<span class="quotelev1">&gt; --&gt; this is just a renaming from --enable-mpi-threads
</span><br>
<span class="quotelev1">&gt; --&gt; the corresponding #define also renames; from OPAL_ENABLE_MPI_THREADS to OPAL_ENABLE_MULTI_THREADS
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --enable-mpi-thread-multiple: enables the use of MPI_THREAD_MULTIPLE; *ONLY* affects the MPI layer
</span><br>
<span class="quotelev1">&gt; --&gt; use of this switch explicitly implies --enable-opal-multi-threads
</span><br>
<span class="quotelev1">&gt; --&gt; new #define: OMPI_ENABLE_THREAD_MULTIPLE
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We can keep and deprecate the old configure options if desired:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --enable-mpi-threads: deprecated synonym for --enable-mpi-thread-multiple
</span><br>
<span class="quotelev1">&gt; --enable-progress-threads: deprecated synonym for --enable-opal-progress-threads
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ..although I'm somewhat inclined to ditch them unless someone has strong feelings about keeping them.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Doing the name change in OPAL and ORTE is fairly straightforward -- it's essentially an s/foo/bar/g kind of operation.  It'll likely take a little more effort in the MPI layer because the places where the current #defines are used may need to switch to the new name or to the new OMPI_ENABLE_THREAD_MULTIPLE name (and maybe some new logic?  I am not sure without looking into it closer).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<li><strong>Next message:</strong> <a href="7563.php">Ralph Castain: "Re: [OMPI devel] RFC: Rename --enable-*-threads and ENABLE*THREAD* (take 2)"</a>
<li><strong>Previous message:</strong> <a href="7561.php">George Bosilca: "Re: [OMPI devel] Adding error/verbose messages to the TCP BTL"</a>
<li><strong>In reply to:</strong> <a href="7530.php">Jeff Squyres: "[OMPI devel] RFC: Rename --enable-*-threads and ENABLE*THREAD* (take 2)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7563.php">Ralph Castain: "Re: [OMPI devel] RFC: Rename --enable-*-threads and ENABLE*THREAD* (take 2)"</a>
<li><strong>Reply:</strong> <a href="7563.php">Ralph Castain: "Re: [OMPI devel] RFC: Rename --enable-*-threads and ENABLE*THREAD* (take 2)"</a>
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
