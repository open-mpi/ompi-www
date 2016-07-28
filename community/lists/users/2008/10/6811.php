<?
$subject_val = "Re: [OMPI users] Crashes over TCP/ethernet but not on shared memory";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  1 12:08:42 2008" -->
<!-- isoreceived="20081001160842" -->
<!-- sent="Wed, 01 Oct 2008 18:11:34 +0200" -->
<!-- isosent="20081001161134" -->
<!-- name="Leonardo Fialho" -->
<!-- email="lfialho_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Crashes over TCP/ethernet but not on shared memory" -->
<!-- id="48E3A136.3010208_at_aomail.uab.es" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1CD91896-1172-4CF6-846B-1D233BD37268_at_eecs.utk.edu" -->
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
<strong>From:</strong> Leonardo Fialho (<em>lfialho_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-01 12:11:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6812.php">Ralph Castain: "Re: [OMPI users] Running application with	MPI_Comm_spawn()	in	multithreaded environment"</a>
<li><strong>Previous message:</strong> <a href="6810.php">Roberto Fichera: "Re: [OMPI users] Running application with	MPI_Comm_spawn()	in	multithreaded environment"</a>
<li><strong>In reply to:</strong> <a href="6809.php">Aur&#233;lien Bouteiller: "Re: [OMPI users] Crashes over TCP/ethernet but not on shared memory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6939.php">V. Ram: "Re: [OMPI users] Crashes over TCP/ethernet but not on shared memory"</a>
<li><strong>Reply:</strong> <a href="6939.php">V. Ram: "Re: [OMPI users] Crashes over TCP/ethernet but not on shared memory"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ram,
<br>
<p>What is the name and version of the kernel module for your NIC? I have 
<br>
experimented some similar with my tg3 module. The error which appeared 
<br>
for my was different:
<br>
<p>[btl_tcp_frag.c:216:mca_btl_tcp_frag_recv] mca_btl_tcp_frag_recv: readv 
<br>
failed: No route to host (113)
<br>
<p>I solved it changing the following parameter in the linux kernel:
<br>
<p>/sbin/ethtool -K eth0 tso off
<br>
<p>Leonardo
<br>
<p><p>Aur&#233;lien Bouteiller escribi&#243;:
<br>
<span class="quotelev1">&gt; If you have several network cards in your system, it can sometime get 
</span><br>
<span class="quotelev1">&gt; the endpoints confused. Especially if you don't have the same number 
</span><br>
<span class="quotelev1">&gt; of cards or don't use the same subnet for all &quot;eth0, eth1&quot;. You should 
</span><br>
<span class="quotelev1">&gt; try to restrict Open MPI to use only one of the available networks by 
</span><br>
<span class="quotelev1">&gt; using the --mca btl_tcp_if_include ethx parameter to mpirun, where x 
</span><br>
<span class="quotelev1">&gt; is the network interface that is always connected to the same logical 
</span><br>
<span class="quotelev1">&gt; and physical network on your machine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Aurelien
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Le 1 oct. 08 &#224; 11:47, V. Ram a &#233;crit :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I wrote earlier about one of my users running a third-party Fortran code
</span><br>
<span class="quotelev2">&gt;&gt; on 32-bit x86 machines, using OMPI 1.2.7, that is having some odd crash
</span><br>
<span class="quotelev2">&gt;&gt; behavior.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Our cluster's nodes all have 2 single-core processors.  If this code is
</span><br>
<span class="quotelev2">&gt;&gt; run on 2 processors on 1 node, it runs seemingly fine.  However, if the
</span><br>
<span class="quotelev2">&gt;&gt; job runs on 1 processor on each of 2 nodes (e.g., mpirun --bynode), then
</span><br>
<span class="quotelev2">&gt;&gt; it crashes and gives messages like:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [node4][0,1,4][btl_tcp_frag.c:202:mca_btl_tcp_frag_recv]
</span><br>
<span class="quotelev2">&gt;&gt; [node3][0,1,3][btl_tcp_frag.c:202:mca_btl_tcp_frag_recv]
</span><br>
<span class="quotelev2">&gt;&gt; mca_btl_tcp_frag_recv: readv failed with errno=110
</span><br>
<span class="quotelev2">&gt;&gt; mca_btl_tcp_frag_recv: readv failed with errno=104
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Essentially, if any network communication is involved, the job crashes
</span><br>
<span class="quotelev2">&gt;&gt; in this form.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I do have another user that runs his own MPI code on 10+ of these
</span><br>
<span class="quotelev2">&gt;&gt; processors for days at a time without issue, so I don't think it's
</span><br>
<span class="quotelev2">&gt;&gt; hardware.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The original code also runs fine across many networked nodes if the
</span><br>
<span class="quotelev2">&gt;&gt; architecture is x86-64 (also running OMPI 1.2.7).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We have also tried different Fortran compilers (both PathScale and
</span><br>
<span class="quotelev2">&gt;&gt; gfortran) and keep getting these crashes.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Are there any suggestions on how to figure out if it's a problem with
</span><br>
<span class="quotelev2">&gt;&gt; the code or the OMPI installation/software on the system? We have tried
</span><br>
<span class="quotelev2">&gt;&gt; &quot;--debug-daemons&quot; with no new/interesting information being revealed.
</span><br>
<span class="quotelev2">&gt;&gt; Is there a way to trap segfault messages or more detailed MPI
</span><br>
<span class="quotelev2">&gt;&gt; transaction information or anything else that could help diagnose this?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks.
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt;  V. Ram
</span><br>
<span class="quotelev2">&gt;&gt;  v_r_959_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.fastmail.fm">http://www.fastmail.fm</a> - Same, same, but different...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
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
<p><p><pre>
-- 
Leonardo Fialho
Computer Architecture and Operating Systems Department - CAOS
Universidad Autonoma de Barcelona - UAB
ETSE, Edifcio Q, QC/3088
<a href="http://www.caos.uab.es">http://www.caos.uab.es</a>
Phone: +34-93-581-2888
Fax: +34-93-581-2478
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6812.php">Ralph Castain: "Re: [OMPI users] Running application with	MPI_Comm_spawn()	in	multithreaded environment"</a>
<li><strong>Previous message:</strong> <a href="6810.php">Roberto Fichera: "Re: [OMPI users] Running application with	MPI_Comm_spawn()	in	multithreaded environment"</a>
<li><strong>In reply to:</strong> <a href="6809.php">Aur&#233;lien Bouteiller: "Re: [OMPI users] Crashes over TCP/ethernet but not on shared memory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6939.php">V. Ram: "Re: [OMPI users] Crashes over TCP/ethernet but not on shared memory"</a>
<li><strong>Reply:</strong> <a href="6939.php">V. Ram: "Re: [OMPI users] Crashes over TCP/ethernet but not on shared memory"</a>
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
