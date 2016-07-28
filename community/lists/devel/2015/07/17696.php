<?
$subject_val = "[OMPI devel] malloc(0) warning with 1.8.7";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 24 11:38:57 2015" -->
<!-- isoreceived="20150724153857" -->
<!-- sent="Fri, 24 Jul 2015 18:38:35 +0300" -->
<!-- isosent="20150724153835" -->
<!-- name="Lisandro Dalcin" -->
<!-- email="dalcinl_at_[hidden]" -->
<!-- subject="[OMPI devel] malloc(0) warning with 1.8.7" -->
<!-- id="CAEcYPwCCfZV1j1XqE_qniXrhF_YPKqeA3fwYx7QxyoMdKDyPtg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] malloc(0) warning with 1.8.7<br>
<strong>From:</strong> Lisandro Dalcin (<em>dalcinl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-24 11:38:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17697.php">Howard Pritchard: "Re: [OMPI devel] 1.10.0rc2"</a>
<li><strong>Previous message:</strong> <a href="17695.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.10.0rc2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17711.php">Gilles Gouaillardet: "Re: [OMPI devel] malloc(0) warning with 1.8.7"</a>
<li><strong>Reply:</strong> <a href="17711.php">Gilles Gouaillardet: "Re: [OMPI devel] malloc(0) warning with 1.8.7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Using a debug build of 1.8.7, I'm still getting this malloc(0) warning:
<br>
<p>malloc debug: Request for 0 bytes (coll_libnbc_ireduce_scatter_block.c, 67)
<br>
<p>The simple code below should reproduce it:
<br>
<p>$ cat ireduce_scatter_block.c
<br>
#include &lt;mpi.h&gt;
<br>
int main(int argc, char *argv[])
<br>
{
<br>
&nbsp;&nbsp;MPI_Request request;
<br>
&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;MPI_Ireduce_scatter_block(NULL, NULL, 0, MPI_INT,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_SUM, MPI_COMM_SELF, &amp;request);
<br>
&nbsp;&nbsp;MPI_Wait(&amp;request, MPI_STATUS_IGNORE);
<br>
&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;return 0;
<br>
}
<br>
<p>$ mpicc ireduce_scatter_block.c
<br>
$ mpiexec -n 1 ./a.out
<br>
malloc debug: Request for 0 bytes (coll_libnbc_ireduce_scatter_block.c, 67)
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
<li><strong>Next message:</strong> <a href="17697.php">Howard Pritchard: "Re: [OMPI devel] 1.10.0rc2"</a>
<li><strong>Previous message:</strong> <a href="17695.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.10.0rc2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17711.php">Gilles Gouaillardet: "Re: [OMPI devel] malloc(0) warning with 1.8.7"</a>
<li><strong>Reply:</strong> <a href="17711.php">Gilles Gouaillardet: "Re: [OMPI devel] malloc(0) warning with 1.8.7"</a>
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
