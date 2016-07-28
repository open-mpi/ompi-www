<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Oct 26 18:04:15 2006" -->
<!-- isoreceived="20061026220415" -->
<!-- sent="Thu, 26 Oct 2006 18:03:55 -0400" -->
<!-- isosent="20061026220355" -->
<!-- name="Tony Ladd" -->
<!-- email="ladd_at_[hidden]" -->
<!-- subject="[OMPI users] OMPI collectives" -->
<!-- id="034201c6f94a$a12b8d80$ca79e30a_at_ladd02" -->
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
<strong>From:</strong> Tony Ladd (<em>ladd_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-26 18:03:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2063.php">Durga Choudhury: "Re: [OMPI users] Fault Tolerance &amp; Behavior"</a>
<li><strong>Previous message:</strong> <a href="2061.php">Ralph Castain: "Re: [OMPI users] mpirun crashes when compiled in 64-bit mode on Apple Mac Pro"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2064.php">George Bosilca: "Re: [OMPI users] OMPI collectives"</a>
<li><strong>Reply:</strong> <a href="2064.php">George Bosilca: "Re: [OMPI users] OMPI collectives"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
1) I think OpenMPI does not use optimal algorithms for collectives. But
<br>
neither does LAM. For example the MPI_Allreduce scales as log_2 N where N is
<br>
the number of processors. MPICH uses optimized collectives and the
<br>
MPI_Allreduce is essentially independent of N. Unfortunately MPICH has never
<br>
had a good TCP interface so its typically slower overall than LAM or
<br>
OpenMPI. Are there plans to develop optimized collectives for OpenMPI; if
<br>
so, is there a timeline
<br>
<p>2) I have found an additional problem in OpenMPI over TCP. MPI_AllReduce can
<br>
run extremely slowly on large numbers of processors. Measuring throughput
<br>
(message size / time) for 48 nodes with 16KByte messages (for example) I get
<br>
only 0.12MBytes/sec. The same code with LAM gets 5.3MBytes/sec which is more
<br>
reasonable. The problem seems to arise for a) more than 16 nodes and b)
<br>
message sizes in the range 16-32KBytes. Normally this is the optimum size so
<br>
its odd. Other message sizes are closer to LAM (though typically a little
<br>
slower). I have run these tests with my own network test, but I can run IMB
<br>
if necessary.
<br>
<p>Tony
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2063.php">Durga Choudhury: "Re: [OMPI users] Fault Tolerance &amp; Behavior"</a>
<li><strong>Previous message:</strong> <a href="2061.php">Ralph Castain: "Re: [OMPI users] mpirun crashes when compiled in 64-bit mode on Apple Mac Pro"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2064.php">George Bosilca: "Re: [OMPI users] OMPI collectives"</a>
<li><strong>Reply:</strong> <a href="2064.php">George Bosilca: "Re: [OMPI users] OMPI collectives"</a>
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
