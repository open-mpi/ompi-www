<?
$subject_val = "Re: [OMPI users] Waitall never returns";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr  4 22:20:29 2014" -->
<!-- isoreceived="20140405022029" -->
<!-- sent="Fri, 04 Apr 2014 19:20:27 -0700" -->
<!-- isosent="20140405022027" -->
<!-- name="Ross Boylan" -->
<!-- email="ross_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Waitall never returns" -->
<!-- id="533F686B.1070004_at_biostat.ucsf.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="7B599B4E-9B2A-4287-988A-08F7E1D3FB38_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Waitall never returns<br>
<strong>From:</strong> Ross Boylan (<em>ross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-04 22:20:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24062.php">George Bosilca: "Re: [OMPI users] Waitall never returns"</a>
<li><strong>Previous message:</strong> <a href="24060.php">Ralph Castain: "Re: [OMPI users] Waitall never returns"</a>
<li><strong>In reply to:</strong> <a href="24060.php">Ralph Castain: "Re: [OMPI users] Waitall never returns"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24062.php">George Bosilca: "Re: [OMPI users] Waitall never returns"</a>
<li><strong>Reply:</strong> <a href="24062.php">George Bosilca: "Re: [OMPI users] Waitall never returns"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 4/4/2014 6:01 PM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; It sounds like you don't have a balance between sends and recvs somewhere - i.e., some apps send messages, but the intended recipient isn't issuing a recv and waiting until the message has been received before exiting. If the recipient leaves before the isend completes, then the isend will never complete and the waitall will not return.
</span><br>
I'm pretty sure the sends complete because I wait on something that can 
<br>
only be computed after the sends complete, and I know I have that result.
<br>
<p>My current theory is that my modifications to Rmpi are not properly 
<br>
tracking all completed messages, resulting in it thinking there are 
<br>
outstanding messages (and passing a positive count to the C-level 
<br>
MPI_Waitall with associated garbagey arrays).  But I haven't isolated 
<br>
the problem.
<br>
<p>Ross
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 4, 2014, at 5:20 PM, Ross Boylan &lt;ross_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; During shutdown of my application the processes issue a waitall, since they have done some Isends.  A couple of them never return from that call.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Could this be the result of some of the processes already being shutdown (the processes with the problem were late in the shutdown sequence)?  If so, what is the recommended solution?  A barrier?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The shutdown proceeds in stages, but the processes in question are not told to shutdown until all the messages they have sent have been received.  So there shouldn't be any outstanding messages from them.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My reading of the manual is that Waitall with a count of 0 should return immediately, not hang.  Is that correct?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Running under R with openmpi 1.7.4.
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="24062.php">George Bosilca: "Re: [OMPI users] Waitall never returns"</a>
<li><strong>Previous message:</strong> <a href="24060.php">Ralph Castain: "Re: [OMPI users] Waitall never returns"</a>
<li><strong>In reply to:</strong> <a href="24060.php">Ralph Castain: "Re: [OMPI users] Waitall never returns"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24062.php">George Bosilca: "Re: [OMPI users] Waitall never returns"</a>
<li><strong>Reply:</strong> <a href="24062.php">George Bosilca: "Re: [OMPI users] Waitall never returns"</a>
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
