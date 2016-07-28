<?
$subject_val = "Re: [OMPI users] C/R Enabled Debugging";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 18 11:14:07 2015" -->
<!-- isoreceived="20150918151407" -->
<!-- sent="Fri, 18 Sep 2015 16:14:05 +0100" -->
<!-- isosent="20150918151405" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="Re: [OMPI users] C/R Enabled Debugging" -->
<!-- id="87wpvn4v5u.fsf_at_pc102091.liv.ac.uk" -->
<!-- inreplyto="2015091809421514815642_at_buaa.edu.cn" -->
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
<strong>Subject:</strong> Re: [OMPI users] C/R Enabled Debugging<br>
<strong>From:</strong> Dave Love (<em>d.love_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-18 11:14:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27626.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Have Trouble Setting Up a Ring Network Using Open MPI"</a>
<li><strong>Previous message:</strong> <a href="27624.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMPI-1.10.0 bind-to core error"</a>
<li><strong>In reply to:</strong> <a href="27617.php">gzzhang_at_[hidden]: "[OMPI users] C/R Enabled Debugging"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27632.php">Ralph Castain: "Re: [OMPI users] C/R Enabled Debugging"</a>
<li><strong>Reply:</strong> <a href="27632.php">Ralph Castain: "Re: [OMPI users] C/R Enabled Debugging"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&quot;gzzhang_at_[hidden]&quot; &lt;gzzhang_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev1">&gt; Hi Team 
</span><br>
<span class="quotelev1">&gt; I am trying to use the MPI to do some test and study on the C/R
</span><br>
<span class="quotelev1">&gt; enabled debugging.  Professor Josh Hursey said that the feature never
</span><br>
<span class="quotelev1">&gt; made it into a release so it was only ever available on the trunk,
</span><br>
<span class="quotelev1">&gt; However , since that time the C/R functionality has fallen into
</span><br>
<span class="quotelev1">&gt; disrepair. It is most likely broken in the trunk today. T tried with
</span><br>
<span class="quotelev1">&gt; the current openmpi-master sourcecode, it can be configure, but can't
</span><br>
<span class="quotelev1">&gt; be make successful because bugs still existing according to the log.
</span><br>
<span class="quotelev1">&gt; Is there any possible that the history openmpi-developer code which
</span><br>
<span class="quotelev1">&gt; supports C/R enabled debugging can be download . I appreciate your
</span><br>
<span class="quotelev1">&gt; offer to help us .
</span><br>
<p>This does seem an important deficiency, and a good reason to stay with
<br>
1.6 or use mpich.
<br>
<p>However, DMTCP is supposed to be able to checkpoint over TCP and
<br>
Infiniband without any extra support.  I'm intending to try it soon and
<br>
would be interested to know any relevant experience.  There used to be a
<br>
note about not working over IB with some OMPI implementation detail
<br>
(URC?) but I can't find that now, and the web site implies it should
<br>
work.
<br>
<p>See <a href="http://dmtcp.sourceforge.net/">http://dmtcp.sourceforge.net/</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27626.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Have Trouble Setting Up a Ring Network Using Open MPI"</a>
<li><strong>Previous message:</strong> <a href="27624.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMPI-1.10.0 bind-to core error"</a>
<li><strong>In reply to:</strong> <a href="27617.php">gzzhang_at_[hidden]: "[OMPI users] C/R Enabled Debugging"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27632.php">Ralph Castain: "Re: [OMPI users] C/R Enabled Debugging"</a>
<li><strong>Reply:</strong> <a href="27632.php">Ralph Castain: "Re: [OMPI users] C/R Enabled Debugging"</a>
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
