<?
$subject_val = "Re: [OMPI users] over-subscription of cores";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 26 12:02:00 2011" -->
<!-- isoreceived="20111226170200" -->
<!-- sent="Mon, 26 Dec 2011 18:01:54 +0100" -->
<!-- isosent="20111226170154" -->
<!-- name="Matthieu Brucher" -->
<!-- email="matthieu.brucher_at_[hidden]" -->
<!-- subject="Re: [OMPI users] over-subscription of cores" -->
<!-- id="CAHCaCkKKjuwsMFvygd3OvSvc=X5fTVXrdFPTY1W7yjp1nnDxoQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAJd+HkNZJrALZpusZywkghu31T+NuVWY0vbtfvEjnT46VZLUhA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] over-subscription of cores<br>
<strong>From:</strong> Matthieu Brucher (<em>matthieu.brucher_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-26 12:01:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18053.php">Santosh Ansumali: "Re: [OMPI users] over-subscription of cores"</a>
<li><strong>Previous message:</strong> <a href="18051.php">Santosh Ansumali: "Re: [OMPI users] over-subscription of cores"</a>
<li><strong>In reply to:</strong> <a href="18048.php">Santosh Ansumali: "[OMPI users] over-subscription of cores"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18053.php">Santosh Ansumali: "Re: [OMPI users] over-subscription of cores"</a>
<li><strong>Reply:</strong> <a href="18053.php">Santosh Ansumali: "Re: [OMPI users] over-subscription of cores"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>If your problem is memory bound and if you don't use the whole memory
<br>
capacity of one node, it means that you are limited by your memory
<br>
bandwidth. In this case oversubscribing the number of processes will lead
<br>
to worse behavior, as all processes will fight for the same memory
<br>
bandwidth.
<br>
<p>Just my opinion.
<br>
<p>Matthieu Brucher
<br>
<p>2011/12/23 Santosh Ansumali &lt;ansumali_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt;  Dear All,
</span><br>
<span class="quotelev1">&gt;        We are running a PDE solver which is memory bound. Due to
</span><br>
<span class="quotelev1">&gt; cache related issue,   smaller  number of grid point per core leads to
</span><br>
<span class="quotelev1">&gt; better performance for this code.  Thus, though available memory per
</span><br>
<span class="quotelev1">&gt; core is more than 2 GB, we are able to good  performance   by using
</span><br>
<span class="quotelev1">&gt; less than 1 GB per core.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I want to know whether oversubscribing the cores can potentially
</span><br>
<span class="quotelev1">&gt; improve performance of such a code.  My thinking is that if I
</span><br>
<span class="quotelev1">&gt; oversubscribe the cores,  each thread will be using less than 1 GB so
</span><br>
<span class="quotelev1">&gt; cache related problems will be less severe.  Is this logic correct or
</span><br>
<span class="quotelev1">&gt; due to cache conflict performance will deteriorate further?
</span><br>
<span class="quotelev1">&gt;      In case, over-subscription can help, how shall I modify
</span><br>
<span class="quotelev1">&gt; submission file (using sun grid engine) to enable over-subscription of
</span><br>
<span class="quotelev1">&gt; cores?
</span><br>
<span class="quotelev1">&gt; my current submission file is written as follows
</span><br>
<span class="quotelev1">&gt; #!/bin/bash
</span><br>
<span class="quotelev1">&gt; #$ -N first
</span><br>
<span class="quotelev1">&gt; #$ -S /bin/bash
</span><br>
<span class="quotelev1">&gt; #$ -cwd
</span><br>
<span class="quotelev1">&gt; #$ -e $JOB_ID.$JOB_NAME.ERROR
</span><br>
<span class="quotelev1">&gt; #$ -o $JOB_ID.$JOB_NAME.OUTPUT
</span><br>
<span class="quotelev1">&gt; #$ -P faculty_prj
</span><br>
<span class="quotelev1">&gt; #$ -p 0
</span><br>
<span class="quotelev1">&gt; #$ -pe orte 8
</span><br>
<span class="quotelev1">&gt; /opt/mpi/openmpi/1.3.3/gnu/bin/mpirun -np $NSLOTS ./test_vel.out
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is it possible to allow over-subscription by modifying submission file
</span><br>
<span class="quotelev1">&gt; itself?  Or do I need to change hostfiles somehow?
</span><br>
<span class="quotelev1">&gt; Thanks for your help!
</span><br>
<span class="quotelev1">&gt; Best Regards
</span><br>
<span class="quotelev1">&gt; Santosh Ansumali,
</span><br>
<span class="quotelev1">&gt; Faculty Fellow,
</span><br>
<span class="quotelev1">&gt; Engineering Mechanics Unit
</span><br>
<span class="quotelev1">&gt; Jawaharlal Nehru Centre for Advanced Scientific Research (JNCASR)
</span><br>
<span class="quotelev1">&gt;  Jakkur, Bangalore-560 064, India
</span><br>
<span class="quotelev1">&gt; Tel: + 91 80 22082938
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
Information System Engineer, Ph.D.
Blog: <a href="http://matt.eifelle.com">http://matt.eifelle.com</a>
LinkedIn: <a href="http://www.linkedin.com/in/matthieubrucher">http://www.linkedin.com/in/matthieubrucher</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18052/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18053.php">Santosh Ansumali: "Re: [OMPI users] over-subscription of cores"</a>
<li><strong>Previous message:</strong> <a href="18051.php">Santosh Ansumali: "Re: [OMPI users] over-subscription of cores"</a>
<li><strong>In reply to:</strong> <a href="18048.php">Santosh Ansumali: "[OMPI users] over-subscription of cores"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18053.php">Santosh Ansumali: "Re: [OMPI users] over-subscription of cores"</a>
<li><strong>Reply:</strong> <a href="18053.php">Santosh Ansumali: "Re: [OMPI users] over-subscription of cores"</a>
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
