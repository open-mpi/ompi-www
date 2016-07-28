<?
$subject_val = "Re: [OMPI users] problem with rankfile in openmpi-1.8.2rc3";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug  7 07:04:40 2014" -->
<!-- isoreceived="20140807110440" -->
<!-- sent="Thu, 7 Aug 2014 13:04:12 +0200 (CEST)" -->
<!-- isosent="20140807110412" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem with rankfile in openmpi-1.8.2rc3" -->
<!-- id="201408071104.s77B4CUp029909_at_tyr.informatik.hs-fulda.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] problem with rankfile in openmpi-1.8.2rc3" -->
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
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-07 07:04:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24937.php">Ralph Castain: "Re: [OMPI users] problem with rankfile in openmpi-1.8.2rc3"</a>
<li><strong>Previous message:</strong> <a href="24935.php">Siegmar Gross: "Re: [OMPI users] bus error with openmpi-1.8.2rc2 on Solaris 10 Sparc"</a>
<li><strong>Maybe in reply to:</strong> <a href="24907.php">Siegmar Gross: "[OMPI users] problem with rankfile in openmpi-1.8.2rc3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24937.php">Ralph Castain: "Re: [OMPI users] problem with rankfile in openmpi-1.8.2rc3"</a>
<li><strong>Reply:</strong> <a href="24937.php">Ralph Castain: "Re: [OMPI users] problem with rankfile in openmpi-1.8.2rc3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p><span class="quotelev1">&gt; I can't replicate - this worked fine for me. I'm at a loss as
</span><br>
<span class="quotelev1">&gt; to how you got that error as it would require some strange
</span><br>
<span class="quotelev1">&gt; error in the report-bindngs option. If you remove that option
</span><br>
<span class="quotelev1">&gt; from your cmd line, does the problem go away?
</span><br>
<p>Yes.
<br>
<p>tyr openmpi_1.7.x_or_newer 468 mpiexec -np 4 -rf rf_linpc_sunpc_tyr hostname
<br>
tyr.informatik.hs-fulda.de
<br>
linpc0
<br>
linpc1
<br>
sunpc1
<br>
<p><p>tyr openmpi_1.7.x_or_newer 469 mpiexec -report-bindings -np 4 -rf 
<br>
rf_linpc_sunpc_tyr hostname
<br>
--------------------------------------------------------------------------
<br>
An invalid value was supplied for an enum variable.
<br>
<p>&nbsp;&nbsp;Variable     : hwloc_base_report_bindings
<br>
&nbsp;&nbsp;Value        : 1,1
<br>
&nbsp;&nbsp;Valid values : 0: f|false|disabled, 1: t|true|enabled
<br>
--------------------------------------------------------------------------
<br>
tyr.informatik.hs-fulda.de
<br>
[tyr.informatik.hs-fulda.de:29900] MCW rank 3 bound to socket 1[core 1[hwt 0]]: 
<br>
[.][B]
<br>
[linpc0:04217] MCW rank 0 is not bound (or bound to all available processors)
<br>
[linpc1:23107] MCW rank 1 bound to socket 0[core 0[hwt 0]], socket 0[core 1[hwt 
<br>
0]]: [B/B][./.]
<br>
linpc0
<br>
linpc1
<br>
sunpc1
<br>
tyr openmpi_1.7.x_or_newer 470 
<br>
<p><p><p>Kind regards
<br>
<p>Siegmar
<br>
<p><p><p><p><span class="quotelev1">&gt; On Aug 5, 2014, at 12:56 AM, Siegmar Gross 
</span><br>
&lt;Siegmar.Gross_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; yesterday I installed openmpi-1.8.2rc3 on my machines
</span><br>
<span class="quotelev2">&gt; &gt; (Solaris 10 Sparc, Solaris 10 x86_64, and openSUSE
</span><br>
<span class="quotelev2">&gt; &gt; Linux 12.1 x86_64) with Sun C 5.12. I get an error,
</span><br>
<span class="quotelev2">&gt; &gt; if I use a rankfile for all three architectures.
</span><br>
<span class="quotelev2">&gt; &gt; The error message depends on the local machine, which
</span><br>
<span class="quotelev2">&gt; &gt; I use to run &quot;mpiexec&quot;. I get a different error, if I
</span><br>
<span class="quotelev2">&gt; &gt; use two &quot;Sparc64 VII&quot; machines (see below).
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; tyr openmpi_1.7.x_or_newer 109 cat rf_linpc_sunpc_tyr
</span><br>
<span class="quotelev2">&gt; &gt; rank 0=linpc0 slot=0:0-1;1:0-1
</span><br>
<span class="quotelev2">&gt; &gt; rank 1=linpc1 slot=0:0-1
</span><br>
<span class="quotelev2">&gt; &gt; rank 2=sunpc1 slot=1:0
</span><br>
<span class="quotelev2">&gt; &gt; rank 3=tyr slot=1:0
</span><br>
<span class="quotelev2">&gt; &gt; tyr openmpi_1.7.x_or_newer 110 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I get the following message, if I run &quot;mpiexec&quot; on
</span><br>
<span class="quotelev2">&gt; &gt; Solaris 10 Sparc.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; tyr openmpi_1.7.x_or_newer 110 mpiexec -report-bindings -np 4 -rf 
</span><br>
<span class="quotelev2">&gt; &gt; rf_linpc_sunpc_tyr hostname
</span><br>
<span class="quotelev2">&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; An invalid value was supplied for an enum variable.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;  Variable     : hwloc_base_report_bindings
</span><br>
<span class="quotelev2">&gt; &gt;  Value        : 1,1
</span><br>
<span class="quotelev2">&gt; &gt;  Valid values : 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev2">&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; [tyr.informatik.hs-fulda.de:26960] MCW rank 3 bound to socket 1[core 1[hwt 
</span><br>
0]]: 
<br>
<span class="quotelev2">&gt; &gt; [.][B]
</span><br>
<span class="quotelev2">&gt; &gt; tyr.informatik.hs-fulda.de
</span><br>
<span class="quotelev2">&gt; &gt; [linpc1:12109] MCW rank 1 bound to socket 0[core 0[hwt 0]], socket 0[core 
</span><br>
1[hwt 
<br>
<span class="quotelev2">&gt; &gt; 0]]: [B/B][./.]
</span><br>
<span class="quotelev2">&gt; &gt; [linpc0:26642] MCW rank 0 is not bound (or bound to all available 
</span><br>
processors)
<br>
<span class="quotelev2">&gt; &gt; linpc1
</span><br>
<span class="quotelev2">&gt; &gt; linpc0
</span><br>
<span class="quotelev2">&gt; &gt; sunpc1
</span><br>
<span class="quotelev2">&gt; &gt; tyr openmpi_1.7.x_or_newer 111 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I get the following message, if I run &quot;mpiexec&quot; on
</span><br>
<span class="quotelev2">&gt; &gt; Solaris 10 x86_64 or Linux x86_64.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; sunpc1 openmpi_1.7.x_or_newer 109 mpiexec -report-bindings -np 4 -rf 
</span><br>
<span class="quotelev2">&gt; &gt; rf_linpc_sunpc_tyr hostname
</span><br>
<span class="quotelev2">&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; An invalid value was supplied for an enum variable.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;  Variable     : hwloc_base_report_bindings
</span><br>
<span class="quotelev2">&gt; &gt;  Value        : 1,1
</span><br>
<span class="quotelev2">&gt; &gt;  Valid values : 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev2">&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; [sunpc1:02931] MCW rank 2 bound to socket 1[core 2[hwt 0]]: [./.][B/.]
</span><br>
<span class="quotelev2">&gt; &gt; sunpc1
</span><br>
<span class="quotelev2">&gt; &gt; [linpc0:26850] MCW rank 0 is not bound (or bound to all available 
</span><br>
processors)
<br>
<span class="quotelev2">&gt; &gt; [linpc1:12386] MCW rank 1 bound to socket 0[core 0[hwt 0]], socket 0[core 
</span><br>
1[hwt 
<br>
<span class="quotelev2">&gt; &gt; 0]]: [B/B][./.]
</span><br>
<span class="quotelev2">&gt; &gt; linpc0
</span><br>
<span class="quotelev2">&gt; &gt; linpc1
</span><br>
<span class="quotelev2">&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; Open MPI tried to bind a new process, but something went wrong.  The
</span><br>
<span class="quotelev2">&gt; &gt; process was killed without launching the target application.  Your job
</span><br>
<span class="quotelev2">&gt; &gt; will now abort.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;  Local host:        tyr
</span><br>
<span class="quotelev2">&gt; &gt;  Application name:  /usr/local/bin/hostname
</span><br>
<span class="quotelev2">&gt; &gt;  Error message:     hwloc_set_cpubind returned &quot;Error&quot; for bitmap &quot;2&quot;
</span><br>
<span class="quotelev2">&gt; &gt;  Location:          
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
../../../../../openmpi-1.8.2rc3/orte/mca/odls/default/odls_default_module.c:551
<br>
<span class="quotelev2">&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; sunpc1 openmpi_1.7.x_or_newer 110 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; The rankfile worked for older versions of Open MPI.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; tyr openmpi_1.7.x_or_newer 139 ompi_info | grep MPI:
</span><br>
<span class="quotelev2">&gt; &gt;                Open MPI: 1.8.2a1r31804
</span><br>
<span class="quotelev2">&gt; &gt; tyr openmpi_1.7.x_or_newer 140 mpiexec -report-bindings -np 4 -rf 
</span><br>
<span class="quotelev2">&gt; &gt; rf_linpc_sunpc_tyr hostname
</span><br>
<span class="quotelev2">&gt; &gt; [tyr.informatik.hs-fulda.de:27171] MCW rank 3 bound to socket 1[core 1[hwt 
</span><br>
0]]: 
<br>
<span class="quotelev2">&gt; &gt; [.][B]
</span><br>
<span class="quotelev2">&gt; &gt; tyr.informatik.hs-fulda.de
</span><br>
<span class="quotelev2">&gt; &gt; [linpc1:12790] MCW rank 1 bound to socket 0[core 0[hwt 0]], socket 0[core 
</span><br>
1[hwt 
<br>
<span class="quotelev2">&gt; &gt; 0]]: [B/B][./.]
</span><br>
<span class="quotelev2">&gt; &gt; [linpc0:27221] MCW rank 0 is not bound (or bound to all available 
</span><br>
processors)
<br>
<span class="quotelev2">&gt; &gt; linpc1
</span><br>
<span class="quotelev2">&gt; &gt; linpc0
</span><br>
<span class="quotelev2">&gt; &gt; [sunpc1:03046] MCW rank 2 bound to socket 1[core 2[hwt 0]]: [./.][B/.]
</span><br>
<span class="quotelev2">&gt; &gt; sunpc1
</span><br>
<span class="quotelev2">&gt; &gt; tyr openmpi_1.7.x_or_newer 141 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I get the following error, if I use two Sparc machines
</span><br>
<span class="quotelev2">&gt; &gt; (Sun M4000 servers with two quad core Sparc64 VII processors
</span><br>
<span class="quotelev2">&gt; &gt; and two hardware threads per core). I'm not sure if this
</span><br>
<span class="quotelev2">&gt; &gt; worked before or if I have to use different options to make
</span><br>
<span class="quotelev2">&gt; &gt; it working.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; tyr openmpi_1.7.x_or_newer 151 cat rf_rs0_rs1
</span><br>
<span class="quotelev2">&gt; &gt; rank 0=rs0 slot=0:0-7
</span><br>
<span class="quotelev2">&gt; &gt; rank 1=rs0 slot=1
</span><br>
<span class="quotelev2">&gt; &gt; rank 2=rs1 slot=0
</span><br>
<span class="quotelev2">&gt; &gt; rank 3=rs1 slot=1
</span><br>
<span class="quotelev2">&gt; &gt; tyr openmpi_1.7.x_or_newer 152 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; rs0 openmpi_1.7.x_or_newer 104 mpiexec --report-bindings --use-hwthread-cpus 
</span><br>
-np 
<br>
<span class="quotelev2">&gt; &gt; 4 -rf rf_rs0_rs1 hostname
</span><br>
<span class="quotelev2">&gt; &gt; [rs0.informatik.hs-fulda.de:26085] [[28578,0],0] ORTE_ERROR_LOG: Not found 
</span><br>
in 
<br>
<span class="quotelev2">&gt; &gt; file 
</span><br>
../../../../../openmpi-1.8.2rc3/orte/mca/rmaps/rank_file/rmaps_rank_file.c 
<br>
<span class="quotelev2">&gt; &gt; at line 279
</span><br>
<span class="quotelev2">&gt; &gt; [rs0.informatik.hs-fulda.de:26085] [[28578,0],0] ORTE_ERROR_LOG: Not found 
</span><br>
in 
<br>
<span class="quotelev2">&gt; &gt; file ../../../../openmpi-1.8.2rc3/orte/mca/rmaps/base/rmaps_base_map_job.c 
</span><br>
at 
<br>
<span class="quotelev2">&gt; &gt; line 285
</span><br>
<span class="quotelev2">&gt; &gt; rs0 openmpi_1.7.x_or_newer 105 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; It works for the following command.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; rs0 openmpi_1.7.x_or_newer 107 mpiexec --report-bindings -np 4 --host 
</span><br>
rs0,rs1 
<br>
<span class="quotelev2">&gt; &gt; --bind-to hwthread hostname
</span><br>
<span class="quotelev2">&gt; &gt; [rs0.informatik.hs-fulda.de:26102] MCW rank 0 bound to socket 0[core 0[hwt 
</span><br>
0]]: 
<br>
<span class="quotelev2">&gt; &gt; [B./../../..][../../../..]
</span><br>
<span class="quotelev2">&gt; &gt; [rs0.informatik.hs-fulda.de:26102] MCW rank 1 bound to socket 1[core 4[hwt 
</span><br>
0]]: 
<br>
<span class="quotelev2">&gt; &gt; [../../../..][B./../../..]
</span><br>
<span class="quotelev2">&gt; &gt; rs0.informatik.hs-fulda.de
</span><br>
<span class="quotelev2">&gt; &gt; rs0.informatik.hs-fulda.de
</span><br>
<span class="quotelev2">&gt; &gt; rs1.informatik.hs-fulda.de
</span><br>
<span class="quotelev2">&gt; &gt; [rs1.informatik.hs-fulda.de:28740] MCW rank 2 bound to socket 0[core 0[hwt 
</span><br>
0]]: 
<br>
<span class="quotelev2">&gt; &gt; [B./../../..][../../../..]
</span><br>
<span class="quotelev2">&gt; &gt; [rs1.informatik.hs-fulda.de:28740] MCW rank 3 bound to socket 1[core 4[hwt 
</span><br>
0]]: 
<br>
<span class="quotelev2">&gt; &gt; [../../../..][B./../../..]
</span><br>
<span class="quotelev2">&gt; &gt; rs1.informatik.hs-fulda.de
</span><br>
<span class="quotelev2">&gt; &gt; rs0 openmpi_1.7.x_or_newer 108 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I would be grateful if somebody could fix the problem. Please let
</span><br>
<span class="quotelev2">&gt; &gt; me know if I can provide anything else. Thank you very much for
</span><br>
<span class="quotelev2">&gt; &gt; any help in advance.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Kind regards
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Siegmar
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post: 
</span><br>
<a href="http://www.open-mpi.org/community/lists/users/2014/08/24907.php">http://www.open-mpi.org/community/lists/users/2014/08/24907.php</a>
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24937.php">Ralph Castain: "Re: [OMPI users] problem with rankfile in openmpi-1.8.2rc3"</a>
<li><strong>Previous message:</strong> <a href="24935.php">Siegmar Gross: "Re: [OMPI users] bus error with openmpi-1.8.2rc2 on Solaris 10 Sparc"</a>
<li><strong>Maybe in reply to:</strong> <a href="24907.php">Siegmar Gross: "[OMPI users] problem with rankfile in openmpi-1.8.2rc3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24937.php">Ralph Castain: "Re: [OMPI users] problem with rankfile in openmpi-1.8.2rc3"</a>
<li><strong>Reply:</strong> <a href="24937.php">Ralph Castain: "Re: [OMPI users] problem with rankfile in openmpi-1.8.2rc3"</a>
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
