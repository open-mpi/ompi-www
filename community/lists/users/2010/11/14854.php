<?
$subject_val = "[OMPI users] tool for measuring the ping with accuracy";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Nov 21 18:30:24 2010" -->
<!-- isoreceived="20101121233024" -->
<!-- sent="Mon, 22 Nov 2010 00:29:34 +0100" -->
<!-- isosent="20101121232934" -->
<!-- name="George Markomanolis" -->
<!-- email="george_at_[hidden]" -->
<!-- subject="[OMPI users] tool for measuring the ping with accuracy" -->
<!-- id="4CE9AB5E.4080103_at_markomanolis.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="mailman.9.1290186023.3130.users_at_open-mpi.org" -->
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
<strong>Subject:</strong> [OMPI users] tool for measuring the ping with accuracy<br>
<strong>From:</strong> George Markomanolis (<em>george_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-21 18:29:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14855.php">Tushar Andriyas: "[OMPI users] ABOUT ERROR WITH MPIRUN"</a>
<li><strong>Previous message:</strong> <a href="14853.php">Tushar Andriyas: "Re: [OMPI users] Unable to find the following executable"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14877.php">Eugene Loh: "Re: [OMPI users] tool for measuring the ping with accuracy"</a>
<li><strong>Reply:</strong> <a href="14877.php">Eugene Loh: "Re: [OMPI users] tool for measuring the ping with accuracy"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Eugene,
<br>
<p>Thanks a lot for the answer you were right for the eager mode.
<br>
<p>I have one more question. I am looking for an official tool to measure 
<br>
the ping time, just sending a message of 1 byte or more and measure the 
<br>
duration of the MPI_Send command on the rank 0 and the duration of the 
<br>
MPI_Recv on rank 1. I would like to know any formal tool because I am 
<br>
using also SkaMPI and the results really depend on the call of the 
<br>
synchronization before the measurement starts.
<br>
<p>So for example with synchronizing the processors, sending 1 byte, I have:
<br>
rank 0, MPI_Send: ~7 ms
<br>
rank 1, MPI_Recv: ~52 ms
<br>
<p>where 52 ms is almost the half of the ping-pong and this is ok.
<br>
<p>Without synchronizing I have:
<br>
rank 0, MPI_Send: ~7 ms
<br>
rank 1, MPI_Recv: ~7 ms
<br>
<p>However I developed a simple application where the rank 0 sends 1000 
<br>
messages of 1 byte to rank 1 and I have almost the second timings with 
<br>
the 7 ms. If in the same application I add the MPI_Recv and MPI_Send 
<br>
respectively in order to have a ping-pong application then the ping-pong 
<br>
duration is 100ms (like SkaMPI). Can someone explain me why is this 
<br>
happening? The ping-pong takes 100 ms and the ping without 
<br>
synchronization takes 7 ms.
<br>
<p>Thanks a lot,
<br>
Best regards,
<br>
George Markomanolis
<br>
<p><p><span class="quotelev1">&gt; Message: 1
</span><br>
<span class="quotelev1">&gt; Date: Thu, 18 Nov 2010 10:31:40 -0800
</span><br>
<span class="quotelev1">&gt; From: Eugene Loh &lt;eugene.loh_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Making MPI_Send to behave as blocking for
</span><br>
<span class="quotelev1">&gt; 	all the sizes of the messages
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;4CE5710C.8030709_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=ISO-8859-1; format=flowed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Try lowering the eager threshold more gradually... e.g., 4K, 2K, 1K, 
</span><br>
<span class="quotelev1">&gt; 512, etc. -- and watch what happens.  I think you will see what you 
</span><br>
<span class="quotelev1">&gt; expect, except once you get too small then the value is ignored 
</span><br>
<span class="quotelev1">&gt; entirely.  So, the setting just won't work at the extreme value (0) you 
</span><br>
<span class="quotelev1">&gt; want.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Maybe the thing to do is convert your MPI_Send calls to MPI_Ssend 
</span><br>
<span class="quotelev1">&gt; calls.  Or, compile in a wrapper that intercepts MPI_Send calls and 
</span><br>
<span class="quotelev1">&gt; implements them by calling PMPI_Ssend.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; George Markomanolis wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Dear all,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am trying to disable the eager mode in OpenMPI 1.3.3 and I don't see 
</span><br>
<span class="quotelev2">&gt;&gt; a real difference between the timings.
</span><br>
<span class="quotelev2">&gt;&gt; I would like to execute a ping (rank 0 sends a message to rank 1) and 
</span><br>
<span class="quotelev2">&gt;&gt; to measure the duration of the MPI_Send on rank 0 and the duration of 
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Recv on rank 1. I have the following results.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Without changing the eager mode:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; bytes    MPI_Send (in msec)    MPI_Recv (in msec)
</span><br>
<span class="quotelev2">&gt;&gt; 1            5.8                  52.2
</span><br>
<span class="quotelev2">&gt;&gt; 2            5.6                  51.0
</span><br>
<span class="quotelev2">&gt;&gt; 4            5.4                  51.1
</span><br>
<span class="quotelev2">&gt;&gt; 8            5.6                  51.6
</span><br>
<span class="quotelev2">&gt;&gt; 16           5.5                  49.7
</span><br>
<span class="quotelev2">&gt;&gt; 32           5.4                  52.1
</span><br>
<span class="quotelev2">&gt;&gt; 64           5.3                  53.3
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; with disabled the eager mode:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ompi_info --param btl tcp | grep eager
</span><br>
<span class="quotelev2">&gt;&gt; MCA btl: parameter &quot;btl_tcp_eager_limit&quot; (current value: &quot;0&quot;, data 
</span><br>
<span class="quotelev2">&gt;&gt; source: environment)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; bytes    MPI_Send (in msec)    MPI_Recv (in msec)
</span><br>
<span class="quotelev2">&gt;&gt; 1            5.4                  52.3
</span><br>
<span class="quotelev2">&gt;&gt; 2            5.4                  51.0
</span><br>
<span class="quotelev2">&gt;&gt; 4            5.4                  52.1
</span><br>
<span class="quotelev2">&gt;&gt; 8            5.4                  50.7
</span><br>
<span class="quotelev2">&gt;&gt; 16           5.0                  50.2
</span><br>
<span class="quotelev2">&gt;&gt; 32           5.1                  50.1
</span><br>
<span class="quotelev2">&gt;&gt; 64           5.4                  52.8
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; However I was expecting that with disabled the eager mode the duration 
</span><br>
<span class="quotelev2">&gt;&gt; of MPI_Send should be longer. Am I wrong? Is there any option for 
</span><br>
<span class="quotelev2">&gt;&gt; making the MPI_Send to behave like blocking command for all the sizes 
</span><br>
<span class="quotelev2">&gt;&gt; of the messages?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks a lot,
</span><br>
<span class="quotelev2">&gt;&gt; Best regards,
</span><br>
<span class="quotelev2">&gt;&gt; George Markomanolis
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14855.php">Tushar Andriyas: "[OMPI users] ABOUT ERROR WITH MPIRUN"</a>
<li><strong>Previous message:</strong> <a href="14853.php">Tushar Andriyas: "Re: [OMPI users] Unable to find the following executable"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14877.php">Eugene Loh: "Re: [OMPI users] tool for measuring the ping with accuracy"</a>
<li><strong>Reply:</strong> <a href="14877.php">Eugene Loh: "Re: [OMPI users] tool for measuring the ping with accuracy"</a>
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
