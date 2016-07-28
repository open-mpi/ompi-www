<?
$subject_val = "Re: [OMPI users] Crashes over TCP/ethernet but not on shared memory";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  1 11:58:53 2008" -->
<!-- isoreceived="20081001155853" -->
<!-- sent="Wed, 1 Oct 2008 11:58:30 -0400" -->
<!-- isosent="20081001155830" -->
<!-- name="Aur&#233;lien Bouteiller" -->
<!-- email="bouteill_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Crashes over TCP/ethernet but not on shared memory" -->
<!-- id="1CD91896-1172-4CF6-846B-1D233BD37268_at_eecs.utk.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1222876058.31252.1276969927_at_webmail.messagingengine.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Crashes over TCP/ethernet but not on shared memory<br>
<strong>From:</strong> Aur&#233;lien Bouteiller (<em>bouteill_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-01 11:58:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6810.php">Roberto Fichera: "Re: [OMPI users] Running application with	MPI_Comm_spawn()	in	multithreaded environment"</a>
<li><strong>Previous message:</strong> <a href="6808.php">V. Ram: "[OMPI users] Crashes over TCP/ethernet but not on shared memory"</a>
<li><strong>In reply to:</strong> <a href="6808.php">V. Ram: "[OMPI users] Crashes over TCP/ethernet but not on shared memory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6811.php">Leonardo Fialho: "Re: [OMPI users] Crashes over TCP/ethernet but not on shared memory"</a>
<li><strong>Reply:</strong> <a href="6811.php">Leonardo Fialho: "Re: [OMPI users] Crashes over TCP/ethernet but not on shared memory"</a>
<li><strong>Reply:</strong> <a href="6938.php">V. Ram: "Re: [OMPI users] Crashes over TCP/ethernet but not on shared memory"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If you have several network cards in your system, it can sometime get  
<br>
the endpoints confused. Especially if you don't have the same number  
<br>
of cards or don't use the same subnet for all &quot;eth0, eth1&quot;. You should  
<br>
try to restrict Open MPI to use only one of the available networks by  
<br>
using the --mca btl_tcp_if_include ethx parameter to mpirun, where x  
<br>
is the network interface that is always connected to the same logical  
<br>
and physical network on your machine.
<br>
<p>Aurelien
<br>
<p>Le 1 oct. 08 &#224; 11:47, V. Ram a &#233;crit :
<br>
<p><span class="quotelev1">&gt; I wrote earlier about one of my users running a third-party Fortran  
</span><br>
<span class="quotelev1">&gt; code
</span><br>
<span class="quotelev1">&gt; on 32-bit x86 machines, using OMPI 1.2.7, that is having some odd  
</span><br>
<span class="quotelev1">&gt; crash
</span><br>
<span class="quotelev1">&gt; behavior.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Our cluster's nodes all have 2 single-core processors.  If this code  
</span><br>
<span class="quotelev1">&gt; is
</span><br>
<span class="quotelev1">&gt; run on 2 processors on 1 node, it runs seemingly fine.  However, if  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; job runs on 1 processor on each of 2 nodes (e.g., mpirun --bynode),  
</span><br>
<span class="quotelev1">&gt; then
</span><br>
<span class="quotelev1">&gt; it crashes and gives messages like:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [node4][0,1,4][btl_tcp_frag.c:202:mca_btl_tcp_frag_recv]
</span><br>
<span class="quotelev1">&gt; [node3][0,1,3][btl_tcp_frag.c:202:mca_btl_tcp_frag_recv]
</span><br>
<span class="quotelev1">&gt; mca_btl_tcp_frag_recv: readv failed with errno=110
</span><br>
<span class="quotelev1">&gt; mca_btl_tcp_frag_recv: readv failed with errno=104
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Essentially, if any network communication is involved, the job crashes
</span><br>
<span class="quotelev1">&gt; in this form.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I do have another user that runs his own MPI code on 10+ of these
</span><br>
<span class="quotelev1">&gt; processors for days at a time without issue, so I don't think it's
</span><br>
<span class="quotelev1">&gt; hardware.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The original code also runs fine across many networked nodes if the
</span><br>
<span class="quotelev1">&gt; architecture is x86-64 (also running OMPI 1.2.7).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We have also tried different Fortran compilers (both PathScale and
</span><br>
<span class="quotelev1">&gt; gfortran) and keep getting these crashes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Are there any suggestions on how to figure out if it's a problem with
</span><br>
<span class="quotelev1">&gt; the code or the OMPI installation/software on the system? We have  
</span><br>
<span class="quotelev1">&gt; tried
</span><br>
<span class="quotelev1">&gt; &quot;--debug-daemons&quot; with no new/interesting information being revealed.
</span><br>
<span class="quotelev1">&gt; Is there a way to trap segfault messages or more detailed MPI
</span><br>
<span class="quotelev1">&gt; transaction information or anything else that could help diagnose  
</span><br>
<span class="quotelev1">&gt; this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt;  V. Ram
</span><br>
<span class="quotelev1">&gt;  v_r_959_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.fastmail.fm">http://www.fastmail.fm</a> - Same, same, but different...
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
<li><strong>Next message:</strong> <a href="6810.php">Roberto Fichera: "Re: [OMPI users] Running application with	MPI_Comm_spawn()	in	multithreaded environment"</a>
<li><strong>Previous message:</strong> <a href="6808.php">V. Ram: "[OMPI users] Crashes over TCP/ethernet but not on shared memory"</a>
<li><strong>In reply to:</strong> <a href="6808.php">V. Ram: "[OMPI users] Crashes over TCP/ethernet but not on shared memory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6811.php">Leonardo Fialho: "Re: [OMPI users] Crashes over TCP/ethernet but not on shared memory"</a>
<li><strong>Reply:</strong> <a href="6811.php">Leonardo Fialho: "Re: [OMPI users] Crashes over TCP/ethernet but not on shared memory"</a>
<li><strong>Reply:</strong> <a href="6938.php">V. Ram: "Re: [OMPI users] Crashes over TCP/ethernet but not on shared memory"</a>
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
