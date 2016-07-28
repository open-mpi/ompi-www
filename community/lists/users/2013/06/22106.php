<?
$subject_val = "[OMPI users] MPI_Init_thread hangs in OpenMPI 1.7.1 when using --enable-mpi-thread-multiple";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jun 16 11:54:57 2013" -->
<!-- isoreceived="20130616155457" -->
<!-- sent="Sun, 16 Jun 2013 17:54:46 +0200" -->
<!-- isosent="20130616155446" -->
<!-- name="Elias Rudberg" -->
<!-- email="elias.rudberg_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_Init_thread hangs in OpenMPI 1.7.1 when using --enable-mpi-thread-multiple" -->
<!-- id="20130616175446.20405syz3fbx0mo6_at_webmail.uu.se" -->
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
<strong>Subject:</strong> [OMPI users] MPI_Init_thread hangs in OpenMPI 1.7.1 when using --enable-mpi-thread-multiple<br>
<strong>From:</strong> Elias Rudberg (<em>elias.rudberg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-16 11:54:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22107.php">Singh, Bharati (GE Global Research, consultant): "[OMPI users] jobs are hanging with btl_openib_component error"</a>
<li><strong>Previous message:</strong> <a href="22105.php">Hans Ekkehard Plesser: "Re: [OMPI users] MPI_Init_thread(..., MPI_THREAD_SERIALIZED) hangs under OSX 10.8.4 if compiled with	OpenMPI 1.7.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22113.php">Ralph Castain: "Re: [OMPI users] MPI_Init_thread hangs in OpenMPI 1.7.1 when using --enable-mpi-thread-multiple"</a>
<li><strong>Reply:</strong> <a href="22113.php">Ralph Castain: "Re: [OMPI users] MPI_Init_thread hangs in OpenMPI 1.7.1 when using --enable-mpi-thread-multiple"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello!
<br>
<p>I would like to report what seems to be a bug in MPI_Init_thread in  
<br>
OpenMPI 1.7.1.
<br>
<p>The bug can be reproduced with the following test program  
<br>
(test_mpi_thread_support.c):
<br>
===========================================
<br>
#include &lt;mpi.h&gt;
<br>
#include &lt;stdio.h&gt;
<br>
int main(int argc, const char* argv[]) {
<br>
&nbsp;&nbsp;&nbsp;int provided = -1;
<br>
&nbsp;&nbsp;&nbsp;printf(&quot;Calling MPI_Init_thread...\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;MPI_Init_thread(NULL, NULL, MPI_THREAD_MULTIPLE, &amp;provided);
<br>
&nbsp;&nbsp;&nbsp;printf(&quot;MPI_Init_thread returned, provided = %d\n&quot;, provided);
<br>
&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
===========================================
<br>
<p>When trying to run this when OpenMPI was configured with  
<br>
--enable-mpi-thread-multiple, the program hangs when trying to run  
<br>
using anything more than one process.
<br>
<p>Steps I use to reproduce this in Ubuntu:
<br>
<p>(1) Download openmpi-1.7.1.tar.gz
<br>
<p>(2) Configure like this:
<br>
./configure --enable-mpi-thread-multiple
<br>
<p>(3) make
<br>
<p>(4) Compile test program like this:
<br>
mpicc test_mpi_thread_support.c
<br>
<p>(5) Run like this:
<br>
mpirun -np 2 ./a.out
<br>
Then you see the following two lines of output:
<br>
Calling MPI_Init_thread...
<br>
Calling MPI_Init_thread...
<br>
And then it hangs.
<br>
<p>MPI_Init_thread did not hang in earlier OpenMPI versions (for example  
<br>
it worked in 1.5.* and 1.6.*), so it seems like a bug introduced in 1.7.
<br>
<p>The description above shows how I reproduce this in Ubuntu on my local  
<br>
desktop computer, but the same problem exists for the OpenMPI 1.7.1  
<br>
installation at the UPPMAX computer center where I wan to run my code  
<br>
in the end. I don't know all details about how they installed it  
<br>
there, but I know they set --enable-mpi-thread-multiple. So maybe it  
<br>
hangs in 1.7.1 on any computer as long as you use MPI_THREAD_MULTIPLE.  
<br>
At least I have not seen it work anywhere.
<br>
<p>Do you agree that this is a bug, or am I doing something wrong?
<br>
<p>Best regards,
<br>
Elias
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22107.php">Singh, Bharati (GE Global Research, consultant): "[OMPI users] jobs are hanging with btl_openib_component error"</a>
<li><strong>Previous message:</strong> <a href="22105.php">Hans Ekkehard Plesser: "Re: [OMPI users] MPI_Init_thread(..., MPI_THREAD_SERIALIZED) hangs under OSX 10.8.4 if compiled with	OpenMPI 1.7.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22113.php">Ralph Castain: "Re: [OMPI users] MPI_Init_thread hangs in OpenMPI 1.7.1 when using --enable-mpi-thread-multiple"</a>
<li><strong>Reply:</strong> <a href="22113.php">Ralph Castain: "Re: [OMPI users] MPI_Init_thread hangs in OpenMPI 1.7.1 when using --enable-mpi-thread-multiple"</a>
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
