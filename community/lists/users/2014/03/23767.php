<?
$subject_val = "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  4 05:48:31 2014" -->
<!-- isoreceived="20140304104831" -->
<!-- sent="Tue, 04 Mar 2014 10:48:30 +0000" -->
<!-- isosent="20140304104830" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="Re: [OMPI users] slowdown with infiniband and latest CentOS kernel" -->
<!-- id="87siqyck8x.fsf_at_pc102091.liv.ac.uk" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20140301234416.GE20075_at_sillage.bis.pasteur.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] slowdown with infiniband and latest CentOS kernel<br>
<strong>From:</strong> Dave Love (<em>d.love_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-04 05:48:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23768.php">Saliya Ekanayake: "[OMPI users] bind-to core warning even with numactl"</a>
<li><strong>Previous message:</strong> <a href="23766.php">Dave Love: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
<li><strong>In reply to:</strong> <a href="23731.php">Tru Huynh: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23766.php">Dave Love: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Tru Huynh &lt;tru_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev1">&gt; afaik, 2.6.32-431 series is from RHEL(and clones) version &gt;=6.5
</span><br>
<p>[Right.]
<br>
<p><span class="quotelev1">&gt; otoh, it might be related to <a href="http://bugs.centos.org/view.php?id=6949">http://bugs.centos.org/view.php?id=6949</a>
</span><br>
<p>That looks likely.  As we bind to cores, we wouldn't see it for MPI
<br>
processes, at least, and will see higher performance generally.  (I read
<br>
or replied carelessly in thinking this was about binding, rather than a
<br>
possible scheduling issue.)
<br>
<p>It really is time to take core binding seriously at least 15 years after
<br>
NUMA became significant.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23768.php">Saliya Ekanayake: "[OMPI users] bind-to core warning even with numactl"</a>
<li><strong>Previous message:</strong> <a href="23766.php">Dave Love: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
<li><strong>In reply to:</strong> <a href="23731.php">Tru Huynh: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23766.php">Dave Love: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
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
