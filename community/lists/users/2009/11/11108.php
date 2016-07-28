<?
$subject_val = "Re: [OMPI users] sending/receiving large buffers";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  9 14:57:40 2009" -->
<!-- isoreceived="20091109195740" -->
<!-- sent="Mon, 9 Nov 2009 11:57:36 -0800" -->
<!-- isosent="20091109195736" -->
<!-- name="Martin Siegert" -->
<!-- email="siegert_at_[hidden]" -->
<!-- subject="Re: [OMPI users] sending/receiving large buffers" -->
<!-- id="20091109195736.GB32221_at_stikine.its.sfu.ca" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="E1N7RkX-0000QD-Eb_at_gauvain.u-strasbg.fr" -->
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
<strong>From:</strong> Martin Siegert (<em>siegert_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-09 14:57:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11109.php">Martin Siegert: "[OMPI users] MPI_IN_PLACE variant of MPI_Reduce"</a>
<li><strong>Previous message:</strong> <a href="11107.php">Sergio D&#237;az: "Re: [OMPI users] checkpoint opempi-1.3.3+sge62"</a>
<li><strong>In reply to:</strong> <a href="11105.php">Vincent Loechner: "Re: [OMPI users] sending/receiving large buffers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11106.php">Ashley Pittman: "Re: [OMPI users] sending/receiving large buffers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Vincent,
<br>
<p>On Mon, Nov 09, 2009 at 11:45:29AM +0100, Vincent Loechner wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Martin,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I expect problems with sizes larger than 2^31-1, but these array sizes
</span><br>
<span class="quotelev2">&gt; &gt; are still much smaller.
</span><br>
<span class="quotelev1">&gt; No, they are bigger, you allocate two arrays of 320 Mdouble :
</span><br>
<span class="quotelev1">&gt; 2 * 320M * 8 = 5GB.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Are your processes limited to 4GB virtual memory ?
</span><br>
<p>No, they aren't. There are 16GB on each node plus swap space; I have
<br>
run processes much bigger than this - in fact this program doesn't
<br>
even come close to the memory limits on each node.
<br>
<p>The reason why there is a problem for counts larger than 2^31-1 is
<br>
that the &quot;count&quot; variable in the MPI library is a MPI_INT - a 32bit integer.
<br>
<p>BTW: the MPI_Allreduce version fails (i.e., hangs forever) for an
<br>
array size larger than 176763240. This is not a smooth transition:
<br>
for 176763240 the program finishes in about 3s, for 176763241 it
<br>
just hangs.
<br>
This looks to me as if there is an internal buffer or some other
<br>
limit that I cannot exceed. Is there such a limit? Or: can somebody
<br>
confirm that they can run the program with an array size larger
<br>
than 176763240?
<br>
<p>Cheers,
<br>
Martin
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11109.php">Martin Siegert: "[OMPI users] MPI_IN_PLACE variant of MPI_Reduce"</a>
<li><strong>Previous message:</strong> <a href="11107.php">Sergio D&#237;az: "Re: [OMPI users] checkpoint opempi-1.3.3+sge62"</a>
<li><strong>In reply to:</strong> <a href="11105.php">Vincent Loechner: "Re: [OMPI users] sending/receiving large buffers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11106.php">Ashley Pittman: "Re: [OMPI users] sending/receiving large buffers"</a>
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
