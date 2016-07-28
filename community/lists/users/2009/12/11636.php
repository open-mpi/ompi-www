<?
$subject_val = "Re: [OMPI users] fault tolerance in open mpi";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 24 02:21:41 2009" -->
<!-- isoreceived="20091224072141" -->
<!-- sent="Thu, 24 Dec 2009 12:51:36 +0530" -->
<!-- isosent="20091224072136" -->
<!-- name="vipin kumar" -->
<!-- email="vipinkumar41_at_[hidden]" -->
<!-- subject="Re: [OMPI users] fault tolerance in open mpi" -->
<!-- id="fa4af8200912232321w20cff2ecu4fd521b5641cb96f_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="57BB24AE-4DE9-4212-9A5A-D86639BB2B5C_at_open-mpi.org" -->
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
<strong>Date:</strong> 2009-12-24 02:21:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11637.php">Aaron Knister: "[OMPI users] strange undefined references to mpi_sizeofXXX_ errors with pgi"</a>
<li><strong>Previous message:</strong> <a href="11635.php">Ralph Castain: "Re: [OMPI users] fault tolerance in open mpi"</a>
<li><strong>In reply to:</strong> <a href="11635.php">Ralph Castain: "Re: [OMPI users] fault tolerance in open mpi"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all,
<br>
<p>May I help in this context ? I can't promise to do big things or high
<br>
availability in this regard, because I may get more busy in my work.
<br>
And also I am not sure that my
<br>
company will allow this or not. Any way I may do this in my spare time.
<br>
<p><p>Thanks &amp; Regards,
<br>
<p>On 12/23/09, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; That's just OMPI's default behavior - as Josh said, we are working towards
</span><br>
<span class="quotelev1">&gt; allowing other behaviors, but for now, this is what we have.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 23, 2009, at 5:40 AM, vipin kumar wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you Ralph,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I did as you said. Programs are running fine, But still killing one
</span><br>
<span class="quotelev2">&gt;&gt; process leads to terminate all processes. Am I missing something? Any
</span><br>
<span class="quotelev2">&gt;&gt; thing else to be called with MPI::Comm::Disconnect()?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks &amp; Regards,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mon, Dec 21, 2009 at 8:00 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Disconnect is a -collective- operation. Both parent and child have to call
</span><br>
<span class="quotelev2">&gt;&gt; it. Your child process is &quot;hanging&quot; while it waits for the parent.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 21, 2009, at 1:37 AM, vipin kumar wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello folks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; As I explained my problem earlier, I am looking for Fault Tolerance in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI Programs. I read in Open MPI 2.1 standard document that two
</span><br>
<span class="quotelev3">&gt;&gt;&gt; DISCONNECTED processes does not affect each other, i.e. they can die or
</span><br>
<span class="quotelev3">&gt;&gt;&gt; can be killed without whithout affecting other processes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So, I was trying this to achieve fault tolerance using
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI::Comm::Disconnect() to disconnect the CHILD process with PARENT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; process, which was spawned by calling MPI::Comm::spawn(). I am calling
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI::Comm::Disconnect() from CHILD process immediatly after calling
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI::Init(). It seems that CHILD process is not returning from this call.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I tried MPI::Comm::Free() too, but this is also not working. Process is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; not progressing from this point of call. If I comment these statements,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; everything works fine. Note that I have tried this in Solaris as well as
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in Linux (fedora core).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; My question is, whether Open-mpi suports to disconnect two processes(
</span><br>
<span class="quotelev3">&gt;&gt;&gt; like child from parent). And if it is, then how?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks &amp; Regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Wed, Sep 23, 2009 at 6:41 PM, Josh Hursey &lt;jjhursey_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Unfortunately I cannot provide a precise time frame for availability at
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this point, but we are targeting the v1.5 release series. There is a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; handful of core developers working on this issue at the moment. Pieces of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this  work have already made it into the Open MPI development trunk. If
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you want to play around with what is available try turning on the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; resilient mapper:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  -mca rmaps resilient
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We will be sure to email the list once this work becomes more stable and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; available.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- Josh
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Sep 18, 2009, at 2:56 AM, vipin kumar wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Josh,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It is good to hear from you that work is in progress towards resiliency
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of Open-MPI. I was and I am waiting for this capability in Open-MPI. I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; have almost finished my development work and waiting for this to happen
</span><br>
<span class="quotelev3">&gt;&gt;&gt; so that I can test my programs. It will be good if you can tell how long
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it will take to make Open-MPI a resilient impementation. Here by
</span><br>
<span class="quotelev3">&gt;&gt;&gt; resiliency I mean abnormal termination or intentionally killing a process
</span><br>
<span class="quotelev3">&gt;&gt;&gt; should not cause any(parent or sibling) process to be terminated, given
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that processes are connected.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; thanks.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Mon, Aug 3, 2009 at 8:37 PM, Josh Hursey &lt;jjhursey_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Task-farm or manager/worker recovery models typically depend on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; intercommunicators (i.e., from MPI_Comm_spawn) and a resilient MPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; implementation. William Gropp and Ewing Lusk have a paper entitled &quot;Fault
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Tolerance in MPI Programs&quot; that outlines how an application might take
</span><br>
<span class="quotelev3">&gt;&gt;&gt; advantage of these features in order to recover from process failure.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However, these techniques strongly depend upon resilient MPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; implementations, and behaviors that, some may argue, are non-standard.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Unfortunately there are not many MPI implementations that are
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sufficiently resilient in the face of process failure to support failure
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in task-farm scenarios. Though Open MPI supports the current MPI 2.1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; standard, it is not as resilient to process failure as it could be.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There are a number of people working on improving the resiliency of Open
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI in the face of network and process failure (including myself). We
</span><br>
<span class="quotelev3">&gt;&gt;&gt; have started to move some of the resiliency work into the Open MPI trunk.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Resiliency in Open MPI has been improving over the past few months, but I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; would not assess it as ready quite yet. Most of the work has focused on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the runtime level (ORTE), and there are still some MPI level (OMPI)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; issues that need to be worked out.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; With all of that being said, I would try some of the techniques presented
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in the Gropp/Lusk paper in your application. Then test it with Open MPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and let us know how it goes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Best,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Josh
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Aug 3, 2009, at 10:30 AM, Durga Choudhury wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is that kind of approach possible within an MPI framework? Perhaps a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; grid approach would be better. More experienced people, speak up,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; please?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (The reason I say that is that I too am interested in the solution of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that kind of problem, where an individual blade of a blade server
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fails and correcting for that failure on the fly is better than taking
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checkpoints and restarting the whole process excluding the failed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; blade.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Durga
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Mon, Aug 3, 2009 at 9:21 AM, jody&lt;jody.xha_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I guess &quot;task-farming&quot; could give you a certain amount of the kind of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fault-tolerance you want.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (i.e. a master process distributes tasks to idle slave processors -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; however, this will only work
</span><br>
<span class="quotelev3">&gt;&gt;&gt; if the slave processes don't need to communicate with each other)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jody
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Mon, Aug 3, 2009 at 1:24 PM, vipin kumar&lt;vipinkumar41_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi all,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks Durga for your reply.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff, once you wrote code for Mandelbrot set to demonstrate fault
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tolerance
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in LAM-MPI. i. e. killing any slave process doesn't
</span><br>
<span class="quotelev3">&gt;&gt;&gt; affect others. Exact behaviour I am looking for in Open MPI. I attempted,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but no luck. Can you please tell how to write such programs in Open MPI.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks in advance.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Thu, Jul 9, 2009 at 8:30 PM, Durga Choudhury &lt;dpchoudh_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Although I have perhaps the least experience on the topic in this
</span><br>
<span class="quotelev3">&gt;&gt;&gt; list, I will take a shot; more experienced people, please correct me:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI standards specify communication mechanism, not fault tolerance at
</span><br>
<span class="quotelev3">&gt;&gt;&gt; any level. You may achieve network tolerance at the IP level by
</span><br>
<span class="quotelev3">&gt;&gt;&gt; implementing 'equal cost multipath' routes (which means two equally
</span><br>
<span class="quotelev3">&gt;&gt;&gt; capable NIC cards connecting to the same destination and modifying the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; kernel routing table to use both cards; the kernel will dynamically
</span><br>
<span class="quotelev3">&gt;&gt;&gt; load balance.). At the MAC level, you can achieve the same effect by
</span><br>
<span class="quotelev3">&gt;&gt;&gt; trunking multiple network cards.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You can achieve process level fault tolerance by a checkpointing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; scheme such as BLCR, which has been tested to work with OpenMPI (and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; other processes as well)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Durga
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Thu, Jul 9, 2009 at 4:57 AM, vipin kumar&lt;vipinkumar41_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi all,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I want to know whether open mpi supports Network and process fault
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tolerance
</span><br>
<span class="quotelev3">&gt;&gt;&gt; or not? If there is any example demonstrating these features that will
</span><br>
<span class="quotelev3">&gt;&gt;&gt; be
</span><br>
<span class="quotelev3">&gt;&gt;&gt; best.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Vipin K.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Research Engineer,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; C-DOTB, India
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
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Vipin K.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Research Engineer,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; C-DOTB, India
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
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Vipin K.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Research Engineer,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; C-DOTB, India
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
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Vipin K.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Research Engineer,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; C-DOTB, India
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Vipin K.
Research Engineer,
C-DOTB, India
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11637.php">Aaron Knister: "[OMPI users] strange undefined references to mpi_sizeofXXX_ errors with pgi"</a>
<li><strong>Previous message:</strong> <a href="11635.php">Ralph Castain: "Re: [OMPI users] fault tolerance in open mpi"</a>
<li><strong>In reply to:</strong> <a href="11635.php">Ralph Castain: "Re: [OMPI users] fault tolerance in open mpi"</a>
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
