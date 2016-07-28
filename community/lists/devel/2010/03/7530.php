<?
$subject_val = "[OMPI devel] RFC: Rename --enable-*-threads and ENABLE*THREAD* (take 2)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  4 16:17:35 2010" -->
<!-- isoreceived="20100304211735" -->
<!-- sent="Thu, 4 Mar 2010 16:17:29 -0500" -->
<!-- isosent="20100304211729" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: Rename --enable-*-threads and ENABLE*THREAD* (take 2)" -->
<!-- id="FE9A3964-44FB-41AA-B76D-0133CA1FD42D_at_cisco.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: Rename --enable-*-threads and ENABLE*THREAD* (take 2)<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-04 16:17:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7531.php">Terry Dontje: "Re: [OMPI devel] RFC: Rename --enable-*-threads and ENABLE*THREAD* (take 2)"</a>
<li><strong>Previous message:</strong> <a href="7529.php">Terry Dontje: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22762"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7531.php">Terry Dontje: "Re: [OMPI devel] RFC: Rename --enable-*-threads and ENABLE*THREAD* (take 2)"</a>
<li><strong>Reply:</strong> <a href="7531.php">Terry Dontje: "Re: [OMPI devel] RFC: Rename --enable-*-threads and ENABLE*THREAD* (take 2)"</a>
<li><strong>Reply:</strong> <a href="7562.php">George Bosilca: "Re: [OMPI devel] RFC: Rename --enable-*-threads and ENABLE*THREAD* (take 2)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
WHAT: Rename the --enable-*-threads configure switches and ENABLE*THREAD* macros.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(see previous RFC: <a href="http://www.open-mpi.org/community/lists/devel/2010/01/7366.php">http://www.open-mpi.org/community/lists/devel/2010/01/7366.php</a>)
<br>
<p>WHY: The fact that thread safety in OPAL and ORTE requires a configure switch with &quot;mpi&quot; in the name is very non-intuitive.  Additionally, MPI_THREAD_MULTIPLE support is not necessarily the same thing as OPAL thread support (MTM needs OPAL thread support, but not the other way around), and we are seeing a growing advantage/need for ORTE to utilize threads in mpirun and orted irrespective of the MPI layer's threading abilities.
<br>
<p>WHERE: Mostly opal/config/opal_config_threads.m4, something new in ompi/config/*.m4, and wherever the current ENABLE*THREAD* macros are currently used in the current code base.
<br>
<p>WHEN: Next Friday COB
<br>
<p>TIMEOUT: COB, Friday, Feb 5, 2010
<br>
<p>------------------------
<br>
<p>More details:
<br>
<p>Cisco is starting to investigate using ORTE and OPAL in various threading scenarios.  The fact that you need to enable thread safety in ORTE/OPAL with a configure switch that has the word &quot;mpi&quot; in it is extremely counter-intuitive (it bit some of our engineers very badly, and they were mighty annoyed!!).  In addition, we ran into problems where it was advantageous to have threads in ORTE, but we couldn't do it without forcing thread support into the MPI layer because the switch is universal.
<br>
<p>Since this functionality actually has nothing to do with MPI (it's actually the other way around -- MPI_THREAD_MULTIPLE needs this functionality), we really should divorce MPI threading functionality from whether threading machinery is enabled in OPAL or not. 
<br>
<p>These names were proposed at the end of the previous RFC and no one objected, so I'm sending this around as a new RFC to ensure we're all on the same sheet of music:
<br>
<p>--enable-opal-progress-threads: enables progress thread machinery in opal
<br>
&nbsp;--&gt; this is just a renaming from --enable-progress-threads
<br>
&nbsp;--&gt; the corresponding #define stays the same: OPAL_ENABLE_PROGRES_THREADS
<br>
<p>--enable-opal-multi-threads: enables multi threaded machinery in opal
<br>
&nbsp;--&gt; this is just a renaming from --enable-mpi-threads
<br>
&nbsp;--&gt; the corresponding #define also renames; from OPAL_ENABLE_MPI_THREADS to OPAL_ENABLE_MULTI_THREADS
<br>
<p>--enable-mpi-thread-multiple: enables the use of MPI_THREAD_MULTIPLE; *ONLY* affects the MPI layer
<br>
&nbsp;--&gt; use of this switch explicitly implies --enable-opal-multi-threads
<br>
&nbsp;--&gt; new #define: OMPI_ENABLE_THREAD_MULTIPLE
<br>
<p>We can keep and deprecate the old configure options if desired:
<br>
<p>--enable-mpi-threads: deprecated synonym for --enable-mpi-thread-multiple
<br>
--enable-progress-threads: deprecated synonym for --enable-opal-progress-threads
<br>
<p>..although I'm somewhat inclined to ditch them unless someone has strong feelings about keeping them.
<br>
<p>Doing the name change in OPAL and ORTE is fairly straightforward -- it's essentially an s/foo/bar/g kind of operation.  It'll likely take a little more effort in the MPI layer because the places where the current #defines are used may need to switch to the new name or to the new OMPI_ENABLE_THREAD_MULTIPLE name (and maybe some new logic?  I am not sure without looking into it closer).
<br>
<p><pre>
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
<li><strong>Next message:</strong> <a href="7531.php">Terry Dontje: "Re: [OMPI devel] RFC: Rename --enable-*-threads and ENABLE*THREAD* (take 2)"</a>
<li><strong>Previous message:</strong> <a href="7529.php">Terry Dontje: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22762"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7531.php">Terry Dontje: "Re: [OMPI devel] RFC: Rename --enable-*-threads and ENABLE*THREAD* (take 2)"</a>
<li><strong>Reply:</strong> <a href="7531.php">Terry Dontje: "Re: [OMPI devel] RFC: Rename --enable-*-threads and ENABLE*THREAD* (take 2)"</a>
<li><strong>Reply:</strong> <a href="7562.php">George Bosilca: "Re: [OMPI devel] RFC: Rename --enable-*-threads and ENABLE*THREAD* (take 2)"</a>
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
