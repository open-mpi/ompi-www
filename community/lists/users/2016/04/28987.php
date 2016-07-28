<?
$subject_val = "Re: [OMPI users] runtime errors for openmpi-v2.x-dev-1280-gc110ae8";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 21 04:28:07 2016" -->
<!-- isoreceived="20160421082807" -->
<!-- sent="Thu, 21 Apr 2016 10:27:58 +0200" -->
<!-- isosent="20160421082758" -->
<!-- name="Siegmar Gross" -->
<!-- email="siegmar.gross_at_[hidden]" -->
<!-- subject="Re: [OMPI users] runtime errors for openmpi-v2.x-dev-1280-gc110ae8" -->
<!-- id="af48b516-aeb4-19dc-8dd7-53deb6318b5e_at_informatik.hs-fulda.de" -->
<!-- charset="utf-8" -->
<!-- inreplyto="85B959B3-3B6B-4FAC-899B-C63BFA10C0CD_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] runtime errors for openmpi-v2.x-dev-1280-gc110ae8<br>
<strong>From:</strong> Siegmar Gross (<em>siegmar.gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-21 04:27:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28988.php">Ralph Castain: "Re: [OMPI users] runtime errors for openmpi-v2.x-dev-1280-gc110ae8"</a>
<li><strong>Previous message:</strong> <a href="28986.php">Ralph Castain: "Re: [OMPI users] runtime errors for openmpi-v2.x-dev-1280-gc110ae8"</a>
<li><strong>In reply to:</strong> <a href="28986.php">Ralph Castain: "Re: [OMPI users] runtime errors for openmpi-v2.x-dev-1280-gc110ae8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28988.php">Ralph Castain: "Re: [OMPI users] runtime errors for openmpi-v2.x-dev-1280-gc110ae8"</a>
<li><strong>Reply:</strong> <a href="28988.php">Ralph Castain: "Re: [OMPI users] runtime errors for openmpi-v2.x-dev-1280-gc110ae8"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p>Am 21.04.2016 um 00:18 schrieb Ralph Castain:
<br>
<span class="quotelev1">&gt; Could you please rerun these test and add &#226;&#128;&#156;-mca pmix_base_verbose 10
</span><br>
<span class="quotelev1">&gt; -mca pmix_server_verbose 5&#226;&#128;&#157; to your cmd line? I need to see why the
</span><br>
<span class="quotelev1">&gt; pmix components failed.
</span><br>
<p><p>tyr spawn 111 mpiexec -np 1 --host tyr,sunpc1,linpc1,ruester -mca 
<br>
pmix_base_verbose 10 -mca pmix_server_verbose 5 spawn_multiple_master
<br>
[tyr.informatik.hs-fulda.de:26652] mca: base: components_register: registering 
<br>
framework pmix components
<br>
[tyr.informatik.hs-fulda.de:26652] mca: base: components_open: opening pmix 
<br>
components
<br>
[tyr.informatik.hs-fulda.de:26652] mca:base:select: Auto-selecting pmix components
<br>
[tyr.informatik.hs-fulda.de:26652] mca:base:select:( pmix) No component selected!
<br>
[tyr.informatik.hs-fulda.de:26652] [[52794,0],0] ORTE_ERROR_LOG: Not found in 
<br>
file 
<br>
../../../../../openmpi-v2.x-dev-1280-gc110ae8/orte/mca/ess/hnp/ess_hnp_module.c 
<br>
at line 638
<br>
--------------------------------------------------------------------------
<br>
It looks like orte_init failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during orte_init; some of which are due to configuration or
<br>
environment problems.  This failure appears to be an internal failure;
<br>
here's some additional information (which may only be relevant to an
<br>
Open MPI developer):
<br>
<p>&nbsp;&nbsp;&nbsp;opal_pmix_base_select failed
<br>
&nbsp;&nbsp;&nbsp;--&gt; Returned value Not found (-13) instead of ORTE_SUCCESS
<br>
--------------------------------------------------------------------------
<br>
tyr spawn 112
<br>
<p><p><p><p>tyr hello_1 116 mpiexec -np 1 --host tyr,sunpc1,linpc1,ruester -mca 
<br>
pmix_base_verbose 10 -mca pmix_server_verbose 5 hello_1_mpi
<br>
[tyr.informatik.hs-fulda.de:27261] mca: base: components_register: registering 
<br>
framework pmix components
<br>
[tyr.informatik.hs-fulda.de:27261] mca: base: components_open: opening pmix 
<br>
components
<br>
[tyr.informatik.hs-fulda.de:27261] mca:base:select: Auto-selecting pmix components
<br>
[tyr.informatik.hs-fulda.de:27261] mca:base:select:( pmix) No component selected!
<br>
[tyr.informatik.hs-fulda.de:27261] [[52315,0],0] ORTE_ERROR_LOG: Not found in 
<br>
file 
<br>
../../../../../openmpi-v2.x-dev-1280-gc110ae8/orte/mca/ess/hnp/ess_hnp_module.c 
<br>
at line 638
<br>
--------------------------------------------------------------------------
<br>
It looks like orte_init failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during orte_init; some of which are due to configuration or
<br>
environment problems.  This failure appears to be an internal failure;
<br>
here's some additional information (which may only be relevant to an
<br>
Open MPI developer):
<br>
<p>&nbsp;&nbsp;&nbsp;opal_pmix_base_select failed
<br>
&nbsp;&nbsp;&nbsp;--&gt; Returned value Not found (-13) instead of ORTE_SUCCESS
<br>
--------------------------------------------------------------------------
<br>
tyr hello_1 117
<br>
<p><p><p>Thank you very much for your help.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<p><p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 20, 2016, at 10:12 AM, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have built openmpi-v2.x-dev-1280-gc110ae8 on my machines
</span><br>
<span class="quotelev2">&gt;&gt; (Solaris 10 Sparc, Solaris 10 x86_64, and openSUSE Linux
</span><br>
<span class="quotelev2">&gt;&gt; 12.1 x86_64) with gcc-5.1.0 and Sun C 5.13. Unfortunately I get
</span><br>
<span class="quotelev2">&gt;&gt; runtime errors for some programs.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sun C 5.13:
</span><br>
<span class="quotelev2">&gt;&gt; ===========
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; For all my test programs I get the same error on Solaris Sparc and
</span><br>
<span class="quotelev2">&gt;&gt; Solaris x86_64, while the programs work fine on Linux.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; tyr hello_1 115 mpiexec -np 2 hello_1_mpi
</span><br>
<span class="quotelev2">&gt;&gt; [tyr.informatik.hs-fulda.de:22373] [[61763,0],0] ORTE_ERROR_LOG: Not found in file ../../../../../openmpi-v2.x-dev-1280-gc110ae8/orte/mca/ess/hnp/ess_hnp_module.c at line 638
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; It looks like orte_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev2">&gt;&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev2">&gt;&gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev2">&gt;&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev2">&gt;&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI developer):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  opal_pmix_base_select failed
</span><br>
<span class="quotelev2">&gt;&gt;  --&gt; Returned value Not found (-13) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; tyr hello_1 116
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; GCC-5.1.0:
</span><br>
<span class="quotelev2">&gt;&gt; ==========
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; tyr spawn 121 mpiexec -np 1 --host tyr,sunpc1,linpc1,ruester spawn_multiple_master
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Parent process 0 running on tyr.informatik.hs-fulda.de
</span><br>
<span class="quotelev2">&gt;&gt;  I create 3 slave processes.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [tyr.informatik.hs-fulda.de:25366] PMIX ERROR: UNPACK-PAST-END in file ../../../../../../openmpi-v2.x-dev-1280-gc110ae8/opal/mca/pmix/pmix112/pmix/src/server/pmix_server_ops.c at line 829
</span><br>
<span class="quotelev2">&gt;&gt; [tyr.informatik.hs-fulda.de:25366] PMIX ERROR: UNPACK-PAST-END in file ../../../../../../openmpi-v2.x-dev-1280-gc110ae8/opal/mca/pmix/pmix112/pmix/src/server/pmix_server.c at line 2176
</span><br>
<span class="quotelev2">&gt;&gt; [tyr:25377] *** An error occurred in MPI_Comm_spawn_multiple
</span><br>
<span class="quotelev2">&gt;&gt; [tyr:25377] *** reported by process [3308257281,0]
</span><br>
<span class="quotelev2">&gt;&gt; [tyr:25377] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev2">&gt;&gt; [tyr:25377] *** MPI_ERR_SPAWN: could not spawn processes
</span><br>
<span class="quotelev2">&gt;&gt; [tyr:25377] *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
</span><br>
<span class="quotelev2">&gt;&gt; [tyr:25377] ***    and potentially your MPI job)
</span><br>
<span class="quotelev2">&gt;&gt; tyr spawn 122
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I would be grateful if somebody can fix the problems. Thank you very
</span><br>
<span class="quotelev2">&gt;&gt; much for any help in advance.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Kind regards
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Siegmar
</span><br>
<span class="quotelev2">&gt;&gt; &lt;hello_1_mpi.c&gt;&lt;spawn_multiple_master.c&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/04/28983.php">http://www.open-mpi.org/community/lists/users/2016/04/28983.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/04/28986.php">http://www.open-mpi.org/community/lists/users/2016/04/28986.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28988.php">Ralph Castain: "Re: [OMPI users] runtime errors for openmpi-v2.x-dev-1280-gc110ae8"</a>
<li><strong>Previous message:</strong> <a href="28986.php">Ralph Castain: "Re: [OMPI users] runtime errors for openmpi-v2.x-dev-1280-gc110ae8"</a>
<li><strong>In reply to:</strong> <a href="28986.php">Ralph Castain: "Re: [OMPI users] runtime errors for openmpi-v2.x-dev-1280-gc110ae8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28988.php">Ralph Castain: "Re: [OMPI users] runtime errors for openmpi-v2.x-dev-1280-gc110ae8"</a>
<li><strong>Reply:</strong> <a href="28988.php">Ralph Castain: "Re: [OMPI users] runtime errors for openmpi-v2.x-dev-1280-gc110ae8"</a>
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
