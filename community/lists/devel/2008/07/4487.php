<?
$subject_val = "Re: [OMPI devel] TCP BTL routability (was: ticket #972)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 29 16:40:21 2008" -->
<!-- isoreceived="20080729204021" -->
<!-- sent="Tue, 29 Jul 2008 22:40:09 +0200" -->
<!-- isosent="20080729204009" -->
<!-- name="Adrian Knoth" -->
<!-- email="adi_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] TCP BTL routability (was: ticket #972)" -->
<!-- id="20080729204009.GI22109_at_ltw.loris.tv" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="6B1D1169-AAF6-407F-8CD4-8C1991B147EF_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] TCP BTL routability (was: ticket #972)<br>
<strong>From:</strong> Adrian Knoth (<em>adi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-29 16:40:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4488.php">George Bosilca: "Re: [OMPI devel] MCA_BTL_BASE_VERSION_1_0_1 and MCA_BTL_BASE_VERSION_1_0_0"</a>
<li><strong>Previous message:</strong> <a href="4486.php">Jeff Squyres: "[OMPI devel] TCP BTL routability (was: ticket #972)"</a>
<li><strong>In reply to:</strong> <a href="4486.php">Jeff Squyres: "[OMPI devel] TCP BTL routability (was: ticket #972)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Jul 29, 2008 at 03:25:00PM -0400, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; For reference, the FAQ entry is here:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/faq/?category=tcp#tcp-routability">http://www.open-mpi.org/faq/?category=tcp#tcp-routability</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It looks like we now *always* assume that two TCP peers are routable.   
</span><br>
<p>As long as they share the same address family (IPv4 or IPv6).
<br>
<p><span class="quotelev1">&gt; The code in question is in btl_tcp_proc.c with the loop starting at  
</span><br>
<span class="quotelev1">&gt; line 413.
</span><br>
<p>Yes. The FAQ is outdated, the new code is very different.
<br>
<p>We now use graph theory, imagine a bipartite graph where each interface
<br>
is a vertex. (one peer on the left, the other on the right, no
<br>
connections inside each peer, only from left to right, hence a bipartite
<br>
graph).
<br>
<p>Every edge in this graph is given a weight depending on its quality. The
<br>
quality is &quot;defined&quot; in btl_tcp_proc.h:
<br>
<p>enum mca_btl_tcp_connection_quality { 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CQ_NO_CONNECTION,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CQ_PRIVATE_DIFFERENT_NETWORK,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CQ_PRIVATE_SAME_NETWORK,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CQ_PUBLIC_DIFFERENT_NETWORK,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CQ_PUBLIC_SAME_NETWORK
<br>
};
<br>
<p>CQ_NO_CONNECTION (weight 0) is for different address families, so we
<br>
don't try to connect from IPv6 to IPv4 and vice versa. The more likely a
<br>
connection is going to be established, the higher the weight. So public
<br>
addresses on the same network (read: very close, probably sharing the
<br>
same link) are the best one can get, private addresses on different
<br>
networks have the lowest probability for a succeeding connection.
<br>
<p>We then try to find a matching in the graph, this means, no two edges
<br>
may have a common endpoint on either side, thus avoiding
<br>
oversubscription.
<br>
<p>In order to support striping, we look for the largest matching (read:
<br>
selecting as many edges (links) as possible).
<br>
<p>In order to ensure connectivity, we then choose from the variety of
<br>
largest matchings the one with the highest summed weights. These edges
<br>
denote the addresses with the best probability for a succeeding
<br>
connection.
<br>
<p>In terms of graph theory, this is called a maximum cardinality maximum
<br>
weight matching.
<br>
<p><p>You can find the whole background story in Chapter 3:
<br>
<p>&nbsp;&nbsp;&nbsp;<a href="http://cluster.inf-ra.uni-jena.de/~adi/peiselt-thesis.pdf">http://cluster.inf-ra.uni-jena.de/~adi/peiselt-thesis.pdf</a>
<br>
<p><p>We have also a brief IEEE paper on this:
<br>
<p>&nbsp;&nbsp;&nbsp;<a href="http://www.ieeexplore.ieee.org/xpl/freeabs_all.jsp?isnumber=4476518&amp;arnumber=4476565&amp;count=56&amp;index=46">http://www.ieeexplore.ieee.org/xpl/freeabs_all.jsp?isnumber=4476518&amp;arnumber=4476565&amp;count=56&amp;index=46</a>
<br>
<p><p>In other words: #972 is somewhat obsolete, the FAQ entry should surely
<br>
be removed/updated. I don't know to which extent, but if you want me to
<br>
write some lines, I could probably invent a not so scientific
<br>
description.
<br>
<p><p>HTH
<br>
<p><pre>
-- 
Cluster and Metacomputing Working Group
Friedrich-Schiller-Universit&#228;t Jena, Germany
private: <a href="http://adi.thur.de">http://adi.thur.de</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4488.php">George Bosilca: "Re: [OMPI devel] MCA_BTL_BASE_VERSION_1_0_1 and MCA_BTL_BASE_VERSION_1_0_0"</a>
<li><strong>Previous message:</strong> <a href="4486.php">Jeff Squyres: "[OMPI devel] TCP BTL routability (was: ticket #972)"</a>
<li><strong>In reply to:</strong> <a href="4486.php">Jeff Squyres: "[OMPI devel] TCP BTL routability (was: ticket #972)"</a>
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
