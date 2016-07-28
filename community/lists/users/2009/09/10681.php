<?
$subject_val = "Re: [OMPI users] fault tolerance in open mpi";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 18 02:56:44 2009" -->
<!-- isoreceived="20090918065644" -->
<!-- sent="Fri, 18 Sep 2009 12:26:39 +0530" -->
<!-- isosent="20090918065639" -->
<!-- name="vipin kumar" -->
<!-- email="vipinkumar41_at_[hidden]" -->
<!-- subject="Re: [OMPI users] fault tolerance in open mpi" -->
<!-- id="fa4af8200909172356g1a4b07d6gd16de0e64bc1d92_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="53C1EFC1-5CD0-4C21-8160-8C886F060D81_at_open-mpi.org" -->
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
<strong>Date:</strong> 2009-09-18 02:56:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10682.php">Richard Treumann: "Re: [OMPI users] Multi-threading  with OpenMPI ?"</a>
<li><strong>Previous message:</strong> <a href="10680.php">neeraj_at_[hidden]: "Re: [OMPI users] Multi-threading  with OpenMPI ?"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/08/10192.php">Josh Hursey: "Re: [OMPI users] fault tolerance in open mpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10740.php">Josh Hursey: "Re: [OMPI users] fault tolerance in open mpi"</a>
<li><strong>Reply:</strong> <a href="10740.php">Josh Hursey: "Re: [OMPI users] fault tolerance in open mpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Josh,
<br>
<p>It is good to hear from you that work is in progress towards resiliency of
<br>
Open-MPI. I was and I am waiting for this capability in Open-MPI. I have
<br>
almost finished my development work and waiting for this to happen so that I
<br>
can test my programs. It will be good if you can tell how long it will take
<br>
to make Open-MPI a resilient impementation. Here by resiliency I mean
<br>
abnormal termination or intentionally killing a process should not cause
<br>
any(parent or sibling) process to be terminated, given that processes are
<br>
connected.
<br>
<p>thanks.
<br>
<p>Regards,
<br>
<p>On Mon, Aug 3, 2009 at 8:37 PM, Josh Hursey &lt;jjhursey_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Task-farm or manager/worker recovery models typically depend on
</span><br>
<span class="quotelev1">&gt; intercommunicators (i.e., from MPI_Comm_spawn) and a resilient MPI
</span><br>
<span class="quotelev1">&gt; implementation. William Gropp and Ewing Lusk have a paper entitled &quot;Fault
</span><br>
<span class="quotelev1">&gt; Tolerance in MPI Programs&quot; that outlines how an application might take
</span><br>
<span class="quotelev1">&gt; advantage of these features in order to recover from process failure.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, these techniques strongly depend upon resilient MPI
</span><br>
<span class="quotelev1">&gt; implementations, and behaviors that, some may argue, are non-standard.
</span><br>
<span class="quotelev1">&gt; Unfortunately there are not many MPI implementations that are sufficiently
</span><br>
<span class="quotelev1">&gt; resilient in the face of process failure to support failure in task-farm
</span><br>
<span class="quotelev1">&gt; scenarios. Though Open MPI supports the current MPI 2.1 standard, it is not
</span><br>
<span class="quotelev1">&gt; as resilient to process failure as it could be.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There are a number of people working on improving the resiliency of Open
</span><br>
<span class="quotelev1">&gt; MPI in the face of network and process failure (including myself). We have
</span><br>
<span class="quotelev1">&gt; started to move some of the resiliency work into the Open MPI trunk.
</span><br>
<span class="quotelev1">&gt; Resiliency in Open MPI has been improving over the past few months, but I
</span><br>
<span class="quotelev1">&gt; would not assess it as ready quite yet. Most of the work has focused on the
</span><br>
<span class="quotelev1">&gt; runtime level (ORTE), and there are still some MPI level (OMPI) issues that
</span><br>
<span class="quotelev1">&gt; need to be worked out.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; With all of that being said, I would try some of the techniques presented
</span><br>
<span class="quotelev1">&gt; in the Gropp/Lusk paper in your application. Then test it with Open MPI and
</span><br>
<span class="quotelev1">&gt; let us know how it goes.
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
<span class="quotelev1">&gt;  Is that kind of approach possible within an MPI framework? Perhaps a
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
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi all,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks Durga for your reply.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Jeff, once you wrote code for Mandelbrot set to demonstrate fault
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; tolerance
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; in LAM-MPI. i. e. killing any slave process doesn't
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; affect others. Exact behaviour I am looking for in Open MPI. I
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; attempted,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; but no luck. Can you please tell how to write such programs in Open MPI.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks in advance.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Thu, Jul 9, 2009 at 8:30 PM, Durga Choudhury &lt;dpchoudh_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Although I have perhaps the least experience on the topic in this
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; list, I will take a shot; more experienced people, please correct me:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI standards specify communication mechanism, not fault tolerance at
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; any level. You may achieve network tolerance at the IP level by
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; implementing 'equal cost multipath' routes (which means two equally
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; capable NIC cards connecting to the same destination and modifying the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; kernel routing table to use both cards; the kernel will dynamically
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; load balance.). At the MAC level, you can achieve the same effect by
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; trunking multiple network cards.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; You can achieve process level fault tolerance by a checkpointing
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; scheme such as BLCR, which has been tested to work with OpenMPI (and
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; other processes as well)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Durga
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Thu, Jul 9, 2009 at 4:57 AM, vipin kumar&lt;vipinkumar41_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Hi all,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I want to know whether open mpi supports Network and process fault
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; tolerance
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; or not? If there is any example demonstrating these features that will
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; be
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; best.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Vipin K.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Research Engineer,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; C-DOTB, India
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Vipin K.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Research Engineer,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; C-DOTB, India
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  _______________________________________________
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10681/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10682.php">Richard Treumann: "Re: [OMPI users] Multi-threading  with OpenMPI ?"</a>
<li><strong>Previous message:</strong> <a href="10680.php">neeraj_at_[hidden]: "Re: [OMPI users] Multi-threading  with OpenMPI ?"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/08/10192.php">Josh Hursey: "Re: [OMPI users] fault tolerance in open mpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10740.php">Josh Hursey: "Re: [OMPI users] fault tolerance in open mpi"</a>
<li><strong>Reply:</strong> <a href="10740.php">Josh Hursey: "Re: [OMPI users] fault tolerance in open mpi"</a>
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
