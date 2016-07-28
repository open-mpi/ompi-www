<?
$subject_val = "[OMPI users] how to make a process start and then join a MPI group";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 25 22:02:50 2008" -->
<!-- isoreceived="20080726020250" -->
<!-- sent="Fri, 25 Jul 2008 22:01:15 -0400" -->
<!-- isosent="20080726020115" -->
<!-- name="Mark Borgerding" -->
<!-- email="markb_at_[hidden]" -->
<!-- subject="[OMPI users] how to make a process start and then join a MPI group" -->
<!-- id="488A856B.8070502_at_3dB-Labs.com" -->
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
<strong>Subject:</strong> [OMPI users] how to make a process start and then join a MPI group<br>
<strong>From:</strong> Mark Borgerding (<em>markb_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-25 22:01:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6131.php">vega lew: "[OMPI users] How to cease the process triggered by OPENMPI"</a>
<li><strong>Previous message:</strong> <a href="6129.php">Brock Palen: "Re: [OMPI users] Problem with WRF and pgi-7.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6133.php">Mark Borgerding: "Re: [OMPI users] how to make a process start and then join a MPI group"</a>
<li><strong>Reply:</strong> <a href="6133.php">Mark Borgerding: "Re: [OMPI users] how to make a process start and then join a MPI group"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am writing a code module that plugs into a larger application 
<br>
framework.  That framework loads my code module as a shared object.
<br>
So I do not control how the first process gets started, but I still want 
<br>
it to be able to start and participate in an MPI group.
<br>
<p>Here's roughly what I want to happen ( I think):
<br>
<p>framework app running (not under my control)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&gt; framework loads mycode.so shared object into its process
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&gt; mycode.so starts mpi programs on several hosts (e.g. 
<br>
via system call to mpiexec )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&gt; initial mycode.so process participates in the group he 
<br>
just started (e.g. he shows up in MPI_Comm_group, can use MPI_Send, 
<br>
MPI_Recv, etc. )
<br>
<p>Can this be done? 
<br>
<p>I am running under Centos 5.2
<br>
<p>Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Mark
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6131.php">vega lew: "[OMPI users] How to cease the process triggered by OPENMPI"</a>
<li><strong>Previous message:</strong> <a href="6129.php">Brock Palen: "Re: [OMPI users] Problem with WRF and pgi-7.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6133.php">Mark Borgerding: "Re: [OMPI users] how to make a process start and then join a MPI group"</a>
<li><strong>Reply:</strong> <a href="6133.php">Mark Borgerding: "Re: [OMPI users] how to make a process start and then join a MPI group"</a>
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
