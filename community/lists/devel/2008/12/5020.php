<?
$subject_val = "Re: [OMPI devel] Forwarding SIGTSTP and SIGCONT";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec  8 11:11:48 2008" -->
<!-- isoreceived="20081208161148" -->
<!-- sent="Mon, 8 Dec 2008 09:11:41 -0700" -->
<!-- isosent="20081208161141" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Forwarding SIGTSTP and SIGCONT" -->
<!-- id="922038D8-2503-4281-BBB9-674841C00A82_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49397A5A.1030306_at_Sun.COM" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Forwarding SIGTSTP and SIGCONT<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-08 11:11:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5021.php">Ralph Castain: "Re: [OMPI devel] orte_default_hostfile"</a>
<li><strong>Previous message:</strong> <a href="5019.php">Ralf Wildenhues: "Re: [OMPI devel] make dependency problem?"</a>
<li><strong>In reply to:</strong> <a href="5016.php">Rolf Vandevaart: "[OMPI devel] Forwarding SIGTSTP and SIGCONT"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5039.php">Jeff Squyres: "Re: [OMPI devel] Forwarding SIGTSTP and SIGCONT"</a>
<li><strong>Reply:</strong> <a href="5039.php">Jeff Squyres: "Re: [OMPI devel] Forwarding SIGTSTP and SIGCONT"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It sounds reasonable to me. I agree with Ralf W about having mpirun  
<br>
send a STOP to itself - that would seem to solve the problem about  
<br>
stopping everything.
<br>
<p>It would seem, however, that you cannot similarly STOP the daemons or  
<br>
else you won't be able to CONT the job. I'm not sure how big a deal  
<br>
that is - I can't think of any issue it creates offhand.
<br>
<p>Is there any issue in the MPI comm layers if you abruptly STOP a  
<br>
process while it's communicating? Especially since the STOP is going  
<br>
to be asynchronous. Do you need to quiet networks like IB first?
<br>
<p>Ralph
<br>
<p><p>On Dec 5, 2008, at 12:00 PM, Rolf Vandevaart wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We have had requests to be able to suspend/resume MPI jobs within an  
</span><br>
<span class="quotelev1">&gt; SGE environment.  SGE sends a signal (which is configurable) to  
</span><br>
<span class="quotelev1">&gt; mpirun to stop the job and another signal to resume it.  To support  
</span><br>
<span class="quotelev1">&gt; this, I propose that we add support in the ORTE to catch SIGTSTP/ 
</span><br>
<span class="quotelev1">&gt; SIGCONT and forward these to the a.outs.  Actually, SIGTSTP will be  
</span><br>
<span class="quotelev1">&gt; caught, forwarded, then converted to SIGSTOP before being delivered  
</span><br>
<span class="quotelev1">&gt; to the a.outs.  The one disadvantage is that we have overridden the  
</span><br>
<span class="quotelev1">&gt; SIGTSTP default behavior which is typically to stop mpirun.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does anyone else have a requirement like this or does anyone have  
</span><br>
<span class="quotelev1">&gt; issues with these changes?  FWIW, I know there is at least one other  
</span><br>
<span class="quotelev1">&gt; MPI that supports this type of behavior.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; One problem is that with SIGTSTP no longer delivering a stop signal  
</span><br>
<span class="quotelev1">&gt; to mpirun, one cannot CTRL-Z at their terminal to stop mpirun.  I am  
</span><br>
<span class="quotelev1">&gt; trying to figure out how big a problem that is.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Rolf
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PS: Here are the possible code changes.  Not too major.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; burl-ct-v440-2 62 =&gt;svn diff
</span><br>
<span class="quotelev1">&gt; Index: orte/tools/orterun/orterun.c
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- orte/tools/orterun/orterun.c        (revision 20072)
</span><br>
<span class="quotelev1">&gt; +++ orte/tools/orterun/orterun.c        (working copy)
</span><br>
<span class="quotelev1">&gt; @@ -99,6 +99,8 @@
</span><br>
<span class="quotelev1">&gt; #ifndef __WINDOWS__
</span><br>
<span class="quotelev1">&gt; static struct opal_event sigusr1_handler;
</span><br>
<span class="quotelev1">&gt; static struct opal_event sigusr2_handler;
</span><br>
<span class="quotelev1">&gt; +static struct opal_event sigtstp_handler;
</span><br>
<span class="quotelev1">&gt; +static struct opal_event sigcont_handler;
</span><br>
<span class="quotelev1">&gt; #endif  /* __WINDOWS__ */
</span><br>
<span class="quotelev1">&gt; static orte_job_t *jdata;
</span><br>
<span class="quotelev1">&gt; static char *orterun_basename = NULL;
</span><br>
<span class="quotelev1">&gt; @@ -511,6 +513,12 @@
</span><br>
<span class="quotelev1">&gt;     opal_signal_set(&amp;sigusr2_handler, SIGUSR2,
</span><br>
<span class="quotelev1">&gt;                     signal_forward_callback, &amp;sigusr2_handler);
</span><br>
<span class="quotelev1">&gt;     opal_signal_add(&amp;sigusr2_handler, NULL);
</span><br>
<span class="quotelev1">&gt; +    opal_signal_set(&amp;sigtstp_handler, SIGTSTP,
</span><br>
<span class="quotelev1">&gt; +                    signal_forward_callback, &amp;sigtstp_handler);
</span><br>
<span class="quotelev1">&gt; +    opal_signal_add(&amp;sigtstp_handler, NULL);
</span><br>
<span class="quotelev1">&gt; +    opal_signal_set(&amp;sigcont_handler, SIGCONT,
</span><br>
<span class="quotelev1">&gt; +                    signal_forward_callback, &amp;sigcont_handler);
</span><br>
<span class="quotelev1">&gt; +    opal_signal_add(&amp;sigcont_handler, NULL);
</span><br>
<span class="quotelev1">&gt; #endif  /* __WINDOWS__ */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     /* we are an hnp, so update the contact info field for later use  
</span><br>
<span class="quotelev1">&gt; */
</span><br>
<span class="quotelev1">&gt; @@ -763,6 +771,8 @@
</span><br>
<span class="quotelev1">&gt;     /** Remove the USR signal handlers */
</span><br>
<span class="quotelev1">&gt;     opal_signal_del(&amp;sigusr1_handler);
</span><br>
<span class="quotelev1">&gt;     opal_signal_del(&amp;sigusr2_handler);
</span><br>
<span class="quotelev1">&gt; +    opal_signal_del(&amp;sigtstp_handler);
</span><br>
<span class="quotelev1">&gt; +    opal_signal_del(&amp;sigcont_handler);
</span><br>
<span class="quotelev1">&gt; #endif  /* __WINDOWS__ */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     /* get the daemon job object */
</span><br>
<span class="quotelev1">&gt; Index: orte/orted/orted_comm.c
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- orte/orted/orted_comm.c     (revision 20072)
</span><br>
<span class="quotelev1">&gt; +++ orte/orted/orted_comm.c     (working copy)
</span><br>
<span class="quotelev1">&gt; @@ -457,10 +457,6 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         /****    SIGNAL_LOCAL_PROCS   ****/
</span><br>
<span class="quotelev1">&gt;         case ORTE_DAEMON_SIGNAL_LOCAL_PROCS:
</span><br>
<span class="quotelev1">&gt; -            if (orte_debug_daemons_flag) {
</span><br>
<span class="quotelev1">&gt; -                opal_output(0, &quot;%s orted_cmd: received  
</span><br>
<span class="quotelev1">&gt; signal_local_procs&quot;,
</span><br>
<span class="quotelev1">&gt; -                            ORTE_NAME_PRINT(ORTE_PROC_MY_NAME));
</span><br>
<span class="quotelev1">&gt; -            }
</span><br>
<span class="quotelev1">&gt;             /* unpack the jobid */
</span><br>
<span class="quotelev1">&gt;             n = 1;
</span><br>
<span class="quotelev1">&gt;             if (ORTE_SUCCESS != (ret = opal_dss.unpack(buffer, &amp;job,  
</span><br>
<span class="quotelev1">&gt; &amp;n, ORTE_JOBID))) {
</span><br>
<span class="quotelev1">&gt; @@ -474,7 +470,22 @@
</span><br>
<span class="quotelev1">&gt;                 ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev1">&gt;                 goto CLEANUP;
</span><br>
<span class="quotelev1">&gt;             }
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +            /* Convert SIGTSTP to SIGSTOP so we can suspend a.out */
</span><br>
<span class="quotelev1">&gt; +            if (SIGTSTP == signal) {
</span><br>
<span class="quotelev1">&gt; +                if (orte_debug_daemons_flag) {
</span><br>
<span class="quotelev1">&gt; +                    opal_output(0, &quot;%s orted_cmd: converted SIGTSTP  
</span><br>
<span class="quotelev1">&gt; to SIGSTOP before delivering&quot;,
</span><br>
<span class="quotelev1">&gt; +                                ORTE_NAME_PRINT(ORTE_PROC_MY_NAME));
</span><br>
<span class="quotelev1">&gt; +                }
</span><br>
<span class="quotelev1">&gt; +                signal = SIGSTOP;
</span><br>
<span class="quotelev1">&gt; +            }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +            if (orte_debug_daemons_flag) {
</span><br>
<span class="quotelev1">&gt; +                opal_output(0, &quot;%s orted_cmd: received  
</span><br>
<span class="quotelev1">&gt; signal_local_procs, delivering signal %d&quot;,
</span><br>
<span class="quotelev1">&gt; +                            ORTE_NAME_PRINT(ORTE_PROC_MY_NAME),
</span><br>
<span class="quotelev1">&gt; +                            signal);
</span><br>
<span class="quotelev1">&gt; +            }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;             /* signal them */
</span><br>
<span class="quotelev1">&gt;             if (ORTE_SUCCESS != (ret =  
</span><br>
<span class="quotelev1">&gt; orte_odls.signal_local_procs(NULL, signal))) {
</span><br>
<span class="quotelev1">&gt;                 ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev1">&gt; burl-ct-v440-2 63 =&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; =========================
</span><br>
<span class="quotelev1">&gt; rolf.vandevaart_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 781-442-3043
</span><br>
<span class="quotelev1">&gt; =========================
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
<li><strong>Next message:</strong> <a href="5021.php">Ralph Castain: "Re: [OMPI devel] orte_default_hostfile"</a>
<li><strong>Previous message:</strong> <a href="5019.php">Ralf Wildenhues: "Re: [OMPI devel] make dependency problem?"</a>
<li><strong>In reply to:</strong> <a href="5016.php">Rolf Vandevaart: "[OMPI devel] Forwarding SIGTSTP and SIGCONT"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5039.php">Jeff Squyres: "Re: [OMPI devel] Forwarding SIGTSTP and SIGCONT"</a>
<li><strong>Reply:</strong> <a href="5039.php">Jeff Squyres: "Re: [OMPI devel] Forwarding SIGTSTP and SIGCONT"</a>
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
