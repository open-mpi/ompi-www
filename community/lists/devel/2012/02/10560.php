<?
$subject_val = "Re: [OMPI devel] v1.5 r25914 DOA";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 22 11:48:27 2012" -->
<!-- isoreceived="20120222164827" -->
<!-- sent="Wed, 22 Feb 2012 09:48:19 -0700" -->
<!-- isosent="20120222164819" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] v1.5 r25914 DOA" -->
<!-- id="6E8A71F6-C42B-43EF-921B-004FA28D3E92_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4F451A3F.7090901_at_oracle.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-22 11:48:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10561.php">Brice Goglin: "Re: [OMPI devel] v1.5 r25914 DOA"</a>
<li><strong>Previous message:</strong> <a href="10559.php">Ralph Castain: "Re: [OMPI devel] v1.5 r25914 DOA"</a>
<li><strong>In reply to:</strong> <a href="10558.php">Eugene Loh: "Re: [OMPI devel] v1.5 r25914 DOA"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10561.php">Brice Goglin: "Re: [OMPI devel] v1.5 r25914 DOA"</a>
<li><strong>Reply:</strong> <a href="10561.php">Brice Goglin: "Re: [OMPI devel] v1.5 r25914 DOA"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 22, 2012, at 9:39 AM, Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; On 2/21/2012 10:31 PM, Eugene Loh wrote:
</span><br>
<span class="quotelev2">&gt;&gt; ...  &quot;sockets&quot; is unknown and hwloc returns 0 for num_sockets and OMPI pukes on divide by zero.  OS info was listed in the original message (below).  Might we want to do something else?  E.g., assume num_sockets==1 when num_sockets==0 (if you know what I mean)?  So, which one (or more) of the following should be fixed?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; *) on this platform, hwloc finds no socket level
</span><br>
<span class="quotelev2">&gt;&gt; *) therefore hwloc returns num_sockets==0 to OMPI
</span><br>
<span class="quotelev2">&gt;&gt; *) OMPI divides by 0 and barfs on basically everything
</span><br>
<span class="quotelev1">&gt; Okay.  So, Brice's other e-mail indicates that the first two are &quot;not really uncommon&quot;:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 2/22/2012 7:55 AM, Brice Goglin wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Anyway, we have seen other systems (mostly non-Linux) where lstopo
</span><br>
<span class="quotelev2">&gt;&gt; reports nothing interesting (only one machine object with multiple PU
</span><br>
<span class="quotelev2">&gt;&gt; children). So numsockets==0 isn't really uncommon.
</span><br>
<span class="quotelev1">&gt; So, it seems to me that OMPI needs to handle the num_sockets==0 case rather than just dividing by num_sockets.  This is v1.5 orte_odls_base_open() since r25914.
</span><br>
<p>Unfortunately, just artificially setting the num_sockets to 1 won't solve much - you'll get past that point in the code, but attempts to bind are likely to fail down the road. Fixing it will require some significant effort.
<br>
<p>Given we haven't heard reports of this before, I'm not convinced it is a widespread problem. For now, let's just use the mca param and see what happens.
<br>
<p><span class="quotelev3">&gt;&gt;&gt; On Feb 21, 2012, at 7:20 PM, Eugene Loh wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; In r25914, orte/mca/odls/base/odls_base_open.c, we get
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    222     /* get the number of local sockets unless we were given a number */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    223     if (0 == orte_default_num_sockets_per_board) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    224         opal_paffinity_base_get_socket_info(&amp;orte_odls_globals.num_sockets);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    225     }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    226     /* get the number of local processors */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    227     opal_paffinity_base_get_processor_info(&amp;orte_odls_globals.num_processors);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    228     /* compute the base number of cores/socket, if not given */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    229     if (0 == orte_default_num_cores_per_socket) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    230         orte_odls_globals.num_cores_per_socket = orte_odls_globals.num_processors / orte_odls_globals.num_sockets;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    231     }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Well, we execute the branch at line 224, but num_sockets remains 0.  This leads to the divide-by-0 at line 230.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10561.php">Brice Goglin: "Re: [OMPI devel] v1.5 r25914 DOA"</a>
<li><strong>Previous message:</strong> <a href="10559.php">Ralph Castain: "Re: [OMPI devel] v1.5 r25914 DOA"</a>
<li><strong>In reply to:</strong> <a href="10558.php">Eugene Loh: "Re: [OMPI devel] v1.5 r25914 DOA"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10561.php">Brice Goglin: "Re: [OMPI devel] v1.5 r25914 DOA"</a>
<li><strong>Reply:</strong> <a href="10561.php">Brice Goglin: "Re: [OMPI devel] v1.5 r25914 DOA"</a>
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
