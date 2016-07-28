<?
$subject_val = "Re: [OMPI users] MPI_Init_thread(..., MPI_THREAD_SERIALIZED) hangs under OSX 10.8.4 if compiled	with	OpenMPI 1.7.1";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 18 20:59:41 2013" -->
<!-- isoreceived="20130619005941" -->
<!-- sent="Tue, 18 Jun 2013 17:59:40 -0700" -->
<!-- isosent="20130619005940" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Init_thread(..., MPI_THREAD_SERIALIZED) hangs under OSX 10.8.4 if compiled	with	OpenMPI 1.7.1" -->
<!-- id="597F25F8-067E-4DC4-B9DB-B4CA826B7E16_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="F198CC6C-BB3C-40B3-95A6-528A4AB535CA_at_umb.no" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Init_thread(..., MPI_THREAD_SERIALIZED) hangs under OSX 10.8.4 if compiled	with	OpenMPI 1.7.1<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-18 20:59:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22129.php">Elias Rudberg: "Re: [OMPI users] MPI_Init_thread hangs in OpenMPI 1.7.1 when using --enable-mpi-thread-multiple"</a>
<li><strong>Previous message:</strong> <a href="22127.php">Blosch, Edwin L: "[OMPI users] Application hangs on mpi_waitall"</a>
<li><strong>In reply to:</strong> <a href="22126.php">Hans Ekkehard Plesser: "Re: [OMPI users] MPI_Init_thread(..., MPI_THREAD_SERIALIZED) hangs under OSX 10.8.4 if compiled	with	OpenMPI 1.7.1"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'd suggest just pursuing this with her thread then - like I said, with the config I passed her, it works fine for me, and that is on OSX 10.8.4. However, I use the gcc compiler and not clang.
<br>
<p><p>On Jun 18, 2013, at 2:23 PM, Hans Ekkehard Plesser &lt;hans.ekkehard.plesser_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have tried building with --enable-opal-multi-threads (it was missing in MacPorts), but that did not help.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My problem seems very similar to that reported by Elias Rudberg in a separate thread, using Ubuntu.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am using the clang compiler.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; Hans
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 18. juni 2013, at 00.08, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; For 1.7, you also have to configure with --enable-opal-multi-thread. I suspect MacPorts doesn't do that, so you might want to configure and build your own version.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 16, 2013, at 5:27 AM, Hans Ekkehard Plesser &lt;hans.ekkehard.plesser_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 15. juni 2013, at 01.31, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I have no idea how MacPorts configures OMPI - did you check the output of ompi_info to see if threading was even enabled?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_info shows
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        Thread support: posix (MPI_THREAD_MULTIPLE: yes, progress: no)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for 1.6.4 and 1.7.1. I could post the full ompi_info if that would help.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Best regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hans
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Jun 14, 2013, at 3:12 PM, Hans Ekkehard Plesser &lt;hans.ekkehard.plesser_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi!
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I use OpenMPI 1.7.1 from MacPorts (+threads +gcc47). When compiling a simple hello world program calling
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI_Init_thread(&amp;argc, &amp;argv, MPI_THREAD_SERIALIZED, &amp;provided);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the program hangs if run on more than one process. All works fine if I
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; - either use MPI_THREAD_SINGLE
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; - or use OpenMPI 1.6.4.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The actual compiler invocation and compiler version are
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [Macintosh:~/tmp/hw] hep% openmpicc -o hw_mpi hw_mpi.c --showme
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /usr/bin/clang -o hw_mpi hw_mpi.c -I/opt/local/include/openmpi -L/opt/local/lib -lmpi
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [Macintosh:~/tmp/hw] hep% /usr/bin/clang --version
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Apple clang version 4.1 (tags/Apple/clang-421.11.66) (based on LLVM 3.1svn)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Target: x86_64-apple-darwin12.4.0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thread model: posix
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The full program code is shown below. I have also reported this to the MacPorts bug tracker.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Best regards,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hans E Plesser
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; int main(int argc, char **argv)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; int provided;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI_Init_thread(&amp;argc, &amp;argv, MPI_THREAD_SERIALIZED, &amp;provided);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; printf(&quot;Provided threading level: %d.\n&quot;, provided);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; int rank;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; printf(&quot;Hello, world! This is rank %d.\n&quot;, rank);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; return 0;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Dr. Hans Ekkehard Plesser, Associate Professor
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Head, Basic Science Section
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Dept. of Mathematical Sciences and Technology
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Norwegian University of Life Sciences
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; PO Box 5003, 1432 Aas, Norway
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Phone +47 6496 5467
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Fax   +47 6496 5401
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Email hans.ekkehard.plesser_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Home  <a href="http://arken.umb.no/~plesser">http://arken.umb.no/~plesser</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dr. Hans Ekkehard Plesser, Associate Professor
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Head, Basic Science Section
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dept. of Mathematical Sciences and Technology
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Norwegian University of Life Sciences
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PO Box 5003, 1432 Aas, Norway
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Phone +47 6496 5467
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Fax   +47 6496 5401
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Email hans.ekkehard.plesser_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Home  <a href="http://arken.umb.no/~plesser">http://arken.umb.no/~plesser</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="22129.php">Elias Rudberg: "Re: [OMPI users] MPI_Init_thread hangs in OpenMPI 1.7.1 when using --enable-mpi-thread-multiple"</a>
<li><strong>Previous message:</strong> <a href="22127.php">Blosch, Edwin L: "[OMPI users] Application hangs on mpi_waitall"</a>
<li><strong>In reply to:</strong> <a href="22126.php">Hans Ekkehard Plesser: "Re: [OMPI users] MPI_Init_thread(..., MPI_THREAD_SERIALIZED) hangs under OSX 10.8.4 if compiled	with	OpenMPI 1.7.1"</a>
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
