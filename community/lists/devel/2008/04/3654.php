<?
$subject_val = "[OMPI devel] init_thread + spawn error";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr  3 18:18:17 2008" -->
<!-- isoreceived="20080403221817" -->
<!-- sent="Thu, 3 Apr 2008 19:18:05 -0300" -->
<!-- isosent="20080403221805" -->
<!-- name="Joao Vicente Lima" -->
<!-- email="joao.lima.mail_at_[hidden]" -->
<!-- subject="[OMPI devel] init_thread + spawn error" -->
<!-- id="2899306a0804031518m64149353n4576840c6de603e6_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] init_thread + spawn error<br>
<strong>From:</strong> Joao Vicente Lima (<em>joao.lima.mail_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-03 18:18:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3655.php">Ralph Castain: "Re: [OMPI devel] init_thread + spawn error"</a>
<li><strong>Previous message:</strong> <a href="3653.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_connect/Accept"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3655.php">Ralph Castain: "Re: [OMPI devel] init_thread + spawn error"</a>
<li><strong>Reply:</strong> <a href="3655.php">Ralph Castain: "Re: [OMPI devel] init_thread + spawn error"</a>
<li><strong>Reply:</strong> <a href="3656.php">Tim Prins: "Re: [OMPI devel] init_thread + spawn error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
I getting a error on call init_thread and comm_spawn on this code:
<br>
<p>#include &quot;mpi.h&quot;
<br>
#include &lt;stdio.h&gt;
<br>
<p>int
<br>
main (int argc, char *argv[])
<br>
{
<br>
&nbsp;&nbsp;int provided;
<br>
&nbsp;&nbsp;MPI_Comm parentcomm, intercomm;
<br>
<p>&nbsp;&nbsp;MPI_Init_thread(&amp;argc, &amp;argv, MPI_THREAD_MULTIPLE, &amp;provided);
<br>
&nbsp;&nbsp;MPI_Comm_get_parent (&amp;parentcomm);
<br>
<p>&nbsp;&nbsp;if (parentcomm == MPI_COMM_NULL)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf (&quot;spawning ... \n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_spawn (&quot;./spawn1&quot;, MPI_ARGV_NULL, 1,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_INFO_NULL, 0, MPI_COMM_SELF, &amp;intercomm, MPI_ERRCODES_IGNORE);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_disconnect (&amp;intercomm);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;else
<br>
&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf (&quot;child!\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_disconnect (&amp;parentcomm);
<br>
&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;MPI_Finalize ();
<br>
&nbsp;&nbsp;return 0;
<br>
}
<br>
<p>and the error is:
<br>
<p>spawning ...
<br>
opal_mutex_lock(): Resource deadlock avoided
<br>
[localhost:18718] *** Process received signal ***
<br>
[localhost:18718] Signal: Aborted (6)
<br>
[localhost:18718] Signal code:  (-6)
<br>
[localhost:18718] [ 0] /lib/libpthread.so.0 [0x2b6e5d9fced0]
<br>
[localhost:18718] [ 1] /lib/libc.so.6(gsignal+0x35) [0x2b6e5dc3b3c5]
<br>
[localhost:18718] [ 2] /lib/libc.so.6(abort+0x10e) [0x2b6e5dc3c73e]
<br>
[localhost:18718] [ 3] /usr/local/mpi/ompi-svn/lib/libmpi.so.0 [0x2b6e5c9560ff]
<br>
[localhost:18718] [ 4] /usr/local/mpi/ompi-svn/lib/libmpi.so.0 [0x2b6e5c95601d]
<br>
[localhost:18718] [ 5] /usr/local/mpi/ompi-svn/lib/libmpi.so.0 [0x2b6e5c9560ac]
<br>
[localhost:18718] [ 6] /usr/local/mpi/ompi-svn/lib/libmpi.so.0 [0x2b6e5c956a93]
<br>
[localhost:18718] [ 7] /usr/local/mpi/ompi-svn/lib/libmpi.so.0 [0x2b6e5c9569dd]
<br>
[localhost:18718] [ 8] /usr/local/mpi/ompi-svn/lib/libmpi.so.0 [0x2b6e5c95797d]
<br>
[localhost:18718] [ 9]
<br>
/usr/local/mpi/ompi-svn/lib/libmpi.so.0(ompi_proc_unpack+0x1ec)
<br>
[0x2b6e5c957dd9]
<br>
[localhost:18718] [10]
<br>
/usr/local/mpi/ompi-svn/lib/openmpi/mca_dpm_orte.so [0x2b6e607f05cf]
<br>
[localhost:18718] [11]
<br>
/usr/local/mpi/ompi-svn/lib/libmpi.so.0(MPI_Comm_spawn+0x459)
<br>
[0x2b6e5c98ede9]
<br>
[localhost:18718] [12] ./spawn1(main+0x7a) [0x400ae2]
<br>
[localhost:18718] [13] /lib/libc.so.6(__libc_start_main+0xf4) [0x2b6e5dc28b74]
<br>
[localhost:18718] [14] ./spawn1 [0x4009d9]
<br>
[localhost:18718] *** End of error message ***
<br>
opal_mutex_lock(): Resource deadlock avoided
<br>
[localhost:18719] *** Process received signal ***
<br>
[localhost:18719] Signal: Aborted (6)
<br>
[localhost:18719] Signal code:  (-6)
<br>
[localhost:18719] [ 0] /lib/libpthread.so.0 [0x2b9317a17ed0]
<br>
[localhost:18719] [ 1] /lib/libc.so.6(gsignal+0x35) [0x2b9317c563c5]
<br>
[localhost:18719] [ 2] /lib/libc.so.6(abort+0x10e) [0x2b9317c5773e]
<br>
[localhost:18719] [ 3] /usr/local/mpi/ompi-svn/lib/libmpi.so.0 [0x2b93169710ff]
<br>
[localhost:18719] [ 4] /usr/local/mpi/ompi-svn/lib/libmpi.so.0 [0x2b931697101d]
<br>
[localhost:18719] [ 5] /usr/local/mpi/ompi-svn/lib/libmpi.so.0 [0x2b93169710ac]
<br>
[localhost:18719] [ 6] /usr/local/mpi/ompi-svn/lib/libmpi.so.0 [0x2b9316971a93]
<br>
[localhost:18719] [ 7] /usr/local/mpi/ompi-svn/lib/libmpi.so.0 [0x2b93169719dd]
<br>
[localhost:18719] [ 8] /usr/local/mpi/ompi-svn/lib/libmpi.so.0 [0x2b931697297d]
<br>
[localhost:18719] [ 9]
<br>
/usr/local/mpi/ompi-svn/lib/libmpi.so.0(ompi_proc_unpack+0x1ec)
<br>
[0x2b9316972dd9]
<br>
[localhost:18719] [10]
<br>
/usr/local/mpi/ompi-svn/lib/openmpi/mca_dpm_orte.so [0x2b931a80b5cf]
<br>
[localhost:18719] [11]
<br>
/usr/local/mpi/ompi-svn/lib/openmpi/mca_dpm_orte.so [0x2b931a80dad7]
<br>
[localhost:18719] [12] /usr/local/mpi/ompi-svn/lib/libmpi.so.0 [0x2b9316977207]
<br>
[localhost:18719] [13]
<br>
/usr/local/mpi/ompi-svn/lib/libmpi.so.0(PMPI_Init_thread+0x166)
<br>
[0x2b93169b8622]
<br>
[localhost:18719] [14] ./spawn1(main+0x25) [0x400a8d]
<br>
[localhost:18719] [15] /lib/libc.so.6(__libc_start_main+0xf4) [0x2b9317c43b74]
<br>
[localhost:18719] [16] ./spawn1 [0x4009d9]
<br>
[localhost:18719] *** End of error message ***
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that process rank 0 with PID 18719 on node localhost
<br>
exited on signal 6 (Aborted).
<br>
--------------------------------------------------------------------------
<br>
<p>if I change MPI_Init_thread to MPI_Init all works.
<br>
some suggest ?
<br>
The attachments contain my ompi_info (r18077) and config.log.
<br>
<p>thanks in advance,
<br>
Joao.
<br>
<p>

<br><hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-3654/config.log.gz">config.log.gz</a>
</ul>
<!-- attachment="config.log.gz" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-3654/ompi_info.txt.gz">ompi_info.txt.gz</a>
</ul>
<!-- attachment="ompi_info.txt.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3655.php">Ralph Castain: "Re: [OMPI devel] init_thread + spawn error"</a>
<li><strong>Previous message:</strong> <a href="3653.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_connect/Accept"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3655.php">Ralph Castain: "Re: [OMPI devel] init_thread + spawn error"</a>
<li><strong>Reply:</strong> <a href="3655.php">Ralph Castain: "Re: [OMPI devel] init_thread + spawn error"</a>
<li><strong>Reply:</strong> <a href="3656.php">Tim Prins: "Re: [OMPI devel] init_thread + spawn error"</a>
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
