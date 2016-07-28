<?
$subject_val = "Re: [OMPI devel] MCA component open";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  2 10:22:13 2008" -->
<!-- isoreceived="20080502142213" -->
<!-- sent="Fri, 02 May 2008 08:22:00 -0600" -->
<!-- isosent="20080502142200" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MCA component open" -->
<!-- id="C4407FA8.504D%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C4407B16.5048%rhc_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] MCA component open<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-02 10:22:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3797.php">Josh Hursey: "Re: [OMPI devel] MCA component open"</a>
<li><strong>Previous message:</strong> <a href="3795.php">Ralph Castain: "Re: [OMPI devel] MCA component open"</a>
<li><strong>In reply to:</strong> <a href="3795.php">Ralph Castain: "Re: [OMPI devel] MCA component open"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3797.php">Josh Hursey: "Re: [OMPI devel] MCA component open"</a>
<li><strong>Reply:</strong> <a href="3797.php">Josh Hursey: "Re: [OMPI devel] MCA component open"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I see what the problem is. In the case of slurm, I don't want -any-
<br>
components to be opened, even though I am going to call plm open/select. I
<br>
have to leave that logic in place for those environments that -do- want to
<br>
specify some backend secondary launcher.
<br>
<p>So the question is: how do I tell mca_component_open &quot;do not open anything&quot;?
<br>
<p>If we don't have a mechanism for doing that, can we create one?
<br>
<p><p>On 5/2/08 8:02 AM, &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Well, I have a current version of the trunk. I add an MCA param to the
</span><br>
<span class="quotelev1">&gt; environment indicating that only rsh is to be used by the orted. Yet I get
</span><br>
<span class="quotelev1">&gt; an output from every orted indicating that slurm (misspelled!) is available
</span><br>
<span class="quotelev1">&gt; for selection.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This tells me that the slurm component is being opened, even though the
</span><br>
<span class="quotelev1">&gt; param is set.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I can check again to ensure that the param is set...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 5/2/08 7:53 AM, &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; (moving to devel list for wider audience)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hmm.  I thought the UTK stuff from a while ago supposedly changed this
</span><br>
<span class="quotelev2">&gt;&gt; behavior to only open the components that were specifically requested.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This behavior looks like the *original* MCA behavior -- open them all,
</span><br>
<span class="quotelev2">&gt;&gt; then discard what we don't want (but doesn't necessarily reclaim the
</span><br>
<span class="quotelev2">&gt;&gt; memory because of how dlclose works).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On May 2, 2008, at 9:48 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yo guys
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I've noticed something on the trunk that just doesn't strike me as
</span><br>
<span class="quotelev3">&gt;&gt;&gt; correct.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If I specify &quot;-mca plm rsh&quot;, it is my expectation that (a) only the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rsh
</span><br>
<span class="quotelev3">&gt;&gt;&gt; component will be opened, and (b) only the rsh module will be
</span><br>
<span class="quotelev3">&gt;&gt;&gt; selected,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; unless that component indicates that it cannot run.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What I am seeing, though, is that -all- the plm components are being
</span><br>
<span class="quotelev3">&gt;&gt;&gt; opened.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This is not only unnecessary, but consumes memory and leads to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; concern over
</span><br>
<span class="quotelev3">&gt;&gt;&gt; whether or not some other module could become active.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is this the intended behavior? If so, may I suggest we change it in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Josh's
</span><br>
<span class="quotelev3">&gt;&gt;&gt; branch prior to bringing it over?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3797.php">Josh Hursey: "Re: [OMPI devel] MCA component open"</a>
<li><strong>Previous message:</strong> <a href="3795.php">Ralph Castain: "Re: [OMPI devel] MCA component open"</a>
<li><strong>In reply to:</strong> <a href="3795.php">Ralph Castain: "Re: [OMPI devel] MCA component open"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3797.php">Josh Hursey: "Re: [OMPI devel] MCA component open"</a>
<li><strong>Reply:</strong> <a href="3797.php">Josh Hursey: "Re: [OMPI devel] MCA component open"</a>
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
