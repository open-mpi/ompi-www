<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31302 - in trunk:	opal/mca/base orte/tools/orterun";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr  3 12:41:14 2014" -->
<!-- isoreceived="20140403164114" -->
<!-- sent="Thu, 3 Apr 2014 09:41:09 -0700" -->
<!-- isosent="20140403164109" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r31302 - in trunk:	opal/mca/base orte/tools/orterun" -->
<!-- id="9351F5CC-79E5-4A3A-A1FD-187D645B3EC2_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="001201cf4f59$91f28ef0$b5d7acd0$_at_wattsys.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r31302 - in trunk:	opal/mca/base orte/tools/orterun<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-03 12:41:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14456.php">Hjelm, Nathan T: "[OMPI devel] RFC: cleanup unused btl parameters"</a>
<li><strong>Previous message:</strong> <a href="14454.php">Kenneth A. Lloyd: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31302 - in trunk:	opal/mca/base orte/tools/orterun"</a>
<li><strong>In reply to:</strong> <a href="14454.php">Kenneth A. Lloyd: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31302 - in trunk:	opal/mca/base orte/tools/orterun"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Maybe?? It would help avoid the unexpected behavior problem, but may ultimately be too unwieldy for widespread adoption. Still, an option to ponder.
<br>
<p><p>On Apr 3, 2014, at 9:27 AM, Kenneth A. Lloyd &lt;kenneth.lloyd_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Would you consider a user-defined process language library outside of
</span><br>
<span class="quotelev1">&gt; OpenMPI? Process functors could be defined by compositions in this external
</span><br>
<span class="quotelev1">&gt; area, and maintenance of the language simply the user's responsibility?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Ralph Castain
</span><br>
<span class="quotelev1">&gt; Sent: Thursday, April 03, 2014 8:17 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] [OMPI svn] svn:open-mpi r31302 - in trunk:
</span><br>
<span class="quotelev1">&gt; opal/mca/base orte/tools/orterun
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I can see the potential utility, but I do have concerns about how to make it
</span><br>
<span class="quotelev1">&gt; work without causing a lot of user problems:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * as currently implemented, it only affects procs launched via mpirun. This
</span><br>
<span class="quotelev1">&gt; seems odd - if the user does a direct launch, they would get totally
</span><br>
<span class="quotelev1">&gt; different behavior? Shouldn't the registering and parsing of this MCA param
</span><br>
<span class="quotelev1">&gt; follow our usual procedure and be done by the application itself instead of
</span><br>
<span class="quotelev1">&gt; by orterun?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * Imagine someone has entered this MCA param into the default MCA param
</span><br>
<span class="quotelev1">&gt; file, and that it includes &quot;foo=car&quot; in it. Now the user sets &quot;foo=baz&quot; in
</span><br>
<span class="quotelev1">&gt; their environment. How many hours will the user spend tearing out his/her
</span><br>
<span class="quotelev1">&gt; hair trying to understand why the application behavior isn't as expected
</span><br>
<span class="quotelev1">&gt; before they finally realize that the default MCA param file is messing with
</span><br>
<span class="quotelev1">&gt; their non-OMPI envars? Once they finally do figure it out, how do they
</span><br>
<span class="quotelev1">&gt; &quot;zero&quot; that MCA param so it isn't processed? We don't have a mechanism for
</span><br>
<span class="quotelev1">&gt; overriding a value with &quot;NULL&quot; - doesn't this option require one?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * again, someone puts an entry in the default MCA param file that includes
</span><br>
<span class="quotelev1">&gt; &quot;foo=car&quot;. The user executes mpirun with &quot;-x foo=baz&quot;, which is perfectly
</span><br>
<span class="quotelev1">&gt; legitimate. What is the precedence rule we use to determine the value of
</span><br>
<span class="quotelev1">&gt; foo? If we consolidate the two options (as you suggest), then this would be
</span><br>
<span class="quotelev1">&gt; alleviated - but one is an MCA param and the other a non-MCA cmd-line
</span><br>
<span class="quotelev1">&gt; option, so we would have to break backward compatibility to resolve it
</span><br>
<span class="quotelev1">&gt; (which isn't impossible - just worth a discussion).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * assume an entry in the MCA param file that includes multiple envars, one
</span><br>
<span class="quotelev1">&gt; of which is &quot;foo=car&quot;. If the user then puts &quot;-mca env_list foo=baz&quot; on
</span><br>
<span class="quotelev1">&gt; their cmd line, do we delete all the other envars in the original entry and
</span><br>
<span class="quotelev1">&gt; only do the new one? Or would someone expect that only the new one would be
</span><br>
<span class="quotelev1">&gt; modified or added, but the others would remain?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hence I think this requires some discussion at next week's call. Remember,
</span><br>
<span class="quotelev1">&gt; by policy, we don't forward non-MCA envars - but now we are forcibly setting
</span><br>
<span class="quotelev1">&gt; them only in the app procs. Strikes me as a major change in behavior, and
</span><br>
<span class="quotelev1">&gt; I'm not sure it won't cause more trouble than it solves.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Apr 3, 2014, at 1:01 AM, Shamis, Pavel &lt;shamisp_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mca param file treats any key=val as mca parameter only.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In order to add parser support for something that is not mca param, will
</span><br>
<span class="quotelev1">&gt; require change file syntax and it will look bad, i.e.:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mca btl = sm,self,openib
</span><br>
<span class="quotelev3">&gt;&gt;&gt; env DISPLAY = console:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I think the current implementation is less intrusive and re-uses existing
</span><br>
<span class="quotelev1">&gt; infra in the most elegant way.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The param file syntax change is too big effort to justify this feature
</span><br>
<span class="quotelev1">&gt; (IMHO) which can be provided with existing infra w/o breaking anything.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; IMHO this is a useful parameter option to have. If we may consolidate 
</span><br>
<span class="quotelev2">&gt;&gt; these two parameters (-x and the new one) into single one, it might be
</span><br>
<span class="quotelev1">&gt; even more helpful.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Best,
</span><br>
<span class="quotelev2">&gt;&gt; Pasha.
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14452.php">http://www.open-mpi.org/community/lists/devel/2014/04/14452.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14453.php">http://www.open-mpi.org/community/lists/devel/2014/04/14453.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; No virus found in this message.
</span><br>
<span class="quotelev1">&gt; Checked by AVG - www.avg.com
</span><br>
<span class="quotelev1">&gt; Version: 2014.0.4355 / Virus Database: 3722/7293 - Release Date: 04/03/14
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14454.php">http://www.open-mpi.org/community/lists/devel/2014/04/14454.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14456.php">Hjelm, Nathan T: "[OMPI devel] RFC: cleanup unused btl parameters"</a>
<li><strong>Previous message:</strong> <a href="14454.php">Kenneth A. Lloyd: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31302 - in trunk:	opal/mca/base orte/tools/orterun"</a>
<li><strong>In reply to:</strong> <a href="14454.php">Kenneth A. Lloyd: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31302 - in trunk:	opal/mca/base orte/tools/orterun"</a>
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
