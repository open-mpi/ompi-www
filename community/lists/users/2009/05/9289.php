<?
$subject_val = "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 11 14:51:29 2009" -->
<!-- isoreceived="20090511185129" -->
<!-- sent="Mon, 11 May 2009 20:51:19 +0200" -->
<!-- isosent="20090511185119" -->
<!-- name="Anton Starikov" -->
<!-- email="ant.starikov_at_[hidden]" -->
<!-- subject="Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??" -->
<!-- id="EFFE9858-8C23-4F75-8234-DB68635D99E6_at_gmail.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="71d2d8cc0905050608x19710b2fu55eee92830007781_at_mail.gmail.com" -->
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
<strong>From:</strong> Anton Starikov (<em>ant.starikov_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-11 14:51:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9290.php">Ralph Castain: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<li><strong>Previous message:</strong> <a href="9288.php">Josh Hursey: "Re: [OMPI users] *** An error occurred in MPI_Init"</a>
<li><strong>In reply to:</strong> <a href="9217.php">Ralph Castain: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9290.php">Ralph Castain: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<li><strong>Reply:</strong> <a href="9290.php">Ralph Castain: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Although removing this check solves problem of having more slots in  
<br>
rankfile than necessary, there is another problem.
<br>
<p>If I set rmaps_base_no_oversubscribe=1 then if, for example:
<br>
<p><p>hostfile:
<br>
<p>node01
<br>
node01
<br>
node02
<br>
node02
<br>
<p>rankfile:
<br>
<p>rank 0=node01 slot=1
<br>
rank 1=node01 slot=0
<br>
rank 2=node02 slot=1
<br>
rank 3=node02 slot=0
<br>
<p>mpirun -np 4 ./something
<br>
<p>complains with:
<br>
<p>&quot;There are not enough slots available in the system to satisfy the 4  
<br>
slots
<br>
that were requested by the application&quot;
<br>
<p>but &quot;mpirun -np 3 ./something&quot; will work though. It works, when you  
<br>
ask for 1 CPU less. And the same behavior in any case (shared nodes,  
<br>
non-shared nodes, multi-node)
<br>
<p>If you switch off rmaps_base_no_oversubscribe, then it works and all  
<br>
affinities set as it requested in rankfile, there is no  
<br>
oversubscription.
<br>
<p><p>Anton.
<br>
<p>On May 5, 2009, at 3:08 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Ah - thx for catching that, I'll remove that check. It no longer is  
</span><br>
<span class="quotelev1">&gt; required.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thx!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, May 5, 2009 at 7:04 AM, Lenny Verkhovsky &lt;lenny.verkhovsky_at_[hidden] 
</span><br>
<span class="quotelev2">&gt; &gt; wrote:
</span><br>
<span class="quotelev1">&gt; According to the code it does cares.
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
<span class="quotelev1">&gt;   orte_show_help(&quot;help-rmaps_rank_file.txt&quot;, &quot;bad-rankfile&quot;, true,  
</span><br>
<span class="quotelev1">&gt; ival, rankfile);
</span><br>
<span class="quotelev1">&gt;   rc = ORTE_ERR_BAD_PARAM;
</span><br>
<span class="quotelev1">&gt;   goto unlock;
</span><br>
<span class="quotelev1">&gt;   }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I remember correctly, I used an array to map ranks, and since the  
</span><br>
<span class="quotelev1">&gt; length of array is NP, maximum index must be less than np, so if you  
</span><br>
<span class="quotelev1">&gt; have the number of rank &gt; NP, you have no place to put it inside  
</span><br>
<span class="quotelev1">&gt; array.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;Likewise, if you have more procs than the rankfile specifies, we  
</span><br>
<span class="quotelev1">&gt; map the additional procs either byslot (default) or bynode (if you  
</span><br>
<span class="quotelev1">&gt; specify that option). So the rankfile doesn't need to contain an  
</span><br>
<span class="quotelev1">&gt; entry for every proc.&quot;  - Correct point.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Lenny.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 5/5/09, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote: Sorry Lenny, but  
</span><br>
<span class="quotelev1">&gt; that isn't correct. The rankfile mapper doesn't care if the rankfile  
</span><br>
<span class="quotelev1">&gt; contains additional info - it only maps up to the number of  
</span><br>
<span class="quotelev1">&gt; processes, and ignores anything beyond that number. So there is no  
</span><br>
<span class="quotelev1">&gt; need to remove the additional info.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Likewise, if you have more procs than the rankfile specifies, we map  
</span><br>
<span class="quotelev1">&gt; the additional procs either byslot (default) or bynode (if you  
</span><br>
<span class="quotelev1">&gt; specify that option). So the rankfile doesn't need to contain an  
</span><br>
<span class="quotelev1">&gt; entry for every proc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just don't want to confuse folks.
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, May 5, 2009 at 5:59 AM, Lenny Verkhovsky &lt;lenny.verkhovsky_at_[hidden] 
</span><br>
<span class="quotelev2">&gt; &gt; wrote:
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; maximum rank number must be less then np.
</span><br>
<span class="quotelev1">&gt; if np=1 then there is only rank 0 in the system, so rank 1 is invalid.
</span><br>
<span class="quotelev1">&gt; please remove &quot;rank 1=node2 slot=*&quot; from the rankfile
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; Lenny.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, May 4, 2009 at 11:14 AM, Geoffroy Pignot  
</span><br>
<span class="quotelev1">&gt; &lt;geopignot_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Hi ,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I got the openmpi-1.4a1r21095.tar.gz tarball, but unfortunately my  
</span><br>
<span class="quotelev1">&gt; command doesn't work
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cat rankf:
</span><br>
<span class="quotelev1">&gt; rank 0=node1 slot=*
</span><br>
<span class="quotelev1">&gt; rank 1=node2 slot=*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cat hostf:
</span><br>
<span class="quotelev1">&gt; node1 slots=2
</span><br>
<span class="quotelev1">&gt; node2 slots=2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun  --rankfile rankf --hostfile hostf  --host node1 -n 1  
</span><br>
<span class="quotelev1">&gt; hostname : --host node2 -n 1 hostname
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Error, invalid rank (1) in the rankfile (rankf)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [r011n006:28986] [[45541,0],0] ORTE_ERROR_LOG: Bad parameter in file  
</span><br>
<span class="quotelev1">&gt; rmaps_rank_file.c at line 403
</span><br>
<span class="quotelev1">&gt; [r011n006:28986] [[45541,0],0] ORTE_ERROR_LOG: Bad parameter in file  
</span><br>
<span class="quotelev1">&gt; base/rmaps_base_map_job.c at line 86
</span><br>
<span class="quotelev1">&gt; [r011n006:28986] [[45541,0],0] ORTE_ERROR_LOG: Bad parameter in file  
</span><br>
<span class="quotelev1">&gt; base/plm_base_launch_support.c at line 86
</span><br>
<span class="quotelev1">&gt; [r011n006:28986] [[45541,0],0] ORTE_ERROR_LOG: Bad parameter in file  
</span><br>
<span class="quotelev1">&gt; plm_rsh_module.c at line 1016
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph, could you tell me if my command syntax is correct or not ? if  
</span><br>
<span class="quotelev1">&gt; not, give me the expected one ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Geoffroy
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2009/4/30 Geoffroy Pignot &lt;geopignot_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Immediately Sir !!! :)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks again Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Geoffroy
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
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Message: 2
</span><br>
<span class="quotelev1">&gt; Date: Thu, 30 Apr 2009 06:45:39 -0600
</span><br>
<span class="quotelev1">&gt; From: Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID:
</span><br>
<span class="quotelev1">&gt;        &lt;71d2d8cc0904300545v61a42fe1k50086d2704d0f7e6_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=&quot;iso-8859-1&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I believe this is fixed now in our development trunk - you can  
</span><br>
<span class="quotelev1">&gt; download any
</span><br>
<span class="quotelev1">&gt; tarball starting from last night and give it a try, if you like. Any
</span><br>
<span class="quotelev1">&gt; feedback would be appreciated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 14, 2009, at 7:57 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ah now, I didn't say it -worked-, did I? :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Clearly a bug exists in the program. I'll try to take a look at it  
</span><br>
<span class="quotelev1">&gt; (if Lenny
</span><br>
<span class="quotelev1">&gt; doesn't get to it first), but it won't be until later in the week.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 14, 2009, at 7:18 AM, Geoffroy Pignot wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I agree with you Ralph , and that 's what I expect from openmpi but my
</span><br>
<span class="quotelev1">&gt; second example shows that it's not working
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cat hostfile.0
</span><br>
<span class="quotelev1">&gt;   r011n002 slots=4
</span><br>
<span class="quotelev1">&gt;   r011n003 slots=4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  cat rankfile.0
</span><br>
<span class="quotelev1">&gt;    rank 0=r011n002 slot=0
</span><br>
<span class="quotelev1">&gt;    rank 1=r011n003 slot=1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun --hostfile hostfile.0 -rf rankfile.0 -n 1 hostname : -n 1  
</span><br>
<span class="quotelev1">&gt; hostname
</span><br>
<span class="quotelev1">&gt; ### CRASHED
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Error, invalid rank (1) in the rankfile (rankfile.0)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [r011n002:25129] [[63976,0],0] ORTE_ERROR_LOG: Bad parameter in  
</span><br>
<span class="quotelev1">&gt; file
</span><br>
<span class="quotelev3">&gt; &gt; &gt; rmaps_rank_file.c at line 404
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [r011n002:25129] [[63976,0],0] ORTE_ERROR_LOG: Bad parameter in  
</span><br>
<span class="quotelev1">&gt; file
</span><br>
<span class="quotelev3">&gt; &gt; &gt; base/rmaps_base_map_job.c at line 87
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [r011n002:25129] [[63976,0],0] ORTE_ERROR_LOG: Bad parameter in  
</span><br>
<span class="quotelev1">&gt; file
</span><br>
<span class="quotelev3">&gt; &gt; &gt; base/plm_base_launch_support.c at line 77
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [r011n002:25129] [[63976,0],0] ORTE_ERROR_LOG: Bad parameter in  
</span><br>
<span class="quotelev1">&gt; file
</span><br>
<span class="quotelev3">&gt; &gt; &gt; plm_rsh_module.c at line 985
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt; &gt; A daemon (pid unknown) died unexpectedly on signal 1  while
</span><br>
<span class="quotelev2">&gt; &gt; attempting to
</span><br>
<span class="quotelev3">&gt; &gt; &gt; launch so we are aborting.
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
<span class="quotelev2">&gt; &gt; shared
</span><br>
<span class="quotelev3">&gt; &gt; &gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to
</span><br>
<span class="quotelev2">&gt; &gt; have the
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
<span class="quotelev3">&gt; &gt; &gt; orterun noticed that the job aborted, but has no info as to the
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
<span class="quotelev3">&gt; &gt; &gt; orterun: clean termination accomplished
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Message: 4
</span><br>
<span class="quotelev1">&gt; Date: Tue, 14 Apr 2009 06:55:58 -0600
</span><br>
<span class="quotelev1">&gt; From: Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;F6290ADA-A196-43F0-A853-CBCB802D8D9C_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=&quot;us-ascii&quot;; Format=&quot;flowed&quot;;
</span><br>
<span class="quotelev1">&gt;       DelSp=&quot;yes&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The rankfile cuts across the entire job - it isn't applied on an
</span><br>
<span class="quotelev1">&gt; app_context basis. So the ranks in your rankfile must correspond to
</span><br>
<span class="quotelev1">&gt; the eventual rank of each process in the cmd line.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Unfortunately, that means you have to count ranks. In your case, you
</span><br>
<span class="quotelev1">&gt; only have four, so that makes life easier. Your rankfile would look
</span><br>
<span class="quotelev1">&gt; something like this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; rank 0=r001n001 slot=0
</span><br>
<span class="quotelev1">&gt; rank 1=r001n002 slot=1
</span><br>
<span class="quotelev1">&gt; rank 2=r001n001 slot=1
</span><br>
<span class="quotelev1">&gt; rank 3=r001n002 slot=2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; HTH
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 14, 2009, at 12:19 AM, Geoffroy Pignot wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I agree that my examples are not very clear. What I want to do is to
</span><br>
<span class="quotelev2">&gt; &gt; launch a multiexes application (masters-slaves) and benefit from the
</span><br>
<span class="quotelev2">&gt; &gt; processor affinity.
</span><br>
<span class="quotelev2">&gt; &gt; Could you show me how to convert this command , using -rf option
</span><br>
<span class="quotelev2">&gt; &gt; (whatever the affinity is)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; mpirun -n 1 -host r001n001 master.x options1  : -n 1 -host r001n002
</span><br>
<span class="quotelev2">&gt; &gt; master.x options2 : -n 1 -host r001n001 slave.x options3 : -n 1 -
</span><br>
<span class="quotelev2">&gt; &gt; host r001n002 slave.x options4
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks for your help
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Geoffroy
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Message: 2
</span><br>
<span class="quotelev2">&gt; &gt; Date: Sun, 12 Apr 2009 18:26:35 +0300
</span><br>
<span class="quotelev2">&gt; &gt; From: Lenny Verkhovsky &lt;lenny.verkhovsky_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Subject: Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??
</span><br>
<span class="quotelev2">&gt; &gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Message-ID:
</span><br>
<span class="quotelev2">&gt; &gt;        &lt;453d39990904120826t2e1d1d33l7bb1fe3de65b5361_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Content-Type: text/plain; charset=&quot;iso-8859-1&quot;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The first &quot;crash&quot; is OK, since your rankfile has ranks 0 and 1
</span><br>
<span class="quotelev2">&gt; &gt; defined,
</span><br>
<span class="quotelev2">&gt; &gt; while n=1, which means only rank 0 is present and can be allocated.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; NP must be &gt;= the largest rank in rankfile.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; What exactly are you trying to do ?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I tried to recreate your seqv but all I got was
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ~/work/svn/ompi/trunk/build_x86-64/install/bin/mpirun --hostfile
</span><br>
<span class="quotelev2">&gt; &gt; hostfile.0
</span><br>
<span class="quotelev2">&gt; &gt; -rf rankfile.0 -n 1 hostname : -rf rankfile.1 -n 1 hostname
</span><br>
<span class="quotelev2">&gt; &gt; [witch19:30798] mca: base: component_find: paffinity
</span><br>
<span class="quotelev2">&gt; &gt; &quot;mca_paffinity_linux&quot;
</span><br>
<span class="quotelev2">&gt; &gt; uses an MCA interface that is not recognized (component MCA  
</span><br>
<span class="quotelev1">&gt; v1.0.0 !=
</span><br>
<span class="quotelev2">&gt; &gt; supported MCA v2.0.0) -- ignored
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; It looks like opal_init failed for some reason; your parallel
</span><br>
<span class="quotelev2">&gt; &gt; process is
</span><br>
<span class="quotelev2">&gt; &gt; likely to abort. There are many reasons that a parallel process can
</span><br>
<span class="quotelev2">&gt; &gt; fail during opal_init; some of which are due to configuration or
</span><br>
<span class="quotelev2">&gt; &gt; environment problems. This failure appears to be an internal  
</span><br>
<span class="quotelev1">&gt; failure;
</span><br>
<span class="quotelev2">&gt; &gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev2">&gt; &gt; Open MPI developer):
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  opal_carto_base_select failed
</span><br>
<span class="quotelev2">&gt; &gt;  --&gt; Returned value -13 instead of OPAL_SUCCESS
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; [witch19:30798] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in  
</span><br>
<span class="quotelev1">&gt; file
</span><br>
<span class="quotelev2">&gt; &gt; ../../orte/runtime/orte_init.c at line 78
</span><br>
<span class="quotelev2">&gt; &gt; [witch19:30798] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in  
</span><br>
<span class="quotelev1">&gt; file
</span><br>
<span class="quotelev2">&gt; &gt; ../../orte/orted/orted_main.c at line 344
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; A daemon (pid 11629) died unexpectedly with status 243 while
</span><br>
<span class="quotelev2">&gt; &gt; attempting
</span><br>
<span class="quotelev2">&gt; &gt; to launch so we are aborting.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; There may be more information reported by the environment (see  
</span><br>
<span class="quotelev1">&gt; above).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This may be because the daemon was unable to find all the needed
</span><br>
<span class="quotelev2">&gt; &gt; shared
</span><br>
<span class="quotelev2">&gt; &gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to
</span><br>
<span class="quotelev2">&gt; &gt; have the
</span><br>
<span class="quotelev2">&gt; &gt; location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev2">&gt; &gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; mpirun noticed that the job aborted, but has no info as to the  
</span><br>
<span class="quotelev1">&gt; process
</span><br>
<span class="quotelev2">&gt; &gt; that caused that situation.
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; mpirun: clean termination accomplished
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Lenny.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On 4/10/09, Geoffroy Pignot &lt;geopignot_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hi ,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I am currently testing the process affinity capabilities of
</span><br>
<span class="quotelev2">&gt; &gt; openmpi and I
</span><br>
<span class="quotelev3">&gt; &gt; &gt; would like to know if the rankfile behaviour I will describe below
</span><br>
<span class="quotelev2">&gt; &gt; is normal
</span><br>
<span class="quotelev3">&gt; &gt; &gt; or not ?
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; cat hostfile.0
</span><br>
<span class="quotelev3">&gt; &gt; &gt; r011n002 slots=4
</span><br>
<span class="quotelev3">&gt; &gt; &gt; r011n003 slots=4
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; cat rankfile.0
</span><br>
<span class="quotelev3">&gt; &gt; &gt; rank 0=r011n002 slot=0
</span><br>
<span class="quotelev3">&gt; &gt; &gt; rank 1=r011n003 slot=1
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; ##################################################################################
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; mpirun --hostfile hostfile.0 -rf rankfile.0 -n 2  hostname ### OK
</span><br>
<span class="quotelev3">&gt; &gt; &gt; r011n002
</span><br>
<span class="quotelev3">&gt; &gt; &gt; r011n003
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; ##################################################################################
</span><br>
<span class="quotelev3">&gt; &gt; &gt; but
</span><br>
<span class="quotelev3">&gt; &gt; &gt; mpirun --hostfile hostfile.0 -rf rankfile.0 -n 1 hostname : -n 1
</span><br>
<span class="quotelev2">&gt; &gt; hostname
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ### CRASHED
</span><br>
<span class="quotelev3">&gt; &gt; &gt; *
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Error, invalid rank (1) in the rankfile (rankfile.0)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [r011n002:25129] [[63976,0],0] ORTE_ERROR_LOG: Bad parameter in  
</span><br>
<span class="quotelev1">&gt; file
</span><br>
<span class="quotelev3">&gt; &gt; &gt; rmaps_rank_file.c at line 404
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [r011n002:25129] [[63976,0],0] ORTE_ERROR_LOG: Bad parameter in  
</span><br>
<span class="quotelev1">&gt; file
</span><br>
<span class="quotelev3">&gt; &gt; &gt; base/rmaps_base_map_job.c at line 87
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [r011n002:25129] [[63976,0],0] ORTE_ERROR_LOG: Bad parameter in  
</span><br>
<span class="quotelev1">&gt; file
</span><br>
<span class="quotelev3">&gt; &gt; &gt; base/plm_base_launch_support.c at line 77
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [r011n002:25129] [[63976,0],0] ORTE_ERROR_LOG: Bad parameter in  
</span><br>
<span class="quotelev1">&gt; file
</span><br>
<span class="quotelev3">&gt; &gt; &gt; plm_rsh_module.c at line 985
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt; &gt; A daemon (pid unknown) died unexpectedly on signal 1  while
</span><br>
<span class="quotelev2">&gt; &gt; attempting to
</span><br>
<span class="quotelev3">&gt; &gt; &gt; launch so we are aborting.
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
<span class="quotelev2">&gt; &gt; shared
</span><br>
<span class="quotelev3">&gt; &gt; &gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to
</span><br>
<span class="quotelev2">&gt; &gt; have the
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
<span class="quotelev3">&gt; &gt; &gt; orterun noticed that the job aborted, but has no info as to the
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
<span class="quotelev3">&gt; &gt; &gt; orterun: clean termination accomplished
</span><br>
<span class="quotelev3">&gt; &gt; &gt; *
</span><br>
<span class="quotelev3">&gt; &gt; &gt; It seems that the rankfile option is not propagted to the second
</span><br>
<span class="quotelev2">&gt; &gt; command
</span><br>
<span class="quotelev3">&gt; &gt; &gt; line ; there is no global understanding of the ranking inside a
</span><br>
<span class="quotelev2">&gt; &gt; mpirun
</span><br>
<span class="quotelev3">&gt; &gt; &gt; command.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; ##################################################################################
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Assuming that , I tried to provide a rankfile to each command  
</span><br>
<span class="quotelev1">&gt; line:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; cat rankfile.0
</span><br>
<span class="quotelev3">&gt; &gt; &gt; rank 0=r011n002 slot=0
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; cat rankfile.1
</span><br>
<span class="quotelev3">&gt; &gt; &gt; rank 0=r011n003 slot=1
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; mpirun --hostfile hostfile.0 -rf rankfile.0 -n 1 hostname : -rf
</span><br>
<span class="quotelev2">&gt; &gt; rankfile.1
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -n 1 hostname ### CRASHED
</span><br>
<span class="quotelev3">&gt; &gt; &gt; *[r011n002:28778] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [r011n002:28778] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [r011n002:28778] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [r011n002:28778] Failing at address: 0x34
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [r011n002:28778] [ 0] [0xffffe600]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [r011n002:28778] [ 1]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; /tmp/HALMPI/openmpi-1.3.1/lib/libopen-rte.so.
</span><br>
<span class="quotelev2">&gt; &gt; 0(orte_odls_base_default_get_add_procs_data+0x55d)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [0x5557decd]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [r011n002:28778] [ 2]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; /tmp/HALMPI/openmpi-1.3.1/lib/libopen-rte.so.
</span><br>
<span class="quotelev2">&gt; &gt; 0(orte_plm_base_launch_apps+0x117)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [0x555842a7]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [r011n002:28778] [ 3] /tmp/HALMPI/openmpi-1.3.1/lib/openmpi/
</span><br>
<span class="quotelev2">&gt; &gt; mca_plm_rsh.so
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [0x556098c0]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [r011n002:28778] [ 4] /tmp/HALMPI/openmpi-1.3.1/bin/orterun
</span><br>
<span class="quotelev2">&gt; &gt; [0x804aa27]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [r011n002:28778] [ 5] /tmp/HALMPI/openmpi-1.3.1/bin/orterun
</span><br>
<span class="quotelev2">&gt; &gt; [0x804a022]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [r011n002:28778] [ 6] /lib/libc.so.6(__libc_start_main+0xdc)
</span><br>
<span class="quotelev2">&gt; &gt; [0x9f1dec]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [r011n002:28778] [ 7] /tmp/HALMPI/openmpi-1.3.1/bin/orterun
</span><br>
<span class="quotelev2">&gt; &gt; [0x8049f71]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [r011n002:28778] *** End of error message ***
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Segmentation fault (core dumped)*
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I hope that I've found a bug because it would be very important
</span><br>
<span class="quotelev2">&gt; &gt; for me to
</span><br>
<span class="quotelev3">&gt; &gt; &gt; have this kind of capabiliy .
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Launch a multiexe mpirun command line and be able to bind my exes
</span><br>
<span class="quotelev2">&gt; &gt; and
</span><br>
<span class="quotelev3">&gt; &gt; &gt; sockets together.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Thanks in advance for your help
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Geoffroy
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
<span class="quotelev1">&gt; End of users Digest, Vol 1202, Issue 2
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
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
<span class="quotelev1">&gt; End of users Digest, Vol 1218, Issue 2
</span><br>
<span class="quotelev1">&gt; **************************************
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9290.php">Ralph Castain: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<li><strong>Previous message:</strong> <a href="9288.php">Josh Hursey: "Re: [OMPI users] *** An error occurred in MPI_Init"</a>
<li><strong>In reply to:</strong> <a href="9217.php">Ralph Castain: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9290.php">Ralph Castain: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<li><strong>Reply:</strong> <a href="9290.php">Ralph Castain: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
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
