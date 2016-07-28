<?
$subject_val = "Re: [OMPI users] mpirun (Aborted) error";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Feb 24 06:26:22 2013" -->
<!-- isoreceived="20130224112622" -->
<!-- sent="Sun, 24 Feb 2013 11:26:17 +0000" -->
<!-- isosent="20130224112617" -->
<!-- name="Matthieu Brucher" -->
<!-- email="matthieu.brucher_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun (Aborted) error" -->
<!-- id="CAHCaCk+jUFQGP8T9rEq8vLDcpaw8h_3iZ8Nt3aKiupGNjzx5iQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1361704559.36448.YahooMailClassic_at_web161902.mail.bf1.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun (Aborted) error<br>
<strong>From:</strong> Matthieu Brucher (<em>matthieu.brucher_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-24 06:26:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21456.php">John Hearns: "Re: [OMPI users] mpirun (Aborted) error"</a>
<li><strong>Previous message:</strong> <a href="21454.php">Mohammad Mohsenie: "[OMPI users] mpirun (Aborted) error"</a>
<li><strong>In reply to:</strong> <a href="21454.php">Mohammad Mohsenie: "[OMPI users] mpirun (Aborted) error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21456.php">John Hearns: "Re: [OMPI users] mpirun (Aborted) error"</a>
<li><strong>Reply:</strong> <a href="21456.php">John Hearns: "Re: [OMPI users] mpirun (Aborted) error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
This may be because you have an error in the parallel communication
<br>
pattern. Without other information, it is difficult to say something
<br>
else. Try degugging your application.
<br>
<p>Matthieu
<br>
<p>2013/2/24, Mohammad Mohsenie &lt;m.mohsenie_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt; Dear All,
</span><br>
<span class="quotelev1">&gt; Greetings,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have installed openmpi to make my siesta package run in parallel in ubuntu
</span><br>
<span class="quotelev1">&gt; 12. After all lateral packages (BLAS, LAPACK, BLACS, SCALAPACK ) are build I
</span><br>
<span class="quotelev1">&gt; run an example with this command:
</span><br>
<span class="quotelev1">&gt; &#160;mpirun -np 4 siesta &lt;h2o.fdf &gt;h20.out
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; but this error showed up :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun noticed that process rank 2 with PID 6371 on node
</span><br>
<span class="quotelev1">&gt; mahdi-System-Product-Name exited on signal 6 (Aborted).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; but when I changed command to serial mode ( mpirun -np 1 siesta &lt;h2o.fdf
</span><br>
<span class="quotelev2">&gt;&gt;h20.out) there was no problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any help regard to my problem would be highly appreciated,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; SMM1370
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Information System Engineer, Ph.D.
Blog: <a href="http://matt.eifelle.com">http://matt.eifelle.com</a>
LinkedIn: <a href="http://www.linkedin.com/in/matthieubrucher">http://www.linkedin.com/in/matthieubrucher</a>
Music band: <a href="http://liliejay.com/">http://liliejay.com/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21456.php">John Hearns: "Re: [OMPI users] mpirun (Aborted) error"</a>
<li><strong>Previous message:</strong> <a href="21454.php">Mohammad Mohsenie: "[OMPI users] mpirun (Aborted) error"</a>
<li><strong>In reply to:</strong> <a href="21454.php">Mohammad Mohsenie: "[OMPI users] mpirun (Aborted) error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21456.php">John Hearns: "Re: [OMPI users] mpirun (Aborted) error"</a>
<li><strong>Reply:</strong> <a href="21456.php">John Hearns: "Re: [OMPI users] mpirun (Aborted) error"</a>
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
