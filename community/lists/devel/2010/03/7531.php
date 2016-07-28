<?
$subject_val = "Re: [OMPI devel] RFC: Rename --enable-*-threads and ENABLE*THREAD* (take 2)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar  5 06:19:22 2010" -->
<!-- isoreceived="20100305111922" -->
<!-- sent="Fri, 05 Mar 2010 06:18:45 -0500" -->
<!-- isosent="20100305111845" -->
<!-- name="Terry Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Rename --enable-*-threads and ENABLE*THREAD* (take 2)" -->
<!-- id="4B90E895.1030709_at_sun.com" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Terry Dontje (<em>Terry.Dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-05 06:18:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7532.php">Leonardo Fialho: "[OMPI devel] Missing Symbol"</a>
<li><strong>Previous message:</strong> <a href="7530.php">Jeff Squyres: "[OMPI devel] RFC: Rename --enable-*-threads and ENABLE*THREAD* (take 2)"</a>
<li><strong>In reply to:</strong> <a href="7530.php">Jeff Squyres: "[OMPI devel] RFC: Rename --enable-*-threads and ENABLE*THREAD* (take 2)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7543.php">Ralph Castain: "Re: [OMPI devel] RFC: Rename --enable-*-threads and ENABLE*THREAD* (take 2)"</a>
<li><strong>Reply:</strong> <a href="7543.php">Ralph Castain: "Re: [OMPI devel] RFC: Rename --enable-*-threads and ENABLE*THREAD* (take 2)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
A couple comments:
<br>
1.  I really assume the timeout is March 5th not February.
<br>
2.  As to keeping the deprecated variables I think you really need to 
<br>
ditch the --enable-mpi-threads because if you synonym it with 
<br>
--enable-mpi-thread-multiple you are not mimicing what it did before but 
<br>
redefining it IMHO.  (I am ok with the ditching personally).
<br>
<p>--td
<br>
<p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; WHAT: Rename the --enable-*-threads configure switches and ENABLE*THREAD* macros.
</span><br>
<span class="quotelev1">&gt;       (see previous RFC: <a href="http://www.open-mpi.org/community/lists/devel/2010/01/7366.php">http://www.open-mpi.org/community/lists/devel/2010/01/7366.php</a>)
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
<span class="quotelev1">&gt;  --&gt; this is just a renaming from --enable-progress-threads
</span><br>
<span class="quotelev1">&gt;  --&gt; the corresponding #define stays the same: OPAL_ENABLE_PROGRES_THREADS
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --enable-opal-multi-threads: enables multi threaded machinery in opal
</span><br>
<span class="quotelev1">&gt;  --&gt; this is just a renaming from --enable-mpi-threads
</span><br>
<span class="quotelev1">&gt;  --&gt; the corresponding #define also renames; from OPAL_ENABLE_MPI_THREADS to OPAL_ENABLE_MULTI_THREADS
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --enable-mpi-thread-multiple: enables the use of MPI_THREAD_MULTIPLE; *ONLY* affects the MPI layer
</span><br>
<span class="quotelev1">&gt;  --&gt; use of this switch explicitly implies --enable-opal-multi-threads
</span><br>
<span class="quotelev1">&gt;  --&gt; new #define: OMPI_ENABLE_THREAD_MULTIPLE
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
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7532.php">Leonardo Fialho: "[OMPI devel] Missing Symbol"</a>
<li><strong>Previous message:</strong> <a href="7530.php">Jeff Squyres: "[OMPI devel] RFC: Rename --enable-*-threads and ENABLE*THREAD* (take 2)"</a>
<li><strong>In reply to:</strong> <a href="7530.php">Jeff Squyres: "[OMPI devel] RFC: Rename --enable-*-threads and ENABLE*THREAD* (take 2)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7543.php">Ralph Castain: "Re: [OMPI devel] RFC: Rename --enable-*-threads and ENABLE*THREAD* (take 2)"</a>
<li><strong>Reply:</strong> <a href="7543.php">Ralph Castain: "Re: [OMPI devel] RFC: Rename --enable-*-threads and ENABLE*THREAD* (take 2)"</a>
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
