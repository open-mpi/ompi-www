<?
$subject_val = "Re: [OMPI devel] FlowChecker: Detecting Bugs in MPI Libraries via Message Flow Checking";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 22 16:45:55 2010" -->
<!-- isoreceived="20101122214555" -->
<!-- sent="Mon, 22 Nov 2010 16:45:48 -0500" -->
<!-- isosent="20101122214548" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] FlowChecker: Detecting Bugs in MPI Libraries via Message Flow Checking" -->
<!-- id="1CF0DC55-38D7-4687-9869-2569D9E2138D_at_eecs.utk.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1290272894.17760.42.camel_at_cortex" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-22 16:45:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8697.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<li><strong>Previous message:</strong> <a href="8695.php">David Singleton: "Re: [OMPI devel] Change in OPAL / OMPI DPM system time during MPI_INIT"</a>
<li><strong>In reply to:</strong> <a href="8689.php">S&#233;bastien Boisvert: "Re: [OMPI devel] FlowChecker: Detecting Bugs in MPI Libraries via Message Flow Checking"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 20, 2010, at 12:08 , S&#233;bastien Boisvert wrote:
<br>
<p><span class="quotelev1">&gt; Sounds interesting !
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regarding my bug report, I don't think it is very important.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here's why:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; According to the standard MPI 2.2, Open-MPI is correct when blocking on
</span><br>
<span class="quotelev1">&gt; any MPI_Send. So, even if Open-MPI __should__ (according to its
</span><br>
<span class="quotelev1">&gt; documentation) send messages of 4096 bytes or less eagerly (with shared
</span><br>
<span class="quotelev1">&gt; memory), the opposite is compliant too.
</span><br>
<p>__should__ is not correct, __might__ is a better verb to describe the most &quot;common&quot; behavior for small messages. The problem comes from the fact that in each communicator the FIFO ordering is required by the MPI standard. As soon as there is any congestion, MPI_Send will block even for small messages (and this independent on the underlying network) until all he pending packets have been delivered.
<br>
<p><span class="quotelev1">&gt; What I have learn is that my program should be designed and implemented
</span><br>
<span class="quotelev1">&gt; according to MPI 2.2, not Open-MPI 1.4.3 or another implementation.
</span><br>
<p>Totally agree with this one ;)
<br>
<p>&nbsp;&nbsp;george.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sat, 2010-11-20 at 11:14 -0500, Christopher Samuel wrote:
</span><br>
<span class="quotelev2">&gt;&gt; -----BEGIN PGP SIGNED MESSAGE-----
</span><br>
<span class="quotelev2">&gt;&gt; Hash: SHA1
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi folks,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; At SC10 this year there was an interesting tool presented
</span><br>
<span class="quotelev2">&gt;&gt; as a student paper called &quot;FlowChecker: Detecting Bugs in
</span><br>
<span class="quotelev2">&gt;&gt; MPI Libraries via Message Flow Checking&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://sc10.supercomputing.org/schedule/event_detail.php?evid=pap352">http://sc10.supercomputing.org/schedule/event_detail.php?evid=pap352</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Basically they instrument a program and derive &quot;intentions&quot;
</span><br>
<span class="quotelev2">&gt;&gt; from your MPI calls and the MPI standard and also trace the
</span><br>
<span class="quotelev2">&gt;&gt; data flow (including things like memcpy) and messages.Then
</span><br>
<span class="quotelev2">&gt;&gt; offline you run a correlator which compares what was meant
</span><br>
<span class="quotelev2">&gt;&gt; to happen and what did and tries to root cause the fault.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; They claim to have taken 5 random closed bugs from 3 different
</span><br>
<span class="quotelev2">&gt;&gt; MPI implementations (including 3 from Open-MPI) and been able
</span><br>
<span class="quotelev2">&gt;&gt; to detect all 5 and root-cause 4 of them (the one they missed
</span><br>
<span class="quotelev2">&gt;&gt; was a data type issue).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The PDF of their paper is here:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cse.ohio-state.edu/~chenzhe/sc10-flowchecker.pdf">http://www.cse.ohio-state.edu/~chenzhe/sc10-flowchecker.pdf</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I've emailed them to see if the code is going to be available
</span><br>
<span class="quotelev2">&gt;&gt; as it could be quite a handy tool to have when trying to track
</span><br>
<span class="quotelev2">&gt;&gt; down issues like the one S&#233;bastien posted about.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; cheers,
</span><br>
<span class="quotelev2">&gt;&gt; Chris
</span><br>
<span class="quotelev2">&gt;&gt; - -- 
</span><br>
<span class="quotelev2">&gt;&gt; Christopher Samuel - Senior Systems Administrator
</span><br>
<span class="quotelev2">&gt;&gt; VLSCI - Victorian Life Sciences Computational Initiative
</span><br>
<span class="quotelev2">&gt;&gt; Email: samuel_at_[hidden] Phone: +61 (0)3 903 55545
</span><br>
<span class="quotelev2">&gt;&gt;         <a href="http://www.vlsci.unimelb.edu.au/">http://www.vlsci.unimelb.edu.au/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -----BEGIN PGP SIGNATURE-----
</span><br>
<span class="quotelev2">&gt;&gt; Version: GnuPG v1.4.10 (GNU/Linux)
</span><br>
<span class="quotelev2">&gt;&gt; Comment: Using GnuPG with Mozilla - <a href="http://enigmail.mozdev.org/">http://enigmail.mozdev.org/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; iEYEARECAAYFAkzn884ACgkQO2KABBYQAh+jAQCggP+izYq3rkSo1hPzADi2vCEI
</span><br>
<span class="quotelev2">&gt;&gt; z2QAmwX5oEYpgYYlc6ZWC3Pr3q1dBGp/
</span><br>
<span class="quotelev2">&gt;&gt; =2KB+
</span><br>
<span class="quotelev2">&gt;&gt; -----END PGP SIGNATURE-----
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="8697.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<li><strong>Previous message:</strong> <a href="8695.php">David Singleton: "Re: [OMPI devel] Change in OPAL / OMPI DPM system time during MPI_INIT"</a>
<li><strong>In reply to:</strong> <a href="8689.php">S&#233;bastien Boisvert: "Re: [OMPI devel] FlowChecker: Detecting Bugs in MPI Libraries via Message Flow Checking"</a>
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
