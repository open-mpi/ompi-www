<?
$subject_val = "[OMPI users] MPI_Init_thread(..., MPI_THREAD_SERIALIZED) hangs under OSX 10.8.4 if compiled with OpenMPI 1.7.1";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 14 18:14:23 2013" -->
<!-- isoreceived="20130614221423" -->
<!-- sent="Fri, 14 Jun 2013 22:12:45 +0000" -->
<!-- isosent="20130614221245" -->
<!-- name="Hans Ekkehard Plesser" -->
<!-- email="hans.ekkehard.plesser_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_Init_thread(..., MPI_THREAD_SERIALIZED) hangs under OSX 10.8.4 if compiled with OpenMPI 1.7.1" -->
<!-- id="310BDD3D-5798-4A37-BE93-414FC666A116_at_umb.no" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] MPI_Init_thread(..., MPI_THREAD_SERIALIZED) hangs under OSX 10.8.4 if compiled with OpenMPI 1.7.1<br>
<strong>From:</strong> Hans Ekkehard Plesser (<em>hans.ekkehard.plesser_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-14 18:12:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22099.php">Ralph Castain: "Re: [OMPI users] MPI_Init_thread(..., MPI_THREAD_SERIALIZED) hangs under OSX 10.8.4 if compiled with OpenMPI 1.7.1"</a>
<li><strong>Previous message:</strong> <a href="22097.php">Brian Budge: "Re: [OMPI users] MPI_THREAD_FUNNELED and enable-mpi-thread-multiple"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22099.php">Ralph Castain: "Re: [OMPI users] MPI_Init_thread(..., MPI_THREAD_SERIALIZED) hangs under OSX 10.8.4 if compiled with OpenMPI 1.7.1"</a>
<li><strong>Reply:</strong> <a href="22099.php">Ralph Castain: "Re: [OMPI users] MPI_Init_thread(..., MPI_THREAD_SERIALIZED) hangs under OSX 10.8.4 if compiled with OpenMPI 1.7.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi!
<br>
<p>I use OpenMPI 1.7.1 from MacPorts (+threads +gcc47). When compiling a simple hello world program calling
<br>
<p>MPI_Init_thread(&amp;argc, &amp;argv, MPI_THREAD_SERIALIZED, &amp;provided);
<br>
<p>the program hangs if run on more than one process. All works fine if I
<br>
<p>- either use MPI_THREAD_SINGLE
<br>
- or use OpenMPI 1.6.4.
<br>
<p>The actual compiler invocation and compiler version are
<br>
<p>[Macintosh:~/tmp/hw] hep% openmpicc -o hw_mpi hw_mpi.c --showme
<br>
/usr/bin/clang -o hw_mpi hw_mpi.c -I/opt/local/include/openmpi -L/opt/local/lib -lmpi
<br>
<p>[Macintosh:~/tmp/hw] hep% /usr/bin/clang --version
<br>
Apple clang version 4.1 (tags/Apple/clang-421.11.66) (based on LLVM 3.1svn)
<br>
Target: x86_64-apple-darwin12.4.0
<br>
Thread model: posix
<br>
<p>The full program code is shown below. I have also reported this to the MacPorts bug tracker.
<br>
<p>Best regards,
<br>
Hans E Plesser
<br>
<p>------
<br>
#include &lt;stdio.h&gt;
<br>
<p>#include &lt;mpi.h&gt;
<br>
<p>int main(int argc, char **argv)
<br>
{
<br>
&nbsp;int provided;
<br>
&nbsp;MPI_Init_thread(&amp;argc, &amp;argv, MPI_THREAD_SERIALIZED, &amp;provided);
<br>
<p>&nbsp;printf(&quot;Provided threading level: %d.\n&quot;, provided);
<br>
<p>&nbsp;int rank;
<br>
&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
<br>
<p>&nbsp;printf(&quot;Hello, world! This is rank %d.\n&quot;, rank);
<br>
<p>&nbsp;MPI_Finalize();
<br>
&nbsp;return 0;
<br>
}
<br>
------
<br>
<p><p><pre>
--
Dr. Hans Ekkehard Plesser, Associate Professor
Head, Basic Science Section
Dept. of Mathematical Sciences and Technology
Norwegian University of Life Sciences
PO Box 5003, 1432 Aas, Norway
Phone +47 6496 5467
Fax   +47 6496 5401
Email hans.ekkehard.plesser_at_[hidden]
Home  <a href="http://arken.umb.no/~plesser">http://arken.umb.no/~plesser</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22099.php">Ralph Castain: "Re: [OMPI users] MPI_Init_thread(..., MPI_THREAD_SERIALIZED) hangs under OSX 10.8.4 if compiled with OpenMPI 1.7.1"</a>
<li><strong>Previous message:</strong> <a href="22097.php">Brian Budge: "Re: [OMPI users] MPI_THREAD_FUNNELED and enable-mpi-thread-multiple"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22099.php">Ralph Castain: "Re: [OMPI users] MPI_Init_thread(..., MPI_THREAD_SERIALIZED) hangs under OSX 10.8.4 if compiled with OpenMPI 1.7.1"</a>
<li><strong>Reply:</strong> <a href="22099.php">Ralph Castain: "Re: [OMPI users] MPI_Init_thread(..., MPI_THREAD_SERIALIZED) hangs under OSX 10.8.4 if compiled with OpenMPI 1.7.1"</a>
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
