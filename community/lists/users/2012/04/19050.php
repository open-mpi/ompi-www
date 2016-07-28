<?
$subject_val = "[OMPI users] send/recv implementation details";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 19 06:52:06 2012" -->
<!-- isoreceived="20120419105206" -->
<!-- sent="Thu, 19 Apr 2012 12:53:30 +0200" -->
<!-- isosent="20120419105330" -->
<!-- name="Simone Pellegrini" -->
<!-- email="spellegrini_at_[hidden]" -->
<!-- subject="[OMPI users] send/recv implementation details" -->
<!-- id="4F8FEEAA.2010308_at_dps.uibk.ac.at" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] send/recv implementation details<br>
<strong>From:</strong> Simone Pellegrini (<em>spellegrini_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-19 06:53:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19051.php">pascal.deveze_at_[hidden]: "Re: [OMPI users] machine exited on signal 11 (Segmentation fault)."</a>
<li><strong>Previous message:</strong> <a href="19049.php">Rohan Deshpande: "Re: [OMPI users] machine exited on signal 11 (Segmentation fault)."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19056.php">George Bosilca: "Re: [OMPI users] send/recv implementation details"</a>
<li><strong>Reply:</strong> <a href="19056.php">George Bosilca: "Re: [OMPI users] send/recv implementation details"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello everybody,
<br>
I am measuring some timings for MPI_Send/MPI_Recv. I am doing a single 
<br>
communication between 2 processes and I repeat this several times to get 
<br>
meaningful values. The message being sent varies from 64 bytes up to 16 
<br>
MBs, doubling the size each time (64, 128, 256,....8M, 16M).
<br>
<p>I give you here some context information on the way I am executing this 
<br>
benchmark.
<br>
The experiment is executed on a multicore architecture, 2 processes 
<br>
bound to 2 distinct cores of the CPU. The 2 processes run on the same node.
<br>
The underlying CPU is an AMD Istanbul CPU (6 cores) 64KB L1 data cache 
<br>
64 KB L2 data cache, 512KB L2 Cache and 6 MB L3 (shared) Cache. The node 
<br>
contains 2 sockets therefore each CPU gets exactly one of the 2 MPI 
<br>
processes.
<br>
<p>I am using OpenMPI version 1.4.4 (compiled by myself using the default 
<br>
configurations, didn't use any fancy SM implementation)
<br>
<p>In order to force the SM module I run my code using the following MCA 
<br>
parameter: &quot;--mca btl sm,self&quot;
<br>
I am also aware of the *eager_limit* and various threshold present in 
<br>
the OpenMPI library. In order to not get confused I set these two 
<br>
parameters to 16MB (twice the size of the L3 cache): 
<br>
*btl_sm_eager_limit* and *btl_sm_max_send_size*
<br>
<p>Beside the time I am measuring a couple of HW counters using PAPI. In 
<br>
particular I am interested in total instructions (PAPI_TOT_INS) and 
<br>
branch instructions (PAPI_BR_INS).
<br>
<p><p><p>Enough with the context, this is what I am observing. At 16 MB there is 
<br>
a clear increase in the number of instructions and branch instructions 
<br>
(and this can be explained by my settings of eager_limit and max send 
<br>
size).
<br>
<p>However something weird already happens at 32K where I clearly see an 
<br>
increase in the number of branches and total instructions. The fact is 
<br>
that there are almost 0 branch instructions until 32KB and starting from 
<br>
32KB to 16MB there is a linear increase. At 16MB there is another jump 
<br>
and then again linear increase.
<br>
It seems that there is another threshold driving this behavior. I tried 
<br>
to set these other parameters for the SM BTL, btl_sm_fifo_size, 
<br>
btl_sm_exclusivity but nothing changed. For my understanding of MPI, 
<br>
this should be a kind of pipe-lining of the message which is being 
<br>
transferred by chunks (of probably 32KB size).
<br>
<p>How can I override this behavior? Is there any parameter I can set?
<br>
<p><p>I also noticed that while this is happening for the MPI_Send, the 
<br>
MPI_Recv operation behaves differently. For the receive routine there is 
<br>
no bump in terms of branch and total instructions. The increase is 
<br>
linear starting from 64 bytes. The increase of branch instructions slows 
<br>
down however after the 16MB threshold. My idea about that is that 
<br>
probably the receive is busy waiting for the message and therefore the 
<br>
number of branches grows proportionally with the time spent for the 
<br>
message to arrive.
<br>
<p>This is my hypothesis but you probably know better.
<br>
graphs are attached. Thanks in advance for your help.
<br>
<p>cheers, Simone P.
<br>
<p><p><p><p>
<br><hr>
<ul>
<li>other/unknown attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19050/data.pdf">data.pdf</a>
</ul>
<!-- attachment="data.pdf" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19051.php">pascal.deveze_at_[hidden]: "Re: [OMPI users] machine exited on signal 11 (Segmentation fault)."</a>
<li><strong>Previous message:</strong> <a href="19049.php">Rohan Deshpande: "Re: [OMPI users] machine exited on signal 11 (Segmentation fault)."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19056.php">George Bosilca: "Re: [OMPI users] send/recv implementation details"</a>
<li><strong>Reply:</strong> <a href="19056.php">George Bosilca: "Re: [OMPI users] send/recv implementation details"</a>
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
