<?
$subject_val = "Re: [OMPI devel] v1.5 r25914 DOA";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 22 11:39:28 2012" -->
<!-- isoreceived="20120222163928" -->
<!-- sent="Wed, 22 Feb 2012 08:39:27 -0800" -->
<!-- isosent="20120222163927" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] v1.5 r25914 DOA" -->
<!-- id="4F451A3F.7090901_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4F448BC5.90300_at_oracle.com" -->
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
<strong>Date:</strong> 2012-02-22 11:39:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10559.php">Ralph Castain: "Re: [OMPI devel] v1.5 r25914 DOA"</a>
<li><strong>Previous message:</strong> <a href="10557.php">Brice Goglin: "Re: [OMPI devel] v1.5 r25914 DOA"</a>
<li><strong>In reply to:</strong> <a href="10554.php">Eugene Loh: "Re: [OMPI devel] v1.5 r25914 DOA"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10560.php">Ralph Castain: "Re: [OMPI devel] v1.5 r25914 DOA"</a>
<li><strong>Reply:</strong> <a href="10560.php">Ralph Castain: "Re: [OMPI devel] v1.5 r25914 DOA"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 2/21/2012 10:31 PM, Eugene Loh wrote:
<br>
<span class="quotelev1">&gt; ...  &quot;sockets&quot; is unknown and hwloc returns 0 for num_sockets and OMPI 
</span><br>
<span class="quotelev1">&gt; pukes on divide by zero.  OS info was listed in the original message 
</span><br>
<span class="quotelev1">&gt; (below).  Might we want to do something else?  E.g., assume 
</span><br>
<span class="quotelev1">&gt; num_sockets==1 when num_sockets==0 (if you know what I mean)?  So, 
</span><br>
<span class="quotelev1">&gt; which one (or more) of the following should be fixed?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *) on this platform, hwloc finds no socket level
</span><br>
<span class="quotelev1">&gt; *) therefore hwloc returns num_sockets==0 to OMPI
</span><br>
<span class="quotelev1">&gt; *) OMPI divides by 0 and barfs on basically everything
</span><br>
Okay.  So, Brice's other e-mail indicates that the first two are &quot;not 
<br>
really uncommon&quot;:
<br>
<p>On 2/22/2012 7:55 AM, Brice Goglin wrote:
<br>
<span class="quotelev1">&gt; Anyway, we have seen other systems (mostly non-Linux) where lstopo
</span><br>
<span class="quotelev1">&gt; reports nothing interesting (only one machine object with multiple PU
</span><br>
<span class="quotelev1">&gt; children). So numsockets==0 isn't really uncommon.
</span><br>
So, it seems to me that OMPI needs to handle the num_sockets==0 case 
<br>
rather than just dividing by num_sockets.  This is v1.5 
<br>
orte_odls_base_open() since r25914.
<br>
<span class="quotelev2">&gt;&gt; On Feb 21, 2012, at 7:20 PM, Eugene Loh wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In r25914, orte/mca/odls/base/odls_base_open.c, we get
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     222     /* get the number of local sockets unless we were given 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a number */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     223     if (0 == orte_default_num_sockets_per_board) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     224         
</span><br>
<span class="quotelev3">&gt;&gt;&gt; opal_paffinity_base_get_socket_info(&amp;orte_odls_globals.num_sockets);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     225     }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     226     /* get the number of local processors */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     227     
</span><br>
<span class="quotelev3">&gt;&gt;&gt; opal_paffinity_base_get_processor_info(&amp;orte_odls_globals.num_processors);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     228     /* compute the base number of cores/socket, if not given */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     229     if (0 == orte_default_num_cores_per_socket) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     230         orte_odls_globals.num_cores_per_socket = 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orte_odls_globals.num_processors / orte_odls_globals.num_sockets;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     231     }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Well, we execute the branch at line 224, but num_sockets remains 0.  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This leads to the divide-by-0 at line 230.
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10559.php">Ralph Castain: "Re: [OMPI devel] v1.5 r25914 DOA"</a>
<li><strong>Previous message:</strong> <a href="10557.php">Brice Goglin: "Re: [OMPI devel] v1.5 r25914 DOA"</a>
<li><strong>In reply to:</strong> <a href="10554.php">Eugene Loh: "Re: [OMPI devel] v1.5 r25914 DOA"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10560.php">Ralph Castain: "Re: [OMPI devel] v1.5 r25914 DOA"</a>
<li><strong>Reply:</strong> <a href="10560.php">Ralph Castain: "Re: [OMPI devel] v1.5 r25914 DOA"</a>
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
