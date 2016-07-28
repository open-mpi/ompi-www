<?
$subject_val = "Re: [OMPI users] hybrid MPI/OpenMP C++ code without acceleration in OpenMP mode";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  8 03:43:05 2016" -->
<!-- isoreceived="20160608074305" -->
<!-- sent="Wed, 8 Jun 2016 16:43:01 +0900" -->
<!-- isosent="20160608074301" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] hybrid MPI/OpenMP C++ code without acceleration in OpenMP mode" -->
<!-- id="51bd62e4-4d83-a212-4c6e-612133a4345a_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="5757BB80.4020906_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] hybrid MPI/OpenMP C++ code without acceleration in OpenMP mode<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-08 03:43:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29407.php">George Bosilca: "Re: [OMPI users] openmpi-dev-4221-gb707d13: referenced symbol"</a>
<li><strong>Previous message:</strong> <a href="29405.php">Siegmar Gross: "[OMPI users] openmpi-dev-4221-gb707d13: referenced symbol"</a>
<li><strong>In reply to:</strong> <a href="29402.php">Maxim Reshetnyak: "[OMPI users] hybrid MPI/OpenMP C++ code without acceleration in OpenMP mode"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
note this is still suboptimal.
<br>
<p>for example, if you run a job with two MPI tasks with two OpenMP threads 
<br>
each on the same node,
<br>
<p>then it is likely the OpenMP runtime will bind both thread 0 on core 0, 
<br>
and both thread 1 on core 1, which one more time means time sharing.
<br>
<p><p>Cheers,
<br>
<p>Gilles
<br>
<p>On 6/8/2016 3:30 PM, Maxim Reshetnyak wrote:
<br>
<span class="quotelev1">&gt; thank you!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun --bind-to none ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; gives what I need:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; echo &quot; run 1 &quot; ; export OMP_NUM_THREADS=1 ; time mpirun -np 1 
</span><br>
<span class="quotelev1">&gt; --bind-to none  a.out ;  echo &quot; run 2 &quot; ;   export OMP_NUM_THREADS=2 ; 
</span><br>
<span class="quotelev1">&gt; time  mpirun -np 1 --bind-to none  a.out
</span><br>
<span class="quotelev1">&gt;  run 1
</span><br>
<span class="quotelev1">&gt; 0 0
</span><br>
<span class="quotelev1">&gt; 0 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; real    0m43.593s
</span><br>
<span class="quotelev1">&gt; user    0m43.282s
</span><br>
<span class="quotelev1">&gt; sys    0m0.187s
</span><br>
<span class="quotelev1">&gt;  run 2
</span><br>
<span class="quotelev1">&gt; 0 0
</span><br>
<span class="quotelev1">&gt; 0 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; real    0m21.970s
</span><br>
<span class="quotelev1">&gt; user    0m43.202s
</span><br>
<span class="quotelev1">&gt; sys    0m0.148s
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
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/06/29402.php">http://www.open-mpi.org/community/lists/users/2016/06/29402.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29407.php">George Bosilca: "Re: [OMPI users] openmpi-dev-4221-gb707d13: referenced symbol"</a>
<li><strong>Previous message:</strong> <a href="29405.php">Siegmar Gross: "[OMPI users] openmpi-dev-4221-gb707d13: referenced symbol"</a>
<li><strong>In reply to:</strong> <a href="29402.php">Maxim Reshetnyak: "[OMPI users] hybrid MPI/OpenMP C++ code without acceleration in OpenMP mode"</a>
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
