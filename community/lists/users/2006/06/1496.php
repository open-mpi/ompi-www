<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jun 29 12:59:04 2006" -->
<!-- isoreceived="20060629165904" -->
<!-- sent="Thu, 29 Jun 2006 12:59:05 -0400" -->
<!-- isosent="20060629165905" -->
<!-- name="Jeff Squyres \(jsquyres\)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Why does it suddenly not run?" -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AFAE9C17_at_xmb-rtp-215.amer.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] Why does it suddenly not run?" -->
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
<strong>From:</strong> Jeff Squyres \(jsquyres\) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-29 12:59:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1497.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] mpirun and ncurses"</a>
<li><strong>Previous message:</strong> <a href="1495.php">Galen M. Shipman: "Re: [OMPI users] Error Polling HP CQ Status on PPC64 LInux with IB"</a>
<li><strong>Maybe in reply to:</strong> <a href="1394.php">Jens Klostermann: "[OMPI users] Why does it suddenly not run?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jens --
<br>
<p>I'm trolling through old e-mails on this list and it doesn't look like
<br>
you ever got an answer to this message.
<br>
<p>Did you ever figure out the problem?
<br>
&nbsp;
<br>
<p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Jens Klostermann
</span><br>
<span class="quotelev1">&gt; Sent: Monday, June 12, 2006 10:51 AM
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] Why does it suddenly not run?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This morning I was running 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun -v --mca btl mvapi,self -np 12 --hostfile ompimachinefile
</span><br>
<span class="quotelev1">&gt; oodles . les_test1100k -parallel &gt;&gt; ./les_test1100k/log12 &amp;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; with openmpi-1.2a1r10111 and everything worked and still works as
</span><br>
<span class="quotelev1">&gt; expected.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now I tried to start a second (very same) job with the following error
</span><br>
<span class="quotelev1">&gt; message as a result:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [stokes:29489] [0,0,0] ORTE_ERROR_LOG: Error in file
</span><br>
<span class="quotelev1">&gt; runtime/orte_init_stage1.c at line 302
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ------------
</span><br>
<span class="quotelev1">&gt; It looks like orte_init failed for some reason; your parallel 
</span><br>
<span class="quotelev1">&gt; process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev1">&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev1">&gt; Open MPI developer):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   orte_session_dir failed
</span><br>
<span class="quotelev1">&gt;   --&gt; Returned value -1 instead of ORTE_SUCCESS
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ------------
</span><br>
<span class="quotelev1">&gt; [stokes:29489] [0,0,0] ORTE_ERROR_LOG: Error in file
</span><br>
<span class="quotelev1">&gt; runtime/orte_system_init.c at line 42
</span><br>
<span class="quotelev1">&gt; [stokes:29489] [0,0,0] ORTE_ERROR_LOG: Error in file 
</span><br>
<span class="quotelev1">&gt; runtime/orte_init.c
</span><br>
<span class="quotelev1">&gt; at line 49
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ------------
</span><br>
<span class="quotelev1">&gt; Open RTE was unable to initialize properly.  The error occured while
</span><br>
<span class="quotelev1">&gt; attempting to orte_init().  Returned value -1 instead of ORTE_SUCCESS.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Has anybody an idea what the error might be or how to trag it down?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards Jens
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="1497.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] mpirun and ncurses"</a>
<li><strong>Previous message:</strong> <a href="1495.php">Galen M. Shipman: "Re: [OMPI users] Error Polling HP CQ Status on PPC64 LInux with IB"</a>
<li><strong>Maybe in reply to:</strong> <a href="1394.php">Jens Klostermann: "[OMPI users] Why does it suddenly not run?"</a>
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
