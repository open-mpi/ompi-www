<?
$subject_val = "Re: [OMPI devel] MCA component open";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  2 10:37:13 2008" -->
<!-- isoreceived="20080502143713" -->
<!-- sent="Fri, 2 May 2008 10:37:11 -0400" -->
<!-- isosent="20080502143711" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MCA component open" -->
<!-- id="79CB793C-BE19-40CE-87B9-1101F5EB08A0_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C4407FA8.504D%rhc_at_lanl.gov" -->
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
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-02 10:37:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3798.php">Jeff Squyres: "[OMPI devel] OMPI Mercurial read-only mirror"</a>
<li><strong>Previous message:</strong> <a href="3796.php">Ralph Castain: "Re: [OMPI devel] MCA component open"</a>
<li><strong>In reply to:</strong> <a href="3796.php">Ralph Castain: "Re: [OMPI devel] MCA component open"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3799.php">Ralph Castain: "Re: [OMPI devel] MCA component open"</a>
<li><strong>Reply:</strong> <a href="3799.php">Ralph Castain: "Re: [OMPI devel] MCA component open"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I don't believe we have the logic in place to tell mca_component_open  
<br>
'do not open anything'. (I could be wrong though).
<br>
<p>Adding such an option might be useful, but we would have to consider  
<br>
how that option should be specified by the user. Currently if you do  
<br>
not set a value (leave empty space in mca-params.conf) then the MCA  
<br>
system takes this to indicate that all components are eligible for  
<br>
selection. If you specify any options then only those options should  
<br>
be opened. We could add a special keyword (such as 'none') to indicate  
<br>
'open nothing'.
<br>
<p>What do people think about that?
<br>
<p>-- Josh
<br>
<p><p>On May 2, 2008, at 10:22 AM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; I see what the problem is. In the case of slurm, I don't want -any-
</span><br>
<span class="quotelev1">&gt; components to be opened, even though I am going to call plm open/ 
</span><br>
<span class="quotelev1">&gt; select. I
</span><br>
<span class="quotelev1">&gt; have to leave that logic in place for those environments that -do-  
</span><br>
<span class="quotelev1">&gt; want to
</span><br>
<span class="quotelev1">&gt; specify some backend secondary launcher.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So the question is: how do I tell mca_component_open &quot;do not open  
</span><br>
<span class="quotelev1">&gt; anything&quot;?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If we don't have a mechanism for doing that, can we create one?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 5/2/08 8:02 AM, &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Well, I have a current version of the trunk. I add an MCA param to  
</span><br>
<span class="quotelev2">&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt; environment indicating that only rsh is to be used by the orted.  
</span><br>
<span class="quotelev2">&gt;&gt; Yet I get
</span><br>
<span class="quotelev2">&gt;&gt; an output from every orted indicating that slurm (misspelled!) is  
</span><br>
<span class="quotelev2">&gt;&gt; available
</span><br>
<span class="quotelev2">&gt;&gt; for selection.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This tells me that the slurm component is being opened, even though  
</span><br>
<span class="quotelev2">&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt; param is set.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I can check again to ensure that the param is set...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 5/2/08 7:53 AM, &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (moving to devel list for wider audience)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hmm.  I thought the UTK stuff from a while ago supposedly changed  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this
</span><br>
<span class="quotelev3">&gt;&gt;&gt; behavior to only open the components that were specifically  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; requested.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This behavior looks like the *original* MCA behavior -- open them  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; all,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; then discard what we don't want (but doesn't necessarily reclaim the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; memory because of how dlclose works).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On May 2, 2008, at 9:48 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Yo guys
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I've noticed something on the trunk that just doesn't strike me as
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; correct.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If I specify &quot;-mca plm rsh&quot;, it is my expectation that (a) only the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; rsh
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; component will be opened, and (b) only the rsh module will be
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; selected,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; unless that component indicates that it cannot run.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; What I am seeing, though, is that -all- the plm components are  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; being
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; opened.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This is not only unnecessary, but consumes memory and leads to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; concern over
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; whether or not some other module could become active.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Is this the intended behavior? If so, may I suggest we change it in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Josh's
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; branch prior to bringing it over?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="3798.php">Jeff Squyres: "[OMPI devel] OMPI Mercurial read-only mirror"</a>
<li><strong>Previous message:</strong> <a href="3796.php">Ralph Castain: "Re: [OMPI devel] MCA component open"</a>
<li><strong>In reply to:</strong> <a href="3796.php">Ralph Castain: "Re: [OMPI devel] MCA component open"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3799.php">Ralph Castain: "Re: [OMPI devel] MCA component open"</a>
<li><strong>Reply:</strong> <a href="3799.php">Ralph Castain: "Re: [OMPI devel] MCA component open"</a>
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
