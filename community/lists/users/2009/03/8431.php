<?
$subject_val = "Re: [OMPI users] Problem in MPI::Finalize when freeingintercommunicators";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 13 16:28:23 2009" -->
<!-- isoreceived="20090313202823" -->
<!-- sent="Fri, 13 Mar 2009 16:28:17 -0400" -->
<!-- isosent="20090313202817" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem in MPI::Finalize when freeingintercommunicators" -->
<!-- id="43EC218D-C721-4E30-BB3D-EBB7D9672874_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="66e540fe0903120914w1bacd6dds54a7508b35490cb9_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem in MPI::Finalize when freeingintercommunicators<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-13 16:28:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8432.php">Mostyn Lewis: "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
<li><strong>Previous message:</strong> <a href="8430.php">Jeff Squyres: "Re: [OMPI users] Can't start program across network"</a>
<li><strong>In reply to:</strong> <a href="8408.php">Mikael Djurfeldt: "Re: [OMPI users] Problem in MPI::Finalize when freeing intercommunicators"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8436.php">Mikael Djurfeldt: "Re: [OMPI users] Problem in MPI::Finalize when freeingintercommunicators"</a>
<li><strong>Reply:</strong> <a href="8436.php">Mikael Djurfeldt: "Re: [OMPI users] Problem in MPI::Finalize when freeingintercommunicators"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
No you should not need to do this.
<br>
<p>Is there any chance you could upgrade to Open MPI v1.3?
<br>
<p><p>On Mar 12, 2009, at 12:14 PM, Mikael Djurfeldt wrote:
<br>
<p><span class="quotelev1">&gt; I should add that the problem disappears if I add a line
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   MPI::COMM_WORLD.Barrier ()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; just before the loop which frees the intercommunicators.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I should not need to do this, right?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Mar 12, 2009 at 4:57 PM, Mikael Djurfeldt &lt;mikael_at_[hidden] 
</span><br>
<span class="quotelev2">&gt; &gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Dear list,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I get &quot;Connection reset by peer&quot; in Finalize (see log below), but
</span><br>
<span class="quotelev2">&gt; &gt; *only* if I free my intercommunicators:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    ...
</span><br>
<span class="quotelev2">&gt; &gt;    for (std::vector&lt;Connector*&gt;::iterator connector =  
</span><br>
<span class="quotelev1">&gt; connectors.begin ();
</span><br>
<span class="quotelev2">&gt; &gt;         connector != connectors.end ();
</span><br>
<span class="quotelev2">&gt; &gt;         ++connector)
</span><br>
<span class="quotelev2">&gt; &gt;      (*connector)-&gt;freeIntercomm ();
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    MPI::Finalize ();
</span><br>
<span class="quotelev2">&gt; &gt;    ...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; where freeIntercomm is defined:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  void
</span><br>
<span class="quotelev2">&gt; &gt;  Connector::freeIntercomm ()
</span><br>
<span class="quotelev2">&gt; &gt;  {
</span><br>
<span class="quotelev2">&gt; &gt;    intercomm.Free ();
</span><br>
<span class="quotelev2">&gt; &gt;  }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; What could be the reason for this?  I'm using 1.2.7~rc2-1ubuntu2.
</span><br>
<span class="quotelev2">&gt; &gt; (The problem does not occur on the other MPI implementations I've
</span><br>
<span class="quotelev2">&gt; &gt; tested.)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [swish:10019] [ 0] /lib/libpthread.so.0 [0x7f0dc32610f0]
</span><br>
<span class="quotelev2">&gt; &gt; [swish:10019] [ 1] /usr/lib/openmpi/lib/openmpi/mca_pml_ob1.so  
</span><br>
<span class="quotelev1">&gt; [0x7f0dbe1ed460]
</span><br>
<span class="quotelev2">&gt; &gt; [swish:10019] [ 2]
</span><br>
<span class="quotelev2">&gt; &gt; /usr/lib/openmpi/lib/openmpi/ 
</span><br>
<span class="quotelev1">&gt; mca_btl_sm.so(mca_btl_sm_component_progress+0x670)
</span><br>
<span class="quotelev2">&gt; &gt; [0x7f0dbd79ee60]
</span><br>
<span class="quotelev2">&gt; &gt; [swish:10019] [ 3]
</span><br>
<span class="quotelev2">&gt; &gt; /usr/lib/openmpi/lib/openmpi/mca_bml_r2.so(mca_bml_r2_progress+0x2b)
</span><br>
<span class="quotelev2">&gt; &gt; [0x7f0dbdfe318b]
</span><br>
<span class="quotelev2">&gt; &gt; [swish:10019] [ 4] /usr/lib/libopen-pal.so.0(opal_progress+0x4a)
</span><br>
<span class="quotelev2">&gt; &gt; [0x7f0dc4248f5a]
</span><br>
<span class="quotelev2">&gt; &gt; [swish:10019] [ 5]
</span><br>
<span class="quotelev2">&gt; &gt; /usr/lib/openmpi/lib/openmpi/mca_oob_tcp.so(mca_oob_tcp_msg_wait 
</span><br>
<span class="quotelev1">&gt; +0x1d)
</span><br>
<span class="quotelev2">&gt; &gt; [0x7f0dc189691d]
</span><br>
<span class="quotelev2">&gt; &gt; [swish:10019] [ 6]
</span><br>
<span class="quotelev2">&gt; &gt; /usr/lib/openmpi/lib/openmpi/mca_oob_tcp.so(mca_oob_tcp_recv+0x437)
</span><br>
<span class="quotelev2">&gt; &gt; [0x7f0dc189a037]
</span><br>
<span class="quotelev2">&gt; &gt; [swish:10019] [ 7] /usr/lib/libopen-rte.so.0(mca_oob_recv_packed 
</span><br>
<span class="quotelev1">&gt; +0x33)
</span><br>
<span class="quotelev2">&gt; &gt; [0x7f0dc44cbd43]
</span><br>
<span class="quotelev2">&gt; &gt; [swish:10019] [ 8]
</span><br>
<span class="quotelev2">&gt; &gt; /usr/lib/openmpi/lib/openmpi/ 
</span><br>
<span class="quotelev1">&gt; mca_gpr_proxy.so(orte_gpr_proxy_increment_value+0x1e2)
</span><br>
<span class="quotelev2">&gt; &gt; [0x7f0dc14826a2]
</span><br>
<span class="quotelev2">&gt; &gt; [swish:10019] [ 9]
</span><br>
<span class="quotelev2">&gt; &gt; /usr/lib/libopen-rte.so.0(orte_smr_base_set_proc_state+0x2ac)
</span><br>
<span class="quotelev2">&gt; &gt; [0x7f0dc44e28fc]
</span><br>
<span class="quotelev2">&gt; &gt; [swish:10019] [10] /usr/lib/libmpi.so.0(ompi_mpi_finalize+0x111)
</span><br>
<span class="quotelev2">&gt; &gt; [0x7f0dc4733521]
</span><br>
<span class="quotelev2">&gt; &gt; [swish:10019] [11]
</span><br>
<span class="quotelev2">&gt; &gt; /home/mdj/music/trunk/src/.libs/libmusic.so. 
</span><br>
<span class="quotelev1">&gt; 1(_ZN5MUSIC7Runtime8finalizeEv+0x7d)
</span><br>
<span class="quotelev2">&gt; &gt; [0x7f0dc4bed7ed]
</span><br>
<span class="quotelev2">&gt; &gt; [swish:10019] [12]
</span><br>
<span class="quotelev2">&gt; &gt; /home/mdj/music/trunk/test/.libs/lt-contdelay(main+0x347) [0x40a297]
</span><br>
<span class="quotelev2">&gt; &gt; [swish:10019] [13] /lib/libc.so.6(__libc_start_main+0xe6)  
</span><br>
<span class="quotelev1">&gt; [0x7f0dc2efe466]
</span><br>
<span class="quotelev2">&gt; &gt; [swish:10019] [14] /home/mdj/music/trunk/test/.libs/lt-contdelay  
</span><br>
<span class="quotelev1">&gt; [0x409539]
</span><br>
<span class="quotelev2">&gt; &gt; [swish:10019] *** End of error message ***
</span><br>
<span class="quotelev2">&gt; &gt; [swish:10015] [0,0,0]-[0,1,1] mca_oob_tcp_msg_recv: readv failed:
</span><br>
<span class="quotelev2">&gt; &gt; Connection reset by peer (104)
</span><br>
<span class="quotelev2">&gt; &gt; mpirun noticed that job rank 0 with PID 10018 on node swish exited  
</span><br>
<span class="quotelev1">&gt; on
</span><br>
<span class="quotelev2">&gt; &gt; signal 15 (Terminated).
</span><br>
<span class="quotelev2">&gt; &gt; 3 additional processes aborted (not shown)
</span><br>
<span class="quotelev2">&gt; &gt;
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
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8432.php">Mostyn Lewis: "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
<li><strong>Previous message:</strong> <a href="8430.php">Jeff Squyres: "Re: [OMPI users] Can't start program across network"</a>
<li><strong>In reply to:</strong> <a href="8408.php">Mikael Djurfeldt: "Re: [OMPI users] Problem in MPI::Finalize when freeing intercommunicators"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8436.php">Mikael Djurfeldt: "Re: [OMPI users] Problem in MPI::Finalize when freeingintercommunicators"</a>
<li><strong>Reply:</strong> <a href="8436.php">Mikael Djurfeldt: "Re: [OMPI users] Problem in MPI::Finalize when freeingintercommunicators"</a>
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
