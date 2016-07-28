<?
$subject_val = "Re: [OMPI devel] RFC: Rename --enable-*-threads and ENABLE*THREAD* (take 2)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar  5 14:04:41 2010" -->
<!-- isoreceived="20100305190441" -->
<!-- sent="Fri, 5 Mar 2010 12:04:30 -0700" -->
<!-- isosent="20100305190430" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Rename --enable-*-threads and ENABLE*THREAD* (take 2)" -->
<!-- id="814079C9-BAC3-45D2-86E5-FD019983A4EA_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4B90E895.1030709_at_sun.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-05 14:04:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7544.php">George Bosilca: "Re: [OMPI devel] Missing Symbol"</a>
<li><strong>Previous message:</strong> <a href="7542.php">Leonardo Fialho: "Re: [OMPI devel] Missing Symbol"</a>
<li><strong>In reply to:</strong> <a href="7531.php">Terry Dontje: "Re: [OMPI devel] RFC: Rename --enable-*-threads and ENABLE*THREAD* (take 2)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7562.php">George Bosilca: "Re: [OMPI devel] RFC: Rename --enable-*-threads and ENABLE*THREAD* (take 2)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm not going to commit this today - I think it would be a little quick :-)
<br>
<p>However, I do have it all building on a Mercurial branch with the new options. It would be REALLY GOOD if people interested in thread support were to check this out prior to me bringing it to the trunk.
<br>
<p>The branch can be cloned with:
<br>
<p>hg clone <a href="https://rhc&#64;bitbucket.org/rhc/ompi-threads/">https://rhc&#64;bitbucket.org/rhc/ompi-threads/</a>
<br>
Please let me know if you test it and what you find.
<br>
<p>Thanks
<br>
Ralph
<br>
<p><p>On Mar 5, 2010, at 4:18 AM, Terry Dontje wrote:
<br>
<p><span class="quotelev1">&gt; A couple comments:
</span><br>
<span class="quotelev1">&gt; 1.  I really assume the timeout is March 5th not February.
</span><br>
<span class="quotelev1">&gt; 2.  As to keeping the deprecated variables I think you really need to ditch the --enable-mpi-threads because if you synonym it with --enable-mpi-thread-multiple you are not mimicing what it did before but redefining it IMHO.  (I am ok with the ditching personally).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --td
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; WHAT: Rename the --enable-*-threads configure switches and ENABLE*THREAD* macros.
</span><br>
<span class="quotelev2">&gt;&gt;      (see previous RFC: <a href="http://www.open-mpi.org/community/lists/devel/2010/01/7366.php">http://www.open-mpi.org/community/lists/devel/2010/01/7366.php</a>)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; WHY: The fact that thread safety in OPAL and ORTE requires a configure switch with &quot;mpi&quot; in the name is very non-intuitive.  Additionally, MPI_THREAD_MULTIPLE support is not necessarily the same thing as OPAL thread support (MTM needs OPAL thread support, but not the other way around), and we are seeing a growing advantage/need for ORTE to utilize threads in mpirun and orted irrespective of the MPI layer's threading abilities.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; WHERE: Mostly opal/config/opal_config_threads.m4, something new in ompi/config/*.m4, and wherever the current ENABLE*THREAD* macros are currently used in the current code base.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; WHEN: Next Friday COB
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; TIMEOUT: COB, Friday, Feb 5, 2010
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; More details:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Cisco is starting to investigate using ORTE and OPAL in various threading scenarios.  The fact that you need to enable thread safety in ORTE/OPAL with a configure switch that has the word &quot;mpi&quot; in it is extremely counter-intuitive (it bit some of our engineers very badly, and they were mighty annoyed!!).  In addition, we ran into problems where it was advantageous to have threads in ORTE, but we couldn't do it without forcing thread support into the MPI layer because the switch is universal.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Since this functionality actually has nothing to do with MPI (it's actually the other way around -- MPI_THREAD_MULTIPLE needs this functionality), we really should divorce MPI threading functionality from whether threading machinery is enabled in OPAL or not. 
</span><br>
<span class="quotelev2">&gt;&gt; These names were proposed at the end of the previous RFC and no one objected, so I'm sending this around as a new RFC to ensure we're all on the same sheet of music:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --enable-opal-progress-threads: enables progress thread machinery in opal
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; this is just a renaming from --enable-progress-threads
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; the corresponding #define stays the same: OPAL_ENABLE_PROGRES_THREADS
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --enable-opal-multi-threads: enables multi threaded machinery in opal
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; this is just a renaming from --enable-mpi-threads
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; the corresponding #define also renames; from OPAL_ENABLE_MPI_THREADS to OPAL_ENABLE_MULTI_THREADS
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --enable-mpi-thread-multiple: enables the use of MPI_THREAD_MULTIPLE; *ONLY* affects the MPI layer
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; use of this switch explicitly implies --enable-opal-multi-threads
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; new #define: OMPI_ENABLE_THREAD_MULTIPLE
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We can keep and deprecate the old configure options if desired:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --enable-mpi-threads: deprecated synonym for --enable-mpi-thread-multiple
</span><br>
<span class="quotelev2">&gt;&gt; --enable-progress-threads: deprecated synonym for --enable-opal-progress-threads
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ..although I'm somewhat inclined to ditch them unless someone has strong feelings about keeping them.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Doing the name change in OPAL and ORTE is fairly straightforward -- it's essentially an s/foo/bar/g kind of operation.  It'll likely take a little more effort in the MPI layer because the places where the current #defines are used may need to switch to the new name or to the new OMPI_ENABLE_THREAD_MULTIPLE name (and maybe some new logic?  I am not sure without looking into it closer).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-7543/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7544.php">George Bosilca: "Re: [OMPI devel] Missing Symbol"</a>
<li><strong>Previous message:</strong> <a href="7542.php">Leonardo Fialho: "Re: [OMPI devel] Missing Symbol"</a>
<li><strong>In reply to:</strong> <a href="7531.php">Terry Dontje: "Re: [OMPI devel] RFC: Rename --enable-*-threads and ENABLE*THREAD* (take 2)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7562.php">George Bosilca: "Re: [OMPI devel] RFC: Rename --enable-*-threads and ENABLE*THREAD* (take 2)"</a>
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
