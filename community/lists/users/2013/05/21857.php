<?
$subject_val = "Re: [OMPI users] Help diagnosing problem: not being able to run MPI	code across computers";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  7 01:06:12 2013" -->
<!-- isoreceived="20130507050612" -->
<!-- sent="Tue, 07 May 2013 06:05:33 +0100" -->
<!-- isosent="20130507050533" -->
<!-- name="Angel de Vicente" -->
<!-- email="angelv_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Help diagnosing problem: not being able to run MPI	code across computers" -->
<!-- id="yegehdjl6qq.fsf_at_carro.ll.iac.es" -->
<!-- charset="utf-8" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC4F609FEF_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Help diagnosing problem: not being able to run MPI	code across computers<br>
<strong>From:</strong> Angel de Vicente (<em>angelv_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-07 01:05:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21858.php">Duke Nguyen: "[OMPI users] running openmpi with specified lib path"</a>
<li><strong>Previous message:</strong> <a href="21856.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Help diagnosing problem: not being able to run MPI	code across computers"</a>
<li><strong>In reply to:</strong> <a href="21856.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Help diagnosing problem: not being able to run MPI	code across computers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21871.php">Angel de Vicente: "Re: [OMPI users] Help diagnosing problem: not being able to run MPI	code across computers"</a>
<li><strong>Reply:</strong> <a href="21871.php">Angel de Vicente: "Re: [OMPI users] Help diagnosing problem: not being able to run MPI	code across computers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>&quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt; writes:
<br>
<span class="quotelev3">&gt;&gt;&gt; I'm starting to think that perhaps is a firewall issue? I don't have
</span><br>
<span class="quotelev3">&gt;&gt;&gt; root access in these machines but I'll try to investigate.
</span><br>
<p><span class="quotelev1">&gt; A simple test is to try any socket-based server app between the two
</span><br>
<span class="quotelev1">&gt; machines that opens a random listening socket.  Try to telnet to it
</span><br>
<span class="quotelev1">&gt; from the other machine.  If it fails to connect, then you likely have
</span><br>
<span class="quotelev1">&gt; a firewalling issue.
</span><br>
<p>yes, that's just what I did with orted. I saw the port that it was
<br>
trying to connect and telnet to it, and I got &quot;No route to host&quot;, so
<br>
that's why I was going the firewall path. Hopefully the sysadmins can
<br>
disable the firewall for the internal network today, and I can see if
<br>
that solves the issue.
<br>
<p>Thanks,
<br>
<pre>
-- 
&#195;&#129;ngel de Vicente
<a href="http://angel-de-vicente.blogspot.com/">http://angel-de-vicente.blogspot.com/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21858.php">Duke Nguyen: "[OMPI users] running openmpi with specified lib path"</a>
<li><strong>Previous message:</strong> <a href="21856.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Help diagnosing problem: not being able to run MPI	code across computers"</a>
<li><strong>In reply to:</strong> <a href="21856.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Help diagnosing problem: not being able to run MPI	code across computers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21871.php">Angel de Vicente: "Re: [OMPI users] Help diagnosing problem: not being able to run MPI	code across computers"</a>
<li><strong>Reply:</strong> <a href="21871.php">Angel de Vicente: "Re: [OMPI users] Help diagnosing problem: not being able to run MPI	code across computers"</a>
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
