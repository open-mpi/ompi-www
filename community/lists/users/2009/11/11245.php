<?
$subject_val = "Re: [OMPI users] nonblocking MPI_File_iwrite() does block?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 20 12:23:43 2009" -->
<!-- isoreceived="20091120172343" -->
<!-- sent="Fri, 20 Nov 2009 11:23:33 -0600" -->
<!-- isosent="20091120172333" -->
<!-- name="Rob Latham" -->
<!-- email="robl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] nonblocking MPI_File_iwrite() does block?" -->
<!-- id="20091120172332.GC12394_at_mcs.anl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4B01277C.6020400_at_rz.rwth-aachen.de" -->
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
<strong>From:</strong> Rob Latham (<em>robl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-20 12:23:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11246.php">Jeff Squyres: "[OMPI users] Fwd: Call for participation: MPI Forum User Survey"</a>
<li><strong>Previous message:</strong> <a href="11244.php">vasilis gkanis: "Re: [OMPI users] Program hangs"</a>
<li><strong>In reply to:</strong> <a href="11207.php">Christoph Rackwitz: "Re: [OMPI users] nonblocking MPI_File_iwrite() does block?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11249.php">Christoph Rackwitz: "Re: [OMPI users] nonblocking MPI_File_iwrite() does block?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Nov 16, 2009 at 11:20:44AM +0100, Christoph Rackwitz wrote:
<br>
<span class="quotelev1">&gt; It's been ten days now. I'd like to resurrect this, in case someone
</span><br>
<span class="quotelev1">&gt; can help and just missed it.
</span><br>
<p>Hi.  I only check in on the OpenMPI list periodically.  Sorry for the
<br>
delay.
<br>
<p>The standard in no way requires any overlap for either the nonblocking
<br>
communication or I/O routines.  There are long and heated discussions
<br>
about &quot;strict&quot; or &quot;weak&quot; interpretation of the progress rule and which
<br>
one is &quot;better&quot;.
<br>
<p>If you want asynchronous nonblocking I/O, you might have to roll all
<br>
the way back to LAM or MPICH-1.2.7, when ROMIO used its own request
<br>
objects and test/wait routines on top of the aio routines.
<br>
<p>In order to have standard request objects and use the standard
<br>
test/wait routines, ROMIO switched to generalized requests.  However,
<br>
it's difficult to make progress on generalized requests without using
<br>
threads, so we do all the work when the job is posted and as you
<br>
observe, MPI_Wait() discovers immediately that the job is complete.
<br>
<p>I proposed an extension to MPI generalized requests a few years ago
<br>
that would make them more amenable to libraries like ROMIO.
<br>
<p>Today systems have a ton of cores. Spawning an I/O thread is not such
<br>
an onerous burden.  But we don't spawn such a thread in ROMIO, and so
<br>
nonblocking I/O is not asynchronous.
<br>
<p>What if you moved your MPI_File_write call into a thread?  There are
<br>
several ways to do this: you could use standard generalized reqeusts
<br>
and make progress with a thread -- the 
<br>
application writer has a lot more knowledge about the systems and how
<br>
best to allocate threads.
<br>
<p>If I may ask a slightly different question: you've got periods of I/O
<br>
and periods of computation.  Have you evaluated collective I/O?  I
<br>
know you are eager to hide I/O in the background -- to get it for free
<br>
-- but there's no such thing as a free lunch.  Background I/O might
<br>
still perturb your computation phase, unless you make zero MPI calls
<br>
in your computational phase.   Collective I/O can bring some fairly
<br>
powerful optimizations to the table and reduce your overall I/O costs,
<br>
perhaps even reducing them enough that you no longer miss true
<br>
asynchronous I/O ?
<br>
<p>==rob
<br>
<p><pre>
-- 
Rob Latham
Mathematics and Computer Science Division
Argonne National Lab, IL USA
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11246.php">Jeff Squyres: "[OMPI users] Fwd: Call for participation: MPI Forum User Survey"</a>
<li><strong>Previous message:</strong> <a href="11244.php">vasilis gkanis: "Re: [OMPI users] Program hangs"</a>
<li><strong>In reply to:</strong> <a href="11207.php">Christoph Rackwitz: "Re: [OMPI users] nonblocking MPI_File_iwrite() does block?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11249.php">Christoph Rackwitz: "Re: [OMPI users] nonblocking MPI_File_iwrite() does block?"</a>
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
