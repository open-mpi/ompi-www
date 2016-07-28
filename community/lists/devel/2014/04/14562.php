<?
$subject_val = "[OMPI devel] Win_fence() with assertion=MPI_MODE_NOPRECEDE|MPI_MODE_NOSUCCEED";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 21 07:12:18 2014" -->
<!-- isoreceived="20140421111218" -->
<!-- sent="Mon, 21 Apr 2014 14:11:47 +0300" -->
<!-- isosent="20140421111147" -->
<!-- name="Lisandro Dalcin" -->
<!-- email="dalcinl_at_[hidden]" -->
<!-- subject="[OMPI devel] Win_fence() with assertion=MPI_MODE_NOPRECEDE|MPI_MODE_NOSUCCEED" -->
<!-- id="CAEcYPwBPe+EiOeHmot3m+4xvh9BnqGU623j1jO21u2_bL8LpRw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] Win_fence() with assertion=MPI_MODE_NOPRECEDE|MPI_MODE_NOSUCCEED<br>
<strong>From:</strong> Lisandro Dalcin (<em>dalcinl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-21 07:11:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14563.php">Lisandro Dalcin: "[OMPI devel] MPI_Type_create_hindexed_block() segfaults"</a>
<li><strong>Previous message:</strong> <a href="14561.php">Lisandro Dalcin: "[OMPI devel] querying Op commutativity for predefined reduction operations."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14577.php">Nathan Hjelm: "Re: [OMPI devel] Win_fence() with assertion=MPI_MODE_NOPRECEDE|MPI_MODE_NOSUCCEED"</a>
<li><strong>Reply:</strong> <a href="14577.php">Nathan Hjelm: "Re: [OMPI devel] Win_fence() with assertion=MPI_MODE_NOPRECEDE|MPI_MODE_NOSUCCEED"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Open MPI errors in Win_fence() when the assertion contains both
<br>
MPI_MODE_NOPRECEDE and MPI_MODE_NOSUCCEED
<br>
<p>Could you explain me why the following code is wrong? Please note that
<br>
the fence call with assertion !=0 is issued before and after fence
<br>
calls with assertion=0, and I'm not making any modification to the
<br>
local window, nor issuing any RMA call. My understanding of MPI RMA
<br>
operations is quite limited, but I would say that my code is valid and
<br>
should not fail.
<br>
<p>[dalcinl_at_kw2060 openmpi]$ cat win_fence.c
<br>
#include &lt;mpi.h&gt;
<br>
int main(int argc, char *argv[])
<br>
{
<br>
&nbsp;&nbsp;MPI_Win win;
<br>
&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;MPI_Win_create(MPI_BOTTOM, 0, 1, MPI_INFO_NULL, MPI_COMM_SELF, &amp;win);
<br>
&nbsp;&nbsp;MPI_Win_fence(0, win);
<br>
&nbsp;&nbsp;MPI_Win_fence(MPI_MODE_NOSTORE|MPI_MODE_NOPUT|MPI_MODE_NOPRECEDE|MPI_MODE_NOSUCCEED,
<br>
win);
<br>
&nbsp;&nbsp;MPI_Win_fence(0, win);
<br>
&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;return 0;
<br>
}
<br>
[dalcinl_at_kw2060 openmpi]$ mpicc win_fence.c
<br>
[dalcinl_at_kw2060 openmpi]$ ./a.out
<br>
[kw2060:19890] *** An error occurred in MPI_Win_fence
<br>
[kw2060:19890] *** reported by process [140737129086977,0]
<br>
[kw2060:19890] *** on win rdma window 3
<br>
[kw2060:19890] *** MPI_ERR_ASSERT: invalid assert argument
<br>
[kw2060:19890] *** MPI_ERRORS_ARE_FATAL (processes in this win will now abort,
<br>
[kw2060:19890] ***    and potentially your MPI job)
<br>
[dalcinl_at_kw2060 openmpi]$
<br>
<p><p><pre>
-- 
Lisandro Dalcin
---------------
CIMEC (UNL/CONICET)
Predio CONICET-Santa Fe
Colectora RN 168 Km 472, Paraje El Pozo
3000 Santa Fe, Argentina
Tel: +54-342-4511594 (ext 1016)
Tel/Fax: +54-342-4511169
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14563.php">Lisandro Dalcin: "[OMPI devel] MPI_Type_create_hindexed_block() segfaults"</a>
<li><strong>Previous message:</strong> <a href="14561.php">Lisandro Dalcin: "[OMPI devel] querying Op commutativity for predefined reduction operations."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14577.php">Nathan Hjelm: "Re: [OMPI devel] Win_fence() with assertion=MPI_MODE_NOPRECEDE|MPI_MODE_NOSUCCEED"</a>
<li><strong>Reply:</strong> <a href="14577.php">Nathan Hjelm: "Re: [OMPI devel] Win_fence() with assertion=MPI_MODE_NOPRECEDE|MPI_MODE_NOSUCCEED"</a>
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
