<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Oct  7 07:20:16 2006" -->
<!-- isoreceived="20061007112016" -->
<!-- sent="Sat, 07 Oct 2006 07:20:10 -0400" -->
<!-- isosent="20061007112010" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] problem with MPI_[Pack|Unpack]_external" -->
<!-- id="C14D05AA.29F4A%jsquyres_at_cisco.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="e7ba66e40609291725w29652904l9400f4f5ac875799_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-07 07:20:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1100.php">Karl Dockendorf: "[OMPI devel] Segment Faults in MPI_INIT"</a>
<li><strong>Previous message:</strong> <a href="1098.php">Brian W. Barrett: "Re: [OMPI devel] configure &amp; Fortran problem"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2006/09/1092.php">Lisandro Dalcin: "[OMPI devel] problem with MPI_[Pack|Unpack]_external"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks!
<br>
<p>I've submitted ticket 484 about this:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://svn.open-mpi.org/trac/ompi/ticket/484">http://svn.open-mpi.org/trac/ompi/ticket/484</a>
<br>
<p><p>On 9/29/06 8:25 PM, &quot;Lisandro Dalcin&quot; &lt;dalcinl_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I've just catched a problem with packing/unpacking using 'external32'
</span><br>
<span class="quotelev1">&gt; in Linux. The problem seems to be word ordering, I believe you forgot
</span><br>
<span class="quotelev1">&gt; to make the little-endian &lt;-&gt; big-endian conversion somewhere. Below,
</span><br>
<span class="quotelev1">&gt; an interactive session with ipython (sorry, no time to write in C)
</span><br>
<span class="quotelev1">&gt; showing the problem. Please, ignore me if this has been already
</span><br>
<span class="quotelev1">&gt; reported.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In [1]: import numpy
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In [2]: from mpi4py import MPI
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In [3]: print numpy.dtype('i').itemsize, MPI.INT.extent
</span><br>
<span class="quotelev1">&gt; 4 4
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In [4]: print numpy.dtype('b').itemsize, MPI.BYTE.extent
</span><br>
<span class="quotelev1">&gt; 1 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In [5]:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In [5]: arr1 = numpy.array([256], dtype='i') # one int, for input
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In [6]: print arr1
</span><br>
<span class="quotelev1">&gt; [256]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In [7]: buf = numpy.array([0,0,0,0], dtype='b') # four bytes, auxiliar
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In [8]: print buf
</span><br>
<span class="quotelev1">&gt; [0 0 0 0]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In [9]: p = MPI.INT.Pack_external('external32', arr1, buf, 0)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In [10]: print buf, repr(buf.tostring())
</span><br>
<span class="quotelev1">&gt; [0 1 0 0] '\x00\x01\x00\x00'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In [11]: arr2 = numpy.array([0], dtype='i') # one int, for output
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In [12]: print arr2
</span><br>
<span class="quotelev1">&gt; [0]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In [13]: p = MPI.INT.Unpack_external('external32', buf, 0, arr2)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In [14]: print arr2
</span><br>
<span class="quotelev1">&gt; [65536]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In [15]: print arr2.byteswap()
</span><br>
<span class="quotelev1">&gt; [256]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Lisandro Dalc&#237;n
</span><br>
<span class="quotelev1">&gt; ---------------
</span><br>
<span class="quotelev1">&gt; Centro Internacional de M&#233;todos Computacionales en Ingenier&#237;a (CIMEC)
</span><br>
<span class="quotelev1">&gt; Instituto de Desarrollo Tecnol&#243;gico para la Industria Qu&#237;mica (INTEC)
</span><br>
<span class="quotelev1">&gt; Consejo Nacional de Investigaciones Cient&#237;ficas y T&#233;cnicas (CONICET)
</span><br>
<span class="quotelev1">&gt; PTLC - G&#252;emes 3450, (3000) Santa Fe, Argentina
</span><br>
<span class="quotelev1">&gt; Tel/Fax: +54-(0)342-451.1594
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1100.php">Karl Dockendorf: "[OMPI devel] Segment Faults in MPI_INIT"</a>
<li><strong>Previous message:</strong> <a href="1098.php">Brian W. Barrett: "Re: [OMPI devel] configure &amp; Fortran problem"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2006/09/1092.php">Lisandro Dalcin: "[OMPI devel] problem with MPI_[Pack|Unpack]_external"</a>
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
