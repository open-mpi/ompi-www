<?
$subject_val = "Re: [OMPI devel] RFC: Resilient ORTE";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 23 15:34:27 2011" -->
<!-- isoreceived="20110623193427" -->
<!-- sent="Thu, 23 Jun 2011 15:34:21 -0400" -->
<!-- isosent="20110623193421" -->
<!-- name="Wesley Bland" -->
<!-- email="wbland_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Resilient ORTE" -->
<!-- id="3FEAAE795C10486B9851D1C749A9BD07_at_gmail.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="BB7173B3-4369-4F0B-B768-E018E676A005_at_open-mpi.org" -->
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
<strong>From:</strong> Wesley Bland (<em>wbland_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-23 15:34:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9407.php">Josh Hursey: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>Previous message:</strong> <a href="9405.php">Ralph Castain: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>In reply to:</strong> <a href="9405.php">Ralph Castain: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9407.php">Josh Hursey: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>Reply:</strong> <a href="9407.php">Josh Hursey: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Right. Sorry I misspoke.
<br>
<p>On Thursday, June 23, 2011 at 3:32 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Ummm...just to clarify. There are no threads in ORTE, so it wasn't a problem of &quot;not giving up the thread&quot;. The problem was that Josh's test never called progress. It would have been equally okay to simply call &quot;opal_event_dispatch&quot; while waiting for the callback.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; All applications have to cycle the progress engine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jun 23, 2011, at 1:18 PM, Wesley Bland wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Josh,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; There were a couple of bugs that I cleared up in my most recent checkin, but I also needed to modify your test. The callback for the application layer errmgr actually occurs in the application layer. Your test was never giving up the thread to the ORTE application event loop to receive its message from the ORTED. I changed your while loop to an ORTE_PROGRESSED_WAIT and that fixed the problem.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Try running the attached code with the modifications and see if that clears up the problem. It did for me.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Thanks,
</span><br>
<span class="quotelev2">&gt; &gt; Wesley
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Thursday, June 23, 2011 at 10:16 AM, Josh Hursey wrote:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; So I finally got a chance to test the branch this morning. I cannot
</span><br>
<span class="quotelev3">&gt; &gt; &gt; get it to work. Maybe I'm doing some wrong, missing some MCA
</span><br>
<span class="quotelev3">&gt; &gt; &gt; parameter?
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -------------------------
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [jjhursey_at_smoky-login1 resilient-orte] hg summary
</span><br>
<span class="quotelev3">&gt; &gt; &gt; parent: 2:c550cf6ed6a2 tip
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  Newest version. Synced with trunk r24785.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; branch: default
</span><br>
<span class="quotelev3">&gt; &gt; &gt; commit: 1 modified, 8097 unknown
</span><br>
<span class="quotelev3">&gt; &gt; &gt; update: (current)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -------------------------
</span><br>
<span class="quotelev3">&gt; &gt; &gt; (the 1 modified was the test program attached)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Attached is a modified version of the orte_abort.c program found in
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ${top}/orte/test/system. This program is ORTE only, and registers the
</span><br>
<span class="quotelev3">&gt; &gt; &gt; errmgr callback to trigger correct termination. You will need to
</span><br>
<span class="quotelev3">&gt; &gt; &gt; configure Open MPI with '--with-devel-headers' to build this. But then
</span><br>
<span class="quotelev3">&gt; &gt; &gt; you can compile with:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  ortecc -g orte_abort.c -o orte_abort
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; These are the configure options that I used:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  --with-devel-headers --enable-binaries --disable-io-romio
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --enable-contrib-no-build=vt --enable-debug CC=gcc CXX=g++
</span><br>
<span class="quotelev3">&gt; &gt; &gt; F77=gfortran FC=gfortran
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; If the HNP has no processes on it - I get a hang:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -------------------------------
</span><br>
<span class="quotelev3">&gt; &gt; &gt; mpirun -np 4 --nolocal orte_abort
</span><br>
<span class="quotelev3">&gt; &gt; &gt; orte_abort: Name [[60121,1],0,0] Host: smoky13 Pid 3688 -- Initalized
</span><br>
<span class="quotelev3">&gt; &gt; &gt; orte_abort: Name [[60121,1],1,0] Host: smoky13 Pid 3689 -- Initalized
</span><br>
<span class="quotelev3">&gt; &gt; &gt; orte_abort: Name [[60121,1],2,0] Host: smoky13 Pid 3690 -- Initalized
</span><br>
<span class="quotelev3">&gt; &gt; &gt; orte_abort: Name [[60121,1],3,0] Host: smoky13 Pid 3691 -- Initalized
</span><br>
<span class="quotelev3">&gt; &gt; &gt; orte_abort: Name [[60121,1],3,0] Host: smoky13 Pid 3691 -- Calling Abort
</span><br>
<span class="quotelev3">&gt; &gt; &gt; mpirun: killing job...
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [smoky14:04002] [[60121,0],0,0] ORTE_ERROR_LOG: Data unpack would read
</span><br>
<span class="quotelev3">&gt; &gt; &gt; past end of buffer in file errmgr_hnp.c at line 824
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [smoky14:04002] [[60121,0],0,0] ORTE_ERROR_LOG: Data unpack would read
</span><br>
<span class="quotelev3">&gt; &gt; &gt; past end of buffer in file orted/orted_comm.c at line 1341
</span><br>
<span class="quotelev3">&gt; &gt; &gt; mpirun: abort is already in progress...hit ctrl-c again to forcibly terminate
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [jjhursey_at_smoky14 system] echo $?
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 1
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -------------------------------
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; If the HNP has processes on it, but not the one that aborted - I get a hang:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -------------------------------
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [jjhursey_at_smoky14 system] mpirun -np 4 --npernode 2 orte_abort
</span><br>
<span class="quotelev3">&gt; &gt; &gt; orte_abort: Name [[60302,1],0,0] Host: smoky14 Pid 3830 -- Initalized
</span><br>
<span class="quotelev3">&gt; &gt; &gt; orte_abort: Name [[60302,1],1,0] Host: smoky14 Pid 3831 -- Initalized
</span><br>
<span class="quotelev3">&gt; &gt; &gt; orte_abort: Name [[60302,1],2,0] Host: smoky13 Pid 3484 -- Initalized
</span><br>
<span class="quotelev3">&gt; &gt; &gt; orte_abort: Name [[60302,1],3,0] Host: smoky13 Pid 3485 -- Initalized
</span><br>
<span class="quotelev3">&gt; &gt; &gt; orte_abort: Name [[60302,1],3,0] Host: smoky13 Pid 3485 -- Calling Abort
</span><br>
<span class="quotelev3">&gt; &gt; &gt; mpirun: killing job...
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [smoky14:03829] [[60302,0],0,0]-[[60302,1],1,0] mca_oob_tcp_msg_recv:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; readv failed: Connection reset by peer (104)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [smoky14:03829] [[60302,0],0,0]-[[60302,1],0,0] mca_oob_tcp_msg_recv:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; readv failed: Connection reset by peer (104)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [smoky14:03829] [[60302,0],0,0] ORTE_ERROR_LOG: Data unpack would read
</span><br>
<span class="quotelev3">&gt; &gt; &gt; past end of buffer in file errmgr_hnp.c at line 824
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [smoky14:03829] [[60302,0],0,0] ORTE_ERROR_LOG: Data unpack would read
</span><br>
<span class="quotelev3">&gt; &gt; &gt; past end of buffer in file orted/orted_comm.c at line 1341
</span><br>
<span class="quotelev3">&gt; &gt; &gt; mpirun: abort is already in progress...hit ctrl-c again to forcibly terminate
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [jjhursey_at_smoky14 system] echo $?
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 1
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --------------------------------
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; If the HNP has processes on it, and it is the one that aborted - I get
</span><br>
<span class="quotelev3">&gt; &gt; &gt; immediate return, but no callback:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --------------------------------
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [jjhursey_at_smoky14 system] mpirun -np 4 --npernode 4 orte_abort
</span><br>
<span class="quotelev3">&gt; &gt; &gt; orte_abort: Name [[60292,1],0,0] Host: smoky14 Pid 3840 -- Initalized
</span><br>
<span class="quotelev3">&gt; &gt; &gt; orte_abort: Name [[60292,1],1,0] Host: smoky14 Pid 3841 -- Initalized
</span><br>
<span class="quotelev3">&gt; &gt; &gt; orte_abort: Name [[60292,1],2,0] Host: smoky14 Pid 3842 -- Initalized
</span><br>
<span class="quotelev3">&gt; &gt; &gt; orte_abort: Name [[60292,1],3,0] Host: smoky14 Pid 3843 -- Initalized
</span><br>
<span class="quotelev3">&gt; &gt; &gt; orte_abort: Name [[60292,1],3,0] Host: smoky14 Pid 3843 -- Calling Abort
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [jjhursey_at_smoky14 system] echo $?
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 3
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --------------------------------
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Any ideas on what I might be doing wrong?
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I tried with both calling 'orte_errmgr.abort(ORTE_PROC_MY_NAME-&gt;vpid,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; NULL);' and 'kill(getpid(), SIGKILL);' and got the same behavior.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -- Josh
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Thu, Jun 23, 2011 at 9:58 AM, Wesley Bland &lt;wbland_at_[hidden] (mailto:wbland_at_[hidden])&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Last reminder (I hope). RFC goes in a COB today.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Wesley
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; devel mailing list
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; devel_at_[hidden] (mailto:devel_at_[hidden])
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -- 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Joshua Hursey
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Postdoctoral Research Associate
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Oak Ridge National Laboratory
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; devel_at_[hidden] (mailto:devel_at_[hidden])
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Attachments: 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; - orte_abort.c
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &lt;orte_abort.c&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden] (mailto:devel_at_[hidden])
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden] (mailto:devel_at_[hidden])
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9406/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9407.php">Josh Hursey: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>Previous message:</strong> <a href="9405.php">Ralph Castain: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>In reply to:</strong> <a href="9405.php">Ralph Castain: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9407.php">Josh Hursey: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>Reply:</strong> <a href="9407.php">Josh Hursey: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
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
