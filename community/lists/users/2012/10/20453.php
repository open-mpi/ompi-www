<?
$subject_val = "Re: [OMPI users] Open MPI on Cray XE6 / Gemini";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 10 10:47:01 2012" -->
<!-- isoreceived="20121010144701" -->
<!-- sent="Wed, 10 Oct 2012 16:46:54 +0200" -->
<!-- isosent="20121010144654" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI on Cray XE6 / Gemini" -->
<!-- id="322ED900-BB21-490C-B8B0-2325986D3A71_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201210101450.59904.niethammer_at_hlrs.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open MPI on Cray XE6 / Gemini<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-10 10:46:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20454.php">Howard Pritchard: "Re: [OMPI users] Open MPI on Cray XE6 / Gemini"</a>
<li><strong>Previous message:</strong> <a href="20452.php">Jeff Squyres: "Re: [OMPI users] PAPI errors when compiling OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="20448.php">Christoph Niethammer: "[OMPI users] Open MPI on Cray XE6 / Gemini"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20454.php">Howard Pritchard: "Re: [OMPI users] Open MPI on Cray XE6 / Gemini"</a>
<li><strong>Reply:</strong> <a href="20454.php">Howard Pritchard: "Re: [OMPI users] Open MPI on Cray XE6 / Gemini"</a>
<li><strong>Reply:</strong> <a href="20455.php">Ralph Castain: "Re: [OMPI users] Open MPI on Cray XE6 / Gemini"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Am 10.10.2012 um 14:50 schrieb Christoph Niethammer:
<br>
<p><p><span class="quotelev1">&gt; I just tried to use Open MPI 1.7a1r27416 on a Cray XE6 system. Unfortunately I get the following error when I run a simple HelloWorldMPI program:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ pirun HelloWorldMPI
</span><br>
<span class="quotelev1">&gt; App launch reported: 2 (out of 2) daemons - 0 (out of 32) procs
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; [unset]:_pmi_alps_get_appLayout:pmi_alps_get_apid returned with error: Bad file descriptor
</span><br>
<span class="quotelev1">&gt; [nid01766:20603] mca_oob_tcp_init: unable to create IPv4 listen socket: Unable to open a TCP socket for out-of-band communications
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The installation was configured with the following command:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./configure --with-platform=contrib/platform/lanl/cray_xe6/optimized-nopanasas --prefix=$HOME/bin/mpi/openmpi/1.7a1r27416
</span><br>
<p>you are doing it local on the headnode only? It includes --with-alps by the platform file and there is the command `aprun` instead of `mpiexec` in the jobscript on a Cray. Maybe the allocation needs to be granted first.
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; I would be very happy if anybdy has an idea, what I could have missed during installation/runtime.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks in advance.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best regards
</span><br>
<span class="quotelev1">&gt; Christoph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Christoph Niethammer
</span><br>
<span class="quotelev1">&gt; High Performance Computing Center Stuttgart (HLRS)
</span><br>
<span class="quotelev1">&gt; Nobelstrasse 19
</span><br>
<span class="quotelev1">&gt; 70569 Stuttgart
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Tel: ++49(0)711-685-87203
</span><br>
<span class="quotelev1">&gt; email: niethammer_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.hlrs.de/people/niethammer">http://www.hlrs.de/people/niethammer</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20454.php">Howard Pritchard: "Re: [OMPI users] Open MPI on Cray XE6 / Gemini"</a>
<li><strong>Previous message:</strong> <a href="20452.php">Jeff Squyres: "Re: [OMPI users] PAPI errors when compiling OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="20448.php">Christoph Niethammer: "[OMPI users] Open MPI on Cray XE6 / Gemini"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20454.php">Howard Pritchard: "Re: [OMPI users] Open MPI on Cray XE6 / Gemini"</a>
<li><strong>Reply:</strong> <a href="20454.php">Howard Pritchard: "Re: [OMPI users] Open MPI on Cray XE6 / Gemini"</a>
<li><strong>Reply:</strong> <a href="20455.php">Ralph Castain: "Re: [OMPI users] Open MPI on Cray XE6 / Gemini"</a>
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
