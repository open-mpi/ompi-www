<?
$subject_val = "[OMPI users] MPI adopt-a-group: a question and status report";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Aug  3 13:36:04 2008" -->
<!-- isoreceived="20080803173604" -->
<!-- sent="Sun, 03 Aug 2008 13:35:55 -0400" -->
<!-- isosent="20080803173555" -->
<!-- name="Mark Borgerding" -->
<!-- email="markb_at_[hidden]" -->
<!-- subject="[OMPI users] MPI adopt-a-group: a question and status report" -->
<!-- id="4895EC7B.2060408_at_3dB-Labs.com" -->
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
<strong>Subject:</strong> [OMPI users] MPI adopt-a-group: a question and status report<br>
<strong>From:</strong> Mark Borgerding (<em>markb_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-03 13:35:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6254.php">Pete Schmitt: "[OMPI users] mpirun on 8-way node with rsh"</a>
<li><strong>Previous message:</strong> <a href="6252.php">Ralph Castain: "[OMPI users] Fwd:  Getting default hostfile on Open MPI 1.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6265.php">Jeff Squyres: "Re: [OMPI users] MPI adopt-a-group: a question and status report"</a>
<li><strong>Reply:</strong> <a href="6265.php">Jeff Squyres: "Re: [OMPI users] MPI adopt-a-group: a question and status report"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello boys and girls.  I just wanted to drop a line and give you an update.
<br>
<p>First of all, my simple question:
<br>
In what files can I find the source code for &quot;mca_oob.oob_send&quot; and 
<br>
&quot;mca_oob.oob_recv&quot;?  I'm having a hard time following the initialization 
<br>
code that populates the struct of callbacks.
<br>
<p>Next, the context of the question:
<br>
I've been trying to find a way to make a plain old process start and 
<br>
then participate in an MPI Group spread across a cluster.  Let me try to 
<br>
use the local dialect and express my goal in terms I am likely to 
<br>
misuse: I want to make a singleton MPI process spawn and establish an 
<br>
intercommunicator with another MPI world.
<br>
<p>Here's the list of things that have not worked:
<br>
<p>Using MPI_Comm_spawn -- I've been told this is working in the 1.3 cvs 
<br>
snapshots, but not in any stable release.
<br>
The symptom is that the call to MPI_Comm_spawn complains about not 
<br>
having a hostfile.  For the full history, see ompi-users thread &quot;How to 
<br>
specify hosts for MPI_Comm_spawn&quot; for details.
<br>
<p>Forking the parent process *before* it enters any MPI calls ( to 
<br>
hopefully avoid environmental pitfalls Jeff Squyres warned of).
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Parent process calls MPI_Init to become the MPI singleton, then 
<br>
tries to establish an intercommunicator with the MPI group that is 
<br>
getting spawned at the same time.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Forked child processes overlays the process of mpirun via execlp to 
<br>
start a &quot;normal&quot;  MPI group. 
<br>
I've tried two different methods for establishing the intercomm. Both 
<br>
methods hang indefinitely and use lots of cpu doing nothing. 
<br>
<p>Fork Method 1: MPI_Open_port+ MPI_Comm_accept on one side, 
<br>
MPI_Comm_connect on the other.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;The two sides hang in the MPI_Comm_accept and MPI_Comm_connect. I 
<br>
did not pursue it deeper than that.
<br>
<p>Fork Method 2: tcp socket establishment, followed by MPI_Comm_join on 
<br>
both sides.
<br>
&nbsp;Both sides hang in the call to MPI_Comm_join.  Upon further inspection 
<br>
and code-hacking, I've determined they can successfully trade names 
<br>
&quot;0.0.0&quot; and &quot;0.1.0&quot; and both sides then call ompi_comm_connect_accept.  
<br>
Inside omp_comm_connect_accept, both sides call orte_rml.send_buffer; 
<br>
one side finishes the call, while the other gets blocked inside oob_send.
<br>
The side that did not get blocked moves on to call orte_rml.recv_buffer 
<br>
.  It gets blocked inside oob_recv.
<br>
<p><p>OOB == Out of band sockets?  If so, why?
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6254.php">Pete Schmitt: "[OMPI users] mpirun on 8-way node with rsh"</a>
<li><strong>Previous message:</strong> <a href="6252.php">Ralph Castain: "[OMPI users] Fwd:  Getting default hostfile on Open MPI 1.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6265.php">Jeff Squyres: "Re: [OMPI users] MPI adopt-a-group: a question and status report"</a>
<li><strong>Reply:</strong> <a href="6265.php">Jeff Squyres: "Re: [OMPI users] MPI adopt-a-group: a question and status report"</a>
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
