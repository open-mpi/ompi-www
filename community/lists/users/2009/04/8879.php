<?
$subject_val = "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Apr 12 11:26:41 2009" -->
<!-- isoreceived="20090412152641" -->
<!-- sent="Sun, 12 Apr 2009 18:26:35 +0300" -->
<!-- isosent="20090412152635" -->
<!-- name="Lenny Verkhovsky" -->
<!-- email="lenny.verkhovsky_at_[hidden]" -->
<!-- subject="Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??" -->
<!-- id="453d39990904120826t2e1d1d33l7bb1fe3de65b5361_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="b4f9bf870904100245l55d0895dn4ea91d39cef6b397_at_mail.gmail.com" -->
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
<strong>From:</strong> Lenny Verkhovsky (<em>lenny.verkhovsky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-12 11:26:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8880.php">Tom Rosmond: "[OMPI users] all2all algorithms"</a>
<li><strong>Previous message:</strong> <a href="8878.php">Chris Walker: "Re: [OMPI users] mpirun: symbol lookup error: /usr/local/lib/openmpi/mca_plm_lsf.so: undefined symbol: ls b_init"</a>
<li><strong>In reply to:</strong> <a href="8858.php">Geoffroy Pignot: "[OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8887.php">Geoffroy Pignot: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>The first &quot;crash&quot; is OK, since your rankfile has ranks 0 and 1 defined,
<br>
while n=1, which means only rank 0 is present and can be allocated.
<br>
<p>NP must be &gt;= the largest rank in rankfile.
<br>
<p>What exactly are you trying to do ?
<br>
<p>I tried to recreate your seqv but all I got was
<br>
<p>~/work/svn/ompi/trunk/build_x86-64/install/bin/mpirun --hostfile hostfile.0
<br>
-rf rankfile.0 -n 1 hostname : -rf rankfile.1 -n 1 hostname
<br>
[witch19:30798] mca: base: component_find: paffinity &quot;mca_paffinity_linux&quot;
<br>
uses an MCA interface that is not recognized (component MCA v1.0.0 !=
<br>
supported MCA v2.0.0) -- ignored
<br>
--------------------------------------------------------------------------
<br>
It looks like opal_init failed for some reason; your parallel process is
<br>
likely to abort. There are many reasons that a parallel process can
<br>
fail during opal_init; some of which are due to configuration or
<br>
environment problems. This failure appears to be an internal failure;
<br>
here's some additional information (which may only be relevant to an
<br>
Open MPI developer):
<br>
<p>&nbsp;&nbsp;opal_carto_base_select failed
<br>
&nbsp;&nbsp;--&gt; Returned value -13 instead of OPAL_SUCCESS
<br>
--------------------------------------------------------------------------
<br>
[witch19:30798] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in file
<br>
../../orte/runtime/orte_init.c at line 78
<br>
[witch19:30798] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in file
<br>
../../orte/orted/orted_main.c at line 344
<br>
--------------------------------------------------------------------------
<br>
A daemon (pid 11629) died unexpectedly with status 243 while attempting
<br>
to launch so we are aborting.
<br>
<p>There may be more information reported by the environment (see above).
<br>
<p>This may be because the daemon was unable to find all the needed shared
<br>
libraries on the remote node. You may set your LD_LIBRARY_PATH to have the
<br>
location of the shared libraries on the remote nodes and this will
<br>
automatically be forwarded to the remote nodes.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that the job aborted, but has no info as to the process
<br>
that caused that situation.
<br>
--------------------------------------------------------------------------
<br>
mpirun: clean termination accomplished
<br>
<p><p>Lenny.
<br>
<p><p>On 4/10/09, Geoffroy Pignot &lt;geopignot_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi ,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am currently testing the process affinity capabilities of openmpi and I
</span><br>
<span class="quotelev1">&gt; would like to know if the rankfile behaviour I will describe below is normal
</span><br>
<span class="quotelev1">&gt; or not ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cat hostfile.0
</span><br>
<span class="quotelev1">&gt; r011n002 slots=4
</span><br>
<span class="quotelev1">&gt; r011n003 slots=4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cat rankfile.0
</span><br>
<span class="quotelev1">&gt; rank 0=r011n002 slot=0
</span><br>
<span class="quotelev1">&gt; rank 1=r011n003 slot=1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ##################################################################################
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun --hostfile hostfile.0 -rf rankfile.0 -n 2  hostname ### OK
</span><br>
<span class="quotelev1">&gt; r011n002
</span><br>
<span class="quotelev1">&gt; r011n003
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ##################################################################################
</span><br>
<span class="quotelev1">&gt; but
</span><br>
<span class="quotelev1">&gt; mpirun --hostfile hostfile.0 -rf rankfile.0 -n 1 hostname : -n 1 hostname
</span><br>
<span class="quotelev1">&gt; ### CRASHED
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt;  --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Error, invalid rank (1) in the rankfile (rankfile.0)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [r011n002:25129] [[63976,0],0] ORTE_ERROR_LOG: Bad parameter in file
</span><br>
<span class="quotelev1">&gt; rmaps_rank_file.c at line 404
</span><br>
<span class="quotelev1">&gt; [r011n002:25129] [[63976,0],0] ORTE_ERROR_LOG: Bad parameter in file
</span><br>
<span class="quotelev1">&gt; base/rmaps_base_map_job.c at line 87
</span><br>
<span class="quotelev1">&gt; [r011n002:25129] [[63976,0],0] ORTE_ERROR_LOG: Bad parameter in file
</span><br>
<span class="quotelev1">&gt; base/plm_base_launch_support.c at line 77
</span><br>
<span class="quotelev1">&gt; [r011n002:25129] [[63976,0],0] ORTE_ERROR_LOG: Bad parameter in file
</span><br>
<span class="quotelev1">&gt; plm_rsh_module.c at line 985
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
<span class="quotelev1">&gt; orterun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev1">&gt; that caused that situation.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; orterun: clean termination accomplished
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; It seems that the rankfile option is not propagted to the second command
</span><br>
<span class="quotelev1">&gt; line ; there is no global understanding of the ranking inside a mpirun
</span><br>
<span class="quotelev1">&gt; command.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ##################################################################################
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Assuming that , I tried to provide a rankfile to each command line:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cat rankfile.0
</span><br>
<span class="quotelev1">&gt; rank 0=r011n002 slot=0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cat rankfile.1
</span><br>
<span class="quotelev1">&gt; rank 0=r011n003 slot=1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun --hostfile hostfile.0 -rf rankfile.0 -n 1 hostname : -rf rankfile.1
</span><br>
<span class="quotelev1">&gt; -n 1 hostname ### CRASHED
</span><br>
<span class="quotelev1">&gt; *[r011n002:28778] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [r011n002:28778] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [r011n002:28778] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [r011n002:28778] Failing at address: 0x34
</span><br>
<span class="quotelev1">&gt; [r011n002:28778] [ 0] [0xffffe600]
</span><br>
<span class="quotelev1">&gt; [r011n002:28778] [ 1]
</span><br>
<span class="quotelev1">&gt; /tmp/HALMPI/openmpi-1.3.1/lib/libopen-rte.so.0(orte_odls_base_default_get_add_procs_data+0x55d)
</span><br>
<span class="quotelev1">&gt; [0x5557decd]
</span><br>
<span class="quotelev1">&gt; [r011n002:28778] [ 2]
</span><br>
<span class="quotelev1">&gt; /tmp/HALMPI/openmpi-1.3.1/lib/libopen-rte.so.0(orte_plm_base_launch_apps+0x117)
</span><br>
<span class="quotelev1">&gt; [0x555842a7]
</span><br>
<span class="quotelev1">&gt; [r011n002:28778] [ 3] /tmp/HALMPI/openmpi-1.3.1/lib/openmpi/mca_plm_rsh.so
</span><br>
<span class="quotelev1">&gt; [0x556098c0]
</span><br>
<span class="quotelev1">&gt; [r011n002:28778] [ 4] /tmp/HALMPI/openmpi-1.3.1/bin/orterun [0x804aa27]
</span><br>
<span class="quotelev1">&gt; [r011n002:28778] [ 5] /tmp/HALMPI/openmpi-1.3.1/bin/orterun [0x804a022]
</span><br>
<span class="quotelev1">&gt; [r011n002:28778] [ 6] /lib/libc.so.6(__libc_start_main+0xdc) [0x9f1dec]
</span><br>
<span class="quotelev1">&gt; [r011n002:28778] [ 7] /tmp/HALMPI/openmpi-1.3.1/bin/orterun [0x8049f71]
</span><br>
<span class="quotelev1">&gt; [r011n002:28778] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; Segmentation fault (core dumped)*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I hope that I've found a bug because it would be very important for me to
</span><br>
<span class="quotelev1">&gt; have this kind of capabiliy .
</span><br>
<span class="quotelev1">&gt; Launch a multiexe mpirun command line and be able to bind my exes and
</span><br>
<span class="quotelev1">&gt; sockets together.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance for your help
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
<span class="quotelev1">&gt; 2009/4/9 &lt;users-request_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Send users mailing list submissions to
</span><br>
<span class="quotelev2">&gt;&gt;        users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; To subscribe or unsubscribe via the World Wide Web, visit
</span><br>
<span class="quotelev2">&gt;&gt;        <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; or, via email, send a message with subject or body 'help' to
</span><br>
<span class="quotelev2">&gt;&gt;        users-request_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You can reach the person managing the list at
</span><br>
<span class="quotelev2">&gt;&gt;        users-owner_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When replying, please edit your Subject line so it is more specific
</span><br>
<span class="quotelev2">&gt;&gt; than &quot;Re: Contents of users digest...&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Today's Topics:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   1. mpirun self,sm (Robert Kubrick)
</span><br>
<span class="quotelev2">&gt;&gt;   2. Re: mpirun self,sm (Ralph Castain)
</span><br>
<span class="quotelev2">&gt;&gt;   3. shared libraries issue compiling 1.3.1/intel 10.1.022
</span><br>
<span class="quotelev2">&gt;&gt;      (Francesco Pietra)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Message: 1
</span><br>
<span class="quotelev2">&gt;&gt; Date: Thu, 9 Apr 2009 00:15:03 -0400
</span><br>
<span class="quotelev2">&gt;&gt; From: Robert Kubrick &lt;robertkubrick_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subject: [OMPI users] mpirun self,sm
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Message-ID: &lt;99AB3654-DD6A-4E96-94AC-B741073821ED_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Content-Type: text/plain; charset=US-ASCII; delsp=yes; format=flowed
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; How is this possible?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; dx:~&gt; mpirun -v -np 2 --mca btl self,sm --host dx,sx hostname
</span><br>
<span class="quotelev2">&gt;&gt; dx
</span><br>
<span class="quotelev2">&gt;&gt; sx
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; dx:~&gt; netstat -i
</span><br>
<span class="quotelev2">&gt;&gt; Kernel Interface table
</span><br>
<span class="quotelev2">&gt;&gt; Iface   MTU Met   RX-OK RX-ERR RX-DRP RX-OVR   TX-OK TX-ERR TX-DRP TX-
</span><br>
<span class="quotelev2">&gt;&gt; OVR Flg
</span><br>
<span class="quotelev2">&gt;&gt; eth0   1500   0  998755      0      0      0 1070323      0
</span><br>
<span class="quotelev2">&gt;&gt; 0      0 BMRU
</span><br>
<span class="quotelev2">&gt;&gt; eth1   1500   0   85352      0      0      0  379993      0
</span><br>
<span class="quotelev2">&gt;&gt; 0      0 BMRU
</span><br>
<span class="quotelev2">&gt;&gt; ib0   65520   0     204      0      0      0     155      0
</span><br>
<span class="quotelev2">&gt;&gt; 5      0 BMRU
</span><br>
<span class="quotelev2">&gt;&gt; lo    16436   0 1648874      0      0      0 1648874      0
</span><br>
<span class="quotelev2">&gt;&gt; 0      0 LRU
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I want to force an error with the first command above to make sure
</span><br>
<span class="quotelev2">&gt;&gt; that my btl parameters are used correctly, but it looks like ompi
</span><br>
<span class="quotelev2">&gt;&gt; runs hostname on the remote machine regardless.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Message: 2
</span><br>
<span class="quotelev2">&gt;&gt; Date: Thu, 9 Apr 2009 02:16:08 -0600
</span><br>
<span class="quotelev2">&gt;&gt; From: Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] mpirun self,sm
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Message-ID: &lt;FF3FCDB6-3E23-41F6-88BC-7D4F327E40DC_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Content-Type: text/plain; charset=US-ASCII; format=flowed; delsp=yes
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; hostname never calls MPI_Init, and therefore never initializes the BTL
</span><br>
<span class="quotelev2">&gt;&gt; subsystem. Therefore, hostname will always run correctly.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun is not an MPI process, nor are the daemons used by OMPI to
</span><br>
<span class="quotelev2">&gt;&gt; launch the MPI job. Thus, they also do not call MPI_Init, and
</span><br>
<span class="quotelev2">&gt;&gt; therefore do not see the BTL subsystem.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So this example will run just fine. You need to run an MPI application
</span><br>
<span class="quotelev2">&gt;&gt; to cause it to fail.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 8, 2009, at 10:15 PM, Robert Kubrick wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; How is this possible?
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; dx:~&gt; mpirun -v -np 2 --mca btl self,sm --host dx,sx hostname
</span><br>
<span class="quotelev3">&gt;&gt; &gt; dx
</span><br>
<span class="quotelev3">&gt;&gt; &gt; sx
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; dx:~&gt; netstat -i
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Kernel Interface table
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Iface   MTU Met   RX-OK RX-ERR RX-DRP RX-OVR   TX-OK TX-ERR TX-DRP
</span><br>
<span class="quotelev3">&gt;&gt; &gt; TX-OVR Flg
</span><br>
<span class="quotelev3">&gt;&gt; &gt; eth0   1500   0  998755      0      0      0 1070323      0
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 0      0 BMRU
</span><br>
<span class="quotelev3">&gt;&gt; &gt; eth1   1500   0   85352      0      0      0  379993      0
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 0      0 BMRU
</span><br>
<span class="quotelev3">&gt;&gt; &gt; ib0   65520   0     204      0      0      0     155      0
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 5      0 BMRU
</span><br>
<span class="quotelev3">&gt;&gt; &gt; lo    16436   0 1648874      0      0      0 1648874      0
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 0      0 LRU
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I want to force an error with the first command above to make sure
</span><br>
<span class="quotelev3">&gt;&gt; &gt; that my btl parameters are used correctly, but it looks like ompi
</span><br>
<span class="quotelev3">&gt;&gt; &gt; runs hostname on the remote machine regardless.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Message: 3
</span><br>
<span class="quotelev2">&gt;&gt; Date: Thu, 9 Apr 2009 17:31:16 +0200
</span><br>
<span class="quotelev2">&gt;&gt; From: Francesco Pietra &lt;chiendarret_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subject: [OMPI users] shared libraries issue compiling 1.3.1/intel
</span><br>
<span class="quotelev2">&gt;&gt;        10.1.022
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Message-ID:
</span><br>
<span class="quotelev2">&gt;&gt;        &lt;b87c422a0904090831q56a98e67w5000c90a94bf8a37_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Content-Type: text/plain; charset=UTF-8
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi:
</span><br>
<span class="quotelev2">&gt;&gt; As failure to find &quot;limits.h&quot; in my attempted compilations of Amber of
</span><br>
<span class="quotelev2">&gt;&gt; th fast few days (amd64 lenny, openmpi 1.3.1, intel compilers
</span><br>
<span class="quotelev2">&gt;&gt; 10.1.015) is probably (or I hope so) a bug of the version used of
</span><br>
<span class="quotelev2">&gt;&gt; intel compilers (I made with debian the same observations reported
</span><br>
<span class="quotelev2">&gt;&gt; for gentoo,
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://software.intel.com/en-us/forums/intel-c-compiler/topic/59886/">http://software.intel.com/en-us/forums/intel-c-compiler/topic/59886/</a>).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I made a deb package of 10.1.022, icc and ifort.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ./configure CC icc, CXX icp, F77 and FC ifort --with-libnuma=/usr (not
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib so that the numa.h issue is not raised), &quot;make clean&quot;, and
</span><br>
<span class="quotelev2">&gt;&gt; &quot;mak install&quot; gave no error signals. However, the compilation tests in
</span><br>
<span class="quotelev2">&gt;&gt; the examples did not pass and I really don't understand why.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The error, with both connectivity_c and hello_c (I was operating on
</span><br>
<span class="quotelev2">&gt;&gt; the parallel computer deb64 directly and have access to everything
</span><br>
<span class="quotelev2">&gt;&gt; there) was failure to find a shared library, libimf.so
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; # dpkg --search libimf.so
</span><br>
<span class="quotelev2">&gt;&gt;   /opt/intel/fce/10.1.022/lib/libimf.so  (the same for cce)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; which path seems to be correctly sourced by iccvars.sh and
</span><br>
<span class="quotelev2">&gt;&gt; ifortvars.sh (incidentally, both files are -rw-r--r-- root root;
</span><br>
<span class="quotelev2">&gt;&gt; correct that non executable?)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; echo $LD_LIBRARY_PATH
</span><br>
<span class="quotelev2">&gt;&gt; returned, inter alia,
</span><br>
<span class="quotelev2">&gt;&gt; /opt/intel/mkl/
</span><br>
<span class="quotelev2">&gt;&gt; 10.1.2.024/lib/em64t:/opt/intel/mkl/10.1.2.024/lib/em64t:/opt/intel/cce/10.1.022/lib:/opt/intel/fce/10.1.022/lib
</span><br>
<span class="quotelev2">&gt;&gt; (why twice the mkl?)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I surely miss to understand something fundamental. Hope other eyes see
</span><br>
<span class="quotelev2">&gt;&gt; better
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; A kind person elsewhere suggested me on passing &quot;The use of -rpath
</span><br>
<span class="quotelev2">&gt;&gt; during linking is highly recommended as opposed to setting
</span><br>
<span class="quotelev2">&gt;&gt; LD_LIBRARY_PATH at run time, not the least because it hardcodes the
</span><br>
<span class="quotelev2">&gt;&gt; paths to the &quot;right&quot; library files in the executables themselves&quot;
</span><br>
<span class="quotelev2">&gt;&gt; Should this be relevant to the present issue, where to learn about
</span><br>
<span class="quotelev2">&gt;&gt; -rpath linking?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; thanks
</span><br>
<span class="quotelev2">&gt;&gt; francesco pietra
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------
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
<span class="quotelev2">&gt;&gt; End of users Digest, Vol 1197, Issue 1
</span><br>
<span class="quotelev2">&gt;&gt; **************************************
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8879/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8880.php">Tom Rosmond: "[OMPI users] all2all algorithms"</a>
<li><strong>Previous message:</strong> <a href="8878.php">Chris Walker: "Re: [OMPI users] mpirun: symbol lookup error: /usr/local/lib/openmpi/mca_plm_lsf.so: undefined symbol: ls b_init"</a>
<li><strong>In reply to:</strong> <a href="8858.php">Geoffroy Pignot: "[OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8887.php">Geoffroy Pignot: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
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
