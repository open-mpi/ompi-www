<?
$subject_val = "Re: [OMPI users] DMTCP: Checkpoint-Restart solution for OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb  5 19:56:59 2010" -->
<!-- isoreceived="20100206005659" -->
<!-- sent="Fri, 5 Feb 2010 19:56:54 -0500" -->
<!-- isosent="20100206005654" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] DMTCP: Checkpoint-Restart solution for OpenMPI" -->
<!-- id="238D9113-2AAE-40FC-829F-5D25DCBB426E_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20100205234023.GA29401_at_sundance.ccs.neu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] DMTCP: Checkpoint-Restart solution for OpenMPI<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-05 19:56:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12027.php">Eugene Loh: "Re: [OMPI users] hostfiles"</a>
<li><strong>Previous message:</strong> <a href="12025.php">David Mathog: "Re: [OMPI users] Anybody built a working 1.4.1 on Solaris 8 (Sparc)?"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/01/11953.php">Kapil Arya: "[OMPI users] DMTCP: Checkpoint-Restart solution for OpenMPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 5, 2010, at 6:40 PM, Gene Cooperman wrote:
<br>
<p><span class="quotelev1">&gt; You're correct that we take a virtualized approach by intercepting network
</span><br>
<span class="quotelev1">&gt; calls, etc.  However, we purposely never intercept any frequently
</span><br>
<span class="quotelev1">&gt; called system calls.  So, for example, we never intercept a call
</span><br>
<span class="quotelev1">&gt; to read() or to write() in TCP/IP, as part of our core design principles.
</span><br>
<span class="quotelev1">&gt; Instead, we use things like the proc filesytem and the use of system calls
</span><br>
<span class="quotelev1">&gt; to find the offset in an open file descriptor.
</span><br>
<p>Coolio.
<br>
<p><span class="quotelev1">&gt; We would love the opportunity to work with you on a demonstration for
</span><br>
<span class="quotelev1">&gt; the high-performance networks that you mention.  Can you suggest an
</span><br>
<span class="quotelev1">&gt; MPI code and the appropriate hardware testbed on which we could get an
</span><br>
<span class="quotelev1">&gt; account and run?
</span><br>
<p>Any MPI code should do -- even something as simple as a pass-the-message-around-in-a-ring app.  If you can checkpoint and restart it, that's a good start.
<br>
<p>As for high-speed networks, any iWARP, IB, or Myrinet based network should do.  iWARP+IB use the OpenFabrics verbs API; Myrinet networks use the MX API.  AFAIK, neither of them export counters through /sys or /proc.
<br>
<p><span class="quotelev1">&gt; We are aware of your plugin facilities and that in addition to BLCR,
</span><br>
<span class="quotelev1">&gt; other checkpointers can also integrate with it.  And of course, we have the
</span><br>
<span class="quotelev1">&gt; highest respect for BLCR.  We think that at this time, it is best to
</span><br>
<span class="quotelev1">&gt; continue exploring both approaches.
</span><br>
<p>One clarification -- our plugin interfaces were not designed specifically to support BLCR.  They were designed to support generic checkpointing facilities.  Of course, we only had a few mind when they were designed, so it's possible that they might need to be extended if yours is different than at least the general model that we envisioned.  But all things are do-able.
<br>
<p>I just mention this if you wish to pursue the inside-Open-MPI plugins approach.  Of course, staying outside of Open MPI is advantageous from a portability point of view.
<br>
<p><span class="quotelev1">&gt; Although we haven't looked so closely at the plugin facility, we had
</span><br>
<span class="quotelev1">&gt; assumed that it always interoperates with the OpenMPI checkpoint-restart
</span><br>
<span class="quotelev1">&gt; service developed by Joshua Hursey (for which we also have very
</span><br>
<span class="quotelev1">&gt; high respect).  
</span><br>
<p>Ya, he's a smart guy.  But don't say it too loud or he'll get a big ego!  ;-)
<br>
<p><span class="quotelev1">&gt; Our understanding was that the OpenMPI checkpoint-restart
</span><br>
<span class="quotelev1">&gt; service arranges to halt all MPI messages, and then it calls BLCR
</span><br>
<span class="quotelev1">&gt; for checkpointing on the local host.
</span><br>
<p>The short answer is &quot;yes&quot;.  The longer answer is that Josh designed a few different types of plugins -- some of quiescing a job, some for back-end checkpointer support, etc.  Hence, one is not directly dependent on the other.  I believe that he has written some papers about this... ah, here's one of them (you may have seen this already?):
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/papers/hpdc-2009/">http://www.open-mpi.org/papers/hpdc-2009/</a>
<br>
<p><span class="quotelev1">&gt; DMTCP tries to do the job of both Josh's checkpoint-restart service
</span><br>
<span class="quotelev1">&gt; and also BLCR, and it does it all transparently by working at the TCP/IP socket
</span><br>
<span class="quotelev1">&gt; level.  So, we simply run:
</span><br>
<span class="quotelev1">&gt;   dmtcp_checkpoint mpirun ./hello_mpi
</span><br>
<span class="quotelev1">&gt;   dmtcp_command --checkpoint
</span><br>
<span class="quotelev1">&gt;   ./dmtcp_restart_script.sh
</span><br>
<span class="quotelev1">&gt; (The file QUICK-START in DMTCP has a few more details.)
</span><br>
<span class="quotelev1">&gt; Hence, we don't use the OpenMPI checkpoint-restart service or its plugin
</span><br>
<span class="quotelev1">&gt; interface, since we're already able to do the distributed checkpointing
</span><br>
<span class="quotelev1">&gt; directly.  If it were important, we could modify DMTCP to be called
</span><br>
<span class="quotelev1">&gt; by the plugin, and to do checkpointing only on the local host.
</span><br>
<p>I guess that's what I was asking about -- if you thought it would be worthwhile to do that: have your checkpoint service be called by Open MPI.  In this way, you'd use Open MPI's infrastructure to invoke your single-process-checkpointer underneath.
<br>
<p>I'm guessing there are advantages and disadvantages to both.
<br>
<p><span class="quotelev1">&gt; Also, as a side comment, DMTCP was already working with OpenMPI 1.2, but then
</span><br>
<span class="quotelev1">&gt; later versions of OpenMPI started using more sophisticated system calls.
</span><br>
<span class="quotelev1">&gt; By then, we were already working through different tasks, and it has
</span><br>
<span class="quotelev1">&gt; taken us this long to come back to OpenMPI and properly support it again
</span><br>
<span class="quotelev1">&gt; through our virtualized approach (properly handling the multiple
</span><br>
<span class="quotelev1">&gt; ptys of OpenMPI, etc.).
</span><br>
<p>Gotcha.  FWIW, we don't checkpoint the run-time system in Open MPI -- we only checkpoint the MPI processes.  Upon restart, we rebuild the run-time system and then launch the &quot;restart&quot; phase in the MPI processes.  In this way, we avoided a lot of special case code and took advantage of much of the infrastructure that we already had.
<br>
<p>This could probably be construed as an advantage to working in the plugin system of Open MPI -- you'd pretty much be isolated from using more complex system calls, etc.  Indeed, that was one of Josh's primary design goals: separate the &quot;quiesce&quot; phase from the &quot;checkpoint&quot; phase because they really are two different things, and they don't necessarily have to be related.
<br>
<p>That being said, a disadvantage of this approach is that that work (i.e., the plugin -- not the actual back-end checkpointer) then becomes specifically tied to Open MPI.  What we did with BLCR was to write a thin plugin that simply links to BLCR where the majority of the work is contained.  Hence, the plugin was pretty small -- it just interfaces to external functionality (many of Open MPI's plugins do that -- OMPI/MPI-specific logic is in the plugin, but we link against external libraries for additional functionality).  Also, when working in our plugin system, you're using our model and infrastructure -- not your own.  
<br>
<p>Josh had a lot of freedom to design our model and is finishing his PhD because of it :-), but he definitely had the &quot;first implementor&quot; advantage.  While we certainly encourage (and want!) new and novel work, the onus is now on new proposers to show why their system would be better than the one we have, etc.
<br>
<p><span class="quotelev1">&gt; So, in conclusion, DMTCP will work fine with OpenMPI out of the box
</span><br>
<span class="quotelev1">&gt; for small and medium jobs.  For questions of scalable computation,
</span><br>
<span class="quotelev1">&gt; measuring overhead, and so on, we would need a partner to address those
</span><br>
<span class="quotelev1">&gt; issues.  We would do most of the work, but we would need someone more
</span><br>
<span class="quotelev1">&gt; intimately familiar with good testbeds for OpenMPI, prioritized goals
</span><br>
<span class="quotelev1">&gt; for OpenMPI, and so on, in order to help lead us through the challenge
</span><br>
<span class="quotelev1">&gt; of scalability.  If that partner recommends that we would integrate
</span><br>
<span class="quotelev1">&gt; best through the OpenMPI plugin, we can certainly do that.  In fact, we are
</span><br>
<span class="quotelev1">&gt; working right now with the Condor group to have them validate DMTCP
</span><br>
<span class="quotelev1">&gt; as a checkpointer (initially for their vanilla universe) by operating
</span><br>
<span class="quotelev1">&gt; through the Condor checkpoint interface.
</span><br>
<p>Nifty.  If we want to have more detailed conversations, a phone call is likely best.  Ping me off-list and we can setup a time.
<br>
<p>Little known fact: one of the primary communication tools between Open MPI developers is the telephone (!).  We all email and IM each other frequently, but you can save a week's worth of exhausting emails with a 30- or 60-minute phone conversation.  :-)
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
<li><strong>Next message:</strong> <a href="12027.php">Eugene Loh: "Re: [OMPI users] hostfiles"</a>
<li><strong>Previous message:</strong> <a href="12025.php">David Mathog: "Re: [OMPI users] Anybody built a working 1.4.1 on Solaris 8 (Sparc)?"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/01/11953.php">Kapil Arya: "[OMPI users] DMTCP: Checkpoint-Restart solution for OpenMPI"</a>
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
