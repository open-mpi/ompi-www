<?
$subject_val = "Re: [OMPI users] help understand unhelpful ORTE error message";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 20 09:18:34 2015" -->
<!-- isoreceived="20151120141834" -->
<!-- sent="Fri, 20 Nov 2015 14:18:30 +0000" -->
<!-- isosent="20151120141830" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="Re: [OMPI users] help understand unhelpful ORTE error message" -->
<!-- id="87a8q8g3ex.fsf_at_pc102091.liv.ac.uk" -->
<!-- inreplyto="CAGKz=uLiABJ62d-wjAjDNj=uGV=JVv2vDAN_jXM-3qLgYN8kLA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] help understand unhelpful ORTE error message<br>
<strong>From:</strong> Dave Love (<em>d.love_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-11-20 09:18:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28083.php">Dave Love: "[OMPI users] local directory for shmem etc. (was: help understand unhelpful ORTE error message)"</a>
<li><strong>Previous message:</strong> <a href="28081.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Openmpi 1.10.1 fails with SIGXFSZ on file limit &lt;=	131072"</a>
<li><strong>In reply to:</strong> <a href="28062.php">Jeff Hammond: "[OMPI users] help understand unhelpful ORTE error message"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
[There must be someone better to answer this, but since I've seen it:]
<br>
<p>Jeff Hammond &lt;jeff.science_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev1">&gt; I have no idea what this is trying to tell me.  Help?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; jhammond_at_nid00024:~/MPI/qoit/collectives&gt; mpirun -n 2 ./driver.x 64
</span><br>
<span class="quotelev1">&gt; [nid00024:00482] [[46168,0],0] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev1">&gt; ../../../../../orte/mca/plm/alps/plm_alps_module.c at line 418
</span><br>
<p>That must be a system error message, presumably indicating why the
<br>
process couldn't be launched; it's not in the OMPI source.
<br>
<p><span class="quotelev1">&gt; I can run the same job with srun without incident:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; jhammond_at_nid00024:~/MPI/qoit/collectives&gt; srun -n 2 ./driver.x 64
</span><br>
<span class="quotelev1">&gt; MPI was initialized.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is on the NERSC Cori Cray XC40 system.  I build Open-MPI git head from
</span><br>
<span class="quotelev1">&gt; source for OFI libfabric.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have many other issues, which I will report later.  As a spoiler, if I
</span><br>
<span class="quotelev1">&gt; cannot use your mpirun, I cannot set any of the MCA options there.  Is
</span><br>
<span class="quotelev1">&gt; there a method to set MCA options with environment variables?  I could not
</span><br>
<span class="quotelev1">&gt; find this documented anywhere.
</span><br>
<p>mpirun(1) documents the mechanisms under &quot;Setting MCA Parameters&quot;,
<br>
unless it's changed since 1.8.  [I have wondered why a file in cwd isn't
<br>
a possibility, only in $HOME.]
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28083.php">Dave Love: "[OMPI users] local directory for shmem etc. (was: help understand unhelpful ORTE error message)"</a>
<li><strong>Previous message:</strong> <a href="28081.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Openmpi 1.10.1 fails with SIGXFSZ on file limit &lt;=	131072"</a>
<li><strong>In reply to:</strong> <a href="28062.php">Jeff Hammond: "[OMPI users] help understand unhelpful ORTE error message"</a>
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
