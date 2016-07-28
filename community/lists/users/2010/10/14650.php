<?
$subject_val = "Re: [OMPI users] open MPI please recommend a debugger for open MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 29 12:05:36 2010" -->
<!-- isoreceived="20101029160536" -->
<!-- sent="Fri, 29 Oct 2010 09:05:12 -0700" -->
<!-- isosent="20101029160512" -->
<!-- name="Brian Austin" -->
<!-- email="baustin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] open MPI please recommend a debugger for open MPI" -->
<!-- id="AANLkTim93g5Vv07hdve18F8wDOGyT=j5EMy=tjvT-zqo_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTimMNi21ccaD0XuPC5kCEBRtqs08zMq_DNwBHYj3_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] open MPI please recommend a debugger for open MPI<br>
<strong>From:</strong> Brian Austin (<em>baustin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-29 12:05:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14651.php">guillaume ranquet: "[OMPI users] mixed versions of openmpi ? (1.4.1 and 1.4.3)"</a>
<li><strong>Previous message:</strong> <a href="14649.php">Ralph Castain: "Re: [OMPI users] failed to install openmpi trunk"</a>
<li><strong>In reply to:</strong> <a href="14648.php">Jeremy Roberts: "Re: [OMPI users] open MPI please recommend a debugger for open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14658.php">Ashley Pittman: "Re: [OMPI users] open MPI please recommend a debugger for open MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I find that using mpirun to launch multiple instance of a serial
<br>
debugger is fairly usable (but not perfect) for jobs with fewer than
<br>
about four processes.
<br>
A description of how to do this is here:
<br>
<a href="http://www.open-mpi.org/faq/?category=debugging">http://www.open-mpi.org/faq/?category=debugging</a>
<br>
<p>The biggest drawbacks to this approach are that
<br>
a) setting breakpoints and stepping between lines must be controlled
<br>
separately for each process
<br>
b) restarting the job requires ending all of your debugger sessions.
<br>
<p>-Brian
<br>
<p>On Fri, Oct 29, 2010 at 4:06 AM, Jeremy Roberts
<br>
&lt;j.alyn.roberts_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; I'd suggest looking into TotalView (<a href="http://www.totalviewtech.com">http://www.totalviewtech.com</a>) and/or DDT
</span><br>
<span class="quotelev1">&gt; (<a href="http://www.allinea.com/">http://www.allinea.com/</a>).&#160; I've used TotalView pretty extensively and found
</span><br>
<span class="quotelev1">&gt; it to be pretty easy to use.&#160; They are both commercial, however, and not
</span><br>
<span class="quotelev1">&gt; cheap.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As far as I know, there isn't a whole lot of open source support for
</span><br>
<span class="quotelev1">&gt; parallel debugging. The Parallel Tools Platform of Eclipse claims to provide
</span><br>
<span class="quotelev1">&gt; a parallel debugger, though I have yet to try it
</span><br>
<span class="quotelev1">&gt; (<a href="http://www.eclipse.org/ptp/">http://www.eclipse.org/ptp/</a>).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeremy
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, Oct 29, 2010 at 12:55 AM, Jack Bryan &lt;dtustudy68_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; Would you please recommend a debugger, which can do debugging for parallel
</span><br>
<span class="quotelev2">&gt;&gt; processes
</span><br>
<span class="quotelev2">&gt;&gt; on Open MPI systems ?
</span><br>
<span class="quotelev2">&gt;&gt; I hope that it can be installed without root right because I am not a root
</span><br>
<span class="quotelev2">&gt;&gt; user for our
</span><br>
<span class="quotelev2">&gt;&gt; MPI cluster.
</span><br>
<span class="quotelev2">&gt;&gt; Any help is appreciated.
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; Jack
</span><br>
<span class="quotelev2">&gt;&gt; Oct. 28 2010
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14651.php">guillaume ranquet: "[OMPI users] mixed versions of openmpi ? (1.4.1 and 1.4.3)"</a>
<li><strong>Previous message:</strong> <a href="14649.php">Ralph Castain: "Re: [OMPI users] failed to install openmpi trunk"</a>
<li><strong>In reply to:</strong> <a href="14648.php">Jeremy Roberts: "Re: [OMPI users] open MPI please recommend a debugger for open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14658.php">Ashley Pittman: "Re: [OMPI users] open MPI please recommend a debugger for open MPI"</a>
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
