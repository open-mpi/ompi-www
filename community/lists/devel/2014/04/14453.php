<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31302 - in trunk: opal/mca/base orte/tools/orterun";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr  3 10:16:34 2014" -->
<!-- isoreceived="20140403141634" -->
<!-- sent="Thu, 3 Apr 2014 07:16:30 -0700" -->
<!-- isosent="20140403141630" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r31302 - in trunk: opal/mca/base orte/tools/orterun" -->
<!-- id="074320CB-2A92-4DD3-BB5D-9CFEA03CC1EA_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="D1AFBBE7-EF73-48AC-8F3E-91D79CEC9036_at_ornl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r31302 - in trunk: opal/mca/base orte/tools/orterun<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-03 10:16:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14454.php">Kenneth A. Lloyd: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31302 - in trunk:	opal/mca/base orte/tools/orterun"</a>
<li><strong>Previous message:</strong> <a href="14452.php">Shamis, Pavel: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31302 - in trunk: opal/mca/base orte/tools/orterun"</a>
<li><strong>In reply to:</strong> <a href="14452.php">Shamis, Pavel: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31302 - in trunk: opal/mca/base orte/tools/orterun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14454.php">Kenneth A. Lloyd: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31302 - in trunk:	opal/mca/base orte/tools/orterun"</a>
<li><strong>Reply:</strong> <a href="14454.php">Kenneth A. Lloyd: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31302 - in trunk:	opal/mca/base orte/tools/orterun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I can see the potential utility, but I do have concerns about how to make it work without causing a lot of user problems:
<br>
<p>* as currently implemented, it only affects procs launched via mpirun. This seems odd - if the user does a direct launch, they would get totally different behavior? Shouldn't the registering and parsing of this MCA param follow our usual procedure and be done by the application itself instead of by orterun?
<br>
<p>* Imagine someone has entered this MCA param into the default MCA param file, and that it includes &quot;foo=car&quot; in it. Now the user sets &quot;foo=baz&quot; in their environment. How many hours will the user spend tearing out his/her hair trying to understand why the application behavior isn't as expected before they finally realize that the default MCA param file is messing with their non-OMPI envars? Once they finally do figure it out, how do they &quot;zero&quot; that MCA param so it isn't processed? We don't have a mechanism for overriding a value with &quot;NULL&quot; - doesn't this option require one?
<br>
<p>* again, someone puts an entry in the default MCA param file that includes &quot;foo=car&quot;. The user executes mpirun with &quot;-x foo=baz&quot;, which is perfectly legitimate. What is the precedence rule we use to determine the value of foo? If we consolidate the two options (as you suggest), then this would be alleviated - but one is an MCA param and the other a non-MCA cmd-line option, so we would have to break backward compatibility to resolve it (which isn't impossible - just worth a discussion).
<br>
<p>* assume an entry in the MCA param file that includes multiple envars, one of which is &quot;foo=car&quot;. If the user then puts &quot;-mca env_list foo=baz&quot; on their cmd line, do we delete all the other envars in the original entry and only do the new one? Or would someone expect that only the new one would be modified or added, but the others would remain?
<br>
<p>Hence I think this requires some discussion at next week's call. Remember, by policy, we don't forward non-MCA envars - but now we are forcibly setting them only in the app procs. Strikes me as a major change in behavior, and I'm not sure it won't cause more trouble than it solves.
<br>
<p><p>On Apr 3, 2014, at 1:01 AM, Shamis, Pavel &lt;shamisp_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; mca param file treats any key=val as mca parameter only.
</span><br>
<span class="quotelev2">&gt;&gt; In order to add parser support for something that is not mca param, will require change file syntax and it will look bad, i.e.:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; mca btl = sm,self,openib
</span><br>
<span class="quotelev2">&gt;&gt; env DISPLAY = console:0
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I think the current implementation is less intrusive and re-uses existing infra in the most elegant way.
</span><br>
<span class="quotelev2">&gt;&gt; The param file syntax change is too big effort to justify this feature (IMHO) which can be provided with existing infra w/o breaking anything.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; IMHO this is a useful parameter option to have. If we may consolidate these two parameters (-x and the new one) into
</span><br>
<span class="quotelev1">&gt; single one, it might be even more helpful.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best,
</span><br>
<span class="quotelev1">&gt; Pasha.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14452.php">http://www.open-mpi.org/community/lists/devel/2014/04/14452.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14454.php">Kenneth A. Lloyd: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31302 - in trunk:	opal/mca/base orte/tools/orterun"</a>
<li><strong>Previous message:</strong> <a href="14452.php">Shamis, Pavel: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31302 - in trunk: opal/mca/base orte/tools/orterun"</a>
<li><strong>In reply to:</strong> <a href="14452.php">Shamis, Pavel: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31302 - in trunk: opal/mca/base orte/tools/orterun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14454.php">Kenneth A. Lloyd: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31302 - in trunk:	opal/mca/base orte/tools/orterun"</a>
<li><strong>Reply:</strong> <a href="14454.php">Kenneth A. Lloyd: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31302 - in trunk:	opal/mca/base orte/tools/orterun"</a>
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
