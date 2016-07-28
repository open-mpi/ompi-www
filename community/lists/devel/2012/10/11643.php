<?
$subject_val = "Re: [OMPI devel] NIC Failover and Message Stripping of Open MPI.";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 25 13:42:09 2012" -->
<!-- isoreceived="20121025174209" -->
<!-- sent="Thu, 25 Oct 2012 19:41:56 +0200" -->
<!-- isosent="20121025174156" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] NIC Failover and Message Stripping of Open MPI." -->
<!-- id="306768DA-6F1E-4E92-9D72-570853D0D2F7_at_icl.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAKXfAtNi++rGHz1Kc0c+2DkMX6sSVjO4=iZEkUyETiYT=Lf82Q_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] NIC Failover and Message Stripping of Open MPI.<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-25 13:41:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11644.php">Ralph Castain: "Re: [OMPI devel] NIC Failover and Message Stripping of Open MPI."</a>
<li><strong>Previous message:</strong> <a href="11642.php">Jeff Squyres: "Re: [OMPI devel] [EXTERNAL] Re: Latency perf: v1.6 vs. v1.7 vs. trunk"</a>
<li><strong>In reply to:</strong> <a href="11637.php">Lirong Jian: "[OMPI devel] NIC Failover and Message Stripping of Open MPI."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11644.php">Ralph Castain: "Re: [OMPI devel] NIC Failover and Message Stripping of Open MPI."</a>
<li><strong>Reply:</strong> <a href="11644.php">Ralph Castain: "Re: [OMPI devel] NIC Failover and Message Stripping of Open MPI."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 25, 2012, at 17:54 , Lirong Jian &lt;lirong.misc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi foks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sorry to bother you guys, but I have some questions about Open MPI and really want your help.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There are some papers (e.g., [1, 2, 3], although they are sort of old-aged) mentioning that Open MPI is supporting NIC failover and message stripping over multiple NICs. However, when I read the source code of openmpi-1.6.2, I couldn't find any component named DR or TEG (which are mentioned in those papers and are supposed to support NIC failover and message stripping). So my question is:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Does the 1.6.2 release of Open MPI support such two kinds of functionalities? If positive, which part of code is corresponding to these functionalities?
</span><br>
<p>Lirong,
<br>
<p>As you noticed the papers are quite old and dusty.
<br>
<p>Due to a lack of interest from the community the DR PML has been retired from out stable releases. In other terms no stable Open MPI version supports network failover. However, the code is still available in the trunk, but there is no guarantee it still does what it was designed for.
<br>
<p>TEG has been replaced with OB1, which is our current network management layer. It does stripping over multiple NICs (identical or not) by default.
<br>
<p>&nbsp;&nbsp;george.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Many thanks in advance.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; P.S., I am a newbie of this domain. Maybe my questions are simple even naive, but your help would be highly appreciated.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best,
</span><br>
<span class="quotelev1">&gt; Lirong
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [1] Network Fault Tolerance in Open MPI.
</span><br>
<span class="quotelev1">&gt; [2] Open MPI: A High Performance, Flexible Implementation of MPI Point-to-Point Communications.
</span><br>
<span class="quotelev1">&gt; [3] TEG: A High-Performance, Scalable, Multi-network, Point-to-Point, Communications Methodology.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11643/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11644.php">Ralph Castain: "Re: [OMPI devel] NIC Failover and Message Stripping of Open MPI."</a>
<li><strong>Previous message:</strong> <a href="11642.php">Jeff Squyres: "Re: [OMPI devel] [EXTERNAL] Re: Latency perf: v1.6 vs. v1.7 vs. trunk"</a>
<li><strong>In reply to:</strong> <a href="11637.php">Lirong Jian: "[OMPI devel] NIC Failover and Message Stripping of Open MPI."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11644.php">Ralph Castain: "Re: [OMPI devel] NIC Failover and Message Stripping of Open MPI."</a>
<li><strong>Reply:</strong> <a href="11644.php">Ralph Castain: "Re: [OMPI devel] NIC Failover and Message Stripping of Open MPI."</a>
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
