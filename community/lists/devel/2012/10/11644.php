<?
$subject_val = "Re: [OMPI devel] NIC Failover and Message Stripping of Open MPI.";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 25 13:55:59 2012" -->
<!-- isoreceived="20121025175559" -->
<!-- sent="Thu, 25 Oct 2012 10:55:51 -0700" -->
<!-- isosent="20121025175551" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] NIC Failover and Message Stripping of Open MPI." -->
<!-- id="B1A13D1B-02A2-4E67-B0CD-FA924538D458_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="306768DA-6F1E-4E92-9D72-570853D0D2F7_at_icl.utk.edu" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-25 13:55:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11645.php">George Bosilca: "Re: [OMPI devel] 1.7.0rc3 available - PLEASE test"</a>
<li><strong>Previous message:</strong> <a href="11643.php">George Bosilca: "Re: [OMPI devel] NIC Failover and Message Stripping of Open MPI."</a>
<li><strong>In reply to:</strong> <a href="11643.php">George Bosilca: "Re: [OMPI devel] NIC Failover and Message Stripping of Open MPI."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just an FYI - I asked a similar question recently and got the following answer from Rolf:
<br>
<p><span class="quotelev1">&gt; In my case, it was specific to openib only and it required you to be running with two or more IB rails.
</span><br>
<span class="quotelev1">&gt; Then, if one of them failed, we just shut it down, and continued with the working ones.
</span><br>
<span class="quotelev1">&gt; You could only get use of the failing rail if it was fixed and a new job was started.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; To get this to work, I created a new PML called bfo.  I also had to make some changes in the openib BTL.
</span><br>
<span class="quotelev1">&gt; By default, none of the code is configured in.  There is a README in the PML bfo directory that 
</span><br>
<span class="quotelev1">&gt; actually does quite a good job explaining what I did.
</span><br>
<p>The bfo module is included in the 1.6 series, and in the upcoming 1.7 series. Can't say anything as to its state of repair.
<br>
<p><p>On Oct 25, 2012, at 10:41 AM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Oct 25, 2012, at 17:54 , Lirong Jian &lt;lirong.misc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi foks,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Sorry to bother you guys, but I have some questions about Open MPI and really want your help.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; There are some papers (e.g., [1, 2, 3], although they are sort of old-aged) mentioning that Open MPI is supporting NIC failover and message stripping over multiple NICs. However, when I read the source code of openmpi-1.6.2, I couldn't find any component named DR or TEG (which are mentioned in those papers and are supposed to support NIC failover and message stripping). So my question is:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Does the 1.6.2 release of Open MPI support such two kinds of functionalities? If positive, which part of code is corresponding to these functionalities?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Lirong,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As you noticed the papers are quite old and dusty.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Due to a lack of interest from the community the DR PML has been retired from out stable releases. In other terms no stable Open MPI version supports network failover. However, the code is still available in the trunk, but there is no guarantee it still does what it was designed for.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; TEG has been replaced with OB1, which is our current network management layer. It does stripping over multiple NICs (identical or not) by default.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   george.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Many thanks in advance.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; P.S., I am a newbie of this domain. Maybe my questions are simple even naive, but your help would be highly appreciated.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Best,
</span><br>
<span class="quotelev2">&gt;&gt; Lirong
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [1] Network Fault Tolerance in Open MPI.
</span><br>
<span class="quotelev2">&gt;&gt; [2] Open MPI: A High Performance, Flexible Implementation of MPI Point-to-Point Communications.
</span><br>
<span class="quotelev2">&gt;&gt; [3] TEG: A High-Performance, Scalable, Multi-network, Point-to-Point, Communications Methodology.
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11644/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11645.php">George Bosilca: "Re: [OMPI devel] 1.7.0rc3 available - PLEASE test"</a>
<li><strong>Previous message:</strong> <a href="11643.php">George Bosilca: "Re: [OMPI devel] NIC Failover and Message Stripping of Open MPI."</a>
<li><strong>In reply to:</strong> <a href="11643.php">George Bosilca: "Re: [OMPI devel] NIC Failover and Message Stripping of Open MPI."</a>
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
