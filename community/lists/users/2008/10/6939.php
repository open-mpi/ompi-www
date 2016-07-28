<?
$subject_val = "Re: [OMPI users] Crashes over TCP/ethernet but not on shared memory";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 10 12:42:24 2008" -->
<!-- isoreceived="20081010164224" -->
<!-- sent="Fri, 10 Oct 2008 12:42:19 -0400" -->
<!-- isosent="20081010164219" -->
<!-- name="V. Ram" -->
<!-- email="v_r_959_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Crashes over TCP/ethernet but not on shared memory" -->
<!-- id="1223656939.23009.1278622977_at_webmail.messagingengine.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="48E3A136.3010208_at_aomail.uab.es" -->
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
<strong>Date:</strong> 2008-10-10 12:42:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6940.php">Brock Palen: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="6938.php">V. Ram: "Re: [OMPI users] Crashes over TCP/ethernet but not on shared memory"</a>
<li><strong>In reply to:</strong> <a href="6811.php">Leonardo Fialho: "Re: [OMPI users] Crashes over TCP/ethernet but not on shared memory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6943.php">George Bosilca: "Re: [OMPI users] Crashes over TCP/ethernet but not on shared memory"</a>
<li><strong>Reply:</strong> <a href="6943.php">George Bosilca: "Re: [OMPI users] Crashes over TCP/ethernet but not on shared memory"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Leonardo,
<br>
<p>These nodes are all using intel e1000 chips.  As the nodes are AMD
<br>
K7-based, these are the older chips, not the new ones with all the
<br>
eeprom issues with the newer kernel.
<br>
<p>The kernel in use is from the 2.6.22 family, and the e1000 driver is the
<br>
one shipped with the kernel.  I am running it compiled into the kernel,
<br>
not as a module.
<br>
<p>When testing using the intel MPI Benchmarks, I found that increasing the
<br>
receive ring buffer size to the max (4096) helped performance, so I use
<br>
ethtool -G on startup.
<br>
<p>Checking ethtool -k, I see that tcp segment offload is on.  I can try
<br>
turning that off to see what happens.
<br>
<p>Oddly, on 64-bit nodes using the tg3 driver, this code doesn't crash or
<br>
have these same issues, and I'm not having to turn off tso.
<br>
<p>Can anyone else suggest why the code might be crashing when running over
<br>
ethernet and not over shared memory?  Any suggestions on how to debug
<br>
this or interpret the error message issued from btl_tcp_frag.c ?
<br>
<p>Thanks.
<br>
<p><p>On Wed, 01 Oct 2008 18:11:34 +0200, &quot;Leonardo Fialho&quot;
<br>
&lt;lfialho_at_[hidden]&gt; said:
<br>
<span class="quotelev1">&gt; Ram,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What is the name and version of the kernel module for your NIC? I have 
</span><br>
<span class="quotelev1">&gt; experimented some similar with my tg3 module. The error which appeared 
</span><br>
<span class="quotelev1">&gt; for my was different:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [btl_tcp_frag.c:216:mca_btl_tcp_frag_recv] mca_btl_tcp_frag_recv: readv 
</span><br>
<span class="quotelev1">&gt; failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I solved it changing the following parameter in the linux kernel:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /sbin/ethtool -K eth0 tso off
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Leonardo
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Aur&#233;lien Bouteiller escribi&#243;:
</span><br>
<span class="quotelev2">&gt; &gt; If you have several network cards in your system, it can sometime get 
</span><br>
<span class="quotelev2">&gt; &gt; the endpoints confused. Especially if you don't have the same number 
</span><br>
<span class="quotelev2">&gt; &gt; of cards or don't use the same subnet for all &quot;eth0, eth1&quot;. You should 
</span><br>
<span class="quotelev2">&gt; &gt; try to restrict Open MPI to use only one of the available networks by 
</span><br>
<span class="quotelev2">&gt; &gt; using the --mca btl_tcp_if_include ethx parameter to mpirun, where x 
</span><br>
<span class="quotelev2">&gt; &gt; is the network interface that is always connected to the same logical 
</span><br>
<span class="quotelev2">&gt; &gt; and physical network on your machine.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Aurelien
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Le 1 oct. 08 &#224; 11:47, V. Ram a &#233;crit :
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I wrote earlier about one of my users running a third-party Fortran code
</span><br>
<span class="quotelev3">&gt; &gt;&gt; on 32-bit x86 machines, using OMPI 1.2.7, that is having some odd crash
</span><br>
<span class="quotelev3">&gt; &gt;&gt; behavior.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Our cluster's nodes all have 2 single-core processors.  If this code is
</span><br>
<span class="quotelev3">&gt; &gt;&gt; run on 2 processors on 1 node, it runs seemingly fine.  However, if the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; job runs on 1 processor on each of 2 nodes (e.g., mpirun --bynode), then
</span><br>
<span class="quotelev3">&gt; &gt;&gt; it crashes and gives messages like:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [node4][0,1,4][btl_tcp_frag.c:202:mca_btl_tcp_frag_recv]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [node3][0,1,3][btl_tcp_frag.c:202:mca_btl_tcp_frag_recv]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mca_btl_tcp_frag_recv: readv failed with errno=110
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mca_btl_tcp_frag_recv: readv failed with errno=104
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Essentially, if any network communication is involved, the job crashes
</span><br>
<span class="quotelev3">&gt; &gt;&gt; in this form.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I do have another user that runs his own MPI code on 10+ of these
</span><br>
<span class="quotelev3">&gt; &gt;&gt; processors for days at a time without issue, so I don't think it's
</span><br>
<span class="quotelev3">&gt; &gt;&gt; hardware.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The original code also runs fine across many networked nodes if the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; architecture is x86-64 (also running OMPI 1.2.7).
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; We have also tried different Fortran compilers (both PathScale and
</span><br>
<span class="quotelev3">&gt; &gt;&gt; gfortran) and keep getting these crashes.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Are there any suggestions on how to figure out if it's a problem with
</span><br>
<span class="quotelev3">&gt; &gt;&gt; the code or the OMPI installation/software on the system? We have tried
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &quot;--debug-daemons&quot; with no new/interesting information being revealed.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Is there a way to trap segfault messages or more detailed MPI
</span><br>
<span class="quotelev3">&gt; &gt;&gt; transaction information or anything else that could help diagnose this?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thanks.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  V. Ram
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  v_r_959_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.fastmail.fm">http://www.fastmail.fm</a> - Same, same, but different...
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Leonardo Fialho
</span><br>
<span class="quotelev1">&gt; Computer Architecture and Operating Systems Department - CAOS
</span><br>
<span class="quotelev1">&gt; Universidad Autonoma de Barcelona - UAB
</span><br>
<span class="quotelev1">&gt; ETSE, Edifcio Q, QC/3088
</span><br>
<span class="quotelev1">&gt; <a href="http://www.caos.uab.es">http://www.caos.uab.es</a>
</span><br>
<span class="quotelev1">&gt; Phone: +34-93-581-2888
</span><br>
<span class="quotelev1">&gt; Fax: +34-93-581-2478
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
<pre>
-- 
  V. Ram
  v_r_959_at_[hidden]
-- 
<a href="http://www.fastmail.fm">http://www.fastmail.fm</a> - Faster than the air-speed velocity of an
                          unladen european swallow
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6940.php">Brock Palen: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="6938.php">V. Ram: "Re: [OMPI users] Crashes over TCP/ethernet but not on shared memory"</a>
<li><strong>In reply to:</strong> <a href="6811.php">Leonardo Fialho: "Re: [OMPI users] Crashes over TCP/ethernet but not on shared memory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6943.php">George Bosilca: "Re: [OMPI users] Crashes over TCP/ethernet but not on shared memory"</a>
<li><strong>Reply:</strong> <a href="6943.php">George Bosilca: "Re: [OMPI users] Crashes over TCP/ethernet but not on shared memory"</a>
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
