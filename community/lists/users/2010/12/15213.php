<?
$subject_val = "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores: very poor performance";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 22 13:29:25 2010" -->
<!-- isoreceived="20101222182925" -->
<!-- sent="Wed, 22 Dec 2010 19:29:16 +0100" -->
<!-- isosent="20101222182916" -->
<!-- name="Gilbert Grosdidier" -->
<!-- email="Gilbert.Grosdidier_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores: very poor performance" -->
<!-- id="4D12437C.4030509_at_cern.ch" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4D123A4C.5030806_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores: very poor performance<br>
<strong>From:</strong> Gilbert Grosdidier (<em>Gilbert.Grosdidier_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-22 13:29:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15214.php">Eugene Loh: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores: very poor performance"</a>
<li><strong>Previous message:</strong> <a href="15212.php">Eugene Loh: "Re: [OMPI users] Open MPI vs IBM MPI performance help"</a>
<li><strong>In reply to:</strong> <a href="15211.php">Eugene Loh: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores: very poor performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15214.php">Eugene Loh: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores: very poor performance"</a>
<li><strong>Reply:</strong> <a href="15214.php">Eugene Loh: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores: very poor performance"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Bonsoir Eugene,
<br>
<p>&nbsp;&nbsp;First thanks for trying to help me.
<br>
<p>&nbsp;&nbsp;I already gave a try to some profiling tool, namely IPM, which is rather
<br>
simple to use. Here follows some output for a 1024 core run.
<br>
Unfortunately, I'm yet unable to have the equivalent MPT chart.
<br>
<p>#IPMv0.983####################################################################
<br>
#
<br>
# command : unknown (completed)
<br>
# host    : r34i0n0/x86_64_Linux           mpi_tasks : 1024 on 128 nodes
<br>
# start   : 12/21/10/13:18:09              wallclock : 3357.308618 sec
<br>
# stop    : 12/21/10/14:14:06              %comm     : 27.67
<br>
# gbytes  : 0.00000e+00 total              gflop/sec : 0.00000e+00 total
<br>
#
<br>
##############################################################################
<br>
# region  : *       [ntasks] =   1024
<br>
#
<br>
#                           [total] &lt;avg&gt;           min           max
<br>
# entries                       1024             1             
<br>
1             1
<br>
# wallclock              3.43754e+06       3356.98       3356.83       
<br>
3357.31
<br>
# user                   2.82831e+06       2762.02       2622.04       
<br>
2923.37
<br>
# system                      376230       367.412       174.603       
<br>
492.919
<br>
# mpi                         951328       929.031       633.137       
<br>
1052.86
<br>
# %comm                                    27.6719       18.8601        
<br>
31.363
<br>
# gflop/sec                        0             0             
<br>
0             0
<br>
# gbytes                           0             0             
<br>
0             0
<br>
#
<br>
#
<br>
#                            [time]       [calls] &lt;%mpi&gt; &lt;%wall&gt;
<br>
# MPI_Waitall                 741683   7.91081e+07         77.96        
<br>
21.58
<br>
# MPI_Allreduce               114057   2.53665e+07         11.99         
<br>
3.32
<br>
# MPI_Recv                   40164.7          2048          4.22         
<br>
1.17
<br>
# MPI_Isend                  27420.6   6.53513e+08          2.88         
<br>
0.80
<br>
# MPI_Barrier                25113.5          2048          2.64         
<br>
0.73
<br>
# MPI_Sendrecv                2123.6        212992          0.22         
<br>
0.06
<br>
# MPI_Irecv                  464.616   6.53513e+08          0.05         
<br>
0.01
<br>
# MPI_Reduce                 215.447        171008          0.02         
<br>
0.01
<br>
# MPI_Bcast                  85.0198          1024          0.01         
<br>
0.00
<br>
# MPI_Send                  0.377043          2048          0.00         
<br>
0.00
<br>
# MPI_Comm_rank          0.000744925          4096          0.00         
<br>
0.00
<br>
# MPI_Comm_size          0.000252183          1024          0.00         
<br>
0.00
<br>
###############################################################################
<br>
<p>&nbsp;&nbsp;It seems to my non-expert eye that MPI_Waitall is dominant among MPI 
<br>
calls,
<br>
but not for the overall application, however I will have to compare with 
<br>
MPT,
<br>
before concluding.
<br>
<p>&nbsp;&nbsp;Thanks again for your suggestions, that I'll address one by one.
<br>
<p>&nbsp;&nbsp;Best,     G.
<br>
<p><p><p><p>Le 22/12/2010 18:50, Eugene Loh a &#233;crit :
<br>
<span class="quotelev1">&gt; Can you isolate a bit more where the time is being spent?  The 
</span><br>
<span class="quotelev1">&gt; performance effect you're describing appears to be drastic.  Have you 
</span><br>
<span class="quotelev1">&gt; profiled the code?  Some choices of tools can be found in the FAQ 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=perftools">http://www.open-mpi.org/faq/?category=perftools</a>  The results may be 
</span><br>
<span class="quotelev1">&gt; &quot;uninteresting&quot; (all time spent in your MPI_Waitall calls, for 
</span><br>
<span class="quotelev1">&gt; example), but it'd be good to rule out other possibilities (e.g., I've 
</span><br>
<span class="quotelev1">&gt; seen cases where it's the non-MPI time that's the culprit).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If all the time is spent in MPI_Waitall, then I wonder if it would be 
</span><br>
<span class="quotelev1">&gt; possible for you to reproduce the problem with just some 
</span><br>
<span class="quotelev1">&gt; MPI_Isend|Irecv|Waitall calls that mimic your program.  E.g., &quot;lots of 
</span><br>
<span class="quotelev1">&gt; short messages&quot;, or &quot;lots of long messages&quot;, etc.  It sounds like 
</span><br>
<span class="quotelev1">&gt; there is some repeated set of MPI exchanges, so maybe that set can be 
</span><br>
<span class="quotelev1">&gt; extracted and run without the complexities of the application.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Anyhow, some profiling might help guide one to the problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilbert Grosdidier wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; There are indeed a high rate of communications. But the buffer
</span><br>
<span class="quotelev2">&gt;&gt; size is always the same for a given pair of processes, and I thought
</span><br>
<span class="quotelev2">&gt;&gt; that mpi_leave_pinned should avoid freeing the memory in this case.
</span><br>
<span class="quotelev2">&gt;&gt; Am I wrong ?
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15213/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15214.php">Eugene Loh: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores: very poor performance"</a>
<li><strong>Previous message:</strong> <a href="15212.php">Eugene Loh: "Re: [OMPI users] Open MPI vs IBM MPI performance help"</a>
<li><strong>In reply to:</strong> <a href="15211.php">Eugene Loh: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores: very poor performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15214.php">Eugene Loh: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores: very poor performance"</a>
<li><strong>Reply:</strong> <a href="15214.php">Eugene Loh: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores: very poor performance"</a>
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
