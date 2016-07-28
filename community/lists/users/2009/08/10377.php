<?
$subject_val = "Re: [OMPI users] rank file error: Rankfile claimed...";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 17 05:20:40 2009" -->
<!-- isoreceived="20090817092040" -->
<!-- sent="Mon, 17 Aug 2009 12:20:34 +0300" -->
<!-- isosent="20090817092034" -->
<!-- name="Lenny Verkhovsky" -->
<!-- email="lenny.verkhovsky_at_[hidden]" -->
<!-- subject="Re: [OMPI users] rank file error: Rankfile claimed..." -->
<!-- id="453d39990908170220n32edc0bdr6aa681b935eb3190_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="9b0da5ce0908170036xcaafb05yc1f7989d85eea6dd_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] rank file error: Rankfile claimed...<br>
<strong>From:</strong> Lenny Verkhovsky (<em>lenny.verkhovsky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-17 05:20:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10378.php">jody: "Re: [OMPI users] rank file error: Rankfile claimed..."</a>
<li><strong>Previous message:</strong> <a href="10376.php">jody: "[OMPI users] rank file error: Rankfile claimed..."</a>
<li><strong>In reply to:</strong> <a href="10376.php">jody: "[OMPI users] rank file error: Rankfile claimed..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10378.php">jody: "Re: [OMPI users] rank file error: Rankfile claimed..."</a>
<li><strong>Reply:</strong> <a href="10378.php">jody: "Re: [OMPI users] rank file error: Rankfile claimed..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
This message means
<br>
that you are trying to use host &quot;plankton&quot;, that was not allocated via
<br>
hostfile or hostlist.
<br>
But according to the files and command line, everything seems fine.
<br>
Can you try using &quot;plankton.uzh.ch&quot; hostname instead of &quot;plankton&quot;.
<br>
thanks
<br>
Lenny.
<br>
<p>On Mon, Aug 17, 2009 at 10:36 AM, jody &lt;jody.xha_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When i use a rankfile, i get an error message which i don't understand:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [jody_at_plankton tests]$ mpirun -np 3 -rf rankfile -hostfile testhosts
</span><br>
<span class="quotelev1">&gt; ./HelloMPI
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Rankfile claimed host plankton that was not allocated or
</span><br>
<span class="quotelev1">&gt; oversubscribed it's slots:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [plankton.uzh.ch:24327] [[44857,0],0] ORTE_ERROR_LOG: Bad parameter in
</span><br>
<span class="quotelev1">&gt; file rmaps_rank_file.c at line 108
</span><br>
<span class="quotelev1">&gt; [plankton.uzh.ch:24327] [[44857,0],0] ORTE_ERROR_LOG: Bad parameter in
</span><br>
<span class="quotelev1">&gt; file base/rmaps_base_map_job.c at line 87
</span><br>
<span class="quotelev1">&gt; [plankton.uzh.ch:24327] [[44857,0],0] ORTE_ERROR_LOG: Bad parameter in
</span><br>
<span class="quotelev1">&gt; file base/plm_base_launch_support.c at line 77
</span><br>
<span class="quotelev1">&gt; [plankton.uzh.ch:24327] [[44857,0],0] ORTE_ERROR_LOG: Bad parameter in
</span><br>
<span class="quotelev1">&gt; file plm_rsh_module.c at line 990
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; A daemon (pid unknown) died unexpectedly on signal 1  while attempting to
</span><br>
<span class="quotelev1">&gt; launch so we are aborting.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There may be more information reported by the environment (see above).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This may be because the daemon was unable to find all the needed shared
</span><br>
<span class="quotelev1">&gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to have the
</span><br>
<span class="quotelev1">&gt; location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev1">&gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev1">&gt; that caused that situation.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun: clean termination accomplished
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; With out the '-rf rankfile' option everything works as expected.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My hostfile :
</span><br>
<span class="quotelev1">&gt; [jody_at_plankton tests]$ cat testhosts
</span><br>
<span class="quotelev1">&gt; # The following node is a quad-processor machine, and we absolutely
</span><br>
<span class="quotelev1">&gt; # want to disallow over-subscribing it:
</span><br>
<span class="quotelev1">&gt; plankton slots=3  max-slots=3
</span><br>
<span class="quotelev1">&gt; # The following nodes are dual-processor machines:
</span><br>
<span class="quotelev1">&gt; nano_00  slots=2 max-slots=2
</span><br>
<span class="quotelev1">&gt; nano_01  slots=2 max-slots=2
</span><br>
<span class="quotelev1">&gt; nano_02  slots=2 max-slots=2
</span><br>
<span class="quotelev1">&gt; nano_03  slots=2 max-slots=2
</span><br>
<span class="quotelev1">&gt; nano_04  slots=2 max-slots=2
</span><br>
<span class="quotelev1">&gt; nano_05  slots=2 max-slots=2
</span><br>
<span class="quotelev1">&gt; nano_06  slots=2 max-slots=2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; my rank file:
</span><br>
<span class="quotelev1">&gt; [jody_at_plankton neander]$ cat rankfile
</span><br>
<span class="quotelev1">&gt; rank  0=nano_00  slot=1
</span><br>
<span class="quotelev1">&gt; rank  1=plankton slot=0
</span><br>
<span class="quotelev1">&gt; rank  2=nano_01  slot=1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; my Open MPI version: 1.3.2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i get the same error if i use a rankfile which has a single line
</span><br>
<span class="quotelev1">&gt;  rank  0=plankton  slot=0
</span><br>
<span class="quotelev1">&gt; (plankton is my local machine) and call mpirun with np 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What does the &quot;Rankfile claimed...&quot; message mean?
</span><br>
<span class="quotelev1">&gt; Did i make an error in my rankfile?
</span><br>
<span class="quotelev1">&gt; If yes, what would be the correct way to write it?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank You
</span><br>
<span class="quotelev1">&gt;   Jody
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10377/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10378.php">jody: "Re: [OMPI users] rank file error: Rankfile claimed..."</a>
<li><strong>Previous message:</strong> <a href="10376.php">jody: "[OMPI users] rank file error: Rankfile claimed..."</a>
<li><strong>In reply to:</strong> <a href="10376.php">jody: "[OMPI users] rank file error: Rankfile claimed..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10378.php">jody: "Re: [OMPI users] rank file error: Rankfile claimed..."</a>
<li><strong>Reply:</strong> <a href="10378.php">jody: "Re: [OMPI users] rank file error: Rankfile claimed..."</a>
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
