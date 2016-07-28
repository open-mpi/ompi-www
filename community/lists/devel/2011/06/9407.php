<?
$subject_val = "Re: [OMPI devel] RFC: Resilient ORTE";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 23 15:56:24 2011" -->
<!-- isoreceived="20110623195624" -->
<!-- sent="Thu, 23 Jun 2011 15:56:16 -0400" -->
<!-- isosent="20110623195616" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Resilient ORTE" -->
<!-- id="BANLkTim4r9s+QnHW1z3-sa-uV5jQmhw4dw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="3FEAAE795C10486B9851D1C749A9BD07_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Resilient ORTE<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-23 15:56:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9408.php">Ralf Wildenhues: "Re: [OMPI devel] Compiling problem in trunk?"</a>
<li><strong>Previous message:</strong> <a href="9406.php">Wesley Bland: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>In reply to:</strong> <a href="9406.php">Wesley Bland: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9409.php">Wesley Bland: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ga - what a rookie mistake :)
<br>
<p>I tested the patched test and it works as advertised for the small
<br>
scale tests I used before. So I'm good with this going in today.
<br>
<p>Thanks,
<br>
Josh
<br>
<p>On Thu, Jun 23, 2011 at 3:34 PM, Wesley Bland &lt;wbland_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Right. Sorry I misspoke.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thursday, June 23, 2011 at 3:32 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ummm...just to clarify. There are no threads in ORTE, so it wasn't a problem
</span><br>
<span class="quotelev1">&gt; of &quot;not giving up the thread&quot;. The problem was that Josh's test never called
</span><br>
<span class="quotelev1">&gt; progress. It would have been equally okay to simply call
</span><br>
<span class="quotelev1">&gt; &quot;opal_event_dispatch&quot; while waiting for the callback.
</span><br>
<span class="quotelev1">&gt; All applications have to cycle the progress engine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 23, 2011, at 1:18 PM, Wesley Bland wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Josh,
</span><br>
<span class="quotelev1">&gt; There were a couple of bugs that I cleared up in my most recent checkin, but
</span><br>
<span class="quotelev1">&gt; I also needed to modify your test. The callback for the application layer
</span><br>
<span class="quotelev1">&gt; errmgr actually occurs in the application layer. Your test was never giving
</span><br>
<span class="quotelev1">&gt; up the thread to the ORTE application event loop to receive its message from
</span><br>
<span class="quotelev1">&gt; the ORTED. I changed your while loop to an ORTE_PROGRESSED_WAIT and that
</span><br>
<span class="quotelev1">&gt; fixed the problem.
</span><br>
<span class="quotelev1">&gt; Try running the attached code with the modifications and see if that clears
</span><br>
<span class="quotelev1">&gt; up the problem. It did for me.
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Wesley
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thursday, June 23, 2011 at 10:16 AM, Josh Hursey wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So I finally got a chance to test the branch this morning. I cannot
</span><br>
<span class="quotelev1">&gt; get it to work. Maybe I'm doing some wrong, missing some MCA
</span><br>
<span class="quotelev1">&gt; parameter?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -------------------------
</span><br>
<span class="quotelev1">&gt; [jjhursey_at_smoky-login1 resilient-orte] hg summary
</span><br>
<span class="quotelev1">&gt; parent: 2:c550cf6ed6a2 tip
</span><br>
<span class="quotelev1">&gt; Newest version. Synced with trunk r24785.
</span><br>
<span class="quotelev1">&gt; branch: default
</span><br>
<span class="quotelev1">&gt; commit: 1 modified, 8097 unknown
</span><br>
<span class="quotelev1">&gt; update: (current)
</span><br>
<span class="quotelev1">&gt; -------------------------
</span><br>
<span class="quotelev1">&gt; (the 1 modified was the test program attached)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Attached is a modified version of the orte_abort.c program found in
</span><br>
<span class="quotelev1">&gt; ${top}/orte/test/system. This program is ORTE only, and registers the
</span><br>
<span class="quotelev1">&gt; errmgr callback to trigger correct termination. You will need to
</span><br>
<span class="quotelev1">&gt; configure Open MPI with '--with-devel-headers' to build this. But then
</span><br>
<span class="quotelev1">&gt; you can compile with:
</span><br>
<span class="quotelev1">&gt; ortecc -g orte_abort.c -o orte_abort
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; These are the configure options that I used:
</span><br>
<span class="quotelev1">&gt; --with-devel-headers --enable-binaries --disable-io-romio
</span><br>
<span class="quotelev1">&gt; --enable-contrib-no-build=vt --enable-debug CC=gcc CXX=g++
</span><br>
<span class="quotelev1">&gt; F77=gfortran FC=gfortran
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If the HNP has no processes on it - I get a hang:
</span><br>
<span class="quotelev1">&gt; -------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun -np 4 --nolocal orte_abort
</span><br>
<span class="quotelev1">&gt; orte_abort: Name [[60121,1],0,0] Host: smoky13 Pid 3688 -- Initalized
</span><br>
<span class="quotelev1">&gt; orte_abort: Name [[60121,1],1,0] Host: smoky13 Pid 3689 -- Initalized
</span><br>
<span class="quotelev1">&gt; orte_abort: Name [[60121,1],2,0] Host: smoky13 Pid 3690 -- Initalized
</span><br>
<span class="quotelev1">&gt; orte_abort: Name [[60121,1],3,0] Host: smoky13 Pid 3691 -- Initalized
</span><br>
<span class="quotelev1">&gt; orte_abort: Name [[60121,1],3,0] Host: smoky13 Pid 3691 -- Calling Abort
</span><br>
<span class="quotelev1">&gt; mpirun: killing job...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [smoky14:04002] [[60121,0],0,0] ORTE_ERROR_LOG: Data unpack would read
</span><br>
<span class="quotelev1">&gt; past end of buffer in file errmgr_hnp.c at line 824
</span><br>
<span class="quotelev1">&gt; [smoky14:04002] [[60121,0],0,0] ORTE_ERROR_LOG: Data unpack would read
</span><br>
<span class="quotelev1">&gt; past end of buffer in file orted/orted_comm.c at line 1341
</span><br>
<span class="quotelev1">&gt; mpirun: abort is already in progress...hit ctrl-c again to forcibly
</span><br>
<span class="quotelev1">&gt; terminate
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [jjhursey_at_smoky14 system] echo $?
</span><br>
<span class="quotelev1">&gt; 1
</span><br>
<span class="quotelev1">&gt; -------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If the HNP has processes on it, but not the one that aborted - I get a hang:
</span><br>
<span class="quotelev1">&gt; -------------------------------
</span><br>
<span class="quotelev1">&gt; [jjhursey_at_smoky14 system] mpirun -np 4 --npernode 2 orte_abort
</span><br>
<span class="quotelev1">&gt; orte_abort: Name [[60302,1],0,0] Host: smoky14 Pid 3830 -- Initalized
</span><br>
<span class="quotelev1">&gt; orte_abort: Name [[60302,1],1,0] Host: smoky14 Pid 3831 -- Initalized
</span><br>
<span class="quotelev1">&gt; orte_abort: Name [[60302,1],2,0] Host: smoky13 Pid 3484 -- Initalized
</span><br>
<span class="quotelev1">&gt; orte_abort: Name [[60302,1],3,0] Host: smoky13 Pid 3485 -- Initalized
</span><br>
<span class="quotelev1">&gt; orte_abort: Name [[60302,1],3,0] Host: smoky13 Pid 3485 -- Calling Abort
</span><br>
<span class="quotelev1">&gt; mpirun: killing job...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [smoky14:03829] [[60302,0],0,0]-[[60302,1],1,0] mca_oob_tcp_msg_recv:
</span><br>
<span class="quotelev1">&gt; readv failed: Connection reset by peer (104)
</span><br>
<span class="quotelev1">&gt; [smoky14:03829] [[60302,0],0,0]-[[60302,1],0,0] mca_oob_tcp_msg_recv:
</span><br>
<span class="quotelev1">&gt; readv failed: Connection reset by peer (104)
</span><br>
<span class="quotelev1">&gt; [smoky14:03829] [[60302,0],0,0] ORTE_ERROR_LOG: Data unpack would read
</span><br>
<span class="quotelev1">&gt; past end of buffer in file errmgr_hnp.c at line 824
</span><br>
<span class="quotelev1">&gt; [smoky14:03829] [[60302,0],0,0] ORTE_ERROR_LOG: Data unpack would read
</span><br>
<span class="quotelev1">&gt; past end of buffer in file orted/orted_comm.c at line 1341
</span><br>
<span class="quotelev1">&gt; mpirun: abort is already in progress...hit ctrl-c again to forcibly
</span><br>
<span class="quotelev1">&gt; terminate
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [jjhursey_at_smoky14 system] echo $?
</span><br>
<span class="quotelev1">&gt; 1
</span><br>
<span class="quotelev1">&gt; --------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If the HNP has processes on it, and it is the one that aborted - I get
</span><br>
<span class="quotelev1">&gt; immediate return, but no callback:
</span><br>
<span class="quotelev1">&gt; --------------------------------
</span><br>
<span class="quotelev1">&gt; [jjhursey_at_smoky14 system] mpirun -np 4 --npernode 4 orte_abort
</span><br>
<span class="quotelev1">&gt; orte_abort: Name [[60292,1],0,0] Host: smoky14 Pid 3840 -- Initalized
</span><br>
<span class="quotelev1">&gt; orte_abort: Name [[60292,1],1,0] Host: smoky14 Pid 3841 -- Initalized
</span><br>
<span class="quotelev1">&gt; orte_abort: Name [[60292,1],2,0] Host: smoky14 Pid 3842 -- Initalized
</span><br>
<span class="quotelev1">&gt; orte_abort: Name [[60292,1],3,0] Host: smoky14 Pid 3843 -- Initalized
</span><br>
<span class="quotelev1">&gt; orte_abort: Name [[60292,1],3,0] Host: smoky14 Pid 3843 -- Calling Abort
</span><br>
<span class="quotelev1">&gt; [jjhursey_at_smoky14 system] echo $?
</span><br>
<span class="quotelev1">&gt; 3
</span><br>
<span class="quotelev1">&gt; --------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any ideas on what I might be doing wrong?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tried with both calling 'orte_errmgr.abort(ORTE_PROC_MY_NAME-&gt;vpid,
</span><br>
<span class="quotelev1">&gt; NULL);' and 'kill(getpid(), SIGKILL);' and got the same behavior.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Jun 23, 2011 at 9:58 AM, Wesley Bland &lt;wbland_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Last reminder (I hope). RFC goes in a COB today.
</span><br>
<span class="quotelev1">&gt; Wesley
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Joshua Hursey
</span><br>
<span class="quotelev1">&gt; Postdoctoral Research Associate
</span><br>
<span class="quotelev1">&gt; Oak Ridge National Laboratory
</span><br>
<span class="quotelev1">&gt; <a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Attachments:
</span><br>
<span class="quotelev1">&gt; - orte_abort.c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;orte_abort.c&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Joshua Hursey
Postdoctoral Research Associate
Oak Ridge National Laboratory
<a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9408.php">Ralf Wildenhues: "Re: [OMPI devel] Compiling problem in trunk?"</a>
<li><strong>Previous message:</strong> <a href="9406.php">Wesley Bland: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>In reply to:</strong> <a href="9406.php">Wesley Bland: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9409.php">Wesley Bland: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
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
