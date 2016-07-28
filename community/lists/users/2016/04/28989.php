<?
$subject_val = "Re: [OMPI users] runtime errors for openmpi-v2.x-dev-1280-gc110ae8";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 21 11:16:46 2016" -->
<!-- isoreceived="20160421151646" -->
<!-- sent="Thu, 21 Apr 2016 17:16:26 +0200" -->
<!-- isosent="20160421151626" -->
<!-- name="Siegmar Gross" -->
<!-- email="siegmar.gross_at_[hidden]" -->
<!-- subject="Re: [OMPI users] runtime errors for openmpi-v2.x-dev-1280-gc110ae8" -->
<!-- id="6e5d1cfa-3235-b44d-024e-8cd30626005b_at_informatik.hs-fulda.de" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="C8CBEE47-A151-438D-BA37-13D9F6624F82_at_open-mpi.org" -->
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
<strong>Date:</strong> 2016-04-21 11:16:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28990.php">Ralph Castain: "Re: [OMPI users] runtime errors for openmpi-v2.x-dev-1280-gc110ae8"</a>
<li><strong>Previous message:</strong> <a href="28988.php">Ralph Castain: "Re: [OMPI users] runtime errors for openmpi-v2.x-dev-1280-gc110ae8"</a>
<li><strong>In reply to:</strong> <a href="28988.php">Ralph Castain: "Re: [OMPI users] runtime errors for openmpi-v2.x-dev-1280-gc110ae8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28990.php">Ralph Castain: "Re: [OMPI users] runtime errors for openmpi-v2.x-dev-1280-gc110ae8"</a>
<li><strong>Reply:</strong> <a href="28990.php">Ralph Castain: "Re: [OMPI users] runtime errors for openmpi-v2.x-dev-1280-gc110ae8"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p>I have attached ompi_info output for both compilers from my
<br>
sparc machine and the listings for both compilers from the
<br>
&lt;prefix&gt;/lib/openmpi directories. Hopefully that helps to
<br>
find the problem.
<br>
<p>hermes tmp 3 tar zvft openmpi-2.x_info.tar.gz
<br>
-rw-r--r-- root/root     10969 2016-04-21 17:06 ompi_info_SunOS_sparc_cc.txt
<br>
-rw-r--r-- root/root     11044 2016-04-21 17:06 ompi_info_SunOS_sparc_gcc.txt
<br>
-rw-r--r-- root/root     71252 2016-04-21 17:02 lib64_openmpi.txt
<br>
hermes tmp 4
<br>
<p><p>Kind regards and thank you very much once more for your help
<br>
<p>Siegmar
<br>
<p><p>Am 21.04.2016 um 15:54 schrieb Ralph Castain:
<br>
<span class="quotelev1">&gt; Odd - it would appear that none of the pmix components built? Can you send
</span><br>
<span class="quotelev1">&gt; along the output from ompi_info? Or just send a listing of the files in the
</span><br>
<span class="quotelev1">&gt; &lt;prefix&gt;/lib/openmpi directory?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 21, 2016, at 1:27 AM, Siegmar Gross
</span><br>
<span class="quotelev2">&gt;&gt; &lt;Siegmar.Gross_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:Siegmar.Gross_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Ralph,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Am 21.04.2016 um 00:18 schrieb Ralph Castain:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Could you please rerun these test and add &#147;-mca pmix_base_verbose 10
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -mca pmix_server_verbose 5&#148; to your cmd line? I need to see why the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pmix components failed.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; tyr spawn 111 mpiexec -np 1 --host tyr,sunpc1,linpc1,ruester -mca
</span><br>
<span class="quotelev2">&gt;&gt; pmix_base_verbose 10 -mca pmix_server_verbose 5 spawn_multiple_master
</span><br>
<span class="quotelev2">&gt;&gt; [tyr.informatik.hs-fulda.de &lt;<a href="http://tyr.informatik.hs-fulda.de/">http://tyr.informatik.hs-fulda.de/</a>&gt;:26652] mca:
</span><br>
<span class="quotelev2">&gt;&gt; base: components_register: registering framework pmix components
</span><br>
<span class="quotelev2">&gt;&gt; [tyr.informatik.hs-fulda.de &lt;<a href="http://tyr.informatik.hs-fulda.de/">http://tyr.informatik.hs-fulda.de/</a>&gt;:26652] mca:
</span><br>
<span class="quotelev2">&gt;&gt; base: components_open: opening pmix components
</span><br>
<span class="quotelev2">&gt;&gt; [tyr.informatik.hs-fulda.de &lt;<a href="http://tyr.informatik.hs-fulda.de/">http://tyr.informatik.hs-fulda.de/</a>&gt;:26652]
</span><br>
<span class="quotelev2">&gt;&gt; mca:base:select: Auto-selecting pmix components
</span><br>
<span class="quotelev2">&gt;&gt; [tyr.informatik.hs-fulda.de &lt;<a href="http://tyr.informatik.hs-fulda.de/">http://tyr.informatik.hs-fulda.de/</a>&gt;:26652]
</span><br>
<span class="quotelev2">&gt;&gt; mca:base:select:( pmix) No component selected!
</span><br>
<span class="quotelev2">&gt;&gt; [tyr.informatik.hs-fulda.de &lt;<a href="http://tyr.informatik.hs-fulda.de/">http://tyr.informatik.hs-fulda.de/</a>&gt;:26652]
</span><br>
<span class="quotelev2">&gt;&gt; [[52794,0],0] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../openmpi-v2.x-dev-1280-gc110ae8/orte/mca/ess/hnp/ess_hnp_module.c
</span><br>
<span class="quotelev2">&gt;&gt; at line 638
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
<span class="quotelev2">&gt;&gt; tyr spawn 112
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; tyr hello_1 116 mpiexec -np 1 --host tyr,sunpc1,linpc1,ruester -mca
</span><br>
<span class="quotelev2">&gt;&gt; pmix_base_verbose 10 -mca pmix_server_verbose 5 hello_1_mpi
</span><br>
<span class="quotelev2">&gt;&gt; [tyr.informatik.hs-fulda.de &lt;<a href="http://tyr.informatik.hs-fulda.de/">http://tyr.informatik.hs-fulda.de/</a>&gt;:27261] mca:
</span><br>
<span class="quotelev2">&gt;&gt; base: components_register: registering framework pmix components
</span><br>
<span class="quotelev2">&gt;&gt; [tyr.informatik.hs-fulda.de &lt;<a href="http://tyr.informatik.hs-fulda.de/">http://tyr.informatik.hs-fulda.de/</a>&gt;:27261] mca:
</span><br>
<span class="quotelev2">&gt;&gt; base: components_open: opening pmix components
</span><br>
<span class="quotelev2">&gt;&gt; [tyr.informatik.hs-fulda.de &lt;<a href="http://tyr.informatik.hs-fulda.de/">http://tyr.informatik.hs-fulda.de/</a>&gt;:27261]
</span><br>
<span class="quotelev2">&gt;&gt; mca:base:select: Auto-selecting pmix components
</span><br>
<span class="quotelev2">&gt;&gt; [tyr.informatik.hs-fulda.de &lt;<a href="http://tyr.informatik.hs-fulda.de/">http://tyr.informatik.hs-fulda.de/</a>&gt;:27261]
</span><br>
<span class="quotelev2">&gt;&gt; mca:base:select:( pmix) No component selected!
</span><br>
<span class="quotelev2">&gt;&gt; [tyr.informatik.hs-fulda.de &lt;<a href="http://tyr.informatik.hs-fulda.de/">http://tyr.informatik.hs-fulda.de/</a>&gt;:27261]
</span><br>
<span class="quotelev2">&gt;&gt; [[52315,0],0] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../openmpi-v2.x-dev-1280-gc110ae8/orte/mca/ess/hnp/ess_hnp_module.c
</span><br>
<span class="quotelev2">&gt;&gt; at line 638
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
<span class="quotelev2">&gt;&gt; tyr hello_1 117
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you very much for your help.
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Apr 20, 2016, at 10:12 AM, Siegmar Gross
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;Siegmar.Gross_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;mailto:Siegmar.Gross_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I have built openmpi-v2.x-dev-1280-gc110ae8 on my machines
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (Solaris 10 Sparc, Solaris 10 x86_64, and openSUSE Linux
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 12.1 x86_64) with gcc-5.1.0 and Sun C 5.13. Unfortunately I get
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; runtime errors for some programs.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Sun C 5.13:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ===========
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; For all my test programs I get the same error on Solaris Sparc and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Solaris x86_64, while the programs work fine on Linux.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; tyr hello_1 115 mpiexec -np 2 hello_1_mpi
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [tyr.informatik.hs-fulda.de &lt;<a href="http://tyr.informatik.hs-fulda.de">http://tyr.informatik.hs-fulda.de</a>&gt;:22373]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [[61763,0],0] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../../../../openmpi-v2.x-dev-1280-gc110ae8/orte/mca/ess/hnp/ess_hnp_module.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; at line 638
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; It looks like orte_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Open MPI developer):
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; opal_pmix_base_select failed
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --&gt; Returned value Not found (-13) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; tyr hello_1 116
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; GCC-5.1.0:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ==========
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; tyr spawn 121 mpiexec -np 1 --host tyr,sunpc1,linpc1,ruester
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; spawn_multiple_master
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Parent process 0 running on tyr.informatik.hs-fulda.de
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;<a href="http://tyr.informatik.hs-fulda.de">http://tyr.informatik.hs-fulda.de</a>&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I create 3 slave processes.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [tyr.informatik.hs-fulda.de &lt;<a href="http://tyr.informatik.hs-fulda.de">http://tyr.informatik.hs-fulda.de</a>&gt;:25366]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; PMIX ERROR: UNPACK-PAST-END in file
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../../../../../openmpi-v2.x-dev-1280-gc110ae8/opal/mca/pmix/pmix112/pmix/src/server/pmix_server_ops.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; at line 829
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [tyr.informatik.hs-fulda.de &lt;<a href="http://tyr.informatik.hs-fulda.de">http://tyr.informatik.hs-fulda.de</a>&gt;:25366]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; PMIX ERROR: UNPACK-PAST-END in file
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../../../../../openmpi-v2.x-dev-1280-gc110ae8/opal/mca/pmix/pmix112/pmix/src/server/pmix_server.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; at line 2176
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [tyr:25377] *** An error occurred in MPI_Comm_spawn_multiple
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [tyr:25377] *** reported by process [3308257281,0]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [tyr:25377] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [tyr:25377] *** MPI_ERR_SPAWN: could not spawn processes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [tyr:25377] *** MPI_ERRORS_ARE_FATAL (processes in this communicator will
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; now abort,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [tyr:25377] ***    and potentially your MPI job)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; tyr spawn 122
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I would be grateful if somebody can fix the problems. Thank you very
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; much for any help in advance.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Kind regards
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Siegmar
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;hello_1_mpi.c&gt;&lt;spawn_multiple_master.c&gt;_______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/04/28983.php">http://www.open-mpi.org/community/lists/users/2016/04/28983.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this
</span><br>
<span class="quotelev3">&gt;&gt;&gt; post: <a href="http://www.open-mpi.org/community/lists/users/2016/04/28986.php">http://www.open-mpi.org/community/lists/users/2016/04/28986.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this
</span><br>
<span class="quotelev2">&gt;&gt; post: <a href="http://www.open-mpi.org/community/lists/users/2016/04/28987.php">http://www.open-mpi.org/community/lists/users/2016/04/28987.php</a>
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/04/28988.php">http://www.open-mpi.org/community/lists/users/2016/04/28988.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>
<br><hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28989/openmpi-2.x_info.tar.gz">openmpi-2.x_info.tar.gz</a>
</ul>
<!-- attachment="openmpi-2.x_info.tar.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28990.php">Ralph Castain: "Re: [OMPI users] runtime errors for openmpi-v2.x-dev-1280-gc110ae8"</a>
<li><strong>Previous message:</strong> <a href="28988.php">Ralph Castain: "Re: [OMPI users] runtime errors for openmpi-v2.x-dev-1280-gc110ae8"</a>
<li><strong>In reply to:</strong> <a href="28988.php">Ralph Castain: "Re: [OMPI users] runtime errors for openmpi-v2.x-dev-1280-gc110ae8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28990.php">Ralph Castain: "Re: [OMPI users] runtime errors for openmpi-v2.x-dev-1280-gc110ae8"</a>
<li><strong>Reply:</strong> <a href="28990.php">Ralph Castain: "Re: [OMPI users] runtime errors for openmpi-v2.x-dev-1280-gc110ae8"</a>
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
