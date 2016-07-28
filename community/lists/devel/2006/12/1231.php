<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Dec 10 16:15:08 2006" -->
<!-- isoreceived="20061210211508" -->
<!-- sent="Sun, 10 Dec 2006 14:14:59 -0700" -->
<!-- isosent="20061210211459" -->
<!-- name="Greg Watson" -->
<!-- email="gwatson_at_[hidden]" -->
<!-- subject="[OMPI devel] MPI_Init() corrupts argc on Linux" -->
<!-- id="EB8F8003-8355-468A-8E72-BED50C44D6CA_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Greg Watson (<em>gwatson_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-12-10 16:14:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1232.php">Jeff Squyres: "Re: [OMPI devel] MPI_Init() corrupts argc on Linux"</a>
<li><strong>Previous message:</strong> <a href="1230.php">Patrick Jessee: "[OMPI devel] issues with mpirun --prefix syntax"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1232.php">Jeff Squyres: "Re: [OMPI devel] MPI_Init() corrupts argc on Linux"</a>
<li><strong>Reply:</strong> <a href="1232.php">Jeff Squyres: "Re: [OMPI devel] MPI_Init() corrupts argc on Linux"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
(Tried to open a bug, but I don't seem to have access...)
<br>
<p>Environment:
<br>
<p>Fedora Core 5 (actually I think any Linux will do)
<br>
OMPI 1.2b1 (./configure --with-devel-headers)
<br>
<p>Symptom:
<br>
<p>MPI_Init(&amp;argc, &amp;argv) corrupts the argc variable.
<br>
<p>Repeat By:
<br>
<p>1. Compile the following program using 'mpicc -g -o mpitest mpitest.c':
<br>
<p>#include &lt;mpi.h&gt;
<br>
<p>int main(int argc, char *argv[])
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
}
<br>
<p>2. See corruption under gdb:
<br>
<p>$ gdb mpitest
<br>
GNU gdb 6.5
<br>
Copyright (C) 2006 Free Software Foundation, Inc.
<br>
GDB is free software, covered by the GNU General Public License, and  
<br>
you are
<br>
welcome to change it and/or distribute copies of it under certain  
<br>
conditions.
<br>
Type &quot;show copying&quot; to see the conditions.
<br>
There is absolutely no warranty for GDB.  Type &quot;show warranty&quot; for  
<br>
details.
<br>
This GDB was configured as &quot;i686-pc-linux-gnu&quot;...Using host  
<br>
libthread_db library
<br>
&quot;/lib/libthread_db.so.1&quot;.
<br>
<p>(gdb) b main
<br>
Breakpoint 1 at 0x80485c5: file mpitest.c, line 6.
<br>
(gdb) r
<br>
Starting program: /home/greg/mpitest
<br>
[Thread debugging using libthread_db enabled]
<br>
[New Thread -1208936784 (LWP 11171)]
<br>
[Switching to Thread -1208936784 (LWP 11171)]
<br>
<p>Breakpoint 1, main (argc=1, argv=0xbf81fae4) at mpitest.c:6
<br>
6               MPI_Init(&amp;argc, &amp;argv);
<br>
(gdb) p argc
<br>
$1 = 1
<br>
(gdb) n
<br>
7               MPI_Finalize();
<br>
(gdb) p argc
<br>
Cannot access memory at address 0x0
<br>
(gdb)
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1232.php">Jeff Squyres: "Re: [OMPI devel] MPI_Init() corrupts argc on Linux"</a>
<li><strong>Previous message:</strong> <a href="1230.php">Patrick Jessee: "[OMPI devel] issues with mpirun --prefix syntax"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1232.php">Jeff Squyres: "Re: [OMPI devel] MPI_Init() corrupts argc on Linux"</a>
<li><strong>Reply:</strong> <a href="1232.php">Jeff Squyres: "Re: [OMPI devel] MPI_Init() corrupts argc on Linux"</a>
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
