<?
$subject_val = "Re: [OMPI users] problem with rankfile in openmpi-1.8.2rc3";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug  5 11:02:33 2014" -->
<!-- isoreceived="20140805150233" -->
<!-- sent="Tue, 5 Aug 2014 08:02:10 -0700" -->
<!-- isosent="20140805150210" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem with rankfile in openmpi-1.8.2rc3" -->
<!-- id="A172ACFD-6EDA-48FA-BB3E-1FB16676D2C6_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201408050756.s757uGJU027366_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Date:</strong> 2014-08-05 11:02:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24915.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi 1.8.1 gfortran not working"</a>
<li><strong>Previous message:</strong> <a href="24913.php">Dan Shell: "Re: [OMPI users] openmpi 1.8.1 gfortran not working"</a>
<li><strong>In reply to:</strong> <a href="24907.php">Siegmar Gross: "[OMPI users] problem with rankfile in openmpi-1.8.2rc3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24936.php">Siegmar Gross: "Re: [OMPI users] problem with rankfile in openmpi-1.8.2rc3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I can't replicate - this worked fine for me. I'm at a loss as to how you got that error as it would require some strange error in the report-bindngs option. If you remove that option from your cmd line, does the problem go away?
<br>
<p><p>On Aug 5, 2014, at 12:56 AM, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; yesterday I installed openmpi-1.8.2rc3 on my machines
</span><br>
<span class="quotelev1">&gt; (Solaris 10 Sparc, Solaris 10 x86_64, and openSUSE
</span><br>
<span class="quotelev1">&gt; Linux 12.1 x86_64) with Sun C 5.12. I get an error,
</span><br>
<span class="quotelev1">&gt; if I use a rankfile for all three architectures.
</span><br>
<span class="quotelev1">&gt; The error message depends on the local machine, which
</span><br>
<span class="quotelev1">&gt; I use to run &quot;mpiexec&quot;. I get a different error, if I
</span><br>
<span class="quotelev1">&gt; use two &quot;Sparc64 VII&quot; machines (see below).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr openmpi_1.7.x_or_newer 109 cat rf_linpc_sunpc_tyr
</span><br>
<span class="quotelev1">&gt; rank 0=linpc0 slot=0:0-1;1:0-1
</span><br>
<span class="quotelev1">&gt; rank 1=linpc1 slot=0:0-1
</span><br>
<span class="quotelev1">&gt; rank 2=sunpc1 slot=1:0
</span><br>
<span class="quotelev1">&gt; rank 3=tyr slot=1:0
</span><br>
<span class="quotelev1">&gt; tyr openmpi_1.7.x_or_newer 110 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I get the following message, if I run &quot;mpiexec&quot; on
</span><br>
<span class="quotelev1">&gt; Solaris 10 Sparc.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr openmpi_1.7.x_or_newer 110 mpiexec -report-bindings -np 4 -rf 
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
<span class="quotelev1">&gt; [tyr.informatik.hs-fulda.de:26960] MCW rank 3 bound to socket 1[core 1[hwt 0]]: 
</span><br>
<span class="quotelev1">&gt; [.][B]
</span><br>
<span class="quotelev1">&gt; tyr.informatik.hs-fulda.de
</span><br>
<span class="quotelev1">&gt; [linpc1:12109] MCW rank 1 bound to socket 0[core 0[hwt 0]], socket 0[core 1[hwt 
</span><br>
<span class="quotelev1">&gt; 0]]: [B/B][./.]
</span><br>
<span class="quotelev1">&gt; [linpc0:26642] MCW rank 0 is not bound (or bound to all available processors)
</span><br>
<span class="quotelev1">&gt; linpc1
</span><br>
<span class="quotelev1">&gt; linpc0
</span><br>
<span class="quotelev1">&gt; sunpc1
</span><br>
<span class="quotelev1">&gt; tyr openmpi_1.7.x_or_newer 111 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I get the following message, if I run &quot;mpiexec&quot; on
</span><br>
<span class="quotelev1">&gt; Solaris 10 x86_64 or Linux x86_64.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; sunpc1 openmpi_1.7.x_or_newer 109 mpiexec -report-bindings -np 4 -rf 
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
<span class="quotelev1">&gt; [sunpc1:02931] MCW rank 2 bound to socket 1[core 2[hwt 0]]: [./.][B/.]
</span><br>
<span class="quotelev1">&gt; sunpc1
</span><br>
<span class="quotelev1">&gt; [linpc0:26850] MCW rank 0 is not bound (or bound to all available processors)
</span><br>
<span class="quotelev1">&gt; [linpc1:12386] MCW rank 1 bound to socket 0[core 0[hwt 0]], socket 0[core 1[hwt 
</span><br>
<span class="quotelev1">&gt; 0]]: [B/B][./.]
</span><br>
<span class="quotelev1">&gt; linpc0
</span><br>
<span class="quotelev1">&gt; linpc1
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Open MPI tried to bind a new process, but something went wrong.  The
</span><br>
<span class="quotelev1">&gt; process was killed without launching the target application.  Your job
</span><br>
<span class="quotelev1">&gt; will now abort.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Local host:        tyr
</span><br>
<span class="quotelev1">&gt;  Application name:  /usr/local/bin/hostname
</span><br>
<span class="quotelev1">&gt;  Error message:     hwloc_set_cpubind returned &quot;Error&quot; for bitmap &quot;2&quot;
</span><br>
<span class="quotelev1">&gt;  Location:          
</span><br>
<span class="quotelev1">&gt; ../../../../../openmpi-1.8.2rc3/orte/mca/odls/default/odls_default_module.c:551
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; sunpc1 openmpi_1.7.x_or_newer 110 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The rankfile worked for older versions of Open MPI.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr openmpi_1.7.x_or_newer 139 ompi_info | grep MPI:
</span><br>
<span class="quotelev1">&gt;                Open MPI: 1.8.2a1r31804
</span><br>
<span class="quotelev1">&gt; tyr openmpi_1.7.x_or_newer 140 mpiexec -report-bindings -np 4 -rf 
</span><br>
<span class="quotelev1">&gt; rf_linpc_sunpc_tyr hostname
</span><br>
<span class="quotelev1">&gt; [tyr.informatik.hs-fulda.de:27171] MCW rank 3 bound to socket 1[core 1[hwt 0]]: 
</span><br>
<span class="quotelev1">&gt; [.][B]
</span><br>
<span class="quotelev1">&gt; tyr.informatik.hs-fulda.de
</span><br>
<span class="quotelev1">&gt; [linpc1:12790] MCW rank 1 bound to socket 0[core 0[hwt 0]], socket 0[core 1[hwt 
</span><br>
<span class="quotelev1">&gt; 0]]: [B/B][./.]
</span><br>
<span class="quotelev1">&gt; [linpc0:27221] MCW rank 0 is not bound (or bound to all available processors)
</span><br>
<span class="quotelev1">&gt; linpc1
</span><br>
<span class="quotelev1">&gt; linpc0
</span><br>
<span class="quotelev1">&gt; [sunpc1:03046] MCW rank 2 bound to socket 1[core 2[hwt 0]]: [./.][B/.]
</span><br>
<span class="quotelev1">&gt; sunpc1
</span><br>
<span class="quotelev1">&gt; tyr openmpi_1.7.x_or_newer 141 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I get the following error, if I use two Sparc machines
</span><br>
<span class="quotelev1">&gt; (Sun M4000 servers with two quad core Sparc64 VII processors
</span><br>
<span class="quotelev1">&gt; and two hardware threads per core). I'm not sure if this
</span><br>
<span class="quotelev1">&gt; worked before or if I have to use different options to make
</span><br>
<span class="quotelev1">&gt; it working.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr openmpi_1.7.x_or_newer 151 cat rf_rs0_rs1
</span><br>
<span class="quotelev1">&gt; rank 0=rs0 slot=0:0-7
</span><br>
<span class="quotelev1">&gt; rank 1=rs0 slot=1
</span><br>
<span class="quotelev1">&gt; rank 2=rs1 slot=0
</span><br>
<span class="quotelev1">&gt; rank 3=rs1 slot=1
</span><br>
<span class="quotelev1">&gt; tyr openmpi_1.7.x_or_newer 152 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; rs0 openmpi_1.7.x_or_newer 104 mpiexec --report-bindings --use-hwthread-cpus -np 
</span><br>
<span class="quotelev1">&gt; 4 -rf rf_rs0_rs1 hostname
</span><br>
<span class="quotelev1">&gt; [rs0.informatik.hs-fulda.de:26085] [[28578,0],0] ORTE_ERROR_LOG: Not found in 
</span><br>
<span class="quotelev1">&gt; file ../../../../../openmpi-1.8.2rc3/orte/mca/rmaps/rank_file/rmaps_rank_file.c 
</span><br>
<span class="quotelev1">&gt; at line 279
</span><br>
<span class="quotelev1">&gt; [rs0.informatik.hs-fulda.de:26085] [[28578,0],0] ORTE_ERROR_LOG: Not found in 
</span><br>
<span class="quotelev1">&gt; file ../../../../openmpi-1.8.2rc3/orte/mca/rmaps/base/rmaps_base_map_job.c at 
</span><br>
<span class="quotelev1">&gt; line 285
</span><br>
<span class="quotelev1">&gt; rs0 openmpi_1.7.x_or_newer 105 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It works for the following command.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; rs0 openmpi_1.7.x_or_newer 107 mpiexec --report-bindings -np 4 --host rs0,rs1 
</span><br>
<span class="quotelev1">&gt; --bind-to hwthread hostname
</span><br>
<span class="quotelev1">&gt; [rs0.informatik.hs-fulda.de:26102] MCW rank 0 bound to socket 0[core 0[hwt 0]]: 
</span><br>
<span class="quotelev1">&gt; [B./../../..][../../../..]
</span><br>
<span class="quotelev1">&gt; [rs0.informatik.hs-fulda.de:26102] MCW rank 1 bound to socket 1[core 4[hwt 0]]: 
</span><br>
<span class="quotelev1">&gt; [../../../..][B./../../..]
</span><br>
<span class="quotelev1">&gt; rs0.informatik.hs-fulda.de
</span><br>
<span class="quotelev1">&gt; rs0.informatik.hs-fulda.de
</span><br>
<span class="quotelev1">&gt; rs1.informatik.hs-fulda.de
</span><br>
<span class="quotelev1">&gt; [rs1.informatik.hs-fulda.de:28740] MCW rank 2 bound to socket 0[core 0[hwt 0]]: 
</span><br>
<span class="quotelev1">&gt; [B./../../..][../../../..]
</span><br>
<span class="quotelev1">&gt; [rs1.informatik.hs-fulda.de:28740] MCW rank 3 bound to socket 1[core 4[hwt 0]]: 
</span><br>
<span class="quotelev1">&gt; [../../../..][B./../../..]
</span><br>
<span class="quotelev1">&gt; rs1.informatik.hs-fulda.de
</span><br>
<span class="quotelev1">&gt; rs0 openmpi_1.7.x_or_newer 108 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I would be grateful if somebody could fix the problem. Please let
</span><br>
<span class="quotelev1">&gt; me know if I can provide anything else. Thank you very much for
</span><br>
<span class="quotelev1">&gt; any help in advance.
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/24907.php">http://www.open-mpi.org/community/lists/users/2014/08/24907.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24915.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi 1.8.1 gfortran not working"</a>
<li><strong>Previous message:</strong> <a href="24913.php">Dan Shell: "Re: [OMPI users] openmpi 1.8.1 gfortran not working"</a>
<li><strong>In reply to:</strong> <a href="24907.php">Siegmar Gross: "[OMPI users] problem with rankfile in openmpi-1.8.2rc3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24936.php">Siegmar Gross: "Re: [OMPI users] problem with rankfile in openmpi-1.8.2rc3"</a>
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
