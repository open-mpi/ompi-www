<?
$subject_val = "Re: [OMPI users] spml_ikrit_np random values";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun  6 13:38:34 2014" -->
<!-- isoreceived="20140606173834" -->
<!-- sent="Fri, 6 Jun 2014 20:38:32 +0300" -->
<!-- isosent="20140606173832" -->
<!-- name="Mike Dubman" -->
<!-- email="miked_at_[hidden]" -->
<!-- subject="Re: [OMPI users] spml_ikrit_np random values" -->
<!-- id="CAAO1Kya=fh6Wnf09pL-oPOH6F07L9jSwazX_VDUS7nneZcVC3A_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAO1Kybj_F5waL3muV4DbrEsKsLJO6Lc4S1-V3S7dmP1TCGYPw_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2014-06-06 13:38:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24577.php">Sasso, John (GE Power & Water, Non-GE): "Re: [OMPI users] Determining what parameters a scheduler passes to	OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="24575.php">Dan Dietz: "Re: [OMPI users] Bind multiple cores to rank - OpenMPI 1.8.1"</a>
<li><strong>In reply to:</strong> <a href="24551.php">Mike Dubman: "Re: [OMPI users] spml_ikrit_np random values"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
fixed here: <a href="https://svn.open-mpi.org/trac/ompi/changeset/31962">https://svn.open-mpi.org/trac/ompi/changeset/31962</a>
<br>
<p>Thanks for report.
<br>
<p><p>On Thu, Jun 5, 2014 at 7:45 PM, Mike Dubman &lt;miked_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; seems oshmem_info uses uninitialized value.
</span><br>
<span class="quotelev1">&gt; we will check it, thanks for report.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Jun 5, 2014 at 6:56 PM, Timur Ismagilov &lt;tismagilov_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am using Open MPI v1.8.1.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $oshmem_info -a --parsable | grep spml_ikrit_np
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mca:spml:ikrit:param:spml_ikrit_np:value:1620524368  (alwase new value)
</span><br>
<span class="quotelev2">&gt;&gt; mca:spml:ikrit:param:spml_ikrit_np:source:default
</span><br>
<span class="quotelev2">&gt;&gt; mca:spml:ikrit:param:spml_ikrit_np:status:writeable
</span><br>
<span class="quotelev2">&gt;&gt; mca:spml:ikrit:param:spml_ikrit_np:level:9
</span><br>
<span class="quotelev2">&gt;&gt; mca:spml:ikrit:param:spml_ikrit_np:help:[integer] Minimal allowed job's
</span><br>
<span class="quotelev2">&gt;&gt; NP to activate ikrit
</span><br>
<span class="quotelev2">&gt;&gt; mca:spml:ikrit:param:spml_ikrit_np:deprecated:no
</span><br>
<span class="quotelev2">&gt;&gt; mca:spml:ikrit:param:spml_ikrit_np:type:int
</span><br>
<span class="quotelev2">&gt;&gt; mca:spml:ikrit:param:spml_ikrit_np:disabled:false
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; why spml_ikrit_np gets a new value each time?
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; Timur
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24576/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24577.php">Sasso, John (GE Power & Water, Non-GE): "Re: [OMPI users] Determining what parameters a scheduler passes to	OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="24575.php">Dan Dietz: "Re: [OMPI users] Bind multiple cores to rank - OpenMPI 1.8.1"</a>
<li><strong>In reply to:</strong> <a href="24551.php">Mike Dubman: "Re: [OMPI users] spml_ikrit_np random values"</a>
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
