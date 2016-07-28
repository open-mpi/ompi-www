<?
$subject_val = "[OMPI devel] Some questions about checkpoint/restart (12)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 28 03:38:27 2010" -->
<!-- isoreceived="20100528073827" -->
<!-- sent="Fri, 28 May 2010 16:39:59 +0900" -->
<!-- isosent="20100528073959" -->
<!-- name="Takayuki Seki" -->
<!-- email="seki_at_[hidden]" -->
<!-- subject="[OMPI devel] Some questions about checkpoint/restart (12)" -->
<!-- id="4BFF734F.1080300_at_np.css.fujitsu.com" -->
<!-- charset="ISO-2022-JP" -->
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
<strong>Subject:</strong> [OMPI devel] Some questions about checkpoint/restart (12)<br>
<strong>From:</strong> Takayuki Seki (<em>seki_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-28 03:39:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7997.php">Takayuki Seki: "[OMPI devel] Some questions about checkpoint/restart (13),(14)"</a>
<li><strong>Previous message:</strong> <a href="7995.php">Jeff Squyres: "Re: [OMPI devel] BTL add procs errors"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,Josh
<br>
<p><span class="quotelev1">&gt;<a href="https://svn.open-mpi.org/trac/ompi/ticket/2397">https://svn.open-mpi.org/trac/ompi/ticket/2397</a>
</span><br>
<p>Thank you very much for filing my questions to ticket system.
<br>
Now I have 3 new questions and I will post them.
<br>
<p>Regards,
<br>
Takayuki Seki
<br>
<p>12th question is as follows:
<br>
<p>(12) Checkpointing of an MPI job which uses two (or more?) openib btl modules fails.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Please build Open MPI with &quot;--enable-debug&quot; configure option.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Assersion fails in mca_btl_openib_ft_event.
<br>
<p>Framework         : bml
<br>
Component         : r2
<br>
The source file   : ompi/mca/bml/r2/bml_r2_ft.c
<br>
The function name : mca_bml_r2_ft_event
<br>
<p>Framework         : btl
<br>
Component         : openib
<br>
The source file   : ompi/mca/btl/openib/btl_openib.c
<br>
The function name : mca_btl_openib_ft_event
<br>
<p>* Following message is printed in mca_btl_openib_ft_event.
<br>
&nbsp;&nbsp;a.out: ../../../../../ompi/mca/btl/openib/btl_openib.c:1603: mca_btl_openib_ft_event: Assertion `((0xdeafbeedULL &lt;&lt; 32) + 0xdeafbeedULL) ==
<br>
((opal_object_t *) (&amp;mca_btl_openib_component.ib_procs))-&gt;obj_magic_id' failed.
<br>
<p>* Hardware/System requirement.
<br>
&nbsp;&nbsp;There are two active openib ports.
<br>
<p>&nbsp;&nbsp;Here's the output of ifconfig.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ib0       Link encap:InfiniBand  HWaddr 80:00:00:48:FE:80:00:00:00:00:00:00:00:00:00:00:00:00:00:00
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ib2       Link encap:InfiniBand  HWaddr 80:00:00:48:FE:80:00:00:00:00:00:00:00:00:00:00:00:00:00:00
<br>
<p>&nbsp;&nbsp;Here's the output of ibv_devinfo.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hca_id: mlx4_0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;port:   1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;state:                  PORT_ACTIVE (4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;port:   2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;state:                  PORT_DOWN (1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hca_id: mlx4_1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;port:   1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;state:                  PORT_ACTIVE (4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;port:   2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;state:                  PORT_DOWN (1)
<br>
<p><p>* Debugging output.
<br>
&nbsp;&nbsp;&nbsp;mpiexec -n 2 -mca btl self,openib -am ft-enable-cr ...
<br>
<p>&nbsp;&nbsp;&nbsp;DEBUG: mca_bml_r2_ft_event 0 num_btl_modules=33
<br>
&nbsp;&nbsp;&nbsp;DEBUG: r2 call btl ft 2aaaade70213 0 self
<br>
&nbsp;&nbsp;&nbsp;DEBUG: r2 call btl ft 2aaaad9fa2ac 0 openib
<br>
&nbsp;&nbsp;&nbsp;DEBUG: r2 call btl ft 2aaaad9fa2ac 0 openib
<br>
&nbsp;&nbsp;&nbsp;DEBUG: r2 call btl ft 2aaaad9fa2ac 0 openib
<br>
&nbsp;&nbsp;&nbsp;DEBUG: r2 call btl ft 2aaaad9fa2ac 0 openib
<br>
&nbsp;&nbsp;&nbsp;DEBUG: r2 call btl ft 2aaaad9fa2ac 0 openib
<br>
&nbsp;&nbsp;&nbsp;DEBUG: r2 call btl ft 2aaaad9fa2ac 0 openib
<br>
&nbsp;&nbsp;&nbsp;DEBUG: r2 call btl ft 2aaaad9fa2ac 0 openib
<br>
&nbsp;&nbsp;&nbsp;DEBUG: r2 call btl ft 2aaaad9fa2ac 0 openib
<br>
&nbsp;&nbsp;&nbsp;DEBUG: r2 call btl ft 2aaaad9fa2ac 0 openib
<br>
&nbsp;&nbsp;&nbsp;DEBUG: r2 call btl ft 2aaaad9fa2ac 0 openib
<br>
&nbsp;&nbsp;&nbsp;DEBUG: r2 call btl ft 2aaaad9fa2ac 0 openib
<br>
&nbsp;&nbsp;&nbsp;DEBUG: r2 call btl ft 2aaaad9fa2ac 0 openib
<br>
&nbsp;&nbsp;&nbsp;DEBUG: r2 call btl ft 2aaaad9fa2ac 0 openib
<br>
&nbsp;&nbsp;&nbsp;DEBUG: r2 call btl ft 2aaaad9fa2ac 0 openib
<br>
&nbsp;&nbsp;&nbsp;DEBUG: r2 call btl ft 2aaaad9fa2ac 0 openib
<br>
&nbsp;&nbsp;&nbsp;DEBUG: r2 call btl ft 2aaaad9fa2ac 0 openib
<br>
&nbsp;&nbsp;&nbsp;DEBUG: r2 call btl ft 2aaaad9fa2ac 0 openib
<br>
&nbsp;&nbsp;&nbsp;DEBUG: r2 call btl ft 2aaaad9fa2ac 0 openib
<br>
&nbsp;&nbsp;&nbsp;DEBUG: r2 call btl ft 2aaaad9fa2ac 0 openib
<br>
&nbsp;&nbsp;&nbsp;DEBUG: r2 call btl ft 2aaaad9fa2ac 0 openib
<br>
&nbsp;&nbsp;&nbsp;DEBUG: r2 call btl ft 2aaaad9fa2ac 0 openib
<br>
&nbsp;&nbsp;&nbsp;DEBUG: r2 call btl ft 2aaaad9fa2ac 0 openib
<br>
&nbsp;&nbsp;&nbsp;DEBUG: r2 call btl ft 2aaaad9fa2ac 0 openib
<br>
&nbsp;&nbsp;&nbsp;DEBUG: r2 call btl ft 2aaaad9fa2ac 0 openib
<br>
&nbsp;&nbsp;&nbsp;DEBUG: r2 call btl ft 2aaaad9fa2ac 0 openib
<br>
&nbsp;&nbsp;&nbsp;DEBUG: r2 call btl ft 2aaaad9fa2ac 0 openib
<br>
&nbsp;&nbsp;&nbsp;DEBUG: r2 call btl ft 2aaaad9fa2ac 0 openib
<br>
&nbsp;&nbsp;&nbsp;DEBUG: r2 call btl ft 2aaaad9fa2ac 0 openib
<br>
&nbsp;&nbsp;&nbsp;DEBUG: r2 call btl ft 2aaaad9fa2ac 0 openib
<br>
&nbsp;&nbsp;&nbsp;DEBUG: r2 call btl ft 2aaaad9fa2ac 0 openib
<br>
&nbsp;&nbsp;&nbsp;DEBUG: r2 call btl ft 2aaaad9fa2ac 0 openib
<br>
&nbsp;&nbsp;&nbsp;DEBUG: r2 call btl ft 2aaaad9fa2ac 0 openib
<br>
<p>&nbsp;&nbsp;&nbsp;Number of processes is 2.
<br>
&nbsp;&nbsp;&nbsp;Specified btl is self,openib.
<br>
&nbsp;&nbsp;&nbsp;Total btl module count is 33 and openib module count is 32.
<br>
<p>* r2 ft_event function calls btl ft_event function in each module.
<br>
&nbsp;&nbsp;Therefore, it calls openib's ft_event function(mca_btl_openib_ft_event) 32 times.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/*
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* Call ft_event in:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* - BTL modules
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* - MPool modules
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* These should be cleaning out stale state, and memory references in
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* preparation for being shut down.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for(btl_idx = 0; btl_idx &lt; mca_bml_r2.num_btl_modules; btl_idx++) {
<br>
<p>* mca_btl_openib_ft_event seems to release all openib environments at a time.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (i = 0; i &lt; mca_btl_openib_component.ib_num_btls; ++i ) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_btl_openib_finalize_resources( &amp;(mca_btl_openib_component.openib_btls[i])-&gt;super);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* closing all openib modules at a time. */
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_btl_openib_component.devices_count = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_btl_openib_component.ib_num_btls = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OBJ_DESTRUCT(&amp;mca_btl_openib_component.ib_procs);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* When mca_btl_openib_ft_event is called for the second time,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;an error occurs at this point. */
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_btl_openib_connect_base_finalize();
<br>
<p>* case using tcpip instead of openib.(for reference)
<br>
&nbsp;&nbsp;&nbsp;mpiexec -n 2 -mca btl self,tcp -am ft-enable-cr ...
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;DEBUG: mca_bml_r2_ft_event 0 num_btl_modules=4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;DEBUG: r2 call btl ft 2aaaad89d213 0 self
<br>
&nbsp;&nbsp;&nbsp;&nbsp;DEBUG: r2 call btl ft 2aaaadaad590 0 tcp
<br>
&nbsp;&nbsp;&nbsp;&nbsp;DEBUG: r2 call btl ft 2aaaadaad590 0 tcp
<br>
&nbsp;&nbsp;&nbsp;&nbsp;DEBUG: r2 call btl ft 2aaaadaad590 0 tcp
<br>
<p>&nbsp;&nbsp;&nbsp;tcpip module count is 3.
<br>
&nbsp;&nbsp;&nbsp;r2 ft_event function calls tcp's ft_event function(mca_btl_tcp_ft_event) 3 times.
<br>
&nbsp;&nbsp;&nbsp;But there is no action in mca_btl_tcp_ft_event.
<br>
&nbsp;&nbsp;&nbsp;(It means NOP operation 3 times.)
<br>
<p>* Should r2 ft_event call btl ft_event function only once on each btl component?
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7997.php">Takayuki Seki: "[OMPI devel] Some questions about checkpoint/restart (13),(14)"</a>
<li><strong>Previous message:</strong> <a href="7995.php">Jeff Squyres: "Re: [OMPI devel] BTL add procs errors"</a>
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
