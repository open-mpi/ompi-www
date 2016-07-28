<?
$subject_val = "Re: [OMPI users] Need some help to track problem using openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct  2 17:56:13 2015" -->
<!-- isoreceived="20151002215613" -->
<!-- sent="Fri, 2 Oct 2015 14:56:06 -0700" -->
<!-- isosent="20151002215606" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Need some help to track problem using openmpi" -->
<!-- id="BA15998D-4057-4B9E-97E2-C7D9F5501E8E_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAC+Fo8G2V=ETtHLiuRyhut3X+0S_bqLVXE5PTKQHxyrqnDzU=w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Need some help to track problem using openmpi<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-02 17:56:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27776.php">marcin.krotkiewski: "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
<li><strong>Previous message:</strong> <a href="27774.php">Ralph Castain: "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
<li><strong>In reply to:</strong> <a href="27773.php">Surivinta Surivinta: "Re: [OMPI users] Need some help to track problem using openmpi"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You can also get info specifically on the openib params by:
<br>
<p>ompi_info &#226;&#128;&#148;param btl openib &#226;&#128;&#148;level 9
<br>
<p>Your error indicates that udcm may not be enabled on your infiniband network, and I don&#226;&#128;&#153;t see it listed in your IB modules - we require it for use of the opneib btl.
<br>
<p>Ralph
<br>
<p><span class="quotelev1">&gt; On Oct 2, 2015, at 2:49 PM, Surivinta Surivinta &lt;surivinta_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Maybe here you found what need:
</span><br>
<span class="quotelev1">&gt; <a href="https://www.open-mpi.org/faq/?category=tuning#setting-mca-params">https://www.open-mpi.org/faq/?category=tuning#setting-mca-params</a> &lt;<a href="https://www.open-mpi.org/faq/?category=tuning#setting-mca-params">https://www.open-mpi.org/faq/?category=tuning#setting-mca-params</a>&gt;
</span><br>
<span class="quotelev1">&gt; also  you can try run gdb via mpirun to get debug info:
</span><br>
<span class="quotelev1">&gt; mpirun -np 2 xterm -e gdb ./your_program
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2015-09-28 14:43 GMT+03:00 Sven Schumacher &lt;schumacher_at_[hidden] &lt;mailto:schumacher_at_[hidden]&gt;&gt;:
</span><br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've set up our new cluster using Infiniband using a combination of:
</span><br>
<span class="quotelev1">&gt; Debian, Torque/Maui, BeeGeeFS (formerly FHGFS)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Every node has two infiniband-ports, both of them having an IP-Adress.
</span><br>
<span class="quotelev1">&gt; One port shall be used for BeeGeeFS (which is working well) and the
</span><br>
<span class="quotelev1">&gt; other one for MPI-Communication.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm using openmpi in version 1.8.5, compiled with gcc/gfortran 4.9.2 and
</span><br>
<span class="quotelev1">&gt; ibverbs support.
</span><br>
<span class="quotelev1">&gt; Configure command was the following:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Output of &quot;ompi_info --parsable  -a -c&quot; is attached as txt-file (all
</span><br>
<span class="quotelev1">&gt; nodes are configured the same)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The following infiniband-related kernel-modules are loaded:
</span><br>
<span class="quotelev2">&gt; &gt; mlx4_core             206165  1 mlx4_ib
</span><br>
<span class="quotelev2">&gt; &gt; rdma_ucm               22055  0
</span><br>
<span class="quotelev2">&gt; &gt; ib_uverbs              44693  1 rdma_ucm
</span><br>
<span class="quotelev2">&gt; &gt; rdma_cm                39518  2 ib_iser,rdma_ucm
</span><br>
<span class="quotelev2">&gt; &gt; iw_cm                  31011  1 rdma_cm
</span><br>
<span class="quotelev2">&gt; &gt; ib_umad                17311  0
</span><br>
<span class="quotelev2">&gt; &gt; mlx4_ib               136293  0
</span><br>
<span class="quotelev2">&gt; &gt; ib_cm                  39055  3 rdma_cm,ib_srp,ib_ipoib
</span><br>
<span class="quotelev2">&gt; &gt; ib_sa                  26986  6
</span><br>
<span class="quotelev2">&gt; &gt; rdma_cm,ib_cm,mlx4_ib,ib_srp,rdma_ucm,ib_ipoib
</span><br>
<span class="quotelev2">&gt; &gt; ib_mad                 39969  4 ib_cm,ib_sa,mlx4_ib,ib_umad
</span><br>
<span class="quotelev2">&gt; &gt; ib_core                68904  12
</span><br>
<span class="quotelev2">&gt; &gt; rdma_cm,ib_cm,ib_sa,iw_cm,mlx4_ib,ib_mad,ib_srp,ib_iser,ib_umad,ib_uverbs,rdma_ucm,ib_ipoib
</span><br>
<span class="quotelev2">&gt; &gt; ib_addr                17148  3 rdma_cm,ib_core,rdma_ucm
</span><br>
<span class="quotelev2">&gt; &gt; ib_iser                44204  0
</span><br>
<span class="quotelev2">&gt; &gt; iscsi_tcp              17580  0
</span><br>
<span class="quotelev2">&gt; &gt; libiscsi_tcp           21554  1 iscsi_tcp
</span><br>
<span class="quotelev2">&gt; &gt; libiscsi               48004  3 libiscsi_tcp,iscsi_tcp,ib_iser
</span><br>
<span class="quotelev2">&gt; &gt; scsi_transport_iscsi    77478  4 iscsi_tcp,ib_iser,libiscsi
</span><br>
<span class="quotelev2">&gt; &gt; ib_ipoib               85167  0
</span><br>
<span class="quotelev2">&gt; &gt; ib_srp                 39710  0
</span><br>
<span class="quotelev2">&gt; &gt; scsi_transport_srp     18194  1 ib_srp
</span><br>
<span class="quotelev2">&gt; &gt; scsi_tgt               17698  1 scsi_transport_srp
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When using mpiexec to execute a job running on a single node using 8
</span><br>
<span class="quotelev1">&gt; cores everything works fine, but when mpiexec has to start a second
</span><br>
<span class="quotelev1">&gt; process on another node it doesn't start that process.
</span><br>
<span class="quotelev1">&gt; What I already did:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Testing ssh-logins: Works (without a password using ssh-keys).
</span><br>
<span class="quotelev1">&gt; Testing name-resolution: works
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Used a &quot;hello Word&quot;-mpi-Program:
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; int main(int argc, char** argv) {
</span><br>
<span class="quotelev2">&gt; &gt;     // Initialize the MPI environment
</span><br>
<span class="quotelev2">&gt; &gt;     MPI_Init(NULL, NULL);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     // Get the number of processes
</span><br>
<span class="quotelev2">&gt; &gt;     int world_size;
</span><br>
<span class="quotelev2">&gt; &gt;     MPI_Comm_size(MPI_COMM_WORLD, &amp;world_size);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     // Get the rank of the process
</span><br>
<span class="quotelev2">&gt; &gt;     int world_rank;
</span><br>
<span class="quotelev2">&gt; &gt;     MPI_Comm_rank(MPI_COMM_WORLD, &amp;world_rank);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     // Get the name of the processor
</span><br>
<span class="quotelev2">&gt; &gt;     char processor_name[MPI_MAX_PROCESSOR_NAME];
</span><br>
<span class="quotelev2">&gt; &gt;     int name_len;
</span><br>
<span class="quotelev2">&gt; &gt;     MPI_Get_processor_name(processor_name, &amp;name_len);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     // Print off a hello world message
</span><br>
<span class="quotelev2">&gt; &gt;     printf(&quot;Hello world from processor %s, rank %d&quot;
</span><br>
<span class="quotelev2">&gt; &gt;            &quot; out of %d processors\n&quot;,
</span><br>
<span class="quotelev2">&gt; &gt;            processor_name, world_rank, world_size);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     // Finalize the MPI environment.
</span><br>
<span class="quotelev2">&gt; &gt;     MPI_Finalize();
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This throws an error (on a single node it produces the following error
</span><br>
<span class="quotelev1">&gt; messages, but doesn't produce any output , when run on two nodes):
</span><br>
<span class="quotelev2">&gt; &gt; [hydra001:20324] 1 more process has sent help message
</span><br>
<span class="quotelev2">&gt; &gt; help-mpi-btl-openib-cpc-base.txt / no cpcs for port
</span><br>
<span class="quotelev2">&gt; &gt; [hydra001:20324] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to
</span><br>
<span class="quotelev2">&gt; &gt; see all help / error messages
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; No OpenFabrics connection schemes reported that they were able to be
</span><br>
<span class="quotelev2">&gt; &gt; used on a specific port.  As such, the openib BTL (OpenFabrics
</span><br>
<span class="quotelev2">&gt; &gt; support) will be disabled for this port.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   Local host:           hydra001
</span><br>
<span class="quotelev2">&gt; &gt;   Local device:         mlx4_0
</span><br>
<span class="quotelev2">&gt; &gt;   Local port:           1
</span><br>
<span class="quotelev2">&gt; &gt;   CPCs attempted:       udcm
</span><br>
<span class="quotelev2">&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; Hello world from processor hydra001, rank 0 out of 1 processors
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So, where can I find a documented list of all these MCA parameters? It
</span><br>
<span class="quotelev1">&gt; doesn't seem there is such a list on open-mpi.org &lt;<a href="http://open-mpi.org/">http://open-mpi.org/</a>&gt; or I didn't find it...
</span><br>
<span class="quotelev1">&gt; so thanks in advance for directing me to right place
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sven Schumacher
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Sven Schumacher - Systemadministrator Tel: (0511)762-2753
</span><br>
<span class="quotelev1">&gt; Leibniz Universitaet Hannover
</span><br>
<span class="quotelev1">&gt; Institut f&#195;&#188;r Turbomaschinen und Fluid-Dynamik       - TFD
</span><br>
<span class="quotelev1">&gt; Appelstra&#195;&#159;e 9 - 30167 Hannover
</span><br>
<span class="quotelev1">&gt; Institut f&#195;&#188;r Kraftwerkstechnik und W&#195;&#164;rme&#195;&#188;bertragung - IKW
</span><br>
<span class="quotelev1">&gt; Callinstra&#195;&#159;e 36 - 30167 Hannover
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/09/27695.php">http://www.open-mpi.org/community/lists/users/2015/09/27695.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/09/27695.php">http://www.open-mpi.org/community/lists/users/2015/09/27695.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; &#208;&#161; &#209;&#131;&#208;&#178;&#208;&#176;&#208;&#182;&#208;&#181;&#208;&#189;&#208;&#184;&#208;&#181;&#208;&#188;.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/10/27773.php">http://www.open-mpi.org/community/lists/users/2015/10/27773.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27775/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27776.php">marcin.krotkiewski: "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
<li><strong>Previous message:</strong> <a href="27774.php">Ralph Castain: "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
<li><strong>In reply to:</strong> <a href="27773.php">Surivinta Surivinta: "Re: [OMPI users] Need some help to track problem using openmpi"</a>
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
