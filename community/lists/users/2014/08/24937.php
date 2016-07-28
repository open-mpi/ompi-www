<?
$subject_val = "Re: [OMPI users] problem with rankfile in openmpi-1.8.2rc3";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug  7 09:47:59 2014" -->
<!-- isoreceived="20140807134759" -->
<!-- sent="Thu, 7 Aug 2014 06:47:29 -0700" -->
<!-- isosent="20140807134729" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem with rankfile in openmpi-1.8.2rc3" -->
<!-- id="B986B3DB-D957-48E3-BC6E-285C6B533F37_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201408071104.s77B4CUp029909_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] problem with rankfile in openmpi-1.8.2rc3<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-07 09:47:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24938.php">Jane Lewis: "[OMPI users] Newbie query - mpirun will not run if it's previously been killed with Control-C"</a>
<li><strong>Previous message:</strong> <a href="24936.php">Siegmar Gross: "Re: [OMPI users] problem with rankfile in openmpi-1.8.2rc3"</a>
<li><strong>In reply to:</strong> <a href="24936.php">Siegmar Gross: "Re: [OMPI users] problem with rankfile in openmpi-1.8.2rc3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24944.php">Siegmar Gross: "Re: [OMPI users] problem with rankfile in openmpi-1.8.2rc3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Try replacing --report-bindings with -mca hwloc_base_report_bindings 1 and see if that works
<br>
<p><p>On Aug 7, 2014, at 4:04 AM, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I can't replicate - this worked fine for me. I'm at a loss as
</span><br>
<span class="quotelev2">&gt;&gt; to how you got that error as it would require some strange
</span><br>
<span class="quotelev2">&gt;&gt; error in the report-bindngs option. If you remove that option
</span><br>
<span class="quotelev2">&gt;&gt; from your cmd line, does the problem go away?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr openmpi_1.7.x_or_newer 468 mpiexec -np 4 -rf rf_linpc_sunpc_tyr hostname
</span><br>
<span class="quotelev1">&gt; tyr.informatik.hs-fulda.de
</span><br>
<span class="quotelev1">&gt; linpc0
</span><br>
<span class="quotelev1">&gt; linpc1
</span><br>
<span class="quotelev1">&gt; sunpc1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr openmpi_1.7.x_or_newer 469 mpiexec -report-bindings -np 4 -rf 
</span><br>
<span class="quotelev1">&gt; rf_linpc_sunpc_tyr hostname
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; An invalid value was supplied for an enum variable.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Variable     : hwloc_base_report_bindings
</span><br>
<span class="quotelev1">&gt;  Value        : 1,1
</span><br>
<span class="quotelev1">&gt;  Valid values : 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; tyr.informatik.hs-fulda.de
</span><br>
<span class="quotelev1">&gt; [tyr.informatik.hs-fulda.de:29900] MCW rank 3 bound to socket 1[core 1[hwt 0]]: 
</span><br>
<span class="quotelev1">&gt; [.][B]
</span><br>
<span class="quotelev1">&gt; [linpc0:04217] MCW rank 0 is not bound (or bound to all available processors)
</span><br>
<span class="quotelev1">&gt; [linpc1:23107] MCW rank 1 bound to socket 0[core 0[hwt 0]], socket 0[core 1[hwt 
</span><br>
<span class="quotelev1">&gt; 0]]: [B/B][./.]
</span><br>
<span class="quotelev1">&gt; linpc0
</span><br>
<span class="quotelev1">&gt; linpc1
</span><br>
<span class="quotelev1">&gt; sunpc1
</span><br>
<span class="quotelev1">&gt; tyr openmpi_1.7.x_or_newer 470 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Kind regards
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Siegmar
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 5, 2014, at 12:56 AM, Siegmar Gross 
</span><br>
<span class="quotelev1">&gt; &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; yesterday I installed openmpi-1.8.2rc3 on my machines
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (Solaris 10 Sparc, Solaris 10 x86_64, and openSUSE
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Linux 12.1 x86_64) with Sun C 5.12. I get an error,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; if I use a rankfile for all three architectures.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The error message depends on the local machine, which
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I use to run &quot;mpiexec&quot;. I get a different error, if I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; use two &quot;Sparc64 VII&quot; machines (see below).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tyr openmpi_1.7.x_or_newer 109 cat rf_linpc_sunpc_tyr
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rank 0=linpc0 slot=0:0-1;1:0-1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rank 1=linpc1 slot=0:0-1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rank 2=sunpc1 slot=1:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rank 3=tyr slot=1:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tyr openmpi_1.7.x_or_newer 110 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I get the following message, if I run &quot;mpiexec&quot; on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Solaris 10 Sparc.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tyr openmpi_1.7.x_or_newer 110 mpiexec -report-bindings -np 4 -rf 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rf_linpc_sunpc_tyr hostname
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; An invalid value was supplied for an enum variable.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Variable     : hwloc_base_report_bindings
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Value        : 1,1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Valid values : 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [tyr.informatik.hs-fulda.de:26960] MCW rank 3 bound to socket 1[core 1[hwt 
</span><br>
<span class="quotelev1">&gt; 0]]: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [.][B]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tyr.informatik.hs-fulda.de
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linpc1:12109] MCW rank 1 bound to socket 0[core 0[hwt 0]], socket 0[core 
</span><br>
<span class="quotelev1">&gt; 1[hwt 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0]]: [B/B][./.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linpc0:26642] MCW rank 0 is not bound (or bound to all available 
</span><br>
<span class="quotelev1">&gt; processors)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; linpc1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; linpc0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sunpc1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tyr openmpi_1.7.x_or_newer 111 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I get the following message, if I run &quot;mpiexec&quot; on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Solaris 10 x86_64 or Linux x86_64.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sunpc1 openmpi_1.7.x_or_newer 109 mpiexec -report-bindings -np 4 -rf 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rf_linpc_sunpc_tyr hostname
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; An invalid value was supplied for an enum variable.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Variable     : hwloc_base_report_bindings
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Value        : 1,1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Valid values : 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sunpc1:02931] MCW rank 2 bound to socket 1[core 2[hwt 0]]: [./.][B/.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sunpc1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linpc0:26850] MCW rank 0 is not bound (or bound to all available 
</span><br>
<span class="quotelev1">&gt; processors)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linpc1:12386] MCW rank 1 bound to socket 0[core 0[hwt 0]], socket 0[core 
</span><br>
<span class="quotelev1">&gt; 1[hwt 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0]]: [B/B][./.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; linpc0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; linpc1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Open MPI tried to bind a new process, but something went wrong.  The
</span><br>
<span class="quotelev3">&gt;&gt;&gt; process was killed without launching the target application.  Your job
</span><br>
<span class="quotelev3">&gt;&gt;&gt; will now abort.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Local host:        tyr
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Application name:  /usr/local/bin/hostname
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Error message:     hwloc_set_cpubind returned &quot;Error&quot; for bitmap &quot;2&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Location:          
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; ../../../../../openmpi-1.8.2rc3/orte/mca/odls/default/odls_default_module.c:551
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sunpc1 openmpi_1.7.x_or_newer 110 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The rankfile worked for older versions of Open MPI.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tyr openmpi_1.7.x_or_newer 139 ompi_info | grep MPI:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               Open MPI: 1.8.2a1r31804
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tyr openmpi_1.7.x_or_newer 140 mpiexec -report-bindings -np 4 -rf 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rf_linpc_sunpc_tyr hostname
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [tyr.informatik.hs-fulda.de:27171] MCW rank 3 bound to socket 1[core 1[hwt 
</span><br>
<span class="quotelev1">&gt; 0]]: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [.][B]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tyr.informatik.hs-fulda.de
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linpc1:12790] MCW rank 1 bound to socket 0[core 0[hwt 0]], socket 0[core 
</span><br>
<span class="quotelev1">&gt; 1[hwt 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0]]: [B/B][./.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linpc0:27221] MCW rank 0 is not bound (or bound to all available 
</span><br>
<span class="quotelev1">&gt; processors)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; linpc1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; linpc0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sunpc1:03046] MCW rank 2 bound to socket 1[core 2[hwt 0]]: [./.][B/.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sunpc1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tyr openmpi_1.7.x_or_newer 141 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I get the following error, if I use two Sparc machines
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (Sun M4000 servers with two quad core Sparc64 VII processors
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and two hardware threads per core). I'm not sure if this
</span><br>
<span class="quotelev3">&gt;&gt;&gt; worked before or if I have to use different options to make
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it working.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tyr openmpi_1.7.x_or_newer 151 cat rf_rs0_rs1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rank 0=rs0 slot=0:0-7
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rank 1=rs0 slot=1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rank 2=rs1 slot=0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rank 3=rs1 slot=1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tyr openmpi_1.7.x_or_newer 152 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rs0 openmpi_1.7.x_or_newer 104 mpiexec --report-bindings --use-hwthread-cpus 
</span><br>
<span class="quotelev1">&gt; -np 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 4 -rf rf_rs0_rs1 hostname
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [rs0.informatik.hs-fulda.de:26085] [[28578,0],0] ORTE_ERROR_LOG: Not found 
</span><br>
<span class="quotelev1">&gt; in 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; file 
</span><br>
<span class="quotelev1">&gt; ../../../../../openmpi-1.8.2rc3/orte/mca/rmaps/rank_file/rmaps_rank_file.c 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; at line 279
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [rs0.informatik.hs-fulda.de:26085] [[28578,0],0] ORTE_ERROR_LOG: Not found 
</span><br>
<span class="quotelev1">&gt; in 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; file ../../../../openmpi-1.8.2rc3/orte/mca/rmaps/base/rmaps_base_map_job.c 
</span><br>
<span class="quotelev1">&gt; at 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; line 285
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rs0 openmpi_1.7.x_or_newer 105 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It works for the following command.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rs0 openmpi_1.7.x_or_newer 107 mpiexec --report-bindings -np 4 --host 
</span><br>
<span class="quotelev1">&gt; rs0,rs1 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --bind-to hwthread hostname
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [rs0.informatik.hs-fulda.de:26102] MCW rank 0 bound to socket 0[core 0[hwt 
</span><br>
<span class="quotelev1">&gt; 0]]: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [B./../../..][../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [rs0.informatik.hs-fulda.de:26102] MCW rank 1 bound to socket 1[core 4[hwt 
</span><br>
<span class="quotelev1">&gt; 0]]: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [../../../..][B./../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rs0.informatik.hs-fulda.de
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rs0.informatik.hs-fulda.de
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rs1.informatik.hs-fulda.de
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [rs1.informatik.hs-fulda.de:28740] MCW rank 2 bound to socket 0[core 0[hwt 
</span><br>
<span class="quotelev1">&gt; 0]]: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [B./../../..][../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [rs1.informatik.hs-fulda.de:28740] MCW rank 3 bound to socket 1[core 4[hwt 
</span><br>
<span class="quotelev1">&gt; 0]]: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [../../../..][B./../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rs1.informatik.hs-fulda.de
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rs0 openmpi_1.7.x_or_newer 108 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I would be grateful if somebody could fix the problem. Please let
</span><br>
<span class="quotelev3">&gt;&gt;&gt; me know if I can provide anything else. Thank you very much for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; any help in advance.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Kind regards
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Siegmar
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/08/24907.php">http://www.open-mpi.org/community/lists/users/2014/08/24907.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/24936.php">http://www.open-mpi.org/community/lists/users/2014/08/24936.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24937/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24938.php">Jane Lewis: "[OMPI users] Newbie query - mpirun will not run if it's previously been killed with Control-C"</a>
<li><strong>Previous message:</strong> <a href="24936.php">Siegmar Gross: "Re: [OMPI users] problem with rankfile in openmpi-1.8.2rc3"</a>
<li><strong>In reply to:</strong> <a href="24936.php">Siegmar Gross: "Re: [OMPI users] problem with rankfile in openmpi-1.8.2rc3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24944.php">Siegmar Gross: "Re: [OMPI users] problem with rankfile in openmpi-1.8.2rc3"</a>
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
