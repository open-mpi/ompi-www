<?
$subject_val = "Re: [OMPI users] Error building openmpi-dev-3498-gdc4d3ed on Solaris";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 19 12:54:23 2016" -->
<!-- isoreceived="20160219175423" -->
<!-- sent="Fri, 19 Feb 2016 17:54:21 +0000" -->
<!-- isosent="20160219175421" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error building openmpi-dev-3498-gdc4d3ed on Solaris" -->
<!-- id="87vb5kvb5e.fsf_at_pc102091.liv.ac.uk" -->
<!-- inreplyto="CAAkFZ5v-LHtD5jpmNmV4WPcGUyzSk-s88g0Mp2yNt7ULkwDZSA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Error building openmpi-dev-3498-gdc4d3ed on Solaris<br>
<strong>From:</strong> Dave Love (<em>d.love_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-19 12:54:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28554.php">Ralph Castain: "Re: [OMPI users] Error building openmpi-dev-3498-gdc4d3ed on Solaris"</a>
<li><strong>Previous message:</strong> <a href="28552.php">Gilles Gouaillardet: "Re: [OMPI users] Error building openmpi-dev-3498-gdc4d3ed on Solaris"</a>
<li><strong>In reply to:</strong> <a href="28552.php">Gilles Gouaillardet: "Re: [OMPI users] Error building openmpi-dev-3498-gdc4d3ed on Solaris"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28554.php">Ralph Castain: "Re: [OMPI users] Error building openmpi-dev-3498-gdc4d3ed on Solaris"</a>
<li><strong>Reply:</strong> <a href="28554.php">Ralph Castain: "Re: [OMPI users] Error building openmpi-dev-3498-gdc4d3ed on Solaris"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev1">&gt; a field from orte_iof_proc_t is named &quot;stdin&quot;
</span><br>
<span class="quotelev1">&gt; could stdin be #defined under the hood in Solaris ?
</span><br>
<p>It's defined as &quot;(&amp;__iob[0])&quot; on Solaris 10; it's just #defined
<br>
differently by glibc.  See stdio.h(7posix).
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28554.php">Ralph Castain: "Re: [OMPI users] Error building openmpi-dev-3498-gdc4d3ed on Solaris"</a>
<li><strong>Previous message:</strong> <a href="28552.php">Gilles Gouaillardet: "Re: [OMPI users] Error building openmpi-dev-3498-gdc4d3ed on Solaris"</a>
<li><strong>In reply to:</strong> <a href="28552.php">Gilles Gouaillardet: "Re: [OMPI users] Error building openmpi-dev-3498-gdc4d3ed on Solaris"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28554.php">Ralph Castain: "Re: [OMPI users] Error building openmpi-dev-3498-gdc4d3ed on Solaris"</a>
<li><strong>Reply:</strong> <a href="28554.php">Ralph Castain: "Re: [OMPI users] Error building openmpi-dev-3498-gdc4d3ed on Solaris"</a>
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
