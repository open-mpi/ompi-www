<?
$subject_val = "[OMPI users] Need some help to track problem using openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 28 07:43:31 2015" -->
<!-- isoreceived="20150928114331" -->
<!-- sent="Mon, 28 Sep 2015 13:43:37 +0200" -->
<!-- isosent="20150928114337" -->
<!-- name="Sven Schumacher" -->
<!-- email="schumacher_at_[hidden]" -->
<!-- subject="[OMPI users] Need some help to track problem using openmpi" -->
<!-- id="560927E9.3020208_at_tfd.uni-hannover.de" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] Need some help to track problem using openmpi<br>
<strong>From:</strong> Sven Schumacher (<em>schumacher_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-28 07:43:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27696.php">Steffen Christgau: "Re: [OMPI users] possible GATS bug in osc/sm"</a>
<li><strong>Previous message:</strong> <a href="27694.php">Schlottke-Lakemper, Michael: "Re: [OMPI users] Invalid read of size 4 (Valgrind error)	with	OpenMPI 1.8.7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27699.php">Sven Schumacher: "Re: [OMPI users] Need some help to track problem using openmpi"</a>
<li><strong>Reply:</strong> <a href="27699.php">Sven Schumacher: "Re: [OMPI users] Need some help to track problem using openmpi"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/10/27773.php">Surivinta Surivinta: "Re: [OMPI users] Need some help to track problem using openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I've set up our new cluster using Infiniband using a combination of:
<br>
Debian, Torque/Maui, BeeGeeFS (formerly FHGFS)
<br>
<p>Every node has two infiniband-ports, both of them having an IP-Adress.
<br>
One port shall be used for BeeGeeFS (which is working well) and the
<br>
other one for MPI-Communication.
<br>
<p>I'm using openmpi in version 1.8.5, compiled with gcc/gfortran 4.9.2 and
<br>
ibverbs support.
<br>
Configure command was the following:
<br>
<p>Output of &quot;ompi_info --parsable  -a -c&quot; is attached as txt-file (all
<br>
nodes are configured the same)
<br>
<p><p>The following infiniband-related kernel-modules are loaded:
<br>
<span class="quotelev1">&gt; mlx4_core             206165  1 mlx4_ib
</span><br>
<span class="quotelev1">&gt; rdma_ucm               22055  0
</span><br>
<span class="quotelev1">&gt; ib_uverbs              44693  1 rdma_ucm
</span><br>
<span class="quotelev1">&gt; rdma_cm                39518  2 ib_iser,rdma_ucm
</span><br>
<span class="quotelev1">&gt; iw_cm                  31011  1 rdma_cm
</span><br>
<span class="quotelev1">&gt; ib_umad                17311  0
</span><br>
<span class="quotelev1">&gt; mlx4_ib               136293  0
</span><br>
<span class="quotelev1">&gt; ib_cm                  39055  3 rdma_cm,ib_srp,ib_ipoib
</span><br>
<span class="quotelev1">&gt; ib_sa                  26986  6
</span><br>
<span class="quotelev1">&gt; rdma_cm,ib_cm,mlx4_ib,ib_srp,rdma_ucm,ib_ipoib
</span><br>
<span class="quotelev1">&gt; ib_mad                 39969  4 ib_cm,ib_sa,mlx4_ib,ib_umad
</span><br>
<span class="quotelev1">&gt; ib_core                68904  12
</span><br>
<span class="quotelev1">&gt; rdma_cm,ib_cm,ib_sa,iw_cm,mlx4_ib,ib_mad,ib_srp,ib_iser,ib_umad,ib_uverbs,rdma_ucm,ib_ipoib
</span><br>
<span class="quotelev1">&gt; ib_addr                17148  3 rdma_cm,ib_core,rdma_ucm
</span><br>
<span class="quotelev1">&gt; ib_iser                44204  0
</span><br>
<span class="quotelev1">&gt; iscsi_tcp              17580  0
</span><br>
<span class="quotelev1">&gt; libiscsi_tcp           21554  1 iscsi_tcp
</span><br>
<span class="quotelev1">&gt; libiscsi               48004  3 libiscsi_tcp,iscsi_tcp,ib_iser
</span><br>
<span class="quotelev1">&gt; scsi_transport_iscsi    77478  4 iscsi_tcp,ib_iser,libiscsi
</span><br>
<span class="quotelev1">&gt; ib_ipoib               85167  0
</span><br>
<span class="quotelev1">&gt; ib_srp                 39710  0
</span><br>
<span class="quotelev1">&gt; scsi_transport_srp     18194  1 ib_srp
</span><br>
<span class="quotelev1">&gt; scsi_tgt               17698  1 scsi_transport_srp
</span><br>
<p>When using mpiexec to execute a job running on a single node using 8
<br>
cores everything works fine, but when mpiexec has to start a second
<br>
process on another node it doesn't start that process.
<br>
What I already did:
<br>
<p>Testing ssh-logins: Works (without a password using ssh-keys).
<br>
Testing name-resolution: works
<br>
<p>Used a &quot;hello Word&quot;-mpi-Program:
<br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int main(int argc, char** argv) {
</span><br>
<span class="quotelev1">&gt;     // Initialize the MPI environment
</span><br>
<span class="quotelev1">&gt;     MPI_Init(NULL, NULL);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     // Get the number of processes
</span><br>
<span class="quotelev1">&gt;     int world_size;
</span><br>
<span class="quotelev1">&gt;     MPI_Comm_size(MPI_COMM_WORLD, &amp;world_size);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     // Get the rank of the process
</span><br>
<span class="quotelev1">&gt;     int world_rank;
</span><br>
<span class="quotelev1">&gt;     MPI_Comm_rank(MPI_COMM_WORLD, &amp;world_rank);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     // Get the name of the processor
</span><br>
<span class="quotelev1">&gt;     char processor_name[MPI_MAX_PROCESSOR_NAME];
</span><br>
<span class="quotelev1">&gt;     int name_len;
</span><br>
<span class="quotelev1">&gt;     MPI_Get_processor_name(processor_name, &amp;name_len);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     // Print off a hello world message
</span><br>
<span class="quotelev1">&gt;     printf(&quot;Hello world from processor %s, rank %d&quot;
</span><br>
<span class="quotelev1">&gt;            &quot; out of %d processors\n&quot;,
</span><br>
<span class="quotelev1">&gt;            processor_name, world_rank, world_size);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     // Finalize the MPI environment.
</span><br>
<span class="quotelev1">&gt;     MPI_Finalize();
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<p><p>This throws an error (on a single node it produces the following error
<br>
messages, but doesn't produce any output , when run on two nodes):
<br>
<span class="quotelev1">&gt; [hydra001:20324] 1 more process has sent help message
</span><br>
<span class="quotelev1">&gt; help-mpi-btl-openib-cpc-base.txt / no cpcs for port
</span><br>
<span class="quotelev1">&gt; [hydra001:20324] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to
</span><br>
<span class="quotelev1">&gt; see all help / error messages
</span><br>
<p><span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; No OpenFabrics connection schemes reported that they were able to be
</span><br>
<span class="quotelev1">&gt; used on a specific port.  As such, the openib BTL (OpenFabrics
</span><br>
<span class="quotelev1">&gt; support) will be disabled for this port.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Local host:           hydra001
</span><br>
<span class="quotelev1">&gt;   Local device:         mlx4_0
</span><br>
<span class="quotelev1">&gt;   Local port:           1
</span><br>
<span class="quotelev1">&gt;   CPCs attempted:       udcm
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Hello world from processor hydra001, rank 0 out of 1 processors
</span><br>
<p>So, where can I find a documented list of all these MCA parameters? It
<br>
doesn't seem there is such a list on open-mpi.org or I didn't find it...
<br>
so thanks in advance for directing me to right place
<br>
<p>Sven Schumacher
<br>
<p><p><p><p><p><p><pre>
-- 
Sven Schumacher - Systemadministrator Tel: (0511)762-2753
Leibniz Universitaet Hannover
Institut f&#195;&#188;r Turbomaschinen und Fluid-Dynamik       - TFD
Appelstra&#195;&#159;e 9 - 30167 Hannover
Institut f&#195;&#188;r Kraftwerkstechnik und W&#195;&#164;rme&#195;&#188;bertragung - IKW
Callinstra&#195;&#159;e 36 - 30167 Hannover

</pre>
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27695/ompi_info_output_node_hydra001.txt">ompi_info_output_node_hydra001.txt</a>
</ul>
<!-- attachment="ompi_info_output_node_hydra001.txt" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27696.php">Steffen Christgau: "Re: [OMPI users] possible GATS bug in osc/sm"</a>
<li><strong>Previous message:</strong> <a href="27694.php">Schlottke-Lakemper, Michael: "Re: [OMPI users] Invalid read of size 4 (Valgrind error)	with	OpenMPI 1.8.7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27699.php">Sven Schumacher: "Re: [OMPI users] Need some help to track problem using openmpi"</a>
<li><strong>Reply:</strong> <a href="27699.php">Sven Schumacher: "Re: [OMPI users] Need some help to track problem using openmpi"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/10/27773.php">Surivinta Surivinta: "Re: [OMPI users] Need some help to track problem using openmpi"</a>
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
