<?
$subject_val = "[OMPI users] Deadly warning &quot;Epoll ADD(4) on fd 2 failed.&quot; ?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 27 04:22:24 2014" -->
<!-- isoreceived="20140527082224" -->
<!-- sent="Tue, 27 May 2014 09:22:20 +0100" -->
<!-- isosent="20140527082220" -->
<!-- name="Filippo Spiga" -->
<!-- email="spiga.filippo_at_[hidden]" -->
<!-- subject="[OMPI users] Deadly warning &amp;quot;Epoll ADD(4) on fd 2 failed.&amp;quot; ?" -->
<!-- id="8101C931-2205-4BC5-AF05-8AFC928C3898_at_gmail.com" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Deadly warning &quot;Epoll ADD(4) on fd 2 failed.&quot; ?<br>
<strong>From:</strong> Filippo Spiga (<em>spiga.filippo_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-27 04:22:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24486.php">Alain Miniussi: "Re: [OMPI users] divide-by-zero in mca_btl_openib_add_procs"</a>
<li><strong>Previous message:</strong> <a href="24484.php">Hjelm, Nathan T: "Re: [OMPI users] MPI_Finalize() maintains load at 100%."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24490.php">Ralph Castain: "Re: [OMPI users] Deadly warning &quot;Epoll ADD(4) on fd 2 failed.&quot; ?"</a>
<li><strong>Reply:</strong> <a href="24490.php">Ralph Castain: "Re: [OMPI users] Deadly warning &quot;Epoll ADD(4) on fd 2 failed.&quot; ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all,
<br>
<p>I am using Open MPI v1.8.2 night snapshot compiled with SLURM support (version 14.03pre5). These two messages below appeared during a job of 2048 MPI that died after 24 hours! 
<br>
<p>[warn] Epoll ADD(1) on fd 0 failed.  Old events were 0; read change was 1 (add); write change was 0 (none): Operation not permitted
<br>
<p>[warn] Epoll ADD(4) on fd 2 failed.  Old events were 0; read change was 0 (none); write change was 1 (add): Operation not permitted
<br>
<p><p>The first one, appeared immediately at the beginning had no effect. The application started to compute and it successfully called a big parallel eigensolver. The second message appeared after 18~19 hours of non-stop computation and the application crashed without showing any other error message! Regularly I was checking that MPI processes were not stuck, after this message the processes were all aborted without dumping anything on stdout/stderr. It is quite weird.
<br>
<p>I believe these messages come from Open MPI (but correct me if I am wrong!). I am going to look at the application and the various libraries to find out if something is wrong. In the meanwhile it will be a great help if anyone can clarify the exact meaning of these warning messages.
<br>
<p>Many thanks in advance.
<br>
<p>Regards,
<br>
Filippo
<br>
<p><pre>
--
Mr. Filippo SPIGA, M.Sc.
<a href="http://www.linkedin.com/in/filippospiga">http://www.linkedin.com/in/filippospiga</a> ~ skype: filippo.spiga
&#171;Nobody will drive us out of Cantor's paradise.&#187; ~ David Hilbert
*****
Disclaimer: &quot;Please note this message and any attachments are CONFIDENTIAL and may be privileged or otherwise protected from disclosure. The contents are not to be disclosed to anyone other than the addressee. Unauthorized recipients are requested to preserve this confidentiality and to advise the sender immediately of any error in transmission.&quot;
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24485/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24486.php">Alain Miniussi: "Re: [OMPI users] divide-by-zero in mca_btl_openib_add_procs"</a>
<li><strong>Previous message:</strong> <a href="24484.php">Hjelm, Nathan T: "Re: [OMPI users] MPI_Finalize() maintains load at 100%."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24490.php">Ralph Castain: "Re: [OMPI users] Deadly warning &quot;Epoll ADD(4) on fd 2 failed.&quot; ?"</a>
<li><strong>Reply:</strong> <a href="24490.php">Ralph Castain: "Re: [OMPI users] Deadly warning &quot;Epoll ADD(4) on fd 2 failed.&quot; ?"</a>
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
