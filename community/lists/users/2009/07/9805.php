<?
$subject_val = "Re: [OMPI users] OpenMPI vs Intel MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul  2 10:32:29 2009" -->
<!-- isoreceived="20090702143229" -->
<!-- sent="Thu, 2 Jul 2009 17:32:23 +0300" -->
<!-- isosent="20090702143223" -->
<!-- name="Lenny Verkhovsky" -->
<!-- email="lenny.verkhovsky_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI vs Intel MPI" -->
<!-- id="453d39990907020732o685d2ca5l66c37f86f54ea1bb_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="OFCAA71CBC.BB5D6241-ON852575E7.004A72A0-852575E7.004BBD3C_at_us.ibm.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI vs Intel MPI<br>
<strong>From:</strong> Lenny Verkhovsky (<em>lenny.verkhovsky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-02 10:32:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9806.php">Eugene Loh: "Re: [OMPI users] OpenMPI vs Intel MPI"</a>
<li><strong>Previous message:</strong> <a href="9804.php">Swamy Kandadai: "Re: [OMPI users] OpenMPI vs Intel MPI"</a>
<li><strong>In reply to:</strong> <a href="9804.php">Swamy Kandadai: "Re: [OMPI users] OpenMPI vs Intel MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9807.php">Eugene Loh: "Re: [OMPI users] OpenMPI vs Intel MPI"</a>
<li><strong>Reply:</strong> <a href="9807.php">Eugene Loh: "Re: [OMPI users] OpenMPI vs Intel MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
I am not an HPL expert, but this might help.
<br>
<p>1.   rankfile mapper is avaliale only from Open MPI 1.3 version, if you are
<br>
using Open MPI 1.2.8 try -mca mpi_paffinity_alone 1
<br>
2.   if you are using Open MPI 1.3 you dont have to use mpi_leave_pinned 1 ,
<br>
since it's a default value
<br>
<p>Lenny.
<br>
<p>On Thu, Jul 2, 2009 at 4:47 PM, Swamy Kandadai &lt;swamy_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  Jeff:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am running on a 2.66 GHz Nehalem node. On this node, the turbo mode and
</span><br>
<span class="quotelev1">&gt; hyperthreading are enabled.
</span><br>
<span class="quotelev1">&gt; When I run LINPACK with Intel MPI, I get 82.68 GFlops without much trouble.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I ran with OpenMPI (I have OpenMPI 1.2.8 but my colleague was using
</span><br>
<span class="quotelev1">&gt; 1.3.2). I was using the same MKL libraries both with OpenMPI and
</span><br>
<span class="quotelev1">&gt; Intel MPI. But with OpenMPI, the best I got so far is 80.22 GFlops and I
</span><br>
<span class="quotelev1">&gt; could never achieve close to what I am getting with Intel MPI.
</span><br>
<span class="quotelev1">&gt; Here are muy options with OpenMPI:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -n 8 --machinefile hf --mca rmaps_rank_file_path rankfile --mca
</span><br>
<span class="quotelev1">&gt; coll_sm_info_num_procs 8 --mca btl self,sm -mca mpi_leave_pinned 1
</span><br>
<span class="quotelev1">&gt; ./xhpl_ompi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here is my rankfile:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; at rankfile
</span><br>
<span class="quotelev1">&gt; rank 0=i02n05 slot=0
</span><br>
<span class="quotelev1">&gt; rank 1=i02n05 slot=1
</span><br>
<span class="quotelev1">&gt; rank 2=i02n05 slot=2
</span><br>
<span class="quotelev1">&gt; rank 3=i02n05 slot=3
</span><br>
<span class="quotelev1">&gt; rank 4=i02n05 slot=4
</span><br>
<span class="quotelev1">&gt; rank 5=i02n05 slot=5
</span><br>
<span class="quotelev1">&gt; rank 6=i02n05 slot=6
</span><br>
<span class="quotelev1">&gt; rank 7=i02n05 slot=7
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In this case the physical cores are 0-7 while the additional logical
</span><br>
<span class="quotelev1">&gt; processors with hyperthreading are 8-15.
</span><br>
<span class="quotelev1">&gt; With &quot;top&quot; command, I could see all the 8 tasks are running on 8 different
</span><br>
<span class="quotelev1">&gt; physical cores. I did not see
</span><br>
<span class="quotelev1">&gt; 2 MPI tasks running on the same physical core. Also, the program is not
</span><br>
<span class="quotelev1">&gt; paging as the problem size
</span><br>
<span class="quotelev1">&gt; fits in the meory.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do you have any ideas how I can improve the performance so that it matches
</span><br>
<span class="quotelev1">&gt; with Intel MPI performance?
</span><br>
<span class="quotelev1">&gt; Any suggestions will be greatly appreciated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Swamy Kandadai
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dr. Swamy N. Kandadai
</span><br>
<span class="quotelev1">&gt; IBM Senior Certified Executive IT Specialist
</span><br>
<span class="quotelev1">&gt; STG WW Modular Systems Benchmark Center
</span><br>
<span class="quotelev1">&gt; STG WW HPC and BI CoC Benchmark Center
</span><br>
<span class="quotelev1">&gt; Phone:( 845) 433 -8429 (8-293) Fax:(845)432-9789
</span><br>
<span class="quotelev1">&gt; swamy_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://w3.ibm.com/sales/systems/benchmarks">http://w3.ibm.com/sales/systems/benchmarks</a>
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9805/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9806.php">Eugene Loh: "Re: [OMPI users] OpenMPI vs Intel MPI"</a>
<li><strong>Previous message:</strong> <a href="9804.php">Swamy Kandadai: "Re: [OMPI users] OpenMPI vs Intel MPI"</a>
<li><strong>In reply to:</strong> <a href="9804.php">Swamy Kandadai: "Re: [OMPI users] OpenMPI vs Intel MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9807.php">Eugene Loh: "Re: [OMPI users] OpenMPI vs Intel MPI"</a>
<li><strong>Reply:</strong> <a href="9807.php">Eugene Loh: "Re: [OMPI users] OpenMPI vs Intel MPI"</a>
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
