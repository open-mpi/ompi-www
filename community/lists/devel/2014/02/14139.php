<?
$subject_val = "Re: [OMPI devel] 1.7.5 status";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 13 10:36:23 2014" -->
<!-- isoreceived="20140213153623" -->
<!-- sent="Thu, 13 Feb 2014 07:36:09 -0800" -->
<!-- isosent="20140213153609" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.7.5 status" -->
<!-- id="646F968F-B97A-48DA-BE0D-5C7499651CBA_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="52FC6FAE.4010009_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.7.5 status<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-13 10:36:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14140.php">Marco Atzeri: "Re: [OMPI devel] 1.7.5 status"</a>
<li><strong>Previous message:</strong> <a href="14138.php">Ralph Castain: "Re: [OMPI devel] v1.7.4, mpiexec &quot;exit 1&quot; and no other warning - behaviour changed to previous versions"</a>
<li><strong>In reply to:</strong> <a href="14136.php">Marco Atzeri: "Re: [OMPI devel] 1.7.5 status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14140.php">Marco Atzeri: "Re: [OMPI devel] 1.7.5 status"</a>
<li><strong>Reply:</strong> <a href="14140.php">Marco Atzeri: "Re: [OMPI devel] 1.7.5 status"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Marco
<br>
<p>Quick question for you: we don't support Windows any more anyway. If we just remove the #if WIN32 cruft, would that solve the problem?
<br>
<p><p>On Feb 12, 2014, at 11:09 PM, Marco Atzeri &lt;marco.atzeri_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 12/02/2014 04:18, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Things are looking relatively good - I see two recurring failures:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 1. idx_null - no idea what that test does, but it routinely fails
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 2. intercomm_create - this is the 3-way connect/accept/merge. Nathan - I believe you had a fix for that?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; openmpi-1.7.5a1r30692-1 builds fine con cygwin64
</span><br>
<span class="quotelev1">&gt; only failure the already know
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/ompi/ticket/4195">https://svn.open-mpi.org/trac/ompi/ticket/4195</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Attached patch equivalent to what is already on trunk for ohsmem
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt; Marco
</span><br>
<span class="quotelev1">&gt; &lt;openmpi-1.7.5a1r30692.patch&gt;_______________________________________________
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
<li><strong>Next message:</strong> <a href="14140.php">Marco Atzeri: "Re: [OMPI devel] 1.7.5 status"</a>
<li><strong>Previous message:</strong> <a href="14138.php">Ralph Castain: "Re: [OMPI devel] v1.7.4, mpiexec &quot;exit 1&quot; and no other warning - behaviour changed to previous versions"</a>
<li><strong>In reply to:</strong> <a href="14136.php">Marco Atzeri: "Re: [OMPI devel] 1.7.5 status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14140.php">Marco Atzeri: "Re: [OMPI devel] 1.7.5 status"</a>
<li><strong>Reply:</strong> <a href="14140.php">Marco Atzeri: "Re: [OMPI devel] 1.7.5 status"</a>
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
