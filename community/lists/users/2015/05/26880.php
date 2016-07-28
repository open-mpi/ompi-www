<?
$subject_val = "Re: [OMPI users] Openmpi 1.8.5 on Linux with threading support";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 19 09:34:34 2015" -->
<!-- isoreceived="20150519133434" -->
<!-- sent="Tue, 19 May 2015 07:34:18 -0600" -->
<!-- isosent="20150519133418" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Openmpi 1.8.5 on Linux with threading support" -->
<!-- id="CAMD57odJKAOjvXSNZVy_O-20qs2du8VAU4MEbV3jo4M+KOo2NA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="555B18CF.8050901_at_nilo.pro.br" -->
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
<strong>Subject:</strong> Re: [OMPI users] Openmpi 1.8.5 on Linux with threading support<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-19 09:34:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26881.php">Lev Givon: "[OMPI users] cuIpcOpenMemHandle failure when using OpenMPI 1.8.5 with CUDA 7.0 and Multi-Process Service"</a>
<li><strong>Previous message:</strong> <a href="26879.php">Nilo Menezes: "[OMPI users] Openmpi 1.8.5 on Linux with threading support"</a>
<li><strong>In reply to:</strong> <a href="26879.php">Nilo Menezes: "[OMPI users] Openmpi 1.8.5 on Linux with threading support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26890.php">Nilo Menezes: "Re: [OMPI users] Openmpi 1.8.5 on Linux with threading support"</a>
<li><strong>Reply:</strong> <a href="26890.php">Nilo Menezes: "Re: [OMPI users] Openmpi 1.8.5 on Linux with threading support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It looks like you have PSM enabled cards on your system as well as
<br>
Ethernet, and we are picking that up. Try adding &quot;-mca pml ob1&quot; to your cmd
<br>
line and see if that helps
<br>
<p><p>On Tue, May 19, 2015 at 5:04 AM, Nilo Menezes &lt;nilo_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm trying to run openmpi with multithread support enabled.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm getting this error messages before init finishes:
</span><br>
<span class="quotelev1">&gt; [node011:61627] PSM returned unhandled/unknown connect error: Operation
</span><br>
<span class="quotelev1">&gt; timed out
</span><br>
<span class="quotelev1">&gt; [node011:61627] PSM EP connect error (unknown connect error):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Init_thread
</span><br>
<span class="quotelev1">&gt; *** on a NULL communicator
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
</span><br>
<span class="quotelev1">&gt; ***    and potentially your MPI job)
</span><br>
<span class="quotelev1">&gt; [node005:51948] Local abort before MPI_INIT completed successfully; not
</span><br>
<span class="quotelev1">&gt; able to aggregate error messages, and not able to guarantee that all other
</span><br>
<span class="quotelev1">&gt; processes were killed!
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Init_thread
</span><br>
<span class="quotelev1">&gt; *** on a NULL communicator
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
</span><br>
<span class="quotelev1">&gt; ***    and potentially your MPI job)
</span><br>
<span class="quotelev1">&gt; [node039:57062] Local abort before MPI_INIT completed successfully; not
</span><br>
<span class="quotelev1">&gt; able to aggregate error messages, and not able to guarantee that all other
</span><br>
<span class="quotelev1">&gt; processes were killed!
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Init_thread
</span><br>
<span class="quotelev1">&gt; *** on a NULL communicator
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
</span><br>
<span class="quotelev1">&gt; ***    and potentially your MPI job)
</span><br>
<span class="quotelev1">&gt; [node012:64036] Local abort before MPI_INIT completed successfully; not
</span><br>
<span class="quotelev1">&gt; able to aggregate error messages, and not able to guarantee that all other
</span><br>
<span class="quotelev1">&gt; processes were killed!
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Init_thread
</span><br>
<span class="quotelev1">&gt; *** on a NULL communicator
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
</span><br>
<span class="quotelev1">&gt; ***    and potentially your MPI job)
</span><br>
<span class="quotelev1">&gt; [node008:14098] Local abort before MPI_INIT completed successfully; not
</span><br>
<span class="quotelev1">&gt; able to aggregate error messages, and not able to guarantee that all other
</span><br>
<span class="quotelev1">&gt; processes were killed!
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Init_thread
</span><br>
<span class="quotelev1">&gt; *** on a NULL communicator
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
</span><br>
<span class="quotelev1">&gt; ***    and potentially your MPI job)
</span><br>
<span class="quotelev1">&gt; [node011:61627] Local abort before MPI_INIT completed successfully; not
</span><br>
<span class="quotelev1">&gt; able to aggregate error messages, and not able to guarantee that all other
</span><br>
<span class="quotelev1">&gt; processes were killed!
</span><br>
<span class="quotelev1">&gt; [node005:51887] 1 more process has sent help message help-mpi-runtime /
</span><br>
<span class="quotelev1">&gt; mpi_init:startup:internal-failure
</span><br>
<span class="quotelev1">&gt; [node005:51887] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see
</span><br>
<span class="quotelev1">&gt; all help / error messages
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The library was configured with:
</span><br>
<span class="quotelev1">&gt; ./configure \
</span><br>
<span class="quotelev1">&gt; --prefix=/home/opt \
</span><br>
<span class="quotelev1">&gt; --enable-static \
</span><br>
<span class="quotelev1">&gt; --enable-mpi-thread-multiple \
</span><br>
<span class="quotelev1">&gt; --with-threads
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; gcc 4.8.2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Linux:
</span><br>
<span class="quotelev1">&gt; Linux node001 2.6.32-279.14.1.el6.x86_64 #1 SMP Mon Oct 15 13:44:51 EDT
</span><br>
<span class="quotelev1">&gt; 2012 x86_64 x86_64 x86_64 GNU/Linux
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The job was started with:
</span><br>
<span class="quotelev1">&gt; sbatch --nodes=6 --ntasks=30 --mem=4096  -o result/TOn6t30.txt -e
</span><br>
<span class="quotelev1">&gt; result/TEn6t30.txt job.sh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; job.sh contains:
</span><br>
<span class="quotelev1">&gt; mpirun --mca btl tcp,self \
</span><br>
<span class="quotelev1">&gt;        --mca btl_tcp_if_include 172.24.38.0/24 \
</span><br>
<span class="quotelev1">&gt;        --mca oob_tcp_if_include eth0 \
</span><br>
<span class="quotelev1">&gt; /home/umons/info/menezes/drsim/build/NameResolution/gameoflife_mpi2
</span><br>
<span class="quotelev1">&gt; --columns=1000 --rows=1000
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I call MPI_INIT with:
</span><br>
<span class="quotelev1">&gt;     int provided;
</span><br>
<span class="quotelev1">&gt;     MPI_Init_thread(&amp;argc, &amp;argv, MPI_THREAD_MULTIPLE, &amp;provided);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The program is a simple game of life simulation. It runs fine in a single
</span><br>
<span class="quotelev1">&gt; node (with one or many tasks). But fails at random nodes when distributed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any hint may help.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best Regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Nilo Menezes
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/05/26879.php">http://www.open-mpi.org/community/lists/users/2015/05/26879.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26880/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26881.php">Lev Givon: "[OMPI users] cuIpcOpenMemHandle failure when using OpenMPI 1.8.5 with CUDA 7.0 and Multi-Process Service"</a>
<li><strong>Previous message:</strong> <a href="26879.php">Nilo Menezes: "[OMPI users] Openmpi 1.8.5 on Linux with threading support"</a>
<li><strong>In reply to:</strong> <a href="26879.php">Nilo Menezes: "[OMPI users] Openmpi 1.8.5 on Linux with threading support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26890.php">Nilo Menezes: "Re: [OMPI users] Openmpi 1.8.5 on Linux with threading support"</a>
<li><strong>Reply:</strong> <a href="26890.php">Nilo Menezes: "Re: [OMPI users] Openmpi 1.8.5 on Linux with threading support"</a>
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
