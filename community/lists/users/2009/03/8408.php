<?
$subject_val = "Re: [OMPI users] Problem in MPI::Finalize when freeing intercommunicators";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 12 12:14:35 2009" -->
<!-- isoreceived="20090312161435" -->
<!-- sent="Thu, 12 Mar 2009 17:14:30 +0100" -->
<!-- isosent="20090312161430" -->
<!-- name="Mikael Djurfeldt" -->
<!-- email="mikael_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem in MPI::Finalize when freeing intercommunicators" -->
<!-- id="66e540fe0903120914w1bacd6dds54a7508b35490cb9_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="66e540fe0903120857h2a258328pab3484d23566a8aa_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem in MPI::Finalize when freeing intercommunicators<br>
<strong>From:</strong> Mikael Djurfeldt (<em>mikael_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-12 12:14:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8409.php">Robert Latham: "[OMPI users] freeing attributes on communicators"</a>
<li><strong>Previous message:</strong> <a href="8407.php">Mikael Djurfeldt: "[OMPI users] Problem in MPI::Finalize when freeing intercommunicators"</a>
<li><strong>In reply to:</strong> <a href="8407.php">Mikael Djurfeldt: "[OMPI users] Problem in MPI::Finalize when freeing intercommunicators"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8431.php">Jeff Squyres: "Re: [OMPI users] Problem in MPI::Finalize when freeingintercommunicators"</a>
<li><strong>Reply:</strong> <a href="8431.php">Jeff Squyres: "Re: [OMPI users] Problem in MPI::Finalize when freeingintercommunicators"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I should add that the problem disappears if I add a line
<br>
<p>&nbsp;&nbsp;MPI::COMM_WORLD.Barrier ()
<br>
<p>just before the loop which frees the intercommunicators.
<br>
<p>I should not need to do this, right?
<br>
<p>On Thu, Mar 12, 2009 at 4:57 PM, Mikael Djurfeldt &lt;mikael_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Dear list,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I get &quot;Connection reset by peer&quot; in Finalize (see log below), but
</span><br>
<span class="quotelev1">&gt; *only* if I free my intercommunicators:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160; &#160;...
</span><br>
<span class="quotelev1">&gt; &#160; &#160;for (std::vector&lt;Connector*&gt;::iterator connector = connectors.begin ();
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; connector != connectors.end ();
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; ++connector)
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160;(*connector)-&gt;freeIntercomm ();
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160; &#160;MPI::Finalize ();
</span><br>
<span class="quotelev1">&gt; &#160; &#160;...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; where freeIntercomm is defined:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;void
</span><br>
<span class="quotelev1">&gt; &#160;Connector::freeIntercomm ()
</span><br>
<span class="quotelev1">&gt; &#160;{
</span><br>
<span class="quotelev1">&gt; &#160; &#160;intercomm.Free ();
</span><br>
<span class="quotelev1">&gt; &#160;}
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What could be the reason for this? &#160;I'm using 1.2.7~rc2-1ubuntu2.
</span><br>
<span class="quotelev1">&gt; (The problem does not occur on the other MPI implementations I've
</span><br>
<span class="quotelev1">&gt; tested.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [swish:10019] [ 0] /lib/libpthread.so.0 [0x7f0dc32610f0]
</span><br>
<span class="quotelev1">&gt; [swish:10019] [ 1] /usr/lib/openmpi/lib/openmpi/mca_pml_ob1.so [0x7f0dbe1ed460]
</span><br>
<span class="quotelev1">&gt; [swish:10019] [ 2]
</span><br>
<span class="quotelev1">&gt; /usr/lib/openmpi/lib/openmpi/mca_btl_sm.so(mca_btl_sm_component_progress+0x670)
</span><br>
<span class="quotelev1">&gt; [0x7f0dbd79ee60]
</span><br>
<span class="quotelev1">&gt; [swish:10019] [ 3]
</span><br>
<span class="quotelev1">&gt; /usr/lib/openmpi/lib/openmpi/mca_bml_r2.so(mca_bml_r2_progress+0x2b)
</span><br>
<span class="quotelev1">&gt; [0x7f0dbdfe318b]
</span><br>
<span class="quotelev1">&gt; [swish:10019] [ 4] /usr/lib/libopen-pal.so.0(opal_progress+0x4a)
</span><br>
<span class="quotelev1">&gt; [0x7f0dc4248f5a]
</span><br>
<span class="quotelev1">&gt; [swish:10019] [ 5]
</span><br>
<span class="quotelev1">&gt; /usr/lib/openmpi/lib/openmpi/mca_oob_tcp.so(mca_oob_tcp_msg_wait+0x1d)
</span><br>
<span class="quotelev1">&gt; [0x7f0dc189691d]
</span><br>
<span class="quotelev1">&gt; [swish:10019] [ 6]
</span><br>
<span class="quotelev1">&gt; /usr/lib/openmpi/lib/openmpi/mca_oob_tcp.so(mca_oob_tcp_recv+0x437)
</span><br>
<span class="quotelev1">&gt; [0x7f0dc189a037]
</span><br>
<span class="quotelev1">&gt; [swish:10019] [ 7] /usr/lib/libopen-rte.so.0(mca_oob_recv_packed+0x33)
</span><br>
<span class="quotelev1">&gt; [0x7f0dc44cbd43]
</span><br>
<span class="quotelev1">&gt; [swish:10019] [ 8]
</span><br>
<span class="quotelev1">&gt; /usr/lib/openmpi/lib/openmpi/mca_gpr_proxy.so(orte_gpr_proxy_increment_value+0x1e2)
</span><br>
<span class="quotelev1">&gt; [0x7f0dc14826a2]
</span><br>
<span class="quotelev1">&gt; [swish:10019] [ 9]
</span><br>
<span class="quotelev1">&gt; /usr/lib/libopen-rte.so.0(orte_smr_base_set_proc_state+0x2ac)
</span><br>
<span class="quotelev1">&gt; [0x7f0dc44e28fc]
</span><br>
<span class="quotelev1">&gt; [swish:10019] [10] /usr/lib/libmpi.so.0(ompi_mpi_finalize+0x111)
</span><br>
<span class="quotelev1">&gt; [0x7f0dc4733521]
</span><br>
<span class="quotelev1">&gt; [swish:10019] [11]
</span><br>
<span class="quotelev1">&gt; /home/mdj/music/trunk/src/.libs/libmusic.so.1(_ZN5MUSIC7Runtime8finalizeEv+0x7d)
</span><br>
<span class="quotelev1">&gt; [0x7f0dc4bed7ed]
</span><br>
<span class="quotelev1">&gt; [swish:10019] [12]
</span><br>
<span class="quotelev1">&gt; /home/mdj/music/trunk/test/.libs/lt-contdelay(main+0x347) [0x40a297]
</span><br>
<span class="quotelev1">&gt; [swish:10019] [13] /lib/libc.so.6(__libc_start_main+0xe6) [0x7f0dc2efe466]
</span><br>
<span class="quotelev1">&gt; [swish:10019] [14] /home/mdj/music/trunk/test/.libs/lt-contdelay [0x409539]
</span><br>
<span class="quotelev1">&gt; [swish:10019] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; [swish:10015] [0,0,0]-[0,1,1] mca_oob_tcp_msg_recv: readv failed:
</span><br>
<span class="quotelev1">&gt; Connection reset by peer (104)
</span><br>
<span class="quotelev1">&gt; mpirun noticed that job rank 0 with PID 10018 on node swish exited on
</span><br>
<span class="quotelev1">&gt; signal 15 (Terminated).
</span><br>
<span class="quotelev1">&gt; 3 additional processes aborted (not shown)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8409.php">Robert Latham: "[OMPI users] freeing attributes on communicators"</a>
<li><strong>Previous message:</strong> <a href="8407.php">Mikael Djurfeldt: "[OMPI users] Problem in MPI::Finalize when freeing intercommunicators"</a>
<li><strong>In reply to:</strong> <a href="8407.php">Mikael Djurfeldt: "[OMPI users] Problem in MPI::Finalize when freeing intercommunicators"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8431.php">Jeff Squyres: "Re: [OMPI users] Problem in MPI::Finalize when freeingintercommunicators"</a>
<li><strong>Reply:</strong> <a href="8431.php">Jeff Squyres: "Re: [OMPI users] Problem in MPI::Finalize when freeingintercommunicators"</a>
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
