<?
$subject_val = "[OMPI users] more information for my problem with rankfiles";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Feb  9 06:16:25 2013" -->
<!-- isoreceived="20130209111625" -->
<!-- sent="Sat, 9 Feb 2013 12:09:23 +0100 (CET)" -->
<!-- isosent="20130209110923" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] more information for my problem with rankfiles" -->
<!-- id="201302091109.r19B9NaU021272_at_tyr.informatik.hs-fulda.de" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] more information for my problem with rankfiles<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-09 06:09:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21339.php">Ralph Castain: "Re: [OMPI users] more information for my problem with rankfiles"</a>
<li><strong>Previous message:</strong> <a href="21337.php">Ralph Castain: "Re: [OMPI users] now 1.9 [was: I have still a problem with rankfiles in openmpi-1.6.4rc3]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21339.php">Ralph Castain: "Re: [OMPI users] more information for my problem with rankfiles"</a>
<li><strong>Reply:</strong> <a href="21339.php">Ralph Castain: "Re: [OMPI users] more information for my problem with rankfiles"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
<p>I could successfully use the following rankfile on Linux with
<br>
openmpi-1.6.4rc3r27923, but it doesn't work with a patched
<br>
openmpi-1.6.4rc4r28022 (patch.diff from Eugene). Perhaps this
<br>
information helps to track down the error.
<br>
<p>tyr rankfiles 114 cat rf_ex_linpc 
<br>
# mpiexec -report-bindings -rf rf_ex_linpc hostname
<br>
rank 0=linpc0 slot=0:0-1,1:0-1
<br>
rank 1=linpc1 slot=0:0-1
<br>
rank 2=linpc1 slot=1:0
<br>
rank 3=linpc1 slot=1:1
<br>
<p><p>linpc1 rankfiles 99 mpiexec -report-bindings -rf rf_ex_linpc hostname
<br>
------------------------------------------------------------------------
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
<p>&nbsp;&nbsp;Host: linpc0
<br>
------------------------------------------------------------------------
<br>
<p>linpc1 rankfiles 100 ompi_info | grep &quot;MPI:&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open MPI: 1.6.4rc4r28022
<br>
linpc1 rankfiles 101 exit
<br>
<p><p><p>tyr rankfiles 110 ssh linpc1
<br>
linpc1 fd1026 96 cd .../prog/mpi/rankfiles/
<br>
linpc1 rankfiles 97 mpiexec -report-bindings -rf rf_ex_linpc hostname
<br>
[linpc1:21351] MCW rank 1 bound to socket 0[core 0-1]:
<br>
&nbsp;&nbsp;[B B][. .] (slot list 0:0-1)
<br>
[linpc1:21351] MCW rank 2 bound to socket 1[core 0]:
<br>
&nbsp;&nbsp;[. .][B .] (slot list 1:0)
<br>
[linpc1:21351] MCW rank 3 bound to socket 1[core 1]:
<br>
&nbsp;&nbsp;[. .][. B] (slot list 1:1)
<br>
[linpc0:08012] MCW rank 0 bound to socket 0[core 0-1] socket 1[core 0-1]:
<br>
&nbsp;&nbsp;[B B][B B] (slot list 0:0-1,1:0-1)
<br>
<p>linpc1 rankfiles 98 ompi_info | grep &quot;MPI:&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open MPI: 1.6.4rc3r27923
<br>
linpc1 rankfiles 99 
<br>
<p><p>I will build an unpatched openmpi-1.6.4rc4 and check if the
<br>
above rankfile will work. Unfortunately I can check only tomorrow
<br>
because new packages will be mirrored in the night to all machines
<br>
so that it is not available on both machines today. I let you know
<br>
the result.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21339.php">Ralph Castain: "Re: [OMPI users] more information for my problem with rankfiles"</a>
<li><strong>Previous message:</strong> <a href="21337.php">Ralph Castain: "Re: [OMPI users] now 1.9 [was: I have still a problem with rankfiles in openmpi-1.6.4rc3]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21339.php">Ralph Castain: "Re: [OMPI users] more information for my problem with rankfiles"</a>
<li><strong>Reply:</strong> <a href="21339.php">Ralph Castain: "Re: [OMPI users] more information for my problem with rankfiles"</a>
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
