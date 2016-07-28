<?
$subject_val = "[OMPI users] MPI_IN_PLACE variant of MPI_Reduce";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  9 23:47:15 2009" -->
<!-- isoreceived="20091110044715" -->
<!-- sent="Mon, 9 Nov 2009 20:47:11 -0800" -->
<!-- isosent="20091110044711" -->
<!-- name="Martin Siegert" -->
<!-- email="siegert_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_IN_PLACE variant of MPI_Reduce" -->
<!-- id="20091110044711.GA5499_at_stikine.its.sfu.ca" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] MPI_IN_PLACE variant of MPI_Reduce<br>
<strong>From:</strong> Martin Siegert (<em>siegert_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-09 23:47:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11110.php">Paul Kapinos: "Re: [OMPI users] an environment variable with same meaning than the -x option of mpiexec"</a>
<li><strong>Previous message:</strong> <a href="11108.php">Martin Siegert: "Re: [OMPI users] sending/receiving large buffers"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I am confused about the syntax of the &quot;in place&quot; variant of
<br>
MPI_Reduce, in particular about the significance of the recvbuf
<br>
for the non-root processes. I.e., is the following legal?
<br>
<p>buf = (double *)malloc(l*sizeof(double);
<br>
random(buf, l); /* fill buf with something */
<br>
if (myid == 0) {
<br>
&nbsp;&nbsp;&nbsp;MPI_Reduce(MPI_IN_PLACE, buf, l, MPI_DOUBLE, MPI_SUM, 0, MPI_COMM_WORLD);
<br>
} else {
<br>
&nbsp;&nbsp;&nbsp;MPI_Reduce(buf, NULL, l, MPI_DOUBLE, MPI_SUM, 0, MPI_COMM_WORLD);
<br>
}
<br>
<p>This appears to violate the standard:
<br>
<a href="http://www.mpi-forum.org/docs/mpi22-report/node103.htm#Node103">http://www.mpi-forum.org/docs/mpi22-report/node103.htm#Node103</a>
<br>
&quot;The routine is called by all group members using the same arguments for
<br>
&nbsp;count, datatype, op, root and  comm. Thus, all processes provide input
<br>
&nbsp;buffers and output buffers of the same length, with elements of the
<br>
&nbsp;same type.&quot;
<br>
<p>However, this &quot;same length&quot; requirement is already violated at the root
<br>
process where I can specify MPI_IN_PLACE. Unfortunately, the standard
<br>
says nothing about the other processes in this case. Do I need a valid
<br>
receive buffer there?
<br>
<p>Cheers,
<br>
Martin
<br>
<p><pre>
-- 
Martin Siegert
Head, Research Computing
WestGrid Site Lead
IT Services                                phone: 778 782-4691
Simon Fraser University                    fax:   778 782-4242
Burnaby, British Columbia                  email: siegert_at_[hidden]
Canada  V5A 1S6
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11110.php">Paul Kapinos: "Re: [OMPI users] an environment variable with same meaning than the -x option of mpiexec"</a>
<li><strong>Previous message:</strong> <a href="11108.php">Martin Siegert: "Re: [OMPI users] sending/receiving large buffers"</a>
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
