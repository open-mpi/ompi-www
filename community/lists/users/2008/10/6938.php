<?
$subject_val = "Re: [OMPI users] Crashes over TCP/ethernet but not on shared memory";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 10 12:29:46 2008" -->
<!-- isoreceived="20081010162946" -->
<!-- sent="Fri, 10 Oct 2008 12:29:41 -0400" -->
<!-- isosent="20081010162941" -->
<!-- name="V. Ram" -->
<!-- email="v_r_959_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Crashes over TCP/ethernet but not on shared memory" -->
<!-- id="1223656181.20413.1278622571_at_webmail.messagingengine.com" -->
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
<strong>From:</strong> V. Ram (<em>v_r_959_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-10 12:29:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6939.php">V. Ram: "Re: [OMPI users] Crashes over TCP/ethernet but not on shared memory"</a>
<li><strong>Previous message:</strong> <a href="6937.php">SLIM H.A.: "[OMPI users] where is opal_install_dirs?"</a>
<li><strong>In reply to:</strong> <a href="6809.php">Aur&#233;lien Bouteiller: "Re: [OMPI users] Crashes over TCP/ethernet but not on shared memory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7089.php">V. Ram: "Re: [OMPI users] Crashes over TCP/ethernet but not on shared memory"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry for replying to this so late, but I have been away.  Reply
<br>
below...
<br>
<p>On Wed, 1 Oct 2008 11:58:30 -0400, &quot;Aur&#233;lien Bouteiller&quot;
<br>
&lt;bouteill_at_[hidden]&gt; said:
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
<p>I was pretty sure this wasn't the problem since basically all the nodes
<br>
only have one interface configured, but I had the user try the --mca
<br>
btl_tcp_if_include parameter.  The same result / crash occurred.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Aurelien
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Le 1 oct. 08 &#224; 11:47, V. Ram a &#233;crit :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I wrote earlier about one of my users running a third-party Fortran  
</span><br>
<span class="quotelev2">&gt; &gt; code
</span><br>
<span class="quotelev2">&gt; &gt; on 32-bit x86 machines, using OMPI 1.2.7, that is having some odd  
</span><br>
<span class="quotelev2">&gt; &gt; crash
</span><br>
<span class="quotelev2">&gt; &gt; behavior.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Our cluster's nodes all have 2 single-core processors.  If this code  
</span><br>
<span class="quotelev2">&gt; &gt; is
</span><br>
<span class="quotelev2">&gt; &gt; run on 2 processors on 1 node, it runs seemingly fine.  However, if  
</span><br>
<span class="quotelev2">&gt; &gt; the
</span><br>
<span class="quotelev2">&gt; &gt; job runs on 1 processor on each of 2 nodes (e.g., mpirun --bynode),  
</span><br>
<span class="quotelev2">&gt; &gt; then
</span><br>
<span class="quotelev2">&gt; &gt; it crashes and gives messages like:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [node4][0,1,4][btl_tcp_frag.c:202:mca_btl_tcp_frag_recv]
</span><br>
<span class="quotelev2">&gt; &gt; [node3][0,1,3][btl_tcp_frag.c:202:mca_btl_tcp_frag_recv]
</span><br>
<span class="quotelev2">&gt; &gt; mca_btl_tcp_frag_recv: readv failed with errno=110
</span><br>
<span class="quotelev2">&gt; &gt; mca_btl_tcp_frag_recv: readv failed with errno=104
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Essentially, if any network communication is involved, the job crashes
</span><br>
<span class="quotelev2">&gt; &gt; in this form.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I do have another user that runs his own MPI code on 10+ of these
</span><br>
<span class="quotelev2">&gt; &gt; processors for days at a time without issue, so I don't think it's
</span><br>
<span class="quotelev2">&gt; &gt; hardware.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The original code also runs fine across many networked nodes if the
</span><br>
<span class="quotelev2">&gt; &gt; architecture is x86-64 (also running OMPI 1.2.7).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; We have also tried different Fortran compilers (both PathScale and
</span><br>
<span class="quotelev2">&gt; &gt; gfortran) and keep getting these crashes.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Are there any suggestions on how to figure out if it's a problem with
</span><br>
<span class="quotelev2">&gt; &gt; the code or the OMPI installation/software on the system? We have  
</span><br>
<span class="quotelev2">&gt; &gt; tried
</span><br>
<span class="quotelev2">&gt; &gt; &quot;--debug-daemons&quot; with no new/interesting information being revealed.
</span><br>
<span class="quotelev2">&gt; &gt; Is there a way to trap segfault messages or more detailed MPI
</span><br>
<span class="quotelev2">&gt; &gt; transaction information or anything else that could help diagnose  
</span><br>
<span class="quotelev2">&gt; &gt; this?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks.
</span><br>
<span class="quotelev2">&gt; &gt; -- 
</span><br>
<span class="quotelev2">&gt; &gt;  V. Ram
</span><br>
<span class="quotelev2">&gt; &gt;  v_r_959_at_[hidden]
</span><br>
<pre>
-- 
  V. Ram
  v_r_959_at_[hidden]
-- 
<a href="http://www.fastmail.fm">http://www.fastmail.fm</a> - A no graphics, no pop-ups email service
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6939.php">V. Ram: "Re: [OMPI users] Crashes over TCP/ethernet but not on shared memory"</a>
<li><strong>Previous message:</strong> <a href="6937.php">SLIM H.A.: "[OMPI users] where is opal_install_dirs?"</a>
<li><strong>In reply to:</strong> <a href="6809.php">Aur&#233;lien Bouteiller: "Re: [OMPI users] Crashes over TCP/ethernet but not on shared memory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7089.php">V. Ram: "Re: [OMPI users] Crashes over TCP/ethernet but not on shared memory"</a>
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
