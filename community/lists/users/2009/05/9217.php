<?
$subject_val = "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  5 09:08:30 2009" -->
<!-- isoreceived="20090505130830" -->
<!-- sent="Tue, 5 May 2009 07:08:24 -0600" -->
<!-- isosent="20090505130824" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??" -->
<!-- id="71d2d8cc0905050608x19710b2fu55eee92830007781_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="453d39990905050604r5acb9582n4876c3b89d78c8c1_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-05 09:08:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9218.php">Ralph Castain: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<li><strong>Previous message:</strong> <a href="9216.php">Lenny Verkhovsky: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<li><strong>In reply to:</strong> <a href="9216.php">Lenny Verkhovsky: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9218.php">Ralph Castain: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<li><strong>Reply:</strong> <a href="9218.php">Ralph Castain: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<li><strong>Reply:</strong> <a href="9289.php">Anton Starikov: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ah - thx for catching that, I'll remove that check. It no longer is
<br>
required.
<br>
<p>Thx!
<br>
<p>On Tue, May 5, 2009 at 7:04 AM, Lenny Verkhovsky &lt;lenny.verkhovsky_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; According to the code it does cares.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $vi orte/mca/rmaps/rank_file/rmaps_rank_file.c +572
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ival = orte_rmaps_rank_file_value.ival;
</span><br>
<span class="quotelev1">&gt;   if ( ival &gt; (np-1) ) {
</span><br>
<span class="quotelev1">&gt;   orte_show_help(&quot;help-rmaps_rank_file.txt&quot;, &quot;bad-rankfile&quot;, true, ival,
</span><br>
<span class="quotelev1">&gt; rankfile);
</span><br>
<span class="quotelev1">&gt;   rc = ORTE_ERR_BAD_PARAM;
</span><br>
<span class="quotelev1">&gt;   goto unlock;
</span><br>
<span class="quotelev1">&gt;   }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I remember correctly, I used an array to map ranks, and since the length
</span><br>
<span class="quotelev1">&gt; of array is NP, maximum index must be less than np, so if you have the
</span><br>
<span class="quotelev1">&gt; number of rank &gt; NP, you have no place to put it inside array.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;Likewise, if you have more procs than the rankfile specifies, we map the
</span><br>
<span class="quotelev1">&gt; additional procs either byslot (default) or bynode (if you specify that
</span><br>
<span class="quotelev1">&gt; option). So the rankfile doesn't need to contain an entry for every proc.&quot;
</span><br>
<span class="quotelev1">&gt;  - Correct point.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Lenny.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 5/5/09, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sorry Lenny, but that isn't correct. The rankfile mapper doesn't care if
</span><br>
<span class="quotelev2">&gt;&gt; the rankfile contains additional info - it only maps up to the number of
</span><br>
<span class="quotelev2">&gt;&gt; processes, and ignores anything beyond that number. So there is no need to
</span><br>
<span class="quotelev2">&gt;&gt; remove the additional info.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Likewise, if you have more procs than the rankfile specifies, we map the
</span><br>
<span class="quotelev2">&gt;&gt; additional procs either byslot (default) or bynode (if you specify that
</span><br>
<span class="quotelev2">&gt;&gt; option). So the rankfile doesn't need to contain an entry for every proc.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Just don't want to confuse folks.
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, May 5, 2009 at 5:59 AM, Lenny Verkhovsky &lt;
</span><br>
<span class="quotelev2">&gt;&gt; lenny.verkhovsky_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; maximum rank number must be less then np.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; if np=1 then there is only rank 0 in the system, so rank 1 is invalid.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; please remove &quot;rank 1=node2 slot=*&quot; from the rankfile
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Best regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Lenny.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Mon, May 4, 2009 at 11:14 AM, Geoffroy Pignot &lt;geopignot_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi ,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I got the openmpi-1.4a1r21095.tar.gz&lt;<a href="http://www.open-mpi.org/nightly/trunk/openmpi-1.4a1r21095.tar.gz">http://www.open-mpi.org/nightly/trunk/openmpi-1.4a1r21095.tar.gz</a>&gt;tarball, but unfortunately my command doesn't work
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; cat rankf:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; rank 0=node1 slot=*
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; rank 1=node2 slot=*
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; cat hostf:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node1 slots=2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node2 slots=2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun  --rankfile rankf --hostfile hostf  --host node1 -n 1 hostname :
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --host node2 -n 1 hostname
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Error, invalid rank (1) in the rankfile (rankf)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [r011n006:28986] [[45541,0],0] ORTE_ERROR_LOG: Bad parameter in file
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; rmaps_rank_file.c at line 403
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [r011n006:28986] [[45541,0],0] ORTE_ERROR_LOG: Bad parameter in file
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; base/rmaps_base_map_job.c at line 86
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [r011n006:28986] [[45541,0],0] ORTE_ERROR_LOG: Bad parameter in file
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; base/plm_base_launch_support.c at line 86
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [r011n006:28986] [[45541,0],0] ORTE_ERROR_LOG: Bad parameter in file
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; plm_rsh_module.c at line 1016
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ralph, could you tell me if my command syntax is correct or not ? if
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; not, give me the expected one ?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Regards
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Geoffroy
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2009/4/30 Geoffroy Pignot &lt;geopignot_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Immediately Sir !!! :)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thanks again Ralph
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Geoffroy
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Message: 2
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Date: Thu, 30 Apr 2009 06:45:39 -0600
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; From: Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Subject: Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Message-ID:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;        &lt;71d2d8cc0904300545v61a42fe1k50086d2704d0f7e6_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Content-Type: text/plain; charset=&quot;iso-8859-1&quot;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I believe this is fixed now in our development trunk - you can
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; download any
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; tarball starting from last night and give it a try, if you like. Any
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; feedback would be appreciated.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Apr 14, 2009, at 7:57 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Ah now, I didn't say it -worked-, did I? :-)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Clearly a bug exists in the program. I'll try to take a look at it (if
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Lenny
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; doesn't get to it first), but it won't be until later in the week.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Apr 14, 2009, at 7:18 AM, Geoffroy Pignot wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I agree with you Ralph , and that 's what I expect from openmpi but my
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; second example shows that it's not working
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; cat hostfile.0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   r011n002 slots=4
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   r011n003 slots=4
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  cat rankfile.0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;    rank 0=r011n002 slot=0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;    rank 1=r011n003 slot=1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; mpirun --hostfile hostfile.0 -rf rankfile.0 -n 1 hostname : -n 1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; hostname
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ### CRASHED
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; Error, invalid rank (1) in the rankfile (rankfile.0)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; [r011n002:25129] [[63976,0],0] ORTE_ERROR_LOG: Bad parameter in
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; file
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; rmaps_rank_file.c at line 404
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; [r011n002:25129] [[63976,0],0] ORTE_ERROR_LOG: Bad parameter in
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; file
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; base/rmaps_base_map_job.c at line 87
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; [r011n002:25129] [[63976,0],0] ORTE_ERROR_LOG: Bad parameter in
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; file
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; base/plm_base_launch_support.c at line 77
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; [r011n002:25129] [[63976,0],0] ORTE_ERROR_LOG: Bad parameter in
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; file
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; plm_rsh_module.c at line 985
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; A daemon (pid unknown) died unexpectedly on signal 1  while
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; attempting to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; launch so we are aborting.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; There may be more information reported by the environment (see
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; above).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; This may be because the daemon was unable to find all the needed
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; shared
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; have the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; orterun noticed that the job aborted, but has no info as to the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; process
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; that caused that situation.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; orterun: clean termination accomplished
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Message: 4
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Date: Tue, 14 Apr 2009 06:55:58 -0600
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; From: Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Subject: Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Message-ID: &lt;F6290ADA-A196-43F0-A853-CBCB802D8D9C_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Content-Type: text/plain; charset=&quot;us-ascii&quot;; Format=&quot;flowed&quot;;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;       DelSp=&quot;yes&quot;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; The rankfile cuts across the entire job - it isn't applied on an
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; app_context basis. So the ranks in your rankfile must correspond to
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; the eventual rank of each process in the cmd line.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Unfortunately, that means you have to count ranks. In your case, you
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; only have four, so that makes life easier. Your rankfile would look
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; something like this:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; rank 0=r001n001 slot=0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; rank 1=r001n002 slot=1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; rank 2=r001n001 slot=1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; rank 3=r001n002 slot=2
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; HTH
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Apr 14, 2009, at 12:19 AM, Geoffroy Pignot wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; I agree that my examples are not very clear. What I want to do is to
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; launch a multiexes application (masters-slaves) and benefit from the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; processor affinity.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; Could you show me how to convert this command , using -rf option
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; (whatever the affinity is)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; mpirun -n 1 -host r001n001 master.x options1  : -n 1 -host r001n002
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; master.x options2 : -n 1 -host r001n001 slave.x options3 : -n 1 -
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; host r001n002 slave.x options4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; Thanks for your help
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; Geoffroy
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; Message: 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; Date: Sun, 12 Apr 2009 18:26:35 +0300
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; From: Lenny Verkhovsky &lt;lenny.verkhovsky_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; Subject: Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; Message-ID:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt;        &lt;453d39990904120826t2e1d1d33l7bb1fe3de65b5361_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; Content-Type: text/plain; charset=&quot;iso-8859-1&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; The first &quot;crash&quot; is OK, since your rankfile has ranks 0 and 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; defined,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; while n=1, which means only rank 0 is present and can be allocated.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; NP must be &gt;= the largest rank in rankfile.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; What exactly are you trying to do ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; I tried to recreate your seqv but all I got was
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; ~/work/svn/ompi/trunk/build_x86-64/install/bin/mpirun --hostfile
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; hostfile.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; -rf rankfile.0 -n 1 hostname : -rf rankfile.1 -n 1 hostname
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; [witch19:30798] mca: base: component_find: paffinity
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &quot;mca_paffinity_linux&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; uses an MCA interface that is not recognized (component MCA v1.0.0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; !=
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; supported MCA v2.0.0) -- ignored
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; It looks like opal_init failed for some reason; your parallel
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; process is
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; likely to abort. There are many reasons that a parallel process can
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; fail during opal_init; some of which are due to configuration or
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; environment problems. This failure appears to be an internal
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; failure;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; Open MPI developer):
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt;  opal_carto_base_select failed
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt;  --&gt; Returned value -13 instead of OPAL_SUCCESS
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; [witch19:30798] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; file
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; ../../orte/runtime/orte_init.c at line 78
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; [witch19:30798] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; file
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; ../../orte/orted/orted_main.c at line 344
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; A daemon (pid 11629) died unexpectedly with status 243 while
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; attempting
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; to launch so we are aborting.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; There may be more information reported by the environment (see
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; above).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; This may be because the daemon was unable to find all the needed
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; shared
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; have the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; mpirun noticed that the job aborted, but has no info as to the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; process
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; that caused that situation.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; mpirun: clean termination accomplished
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; Lenny.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; On 4/10/09, Geoffroy Pignot &lt;geopignot_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; Hi ,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; I am currently testing the process affinity capabilities of
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; openmpi and I
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; would like to know if the rankfile behaviour I will describe below
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; is normal
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; or not ?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; cat hostfile.0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; r011n002 slots=4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; r011n003 slots=4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; cat rankfile.0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; rank 0=r011n002 slot=0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; rank 1=r011n003 slot=1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ##################################################################################
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; mpirun --hostfile hostfile.0 -rf rankfile.0 -n 2  hostname ### OK
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; r011n002
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; r011n003
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ##################################################################################
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; but
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; mpirun --hostfile hostfile.0 -rf rankfile.0 -n 1 hostname : -n 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; hostname
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; ### CRASHED
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; *
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; Error, invalid rank (1) in the rankfile (rankfile.0)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; [r011n002:25129] [[63976,0],0] ORTE_ERROR_LOG: Bad parameter in
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; file
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; rmaps_rank_file.c at line 404
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; [r011n002:25129] [[63976,0],0] ORTE_ERROR_LOG: Bad parameter in
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; file
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; base/rmaps_base_map_job.c at line 87
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; [r011n002:25129] [[63976,0],0] ORTE_ERROR_LOG: Bad parameter in
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; file
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; base/plm_base_launch_support.c at line 77
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; [r011n002:25129] [[63976,0],0] ORTE_ERROR_LOG: Bad parameter in
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; file
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; plm_rsh_module.c at line 985
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; A daemon (pid unknown) died unexpectedly on signal 1  while
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; attempting to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; launch so we are aborting.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; There may be more information reported by the environment (see
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; above).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; This may be because the daemon was unable to find all the needed
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; shared
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; have the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; orterun noticed that the job aborted, but has no info as to the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; process
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; that caused that situation.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; orterun: clean termination accomplished
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; *
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; It seems that the rankfile option is not propagted to the second
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; command
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; line ; there is no global understanding of the ranking inside a
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; mpirun
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; command.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ##################################################################################
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; Assuming that , I tried to provide a rankfile to each command
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; line:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; cat rankfile.0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; rank 0=r011n002 slot=0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; cat rankfile.1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; rank 0=r011n003 slot=1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; mpirun --hostfile hostfile.0 -rf rankfile.0 -n 1 hostname : -rf
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; rankfile.1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; -n 1 hostname ### CRASHED
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; *[r011n002:28778] *** Process received signal ***
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; [r011n002:28778] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; [r011n002:28778] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; [r011n002:28778] Failing at address: 0x34
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; [r011n002:28778] [ 0] [0xffffe600]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; [r011n002:28778] [ 1]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; /tmp/HALMPI/openmpi-1.3.1/lib/libopen-rte.so.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; 0(orte_odls_base_default_get_add_procs_data+0x55d)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; [0x5557decd]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; [r011n002:28778] [ 2]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; /tmp/HALMPI/openmpi-1.3.1/lib/libopen-rte.so.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; 0(orte_plm_base_launch_apps+0x117)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; [0x555842a7]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; [r011n002:28778] [ 3] /tmp/HALMPI/openmpi-1.3.1/lib/openmpi/
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; mca_plm_rsh.so
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; [0x556098c0]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; [r011n002:28778] [ 4] /tmp/HALMPI/openmpi-1.3.1/bin/orterun
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; [0x804aa27]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; [r011n002:28778] [ 5] /tmp/HALMPI/openmpi-1.3.1/bin/orterun
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; [0x804a022]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; [r011n002:28778] [ 6] /lib/libc.so.6(__libc_start_main+0xdc)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; [0x9f1dec]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; [r011n002:28778] [ 7] /tmp/HALMPI/openmpi-1.3.1/bin/orterun
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; [0x8049f71]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; [r011n002:28778] *** End of error message ***
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; Segmentation fault (core dumped)*
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; I hope that I've found a bug because it would be very important
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; for me to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; have this kind of capabiliy .
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; Launch a multiexe mpirun command line and be able to bind my exes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; sockets together.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; Thanks in advance for your help
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt; Geoffroy
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -------------- next part --------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; HTML attachment scrubbed and removed
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; End of users Digest, Vol 1202, Issue 2
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; **************************************
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -------------- next part --------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; HTML attachment scrubbed and removed
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; End of users Digest, Vol 1218, Issue 2
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; **************************************
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9217/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9218.php">Ralph Castain: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<li><strong>Previous message:</strong> <a href="9216.php">Lenny Verkhovsky: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<li><strong>In reply to:</strong> <a href="9216.php">Lenny Verkhovsky: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9218.php">Ralph Castain: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<li><strong>Reply:</strong> <a href="9218.php">Ralph Castain: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<li><strong>Reply:</strong> <a href="9289.php">Anton Starikov: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
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
