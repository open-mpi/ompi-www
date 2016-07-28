<?
$subject_val = "Re: [OMPI devel] init_thread + spawn error";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr  4 12:06:07 2008" -->
<!-- isoreceived="20080404160607" -->
<!-- sent="Fri, 04 Apr 2008 12:06:06 -0400" -->
<!-- isosent="20080404160606" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] init_thread + spawn error" -->
<!-- id="47F651EE.1010209_at_cs.indiana.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="2899306a0804031518m64149353n4576840c6de603e6_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] init_thread + spawn error<br>
<strong>From:</strong> Tim Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-04 12:06:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3657.php">Ralph H Castain: "[OMPI devel] Affect of compression on modex and launch messages"</a>
<li><strong>Previous message:</strong> <a href="3655.php">Ralph Castain: "Re: [OMPI devel] init_thread + spawn error"</a>
<li><strong>In reply to:</strong> <a href="3654.php">Joao Vicente Lima: "[OMPI devel] init_thread + spawn error"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the report. As Ralph indicated the threading support in Open 
<br>
MPI is not good right now, but we are working to make it better.
<br>
<p>I have filed a ticket (<a href="https://svn.open-mpi.org/trac/ompi/ticket/1267">https://svn.open-mpi.org/trac/ompi/ticket/1267</a>) 
<br>
so we do not loose track of this issue, and attached a potential fix to 
<br>
the ticket.
<br>
<p>Thanks,
<br>
<p>Tim
<br>
<p>Joao Vicente Lima wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; I getting a error on call init_thread and comm_spawn on this code:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int
</span><br>
<span class="quotelev1">&gt; main (int argc, char *argv[])
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;   int provided;
</span><br>
<span class="quotelev1">&gt;   MPI_Comm parentcomm, intercomm;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   MPI_Init_thread(&amp;argc, &amp;argv, MPI_THREAD_MULTIPLE, &amp;provided);
</span><br>
<span class="quotelev1">&gt;   MPI_Comm_get_parent (&amp;parentcomm);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   if (parentcomm == MPI_COMM_NULL)
</span><br>
<span class="quotelev1">&gt;     {
</span><br>
<span class="quotelev1">&gt;       printf (&quot;spawning ... \n&quot;);
</span><br>
<span class="quotelev1">&gt;       MPI_Comm_spawn (&quot;./spawn1&quot;, MPI_ARGV_NULL, 1,
</span><br>
<span class="quotelev1">&gt; 		      MPI_INFO_NULL, 0, MPI_COMM_SELF, &amp;intercomm, MPI_ERRCODES_IGNORE);
</span><br>
<span class="quotelev1">&gt;       MPI_Comm_disconnect (&amp;intercomm);
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;   else
</span><br>
<span class="quotelev1">&gt;   {
</span><br>
<span class="quotelev1">&gt;     printf (&quot;child!\n&quot;);
</span><br>
<span class="quotelev1">&gt;     MPI_Comm_disconnect (&amp;parentcomm);
</span><br>
<span class="quotelev1">&gt;   }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   MPI_Finalize ();
</span><br>
<span class="quotelev1">&gt;   return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and the error is:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; spawning ...
</span><br>
<span class="quotelev1">&gt; opal_mutex_lock(): Resource deadlock avoided
</span><br>
<span class="quotelev1">&gt; [localhost:18718] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [localhost:18718] Signal: Aborted (6)
</span><br>
<span class="quotelev1">&gt; [localhost:18718] Signal code:  (-6)
</span><br>
<span class="quotelev1">&gt; [localhost:18718] [ 0] /lib/libpthread.so.0 [0x2b6e5d9fced0]
</span><br>
<span class="quotelev1">&gt; [localhost:18718] [ 1] /lib/libc.so.6(gsignal+0x35) [0x2b6e5dc3b3c5]
</span><br>
<span class="quotelev1">&gt; [localhost:18718] [ 2] /lib/libc.so.6(abort+0x10e) [0x2b6e5dc3c73e]
</span><br>
<span class="quotelev1">&gt; [localhost:18718] [ 3] /usr/local/mpi/ompi-svn/lib/libmpi.so.0 [0x2b6e5c9560ff]
</span><br>
<span class="quotelev1">&gt; [localhost:18718] [ 4] /usr/local/mpi/ompi-svn/lib/libmpi.so.0 [0x2b6e5c95601d]
</span><br>
<span class="quotelev1">&gt; [localhost:18718] [ 5] /usr/local/mpi/ompi-svn/lib/libmpi.so.0 [0x2b6e5c9560ac]
</span><br>
<span class="quotelev1">&gt; [localhost:18718] [ 6] /usr/local/mpi/ompi-svn/lib/libmpi.so.0 [0x2b6e5c956a93]
</span><br>
<span class="quotelev1">&gt; [localhost:18718] [ 7] /usr/local/mpi/ompi-svn/lib/libmpi.so.0 [0x2b6e5c9569dd]
</span><br>
<span class="quotelev1">&gt; [localhost:18718] [ 8] /usr/local/mpi/ompi-svn/lib/libmpi.so.0 [0x2b6e5c95797d]
</span><br>
<span class="quotelev1">&gt; [localhost:18718] [ 9]
</span><br>
<span class="quotelev1">&gt; /usr/local/mpi/ompi-svn/lib/libmpi.so.0(ompi_proc_unpack+0x1ec)
</span><br>
<span class="quotelev1">&gt; [0x2b6e5c957dd9]
</span><br>
<span class="quotelev1">&gt; [localhost:18718] [10]
</span><br>
<span class="quotelev1">&gt; /usr/local/mpi/ompi-svn/lib/openmpi/mca_dpm_orte.so [0x2b6e607f05cf]
</span><br>
<span class="quotelev1">&gt; [localhost:18718] [11]
</span><br>
<span class="quotelev1">&gt; /usr/local/mpi/ompi-svn/lib/libmpi.so.0(MPI_Comm_spawn+0x459)
</span><br>
<span class="quotelev1">&gt; [0x2b6e5c98ede9]
</span><br>
<span class="quotelev1">&gt; [localhost:18718] [12] ./spawn1(main+0x7a) [0x400ae2]
</span><br>
<span class="quotelev1">&gt; [localhost:18718] [13] /lib/libc.so.6(__libc_start_main+0xf4) [0x2b6e5dc28b74]
</span><br>
<span class="quotelev1">&gt; [localhost:18718] [14] ./spawn1 [0x4009d9]
</span><br>
<span class="quotelev1">&gt; [localhost:18718] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; opal_mutex_lock(): Resource deadlock avoided
</span><br>
<span class="quotelev1">&gt; [localhost:18719] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [localhost:18719] Signal: Aborted (6)
</span><br>
<span class="quotelev1">&gt; [localhost:18719] Signal code:  (-6)
</span><br>
<span class="quotelev1">&gt; [localhost:18719] [ 0] /lib/libpthread.so.0 [0x2b9317a17ed0]
</span><br>
<span class="quotelev1">&gt; [localhost:18719] [ 1] /lib/libc.so.6(gsignal+0x35) [0x2b9317c563c5]
</span><br>
<span class="quotelev1">&gt; [localhost:18719] [ 2] /lib/libc.so.6(abort+0x10e) [0x2b9317c5773e]
</span><br>
<span class="quotelev1">&gt; [localhost:18719] [ 3] /usr/local/mpi/ompi-svn/lib/libmpi.so.0 [0x2b93169710ff]
</span><br>
<span class="quotelev1">&gt; [localhost:18719] [ 4] /usr/local/mpi/ompi-svn/lib/libmpi.so.0 [0x2b931697101d]
</span><br>
<span class="quotelev1">&gt; [localhost:18719] [ 5] /usr/local/mpi/ompi-svn/lib/libmpi.so.0 [0x2b93169710ac]
</span><br>
<span class="quotelev1">&gt; [localhost:18719] [ 6] /usr/local/mpi/ompi-svn/lib/libmpi.so.0 [0x2b9316971a93]
</span><br>
<span class="quotelev1">&gt; [localhost:18719] [ 7] /usr/local/mpi/ompi-svn/lib/libmpi.so.0 [0x2b93169719dd]
</span><br>
<span class="quotelev1">&gt; [localhost:18719] [ 8] /usr/local/mpi/ompi-svn/lib/libmpi.so.0 [0x2b931697297d]
</span><br>
<span class="quotelev1">&gt; [localhost:18719] [ 9]
</span><br>
<span class="quotelev1">&gt; /usr/local/mpi/ompi-svn/lib/libmpi.so.0(ompi_proc_unpack+0x1ec)
</span><br>
<span class="quotelev1">&gt; [0x2b9316972dd9]
</span><br>
<span class="quotelev1">&gt; [localhost:18719] [10]
</span><br>
<span class="quotelev1">&gt; /usr/local/mpi/ompi-svn/lib/openmpi/mca_dpm_orte.so [0x2b931a80b5cf]
</span><br>
<span class="quotelev1">&gt; [localhost:18719] [11]
</span><br>
<span class="quotelev1">&gt; /usr/local/mpi/ompi-svn/lib/openmpi/mca_dpm_orte.so [0x2b931a80dad7]
</span><br>
<span class="quotelev1">&gt; [localhost:18719] [12] /usr/local/mpi/ompi-svn/lib/libmpi.so.0 [0x2b9316977207]
</span><br>
<span class="quotelev1">&gt; [localhost:18719] [13]
</span><br>
<span class="quotelev1">&gt; /usr/local/mpi/ompi-svn/lib/libmpi.so.0(PMPI_Init_thread+0x166)
</span><br>
<span class="quotelev1">&gt; [0x2b93169b8622]
</span><br>
<span class="quotelev1">&gt; [localhost:18719] [14] ./spawn1(main+0x25) [0x400a8d]
</span><br>
<span class="quotelev1">&gt; [localhost:18719] [15] /lib/libc.so.6(__libc_start_main+0xf4) [0x2b9317c43b74]
</span><br>
<span class="quotelev1">&gt; [localhost:18719] [16] ./spawn1 [0x4009d9]
</span><br>
<span class="quotelev1">&gt; [localhost:18719] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that process rank 0 with PID 18719 on node localhost
</span><br>
<span class="quotelev1">&gt; exited on signal 6 (Aborted).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; if I change MPI_Init_thread to MPI_Init all works.
</span><br>
<span class="quotelev1">&gt; some suggest ?
</span><br>
<span class="quotelev1">&gt; The attachments contain my ompi_info (r18077) and config.log.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; thanks in advance,
</span><br>
<span class="quotelev1">&gt; Joao.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3657.php">Ralph H Castain: "[OMPI devel] Affect of compression on modex and launch messages"</a>
<li><strong>Previous message:</strong> <a href="3655.php">Ralph Castain: "Re: [OMPI devel] init_thread + spawn error"</a>
<li><strong>In reply to:</strong> <a href="3654.php">Joao Vicente Lima: "[OMPI devel] init_thread + spawn error"</a>
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
