<?
$subject_val = "Re: [OMPI users] I have still a problem with rankfiles in openmpi-1.6.4rc3";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb  8 04:04:38 2013" -->
<!-- isoreceived="20130208090438" -->
<!-- sent="Fri, 8 Feb 2013 09:57:23 +0100 (CET)" -->
<!-- isosent="20130208085723" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="Re: [OMPI users] I have still a problem with rankfiles in openmpi-1.6.4rc3" -->
<!-- id="201302080857.r188vMjB018431_at_tyr.informatik.hs-fulda.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] I have still a problem with rankfiles in openmpi-1.6.4rc3" -->
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
<strong>Subject:</strong> Re: [OMPI users] I have still a problem with rankfiles in openmpi-1.6.4rc3<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-08 03:57:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21333.php">Pierre LINDENBAUM: "[OMPI users] newbie: Submitting Open MPI jobs to SGE ( `qsh -pe orte 4` fails)"</a>
<li><strong>Previous message:</strong> <a href="21331.php">Jiri Polach: "Re: [OMPI users] OpenMPI 1.6 with Intel 11 Compiler"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/01/21265.php">Siegmar Gross: "[OMPI users] I have still a problem with rankfiles in openmpi-1.6.4rc3"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
<p>today I tried a different rankfile and got once more a problem. :-((
<br>
<p><span class="quotelev2">&gt; &gt; thank you very much for your patch. I have applied the patch to
</span><br>
<span class="quotelev2">&gt; &gt; openmpi-1.6.4rc4.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Open MPI: 1.6.4rc4r28022
</span><br>
<span class="quotelev2">&gt; &gt; : [B .][. .] (slot list 0:0)
</span><br>
<span class="quotelev2">&gt; &gt; : [. B][. .] (slot list 0:1)
</span><br>
<span class="quotelev2">&gt; &gt; : [B B][. .] (slot list 0:0-1)
</span><br>
<span class="quotelev2">&gt; &gt; : [. .][B .] (slot list 1:0)
</span><br>
<span class="quotelev2">&gt; &gt; : [. .][. B] (slot list 1:1)
</span><br>
<span class="quotelev2">&gt; &gt; : [. .][B B] (slot list 1:0-1)
</span><br>
<span class="quotelev2">&gt; &gt; : [B B][B B] (slot list 0:0-1,1:0-1)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That looks great.  I'll file a CMR to get this patch into 1.6.
</span><br>
<span class="quotelev1">&gt; Unless you indicate otherwise, I'll assume this issue is understood 
</span><br>
<span class="quotelev1">&gt; for 1.6.
</span><br>
<p>Rankfile rf_6 is the same as last time. I have added one more
<br>
line in rf_7 and I switched the sequence of the hosts in rf_8.
<br>
Everything is still fine with rf_6. I don't get any output for
<br>
rank 1 with rf_7 and I get an error for rf_8. Both machines
<br>
use the same hardware.
<br>
<p><p>sunpc1 rankfiles 106 cat rf_6
<br>
# mpiexec -report-bindings -rf rf_6 hostname
<br>
rank 0=sunpc1 slot=0:0-1,1:0-1
<br>
<p>sunpc1 rankfiles 107 cat rf_7
<br>
# mpiexec -report-bindings -rf rf_7 hostname
<br>
rank 0=sunpc1 slot=0:0-1,1:0-1
<br>
rank 1=sunpc0 slot=0:0-1
<br>
<p>sunpc1 rankfiles 108 cat rf_8
<br>
# mpiexec -report-bindings -rf rf_8 hostname
<br>
rank 0=sunpc0 slot=0:0-1,1:0-1
<br>
rank 1=sunpc1 slot=0:0-1
<br>
<p><p>sunpc1 rankfiles 109 mpiexec -report-bindings -rf rf_6 hostname
<br>
[sunpc1:09779] MCW rank 0 bound to socket 0[core 0-1]
<br>
&nbsp;&nbsp;socket 1[core 0-1]: [B B][B B] (slot list 0:0-1,1:0-1)
<br>
<p>sunpc1 rankfiles 110 mpiexec -report-bindings -rf rf_7 hostname
<br>
[sunpc1:09782] MCW rank 0 bound to socket 0[core 0-1]
<br>
&nbsp;&nbsp;socket 1[core 0-1]: [B B][B B] (slot list 0:0-1,1:0-1)
<br>
<p>sunpc1 rankfiles 111 mpiexec -report-bindings -rf rf_8 hostname
<br>
--------------------------------------------------------------------------
<br>
The rankfile that was used claimed that a host was either not
<br>
allocated or oversubscribed its slots.  Please review your rank-slot
<br>
assignments and your host allocation to ensure a proper match.  Also,
<br>
some systems may require using full hostnames, such as
<br>
&quot;host1.example.com&quot; (instead of just plain &quot;host1&quot;).
<br>
<p>&nbsp;&nbsp;Host: sunpc0
<br>
--------------------------------------------------------------------------
<br>
<p><p><p>I get the following output, if I use sunpc0 as local host.
<br>
<p>sunpc0 rankfiles 102 mpiexec -report-bindings -rf rf_6 hostname
<br>
--------------------------------------------------------------------------
<br>
All nodes which are allocated for this job are already filled.
<br>
--------------------------------------------------------------------------
<br>
<p>sunpc0 rankfiles 103 mpiexec -report-bindings -rf rf_7 hostname
<br>
--------------------------------------------------------------------------
<br>
The rankfile that was used claimed that a host was either not
<br>
allocated or oversubscribed its slots.  Please review your rank-slot
<br>
assignments and your host allocation to ensure a proper match.  Also,
<br>
some systems may require using full hostnames, such as
<br>
&quot;host1.example.com&quot; (instead of just plain &quot;host1&quot;).
<br>
<p>&nbsp;&nbsp;Host: sunpc1
<br>
--------------------------------------------------------------------------
<br>
<p>sunpc0 rankfiles 104 mpiexec -report-bindings -rf rf_8 hostname
<br>
[sunpc0:19027] MCW rank 0 bound to socket 0[core 0-1]
<br>
&nbsp;&nbsp;socket 1[core 0-1]: [B B][B B] (slot list 0:0-1,1:0-1)
<br>
<p><p>I get the following output, if I use tyr as local host.
<br>
<p>tyr rankfiles 218 mpiexec -report-bindings -rf rf_6 hostname
<br>
--------------------------------------------------------------------------
<br>
All nodes which are allocated for this job are already filled.
<br>
--------------------------------------------------------------------------
<br>
<p>tyr rankfiles 219 mpiexec -report-bindings -rf rf_7 hostname
<br>
--------------------------------------------------------------------------
<br>
All nodes which are allocated for this job are already filled.
<br>
--------------------------------------------------------------------------
<br>
<p>tyr rankfiles 220 mpiexec -report-bindings -rf rf_8 hostname
<br>
--------------------------------------------------------------------------
<br>
All nodes which are allocated for this job are already filled.
<br>
--------------------------------------------------------------------------
<br>
<p><p><p>Do you have any ideas why this happens? Thank you very much for
<br>
any help in advance.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21333.php">Pierre LINDENBAUM: "[OMPI users] newbie: Submitting Open MPI jobs to SGE ( `qsh -pe orte 4` fails)"</a>
<li><strong>Previous message:</strong> <a href="21331.php">Jiri Polach: "Re: [OMPI users] OpenMPI 1.6 with Intel 11 Compiler"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/01/21265.php">Siegmar Gross: "[OMPI users] I have still a problem with rankfiles in openmpi-1.6.4rc3"</a>
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
