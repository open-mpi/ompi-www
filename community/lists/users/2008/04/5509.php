<?
$subject_val = "Re: [OMPI users] Busy waiting [was Re:  (no subject)]";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 24 13:24:38 2008" -->
<!-- isoreceived="20080424172438" -->
<!-- sent="Thu, 24 Apr 2008 19:24:35 +0200" -->
<!-- isosent="20080424172435" -->
<!-- name="Danesh Daroui" -->
<!-- email="Danesh.D_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Busy waiting [was Re:  (no subject)]" -->
<!-- id="4810C253.4040109_at_bredband.net" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="BBCC6983-8A4F-4BD1-A964-23ED16B537FA_at_cisco.com" -->
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
<strong>From:</strong> Danesh Daroui (<em>Danesh.D_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-24 13:24:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5510.php">Barry Rountree: "Re: [OMPI users] Busy waiting [was Re:  (no subject)]"</a>
<li><strong>Previous message:</strong> <a href="5508.php">Doug Reeder: "Re: [OMPI users] install intel mac with Laopard"</a>
<li><strong>In reply to:</strong> <a href="5500.php">Jeff Squyres: "Re: [OMPI users] Busy waiting [was Re:  (no subject)]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5510.php">Barry Rountree: "Re: [OMPI users] Busy waiting [was Re:  (no subject)]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I just wanted to add my last comment since this discussion seems to be 
<br>
very hot! As Jeff
<br>
mentioned while a process is waiting to receive a message it doesn't 
<br>
really matter if it uses
<br>
blocking or polling. What I really meant was that blocking can be useful 
<br>
to use CPU cycles to
<br>
handle other calculations which is supposed to be done by this node if 
<br>
OMPI is smart enough
<br>
tp decide such things. Otherwise, because HPC nodes are usually 
<br>
deidicated nodes so there
<br>
will no other tasks which will be run in background and therefore be 
<br>
influenced by spinning.
<br>
Nevertheless, I think that using blocking instead of busy loops should 
<br>
have higher priority since
<br>
it can save CPU idle cycles at least for OMPI's internal tasks...
<br>
<p>D.
<br>
<p><p>Jeff Squyres skrev:
<br>
<span class="quotelev1">&gt; What George said is what I meant by &quot;it's a non-trivial amount of  
</span><br>
<span class="quotelev1">&gt; work.&quot; :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In addition to when George adds these patches (allowing components to  
</span><br>
<span class="quotelev1">&gt; register for blocking progress), there's going to be some work to deal  
</span><br>
<span class="quotelev1">&gt; with shared memory (we have some ideas here, but it's a bit more than  
</span><br>
<span class="quotelev1">&gt; just allowing shmem to register to blocking progress) and other random  
</span><br>
<span class="quotelev1">&gt; issues that will arise.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 24, 2008, at 11:17 AM, George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Well, blocking or not blocking this is the question !!!  
</span><br>
<span class="quotelev2">&gt;&gt; Unfortunately, it's more complex than this thread seems to indicate.  
</span><br>
<span class="quotelev2">&gt;&gt; It's not that we didn't want to implement it in Open MPI, it's that  
</span><br>
<span class="quotelev2">&gt;&gt; at one point we had to make a choice ... and we decided to always go  
</span><br>
<span class="quotelev2">&gt;&gt; for performance first.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; However, there were some experimentations to go in blocking more at  
</span><br>
<span class="quotelev2">&gt;&gt; least when only TCP was used. Unfortunately, this break some other  
</span><br>
<span class="quotelev2">&gt;&gt; things in Open MPI, because of our progression model. We are  
</span><br>
<span class="quotelev2">&gt;&gt; component based and these components are allowed to register  
</span><br>
<span class="quotelev2">&gt;&gt; periodically called callbacks ... And here periodically means as  
</span><br>
<span class="quotelev2">&gt;&gt; often as possible. There are at least 2 components that use this  
</span><br>
<span class="quotelev2">&gt;&gt; mechanism for their own progression: romio (mca/io/romio) and one- 
</span><br>
<span class="quotelev2">&gt;&gt; sided communications (mca/osc/*). Switching in blocking mode will  
</span><br>
<span class="quotelev2">&gt;&gt; break these 2 components completely. This was the reason why we're  
</span><br>
<span class="quotelev2">&gt;&gt; not blocking when only TCP is used.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Anyway, there is a solution. We have to move from a poll base  
</span><br>
<span class="quotelev2">&gt;&gt; progress for these components to an event base progress. There were  
</span><br>
<span class="quotelev2">&gt;&gt; some discussions, and if I remember well ... everybody's waiting for  
</span><br>
<span class="quotelev2">&gt;&gt; one of my patches :) A patch that allow a component to add a  
</span><br>
<span class="quotelev2">&gt;&gt; completion callback to MPI requests ... I don't have a clear  
</span><br>
<span class="quotelev2">&gt;&gt; deadline for this, and unfortunately I'm a little busy right now ...  
</span><br>
<span class="quotelev2">&gt;&gt; but I'll work on it asap.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  george.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 24, 2008, at 9:43 AM, Barry Rountree wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Thu, Apr 24, 2008 at 12:56:03PM +0200, Ingo Josopait wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I am using one of the nodes as a desktop computer. Therefore it is  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; most
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; important for me that the mpi program is not so greedily acquiring  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; cpu
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; time.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This is a kernel scheduling issue, not an OpenMPI issue.  Busy  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; waiting in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; one process should not cause noticable loss of responsiveness in  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; another
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processes.  Have you experimented with the &quot;nice&quot; command?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; But I would imagine that the energy consumption is generally a big
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; issue, since energy is a major cost factor in a computer cluster.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yup.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; When a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; cpu is idle, it uses considerably less energy. Last time I checked  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; my
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; computer used 180W when both cpu cores were working and 110W when  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; both
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; cores were idle.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What processor is this?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I just made a small hack to solve the problem. I inserted a simple  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; sleep
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; call into the function 'opal_condition_wait':
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --- orig/openmpi-1.2.6/opal/threads/condition.h
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +++ openmpi-1.2.6/opal/threads/condition.h
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; @@ -78,6 +78,7 @@
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #endif
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    } else {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        while (c-&gt;c_signaled == 0) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +           usleep(1000);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;            opal_progress();
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I expect this would lead to increased execution time for all programs
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and increased energy consumption for most programs.  Recall that  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; energy
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is power multiplied by time.  You're reducing the power on some nodes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and increasing time on all nodes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The usleep call will let the program sleep for about 4 ms (it won't
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; sleep for a shorter time because of some timer granularity). But  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; that is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; good enough for me. The cpu usage is (almost) zero when the tasks  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; are
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; waiting for one another.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I think your mistake here is considering CPU load to be a useful  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; metric.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It isn't.  Responsiveness is a useful metric, energy is a useful  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; metric,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but CPU load isn't a reliable guide to either of these.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; For a proper implementation you would want to actively poll  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; without a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; sleep call for a few milliseconds, and then use some other method  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; that
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; sleeps not for a fixed time, but until new messages arrive.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Well, it sounds like you can get to this before I can.  Post your  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; patch
</span><br>
<span class="quotelev3">&gt;&gt;&gt; here and I'll test it on the NAS suite, UMT2K, Paradis, and a few
</span><br>
<span class="quotelev3">&gt;&gt;&gt; synthetic benchmarks I've written.  The cluster I use has multimeters
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hooked up so I can also let you know how much energy is being saved.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Barry Rountree
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ph.D. Candidate, Computer Science
</span><br>
<span class="quotelev3">&gt;&gt;&gt; University of Georgia
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
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5510.php">Barry Rountree: "Re: [OMPI users] Busy waiting [was Re:  (no subject)]"</a>
<li><strong>Previous message:</strong> <a href="5508.php">Doug Reeder: "Re: [OMPI users] install intel mac with Laopard"</a>
<li><strong>In reply to:</strong> <a href="5500.php">Jeff Squyres: "Re: [OMPI users] Busy waiting [was Re:  (no subject)]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5510.php">Barry Rountree: "Re: [OMPI users] Busy waiting [was Re:  (no subject)]"</a>
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
