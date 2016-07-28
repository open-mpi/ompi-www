<?
$subject_val = "Re: [OMPI users] CQ errors";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 10 12:24:20 2011" -->
<!-- isoreceived="20110110172420" -->
<!-- sent="Mon, 10 Jan 2011 17:24:03 +0000" -->
<!-- isosent="20110110172403" -->
<!-- name="Michael Di Domenico" -->
<!-- email="mdidomenico4_at_[hidden]" -->
<!-- subject="Re: [OMPI users] CQ errors" -->
<!-- id="AANLkTik=zoteWaqz8nQUFfHphsTuqF34EeKH3iLk0mvP_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="201101101751.34041.cap_at_nsc.liu.se" -->
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
<strong>Subject:</strong> Re: [OMPI users] CQ errors<br>
<strong>From:</strong> Michael Di Domenico (<em>mdidomenico4_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-10 12:24:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15332.php">Tena Sakai: "[OMPI users] Newbie question"</a>
<li><strong>Previous message:</strong> <a href="15330.php">Peter Kjellstr&#246;m: "Re: [OMPI users] CQ errors"</a>
<li><strong>In reply to:</strong> <a href="15330.php">Peter Kjellstr&#246;m: "Re: [OMPI users] CQ errors"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
2011/1/10 Peter Kjellstr&#246;m &lt;cap_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt; On Monday, January 10, 2011 03:06:06 pm Michael Di Domenico wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I'm not sure if these are being reported from OpenMPI or through
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI from OpenFabrics, but i figured this would be a good place to
</span><br>
<span class="quotelev2">&gt;&gt; start
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On one node we received the below errors, i'm not sure i under the
</span><br>
<span class="quotelev2">&gt;&gt; error sequence, hopefully someone can shed some light on what
</span><br>
<span class="quotelev2">&gt;&gt; happened.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [[5691,1],49][btl_openib_component.c:3294:handle_wc] from node27 to:
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; network is qlogic qdr end to end, openmpi 1.5 and ofed 1.5.2 (q stack)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Not really addressing your problem, but, with qlogic you should be using psm,
</span><br>
<span class="quotelev1">&gt; not verbs (btl_openib).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That said, openib should work (slowly).
</span><br>
<p>Yes, you are correct.  We're running via verbs at the moment because
<br>
of a slurm interop issue.  I have a patch from ralph but have not
<br>
tested it yet.
<br>
<p>So far the only noticeable to effect to running non-psm is a 5usec hit
<br>
on each packet.  otherwise functionally we seem okay.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15332.php">Tena Sakai: "[OMPI users] Newbie question"</a>
<li><strong>Previous message:</strong> <a href="15330.php">Peter Kjellstr&#246;m: "Re: [OMPI users] CQ errors"</a>
<li><strong>In reply to:</strong> <a href="15330.php">Peter Kjellstr&#246;m: "Re: [OMPI users] CQ errors"</a>
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
