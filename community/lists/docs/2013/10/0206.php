<?
$subject_val = "Re: [OMPI docs] Behavior of --host and --hostfile flags on mpirun";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 11 17:05:51 2013" -->
<!-- isoreceived="20131011210551" -->
<!-- sent="Fri, 11 Oct 2013 21:05:49 +0000" -->
<!-- isosent="20131011210549" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI docs] Behavior of --host and --hostfile flags on mpirun" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F954294_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAC2Zy4N43KnApsjoBO0E7Fec8sRdWF1OO=Xibp1hUrcw582U2Q_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI docs] Behavior of --host and --hostfile flags on mpirun<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-11 17:05:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/docs/2014/02/0207.php">Kelly Black: "Re: [OMPI docs] Behavior of --host and --hostfile flags on mpirun"</a>
<li><strong>Previous message:</strong> <a href="0205.php">Shao-Ching Huang: "Re: [OMPI docs] Behavior of --host and --hostfile flags on mpirun"</a>
<li><strong>In reply to:</strong> <a href="0204.php">Kelly Black: "Re: [OMPI docs] Behavior of --host and --hostfile flags on mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/docs/2014/02/0207.php">Kelly Black: "Re: [OMPI docs] Behavior of --host and --hostfile flags on mpirun"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/docs/2014/02/0207.php">Kelly Black: "Re: [OMPI docs] Behavior of --host and --hostfile flags on mpirun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 11, 2013, at 4:31 PM, Kelly Black &lt;kjblack_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Yeah, it never occurred to me to use both, but when I was double checking things on the Open MPI website I came across a blurb that said that when used together the behavior is different. The documentation said that if the names in the --host command are not contained in the host file then the mpirun command fails.
</span><br>
<p>Correct.  We basically use the --host as a filter on the hostfile.  If the --host argument isn't a proper subset of the hostfile, OMPI errors.
<br>
<p><span class="quotelev1">&gt; It was not clear if you do not use a fully qualified name in one but not the other how it would be handled.
</span><br>
<p>I'm not sure.  Like Ralph said, I *think* it works.  I *think* OMPI may actually resolve all names first, and then do comparisons/filtering with IP addresses.
<br>
<p>You might want to give it a whirl and see what happens...?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/docs/2014/02/0207.php">Kelly Black: "Re: [OMPI docs] Behavior of --host and --hostfile flags on mpirun"</a>
<li><strong>Previous message:</strong> <a href="0205.php">Shao-Ching Huang: "Re: [OMPI docs] Behavior of --host and --hostfile flags on mpirun"</a>
<li><strong>In reply to:</strong> <a href="0204.php">Kelly Black: "Re: [OMPI docs] Behavior of --host and --hostfile flags on mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/docs/2014/02/0207.php">Kelly Black: "Re: [OMPI docs] Behavior of --host and --hostfile flags on mpirun"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/docs/2014/02/0207.php">Kelly Black: "Re: [OMPI docs] Behavior of --host and --hostfile flags on mpirun"</a>
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
