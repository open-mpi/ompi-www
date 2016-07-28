<?
$subject_val = "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 12 01:27:49 2009" -->
<!-- isoreceived="20090512052749" -->
<!-- sent="Tue, 12 May 2009 07:27:40 +0200" -->
<!-- isosent="20090512052740" -->
<!-- name="Anton Starikov" -->
<!-- email="ant.starikov_at_[hidden]" -->
<!-- subject="Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??" -->
<!-- id="1A28BC32-5812-4575-BF0C-282D6B2F413F_at_gmail.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="021A7054-AF8A-4AE1-A27F-0759A3DFAFD8_at_open-mpi.org" -->
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
<strong>Date:</strong> 2009-05-12 01:27:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9296.php">ansul.srivastava1_at_[hidden]: "[OMPI users] Torque 2.2.1 problem with OpenMPI 1.2.5"</a>
<li><strong>Previous message:</strong> <a href="9294.php">feng chen: "[OMPI users] mpirun fails on remote applications"</a>
<li><strong>In reply to:</strong> <a href="9290.php">Ralph Castain: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9319.php">Ralph Castain: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<li><strong>Reply:</strong> <a href="9319.php">Ralph Castain: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Now there is another problem :)
<br>
<p>You can try oversubscribe node. At least by 1 task.
<br>
If you hostfile and rank file limit you at N procs, you can ask mpirun  
<br>
for N+1 and it wil be not rejected.
<br>
Although in reality there will be N tasks.
<br>
So, if your hostfile limit is 4, then &quot;mpirun -np 4&quot; and &quot;mpirun -np  
<br>
5&quot; both works, but in both cases there are only 4 tasks. It isn't  
<br>
crucial, because there is nor real oversubscription, but there is  
<br>
still some bug which can affect something in future.
<br>
<p><pre>
--
Anton Starikov.
On May 12, 2009, at 1:45 AM, Ralph Castain wrote:
&gt; This is fixed as of r21208.
&gt;
&gt; Thanks for reporting it!
&gt; Ralph
&gt;
&gt;
&gt; On May 11, 2009, at 12:51 PM, Anton Starikov wrote:
&gt;
&gt;&gt; Although removing this check solves problem of having more slots in  
&gt;&gt; rankfile than necessary, there is another problem.
&gt;&gt;
&gt;&gt; If I set rmaps_base_no_oversubscribe=1 then if, for example:
&gt;&gt;
&gt;&gt;
&gt;&gt; hostfile:
&gt;&gt;
&gt;&gt; node01
&gt;&gt; node01
&gt;&gt; node02
&gt;&gt; node02
&gt;&gt;
&gt;&gt; rankfile:
&gt;&gt;
&gt;&gt; rank 0=node01 slot=1
&gt;&gt; rank 1=node01 slot=0
&gt;&gt; rank 2=node02 slot=1
&gt;&gt; rank 3=node02 slot=0
&gt;&gt;
&gt;&gt; mpirun -np 4 ./something
&gt;&gt;
&gt;&gt; complains with:
&gt;&gt;
&gt;&gt; &quot;There are not enough slots available in the system to satisfy the  
&gt;&gt; 4 slots
&gt;&gt; that were requested by the application&quot;
&gt;&gt;
&gt;&gt; but &quot;mpirun -np 3 ./something&quot; will work though. It works, when you  
&gt;&gt; ask for 1 CPU less. And the same behavior in any case (shared  
&gt;&gt; nodes, non-shared nodes, multi-node)
&gt;&gt;
&gt;&gt; If you switch off rmaps_base_no_oversubscribe, then it works and  
&gt;&gt; all affinities set as it requested in rankfile, there is no  
&gt;&gt; oversubscription.
&gt;&gt;
&gt;&gt;
&gt;&gt; Anton.
&gt;&gt;
&gt;&gt; On May 5, 2009, at 3:08 PM, Ralph Castain wrote:
&gt;&gt;
&gt;&gt;&gt; Ah - thx for catching that, I'll remove that check. It no longer  
&gt;&gt;&gt; is required.
&gt;&gt;&gt;
&gt;&gt;&gt; Thx!
&gt;&gt;&gt;
&gt;&gt;&gt; On Tue, May 5, 2009 at 7:04 AM, Lenny Verkhovsky &lt;lenny.verkhovsky_at_[hidden] 
&gt;&gt;&gt; &gt; wrote:
&gt;&gt;&gt; According to the code it does cares.
&gt;&gt;&gt;
&gt;&gt;&gt; $vi orte/mca/rmaps/rank_file/rmaps_rank_file.c +572
&gt;&gt;&gt;
&gt;&gt;&gt; ival = orte_rmaps_rank_file_value.ival;
&gt;&gt;&gt; if ( ival &gt; (np-1) ) {
&gt;&gt;&gt; orte_show_help(&quot;help-rmaps_rank_file.txt&quot;, &quot;bad-rankfile&quot;, true,  
&gt;&gt;&gt; ival, rankfile);
&gt;&gt;&gt; rc = ORTE_ERR_BAD_PARAM;
&gt;&gt;&gt; goto unlock;
&gt;&gt;&gt; }
&gt;&gt;&gt;
&gt;&gt;&gt; If I remember correctly, I used an array to map ranks, and since  
&gt;&gt;&gt; the length of array is NP, maximum index must be less than np, so  
&gt;&gt;&gt; if you have the number of rank &gt; NP, you have no place to put it  
&gt;&gt;&gt; inside array.
&gt;&gt;&gt;
&gt;&gt;&gt; &quot;Likewise, if you have more procs than the rankfile specifies, we  
&gt;&gt;&gt; map the additional procs either byslot (default) or bynode (if you  
&gt;&gt;&gt; specify that option). So the rankfile doesn't need to contain an  
&gt;&gt;&gt; entry for every proc.&quot;  - Correct point.
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt; Lenny.
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt; On 5/5/09, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote: Sorry Lenny,  
&gt;&gt;&gt; but that isn't correct. The rankfile mapper doesn't care if the  
&gt;&gt;&gt; rankfile contains additional info - it only maps up to the number  
&gt;&gt;&gt; of processes, and ignores anything beyond that number. So there is  
&gt;&gt;&gt; no need to remove the additional info.
&gt;&gt;&gt;
&gt;&gt;&gt; Likewise, if you have more procs than the rankfile specifies, we  
&gt;&gt;&gt; map the additional procs either byslot (default) or bynode (if you  
&gt;&gt;&gt; specify that option). So the rankfile doesn't need to contain an  
&gt;&gt;&gt; entry for every proc.
&gt;&gt;&gt;
&gt;&gt;&gt; Just don't want to confuse folks.
&gt;&gt;&gt; Ralph
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt; On Tue, May 5, 2009 at 5:59 AM, Lenny Verkhovsky &lt;lenny.verkhovsky_at_[hidden] 
&gt;&gt;&gt; &gt; wrote:
&gt;&gt;&gt; Hi,
&gt;&gt;&gt; maximum rank number must be less then np.
&gt;&gt;&gt; if np=1 then there is only rank 0 in the system, so rank 1 is  
&gt;&gt;&gt; invalid.
&gt;&gt;&gt; please remove &quot;rank 1=node2 slot=*&quot; from the rankfile
&gt;&gt;&gt; Best regards,
&gt;&gt;&gt; Lenny.
&gt;&gt;&gt;
&gt;&gt;&gt; On Mon, May 4, 2009 at 11:14 AM, Geoffroy Pignot &lt;geopignot_at_[hidden] 
&gt;&gt;&gt; &gt; wrote:
&gt;&gt;&gt; Hi ,
&gt;&gt;&gt;
&gt;&gt;&gt; I got the openmpi-1.4a1r21095.tar.gz tarball, but unfortunately my  
&gt;&gt;&gt; command doesn't work
&gt;&gt;&gt;
&gt;&gt;&gt; cat rankf:
&gt;&gt;&gt; rank 0=node1 slot=*
&gt;&gt;&gt; rank 1=node2 slot=*
&gt;&gt;&gt;
&gt;&gt;&gt; cat hostf:
&gt;&gt;&gt; node1 slots=2
&gt;&gt;&gt; node2 slots=2
&gt;&gt;&gt;
&gt;&gt;&gt; mpirun  --rankfile rankf --hostfile hostf  --host node1 -n 1  
&gt;&gt;&gt; hostname : --host node2 -n 1 hostname
&gt;&gt;&gt;
&gt;&gt;&gt; Error, invalid rank (1) in the rankfile (rankf)
&gt;&gt;&gt;
&gt;&gt;&gt; --------------------------------------------------------------------------
&gt;&gt;&gt; [r011n006:28986] [[45541,0],0] ORTE_ERROR_LOG: Bad parameter in  
&gt;&gt;&gt; file rmaps_rank_file.c at line 403
&gt;&gt;&gt; [r011n006:28986] [[45541,0],0] ORTE_ERROR_LOG: Bad parameter in  
&gt;&gt;&gt; file base/rmaps_base_map_job.c at line 86
&gt;&gt;&gt; [r011n006:28986] [[45541,0],0] ORTE_ERROR_LOG: Bad parameter in  
&gt;&gt;&gt; file base/plm_base_launch_support.c at line 86
&gt;&gt;&gt; [r011n006:28986] [[45541,0],0] ORTE_ERROR_LOG: Bad parameter in  
&gt;&gt;&gt; file plm_rsh_module.c at line 1016
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt; Ralph, could you tell me if my command syntax is correct or not ?  
&gt;&gt;&gt; if not, give me the expected one ?
&gt;&gt;&gt;
&gt;&gt;&gt; Regards
&gt;&gt;&gt;
&gt;&gt;&gt; Geoffroy
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt; 2009/4/30 Geoffroy Pignot &lt;geopignot_at_[hidden]&gt;
&gt;&gt;&gt;
&gt;&gt;&gt; Immediately Sir !!! :)
&gt;&gt;&gt;
&gt;&gt;&gt; Thanks again Ralph
&gt;&gt;&gt;
&gt;&gt;&gt; Geoffroy
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt; ------------------------------
&gt;&gt;&gt;
&gt;&gt;&gt; Message: 2
&gt;&gt;&gt; Date: Thu, 30 Apr 2009 06:45:39 -0600
&gt;&gt;&gt; From: Ralph Castain &lt;rhc_at_[hidden]&gt;
&gt;&gt;&gt; Subject: Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??
&gt;&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
&gt;&gt;&gt; Message-ID:
&gt;&gt;&gt;      &lt;71d2d8cc0904300545v61a42fe1k50086d2704d0f7e6_at_[hidden]&gt;
&gt;&gt;&gt; Content-Type: text/plain; charset=&quot;iso-8859-1&quot;
&gt;&gt;&gt;
&gt;&gt;&gt; I believe this is fixed now in our development trunk - you can  
&gt;&gt;&gt; download any
&gt;&gt;&gt; tarball starting from last night and give it a try, if you like. Any
&gt;&gt;&gt; feedback would be appreciated.
&gt;&gt;&gt;
&gt;&gt;&gt; Ralph
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt; On Apr 14, 2009, at 7:57 AM, Ralph Castain wrote:
&gt;&gt;&gt;
&gt;&gt;&gt; Ah now, I didn't say it -worked-, did I? :-)
&gt;&gt;&gt;
&gt;&gt;&gt; Clearly a bug exists in the program. I'll try to take a look at it  
&gt;&gt;&gt; (if Lenny
&gt;&gt;&gt; doesn't get to it first), but it won't be until later in the week.
&gt;&gt;&gt;
&gt;&gt;&gt; On Apr 14, 2009, at 7:18 AM, Geoffroy Pignot wrote:
&gt;&gt;&gt;
&gt;&gt;&gt; I agree with you Ralph , and that 's what I expect from openmpi  
&gt;&gt;&gt; but my
&gt;&gt;&gt; second example shows that it's not working
&gt;&gt;&gt;
&gt;&gt;&gt; cat hostfile.0
&gt;&gt;&gt; r011n002 slots=4
&gt;&gt;&gt; r011n003 slots=4
&gt;&gt;&gt;
&gt;&gt;&gt; cat rankfile.0
&gt;&gt;&gt;  rank 0=r011n002 slot=0
&gt;&gt;&gt;  rank 1=r011n003 slot=1
&gt;&gt;&gt;
&gt;&gt;&gt; mpirun --hostfile hostfile.0 -rf rankfile.0 -n 1 hostname : -n 1  
&gt;&gt;&gt; hostname
&gt;&gt;&gt; ### CRASHED
&gt;&gt;&gt;
&gt;&gt;&gt; &gt; &gt; Error, invalid rank (1) in the rankfile (rankfile.0)
&gt;&gt;&gt; &gt; &gt;
&gt;&gt;&gt; &gt;  
&gt;&gt;&gt; --------------------------------------------------------------------------
&gt;&gt;&gt; &gt; &gt; [r011n002:25129] [[63976,0],0] ORTE_ERROR_LOG: Bad parameter  
&gt;&gt;&gt; in file
&gt;&gt;&gt; &gt; &gt; rmaps_rank_file.c at line 404
&gt;&gt;&gt; &gt; &gt; [r011n002:25129] [[63976,0],0] ORTE_ERROR_LOG: Bad parameter  
&gt;&gt;&gt; in file
&gt;&gt;&gt; &gt; &gt; base/rmaps_base_map_job.c at line 87
&gt;&gt;&gt; &gt; &gt; [r011n002:25129] [[63976,0],0] ORTE_ERROR_LOG: Bad parameter  
&gt;&gt;&gt; in file
&gt;&gt;&gt; &gt; &gt; base/plm_base_launch_support.c at line 77
&gt;&gt;&gt; &gt; &gt; [r011n002:25129] [[63976,0],0] ORTE_ERROR_LOG: Bad parameter  
&gt;&gt;&gt; in file
&gt;&gt;&gt; &gt; &gt; plm_rsh_module.c at line 985
&gt;&gt;&gt; &gt; &gt;
&gt;&gt;&gt; &gt;  
&gt;&gt;&gt; --------------------------------------------------------------------------
&gt;&gt;&gt; &gt; &gt; A daemon (pid unknown) died unexpectedly on signal 1  while
&gt;&gt;&gt; &gt; attempting to
&gt;&gt;&gt; &gt; &gt; launch so we are aborting.
&gt;&gt;&gt; &gt; &gt;
&gt;&gt;&gt; &gt; &gt; There may be more information reported by the environment (see
&gt;&gt;&gt; &gt; above).
&gt;&gt;&gt; &gt; &gt;
&gt;&gt;&gt; &gt; &gt; This may be because the daemon was unable to find all the needed
&gt;&gt;&gt; &gt; shared
&gt;&gt;&gt; &gt; &gt; libraries on the remote node. You may set your LD_LIBRARY_PATH  
&gt;&gt;&gt; to
&gt;&gt;&gt; &gt; have the
&gt;&gt;&gt; &gt; &gt; location of the shared libraries on the remote nodes and this  
&gt;&gt;&gt; will
&gt;&gt;&gt; &gt; &gt; automatically be forwarded to the remote nodes.
&gt;&gt;&gt; &gt; &gt;
&gt;&gt;&gt; &gt;  
&gt;&gt;&gt; --------------------------------------------------------------------------
&gt;&gt;&gt; &gt; &gt;
&gt;&gt;&gt; &gt;  
&gt;&gt;&gt; --------------------------------------------------------------------------
&gt;&gt;&gt; &gt; &gt; orterun noticed that the job aborted, but has no info as to the
&gt;&gt;&gt; &gt; process
&gt;&gt;&gt; &gt; &gt; that caused that situation.
&gt;&gt;&gt; &gt; &gt;
&gt;&gt;&gt; &gt;  
&gt;&gt;&gt; --------------------------------------------------------------------------
&gt;&gt;&gt; &gt; &gt; orterun: clean termination accomplished
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt; Message: 4
&gt;&gt;&gt; Date: Tue, 14 Apr 2009 06:55:58 -0600
&gt;&gt;&gt; From: Ralph Castain &lt;rhc_at_[hidden]&gt;
&gt;&gt;&gt; Subject: Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??
&gt;&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
&gt;&gt;&gt; Message-ID: &lt;F6290ADA-A196-43F0-A853-CBCB802D8D9C_at_[hidden]&gt;
&gt;&gt;&gt; Content-Type: text/plain; charset=&quot;us-ascii&quot;; Format=&quot;flowed&quot;;
&gt;&gt;&gt;     DelSp=&quot;yes&quot;
&gt;&gt;&gt;
&gt;&gt;&gt; The rankfile cuts across the entire job - it isn't applied on an
&gt;&gt;&gt; app_context basis. So the ranks in your rankfile must correspond to
&gt;&gt;&gt; the eventual rank of each process in the cmd line.
&gt;&gt;&gt;
&gt;&gt;&gt; Unfortunately, that means you have to count ranks. In your case, you
&gt;&gt;&gt; only have four, so that makes life easier. Your rankfile would look
&gt;&gt;&gt; something like this:
&gt;&gt;&gt;
&gt;&gt;&gt; rank 0=r001n001 slot=0
&gt;&gt;&gt; rank 1=r001n002 slot=1
&gt;&gt;&gt; rank 2=r001n001 slot=1
&gt;&gt;&gt; rank 3=r001n002 slot=2
&gt;&gt;&gt;
&gt;&gt;&gt; HTH
&gt;&gt;&gt; Ralph
&gt;&gt;&gt;
&gt;&gt;&gt; On Apr 14, 2009, at 12:19 AM, Geoffroy Pignot wrote:
&gt;&gt;&gt;
&gt;&gt;&gt; &gt; Hi,
&gt;&gt;&gt; &gt;
&gt;&gt;&gt; &gt; I agree that my examples are not very clear. What I want to do  
&gt;&gt;&gt; is to
&gt;&gt;&gt; &gt; launch a multiexes application (masters-slaves) and benefit from  
&gt;&gt;&gt; the
&gt;&gt;&gt; &gt; processor affinity.
&gt;&gt;&gt; &gt; Could you show me how to convert this command , using -rf option
&gt;&gt;&gt; &gt; (whatever the affinity is)
&gt;&gt;&gt; &gt;
&gt;&gt;&gt; &gt; mpirun -n 1 -host r001n001 master.x options1  : -n 1 -host  
&gt;&gt;&gt; r001n002
&gt;&gt;&gt; &gt; master.x options2 : -n 1 -host r001n001 slave.x options3 : -n 1 -
&gt;&gt;&gt; &gt; host r001n002 slave.x options4
&gt;&gt;&gt; &gt;
&gt;&gt;&gt; &gt; Thanks for your help
&gt;&gt;&gt; &gt;
&gt;&gt;&gt; &gt; Geoffroy
&gt;&gt;&gt; &gt;
&gt;&gt;&gt; &gt;
&gt;&gt;&gt; &gt;
&gt;&gt;&gt; &gt;
&gt;&gt;&gt; &gt;
&gt;&gt;&gt; &gt; Message: 2
&gt;&gt;&gt; &gt; Date: Sun, 12 Apr 2009 18:26:35 +0300
&gt;&gt;&gt; &gt; From: Lenny Verkhovsky &lt;lenny.verkhovsky_at_[hidden]&gt;
&gt;&gt;&gt; &gt; Subject: Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??
&gt;&gt;&gt; &gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
&gt;&gt;&gt; &gt; Message-ID:
&gt;&gt;&gt; &gt;        &lt;453d39990904120826t2e1d1d33l7bb1fe3de65b5361_at_[hidden] 
&gt;&gt;&gt; &gt;
&gt;&gt;&gt; &gt; Content-Type: text/plain; charset=&quot;iso-8859-1&quot;
&gt;&gt;&gt; &gt;
&gt;&gt;&gt; &gt; Hi,
&gt;&gt;&gt; &gt;
&gt;&gt;&gt; &gt; The first &quot;crash&quot; is OK, since your rankfile has ranks 0 and 1
&gt;&gt;&gt; &gt; defined,
&gt;&gt;&gt; &gt; while n=1, which means only rank 0 is present and can be  
&gt;&gt;&gt; allocated.
&gt;&gt;&gt; &gt;
&gt;&gt;&gt; &gt; NP must be &gt;= the largest rank in rankfile.
&gt;&gt;&gt; &gt;
&gt;&gt;&gt; &gt; What exactly are you trying to do ?
&gt;&gt;&gt; &gt;
&gt;&gt;&gt; &gt; I tried to recreate your seqv but all I got was
&gt;&gt;&gt; &gt;
&gt;&gt;&gt; &gt; ~/work/svn/ompi/trunk/build_x86-64/install/bin/mpirun --hostfile
&gt;&gt;&gt; &gt; hostfile.0
&gt;&gt;&gt; &gt; -rf rankfile.0 -n 1 hostname : -rf rankfile.1 -n 1 hostname
&gt;&gt;&gt; &gt; [witch19:30798] mca: base: component_find: paffinity
&gt;&gt;&gt; &gt; &quot;mca_paffinity_linux&quot;
&gt;&gt;&gt; &gt; uses an MCA interface that is not recognized (component MCA  
&gt;&gt;&gt; v1.0.0 !=
&gt;&gt;&gt; &gt; supported MCA v2.0.0) -- ignored
&gt;&gt;&gt; &gt;  
&gt;&gt;&gt; --------------------------------------------------------------------------
&gt;&gt;&gt; &gt; It looks like opal_init failed for some reason; your parallel
&gt;&gt;&gt; &gt; process is
&gt;&gt;&gt; &gt; likely to abort. There are many reasons that a parallel process  
&gt;&gt;&gt; can
&gt;&gt;&gt; &gt; fail during opal_init; some of which are due to configuration or
&gt;&gt;&gt; &gt; environment problems. This failure appears to be an internal  
&gt;&gt;&gt; failure;
&gt;&gt;&gt; &gt; here's some additional information (which may only be relevant  
&gt;&gt;&gt; to an
&gt;&gt;&gt; &gt; Open MPI developer):
&gt;&gt;&gt; &gt;
&gt;&gt;&gt; &gt;  opal_carto_base_select failed
&gt;&gt;&gt; &gt;  --&gt; Returned value -13 instead of OPAL_SUCCESS
&gt;&gt;&gt; &gt;  
&gt;&gt;&gt; --------------------------------------------------------------------------
&gt;&gt;&gt; &gt; [witch19:30798] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in  
&gt;&gt;&gt; file
&gt;&gt;&gt; &gt; ../../orte/runtime/orte_init.c at line 78
&gt;&gt;&gt; &gt; [witch19:30798] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in  
&gt;&gt;&gt; file
&gt;&gt;&gt; &gt; ../../orte/orted/orted_main.c at line 344
&gt;&gt;&gt; &gt;  
&gt;&gt;&gt; --------------------------------------------------------------------------
&gt;&gt;&gt; &gt; A daemon (pid 11629) died unexpectedly with status 243 while
&gt;&gt;&gt; &gt; attempting
&gt;&gt;&gt; &gt; to launch so we are aborting.
&gt;&gt;&gt; &gt;
&gt;&gt;&gt; &gt; There may be more information reported by the environment (see  
&gt;&gt;&gt; above).
&gt;&gt;&gt; &gt;
&gt;&gt;&gt; &gt; This may be because the daemon was unable to find all the needed
&gt;&gt;&gt; &gt; shared
&gt;&gt;&gt; &gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to
&gt;&gt;&gt; &gt; have the
&gt;&gt;&gt; &gt; location of the shared libraries on the remote nodes and this will
&gt;&gt;&gt; &gt; automatically be forwarded to the remote nodes.
&gt;&gt;&gt; &gt;  
&gt;&gt;&gt; --------------------------------------------------------------------------
&gt;&gt;&gt; &gt;  
&gt;&gt;&gt; --------------------------------------------------------------------------
&gt;&gt;&gt; &gt; mpirun noticed that the job aborted, but has no info as to the  
&gt;&gt;&gt; process
&gt;&gt;&gt; &gt; that caused that situation.
&gt;&gt;&gt; &gt;  
&gt;&gt;&gt; --------------------------------------------------------------------------
&gt;&gt;&gt; &gt; mpirun: clean termination accomplished
&gt;&gt;&gt; &gt;
&gt;&gt;&gt; &gt;
&gt;&gt;&gt; &gt; Lenny.
&gt;&gt;&gt; &gt;
&gt;&gt;&gt; &gt;
&gt;&gt;&gt; &gt; On 4/10/09, Geoffroy Pignot &lt;geopignot_at_[hidden]&gt; wrote:
&gt;&gt;&gt; &gt; &gt;
&gt;&gt;&gt; &gt; &gt; Hi ,
&gt;&gt;&gt; &gt; &gt;
&gt;&gt;&gt; &gt; &gt; I am currently testing the process affinity capabilities of
&gt;&gt;&gt; &gt; openmpi and I
&gt;&gt;&gt; &gt; &gt; would like to know if the rankfile behaviour I will describe  
&gt;&gt;&gt; below
&gt;&gt;&gt; &gt; is normal
&gt;&gt;&gt; &gt; &gt; or not ?
&gt;&gt;&gt; &gt; &gt;
&gt;&gt;&gt; &gt; &gt; cat hostfile.0
&gt;&gt;&gt; &gt; &gt; r011n002 slots=4
&gt;&gt;&gt; &gt; &gt; r011n003 slots=4
&gt;&gt;&gt; &gt; &gt;
&gt;&gt;&gt; &gt; &gt; cat rankfile.0
&gt;&gt;&gt; &gt; &gt; rank 0=r011n002 slot=0
&gt;&gt;&gt; &gt; &gt; rank 1=r011n003 slot=1
&gt;&gt;&gt; &gt; &gt;
&gt;&gt;&gt; &gt; &gt;
&gt;&gt;&gt; &gt; &gt;
&gt;&gt;&gt; &gt;
&gt;&gt;&gt; ##################################################################################
&gt;&gt;&gt; &gt; &gt;
&gt;&gt;&gt; &gt; &gt; mpirun --hostfile hostfile.0 -rf rankfile.0 -n 2  hostname ###  
&gt;&gt;&gt; OK
&gt;&gt;&gt; &gt; &gt; r011n002
&gt;&gt;&gt; &gt; &gt; r011n003
&gt;&gt;&gt; &gt; &gt;
&gt;&gt;&gt; &gt; &gt;
&gt;&gt;&gt; &gt; &gt;
&gt;&gt;&gt; &gt;
&gt;&gt;&gt; ##################################################################################
&gt;&gt;&gt; &gt; &gt; but
&gt;&gt;&gt; &gt; &gt; mpirun --hostfile hostfile.0 -rf rankfile.0 -n 1 hostname : -n 1
&gt;&gt;&gt; &gt; hostname
&gt;&gt;&gt; &gt; &gt; ### CRASHED
&gt;&gt;&gt; &gt; &gt; *
&gt;&gt;&gt; &gt; &gt;
&gt;&gt;&gt; &gt;  
&gt;&gt;&gt; --------------------------------------------------------------------------
&gt;&gt;&gt; &gt; &gt; Error, invalid rank (1) in the rankfile (rankfile.0)
&gt;&gt;&gt; &gt; &gt;
&gt;&gt;&gt; &gt;  
&gt;&gt;&gt; --------------------------------------------------------------------------
&gt;&gt;&gt; &gt; &gt; [r011n002:25129] [[63976,0],0] ORTE_ERROR_LOG: Bad parameter  
&gt;&gt;&gt; in file
&gt;&gt;&gt; &gt; &gt; rmaps_rank_file.c at line 404
&gt;&gt;&gt; &gt; &gt; [r011n002:25129] [[63976,0],0] ORTE_ERROR_LOG: Bad parameter  
&gt;&gt;&gt; in file
&gt;&gt;&gt; &gt; &gt; base/rmaps_base_map_job.c at line 87
&gt;&gt;&gt; &gt; &gt; [r011n002:25129] [[63976,0],0] ORTE_ERROR_LOG: Bad parameter  
&gt;&gt;&gt; in file
&gt;&gt;&gt; &gt; &gt; base/plm_base_launch_support.c at line 77
&gt;&gt;&gt; &gt; &gt; [r011n002:25129] [[63976,0],0] ORTE_ERROR_LOG: Bad parameter  
&gt;&gt;&gt; in file
&gt;&gt;&gt; &gt; &gt; plm_rsh_module.c at line 985
&gt;&gt;&gt; &gt; &gt;
&gt;&gt;&gt; &gt;  
&gt;&gt;&gt; --------------------------------------------------------------------------
&gt;&gt;&gt; &gt; &gt; A daemon (pid unknown) died unexpectedly on signal 1  while
&gt;&gt;&gt; &gt; attempting to
&gt;&gt;&gt; &gt; &gt; launch so we are aborting.
&gt;&gt;&gt; &gt; &gt;
&gt;&gt;&gt; &gt; &gt; There may be more information reported by the environment (see
&gt;&gt;&gt; &gt; above).
&gt;&gt;&gt; &gt; &gt;
&gt;&gt;&gt; &gt; &gt; This may be because the daemon was unable to find all the needed
&gt;&gt;&gt; &gt; shared
&gt;&gt;&gt; &gt; &gt; libraries on the remote node. You may set your LD_LIBRARY_PATH  
&gt;&gt;&gt; to
&gt;&gt;&gt; &gt; have the
&gt;&gt;&gt; &gt; &gt; location of the shared libraries on the remote nodes and this  
&gt;&gt;&gt; will
&gt;&gt;&gt; &gt; &gt; automatically be forwarded to the remote nodes.
&gt;&gt;&gt; &gt; &gt;
&gt;&gt;&gt; &gt;  
&gt;&gt;&gt; --------------------------------------------------------------------------
&gt;&gt;&gt; &gt; &gt;
&gt;&gt;&gt; &gt;  
&gt;&gt;&gt; --------------------------------------------------------------------------
&gt;&gt;&gt; &gt; &gt; orterun noticed that the job aborted, but has no info as to the
&gt;&gt;&gt; &gt; process
&gt;&gt;&gt; &gt; &gt; that caused that situation.
&gt;&gt;&gt; &gt; &gt;
&gt;&gt;&gt; &gt;  
&gt;&gt;&gt; --------------------------------------------------------------------------
&gt;&gt;&gt; &gt; &gt; orterun: clean termination accomplished
&gt;&gt;&gt; &gt; &gt; *
&gt;&gt;&gt; &gt; &gt; It seems that the rankfile option is not propagted to the second
&gt;&gt;&gt; &gt; command
&gt;&gt;&gt; &gt; &gt; line ; there is no global understanding of the ranking inside a
&gt;&gt;&gt; &gt; mpirun
&gt;&gt;&gt; &gt; &gt; command.
&gt;&gt;&gt; &gt; &gt;
&gt;&gt;&gt; &gt; &gt;
&gt;&gt;&gt; &gt; &gt;
&gt;&gt;&gt; &gt;
&gt;&gt;&gt; ##################################################################################
&gt;&gt;&gt; &gt; &gt;
&gt;&gt;&gt; &gt; &gt; Assuming that , I tried to provide a rankfile to each command  
&gt;&gt;&gt; line:
&gt;&gt;&gt; &gt; &gt;
&gt;&gt;&gt; &gt; &gt; cat rankfile.0
&gt;&gt;&gt; &gt; &gt; rank 0=r011n002 slot=0
&gt;&gt;&gt; &gt; &gt;
&gt;&gt;&gt; &gt; &gt; cat rankfile.1
&gt;&gt;&gt; &gt; &gt; rank 0=r011n003 slot=1
&gt;&gt;&gt; &gt; &gt;
&gt;&gt;&gt; &gt; &gt; mpirun --hostfile hostfile.0 -rf rankfile.0 -n 1 hostname : -rf
&gt;&gt;&gt; &gt; rankfile.1
&gt;&gt;&gt; &gt; &gt; -n 1 hostname ### CRASHED
&gt;&gt;&gt; &gt; &gt; *[r011n002:28778] *** Process received signal ***
&gt;&gt;&gt; &gt; &gt; [r011n002:28778] Signal: Segmentation fault (11)
&gt;&gt;&gt; &gt; &gt; [r011n002:28778] Signal code: Address not mapped (1)
&gt;&gt;&gt; &gt; &gt; [r011n002:28778] Failing at address: 0x34
&gt;&gt;&gt; &gt; &gt; [r011n002:28778] [ 0] [0xffffe600]
&gt;&gt;&gt; &gt; &gt; [r011n002:28778] [ 1]
&gt;&gt;&gt; &gt; &gt; /tmp/HALMPI/openmpi-1.3.1/lib/libopen-rte.so.
&gt;&gt;&gt; &gt; 0(orte_odls_base_default_get_add_procs_data+0x55d)
&gt;&gt;&gt; &gt; &gt; [0x5557decd]
&gt;&gt;&gt; &gt; &gt; [r011n002:28778] [ 2]
&gt;&gt;&gt; &gt; &gt; /tmp/HALMPI/openmpi-1.3.1/lib/libopen-rte.so.
&gt;&gt;&gt; &gt; 0(orte_plm_base_launch_apps+0x117)
&gt;&gt;&gt; &gt; &gt; [0x555842a7]
&gt;&gt;&gt; &gt; &gt; [r011n002:28778] [ 3] /tmp/HALMPI/openmpi-1.3.1/lib/openmpi/
&gt;&gt;&gt; &gt; mca_plm_rsh.so
&gt;&gt;&gt; &gt; &gt; [0x556098c0]
&gt;&gt;&gt; &gt; &gt; [r011n002:28778] [ 4] /tmp/HALMPI/openmpi-1.3.1/bin/orterun
&gt;&gt;&gt; &gt; [0x804aa27]
&gt;&gt;&gt; &gt; &gt; [r011n002:28778] [ 5] /tmp/HALMPI/openmpi-1.3.1/bin/orterun
&gt;&gt;&gt; &gt; [0x804a022]
&gt;&gt;&gt; &gt; &gt; [r011n002:28778] [ 6] /lib/libc.so.6(__libc_start_main+0xdc)
&gt;&gt;&gt; &gt; [0x9f1dec]
&gt;&gt;&gt; &gt; &gt; [r011n002:28778] [ 7] /tmp/HALMPI/openmpi-1.3.1/bin/orterun
&gt;&gt;&gt; &gt; [0x8049f71]
&gt;&gt;&gt; &gt; &gt; [r011n002:28778] *** End of error message ***
&gt;&gt;&gt; &gt; &gt; Segmentation fault (core dumped)*
&gt;&gt;&gt; &gt; &gt;
&gt;&gt;&gt; &gt; &gt;
&gt;&gt;&gt; &gt; &gt;
&gt;&gt;&gt; &gt; &gt; I hope that I've found a bug because it would be very important
&gt;&gt;&gt; &gt; for me to
&gt;&gt;&gt; &gt; &gt; have this kind of capabiliy .
&gt;&gt;&gt; &gt; &gt; Launch a multiexe mpirun command line and be able to bind my  
&gt;&gt;&gt; exes
&gt;&gt;&gt; &gt; and
&gt;&gt;&gt; &gt; &gt; sockets together.
&gt;&gt;&gt; &gt; &gt;
&gt;&gt;&gt; &gt; &gt; Thanks in advance for your help
&gt;&gt;&gt; &gt; &gt;
&gt;&gt;&gt; &gt; &gt; Geoffroy
&gt;&gt;&gt; &gt; _______________________________________________
&gt;&gt;&gt; &gt; users mailing list
&gt;&gt;&gt; &gt; users_at_[hidden]
&gt;&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt;&gt;
&gt;&gt;&gt; -------------- next part --------------
&gt;&gt;&gt; HTML attachment scrubbed and removed
&gt;&gt;&gt;
&gt;&gt;&gt; ------------------------------
&gt;&gt;&gt;
&gt;&gt;&gt; _______________________________________________
&gt;&gt;&gt; users mailing list
&gt;&gt;&gt; users_at_[hidden]
&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt;&gt;
&gt;&gt;&gt; End of users Digest, Vol 1202, Issue 2
&gt;&gt;&gt; **************************************
&gt;&gt;&gt;
&gt;&gt;&gt; _______________________________________________
&gt;&gt;&gt; users mailing list
&gt;&gt;&gt; users_at_[hidden]
&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt;&gt;
&gt;&gt;&gt; _______________________________________________
&gt;&gt;&gt; users mailing list
&gt;&gt;&gt; users_at_[hidden]
&gt;&gt;&gt; -------------- next part --------------
&gt;&gt;&gt; HTML attachment scrubbed and removed
&gt;&gt;&gt;
&gt;&gt;&gt; ------------------------------
&gt;&gt;&gt;
&gt;&gt;&gt; _______________________________________________
&gt;&gt;&gt; users mailing list
&gt;&gt;&gt; users_at_[hidden]
&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt;&gt;
&gt;&gt;&gt; End of users Digest, Vol 1218, Issue 2
&gt;&gt;&gt; **************************************
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt; _______________________________________________
&gt;&gt;&gt; users mailing list
&gt;&gt;&gt; users_at_[hidden]
&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt; _______________________________________________
&gt;&gt;&gt; users mailing list
&gt;&gt;&gt; users_at_[hidden]
&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt; _______________________________________________
&gt;&gt;&gt; users mailing list
&gt;&gt;&gt; users_at_[hidden]
&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt; _______________________________________________
&gt;&gt;&gt; users mailing list
&gt;&gt;&gt; users_at_[hidden]
&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt;&gt;
&gt;&gt;&gt; _______________________________________________
&gt;&gt;&gt; users mailing list
&gt;&gt;&gt; users_at_[hidden]
&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt;
&gt;&gt; _______________________________________________
&gt;&gt; users mailing list
&gt;&gt; users_at_[hidden]
&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9296.php">ansul.srivastava1_at_[hidden]: "[OMPI users] Torque 2.2.1 problem with OpenMPI 1.2.5"</a>
<li><strong>Previous message:</strong> <a href="9294.php">feng chen: "[OMPI users] mpirun fails on remote applications"</a>
<li><strong>In reply to:</strong> <a href="9290.php">Ralph Castain: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9319.php">Ralph Castain: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<li><strong>Reply:</strong> <a href="9319.php">Ralph Castain: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
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
