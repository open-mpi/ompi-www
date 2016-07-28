<?
$subject_val = "[OMPI users] Issue about cm PML";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 16 22:24:13 2016" -->
<!-- isoreceived="20160317022413" -->
<!-- sent="Wed, 16 Mar 2016 22:24:12 -0400" -->
<!-- isosent="20160317022412" -->
<!-- name="dpchoudh ." -->
<!-- email="dpchoudh_at_[hidden]" -->
<!-- subject="[OMPI users] Issue about cm PML" -->
<!-- id="CAHXxYDiq=jCCqszhbMSEy2OSKiUzo-QBSeSKNvUAx7fjBrwdAA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Issue about cm PML<br>
<strong>From:</strong> dpchoudh . (<em>dpchoudh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-16 22:24:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28722.php">Rainer Koenig: "[OMPI users] Strange problem with mpirun and LIGGGHTS after reboot of machine"</a>
<li><strong>Previous message:</strong> <a href="28720.php">Ralph Castain: "Re: [OMPI users] running OpenMPI jobs (either 1.10.1 or 1.8.7) on SoGE more problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28725.php">Gilles Gouaillardet: "Re: [OMPI users] Issue about cm PML"</a>
<li><strong>Reply:</strong> <a href="28725.php">Gilles Gouaillardet: "Re: [OMPI users] Issue about cm PML"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello all
<br>
I have a simple test setup, consisting of two Dell workstation nodes with
<br>
similar hardware profile.
<br>
<p>Both the nodes have (identical)
<br>
1. Qlogic 4x DDR infiniband
<br>
2. Chelsio C310 iWARP ethernet.
<br>
<p>Both of these cards are connected back to back, without a switch.
<br>
<p>With this setup, I can run OpenMPI over TCP and openib BTL. However, if I
<br>
try to use the PSM MTL (excluding the Chelsio NIC, of course, since it does
<br>
not support PSM), I get an error from one of the nodes (details below),
<br>
which makes me think that a required library or package is not installed,
<br>
but I can't figure out what it might be.
<br>
<p>Note that the test program is a simple 'hello world' program.
<br>
<p>The following work:
<br>
&nbsp;&nbsp;mpirun -np 2 --hostfile ~/hostfile -mca btl tcp,self ./mpitest
<br>
mpirun -np 2 --hostfile ~/hostfile -mca btl self,openib -mca
<br>
btl_openib_if_exclude cxgb3_0 ./mpitest
<br>
<p>(I had to exclude the Chelsio card because of this issue:
<br>
<a href="https://www.open-mpi.org/community/lists/users/2016/03/28661.php">https://www.open-mpi.org/community/lists/users/2016/03/28661.php</a>  )
<br>
<p>Here is what does NOT work:
<br>
mpirun -np 2 --hostfile ~/hostfile -mca mtl psm -mca btl_openib_if_exclude
<br>
cxgb3_0 ./mpitest
<br>
<p>The error (from both nodes) is:
<br>
&nbsp;mca: base: components_open: component pml / cm open function failed
<br>
<p>However, I still see the &quot;Hello, world&quot; output indicating that the program
<br>
ran to completion.
<br>
<p>Here is also another command that does NOT work:
<br>
<p>mpirun -np 2 --hostfile ~/hostfile -mca pml cm -mca btl_openib_if_exclude
<br>
cxgb3_0 ./mpitest
<br>
<p>The error is: (from the root node)
<br>
PML cm cannot be selected
<br>
<p>However, this time, I see no output from the program, indicating it did not
<br>
run.
<br>
<p>The following command also fails in a similar way:
<br>
&nbsp;mpirun -np 2 --hostfile ~/hostfile -mca pml cm -mca mtl psm -mca
<br>
btl_openib_if_exclude cxgb3_0 ./mpitest
<br>
<p>I have verified that infinipath-psm is installed on both nodes. Both nodes
<br>
run identical CentOS 7 and the libraries were installed from the CentOS
<br>
repositories (i.e. were not compiled from source)
<br>
<p>Both nodes run OMPI 1.10.2, compiled from the source RPM.
<br>
<p>What am I doing wrong?
<br>
<p>Thanks
<br>
Durga
<br>
<p><p><p><p>Life is complex. It has real and imaginary parts.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28721/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28722.php">Rainer Koenig: "[OMPI users] Strange problem with mpirun and LIGGGHTS after reboot of machine"</a>
<li><strong>Previous message:</strong> <a href="28720.php">Ralph Castain: "Re: [OMPI users] running OpenMPI jobs (either 1.10.1 or 1.8.7) on SoGE more problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28725.php">Gilles Gouaillardet: "Re: [OMPI users] Issue about cm PML"</a>
<li><strong>Reply:</strong> <a href="28725.php">Gilles Gouaillardet: "Re: [OMPI users] Issue about cm PML"</a>
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
