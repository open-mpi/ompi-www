<?
$subject_val = "[OMPI users] Problem in MPI::Finalize when freeing intercommunicators";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 12 11:57:17 2009" -->
<!-- isoreceived="20090312155717" -->
<!-- sent="Thu, 12 Mar 2009 16:57:12 +0100" -->
<!-- isosent="20090312155712" -->
<!-- name="Mikael Djurfeldt" -->
<!-- email="mikael_at_[hidden]" -->
<!-- subject="[OMPI users] Problem in MPI::Finalize when freeing intercommunicators" -->
<!-- id="66e540fe0903120857h2a258328pab3484d23566a8aa_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Problem in MPI::Finalize when freeing intercommunicators<br>
<strong>From:</strong> Mikael Djurfeldt (<em>mikael_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-12 11:57:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8408.php">Mikael Djurfeldt: "Re: [OMPI users] Problem in MPI::Finalize when freeing intercommunicators"</a>
<li><strong>Previous message:</strong> <a href="8406.php">Igor Kozin: "Re: [OMPI users] Lower performance on a Gigabit node compared toinfiniband node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8408.php">Mikael Djurfeldt: "Re: [OMPI users] Problem in MPI::Finalize when freeing intercommunicators"</a>
<li><strong>Reply:</strong> <a href="8408.php">Mikael Djurfeldt: "Re: [OMPI users] Problem in MPI::Finalize when freeing intercommunicators"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear list,
<br>
<p>I get &quot;Connection reset by peer&quot; in Finalize (see log below), but
<br>
*only* if I free my intercommunicators:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;for (std::vector&lt;Connector*&gt;::iterator connector = connectors.begin ();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;connector != connectors.end ();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;++connector)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(*connector)-&gt;freeIntercomm ();
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI::Finalize ();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;...
<br>
<p>where freeIntercomm is defined:
<br>
<p>&nbsp;&nbsp;void
<br>
&nbsp;&nbsp;Connector::freeIntercomm ()
<br>
&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;intercomm.Free ();
<br>
&nbsp;&nbsp;}
<br>
<p>What could be the reason for this?  I'm using 1.2.7~rc2-1ubuntu2.
<br>
(The problem does not occur on the other MPI implementations I've
<br>
tested.)
<br>
<p>[swish:10019] [ 0] /lib/libpthread.so.0 [0x7f0dc32610f0]
<br>
[swish:10019] [ 1] /usr/lib/openmpi/lib/openmpi/mca_pml_ob1.so [0x7f0dbe1ed460]
<br>
[swish:10019] [ 2]
<br>
/usr/lib/openmpi/lib/openmpi/mca_btl_sm.so(mca_btl_sm_component_progress+0x670)
<br>
[0x7f0dbd79ee60]
<br>
[swish:10019] [ 3]
<br>
/usr/lib/openmpi/lib/openmpi/mca_bml_r2.so(mca_bml_r2_progress+0x2b)
<br>
[0x7f0dbdfe318b]
<br>
[swish:10019] [ 4] /usr/lib/libopen-pal.so.0(opal_progress+0x4a)
<br>
[0x7f0dc4248f5a]
<br>
[swish:10019] [ 5]
<br>
/usr/lib/openmpi/lib/openmpi/mca_oob_tcp.so(mca_oob_tcp_msg_wait+0x1d)
<br>
[0x7f0dc189691d]
<br>
[swish:10019] [ 6]
<br>
/usr/lib/openmpi/lib/openmpi/mca_oob_tcp.so(mca_oob_tcp_recv+0x437)
<br>
[0x7f0dc189a037]
<br>
[swish:10019] [ 7] /usr/lib/libopen-rte.so.0(mca_oob_recv_packed+0x33)
<br>
[0x7f0dc44cbd43]
<br>
[swish:10019] [ 8]
<br>
/usr/lib/openmpi/lib/openmpi/mca_gpr_proxy.so(orte_gpr_proxy_increment_value+0x1e2)
<br>
[0x7f0dc14826a2]
<br>
[swish:10019] [ 9]
<br>
/usr/lib/libopen-rte.so.0(orte_smr_base_set_proc_state+0x2ac)
<br>
[0x7f0dc44e28fc]
<br>
[swish:10019] [10] /usr/lib/libmpi.so.0(ompi_mpi_finalize+0x111)
<br>
[0x7f0dc4733521]
<br>
[swish:10019] [11]
<br>
/home/mdj/music/trunk/src/.libs/libmusic.so.1(_ZN5MUSIC7Runtime8finalizeEv+0x7d)
<br>
[0x7f0dc4bed7ed]
<br>
[swish:10019] [12]
<br>
/home/mdj/music/trunk/test/.libs/lt-contdelay(main+0x347) [0x40a297]
<br>
[swish:10019] [13] /lib/libc.so.6(__libc_start_main+0xe6) [0x7f0dc2efe466]
<br>
[swish:10019] [14] /home/mdj/music/trunk/test/.libs/lt-contdelay [0x409539]
<br>
[swish:10019] *** End of error message ***
<br>
[swish:10015] [0,0,0]-[0,1,1] mca_oob_tcp_msg_recv: readv failed:
<br>
Connection reset by peer (104)
<br>
mpirun noticed that job rank 0 with PID 10018 on node swish exited on
<br>
signal 15 (Terminated).
<br>
3 additional processes aborted (not shown)
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8408.php">Mikael Djurfeldt: "Re: [OMPI users] Problem in MPI::Finalize when freeing intercommunicators"</a>
<li><strong>Previous message:</strong> <a href="8406.php">Igor Kozin: "Re: [OMPI users] Lower performance on a Gigabit node compared toinfiniband node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8408.php">Mikael Djurfeldt: "Re: [OMPI users] Problem in MPI::Finalize when freeing intercommunicators"</a>
<li><strong>Reply:</strong> <a href="8408.php">Mikael Djurfeldt: "Re: [OMPI users] Problem in MPI::Finalize when freeing intercommunicators"</a>
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
