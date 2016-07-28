<?
$subject_val = "[OMPI users] problem with rankfile";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 11 09:01:26 2013" -->
<!-- isoreceived="20130111140126" -->
<!-- sent="Fri, 11 Jan 2013 14:54:02 +0100 (CET)" -->
<!-- isosent="20130111135402" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] problem with rankfile" -->
<!-- id="201301111354.r0BDs282011743_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> [OMPI users] problem with rankfile<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-11 08:54:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21107.php">Stefan Mauerberger: "Re: [OMPI users] Initializing OMPI with invoking the array constructor on Fortran derived types causes the executable to crash"</a>
<li><strong>Previous message:</strong> <a href="21105.php">Paul Kapinos: "Re: [OMPI users] Initializing OMPI with invoking the array constructor on Fortran derived types causes the executable to crash"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/09/20117.php">Siegmar Gross: "Re: [OMPI users] problem with rankfile"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/09/20117.php">Siegmar Gross: "Re: [OMPI users] problem with rankfile"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/09/20128.php">Siegmar Gross: "Re: [OMPI users] problem with rankfile"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/09/20152.php">Siegmar Gross: "Re: [OMPI users] problem with rankfile"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/09/20170.php">Siegmar Gross: "Re: [OMPI users] problem with rankfile"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
<p>do you know when you will have time to solve the problem with a
<br>
rankfile? In the past you told me that my rankfile is correct.
<br>
<p><p>linpc1 rankfiles 120 ompi_info | grep &quot;Open MPI:&quot;                                
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open MPI: 1.6.4a1r27766
<br>
<p>linpc1 rankfiles 121 mpiexec -report-bindings -np 1 \
<br>
&nbsp;&nbsp;-host linpc1 -cpus-per-proc 4 -bycore -bind-to-core hostname
<br>
[linpc1:09621] MCW rank 0 bound to socket 0[core 0-1]
<br>
&nbsp;&nbsp;socket 1[core 0-1]: [B B][B B]
<br>
linpc1
<br>
<p><p>linpc1 rankfiles 122 mpiexec -report-bindings -np 1 \
<br>
&nbsp;&nbsp;-rf my_rankfile hostname  
<br>
--------------------------------------------------------------------
<br>
We were unable to successfully process/set the requested processor
<br>
affinity settings:
<br>
<p>Specified slot list: 0:0-1,1:0-1
<br>
Error: Error
<br>
<p>This could mean that a non-existent processor was specified, or
<br>
that the specification had improper syntax.
<br>
--------------------------------------------------------------------
<br>
--------------------------------------------------------------------
<br>
mpiexec was unable to start the specified application as it
<br>
&nbsp;&nbsp;encountered an error:
<br>
<p>Error name: Error
<br>
Node: linpc1
<br>
<p>when attempting to start process rank 0.
<br>
--------------------------------------------------------------------
<br>
linpc1
<br>
<p><p>linpc1 rankfiles 123 cat my_rankfile 
<br>
rank 0=linpc1 slot=0:0-1,1:0-1
<br>
<p><p><p>One more question: openmpi-1.7rc6r27786 and openmpi-1.9a1r27787
<br>
don't support &quot;-cpus-per-proc&quot; any longer. Will it be available
<br>
in the future or have you removed this option?
<br>
<p><p>linpc1 fd1026 104 mpiexec -report-bindings -np 1 -host linpc1 \
<br>
&nbsp;-cpus-per-proc 4 -map-by core -bind-to core hostname
<br>
mpiexec: Error: unknown option &quot;-p&quot;
<br>
Type 'mpiexec --help' for usage.
<br>
linpc1 fd1026 105 
<br>
<p>Thank you very much for your answer in advance.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21107.php">Stefan Mauerberger: "Re: [OMPI users] Initializing OMPI with invoking the array constructor on Fortran derived types causes the executable to crash"</a>
<li><strong>Previous message:</strong> <a href="21105.php">Paul Kapinos: "Re: [OMPI users] Initializing OMPI with invoking the array constructor on Fortran derived types causes the executable to crash"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/09/20117.php">Siegmar Gross: "Re: [OMPI users] problem with rankfile"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/09/20117.php">Siegmar Gross: "Re: [OMPI users] problem with rankfile"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/09/20128.php">Siegmar Gross: "Re: [OMPI users] problem with rankfile"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/09/20152.php">Siegmar Gross: "Re: [OMPI users] problem with rankfile"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/09/20170.php">Siegmar Gross: "Re: [OMPI users] problem with rankfile"</a>
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
