<?
$subject_val = "Re: [OMPI users] rank file error: Rankfile claimed...";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 17 05:59:28 2009" -->
<!-- isoreceived="20090817095928" -->
<!-- sent="Mon, 17 Aug 2009 11:59:23 +0200" -->
<!-- isosent="20090817095923" -->
<!-- name="jody" -->
<!-- email="jody.xha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] rank file error: Rankfile claimed..." -->
<!-- id="9b0da5ce0908170259q3aa0090cjfb6ad6be11e305c8_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="453d39990908170220n32edc0bdr6aa681b935eb3190_at_mail.gmail.com" -->
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
<strong>From:</strong> jody (<em>jody.xha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-17 05:59:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10379.php">Lenny Verkhovsky: "Re: [OMPI users] rank file error: Rankfile claimed..."</a>
<li><strong>Previous message:</strong> <a href="10377.php">Lenny Verkhovsky: "Re: [OMPI users] rank file error: Rankfile claimed..."</a>
<li><strong>In reply to:</strong> <a href="10377.php">Lenny Verkhovsky: "Re: [OMPI users] rank file error: Rankfile claimed..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10379.php">Lenny Verkhovsky: "Re: [OMPI users] rank file error: Rankfile claimed..."</a>
<li><strong>Reply:</strong> <a href="10379.php">Lenny Verkhovsky: "Re: [OMPI users] rank file error: Rankfile claimed..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Lenny
<br>
<p>Thanks - using the full names makes it work!
<br>
Is there a reason why the rankfile option treats
<br>
host names differently than the hostfile option?
<br>
<p>Thanks
<br>
&nbsp;&nbsp;Jody
<br>
<p><p><p>On Mon, Aug 17, 2009 at 11:20 AM, Lenny
<br>
Verkhovsky&lt;lenny.verkhovsky_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt; This message means
</span><br>
<span class="quotelev1">&gt; that you are trying to use host &quot;plankton&quot;, that was not allocated via
</span><br>
<span class="quotelev1">&gt; hostfile or hostlist.
</span><br>
<span class="quotelev1">&gt; But according to the files and command line, everything seems fine.
</span><br>
<span class="quotelev1">&gt; Can you try using &quot;plankton.uzh.ch&quot; hostname instead of &quot;plankton&quot;.
</span><br>
<span class="quotelev1">&gt; thanks
</span><br>
<span class="quotelev1">&gt; Lenny.
</span><br>
<span class="quotelev1">&gt; On Mon, Aug 17, 2009 at 10:36 AM, jody &lt;jody.xha_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When i use a rankfile, i get an error message which i don't understand:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [jody_at_plankton tests]$ mpirun -np 3 -rf rankfile -hostfile testhosts
</span><br>
<span class="quotelev2">&gt;&gt; ./HelloMPI
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Rankfile claimed host plankton that was not allocated or
</span><br>
<span class="quotelev2">&gt;&gt; oversubscribed it's slots:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; [plankton.uzh.ch:24327] [[44857,0],0] ORTE_ERROR_LOG: Bad parameter in
</span><br>
<span class="quotelev2">&gt;&gt; file rmaps_rank_file.c at line 108
</span><br>
<span class="quotelev2">&gt;&gt; [plankton.uzh.ch:24327] [[44857,0],0] ORTE_ERROR_LOG: Bad parameter in
</span><br>
<span class="quotelev2">&gt;&gt; file base/rmaps_base_map_job.c at line 87
</span><br>
<span class="quotelev2">&gt;&gt; [plankton.uzh.ch:24327] [[44857,0],0] ORTE_ERROR_LOG: Bad parameter in
</span><br>
<span class="quotelev2">&gt;&gt; file base/plm_base_launch_support.c at line 77
</span><br>
<span class="quotelev2">&gt;&gt; [plankton.uzh.ch:24327] [[44857,0],0] ORTE_ERROR_LOG: Bad parameter in
</span><br>
<span class="quotelev2">&gt;&gt; file plm_rsh_module.c at line 990
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; A daemon (pid unknown) died unexpectedly on signal 1 &#160;while attempting to
</span><br>
<span class="quotelev2">&gt;&gt; launch so we are aborting.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; There may be more information reported by the environment (see above).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This may be because the daemon was unable to find all the needed shared
</span><br>
<span class="quotelev2">&gt;&gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to have the
</span><br>
<span class="quotelev2">&gt;&gt; location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev2">&gt;&gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev2">&gt;&gt; that caused that situation.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpirun: clean termination accomplished
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; With out the '-rf rankfile' option everything works as expected.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My hostfile :
</span><br>
<span class="quotelev2">&gt;&gt; [jody_at_plankton tests]$ cat testhosts
</span><br>
<span class="quotelev2">&gt;&gt; # The following node is a quad-processor machine, and we absolutely
</span><br>
<span class="quotelev2">&gt;&gt; # want to disallow over-subscribing it:
</span><br>
<span class="quotelev2">&gt;&gt; plankton slots=3 &#160;max-slots=3
</span><br>
<span class="quotelev2">&gt;&gt; # The following nodes are dual-processor machines:
</span><br>
<span class="quotelev2">&gt;&gt; nano_00 &#160;slots=2 max-slots=2
</span><br>
<span class="quotelev2">&gt;&gt; nano_01 &#160;slots=2 max-slots=2
</span><br>
<span class="quotelev2">&gt;&gt; nano_02 &#160;slots=2 max-slots=2
</span><br>
<span class="quotelev2">&gt;&gt; nano_03 &#160;slots=2 max-slots=2
</span><br>
<span class="quotelev2">&gt;&gt; nano_04 &#160;slots=2 max-slots=2
</span><br>
<span class="quotelev2">&gt;&gt; nano_05 &#160;slots=2 max-slots=2
</span><br>
<span class="quotelev2">&gt;&gt; nano_06 &#160;slots=2 max-slots=2
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; my rank file:
</span><br>
<span class="quotelev2">&gt;&gt; [jody_at_plankton neander]$ cat rankfile
</span><br>
<span class="quotelev2">&gt;&gt; rank &#160;0=nano_00 &#160;slot=1
</span><br>
<span class="quotelev2">&gt;&gt; rank &#160;1=plankton slot=0
</span><br>
<span class="quotelev2">&gt;&gt; rank &#160;2=nano_01 &#160;slot=1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; my Open MPI version: 1.3.2
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; i get the same error if i use a rankfile which has a single line
</span><br>
<span class="quotelev2">&gt;&gt; &#160;rank &#160;0=plankton &#160;slot=0
</span><br>
<span class="quotelev2">&gt;&gt; (plankton is my local machine) and call mpirun with np 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What does the &quot;Rankfile claimed...&quot; message mean?
</span><br>
<span class="quotelev2">&gt;&gt; Did i make an error in my rankfile?
</span><br>
<span class="quotelev2">&gt;&gt; If yes, what would be the correct way to write it?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank You
</span><br>
<span class="quotelev2">&gt;&gt; &#160;Jody
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
<li><strong>Next message:</strong> <a href="10379.php">Lenny Verkhovsky: "Re: [OMPI users] rank file error: Rankfile claimed..."</a>
<li><strong>Previous message:</strong> <a href="10377.php">Lenny Verkhovsky: "Re: [OMPI users] rank file error: Rankfile claimed..."</a>
<li><strong>In reply to:</strong> <a href="10377.php">Lenny Verkhovsky: "Re: [OMPI users] rank file error: Rankfile claimed..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10379.php">Lenny Verkhovsky: "Re: [OMPI users] rank file error: Rankfile claimed..."</a>
<li><strong>Reply:</strong> <a href="10379.php">Lenny Verkhovsky: "Re: [OMPI users] rank file error: Rankfile claimed..."</a>
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
