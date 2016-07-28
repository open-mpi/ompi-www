<?
$subject_val = "Re: [OMPI devel] v1.5 r25914 DOA";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 21 19:29:54 2012" -->
<!-- isoreceived="20120222002954" -->
<!-- sent="Tue, 21 Feb 2012 19:29:45 -0500" -->
<!-- isosent="20120222002945" -->
<!-- name="Jeffrey Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] v1.5 r25914 DOA" -->
<!-- id="56786112-6B3E-4A31-808F-F78B6A609DC8_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4F4434E1.2040602_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] v1.5 r25914 DOA<br>
<strong>From:</strong> Jeffrey Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-21 19:29:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10550.php">Paul H. Hargrove: "Re: [OMPI devel] v1.5 r25914 DOA"</a>
<li><strong>Previous message:</strong> <a href="10548.php">Eugene Loh: "[OMPI devel] v1.5 r25914 DOA"</a>
<li><strong>In reply to:</strong> <a href="10548.php">Eugene Loh: "[OMPI devel] v1.5 r25914 DOA"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10554.php">Eugene Loh: "Re: [OMPI devel] v1.5 r25914 DOA"</a>
<li><strong>Reply:</strong> <a href="10554.php">Eugene Loh: "Re: [OMPI devel] v1.5 r25914 DOA"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What's the output of running lstopo from hwloc 1.3.2?  (this is the version that's in the OMPI trunk and v1.5 branches)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/software/hwloc/v1.3/">http://www.open-mpi.org/software/hwloc/v1.3/</a>
<br>
<p>Is there any difference from v1.4 hwloc?
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/software/hwloc/v1.4/">http://www.open-mpi.org/software/hwloc/v1.4/</a>
<br>
<p><p>On Feb 21, 2012, at 7:20 PM, Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; We have some amount of MTT testing going on every night and on ONE of our systems v1.5 has been dead since r25914.  The system is
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Linux burl-ct-v20z-10 2.6.9-67.ELsmp #1 SMP Wed Nov 7 13:56:44 EST 2007 x86_64 x86_64 x86_64 GNU/Linux
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and I'm encountering the problem with Intel (composer_xe_2011_sp1.7.256) compilers.  I haven't poked around enough yet to figure out what the problematic characteristic of this configuration is.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In r25914, orte/mca/odls/base/odls_base_open.c, we get
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    222     /* get the number of local sockets unless we were given a number */
</span><br>
<span class="quotelev1">&gt;    223     if (0 == orte_default_num_sockets_per_board) {
</span><br>
<span class="quotelev1">&gt;    224         opal_paffinity_base_get_socket_info(&amp;orte_odls_globals.num_sockets);
</span><br>
<span class="quotelev1">&gt;    225     }
</span><br>
<span class="quotelev1">&gt;    226     /* get the number of local processors */
</span><br>
<span class="quotelev1">&gt;    227     opal_paffinity_base_get_processor_info(&amp;orte_odls_globals.num_processors);
</span><br>
<span class="quotelev1">&gt;    228     /* compute the base number of cores/socket, if not given */
</span><br>
<span class="quotelev1">&gt;    229     if (0 == orte_default_num_cores_per_socket) {
</span><br>
<span class="quotelev1">&gt;    230         orte_odls_globals.num_cores_per_socket = orte_odls_globals.num_processors / orte_odls_globals.num_sockets;
</span><br>
<span class="quotelev1">&gt;    231     }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Well, we execute the branch at line 224, but num_sockets remains 0.  This leads to the divide-by-0 at line 230.  Digging deeper, the call at line 224 led us to opal/mca/paffinity/hwloc/paffinity_hwloc_module.c (lots of stuff left out):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; static int module_get_socket_info(int *num_sockets) {
</span><br>
<span class="quotelev1">&gt;    hwloc_topology_t *t = &amp;opal_hwloc_topology;
</span><br>
<span class="quotelev1">&gt;    *num_sockets = (int) hwloc_get_nbobjs_by_type(*t, HWLOC_OBJ_SOCKET);
</span><br>
<span class="quotelev1">&gt;    return OPAL_SUCCESS;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Anyhow, SOCKET is somehow an unknown layer, so num_sockets is returning 0.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I can poke around more, but does someone want to advise?
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10550.php">Paul H. Hargrove: "Re: [OMPI devel] v1.5 r25914 DOA"</a>
<li><strong>Previous message:</strong> <a href="10548.php">Eugene Loh: "[OMPI devel] v1.5 r25914 DOA"</a>
<li><strong>In reply to:</strong> <a href="10548.php">Eugene Loh: "[OMPI devel] v1.5 r25914 DOA"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10554.php">Eugene Loh: "Re: [OMPI devel] v1.5 r25914 DOA"</a>
<li><strong>Reply:</strong> <a href="10554.php">Eugene Loh: "Re: [OMPI devel] v1.5 r25914 DOA"</a>
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
