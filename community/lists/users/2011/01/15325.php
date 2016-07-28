<?
$subject_val = "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores	:	very poor performance";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan  7 14:24:58 2011" -->
<!-- isoreceived="20110107192458" -->
<!-- sent="Fri, 07 Jan 2011 11:22:52 -0800" -->
<!-- isosent="20110107192252" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores	:	very poor performance" -->
<!-- id="4D27680C.3050905_at_oracle.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="3EA7C297-C10C-4932-AFCB-B477951ECD54_at_cern.ch" -->
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
<strong>Subject:</strong> Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores	:	very poor performance<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-07 14:22:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15326.php">Pierre Chanial: "[OMPI users] MPI_Comm_Spawn intercommunication"</a>
<li><strong>Previous message:</strong> <a href="15324.php">Eugene Loh: "Re: [OMPI users] mpirun --nice 10 prog ??"</a>
<li><strong>In reply to:</strong> <a href="15322.php">Gilbert Grosdidier: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores	:	very poor performance"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<head>
  <meta content="text/html;charset=ISO-8859-1" http-equiv="Content-Type">
  <title></title>
</head>
<body bgcolor="#ffffff" text="#000000">
Gilbert Grosdidier wrote:
<blockquote cite="mid3EA7C297-C10C-4932-AFCB-B477951ECD54@cern.ch"
 type="cite">Any other suggestion ?</blockquote>
Can any more information be extracted from profiling?&nbsp; Here is where I
think things left off:<br>
<br>
Eugene Loh wrote:
<blockquote cite="mid4D124BCB.5030006@oracle.com" type="cite">
  <meta content="text/html;charset=ISO-8859-1" http-equiv="Content-Type">
  <title></title>
Gilbert Grosdidier wrote:<br>
  <blockquote cite="mid4D12437C.4030509@cern.ch" type="cite"><font
 face="Courier New, Courier, monospace">#&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
[time]&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; [calls]&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;%mpi&gt;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;%wall&gt;<br>
# MPI_Waitall&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 741683&nbsp;&nbsp; 7.91081e+07&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 77.96&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
21.58<br>
# MPI_Allreduce&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 114057&nbsp;&nbsp; 2.53665e+07&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
11.99&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3.32<br>
# MPI_Isend&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 27420.6&nbsp;&nbsp; 6.53513e+08&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
2.88&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 0.80<br>
# MPI_Irecv&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 464.616&nbsp;&nbsp; 6.53513e+08&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
0.05&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 0.01<br>
###############################################################################</font><br>
    <br>
It seems to my non-expert eye that MPI_Waitall is dominant among MPI
calls,<br>
but not for the overall application,</blockquote>
Looks like on average each MPI_Waitall call is completing 8+ MPI_Isend
calls and 8+ MPI_Irecv calls.&nbsp; I think IPM gives some point-to-point
messaging information.&nbsp; Maybe you can tell what the distribution is of
message sizes, etc.&nbsp; Or, maybe you already know the characteristic
pattern.&nbsp; Does a stand-alone message-passing test (without the
computational portion) capture the performance problem you're looking
for?<br>
</blockquote>
Do you know message lengths and patterns?&nbsp; Can you confirm whether
non-MPI time is the same between good and bad runs?<br>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15326.php">Pierre Chanial: "[OMPI users] MPI_Comm_Spawn intercommunication"</a>
<li><strong>Previous message:</strong> <a href="15324.php">Eugene Loh: "Re: [OMPI users] mpirun --nice 10 prog ??"</a>
<li><strong>In reply to:</strong> <a href="15322.php">Gilbert Grosdidier: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores	:	very poor performance"</a>
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
