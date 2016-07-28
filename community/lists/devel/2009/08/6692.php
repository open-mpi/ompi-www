<?
$subject_val = "Re: [OMPI devel] New frameworks and contribs in the trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 21 07:34:12 2009" -->
<!-- isoreceived="20090821113412" -->
<!-- sent="Fri, 21 Aug 2009 05:33:56 -0600" -->
<!-- isosent="20090821113356" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] New frameworks and contribs in the trunk" -->
<!-- id="368BB4F2-403C-41DE-84FC-EFC15D6E2DA2_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C6B3F9EC.3B0C6%rlgraham_at_ornl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] New frameworks and contribs in the trunk<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-21 07:33:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6693.php">Jeff Squyres: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>Previous message:</strong> <a href="6691.php">Graham, Richard L.: "Re: [OMPI devel] New frameworks and contribs in the trunk"</a>
<li><strong>In reply to:</strong> <a href="6691.php">Graham, Richard L.: "Re: [OMPI devel] New frameworks and contribs in the trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6712.php">George Bosilca: "Re: [OMPI devel] New frameworks and contribs in the trunk"</a>
<li><strong>Reply:</strong> <a href="6712.php">George Bosilca: "Re: [OMPI devel] New frameworks and contribs in the trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Rich
<br>
<p>On Aug 21, 2009, at 5:14 AM, Graham, Richard L. wrote:
<br>
<p><span class="quotelev1">&gt; I have several questions here - since process migration is an open  
</span><br>
<span class="quotelev1">&gt; research question,
</span><br>
<span class="quotelev1">&gt; and there is more than one way to address the issue -
</span><br>
<span class="quotelev1">&gt; - Is this being implemented as a component, so that other approaches  
</span><br>
<span class="quotelev1">&gt; can be used ?
</span><br>
<p>Absolutely - we have several organizations involved, all with  
<br>
competing approaches
<br>
<p><span class="quotelev1">&gt; - If so, what sort of component interface is being considered ?
</span><br>
<p>Still being determined. One reason for exposing the frameworks at this  
<br>
time is that much of the ongoing effort may occur in separate, hidden  
<br>
tmp branches for proprietary reasons. The eventual source code for  
<br>
those components may well never be committed, but the frameworks need  
<br>
to be in the system so that MCA will pickup the binary modules.
<br>
<p>I deliberately left the frameworks &quot;inactive&quot; so that changes in the  
<br>
APIs can be done as the work progresses without impacting the OMPI  
<br>
community. The participants need to develop a little further before we  
<br>
fully understand what the APIs need to be - a little hard to openly  
<br>
discuss them without exposing potentially proprietary algos. The hope  
<br>
is that, as people develop their components, they can identify missing  
<br>
needs in the API so at least that much can be safely communicated and  
<br>
resolved.
<br>
<p><p><span class="quotelev1">&gt; - What is the impact (or expected impact) on the rest of the system ?
</span><br>
<p>For anyone who doesn't explicitly build it and turn it on, nothing.  
<br>
For those who do, there will be no impact on MPI procs themselves as  
<br>
they won't load nor activate these frameworks. There will be an  
<br>
increased orted footprint and activity level, which could potentially  
<br>
reduce performance by stealing cycles from MPI procs - obviously, that  
<br>
depends on #procs vs cores and other factors.
<br>
<p><p>I'm speaking solely of the RTE impact and issues here, of course -  
<br>
Josh would have to address the MPI perspective.
<br>
<p>HTH
<br>
Ralph
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Rich
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 8/20/09 6:57 PM, &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hmmm...I'm afraid I cannot entirely substantiate your concerns.
</span><br>
<span class="quotelev1">&gt; Everything compiles just fine for me under both Linux and OSX. True,
</span><br>
<span class="quotelev1">&gt; the files are not completely instantiated on the trunk at this time,
</span><br>
<span class="quotelev1">&gt; but they also are not activated on the trunk for precisely that  
</span><br>
<span class="quotelev1">&gt; reason.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you provide an example of where something isn't building? I can't
</span><br>
<span class="quotelev1">&gt; find it on any platform available to me.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 20, 2009, at 4:32 PM, George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm a little bit concerned about the commits stated below as their
</span><br>
<span class="quotelev2">&gt;&gt; quality doesn't match the usual quality standards of the trunk.
</span><br>
<span class="quotelev2">&gt;&gt; There are several issues: mostly empty files, names coming from
</span><br>
<span class="quotelev2">&gt;&gt; other frameworks, failure to compile on several platforms (including
</span><br>
<span class="quotelev2">&gt;&gt; Linux and MAC OS X). I'm more than happy to see research code in the
</span><br>
<span class="quotelev2">&gt;&gt; trunk, and I will be really interested to see the proof that
</span><br>
<span class="quotelev2">&gt;&gt; preemptive migration works. However, the quality of the trunk should
</span><br>
<span class="quotelev2">&gt;&gt; not suffer.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Moreover, we have mercurial and svn temporary repositories for such
</span><br>
<span class="quotelev2">&gt;&gt; kind of work. And we did force people in the past to work on
</span><br>
<span class="quotelev2">&gt;&gt; temporary branches before such large commits on the trunk.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Please reconsider your patches.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;   george.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://svn.open-mpi.org/trac/ompi/changeset/21849">https://svn.open-mpi.org/trac/ompi/changeset/21849</a>
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://svn.open-mpi.org/trac/ompi/changeset/21850">https://svn.open-mpi.org/trac/ompi/changeset/21850</a>
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://svn.open-mpi.org/trac/ompi/changeset/21848">https://svn.open-mpi.org/trac/ompi/changeset/21848</a>
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://svn.open-mpi.org/trac/ompi/changeset/21847">https://svn.open-mpi.org/trac/ompi/changeset/21847</a>
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="6693.php">Jeff Squyres: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>Previous message:</strong> <a href="6691.php">Graham, Richard L.: "Re: [OMPI devel] New frameworks and contribs in the trunk"</a>
<li><strong>In reply to:</strong> <a href="6691.php">Graham, Richard L.: "Re: [OMPI devel] New frameworks and contribs in the trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6712.php">George Bosilca: "Re: [OMPI devel] New frameworks and contribs in the trunk"</a>
<li><strong>Reply:</strong> <a href="6712.php">George Bosilca: "Re: [OMPI devel] New frameworks and contribs in the trunk"</a>
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
