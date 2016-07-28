<?
$subject_val = "Re: [OMPI users] [warn] Epoll ADD(1) on fd 0 failed";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 30 10:09:58 2014" -->
<!-- isoreceived="20140530140958" -->
<!-- sent="Fri, 30 May 2014 07:09:54 -0700" -->
<!-- isosent="20140530140954" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [warn] Epoll ADD(1) on fd 0 failed" -->
<!-- id="BF42430B-21FB-42C5-A6AD-39E53B38093D_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="1401451886.29264010_at_f372.i.mail.ru" -->
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
<strong>Subject:</strong> Re: [OMPI users] [warn] Epoll ADD(1) on fd 0 failed<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-30 10:09:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24519.php">W Spector: "[OMPI users] Valgrind reports lots of memory leakage"</a>
<li><strong>Previous message:</strong> <a href="24517.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI installation problem"</a>
<li><strong>In reply to:</strong> <a href="24515.php">&#208;&#162;&#208;&#184;&#208;&#188;&#209;&#131;&#209;&#128; &#208;&#152;&#209;&#129;&#208;&#188;&#208;&#176;&#208;&#179;&#208;&#184;&#208;&#187;&#208;&#190;&#208;&#178;: "[OMPI users] [warn] Epoll ADD(1) on fd 0 failed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/06/24545.php">Ralph Castain: "Re: [OMPI users] [warn] Epoll ADD(1) on fd 0 failed"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Can you pass along the cmd line that generated that output, and how OMPI was configured?
<br>
<p>On May 30, 2014, at 5:11 AM, &#208;&#162;&#208;&#184;&#208;&#188;&#209;&#131;&#209;&#128; &#208;&#152;&#209;&#129;&#208;&#188;&#208;&#176;&#208;&#179;&#208;&#184;&#208;&#187;&#208;&#190;&#208;&#178; &lt;tismagilov_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am using Open MPI v1.8.1 and slurm 2.5.6.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I got this messages when i try to run example (hello_oshmem.cpp) program:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [warn] Epoll ADD(1) on fd 0 failed. Old events were 0; read change was 1 (add); write change was 0 (none): Operation not permitted
</span><br>
<span class="quotelev1">&gt; [warn] Epoll ADD(4) on fd 1 failed. Old events were 0; read change was 0 (none); write change was 1 (add): Operation not permitted
</span><br>
<span class="quotelev1">&gt; Hello, world, I am 0 of 2
</span><br>
<span class="quotelev1">&gt; Hello, world, I am 1 of 2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What does this warnings mean?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I lunch this job using sbatch and mpirun with hostfile (got it from :  $srun hostname -s|sort|uniq -c|awk '{print $2&quot; slots=&quot;$1}' &gt; $HOSTFILE)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Timur
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24518/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24519.php">W Spector: "[OMPI users] Valgrind reports lots of memory leakage"</a>
<li><strong>Previous message:</strong> <a href="24517.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI installation problem"</a>
<li><strong>In reply to:</strong> <a href="24515.php">&#208;&#162;&#208;&#184;&#208;&#188;&#209;&#131;&#209;&#128; &#208;&#152;&#209;&#129;&#208;&#188;&#208;&#176;&#208;&#179;&#208;&#184;&#208;&#187;&#208;&#190;&#208;&#178;: "[OMPI users] [warn] Epoll ADD(1) on fd 0 failed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/06/24545.php">Ralph Castain: "Re: [OMPI users] [warn] Epoll ADD(1) on fd 0 failed"</a>
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
