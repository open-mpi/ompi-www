<?
$subject_val = "Re: [OMPI devel] Launch windows nodes from linux";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 20 08:24:15 2012" -->
<!-- isoreceived="20120120132415" -->
<!-- sent="Fri, 20 Jan 2012 06:24:07 -0700" -->
<!-- isosent="20120120132407" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Launch windows nodes from linux" -->
<!-- id="7A967BB9-ADFA-4100-8ECA-AFB68048173D_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="60C2819A78CBC241B74AE1666E86A1E05F3F8EBF44_at_EXNSW-MBX02.nexus.csiro.au" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Launch windows nodes from linux<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-20 08:24:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10239.php">Sebastian Rinke: "Re: [OMPI devel] GPUDirect v1 issues"</a>
<li><strong>Previous message:</strong> <a href="10237.php">Ralph Castain: "Re: [OMPI devel] Violating standard in MPI_Close_port"</a>
<li><strong>In reply to:</strong> <a href="10233.php">Alex.Burton_at_[hidden]: "[OMPI devel] Launch windows nodes from linux"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Guess I'm confused. The launcher is running on a Linux machine, so it has to use a Linux service to launch the remote daemon. Can you use ssh to launch the daemons onto the Windows machines? In other words, can you have the Windows machine support an ssh connection?
<br>
<p>I did a quick search and found a number of options for supporting ssh connections to Windows. Here is one article that describes how to do it:
<br>
<p><a href="http://www.windowsnetworking.com/articles_tutorials/install-ssh-server-windows-server-2008.html">http://www.windowsnetworking.com/articles_tutorials/install-ssh-server-windows-server-2008.html</a>
<br>
<p>Once the daemon is started on the Windows machine, it will automatically select the Windows options for starting its local procs - so that shouldn't be an issue. The issue will be figuring out a way to get the daemon started.
<br>
<p><p>On Jan 19, 2012, at 10:25 PM, &lt;Alex.Burton_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi developers,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I can see in the code that the part that launches processes on other
</span><br>
<span class="quotelev1">&gt; machines on Windows is not compiled on other platforms because it uses
</span><br>
<span class="quotelev1">&gt; COM.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Is there another way of launching processes on Windows from non windows
</span><br>
<span class="quotelev1">&gt; machines ?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; What would I need to do to write a daemon similar to MPICH2s smpd which
</span><br>
<span class="quotelev1">&gt; runs as a windows service ?
</span><br>
<span class="quotelev1">&gt; It looks like it would only have to handle authentication and launch the
</span><br>
<span class="quotelev1">&gt; ORTE process.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I would use MPICH2, but it appears to not work with a heterogeneous
</span><br>
<span class="quotelev1">&gt; network.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Alex
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Alex Burton
</span><br>
<span class="quotelev1">&gt; Research Engineer NSEC
</span><br>
<span class="quotelev1">&gt; CSIRO Energy Technology
</span><br>
<span class="quotelev1">&gt; Box 330 Newcastle NSW 2300
</span><br>
<span class="quotelev1">&gt; +61 2 49 606 110
</span><br>
<span class="quotelev1">&gt; alex.burton_at_[hidden]
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10238/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10239.php">Sebastian Rinke: "Re: [OMPI devel] GPUDirect v1 issues"</a>
<li><strong>Previous message:</strong> <a href="10237.php">Ralph Castain: "Re: [OMPI devel] Violating standard in MPI_Close_port"</a>
<li><strong>In reply to:</strong> <a href="10233.php">Alex.Burton_at_[hidden]: "[OMPI devel] Launch windows nodes from linux"</a>
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
