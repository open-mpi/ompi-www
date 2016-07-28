<?
$subject_val = "Re: [OMPI users] fault tolerance in open mpi";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 21 03:38:01 2009" -->
<!-- isoreceived="20091221083801" -->
<!-- sent="Mon, 21 Dec 2009 14:07:37 +0530" -->
<!-- isosent="20091221083737" -->
<!-- name="vipin kumar" -->
<!-- email="vipinkumar41_at_[hidden]" -->
<!-- subject="Re: [OMPI users] fault tolerance in open mpi" -->
<!-- id="fa4af8200912210037h1dd46617s91606ddcf829223d_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5D6BA8E5-9285-40E7-8A49-F5C75B204A94_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] fault tolerance in open mpi<br>
<strong>From:</strong> vipin kumar (<em>vipinkumar41_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-21 03:37:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11619.php">jody: "Re: [OMPI users] Debugging spawned processes"</a>
<li><strong>Previous message:</strong> <a href="11617.php">Ralph Castain: "Re: [OMPI users] Torque 2.4.3 fails with OpenMPI 1.3.4; no startup at all"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/09/10740.php">Josh Hursey: "Re: [OMPI users] fault tolerance in open mpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11622.php">Ralph Castain: "Re: [OMPI users] fault tolerance in open mpi"</a>
<li><strong>Reply:</strong> <a href="11622.php">Ralph Castain: "Re: [OMPI users] fault tolerance in open mpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello folks,
<br>
<p>As I explained my problem earlier, I am looking for Fault Tolerance in MPI
<br>
Programs. I read in Open MPI 2.1 standard document that two DISCONNECTED
<br>
processes does not affect each other, i.e. they can die or can be killed
<br>
without whithout affecting other processes.
<br>
<p>So, I was trying this to achieve fault tolerance using
<br>
MPI::Comm::Disconnect() to disconnect the CHILD process with PARENT process,
<br>
which was spawned by calling MPI::Comm::spawn(). I am calling
<br>
MPI::Comm::Disconnect() from CHILD process immediatly after calling
<br>
MPI::Init(). It seems that CHILD process is not returning from this call.
<br>
<p>I tried MPI::Comm::Free() too, but this is also not working. Process is not
<br>
progressing from this point of call. If I comment these statements,
<br>
everything works fine. Note that I have tried this in Solaris as well as in
<br>
Linux (fedora core).
<br>
<p>My question is, whether Open-mpi suports to disconnect two processes( like
<br>
child from parent). And if it is, then how?
<br>
<p><p>Thanks &amp; Regards,
<br>
<p>On Wed, Sep 23, 2009 at 6:41 PM, Josh Hursey &lt;jjhursey_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Unfortunately I cannot provide a precise time frame for availability at
</span><br>
<span class="quotelev1">&gt; this point, but we are targeting the v1.5 release series. There is a handful
</span><br>
<span class="quotelev1">&gt; of core developers working on this issue at the moment. Pieces of this  work
</span><br>
<span class="quotelev1">&gt; have already made it into the Open MPI development trunk. If you want to
</span><br>
<span class="quotelev1">&gt; play around with what is available try turning on the resilient mapper:
</span><br>
<span class="quotelev1">&gt;  -mca rmaps resilient
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We will be sure to email the list once this work becomes more stable and
</span><br>
<span class="quotelev1">&gt; available.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 18, 2009, at 2:56 AM, vipin kumar wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Hi Josh,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It is good to hear from you that work is in progress towards resiliency of
</span><br>
<span class="quotelev2">&gt;&gt; Open-MPI. I was and I am waiting for this capability in Open-MPI. I have
</span><br>
<span class="quotelev2">&gt;&gt; almost finished my development work and waiting for this to happen so that I
</span><br>
<span class="quotelev2">&gt;&gt; can test my programs. It will be good if you can tell how long it will take
</span><br>
<span class="quotelev2">&gt;&gt; to make Open-MPI a resilient impementation. Here by resiliency I mean
</span><br>
<span class="quotelev2">&gt;&gt; abnormal termination or intentionally killing a process should not cause
</span><br>
<span class="quotelev2">&gt;&gt; any(parent or sibling) process to be terminated, given that processes are
</span><br>
<span class="quotelev2">&gt;&gt; connected.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; thanks.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mon, Aug 3, 2009 at 8:37 PM, Josh Hursey &lt;jjhursey_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Task-farm or manager/worker recovery models typically depend on
</span><br>
<span class="quotelev2">&gt;&gt; intercommunicators (i.e., from MPI_Comm_spawn) and a resilient MPI
</span><br>
<span class="quotelev2">&gt;&gt; implementation. William Gropp and Ewing Lusk have a paper entitled &quot;Fault
</span><br>
<span class="quotelev2">&gt;&gt; Tolerance in MPI Programs&quot; that outlines how an application might take
</span><br>
<span class="quotelev2">&gt;&gt; advantage of these features in order to recover from process failure.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; However, these techniques strongly depend upon resilient MPI
</span><br>
<span class="quotelev2">&gt;&gt; implementations, and behaviors that, some may argue, are non-standard.
</span><br>
<span class="quotelev2">&gt;&gt; Unfortunately there are not many MPI implementations that are sufficiently
</span><br>
<span class="quotelev2">&gt;&gt; resilient in the face of process failure to support failure in task-farm
</span><br>
<span class="quotelev2">&gt;&gt; scenarios. Though Open MPI supports the current MPI 2.1 standard, it is not
</span><br>
<span class="quotelev2">&gt;&gt; as resilient to process failure as it could be.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; There are a number of people working on improving the resiliency of Open
</span><br>
<span class="quotelev2">&gt;&gt; MPI in the face of network and process failure (including myself). We have
</span><br>
<span class="quotelev2">&gt;&gt; started to move some of the resiliency work into the Open MPI trunk.
</span><br>
<span class="quotelev2">&gt;&gt; Resiliency in Open MPI has been improving over the past few months, but I
</span><br>
<span class="quotelev2">&gt;&gt; would not assess it as ready quite yet. Most of the work has focused on the
</span><br>
<span class="quotelev2">&gt;&gt; runtime level (ORTE), and there are still some MPI level (OMPI) issues that
</span><br>
<span class="quotelev2">&gt;&gt; need to be worked out.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; With all of that being said, I would try some of the techniques presented
</span><br>
<span class="quotelev2">&gt;&gt; in the Gropp/Lusk paper in your application. Then test it with Open MPI and
</span><br>
<span class="quotelev2">&gt;&gt; let us know how it goes.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Best,
</span><br>
<span class="quotelev2">&gt;&gt; Josh
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 3, 2009, at 10:30 AM, Durga Choudhury wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is that kind of approach possible within an MPI framework? Perhaps a
</span><br>
<span class="quotelev2">&gt;&gt; grid approach would be better. More experienced people, speak up,
</span><br>
<span class="quotelev2">&gt;&gt; please?
</span><br>
<span class="quotelev2">&gt;&gt; (The reason I say that is that I too am interested in the solution of
</span><br>
<span class="quotelev2">&gt;&gt; that kind of problem, where an individual blade of a blade server
</span><br>
<span class="quotelev2">&gt;&gt; fails and correcting for that failure on the fly is better than taking
</span><br>
<span class="quotelev2">&gt;&gt; checkpoints and restarting the whole process excluding the failed
</span><br>
<span class="quotelev2">&gt;&gt; blade.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Durga
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mon, Aug 3, 2009 at 9:21 AM, jody&lt;jody.xha_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I guess &quot;task-farming&quot; could give you a certain amount of the kind of
</span><br>
<span class="quotelev2">&gt;&gt; fault-tolerance you want.
</span><br>
<span class="quotelev2">&gt;&gt; (i.e. a master process distributes tasks to idle slave processors -
</span><br>
<span class="quotelev2">&gt;&gt; however, this will only work
</span><br>
<span class="quotelev2">&gt;&gt; if the slave processes don't need to communicate with each other)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jody
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mon, Aug 3, 2009 at 1:24 PM, vipin kumar&lt;vipinkumar41_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi all,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks Durga for your reply.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jeff, once you wrote code for Mandelbrot set to demonstrate fault
</span><br>
<span class="quotelev2">&gt;&gt; tolerance
</span><br>
<span class="quotelev2">&gt;&gt; in LAM-MPI. i. e. killing any slave process doesn't
</span><br>
<span class="quotelev2">&gt;&gt; affect others. Exact behaviour I am looking for in Open MPI. I attempted,
</span><br>
<span class="quotelev2">&gt;&gt; but no luck. Can you please tell how to write such programs in Open MPI.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks in advance.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, Jul 9, 2009 at 8:30 PM, Durga Choudhury &lt;dpchoudh_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Although I have perhaps the least experience on the topic in this
</span><br>
<span class="quotelev2">&gt;&gt; list, I will take a shot; more experienced people, please correct me:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; MPI standards specify communication mechanism, not fault tolerance at
</span><br>
<span class="quotelev2">&gt;&gt; any level. You may achieve network tolerance at the IP level by
</span><br>
<span class="quotelev2">&gt;&gt; implementing 'equal cost multipath' routes (which means two equally
</span><br>
<span class="quotelev2">&gt;&gt; capable NIC cards connecting to the same destination and modifying the
</span><br>
<span class="quotelev2">&gt;&gt; kernel routing table to use both cards; the kernel will dynamically
</span><br>
<span class="quotelev2">&gt;&gt; load balance.). At the MAC level, you can achieve the same effect by
</span><br>
<span class="quotelev2">&gt;&gt; trunking multiple network cards.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You can achieve process level fault tolerance by a checkpointing
</span><br>
<span class="quotelev2">&gt;&gt; scheme such as BLCR, which has been tested to work with OpenMPI (and
</span><br>
<span class="quotelev2">&gt;&gt; other processes as well)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Durga
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, Jul 9, 2009 at 4:57 AM, vipin kumar&lt;vipinkumar41_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi all,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I want to know whether open mpi supports Network and process fault
</span><br>
<span class="quotelev2">&gt;&gt; tolerance
</span><br>
<span class="quotelev2">&gt;&gt; or not? If there is any example demonstrating these features that will
</span><br>
<span class="quotelev2">&gt;&gt; be
</span><br>
<span class="quotelev2">&gt;&gt; best.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Vipin K.
</span><br>
<span class="quotelev2">&gt;&gt; Research Engineer,
</span><br>
<span class="quotelev2">&gt;&gt; C-DOTB, India
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Vipin K.
</span><br>
<span class="quotelev2">&gt;&gt; Research Engineer,
</span><br>
<span class="quotelev2">&gt;&gt; C-DOTB, India
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Vipin K.
</span><br>
<span class="quotelev2">&gt;&gt; Research Engineer,
</span><br>
<span class="quotelev2">&gt;&gt; C-DOTB, India
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Vipin K.
Research Engineer,
C-DOTB, India
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11618/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11619.php">jody: "Re: [OMPI users] Debugging spawned processes"</a>
<li><strong>Previous message:</strong> <a href="11617.php">Ralph Castain: "Re: [OMPI users] Torque 2.4.3 fails with OpenMPI 1.3.4; no startup at all"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/09/10740.php">Josh Hursey: "Re: [OMPI users] fault tolerance in open mpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11622.php">Ralph Castain: "Re: [OMPI users] fault tolerance in open mpi"</a>
<li><strong>Reply:</strong> <a href="11622.php">Ralph Castain: "Re: [OMPI users] fault tolerance in open mpi"</a>
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
