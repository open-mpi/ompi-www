<?
$subject_val = "Re: [OMPI users] MPI_Init_thread(..., MPI_THREAD_SERIALIZED) hangs under OSX 10.8.4 if compiled with OpenMPI 1.7.1";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 14 19:31:45 2013" -->
<!-- isoreceived="20130614233145" -->
<!-- sent="Fri, 14 Jun 2013 16:31:37 -0700" -->
<!-- isosent="20130614233137" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Init_thread(..., MPI_THREAD_SERIALIZED) hangs under OSX 10.8.4 if compiled with OpenMPI 1.7.1" -->
<!-- id="E55EE4B0-35D2-4AA7-AEFA-1B26BCC28F02_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="310BDD3D-5798-4A37-BE93-414FC666A116_at_umb.no" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Init_thread(..., MPI_THREAD_SERIALIZED) hangs under OSX 10.8.4 if compiled with OpenMPI 1.7.1<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-14 19:31:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22100.php">Ralph Castain: "Re: [OMPI users] MPI_THREAD_FUNNELED and enable-mpi-thread-multiple"</a>
<li><strong>Previous message:</strong> <a href="22098.php">Hans Ekkehard Plesser: "[OMPI users] MPI_Init_thread(..., MPI_THREAD_SERIALIZED) hangs under OSX 10.8.4 if compiled with OpenMPI 1.7.1"</a>
<li><strong>In reply to:</strong> <a href="22098.php">Hans Ekkehard Plesser: "[OMPI users] MPI_Init_thread(..., MPI_THREAD_SERIALIZED) hangs under OSX 10.8.4 if compiled with OpenMPI 1.7.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22105.php">Hans Ekkehard Plesser: "Re: [OMPI users] MPI_Init_thread(..., MPI_THREAD_SERIALIZED) hangs under OSX 10.8.4 if compiled with	OpenMPI 1.7.1"</a>
<li><strong>Reply:</strong> <a href="22105.php">Hans Ekkehard Plesser: "Re: [OMPI users] MPI_Init_thread(..., MPI_THREAD_SERIALIZED) hangs under OSX 10.8.4 if compiled with	OpenMPI 1.7.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have no idea how MacPorts configures OMPI - did you check the output of ompi_info to see if threading was even enabled?
<br>
<p><p>On Jun 14, 2013, at 3:12 PM, Hans Ekkehard Plesser &lt;hans.ekkehard.plesser_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I use OpenMPI 1.7.1 from MacPorts (+threads +gcc47). When compiling a simple hello world program calling
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MPI_Init_thread(&amp;argc, &amp;argv, MPI_THREAD_SERIALIZED, &amp;provided);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; the program hangs if run on more than one process. All works fine if I
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - either use MPI_THREAD_SINGLE
</span><br>
<span class="quotelev1">&gt; - or use OpenMPI 1.6.4.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The actual compiler invocation and compiler version are
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [Macintosh:~/tmp/hw] hep% openmpicc -o hw_mpi hw_mpi.c --showme
</span><br>
<span class="quotelev1">&gt; /usr/bin/clang -o hw_mpi hw_mpi.c -I/opt/local/include/openmpi -L/opt/local/lib -lmpi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [Macintosh:~/tmp/hw] hep% /usr/bin/clang --version
</span><br>
<span class="quotelev1">&gt; Apple clang version 4.1 (tags/Apple/clang-421.11.66) (based on LLVM 3.1svn)
</span><br>
<span class="quotelev1">&gt; Target: x86_64-apple-darwin12.4.0
</span><br>
<span class="quotelev1">&gt; Thread model: posix
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The full program code is shown below. I have also reported this to the MacPorts bug tracker.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; Hans E Plesser
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int main(int argc, char **argv)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; int provided;
</span><br>
<span class="quotelev1">&gt; MPI_Init_thread(&amp;argc, &amp;argv, MPI_THREAD_SERIALIZED, &amp;provided);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; printf(&quot;Provided threading level: %d.\n&quot;, provided);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int rank;
</span><br>
<span class="quotelev1">&gt; MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; printf(&quot;Hello, world! This is rank %d.\n&quot;, rank);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MPI_Finalize();
</span><br>
<span class="quotelev1">&gt; return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; ------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Dr. Hans Ekkehard Plesser, Associate Professor
</span><br>
<span class="quotelev1">&gt; Head, Basic Science Section
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Dept. of Mathematical Sciences and Technology
</span><br>
<span class="quotelev1">&gt; Norwegian University of Life Sciences
</span><br>
<span class="quotelev1">&gt; PO Box 5003, 1432 Aas, Norway
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Phone +47 6496 5467
</span><br>
<span class="quotelev1">&gt; Fax   +47 6496 5401
</span><br>
<span class="quotelev1">&gt; Email hans.ekkehard.plesser_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Home  <a href="http://arken.umb.no/~plesser">http://arken.umb.no/~plesser</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22100.php">Ralph Castain: "Re: [OMPI users] MPI_THREAD_FUNNELED and enable-mpi-thread-multiple"</a>
<li><strong>Previous message:</strong> <a href="22098.php">Hans Ekkehard Plesser: "[OMPI users] MPI_Init_thread(..., MPI_THREAD_SERIALIZED) hangs under OSX 10.8.4 if compiled with OpenMPI 1.7.1"</a>
<li><strong>In reply to:</strong> <a href="22098.php">Hans Ekkehard Plesser: "[OMPI users] MPI_Init_thread(..., MPI_THREAD_SERIALIZED) hangs under OSX 10.8.4 if compiled with OpenMPI 1.7.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22105.php">Hans Ekkehard Plesser: "Re: [OMPI users] MPI_Init_thread(..., MPI_THREAD_SERIALIZED) hangs under OSX 10.8.4 if compiled with	OpenMPI 1.7.1"</a>
<li><strong>Reply:</strong> <a href="22105.php">Hans Ekkehard Plesser: "Re: [OMPI users] MPI_Init_thread(..., MPI_THREAD_SERIALIZED) hangs under OSX 10.8.4 if compiled with	OpenMPI 1.7.1"</a>
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
