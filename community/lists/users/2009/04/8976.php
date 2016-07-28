<?
$subject_val = "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 20 08:00:07 2009" -->
<!-- isoreceived="20090420120007" -->
<!-- sent="Mon, 20 Apr 2009 05:59:52 -0600" -->
<!-- isosent="20090420115952" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??" -->
<!-- id="6378A8C1-1763-4A1C-ABCA-C6FCC36054E6_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="b4f9bf870904200158q35c4e5ccv95160d0bc95fedb4_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2009-04-20 07:59:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8977.php">Geoffroy Pignot: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<li><strong>Previous message:</strong> <a href="8975.php">Geoffroy Pignot: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<li><strong>In reply to:</strong> <a href="8975.php">Geoffroy Pignot: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8977.php">Geoffroy Pignot: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Honestly haven't had time to look at it yet - hopefully in the next  
<br>
couple of days...
<br>
<p>Sorry for delay
<br>
<p><p>On Apr 20, 2009, at 2:58 AM, Geoffroy Pignot wrote:
<br>
<p><span class="quotelev1">&gt; Do you have any news about this bug.
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Geoffroy
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Message: 1
</span><br>
<span class="quotelev1">&gt; Date: Tue, 14 Apr 2009 07:57:44 -0600
</span><br>
<span class="quotelev1">&gt; From: Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;BEB90473-0747-43BF-A1E9-6FA4E77778D7_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=&quot;us-ascii&quot;; Format=&quot;flowed&quot;;
</span><br>
<span class="quotelev1">&gt;        DelSp=&quot;yes&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ah now, I didn't say it -worked-, did I? :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Clearly a bug exists in the program. I'll try to take a look at it (if
</span><br>
<span class="quotelev1">&gt; Lenny doesn't get to it first), but it won't be until later in the  
</span><br>
<span class="quotelev1">&gt; week.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 14, 2009, at 7:18 AM, Geoffroy Pignot wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I agree with you Ralph , and that 's what I expect from openmpi but
</span><br>
<span class="quotelev2">&gt; &gt; my second example shows that it's not working
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; cat hostfile.0
</span><br>
<span class="quotelev2">&gt; &gt;    r011n002 slots=4
</span><br>
<span class="quotelev2">&gt; &gt;    r011n003 slots=4
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  cat rankfile.0
</span><br>
<span class="quotelev2">&gt; &gt;     rank 0=r011n002 slot=0
</span><br>
<span class="quotelev2">&gt; &gt;     rank 1=r011n003 slot=1
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; mpirun --hostfile hostfile.0 -rf rankfile.0 -n 1 hostname : -n 1
</span><br>
<span class="quotelev2">&gt; &gt; hostname
</span><br>
<span class="quotelev2">&gt; &gt; ### CRASHED
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Error, invalid rank (1) in the rankfile (rankfile.0)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; [r011n002:25129] [[63976,0],0] ORTE_ERROR_LOG: Bad parameter in
</span><br>
<span class="quotelev2">&gt; &gt; file
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; rmaps_rank_file.c at line 404
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; [r011n002:25129] [[63976,0],0] ORTE_ERROR_LOG: Bad parameter in
</span><br>
<span class="quotelev2">&gt; &gt; file
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; base/rmaps_base_map_job.c at line 87
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; [r011n002:25129] [[63976,0],0] ORTE_ERROR_LOG: Bad parameter in
</span><br>
<span class="quotelev2">&gt; &gt; file
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; base/plm_base_launch_support.c at line 77
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; [r011n002:25129] [[63976,0],0] ORTE_ERROR_LOG: Bad parameter in
</span><br>
<span class="quotelev2">&gt; &gt; file
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; plm_rsh_module.c at line 985
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; A daemon (pid unknown) died unexpectedly on signal 1  while
</span><br>
<span class="quotelev3">&gt; &gt; &gt; attempting to
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; launch so we are aborting.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; There may be more information reported by the environment (see
</span><br>
<span class="quotelev3">&gt; &gt; &gt; above).
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; This may be because the daemon was unable to find all the needed
</span><br>
<span class="quotelev3">&gt; &gt; &gt; shared
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; libraries on the remote node. You may set your LD_LIBRARY_PATH  
</span><br>
<span class="quotelev1">&gt; to
</span><br>
<span class="quotelev3">&gt; &gt; &gt; have the
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; location of the shared libraries on the remote nodes and this  
</span><br>
<span class="quotelev1">&gt; will
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; orterun noticed that the job aborted, but has no info as to the
</span><br>
<span class="quotelev3">&gt; &gt; &gt; process
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; that caused that situation.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; orterun: clean termination accomplished
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Message: 4
</span><br>
<span class="quotelev2">&gt; &gt; Date: Tue, 14 Apr 2009 06:55:58 -0600
</span><br>
<span class="quotelev2">&gt; &gt; From: Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Subject: Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??
</span><br>
<span class="quotelev2">&gt; &gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Message-ID: &lt;F6290ADA-A196-43F0-A853-CBCB802D8D9C_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Content-Type: text/plain; charset=&quot;us-ascii&quot;; Format=&quot;flowed&quot;;
</span><br>
<span class="quotelev2">&gt; &gt;        DelSp=&quot;yes&quot;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The rankfile cuts across the entire job - it isn't applied on an
</span><br>
<span class="quotelev2">&gt; &gt; app_context basis. So the ranks in your rankfile must correspond to
</span><br>
<span class="quotelev2">&gt; &gt; the eventual rank of each process in the cmd line.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Unfortunately, that means you have to count ranks. In your case, you
</span><br>
<span class="quotelev2">&gt; &gt; only have four, so that makes life easier. Your rankfile would look
</span><br>
<span class="quotelev2">&gt; &gt; something like this:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; rank 0=r001n001 slot=0
</span><br>
<span class="quotelev2">&gt; &gt; rank 1=r001n002 slot=1
</span><br>
<span class="quotelev2">&gt; &gt; rank 2=r001n001 slot=1
</span><br>
<span class="quotelev2">&gt; &gt; rank 3=r001n002 slot=2
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; HTH
</span><br>
<span class="quotelev2">&gt; &gt; Ralph
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Apr 14, 2009, at 12:19 AM, Geoffroy Pignot wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hi,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I agree that my examples are not very clear. What I want to do  
</span><br>
<span class="quotelev1">&gt; is to
</span><br>
<span class="quotelev3">&gt; &gt; &gt; launch a multiexes application (masters-slaves) and benefit from  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev3">&gt; &gt; &gt; processor affinity.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Could you show me how to convert this command , using -rf option
</span><br>
<span class="quotelev3">&gt; &gt; &gt; (whatever the affinity is)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; mpirun -n 1 -host r001n001 master.x options1  : -n 1 -host  
</span><br>
<span class="quotelev1">&gt; r001n002
</span><br>
<span class="quotelev3">&gt; &gt; &gt; master.x options2 : -n 1 -host r001n001 slave.x options3 : -n 1 -
</span><br>
<span class="quotelev3">&gt; &gt; &gt; host r001n002 slave.x options4
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Thanks for your help
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Geoffroy
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Message: 2
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Date: Sun, 12 Apr 2009 18:26:35 +0300
</span><br>
<span class="quotelev3">&gt; &gt; &gt; From: Lenny Verkhovsky &lt;lenny.verkhovsky_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Subject: Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??
</span><br>
<span class="quotelev3">&gt; &gt; &gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Message-ID:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;        &lt;453d39990904120826t2e1d1d33l7bb1fe3de65b5361_at_[hidden] 
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Content-Type: text/plain; charset=&quot;iso-8859-1&quot;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hi,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; The first &quot;crash&quot; is OK, since your rankfile has ranks 0 and 1
</span><br>
<span class="quotelev3">&gt; &gt; &gt; defined,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; while n=1, which means only rank 0 is present and can be  
</span><br>
<span class="quotelev1">&gt; allocated.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; NP must be &gt;= the largest rank in rankfile.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; What exactly are you trying to do ?
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I tried to recreate your seqv but all I got was
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ~/work/svn/ompi/trunk/build_x86-64/install/bin/mpirun --hostfile
</span><br>
<span class="quotelev3">&gt; &gt; &gt; hostfile.0
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -rf rankfile.0 -n 1 hostname : -rf rankfile.1 -n 1 hostname
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [witch19:30798] mca: base: component_find: paffinity
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &quot;mca_paffinity_linux&quot;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; uses an MCA interface that is not recognized (component MCA
</span><br>
<span class="quotelev2">&gt; &gt; v1.0.0 !=
</span><br>
<span class="quotelev3">&gt; &gt; &gt; supported MCA v2.0.0) -- ignored
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt; &gt; It looks like opal_init failed for some reason; your parallel
</span><br>
<span class="quotelev3">&gt; &gt; &gt; process is
</span><br>
<span class="quotelev3">&gt; &gt; &gt; likely to abort. There are many reasons that a parallel process  
</span><br>
<span class="quotelev1">&gt; can
</span><br>
<span class="quotelev3">&gt; &gt; &gt; fail during opal_init; some of which are due to configuration or
</span><br>
<span class="quotelev3">&gt; &gt; &gt; environment problems. This failure appears to be an internal
</span><br>
<span class="quotelev2">&gt; &gt; failure;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; here's some additional information (which may only be relevant  
</span><br>
<span class="quotelev1">&gt; to an
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Open MPI developer):
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  opal_carto_base_select failed
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  --&gt; Returned value -13 instead of OPAL_SUCCESS
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [witch19:30798] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in
</span><br>
<span class="quotelev2">&gt; &gt; file
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ../../orte/runtime/orte_init.c at line 78
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [witch19:30798] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in
</span><br>
<span class="quotelev2">&gt; &gt; file
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ../../orte/orted/orted_main.c at line 344
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt; &gt; A daemon (pid 11629) died unexpectedly with status 243 while
</span><br>
<span class="quotelev3">&gt; &gt; &gt; attempting
</span><br>
<span class="quotelev3">&gt; &gt; &gt; to launch so we are aborting.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; There may be more information reported by the environment (see
</span><br>
<span class="quotelev2">&gt; &gt; above).
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; This may be because the daemon was unable to find all the needed
</span><br>
<span class="quotelev3">&gt; &gt; &gt; shared
</span><br>
<span class="quotelev3">&gt; &gt; &gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to
</span><br>
<span class="quotelev3">&gt; &gt; &gt; have the
</span><br>
<span class="quotelev3">&gt; &gt; &gt; location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev3">&gt; &gt; &gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt; &gt; mpirun noticed that the job aborted, but has no info as to the
</span><br>
<span class="quotelev2">&gt; &gt; process
</span><br>
<span class="quotelev3">&gt; &gt; &gt; that caused that situation.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt; &gt; mpirun: clean termination accomplished
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Lenny.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On 4/10/09, Geoffroy Pignot &lt;geopignot_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Hi ,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; I am currently testing the process affinity capabilities of
</span><br>
<span class="quotelev3">&gt; &gt; &gt; openmpi and I
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; would like to know if the rankfile behaviour I will describe  
</span><br>
<span class="quotelev1">&gt; below
</span><br>
<span class="quotelev3">&gt; &gt; &gt; is normal
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; or not ?
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; cat hostfile.0
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; r011n002 slots=4
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; r011n003 slots=4
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; cat rankfile.0
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; rank 0=r011n002 slot=0
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; rank 1=r011n003 slot=1
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev1">&gt; ##################################################################################
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; mpirun --hostfile hostfile.0 -rf rankfile.0 -n 2  hostname ###  
</span><br>
<span class="quotelev1">&gt; OK
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; r011n002
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; r011n003
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev1">&gt; ##################################################################################
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; but
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; mpirun --hostfile hostfile.0 -rf rankfile.0 -n 1 hostname : -n 1
</span><br>
<span class="quotelev3">&gt; &gt; &gt; hostname
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; ### CRASHED
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; *
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Error, invalid rank (1) in the rankfile (rankfile.0)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; [r011n002:25129] [[63976,0],0] ORTE_ERROR_LOG: Bad parameter in
</span><br>
<span class="quotelev2">&gt; &gt; file
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; rmaps_rank_file.c at line 404
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; [r011n002:25129] [[63976,0],0] ORTE_ERROR_LOG: Bad parameter in
</span><br>
<span class="quotelev2">&gt; &gt; file
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; base/rmaps_base_map_job.c at line 87
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; [r011n002:25129] [[63976,0],0] ORTE_ERROR_LOG: Bad parameter in
</span><br>
<span class="quotelev2">&gt; &gt; file
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; base/plm_base_launch_support.c at line 77
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; [r011n002:25129] [[63976,0],0] ORTE_ERROR_LOG: Bad parameter in
</span><br>
<span class="quotelev2">&gt; &gt; file
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; plm_rsh_module.c at line 985
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; A daemon (pid unknown) died unexpectedly on signal 1  while
</span><br>
<span class="quotelev3">&gt; &gt; &gt; attempting to
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; launch so we are aborting.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; There may be more information reported by the environment (see
</span><br>
<span class="quotelev3">&gt; &gt; &gt; above).
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; This may be because the daemon was unable to find all the needed
</span><br>
<span class="quotelev3">&gt; &gt; &gt; shared
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; libraries on the remote node. You may set your LD_LIBRARY_PATH  
</span><br>
<span class="quotelev1">&gt; to
</span><br>
<span class="quotelev3">&gt; &gt; &gt; have the
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; location of the shared libraries on the remote nodes and this  
</span><br>
<span class="quotelev1">&gt; will
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; orterun noticed that the job aborted, but has no info as to the
</span><br>
<span class="quotelev3">&gt; &gt; &gt; process
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; that caused that situation.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; orterun: clean termination accomplished
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; *
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; It seems that the rankfile option is not propagted to the second
</span><br>
<span class="quotelev3">&gt; &gt; &gt; command
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; line ; there is no global understanding of the ranking inside a
</span><br>
<span class="quotelev3">&gt; &gt; &gt; mpirun
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; command.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev1">&gt; ##################################################################################
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Assuming that , I tried to provide a rankfile to each command
</span><br>
<span class="quotelev2">&gt; &gt; line:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; cat rankfile.0
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; rank 0=r011n002 slot=0
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; cat rankfile.1
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; rank 0=r011n003 slot=1
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; mpirun --hostfile hostfile.0 -rf rankfile.0 -n 1 hostname : -rf
</span><br>
<span class="quotelev3">&gt; &gt; &gt; rankfile.1
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; -n 1 hostname ### CRASHED
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; *[r011n002:28778] *** Process received signal ***
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; [r011n002:28778] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; [r011n002:28778] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; [r011n002:28778] Failing at address: 0x34
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; [r011n002:28778] [ 0] [0xffffe600]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; [r011n002:28778] [ 1]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; /tmp/HALMPI/openmpi-1.3.1/lib/libopen-rte.so.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 0(orte_odls_base_default_get_add_procs_data+0x55d)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; [0x5557decd]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; [r011n002:28778] [ 2]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; /tmp/HALMPI/openmpi-1.3.1/lib/libopen-rte.so.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 0(orte_plm_base_launch_apps+0x117)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; [0x555842a7]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; [r011n002:28778] [ 3] /tmp/HALMPI/openmpi-1.3.1/lib/openmpi/
</span><br>
<span class="quotelev3">&gt; &gt; &gt; mca_plm_rsh.so
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; [0x556098c0]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; [r011n002:28778] [ 4] /tmp/HALMPI/openmpi-1.3.1/bin/orterun
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [0x804aa27]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; [r011n002:28778] [ 5] /tmp/HALMPI/openmpi-1.3.1/bin/orterun
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [0x804a022]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; [r011n002:28778] [ 6] /lib/libc.so.6(__libc_start_main+0xdc)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [0x9f1dec]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; [r011n002:28778] [ 7] /tmp/HALMPI/openmpi-1.3.1/bin/orterun
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [0x8049f71]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; [r011n002:28778] *** End of error message ***
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Segmentation fault (core dumped)*
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; I hope that I've found a bug because it would be very important
</span><br>
<span class="quotelev3">&gt; &gt; &gt; for me to
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; have this kind of capabiliy .
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Launch a multiexe mpirun command line and be able to bind my  
</span><br>
<span class="quotelev1">&gt; exes
</span><br>
<span class="quotelev3">&gt; &gt; &gt; and
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; sockets together.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Thanks in advance for your help
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Geoffroy
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -------------- next part --------------
</span><br>
<span class="quotelev2">&gt; &gt; HTML attachment scrubbed and removed
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ------------------------------
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
<span class="quotelev2">&gt; &gt; End of users Digest, Vol 1202, Issue 2
</span><br>
<span class="quotelev2">&gt; &gt; **************************************
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -------------- next part --------------
</span><br>
<span class="quotelev1">&gt; HTML attachment scrubbed and removed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Message: 2
</span><br>
<span class="quotelev1">&gt; Date: Tue, 14 Apr 2009 10:30:58 -0400
</span><br>
<span class="quotelev1">&gt; From: Prentice Bisbal &lt;prentice_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] PGI Fortran pthread support
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;49E49E22.9040502_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=ISO-8859-1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Orion,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have no trouble getting thread support during configure with PGI  
</span><br>
<span class="quotelev1">&gt; 8.0-3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Are there any other compilers in your path before the PGI compilers?
</span><br>
<span class="quotelev1">&gt; Even if the PGI compilers come first, try specifying the PGI compilers
</span><br>
<span class="quotelev1">&gt; explicitly with these environment variables (bash syntax shown):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; export CC=pgcc
</span><br>
<span class="quotelev1">&gt; export CXX=pgCC
</span><br>
<span class="quotelev1">&gt; export F77=pgf77
</span><br>
<span class="quotelev1">&gt; export FC=pgf90
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; also check the value of CPPFLAGS and LDFLAGS, and make sure they are
</span><br>
<span class="quotelev1">&gt; correct for your PGI compilers.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Prentice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Orion Poplawski wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Seeing the following building openmpi 1.3.1 on CentOS 5.3 with PGI  
</span><br>
<span class="quotelev1">&gt; pgf90
</span><br>
<span class="quotelev2">&gt; &gt; 8.0-5 fortran compiler:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; checking if C compiler and POSIX threads work with -Kthread... no
</span><br>
<span class="quotelev2">&gt; &gt; checking if C compiler and POSIX threads work with -kthread... no
</span><br>
<span class="quotelev2">&gt; &gt; checking if C compiler and POSIX threads work with -pthread... yes
</span><br>
<span class="quotelev2">&gt; &gt; checking if C++ compiler and POSIX threads work with -Kthread... no
</span><br>
<span class="quotelev2">&gt; &gt; checking if C++ compiler and POSIX threads work with -kthread... no
</span><br>
<span class="quotelev2">&gt; &gt; checking if C++ compiler and POSIX threads work with -pthread... yes
</span><br>
<span class="quotelev2">&gt; &gt; checking if F77 compiler and POSIX threads work with -Kthread... no
</span><br>
<span class="quotelev2">&gt; &gt; checking if F77 compiler and POSIX threads work with -kthread... no
</span><br>
<span class="quotelev2">&gt; &gt; checking if F77 compiler and POSIX threads work with -pthread... no
</span><br>
<span class="quotelev2">&gt; &gt; checking if F77 compiler and POSIX threads work with -pthreads... no
</span><br>
<span class="quotelev2">&gt; &gt; checking if F77 compiler and POSIX threads work with -mt... no
</span><br>
<span class="quotelev2">&gt; &gt; checking if F77 compiler and POSIX threads work with -mthreads... no
</span><br>
<span class="quotelev2">&gt; &gt; checking if F77 compiler and POSIX threads work with -lpthreads...  
</span><br>
<span class="quotelev1">&gt; no
</span><br>
<span class="quotelev2">&gt; &gt; checking if F77 compiler and POSIX threads work with -llthread... no
</span><br>
<span class="quotelev2">&gt; &gt; checking if F77 compiler and POSIX threads work with -lpthread... no
</span><br>
<span class="quotelev2">&gt; &gt; checking for PTHREAD_MUTEX_ERRORCHECK_NP... yes
</span><br>
<span class="quotelev2">&gt; &gt; checking for PTHREAD_MUTEX_ERRORCHECK... yes
</span><br>
<span class="quotelev2">&gt; &gt; checking for working POSIX threads package... no
</span><br>
<span class="quotelev2">&gt; &gt; checking if C compiler and Solaris threads work... no
</span><br>
<span class="quotelev2">&gt; &gt; checking if C++ compiler and Solaris threads work... no
</span><br>
<span class="quotelev2">&gt; &gt; checking if F77 compiler and Solaris threads work... no
</span><br>
<span class="quotelev2">&gt; &gt; checking for working Solaris threads package... no
</span><br>
<span class="quotelev2">&gt; &gt; checking for type of thread support... none found
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
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
<span class="quotelev1">&gt; End of users Digest, Vol 1202, Issue 4
</span><br>
<span class="quotelev1">&gt; **************************************
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8976/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8977.php">Geoffroy Pignot: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<li><strong>Previous message:</strong> <a href="8975.php">Geoffroy Pignot: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<li><strong>In reply to:</strong> <a href="8975.php">Geoffroy Pignot: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8977.php">Geoffroy Pignot: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
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
