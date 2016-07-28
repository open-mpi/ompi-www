<?
$subject_val = "[OMPI devel] querying Op commutativity for predefined reduction operations.";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 21 06:06:03 2014" -->
<!-- isoreceived="20140421100603" -->
<!-- sent="Mon, 21 Apr 2014 13:05:32 +0300" -->
<!-- isosent="20140421100532" -->
<!-- name="Lisandro Dalcin" -->
<!-- email="dalcinl_at_[hidden]" -->
<!-- subject="[OMPI devel] querying Op commutativity for predefined reduction operations." -->
<!-- id="CAEcYPwAbSHzFt4yZPDSk69yOOU=_80nmiRDO8ubCiDbOQLLPGg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] querying Op commutativity for predefined reduction operations.<br>
<strong>From:</strong> Lisandro Dalcin (<em>dalcinl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-21 06:05:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14562.php">Lisandro Dalcin: "[OMPI devel] Win_fence() with assertion=MPI_MODE_NOPRECEDE|MPI_MODE_NOSUCCEED"</a>
<li><strong>Previous message:</strong> <a href="14560.php">Ralph Castain: "[OMPI devel] v1.8.1 release"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14568.php">George Bosilca: "Re: [OMPI devel] querying Op commutativity for predefined reduction operations."</a>
<li><strong>Reply:</strong> <a href="14568.php">George Bosilca: "Re: [OMPI devel] querying Op commutativity for predefined reduction operations."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
IMHO, MPI_Op_commutative() should not fail for predefined reduced operations.
<br>
<p>[dalcinl_at_kw2060 openmpi]$ ompi_info --version
<br>
Open MPI v1.8
<br>
<p><a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
[dalcinl_at_kw2060 openmpi]$ cat op_commutative.c
<br>
#include &lt;mpi.h&gt;
<br>
int main(int argc, char *argv[])
<br>
{
<br>
&nbsp;&nbsp;int flag;
<br>
&nbsp;&nbsp;MPI_Init(&amp;argc,&amp;argv);
<br>
&nbsp;&nbsp;MPI_Op_commutative(MPI_SUM,&amp;flag);
<br>
&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;return 0;
<br>
}
<br>
[dalcinl_at_kw2060 openmpi]$ mpicc op_commutative.c
<br>
[dalcinl_at_kw2060 openmpi]$ ./a.out
<br>
[kw2060:19303] *** An error occurred in MPI_Op_commutative
<br>
[kw2060:19303] *** reported by process [140737157201921,140239272148992]
<br>
[kw2060:19303] *** on communicator MPI_COMM_WORLD
<br>
[kw2060:19303] *** MPI_ERR_OP: invalid reduce operation
<br>
[kw2060:19303] *** MPI_ERRORS_ARE_FATAL (processes in this
<br>
communicator will now abort,
<br>
[kw2060:19303] ***    and potentially your MPI job)
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
<li><strong>Next message:</strong> <a href="14562.php">Lisandro Dalcin: "[OMPI devel] Win_fence() with assertion=MPI_MODE_NOPRECEDE|MPI_MODE_NOSUCCEED"</a>
<li><strong>Previous message:</strong> <a href="14560.php">Ralph Castain: "[OMPI devel] v1.8.1 release"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14568.php">George Bosilca: "Re: [OMPI devel] querying Op commutativity for predefined reduction operations."</a>
<li><strong>Reply:</strong> <a href="14568.php">George Bosilca: "Re: [OMPI devel] querying Op commutativity for predefined reduction operations."</a>
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
