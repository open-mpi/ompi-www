<?
$subject_val = "Re: [OMPI users] Waitall never returns";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  9 20:26:52 2014" -->
<!-- isoreceived="20140410002652" -->
<!-- sent="Wed, 09 Apr 2014 17:26:49 -0700" -->
<!-- isosent="20140410002649" -->
<!-- name="Ross Boylan" -->
<!-- email="ross_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Waitall never returns" -->
<!-- id="1397089609.15810.97.camel_at_localhost" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="C521126A-8A2D-4FD3-AFFC-A68A112022B7_at_icl.utk.edu" -->
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
<strong>Date:</strong> 2014-04-09 20:26:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24129.php">Filippo Spiga: "Re: [OMPI users] OpenMPI 1.8.0 + PGI 13.6 = undeclared variable __LDBL_MANT_DIG__"</a>
<li><strong>Previous message:</strong> <a href="24127.php">Richard Shaw: "Re: [OMPI users] Extent of Distributed Array Type?"</a>
<li><strong>In reply to:</strong> <a href="24062.php">George Bosilca: "Re: [OMPI users] Waitall never returns"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24142.php">Ross Boylan: "Re: [OMPI users] Waitall never returns"</a>
<li><strong>Reply:</strong> <a href="24142.php">Ross Boylan: "Re: [OMPI users] Waitall never returns"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, 2014-04-04 at 22:40 -0400, George Bosilca wrote:
<br>
<span class="quotelev1">&gt; Ross,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I&#226;&#128;&#153;m not familiar with the R implementation you are using, but bear with me and I will explain how you can all Open MPI about the list of all pending requests on a process. Disclosure: This is Open MPI deep voodoo, an extreme way to debug applications that might save you quite some time.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The only thing you need is the communicator you posted your requests into, or at least a pointer to it. Then you attach to your process (or processes) with your preferred debugger and call
</span><br>
<span class="quotelev1">&gt;   mca_pml_ob1_dump(struct ompi_communicator_t* comm, int verbose)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; With gdb this should look like &#226;&#128;&#156;call mca_pml_ob1_dump(my_comm, 1)&#226;&#128;&#157;. This will dump human readable information about all the requests pending on a communicator (both sends and receives).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
Thank you so much for the tip.  After inserting a barrier failed to help
<br>
I decided to try this.  After much messing around (details below):
<br>
BTL SM 0x7f615dea9660 endpoint 0x3c15d90 [smp_rank 5] [peer_rank 0]
<br>
BTL SM 0x7f615dea9660 endpoint 0x3b729e0 [smp_rank 5] [peer_rank 1]
<br>
BTL SM 0x7f615dea9660 endpoint 0x3b72ad0 [smp_rank 5] [peer_rank 2]
<br>
BTL SM 0x7f615dea9660 endpoint 0x3c06e60 [smp_rank 5] [peer_rank 3]
<br>
BTL SM 0x7f615dea9660 endpoint 0x3c06f50 [smp_rank 5] [peer_rank 4]
<br>
[n2:10664] [Rank 0]
<br>
[n2:10664] [Rank 1]
<br>
[n2:10664] [Rank 2]
<br>
[n2:10664] [Rank 3]
<br>
[n2:10664] [Rank 4]
<br>
[n2:10664] [Rank 5]
<br>
[n2:10664] [Rank 6]
<br>
[n2:10664] [Rank 7]
<br>
[n2:10664] [Rank 8]
<br>
[n2:10664] [Rank 9]
<br>
[n2:10664] [Rank 10]
<br>
[n2:10664] [Rank 11]
<br>
[n2:10664] [Rank 12]
<br>
[n2:10664] [Rank 13]
<br>
<p>Not entirely human readable if the human is me!
<br>
Does smp_rank (and peer_rank) = what I would get from MPI_Comm_rank?  I
<br>
hope so, because I was aiming for rank 5.
<br>
How do I know if I'm sending or receiving?  They should all be sends.
<br>
<p>What are all the lines like
<br>
[n2:10664] [Rank 7]?
<br>
<p>What this seems to show is very odd.
<br>
First, my code thinks there are 3 outstanding Isends.  Does this report 
<br>
include requests that have become inactive (because complete)?
<br>
<p>Second, during normal operations rank 5 does not talk to ranks 1-4.
<br>
I did put an MPI_Barrier in just before shutdown, but the trace
<br>
information indicates rank 5 never gets to that step.
<br>
<p>To provide fuller context, and maybe some clues to others who attempt
<br>
this, I first tried this with my non-debug enabled libraries.  I guessed
<br>
that the ranks were in the same order as the process numbers and invoked
<br>
gdb on my R executable giving the process number (once the system
<br>
reached its stuck state).  
<br>
<p>Accessing the communicator was tricky, via the comm variable defined in
<br>
the Rmpi library.  So overall, the executable for R starts and loads the
<br>
Rmpi library.  The latter in turn loads and references the MPI library.
<br>
The communicators are defined in the Rmpi library with MPI_Comm *comm,
<br>
and then one I need is comm[1].
<br>
<p>When I tried to reference it I got an error that there was no debugging
<br>
info.  I reconfigured MPI with --enable-debug and rebuilt it  (make
<br>
clean all install).  Then I launched everything again; I did not rebuild
<br>
Rmpi against the debug libraries, though I installed the debug libraries
<br>
in the old location for the regular ones.
<br>
<p>I still had problems:
<br>
(gdb) p comm[1]
<br>
cannot subscript something of type `&lt;data variable, no debug info&gt;'
<br>
The error message I got before making MPI with debug was a bit different
<br>
and stronger,
<br>
<p>I realized that comm was a symbol in Rmpi which I had not built with
<br>
debug symbols.  Since MPI_Comm should now be understood by the debugger
<br>
I tried and explicit cast, which worked:
<br>
call mca_pml_ob1_dump(((MPI_Comm *) comm)[1], 1)
<br>
<p>So I'm not entirely sure if the build of a debug version of MPI was
<br>
necessary.
<br>
<p>Ross
<br>
<span class="quotelev1">&gt; If you are right, all processes will report NONE, and the bug is somewhere in-between your application and the MPI library. Otherwise, you might have some not-yet-completed requests pending&#226;&#128;&#166;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   George.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Apr 4, 2014, at 22:20 , Ross Boylan &lt;ross_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On 4/4/2014 6:01 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; It sounds like you don't have a balance between sends and recvs somewhere - i.e., some apps send messages, but the intended recipient isn't issuing a recv and waiting until the message has been received before exiting. If the recipient leaves before the isend completes, then the isend will never complete and the waitall will not return.
</span><br>
<span class="quotelev2">&gt; &gt; I'm pretty sure the sends complete because I wait on something that can only be computed after the sends complete, and I know I have that result.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; My current theory is that my modifications to Rmpi are not properly tracking all completed messages, resulting in it thinking there are outstanding messages (and passing a positive count to the C-level MPI_Waitall with associated garbagey arrays).  But I haven't isolated the problem.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Ross
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Apr 4, 2014, at 5:20 PM, Ross Boylan &lt;ross_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; During shutdown of my application the processes issue a waitall, since they have done some Isends.  A couple of them never return from that call.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Could this be the result of some of the processes already being shutdown (the processes with the problem were late in the shutdown sequence)?  If so, what is the recommended solution?  A barrier?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; The shutdown proceeds in stages, but the processes in question are not told to shutdown until all the messages they have sent have been received.  So there shouldn't be any outstanding messages from them.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; My reading of the manual is that Waitall with a count of 0 should return immediately, not hang. Is that correct?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Running under R with openmpi 1.7.4.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="24129.php">Filippo Spiga: "Re: [OMPI users] OpenMPI 1.8.0 + PGI 13.6 = undeclared variable __LDBL_MANT_DIG__"</a>
<li><strong>Previous message:</strong> <a href="24127.php">Richard Shaw: "Re: [OMPI users] Extent of Distributed Array Type?"</a>
<li><strong>In reply to:</strong> <a href="24062.php">George Bosilca: "Re: [OMPI users] Waitall never returns"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24142.php">Ross Boylan: "Re: [OMPI users] Waitall never returns"</a>
<li><strong>Reply:</strong> <a href="24142.php">Ross Boylan: "Re: [OMPI users] Waitall never returns"</a>
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
