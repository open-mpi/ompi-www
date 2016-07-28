<?
$subject_val = "Re: [OMPI devel] FlowChecker: Detecting Bugs in MPI Libraries via Message Flow Checking";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Nov 20 12:08:21 2010" -->
<!-- isoreceived="20101120170821" -->
<!-- sent="Sat, 20 Nov 2010 12:08:14 -0500" -->
<!-- isosent="20101120170814" -->
<!-- name="S&#233;bastien Boisvert" -->
<!-- email="Sebastien.Boisvert.3_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] FlowChecker: Detecting Bugs in MPI Libraries via Message Flow Checking" -->
<!-- id="1290272894.17760.42.camel_at_cortex" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="4CE7F3CE.9040101_at_unimelb.edu.au" -->
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
<strong>Subject:</strong> Re: [OMPI devel] FlowChecker: Detecting Bugs in MPI Libraries via Message Flow Checking<br>
<strong>From:</strong> S&#233;bastien Boisvert (<em>Sebastien.Boisvert.3_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-20 12:08:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8690.php">Joshua Hursey: "[OMPI devel] Fwd: [all-osl-users] Fwd: Servers reboot on Wednesday (11/24) morning	starting at 8:00"</a>
<li><strong>Previous message:</strong> <a href="8688.php">Christopher Samuel: "[OMPI devel] FlowChecker: Detecting Bugs in MPI Libraries via Message Flow Checking"</a>
<li><strong>In reply to:</strong> <a href="8688.php">Christopher Samuel: "[OMPI devel] FlowChecker: Detecting Bugs in MPI Libraries via Message Flow Checking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8696.php">George Bosilca: "Re: [OMPI devel] FlowChecker: Detecting Bugs in MPI Libraries via Message Flow Checking"</a>
<li><strong>Reply:</strong> <a href="8696.php">George Bosilca: "Re: [OMPI devel] FlowChecker: Detecting Bugs in MPI Libraries via Message Flow Checking"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sounds interesting !
<br>
<p>Regarding my bug report, I don't think it is very important.
<br>
<p>Here's why:
<br>
<p>According to the standard MPI 2.2, Open-MPI is correct when blocking on
<br>
any MPI_Send. So, even if Open-MPI __should__ (according to its
<br>
documentation) send messages of 4096 bytes or less eagerly (with shared
<br>
memory), the opposite is compliant too.
<br>
<p>What I have learn is that my program should be designed and implemented
<br>
according to MPI 2.2, not Open-MPI 1.4.3 or another implementation.
<br>
<p><p><p>On Sat, 2010-11-20 at 11:14 -0500, Christopher Samuel wrote:
<br>
<span class="quotelev1">&gt; -----BEGIN PGP SIGNED MESSAGE-----
</span><br>
<span class="quotelev1">&gt; Hash: SHA1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi folks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; At SC10 this year there was an interesting tool presented
</span><br>
<span class="quotelev1">&gt; as a student paper called &quot;FlowChecker: Detecting Bugs in
</span><br>
<span class="quotelev1">&gt; MPI Libraries via Message Flow Checking&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://sc10.supercomputing.org/schedule/event_detail.php?evid=pap352">http://sc10.supercomputing.org/schedule/event_detail.php?evid=pap352</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Basically they instrument a program and derive &quot;intentions&quot;
</span><br>
<span class="quotelev1">&gt; from your MPI calls and the MPI standard and also trace the
</span><br>
<span class="quotelev1">&gt; data flow (including things like memcpy) and messages.Then
</span><br>
<span class="quotelev1">&gt; offline you run a correlator which compares what was meant
</span><br>
<span class="quotelev1">&gt; to happen and what did and tries to root cause the fault.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; They claim to have taken 5 random closed bugs from 3 different
</span><br>
<span class="quotelev1">&gt; MPI implementations (including 3 from Open-MPI) and been able
</span><br>
<span class="quotelev1">&gt; to detect all 5 and root-cause 4 of them (the one they missed
</span><br>
<span class="quotelev1">&gt; was a data type issue).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The PDF of their paper is here:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cse.ohio-state.edu/~chenzhe/sc10-flowchecker.pdf">http://www.cse.ohio-state.edu/~chenzhe/sc10-flowchecker.pdf</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've emailed them to see if the code is going to be available
</span><br>
<span class="quotelev1">&gt; as it could be quite a handy tool to have when trying to track
</span><br>
<span class="quotelev1">&gt; down issues like the one S&#195;&#169;bastien posted about.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; cheers,
</span><br>
<span class="quotelev1">&gt; Chris
</span><br>
<span class="quotelev1">&gt; - -- 
</span><br>
<span class="quotelev1">&gt;  Christopher Samuel - Senior Systems Administrator
</span><br>
<span class="quotelev1">&gt;  VLSCI - Victorian Life Sciences Computational Initiative
</span><br>
<span class="quotelev1">&gt;  Email: samuel_at_[hidden] Phone: +61 (0)3 903 55545
</span><br>
<span class="quotelev1">&gt;          <a href="http://www.vlsci.unimelb.edu.au/">http://www.vlsci.unimelb.edu.au/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----BEGIN PGP SIGNATURE-----
</span><br>
<span class="quotelev1">&gt; Version: GnuPG v1.4.10 (GNU/Linux)
</span><br>
<span class="quotelev1">&gt; Comment: Using GnuPG with Mozilla - <a href="http://enigmail.mozdev.org/">http://enigmail.mozdev.org/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; iEYEARECAAYFAkzn884ACgkQO2KABBYQAh+jAQCggP+izYq3rkSo1hPzADi2vCEI
</span><br>
<span class="quotelev1">&gt; z2QAmwX5oEYpgYYlc6ZWC3Pr3q1dBGp/
</span><br>
<span class="quotelev1">&gt; =2KB+
</span><br>
<span class="quotelev1">&gt; -----END PGP SIGNATURE-----
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
<li><strong>Next message:</strong> <a href="8690.php">Joshua Hursey: "[OMPI devel] Fwd: [all-osl-users] Fwd: Servers reboot on Wednesday (11/24) morning	starting at 8:00"</a>
<li><strong>Previous message:</strong> <a href="8688.php">Christopher Samuel: "[OMPI devel] FlowChecker: Detecting Bugs in MPI Libraries via Message Flow Checking"</a>
<li><strong>In reply to:</strong> <a href="8688.php">Christopher Samuel: "[OMPI devel] FlowChecker: Detecting Bugs in MPI Libraries via Message Flow Checking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8696.php">George Bosilca: "Re: [OMPI devel] FlowChecker: Detecting Bugs in MPI Libraries via Message Flow Checking"</a>
<li><strong>Reply:</strong> <a href="8696.php">George Bosilca: "Re: [OMPI devel] FlowChecker: Detecting Bugs in MPI Libraries via Message Flow Checking"</a>
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
