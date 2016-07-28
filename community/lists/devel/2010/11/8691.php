<?
$subject_val = "[OMPI devel] Change in OPAL / OMPI DPM system time during MPI_INIT";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 22 11:32:38 2010" -->
<!-- isoreceived="20101122163238" -->
<!-- sent="Mon, 22 Nov 2010 11:32:30 -0500" -->
<!-- isosent="20101122163230" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] Change in OPAL / OMPI DPM system time during MPI_INIT" -->
<!-- id="191F6E18-A865-4E9E-BF69-16E201A041F9_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="OF3A33D3B6.FC717240-ON492577DD.000075A9-492577DD.0003440D_at_jcity.maeda.co.jp" -->
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
<strong>Subject:</strong> [OMPI devel] Change in OPAL / OMPI DPM system time during MPI_INIT<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-22 11:32:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8692.php">Barrett, Brian W: "Re: [OMPI devel] Change in OPAL / OMPI DPM system time during MPI_INIT"</a>
<li><strong>Previous message:</strong> <a href="8690.php">Joshua Hursey: "[OMPI devel] Fwd: [all-osl-users] Fwd: Servers reboot on Wednesday (11/24) morning	starting at 8:00"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8692.php">Barrett, Brian W: "Re: [OMPI devel] Change in OPAL / OMPI DPM system time during MPI_INIT"</a>
<li><strong>Reply:</strong> <a href="8692.php">Barrett, Brian W: "Re: [OMPI devel] Change in OPAL / OMPI DPM system time during MPI_INIT"</a>
<li><strong>Maybe reply:</strong> <a href="8695.php">David Singleton: "Re: [OMPI devel] Change in OPAL / OMPI DPM system time during MPI_INIT"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
A user noticed a specific change that we made between 1.4.2 and 1.4.3:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/changeset/23448">https://svn.open-mpi.org/trac/ompi/changeset/23448</a>
<br>
<p>which is from CMR <a href="https://svn.open-mpi.org/trac/ompi/ticket/2489">https://svn.open-mpi.org/trac/ompi/ticket/2489</a>, and originally from trunk <a href="https://svn.open-mpi.org/trac/ompi/changeset/23434">https://svn.open-mpi.org/trac/ompi/changeset/23434</a>.  I removed the opal_progress_event_users_decrement() from ompi_mpi_init() because the ORTE DPM does its own _increment() and _decrement().
<br>
<p>However, it seems that there was an unintended consequence of this -- look at the annotated Ganglia graph that the user sent (see attached).  In 1.4.2, all of the idle time was &quot;user&quot; CPU usage.  In 1.4.3, it's split between user and system CPU usage.  The application that he used to test is basically an init / finalize test (with some additional MPI middleware).  See:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/lists/users/2010/11/14773.php">http://www.open-mpi.org/community/lists/users/2010/11/14773.php</a>
<br>
<p>Can anyone think of why this occurs, and/or if it's a Bad Thing?
<br>
<p>If removing this decrement enabled a bunch more system CPU time, that would seem to imply that we're calling libevent more frequently than we used to (vs. polling the opal event callbacks), and therefore that there might now be an unmatched increment somewhere.
<br>
<p>Right...?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>

</pre>
<hr>
<img src="http://www.open-mpi.org/community/lists/devel/att-8691/openmpi143.jpeg" alt="openmpi143.jpeg">
<!-- attachment="openmpi143.jpeg" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8692.php">Barrett, Brian W: "Re: [OMPI devel] Change in OPAL / OMPI DPM system time during MPI_INIT"</a>
<li><strong>Previous message:</strong> <a href="8690.php">Joshua Hursey: "[OMPI devel] Fwd: [all-osl-users] Fwd: Servers reboot on Wednesday (11/24) morning	starting at 8:00"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8692.php">Barrett, Brian W: "Re: [OMPI devel] Change in OPAL / OMPI DPM system time during MPI_INIT"</a>
<li><strong>Reply:</strong> <a href="8692.php">Barrett, Brian W: "Re: [OMPI devel] Change in OPAL / OMPI DPM system time during MPI_INIT"</a>
<li><strong>Maybe reply:</strong> <a href="8695.php">David Singleton: "Re: [OMPI devel] Change in OPAL / OMPI DPM system time during MPI_INIT"</a>
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
