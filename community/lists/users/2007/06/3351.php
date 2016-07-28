<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jun  1 11:05:52 2007" -->
<!-- isoreceived="20070601150552" -->
<!-- sent="Fri, 1 Jun 2007 11:05:26 -0400" -->
<!-- isosent="20070601150526" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mixing MX and TCP" -->
<!-- id="37029C8D-CEE1-48D8-A78E-4E9A2E31F114_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20070601082534.GC7649_at_ipc256.inf.uni-jena.de" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-01 11:05:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3352.php">Reese Faucette: "Re: [OMPI users] mixing MX and TCP"</a>
<li><strong>Previous message:</strong> <a href="3350.php">Christian Kauhaus: "Re: [OMPI users] mixing MX and TCP"</a>
<li><strong>In reply to:</strong> <a href="3350.php">Christian Kauhaus: "Re: [OMPI users] mixing MX and TCP"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3352.php">Reese Faucette: "Re: [OMPI users] mixing MX and TCP"</a>
<li><strong>Reply:</strong> <a href="3352.php">Reese Faucette: "Re: [OMPI users] mixing MX and TCP"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Well, we are aware of this problem, but to be honest I was ready to  
<br>
bet that nobody will use a cluster of cluster with Myrinet and  
<br>
TCP ... so it was in a low priority TODO list.
<br>
<p>The problem is the routing table of the MX device. The MX BTL is  
<br>
unable to identify in a unique manner that there are not one but  
<br>
multiple Myrinet networks. As long as a node report a MX handle back  
<br>
at the end of MPI_Init, everybody else will try to use it if they  
<br>
need to setup a MX connection. Of course this will fail for multiple  
<br>
Myrinet networks. However, THIS it is not supposed to stop your MPI  
<br>
application. Open MPI will deselect the MX BTL for this particular  
<br>
connection and switch to TCP (if available).
<br>
<p>george.
<br>
<p>On Jun 1, 2007, at 4:25 AM, Christian Kauhaus wrote:
<br>
<p><span class="quotelev1">&gt; Kees Verstoep &lt;versto_at_[hidden]&gt;:
</span><br>
<span class="quotelev2">&gt;&gt; I am currently experimenting with OpenMPI in a multi-cluster setting
</span><br>
<span class="quotelev2">&gt;&gt; where each cluster has its private Myri-10G/MX network besides TCP.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Very interesting topic. :)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I see MX rather than tcp-level connections between clusters being
</span><br>
<span class="quotelev2">&gt;&gt; tried, which across clusters fails in mx_connect/mx_isend (at the
</span><br>
<span class="quotelev2">&gt;&gt; moment there is no inter-cluster support in MX itself).  Besides  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;mx&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; I do include &quot;tcp&quot; in the network option lists of course.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It seems that the BTL does not realize that the two Myrinets are not
</span><br>
<span class="quotelev1">&gt; connected. We are currently working on getting the handling of all  
</span><br>
<span class="quotelev1">&gt; cases
</span><br>
<span class="quotelev1">&gt; with different TCP/IP networks right (public IPv4, private IPv4,  
</span><br>
<span class="quotelev1">&gt; IPv6),
</span><br>
<span class="quotelev1">&gt; but to my knowledge nobody has done a detailed evaluation on Open  
</span><br>
<span class="quotelev1">&gt; MPI in
</span><br>
<span class="quotelev1">&gt; multi-domain clusters with mixed networks (TCP+MX, TCP+IB, ...) yet.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Christian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Dipl.-Inf. Christian Kauhaus                               &lt;&gt;&lt;
</span><br>
<span class="quotelev1">&gt; Lehrstuhl fuer Rechnerarchitektur und -kommunikation
</span><br>
<span class="quotelev1">&gt; Institut fuer Informatik * Ernst-Abbe-Platz 1-2 * D-07743 Jena
</span><br>
<span class="quotelev1">&gt; Tel: +49 3641 9 46376  *  Fax: +49 3641 9 46372   *  Raum 3217
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3351/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3352.php">Reese Faucette: "Re: [OMPI users] mixing MX and TCP"</a>
<li><strong>Previous message:</strong> <a href="3350.php">Christian Kauhaus: "Re: [OMPI users] mixing MX and TCP"</a>
<li><strong>In reply to:</strong> <a href="3350.php">Christian Kauhaus: "Re: [OMPI users] mixing MX and TCP"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3352.php">Reese Faucette: "Re: [OMPI users] mixing MX and TCP"</a>
<li><strong>Reply:</strong> <a href="3352.php">Reese Faucette: "Re: [OMPI users] mixing MX and TCP"</a>
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
