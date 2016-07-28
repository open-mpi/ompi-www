<?
$subject_val = "[OMPI devel] Neighbor collectives with periodic Cartesian topologies of size one";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 26 12:03:44 2014" -->
<!-- isoreceived="20140826160344" -->
<!-- sent="Tue, 26 Aug 2014 19:03:24 +0300" -->
<!-- isosent="20140826160324" -->
<!-- name="Lisandro Dalcin" -->
<!-- email="dalcinl_at_[hidden]" -->
<!-- subject="[OMPI devel] Neighbor collectives with periodic Cartesian topologies of size one" -->
<!-- id="CAEcYPwC82emtzf-WwkvdD6TmSOHRfkb6OgR--Ch1KYM3S2jNuw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] Neighbor collectives with periodic Cartesian topologies of size one<br>
<strong>From:</strong> Lisandro Dalcin (<em>dalcinl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-26 12:03:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15714.php">Lisandro Dalcin: "[OMPI devel] malloc 0 warnings"</a>
<li><strong>Previous message:</strong> <a href="15712.php">Lisandro Dalcin: "[OMPI devel] MPI calls in callback functions during MPI_Finalize()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15722.php">Nathan Hjelm: "Re: [OMPI devel] Neighbor collectives with periodic Cartesian topologies of size one"</a>
<li><strong>Reply:</strong> <a href="15722.php">Nathan Hjelm: "Re: [OMPI devel] Neighbor collectives with periodic Cartesian topologies of size one"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15915.php">Nathan Hjelm: "Re: [OMPI devel] Neighbor collectives with periodic Cartesian topologies of size one"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I finally managed to track down some issues in mpi4py's test suite
<br>
using Open MPI 1.8+. The code below should be enough to reproduce the
<br>
problem. Run it under valgrind to make sense of my following
<br>
diagnostics.
<br>
<p>In this code I'm creating a 2D, periodic Cartesian topology out of
<br>
COMM_SELF. In this case, the process in COMM_SELF has 4 logical in/out
<br>
links to itself. So we have size=1 but indegree=outdegree=4. However,
<br>
in ompi/mca/coll/basic/coll_basic_module.c, &quot;size * 2&quot; request are
<br>
being allocated to manage communication:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;if (OMPI_COMM_IS_INTER(comm)) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;size = ompi_comm_remote_size(comm);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;} else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;size = ompi_comm_size(comm);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;basic_module-&gt;mccb_num_reqs = size * 2;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;basic_module-&gt;mccb_reqs = (ompi_request_t**)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;malloc(sizeof(ompi_request_t *) * basic_module-&gt;mccb_num_reqs);
<br>
<p>I guess you have to also special-case for topologies and allocate
<br>
indegree+outdegree requests (not sure about this number, just
<br>
guessing).
<br>
<p><p>#include &lt;stdio.h&gt;
<br>
#include &lt;mpi.h&gt;
<br>
<p>int main(int argc, char *argv[])
<br>
{
<br>
&nbsp;&nbsp;MPI_Comm comm;
<br>
&nbsp;&nbsp;int ndims = 2, dims[2] = {1,1}, periods[2] = {1,1};
<br>
&nbsp;&nbsp;int sendbuf = 7, recvbuf[5] = {0,0,0,0,0};
<br>
&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
<p>&nbsp;&nbsp;MPI_Cart_create(MPI_COMM_SELF, ndims, dims, periods, 0, &amp;comm);
<br>
<p>&nbsp;&nbsp;MPI_Neighbor_allgather(&amp;sendbuf, 1, MPI_INT,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;recvbuf,  1, MPI_INT,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;comm);
<br>
<p>&nbsp;&nbsp;{int i; for (i=0;i&lt;5;i++) printf(&quot;%d &quot;,recvbuf[i]); printf(&quot;\n&quot;);}
<br>
<p>&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;return 0;
<br>
}
<br>
<p><p><pre>
-- 
Lisandro Dalcin
============
Research Scientist
Computer, Electrical and Mathematical Sciences &amp; Engineering (CEMSE)
Numerical Porous Media Center (NumPor)
King Abdullah University of Science and Technology (KAUST)
<a href="http://numpor.kaust.edu.sa/">http://numpor.kaust.edu.sa/</a>
4700 King Abdullah University of Science and Technology
al-Khawarizmi Bldg (Bldg 1), Office # 4332
Thuwal 23955-6900, Kingdom of Saudi Arabia
<a href="http://www.kaust.edu.sa">http://www.kaust.edu.sa</a>
Office Phone: +966 12 808-0459
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15714.php">Lisandro Dalcin: "[OMPI devel] malloc 0 warnings"</a>
<li><strong>Previous message:</strong> <a href="15712.php">Lisandro Dalcin: "[OMPI devel] MPI calls in callback functions during MPI_Finalize()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15722.php">Nathan Hjelm: "Re: [OMPI devel] Neighbor collectives with periodic Cartesian topologies of size one"</a>
<li><strong>Reply:</strong> <a href="15722.php">Nathan Hjelm: "Re: [OMPI devel] Neighbor collectives with periodic Cartesian topologies of size one"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15915.php">Nathan Hjelm: "Re: [OMPI devel] Neighbor collectives with periodic Cartesian topologies of size one"</a>
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
