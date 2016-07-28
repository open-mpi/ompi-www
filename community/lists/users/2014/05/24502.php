<?
$subject_val = "Re: [OMPI users] Deadly warning &quot;Epoll ADD(4) on fd 2 failed.&quot; ?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 28 02:18:01 2014" -->
<!-- isoreceived="20140528061801" -->
<!-- sent="Wed, 28 May 2014 09:17:59 +0300" -->
<!-- isosent="20140528061759" -->
<!-- name="Mike Dubman" -->
<!-- email="miked_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Deadly warning &amp;quot;Epoll ADD(4) on fd 2 failed.&amp;quot; ?" -->
<!-- id="CAAO1KybOJFeA+9epzsJkAjdCfYK0Lnd7RPUtY5=4SM5VOqB0HQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="E37011BF-6531-4234-BC0A-EC33D5AE2CF2_at_open-mpi.org" -->
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
<strong>From:</strong> Mike Dubman (<em>miked_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-28 02:17:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24503.php">Bibrak Qamar: "Re: [OMPI users] How to run Open MPI over TCP (Ethernet)"</a>
<li><strong>Previous message:</strong> <a href="24501.php">Lorenzo Don&#224;: "[OMPI users] configure openmpi 1.8.1 with intel compiler"</a>
<li><strong>In reply to:</strong> <a href="24490.php">Ralph Castain: "Re: [OMPI users] Deadly warning &quot;Epoll ADD(4) on fd 2 failed.&quot; ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24504.php">Filippo Spiga: "Re: [OMPI users] Deadly warning &quot;Epoll ADD(4) on fd 2 failed.&quot; ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think it comes from PMI API used by OMPI/SLURM.
<br>
SLURM`s libpmi is trying to control stdout/stdin which is already
<br>
controlled by OMPI.
<br>
<p><p>On Tue, May 27, 2014 at 8:31 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I'm unaware of any OMPI error message like that - might be caused by
</span><br>
<span class="quotelev1">&gt; something in libevent as that could be using epoll, so it could be caused
</span><br>
<span class="quotelev1">&gt; by us. However, I'm a little concerned about the use of the prerelease
</span><br>
<span class="quotelev1">&gt; version of Slurm as we know that PMI is having some problems over there.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So out of curiosity - how was this job launched? Via mpirun or directly
</span><br>
<span class="quotelev1">&gt; using srun?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 27, 2014, at 1:22 AM, Filippo Spiga &lt;spiga.filippo_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dear all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am using Open MPI v1.8.2 night snapshot compiled with SLURM support
</span><br>
<span class="quotelev1">&gt; (version 14.03pre5). These two messages below appeared during a job of 2048
</span><br>
<span class="quotelev1">&gt; MPI that died after 24 hours!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [warn] Epoll ADD(1) on fd 0 failed.  Old events were 0; read change was 1
</span><br>
<span class="quotelev1">&gt; (add); write change was 0 (none): Operation not permitted
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [warn] Epoll ADD(4) on fd 2 failed.  Old events were 0; read change was 0
</span><br>
<span class="quotelev1">&gt; (none); write change was 1 (add): Operation not permitted
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The first one, appeared immediately at the beginning had no effect. The
</span><br>
<span class="quotelev1">&gt; application started to compute and it successfully called a big parallel
</span><br>
<span class="quotelev1">&gt; eigensolver. The second message appeared after 18~19 hours of non-stop
</span><br>
<span class="quotelev1">&gt; computation and the application crashed without showing any other error
</span><br>
<span class="quotelev1">&gt; message! Regularly I was checking that MPI processes were not stuck, after
</span><br>
<span class="quotelev1">&gt; this message the processes were all aborted without dumping anything on
</span><br>
<span class="quotelev1">&gt; stdout/stderr. It is quite weird.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I believe these messages come from Open MPI (but correct me if I am
</span><br>
<span class="quotelev1">&gt; wrong!). I am going to look at the application and the various libraries to
</span><br>
<span class="quotelev1">&gt; find out if something is wrong. In the meanwhile it will be a great help if
</span><br>
<span class="quotelev1">&gt; anyone can clarify the exact meaning of these warning messages.
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
<span class="quotelev1">&gt; &#194;&#171;Nobody will drive us out of Cantor's paradise.&#194;&#187; ~ David Hilbert
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *****
</span><br>
<span class="quotelev1">&gt; Disclaimer: &quot;Please note this message and any attachments are CONFIDENTIAL
</span><br>
<span class="quotelev1">&gt; and may be privileged or otherwise protected from disclosure. The contents
</span><br>
<span class="quotelev1">&gt; are not to be disclosed to anyone other than the addressee. Unauthorized
</span><br>
<span class="quotelev1">&gt; recipients are requested to preserve this confidentiality and to advise the
</span><br>
<span class="quotelev1">&gt; sender immediately of any error in transmission.&quot;
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24502/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24503.php">Bibrak Qamar: "Re: [OMPI users] How to run Open MPI over TCP (Ethernet)"</a>
<li><strong>Previous message:</strong> <a href="24501.php">Lorenzo Don&#224;: "[OMPI users] configure openmpi 1.8.1 with intel compiler"</a>
<li><strong>In reply to:</strong> <a href="24490.php">Ralph Castain: "Re: [OMPI users] Deadly warning &quot;Epoll ADD(4) on fd 2 failed.&quot; ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24504.php">Filippo Spiga: "Re: [OMPI users] Deadly warning &quot;Epoll ADD(4) on fd 2 failed.&quot; ?"</a>
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
