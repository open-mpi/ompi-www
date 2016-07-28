<?
$subject_val = "Re: [OMPI devel] delivering SIGUSR2 to an ompi process";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 25 12:34:09 2010" -->
<!-- isoreceived="20100825163409" -->
<!-- sent="Wed, 25 Aug 2010 10:33:58 -0600" -->
<!-- isosent="20100825163358" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] delivering SIGUSR2 to an ompi process" -->
<!-- id="A2CD8E4B-2BA1-4243-BA6B-D60A58BDFE53_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4C754373.4010705_at_opengridcomputing.com" -->
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
<strong>Date:</strong> 2010-08-25 12:33:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8350.php">Jeff Squyres: "[OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r23664"</a>
<li><strong>Previous message:</strong> <a href="8348.php">Steve Wise: "[OMPI devel] delivering SIGUSR2 to an ompi process"</a>
<li><strong>In reply to:</strong> <a href="8348.php">Steve Wise: "[OMPI devel] delivering SIGUSR2 to an ompi process"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8353.php">Steve Wise: "Re: [OMPI devel] delivering SIGUSR2 to an ompi process"</a>
<li><strong>Reply:</strong> <a href="8353.php">Steve Wise: "Re: [OMPI devel] delivering SIGUSR2 to an ompi process"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We don't use it - mpirun traps it and then propagates it by default to all remote procs.
<br>
<p>What OMPI version is this?
<br>
<p>On Aug 25, 2010, at 10:23 AM, Steve Wise wrote:
<br>
<p><span class="quotelev1">&gt; Hey Open MPI wizards,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm trying to debug something in my library that gets loaded into my mpi processes when they are started via mpirun.  With other MPIs, I've been able to deliver SIGUSR2 to the process and trigger some debug code I have in my library that sets up a handler for SIGUSR2.  However, when I deliver SIGUSR2 to my process running under OMPI, the process just dies and mpirun logs this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that process rank 0 with PID 13568 on node hpc-cn2 exited on signal 12 (User defined signal 2).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there any way to allow SIGUSR2 to reach my library handler?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Does OMPI use SIGUSR1/2 for other purposes?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there some other clever way I can kick my library at runtime to dump its debug code?  Like maybe interface with the MPI debug code somehow so things like padb could trigger this debug logic?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks in advance,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Steve.
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
<li><strong>Next message:</strong> <a href="8350.php">Jeff Squyres: "[OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r23664"</a>
<li><strong>Previous message:</strong> <a href="8348.php">Steve Wise: "[OMPI devel] delivering SIGUSR2 to an ompi process"</a>
<li><strong>In reply to:</strong> <a href="8348.php">Steve Wise: "[OMPI devel] delivering SIGUSR2 to an ompi process"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8353.php">Steve Wise: "Re: [OMPI devel] delivering SIGUSR2 to an ompi process"</a>
<li><strong>Reply:</strong> <a href="8353.php">Steve Wise: "Re: [OMPI devel] delivering SIGUSR2 to an ompi process"</a>
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
