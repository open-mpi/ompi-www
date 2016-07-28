<?
$subject_val = "Re: [OMPI users] fault tolerance in open mpi";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug  3 11:08:01 2009" -->
<!-- isoreceived="20090803150801" -->
<!-- sent="Mon, 03 Aug 2009 11:07:53 -0400" -->
<!-- isosent="20090803150753" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] fault tolerance in open mpi" -->
<!-- id="53C1EFC1-5CD0-4C21-8160-8C886F060D81_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="f869b68c0908030730j271abf8ci3befd892918a17eb_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2009-08-03 11:07:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10193.php">David Doria: "Re: [OMPI users] Two remote machines - asymmetric behavior"</a>
<li><strong>Previous message:</strong> <a href="10191.php">Durga Choudhury: "Re: [OMPI users] fault tolerance in open mpi"</a>
<li><strong>In reply to:</strong> <a href="10191.php">Durga Choudhury: "Re: [OMPI users] fault tolerance in open mpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/09/10681.php">vipin kumar: "Re: [OMPI users] fault tolerance in open mpi"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/09/10681.php">vipin kumar: "Re: [OMPI users] fault tolerance in open mpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Task-farm or manager/worker recovery models typically depend on  
<br>
intercommunicators (i.e., from MPI_Comm_spawn) and a resilient MPI  
<br>
implementation. William Gropp and Ewing Lusk have a paper entitled  
<br>
&quot;Fault Tolerance in MPI Programs&quot; that outlines how an application  
<br>
might take advantage of these features in order to recover from  
<br>
process failure.
<br>
<p>However, these techniques strongly depend upon resilient MPI  
<br>
implementations, and behaviors that, some may argue, are non-standard.  
<br>
Unfortunately there are not many MPI implementations that are  
<br>
sufficiently resilient in the face of process failure to support  
<br>
failure in task-farm scenarios. Though Open MPI supports the current  
<br>
MPI 2.1 standard, it is not as resilient to process failure as it  
<br>
could be.
<br>
<p>There are a number of people working on improving the resiliency of  
<br>
Open MPI in the face of network and process failure (including  
<br>
myself). We have started to move some of the resiliency work into the  
<br>
Open MPI trunk. Resiliency in Open MPI has been improving over the  
<br>
past few months, but I would not assess it as ready quite yet. Most of  
<br>
the work has focused on the runtime level (ORTE), and there are still  
<br>
some MPI level (OMPI) issues that need to be worked out.
<br>
<p>With all of that being said, I would try some of the techniques  
<br>
presented in the Gropp/Lusk paper in your application. Then test it  
<br>
with Open MPI and let us know how it goes.
<br>
<p>Best,
<br>
Josh
<br>
<p>On Aug 3, 2009, at 10:30 AM, Durga Choudhury wrote:
<br>
<p><span class="quotelev1">&gt; Is that kind of approach possible within an MPI framework? Perhaps a
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
<span class="quotelev3">&gt;&gt;&gt; affect others. Exact behaviour I am looking for in Open MPI. I  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; attempted,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but no luck. Can you please tell how to write such programs in  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Open MPI.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks in advance.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Thu, Jul 9, 2009 at 8:30 PM, Durga Choudhury  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;dpchoudh_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Although I have perhaps the least experience on the topic in this
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; list, I will take a shot; more experienced people, please correct  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; me:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI standards specify communication mechanism, not fault  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; tolerance at
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; any level. You may achieve network tolerance at the IP level by
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; implementing 'equal cost multipath' routes (which means two equally
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; capable NIC cards connecting to the same destination and  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; modifying the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; kernel routing table to use both cards; the kernel will dynamically
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; load balance.). At the MAC level, you can achieve the same effect  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; by
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; trunking multiple network cards.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; You can achieve process level fault tolerance by a checkpointing
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; scheme such as BLCR, which has been tested to work with OpenMPI  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; other processes as well)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Durga
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Thu, Jul 9, 2009 at 4:57 AM, vipin  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; kumar&lt;vipinkumar41_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi all,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I want to know whether open mpi supports Network and process fault
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; tolerance
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; or not? If there is any example demonstrating these features  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; that will
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; be
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; best.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Vipin K.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Research Engineer,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; C-DOTB, India
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="10193.php">David Doria: "Re: [OMPI users] Two remote machines - asymmetric behavior"</a>
<li><strong>Previous message:</strong> <a href="10191.php">Durga Choudhury: "Re: [OMPI users] fault tolerance in open mpi"</a>
<li><strong>In reply to:</strong> <a href="10191.php">Durga Choudhury: "Re: [OMPI users] fault tolerance in open mpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/09/10681.php">vipin kumar: "Re: [OMPI users] fault tolerance in open mpi"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/09/10681.php">vipin kumar: "Re: [OMPI users] fault tolerance in open mpi"</a>
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
