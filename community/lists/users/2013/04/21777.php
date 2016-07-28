<?
$subject_val = "[OMPI users] Open MPI 1.7.1 and nonblocking bcast questions";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 24 07:48:34 2013" -->
<!-- isoreceived="20130424114834" -->
<!-- sent="Wed, 24 Apr 2013 13:49:36 +0200" -->
<!-- isosent="20130424114936" -->
<!-- name="Christoph Niethammer" -->
<!-- email="niethammer_at_[hidden]" -->
<!-- subject="[OMPI users] Open MPI 1.7.1 and nonblocking bcast questions" -->
<!-- id="201304241349.38192.niethammer_at_hlrs.de" -->
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
<strong>Subject:</strong> [OMPI users] Open MPI 1.7.1 and nonblocking bcast questions<br>
<strong>From:</strong> Christoph Niethammer (<em>niethammer_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-24 07:49:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21778.php">Derbunovich Andrei: "Re: [OMPI users] OpenMPI at scale on Cray XK7"</a>
<li><strong>Previous message:</strong> <a href="21776.php">Ralph Castain: "Re: [OMPI users] OpenMPI at scale on Cray XK7"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>Currently I am investigating the new nonblocking collectives introduced in 
<br>
MPI-3 which are implemented in Open MPI 1.7.1. As a first try I took 
<br>
MPI_Ibcast.
<br>
<p>According to the MPI-3 spec my understanding is that MPI_Ibcast + MPI_Wait 
<br>
should be equivalent to a MPI_Bcast - except, that the algorithms used within 
<br>
the the MPI implementation may differe.
<br>
<p>I wrote a simple example code:
<br>
<p>#include &lt;stdio.h&gt;
<br>
#include &lt;mpi.h&gt;
<br>
<p>int main(int argc, char *argv[9]) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm comm = MPI_COMM_WORLD /* MPI_COMM_SELF */;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int root = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int array[100];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Request request;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Status status;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Ibcast(array, 100, MPI_INT, root, comm, &amp;request);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Wait(&amp;request, &amp;status /* MPI_STATUS_IGNORE */);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;int count = -1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Get_count(&amp;status, MPI_INT,  &amp;count);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;%d - %d\n&quot;, 100, count);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
<p>I run the example with &quot;mpirun -np 2 &lt;app&gt;&quot;
<br>
<p>And here the questions:
<br>
1) Is it allowed to use a status in the wait for this nonblocking bcast? The 
<br>
spec does only show MPI_STATUS_IGNORE in the examples. And what should be the 
<br>
count returned by Get_count when applied to the final status? Using the 
<br>
MPI_Bcast does not provide to posibility to get this info at all. 
<br>
The example output from all ranks is  &quot;100 - 0&quot; - I would have expecte &quot;100 - 
<br>
100&quot;. Is this a bug in Open MPI 1.7.1?
<br>
<p>2) When using MPI_COMM_SELF the code deadlocks while it does not do so when 
<br>
using a normal MPI_Bcast. I did not have a look inside the Open MPI code yet 
<br>
but I expect two different algorithms for MPI_Ibcast and MPI_Bcast where the 
<br>
former may have a problem.
<br>
<p>Thanks in advance for your feedback.
<br>
<p>Best regards
<br>
Christoph
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21777/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21778.php">Derbunovich Andrei: "Re: [OMPI users] OpenMPI at scale on Cray XK7"</a>
<li><strong>Previous message:</strong> <a href="21776.php">Ralph Castain: "Re: [OMPI users] OpenMPI at scale on Cray XK7"</a>
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
