<?
$subject_val = "Re: [OMPI users] nonblocking MPI_File_iwrite() does block?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 23 05:17:55 2009" -->
<!-- isoreceived="20091123101755" -->
<!-- sent="Mon, 23 Nov 2009 11:17:45 +0100" -->
<!-- isosent="20091123101745" -->
<!-- name="Christoph Rackwitz" -->
<!-- email="rackwitz_at_[hidden]" -->
<!-- subject="Re: [OMPI users] nonblocking MPI_File_iwrite() does block?" -->
<!-- id="4B0A6149.5080700_at_rz.rwth-aachen.de" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="mailman.9.1258822806.29210.users_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] nonblocking MPI_File_iwrite() does block?<br>
<strong>From:</strong> Christoph Rackwitz (<em>rackwitz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-23 05:17:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11250.php">Iris Pernille Lohmann: "Re: [OMPI users] segmentation fault: Address not mapped"</a>
<li><strong>Previous message:</strong> <a href="11248.php">Arunkumar C R: "[OMPI users] Doubt regarding MPI_GATHER"</a>
<li><strong>Maybe in reply to:</strong> <a href="11081.php">Christoph Rackwitz: "[OMPI users] nonblocking MPI_File_iwrite() does block?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11251.php">Rob Latham: "Re: [OMPI users] nonblocking MPI_File_iwrite() does block?"</a>
<li><strong>Reply:</strong> <a href="11251.php">Rob Latham: "Re: [OMPI users] nonblocking MPI_File_iwrite() does block?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Rob Latham wrote:
<br>
<span class="quotelev1">&gt; The standard in no way requires any overlap for either the nonblocking
</span><br>
<span class="quotelev1">&gt; communication or I/O routines.  There are long and heated discussions
</span><br>
<span class="quotelev1">&gt; about &quot;strict&quot; or &quot;weak&quot; interpretation of the progress rule and which
</span><br>
<span class="quotelev1">&gt; one is &quot;better&quot;.
</span><br>
<p>Unfortunate. But with your &quot;official&quot; statement, I can now put that 
<br>
issue behind me. Thanks :)
<br>
<p><span class="quotelev1">&gt; If you want asynchronous nonblocking I/O, you might have to roll all
</span><br>
<span class="quotelev1">&gt; the way back to LAM or MPICH-1.2.7, when ROMIO used its own request
</span><br>
<span class="quotelev1">&gt; objects and test/wait routines on top of the aio routines.
</span><br>
<p><span class="quotelev1">&gt; What if you moved your MPI_File_write call into a thread?  There are
</span><br>
<span class="quotelev1">&gt; several ways to do this: you could use standard generalized reqeusts
</span><br>
<span class="quotelev1">&gt; and make progress with a thread -- the
</span><br>
<span class="quotelev1">&gt; application writer has a lot more knowledge about the systems and how
</span><br>
<span class="quotelev1">&gt; best to allocate threads.
</span><br>
<p>The funny thing is that my code was supposed to be an instructive demo 
<br>
of MPI's asynchronous I/O APIs and their functionality. It's basically 
<br>
number crunching on a matrix, distributed in stripes across ranks. The 
<br>
parallel I/O would have all ranks write their stripe into one file, done 
<br>
with a subarray data type.
<br>
<p>Adding any kind of threading would be practical and performing better, 
<br>
but not showing off MPI's I/O APIs. I'd rather keep the code as simple 
<br>
as it is, so people see the &quot;other&quot; benefits of MPI's APIs: they're 
<br>
higher-level, more convenient than rolling it by hand.
<br>
<p><span class="quotelev1">&gt; If I may ask a slightly different question: you've got periods of I/O
</span><br>
<span class="quotelev1">&gt; and periods of computation.  Have you evaluated collective I/O?
</span><br>
<p>I thought about it and I know a way to make it happen too, but I put 
<br>
that on the &quot;to do&quot; pile for possible improvements later on, after I'd 
<br>
have gotten the asynchronous I/O working. My file format contains a 
<br>
struct followed by two matrices (same dimensions). Right now, I write 
<br>
the header via rank 0 and then each rank writes one stripe for each 
<br>
matrix, resulting in two Requests pending. I gather that I'd need to 
<br>
construct one or two more data types for split-collective I/O to be 
<br>
applicable, i.e., so the whole write happens in one call.
<br>
<p><span class="quotelev1">&gt; I
</span><br>
<span class="quotelev1">&gt; know you are eager to hide I/O in the background -- to get it for free
</span><br>
<span class="quotelev1">&gt; -- but there's no such thing as a free lunch.  Background I/O might
</span><br>
<span class="quotelev1">&gt; still perturb your computation phase, unless you make zero MPI calls
</span><br>
<span class="quotelev1">&gt; in your computational phase.   Collective I/O can bring some fairly
</span><br>
<span class="quotelev1">&gt; powerful optimizations to the table and reduce your overall I/O costs,
</span><br>
<span class="quotelev1">&gt; perhaps even reducing them enough that you no longer miss true
</span><br>
<span class="quotelev1">&gt; asynchronous I/O ?
</span><br>
<p>I'll give that a try then.
<br>
<p><p>Thanks,
<br>
Chris
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11250.php">Iris Pernille Lohmann: "Re: [OMPI users] segmentation fault: Address not mapped"</a>
<li><strong>Previous message:</strong> <a href="11248.php">Arunkumar C R: "[OMPI users] Doubt regarding MPI_GATHER"</a>
<li><strong>Maybe in reply to:</strong> <a href="11081.php">Christoph Rackwitz: "[OMPI users] nonblocking MPI_File_iwrite() does block?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11251.php">Rob Latham: "Re: [OMPI users] nonblocking MPI_File_iwrite() does block?"</a>
<li><strong>Reply:</strong> <a href="11251.php">Rob Latham: "Re: [OMPI users] nonblocking MPI_File_iwrite() does block?"</a>
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
