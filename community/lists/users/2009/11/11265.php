<?
$subject_val = "Re: [OMPI users] Open MPI Query";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 24 06:14:00 2009" -->
<!-- isoreceived="20091124111400" -->
<!-- sent="Tue, 24 Nov 2009 22:13:48 +1100" -->
<!-- isosent="20091124111348" -->
<!-- name="Terry Frankcombe" -->
<!-- email="terry_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI Query" -->
<!-- id="1259061229.6997.26.camel_at_rscpc28.anu.edu.au" -->
<!-- inreplyto="675d290b0911240225g35575da8n37e4d0793165263f_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open MPI Query<br>
<strong>From:</strong> Terry Frankcombe (<em>terry_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-24 06:13:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11266.php">jody: "Re: [OMPI users] Open MPI Query"</a>
<li><strong>Previous message:</strong> <a href="11264.php">Vivek Satpute: "[OMPI users] Open MPI Query"</a>
<li><strong>In reply to:</strong> <a href="11264.php">Vivek Satpute: "[OMPI users] Open MPI Query"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11266.php">jody: "Re: [OMPI users] Open MPI Query"</a>
<li><strong>Reply:</strong> <a href="11266.php">jody: "Re: [OMPI users] Open MPI Query"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, 2009-11-24 at 15:55 +0530, Vivek Satpute wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am new to Open MPI ( which is part of OFED-1.4 packege ). I have few
</span><br>
<span class="quotelev1">&gt; basic queries about
</span><br>
<span class="quotelev1">&gt; Open MPI :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1) I am using openmpi-1.2.8 ( it is part of OFED-1.4 ). Is has two
</span><br>
<span class="quotelev1">&gt; examples i) hello_c ii) ring_c
</span><br>
<span class="quotelev1">&gt;     Does those examples work on Multiple machines or meant for a
</span><br>
<span class="quotelev1">&gt; single node (i.e. localhost) ?
</span><br>
<p>MPI programs are designed to work across multiple machines.  That's
<br>
largely the point of MPI.  They also work well as multiple processes on
<br>
a multiple-CPU machine, or combinations of the two.
<br>
<p><span class="quotelev1">&gt; 2) Does MPI_Send() and MPI_Recv() calls send message from process on
</span><br>
<span class="quotelev1">&gt; one machine to 
</span><br>
<span class="quotelev1">&gt;    process on another machine ? If yes, then how can I achieve this ?
</span><br>
<p>Take a look at what the example codes are doing.  Read man mpirun.  Wait
<br>
for someone here to point you to an MPI primer or tute.
<br>
<p><span class="quotelev1">&gt; 3) Does MPI APIs are implemented on the top of Infiniband ? Does MPI
</span><br>
<span class="quotelev1">&gt; APIs uses Infiniband
</span><br>
<span class="quotelev1">&gt;    hardware and its module for sending and receiving data ?
</span><br>
<p>If you've working infiniband, and your MPI implementation (eg. OpenMPI)
<br>
is configured to use it, then yes.  As your MPI is part of OFED, this is
<br>
eminently likely.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11266.php">jody: "Re: [OMPI users] Open MPI Query"</a>
<li><strong>Previous message:</strong> <a href="11264.php">Vivek Satpute: "[OMPI users] Open MPI Query"</a>
<li><strong>In reply to:</strong> <a href="11264.php">Vivek Satpute: "[OMPI users] Open MPI Query"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11266.php">jody: "Re: [OMPI users] Open MPI Query"</a>
<li><strong>Reply:</strong> <a href="11266.php">jody: "Re: [OMPI users] Open MPI Query"</a>
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
