<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jun  1 04:25:39 2007" -->
<!-- isoreceived="20070601082539" -->
<!-- sent="Fri, 1 Jun 2007 10:25:34 +0200" -->
<!-- isosent="20070601082534" -->
<!-- name="Christian Kauhaus" -->
<!-- email="ckauhaus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mixing MX and TCP" -->
<!-- id="20070601082534.GC7649_at_ipc256.inf.uni-jena.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="465EF327.70600_at_cs.vu.nl" -->
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
<strong>From:</strong> Christian Kauhaus (<em>ckauhaus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-01 04:25:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3351.php">George Bosilca: "Re: [OMPI users] mixing MX and TCP"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/05/3349.php">Kees Verstoep: "[OMPI users] mixing MX and TCP"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/05/3349.php">Kees Verstoep: "[OMPI users] mixing MX and TCP"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3351.php">George Bosilca: "Re: [OMPI users] mixing MX and TCP"</a>
<li><strong>Reply:</strong> <a href="3351.php">George Bosilca: "Re: [OMPI users] mixing MX and TCP"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Kees Verstoep &lt;versto_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt;I am currently experimenting with OpenMPI in a multi-cluster setting
</span><br>
<span class="quotelev1">&gt;where each cluster has its private Myri-10G/MX network besides TCP.
</span><br>
<p>Very interesting topic. :)
<br>
<p><span class="quotelev1">&gt;I see MX rather than tcp-level connections between clusters being
</span><br>
<span class="quotelev1">&gt;tried, which across clusters fails in mx_connect/mx_isend (at the
</span><br>
<span class="quotelev1">&gt;moment there is no inter-cluster support in MX itself).  Besides &quot;mx&quot;,
</span><br>
<span class="quotelev1">&gt;I do include &quot;tcp&quot; in the network option lists of course.
</span><br>
<p>It seems that the BTL does not realize that the two Myrinets are not
<br>
connected. We are currently working on getting the handling of all cases
<br>
with different TCP/IP networks right (public IPv4, private IPv4, IPv6),
<br>
but to my knowledge nobody has done a detailed evaluation on Open MPI in
<br>
multi-domain clusters with mixed networks (TCP+MX, TCP+IB, ...) yet. 
<br>
<p>-Christian
<br>
<p><pre>
-- 
Dipl.-Inf. Christian Kauhaus                               &lt;&gt;&lt;
Lehrstuhl fuer Rechnerarchitektur und -kommunikation 
Institut fuer Informatik * Ernst-Abbe-Platz 1-2 * D-07743 Jena
Tel: +49 3641 9 46376  *  Fax: +49 3641 9 46372   *  Raum 3217

</pre>
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3350/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3351.php">George Bosilca: "Re: [OMPI users] mixing MX and TCP"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/05/3349.php">Kees Verstoep: "[OMPI users] mixing MX and TCP"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/05/3349.php">Kees Verstoep: "[OMPI users] mixing MX and TCP"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3351.php">George Bosilca: "Re: [OMPI users] mixing MX and TCP"</a>
<li><strong>Reply:</strong> <a href="3351.php">George Bosilca: "Re: [OMPI users] mixing MX and TCP"</a>
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
