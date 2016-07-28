<?
$subject_val = "Re: [OMPI devel] Use unique collective ids for the checkpoint/restart code";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  3 15:43:30 2014" -->
<!-- isoreceived="20140203204330" -->
<!-- sent="Mon, 3 Feb 2014 12:42:39 -0800" -->
<!-- isosent="20140203204239" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Use unique collective ids for the checkpoint/restart code" -->
<!-- id="E4422776-1DD7-4491-B987-4AC047AB3E20_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20140203201936.GX4981_at_lisas.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Use unique collective ids for the checkpoint/restart code<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-03 15:42:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13986.php">Orion Poplawski: "[OMPI devel] Problem compiling openmpi 1.7.4rc3 against system libevent"</a>
<li><strong>Previous message:</strong> <a href="13984.php">Adrian Reber: "[OMPI devel] Use unique collective ids for the checkpoint/restart code"</a>
<li><strong>In reply to:</strong> <a href="13984.php">Adrian Reber: "[OMPI devel] Use unique collective ids for the checkpoint/restart code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13992.php">Adrian Reber: "Re: [OMPI devel] Use unique collective ids for the checkpoint/restart code"</a>
<li><strong>Reply:</strong> <a href="13992.php">Adrian Reber: "Re: [OMPI devel] Use unique collective ids for the checkpoint/restart code"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Looks okay to me - I see you left a &quot;printf&quot; statement in plm_base_launch_support.c, so you might want to make that an opal_output_verbose or something.
<br>
<p>On Feb 3, 2014, at 12:19 PM, Adrian Reber &lt;adrian_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; This patch
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="https://lisas.de/git/?p=open-mpi.git;a=commitdiff;h=14ec7f42baab882e345948ff79c4f75f5084bbbf">https://lisas.de/git/?p=open-mpi.git;a=commitdiff;h=14ec7f42baab882e345948ff79c4f75f5084bbbf</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; introduces unique collective ids for the checkpoint/restart code and
</span><br>
<span class="quotelev1">&gt; with this applied it seems to work pretty good. As this patch also
</span><br>
<span class="quotelev1">&gt; touches non-CR code it would be good if someone could have a look at it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; With this patch applied the code seems to work up to the point where
</span><br>
<span class="quotelev1">&gt; orterun actually pauses all processes and tries to create the
</span><br>
<span class="quotelev1">&gt; checkpoints. The checkpoint creation does not work for me as CRS does
</span><br>
<span class="quotelev1">&gt; not yet include support for checkpoint/restart using CRIU which would be
</span><br>
<span class="quotelev1">&gt; my next step.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 		Adrian
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
<li><strong>Next message:</strong> <a href="13986.php">Orion Poplawski: "[OMPI devel] Problem compiling openmpi 1.7.4rc3 against system libevent"</a>
<li><strong>Previous message:</strong> <a href="13984.php">Adrian Reber: "[OMPI devel] Use unique collective ids for the checkpoint/restart code"</a>
<li><strong>In reply to:</strong> <a href="13984.php">Adrian Reber: "[OMPI devel] Use unique collective ids for the checkpoint/restart code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13992.php">Adrian Reber: "Re: [OMPI devel] Use unique collective ids for the checkpoint/restart code"</a>
<li><strong>Reply:</strong> <a href="13992.php">Adrian Reber: "Re: [OMPI devel] Use unique collective ids for the checkpoint/restart code"</a>
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
