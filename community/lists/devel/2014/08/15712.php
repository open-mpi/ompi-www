<?
$subject_val = "[OMPI devel] MPI calls in callback functions during MPI_Finalize()";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 26 11:20:28 2014" -->
<!-- isoreceived="20140826152028" -->
<!-- sent="Tue, 26 Aug 2014 18:20:06 +0300" -->
<!-- isosent="20140826152006" -->
<!-- name="Lisandro Dalcin" -->
<!-- email="dalcinl_at_[hidden]" -->
<!-- subject="[OMPI devel] MPI calls in callback functions during MPI_Finalize()" -->
<!-- id="CAEcYPwA5mBvT=-tt48ajVpuD9oOCep-q_mgvHLetzjiW3BU1dA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] MPI calls in callback functions during MPI_Finalize()<br>
<strong>From:</strong> Lisandro Dalcin (<em>dalcinl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-26 11:20:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15713.php">Lisandro Dalcin: "[OMPI devel] Neighbor collectives with periodic Cartesian topologies of size one"</a>
<li><strong>Previous message:</strong> <a href="15711.php">Shamis, Pavel: "Re: [OMPI devel] coll/ml without hwloc (?)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15717.php">George Bosilca: "Re: [OMPI devel] MPI calls in callback functions during MPI_Finalize()"</a>
<li><strong>Reply:</strong> <a href="15717.php">George Bosilca: "Re: [OMPI devel] MPI calls in callback functions during MPI_Finalize()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Another issue while testing 1.8.2 (./configure --enable-debug
<br>
--enable-mem-debug).
<br>
<p>Please look at the following code. I'm duplicating COMM_WORLD and
<br>
composing the dupe on it. The attribute free function is written to
<br>
Comm_free the duped comm and deallocate memory. However, the run fails
<br>
with the error you can see at the end.
<br>
<p>IMHO, this is a bug. This way of managing duplicated communicator
<br>
contexts is quite common in parallel libraries. Moreover, In the MPI 3
<br>
standard, page 364, lines 11 and 12, it says:
<br>
&quot;&quot;&quot;
<br>
For example, MPI is &#226;&#128;&#156;active&#226;&#128;&#157; in callback functions that are invoked
<br>
during MPI_FINALIZE.
<br>
&quot;&quot;&quot;
<br>
<p>Interestingly, if I replace WORLD -&gt; SELF in the code below, I do not
<br>
get the error.
<br>
<p>$ cat finalize.c
<br>
#include &lt;stdlib.h&gt;
<br>
#include &lt;mpi.h&gt;
<br>
<p>static int free_comm(MPI_Comm comm, int k, void *v, void *xs)
<br>
{
<br>
&nbsp;&nbsp;MPI_Comm_free((MPI_Comm *)v);
<br>
&nbsp;&nbsp;free(v);
<br>
&nbsp;&nbsp;return MPI_SUCCESS;
<br>
}
<br>
<p><p>int main(int argc, char *argv[])
<br>
{
<br>
&nbsp;&nbsp;int keyval;
<br>
&nbsp;&nbsp;MPI_Comm base,*comm;
<br>
&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
<p>&nbsp;&nbsp;MPI_Comm_create_keyval(MPI_COMM_NULL_COPY_FN, free_comm, &amp;keyval, NULL);
<br>
<p>&nbsp;&nbsp;base = MPI_COMM_WORLD;
<br>
&nbsp;&nbsp;comm = (MPI_Comm *)malloc(sizeof(MPI_Comm));
<br>
&nbsp;&nbsp;MPI_Comm_dup(base, comm);
<br>
&nbsp;&nbsp;MPI_Comm_set_attr(base, keyval, comm);
<br>
<p>&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;return 0;
<br>
}
<br>
<p>$ mpicc finalize.c
<br>
$ ./a.out
<br>
*** The MPI_Comm_free() function was called after MPI_FINALIZE was invoked.
<br>
*** This is disallowed by the MPI standard.
<br>
*** Your MPI job will now abort.
<br>
[kw2060:14603] Local abort after MPI_FINALIZE completed successfully;
<br>
not able to aggregate error messages, and not able to guarantee that
<br>
all other processes were killed!
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
<li><strong>Next message:</strong> <a href="15713.php">Lisandro Dalcin: "[OMPI devel] Neighbor collectives with periodic Cartesian topologies of size one"</a>
<li><strong>Previous message:</strong> <a href="15711.php">Shamis, Pavel: "Re: [OMPI devel] coll/ml without hwloc (?)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15717.php">George Bosilca: "Re: [OMPI devel] MPI calls in callback functions during MPI_Finalize()"</a>
<li><strong>Reply:</strong> <a href="15717.php">George Bosilca: "Re: [OMPI devel] MPI calls in callback functions during MPI_Finalize()"</a>
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
