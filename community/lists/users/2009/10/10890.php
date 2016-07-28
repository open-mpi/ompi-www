<?
$subject_val = "Re: [OMPI users] Yet another stdin problem";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  7 11:07:09 2009" -->
<!-- isoreceived="20091007150709" -->
<!-- sent="Wed, 7 Oct 2009 18:06:55 +0300" -->
<!-- isosent="20091007150655" -->
<!-- name="Roman Cheplyaka" -->
<!-- email="roman.cheplyaka_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Yet another stdin problem" -->
<!-- id="6eda6fa0910070806p133c1b9bm2761c350fef1e934_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="441687.75126.qm_at_web26508.mail.ukl.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Yet another stdin problem<br>
<strong>From:</strong> Roman Cheplyaka (<em>roman.cheplyaka_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-07 11:06:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10891.php">Kilou Zelabia: "[OMPI users] Re :  Yet another stdin problem"</a>
<li><strong>Previous message:</strong> <a href="10889.php">Kilou Zelabia: "[OMPI users] Yet another stdin problem"</a>
<li><strong>In reply to:</strong> <a href="10889.php">Kilou Zelabia: "[OMPI users] Yet another stdin problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10891.php">Kilou Zelabia: "[OMPI users] Re :  Yet another stdin problem"</a>
<li><strong>Reply:</strong> <a href="10891.php">Kilou Zelabia: "[OMPI users] Re :  Yet another stdin problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Why not modify your program to read inputs.txt instead of stdin?
<br>
<p>2009/10/7 Kilou Zelabia &lt;kilou_zellabia_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt; Dear all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm trying to lunch an MPI program using the command
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np 64 my_exe &lt; inputs.txt
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; inputs.txt actually contains the entries that&#194;&#160; are read by all processes
</span><br>
<span class="quotelev1">&gt; however it seems that openmpi redirect the stdin only to the processes with
</span><br>
<span class="quotelev1">&gt; rank 0. with leads to a segmentation fault on the other processes.
</span><br>
<span class="quotelev1">&gt; The option &quot;-stdin rank&quot; doesn't help since i need all processes read the
</span><br>
<span class="quotelev1">&gt; inputs.txt file.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'v tested with openmpi 1.3 and 1.2 whitout success.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance for you help.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Zellabia. S
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
<p><p><p><pre>
-- 
Roman I. Cheplyaka
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10891.php">Kilou Zelabia: "[OMPI users] Re :  Yet another stdin problem"</a>
<li><strong>Previous message:</strong> <a href="10889.php">Kilou Zelabia: "[OMPI users] Yet another stdin problem"</a>
<li><strong>In reply to:</strong> <a href="10889.php">Kilou Zelabia: "[OMPI users] Yet another stdin problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10891.php">Kilou Zelabia: "[OMPI users] Re :  Yet another stdin problem"</a>
<li><strong>Reply:</strong> <a href="10891.php">Kilou Zelabia: "[OMPI users] Re :  Yet another stdin problem"</a>
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
