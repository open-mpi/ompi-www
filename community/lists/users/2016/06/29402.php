<?
$subject_val = "[OMPI users] hybrid MPI/OpenMP C++ code without acceleration in OpenMP mode";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  8 02:30:36 2016" -->
<!-- isoreceived="20160608063036" -->
<!-- sent="Wed, 8 Jun 2016 09:30:24 +0300" -->
<!-- isosent="20160608063024" -->
<!-- name="Maxim Reshetnyak" -->
<!-- email="m.reshetnyak_at_[hidden]" -->
<!-- subject="[OMPI users] hybrid MPI/OpenMP C++ code without acceleration in OpenMP mode" -->
<!-- id="5757BB80.4020906_at_gmail.com" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] hybrid MPI/OpenMP C++ code without acceleration in OpenMP mode<br>
<strong>From:</strong> Maxim Reshetnyak (<em>m.reshetnyak_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-08 02:30:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29403.php">Siegmar Gross: "[OMPI users] openmpi-v1.10.3rc4: another problem with &quot;--slot-list&quot;"</a>
<li><strong>Previous message:</strong> <a href="29401.php">Gilles Gouaillardet: "Re: [OMPI users] hybrid MPI/OpenMP C++ code without acceleration in OpenMP mode"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29406.php">Gilles Gouaillardet: "Re: [OMPI users] hybrid MPI/OpenMP C++ code without acceleration in OpenMP mode"</a>
<li><strong>Reply:</strong> <a href="29406.php">Gilles Gouaillardet: "Re: [OMPI users] hybrid MPI/OpenMP C++ code without acceleration in OpenMP mode"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
thank you!
<br>
<p>mpirun --bind-to none ...
<br>
<p>gives what I need:
<br>
<p>echo &quot; run 1 &quot; ; export OMP_NUM_THREADS=1 ; time mpirun -np 1 --bind-to 
<br>
none  a.out ;  echo &quot; run 2 &quot; ;   export OMP_NUM_THREADS=2 ; time  
<br>
mpirun -np 1 --bind-to none  a.out
<br>
&nbsp;&nbsp;run 1
<br>
0 0
<br>
0 0
<br>
<p>real    0m43.593s
<br>
user    0m43.282s
<br>
sys    0m0.187s
<br>
&nbsp;&nbsp;run 2
<br>
0 0
<br>
0 1
<br>
<p>real    0m21.970s
<br>
user    0m43.202s
<br>
sys    0m0.148s
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29403.php">Siegmar Gross: "[OMPI users] openmpi-v1.10.3rc4: another problem with &quot;--slot-list&quot;"</a>
<li><strong>Previous message:</strong> <a href="29401.php">Gilles Gouaillardet: "Re: [OMPI users] hybrid MPI/OpenMP C++ code without acceleration in OpenMP mode"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29406.php">Gilles Gouaillardet: "Re: [OMPI users] hybrid MPI/OpenMP C++ code without acceleration in OpenMP mode"</a>
<li><strong>Reply:</strong> <a href="29406.php">Gilles Gouaillardet: "Re: [OMPI users] hybrid MPI/OpenMP C++ code without acceleration in OpenMP mode"</a>
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
