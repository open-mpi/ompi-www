<?
$subject_val = "Re: [OMPI users] openmpi 1.3.1: bind() failed: Permission denied (13)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr  2 18:36:11 2009" -->
<!-- isoreceived="20090402223611" -->
<!-- sent="Fri, 03 Apr 2009 06:35:59 +0800" -->
<!-- isosent="20090402223559" -->
<!-- name="Jerome BENOIT" -->
<!-- email="ml.jgmbenoit_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi 1.3.1: bind() failed: Permission denied (13)" -->
<!-- id="49D53DCF.9040901_at_mailsnare.net" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="49D51EBC.1070509_at_mailsnare.net" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi 1.3.1: bind() failed: Permission denied (13)<br>
<strong>From:</strong> Jerome BENOIT (<em>ml.jgmbenoit_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-02 18:35:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8752.php">Jeff Squyres: "Re: [OMPI users] openmpi 1.3.1: bind() failed: Permission denied (13)"</a>
<li><strong>Previous message:</strong> <a href="8750.php">Jerome BENOIT: "Re: [OMPI users] openmpi 1.3.1: bind() failed: Permission denied (13)"</a>
<li><strong>In reply to:</strong> <a href="8750.php">Jerome BENOIT: "Re: [OMPI users] openmpi 1.3.1: bind() failed: Permission denied (13)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8752.php">Jeff Squyres: "Re: [OMPI users] openmpi 1.3.1: bind() failed: Permission denied (13)"</a>
<li><strong>Reply:</strong> <a href="8752.php">Jeff Squyres: "Re: [OMPI users] openmpi 1.3.1: bind() failed: Permission denied (13)"</a>
<li><strong>Reply:</strong> <a href="8754.php">Dirk Eddelbuettel: "Re: [OMPI users] openmpi 1.3.1: bind() failed: Permission denied (13)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello List !
<br>
<p>It appeared that the file /etc/openmpi/openmpi-mca-params.conf on node green was the only one
<br>
into the cluster to contain the line
<br>
<p>btl_tcp_port_min_v4 = 49152
<br>
<p>Once the this line commented, the tests suggest below, and the sbatch script previously emailed,
<br>
work.
<br>
<p>Now, if I put the above line, namely,
<br>
<p>btl_tcp_port_min_v4 = 49152
<br>
<p>in each /etc/openmpi/openmpi-mca-params.conf, then:
<br>
<p>orterun -np 2 -H orange phello
<br>
<p>gives
<br>
<p>[orange][[42511,1],1][../../../../../../ompi/mca/btl/tcp/btl_tcp_component.c:596:mca_btl_tcp_component_create_listen] bind() failed: Permission denied (13)
<br>
[orange][[42511,1],0][../../../../../../ompi/mca/btl/tcp/btl_tcp_component.c:596:mca_btl_tcp_component_create_listen] bind() failed: Permission denied (13)
<br>
Hello world! I am 0 of 2 and my name is `orange'
<br>
Hello world! I am 1 of 2 and my name is `orange'
<br>
<p>whereas
<br>
<p>orterun -np 2 -H orange,yellow phello
<br>
<p>gives
<br>
<p>[orange][[42561,1],0][../../../../../../ompi/mca/btl/tcp/btl_tcp_component.c:596:mca_btl_tcp_component_create_listen] bind() failed: Permission denied (13)
<br>
[yellow][[42561,1],1][../../../../../../ompi/mca/btl/tcp/btl_tcp_component.c:596:mca_btl_tcp_component_create_listen] bind() failed: Permission denied (13)
<br>
--------------------------------------------------------------------------
<br>
At least one pair of MPI processes are unable to reach each other for
<br>
MPI communications.  This means that no Open MPI device has indicated
<br>
that it can be used to communicate between these processes.  This is
<br>
an error; Open MPI requires that all MPI processes be able to reach
<br>
each other.  This error can sometimes be the result of forgetting to
<br>
specify the &quot;self&quot; BTL.
<br>
<p>&nbsp;&nbsp;Process 1 ([[42561,1],0]) is on host: orange
<br>
&nbsp;&nbsp;Process 2 ([[42561,1],1]) is on host: yellow
<br>
&nbsp;&nbsp;BTLs attempted: self sm
<br>
<p>Your MPI job is now going to abort; sorry.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
It looks like MPI_INIT failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during MPI_INIT; some of which are due to configuration or environment
<br>
problems.  This failure appears to be an internal failure; here's some
<br>
additional information (which may only be relevant to an Open MPI
<br>
developer):
<br>
<p>&nbsp;&nbsp;PML add procs failed
<br>
&nbsp;&nbsp;--&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)
<br>
--------------------------------------------------------------------------
<br>
*** An error occurred in MPI_Init
<br>
*** before MPI was initialized
<br>
*** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
[orange:9702] Abort before MPI_INIT completed successfully; not able to guarantee that all other processes were killed!
<br>
*** An error occurred in MPI_Init
<br>
*** before MPI was initialized
<br>
*** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
[yellow:9704] Abort before MPI_INIT completed successfully; not able to guarantee that all other processes were killed!
<br>
--------------------------------------------------------------------------
<br>
orterun has exited due to process rank 0 with PID 9702 on
<br>
node orange exiting without calling &quot;finalize&quot;. This may
<br>
have caused other processes in the application to be
<br>
terminated by signals sent by orterun (as reported here).
<br>
--------------------------------------------------------------------------
<br>
[rainbow:07504] 1 more process has sent help message help-mca-bml-r2.txt / unreachable proc
<br>
[rainbow:07504] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see all help / error messages
<br>
[rainbow:07504] 1 more process has sent help message help-mpi-runtime / mpi_init:startup:internal-failure
<br>
<p><p>I would like to know what is to blame:
<br>
the btl_tcp_port_min_v4 (recent) feature ?
<br>
or the local SLURM set up ?
<br>
If the local SLURM set up is bad, what may be wrong ?
<br>
<p>Thanks in advance,
<br>
Jerome  
<br>
<p><p>Jerome BENOIT wrote:
<br>
<span class="quotelev1">&gt; Hi !
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Dirk Eddelbuettel wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On 3 April 2009 at 03:33, Jerome BENOIT wrote:
</span><br>
<span class="quotelev2">&gt;&gt; | The above submission works the same on my clusters.
</span><br>
<span class="quotelev2">&gt;&gt; | But in fact, my issue involve interconnection between the nodes of 
</span><br>
<span class="quotelev2">&gt;&gt; the clusters:
</span><br>
<span class="quotelev2">&gt;&gt; | in the above examples involve no connection between nodes.
</span><br>
<span class="quotelev2">&gt;&gt; | | My cluster is a cluster of quadcore computers:
</span><br>
<span class="quotelev2">&gt;&gt; | if in the sbatch script
</span><br>
<span class="quotelev2">&gt;&gt; | | #SBATCH --nodes=7
</span><br>
<span class="quotelev2">&gt;&gt; | #SBATCH --ntasks=15
</span><br>
<span class="quotelev2">&gt;&gt; | | is replaced by
</span><br>
<span class="quotelev2">&gt;&gt; | | #SBATCH --nodes=1
</span><br>
<span class="quotelev2">&gt;&gt; | #SBATCH --ntasks=4
</span><br>
<span class="quotelev2">&gt;&gt; | | everything is fine as no interconnection is involved.
</span><br>
<span class="quotelev2">&gt;&gt; | | Can you test the inconnection part of the story ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Again, think about in terms of layers. You have a problem with slurm 
</span><br>
<span class="quotelev2">&gt;&gt; on top
</span><br>
<span class="quotelev2">&gt;&gt; of Open MPI.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So before blaming Open MPI, I would try something like this:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ~$ orterun -np 2 -H abc,xyz /tmp/jerome_hw
</span><br>
<span class="quotelev2">&gt;&gt; Hello world! I am 1 of 2 and my name is `abc'
</span><br>
<span class="quotelev2">&gt;&gt; Hello world! I am 0 of 2 and my name is `xyz'
</span><br>
<span class="quotelev2">&gt;&gt; ~$
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I got it: I am very new with openmpi.
</span><br>
<span class="quotelev1">&gt; It is working with each nodes except one (`green'):
</span><br>
<span class="quotelev1">&gt; I have to blame my cluster.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I will try to fix it soon.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks you very much for you help,
</span><br>
<span class="quotelev1">&gt; Jerome
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ie whether the simple MPI example can be launched successfully on two 
</span><br>
<span class="quotelev2">&gt;&gt; nodes or not.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dirk
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li><strong>Next message:</strong> <a href="8752.php">Jeff Squyres: "Re: [OMPI users] openmpi 1.3.1: bind() failed: Permission denied (13)"</a>
<li><strong>Previous message:</strong> <a href="8750.php">Jerome BENOIT: "Re: [OMPI users] openmpi 1.3.1: bind() failed: Permission denied (13)"</a>
<li><strong>In reply to:</strong> <a href="8750.php">Jerome BENOIT: "Re: [OMPI users] openmpi 1.3.1: bind() failed: Permission denied (13)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8752.php">Jeff Squyres: "Re: [OMPI users] openmpi 1.3.1: bind() failed: Permission denied (13)"</a>
<li><strong>Reply:</strong> <a href="8752.php">Jeff Squyres: "Re: [OMPI users] openmpi 1.3.1: bind() failed: Permission denied (13)"</a>
<li><strong>Reply:</strong> <a href="8754.php">Dirk Eddelbuettel: "Re: [OMPI users] openmpi 1.3.1: bind() failed: Permission denied (13)"</a>
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
