<?
$subject_val = "Re: [OMPI devel] RFC: s/ENABLE_MPI_THREADS/ENABLE_THREAD_SAFETY/g";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 29 00:19:53 2010" -->
<!-- isoreceived="20100129051953" -->
<!-- sent="Thu, 28 Jan 2010 22:19:45 -0700" -->
<!-- isosent="20100129051945" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: s/ENABLE_MPI_THREADS/ENABLE_THREAD_SAFETY/g" -->
<!-- id="D129BF76-8EE7-4710-A8FE-4D21A689BE1F_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="8F14D446-E799-4BAF-8FBD-F24801AA653F_at_sandia.gov" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-29 00:19:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7371.php">George Bosilca: "Re: [OMPI devel] crash when using coll_tuned_use_dynamic_rules option with 1.4"</a>
<li><strong>Previous message:</strong> <a href="7369.php">Barrett, Brian W: "Re: [OMPI devel] RFC: s/ENABLE_MPI_THREADS/ENABLE_THREAD_SAFETY/g"</a>
<li><strong>In reply to:</strong> <a href="7369.php">Barrett, Brian W: "Re: [OMPI devel] RFC: s/ENABLE_MPI_THREADS/ENABLE_THREAD_SAFETY/g"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/02/7383.php">Jeff Squyres: "Re: [OMPI devel] RFC: s/ENABLE_MPI_THREADS/ENABLE_THREAD_SAFETY/g"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ah, thanks!
<br>
<p>I think what Jeff proposed would retain this behavior - two switches, either of which enable thread support. Only question really was to rename the --enable-mpi-threads so it more accurately reflects what it does - namely, to enable-thread-support internal to the OMPI code base.
<br>
<p>Problem with the current name is that it implies that it enables thread support for MPI applications - as described by the config help as well:
<br>
<p>&nbsp;--enable-mpi-threads    Enable threads for MPI applications (default: disabled)
<br>
&nbsp;
<br>
and tended to be turned on for that purpose....and not turned on when someone used internal threads!
<br>
<p>Unfortunately, as a result, many of the internal thread lock/unlocks have never actually been tested...and don't work. :-/
<br>
<p><p>On Jan 28, 2010, at 8:23 PM, Barrett, Brian W wrote:
<br>
<p><span class="quotelev1">&gt; Ralph -
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; No.  OPAL_HAVE_THREADS is set to 1 whenever there are either POSIX or Solaris threads, regardless of the setting of --enable-progress-threads or --enable-mpi-threads.  OPAL_HAVE_THREAD_SUPPORT, however, is set to 1 whenever --enable-progress-threads *OR* --enable-mpi-threads is set.  So, basically, I'm saying all the OPAL_THREAD_* macros switch behavior whenever --enable-progress-threads or --enable-mpi-threads are set.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jan 28, 2010, at 9:55 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Yo Brian
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Are you saying that --enable-progress-threads automatically sets OPAL_HAVE_THREADS? Because otherwise the OPAL_THREAD_[UN]LOCK macros define to no-op, which is what is currently causing the problem.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From what I saw, the only way to get the macros to define as they should was to set --enable-mpi-threads, which is what caused the confusion.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I don't have a strong opinion on the name, other than that it should be clear as to what it does (which is not the current case). Just want to make sure I understand your response.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 28, 2010, at 7:24 PM, Barrett, Brian W wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I think the idea is ok, but I think the name needs some thought.  There's currently two ways to have the lower layers be thread safe -- enabling MPI threads or progress threads.  The two can be done independently -- you can disable MPI threads and still enable thread support by enabling progress threads.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So either that behavior would need to change or we need a better name (in my opinion...).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brian
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jan 28, 2010, at 8:53 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; WHAT: Rename --enable-mpi-threads and ENABLE_MPI_THREADS to --enable-thread-safety and ENABLE_THREAD_SAFETY, respectively (--enable-mpi-threads will be maintained as a synonym to --enable-thread-safety for backwards compat, of course).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; WHY: Other projects are starting to use ORTE and OPAL without OMPI.  The fact that thread safety in OPAL and ORTE requires a configure switch with &quot;mpi&quot; in the name is very non-intuitive.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; WHERE: A bunch of places in the code; see attached patch.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; WHEN: Next Friday COB
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; TIMEOUT: COB, Friday, Feb 5, 2010
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; More details:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Cisco is starting to investigate using ORTE and OPAL in various threading scenarios -- without the OMPI layer.  The fact that you need to enable thread safety in ORTE/OPAL with a configure switch that has the word &quot;mpi&quot; in it is extremely counter-intuitive (it bit some of our engineers very badly, and they were mighty annoyed!!).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Since this functionality actually has nothing to do with MPI (it's actually the other way around -- MPI_THREAD_MULTIPLE needs this functionality), we really should rename this switch and the corresponding AC_DEFINE -- I suggest:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --enable|disable-thread-safety
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ENABLE_THREAD_SAFETY
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Of course, we need to keep the configure switch &quot;--enable|disable-mpi-threads&quot; for backwards compatibility, so that can be a synonym to --enable-thread-safety.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; See the attached patch (the biggest change is in opal/config/opal_config_threads.m4).  If there are no objections, I'll commit this next Friday COB.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;opal-thread-safety.diff&gt;_______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brian W. Barrett
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dept. 1423: Scalable System Software
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sandia National Laboratories
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;  Brian W. Barrett
</span><br>
<span class="quotelev1">&gt;  Dept. 1423: Scalable System Software
</span><br>
<span class="quotelev1">&gt;  Sandia National Laboratories
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="7371.php">George Bosilca: "Re: [OMPI devel] crash when using coll_tuned_use_dynamic_rules option with 1.4"</a>
<li><strong>Previous message:</strong> <a href="7369.php">Barrett, Brian W: "Re: [OMPI devel] RFC: s/ENABLE_MPI_THREADS/ENABLE_THREAD_SAFETY/g"</a>
<li><strong>In reply to:</strong> <a href="7369.php">Barrett, Brian W: "Re: [OMPI devel] RFC: s/ENABLE_MPI_THREADS/ENABLE_THREAD_SAFETY/g"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/02/7383.php">Jeff Squyres: "Re: [OMPI devel] RFC: s/ENABLE_MPI_THREADS/ENABLE_THREAD_SAFETY/g"</a>
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
