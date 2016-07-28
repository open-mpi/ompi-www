<?
$subject_val = "Re: [OMPI users] locked memory and queue pairs";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 17 10:08:04 2016" -->
<!-- isoreceived="20160317140804" -->
<!-- sent="Thu, 17 Mar 2016 14:08:02 +0000" -->
<!-- isosent="20160317140802" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="Re: [OMPI users] locked memory and queue pairs" -->
<!-- id="87egb9i4e5.fsf_at_pc102091.liv.ac.uk" -->
<!-- inreplyto="CABOsP2OjdYC_AYZY2zznw_BNkQ3ROzJJE_A8bk5kPV8JZyc52g_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] locked memory and queue pairs<br>
<strong>From:</strong> Dave Love (<em>d.love_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-17 10:08:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28729.php">Dave Love: "Re: [OMPI users] running OpenMPI jobs (either 1.10.1 or 1.8.7) on SoGE more problems"</a>
<li><strong>Previous message:</strong> <a href="28727.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Issue about cm PML"</a>
<li><strong>In reply to:</strong> <a href="28715.php">Michael Di Domenico: "Re: [OMPI users] locked memory and queue pairs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28732.php">Gilles Gouaillardet: "Re: [OMPI users] locked memory and queue pairs"</a>
<li><strong>Reply:</strong> <a href="28732.php">Gilles Gouaillardet: "Re: [OMPI users] locked memory and queue pairs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Michael Di Domenico &lt;mdidomenico4_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev1">&gt; On Wed, Mar 16, 2016 at 12:12 PM, Elken, Tom &lt;tom.elken_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi Mike,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In this file,
</span><br>
<span class="quotelev2">&gt;&gt; $ cat /etc/security/limits.conf
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; &lt; do you see at the end ... &gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; * hard memlock unlimited
</span><br>
<span class="quotelev2">&gt;&gt; * soft memlock unlimited
</span><br>
<span class="quotelev2">&gt;&gt; # -- All InfiniBand Settings End here --
</span><br>
<span class="quotelev2">&gt;&gt; ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes.  I double checked that it's set on all compute nodes in the
</span><br>
<span class="quotelev1">&gt; actual file and through the ulimit command
</span><br>
<p>Is limits.conf actualy relevant to your job launch?  It's normally used
<br>
by pam_limits (on GNU/Linux) which won't necessarily be run.  [In the
<br>
case of SGE, you specify the resource limit as a parameter of the
<br>
execution daemon (execd), at least with &quot;builtin&quot; remote startup.]
<br>
<p>I'd verify it by executing something like &quot;procenv -l&quot; under mpirun.
<br>
(procenv is packaged for the major GNU/Linux distributions.)
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28729.php">Dave Love: "Re: [OMPI users] running OpenMPI jobs (either 1.10.1 or 1.8.7) on SoGE more problems"</a>
<li><strong>Previous message:</strong> <a href="28727.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Issue about cm PML"</a>
<li><strong>In reply to:</strong> <a href="28715.php">Michael Di Domenico: "Re: [OMPI users] locked memory and queue pairs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28732.php">Gilles Gouaillardet: "Re: [OMPI users] locked memory and queue pairs"</a>
<li><strong>Reply:</strong> <a href="28732.php">Gilles Gouaillardet: "Re: [OMPI users] locked memory and queue pairs"</a>
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
