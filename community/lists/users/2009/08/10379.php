<?
$subject_val = "Re: [OMPI users] rank file error: Rankfile claimed...";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 17 06:05:30 2009" -->
<!-- isoreceived="20090817100530" -->
<!-- sent="Mon, 17 Aug 2009 13:05:23 +0300" -->
<!-- isosent="20090817100523" -->
<!-- name="Lenny Verkhovsky" -->
<!-- email="lenny.verkhovsky_at_[hidden]" -->
<!-- subject="Re: [OMPI users] rank file error: Rankfile claimed..." -->
<!-- id="453d39990908170305n77c43184i56788136bfb6a535_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="9b0da5ce0908170259q3aa0090cjfb6ad6be11e305c8_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2009-08-17 06:05:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10380.php">jody: "Re: [OMPI users] rank file error: Rankfile claimed..."</a>
<li><strong>Previous message:</strong> <a href="10378.php">jody: "Re: [OMPI users] rank file error: Rankfile claimed..."</a>
<li><strong>In reply to:</strong> <a href="10378.php">jody: "Re: [OMPI users] rank file error: Rankfile claimed..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10380.php">jody: "Re: [OMPI users] rank file error: Rankfile claimed..."</a>
<li><strong>Reply:</strong> <a href="10380.php">jody: "Re: [OMPI users] rank file error: Rankfile claimed..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think it has something to do with your environment,  /etc/hosts, IT setup,
<br>
hostname function return value e.t.c
<br>
I am not sure if it has something to do with Open MPI at all.
<br>
Lenny.
<br>
On Mon, Aug 17, 2009 at 12:59 PM, jody &lt;jody.xha_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Lenny
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks - using the full names makes it work!
</span><br>
<span class="quotelev1">&gt; Is there a reason why the rankfile option treats
</span><br>
<span class="quotelev1">&gt; host names differently than the hostfile option?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt;   Jody
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Aug 17, 2009 at 11:20 AM, Lenny
</span><br>
<span class="quotelev1">&gt; Verkhovsky&lt;lenny.verkhovsky_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi
</span><br>
<span class="quotelev2">&gt; &gt; This message means
</span><br>
<span class="quotelev2">&gt; &gt; that you are trying to use host &quot;plankton&quot;, that was not allocated via
</span><br>
<span class="quotelev2">&gt; &gt; hostfile or hostlist.
</span><br>
<span class="quotelev2">&gt; &gt; But according to the files and command line, everything seems fine.
</span><br>
<span class="quotelev2">&gt; &gt; Can you try using &quot;plankton.uzh.ch&quot; hostname instead of &quot;plankton&quot;.
</span><br>
<span class="quotelev2">&gt; &gt; thanks
</span><br>
<span class="quotelev2">&gt; &gt; Lenny.
</span><br>
<span class="quotelev2">&gt; &gt; On Mon, Aug 17, 2009 at 10:36 AM, jody &lt;jody.xha_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hi
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; When i use a rankfile, i get an error message which i don't understand:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [jody_at_plankton tests]$ mpirun -np 3 -rf rankfile -hostfile testhosts
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ./HelloMPI
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Rankfile claimed host plankton that was not allocated or
</span><br>
<span class="quotelev3">&gt; &gt;&gt; oversubscribed it's slots:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [plankton.uzh.ch:24327] [[44857,0],0] ORTE_ERROR_LOG: Bad parameter in
</span><br>
<span class="quotelev3">&gt; &gt;&gt; file rmaps_rank_file.c at line 108
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [plankton.uzh.ch:24327] [[44857,0],0] ORTE_ERROR_LOG: Bad parameter in
</span><br>
<span class="quotelev3">&gt; &gt;&gt; file base/rmaps_base_map_job.c at line 87
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [plankton.uzh.ch:24327] [[44857,0],0] ORTE_ERROR_LOG: Bad parameter in
</span><br>
<span class="quotelev3">&gt; &gt;&gt; file base/plm_base_launch_support.c at line 77
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [plankton.uzh.ch:24327] [[44857,0],0] ORTE_ERROR_LOG: Bad parameter in
</span><br>
<span class="quotelev3">&gt; &gt;&gt; file plm_rsh_module.c at line 990
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt; A daemon (pid unknown) died unexpectedly on signal 1  while attempting
</span><br>
<span class="quotelev1">&gt; to
</span><br>
<span class="quotelev3">&gt; &gt;&gt; launch so we are aborting.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; There may be more information reported by the environment (see above).
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; This may be because the daemon was unable to find all the needed shared
</span><br>
<span class="quotelev3">&gt; &gt;&gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to have
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev3">&gt; &gt;&gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev3">&gt; &gt;&gt; that caused that situation.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mpirun: clean termination accomplished
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; With out the '-rf rankfile' option everything works as expected.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; My hostfile :
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [jody_at_plankton tests]$ cat testhosts
</span><br>
<span class="quotelev3">&gt; &gt;&gt; # The following node is a quad-processor machine, and we absolutely
</span><br>
<span class="quotelev3">&gt; &gt;&gt; # want to disallow over-subscribing it:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; plankton slots=3  max-slots=3
</span><br>
<span class="quotelev3">&gt; &gt;&gt; # The following nodes are dual-processor machines:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; nano_00  slots=2 max-slots=2
</span><br>
<span class="quotelev3">&gt; &gt;&gt; nano_01  slots=2 max-slots=2
</span><br>
<span class="quotelev3">&gt; &gt;&gt; nano_02  slots=2 max-slots=2
</span><br>
<span class="quotelev3">&gt; &gt;&gt; nano_03  slots=2 max-slots=2
</span><br>
<span class="quotelev3">&gt; &gt;&gt; nano_04  slots=2 max-slots=2
</span><br>
<span class="quotelev3">&gt; &gt;&gt; nano_05  slots=2 max-slots=2
</span><br>
<span class="quotelev3">&gt; &gt;&gt; nano_06  slots=2 max-slots=2
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; my rank file:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [jody_at_plankton neander]$ cat rankfile
</span><br>
<span class="quotelev3">&gt; &gt;&gt; rank  0=nano_00  slot=1
</span><br>
<span class="quotelev3">&gt; &gt;&gt; rank  1=plankton slot=0
</span><br>
<span class="quotelev3">&gt; &gt;&gt; rank  2=nano_01  slot=1
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; my Open MPI version: 1.3.2
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; i get the same error if i use a rankfile which has a single line
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  rank  0=plankton  slot=0
</span><br>
<span class="quotelev3">&gt; &gt;&gt; (plankton is my local machine) and call mpirun with np 1
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; What does the &quot;Rankfile claimed...&quot; message mean?
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Did i make an error in my rankfile?
</span><br>
<span class="quotelev3">&gt; &gt;&gt; If yes, what would be the correct way to write it?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thank You
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  Jody
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10379/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10380.php">jody: "Re: [OMPI users] rank file error: Rankfile claimed..."</a>
<li><strong>Previous message:</strong> <a href="10378.php">jody: "Re: [OMPI users] rank file error: Rankfile claimed..."</a>
<li><strong>In reply to:</strong> <a href="10378.php">jody: "Re: [OMPI users] rank file error: Rankfile claimed..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10380.php">jody: "Re: [OMPI users] rank file error: Rankfile claimed..."</a>
<li><strong>Reply:</strong> <a href="10380.php">jody: "Re: [OMPI users] rank file error: Rankfile claimed..."</a>
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
