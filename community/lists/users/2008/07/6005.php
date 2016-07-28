<?
$subject_val = "[OMPI users] Need some help regarding Linpack execution";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  2 07:41:01 2008" -->
<!-- isoreceived="20080702114101" -->
<!-- sent="Wed, 2 Jul 2008 17:06:46 +0530" -->
<!-- isosent="20080702113646" -->
<!-- name="Aditya Vasal" -->
<!-- email="Aditya.Vasal_at_[hidden]" -->
<!-- subject="[OMPI users] Need some help regarding Linpack execution" -->
<!-- id="78DE440C4156CC45A35FDBCBF9B830D703B14A57_at_sohm.kpit.com" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Aditya Vasal (<em>Aditya.Vasal_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-02 07:36:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6006.php">Geoffroy Pignot: "Re: [OMPI users] Problem with gateway between 2 hosts"</a>
<li><strong>Previous message:</strong> <a href="6004.php">Willem Vermin: "[OMPI users] stall with MPI_Scatter and shared memory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6007.php">Swamy Kandadai: "Re: [OMPI users] Need some help regarding Linpack execution"</a>
<li><strong>Reply:</strong> <a href="6007.php">Swamy Kandadai: "Re: [OMPI users] Need some help regarding Linpack execution"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, 
<br>
<p>&nbsp;
<br>
<p>I want to perform LINPACK test on my m/c, I have only 1 GB RAM on the
<br>
m/c where I want to run 12 parallel Linpack processes on SLES 10.
<br>
<p>I am using of Mpich-1.2.7p1. (Mpich is built with -rsh=ssh option)
<br>
<p>I have modified HPL.dat accordingly,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;P = 3
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Q = 4    (so as to make PxQ = 12)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;N = 8640 (so as to make use of only 56% of available memory
<br>
and leave rest for host processes)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NB = 11520
<br>
<p>I have also set ulimit -l unlimited..
<br>
<p>Created a machine.list file by specifying my m/c's IP address 12 times.
<br>
(So as to execute all 12 processes on the same m/c) and using GotoBLAS
<br>
for the Linpack execution
<br>
<p>&nbsp;
<br>
<p>Execution command: 
<br>
<p>mpirun -np 12 -machinefile machine.list xhpl
<br>
<p>&nbsp;
<br>
<p>Upon execution, I get following error:
<br>
<p>&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;HPL ERROR from process # 0, on line 419 of function
<br>
HPL_pdinfo:
<br>
<p><span class="quotelev3">&gt;&gt;&gt; Need at least 12 processes for these tests &lt;&lt;&lt;
</span><br>
<p>&nbsp;
<br>
<p>Please guide me where am I going wrong
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>Best Regards,
<br>
<p>Aditya  Vasal
<br>
<p>Software Engg | Semiconductor Solutions Group |KPIT Cummins Infosystems
<br>
Ltd. | +91 99 70 168 581 |Aditya.Vasal_at_[hidden]
<br>
&lt;mailto:|Aditya.Vasal_at_[hidden]&gt;  |www.kpitcummins.com
<br>
&lt;blocked::<a href="http://www.kpitcummins.com/">http://www.kpitcummins.com/</a>&gt; 
<br>
<p>&nbsp;
<br>
<p><p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="../../att-6005/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6006.php">Geoffroy Pignot: "Re: [OMPI users] Problem with gateway between 2 hosts"</a>
<li><strong>Previous message:</strong> <a href="6004.php">Willem Vermin: "[OMPI users] stall with MPI_Scatter and shared memory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6007.php">Swamy Kandadai: "Re: [OMPI users] Need some help regarding Linpack execution"</a>
<li><strong>Reply:</strong> <a href="6007.php">Swamy Kandadai: "Re: [OMPI users] Need some help regarding Linpack execution"</a>
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
