<?
$subject_val = "Re: [OMPI users] busy wait in MPI_Recv";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 19 22:55:12 2010" -->
<!-- isoreceived="20101020025512" -->
<!-- sent="Tue, 19 Oct 2010 19:54:33 -0700" -->
<!-- isosent="20101020025433" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] busy wait in MPI_Recv" -->
<!-- id="4CBE59E9.2050006_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTimbLQ+ZCi17kzvnJQv3v1Bc8rMXFEDwPRoCXjy5_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] busy wait in MPI_Recv<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-19 22:54:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14504.php">livelfs: "Re: [OMPI users] openmpi 1.5 build from rpm fails: --program-prefix now checked in configure"</a>
<li><strong>Previous message:</strong> <a href="14502.php">Brian Budge: "[OMPI users] busy wait in MPI_Recv"</a>
<li><strong>In reply to:</strong> <a href="14502.php">Brian Budge: "[OMPI users] busy wait in MPI_Recv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14505.php">Richard Treumann: "Re: [OMPI users] busy wait in MPI_Recv"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brian Budge wrote:
<br>
<p><span class="quotelev1">&gt;Hi all -
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I just ran a small test to find out the overhead of an MPI_Recv call
</span><br>
<span class="quotelev1">&gt;when no communication is occurring.   It seems quite high.  I noticed
</span><br>
<span class="quotelev1">&gt;during my google excursions that openmpi does busy waiting.  I also
</span><br>
<span class="quotelev1">&gt;noticed that the option to -mca mpi_yield_when_idle seems not to help
</span><br>
<span class="quotelev1">&gt;much (in fact, turning on the yield seems only to slow down the
</span><br>
<span class="quotelev1">&gt;program).  What is the best way to reduce this polling cost during
</span><br>
<span class="quotelev1">&gt;low-communication invervals?  Should I write my own recv loop that
</span><br>
<span class="quotelev1">&gt;sleeps for short periods?  I don't want to go write someone that is
</span><br>
<span class="quotelev1">&gt;possibly already done much better in the library :)
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
I think this has been discussed a variety of times before on this list.
<br>
<p>Yes, OMPI does busy wait.
<br>
<p>Turning on the MCA yield parameter can help some.  There will still be a 
<br>
load, but one that defers somewhat to other loads.  In any case, even 
<br>
with yield, a wait is still relatively intrusive.
<br>
<p>You might have some luck writing something like this yourself, 
<br>
particularly if you know you'll be idle long periods.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14504.php">livelfs: "Re: [OMPI users] openmpi 1.5 build from rpm fails: --program-prefix now checked in configure"</a>
<li><strong>Previous message:</strong> <a href="14502.php">Brian Budge: "[OMPI users] busy wait in MPI_Recv"</a>
<li><strong>In reply to:</strong> <a href="14502.php">Brian Budge: "[OMPI users] busy wait in MPI_Recv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14505.php">Richard Treumann: "Re: [OMPI users] busy wait in MPI_Recv"</a>
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
