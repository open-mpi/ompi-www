<?
$subject_val = "Re: [OMPI devel] turning on progress threads";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 10 19:54:32 2011" -->
<!-- isoreceived="20110311005432" -->
<!-- sent="Thu, 10 Mar 2011 16:54:08 -0800" -->
<!-- isosent="20110311005408" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] turning on progress threads" -->
<!-- id="4D7972B0.1030200_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4A6FAE19-4D12-48C6-98D1-A96CE57C6A35_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] turning on progress threads<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-10 19:54:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9054.php">Ralph Castain: "Re: [OMPI devel] turning on progress threads"</a>
<li><strong>Previous message:</strong> <a href="9052.php">Eugene Loh: "Re: [OMPI devel] [Fwd:  multi-threaded test]"</a>
<li><strong>In reply to:</strong> <a href="9050.php">Ralph Castain: "Re: [OMPI devel] turning on progress threads"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9054.php">Ralph Castain: "Re: [OMPI devel] turning on progress threads"</a>
<li><strong>Reply:</strong> <a href="9054.php">Ralph Castain: "Re: [OMPI devel] turning on progress threads"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt;Just stale code that doesn't hurt anything
</span><br>
<span class="quotelev1">&gt;
</span><br>
Okay, so it'd be all right to remove those lines.  Right?
<br>
<p><span class="quotelev1">&gt;- frankly, I wouldn't look at platform files to try to get a handle on such things as they tend to fall out of date unless someone needs to change it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;We always hard-code progress threads to off because the code isn't thread safe in key areas involving the event library, for one.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Mar 10, 2011, at 3:43 PM, Eugene Loh wrote:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;In the trunk, we hardwire progress threads to be off.  E.g.,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;% grep progress configure.ac
</span><br>
<span class="quotelev2">&gt;&gt;# Hardwire all progress threads to be off
</span><br>
<span class="quotelev2">&gt;&gt;enable_progress_threads=&quot;no&quot;
</span><br>
<span class="quotelev2">&gt;&gt;                 [Hardcode the ORTE progress thread to be off])
</span><br>
<span class="quotelev2">&gt;&gt;                 [Hardcode the OMPI progress thread to be off])
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;So, how do I understand the following?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;% grep enable_progress contrib/platform/*/*.conf
</span><br>
<span class="quotelev2">&gt;&gt;contrib/platform/cisco/linux-static.conf:orte_enable_progress_threads = 1
</span><br>
<span class="quotelev2">&gt;&gt;contrib/platform/cisco/macosx-dynamic.conf:orte_enable_progress_threads = 1
</span><br>
<span class="quotelev2">&gt;&gt;contrib/platform/openrcm/debug.conf:orte_enable_progress_threads = 1
</span><br>
<span class="quotelev2">&gt;&gt;% grep enable_progress contrib/platform/*/*/*.conf
</span><br>
<span class="quotelev2">&gt;&gt;contrib/platform/cisco/ebuild/hlfr.conf:orte_enable_progress_threads = 1
</span><br>
<span class="quotelev2">&gt;&gt;contrib/platform/cisco/ebuild/ludd.conf:orte_enable_progress_threads = 1
</span><br>
<span class="quotelev2">&gt;&gt;contrib/platform/cisco/ebuild/native.conf:orte_enable_progress_threads = 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;These seem to try to turn progress threads on.  Ugly, but not a problem?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9054.php">Ralph Castain: "Re: [OMPI devel] turning on progress threads"</a>
<li><strong>Previous message:</strong> <a href="9052.php">Eugene Loh: "Re: [OMPI devel] [Fwd:  multi-threaded test]"</a>
<li><strong>In reply to:</strong> <a href="9050.php">Ralph Castain: "Re: [OMPI devel] turning on progress threads"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9054.php">Ralph Castain: "Re: [OMPI devel] turning on progress threads"</a>
<li><strong>Reply:</strong> <a href="9054.php">Ralph Castain: "Re: [OMPI devel] turning on progress threads"</a>
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
