<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jul 23 20:38:43 2007" -->
<!-- isoreceived="20070724003843" -->
<!-- sent="Mon, 23 Jul 2007 21:38:39 -0300" -->
<!-- isosent="20070724003839" -->
<!-- name="Lisandro Dalcin" -->
<!-- email="dalcinl_at_[hidden]" -->
<!-- subject="[OMPI devel] MPI_APPNUM value for apps not started through mpiexec" -->
<!-- id="e7ba66e40707231738tb9ad88blab53cd67cfc7c750_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Lisandro Dalcin (<em>dalcinl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-23 20:38:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1977.php">Lisandro Dalcin: "[OMPI devel] MPI_ALLOC_MEM warning when requesting 0 (zero) bytes"</a>
<li><strong>Previous message:</strong> <a href="1975.php">Bill McMillan: "Re: [OMPI devel] Fwd: lsf support / farm use models"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Using a fresh (2 hours agoo) update of SVN branch v1.2, I've found
<br>
that attribute MPI_APPNUM returns -1 (minus one) when an 'sequential'
<br>
application is not launched through mpiexec.
<br>
<p>Reading the MPI standard, I understand it should return a non-negative
<br>
integer if defined, or it should not be defined at all.
<br>
<p><a href="http://www.mpi-forum.org/docs/mpi-20-html/node113.htm#Node113">http://www.mpi-forum.org/docs/mpi-20-html/node113.htm#Node113</a>
<br>
&quot;&quot;&quot;
<br>
If an application was not spawned with MPI_COMM_SPAWN or
<br>
MPI_COMM_SPAWN_MULTIPLE, and MPI_APPNUM doesn't make sense in the
<br>
context of the implementation-specific startup mechanism, MPI_APPNUM
<br>
is not set.
<br>
&quot;&quot;&quot;
<br>
<p>I'm not sure if this is intended, but I report it anyway, sorry if
<br>
this is issue was already reported.
<br>
<p>Regards,
<br>
<p><pre>
-- 
Lisandro Dalc&#237;n
---------------
Centro Internacional de M&#233;todos Computacionales en Ingenier&#237;a (CIMEC)
Instituto de Desarrollo Tecnol&#243;gico para la Industria Qu&#237;mica (INTEC)
Consejo Nacional de Investigaciones Cient&#237;ficas y T&#233;cnicas (CONICET)
PTLC - G&#252;emes 3450, (3000) Santa Fe, Argentina
Tel/Fax: +54-(0)342-451.1594
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1977.php">Lisandro Dalcin: "[OMPI devel] MPI_ALLOC_MEM warning when requesting 0 (zero) bytes"</a>
<li><strong>Previous message:</strong> <a href="1975.php">Bill McMillan: "Re: [OMPI devel] Fwd: lsf support / farm use models"</a>
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
