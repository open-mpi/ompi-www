<?
$subject_val = "Re: [OMPI devel] New frameworks and contribs in the trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 21 07:14:58 2009" -->
<!-- isoreceived="20090821111458" -->
<!-- sent="Fri, 21 Aug 2009 07:14:52 -0400" -->
<!-- isosent="20090821111452" -->
<!-- name="Graham, Richard L." -->
<!-- email="rlgraham_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] New frameworks and contribs in the trunk" -->
<!-- id="C6B3F9EC.3B0C6%rlgraham_at_ornl.gov" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4CDF92A5-8D63-4092-A5FA-3CA9A9C1A3B3_at_open-mpi.org" -->
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
<strong>From:</strong> Graham, Richard L. (<em>rlgraham_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-21 07:14:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6692.php">Ralph Castain: "Re: [OMPI devel] New frameworks and contribs in the trunk"</a>
<li><strong>Previous message:</strong> <a href="6690.php">Chris Samuel: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>In reply to:</strong> <a href="6687.php">Ralph Castain: "Re: [OMPI devel] New frameworks and contribs in the trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6692.php">Ralph Castain: "Re: [OMPI devel] New frameworks and contribs in the trunk"</a>
<li><strong>Reply:</strong> <a href="6692.php">Ralph Castain: "Re: [OMPI devel] New frameworks and contribs in the trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have several questions here - since process migration is an open research question,
<br>
&nbsp;and there is more than one way to address the issue -
<br>
&nbsp;- Is this being implemented as a component, so that other approaches can be used ?
<br>
&nbsp;- If so, what sort of component interface is being considered ?
<br>
&nbsp;- What is the impact (or expected impact) on the rest of the system ?
<br>
<p>Thanks,
<br>
Rich
<br>
<p><p>On 8/20/09 6:57 PM, &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p>Hmmm...I'm afraid I cannot entirely substantiate your concerns.
<br>
Everything compiles just fine for me under both Linux and OSX. True,
<br>
the files are not completely instantiated on the trunk at this time,
<br>
but they also are not activated on the trunk for precisely that reason.
<br>
<p>Can you provide an example of where something isn't building? I can't
<br>
find it on any platform available to me.
<br>
<p>Thanks
<br>
Ralph
<br>
<p>On Aug 20, 2009, at 4:32 PM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm a little bit concerned about the commits stated below as their
</span><br>
<span class="quotelev1">&gt; quality doesn't match the usual quality standards of the trunk.
</span><br>
<span class="quotelev1">&gt; There are several issues: mostly empty files, names coming from
</span><br>
<span class="quotelev1">&gt; other frameworks, failure to compile on several platforms (including
</span><br>
<span class="quotelev1">&gt; Linux and MAC OS X). I'm more than happy to see research code in the
</span><br>
<span class="quotelev1">&gt; trunk, and I will be really interested to see the proof that
</span><br>
<span class="quotelev1">&gt; preemptive migration works. However, the quality of the trunk should
</span><br>
<span class="quotelev1">&gt; not suffer.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Moreover, we have mercurial and svn temporary repositories for such
</span><br>
<span class="quotelev1">&gt; kind of work. And we did force people in the past to work on
</span><br>
<span class="quotelev1">&gt; temporary branches before such large commits on the trunk.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please reconsider your patches.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Thanks,
</span><br>
<span class="quotelev1">&gt;    george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/ompi/changeset/21849">https://svn.open-mpi.org/trac/ompi/changeset/21849</a>
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/ompi/changeset/21850">https://svn.open-mpi.org/trac/ompi/changeset/21850</a>
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/ompi/changeset/21848">https://svn.open-mpi.org/trac/ompi/changeset/21848</a>
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/ompi/changeset/21847">https://svn.open-mpi.org/trac/ompi/changeset/21847</a>
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
<p>_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6692.php">Ralph Castain: "Re: [OMPI devel] New frameworks and contribs in the trunk"</a>
<li><strong>Previous message:</strong> <a href="6690.php">Chris Samuel: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>In reply to:</strong> <a href="6687.php">Ralph Castain: "Re: [OMPI devel] New frameworks and contribs in the trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6692.php">Ralph Castain: "Re: [OMPI devel] New frameworks and contribs in the trunk"</a>
<li><strong>Reply:</strong> <a href="6692.php">Ralph Castain: "Re: [OMPI devel] New frameworks and contribs in the trunk"</a>
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
