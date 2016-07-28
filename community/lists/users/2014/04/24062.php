<?
$subject_val = "Re: [OMPI users] Waitall never returns";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr  4 22:40:07 2014" -->
<!-- isoreceived="20140405024007" -->
<!-- sent="Fri, 4 Apr 2014 22:40:02 -0400" -->
<!-- isosent="20140405024002" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Waitall never returns" -->
<!-- id="C521126A-8A2D-4FD3-AFFC-A68A112022B7_at_icl.utk.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="533F686B.1070004_at_biostat.ucsf.edu" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-04 22:40:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24063.php">Nisha Dhankher -M.Tech(CSE): "Re: [OMPI users] openmpi query"</a>
<li><strong>Previous message:</strong> <a href="24061.php">Ross Boylan: "Re: [OMPI users] Waitall never returns"</a>
<li><strong>In reply to:</strong> <a href="24061.php">Ross Boylan: "Re: [OMPI users] Waitall never returns"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24128.php">Ross Boylan: "Re: [OMPI users] Waitall never returns"</a>
<li><strong>Reply:</strong> <a href="24128.php">Ross Boylan: "Re: [OMPI users] Waitall never returns"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ross,
<br>
<p>I&#146;m not familiar with the R implementation you are using, but bear with me and I will explain how you can all Open MPI about the list of all pending requests on a process. Disclosure: This is Open MPI deep voodoo, an extreme way to debug applications that might save you quite some time.
<br>
<p>The only thing you need is the communicator you posted your requests into, or at least a pointer to it. Then you attach to your process (or processes) with your preferred debugger and call
<br>
&nbsp;&nbsp;mca_pml_ob1_dump(struct ompi_communicator_t* comm, int verbose)
<br>
<p>With gdb this should look like &#147;call mca_pml_ob1_dump(my_comm, 1)&#148;. This will dump human readable information about all the requests pending on a communicator (both sends and receives).
<br>
<p>If you are right, all processes will report NONE, and the bug is somewhere in-between your application and the MPI library. Otherwise, you might have some not-yet-completed requests pending&#133;
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p>On Apr 4, 2014, at 22:20 , Ross Boylan &lt;ross_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On 4/4/2014 6:01 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; It sounds like you don't have a balance between sends and recvs somewhere - i.e., some apps send messages, but the intended recipient isn't issuing a recv and waiting until the message has been received before exiting. If the recipient leaves before the isend completes, then the isend will never complete and the waitall will not return.
</span><br>
<span class="quotelev1">&gt; I'm pretty sure the sends complete because I wait on something that can only be computed after the sends complete, and I know I have that result.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My current theory is that my modifications to Rmpi are not properly tracking all completed messages, resulting in it thinking there are outstanding messages (and passing a positive count to the C-level MPI_Waitall with associated garbagey arrays).  But I haven't isolated the problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ross
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 4, 2014, at 5:20 PM, Ross Boylan &lt;ross_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; During shutdown of my application the processes issue a waitall, since they have done some Isends.  A couple of them never return from that call.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Could this be the result of some of the processes already being shutdown (the processes with the problem were late in the shutdown sequence)?  If so, what is the recommended solution?  A barrier?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The shutdown proceeds in stages, but the processes in question are not told to shutdown until all the messages they have sent have been received.  So there shouldn't be any outstanding messages from them.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; My reading of the manual is that Waitall with a count of 0 should return immediately, not hang. Is that correct?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Running under R with openmpi 1.7.4.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24063.php">Nisha Dhankher -M.Tech(CSE): "Re: [OMPI users] openmpi query"</a>
<li><strong>Previous message:</strong> <a href="24061.php">Ross Boylan: "Re: [OMPI users] Waitall never returns"</a>
<li><strong>In reply to:</strong> <a href="24061.php">Ross Boylan: "Re: [OMPI users] Waitall never returns"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24128.php">Ross Boylan: "Re: [OMPI users] Waitall never returns"</a>
<li><strong>Reply:</strong> <a href="24128.php">Ross Boylan: "Re: [OMPI users] Waitall never returns"</a>
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
