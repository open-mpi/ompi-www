<?
$subject_val = "Re: [OMPI users] Deadly warning &quot;Epoll ADD(4) on fd 2 failed.&quot; ?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 27 13:31:56 2014" -->
<!-- isoreceived="20140527173156" -->
<!-- sent="Tue, 27 May 2014 10:31:52 -0700" -->
<!-- isosent="20140527173152" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Deadly warning &amp;quot;Epoll ADD(4) on fd 2 failed.&amp;quot; ?" -->
<!-- id="E37011BF-6531-4234-BC0A-EC33D5AE2CF2_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="8101C931-2205-4BC5-AF05-8AFC928C3898_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Deadly warning &quot;Epoll ADD(4) on fd 2 failed.&quot; ?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-27 13:31:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24491.php">Lorenzo Donà: "[OMPI users] mpiifort mpiicc not found"</a>
<li><strong>Previous message:</strong> <a href="24489.php">Ralph Castain: "Re: [OMPI users] divide-by-zero in mca_btl_openib_add_procs"</a>
<li><strong>In reply to:</strong> <a href="24485.php">Filippo Spiga: "[OMPI users] Deadly warning &quot;Epoll ADD(4) on fd 2 failed.&quot; ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24502.php">Mike Dubman: "Re: [OMPI users] Deadly warning &quot;Epoll ADD(4) on fd 2 failed.&quot; ?"</a>
<li><strong>Reply:</strong> <a href="24502.php">Mike Dubman: "Re: [OMPI users] Deadly warning &quot;Epoll ADD(4) on fd 2 failed.&quot; ?"</a>
<li><strong>Reply:</strong> <a href="24504.php">Filippo Spiga: "Re: [OMPI users] Deadly warning &quot;Epoll ADD(4) on fd 2 failed.&quot; ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm unaware of any OMPI error message like that - might be caused by something in libevent as that could be using epoll, so it could be caused by us. However, I'm a little concerned about the use of the prerelease version of Slurm as we know that PMI is having some problems over there.
<br>
<p>So out of curiosity - how was this job launched? Via mpirun or directly using srun?
<br>
<p><p>On May 27, 2014, at 1:22 AM, Filippo Spiga &lt;spiga.filippo_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Dear all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am using Open MPI v1.8.2 night snapshot compiled with SLURM support (version 14.03pre5). These two messages below appeared during a job of 2048 MPI that died after 24 hours! 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [warn] Epoll ADD(1) on fd 0 failed.  Old events were 0; read change was 1 (add); write change was 0 (none): Operation not permitted
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [warn] Epoll ADD(4) on fd 2 failed.  Old events were 0; read change was 0 (none); write change was 1 (add): Operation not permitted
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The first one, appeared immediately at the beginning had no effect. The application started to compute and it successfully called a big parallel eigensolver. The second message appeared after 18~19 hours of non-stop computation and the application crashed without showing any other error message! Regularly I was checking that MPI processes were not stuck, after this message the processes were all aborted without dumping anything on stdout/stderr. It is quite weird.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I believe these messages come from Open MPI (but correct me if I am wrong!). I am going to look at the application and the various libraries to find out if something is wrong. In the meanwhile it will be a great help if anyone can clarify the exact meaning of these warning messages.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Many thanks in advance.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Filippo
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Mr. Filippo SPIGA, M.Sc.
</span><br>
<span class="quotelev1">&gt; <a href="http://www.linkedin.com/in/filippospiga">http://www.linkedin.com/in/filippospiga</a> ~ skype: filippo.spiga
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &#171;Nobody will drive us out of Cantor's paradise.&#187; ~ David Hilbert
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *****
</span><br>
<span class="quotelev1">&gt; Disclaimer: &quot;Please note this message and any attachments are CONFIDENTIAL and may be privileged or otherwise protected from disclosure. The contents are not to be disclosed to anyone other than the addressee. Unauthorized recipients are requested to preserve this confidentiality and to advise the sender immediately of any error in transmission.&quot;
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24490/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24491.php">Lorenzo Donà: "[OMPI users] mpiifort mpiicc not found"</a>
<li><strong>Previous message:</strong> <a href="24489.php">Ralph Castain: "Re: [OMPI users] divide-by-zero in mca_btl_openib_add_procs"</a>
<li><strong>In reply to:</strong> <a href="24485.php">Filippo Spiga: "[OMPI users] Deadly warning &quot;Epoll ADD(4) on fd 2 failed.&quot; ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24502.php">Mike Dubman: "Re: [OMPI users] Deadly warning &quot;Epoll ADD(4) on fd 2 failed.&quot; ?"</a>
<li><strong>Reply:</strong> <a href="24502.php">Mike Dubman: "Re: [OMPI users] Deadly warning &quot;Epoll ADD(4) on fd 2 failed.&quot; ?"</a>
<li><strong>Reply:</strong> <a href="24504.php">Filippo Spiga: "Re: [OMPI users] Deadly warning &quot;Epoll ADD(4) on fd 2 failed.&quot; ?"</a>
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
