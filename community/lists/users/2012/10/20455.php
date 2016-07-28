<?
$subject_val = "Re: [OMPI users] Open MPI on Cray XE6 / Gemini";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 10 10:55:13 2012" -->
<!-- isoreceived="20121010145513" -->
<!-- sent="Wed, 10 Oct 2012 07:55:08 -0700" -->
<!-- isosent="20121010145508" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI on Cray XE6 / Gemini" -->
<!-- id="CAMD57ofd+ooTh6rmKYthn-EoHsa0P=FkMnOwpRD683DOTs-DTQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="322ED900-BB21-490C-B8B0-2325986D3A71_at_staff.uni-marburg.de" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-10 10:55:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20456.php">Nathan Hjelm: "Re: [OMPI users] Open MPI on Cray XE6 / Gemini"</a>
<li><strong>Previous message:</strong> <a href="20454.php">Howard Pritchard: "Re: [OMPI users] Open MPI on Cray XE6 / Gemini"</a>
<li><strong>In reply to:</strong> <a href="20453.php">Reuti: "Re: [OMPI users] Open MPI on Cray XE6 / Gemini"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20456.php">Nathan Hjelm: "Re: [OMPI users] Open MPI on Cray XE6 / Gemini"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Actually, I suspect the problem is that you don't have PMI running on the
<br>
machine. The processes have no reason to be opening sockets for the OOB on
<br>
a Cray XE6, and if you look at that platform file, it defines the location
<br>
of the PMI libraries that are required.
<br>
<p>Since it built, I expect the libraries were found. However, you should
<br>
check to ensure your sys admin actually has PMI running.
<br>
<p><p>On Wed, Oct 10, 2012 at 7:46 AM, Reuti &lt;reuti_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Am 10.10.2012 um 14:50 schrieb Christoph Niethammer:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I just tried to use Open MPI 1.7a1r27416 on a Cray XE6 system.
</span><br>
<span class="quotelev1">&gt; Unfortunately I get the following error when I run a simple HelloWorldMPI
</span><br>
<span class="quotelev1">&gt; program:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; $ pirun HelloWorldMPI
</span><br>
<span class="quotelev2">&gt; &gt; App launch reported: 2 (out of 2) daemons - 0 (out of 32) procs
</span><br>
<span class="quotelev2">&gt; &gt; ...
</span><br>
<span class="quotelev2">&gt; &gt; [unset]:_pmi_alps_get_appLayout:pmi_alps_get_apid returned with error:
</span><br>
<span class="quotelev1">&gt; Bad file descriptor
</span><br>
<span class="quotelev2">&gt; &gt; [nid01766:20603] mca_oob_tcp_init: unable to create IPv4 listen socket:
</span><br>
<span class="quotelev1">&gt; Unable to open a TCP socket for out-of-band communications
</span><br>
<span class="quotelev2">&gt; &gt; ...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The installation was configured with the following command:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ./configure
</span><br>
<span class="quotelev1">&gt; --with-platform=contrib/platform/lanl/cray_xe6/optimized-nopanasas
</span><br>
<span class="quotelev1">&gt; --prefix=$HOME/bin/mpi/openmpi/1.7a1r27416
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; you are doing it local on the headnode only? It includes --with-alps by
</span><br>
<span class="quotelev1">&gt; the platform file and there is the command `aprun` instead of `mpiexec` in
</span><br>
<span class="quotelev1">&gt; the jobscript on a Cray. Maybe the allocation needs to be granted first.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I would be very happy if anybdy has an idea, what I could have missed
</span><br>
<span class="quotelev1">&gt; during installation/runtime.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks in advance.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Best regards
</span><br>
<span class="quotelev2">&gt; &gt; Christoph
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Christoph Niethammer
</span><br>
<span class="quotelev2">&gt; &gt; High Performance Computing Center Stuttgart (HLRS)
</span><br>
<span class="quotelev2">&gt; &gt; Nobelstrasse 19
</span><br>
<span class="quotelev2">&gt; &gt; 70569 Stuttgart
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Tel: ++49(0)711-685-87203
</span><br>
<span class="quotelev2">&gt; &gt; email: niethammer_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.hlrs.de/people/niethammer">http://www.hlrs.de/people/niethammer</a>
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20455/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20456.php">Nathan Hjelm: "Re: [OMPI users] Open MPI on Cray XE6 / Gemini"</a>
<li><strong>Previous message:</strong> <a href="20454.php">Howard Pritchard: "Re: [OMPI users] Open MPI on Cray XE6 / Gemini"</a>
<li><strong>In reply to:</strong> <a href="20453.php">Reuti: "Re: [OMPI users] Open MPI on Cray XE6 / Gemini"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20456.php">Nathan Hjelm: "Re: [OMPI users] Open MPI on Cray XE6 / Gemini"</a>
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
