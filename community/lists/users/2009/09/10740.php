<?
$subject_val = "Re: [OMPI users] fault tolerance in open mpi";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 23 09:11:32 2009" -->
<!-- isoreceived="20090923131132" -->
<!-- sent="Wed, 23 Sep 2009 09:11:27 -0400" -->
<!-- isosent="20090923131127" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] fault tolerance in open mpi" -->
<!-- id="5D6BA8E5-9285-40E7-8A49-F5C75B204A94_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="fa4af8200909172356g1a4b07d6gd16de0e64bc1d92_at_mail.gmail.com" -->
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
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-23 09:11:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10741.php">Josh Hursey: "Re: [OMPI users] error in ompi-checkpoint"</a>
<li><strong>Previous message:</strong> <a href="10739.php">Josh Hursey: "Re: [OMPI users] Changing location where checkpoints are saved"</a>
<li><strong>In reply to:</strong> <a href="10681.php">vipin kumar: "Re: [OMPI users] fault tolerance in open mpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/12/11618.php">vipin kumar: "Re: [OMPI users] fault tolerance in open mpi"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/12/11618.php">vipin kumar: "Re: [OMPI users] fault tolerance in open mpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Unfortunately I cannot provide a precise time frame for availability  
<br>
at this point, but we are targeting the v1.5 release series. There is  
<br>
a handful of core developers working on this issue at the moment.  
<br>
Pieces of this  work have already made it into the Open MPI  
<br>
development trunk. If you want to play around with what is available  
<br>
try turning on the resilient mapper:
<br>
&nbsp;&nbsp;&nbsp;-mca rmaps resilient
<br>
<p>We will be sure to email the list once this work becomes more stable  
<br>
and available.
<br>
<p>-- Josh
<br>
<p>On Sep 18, 2009, at 2:56 AM, vipin kumar wrote:
<br>
<p><span class="quotelev1">&gt; Hi Josh,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It is good to hear from you that work is in progress towards  
</span><br>
<span class="quotelev1">&gt; resiliency of Open-MPI. I was and I am waiting for this capability  
</span><br>
<span class="quotelev1">&gt; in Open-MPI. I have almost finished my development work and waiting  
</span><br>
<span class="quotelev1">&gt; for this to happen so that I can test my programs. It will be good  
</span><br>
<span class="quotelev1">&gt; if you can tell how long it will take to make Open-MPI a resilient  
</span><br>
<span class="quotelev1">&gt; impementation. Here by resiliency I mean abnormal termination or  
</span><br>
<span class="quotelev1">&gt; intentionally killing a process should not cause any(parent or  
</span><br>
<span class="quotelev1">&gt; sibling) process to be terminated, given that processes are connected.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thanks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Aug 3, 2009 at 8:37 PM, Josh Hursey &lt;jjhursey_at_[hidden]&gt;  
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Task-farm or manager/worker recovery models typically depend on  
</span><br>
<span class="quotelev1">&gt; intercommunicators (i.e., from MPI_Comm_spawn) and a resilient MPI  
</span><br>
<span class="quotelev1">&gt; implementation. William Gropp and Ewing Lusk have a paper entitled  
</span><br>
<span class="quotelev1">&gt; &quot;Fault Tolerance in MPI Programs&quot; that outlines how an application  
</span><br>
<span class="quotelev1">&gt; might take advantage of these features in order to recover from  
</span><br>
<span class="quotelev1">&gt; process failure.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, these techniques strongly depend upon resilient MPI  
</span><br>
<span class="quotelev1">&gt; implementations, and behaviors that, some may argue, are non- 
</span><br>
<span class="quotelev1">&gt; standard. Unfortunately there are not many MPI implementations that  
</span><br>
<span class="quotelev1">&gt; are sufficiently resilient in the face of process failure to support  
</span><br>
<span class="quotelev1">&gt; failure in task-farm scenarios. Though Open MPI supports the current  
</span><br>
<span class="quotelev1">&gt; MPI 2.1 standard, it is not as resilient to process failure as it  
</span><br>
<span class="quotelev1">&gt; could be.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There are a number of people working on improving the resiliency of  
</span><br>
<span class="quotelev1">&gt; Open MPI in the face of network and process failure (including  
</span><br>
<span class="quotelev1">&gt; myself). We have started to move some of the resiliency work into  
</span><br>
<span class="quotelev1">&gt; the Open MPI trunk. Resiliency in Open MPI has been improving over  
</span><br>
<span class="quotelev1">&gt; the past few months, but I would not assess it as ready quite yet.  
</span><br>
<span class="quotelev1">&gt; Most of the work has focused on the runtime level (ORTE), and there  
</span><br>
<span class="quotelev1">&gt; are still some MPI level (OMPI) issues that need to be worked out.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; With all of that being said, I would try some of the techniques  
</span><br>
<span class="quotelev1">&gt; presented in the Gropp/Lusk paper in your application. Then test it  
</span><br>
<span class="quotelev1">&gt; with Open MPI and let us know how it goes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best,
</span><br>
<span class="quotelev1">&gt; Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 3, 2009, at 10:30 AM, Durga Choudhury wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is that kind of approach possible within an MPI framework? Perhaps a
</span><br>
<span class="quotelev1">&gt; grid approach would be better. More experienced people, speak up,
</span><br>
<span class="quotelev1">&gt; please?
</span><br>
<span class="quotelev1">&gt; (The reason I say that is that I too am interested in the solution of
</span><br>
<span class="quotelev1">&gt; that kind of problem, where an individual blade of a blade server
</span><br>
<span class="quotelev1">&gt; fails and correcting for that failure on the fly is better than taking
</span><br>
<span class="quotelev1">&gt; checkpoints and restarting the whole process excluding the failed
</span><br>
<span class="quotelev1">&gt; blade.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Durga
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Aug 3, 2009 at 9:21 AM, jody&lt;jody.xha_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I guess &quot;task-farming&quot; could give you a certain amount of the kind of
</span><br>
<span class="quotelev1">&gt; fault-tolerance you want.
</span><br>
<span class="quotelev1">&gt; (i.e. a master process distributes tasks to idle slave processors -
</span><br>
<span class="quotelev1">&gt; however, this will only work
</span><br>
<span class="quotelev1">&gt; if the slave processes don't need to communicate with each other)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jody
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Aug 3, 2009 at 1:24 PM, vipin kumar&lt;vipinkumar41_at_[hidden]&gt;  
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks Durga for your reply.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff, once you wrote code for Mandelbrot set to demonstrate fault  
</span><br>
<span class="quotelev1">&gt; tolerance
</span><br>
<span class="quotelev1">&gt; in LAM-MPI. i. e. killing any slave process doesn't
</span><br>
<span class="quotelev1">&gt; affect others. Exact behaviour I am looking for in Open MPI. I  
</span><br>
<span class="quotelev1">&gt; attempted,
</span><br>
<span class="quotelev1">&gt; but no luck. Can you please tell how to write such programs in Open  
</span><br>
<span class="quotelev1">&gt; MPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; On Thu, Jul 9, 2009 at 8:30 PM, Durga Choudhury &lt;dpchoudh_at_[hidden]&gt;  
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Although I have perhaps the least experience on the topic in this
</span><br>
<span class="quotelev1">&gt; list, I will take a shot; more experienced people, please correct me:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI standards specify communication mechanism, not fault tolerance at
</span><br>
<span class="quotelev1">&gt; any level. You may achieve network tolerance at the IP level by
</span><br>
<span class="quotelev1">&gt; implementing 'equal cost multipath' routes (which means two equally
</span><br>
<span class="quotelev1">&gt; capable NIC cards connecting to the same destination and modifying the
</span><br>
<span class="quotelev1">&gt; kernel routing table to use both cards; the kernel will dynamically
</span><br>
<span class="quotelev1">&gt; load balance.). At the MAC level, you can achieve the same effect by
</span><br>
<span class="quotelev1">&gt; trunking multiple network cards.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You can achieve process level fault tolerance by a checkpointing
</span><br>
<span class="quotelev1">&gt; scheme such as BLCR, which has been tested to work with OpenMPI (and
</span><br>
<span class="quotelev1">&gt; other processes as well)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Durga
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Jul 9, 2009 at 4:57 AM, vipin kumar&lt;vipinkumar41_at_[hidden]&gt;  
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I want to know whether open mpi supports Network and process fault
</span><br>
<span class="quotelev1">&gt; tolerance
</span><br>
<span class="quotelev1">&gt; or not? If there is any example demonstrating these features that will
</span><br>
<span class="quotelev1">&gt; be
</span><br>
<span class="quotelev1">&gt; best.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Vipin K.
</span><br>
<span class="quotelev1">&gt; Research Engineer,
</span><br>
<span class="quotelev1">&gt; C-DOTB, India
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Vipin K.
</span><br>
<span class="quotelev1">&gt; Research Engineer,
</span><br>
<span class="quotelev1">&gt; C-DOTB, India
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Vipin K.
</span><br>
<span class="quotelev1">&gt; Research Engineer,
</span><br>
<span class="quotelev1">&gt; C-DOTB, India
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10741.php">Josh Hursey: "Re: [OMPI users] error in ompi-checkpoint"</a>
<li><strong>Previous message:</strong> <a href="10739.php">Josh Hursey: "Re: [OMPI users] Changing location where checkpoints are saved"</a>
<li><strong>In reply to:</strong> <a href="10681.php">vipin kumar: "Re: [OMPI users] fault tolerance in open mpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/12/11618.php">vipin kumar: "Re: [OMPI users] fault tolerance in open mpi"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/12/11618.php">vipin kumar: "Re: [OMPI users] fault tolerance in open mpi"</a>
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
