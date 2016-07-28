<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Sep 29 20:25:09 2006" -->
<!-- isoreceived="20060930002509" -->
<!-- sent="Fri, 29 Sep 2006 21:25:03 -0300" -->
<!-- isosent="20060930002503" -->
<!-- name="Lisandro Dalcin" -->
<!-- email="dalcinl_at_[hidden]" -->
<!-- subject="[OMPI devel] problem with MPI_[Pack|Unpack]_external" -->
<!-- id="e7ba66e40609291725w29652904l9400f4f5ac875799_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2006-09-29 20:25:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2006/10/1093.php">Christian Kauhaus: "[OMPI devel] MPI::File::Create_errhandler() missing?"</a>
<li><strong>Previous message:</strong> <a href="1091.php">Ralph H Castain: "[OMPI devel] ORTE Timing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2006/10/1099.php">Jeff Squyres: "Re: [OMPI devel] problem with MPI_[Pack|Unpack]_external"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2006/10/1099.php">Jeff Squyres: "Re: [OMPI devel] problem with MPI_[Pack|Unpack]_external"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've just catched a problem with packing/unpacking using 'external32'
<br>
in Linux. The problem seems to be word ordering, I believe you forgot
<br>
to make the little-endian &lt;-&gt; big-endian conversion somewhere. Below,
<br>
an interactive session with ipython (sorry, no time to write in C)
<br>
showing the problem. Please, ignore me if this has been already
<br>
reported.
<br>
<p>In [1]: import numpy
<br>
<p>In [2]: from mpi4py import MPI
<br>
<p>In [3]: print numpy.dtype('i').itemsize, MPI.INT.extent
<br>
4 4
<br>
<p>In [4]: print numpy.dtype('b').itemsize, MPI.BYTE.extent
<br>
1 1
<br>
<p>In [5]:
<br>
<p>In [5]: arr1 = numpy.array([256], dtype='i') # one int, for input
<br>
<p>In [6]: print arr1
<br>
[256]
<br>
<p>In [7]: buf = numpy.array([0,0,0,0], dtype='b') # four bytes, auxiliar
<br>
<p>In [8]: print buf
<br>
[0 0 0 0]
<br>
<p>In [9]: p = MPI.INT.Pack_external('external32', arr1, buf, 0)
<br>
<p>In [10]: print buf, repr(buf.tostring())
<br>
[0 1 0 0] '\x00\x01\x00\x00'
<br>
<p>In [11]: arr2 = numpy.array([0], dtype='i') # one int, for output
<br>
<p>In [12]: print arr2
<br>
[0]
<br>
<p>In [13]: p = MPI.INT.Unpack_external('external32', buf, 0, arr2)
<br>
<p>In [14]: print arr2
<br>
[65536]
<br>
<p>In [15]: print arr2.byteswap()
<br>
[256]
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
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2006/10/1093.php">Christian Kauhaus: "[OMPI devel] MPI::File::Create_errhandler() missing?"</a>
<li><strong>Previous message:</strong> <a href="1091.php">Ralph H Castain: "[OMPI devel] ORTE Timing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2006/10/1099.php">Jeff Squyres: "Re: [OMPI devel] problem with MPI_[Pack|Unpack]_external"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2006/10/1099.php">Jeff Squyres: "Re: [OMPI devel] problem with MPI_[Pack|Unpack]_external"</a>
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
