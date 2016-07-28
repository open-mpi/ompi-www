<?
$subject_val = "Re: [OMPI users] Heap profiling with OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug  5 17:06:47 2008" -->
<!-- isoreceived="20080805210647" -->
<!-- sent="Tue, 05 Aug 2008 22:06:39 +0100" -->
<!-- isosent="20080805210639" -->
<!-- name="Ashley Pittman" -->
<!-- email="apittman_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Heap profiling with OpenMPI" -->
<!-- id="1217970399.6710.1.camel_at_bruce.priv.wark.uk.streamline-computing.com" -->
<!-- inreplyto="13290745-B09D-499D-8006-D756E6D9B5CC_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Heap profiling with OpenMPI<br>
<strong>From:</strong> Ashley Pittman (<em>apittman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-05 17:06:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6271.php">Ben Payne: "[OMPI users] cluster LiveCD"</a>
<li><strong>Previous message:</strong> <a href="6269.php">Sergio Yanuen Rodriguez: "[OMPI users] WIEN2k compilation using openmpi"</a>
<li><strong>In reply to:</strong> <a href="6268.php">George Bosilca: "Re: [OMPI users] Heap profiling with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6276.php">Jan Ploski: "Re: [OMPI users] Heap profiling with OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
One tip is to use the --log-file=valgrind.out.%
<br>
q{OMPI_MCA_ns_nds_vpid} option to valgrind which will name the output
<br>
file according to rank.  In the 1.3 series the variable has changed from
<br>
OMPI_MCA_ns_nds_vpid to OMPI_COMM_WORLD_RANK.
<br>
<p>Ashley.
<br>
<p>On Tue, 2008-08-05 at 17:51 +0200, George Bosilca wrote: 
<br>
<span class="quotelev1">&gt; Jan,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm using valgrind with Open MPI on a [very] regular basis and I never  
</span><br>
<span class="quotelev1">&gt; had any problems. I usually want to know the execution path on the MPI  
</span><br>
<span class="quotelev1">&gt; applications. For this I use:
</span><br>
<span class="quotelev1">&gt; mpirun -np XX valgrind --tool=callgrind -q --log-file=some_file ./my_app
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I just run your example:
</span><br>
<span class="quotelev1">&gt;      mpirun -np 2 -bynode --mca btl tcp,self valgrind --tool=massif - 
</span><br>
<span class="quotelev1">&gt; q ./NPmpi -u 4
</span><br>
<span class="quotelev1">&gt; and I got 2 non empty files in the current directory:
</span><br>
<span class="quotelev1">&gt;      bosilca_at_dancer:~/NetPIPE_3.6.2$ ls -l massif.out.*
</span><br>
<span class="quotelev1">&gt;      -rw------- 1 bosilca bosilca 140451 2008-08-05 11:57 massif.out. 
</span><br>
<span class="quotelev1">&gt; 21197
</span><br>
<span class="quotelev1">&gt;      -rw------- 1 bosilca bosilca 131471 2008-08-05 11:57 massif.out. 
</span><br>
<span class="quotelev1">&gt; 21210
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    george.
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6271.php">Ben Payne: "[OMPI users] cluster LiveCD"</a>
<li><strong>Previous message:</strong> <a href="6269.php">Sergio Yanuen Rodriguez: "[OMPI users] WIEN2k compilation using openmpi"</a>
<li><strong>In reply to:</strong> <a href="6268.php">George Bosilca: "Re: [OMPI users] Heap profiling with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6276.php">Jan Ploski: "Re: [OMPI users] Heap profiling with OpenMPI"</a>
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
