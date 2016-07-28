<?
$subject_val = "[OMPI devel] Wrong Endianness in Open MPI for external32 representation";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 29 08:03:50 2014" -->
<!-- isoreceived="20140429120350" -->
<!-- sent="Tue, 29 Apr 2014 14:03:41 +0200 (CEST)" -->
<!-- isosent="20140429120341" -->
<!-- name="Christoph Niethammer" -->
<!-- email="niethammer_at_[hidden]" -->
<!-- subject="[OMPI devel] Wrong Endianness in Open MPI for external32 representation" -->
<!-- id="520681773.556618.1398773021004.JavaMail.root_at_hlrs.de" -->
<!-- charset="utf-8" -->
<!-- inreplyto="2145784746.556368.1398771866021.JavaMail.root_at_hlrs.de" -->
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
<strong>Subject:</strong> [OMPI devel] Wrong Endianness in Open MPI for external32 representation<br>
<strong>From:</strong> Christoph Niethammer (<em>niethammer_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-29 08:03:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14649.php">Ralph Castain: "Re: [OMPI devel] trunk fails to compile"</a>
<li><strong>Previous message:</strong> <a href="14647.php">Mike Dubman: "Re: [OMPI devel] trunk fails to compile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14650.php">Edgar Gabriel: "Re: [OMPI devel] Wrong Endianness in Open MPI for external32 representation"</a>
<li><strong>Reply:</strong> <a href="14650.php">Edgar Gabriel: "Re: [OMPI devel] Wrong Endianness in Open MPI for external32 representation"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>It seems for me that the endianness is wrong in Open MPI's I/O for the external32 data representation. :O
<br>
<p>Find attached my test programs which write the integer -30 and the double 16.25 into a file.
<br>
Here the output on my Linux system:
<br>
<p>mpicc     c-xdr.c   -o c-xdr
<br>
mpicc     mpi-io-external32.c   -o mpi-io-external32
<br>
./c-xdr
<br>
Output file: c-xdr.dat
<br>
hexdump c-xdr.dat
<br>
0000000 ffff e2ff 3040 0040 0000 0000          
<br>
000000c
<br>
./mpi-io-external32
<br>
Output file: mpi-io-external32.dat
<br>
hexdump mpi-io-external32.dat
<br>
0000000 ffe2 ffff 0000 0000 4000 4030          
<br>
000000c
<br>
<p><p>Best regards
<br>
Christoph Niethammer
<br>
<p><pre>
--
Christoph Niethammer
High Performance Computing Center Stuttgart (HLRS)
Nobelstrasse 19
70569 Stuttgart
Tel: ++49(0)711-685-87203
email: niethammer_at_[hidden]
<a href="http://www.hlrs.de/people/niethammer">http://www.hlrs.de/people/niethammer</a>


</pre>
<hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14648/c-xdr.c">c-xdr.c</a>
</ul>
<!-- attachment="c-xdr.c" -->
<hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14648/mpi-io-external32.c">mpi-io-external32.c</a>
</ul>
<!-- attachment="mpi-io-external32.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14649.php">Ralph Castain: "Re: [OMPI devel] trunk fails to compile"</a>
<li><strong>Previous message:</strong> <a href="14647.php">Mike Dubman: "Re: [OMPI devel] trunk fails to compile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14650.php">Edgar Gabriel: "Re: [OMPI devel] Wrong Endianness in Open MPI for external32 representation"</a>
<li><strong>Reply:</strong> <a href="14650.php">Edgar Gabriel: "Re: [OMPI devel] Wrong Endianness in Open MPI for external32 representation"</a>
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
