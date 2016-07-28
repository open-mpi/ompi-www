<?
$subject_val = "[OMPI devel] Bug";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jun 20 12:46:54 2015" -->
<!-- isoreceived="20150620164654" -->
<!-- sent="Sat, 20 Jun 2015 11:46:33 -0500" -->
<!-- isosent="20150620164633" -->
<!-- name="Lisandro Dalcin" -->
<!-- email="dalcinl_at_[hidden]" -->
<!-- subject="[OMPI devel] Bug" -->
<!-- id="CAEcYPwBei5tFjPkZ732-==sz7t_PQtPSscUhcSdBVFYbtufwMA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] Bug<br>
<strong>From:</strong> Lisandro Dalcin (<em>dalcinl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-20 12:46:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17510.php">Jeff Squyres (jsquyres): "[OMPI devel] v2.0 branch has been created"</a>
<li><strong>Previous message:</strong> <a href="17508.php">Lisandro Dalcin: "Re: [OMPI devel] Build regression: VampirTrace libraries built with debug symbols and no optimization"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17513.php">Gilles Gouaillardet: "Re: [OMPI devel] Bug"</a>
<li><strong>Reply:</strong> <a href="17513.php">Gilles Gouaillardet: "Re: [OMPI devel] Bug"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is with 1.8.6. Igatherv with zero counts and SIGNED_CHAR aborts
<br>
the process.
<br>
<p>$ cat igatherv.c
<br>
#include &lt;mpi.h&gt;
<br>
int main(int argc, char *argv[])
<br>
{
<br>
&nbsp;&nbsp;MPI_Request request;
<br>
&nbsp;&nbsp;signed char sbuf=0,rbuf=0;
<br>
&nbsp;&nbsp;int rcounts[] = {0};
<br>
&nbsp;&nbsp;int rdispl[] = {0};
<br>
&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;MPI_Igatherv(&amp;sbuf, 0, MPI_SIGNED_CHAR,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;rbuf, rcounts, rdispl, MPI_SIGNED_CHAR,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0, MPI_COMM_SELF, &amp;request);
<br>
&nbsp;&nbsp;MPI_Wait(&amp;request, MPI_STATUS_IGNORE);
<br>
&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;return 0;
<br>
}
<br>
<p>$ mpicc igatherv.c
<br>
$ ./a.out
<br>
MPI Error in MPI_Pack_size() (0:0)
<br>
Error in NBC_Copy() (49)
<br>
[kl-13999:50786] *** An error occurred in MPI_Igatherv
<br>
[kl-13999:50786] *** reported by process [1872822273,0]
<br>
[kl-13999:50786] *** on communicator MPI_COMM_SELF
<br>
[kl-13999:50786] *** MPI_ERR_SIZE: invalid size
<br>
[kl-13999:50786] *** MPI_ERRORS_ARE_FATAL (processes in this
<br>
communicator will now abort,
<br>
[kl-13999:50786] ***    and potentially your MPI job)
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
<li><strong>Next message:</strong> <a href="17510.php">Jeff Squyres (jsquyres): "[OMPI devel] v2.0 branch has been created"</a>
<li><strong>Previous message:</strong> <a href="17508.php">Lisandro Dalcin: "Re: [OMPI devel] Build regression: VampirTrace libraries built with debug symbols and no optimization"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17513.php">Gilles Gouaillardet: "Re: [OMPI devel] Bug"</a>
<li><strong>Reply:</strong> <a href="17513.php">Gilles Gouaillardet: "Re: [OMPI devel] Bug"</a>
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
