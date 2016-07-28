<?
$subject_val = "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 14 02:19:08 2009" -->
<!-- isoreceived="20090414061908" -->
<!-- sent="Tue, 14 Apr 2009 08:19:02 +0200" -->
<!-- isosent="20090414061902" -->
<!-- name="Geoffroy Pignot" -->
<!-- email="geopignot_at_[hidden]" -->
<!-- subject="Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??" -->
<!-- id="b4f9bf870904132319t3780aadfw5f332c8aebdfc921_at_mail.gmail.com" -->
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
<strong>From:</strong> Geoffroy Pignot (<em>geopignot_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-14 02:19:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8888.php">Åke Sandgren: "Re: [OMPI users] PGI Fortran pthread support"</a>
<li><strong>Previous message:</strong> <a href="8886.php">Jeff Squyres: "Re: [OMPI users] PGI Fortran pthread support"</a>
<li><strong>Maybe in reply to:</strong> <a href="8858.php">Geoffroy Pignot: "[OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8893.php">Ralph Castain: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<li><strong>Reply:</strong> <a href="8893.php">Ralph Castain: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I agree that my examples are not very clear. What I want to do is to launch
<br>
a multiexes application (masters-slaves) and benefit from the processor
<br>
affinity.
<br>
Could you show me how to convert this command , using -rf option (whatever
<br>
the affinity is)
<br>
<p>mpirun -n 1 -host r001n001 master.x options1  : -n 1 -host r001n002 master.x
<br>
options2 : -n 1 -host r001n001 slave.x options3 : -n 1 -host r001n002
<br>
slave.x options4
<br>
<p>Thanks for your help
<br>
<p>Geoffroy
<br>
<p><p><p><p><p><span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; The first &quot;crash&quot; is OK, since your rankfile has ranks 0 and 1 defined,
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
<span class="quotelev1">&gt; ~/work/svn/ompi/trunk/build_x86-64/install/bin/mpirun --hostfile hostfile.0
</span><br>
<span class="quotelev1">&gt; -rf rankfile.0 -n 1 hostname : -rf rankfile.1 -n 1 hostname
</span><br>
<span class="quotelev1">&gt; [witch19:30798] mca: base: component_find: paffinity &quot;mca_paffinity_linux&quot;
</span><br>
<span class="quotelev1">&gt; uses an MCA interface that is not recognized (component MCA v1.0.0 !=
</span><br>
<span class="quotelev1">&gt; supported MCA v2.0.0) -- ignored
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like opal_init failed for some reason; your parallel process is
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
<span class="quotelev1">&gt; A daemon (pid 11629) died unexpectedly with status 243 while attempting
</span><br>
<span class="quotelev1">&gt; to launch so we are aborting.
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
<span class="quotelev2">&gt; &gt; I am currently testing the process affinity capabilities of openmpi and I
</span><br>
<span class="quotelev2">&gt; &gt; would like to know if the rankfile behaviour I will describe below is
</span><br>
<span class="quotelev1">&gt; normal
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
<span class="quotelev1">&gt; ##################################################################################
</span><br>
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
<span class="quotelev1">&gt; ##################################################################################
</span><br>
<span class="quotelev2">&gt; &gt; but
</span><br>
<span class="quotelev2">&gt; &gt; mpirun --hostfile hostfile.0 -rf rankfile.0 -n 1 hostname : -n 1 hostname
</span><br>
<span class="quotelev2">&gt; &gt; ### CRASHED
</span><br>
<span class="quotelev2">&gt; &gt; *
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;  --------------------------------------------------------------------------
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
<span class="quotelev2">&gt; &gt; A daemon (pid unknown) died unexpectedly on signal 1  while attempting to
</span><br>
<span class="quotelev2">&gt; &gt; launch so we are aborting.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; There may be more information reported by the environment (see above).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This may be because the daemon was unable to find all the needed shared
</span><br>
<span class="quotelev2">&gt; &gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to have
</span><br>
<span class="quotelev1">&gt; the
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
<span class="quotelev2">&gt; &gt; orterun noticed that the job aborted, but has no info as to the process
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
<span class="quotelev2">&gt; &gt; It seems that the rankfile option is not propagted to the second command
</span><br>
<span class="quotelev2">&gt; &gt; line ; there is no global understanding of the ranking inside a mpirun
</span><br>
<span class="quotelev2">&gt; &gt; command.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; ##################################################################################
</span><br>
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
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; /tmp/HALMPI/openmpi-1.3.1/lib/libopen-rte.so.0(orte_odls_base_default_get_add_procs_data+0x55d)
</span><br>
<span class="quotelev2">&gt; &gt; [0x5557decd]
</span><br>
<span class="quotelev2">&gt; &gt; [r011n002:28778] [ 2]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; /tmp/HALMPI/openmpi-1.3.1/lib/libopen-rte.so.0(orte_plm_base_launch_apps+0x117)
</span><br>
<span class="quotelev2">&gt; &gt; [0x555842a7]
</span><br>
<span class="quotelev2">&gt; &gt; [r011n002:28778] [ 3]
</span><br>
<span class="quotelev1">&gt; /tmp/HALMPI/openmpi-1.3.1/lib/openmpi/mca_plm_rsh.so
</span><br>
<span class="quotelev2">&gt; &gt; [0x556098c0]
</span><br>
<span class="quotelev2">&gt; &gt; [r011n002:28778] [ 4] /tmp/HALMPI/openmpi-1.3.1/bin/orterun [0x804aa27]
</span><br>
<span class="quotelev2">&gt; &gt; [r011n002:28778] [ 5] /tmp/HALMPI/openmpi-1.3.1/bin/orterun [0x804a022]
</span><br>
<span class="quotelev2">&gt; &gt; [r011n002:28778] [ 6] /lib/libc.so.6(__libc_start_main+0xdc) [0x9f1dec]
</span><br>
<span class="quotelev2">&gt; &gt; [r011n002:28778] [ 7] /tmp/HALMPI/openmpi-1.3.1/bin/orterun [0x8049f71]
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
<span class="quotelev2">&gt; &gt; I hope that I've found a bug because it would be very important for me to
</span><br>
<span class="quotelev2">&gt; &gt; have this kind of capabiliy .
</span><br>
<span class="quotelev2">&gt; &gt; Launch a multiexe mpirun command line and be able to bind my exes and
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8887/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8888.php">Åke Sandgren: "Re: [OMPI users] PGI Fortran pthread support"</a>
<li><strong>Previous message:</strong> <a href="8886.php">Jeff Squyres: "Re: [OMPI users] PGI Fortran pthread support"</a>
<li><strong>Maybe in reply to:</strong> <a href="8858.php">Geoffroy Pignot: "[OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8893.php">Ralph Castain: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<li><strong>Reply:</strong> <a href="8893.php">Ralph Castain: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
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
