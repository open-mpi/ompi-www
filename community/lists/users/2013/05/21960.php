<?
$subject_val = "Re: [OMPI users] two problems with openmpi-1.9r28534";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 24 10:14:58 2013" -->
<!-- isoreceived="20130524141458" -->
<!-- sent="Fri, 24 May 2013 07:14:51 -0700" -->
<!-- isosent="20130524141451" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] two problems with openmpi-1.9r28534" -->
<!-- id="5F435925-1725-43CD-BC51-173C82621BF4_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201305240728.r4O7SFMN021641_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] two problems with openmpi-1.9r28534<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-24 10:14:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21961.php">Jeff Squyres (jsquyres): "Re: [OMPI users] EXTERNAL: Re: basic questions about compiling OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="21959.php">Ralph Castain: "Re: [OMPI users] 64-bit version of openmpi-1.6.5a1r28554 hangs"</a>
<li><strong>In reply to:</strong> <a href="21958.php">Siegmar Gross: "[OMPI users] two problems with openmpi-1.9r28534"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It sounds like your saying that the OMPI trunk replicates the same behavior you reported elsewhere - which isn't a surprise. Let's track this on your prior messages as the two problems are not related.
<br>
<p>On May 24, 2013, at 12:28 AM, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I installed openmpi-1.9r28534 on &quot;openSuSE Linux 12.1&quot;, &quot;Solaris 10
</span><br>
<span class="quotelev1">&gt; x86_64&quot;, and &quot;Solaris 10 sparc&quot; with &quot;Sun C 5.12&quot; in 32- and 64-bit
</span><br>
<span class="quotelev1">&gt; versions. Unfortunately I have two problems with this version.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; sunpc1 hello_1 104 mpiexec -np 3 -host sunpc1,linpc1,rs0 hostname
</span><br>
<span class="quotelev1">&gt; [sunpc1:18681] [[19223,0],0] ORTE_ERROR_LOG: Data unpack had
</span><br>
<span class="quotelev1">&gt;  inadequate space in file
</span><br>
<span class="quotelev1">&gt;  ../../../../openmpi-1.9r28534/orte/mca/plm/base/plm_base_launch_support.c
</span><br>
<span class="quotelev1">&gt;  at line 854
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; sunpc1 hello_1 105 which mpiexec
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.9_64_cc/bin/mpiexec
</span><br>
<span class="quotelev1">&gt; sunpc1 hello_1 106 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My second problem is, that &quot;rank_files&quot; don't work as expected.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; sunpc1 rankfiles 108 mpiexec -report-bindings \
</span><br>
<span class="quotelev1">&gt;  -rf rf_ex_sunpc_linpc hostname
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; The rankfile that was used claimed that a host was either not
</span><br>
<span class="quotelev1">&gt; allocated or oversubscribed its slots.  Please review your rank-slot
</span><br>
<span class="quotelev1">&gt; assignments and your host allocation to ensure a proper match.  Also,
</span><br>
<span class="quotelev1">&gt; some systems may require using full hostnames, such as
</span><br>
<span class="quotelev1">&gt; &quot;host1.example.com&quot; (instead of just plain &quot;host1&quot;).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Host: linpc1
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; sunpc1 rankfiles 109 [linpc1:03952] [[19223,0],1] ORTE_ERROR_LOG:
</span><br>
<span class="quotelev1">&gt;  Not found in file ../../openmpi-1.9r28534/orte/runtime/orte_globals.c
</span><br>
<span class="quotelev1">&gt;  at line 488
</span><br>
<span class="quotelev1">&gt; [linpc1:03952] [[19223,0],1] -&gt; [[19223,0],0] (node: NULL) oob-tcp:
</span><br>
<span class="quotelev1">&gt;  Number of attempts to create TCP connection has been exceeded.
</span><br>
<span class="quotelev1">&gt;  Can not communicate with peer
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; sunpc1 rankfiles 109 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't have this problem with openmpi-1.6.5a1r28554.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; sunpc1 rankfiles 105 mpiexec -report-bindings \
</span><br>
<span class="quotelev1">&gt;  -rf rf_ex_sunpc_linpc hostname
</span><br>
<span class="quotelev1">&gt; [sunpc1:17968] MCW rank 1 bound to socket 0[core 0-1]:
</span><br>
<span class="quotelev1">&gt;  [B B][. .] (slot list 0:0-1)
</span><br>
<span class="quotelev1">&gt; [sunpc1:17968] MCW rank 2 bound to socket 1[core 0]:
</span><br>
<span class="quotelev1">&gt;  [. .][B .] (slot list 1:0)
</span><br>
<span class="quotelev1">&gt; [sunpc1:17968] MCW rank 3 bound to socket 1[core 1]:
</span><br>
<span class="quotelev1">&gt;  [. .][. B] (slot list 1:1)
</span><br>
<span class="quotelev1">&gt; sunpc1
</span><br>
<span class="quotelev1">&gt; sunpc1
</span><br>
<span class="quotelev1">&gt; sunpc1
</span><br>
<span class="quotelev1">&gt; [linpc1:03246] MCW rank 0 bound to socket 0[core 0-1]
</span><br>
<span class="quotelev1">&gt;  socket 1[core 0-1]: [B B][B B] (slot list 0:0-1,1:0-1)
</span><br>
<span class="quotelev1">&gt; linpc1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; sunpc1 rankfiles 106 which mpiexec
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.6.5_32_cc/bin/mpiexec
</span><br>
<span class="quotelev1">&gt; sunpc1 rankfiles 107 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I would be grateful, if somebody can fix the problems. Thank you
</span><br>
<span class="quotelev1">&gt; very much for any help in advance.
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21961.php">Jeff Squyres (jsquyres): "Re: [OMPI users] EXTERNAL: Re: basic questions about compiling OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="21959.php">Ralph Castain: "Re: [OMPI users] 64-bit version of openmpi-1.6.5a1r28554 hangs"</a>
<li><strong>In reply to:</strong> <a href="21958.php">Siegmar Gross: "[OMPI users] two problems with openmpi-1.9r28534"</a>
<!-- nextthread="start" -->
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
