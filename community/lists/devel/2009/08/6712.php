<?
$subject_val = "Re: [OMPI devel] New frameworks and contribs in the trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 24 17:17:45 2009" -->
<!-- isoreceived="20090824211745" -->
<!-- sent="Mon, 24 Aug 2009 17:17:34 -0400" -->
<!-- isosent="20090824211734" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] New frameworks and contribs in the trunk" -->
<!-- id="52F251C2-7426-4B1C-BC75-F65F6B44AB8E_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="368BB4F2-403C-41DE-84FC-EFC15D6E2DA2_at_open-mpi.org" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-24 17:17:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6713.php">Jeff Squyres: "Re: [OMPI devel] RFC: convert send to ssend"</a>
<li><strong>Previous message:</strong> <a href="6711.php">George Bosilca: "Re: [OMPI devel] RFC: convert send to ssend"</a>
<li><strong>In reply to:</strong> <a href="6692.php">Ralph Castain: "Re: [OMPI devel] New frameworks and contribs in the trunk"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 21, 2009, at 07:33 , Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Hi Rich
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 21, 2009, at 5:14 AM, Graham, Richard L. wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have several questions here - since process migration is an open  
</span><br>
<span class="quotelev2">&gt;&gt; research question,
</span><br>
<span class="quotelev2">&gt;&gt; and there is more than one way to address the issue -
</span><br>
<span class="quotelev2">&gt;&gt; - Is this being implemented as a component, so that other  
</span><br>
<span class="quotelev2">&gt;&gt; approaches can be used ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Absolutely - we have several organizations involved, all with  
</span><br>
<span class="quotelev1">&gt; competing approaches
</span><br>
<p>This become a recurrent statement, every time something smelly should  
<br>
be defended.
<br>
<p><span class="quotelev2">&gt;&gt; - If so, what sort of component interface is being considered ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Still being determined. One reason for exposing the frameworks at  
</span><br>
<span class="quotelev1">&gt; this time is that much of the ongoing effort may occur in separate,  
</span><br>
<span class="quotelev1">&gt; hidden tmp branches for proprietary reasons. The eventual source  
</span><br>
<span class="quotelev1">&gt; code for those components may well never be committed, but the  
</span><br>
<span class="quotelev1">&gt; frameworks need to be in the system so that MCA will pickup the  
</span><br>
<span class="quotelev1">&gt; binary modules.
</span><br>
<p>This is a wrong reason. We did multi-institution work in the past  
<br>
starting from a tmp branch. The only overhead is that somebody has to  
<br>
keep the copy in sync with the trunk, but this approach at least has  
<br>
the merit to keep our trunk [more or less] clean.
<br>
<p><span class="quotelev1">&gt; I deliberately left the frameworks &quot;inactive&quot; so that changes in the  
</span><br>
<span class="quotelev1">&gt; APIs can be done as the work progresses without impacting the OMPI  
</span><br>
<span class="quotelev1">&gt; community. The participants need to develop a little further before  
</span><br>
<span class="quotelev1">&gt; we fully understand what the APIs need to be - a little hard to  
</span><br>
<span class="quotelev1">&gt; openly discuss them without exposing potentially proprietary algos.  
</span><br>
<span class="quotelev1">&gt; The hope is that, as people develop their components, they can  
</span><br>
<span class="quotelev1">&gt; identify missing needs in the API so at least that much can be  
</span><br>
<span class="quotelev1">&gt; safely communicated and resolved.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - What is the impact (or expected impact) on the rest of the system ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For anyone who doesn't explicitly build it and turn it on, nothing.  
</span><br>
<span class="quotelev1">&gt; For those who do, there will be no impact on MPI procs themselves as  
</span><br>
<span class="quotelev1">&gt; they won't load nor activate these frameworks. There will be an  
</span><br>
<span class="quotelev1">&gt; increased orted footprint and activity level, which could  
</span><br>
<span class="quotelev1">&gt; potentially reduce performance by stealing cycles from MPI procs -  
</span><br>
<span class="quotelev1">&gt; obviously, that depends on #procs vs cores and other factors.
</span><br>
<p>If nobody knows how to do it, this _clearly_ should be a good enough  
<br>
reason to do the work in a temp branch before polluting the trunk.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm speaking solely of the RTE impact and issues here, of course -  
</span><br>
<span class="quotelev1">&gt; Josh would have to address the MPI perspective.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; HTH
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Rich
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 8/20/09 6:57 PM, &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hmmm...I'm afraid I cannot entirely substantiate your concerns.
</span><br>
<span class="quotelev2">&gt;&gt; Everything compiles just fine for me under both Linux and OSX. True,
</span><br>
<span class="quotelev2">&gt;&gt; the files are not completely instantiated on the trunk at this time,
</span><br>
<span class="quotelev2">&gt;&gt; but they also are not activated on the trunk for precisely that  
</span><br>
<span class="quotelev2">&gt;&gt; reason.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can you provide an example of where something isn't building? I can't
</span><br>
<span class="quotelev2">&gt;&gt; find it on any platform available to me.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 20, 2009, at 4:32 PM, George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm a little bit concerned about the commits stated below as their
</span><br>
<span class="quotelev3">&gt;&gt;&gt; quality doesn't match the usual quality standards of the trunk.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There are several issues: mostly empty files, names coming from
</span><br>
<span class="quotelev3">&gt;&gt;&gt; other frameworks, failure to compile on several platforms (including
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Linux and MAC OS X). I'm more than happy to see research code in the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; trunk, and I will be really interested to see the proof that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; preemptive migration works. However, the quality of the trunk should
</span><br>
<span class="quotelev3">&gt;&gt;&gt; not suffer.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Moreover, we have mercurial and svn temporary repositories for such
</span><br>
<span class="quotelev3">&gt;&gt;&gt; kind of work. And we did force people in the past to work on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; temporary branches before such large commits on the trunk.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Please reconsider your patches.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  george.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="https://svn.open-mpi.org/trac/ompi/changeset/21849">https://svn.open-mpi.org/trac/ompi/changeset/21849</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="https://svn.open-mpi.org/trac/ompi/changeset/21850">https://svn.open-mpi.org/trac/ompi/changeset/21850</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="https://svn.open-mpi.org/trac/ompi/changeset/21848">https://svn.open-mpi.org/trac/ompi/changeset/21848</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="https://svn.open-mpi.org/trac/ompi/changeset/21847">https://svn.open-mpi.org/trac/ompi/changeset/21847</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="6713.php">Jeff Squyres: "Re: [OMPI devel] RFC: convert send to ssend"</a>
<li><strong>Previous message:</strong> <a href="6711.php">George Bosilca: "Re: [OMPI devel] RFC: convert send to ssend"</a>
<li><strong>In reply to:</strong> <a href="6692.php">Ralph Castain: "Re: [OMPI devel] New frameworks and contribs in the trunk"</a>
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
