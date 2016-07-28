<?
$subject_val = "Re: [OMPI users] spml_ikrit_np random values";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun  5 12:45:11 2014" -->
<!-- isoreceived="20140605164511" -->
<!-- sent="Thu, 5 Jun 2014 19:45:08 +0300" -->
<!-- isosent="20140605164508" -->
<!-- name="Mike Dubman" -->
<!-- email="miked_at_[hidden]" -->
<!-- subject="Re: [OMPI users] spml_ikrit_np random values" -->
<!-- id="CAAO1Kybj_F5waL3muV4DbrEsKsLJO6Lc4S1-V3S7dmP1TCGYPw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="1401983805.8524361_at_f380.i.mail.ru" -->
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
<strong>Subject:</strong> Re: [OMPI users] spml_ikrit_np random values<br>
<strong>From:</strong> Mike Dubman (<em>miked_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-05 12:45:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24552.php">George Bosilca: "Re: [OMPI users] OpenMPI Compilation Error"</a>
<li><strong>Previous message:</strong> <a href="24550.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI Compilation Error"</a>
<li><strong>In reply to:</strong> <a href="24547.php">Timur Ismagilov: "[OMPI users] spml_ikrit_np random values"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24576.php">Mike Dubman: "Re: [OMPI users] spml_ikrit_np random values"</a>
<li><strong>Reply:</strong> <a href="24576.php">Mike Dubman: "Re: [OMPI users] spml_ikrit_np random values"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
seems oshmem_info uses uninitialized value.
<br>
we will check it, thanks for report.
<br>
<p><p>On Thu, Jun 5, 2014 at 6:56 PM, Timur Ismagilov &lt;tismagilov_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am using Open MPI v1.8.1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $oshmem_info -a --parsable | grep spml_ikrit_np
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mca:spml:ikrit:param:spml_ikrit_np:value:1620524368  (alwase new value)
</span><br>
<span class="quotelev1">&gt; mca:spml:ikrit:param:spml_ikrit_np:source:default
</span><br>
<span class="quotelev1">&gt; mca:spml:ikrit:param:spml_ikrit_np:status:writeable
</span><br>
<span class="quotelev1">&gt; mca:spml:ikrit:param:spml_ikrit_np:level:9
</span><br>
<span class="quotelev1">&gt; mca:spml:ikrit:param:spml_ikrit_np:help:[integer] Minimal allowed job's NP
</span><br>
<span class="quotelev1">&gt; to activate ikrit
</span><br>
<span class="quotelev1">&gt; mca:spml:ikrit:param:spml_ikrit_np:deprecated:no
</span><br>
<span class="quotelev1">&gt; mca:spml:ikrit:param:spml_ikrit_np:type:int
</span><br>
<span class="quotelev1">&gt; mca:spml:ikrit:param:spml_ikrit_np:disabled:false
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; why spml_ikrit_np gets a new value each time?
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Timur
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24551/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24552.php">George Bosilca: "Re: [OMPI users] OpenMPI Compilation Error"</a>
<li><strong>Previous message:</strong> <a href="24550.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI Compilation Error"</a>
<li><strong>In reply to:</strong> <a href="24547.php">Timur Ismagilov: "[OMPI users] spml_ikrit_np random values"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24576.php">Mike Dubman: "Re: [OMPI users] spml_ikrit_np random values"</a>
<li><strong>Reply:</strong> <a href="24576.php">Mike Dubman: "Re: [OMPI users] spml_ikrit_np random values"</a>
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
