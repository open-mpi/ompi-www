<?
$subject_val = "Re: [OMPI users] problem with rankfile and openmpi-1.6.4rc3r27923";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 29 14:57:33 2013" -->
<!-- isoreceived="20130129195733" -->
<!-- sent="Tue, 29 Jan 2013 11:57:25 -0800" -->
<!-- isosent="20130129195725" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem with rankfile and openmpi-1.6.4rc3r27923" -->
<!-- id="EAF8C9F1-FE58-45F1-9C7F-3264FE5B41C1_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201301291854.r0TIsHZT011625_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] problem with rankfile and openmpi-1.6.4rc3r27923<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-29 14:57:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21263.php">Ralph Castain: "Re: [OMPI users] problem with rankfile and openmpi-1.6.4rc3r27923"</a>
<li><strong>Previous message:</strong> <a href="21261.php">Siegmar Gross: "[OMPI users] problem with rankfile and openmpi-1.6.4rc3r27923"</a>
<li><strong>In reply to:</strong> <a href="21261.php">Siegmar Gross: "[OMPI users] problem with rankfile and openmpi-1.6.4rc3r27923"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21263.php">Ralph Castain: "Re: [OMPI users] problem with rankfile and openmpi-1.6.4rc3r27923"</a>
<li><strong>Reply:</strong> <a href="21263.php">Ralph Castain: "Re: [OMPI users] problem with rankfile and openmpi-1.6.4rc3r27923"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Using an svn checkout of the current 1.6 branch, if works fine for me:
<br>
<p>[rhc_at_odin ~/v1.6]$ cat rf
<br>
rank 0=odin127 slot=0:0-1,1:0-1
<br>
rank 1=odin128 slot=1
<br>
<p>[rhc_at_odin ~/v1.6]$ mpirun -n 2 -rf ./rf --report-bindings hostname
<br>
[odin127.cs.indiana.edu:12078] MCW rank 0 bound to socket 0[core 0-1] socket 1[core 0-1]: [B B][B B] (slot list 0:0-1,1:0-1)
<br>
[odin128.cs.indiana.edu:12156] MCW rank 1 bound to socket 0[core 1]: [. B][. .] (slot list 1)
<br>
odin127.cs.indiana.edu
<br>
odin128.cs.indiana.edu
<br>
<p>Note that those two nodes were indeed allocated by Slurm - are you using a resource manager? Or is the allocation being defined by the rankfile?
<br>
<p>If the latter, please add --display-allocation to your cmd line and let's see what it thinks was allocated. Also, if you configure OMPI --enable-debug, you could add &quot;-mca ras_base_verbose 5&quot; to the cmd line and get further diagnostic output
<br>
<p><p>On Jan 29, 2013, at 10:54 AM, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; today I have installed openmpi-1.6.4rc3r27923. Unfortunately I
</span><br>
<span class="quotelev1">&gt; still have a problem with rankfiles, if I start a process on a
</span><br>
<span class="quotelev1">&gt; remote machine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr rankfiles 114  ssh linpc1 ompi_info | grep &quot;Open MPI:&quot;
</span><br>
<span class="quotelev1">&gt;                Open MPI: 1.6.4rc3r27923
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr rankfiles 115 cat rf_linpc1
</span><br>
<span class="quotelev1">&gt; rank 0=linpc1 slot=0:0-1,1:0-1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr rankfiles 116 mpiexec -report-bindings -np 1 \
</span><br>
<span class="quotelev1">&gt;  -rf rf_linpc1 hostname
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; All nodes which are allocated for this job are already filled.
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The following command still works.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr rankfiles 119 mpiexec -report-bindings -np 1 -host linpc1 \
</span><br>
<span class="quotelev1">&gt;  -cpus-per-proc 4 -bycore -bind-to-core hostname
</span><br>
<span class="quotelev1">&gt; [linpc1:32262] MCW rank 0 bound to socket 0[core 0-1]
</span><br>
<span class="quotelev1">&gt;  socket 1[core 0-1]: [B B][B B]
</span><br>
<span class="quotelev1">&gt; linpc1
</span><br>
<span class="quotelev1">&gt; tyr rankfiles 120 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Everything is fine, if I use the rankfile on the local machine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; linpc1 rankfiles 103 ompi_info | grep &quot;Open MPI:&quot;                                              
</span><br>
<span class="quotelev1">&gt; Open MPI: 1.6.4rc3r27923
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; linpc1 rankfiles 104 cat rf_linpc1
</span><br>
<span class="quotelev1">&gt; rank 0=linpc1 slot=0:0-1,1:0-1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; linpc1 rankfiles 105 mpiexec -report-bindings -np 1 \
</span><br>
<span class="quotelev1">&gt;  -rf rf_linpc1 hostname
</span><br>
<span class="quotelev1">&gt; [linpc1:32385] MCW rank 0 bound to socket 0[core 0-1]
</span><br>
<span class="quotelev1">&gt;  socket 1[core 0-1]: [B B][B B] (slot list 0:0-1,1:0-1)
</span><br>
<span class="quotelev1">&gt; linpc1
</span><br>
<span class="quotelev1">&gt; linpc1 rankfiles 106
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In my opinion it should also work if I start a process on a
</span><br>
<span class="quotelev1">&gt; remote machine. Can somebody look once more into this issue?
</span><br>
<span class="quotelev1">&gt; Thank you very much for your help in advance.
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
<li><strong>Next message:</strong> <a href="21263.php">Ralph Castain: "Re: [OMPI users] problem with rankfile and openmpi-1.6.4rc3r27923"</a>
<li><strong>Previous message:</strong> <a href="21261.php">Siegmar Gross: "[OMPI users] problem with rankfile and openmpi-1.6.4rc3r27923"</a>
<li><strong>In reply to:</strong> <a href="21261.php">Siegmar Gross: "[OMPI users] problem with rankfile and openmpi-1.6.4rc3r27923"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21263.php">Ralph Castain: "Re: [OMPI users] problem with rankfile and openmpi-1.6.4rc3r27923"</a>
<li><strong>Reply:</strong> <a href="21263.php">Ralph Castain: "Re: [OMPI users] problem with rankfile and openmpi-1.6.4rc3r27923"</a>
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
