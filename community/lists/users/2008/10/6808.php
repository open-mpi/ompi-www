<?
$subject_val = "[OMPI users] Crashes over TCP/ethernet but not on shared memory";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  1 11:47:43 2008" -->
<!-- isoreceived="20081001154743" -->
<!-- sent="Wed, 01 Oct 2008 11:47:38 -0400" -->
<!-- isosent="20081001154738" -->
<!-- name="V. Ram" -->
<!-- email="v_r_959_at_[hidden]" -->
<!-- subject="[OMPI users] Crashes over TCP/ethernet but not on shared memory" -->
<!-- id="1222876058.31252.1276969927_at_webmail.messagingengine.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Crashes over TCP/ethernet but not on shared memory<br>
<strong>From:</strong> V. Ram (<em>v_r_959_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-01 11:47:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6809.php">Aurélien Bouteiller: "Re: [OMPI users] Crashes over TCP/ethernet but not on shared memory"</a>
<li><strong>Previous message:</strong> <a href="6807.php">Roberto Fichera: "Re: [OMPI users] Running application with	MPI_Comm_spawn()	in	multithreaded environment"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6809.php">Aurélien Bouteiller: "Re: [OMPI users] Crashes over TCP/ethernet but not on shared memory"</a>
<li><strong>Reply:</strong> <a href="6809.php">Aurélien Bouteiller: "Re: [OMPI users] Crashes over TCP/ethernet but not on shared memory"</a>
<li><strong>Maybe reply:</strong> <a href="7089.php">V. Ram: "Re: [OMPI users] Crashes over TCP/ethernet but not on shared memory"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I wrote earlier about one of my users running a third-party Fortran code
<br>
on 32-bit x86 machines, using OMPI 1.2.7, that is having some odd crash
<br>
behavior.
<br>
<p>Our cluster's nodes all have 2 single-core processors.  If this code is
<br>
run on 2 processors on 1 node, it runs seemingly fine.  However, if the
<br>
job runs on 1 processor on each of 2 nodes (e.g., mpirun --bynode), then
<br>
it crashes and gives messages like:
<br>
<p>[node4][0,1,4][btl_tcp_frag.c:202:mca_btl_tcp_frag_recv]
<br>
[node3][0,1,3][btl_tcp_frag.c:202:mca_btl_tcp_frag_recv]
<br>
mca_btl_tcp_frag_recv: readv failed with errno=110
<br>
mca_btl_tcp_frag_recv: readv failed with errno=104
<br>
<p>Essentially, if any network communication is involved, the job crashes
<br>
in this form.
<br>
<p>I do have another user that runs his own MPI code on 10+ of these
<br>
processors for days at a time without issue, so I don't think it's
<br>
hardware.
<br>
<p>The original code also runs fine across many networked nodes if the
<br>
architecture is x86-64 (also running OMPI 1.2.7).
<br>
<p>We have also tried different Fortran compilers (both PathScale and
<br>
gfortran) and keep getting these crashes.
<br>
<p>Are there any suggestions on how to figure out if it's a problem with
<br>
the code or the OMPI installation/software on the system? We have tried
<br>
&quot;--debug-daemons&quot; with no new/interesting information being revealed. 
<br>
Is there a way to trap segfault messages or more detailed MPI
<br>
transaction information or anything else that could help diagnose this?
<br>
<p>Thanks.
<br>
<pre>
-- 
  V. Ram
  v_r_959_at_[hidden]
-- 
<a href="http://www.fastmail.fm">http://www.fastmail.fm</a> - Same, same, but different...
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6809.php">Aurélien Bouteiller: "Re: [OMPI users] Crashes over TCP/ethernet but not on shared memory"</a>
<li><strong>Previous message:</strong> <a href="6807.php">Roberto Fichera: "Re: [OMPI users] Running application with	MPI_Comm_spawn()	in	multithreaded environment"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6809.php">Aurélien Bouteiller: "Re: [OMPI users] Crashes over TCP/ethernet but not on shared memory"</a>
<li><strong>Reply:</strong> <a href="6809.php">Aurélien Bouteiller: "Re: [OMPI users] Crashes over TCP/ethernet but not on shared memory"</a>
<li><strong>Maybe reply:</strong> <a href="7089.php">V. Ram: "Re: [OMPI users] Crashes over TCP/ethernet but not on shared memory"</a>
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
