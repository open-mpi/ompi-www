<?
$subject_val = "Re: [OMPI users] Busy waiting [was Re:  (no subject)]";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 24 11:17:40 2008" -->
<!-- isoreceived="20080424151740" -->
<!-- sent="Thu, 24 Apr 2008 11:17:30 -0400" -->
<!-- isosent="20080424151730" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Busy waiting [was Re:  (no subject)]" -->
<!-- id="AB5DA59F-D88B-49B3-9655-64528221FE99_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20080424134346.GB24741_at_eponymous" -->
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
<strong>Subject:</strong> Re: [OMPI users] Busy waiting [was Re:  (no subject)]<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-24 11:17:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5499.php">Jeff Squyres: "Re: [OMPI users] install intel mac with Laopard"</a>
<li><strong>Previous message:</strong> <a href="5497.php">Doug Reeder: "Re: [OMPI users] install intel mac with Laopard"</a>
<li><strong>In reply to:</strong> <a href="5491.php">Barry Rountree: "Re: [OMPI users] Busy waiting [was Re:  (no subject)]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5500.php">Jeff Squyres: "Re: [OMPI users] Busy waiting [was Re:  (no subject)]"</a>
<li><strong>Reply:</strong> <a href="5500.php">Jeff Squyres: "Re: [OMPI users] Busy waiting [was Re:  (no subject)]"</a>
<li><strong>Reply:</strong> <a href="5510.php">Barry Rountree: "Re: [OMPI users] Busy waiting [was Re:  (no subject)]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Well, blocking or not blocking this is the question !!! Unfortunately,  
<br>
it's more complex than this thread seems to indicate. It's not that we  
<br>
didn't want to implement it in Open MPI, it's that at one point we had  
<br>
to make a choice ... and we decided to always go for performance first.
<br>
<p>However, there were some experimentations to go in blocking more at  
<br>
least when only TCP was used. Unfortunately, this break some other  
<br>
things in Open MPI, because of our progression model. We are component  
<br>
based and these components are allowed to register periodically called  
<br>
callbacks ... And here periodically means as often as possible. There  
<br>
are at least 2 components that use this mechanism for their own  
<br>
progression: romio (mca/io/romio) and one-sided communications (mca/ 
<br>
osc/*). Switching in blocking mode will break these 2 components  
<br>
completely. This was the reason why we're not blocking when only TCP  
<br>
is used.
<br>
<p>Anyway, there is a solution. We have to move from a poll base progress  
<br>
for these components to an event base progress. There were some  
<br>
discussions, and if I remember well ... everybody's waiting for one of  
<br>
my patches :) A patch that allow a component to add a completion  
<br>
callback to MPI requests ... I don't have a clear deadline for this,  
<br>
and unfortunately I'm a little busy right now ... but I'll work on it  
<br>
asap.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Apr 24, 2008, at 9:43 AM, Barry Rountree wrote:
<br>
<p><span class="quotelev1">&gt; On Thu, Apr 24, 2008 at 12:56:03PM +0200, Ingo Josopait wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I am using one of the nodes as a desktop computer. Therefore it is  
</span><br>
<span class="quotelev2">&gt;&gt; most
</span><br>
<span class="quotelev2">&gt;&gt; important for me that the mpi program is not so greedily acquiring  
</span><br>
<span class="quotelev2">&gt;&gt; cpu
</span><br>
<span class="quotelev2">&gt;&gt; time.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is a kernel scheduling issue, not an OpenMPI issue.  Busy  
</span><br>
<span class="quotelev1">&gt; waiting in
</span><br>
<span class="quotelev1">&gt; one process should not cause noticable loss of responsiveness in  
</span><br>
<span class="quotelev1">&gt; another
</span><br>
<span class="quotelev1">&gt; processes.  Have you experimented with the &quot;nice&quot; command?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But I would imagine that the energy consumption is generally a big
</span><br>
<span class="quotelev2">&gt;&gt; issue, since energy is a major cost factor in a computer cluster.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yup.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When a
</span><br>
<span class="quotelev2">&gt;&gt; cpu is idle, it uses considerably less energy. Last time I checked my
</span><br>
<span class="quotelev2">&gt;&gt; computer used 180W when both cpu cores were working and 110W when  
</span><br>
<span class="quotelev2">&gt;&gt; both
</span><br>
<span class="quotelev2">&gt;&gt; cores were idle.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What processor is this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I just made a small hack to solve the problem. I inserted a simple  
</span><br>
<span class="quotelev2">&gt;&gt; sleep
</span><br>
<span class="quotelev2">&gt;&gt; call into the function 'opal_condition_wait':
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --- orig/openmpi-1.2.6/opal/threads/condition.h
</span><br>
<span class="quotelev2">&gt;&gt; +++ openmpi-1.2.6/opal/threads/condition.h
</span><br>
<span class="quotelev2">&gt;&gt; @@ -78,6 +78,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; #endif
</span><br>
<span class="quotelev2">&gt;&gt;     } else {
</span><br>
<span class="quotelev2">&gt;&gt;         while (c-&gt;c_signaled == 0) {
</span><br>
<span class="quotelev2">&gt;&gt; +           usleep(1000);
</span><br>
<span class="quotelev2">&gt;&gt;             opal_progress();
</span><br>
<span class="quotelev2">&gt;&gt;         }
</span><br>
<span class="quotelev2">&gt;&gt;     }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I expect this would lead to increased execution time for all programs
</span><br>
<span class="quotelev1">&gt; and increased energy consumption for most programs.  Recall that  
</span><br>
<span class="quotelev1">&gt; energy
</span><br>
<span class="quotelev1">&gt; is power multiplied by time.  You're reducing the power on some nodes
</span><br>
<span class="quotelev1">&gt; and increasing time on all nodes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The usleep call will let the program sleep for about 4 ms (it won't
</span><br>
<span class="quotelev2">&gt;&gt; sleep for a shorter time because of some timer granularity). But  
</span><br>
<span class="quotelev2">&gt;&gt; that is
</span><br>
<span class="quotelev2">&gt;&gt; good enough for me. The cpu usage is (almost) zero when the tasks are
</span><br>
<span class="quotelev2">&gt;&gt; waiting for one another.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think your mistake here is considering CPU load to be a useful  
</span><br>
<span class="quotelev1">&gt; metric.
</span><br>
<span class="quotelev1">&gt; It isn't.  Responsiveness is a useful metric, energy is a useful  
</span><br>
<span class="quotelev1">&gt; metric,
</span><br>
<span class="quotelev1">&gt; but CPU load isn't a reliable guide to either of these.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; For a proper implementation you would want to actively poll without a
</span><br>
<span class="quotelev2">&gt;&gt; sleep call for a few milliseconds, and then use some other method  
</span><br>
<span class="quotelev2">&gt;&gt; that
</span><br>
<span class="quotelev2">&gt;&gt; sleeps not for a fixed time, but until new messages arrive.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Well, it sounds like you can get to this before I can.  Post your  
</span><br>
<span class="quotelev1">&gt; patch
</span><br>
<span class="quotelev1">&gt; here and I'll test it on the NAS suite, UMT2K, Paradis, and a few
</span><br>
<span class="quotelev1">&gt; synthetic benchmarks I've written.  The cluster I use has multimeters
</span><br>
<span class="quotelev1">&gt; hooked up so I can also let you know how much energy is being saved.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Barry Rountree
</span><br>
<span class="quotelev1">&gt; Ph.D. Candidate, Computer Science
</span><br>
<span class="quotelev1">&gt; University of Georgia
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
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5498/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5499.php">Jeff Squyres: "Re: [OMPI users] install intel mac with Laopard"</a>
<li><strong>Previous message:</strong> <a href="5497.php">Doug Reeder: "Re: [OMPI users] install intel mac with Laopard"</a>
<li><strong>In reply to:</strong> <a href="5491.php">Barry Rountree: "Re: [OMPI users] Busy waiting [was Re:  (no subject)]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5500.php">Jeff Squyres: "Re: [OMPI users] Busy waiting [was Re:  (no subject)]"</a>
<li><strong>Reply:</strong> <a href="5500.php">Jeff Squyres: "Re: [OMPI users] Busy waiting [was Re:  (no subject)]"</a>
<li><strong>Reply:</strong> <a href="5510.php">Barry Rountree: "Re: [OMPI users] Busy waiting [was Re:  (no subject)]"</a>
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
