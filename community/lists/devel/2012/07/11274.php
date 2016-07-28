<?
$subject_val = "Re: [OMPI devel] [EXTERNAL]  MPI_Ibarrier fails";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 11 12:03:38 2012" -->
<!-- isoreceived="20120711160338" -->
<!-- sent="Wed, 11 Jul 2012 16:03:03 +0000" -->
<!-- isosent="20120711160303" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL]  MPI_Ibarrier fails" -->
<!-- id="69A29AB53D57F54D81061A9E4E45B8FD239223DD_at_EXMB01.srn.sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4FFD50DD.8040207_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [EXTERNAL]  MPI_Ibarrier fails<br>
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-11 12:03:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11275.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-docs] svn:open-mpi-tests r2002 - trunk/ibm/collective"</a>
<li><strong>Previous message:</strong> <a href="11273.php">Mikhail Kurnosov: "[OMPI devel] MPI_Ibarrier fails"</a>
<li><strong>In reply to:</strong> <a href="11273.php">Mikhail Kurnosov: "[OMPI devel] MPI_Ibarrier fails"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the bug report.  This has been fixed in r26784 of the trunk and
<br>
should be in tonight's tarball.
<br>
<p>Brian
<br>
<p>On 7/11/12 6:09 AM, &quot;Mikhail Kurnosov&quot; &lt;mkurnosov_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;In the case of single process the MPI_Ibarrier call fails (seg. fault).
</span><br>
<span class="quotelev1">&gt;Request object does not initialized in this function (LibNBC is not
</span><br>
<span class="quotelev1">&gt;called for it).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;The following example fails on Open MPI 1.9a1r26779:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;$ cat ibarrier_test.c
</span><br>
<span class="quotelev1">&gt;#include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;int main(int argc, char **argv)
</span><br>
<span class="quotelev1">&gt;{
</span><br>
<span class="quotelev1">&gt;     MPI_Request req;
</span><br>
<span class="quotelev1">&gt;     MPI_Status status;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;     MPI_Ibarrier(MPI_COMM_WORLD, &amp;req);
</span><br>
<span class="quotelev1">&gt;     /* MPI_Wait will crash. */
</span><br>
<span class="quotelev1">&gt;     MPI_Wait(&amp;req, &amp;status);
</span><br>
<span class="quotelev1">&gt;     MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;     return 0;
</span><br>
<span class="quotelev1">&gt;}
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;$ mpiexec -n 1 ./ibarrier_test
</span><br>
<span class="quotelev1">&gt;[mkws:26288] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt;[mkws:26288] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt;[mkws:26288] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt;[mkws:26288] Failing at address: 0x58
</span><br>
<span class="quotelev1">&gt;[mkws:26288] [ 0] /lib64/libpthread.so.0() [0x3d6040f500]
</span><br>
<span class="quotelev1">&gt;[mkws:26288] [ 1] 
</span><br>
<span class="quotelev1">&gt;/home/mkurnosov/opt/openmpi-1.9a1r26779/lib/libmpi.so.0(ompi_request_defau
</span><br>
<span class="quotelev1">&gt;lt_wait+0x17) 
</span><br>
<span class="quotelev1">&gt;[0x7f75d824c707]
</span><br>
<span class="quotelev1">&gt;[mkws:26288] [ 2] 
</span><br>
<span class="quotelev1">&gt;/home/mkurnosov/opt/openmpi-1.9a1r26779/lib/libmpi.so.0(MPI_Wait+0x5d)
</span><br>
<span class="quotelev1">&gt;[0x7f75d8276e0d]
</span><br>
<span class="quotelev1">&gt;[mkws:26288] [ 3] ./ibarrier_test(main+0x46) [0x40089a]
</span><br>
<span class="quotelev1">&gt;[mkws:26288] [ 4] /lib64/libc.so.6(__libc_start_main+0xed) [0x3d5f82169d]
</span><br>
<span class="quotelev1">&gt;[mkws:26288] [ 5] ./ibarrier_test() [0x400799]
</span><br>
<span class="quotelev1">&gt;[mkws:26288] *** End of error message ***
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;--
</span><br>
<span class="quotelev1">&gt;Mikhail Kurnosov
</span><br>
<span class="quotelev1">&gt;Computer Systems Department
</span><br>
<span class="quotelev1">&gt;Siberian State University of Telecommunications and Information Sciences
</span><br>
<span class="quotelev1">&gt;Address: 630102, 86 Kirova str., Novosibirsk, Russia
</span><br>
<span class="quotelev1">&gt;Email: mkurnosov_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://cpct.sibsutis.ru/~mkurnosov">http://cpct.sibsutis.ru/~mkurnosov</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;devel mailing list
</span><br>
<span class="quotelev1">&gt;devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11275.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-docs] svn:open-mpi-tests r2002 - trunk/ibm/collective"</a>
<li><strong>Previous message:</strong> <a href="11273.php">Mikhail Kurnosov: "[OMPI devel] MPI_Ibarrier fails"</a>
<li><strong>In reply to:</strong> <a href="11273.php">Mikhail Kurnosov: "[OMPI devel] MPI_Ibarrier fails"</a>
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
