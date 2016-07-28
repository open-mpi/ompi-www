<?
$subject_val = "Re: [OMPI users] Crashes over TCP/ethernet but not on shared memory";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 24 12:10:16 2008" -->
<!-- isoreceived="20081024161016" -->
<!-- sent="Fri, 24 Oct 2008 12:10:12 -0400" -->
<!-- isosent="20081024161012" -->
<!-- name="V. Ram" -->
<!-- email="v_r_959_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Crashes over TCP/ethernet but not on shared memory" -->
<!-- id="1224864612.920.1280946849_at_webmail.messagingengine.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="[OMPI users] Crashes over TCP/ethernet but not on shared memory" -->
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
<strong>Date:</strong> 2008-10-24 12:10:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7090.php">Eugene Loh: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="7088.php">Wen Hao Wang: "Re: [OMPI users] test OpenMPI without Internet access"</a>
<li><strong>Maybe in reply to:</strong> <a href="6808.php">V. Ram: "[OMPI users] Crashes over TCP/ethernet but not on shared memory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7107.php">Jeff Squyres: "Re: [OMPI users] Crashes over TCP/ethernet but not on shared memory"</a>
<li><strong>Reply:</strong> <a href="7107.php">Jeff Squyres: "Re: [OMPI users] Crashes over TCP/ethernet but not on shared memory"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Resuscitating this thread...
<br>
<p>Well, we spent some time testing the various options, and Leonardo's
<br>
suggestion seems to work!
<br>
<p>We disabled TCP Segment Offloading on the e1000 NICs using &quot;ethtool -K
<br>
eth&lt;X&gt; tso off&quot; and this type of crash no longer happens.
<br>
<p>I hope this message can help anyone else experiencing the same issues. 
<br>
Thanks Leonardo!
<br>
<p>OMPI devs: does this imply bug(s) in the e1000 driver/chip?  Should I
<br>
contact the driver authors?
<br>
<p><p>On Fri, 10 Oct 2008 12:42:19 -0400, &quot;V. Ram&quot; &lt;v_r_959_at_[hidden]&gt; said:
<br>
<span class="quotelev1">&gt; Leonardo,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; These nodes are all using intel e1000 chips.  As the nodes are AMD
</span><br>
<span class="quotelev1">&gt; K7-based, these are the older chips, not the new ones with all the
</span><br>
<span class="quotelev1">&gt; eeprom issues with the newer kernel.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The kernel in use is from the 2.6.22 family, and the e1000 driver is the
</span><br>
<span class="quotelev1">&gt; one shipped with the kernel.  I am running it compiled into the kernel,
</span><br>
<span class="quotelev1">&gt; not as a module.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When testing using the intel MPI Benchmarks, I found that increasing the
</span><br>
<span class="quotelev1">&gt; receive ring buffer size to the max (4096) helped performance, so I use
</span><br>
<span class="quotelev1">&gt; ethtool -G on startup.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Checking ethtool -k, I see that tcp segment offload is on.  I can try
</span><br>
<span class="quotelev1">&gt; turning that off to see what happens.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Oddly, on 64-bit nodes using the tg3 driver, this code doesn't crash or
</span><br>
<span class="quotelev1">&gt; have these same issues, and I'm not having to turn off tso.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can anyone else suggest why the code might be crashing when running over
</span><br>
<span class="quotelev1">&gt; ethernet and not over shared memory?  Any suggestions on how to debug
</span><br>
<span class="quotelev1">&gt; this or interpret the error message issued from btl_tcp_frag.c ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, 01 Oct 2008 18:11:34 +0200, &quot;Leonardo Fialho&quot;
</span><br>
<span class="quotelev1">&gt; &lt;lfialho_at_[hidden]&gt; said:
</span><br>
<span class="quotelev2">&gt; &gt; Ram,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; What is the name and version of the kernel module for your NIC? I have 
</span><br>
<span class="quotelev2">&gt; &gt; experimented some similar with my tg3 module. The error which appeared 
</span><br>
<span class="quotelev2">&gt; &gt; for my was different:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; [btl_tcp_frag.c:216:mca_btl_tcp_frag_recv] mca_btl_tcp_frag_recv: readv 
</span><br>
<span class="quotelev2">&gt; &gt; failed: No route to host (113)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I solved it changing the following parameter in the linux kernel:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; /sbin/ethtool -K eth0 tso off
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Leonardo
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Aur&#233;lien Bouteiller escribi&#243;:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; If you have several network cards in your system, it can sometime get 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; the endpoints confused. Especially if you don't have the same number 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; of cards or don't use the same subnet for all &quot;eth0, eth1&quot;. You should 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; try to restrict Open MPI to use only one of the available networks by 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; using the --mca btl_tcp_if_include ethx parameter to mpirun, where x 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; is the network interface that is always connected to the same logical 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; and physical network on your machine.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Aurelien
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Le 1 oct. 08 &#224; 11:47, V. Ram a &#233;crit :
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; I wrote earlier about one of my users running a third-party Fortran code
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; on 32-bit x86 machines, using OMPI 1.2.7, that is having some odd crash
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; behavior.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Our cluster's nodes all have 2 single-core processors.  If this code is
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; run on 2 processors on 1 node, it runs seemingly fine.  However, if the
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; job runs on 1 processor on each of 2 nodes (e.g., mpirun --bynode), then
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; it crashes and gives messages like:
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; [node4][0,1,4][btl_tcp_frag.c:202:mca_btl_tcp_frag_recv]
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; [node3][0,1,3][btl_tcp_frag.c:202:mca_btl_tcp_frag_recv]
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; mca_btl_tcp_frag_recv: readv failed with errno=110
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; mca_btl_tcp_frag_recv: readv failed with errno=104
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Essentially, if any network communication is involved, the job crashes
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; in this form.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; I do have another user that runs his own MPI code on 10+ of these
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; processors for days at a time without issue, so I don't think it's
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; hardware.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; The original code also runs fine across many networked nodes if the
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; architecture is x86-64 (also running OMPI 1.2.7).
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; We have also tried different Fortran compilers (both PathScale and
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; gfortran) and keep getting these crashes.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Are there any suggestions on how to figure out if it's a problem with
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; the code or the OMPI installation/software on the system? We have tried
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; &quot;--debug-daemons&quot; with no new/interesting information being revealed.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Is there a way to trap segfault messages or more detailed MPI
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; transaction information or anything else that could help diagnose this?
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Thanks.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; -- 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;  V. Ram
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;  v_r_959_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; -- 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; <a href="http://www.fastmail.fm">http://www.fastmail.fm</a> - Same, same, but different...
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -- 
</span><br>
<span class="quotelev2">&gt; &gt; Leonardo Fialho
</span><br>
<span class="quotelev2">&gt; &gt; Computer Architecture and Operating Systems Department - CAOS
</span><br>
<span class="quotelev2">&gt; &gt; Universidad Autonoma de Barcelona - UAB
</span><br>
<span class="quotelev2">&gt; &gt; ETSE, Edifcio Q, QC/3088
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.caos.uab.es">http://www.caos.uab.es</a>
</span><br>
<span class="quotelev2">&gt; &gt; Phone: +34-93-581-2888
</span><br>
<span class="quotelev2">&gt; &gt; Fax: +34-93-581-2478
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
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt;   V. Ram
</span><br>
<span class="quotelev1">&gt;   v_r_959_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.fastmail.fm">http://www.fastmail.fm</a> - Faster than the air-speed velocity of an
</span><br>
<span class="quotelev1">&gt;                           unladen european swallow
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
<pre>
-- 
  V. Ram
  v_r_959_at_[hidden]
-- 
<a href="http://www.fastmail.fm">http://www.fastmail.fm</a> - The way an email service should be
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7090.php">Eugene Loh: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="7088.php">Wen Hao Wang: "Re: [OMPI users] test OpenMPI without Internet access"</a>
<li><strong>Maybe in reply to:</strong> <a href="6808.php">V. Ram: "[OMPI users] Crashes over TCP/ethernet but not on shared memory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7107.php">Jeff Squyres: "Re: [OMPI users] Crashes over TCP/ethernet but not on shared memory"</a>
<li><strong>Reply:</strong> <a href="7107.php">Jeff Squyres: "Re: [OMPI users] Crashes over TCP/ethernet but not on shared memory"</a>
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
