<?
$subject_val = "Re: [OMPI users] Busy waiting [was Re:  (no subject)]";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 24 11:48:54 2008" -->
<!-- isoreceived="20080424154854" -->
<!-- sent="Thu, 24 Apr 2008 11:48:45 -0400" -->
<!-- isosent="20080424154845" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Busy waiting [was Re:  (no subject)]" -->
<!-- id="BBCC6983-8A4F-4BD1-A964-23ED16B537FA_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="AB5DA59F-D88B-49B3-9655-64528221FE99_at_eecs.utk.edu" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-24 11:48:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5501.php">Ingo Josopait: "Re: [OMPI users] Busy waiting [was Re:  (no subject)]"</a>
<li><strong>Previous message:</strong> <a href="5499.php">Jeff Squyres: "Re: [OMPI users] install intel mac with Laopard"</a>
<li><strong>In reply to:</strong> <a href="5498.php">George Bosilca: "Re: [OMPI users] Busy waiting [was Re:  (no subject)]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5509.php">Danesh Daroui: "Re: [OMPI users] Busy waiting [was Re:  (no subject)]"</a>
<li><strong>Reply:</strong> <a href="5509.php">Danesh Daroui: "Re: [OMPI users] Busy waiting [was Re:  (no subject)]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What George said is what I meant by &quot;it's a non-trivial amount of  
<br>
work.&quot; :-)
<br>
<p>In addition to when George adds these patches (allowing components to  
<br>
register for blocking progress), there's going to be some work to deal  
<br>
with shared memory (we have some ideas here, but it's a bit more than  
<br>
just allowing shmem to register to blocking progress) and other random  
<br>
issues that will arise.
<br>
<p><p>On Apr 24, 2008, at 11:17 AM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; Well, blocking or not blocking this is the question !!!  
</span><br>
<span class="quotelev1">&gt; Unfortunately, it's more complex than this thread seems to indicate.  
</span><br>
<span class="quotelev1">&gt; It's not that we didn't want to implement it in Open MPI, it's that  
</span><br>
<span class="quotelev1">&gt; at one point we had to make a choice ... and we decided to always go  
</span><br>
<span class="quotelev1">&gt; for performance first.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, there were some experimentations to go in blocking more at  
</span><br>
<span class="quotelev1">&gt; least when only TCP was used. Unfortunately, this break some other  
</span><br>
<span class="quotelev1">&gt; things in Open MPI, because of our progression model. We are  
</span><br>
<span class="quotelev1">&gt; component based and these components are allowed to register  
</span><br>
<span class="quotelev1">&gt; periodically called callbacks ... And here periodically means as  
</span><br>
<span class="quotelev1">&gt; often as possible. There are at least 2 components that use this  
</span><br>
<span class="quotelev1">&gt; mechanism for their own progression: romio (mca/io/romio) and one- 
</span><br>
<span class="quotelev1">&gt; sided communications (mca/osc/*). Switching in blocking mode will  
</span><br>
<span class="quotelev1">&gt; break these 2 components completely. This was the reason why we're  
</span><br>
<span class="quotelev1">&gt; not blocking when only TCP is used.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Anyway, there is a solution. We have to move from a poll base  
</span><br>
<span class="quotelev1">&gt; progress for these components to an event base progress. There were  
</span><br>
<span class="quotelev1">&gt; some discussions, and if I remember well ... everybody's waiting for  
</span><br>
<span class="quotelev1">&gt; one of my patches :) A patch that allow a component to add a  
</span><br>
<span class="quotelev1">&gt; completion callback to MPI requests ... I don't have a clear  
</span><br>
<span class="quotelev1">&gt; deadline for this, and unfortunately I'm a little busy right now ...  
</span><br>
<span class="quotelev1">&gt; but I'll work on it asap.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 24, 2008, at 9:43 AM, Barry Rountree wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, Apr 24, 2008 at 12:56:03PM +0200, Ingo Josopait wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am using one of the nodes as a desktop computer. Therefore it is  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; most
</span><br>
<span class="quotelev3">&gt;&gt;&gt; important for me that the mpi program is not so greedily acquiring  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cpu
</span><br>
<span class="quotelev3">&gt;&gt;&gt; time.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is a kernel scheduling issue, not an OpenMPI issue.  Busy  
</span><br>
<span class="quotelev2">&gt;&gt; waiting in
</span><br>
<span class="quotelev2">&gt;&gt; one process should not cause noticable loss of responsiveness in  
</span><br>
<span class="quotelev2">&gt;&gt; another
</span><br>
<span class="quotelev2">&gt;&gt; processes.  Have you experimented with the &quot;nice&quot; command?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; But I would imagine that the energy consumption is generally a big
</span><br>
<span class="quotelev3">&gt;&gt;&gt; issue, since energy is a major cost factor in a computer cluster.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yup.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cpu is idle, it uses considerably less energy. Last time I checked  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; my
</span><br>
<span class="quotelev3">&gt;&gt;&gt; computer used 180W when both cpu cores were working and 110W when  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; both
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cores were idle.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What processor is this?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I just made a small hack to solve the problem. I inserted a simple  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sleep
</span><br>
<span class="quotelev3">&gt;&gt;&gt; call into the function 'opal_condition_wait':
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- orig/openmpi-1.2.6/opal/threads/condition.h
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ openmpi-1.2.6/opal/threads/condition.h
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -78,6 +78,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    } else {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        while (c-&gt;c_signaled == 0) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +           usleep(1000);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            opal_progress();
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I expect this would lead to increased execution time for all programs
</span><br>
<span class="quotelev2">&gt;&gt; and increased energy consumption for most programs.  Recall that  
</span><br>
<span class="quotelev2">&gt;&gt; energy
</span><br>
<span class="quotelev2">&gt;&gt; is power multiplied by time.  You're reducing the power on some nodes
</span><br>
<span class="quotelev2">&gt;&gt; and increasing time on all nodes.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The usleep call will let the program sleep for about 4 ms (it won't
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sleep for a shorter time because of some timer granularity). But  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; good enough for me. The cpu usage is (almost) zero when the tasks  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; are
</span><br>
<span class="quotelev3">&gt;&gt;&gt; waiting for one another.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I think your mistake here is considering CPU load to be a useful  
</span><br>
<span class="quotelev2">&gt;&gt; metric.
</span><br>
<span class="quotelev2">&gt;&gt; It isn't.  Responsiveness is a useful metric, energy is a useful  
</span><br>
<span class="quotelev2">&gt;&gt; metric,
</span><br>
<span class="quotelev2">&gt;&gt; but CPU load isn't a reliable guide to either of these.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For a proper implementation you would want to actively poll  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; without a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sleep call for a few milliseconds, and then use some other method  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sleeps not for a fixed time, but until new messages arrive.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Well, it sounds like you can get to this before I can.  Post your  
</span><br>
<span class="quotelev2">&gt;&gt; patch
</span><br>
<span class="quotelev2">&gt;&gt; here and I'll test it on the NAS suite, UMT2K, Paradis, and a few
</span><br>
<span class="quotelev2">&gt;&gt; synthetic benchmarks I've written.  The cluster I use has multimeters
</span><br>
<span class="quotelev2">&gt;&gt; hooked up so I can also let you know how much energy is being saved.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Barry Rountree
</span><br>
<span class="quotelev2">&gt;&gt; Ph.D. Candidate, Computer Science
</span><br>
<span class="quotelev2">&gt;&gt; University of Georgia
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
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5501.php">Ingo Josopait: "Re: [OMPI users] Busy waiting [was Re:  (no subject)]"</a>
<li><strong>Previous message:</strong> <a href="5499.php">Jeff Squyres: "Re: [OMPI users] install intel mac with Laopard"</a>
<li><strong>In reply to:</strong> <a href="5498.php">George Bosilca: "Re: [OMPI users] Busy waiting [was Re:  (no subject)]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5509.php">Danesh Daroui: "Re: [OMPI users] Busy waiting [was Re:  (no subject)]"</a>
<li><strong>Reply:</strong> <a href="5509.php">Danesh Daroui: "Re: [OMPI users] Busy waiting [was Re:  (no subject)]"</a>
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
