<?
$subject_val = "Re: [OMPI devel] IP address to verb interface mapping";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr  8 00:12:54 2016" -->
<!-- isoreceived="20160408041254" -->
<!-- sent="Fri, 8 Apr 2016 13:12:43 +0900" -->
<!-- isosent="20160408041243" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] IP address to verb interface mapping" -->
<!-- id="57072FBB.4030404_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAHXxYDgiaf9x_-x5ZMaP2K=SMm2J-6a-1zahXKma=9_KuOHNQw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] IP address to verb interface mapping<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-08 00:12:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18748.php">dpchoudh .: "Re: [OMPI devel] IP address to verb interface mapping"</a>
<li><strong>Previous message:</strong> <a href="18746.php">dpchoudh .: "[OMPI devel] IP address to verb interface mapping"</a>
<li><strong>In reply to:</strong> <a href="18746.php">dpchoudh .: "[OMPI devel] IP address to verb interface mapping"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18748.php">dpchoudh .: "Re: [OMPI devel] IP address to verb interface mapping"</a>
<li><strong>Reply:</strong> <a href="18748.php">dpchoudh .: "Re: [OMPI devel] IP address to verb interface mapping"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>the hostnames (or their IPs) are only used to ssh orted.
<br>
<p><p>if you use only the tcp btl :
<br>
<p>TCP *MPI* communications (vs OOB management communications) are handled 
<br>
by btl/tcp
<br>
by default, all usable interfaces are used, then messages are split 
<br>
(iirc, by ob1 pml) and then &quot;fragments&quot;
<br>
are sent using all interfaces.
<br>
<p>each interface has a latency and bandwidth that is used to split message 
<br>
into fragments.
<br>
(assuming it is correctly configured, 90% of a large message is sent 
<br>
over the 10GbE interface, and 10% is sent over the GbE interface)
<br>
<p>if you can explicitly list/blacklist interface
<br>
mpirun --mca btl_tcp_if_include ...
<br>
or
<br>
mpirun --mca btl_tcp_if_exclude ...
<br>
<p>(see ompi_info --all for the syntax)
<br>
<p><p>but if you use several btls (for example tcp and openib), the btl(s) 
<br>
with the lower exclusivity are not used.
<br>
(for example, a large message is *not* split and send using native ib, 
<br>
IPoIB and GbE because the openib btl
<br>
has a higher exclusivity than the tcp btl)
<br>
<p><p>did this answer your question ?
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p><p>On 4/8/2016 12:24 PM, dpchoudh . wrote:
<br>
<span class="quotelev1">&gt; Hello all
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (Newbie warning! Sorry :-(  )
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Let's say my cluster has 7 nodes, connected via IP-over-Ethernet for 
</span><br>
<span class="quotelev1">&gt; control traffic and some kind of raw verbs (or anything else such as 
</span><br>
<span class="quotelev1">&gt; SRIO) interface for data transfer. Let's say my host file chooses 4 
</span><br>
<span class="quotelev1">&gt; out of the 7 nodes for an MPI job, based on the IP address, which are 
</span><br>
<span class="quotelev1">&gt; assigned to the Ethernet interfaces.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My question is: where in the code does this mapping between 
</span><br>
<span class="quotelev1">&gt; IP-to-whatever_interface_is_used_for_MPI_Send/Recv is determined, such 
</span><br>
<span class="quotelev1">&gt; as only those chosen nodes receive traffic over the verbs interface?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance
</span><br>
<span class="quotelev1">&gt; Durga
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We learn from history that we never learn from history.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/04/18746.php">http://www.open-mpi.org/community/lists/devel/2016/04/18746.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18747/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18748.php">dpchoudh .: "Re: [OMPI devel] IP address to verb interface mapping"</a>
<li><strong>Previous message:</strong> <a href="18746.php">dpchoudh .: "[OMPI devel] IP address to verb interface mapping"</a>
<li><strong>In reply to:</strong> <a href="18746.php">dpchoudh .: "[OMPI devel] IP address to verb interface mapping"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18748.php">dpchoudh .: "Re: [OMPI devel] IP address to verb interface mapping"</a>
<li><strong>Reply:</strong> <a href="18748.php">dpchoudh .: "Re: [OMPI devel] IP address to verb interface mapping"</a>
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
