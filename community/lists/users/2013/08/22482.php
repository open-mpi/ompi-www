<?
$subject_val = "Re: [OMPI users] Fault Tolerant Features in OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 12 15:14:42 2013" -->
<!-- isoreceived="20130812191442" -->
<!-- sent="Mon, 12 Aug 2013 16:17:13 -0300" -->
<!-- isosent="20130812191713" -->
<!-- name="Edson Tavares de Camargo" -->
<!-- email="etcamargo_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fault Tolerant Features in OpenMPI" -->
<!-- id="c18e130d81299a9040fb2418d80d5d7d.squirrel_at_webmail.inf.ufpr.br" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="841CBB59-24A6-4574-8652-06B2D4BBBC32_at_icl.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Fault Tolerant Features in OpenMPI<br>
<strong>From:</strong> Edson Tavares de Camargo (<em>etcamargo_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-12 15:17:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22483.php">Gus Correa: "Re: [OMPI users] Error - BTLs attempted: self sm - on a cluster with IB and openib btl enabled"</a>
<li><strong>Previous message:</strong> <a href="22481.php">Ralph Castain: "Re: [OMPI users] Error - BTLs attempted: self sm - on a cluster with IB and openib btl enabled"</a>
<li><strong>In reply to:</strong> <a href="22479.php">George Bosilca: "Re: [OMPI users] Fault Tolerant Features in OpenMPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, George!
<br>
<p>I had studied the ULFM document before begin the tests with failure
<br>
detection in open mpi and seems me a good choice.
<br>
<p>But I'm having trouble with the ULFM-enabled version of Open MPI
<br>
(openmpi-1.7ft_b3.tar.gz). I follow the UFML setup (in
<br>
<a href="http://fault-tolerance.org/ulfm/ulfm-setup/">http://fault-tolerance.org/ulfm/ulfm-setup/</a>). The program compile seems
<br>
ok, but when running happens the error below. Any mpi program does not run
<br>
anymore (with ou without ft). Could you help me?
<br>
<p><p>Thanks a lot!
<br>
<p>Edson
<br>
<p>Linux version 3.2.0-51-generic (buildd_at_allspice) (gcc version 4.6.3
<br>
(Ubuntu/Linaro 4.6.3-1ubuntu5) ) #77-Ubuntu SMP Wed Jul 24 20:18:19 UTC
<br>
2013
<br>
<p>----------------
<br>
edson_at_edson:~/UFPR/MPI_Fault$ mpirun -np 8 -am ft-enable-mpi ./teste1
<br>
[edson:04372] mca: base: component_find: unable to open
<br>
/usr/local/lib/openmpi/mca_errmgr_default:
<br>
/usr/local/lib/openmpi/mca_errmgr_default.so: undefined symbol:
<br>
orte_errmgr_base_error_abort (ignored)
<br>
[edson:04372] mca: base: component_find: unable to open
<br>
/usr/local/lib/openmpi/mca_grpcomm_basic:
<br>
/usr/local/lib/openmpi/mca_grpcomm_basic.so: undefined symbol:
<br>
opal_profile_file (ignored)
<br>
[edson:04372] *** Process received signal ***
<br>
[edson:04372] Signal: Segmentation fault (11)
<br>
[edson:04372] Signal code: Address not mapped (1)
<br>
[edson:04372] Failing at address: 0x14
<br>
[edson:04372] [ 0] /lib/x86_64-linux-gnu/libpthread.so.0(+0xfcb0)
<br>
[0x7f5d425bdcb0]
<br>
[edson:04372] [ 1]
<br>
/usr/local/lib/openmpi/mca_rmaps_load_balance.so(+0xa88) [0x7f5d409bca88]
<br>
[edson:04372] [ 2]
<br>
/usr/local/lib/libopen-rte.so.0(orte_rmaps_base_map_job+0x112)
<br>
[0x7f5d42838132]
<br>
[edson:04372] [ 3]
<br>
/usr/local/lib/libopen-rte.so.0(orte_plm_base_setup_job+0x11c)
<br>
[0x7f5d4283362c]
<br>
[edson:04372] [ 4] /usr/local/lib/openmpi/mca_plm_rsh.so(+0x4ee7)
<br>
[0x7f5d401a9ee7]
<br>
[edson:04372] [ 5] mpirun(orterun+0xeb0) [0x404420]
<br>
[edson:04372] [ 6] mpirun(main+0x20) [0x4033c4]
<br>
[edson:04372] [ 7] /lib/x86_64-linux-gnu/libc.so.6(__libc_start_main+0xed)
<br>
[0x7f5d4221076d]
<br>
[edson:04372] [ 8] mpirun() [0x4032e9]
<br>
[edson:04372] *** End of error message ***
<br>
Falha de segmenta&#231;&#227;o (imagem do n&#250;cleo gravada)
<br>
<p>-----------
<br>
<p><p><span class="quotelev1">&gt; Edson,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Based on your questions I would suggest you take a look at the
</span><br>
<span class="quotelev1">&gt; ULFM-enabled version of Open MPI. You can find it at
</span><br>
<span class="quotelev1">&gt; <a href="http://fault-tolerance.org/">http://fault-tolerance.org/</a>.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; George.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 11, 2013, at 15:33 , Edson Tavares de Camargo
</span><br>
<span class="quotelev1">&gt; &lt;etcamargo_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks a lot for your reply, Ralph!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Could you tell me in what situation the error handler would be called in
</span><br>
<span class="quotelev2">&gt;&gt; the 1.6.5 version?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I had thought that a failure in a process would be catched by the error
</span><br>
<span class="quotelev2">&gt;&gt; handler. Kill, or abort, the process wouldn't the same behaviour?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In the 1.7.4 release if a process was killed the error handler will be
</span><br>
<span class="quotelev2">&gt;&gt; catched?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Edson
</span><br>
<span class="quotelev2">&gt;&gt; ---------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The error handler wouldn't be called in that situation - we simply
</span><br>
<span class="quotelev3">&gt;&gt;&gt; abort
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the job. We expect to provide that integration in something like the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1.7.4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; release milestone.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Aug 10, 2013, at 11:07 AM, Edson Tavares de Camargo
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;etcamargo_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi All,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I was looking for posts about fault tolerant in MPI and I found the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; post
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; below:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2012/06/19658.php">http://www.open-mpi.org/community/lists/users/2012/06/19658.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I am trying to understand  all work about failures detection present
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; open-mpi. So, I began with a simple application, a ring application
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (ring.c) , to understand errors handlers. But, it seems me that didn't
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; work, why not? (the code is below)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The application (the process) was running in the same machine with the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; following code line:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $ mpiexec -n 4 ring
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; While the  ring application was running, one of the process was
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; killed.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; So, the entire application stopped (ok until here), but didn't show me
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; error message. The line if(error != MPI_SUCCESS) should not worked?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I am using the mpiexec (OpenRTE) 1.6.5.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks in advance,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Edson
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -----------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #include &lt;time.h&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; int main( int argc, char *argv[] )
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   int rank, size;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   int n = 0;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   int tag = 0;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   int error;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   int root = 0;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   int next, previous;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   double start = 0;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   double finish = 0;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   MPI_Status status;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   MPI_Init( &amp;argc, &amp;argv );
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   // error handler
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   MPI_Comm_set_errhandler(MPI_COMM_WORLD, MPI_ERRORS_RETURN);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   do {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       next = (rank + 1) % (size);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       n++;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       if(rank != 0){
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;           previous = (rank - 1);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       }else{
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;           previous = size - 1;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       if (rank =
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22483.php">Gus Correa: "Re: [OMPI users] Error - BTLs attempted: self sm - on a cluster with IB and openib btl enabled"</a>
<li><strong>Previous message:</strong> <a href="22481.php">Ralph Castain: "Re: [OMPI users] Error - BTLs attempted: self sm - on a cluster with IB and openib btl enabled"</a>
<li><strong>In reply to:</strong> <a href="22479.php">George Bosilca: "Re: [OMPI users] Fault Tolerant Features in OpenMPI"</a>
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
