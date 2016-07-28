<?
$subject_val = "Re: [OMPI users] problems with rankfile in openmpi-1.9a1r29097";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep  2 10:52:44 2013" -->
<!-- isoreceived="20130902145244" -->
<!-- sent="Mon, 2 Sep 2013 07:52:41 -0700" -->
<!-- isosent="20130902145241" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problems with rankfile in openmpi-1.9a1r29097" -->
<!-- id="3737884F-714A-47CC-BCD6-52437B55AC04_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201309021410.r82EAhiR010057_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] problems with rankfile in openmpi-1.9a1r29097<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-02 10:52:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22587.php">Ralph Castain: "Re: [OMPI users] problems with rankfile in openmpi-1.9a1r29097"</a>
<li><strong>Previous message:</strong> <a href="22585.php">Siegmar Gross: "[OMPI users] problems with rankfile in openmpi-1.9a1r29097"</a>
<li><strong>In reply to:</strong> <a href="22585.php">Siegmar Gross: "[OMPI users] problems with rankfile in openmpi-1.9a1r29097"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22587.php">Ralph Castain: "Re: [OMPI users] problems with rankfile in openmpi-1.9a1r29097"</a>
<li><strong>Reply:</strong> <a href="22587.php">Ralph Castain: "Re: [OMPI users] problems with rankfile in openmpi-1.9a1r29097"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It seems to run for me on CentOS, though I note that rank 0 isn't bound to both sockets 0 and 1 as specified and I had to tell it how many procs to run:
<br>
<p>[rhc_at_bend001 svn-trunk]$  mpirun --report-bindings -rf rf -n 4 hostname
<br>
[bend001:13297] MCW rank 0 bound to socket 0[core 0[hwt 0-1]], socket 0[core 1[hwt 0-1]]: [BB/BB/../../../..][../../../../../..]
<br>
bend001
<br>
[bend002:25899] MCW rank 3 bound to socket 1[core 7[hwt 0-1]]: [../../../../../..][../BB/../../../..]
<br>
bend002
<br>
[bend002:25899] MCW rank 1 bound to socket 0[core 0[hwt 0-1]], socket 0[core 1[hwt 0-1]]: [BB/BB/../../../..][../../../../../..]
<br>
bend002
<br>
[bend002:25899] MCW rank 2 bound to socket 1[core 6[hwt 0-1]]: [../../../../../..][BB/../../../../..]
<br>
bend002
<br>
<p>[rhc_at_bend001 svn-trunk]$ cat rf
<br>
rank 0=bend001 slot=0:0-1,1:0-1
<br>
rank 1=bend002 slot=0:0-1
<br>
rank 2=bend002 slot=1:0
<br>
rank 3=bend002 slot=1:1
<br>
<p>I'll work on those issues, but don't know why you are getting this &quot;not allocated&quot; error.
<br>
<p><p>On Sep 2, 2013, at 7:10 AM, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I installed openmpi-1.9a1r29097 on &quot;openSuSE Linux 12.1&quot;, &quot;Solaris 10
</span><br>
<span class="quotelev1">&gt; x86_64&quot;, and &quot;Solaris 10 sparc&quot; with &quot;Sun C 5.12&quot; in 64-bit mode.
</span><br>
<span class="quotelev1">&gt; Unfortunately I still have a problem with rankfiles. I reported the
</span><br>
<span class="quotelev1">&gt; problems already in May. I show the problems with Linux, although I
</span><br>
<span class="quotelev1">&gt; have the same problems on all Solaris machines as well.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; linpc1 rankfiles 99 cat rf_linpc1
</span><br>
<span class="quotelev1">&gt; # mpiexec -report-bindings -rf rf_linpc1 hostname
</span><br>
<span class="quotelev1">&gt; rank 0=linpc1 slot=0:0-1,1:0-1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; linpc1 rankfiles 100 mpiexec -report-bindings -rf rf_linpc1 hostname
</span><br>
<span class="quotelev1">&gt; [linpc1:23413] MCW rank 0 bound to socket 0[core 0[hwt 0]],
</span><br>
<span class="quotelev1">&gt;  socket 0[core 1[hwt 0]]: [B/B][./.]
</span><br>
<span class="quotelev1">&gt; linpc1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; linpc1 rankfiles 101 cat rf_ex_linpc
</span><br>
<span class="quotelev1">&gt; # mpiexec -report-bindings -rf rf_ex_linpc hostname
</span><br>
<span class="quotelev1">&gt; rank 0=linpc0 slot=0:0-1,1:0-1
</span><br>
<span class="quotelev1">&gt; rank 1=linpc1 slot=0:0-1
</span><br>
<span class="quotelev1">&gt; rank 2=linpc1 slot=1:0
</span><br>
<span class="quotelev1">&gt; rank 3=linpc1 slot=1:1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; linpc1 rankfiles 102 mpiexec -report-bindings -rf rf_ex_linpc hostname
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
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
<span class="quotelev1">&gt;  Host: linpc0
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; linpc1 rankfiles 103 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't have these problems with openmpi-1.6.5a1r28554.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; linpc1 rankfiles 95 ompi_info | grep &quot;Open MPI:&quot;
</span><br>
<span class="quotelev1">&gt;                Open MPI: 1.6.5a1r28554
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; linpc1 rankfiles 95 mpiexec -report-bindings -rf rf_linpc1 hostname
</span><br>
<span class="quotelev1">&gt; [linpc1:23583] MCW rank 0 bound to socket 0[core 0-1]
</span><br>
<span class="quotelev1">&gt;  socket 1[core 0-1]: [B B][B B] (slot list 0:0-1,1:0-1)
</span><br>
<span class="quotelev1">&gt; linpc1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; linpc1 rankfiles 96 mpiexec -report-bindings -rf rf_ex_linpc hostname
</span><br>
<span class="quotelev1">&gt; [linpc1:23585] MCW rank 1 bound to socket 0[core 0-1]:
</span><br>
<span class="quotelev1">&gt;  [B B][. .] (slot list 0:0-1)
</span><br>
<span class="quotelev1">&gt; [linpc1:23585] MCW rank 2 bound to socket 1[core 0]:
</span><br>
<span class="quotelev1">&gt;  [. .][B .] (slot list 1:0)
</span><br>
<span class="quotelev1">&gt; [linpc1:23585] MCW rank 3 bound to socket 1[core 1]:
</span><br>
<span class="quotelev1">&gt;  [. .][. B] (slot list 1:1)
</span><br>
<span class="quotelev1">&gt; linpc1
</span><br>
<span class="quotelev1">&gt; linpc1
</span><br>
<span class="quotelev1">&gt; linpc1
</span><br>
<span class="quotelev1">&gt; [linpc0:10422] MCW rank 0 bound to socket 0[core 0-1] socket 1[core 0-1]:
</span><br>
<span class="quotelev1">&gt;  [B B][B B] (slot list 0:0-1,1:0-1)
</span><br>
<span class="quotelev1">&gt; linpc0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I would be grateful, if somebody can fix the problem. Thank you
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
<li><strong>Next message:</strong> <a href="22587.php">Ralph Castain: "Re: [OMPI users] problems with rankfile in openmpi-1.9a1r29097"</a>
<li><strong>Previous message:</strong> <a href="22585.php">Siegmar Gross: "[OMPI users] problems with rankfile in openmpi-1.9a1r29097"</a>
<li><strong>In reply to:</strong> <a href="22585.php">Siegmar Gross: "[OMPI users] problems with rankfile in openmpi-1.9a1r29097"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22587.php">Ralph Castain: "Re: [OMPI users] problems with rankfile in openmpi-1.9a1r29097"</a>
<li><strong>Reply:</strong> <a href="22587.php">Ralph Castain: "Re: [OMPI users] problems with rankfile in openmpi-1.9a1r29097"</a>
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
