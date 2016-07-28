<?
$subject_val = "Re: [OMPI devel] Change in OPAL / OMPI DPM system time during MPI_INIT";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 22 11:36:02 2010" -->
<!-- isoreceived="20101122163602" -->
<!-- sent="Mon, 22 Nov 2010 09:35:49 -0700" -->
<!-- isosent="20101122163549" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Change in OPAL / OMPI DPM system time during MPI_INIT" -->
<!-- id="0CE29EAC-CC15-4F6F-945E-30ABEE6B80C7_at_sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="191F6E18-A865-4E9E-BF69-16E201A041F9_at_cisco.com" -->
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
<strong>Date:</strong> 2010-11-22 11:35:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8693.php">Jeff Squyres: "Re: [OMPI devel] Change in OPAL / OMPI DPM system time during MPI_INIT"</a>
<li><strong>Previous message:</strong> <a href="8691.php">Jeff Squyres: "[OMPI devel] Change in OPAL / OMPI DPM system time during MPI_INIT"</a>
<li><strong>In reply to:</strong> <a href="8691.php">Jeff Squyres: "[OMPI devel] Change in OPAL / OMPI DPM system time during MPI_INIT"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8693.php">Jeff Squyres: "Re: [OMPI devel] Change in OPAL / OMPI DPM system time during MPI_INIT"</a>
<li><strong>Reply:</strong> <a href="8693.php">Jeff Squyres: "Re: [OMPI devel] Change in OPAL / OMPI DPM system time during MPI_INIT"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Um, the counter starts initialized at one.
<br>
<p>Brian
<br>
<p>On Nov 22, 2010, at 9:32 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; A user noticed a specific change that we made between 1.4.2 and 1.4.3:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    <a href="https://svn.open-mpi.org/trac/ompi/changeset/23448">https://svn.open-mpi.org/trac/ompi/changeset/23448</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; which is from CMR <a href="https://svn.open-mpi.org/trac/ompi/ticket/2489">https://svn.open-mpi.org/trac/ompi/ticket/2489</a>, and originally from trunk <a href="https://svn.open-mpi.org/trac/ompi/changeset/23434">https://svn.open-mpi.org/trac/ompi/changeset/23434</a>.  I removed the opal_progress_event_users_decrement() from ompi_mpi_init() because the ORTE DPM does its own _increment() and _decrement().
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, it seems that there was an unintended consequence of this -- look at the annotated Ganglia graph that the user sent (see attached).  In 1.4.2, all of the idle time was &quot;user&quot; CPU usage.  In 1.4.3, it's split between user and system CPU usage.  The application that he used to test is basically an init / finalize test (with some additional MPI middleware).  See:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    <a href="http://www.open-mpi.org/community/lists/users/2010/11/14773.php">http://www.open-mpi.org/community/lists/users/2010/11/14773.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can anyone think of why this occurs, and/or if it's a Bad Thing?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If removing this decrement enabled a bunch more system CPU time, that would seem to imply that we're calling libevent more frequently than we used to (vs. polling the opal event callbacks), and therefore that there might now be an unmatched increment somewhere.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Right...?
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
<span class="quotelev1">&gt; &lt;openmpi143.jpeg&gt;&lt;ATT00002..txt&gt;
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
<li><strong>Next message:</strong> <a href="8693.php">Jeff Squyres: "Re: [OMPI devel] Change in OPAL / OMPI DPM system time during MPI_INIT"</a>
<li><strong>Previous message:</strong> <a href="8691.php">Jeff Squyres: "[OMPI devel] Change in OPAL / OMPI DPM system time during MPI_INIT"</a>
<li><strong>In reply to:</strong> <a href="8691.php">Jeff Squyres: "[OMPI devel] Change in OPAL / OMPI DPM system time during MPI_INIT"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8693.php">Jeff Squyres: "Re: [OMPI devel] Change in OPAL / OMPI DPM system time during MPI_INIT"</a>
<li><strong>Reply:</strong> <a href="8693.php">Jeff Squyres: "Re: [OMPI devel] Change in OPAL / OMPI DPM system time during MPI_INIT"</a>
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
