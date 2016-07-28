<?
$subject_val = "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 30 08:45:45 2009" -->
<!-- isoreceived="20090430124545" -->
<!-- sent="Thu, 30 Apr 2009 06:45:39 -0600" -->
<!-- isosent="20090430124539" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??" -->
<!-- id="71d2d8cc0904300545v61a42fe1k50086d2704d0f7e6_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="[OMPI users] 1.3.1 -rf rankfile behaviour ??" -->
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
<strong>Date:</strong> 2009-04-30 08:45:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9153.php">Geoffroy Pignot: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<li><strong>Previous message:</strong> <a href="9151.php">Jeff Squyres: "Re: [OMPI users] users Digest, Vol 1217, Issue 2, Message3"</a>
<li><strong>Maybe in reply to:</strong> <a href="8858.php">Geoffroy Pignot: "[OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9153.php">Geoffroy Pignot: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I believe this is fixed now in our development trunk - you can download any
<br>
tarball starting from last night and give it a try, if you like. Any
<br>
feedback would be appreciated.
<br>
<p>Ralph
<br>
<p><p>On Apr 14, 2009, at 7:57 AM, Ralph Castain wrote:
<br>
<p>Ah now, I didn't say it -worked-, did I? :-)
<br>
<p>Clearly a bug exists in the program. I'll try to take a look at it (if Lenny
<br>
doesn't get to it first), but it won't be until later in the week.
<br>
<p>On Apr 14, 2009, at 7:18 AM, Geoffroy Pignot wrote:
<br>
<p>I agree with you Ralph , and that 's what I expect from openmpi but my
<br>
second example shows that it's not working
<br>
<p>cat hostfile.0
<br>
&nbsp;&nbsp;&nbsp;r011n002 slots=4
<br>
&nbsp;&nbsp;&nbsp;r011n003 slots=4
<br>
<p>&nbsp;cat rankfile.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;rank 0=r011n002 slot=0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;rank 1=r011n003 slot=1
<br>
<p>mpirun --hostfile hostfile.0 -rf rankfile.0 -n 1 hostname : -n 1 hostname
<br>
### CRASHED
<br>
<p><span class="quotelev2">&gt; &gt; Error, invalid rank (1) in the rankfile (rankfile.0)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; [r011n002:25129] [[63976,0],0] ORTE_ERROR_LOG: Bad parameter in file
</span><br>
<span class="quotelev2">&gt; &gt; rmaps_rank_file.c at line 404
</span><br>
<span class="quotelev2">&gt; &gt; [r011n002:25129] [[63976,0],0] ORTE_ERROR_LOG: Bad parameter in file
</span><br>
<span class="quotelev2">&gt; &gt; base/rmaps_base_map_job.c at line 87
</span><br>
<span class="quotelev2">&gt; &gt; [r011n002:25129] [[63976,0],0] ORTE_ERROR_LOG: Bad parameter in file
</span><br>
<span class="quotelev2">&gt; &gt; base/plm_base_launch_support.c at line 77
</span><br>
<span class="quotelev2">&gt; &gt; [r011n002:25129] [[63976,0],0] ORTE_ERROR_LOG: Bad parameter in file
</span><br>
<span class="quotelev2">&gt; &gt; plm_rsh_module.c at line 985
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; A daemon (pid unknown) died unexpectedly on signal 1  while
</span><br>
<span class="quotelev1">&gt; attempting to
</span><br>
<span class="quotelev2">&gt; &gt; launch so we are aborting.
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
<span class="quotelev1">&gt; shared
</span><br>
<span class="quotelev2">&gt; &gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to
</span><br>
<span class="quotelev1">&gt; have the
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
<span class="quotelev2">&gt; &gt; orterun noticed that the job aborted, but has no info as to the
</span><br>
<span class="quotelev1">&gt; process
</span><br>
<span class="quotelev2">&gt; &gt; that caused that situation.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; orterun: clean termination accomplished
</span><br>
<p><p><p>Message: 4
<br>
Date: Tue, 14 Apr 2009 06:55:58 -0600
<br>
From: Ralph Castain &lt;rhc_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??
<br>
To: Open MPI Users &lt;users_at_[hidden]&gt;
<br>
Message-ID: &lt;F6290ADA-A196-43F0-A853-CBCB802D8D9C_at_[hidden]&gt;
<br>
Content-Type: text/plain; charset=&quot;us-ascii&quot;; Format=&quot;flowed&quot;;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DelSp=&quot;yes&quot;
<br>
<p>The rankfile cuts across the entire job - it isn't applied on an
<br>
app_context basis. So the ranks in your rankfile must correspond to
<br>
the eventual rank of each process in the cmd line.
<br>
<p>Unfortunately, that means you have to count ranks. In your case, you
<br>
only have four, so that makes life easier. Your rankfile would look
<br>
something like this:
<br>
<p>rank 0=r001n001 slot=0
<br>
rank 1=r001n002 slot=1
<br>
rank 2=r001n001 slot=1
<br>
rank 3=r001n002 slot=2
<br>
<p>HTH
<br>
Ralph
<br>
<p>On Apr 14, 2009, at 12:19 AM, Geoffroy Pignot wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I agree that my examples are not very clear. What I want to do is to
</span><br>
<span class="quotelev1">&gt; launch a multiexes application (masters-slaves) and benefit from the
</span><br>
<span class="quotelev1">&gt; processor affinity.
</span><br>
<span class="quotelev1">&gt; Could you show me how to convert this command , using -rf option
</span><br>
<span class="quotelev1">&gt; (whatever the affinity is)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -n 1 -host r001n001 master.x options1  : -n 1 -host r001n002
</span><br>
<span class="quotelev1">&gt; master.x options2 : -n 1 -host r001n001 slave.x options3 : -n 1 -
</span><br>
<span class="quotelev1">&gt; host r001n002 slave.x options4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for your help
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
<span class="quotelev1">&gt; Message: 2
</span><br>
<span class="quotelev1">&gt; Date: Sun, 12 Apr 2009 18:26:35 +0300
</span><br>
<span class="quotelev1">&gt; From: Lenny Verkhovsky &lt;lenny.verkhovsky_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID:
</span><br>
<span class="quotelev1">&gt;        &lt;453d39990904120826t2e1d1d33l7bb1fe3de65b5361_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=&quot;iso-8859-1&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The first &quot;crash&quot; is OK, since your rankfile has ranks 0 and 1
</span><br>
<span class="quotelev1">&gt; defined,
</span><br>
<span class="quotelev1">&gt; while n=1, which means only rank 0 is present and can be allocated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; NP must be &gt;= the largest rank in rankfile.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What exactly are you trying to do ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tried to recreate your seqv but all I got was
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ~/work/svn/ompi/trunk/build_x86-64/install/bin/mpirun --hostfile
</span><br>
<span class="quotelev1">&gt; hostfile.0
</span><br>
<span class="quotelev1">&gt; -rf rankfile.0 -n 1 hostname : -rf rankfile.1 -n 1 hostname
</span><br>
<span class="quotelev1">&gt; [witch19:30798] mca: base: component_find: paffinity
</span><br>
<span class="quotelev1">&gt; &quot;mca_paffinity_linux&quot;
</span><br>
<span class="quotelev1">&gt; uses an MCA interface that is not recognized (component MCA v1.0.0 !=
</span><br>
<span class="quotelev1">&gt; supported MCA v2.0.0) -- ignored
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like opal_init failed for some reason; your parallel
</span><br>
<span class="quotelev1">&gt; process is
</span><br>
<span class="quotelev1">&gt; likely to abort. There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during opal_init; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt; environment problems. This failure appears to be an internal failure;
</span><br>
<span class="quotelev1">&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev1">&gt; Open MPI developer):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  opal_carto_base_select failed
</span><br>
<span class="quotelev1">&gt;  --&gt; Returned value -13 instead of OPAL_SUCCESS
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [witch19:30798] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev1">&gt; ../../orte/runtime/orte_init.c at line 78
</span><br>
<span class="quotelev1">&gt; [witch19:30798] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev1">&gt; ../../orte/orted/orted_main.c at line 344
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; A daemon (pid 11629) died unexpectedly with status 243 while
</span><br>
<span class="quotelev1">&gt; attempting
</span><br>
<span class="quotelev1">&gt; to launch so we are aborting.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There may be more information reported by the environment (see above).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This may be because the daemon was unable to find all the needed
</span><br>
<span class="quotelev1">&gt; shared
</span><br>
<span class="quotelev1">&gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to
</span><br>
<span class="quotelev1">&gt; have the
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
<span class="quotelev1">&gt; Lenny.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 4/10/09, Geoffroy Pignot &lt;geopignot_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi ,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am currently testing the process affinity capabilities of
</span><br>
<span class="quotelev1">&gt; openmpi and I
</span><br>
<span class="quotelev2">&gt; &gt; would like to know if the rankfile behaviour I will describe below
</span><br>
<span class="quotelev1">&gt; is normal
</span><br>
<span class="quotelev2">&gt; &gt; or not ?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; cat hostfile.0
</span><br>
<span class="quotelev2">&gt; &gt; r011n002 slots=4
</span><br>
<span class="quotelev2">&gt; &gt; r011n003 slots=4
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; cat rankfile.0
</span><br>
<span class="quotelev2">&gt; &gt; rank 0=r011n002 slot=0
</span><br>
<span class="quotelev2">&gt; &gt; rank 1=r011n003 slot=1
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
##################################################################################
<br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; mpirun --hostfile hostfile.0 -rf rankfile.0 -n 2  hostname ### OK
</span><br>
<span class="quotelev2">&gt; &gt; r011n002
</span><br>
<span class="quotelev2">&gt; &gt; r011n003
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
##################################################################################
<br>
<span class="quotelev2">&gt; &gt; but
</span><br>
<span class="quotelev2">&gt; &gt; mpirun --hostfile hostfile.0 -rf rankfile.0 -n 1 hostname : -n 1
</span><br>
<span class="quotelev1">&gt; hostname
</span><br>
<span class="quotelev2">&gt; &gt; ### CRASHED
</span><br>
<span class="quotelev2">&gt; &gt; *
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; Error, invalid rank (1) in the rankfile (rankfile.0)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; [r011n002:25129] [[63976,0],0] ORTE_ERROR_LOG: Bad parameter in file
</span><br>
<span class="quotelev2">&gt; &gt; rmaps_rank_file.c at line 404
</span><br>
<span class="quotelev2">&gt; &gt; [r011n002:25129] [[63976,0],0] ORTE_ERROR_LOG: Bad parameter in file
</span><br>
<span class="quotelev2">&gt; &gt; base/rmaps_base_map_job.c at line 87
</span><br>
<span class="quotelev2">&gt; &gt; [r011n002:25129] [[63976,0],0] ORTE_ERROR_LOG: Bad parameter in file
</span><br>
<span class="quotelev2">&gt; &gt; base/plm_base_launch_support.c at line 77
</span><br>
<span class="quotelev2">&gt; &gt; [r011n002:25129] [[63976,0],0] ORTE_ERROR_LOG: Bad parameter in file
</span><br>
<span class="quotelev2">&gt; &gt; plm_rsh_module.c at line 985
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; A daemon (pid unknown) died unexpectedly on signal 1  while
</span><br>
<span class="quotelev1">&gt; attempting to
</span><br>
<span class="quotelev2">&gt; &gt; launch so we are aborting.
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
<span class="quotelev1">&gt; shared
</span><br>
<span class="quotelev2">&gt; &gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to
</span><br>
<span class="quotelev1">&gt; have the
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
<span class="quotelev2">&gt; &gt; orterun noticed that the job aborted, but has no info as to the
</span><br>
<span class="quotelev1">&gt; process
</span><br>
<span class="quotelev2">&gt; &gt; that caused that situation.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; orterun: clean termination accomplished
</span><br>
<span class="quotelev2">&gt; &gt; *
</span><br>
<span class="quotelev2">&gt; &gt; It seems that the rankfile option is not propagted to the second
</span><br>
<span class="quotelev1">&gt; command
</span><br>
<span class="quotelev2">&gt; &gt; line ; there is no global understanding of the ranking inside a
</span><br>
<span class="quotelev1">&gt; mpirun
</span><br>
<span class="quotelev2">&gt; &gt; command.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
##################################################################################
<br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Assuming that , I tried to provide a rankfile to each command line:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; cat rankfile.0
</span><br>
<span class="quotelev2">&gt; &gt; rank 0=r011n002 slot=0
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; cat rankfile.1
</span><br>
<span class="quotelev2">&gt; &gt; rank 0=r011n003 slot=1
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; mpirun --hostfile hostfile.0 -rf rankfile.0 -n 1 hostname : -rf
</span><br>
<span class="quotelev1">&gt; rankfile.1
</span><br>
<span class="quotelev2">&gt; &gt; -n 1 hostname ### CRASHED
</span><br>
<span class="quotelev2">&gt; &gt; *[r011n002:28778] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt; &gt; [r011n002:28778] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev2">&gt; &gt; [r011n002:28778] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev2">&gt; &gt; [r011n002:28778] Failing at address: 0x34
</span><br>
<span class="quotelev2">&gt; &gt; [r011n002:28778] [ 0] [0xffffe600]
</span><br>
<span class="quotelev2">&gt; &gt; [r011n002:28778] [ 1]
</span><br>
<span class="quotelev2">&gt; &gt; /tmp/HALMPI/openmpi-1.3.1/lib/libopen-rte.so.
</span><br>
<span class="quotelev1">&gt; 0(orte_odls_base_default_get_add_procs_data+0x55d)
</span><br>
<span class="quotelev2">&gt; &gt; [0x5557decd]
</span><br>
<span class="quotelev2">&gt; &gt; [r011n002:28778] [ 2]
</span><br>
<span class="quotelev2">&gt; &gt; /tmp/HALMPI/openmpi-1.3.1/lib/libopen-rte.so.
</span><br>
<span class="quotelev1">&gt; 0(orte_plm_base_launch_apps+0x117)
</span><br>
<span class="quotelev2">&gt; &gt; [0x555842a7]
</span><br>
<span class="quotelev2">&gt; &gt; [r011n002:28778] [ 3] /tmp/HALMPI/openmpi-1.3.1/lib/openmpi/
</span><br>
<span class="quotelev1">&gt; mca_plm_rsh.so
</span><br>
<span class="quotelev2">&gt; &gt; [0x556098c0]
</span><br>
<span class="quotelev2">&gt; &gt; [r011n002:28778] [ 4] /tmp/HALMPI/openmpi-1.3.1/bin/orterun
</span><br>
<span class="quotelev1">&gt; [0x804aa27]
</span><br>
<span class="quotelev2">&gt; &gt; [r011n002:28778] [ 5] /tmp/HALMPI/openmpi-1.3.1/bin/orterun
</span><br>
<span class="quotelev1">&gt; [0x804a022]
</span><br>
<span class="quotelev2">&gt; &gt; [r011n002:28778] [ 6] /lib/libc.so.6(__libc_start_main+0xdc)
</span><br>
<span class="quotelev1">&gt; [0x9f1dec]
</span><br>
<span class="quotelev2">&gt; &gt; [r011n002:28778] [ 7] /tmp/HALMPI/openmpi-1.3.1/bin/orterun
</span><br>
<span class="quotelev1">&gt; [0x8049f71]
</span><br>
<span class="quotelev2">&gt; &gt; [r011n002:28778] *** End of error message ***
</span><br>
<span class="quotelev2">&gt; &gt; Segmentation fault (core dumped)*
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I hope that I've found a bug because it would be very important
</span><br>
<span class="quotelev1">&gt; for me to
</span><br>
<span class="quotelev2">&gt; &gt; have this kind of capabiliy .
</span><br>
<span class="quotelev2">&gt; &gt; Launch a multiexe mpirun command line and be able to bind my exes
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev2">&gt; &gt; sockets together.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks in advance for your help
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Geoffroy
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p>-------------- next part --------------
<br>
HTML attachment scrubbed and removed
<br>
<p>------------------------------
<br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p>End of users Digest, Vol 1202, Issue 2
<br>
**************************************
<br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9152/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9153.php">Geoffroy Pignot: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<li><strong>Previous message:</strong> <a href="9151.php">Jeff Squyres: "Re: [OMPI users] users Digest, Vol 1217, Issue 2, Message3"</a>
<li><strong>Maybe in reply to:</strong> <a href="8858.php">Geoffroy Pignot: "[OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9153.php">Geoffroy Pignot: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
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
