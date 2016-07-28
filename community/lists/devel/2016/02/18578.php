<?
$subject_val = "[OMPI devel] MPI_Get_address() with MPI_BOTTOM";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 11 03:16:04 2016" -->
<!-- isoreceived="20160211081604" -->
<!-- sent="Thu, 11 Feb 2016 11:15:43 +0300" -->
<!-- isosent="20160211081543" -->
<!-- name="Lisandro Dalcin" -->
<!-- email="dalcinl_at_[hidden]" -->
<!-- subject="[OMPI devel] MPI_Get_address() with MPI_BOTTOM" -->
<!-- id="CAEcYPwA79hXhiA--E+1ha72ZX1QdLbFKNNY5oFzJQkNpHaY8Aw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] MPI_Get_address() with MPI_BOTTOM<br>
<strong>From:</strong> Lisandro Dalcin (<em>dalcinl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-11 03:15:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18579.php">Gilles Gouaillardet: "Re: [OMPI devel] Error using MPI_Pack_external / MPI_Unpack_external"</a>
<li><strong>Previous message:</strong> <a href="18577.php">Michael Rezny: "Re: [OMPI devel] Error using MPI_Pack_external / MPI_Unpack_external"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18584.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] MPI_Get_address() with MPI_BOTTOM"</a>
<li><strong>Reply:</strong> <a href="18584.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] MPI_Get_address() with MPI_BOTTOM"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
After writing some tests, I discovered Open MPI's MPI_Get_address()
<br>
fails if fed with MPI_BOTTOM. Is this on purpose of just an error
<br>
checking oversight?
<br>
<p><p>$ cat get_address.c
<br>
#include &lt;mpi.h&gt;
<br>
int main(int argc, char *argv[])
<br>
{
<br>
&nbsp;&nbsp;MPI_Aint addr;
<br>
&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;MPI_Get_address(MPI_BOTTOM, &amp;addr);
<br>
&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;return 0;
<br>
}
<br>
$ mpicc get_address.c
<br>
$ ./a.out
<br>
[kw2060:18815] *** An error occurred in MPI_Get_address
<br>
[kw2060:18815] *** reported by process [140737192329217,140655883976704]
<br>
[kw2060:18815] *** on communicator MPI_COMM_WORLD
<br>
[kw2060:18815] *** MPI_ERR_ARG: invalid argument of some other kind
<br>
[kw2060:18815] *** MPI_ERRORS_ARE_FATAL (processes in this
<br>
communicator will now abort,
<br>
[kw2060:18815] ***    and potentially your MPI job)
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
<li><strong>Next message:</strong> <a href="18579.php">Gilles Gouaillardet: "Re: [OMPI devel] Error using MPI_Pack_external / MPI_Unpack_external"</a>
<li><strong>Previous message:</strong> <a href="18577.php">Michael Rezny: "Re: [OMPI devel] Error using MPI_Pack_external / MPI_Unpack_external"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18584.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] MPI_Get_address() with MPI_BOTTOM"</a>
<li><strong>Reply:</strong> <a href="18584.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] MPI_Get_address() with MPI_BOTTOM"</a>
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
