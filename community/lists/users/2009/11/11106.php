<?
$subject_val = "Re: [OMPI users] sending/receiving large buffers";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  9 06:57:32 2009" -->
<!-- isoreceived="20091109115732" -->
<!-- sent="Mon, 09 Nov 2009 11:57:56 +0000" -->
<!-- isosent="20091109115756" -->
<!-- name="Ashley Pittman" -->
<!-- email="ashley_at_[hidden]" -->
<!-- subject="Re: [OMPI users] sending/receiving large buffers" -->
<!-- id="1257767876.11542.12.camel_at_alpha" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20091109044023.GA28891_at_stikine.its.sfu.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] sending/receiving large buffers<br>
<strong>From:</strong> Ashley Pittman (<em>ashley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-09 06:57:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11107.php">Sergio Díaz: "Re: [OMPI users] checkpoint opempi-1.3.3+sge62"</a>
<li><strong>Previous message:</strong> <a href="11105.php">Vincent Loechner: "Re: [OMPI users] sending/receiving large buffers"</a>
<li><strong>In reply to:</strong> <a href="11104.php">Martin Siegert: "[OMPI users] sending/receiving large buffers"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sun, 2009-11-08 at 20:40 -0800, Martin Siegert wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am running into a problem with mpi_allreduce when large buffers
</span><br>
<span class="quotelev1">&gt; are used. But does not appear to be unique for mpi_allreduce; it
</span><br>
<span class="quotelev1">&gt; occurs with mpi_send/mpi_recv as well; program is attached.
</span><br>
<span class="quotelev1">&gt; 1) run this using MPI_Allreduce:
</span><br>
<p><span class="quotelev1">&gt; allreduce completed 2.700941
</span><br>
<span class="quotelev1">&gt; enter array size (integer; negative to stop):
</span><br>
<span class="quotelev1">&gt; 320000000
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; At this point the program just hangs forever.
</span><br>
<p>You could use padb (It's linked to in my sig) to tell you where the
<br>
application is stuck - it could just be swapping.
<br>
<p><span class="quotelev1">&gt; All programs/libraries are 64bit, interconnect is IB.
</span><br>
<span class="quotelev1">&gt; I expect problems with sizes larger than 2^31-1, but these array sizes
</span><br>
<span class="quotelev1">&gt; are still much smaller.
</span><br>
<p>Whilst the message counts are smaller than 2^31-1 you should be aware
<br>
that the message sizes are larger as they are multiplied by
<br>
sizeof(double) so I wouldn't rule out this theory.
<br>
<p>Also, you are mallocing at least 4Gb per process and quite possibly a
<br>
large amount for buffering in the MPI library as well, it could be that
<br>
you are simply running out of memory.
<br>
<p>Ashley,
<br>
<p><pre>
-- 
Ashley Pittman, Bath, UK.
Padb - A parallel job inspection tool for cluster computing
<a href="http://padb.pittman.org.uk">http://padb.pittman.org.uk</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11107.php">Sergio Díaz: "Re: [OMPI users] checkpoint opempi-1.3.3+sge62"</a>
<li><strong>Previous message:</strong> <a href="11105.php">Vincent Loechner: "Re: [OMPI users] sending/receiving large buffers"</a>
<li><strong>In reply to:</strong> <a href="11104.php">Martin Siegert: "[OMPI users] sending/receiving large buffers"</a>
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
