<?
$subject_val = "Re: [OMPI devel] IP address to verb interface mapping";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr  8 00:31:08 2016" -->
<!-- isoreceived="20160408043108" -->
<!-- sent="Fri, 8 Apr 2016 00:30:58 -0400" -->
<!-- isosent="20160408043058" -->
<!-- name="dpchoudh ." -->
<!-- email="dpchoudh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] IP address to verb interface mapping" -->
<!-- id="CAHXxYDjC+kq2+o7HRW2=HJqBtsX3CkZzHBd8ki_aOk3Bp1V3rQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="57072FBB.4030404_at_rist.or.jp" -->
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
<strong>Date:</strong> 2016-04-08 00:30:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18749.php">Gilles Gouaillardet: "Re: [OMPI devel] IP address to verb interface mapping"</a>
<li><strong>Previous message:</strong> <a href="18747.php">Gilles Gouaillardet: "Re: [OMPI devel] IP address to verb interface mapping"</a>
<li><strong>In reply to:</strong> <a href="18747.php">Gilles Gouaillardet: "Re: [OMPI devel] IP address to verb interface mapping"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18749.php">Gilles Gouaillardet: "Re: [OMPI devel] IP address to verb interface mapping"</a>
<li><strong>Reply:</strong> <a href="18749.php">Gilles Gouaillardet: "Re: [OMPI devel] IP address to verb interface mapping"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Gilles
<br>
<p>Thanks for responding quickly; however, I am afraid I did not explain my
<br>
question clearly enough; my apologies.
<br>
<p>What I am trying to understand is this:
<br>
<p>My cluster has (say) 7 nodes. I use IP-over-Ethernet for Orted (for job
<br>
launch and control traffic); this is not used for MPI messaging. Let's say
<br>
that the IP addresses are 192.168.1.2-192.168.1.9. They are all in the same
<br>
IP subnet.
<br>
<p>The MPI messaging is used using some other interconnects, such as
<br>
Infiniband. All 7 nodes are connected to the same Infiniband switch and
<br>
hence are in the same (infiniband) subnet as well.
<br>
<p>In my host file, I mention (say) 4 IP addresses:  192.168.3-192.168.1.7
<br>
<p>My question is, how does OpenMPI pick the 4 Infiniband interfaces that
<br>
matches the IP addresses? Put another way, the ranks of each launched jobs
<br>
are (I presume) setup by orted by some mechanism. When I do an MPI_Send()
<br>
to a given rank, the message goes to the Infiniband interface with a
<br>
particular LID. How does this IP-to-Infiniband LID mapping happen?
<br>
<p>Thanks
<br>
Durga
<br>
<p>We learn from history that we never learn from history.
<br>
<p>On Fri, Apr 8, 2016 at 12:12 AM, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; the hostnames (or their IPs) are only used to ssh orted.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; if you use only the tcp btl :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; TCP *MPI* communications (vs OOB management communications) are handled by
</span><br>
<span class="quotelev1">&gt; btl/tcp
</span><br>
<span class="quotelev1">&gt; by default, all usable interfaces are used, then messages are split (iirc,
</span><br>
<span class="quotelev1">&gt; by ob1 pml) and then &quot;fragments&quot;
</span><br>
<span class="quotelev1">&gt; are sent using all interfaces.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; each interface has a latency and bandwidth that is used to split message
</span><br>
<span class="quotelev1">&gt; into fragments.
</span><br>
<span class="quotelev1">&gt; (assuming it is correctly configured, 90% of a large message is sent over
</span><br>
<span class="quotelev1">&gt; the 10GbE interface, and 10% is sent over the GbE interface)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; if you can explicitly list/blacklist interface
</span><br>
<span class="quotelev1">&gt; mpirun --mca btl_tcp_if_include ...
</span><br>
<span class="quotelev1">&gt; or
</span><br>
<span class="quotelev1">&gt; mpirun --mca btl_tcp_if_exclude ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (see ompi_info --all for the syntax)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; but if you use several btls (for example tcp and openib), the btl(s) with
</span><br>
<span class="quotelev1">&gt; the lower exclusivity are not used.
</span><br>
<span class="quotelev1">&gt; (for example, a large message is *not* split and send using native ib,
</span><br>
<span class="quotelev1">&gt; IPoIB and GbE because the openib btl
</span><br>
<span class="quotelev1">&gt; has a higher exclusivity than the tcp btl)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; did this answer your question ?
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 4/8/2016 12:24 PM, dpchoudh . wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
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
<span class="quotelev1">&gt; control traffic and some kind of raw verbs (or anything else such as SRIO)
</span><br>
<span class="quotelev1">&gt; interface for data transfer. Let's say my host file chooses 4 out of the 7
</span><br>
<span class="quotelev1">&gt; nodes for an MPI job, based on the IP address, which are assigned to the
</span><br>
<span class="quotelev1">&gt; Ethernet interfaces.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My question is: where in the code does this mapping between
</span><br>
<span class="quotelev1">&gt; IP-to-whatever_interface_is_used_for_MPI_Send/Recv is determined, such as
</span><br>
<span class="quotelev1">&gt; only those chosen nodes receive traffic over the verbs interface?
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
<span class="quotelev1">&gt; devel mailing listdevel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/04/18746.php">http://www.open-mpi.org/community/lists/devel/2016/04/18746.php</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/04/18747.php">http://www.open-mpi.org/community/lists/devel/2016/04/18747.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18748/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18749.php">Gilles Gouaillardet: "Re: [OMPI devel] IP address to verb interface mapping"</a>
<li><strong>Previous message:</strong> <a href="18747.php">Gilles Gouaillardet: "Re: [OMPI devel] IP address to verb interface mapping"</a>
<li><strong>In reply to:</strong> <a href="18747.php">Gilles Gouaillardet: "Re: [OMPI devel] IP address to verb interface mapping"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18749.php">Gilles Gouaillardet: "Re: [OMPI devel] IP address to verb interface mapping"</a>
<li><strong>Reply:</strong> <a href="18749.php">Gilles Gouaillardet: "Re: [OMPI devel] IP address to verb interface mapping"</a>
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
