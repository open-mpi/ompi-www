<?
$subject_val = "Re: [OMPI users] over-subscription of cores";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 26 12:32:36 2011" -->
<!-- isoreceived="20111226173236" -->
<!-- sent="Mon, 26 Dec 2011 23:02:11 +0530" -->
<!-- isosent="20111226173211" -->
<!-- name="Santosh Ansumali" -->
<!-- email="ansumali_at_[hidden]" -->
<!-- subject="Re: [OMPI users] over-subscription of cores" -->
<!-- id="CAJd+HkMHBfu3DSb32H3okYxn_PVQKxq69-rXfov33128Z2pWsw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAHCaCkKKjuwsMFvygd3OvSvc=X5fTVXrdFPTY1W7yjp1nnDxoQ_at_mail.gmail.com" -->
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
<strong>From:</strong> Santosh Ansumali (<em>ansumali_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-26 12:32:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18054.php">Ralph Castain: "Re: [OMPI users] over-subscription of cores"</a>
<li><strong>Previous message:</strong> <a href="18052.php">Matthieu Brucher: "Re: [OMPI users] over-subscription of cores"</a>
<li><strong>In reply to:</strong> <a href="18052.php">Matthieu Brucher: "Re: [OMPI users] over-subscription of cores"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18054.php">Ralph Castain: "Re: [OMPI users] over-subscription of cores"</a>
<li><strong>Reply:</strong> <a href="18054.php">Ralph Castain: "Re: [OMPI users] over-subscription of cores"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the response. May be I am wrong. However my argument is as
<br>
follows: our test shows that a 100^3 grid per core performs 10 times
<br>
faster (normalised in proper unit)  than 200^3.  Both of these sizes
<br>
are not fitting in cache.  100^3 run is benefiting due to smaller size
<br>
where compiler is guessing access pattern in slightly better way.
<br>
&nbsp;So, in case of running  one large job of 200^3 per core if I
<br>
oversubscribe the core with smaller jobs of size comparable to 100^3,
<br>
high saving due to better memory access should  compensate for thread
<br>
compition.
<br>
Best,
<br>
Santosh
<br>
On Mon, Dec 26, 2011 at 10:31 PM, Matthieu Brucher
<br>
&lt;matthieu.brucher_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If your problem is memory bound and if you don't use the whole memory
</span><br>
<span class="quotelev1">&gt; capacity of one node, it means that you are limited by your memory
</span><br>
<span class="quotelev1">&gt; bandwidth. In this case oversubscribing the number of processes will lead to
</span><br>
<span class="quotelev1">&gt; worse behavior, as all processes will fight for the same memory bandwidth.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just my opinion.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Matthieu Brucher
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2011/12/23 Santosh Ansumali &lt;ansumali_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#160;Dear All,
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160;We are running a PDE solver which is memory bound. Due to
</span><br>
<span class="quotelev2">&gt;&gt; cache related issue, &#160; smaller &#160;number of grid point per core leads to
</span><br>
<span class="quotelev2">&gt;&gt; better performance for this code. &#160;Thus, though available memory per
</span><br>
<span class="quotelev2">&gt;&gt; core is more than 2 GB, we are able to good &#160;performance &#160; by using
</span><br>
<span class="quotelev2">&gt;&gt; less than 1 GB per core.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#160;I want to know whether oversubscribing the cores can potentially
</span><br>
<span class="quotelev2">&gt;&gt; improve performance of such a code. &#160;My thinking is that if I
</span><br>
<span class="quotelev2">&gt;&gt; oversubscribe the cores, &#160;each thread will be using less than 1 GB so
</span><br>
<span class="quotelev2">&gt;&gt; cache related problems will be less severe. &#160;Is this logic correct or
</span><br>
<span class="quotelev2">&gt;&gt; due to cache conflict performance will deteriorate further?
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160;In case, over-subscription can help, how shall I modify
</span><br>
<span class="quotelev2">&gt;&gt; submission file (using sun grid engine) to enable over-subscription of
</span><br>
<span class="quotelev2">&gt;&gt; cores?
</span><br>
<span class="quotelev2">&gt;&gt; my current submission file is written as follows
</span><br>
<span class="quotelev2">&gt;&gt; #!/bin/bash
</span><br>
<span class="quotelev2">&gt;&gt; #$ -N first
</span><br>
<span class="quotelev2">&gt;&gt; #$ -S /bin/bash
</span><br>
<span class="quotelev2">&gt;&gt; #$ -cwd
</span><br>
<span class="quotelev2">&gt;&gt; #$ -e $JOB_ID.$JOB_NAME.ERROR
</span><br>
<span class="quotelev2">&gt;&gt; #$ -o $JOB_ID.$JOB_NAME.OUTPUT
</span><br>
<span class="quotelev2">&gt;&gt; #$ -P faculty_prj
</span><br>
<span class="quotelev2">&gt;&gt; #$ -p 0
</span><br>
<span class="quotelev2">&gt;&gt; #$ -pe orte 8
</span><br>
<span class="quotelev2">&gt;&gt; /opt/mpi/openmpi/1.3.3/gnu/bin/mpirun -np $NSLOTS ./test_vel.out
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is it possible to allow over-subscription by modifying submission file
</span><br>
<span class="quotelev2">&gt;&gt; itself? &#160;Or do I need to change hostfiles somehow?
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for your help!
</span><br>
<span class="quotelev2">&gt;&gt; Best Regards
</span><br>
<span class="quotelev2">&gt;&gt; Santosh Ansumali,
</span><br>
<span class="quotelev2">&gt;&gt; Faculty Fellow,
</span><br>
<span class="quotelev2">&gt;&gt; Engineering Mechanics Unit
</span><br>
<span class="quotelev2">&gt;&gt; Jawaharlal Nehru Centre for Advanced Scientific Research (JNCASR)
</span><br>
<span class="quotelev2">&gt;&gt; &#160;Jakkur, Bangalore-560 064, India
</span><br>
<span class="quotelev2">&gt;&gt; Tel: + 91 80 22082938
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Information System Engineer, Ph.D.
</span><br>
<span class="quotelev1">&gt; Blog: <a href="http://matt.eifelle.com">http://matt.eifelle.com</a>
</span><br>
<span class="quotelev1">&gt; LinkedIn: <a href="http://www.linkedin.com/in/matthieubrucher">http://www.linkedin.com/in/matthieubrucher</a>
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
<p><p><p><pre>
-- 
Santosh Ansumali,
Faculty Fellow,
Engineering Mechanics Unit
Jawaharlal Nehru Centre for Advanced Scientific Research (JNCASR)
&#160;Jakkur, Bangalore-560 064, India
Tel: + 91 80 22082938
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18054.php">Ralph Castain: "Re: [OMPI users] over-subscription of cores"</a>
<li><strong>Previous message:</strong> <a href="18052.php">Matthieu Brucher: "Re: [OMPI users] over-subscription of cores"</a>
<li><strong>In reply to:</strong> <a href="18052.php">Matthieu Brucher: "Re: [OMPI users] over-subscription of cores"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18054.php">Ralph Castain: "Re: [OMPI users] over-subscription of cores"</a>
<li><strong>Reply:</strong> <a href="18054.php">Ralph Castain: "Re: [OMPI users] over-subscription of cores"</a>
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
