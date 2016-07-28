<?
$subject_val = "Re: [OMPI devel] IP address to verb interface mapping";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr  8 00:54:36 2016" -->
<!-- isoreceived="20160408045436" -->
<!-- sent="Fri, 8 Apr 2016 00:54:35 -0400" -->
<!-- isosent="20160408045435" -->
<!-- name="dpchoudh ." -->
<!-- email="dpchoudh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] IP address to verb interface mapping" -->
<!-- id="CAHXxYDi=83DDH8U-Kyivj36N3YwBfhVcv5xXN=FOy1OCXx9zdw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="570738FF.4010809_at_rist.or.jp" -->
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
<strong>From:</strong> dpchoudh . (<em>dpchoudh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-08 00:54:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18751.php">Ralph Castain: "[OMPI devel] 1.10.3rc1 available for test"</a>
<li><strong>Previous message:</strong> <a href="18749.php">Gilles Gouaillardet: "Re: [OMPI devel] IP address to verb interface mapping"</a>
<li><strong>In reply to:</strong> <a href="18749.php">Gilles Gouaillardet: "Re: [OMPI devel] IP address to verb interface mapping"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18756.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] IP address to verb interface mapping"</a>
<li><strong>Reply:</strong> <a href="18756.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] IP address to verb interface mapping"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you very much, Gilles. That is exactly the information I was looking
<br>
for.
<br>
<p>Best regards
<br>
Durga
<br>
<p>We learn from history that we never learn from history.
<br>
<p>On Fri, Apr 8, 2016 at 12:52 AM, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; At init time, each task invoke btl_openib_component_init() which invokes
</span><br>
<span class="quotelev1">&gt; btl_openib_modex_send()
</span><br>
<span class="quotelev1">&gt; basically, it collects infiniband info (port, subnet, lid, ...) and &quot;push&quot;
</span><br>
<span class="quotelev1">&gt; them to orted via the modex mechanism.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When a communication is created, the remote information is retrieved via
</span><br>
<span class="quotelev1">&gt; the modex mechanism in mca_btl_openib_proc_get_locket()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 4/8/2016 1:30 PM, dpchoudh . wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for responding quickly; however, I am afraid I did not explain my
</span><br>
<span class="quotelev1">&gt; question clearly enough; my apologies.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What I am trying to understand is this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My cluster has (say) 7 nodes. I use IP-over-Ethernet for Orted (for job
</span><br>
<span class="quotelev1">&gt; launch and control traffic); this is not used for MPI messaging. Let's say
</span><br>
<span class="quotelev1">&gt; that the IP addresses are 192.168.1.2-192.168.1.9. They are all in the same
</span><br>
<span class="quotelev1">&gt; IP subnet.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The MPI messaging is used using some other interconnects, such as
</span><br>
<span class="quotelev1">&gt; Infiniband. All 7 nodes are connected to the same Infiniband switch and
</span><br>
<span class="quotelev1">&gt; hence are in the same (infiniband) subnet as well.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In my host file, I mention (say) 4 IP addresses:  192.168.3-192.168.1.7
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My question is, how does OpenMPI pick the 4 Infiniband interfaces that
</span><br>
<span class="quotelev1">&gt; matches the IP addresses? Put another way, the ranks of each launched jobs
</span><br>
<span class="quotelev1">&gt; are (I presume) setup by orted by some mechanism. When I do an MPI_Send()
</span><br>
<span class="quotelev1">&gt; to a given rank, the message goes to the Infiniband interface with a
</span><br>
<span class="quotelev1">&gt; particular LID. How does this IP-to-Infiniband LID mapping happen?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Durga
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We learn from history that we never learn from history.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, Apr 8, 2016 at 12:12 AM, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; the hostnames (or their IPs) are only used to ssh orted.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; if you use only the tcp btl :
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; TCP *MPI* communications (vs OOB management communications) are handled
</span><br>
<span class="quotelev2">&gt;&gt; by btl/tcp
</span><br>
<span class="quotelev2">&gt;&gt; by default, all usable interfaces are used, then messages are split
</span><br>
<span class="quotelev2">&gt;&gt; (iirc, by ob1 pml) and then &quot;fragments&quot;
</span><br>
<span class="quotelev2">&gt;&gt; are sent using all interfaces.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; each interface has a latency and bandwidth that is used to split message
</span><br>
<span class="quotelev2">&gt;&gt; into fragments.
</span><br>
<span class="quotelev2">&gt;&gt; (assuming it is correctly configured, 90% of a large message is sent over
</span><br>
<span class="quotelev2">&gt;&gt; the 10GbE interface, and 10% is sent over the GbE interface)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; if you can explicitly list/blacklist interface
</span><br>
<span class="quotelev2">&gt;&gt; mpirun --mca btl_tcp_if_include ...
</span><br>
<span class="quotelev2">&gt;&gt; or
</span><br>
<span class="quotelev2">&gt;&gt; mpirun --mca btl_tcp_if_exclude ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (see ompi_info --all for the syntax)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; but if you use several btls (for example tcp and openib), the btl(s) with
</span><br>
<span class="quotelev2">&gt;&gt; the lower exclusivity are not used.
</span><br>
<span class="quotelev2">&gt;&gt; (for example, a large message is *not* split and send using native ib,
</span><br>
<span class="quotelev2">&gt;&gt; IPoIB and GbE because the openib btl
</span><br>
<span class="quotelev2">&gt;&gt; has a higher exclusivity than the tcp btl)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; did this answer your question ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 4/8/2016 12:24 PM, dpchoudh . wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello all
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (Newbie warning! Sorry :-(  )
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Let's say my cluster has 7 nodes, connected via IP-over-Ethernet for
</span><br>
<span class="quotelev2">&gt;&gt; control traffic and some kind of raw verbs (or anything else such as SRIO)
</span><br>
<span class="quotelev2">&gt;&gt; interface for data transfer. Let's say my host file chooses 4 out of the 7
</span><br>
<span class="quotelev2">&gt;&gt; nodes for an MPI job, based on the IP address, which are assigned to the
</span><br>
<span class="quotelev2">&gt;&gt; Ethernet interfaces.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My question is: where in the code does this mapping between
</span><br>
<span class="quotelev2">&gt;&gt; IP-to-whatever_interface_is_used_for_MPI_Send/Recv is determined, such as
</span><br>
<span class="quotelev2">&gt;&gt; only those chosen nodes receive traffic over the verbs interface?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks in advance
</span><br>
<span class="quotelev2">&gt;&gt; Durga
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We learn from history that we never learn from history.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing listdevel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/04/18746.php">http://www.open-mpi.org/community/lists/devel/2016/04/18746.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/04/18747.php">http://www.open-mpi.org/community/lists/devel/2016/04/18747.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing listdevel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/04/18748.php">http://www.open-mpi.org/community/lists/devel/2016/04/18748.php</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/04/18749.php">http://www.open-mpi.org/community/lists/devel/2016/04/18749.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18750/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18751.php">Ralph Castain: "[OMPI devel] 1.10.3rc1 available for test"</a>
<li><strong>Previous message:</strong> <a href="18749.php">Gilles Gouaillardet: "Re: [OMPI devel] IP address to verb interface mapping"</a>
<li><strong>In reply to:</strong> <a href="18749.php">Gilles Gouaillardet: "Re: [OMPI devel] IP address to verb interface mapping"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18756.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] IP address to verb interface mapping"</a>
<li><strong>Reply:</strong> <a href="18756.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] IP address to verb interface mapping"</a>
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
