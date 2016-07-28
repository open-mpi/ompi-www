<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Mar 22 19:26:26 2007" -->
<!-- isoreceived="20070322232626" -->
<!-- sent="Thu, 22 Mar 2007 19:26:15 -0400" -->
<!-- isosent="20070322232615" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fwd: [Allinea #6458] message queues" -->
<!-- id="9AEEA594-792F-4697-8A2B-DB0514416AFD_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="9D3EA1B8-8D49-4B3F-B6F9-855DF65AEB19_at_umich.edu" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-22 19:26:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2893.php">Tim Prins: "Re: [OMPI users] hostfile syntax"</a>
<li><strong>Previous message:</strong> <a href="2891.php">George Bosilca: "Re: [OMPI users] implementation of a message logging protocol"</a>
<li><strong>In reply to:</strong> <a href="2890.php">Brock Palen: "[OMPI users] Fwd: [Allinea #6458] message queues"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Open MPI have support for one parallel debugger: Total View. I don't  
<br>
know how DDT interact with the MPI library in order to get access to  
<br>
the message queues, but we provide a library which allow tv to get  
<br>
access to the internal representation of the message queues in Open  
<br>
MPI. The access to the message queue in complete, you can see all  
<br>
pending sends, receives as well as unexpected messages.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Mar 22, 2007, at 7:10 PM, Brock Palen wrote:
<br>
<p><span class="quotelev1">&gt; We use OpenMPI as our default MPI lib on our clusters.  We are  
</span><br>
<span class="quotelev1">&gt; starting to do some work with parallel debuggers (ddt to be exact)   
</span><br>
<span class="quotelev1">&gt; and was wondering what the time line for message queue debugging  
</span><br>
<span class="quotelev1">&gt; was.  Just curious!  Thanks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brock Palen
</span><br>
<span class="quotelev1">&gt; Center for Advanced Computing
</span><br>
<span class="quotelev1">&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev1">&gt; (734)936-1985
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Begin forwarded message:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; From: &quot;David Lecomber&quot; &lt;support_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Date: March 22, 2007 6:44:35 PM GMT-04:00
</span><br>
<span class="quotelev2">&gt;&gt; To: brockp_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Cc: jacques_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [Allinea #6458] message queues
</span><br>
<span class="quotelev2">&gt;&gt; Reply-To: support_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Brock
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This question has just become &quot;frequently asked&quot; -- no-one asked  
</span><br>
<span class="quotelev2">&gt;&gt; in all
</span><br>
<span class="quotelev2">&gt;&gt; of the last 12 months, and I think you're the third person this  
</span><br>
<span class="quotelev2">&gt;&gt; month,
</span><br>
<span class="quotelev2">&gt;&gt; the second today!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI does not (yet?) support message queue debugging  - this means
</span><br>
<span class="quotelev2">&gt;&gt; the interface just isn't there for a debugger to get the information,
</span><br>
<span class="quotelev2">&gt;&gt; sadly.  Open-MPI's own FAQ does mention this lack of support, but I'm
</span><br>
<span class="quotelev2">&gt;&gt; not sure of an ETA or whether they are actively developing it.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Best wishes
</span><br>
<span class="quotelev2">&gt;&gt; David
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, 2007-03-22 at 20:08 +0000, Brock Palen wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thu Mar 22 20:08:41 2007: Request 6458 was acted upon.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Transaction: Ticket created by brockp_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        Queue: support
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Subject: message queues
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        Owner: Nobody
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Requestors: brockp_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       Status: new
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Ticket &lt;URL: <a href="http://swtracker//Ticket/Display.html?id=6458">http://swtracker//Ticket/Display.html?id=6458</a> &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; According the the manual if you get the message &quot;unable to load
</span><br>
<span class="quotelev3">&gt;&gt;&gt; message queue library&quot;  to look at the FAQ, but i can not find a faq
</span><br>
<span class="quotelev3">&gt;&gt;&gt; anyplace.  We are new users and our mpi lib is openmpi-1.0.2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brock Palen
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Center for Advanced Computing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (734)936-1985
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; David Lecomber
</span><br>
<span class="quotelev2">&gt;&gt; CTO Allinea Software
</span><br>
<span class="quotelev2">&gt;&gt; Tel: +44 1926 623231
</span><br>
<span class="quotelev2">&gt;&gt; Fax: +44 1926 623232
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;signature.asc&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2893.php">Tim Prins: "Re: [OMPI users] hostfile syntax"</a>
<li><strong>Previous message:</strong> <a href="2891.php">George Bosilca: "Re: [OMPI users] implementation of a message logging protocol"</a>
<li><strong>In reply to:</strong> <a href="2890.php">Brock Palen: "[OMPI users] Fwd: [Allinea #6458] message queues"</a>
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
