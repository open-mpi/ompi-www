<?
$subject_val = "[OMPI devel] Cannot Free() a datatype created with Dup() or Create_resized()";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 31 17:55:29 2009" -->
<!-- isoreceived="20090831215529" -->
<!-- sent="Mon, 31 Aug 2009 18:55:23 -0300" -->
<!-- isosent="20090831215523" -->
<!-- name="Lisandro Dalcin" -->
<!-- email="dalcinl_at_[hidden]" -->
<!-- subject="[OMPI devel] Cannot Free() a datatype created with Dup() or Create_resized()" -->
<!-- id="e7ba66e40908311455p5c243e53m9352715df52170d7_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] Cannot Free() a datatype created with Dup() or Create_resized()<br>
<strong>From:</strong> Lisandro Dalcin (<em>dalcinl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-31 17:55:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6742.php">Greg Watson: "Re: [OMPI devel] XML request"</a>
<li><strong>Previous message:</strong> <a href="6740.php">Nifty Tom Mitchell: "Re: [OMPI devel] build problem, autogen"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/09/6746.php">Jeff Squyres: "Re: [OMPI devel] Cannot Free() a datatype created with Dup() orCreate_resized()"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/09/6746.php">Jeff Squyres: "Re: [OMPI devel] Cannot Free() a datatype created with Dup() orCreate_resized()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In current ompi-trunk (svn up'ed and built a few minutes ago), a
<br>
Free() from a datatype obtained with Dup() or Create_resized() from a
<br>
predefined datatype is failing with ERR_TYPE...
<br>
<p>Is this change intentional or is it a regression?
<br>
<p><p>$ cat typedup.py
<br>
from mpi4py import MPI
<br>
t = MPI.INT.Dup()
<br>
t.Free()
<br>
<p>$ python typedup.py
<br>
Traceback (most recent call last):
<br>
&nbsp;&nbsp;File &quot;typedup.py&quot;, line 3, in &lt;module&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;t.Free()
<br>
&nbsp;&nbsp;File &quot;Datatype.pyx&quot;, line 328, in mpi4py.MPI.Datatype.Free
<br>
(src/mpi4py.MPI.c:28632)
<br>
mpi4py.MPI.Exception: MPI_ERR_TYPE: invalid datatype
<br>
<p><p><pre>
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
<li><strong>Next message:</strong> <a href="6742.php">Greg Watson: "Re: [OMPI devel] XML request"</a>
<li><strong>Previous message:</strong> <a href="6740.php">Nifty Tom Mitchell: "Re: [OMPI devel] build problem, autogen"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/09/6746.php">Jeff Squyres: "Re: [OMPI devel] Cannot Free() a datatype created with Dup() orCreate_resized()"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/09/6746.php">Jeff Squyres: "Re: [OMPI devel] Cannot Free() a datatype created with Dup() orCreate_resized()"</a>
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
