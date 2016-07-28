<?
$subject_val = "Re: [OMPI devel] v1.5 r25914 DOA";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 22 01:31:42 2012" -->
<!-- isoreceived="20120222063142" -->
<!-- sent="Wed, 22 Feb 2012 01:31:33 -0500" -->
<!-- isosent="20120222063133" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] v1.5 r25914 DOA" -->
<!-- id="4F448BC5.90300_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="56786112-6B3E-4A31-808F-F78B6A609DC8_at_cisco.com" -->
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
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-22 01:31:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10555.php">Eugene Loh: "Re: [OMPI devel] v1.5 r25914 DOA"</a>
<li><strong>Previous message:</strong> <a href="10553.php">Paul H. Hargrove: "Re: [OMPI devel] v1.5 r25914 DOA"</a>
<li><strong>In reply to:</strong> <a href="10549.php">Jeffrey Squyres: "Re: [OMPI devel] v1.5 r25914 DOA"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10558.php">Eugene Loh: "Re: [OMPI devel] v1.5 r25914 DOA"</a>
<li><strong>Reply:</strong> <a href="10558.php">Eugene Loh: "Re: [OMPI devel] v1.5 r25914 DOA"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 02/21/12 19:29, Jeffrey Squyres wrote:
<br>
<span class="quotelev1">&gt; What's the output of running lstopo from hwloc 1.3.2?  (this is the version that's in the OMPI trunk and v1.5 branches)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      <a href="http://www.open-mpi.org/software/hwloc/v1.3/">http://www.open-mpi.org/software/hwloc/v1.3/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there any difference from v1.4 hwloc?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      <a href="http://www.open-mpi.org/software/hwloc/v1.4/">http://www.open-mpi.org/software/hwloc/v1.4/</a>
</span><br>
Machine (8192MB)
<br>
&nbsp;&nbsp;&nbsp;NUMANode L#0 (P#0 4096MB) + PU L#0 (P#0)
<br>
&nbsp;&nbsp;&nbsp;NUMANode L#1 (P#1 4096MB) + PU L#1 (P#1)
<br>
<p>No difference between 1.3 and 1.4.  No information about sockets.
<br>
<p>As Paul says, doesn't look like a compiler thing.  (I get the same with 
<br>
Intel and gcc.)
<br>
<p>The hwloc README has a sample program that has (&quot;third example&quot;)
<br>
<p>&nbsp;&nbsp;depth = hwloc_get_type_depth(topology, HWLOC_OBJ_SOCKET);
<br>
&nbsp;&nbsp;if (depth == HWLOC_TYPE_DEPTH_UNKNOWN) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;*** The number of sockets is unknown\n&quot;);
<br>
&nbsp;&nbsp;} else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;...
<br>
&nbsp;&nbsp;}
<br>
<p>that reports that the number of sockets is unknown.  So, &quot;sockets&quot; is 
<br>
unknown and hwloc returns 0 for num_sockets and OMPI pukes on divide by 
<br>
zero.  OS info was listed in the original message (below).  Might we 
<br>
want to do something else?  E.g., assume num_sockets==1 when 
<br>
num_sockets==0 (if you know what I mean)?  So, which one (or more) of 
<br>
the following should be fixed?
<br>
<p>*) on this platform, hwloc finds no socket level
<br>
*) therefore hwloc returns num_sockets==0 to OMPI
<br>
*) OMPI divides by 0 and barfs on basically everything
<br>
<span class="quotelev1">&gt; On Feb 21, 2012, at 7:20 PM, Eugene Loh wrote:
</span><br>
<span class="quotelev2">&gt;&gt; We have some amount of MTT testing going on every night and on ONE of our systems v1.5 has been dead since r25914.  The system is
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Linux burl-ct-v20z-10 2.6.9-67.ELsmp #1 SMP Wed Nov 7 13:56:44 EST 2007 x86_64 x86_64 x86_64 GNU/Linux
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; and I'm encountering the problem with Intel (composer_xe_2011_sp1.7.256) compilers.  I haven't poked around enough yet to figure out what the problematic characteristic of this configuration is.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In r25914, orte/mca/odls/base/odls_base_open.c, we get
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     222     /* get the number of local sockets unless we were given a number */
</span><br>
<span class="quotelev2">&gt;&gt;     223     if (0 == orte_default_num_sockets_per_board) {
</span><br>
<span class="quotelev2">&gt;&gt;     224         opal_paffinity_base_get_socket_info(&amp;orte_odls_globals.num_sockets);
</span><br>
<span class="quotelev2">&gt;&gt;     225     }
</span><br>
<span class="quotelev2">&gt;&gt;     226     /* get the number of local processors */
</span><br>
<span class="quotelev2">&gt;&gt;     227     opal_paffinity_base_get_processor_info(&amp;orte_odls_globals.num_processors);
</span><br>
<span class="quotelev2">&gt;&gt;     228     /* compute the base number of cores/socket, if not given */
</span><br>
<span class="quotelev2">&gt;&gt;     229     if (0 == orte_default_num_cores_per_socket) {
</span><br>
<span class="quotelev2">&gt;&gt;     230         orte_odls_globals.num_cores_per_socket = orte_odls_globals.num_processors / orte_odls_globals.num_sockets;
</span><br>
<span class="quotelev2">&gt;&gt;     231     }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Well, we execute the branch at line 224, but num_sockets remains 0.  This leads to the divide-by-0 at line 230.  Digging deeper, the call at line 224 led us to opal/mca/paffinity/hwloc/paffinity_hwloc_module.c (lots of stuff left out):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; static int module_get_socket_info(int *num_sockets) {
</span><br>
<span class="quotelev2">&gt;&gt;     hwloc_topology_t *t =&amp;opal_hwloc_topology;
</span><br>
<span class="quotelev2">&gt;&gt;     *num_sockets = (int) hwloc_get_nbobjs_by_type(*t, HWLOC_OBJ_SOCKET);
</span><br>
<span class="quotelev2">&gt;&gt;     return OPAL_SUCCESS;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Anyhow, SOCKET is somehow an unknown layer, so num_sockets is returning 0.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I can poke around more, but does someone want to advise?
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10555.php">Eugene Loh: "Re: [OMPI devel] v1.5 r25914 DOA"</a>
<li><strong>Previous message:</strong> <a href="10553.php">Paul H. Hargrove: "Re: [OMPI devel] v1.5 r25914 DOA"</a>
<li><strong>In reply to:</strong> <a href="10549.php">Jeffrey Squyres: "Re: [OMPI devel] v1.5 r25914 DOA"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10558.php">Eugene Loh: "Re: [OMPI devel] v1.5 r25914 DOA"</a>
<li><strong>Reply:</strong> <a href="10558.php">Eugene Loh: "Re: [OMPI devel] v1.5 r25914 DOA"</a>
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
