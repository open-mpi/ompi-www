<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Oct 28 18:52:18 2006" -->
<!-- isoreceived="20061028225218" -->
<!-- sent="Sat, 28 Oct 2006 18:51:59 -0400" -->
<!-- isosent="20061028225159" -->
<!-- name="Tony Ladd" -->
<!-- email="ladd_at_[hidden]" -->
<!-- subject="[OMPI users] OMPI Collectives" -->
<!-- id="03a801c6fae3$ad69f380$ca79e30a_at_ladd02" -->
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
<strong>Date:</strong> 2006-10-28 18:51:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2081.php">Gleb Natapov: "Re: [OMPI users] Fault Tolerance &amp; Behavior"</a>
<li><strong>Previous message:</strong> <a href="2079.php">openmpi-user_at_[hidden]: "[OMPI users] Xgrid and Kerberos"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/11/2101.php">George Bosilca: "Re: [OMPI users] OMPI Collectives"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/11/2101.php">George Bosilca: "Re: [OMPI users] OMPI Collectives"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George
<br>
<p>Thanks for the references. However, I was not able to figure out if it what
<br>
I am asking is so trivial it is simply passed over or so subtle that its
<br>
been overlooked (I suspect the former). The binary tree algorithm in
<br>
MPI_Allreduce takes a tiume proportional to 2*N*log_2M where N is the vector
<br>
length and M is the number of processes. There is a divide and conquer
<br>
strategy
<br>
(<a href="http://www.hlrs.de/organization/par/services/models/mpi/myreduce.html">http://www.hlrs.de/organization/par/services/models/mpi/myreduce.html</a>) that
<br>
mpich uses to do a MPI_Reduce in a time proportional to N. Is this algorithm
<br>
or something equivalent in OpenMPI at present? If so how do I turn it on?
<br>
<p>I also found that OpenMPI is sometimes very slow on MPI_Allreduce using TCP.
<br>
Things are OK up to 16 processes but at 24 the rates (Message length divided
<br>
by time) are as follows:
<br>
<p>Message size (Kbytes)  		   Throughput (Mbytes/sec)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;M=24		M=32		M=48
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1				1.38		1.30		1.09
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2				2.28		1.94		1.50
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4				2.92		2.35		1.73
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8				3.56		2.81		1.99
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;16				3.97		1.94		0.12
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;32				0.34		0.24		0.13
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;64				3.07		2.33		1.57
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;128				3.70		2.80		1.89
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;256				4.10		3.10		2.08
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;512				4.19		3.28		2.08
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1024				4.36		3.36		2.17
<br>
<p>Around 16-32KBytes there is a pronouced slowdown-roughly a factor of 10,
<br>
which seems too much. Any idea whats going on?
<br>
<p>Tony
<br>
<p>-------------------------------
<br>
Tony Ladd
<br>
Chemical Engineering
<br>
University of Florida
<br>
PO Box 116005
<br>
Gainesville, FL 32611-6005
<br>
<p>Tel: 352-392-6509
<br>
FAX: 352-392-9513
<br>
Email: tladd_at_[hidden]
<br>
Web: <a href="http://ladd.che.ufl.edu">http://ladd.che.ufl.edu</a> 
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2081.php">Gleb Natapov: "Re: [OMPI users] Fault Tolerance &amp; Behavior"</a>
<li><strong>Previous message:</strong> <a href="2079.php">openmpi-user_at_[hidden]: "[OMPI users] Xgrid and Kerberos"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/11/2101.php">George Bosilca: "Re: [OMPI users] OMPI Collectives"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/11/2101.php">George Bosilca: "Re: [OMPI users] OMPI Collectives"</a>
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
