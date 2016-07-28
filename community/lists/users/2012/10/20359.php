<?
$subject_val = "[OMPI users] problem with rankfile in openmpi-1.6.2";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct  1 02:25:02 2012" -->
<!-- isoreceived="20121001062502" -->
<!-- sent="Mon, 1 Oct 2012 08:17:54 +0200 (CEST)" -->
<!-- isosent="20121001061754" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] problem with rankfile in openmpi-1.6.2" -->
<!-- id="201210010618.q916HsNB012369_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> [OMPI users] problem with rankfile in openmpi-1.6.2<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-01 02:17:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20360.php">Iliev, Hristo: "Re: [OMPI users] A question on MPI_Probe"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/09/20358.php">Paul Edmon: "Re: [OMPI users] OpenMPI 1.6.1 with Intel Cluster Studio 2012"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I installed openmpi-1.6.2 on our heterogeneous platform (Solaris 10
<br>
Sparc, Solaris 10 x86_84, and Linux x86_64).
<br>
<p>tyr small_prog 125 mpiexec -report-bindings -np 4 -host sunpc0,sunpc1 \
<br>
&nbsp;&nbsp;-bysocket  -bind-to-core date
<br>
Mon Oct  1 07:53:15 CEST 2012
<br>
[sunpc0:02084] MCW rank 0 bound to socket 0[core 0]: [B .][. .]
<br>
[sunpc0:02084] MCW rank 2 bound to socket 1[core 0]: [. .][B .]
<br>
Mon Oct  1 07:53:15 CEST 2012
<br>
Mon Oct  1 07:53:15 CEST 2012
<br>
[sunpc1:21881] MCW rank 1 bound to socket 0[core 0]: [B .][. .]
<br>
Mon Oct  1 07:53:15 CEST 2012
<br>
[sunpc1:21881] MCW rank 3 bound to socket 1[core 0]: [. .][B .]
<br>
<p><p>Now I try to do the same thing with the following rankfile.
<br>
<p>rank 0=sunpc0.informatik.hs-fulda.de slot=0:0
<br>
rank 1=sunpc1.informatik.hs-fulda.de slot=0:0
<br>
rank 2=sunpc0.informatik.hs-fulda.de slot=1:0
<br>
rank 3=sunpc1.informatik.hs-fulda.de slot=1:0
<br>
<p>tyr small_prog 126  mpiexec -report-bindings -rf rf_date_1.openmpi date
<br>
--------------------------------------------------------------------------
<br>
All nodes which are allocated for this job are already filled.
<br>
--------------------------------------------------------------------------
<br>
<p>I can also run the following commands successfully, but fail with the
<br>
same error message when I use an equivalent rankfile.
<br>
<p>mpiexec -report-bindings -np 4 -host sunpc0,sunpc1 -bycore \
<br>
&nbsp;&nbsp;-bind-to-socket date
<br>
<p>mpiexec -report-bindings -np 10 -host linpc0,linpc1,sunpc0,sunpc1,tyr \
<br>
&nbsp;&nbsp;-byslot -bind-to-core date
<br>
<p><p>Do you have any ideas why it doesn't work with a rankfile?
<br>
Can I provide more information so that you can track down and
<br>
solve the problem?
<br>
<p><p>I still have problems with our Sun M4000 server (two hardware threads per
<br>
core so that I should use &quot;-bind-to hwthread&quot;).
<br>
<p>tyr small_prog 133 mpiexec -report-bindings -np 2 -host rs0 -byslot \
<br>
&nbsp;&nbsp;-bind-to-core date
<br>
--------------------------------------------------------------------------
<br>
An attempt to set processor affinity has failed - please check to
<br>
ensure that your system supports such functionality. If so, then
<br>
this is probably something that should be reported to the OMPI developers.
<br>
--------------------------------------------------------------------------
<br>
[rs0....:23147] MCW rank 0 bound to socket 0[core 0]: [B . . .][. . . .]
<br>
--------------------------------------------------------------------------
<br>
mpiexec was unable to start the specified application as it encountered an error:
<br>
<p>Error name: Resource temporarily unavailable
<br>
Node: rs0
<br>
<p>when attempting to start process rank 0.
<br>
--------------------------------------------------------------------------
<br>
2 total processes failed to start
<br>
<p><p>I would be grateful if there is some kind of solution for this
<br>
machine as well in the (near) future. Thank you very much for
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
<li><strong>Next message:</strong> <a href="20360.php">Iliev, Hristo: "Re: [OMPI users] A question on MPI_Probe"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/09/20358.php">Paul Edmon: "Re: [OMPI users] OpenMPI 1.6.1 with Intel Cluster Studio 2012"</a>
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
