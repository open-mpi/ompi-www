<?
$subject_val = "[OMPI devel] v1.5 r25914 DOA";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 21 19:20:57 2012" -->
<!-- isoreceived="20120222002057" -->
<!-- sent="Tue, 21 Feb 2012 19:20:49 -0500" -->
<!-- isosent="20120222002049" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="[OMPI devel] v1.5 r25914 DOA" -->
<!-- id="4F4434E1.2040602_at_oracle.com" -->
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
<strong>Subject:</strong> [OMPI devel] v1.5 r25914 DOA<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-21 19:20:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10549.php">Jeffrey Squyres: "Re: [OMPI devel] v1.5 r25914 DOA"</a>
<li><strong>Previous message:</strong> <a href="10547.php">Nathan Hjelm: "Re: [OMPI devel] RFC: Allocate free list payload if free list isn't specified"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10549.php">Jeffrey Squyres: "Re: [OMPI devel] v1.5 r25914 DOA"</a>
<li><strong>Reply:</strong> <a href="10549.php">Jeffrey Squyres: "Re: [OMPI devel] v1.5 r25914 DOA"</a>
<li><strong>Reply:</strong> <a href="10550.php">Paul H. Hargrove: "Re: [OMPI devel] v1.5 r25914 DOA"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We have some amount of MTT testing going on every night and on ONE of 
<br>
our systems v1.5 has been dead since r25914.  The system is
<br>
<p>Linux burl-ct-v20z-10 2.6.9-67.ELsmp #1 SMP Wed Nov 7 13:56:44 EST 2007 
<br>
x86_64 x86_64 x86_64 GNU/Linux
<br>
<p>and I'm encountering the problem with Intel (composer_xe_2011_sp1.7.256) 
<br>
compilers.  I haven't poked around enough yet to figure out what the 
<br>
problematic characteristic of this configuration is.
<br>
<p>In r25914, orte/mca/odls/base/odls_base_open.c, we get
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;222     /* get the number of local sockets unless we were given a 
<br>
number */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;223     if (0 == orte_default_num_sockets_per_board) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;224         
<br>
opal_paffinity_base_get_socket_info(&amp;orte_odls_globals.num_sockets);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;225     }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;226     /* get the number of local processors */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;227     
<br>
opal_paffinity_base_get_processor_info(&amp;orte_odls_globals.num_processors);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;228     /* compute the base number of cores/socket, if not given */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;229     if (0 == orte_default_num_cores_per_socket) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;230         orte_odls_globals.num_cores_per_socket = 
<br>
orte_odls_globals.num_processors / orte_odls_globals.num_sockets;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;231     }
<br>
<p>Well, we execute the branch at line 224, but num_sockets remains 0.  
<br>
This leads to the divide-by-0 at line 230.  Digging deeper, the call at 
<br>
line 224 led us to opal/mca/paffinity/hwloc/paffinity_hwloc_module.c 
<br>
(lots of stuff left out):
<br>
<p>static int module_get_socket_info(int *num_sockets) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hwloc_topology_t *t = &amp;opal_hwloc_topology;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*num_sockets = (int) hwloc_get_nbobjs_by_type(*t, HWLOC_OBJ_SOCKET);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return OPAL_SUCCESS;
<br>
}
<br>
<p>Anyhow, SOCKET is somehow an unknown layer, so num_sockets is returning 0.
<br>
<p>I can poke around more, but does someone want to advise?
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10549.php">Jeffrey Squyres: "Re: [OMPI devel] v1.5 r25914 DOA"</a>
<li><strong>Previous message:</strong> <a href="10547.php">Nathan Hjelm: "Re: [OMPI devel] RFC: Allocate free list payload if free list isn't specified"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10549.php">Jeffrey Squyres: "Re: [OMPI devel] v1.5 r25914 DOA"</a>
<li><strong>Reply:</strong> <a href="10549.php">Jeffrey Squyres: "Re: [OMPI devel] v1.5 r25914 DOA"</a>
<li><strong>Reply:</strong> <a href="10550.php">Paul H. Hargrove: "Re: [OMPI devel] v1.5 r25914 DOA"</a>
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
