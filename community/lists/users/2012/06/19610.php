<?
$subject_val = "[OMPI users] NVCC mpi.h: error: attribute &quot;__deprecated__&quot; does not take arguments";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 18 10:20:31 2012" -->
<!-- isoreceived="20120618142031" -->
<!-- sent="Mon, 18 Jun 2012 16:20:26 +0200" -->
<!-- isosent="20120618142026" -->
<!-- name="Dmitry N. Mikushin" -->
<!-- email="maemarcus_at_[hidden]" -->
<!-- subject="[OMPI users] NVCC mpi.h: error: attribute &amp;quot;__deprecated__&amp;quot; does not take arguments" -->
<!-- id="CAGR4S9Fw64R0QeXv-Oeq4XT248NLJgj6oybU+a9NCDCSbe-E2g_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] NVCC mpi.h: error: attribute &quot;__deprecated__&quot; does not take arguments<br>
<strong>From:</strong> Dmitry N. Mikushin (<em>maemarcus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-18 10:20:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19611.php">Jeff Squyres: "Re: [OMPI users] NVCC mpi.h: error: attribute &quot;__deprecated__&quot; does not take arguments"</a>
<li><strong>Previous message:</strong> <a href="19609.php">Ralph Castain: "Re: [OMPI users] Naming MPI_Spawn children"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19611.php">Jeff Squyres: "Re: [OMPI users] NVCC mpi.h: error: attribute &quot;__deprecated__&quot; does not take arguments"</a>
<li><strong>Reply:</strong> <a href="19611.php">Jeff Squyres: "Re: [OMPI users] NVCC mpi.h: error: attribute &quot;__deprecated__&quot; does not take arguments"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>With openmpi svn trunk as of
<br>
<p>Repository Root: <a href="http://svn.open-mpi.org/svn/ompi">http://svn.open-mpi.org/svn/ompi</a>
<br>
Repository UUID: 63e3feb5-37d5-0310-a306-e8a459e722fe
<br>
Revision: 26616
<br>
<p>we are observing the following strange issue (see below). How do you think,
<br>
is it a problem of NVCC or OpenMPI?
<br>
<p>Thanks,
<br>
- Dima.
<br>
<p>[dmikushin_at_tesla-apc mpitest]$ cat mpitest.cu
<br>
#include &lt;mpi.h&gt;
<br>
<p>__global__ void kernel() { }
<br>
<p>[dmikushin_at_tesla-apc mpitest]$ nvcc -I/opt/openmpi-trunk/include -c
<br>
mpitest.cu
<br>
/opt/openmpi-trunk/include/mpi.h(365): error: attribute &quot;__deprecated__&quot;
<br>
does not take arguments
<br>
<p>/opt/openmpi-trunk/include/mpi.h(374): error: attribute &quot;__deprecated__&quot;
<br>
does not take arguments
<br>
<p>/opt/openmpi-trunk/include/mpi.h(382): error: attribute &quot;__deprecated__&quot;
<br>
does not take arguments
<br>
<p>/opt/openmpi-trunk/include/mpi.h(724): error: attribute &quot;__deprecated__&quot;
<br>
does not take arguments
<br>
<p>/opt/openmpi-trunk/include/mpi.h(730): error: attribute &quot;__deprecated__&quot;
<br>
does not take arguments
<br>
<p>/opt/openmpi-trunk/include/mpi.h(736): error: attribute &quot;__deprecated__&quot;
<br>
does not take arguments
<br>
<p>/opt/openmpi-trunk/include/mpi.h(790): error: attribute &quot;__deprecated__&quot;
<br>
does not take arguments
<br>
<p>/opt/openmpi-trunk/include/mpi.h(791): error: attribute &quot;__deprecated__&quot;
<br>
does not take arguments
<br>
<p>/opt/openmpi-trunk/include/mpi.h(1049): error: attribute &quot;__deprecated__&quot;
<br>
does not take arguments
<br>
<p>/opt/openmpi-trunk/include/mpi.h(1070): error: attribute &quot;__deprecated__&quot;
<br>
does not take arguments
<br>
<p>/opt/openmpi-trunk/include/mpi.h(1072): error: attribute &quot;__deprecated__&quot;
<br>
does not take arguments
<br>
<p>/opt/openmpi-trunk/include/mpi.h(1074): error: attribute &quot;__deprecated__&quot;
<br>
does not take arguments
<br>
<p>/opt/openmpi-trunk/include/mpi.h(1145): error: attribute &quot;__deprecated__&quot;
<br>
does not take arguments
<br>
<p>/opt/openmpi-trunk/include/mpi.h(1149): error: attribute &quot;__deprecated__&quot;
<br>
does not take arguments
<br>
<p>/opt/openmpi-trunk/include/mpi.h(1151): error: attribute &quot;__deprecated__&quot;
<br>
does not take arguments
<br>
<p>/opt/openmpi-trunk/include/mpi.h(1345): error: attribute &quot;__deprecated__&quot;
<br>
does not take arguments
<br>
<p>/opt/openmpi-trunk/include/mpi.h(1347): error: attribute &quot;__deprecated__&quot;
<br>
does not take arguments
<br>
<p>/opt/openmpi-trunk/include/mpi.h(1484): error: attribute &quot;__deprecated__&quot;
<br>
does not take arguments
<br>
<p>/opt/openmpi-trunk/include/mpi.h(1507): error: attribute &quot;__deprecated__&quot;
<br>
does not take arguments
<br>
<p>/opt/openmpi-trunk/include/mpi.h(1510): error: attribute &quot;__deprecated__&quot;
<br>
does not take arguments
<br>
<p>/opt/openmpi-trunk/include/mpi.h(1515): error: attribute &quot;__deprecated__&quot;
<br>
does not take arguments
<br>
<p>/opt/openmpi-trunk/include/mpi.h(1525): error: attribute &quot;__deprecated__&quot;
<br>
does not take arguments
<br>
<p>/opt/openmpi-trunk/include/mpi.h(1527): error: attribute &quot;__deprecated__&quot;
<br>
does not take arguments
<br>
<p>/opt/openmpi-trunk/include/mpi.h(1589): error: attribute &quot;__deprecated__&quot;
<br>
does not take arguments
<br>
<p>/opt/openmpi-trunk/include/mpi.h(1610): error: attribute &quot;__deprecated__&quot;
<br>
does not take arguments
<br>
<p>/opt/openmpi-trunk/include/mpi.h(1612): error: attribute &quot;__deprecated__&quot;
<br>
does not take arguments
<br>
<p>/opt/openmpi-trunk/include/mpi.h(1614): error: attribute &quot;__deprecated__&quot;
<br>
does not take arguments
<br>
<p>/opt/openmpi-trunk/include/mpi.h(1685): error: attribute &quot;__deprecated__&quot;
<br>
does not take arguments
<br>
<p>/opt/openmpi-trunk/include/mpi.h(1689): error: attribute &quot;__deprecated__&quot;
<br>
does not take arguments
<br>
<p>/opt/openmpi-trunk/include/mpi.h(1691): error: attribute &quot;__deprecated__&quot;
<br>
does not take arguments
<br>
<p>/opt/openmpi-trunk/include/mpi.h(1886): error: attribute &quot;__deprecated__&quot;
<br>
does not take arguments
<br>
<p>/opt/openmpi-trunk/include/mpi.h(1888): error: attribute &quot;__deprecated__&quot;
<br>
does not take arguments
<br>
<p>/opt/openmpi-trunk/include/mpi.h(2024): error: attribute &quot;__deprecated__&quot;
<br>
does not take arguments
<br>
<p>/opt/openmpi-trunk/include/mpi.h(2047): error: attribute &quot;__deprecated__&quot;
<br>
does not take arguments
<br>
<p>/opt/openmpi-trunk/include/mpi.h(2050): error: attribute &quot;__deprecated__&quot;
<br>
does not take arguments
<br>
<p>/opt/openmpi-trunk/include/mpi.h(2055): error: attribute &quot;__deprecated__&quot;
<br>
does not take arguments
<br>
<p>/opt/openmpi-trunk/include/mpi.h(2065): error: attribute &quot;__deprecated__&quot;
<br>
does not take arguments
<br>
<p>/opt/openmpi-trunk/include/mpi.h(2067): error: attribute &quot;__deprecated__&quot;
<br>
does not take arguments
<br>
<p>/opt/openmpi-trunk/include/openmpi/ompi/mpi/cxx/comm.h(102): error:
<br>
attribute &quot;__deprecated__&quot; does not take arguments
<br>
<p>/opt/openmpi-trunk/include/openmpi/ompi/mpi/cxx/win.h(90): error: attribute
<br>
&quot;__deprecated__&quot; does not take arguments
<br>
<p>/opt/openmpi-trunk/include/openmpi/ompi/mpi/cxx/file.h(298): error:
<br>
attribute &quot;__deprecated__&quot; does not take arguments
<br>
<p>41 errors detected in the compilation of
<br>
&quot;/tmp/tmpxft_00004a17_00000000-4_mpitest.cpp1.ii&quot;.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19610/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19611.php">Jeff Squyres: "Re: [OMPI users] NVCC mpi.h: error: attribute &quot;__deprecated__&quot; does not take arguments"</a>
<li><strong>Previous message:</strong> <a href="19609.php">Ralph Castain: "Re: [OMPI users] Naming MPI_Spawn children"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19611.php">Jeff Squyres: "Re: [OMPI users] NVCC mpi.h: error: attribute &quot;__deprecated__&quot; does not take arguments"</a>
<li><strong>Reply:</strong> <a href="19611.php">Jeff Squyres: "Re: [OMPI users] NVCC mpi.h: error: attribute &quot;__deprecated__&quot; does not take arguments"</a>
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
