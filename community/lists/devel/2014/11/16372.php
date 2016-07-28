<?
$subject_val = "Re: [OMPI devel] Setting up debug environment on Eclipse PTP";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 28 11:08:41 2014" -->
<!-- isoreceived="20141128160841" -->
<!-- sent="Fri, 28 Nov 2014 08:08:37 -0800" -->
<!-- isosent="20141128160837" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Setting up debug environment on Eclipse PTP" -->
<!-- id="C0EDB9F2-060B-47D5-A8D3-3A6D5A952679_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CALGdtq36zjEo3h8uGPXxF7s7Wvs7r4dKDyd27kp1kCG7VuAsJg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Setting up debug environment on Eclipse PTP<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-28 11:08:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16373.php">Ralph Castain: "Re: [OMPI devel] Question about tight integration with not-yet-supported queuing systems"</a>
<li><strong>Previous message:</strong> <a href="16371.php">Nick Papior Andersen: "[OMPI devel] Communicator based on locality of PU"</a>
<li><strong>In reply to:</strong> <a href="16370.php">Alvyn Liang: "Re: [OMPI devel] Setting up debug environment on Eclipse PTP"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16392.php">Alvyn Liang: "Re: [OMPI devel] Setting up debug environment on Eclipse PTP"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I&#226;&#128;&#153;m not sure we have any developers using PTP - have you tried asking this question on the PTP mailing list, assuming that project still exists?
<br>
<p><p><span class="quotelev1">&gt; On Nov 27, 2014, at 7:38 PM, Alvyn Liang &lt;alvyn.liang_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Dear all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am trying to learn how Open MPI works. Followed many instructions on Web, I tried to setup MPI Hello projects on Eclipse PTP. I am wondering if there is any protocol to setup such an environment.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I did try a few combination, but still stuck at the point where sometimes there are:
</span><br>
<span class="quotelev1">&gt; 1. little bugs symbol showing on the left panel (next to the line numbers) while debugging. Things like &quot;Symbol 'ompi_mpi_finalized' could not be resolved&quot;. I think this is due to environmental variables or paths not being set correctly, but I don't know what I have missed.
</span><br>
<span class="quotelev1">&gt; 2. Cannot toggle breakpoints or toggled breakpoints being set on a relative file path. This makes the threads not stopping at the breakpoints.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My environment is CentOS 6.6 running on a machine with 32GB memory, and Intel i7-3770. Since I am still experimenting on local debugging, I am debugging on Generic Open MPI Interactive with connection type local or remotely to 127.0.0.1, and with only a few processes. Detailed Eclipse installation configuration attached.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My Open MPI is configured as
</span><br>
<span class="quotelev1">&gt; ../configure --enable-debug --enable-event-debug --enable-mem-debug --enable-mem-profile
</span><br>
<span class="quotelev1">&gt; The compiler is GNU C compiler.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This gives a lot of information in the console while debugging but not very useful. I am not sure if I should run 'make install' for Open MPI to /usr, or simply set Open MPI source tree as part of the project, or both. Open MPI has examples folder but I don't know how to use the code directly as my source code. For now I can step into source code of Open MPI, but sometimes I cannot toggle breakpoints. Attached is my current debug configuration.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Good day,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Alvyn
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A screen shot:
</span><br>
<span class="quotelev1">&gt; <a href="https://www.dropbox.com/s/s105m2qgi14oj2y/Screenshot-Parallel%20Debug%20-%20ompitest-build-ompi-mpi-c-profile-pinit.c%20-%20Eclipse%20.png?dl=0">https://www.dropbox.com/s/s105m2qgi14oj2y/Screenshot-Parallel%20Debug%20-%20ompitest-build-ompi-mpi-c-profile-pinit.c%20-%20Eclipse%20.png?dl=0</a> &lt;<a href="https://www.dropbox.com/s/s105m2qgi14oj2y/Screenshot-Parallel%20Debug%20-%20ompitest-build-ompi-mpi-c-profile-pinit.c%20-%20Eclipse%20.png?dl=0">https://www.dropbox.com/s/s105m2qgi14oj2y/Screenshot-Parallel%20Debug%20-%20ompitest-build-ompi-mpi-c-profile-pinit.c%20-%20Eclipse%20.png?dl=0</a>&gt;
</span><br>
<span class="quotelev1">&gt; Eclipse configuration:
</span><br>
<span class="quotelev1">&gt; <a href="https://www.dropbox.com/s/5fnrqyga842w0e0/eclipse.conf?dl=0">https://www.dropbox.com/s/5fnrqyga842w0e0/eclipse.conf?dl=0</a> &lt;<a href="https://www.dropbox.com/s/5fnrqyga842w0e0/eclipse.conf?dl=0">https://www.dropbox.com/s/5fnrqyga842w0e0/eclipse.conf?dl=0</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;debug.conf&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16370.php">http://www.open-mpi.org/community/lists/devel/2014/11/16370.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16372/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16373.php">Ralph Castain: "Re: [OMPI devel] Question about tight integration with not-yet-supported queuing systems"</a>
<li><strong>Previous message:</strong> <a href="16371.php">Nick Papior Andersen: "[OMPI devel] Communicator based on locality of PU"</a>
<li><strong>In reply to:</strong> <a href="16370.php">Alvyn Liang: "Re: [OMPI devel] Setting up debug environment on Eclipse PTP"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16392.php">Alvyn Liang: "Re: [OMPI devel] Setting up debug environment on Eclipse PTP"</a>
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
