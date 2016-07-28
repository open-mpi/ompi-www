<?
$subject_val = "Re: [OMPI devel] Change in OPAL / OMPI DPM system time during MPI_INIT";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 22 14:47:47 2010" -->
<!-- isoreceived="20101122194747" -->
<!-- sent="Mon, 22 Nov 2010 12:47:28 -0700" -->
<!-- isosent="20101122194728" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Change in OPAL / OMPI DPM system time during MPI_INIT" -->
<!-- id="8B34D357-FE70-4426-B513-BAAF28B2F3BA_at_sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="EC02EC05-EF07-4683-A60F-B9D57A9912C5_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Change in OPAL / OMPI DPM system time during MPI_INIT<br>
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-22 14:47:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8695.php">David Singleton: "Re: [OMPI devel] Change in OPAL / OMPI DPM system time during MPI_INIT"</a>
<li><strong>Previous message:</strong> <a href="8693.php">Jeff Squyres: "Re: [OMPI devel] Change in OPAL / OMPI DPM system time during MPI_INIT"</a>
<li><strong>In reply to:</strong> <a href="8693.php">Jeff Squyres: "Re: [OMPI devel] Change in OPAL / OMPI DPM system time during MPI_INIT"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8695.php">David Singleton: "Re: [OMPI devel] Change in OPAL / OMPI DPM system time during MPI_INIT"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Short answer: we need the &quot;extra&quot; decrement at the end of MPI init.
<br>
<p>Long answer: Ok, so I was somewhat wrong :).
<br>
<p>The count of users is initialized to 0.  If it's greater than zero, the event library is polled every time opal_progress() is called, which kills latency (surprised this didn't show up in testing).  It's really quite pointless to a runtime library or portability library to not poll the event library every time (particularly since the primary communication mechanisms in the runtime library use the event library), so opal_init() increases the counter to 1.
<br>
<p>So by the time anything interesting in MPI_INIT happens, the counter is set to 1, and every call to opal_progress results in a call to the event library.  The decrement in MPI_INIT was to &quot;undo&quot; the initialization increment, so that things would run fast from end of MPI_INIT to start of MPI_FINALIZE unless some other piece of OMPI knew it needed fast run-time interactions (such as the DPM or the TCP-based BTLs).  Of course, during MPI_FINALIZE, we need to &quot;undo&quot; the go-fast options we changed during the end of MPI_INIT, which is why there's an increment early in finalize.
<br>
<p>Brian
<br>
<p>On Nov 22, 2010, at 12:27 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Nov 22, 2010, at 11:35 AM, Barrett, Brian W wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Um, the counter starts initialized at one.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Does that mean that we should or should not leave that extra _decrement() in there?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Brian
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 22, 2010, at 9:32 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; A user noticed a specific change that we made between 1.4.2 and 1.4.3:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  <a href="https://svn.open-mpi.org/trac/ompi/changeset/23448">https://svn.open-mpi.org/trac/ompi/changeset/23448</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; which is from CMR <a href="https://svn.open-mpi.org/trac/ompi/ticket/2489">https://svn.open-mpi.org/trac/ompi/ticket/2489</a>, and originally from trunk <a href="https://svn.open-mpi.org/trac/ompi/changeset/23434">https://svn.open-mpi.org/trac/ompi/changeset/23434</a>.  I removed the opal_progress_event_users_decrement() from ompi_mpi_init() because the ORTE DPM does its own _increment() and _decrement().
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However, it seems that there was an unintended consequence of this -- look at the annotated Ganglia graph that the user sent (see attached).  In 1.4.2, all of the idle time was &quot;user&quot; CPU usage.  In 1.4.3, it's split between user and system CPU usage.  The application that he used to test is basically an init / finalize test (with some additional MPI middleware).  See:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  <a href="http://www.open-mpi.org/community/lists/users/2010/11/14773.php">http://www.open-mpi.org/community/lists/users/2010/11/14773.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Can anyone think of why this occurs, and/or if it's a Bad Thing?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If removing this decrement enabled a bunch more system CPU time, that would seem to imply that we're calling libevent more frequently than we used to (vs. polling the opal event callbacks), and therefore that there might now be an unmatched increment somewhere.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Right...?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;openmpi143.jpeg&gt;&lt;ATT00002..txt&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Brian W. Barrett
</span><br>
<span class="quotelev2">&gt;&gt; Dept. 1423: Scalable System Software
</span><br>
<span class="quotelev2">&gt;&gt; Sandia National Laboratories
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
<li><strong>Next message:</strong> <a href="8695.php">David Singleton: "Re: [OMPI devel] Change in OPAL / OMPI DPM system time during MPI_INIT"</a>
<li><strong>Previous message:</strong> <a href="8693.php">Jeff Squyres: "Re: [OMPI devel] Change in OPAL / OMPI DPM system time during MPI_INIT"</a>
<li><strong>In reply to:</strong> <a href="8693.php">Jeff Squyres: "Re: [OMPI devel] Change in OPAL / OMPI DPM system time during MPI_INIT"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8695.php">David Singleton: "Re: [OMPI devel] Change in OPAL / OMPI DPM system time during MPI_INIT"</a>
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
