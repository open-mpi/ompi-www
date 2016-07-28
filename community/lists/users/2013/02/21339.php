<?
$subject_val = "Re: [OMPI users] more information for my problem with rankfiles";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Feb  9 10:23:51 2013" -->
<!-- isoreceived="20130209152351" -->
<!-- sent="Sat, 9 Feb 2013 07:23:43 -0800" -->
<!-- isosent="20130209152343" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] more information for my problem with rankfiles" -->
<!-- id="ECDA3A0A-743E-4DBF-B758-046BB916A0C6_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201302091109.r19B9NaU021272_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] more information for my problem with rankfiles<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-09 10:23:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21340.php">Eugene Loh: "Re: [OMPI users] now 1.9 [was: I have still a problem with rankfiles in openmpi-1.6.4rc3]"</a>
<li><strong>Previous message:</strong> <a href="21338.php">Siegmar Gross: "[OMPI users] more information for my problem with rankfiles"</a>
<li><strong>In reply to:</strong> <a href="21338.php">Siegmar Gross: "[OMPI users] more information for my problem with rankfiles"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff just committed the fix to the branch today at r28039, so it isn't in the earlier versions. You might try it with the next nightly snapshot of 1.6.4.
<br>
<p><p>On Feb 9, 2013, at 3:09 AM, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I could successfully use the following rankfile on Linux with
</span><br>
<span class="quotelev1">&gt; openmpi-1.6.4rc3r27923, but it doesn't work with a patched
</span><br>
<span class="quotelev1">&gt; openmpi-1.6.4rc4r28022 (patch.diff from Eugene). Perhaps this
</span><br>
<span class="quotelev1">&gt; information helps to track down the error.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr rankfiles 114 cat rf_ex_linpc 
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; linpc1 rankfiles 99 mpiexec -report-bindings -rf rf_ex_linpc hostname
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; linpc1 rankfiles 100 ompi_info | grep &quot;MPI:&quot;
</span><br>
<span class="quotelev1">&gt;                Open MPI: 1.6.4rc4r28022
</span><br>
<span class="quotelev1">&gt; linpc1 rankfiles 101 exit
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr rankfiles 110 ssh linpc1
</span><br>
<span class="quotelev1">&gt; linpc1 fd1026 96 cd .../prog/mpi/rankfiles/
</span><br>
<span class="quotelev1">&gt; linpc1 rankfiles 97 mpiexec -report-bindings -rf rf_ex_linpc hostname
</span><br>
<span class="quotelev1">&gt; [linpc1:21351] MCW rank 1 bound to socket 0[core 0-1]:
</span><br>
<span class="quotelev1">&gt;  [B B][. .] (slot list 0:0-1)
</span><br>
<span class="quotelev1">&gt; [linpc1:21351] MCW rank 2 bound to socket 1[core 0]:
</span><br>
<span class="quotelev1">&gt;  [. .][B .] (slot list 1:0)
</span><br>
<span class="quotelev1">&gt; [linpc1:21351] MCW rank 3 bound to socket 1[core 1]:
</span><br>
<span class="quotelev1">&gt;  [. .][. B] (slot list 1:1)
</span><br>
<span class="quotelev1">&gt; [linpc0:08012] MCW rank 0 bound to socket 0[core 0-1] socket 1[core 0-1]:
</span><br>
<span class="quotelev1">&gt;  [B B][B B] (slot list 0:0-1,1:0-1)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; linpc1 rankfiles 98 ompi_info | grep &quot;MPI:&quot;
</span><br>
<span class="quotelev1">&gt;                Open MPI: 1.6.4rc3r27923
</span><br>
<span class="quotelev1">&gt; linpc1 rankfiles 99 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I will build an unpatched openmpi-1.6.4rc4 and check if the
</span><br>
<span class="quotelev1">&gt; above rankfile will work. Unfortunately I can check only tomorrow
</span><br>
<span class="quotelev1">&gt; because new packages will be mirrored in the night to all machines
</span><br>
<span class="quotelev1">&gt; so that it is not available on both machines today. I let you know
</span><br>
<span class="quotelev1">&gt; the result.
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
<li><strong>Next message:</strong> <a href="21340.php">Eugene Loh: "Re: [OMPI users] now 1.9 [was: I have still a problem with rankfiles in openmpi-1.6.4rc3]"</a>
<li><strong>Previous message:</strong> <a href="21338.php">Siegmar Gross: "[OMPI users] more information for my problem with rankfiles"</a>
<li><strong>In reply to:</strong> <a href="21338.php">Siegmar Gross: "[OMPI users] more information for my problem with rankfiles"</a>
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
