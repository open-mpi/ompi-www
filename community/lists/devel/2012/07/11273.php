<?
$subject_val = "[OMPI devel] MPI_Ibarrier fails";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 11 06:09:44 2012" -->
<!-- isoreceived="20120711100944" -->
<!-- sent="Wed, 11 Jul 2012 17:09:33 +0700" -->
<!-- isosent="20120711100933" -->
<!-- name="Mikhail Kurnosov" -->
<!-- email="mkurnosov_at_[hidden]" -->
<!-- subject="[OMPI devel] MPI_Ibarrier fails" -->
<!-- id="4FFD50DD.8040207_at_gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] MPI_Ibarrier fails<br>
<strong>From:</strong> Mikhail Kurnosov (<em>mkurnosov_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-11 06:09:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11274.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  MPI_Ibarrier fails"</a>
<li><strong>Previous message:</strong> <a href="11272.php">TERRY DONTJE: "Re: [OMPI devel] openib compiler warnings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11274.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  MPI_Ibarrier fails"</a>
<li><strong>Reply:</strong> <a href="11274.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  MPI_Ibarrier fails"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>In the case of single process the MPI_Ibarrier call fails (seg. fault).
<br>
Request object does not initialized in this function (LibNBC is not 
<br>
called for it).
<br>
<p>The following example fails on Open MPI 1.9a1r26779:
<br>
<p>$ cat ibarrier_test.c
<br>
#include &lt;mpi.h&gt;
<br>
<p>int main(int argc, char **argv)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Request req;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Status status;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Ibarrier(MPI_COMM_WORLD, &amp;req);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* MPI_Wait will crash. */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Wait(&amp;req, &amp;status);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
<p>$ mpiexec -n 1 ./ibarrier_test
<br>
[mkws:26288] *** Process received signal ***
<br>
[mkws:26288] Signal: Segmentation fault (11)
<br>
[mkws:26288] Signal code: Address not mapped (1)
<br>
[mkws:26288] Failing at address: 0x58
<br>
[mkws:26288] [ 0] /lib64/libpthread.so.0() [0x3d6040f500]
<br>
[mkws:26288] [ 1] 
<br>
/home/mkurnosov/opt/openmpi-1.9a1r26779/lib/libmpi.so.0(ompi_request_default_wait+0x17) 
<br>
[0x7f75d824c707]
<br>
[mkws:26288] [ 2] 
<br>
/home/mkurnosov/opt/openmpi-1.9a1r26779/lib/libmpi.so.0(MPI_Wait+0x5d) 
<br>
[0x7f75d8276e0d]
<br>
[mkws:26288] [ 3] ./ibarrier_test(main+0x46) [0x40089a]
<br>
[mkws:26288] [ 4] /lib64/libc.so.6(__libc_start_main+0xed) [0x3d5f82169d]
<br>
[mkws:26288] [ 5] ./ibarrier_test() [0x400799]
<br>
[mkws:26288] *** End of error message ***
<br>
<p><pre>
--
Mikhail Kurnosov
Computer Systems Department
Siberian State University of Telecommunications and Information Sciences
Address: 630102, 86 Kirova str., Novosibirsk, Russia
Email: mkurnosov_at_[hidden]
<a href="http://cpct.sibsutis.ru/~mkurnosov">http://cpct.sibsutis.ru/~mkurnosov</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11274.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  MPI_Ibarrier fails"</a>
<li><strong>Previous message:</strong> <a href="11272.php">TERRY DONTJE: "Re: [OMPI devel] openib compiler warnings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11274.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  MPI_Ibarrier fails"</a>
<li><strong>Reply:</strong> <a href="11274.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  MPI_Ibarrier fails"</a>
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
