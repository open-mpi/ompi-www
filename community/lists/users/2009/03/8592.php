<?
$subject_val = "Re: [OMPI users] MPI_Test without deallocation";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 25 19:42:07 2009" -->
<!-- isoreceived="20090325234207" -->
<!-- sent="Wed, 25 Mar 2009 17:41:12 -0600" -->
<!-- isosent="20090325234112" -->
<!-- name="Justin" -->
<!-- email="luitjens_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Test without deallocation" -->
<!-- id="49CAC118.6030905_at_cs.utah.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="49CABF6E.1070807_at_bcgsc.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Test without deallocation<br>
<strong>From:</strong> Justin (<em>luitjens_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-25 19:41:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8593.php">Richard Treumann: "Re: [OMPI users] MPI_Test without deallocation"</a>
<li><strong>Previous message:</strong> <a href="8591.php">Shaun Jackman: "Re: [OMPI users] MPI_Test without deallocation"</a>
<li><strong>In reply to:</strong> <a href="8591.php">Shaun Jackman: "Re: [OMPI users] MPI_Test without deallocation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8593.php">Richard Treumann: "Re: [OMPI users] MPI_Test without deallocation"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There are two version of probe (MPI_Probe and MPI_IProbe) but I can't 
<br>
tell you off hand their details. I know when looking at them in the past 
<br>
the basic understanding that I took away was the MPI_Probe is like 
<br>
MPI_Test but it doesn't actually receive or deallocate the message.
<br>
<p><span class="quotelev1">&gt;From 
</span><br>
<a href="http://www.mcs.anl.gov/research/projects/mpi/mpi-standard/mpi-report-1.1/node50.htm">http://www.mcs.anl.gov/research/projects/mpi/mpi-standard/mpi-report-1.1/node50.htm</a>
<br>
<p>/The MPI_PROBE and MPI_IPROBE operations allow incoming messages to be 
<br>
checked for, without actually receiving them. The user can then decide 
<br>
how to receive them, based on the information returned by the probe 
<br>
(basically, the information returned by status). In particular, the user 
<br>
may allocate memory for the receive buffer, according to the length of 
<br>
the probed message./
<br>
<p>Shaun Jackman wrote:
<br>
<span class="quotelev1">&gt; If an MPI_Irecv has already been posted, and a single message is sent 
</span><br>
<span class="quotelev1">&gt; to the receiver, then will an MPI_Probe return that there is no 
</span><br>
<span class="quotelev1">&gt; message waiting to be received? The message has already been received 
</span><br>
<span class="quotelev1">&gt; by the MPI_Irecv. It's the MPI_Request object of the MPI_Irecv call 
</span><br>
<span class="quotelev1">&gt; that needs to be probed, but MPI_Test has the side effect of also 
</span><br>
<span class="quotelev1">&gt; deallocating the MPI_Request object.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Shaun
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Justin wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Have you tried MPI_Probe?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Justin
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Shaun Jackman wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is there a function similar to MPI_Test that doesn't deallocate the 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Request object? I would like to test if a message has been 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; received (MPI_Irecv), check its tag, and dispatch the MPI_Request to 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; another function based on that tag.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Shaun
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
<li><strong>Next message:</strong> <a href="8593.php">Richard Treumann: "Re: [OMPI users] MPI_Test without deallocation"</a>
<li><strong>Previous message:</strong> <a href="8591.php">Shaun Jackman: "Re: [OMPI users] MPI_Test without deallocation"</a>
<li><strong>In reply to:</strong> <a href="8591.php">Shaun Jackman: "Re: [OMPI users] MPI_Test without deallocation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8593.php">Richard Treumann: "Re: [OMPI users] MPI_Test without deallocation"</a>
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
