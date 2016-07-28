<?
$subject_val = "Re: [OMPI users] OpenMPI vs Intel MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul  2 09:47:24 2009" -->
<!-- isoreceived="20090702134724" -->
<!-- sent="Thu, 2 Jul 2009 09:47:21 -0400" -->
<!-- isosent="20090702134721" -->
<!-- name="Swamy Kandadai" -->
<!-- email="swamy_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI vs Intel MPI" -->
<!-- id="OFCAA71CBC.BB5D6241-ON852575E7.004A72A0-852575E7.004BBD3C_at_us.ibm.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C1BA0737-D8C8-45CF-B56B-1A8D43C727EB_at_cisco.com" -->
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
<strong>From:</strong> Swamy Kandadai (<em>swamy_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-02 09:47:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9805.php">Lenny Verkhovsky: "Re: [OMPI users] OpenMPI vs Intel MPI"</a>
<li><strong>Previous message:</strong> <a href="9803.php">Michael Di Domenico: "Re: [OMPI users] quadrics support?"</a>
<li><strong>In reply to:</strong> <a href="9802.php">Jeff Squyres: "Re: [OMPI users] quadrics support?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9805.php">Lenny Verkhovsky: "Re: [OMPI users] OpenMPI vs Intel MPI"</a>
<li><strong>Reply:</strong> <a href="9805.php">Lenny Verkhovsky: "Re: [OMPI users] OpenMPI vs Intel MPI"</a>
<li><strong>Reply:</strong> <a href="9806.php">Eugene Loh: "Re: [OMPI users] OpenMPI vs Intel MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff:
<br>
<p>I am running on a 2.66 GHz Nehalem node.  On this node, the turbo mode and
<br>
hyperthreading are enabled.
<br>
When I run LINPACK with Intel MPI, I get  82.68 GFlops without much
<br>
trouble.
<br>
<p>When I ran with OpenMPI (I have  OpenMPI 1.2.8 but my colleague was using
<br>
1.3.2). I was using the same MKL libraries both with OpenMPI and
<br>
Intel MPI. But with OpenMPI, the best I got so far is 80.22 GFlops and I
<br>
could never achieve close to what I am getting with Intel MPI.
<br>
Here are muy options with OpenMPI:
<br>
<p>mpirun -n 8 --machinefile hf --mca rmaps_rank_file_path rankfile --mca
<br>
coll_sm_info_num_procs 8 --mca btl self,sm -mca mpi_leave_pinned
<br>
1 ./xhpl_ompi
<br>
<p>Here is my rankfile:
<br>
<p>at rankfile
<br>
rank 0=i02n05 slot=0
<br>
rank 1=i02n05 slot=1
<br>
rank 2=i02n05 slot=2
<br>
rank 3=i02n05 slot=3
<br>
rank 4=i02n05 slot=4
<br>
rank 5=i02n05 slot=5
<br>
rank 6=i02n05 slot=6
<br>
rank 7=i02n05 slot=7
<br>
<p>In this case the physical cores are 0-7 while the additional logical
<br>
processors with hyperthreading are 8-15.
<br>
With &quot;top&quot; command, I could see all the 8 tasks are running on 8 different
<br>
physical cores. I did not see
<br>
2 MPI tasks running on the same physical core. Also, the program is not
<br>
paging as the problem size
<br>
fits in the meory.
<br>
<p>Do you have any ideas how I can improve the performance so that it matches
<br>
with Intel MPI performance?
<br>
Any suggestions will be greatly appreciated.
<br>
<p>Thanks
<br>
Swamy Kandadai
<br>
<p><p>Dr. Swamy N. Kandadai
<br>
IBM Senior Certified Executive IT Specialist
<br>
STG WW  Modular Systems Benchmark Center
<br>
STG WW HPC and BI CoC Benchmark Center
<br>
Phone:( 845) 433 -8429 (8-293) Fax:(845)432-9789
<br>
swamy_at_[hidden]
<br>
<a href="http://w3.ibm.com/sales/systems/benchmarks">http://w3.ibm.com/sales/systems/benchmarks</a>
<br>
<p><p><p><p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9804/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9805.php">Lenny Verkhovsky: "Re: [OMPI users] OpenMPI vs Intel MPI"</a>
<li><strong>Previous message:</strong> <a href="9803.php">Michael Di Domenico: "Re: [OMPI users] quadrics support?"</a>
<li><strong>In reply to:</strong> <a href="9802.php">Jeff Squyres: "Re: [OMPI users] quadrics support?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9805.php">Lenny Verkhovsky: "Re: [OMPI users] OpenMPI vs Intel MPI"</a>
<li><strong>Reply:</strong> <a href="9805.php">Lenny Verkhovsky: "Re: [OMPI users] OpenMPI vs Intel MPI"</a>
<li><strong>Reply:</strong> <a href="9806.php">Eugene Loh: "Re: [OMPI users] OpenMPI vs Intel MPI"</a>
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
