<?
$subject_val = "Re: [OMPI devel] RFC: s/ENABLE_MPI_THREADS/ENABLE_THREAD_SAFETY/g";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  8 22:50:52 2010" -->
<!-- isoreceived="20100209035052" -->
<!-- sent="Mon, 8 Feb 2010 20:50:34 -0700" -->
<!-- isosent="20100209035034" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: s/ENABLE_MPI_THREADS/ENABLE_THREAD_SAFETY/g" -->
<!-- id="FAE89E01-A911-45D4-917F-8B629E93D853_at_sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AEAFF5B1-EE69-4BB8-8FE6-CCB5DE97CFC5_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: s/ENABLE_MPI_THREADS/ENABLE_THREAD_SAFETY/g<br>
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-08 22:50:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7385.php">Sylvain Jeaugey: "Re: [OMPI devel] RFC: s/ENABLE_MPI_THREADS/ENABLE_THREAD_SAFETY/g"</a>
<li><strong>Previous message:</strong> <a href="7383.php">Jeff Squyres: "Re: [OMPI devel] RFC: s/ENABLE_MPI_THREADS/ENABLE_THREAD_SAFETY/g"</a>
<li><strong>In reply to:</strong> <a href="7383.php">Jeff Squyres: "Re: [OMPI devel] RFC: s/ENABLE_MPI_THREADS/ENABLE_THREAD_SAFETY/g"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7385.php">Sylvain Jeaugey: "Re: [OMPI devel] RFC: s/ENABLE_MPI_THREADS/ENABLE_THREAD_SAFETY/g"</a>
<li><strong>Reply:</strong> <a href="7385.php">Sylvain Jeaugey: "Re: [OMPI devel] RFC: s/ENABLE_MPI_THREADS/ENABLE_THREAD_SAFETY/g"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Well, does --disable-multi-threads disable progress threads?  And do you want to disable thread support in ORTE because you don't want MPI_THREAD_MULTIPLE?  Perhaps a third option is a rational way to go?
<br>
<p>Brain
<br>
<p>On Feb 8, 2010, at 6:54 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; How about 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  --enable-mpi-threads  ==&gt;  --enable-multi-threads
</span><br>
<span class="quotelev1">&gt;    ENABLE_MPI_THREADS  ==&gt;    ENABLE_MULTI_THREADS
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Essentially, s/mpi/multi/ig.  This gives us &quot;progress thread&quot; support and &quot;multi thread&quot; support.  Similar, but different.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Another possibility instead of &quot;mpi&quot; could be &quot;concurrent&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jan 28, 2010, at 9:24 PM, Barrett, Brian W wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff -
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I think the idea is ok, but I think the name needs some thought.  There's currently two ways to have the lower layers be thread safe -- enabling MPI threads or progress threads.  The two can be done independently -- you can disable MPI threads and still enable thread support by enabling progress threads.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; So either that behavior would need to change or we need a better name (in my opinion...).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Brian
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 28, 2010, at 8:53 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WHAT: Rename --enable-mpi-threads and ENABLE_MPI_THREADS to --enable-thread-safety and ENABLE_THREAD_SAFETY, respectively (--enable-mpi-threads will be maintained as a synonym to --enable-thread-safety for backwards compat, of course).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WHY: Other projects are starting to use ORTE and OPAL without OMPI.  The fact that thread safety in OPAL and ORTE requires a configure switch with &quot;mpi&quot; in the name is very non-intuitive.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WHERE: A bunch of places in the code; see attached patch.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WHEN: Next Friday COB
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; TIMEOUT: COB, Friday, Feb 5, 2010
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; More details:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cisco is starting to investigate using ORTE and OPAL in various threading scenarios -- without the OMPI layer.  The fact that you need to enable thread safety in ORTE/OPAL with a configure switch that has the word &quot;mpi&quot; in it is extremely counter-intuitive (it bit some of our engineers very badly, and they were mighty annoyed!!).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Since this functionality actually has nothing to do with MPI (it's actually the other way around -- MPI_THREAD_MULTIPLE needs this functionality), we really should rename this switch and the corresponding AC_DEFINE -- I suggest:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --enable|disable-thread-safety
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ENABLE_THREAD_SAFETY
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Of course, we need to keep the configure switch &quot;--enable|disable-mpi-threads&quot; for backwards compatibility, so that can be a synonym to --enable-thread-safety.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; See the attached patch (the biggest change is in opal/config/opal_config_threads.m4).  If there are no objections, I'll commit this next Friday COB.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;opal-thread-safety.diff&gt;_______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt;  Brian W. Barrett
</span><br>
<span class="quotelev2">&gt;&gt;  Dept. 1423: Scalable System Software
</span><br>
<span class="quotelev2">&gt;&gt;  Sandia National Laboratories
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="7385.php">Sylvain Jeaugey: "Re: [OMPI devel] RFC: s/ENABLE_MPI_THREADS/ENABLE_THREAD_SAFETY/g"</a>
<li><strong>Previous message:</strong> <a href="7383.php">Jeff Squyres: "Re: [OMPI devel] RFC: s/ENABLE_MPI_THREADS/ENABLE_THREAD_SAFETY/g"</a>
<li><strong>In reply to:</strong> <a href="7383.php">Jeff Squyres: "Re: [OMPI devel] RFC: s/ENABLE_MPI_THREADS/ENABLE_THREAD_SAFETY/g"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7385.php">Sylvain Jeaugey: "Re: [OMPI devel] RFC: s/ENABLE_MPI_THREADS/ENABLE_THREAD_SAFETY/g"</a>
<li><strong>Reply:</strong> <a href="7385.php">Sylvain Jeaugey: "Re: [OMPI devel] RFC: s/ENABLE_MPI_THREADS/ENABLE_THREAD_SAFETY/g"</a>
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
