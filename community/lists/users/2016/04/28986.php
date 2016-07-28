<?
$subject_val = "Re: [OMPI users] runtime errors for openmpi-v2.x-dev-1280-gc110ae8";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 20 18:18:56 2016" -->
<!-- isoreceived="20160420221856" -->
<!-- sent="Wed, 20 Apr 2016 15:18:52 -0700" -->
<!-- isosent="20160420221852" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] runtime errors for openmpi-v2.x-dev-1280-gc110ae8" -->
<!-- id="85B959B3-3B6B-4FAC-899B-C63BFA10C0CD_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="1caffaea-8385-b5cb-bc4a-b62e1d24cf3c_at_informatik.hs-fulda.de" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-20 18:18:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28987.php">Siegmar Gross: "Re: [OMPI users] runtime errors for openmpi-v2.x-dev-1280-gc110ae8"</a>
<li><strong>Previous message:</strong> <a href="28985.php">Jeff Squyres (jsquyres): "Re: [OMPI users] runtime errors for openmpi-v1.10.2-142-g5cd9490"</a>
<li><strong>In reply to:</strong> <a href="28983.php">Siegmar Gross: "[OMPI users] runtime errors for openmpi-v2.x-dev-1280-gc110ae8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28987.php">Siegmar Gross: "Re: [OMPI users] runtime errors for openmpi-v2.x-dev-1280-gc110ae8"</a>
<li><strong>Reply:</strong> <a href="28987.php">Siegmar Gross: "Re: [OMPI users] runtime errors for openmpi-v2.x-dev-1280-gc110ae8"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Could you please rerun these test and add &#226;&#128;&#156;-mca pmix_base_verbose 10 -mca pmix_server_verbose 5&#226;&#128;&#157; to your cmd line? I need to see why the pmix components failed.
<br>
<p>Thanks
<br>
Ralph
<br>
<p><span class="quotelev1">&gt; On Apr 20, 2016, at 10:12 AM, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have built openmpi-v2.x-dev-1280-gc110ae8 on my machines
</span><br>
<span class="quotelev1">&gt; (Solaris 10 Sparc, Solaris 10 x86_64, and openSUSE Linux
</span><br>
<span class="quotelev1">&gt; 12.1 x86_64) with gcc-5.1.0 and Sun C 5.13. Unfortunately I get
</span><br>
<span class="quotelev1">&gt; runtime errors for some programs.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sun C 5.13:
</span><br>
<span class="quotelev1">&gt; ===========
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For all my test programs I get the same error on Solaris Sparc and
</span><br>
<span class="quotelev1">&gt; Solaris x86_64, while the programs work fine on Linux.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr hello_1 115 mpiexec -np 2 hello_1_mpi
</span><br>
<span class="quotelev1">&gt; [tyr.informatik.hs-fulda.de:22373] [[61763,0],0] ORTE_ERROR_LOG: Not found in file ../../../../../openmpi-v2.x-dev-1280-gc110ae8/orte/mca/ess/hnp/ess_hnp_module.c at line 638
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like orte_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev1">&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev1">&gt; Open MPI developer):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  opal_pmix_base_select failed
</span><br>
<span class="quotelev1">&gt;  --&gt; Returned value Not found (-13) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; tyr hello_1 116
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; GCC-5.1.0:
</span><br>
<span class="quotelev1">&gt; ==========
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr spawn 121 mpiexec -np 1 --host tyr,sunpc1,linpc1,ruester spawn_multiple_master
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Parent process 0 running on tyr.informatik.hs-fulda.de
</span><br>
<span class="quotelev1">&gt;  I create 3 slave processes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [tyr.informatik.hs-fulda.de:25366] PMIX ERROR: UNPACK-PAST-END in file ../../../../../../openmpi-v2.x-dev-1280-gc110ae8/opal/mca/pmix/pmix112/pmix/src/server/pmix_server_ops.c at line 829
</span><br>
<span class="quotelev1">&gt; [tyr.informatik.hs-fulda.de:25366] PMIX ERROR: UNPACK-PAST-END in file ../../../../../../openmpi-v2.x-dev-1280-gc110ae8/opal/mca/pmix/pmix112/pmix/src/server/pmix_server.c at line 2176
</span><br>
<span class="quotelev1">&gt; [tyr:25377] *** An error occurred in MPI_Comm_spawn_multiple
</span><br>
<span class="quotelev1">&gt; [tyr:25377] *** reported by process [3308257281,0]
</span><br>
<span class="quotelev1">&gt; [tyr:25377] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [tyr:25377] *** MPI_ERR_SPAWN: could not spawn processes
</span><br>
<span class="quotelev1">&gt; [tyr:25377] *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
</span><br>
<span class="quotelev1">&gt; [tyr:25377] ***    and potentially your MPI job)
</span><br>
<span class="quotelev1">&gt; tyr spawn 122
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I would be grateful if somebody can fix the problems. Thank you very
</span><br>
<span class="quotelev1">&gt; much for any help in advance.
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
<span class="quotelev1">&gt; &lt;hello_1_mpi.c&gt;&lt;spawn_multiple_master.c&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/04/28983.php">http://www.open-mpi.org/community/lists/users/2016/04/28983.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28987.php">Siegmar Gross: "Re: [OMPI users] runtime errors for openmpi-v2.x-dev-1280-gc110ae8"</a>
<li><strong>Previous message:</strong> <a href="28985.php">Jeff Squyres (jsquyres): "Re: [OMPI users] runtime errors for openmpi-v1.10.2-142-g5cd9490"</a>
<li><strong>In reply to:</strong> <a href="28983.php">Siegmar Gross: "[OMPI users] runtime errors for openmpi-v2.x-dev-1280-gc110ae8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28987.php">Siegmar Gross: "Re: [OMPI users] runtime errors for openmpi-v2.x-dev-1280-gc110ae8"</a>
<li><strong>Reply:</strong> <a href="28987.php">Siegmar Gross: "Re: [OMPI users] runtime errors for openmpi-v2.x-dev-1280-gc110ae8"</a>
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
