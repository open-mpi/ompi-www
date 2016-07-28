<?
$subject_val = "Re: [OMPI users] bindings not reported and other problems in openmpi-1.7a1r27358";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 25 10:45:03 2012" -->
<!-- isoreceived="20120925144503" -->
<!-- sent="Tue, 25 Sep 2012 16:45:01 +0200" -->
<!-- isosent="20120925144501" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] bindings not reported and other problems in openmpi-1.7a1r27358" -->
<!-- id="EB7AEC40-999F-410D-AABB-60F637AF8C67_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AD184932-3105-4D97-8A3F-44A3B40FB8F5_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] bindings not reported and other problems in openmpi-1.7a1r27358<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-25 10:45:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20310.php">Jeff Squyres: "Re: [OMPI users] static, standalone mpirun"</a>
<li><strong>Previous message:</strong> <a href="20308.php">Jeff Squyres: "Re: [OMPI users] A question on MPI_Probe"</a>
<li><strong>In reply to:</strong> <a href="20276.php">Ralph Castain: "Re: [OMPI users] bindings not reported and other problems in openmpi-1.7a1r27358"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20331.php">Siegmar Gross: "Re: [OMPI users] bindings not reported and other problems in openmpi-1.7a1r27358"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I will also add that Oracle seems to be fading away from Open MPI; their priorities seem to be shifting, so it's quite possible that Open MPI is experiencing bit rot / lack of testing on Solaris.
<br>
<p>We already ran into the one issue where process binding is not well supported on Solaris (i.e., you can only bind on specific boundaries, as discussed here: <a href="http://www.open-mpi.org/community/lists/hwloc-users/2012/09/0708.php">http://www.open-mpi.org/community/lists/hwloc-users/2012/09/0708.php</a>).  You may well be running into other issues that we're finding difficult to answer because our Solaris developers have more-or-less left the building.
<br>
<p>:-\
<br>
<p><p><p>On Sep 24, 2012, at 4:51 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Please try and keep the User list on the messages - allows others to chime in.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You can see the topology by adding &quot;-mca ess_base_verbose 5&quot; to your command line. You'll get other stuff as well, and you'll need to --enable-debug in your configure.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sep 24, 2012, at 4:47 AM, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The 1.7 series has a completely different way of handling node
</span><br>
<span class="quotelev3">&gt;&gt;&gt; topology than was used in the 1.6 series. It provides some
</span><br>
<span class="quotelev3">&gt;&gt;&gt; enhanced features, but it does have some drawbacks in the case
</span><br>
<span class="quotelev3">&gt;&gt;&gt; where the topology info isn't correct. I fear you are running
</span><br>
<span class="quotelev3">&gt;&gt;&gt; into this problem (again).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; All the commands you show here work fine for me on a Linux 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; x86_64 box using 1.7r27361 on a Westmere 6-core single-socket
</span><br>
<span class="quotelev3">&gt;&gt;&gt; machine with hyperthreads enabled. I cannot replicate any of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the reported problems, so there isn't much I can do at this point.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; As I've said before, the root problem here appears to be some
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hwloc-related issue with your setup. Until that gets resolved
</span><br>
<span class="quotelev3">&gt;&gt;&gt; so we get correct topology info, I'm not sure what can be done
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to resolve what you are seeing. I'll raise the question of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; possibly providing some alternative support for setups like
</span><br>
<span class="quotelev3">&gt;&gt;&gt; yours that just can't get topology info, but that would
</span><br>
<span class="quotelev3">&gt;&gt;&gt; definitely be a long-term question.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Can we check if you get wrong topology info or which info you get
</span><br>
<span class="quotelev2">&gt;&gt; at all? Can you tell me a file and location where I can print the
</span><br>
<span class="quotelev2">&gt;&gt; values of relevant variables on my architecture? Perhaps that can
</span><br>
<span class="quotelev2">&gt;&gt; help to determine what goes wrong. I would use the latest trunk
</span><br>
<span class="quotelev2">&gt;&gt; tarball and can make the test a day later, because all changes on
</span><br>
<span class="quotelev2">&gt;&gt; our &quot;installation server&quot; are mirrored in the night to a our file
</span><br>
<span class="quotelev2">&gt;&gt; server for all machines.
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
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Sep 23, 2012, at 3:20 AM, Siegmar Gross 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; yesterday I installed openmpi-1.7a1r27358 and it has an improved
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; error message compared to openmpi-1.6.2, but doesn't show process bindings
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and has some other problems as well.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;sunpc0&quot; and &quot;linpc0&quot; are equipped with two dual-core processors running
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Solaris 10 x86_64 and Linux x86_64 resp. &quot;tyr&quot; is a dual-processor machine
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; running Solaris 10 Sparc.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; tyr fd1026 105 mpiexec -np 2 -host sunpc0 -report-bindings \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -map-by core -bind-to-core date
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Sun Sep 23 11:46:36 CEST 2012
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Sun Sep 23 11:46:36 CEST 2012
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; tyr fd1026 106 mpicc -showme
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; cc -I/usr/local/openmpi-1.7_64_cc/include -mt -m64 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -L/usr/local/openmpi-1.7_64_cc/lib64 -lmpi -lpicl -lm -lkstat -llgrp
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -lsocket -lnsl -lrt -lm
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; openmpi-1.6.2 shows process bindings.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; tyr fd1026 103 mpiexec -np 2 -host sunpc0 -report-bindings \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -bycore -bind-to-core date
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Sun Sep 23 12:09:06 CEST 2012
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sunpc0:13197] MCW rank 0 bound to socket 0[core 0]: [B .][. .]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sunpc0:13197] MCW rank 1 bound to socket 0[core 1]: [. B][. .]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Sun Sep 23 12:09:06 CEST 2012
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; tyr fd1026 104 mpicc -showme
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; cc -I/usr/local/openmpi-1.6.2_64_cc/include -mt -m64
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -L/usr/local/openmpi-1.6.2_64_cc/lib64 -lmpi -lm -lkstat -llgrp
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -lsocket -lnsl -lrt -lm
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On my Linux machine I get a warning.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; tyr fd1026 113 mpiexec -np 2 -host linpc0 -report-bindings \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -map-by core -bind-to-core date
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; WARNING: a request was made to bind a process. While the system
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; supports binding the process itself, at least one node does NOT
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; support binding memory to the process location.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Node:  linpc0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This is a warning only; your job will continue, though performance may
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; be degraded.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Sun Sep 23 11:56:04 CEST 2012
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Sun Sep 23 11:56:04 CEST 2012
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Everything works fine with openmpi-1.6.2.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; tyr fd1026 106 mpiexec -np 2 -host linpc0 -report-bindings \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -bycore -bind-to-core date
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [linpc0:15808] MCW rank 0 bound to socket 0[core 0]: [B .][. .]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [linpc0:15808] MCW rank 1 bound to socket 0[core 1]: [. B][. .]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Sun Sep 23 12:11:47 CEST 2012
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Sun Sep 23 12:11:47 CEST 2012
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Om my Solaris Sparc machine I get the following errors.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; tyr fd1026 121 mpiexec -np 2 -report-bindings -map-by core -bind-to-core 
</span><br>
<span class="quotelev2">&gt;&gt; date
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [tyr.informatik.hs-fulda.de:23773] [[32457,0],0] ORTE_ERROR_LOG: Value out 
</span><br>
<span class="quotelev2">&gt;&gt; of bounds in file 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../../../openmpi-1.7a1r27358/orte/mca/odls/base/odls_base_default_fns.c 
</span><br>
<span class="quotelev2">&gt;&gt; at line 847
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [tyr.informatik.hs-fulda.de:23773] [[32457,0],0] ORTE_ERROR_LOG: Value out 
</span><br>
<span class="quotelev2">&gt;&gt; of bounds in file 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../../../openmpi-1.7a1r27358/orte/mca/odls/base/odls_base_default_fns.c 
</span><br>
<span class="quotelev2">&gt;&gt; at line 1414
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [tyr.informatik.hs-fulda.de:23773] [[32457,0],0] ORTE_ERROR_LOG: Value out 
</span><br>
<span class="quotelev2">&gt;&gt; of bounds in file 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../../../openmpi-1.7a1r27358/orte/mca/odls/base/odls_base_default_fns.c 
</span><br>
<span class="quotelev2">&gt;&gt; at line 847
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [tyr.informatik.hs-fulda.de:23773] [[32457,0],0] ORTE_ERROR_LOG: Value out 
</span><br>
<span class="quotelev2">&gt;&gt; of bounds in file 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../../../openmpi-1.7a1r27358/orte/mca/odls/base/odls_base_default_fns.c 
</span><br>
<span class="quotelev2">&gt;&gt; at line 1414
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; tyr fd1026 122 mpiexec -np 2 -host tyr -report-bindings -map-by core 
</span><br>
<span class="quotelev2">&gt;&gt; -bind-to core date
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; All nodes which are allocated for this job are already filled.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Once more everything works fine with openmpi-1.6.2.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; tyr fd1026 109 mpiexec -np 2 -report-bindings -bycore -bind-to-core date
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [tyr.informatik.hs-fulda.de:23869] MCW rank 0 bound to socket 0[core 0]: 
</span><br>
<span class="quotelev2">&gt;&gt; [B][.]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [tyr.informatik.hs-fulda.de:23869] MCW rank 1 bound to socket 1[core 0]: 
</span><br>
<span class="quotelev2">&gt;&gt; [.][B]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Sun Sep 23 12:14:09 CEST 2012
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Sun Sep 23 12:14:09 CEST 2012
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; tyr fd1026 110 mpiexec -np 2 -host tyr -report-bindings -bycore 
</span><br>
<span class="quotelev2">&gt;&gt; -bind-to-core date
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [tyr.informatik.hs-fulda.de:23877] MCW rank 0 bound to socket 0[core 0]: 
</span><br>
<span class="quotelev2">&gt;&gt; [B][.]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [tyr.informatik.hs-fulda.de:23877] MCW rank 1 bound to socket 1[core 0]: 
</span><br>
<span class="quotelev2">&gt;&gt; [.][B]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Sun Sep 23 12:16:05 CEST 2012
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Sun Sep 23 12:16:05 CEST 2012
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
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20310.php">Jeff Squyres: "Re: [OMPI users] static, standalone mpirun"</a>
<li><strong>Previous message:</strong> <a href="20308.php">Jeff Squyres: "Re: [OMPI users] A question on MPI_Probe"</a>
<li><strong>In reply to:</strong> <a href="20276.php">Ralph Castain: "Re: [OMPI users] bindings not reported and other problems in openmpi-1.7a1r27358"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20331.php">Siegmar Gross: "Re: [OMPI users] bindings not reported and other problems in openmpi-1.7a1r27358"</a>
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
