<?
$subject_val = "[OMPI devel] MPI_Mrecv(..., MPI_STATUS_IGNORE) in Open MPI 1.7.1";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  1 04:57:08 2013" -->
<!-- isoreceived="20130501085708" -->
<!-- sent="Wed, 1 May 2013 11:56:24 +0300" -->
<!-- isosent="20130501085624" -->
<!-- name="Lisandro Dalcin" -->
<!-- email="dalcinl_at_[hidden]" -->
<!-- subject="[OMPI devel] MPI_Mrecv(..., MPI_STATUS_IGNORE) in Open MPI 1.7.1" -->
<!-- id="CAEcYPwCXnkFYqPZ-jS9vB2-7KsKjB2ZKEkJbo1aCA3EwZiZ0YQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] MPI_Mrecv(..., MPI_STATUS_IGNORE) in Open MPI 1.7.1<br>
<strong>From:</strong> Lisandro Dalcin (<em>dalcinl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-01 04:56:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12335.php">KAWASHIMA Takahiro: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27880 - trunk/ompi/request"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/04/12333.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27880 - trunk/ompi/request"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12336.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] MPI_Mrecv(..., MPI_STATUS_IGNORE) in Open MPI 1.7.1"</a>
<li><strong>Reply:</strong> <a href="12336.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] MPI_Mrecv(..., MPI_STATUS_IGNORE) in Open MPI 1.7.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It seems that Mrecv() tries to write on the status arg, even when it
<br>
is STATUS_IGNORE. Looking at the sources (pmrecv.c and pmprobe.c),
<br>
there are some memcheck code paths that access status but do not check
<br>
for STATUS_IGNORE, please review them.
<br>
<p>$ cat tmp.c
<br>
#include &lt;mpi.h&gt;
<br>
<p>int main(int argc, char *argv[])
<br>
{
<br>
&nbsp;&nbsp;MPI_Message message;
<br>
&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;message = MPI_MESSAGE_NO_PROC;
<br>
&nbsp;&nbsp;MPI_Mrecv(NULL, 0, MPI_BYTE, &amp;message, MPI_STATUS_IGNORE);
<br>
&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;return 0;
<br>
}
<br>
<p>$ mpicc tmp.c
<br>
$ valgrind ./a.out
<br>
...
<br>
==17489==
<br>
==17489== Invalid write of size 8
<br>
==17489==    at 0x4CA811C: PMPI_Mrecv (pmrecv.c:62)
<br>
==17489==    by 0x400816: main (in /tmp/a.out)
<br>
==17489==  Address 0x0 is not stack'd, malloc'd or (recently) free'd
<br>
==17489==
<br>
[localhost:17489] *** Process received signal ***
<br>
[localhost:17489] Signal: Segmentation fault (11)
<br>
[localhost:17489] Signal code: Address not mapped (1)
<br>
[localhost:17489] Failing at address: (nil)
<br>
...
<br>
<p><p><pre>
--
Lisandro Dalcin
---------------
CIMEC (INTEC/CONICET-UNL)
Predio CONICET-Santa Fe
Colectora RN 168 Km 472, Paraje El Pozo
3000 Santa Fe, Argentina
Tel: +54-342-4511594 (ext 1011)
Tel/Fax: +54-342-4511169
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12335.php">KAWASHIMA Takahiro: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27880 - trunk/ompi/request"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/04/12333.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27880 - trunk/ompi/request"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12336.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] MPI_Mrecv(..., MPI_STATUS_IGNORE) in Open MPI 1.7.1"</a>
<li><strong>Reply:</strong> <a href="12336.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] MPI_Mrecv(..., MPI_STATUS_IGNORE) in Open MPI 1.7.1"</a>
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
