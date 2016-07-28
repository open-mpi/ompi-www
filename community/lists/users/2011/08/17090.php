<?
$subject_val = "[OMPI users] poll taking too long in open-mpi";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 23 16:24:31 2011" -->
<!-- isoreceived="20110823202431" -->
<!-- sent="Tue, 23 Aug 2011 21:24:26 +0100" -->
<!-- isosent="20110823202426" -->
<!-- name="Dick Kachuma" -->
<!-- email="dickkachuma_at_[hidden]" -->
<!-- subject="[OMPI users] poll taking too long in open-mpi" -->
<!-- id="CAL0zDUMLYL83Buq-Pa4eGWQ2-R3rjZojFa6HXREXtNoweor11Q_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] poll taking too long in open-mpi<br>
<strong>From:</strong> Dick Kachuma (<em>dickkachuma_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-23 16:24:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17091.php">srinivas kundaram: "[OMPI users] Related to project ideas in OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="17089.php">Jeff Squyres: "Re: [OMPI users] MPI defined macro"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17109.php">Eugene Loh: "Re: [OMPI users] poll taking too long in open-mpi"</a>
<li><strong>Reply:</strong> <a href="17109.php">Eugene Loh: "Re: [OMPI users] poll taking too long in open-mpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have used gprof to profile a program that uses openmpi. The result
<br>
shows that the code spends a long time in poll (37% on 8 cores, 50% on
<br>
16 and 85% on 32). I was wondering if there is anything I can do to
<br>
reduce the time spent in poll. I cannot determine the number of calls
<br>
made to poll and exactly where they are. The bulk of my code uses
<br>
exclusively MPI_Ssend for the send and MPI_Irecv and MPI_Wait for the
<br>
receive. For instance, would there be any gain expected if I switch
<br>
from MPI_Ssend to MPI_Send? Alternatively would there be any gain in
<br>
switching to MPI_Isend/MPI_Recv instead of MPI_Ssend/MPI_Irecv?
<br>
<p>Some details:
<br>
open-mpi 1.4.3
<br>
gcc 4.1.2
<br>
Redhat EL5 x86_64
<br>
I am using the sm and tcp btls on nodes with 8 cores (2 quad cores)
<br>
each (so 4 nodes for 32 cores).
<br>
Intel Xeon 2.7GHz
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17091.php">srinivas kundaram: "[OMPI users] Related to project ideas in OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="17089.php">Jeff Squyres: "Re: [OMPI users] MPI defined macro"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17109.php">Eugene Loh: "Re: [OMPI users] poll taking too long in open-mpi"</a>
<li><strong>Reply:</strong> <a href="17109.php">Eugene Loh: "Re: [OMPI users] poll taking too long in open-mpi"</a>
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
