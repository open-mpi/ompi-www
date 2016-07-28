<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31302 - in trunk:	opal/mca/base orte/tools/orterun";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr  3 12:27:17 2014" -->
<!-- isoreceived="20140403162717" -->
<!-- sent="Thu, 3 Apr 2014 10:27:12 -0600" -->
<!-- isosent="20140403162712" -->
<!-- name="Kenneth A. Lloyd" -->
<!-- email="kenneth.lloyd_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r31302 - in trunk:	opal/mca/base orte/tools/orterun" -->
<!-- id="001201cf4f59$91f28ef0$b5d7acd0$_at_wattsys.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="074320CB-2A92-4DD3-BB5D-9CFEA03CC1EA_at_open-mpi.org" -->
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
<strong>From:</strong> Kenneth A. Lloyd (<em>kenneth.lloyd_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-03 12:27:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14455.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31302 - in trunk:	opal/mca/base orte/tools/orterun"</a>
<li><strong>Previous message:</strong> <a href="14453.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31302 - in trunk: opal/mca/base orte/tools/orterun"</a>
<li><strong>In reply to:</strong> <a href="14453.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31302 - in trunk: opal/mca/base orte/tools/orterun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14455.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31302 - in trunk:	opal/mca/base orte/tools/orterun"</a>
<li><strong>Reply:</strong> <a href="14455.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31302 - in trunk:	opal/mca/base orte/tools/orterun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Would you consider a user-defined process language library outside of
<br>
OpenMPI? Process functors could be defined by compositions in this external
<br>
area, and maintenance of the language simply the user's responsibility?
<br>
<p>-----Original Message-----
<br>
From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Ralph Castain
<br>
Sent: Thursday, April 03, 2014 8:17 AM
<br>
To: Open MPI Developers
<br>
Subject: Re: [OMPI devel] [OMPI svn] svn:open-mpi r31302 - in trunk:
<br>
opal/mca/base orte/tools/orterun
<br>
<p>I can see the potential utility, but I do have concerns about how to make it
<br>
work without causing a lot of user problems:
<br>
<p>* as currently implemented, it only affects procs launched via mpirun. This
<br>
seems odd - if the user does a direct launch, they would get totally
<br>
different behavior? Shouldn't the registering and parsing of this MCA param
<br>
follow our usual procedure and be done by the application itself instead of
<br>
by orterun?
<br>
<p>* Imagine someone has entered this MCA param into the default MCA param
<br>
file, and that it includes &quot;foo=car&quot; in it. Now the user sets &quot;foo=baz&quot; in
<br>
their environment. How many hours will the user spend tearing out his/her
<br>
hair trying to understand why the application behavior isn't as expected
<br>
before they finally realize that the default MCA param file is messing with
<br>
their non-OMPI envars? Once they finally do figure it out, how do they
<br>
&quot;zero&quot; that MCA param so it isn't processed? We don't have a mechanism for
<br>
overriding a value with &quot;NULL&quot; - doesn't this option require one?
<br>
<p>* again, someone puts an entry in the default MCA param file that includes
<br>
&quot;foo=car&quot;. The user executes mpirun with &quot;-x foo=baz&quot;, which is perfectly
<br>
legitimate. What is the precedence rule we use to determine the value of
<br>
foo? If we consolidate the two options (as you suggest), then this would be
<br>
alleviated - but one is an MCA param and the other a non-MCA cmd-line
<br>
option, so we would have to break backward compatibility to resolve it
<br>
(which isn't impossible - just worth a discussion).
<br>
<p>* assume an entry in the MCA param file that includes multiple envars, one
<br>
of which is &quot;foo=car&quot;. If the user then puts &quot;-mca env_list foo=baz&quot; on
<br>
their cmd line, do we delete all the other envars in the original entry and
<br>
only do the new one? Or would someone expect that only the new one would be
<br>
modified or added, but the others would remain?
<br>
<p>Hence I think this requires some discussion at next week's call. Remember,
<br>
by policy, we don't forward non-MCA envars - but now we are forcibly setting
<br>
them only in the app procs. Strikes me as a major change in behavior, and
<br>
I'm not sure it won't cause more trouble than it solves.
<br>
<p><p>On Apr 3, 2014, at 1:01 AM, Shamis, Pavel &lt;shamisp_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; mca param file treats any key=val as mca parameter only.
</span><br>
<span class="quotelev2">&gt;&gt; In order to add parser support for something that is not mca param, will
</span><br>
require change file syntax and it will look bad, i.e.:
<br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; mca btl = sm,self,openib
</span><br>
<span class="quotelev2">&gt;&gt; env DISPLAY = console:0
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I think the current implementation is less intrusive and re-uses existing
</span><br>
infra in the most elegant way.
<br>
<span class="quotelev2">&gt;&gt; The param file syntax change is too big effort to justify this feature
</span><br>
(IMHO) which can be provided with existing infra w/o breaking anything.
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; IMHO this is a useful parameter option to have. If we may consolidate 
</span><br>
<span class="quotelev1">&gt; these two parameters (-x and the new one) into single one, it might be
</span><br>
even more helpful.
<br>
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
<span class="quotelev1">&gt; Link to this post: 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14452.php">http://www.open-mpi.org/community/lists/devel/2014/04/14452.php</a>
</span><br>
<p>_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
Link to this post:
<br>
<a href="http://www.open-mpi.org/community/lists/devel/2014/04/14453.php">http://www.open-mpi.org/community/lists/devel/2014/04/14453.php</a>
<br>
<p><p>-----
<br>
No virus found in this message.
<br>
Checked by AVG - www.avg.com
<br>
Version: 2014.0.4355 / Virus Database: 3722/7293 - Release Date: 04/03/14
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14455.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31302 - in trunk:	opal/mca/base orte/tools/orterun"</a>
<li><strong>Previous message:</strong> <a href="14453.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31302 - in trunk: opal/mca/base orte/tools/orterun"</a>
<li><strong>In reply to:</strong> <a href="14453.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31302 - in trunk: opal/mca/base orte/tools/orterun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14455.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31302 - in trunk:	opal/mca/base orte/tools/orterun"</a>
<li><strong>Reply:</strong> <a href="14455.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31302 - in trunk:	opal/mca/base orte/tools/orterun"</a>
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
