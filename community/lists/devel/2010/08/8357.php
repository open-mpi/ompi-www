<?
$subject_val = "Re: [OMPI devel] delivering SIGUSR2 to an ompi process";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 25 14:11:07 2010" -->
<!-- isoreceived="20100825181107" -->
<!-- sent="Wed, 25 Aug 2010 12:10:59 -0600" -->
<!-- isosent="20100825181059" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] delivering SIGUSR2 to an ompi process" -->
<!-- id="074BFEC6-CCB0-45F0-91F9-F7C86EB91719_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4C755B1F.2050808_at_opengridcomputing.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] delivering SIGUSR2 to an ompi process<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-25 14:10:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8358.php">Paul H. Hargrove: "[OMPI devel] VT &quot;platform&quot; selection needs documentation"</a>
<li><strong>Previous message:</strong> <a href="8356.php">Steve Wise: "Re: [OMPI devel] delivering SIGUSR2 to an ompi process"</a>
<li><strong>In reply to:</strong> <a href="8356.php">Steve Wise: "Re: [OMPI devel] delivering SIGUSR2 to an ompi process"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8375.php">Sylvain Jeaugey: "Re: [OMPI devel] delivering SIGUSR2 to an ompi process"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Could be a bug on our part. If you --enable-debug in your configure, you can then set -mca odls_base_verbose 5 and (amidst a lot of other stuff) you'll see the signal being delivered to the proc if you sent it to mpirun.
<br>
<p>If you send the signal direct to the proc yourself, we shouldn't touch it...unless we have a bug that does so.
<br>
<p>On Aug 25, 2010, at 12:04 PM, Steve Wise wrote:
<br>
<p><span class="quotelev1">&gt; On 08/25/2010 12:43 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 25, 2010, at 11:26 AM, Steve Wise wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 08/25/2010 11:33 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; We don't use it - mpirun traps it and then propagates it by default to all remote procs.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So I should send the signal to the mpirun process?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     
</span><br>
<span class="quotelev2">&gt;&gt; Yes - however, note that it will be propagated to ALL processes in the job.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If you want to only get the signal in one proc, you can just do a &quot;kill&quot; to that specific process on its node. We don't trap signals on the application procs themselves, so your proc can do whatever it wants with it.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Something is funny then.  When I send SIGUSR2 to the process itself -or- to the mpirun proc, it just kills the process and doesn't get to my sig handler.  And my same library works when I run the job using mvapich2.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'll keep digging.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Steve.
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="8358.php">Paul H. Hargrove: "[OMPI devel] VT &quot;platform&quot; selection needs documentation"</a>
<li><strong>Previous message:</strong> <a href="8356.php">Steve Wise: "Re: [OMPI devel] delivering SIGUSR2 to an ompi process"</a>
<li><strong>In reply to:</strong> <a href="8356.php">Steve Wise: "Re: [OMPI devel] delivering SIGUSR2 to an ompi process"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8375.php">Sylvain Jeaugey: "Re: [OMPI devel] delivering SIGUSR2 to an ompi process"</a>
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
