<?
$subject_val = "[OMPI users] Making MPI_Send to behave as blocking for all the sizes of the messages";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 18 04:56:58 2010" -->
<!-- isoreceived="20101118095658" -->
<!-- sent="Thu, 18 Nov 2010 10:56:11 +0100" -->
<!-- isosent="20101118095611" -->
<!-- name="George Markomanolis" -->
<!-- email="george_at_[hidden]" -->
<!-- subject="[OMPI users] Making MPI_Send to behave as blocking for all the sizes of the messages" -->
<!-- id="4CE4F83B.2090508_at_markomanolis.com" -->
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
<strong>Subject:</strong> [OMPI users] Making MPI_Send to behave as blocking for all the sizes of the messages<br>
<strong>From:</strong> George Markomanolis (<em>george_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-18 04:56:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14823.php">tmishima_at_[hidden]: "Re: [OMPI users] SYSTEM CPU with OpenMPI 1.4.3"</a>
<li><strong>Previous message:</strong> <a href="14821.php">Chris Jewell: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14833.php">Eugene Loh: "Re: [OMPI users] Making MPI_Send to behave as blocking for all the sizes of the messages"</a>
<li><strong>Reply:</strong> <a href="14833.php">Eugene Loh: "Re: [OMPI users] Making MPI_Send to behave as blocking for all the sizes of the messages"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all,
<br>
<p>I am trying to disable the eager mode in OpenMPI 1.3.3 and I don't see a 
<br>
real difference between the timings.
<br>
I would like to execute a ping (rank 0 sends a message to rank 1) and to 
<br>
measure the duration of the MPI_Send on rank 0 and the duration of 
<br>
MPI_Recv on rank 1. I have the following results.
<br>
<p>Without changing the eager mode:
<br>
<p>bytes    MPI_Send (in msec)    MPI_Recv (in msec)
<br>
1            5.8                  52.2
<br>
2            5.6                  51.0
<br>
4            5.4                  51.1
<br>
8            5.6                  51.6
<br>
16           5.5                  49.7
<br>
32           5.4                  52.1
<br>
64           5.3                  53.3
<br>
<p><p><p>with disabled the eager mode:
<br>
<p>ompi_info --param btl tcp | grep eager
<br>
MCA btl: parameter &quot;btl_tcp_eager_limit&quot; (current value: &quot;0&quot;, data 
<br>
source: environment)
<br>
<p>bytes    MPI_Send (in msec)    MPI_Recv (in msec)
<br>
1            5.4                  52.3
<br>
2            5.4                  51.0
<br>
4            5.4                  52.1
<br>
8            5.4                  50.7
<br>
16           5.0                  50.2
<br>
32           5.1                  50.1
<br>
64           5.4                  52.8
<br>
<p>However I was expecting that with disabled the eager mode the duration 
<br>
of MPI_Send should be longer. Am I wrong? Is there any option for making 
<br>
the MPI_Send to behave like blocking command for all the sizes of the 
<br>
messages?
<br>
<p><p>Thanks a lot,
<br>
Best regards,
<br>
George Markomanolis
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14823.php">tmishima_at_[hidden]: "Re: [OMPI users] SYSTEM CPU with OpenMPI 1.4.3"</a>
<li><strong>Previous message:</strong> <a href="14821.php">Chris Jewell: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14833.php">Eugene Loh: "Re: [OMPI users] Making MPI_Send to behave as blocking for all the sizes of the messages"</a>
<li><strong>Reply:</strong> <a href="14833.php">Eugene Loh: "Re: [OMPI users] Making MPI_Send to behave as blocking for all the sizes of the messages"</a>
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
