<?
$subject_val = "[OMPI users] random error : btl_tcp_endpoint.c:636:mca_btl_tcp_endpoint_complete_connect connection refused (111)";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Oct 30 02:26:46 2010" -->
<!-- isoreceived="20101030062646" -->
<!-- sent="Sat, 30 Oct 2010 11:56:01 +0530" -->
<!-- isosent="20101030062601" -->
<!-- name="Sudarshan Wadkar" -->
<!-- email="wadkar_at_[hidden]" -->
<!-- subject="[OMPI users] random error : btl_tcp_endpoint.c:636:mca_btl_tcp_endpoint_complete_connect connection refused (111)" -->
<!-- id="AANLkTikBK16YxkhFAD0cBYJfD41YiUrwjyv26uj7Ke3x_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] random error : btl_tcp_endpoint.c:636:mca_btl_tcp_endpoint_complete_connect connection refused (111)<br>
<strong>From:</strong> Sudarshan Wadkar (<em>wadkar_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-30 02:26:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/11/14664.php">Jack Bryan: "[OMPI users] message truncated error"</a>
<li><strong>Previous message:</strong> <a href="14662.php">Ashley Pittman: "Re: [OMPI users] open MPI please recommend a debugger for open MPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello OpenMPI list !
<br>
I am trying to run &quot;GROMACS&quot; with openmpi 1.5 compiled from source
<br>
with Intel compilers using Torque/Maui scheduler
<br>
I am getting following error. The error indicates problem with OpenMPI
<br>
hence I am posting my query here.
<br>
<p>[compute-0-4.local][[19774,1],0][btl_tcp_endpoint.c:636:mca_btl_tcp_endpoint_complete_connect]
<br>
connect() to 192.168.6.123 failed: Connection refused (111)
<br>
<p>The job hangs (no output for a long time). The strange thing about
<br>
this error is that I get this error on random occasions. Sometimes the
<br>
job finishes without any error messages, sometimes this error shows up
<br>
in middle of Gromacs' STDERR stream, and sometimes I only get
<br>
following -
<br>
<p>NNODES=4, MYRANK=0, HOSTNAME=compute-0-4.local
<br>
NODEID=0 argc=12
<br>
[compute-0-4.local][[19774,1],0][btl_tcp_endpoint.c:636:mca_btl_tcp_endpoint_complete_connect]
<br>
connect() to 192.168.6.123 failed: Connection refused (111)
<br>
NNODES=4, MYRANK=1, HOSTNAME=compute-0-4.local
<br>
NNODES=4, MYRANK=2, HOSTNAME=compute-0-130.local
<br>
NODEID=2 argc=12
<br>
NNODES=4, MYRANK=3, HOSTNAME=compute-0-130.local
<br>
NODEID=1 argc=12
<br>
NODEID=3 argc=12
<br>
<p>I can attach full logs of successful jobs, but it doesn't contain any
<br>
OpenMPI related messages.
<br>
<p>When I searched for
<br>
btl_tcp_endpoint.c:636:mca_btl_tcp_endpoint_complete_connect , I found
<br>
following link -
<br>
<a href="http://docs.notur.no/uit/stallo_documentation/error/mpi-init-failed">http://docs.notur.no/uit/stallo_documentation/error/mpi-init-failed</a>
<br>
which says &quot;This is probably due to a weakness of the system when the
<br>
job is assigned to nodes with and without infiniband at the same time&quot;
<br>
However, our system doesn't have any infiniband fabric. We do have two
<br>
GIGE networks eth0 and eth1 both of which are working fine.
<br>
<p>Please help.
<br>
<p>Thank you
<br>
<p>-
<br>
Sudarshan Wadkar
<br>
System Administrator
<br>
HPCC, IITB
<br>
<p><pre>
-- 
~$udhi
&quot;Success is getting what you want. Happiness is wanting what you get.&quot;
- Dale Carnegie
&quot;It's always our decision who we are&quot;
- Robert Solomon in Waking Life
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/11/14664.php">Jack Bryan: "[OMPI users] message truncated error"</a>
<li><strong>Previous message:</strong> <a href="14662.php">Ashley Pittman: "Re: [OMPI users] open MPI please recommend a debugger for open MPI"</a>
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
