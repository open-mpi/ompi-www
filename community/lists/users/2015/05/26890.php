<?
$subject_val = "Re: [OMPI users] Openmpi 1.8.5 on Linux with threading support";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 20 03:53:14 2015" -->
<!-- isoreceived="20150520075314" -->
<!-- sent="Wed, 20 May 2015 09:53:04 +0200" -->
<!-- isosent="20150520075304" -->
<!-- name="Nilo Menezes" -->
<!-- email="nilo_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Openmpi 1.8.5 on Linux with threading support" -->
<!-- id="555C3D60.5060201_at_nilo.pro.br" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAMD57odJKAOjvXSNZVy_O-20qs2du8VAU4MEbV3jo4M+KOo2NA_at_mail.gmail.com" -->
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
<strong>From:</strong> Nilo Menezes (<em>nilo_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-20 03:53:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26891.php">#MOHAMMAD ASIF KHAN#: "[OMPI users] 'The MPI_Comm_rank() function was called before MPI_INIT was invoked'"</a>
<li><strong>Previous message:</strong> <a href="26889.php">Lev Givon: "Re: [OMPI users] cuIpcOpenMemHandle failure when using OpenMPI 1.8.5 with CUDA 7.0 and Multi-Process Service"</a>
<li><strong>In reply to:</strong> <a href="26880.php">Ralph Castain: "Re: [OMPI users] Openmpi 1.8.5 on Linux with threading support"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you,
<br>
<p>That seems to solve the problem.
<br>
<p>Best Regards,
<br>
<p>Nilo Menezes
<br>
<p>On 5/19/2015 3:34 PM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; It looks like you have PSM enabled cards on your system as well as 
</span><br>
<span class="quotelev1">&gt; Ethernet, and we are picking that up. Try adding &quot;-mca pml ob1&quot; to 
</span><br>
<span class="quotelev1">&gt; your cmd line and see if that helps
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, May 19, 2015 at 5:04 AM, Nilo Menezes &lt;nilo_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:nilo_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I'm trying to run openmpi with multithread support enabled.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I'm getting this error messages before init finishes:
</span><br>
<span class="quotelev1">&gt;     [node011:61627] PSM returned unhandled/unknown connect error:
</span><br>
<span class="quotelev1">&gt;     Operation timed out
</span><br>
<span class="quotelev1">&gt;     [node011:61627] PSM EP connect error (unknown connect error):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     *** An error occurred in MPI_Init_thread
</span><br>
<span class="quotelev1">&gt;     *** on a NULL communicator
</span><br>
<span class="quotelev1">&gt;     *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now
</span><br>
<span class="quotelev1">&gt;     abort,
</span><br>
<span class="quotelev1">&gt;     ***    and potentially your MPI job)
</span><br>
<span class="quotelev1">&gt;     [node005:51948] Local abort before MPI_INIT completed
</span><br>
<span class="quotelev1">&gt;     successfully; not able to aggregate error messages, and not able
</span><br>
<span class="quotelev1">&gt;     to guarantee that all other processes were killed!
</span><br>
<span class="quotelev1">&gt;     *** An error occurred in MPI_Init_thread
</span><br>
<span class="quotelev1">&gt;     *** on a NULL communicator
</span><br>
<span class="quotelev1">&gt;     *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now
</span><br>
<span class="quotelev1">&gt;     abort,
</span><br>
<span class="quotelev1">&gt;     ***    and potentially your MPI job)
</span><br>
<span class="quotelev1">&gt;     [node039:57062] Local abort before MPI_INIT completed
</span><br>
<span class="quotelev1">&gt;     successfully; not able to aggregate error messages, and not able
</span><br>
<span class="quotelev1">&gt;     to guarantee that all other processes were killed!
</span><br>
<span class="quotelev1">&gt;     *** An error occurred in MPI_Init_thread
</span><br>
<span class="quotelev1">&gt;     *** on a NULL communicator
</span><br>
<span class="quotelev1">&gt;     *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now
</span><br>
<span class="quotelev1">&gt;     abort,
</span><br>
<span class="quotelev1">&gt;     ***    and potentially your MPI job)
</span><br>
<span class="quotelev1">&gt;     [node012:64036] Local abort before MPI_INIT completed
</span><br>
<span class="quotelev1">&gt;     successfully; not able to aggregate error messages, and not able
</span><br>
<span class="quotelev1">&gt;     to guarantee that all other processes were killed!
</span><br>
<span class="quotelev1">&gt;     *** An error occurred in MPI_Init_thread
</span><br>
<span class="quotelev1">&gt;     *** on a NULL communicator
</span><br>
<span class="quotelev1">&gt;     *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now
</span><br>
<span class="quotelev1">&gt;     abort,
</span><br>
<span class="quotelev1">&gt;     ***    and potentially your MPI job)
</span><br>
<span class="quotelev1">&gt;     [node008:14098] Local abort before MPI_INIT completed
</span><br>
<span class="quotelev1">&gt;     successfully; not able to aggregate error messages, and not able
</span><br>
<span class="quotelev1">&gt;     to guarantee that all other processes were killed!
</span><br>
<span class="quotelev1">&gt;     *** An error occurred in MPI_Init_thread
</span><br>
<span class="quotelev1">&gt;     *** on a NULL communicator
</span><br>
<span class="quotelev1">&gt;     *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now
</span><br>
<span class="quotelev1">&gt;     abort,
</span><br>
<span class="quotelev1">&gt;     ***    and potentially your MPI job)
</span><br>
<span class="quotelev1">&gt;     [node011:61627] Local abort before MPI_INIT completed
</span><br>
<span class="quotelev1">&gt;     successfully; not able to aggregate error messages, and not able
</span><br>
<span class="quotelev1">&gt;     to guarantee that all other processes were killed!
</span><br>
<span class="quotelev1">&gt;     [node005:51887] 1 more process has sent help message
</span><br>
<span class="quotelev1">&gt;     help-mpi-runtime / mpi_init:startup:internal-failure
</span><br>
<span class="quotelev1">&gt;     [node005:51887] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0
</span><br>
<span class="quotelev1">&gt;     to see all help / error messages
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     The library was configured with:
</span><br>
<span class="quotelev1">&gt;     ./configure \
</span><br>
<span class="quotelev1">&gt;     --prefix=/home/opt \
</span><br>
<span class="quotelev1">&gt;     --enable-static \
</span><br>
<span class="quotelev1">&gt;     --enable-mpi-thread-multiple \
</span><br>
<span class="quotelev1">&gt;     --with-threads
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     gcc 4.8.2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     On Linux:
</span><br>
<span class="quotelev1">&gt;     Linux node001 2.6.32-279.14.1.el6.x86_64 #1 SMP Mon Oct 15
</span><br>
<span class="quotelev1">&gt;     13:44:51 EDT 2012 x86_64 x86_64 x86_64 GNU/Linux
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     The job was started with:
</span><br>
<span class="quotelev1">&gt;     sbatch --nodes=6 --ntasks=30 --mem=4096  -o result/TOn6t30.txt -e
</span><br>
<span class="quotelev1">&gt;     result/TEn6t30.txt job.sh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     job.sh contains:
</span><br>
<span class="quotelev1">&gt;     mpirun --mca btl tcp,self \
</span><br>
<span class="quotelev1">&gt;            --mca btl_tcp_if_include 172.24.38.0/24
</span><br>
<span class="quotelev1">&gt;     &lt;<a href="http://172.24.38.0/24">http://172.24.38.0/24</a>&gt; \
</span><br>
<span class="quotelev1">&gt;            --mca oob_tcp_if_include eth0 \
</span><br>
<span class="quotelev1">&gt;     /home/umons/info/menezes/drsim/build/NameResolution/gameoflife_mpi2 --columns=1000
</span><br>
<span class="quotelev1">&gt;     --rows=1000
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I call MPI_INIT with:
</span><br>
<span class="quotelev1">&gt;         int provided;
</span><br>
<span class="quotelev1">&gt;         MPI_Init_thread(&amp;argc, &amp;argv, MPI_THREAD_MULTIPLE, &amp;provided);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     The program is a simple game of life simulation. It runs fine in a
</span><br>
<span class="quotelev1">&gt;     single node (with one or many tasks). But fails at random nodes
</span><br>
<span class="quotelev1">&gt;     when distributed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Any hint may help.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Best Regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Nilo Menezes
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     users mailing list
</span><br>
<span class="quotelev1">&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;     Link to this post:
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/lists/users/2015/05/26879.php">http://www.open-mpi.org/community/lists/users/2015/05/26879.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/05/26880.php">http://www.open-mpi.org/community/lists/users/2015/05/26880.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26890/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26891.php">#MOHAMMAD ASIF KHAN#: "[OMPI users] 'The MPI_Comm_rank() function was called before MPI_INIT was invoked'"</a>
<li><strong>Previous message:</strong> <a href="26889.php">Lev Givon: "Re: [OMPI users] cuIpcOpenMemHandle failure when using OpenMPI 1.8.5 with CUDA 7.0 and Multi-Process Service"</a>
<li><strong>In reply to:</strong> <a href="26880.php">Ralph Castain: "Re: [OMPI users] Openmpi 1.8.5 on Linux with threading support"</a>
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
