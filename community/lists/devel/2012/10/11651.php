<?
$subject_val = "Re: [OMPI devel] OMPI devel] NIC Failover and Message Stripping of Open MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 25 20:25:52 2012" -->
<!-- isoreceived="20121026002552" -->
<!-- sent="Fri, 26 Oct 2012 08:25:48 +0800" -->
<!-- isosent="20121026002548" -->
<!-- name="Lirong Jian" -->
<!-- email="lirong.misc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI devel] NIC Failover and Message Stripping of Open MPI" -->
<!-- id="CAKXfAtMcOsqMAxbNZCAnYsp3K4hoqyeqtEJr8QUWd2w5YqX=Uw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="[OMPI devel] OMPI devel] NIC Failover and Message Stripping of Open MPI" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OMPI devel] NIC Failover and Message Stripping of Open MPI<br>
<strong>From:</strong> Lirong Jian (<em>lirong.misc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-25 20:25:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11652.php">Guillaume.Papaure_at_[hidden]: "[OMPI devel] removal of grpcomm hier in openmpi 1.6.2 ?"</a>
<li><strong>Previous message:</strong> <a href="11650.php">Ralph Castain: "Re: [OMPI devel] 1.7.0rc3 available - PLEASE test"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks, guys.
<br>
<p>I will check the code of OB1 more carefully. Thanks.
<br>
<p>Best,
<br>
Lirong
<br>
<p>Message: 7
<br>
<span class="quotelev1">&gt; Date: Thu, 25 Oct 2012 10:55:51 -0700
</span><br>
<span class="quotelev1">&gt; From: Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] NIC Failover and Message Stripping of Open
</span><br>
<span class="quotelev1">&gt;         MPI.
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;B1A13D1B-02A2-4E67-B0CD-FA924538D458_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=&quot;us-ascii&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just an FYI - I asked a similar question recently and got the following
</span><br>
<span class="quotelev1">&gt; answer from Rolf:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; In my case, it was specific to openib only and it required you to be
</span><br>
<span class="quotelev1">&gt; running with two or more IB rails.
</span><br>
<span class="quotelev2">&gt; &gt; Then, if one of them failed, we just shut it down, and continued with
</span><br>
<span class="quotelev1">&gt; the working ones.
</span><br>
<span class="quotelev2">&gt; &gt; You could only get use of the failing rail if it was fixed and a new job
</span><br>
<span class="quotelev1">&gt; was started.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; To get this to work, I created a new PML called bfo.  I also had to make
</span><br>
<span class="quotelev1">&gt; some changes in the openib BTL.
</span><br>
<span class="quotelev2">&gt; &gt; By default, none of the code is configured in.  There is a README in the
</span><br>
<span class="quotelev1">&gt; PML bfo directory that
</span><br>
<span class="quotelev2">&gt; &gt; actually does quite a good job explaining what I did.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The bfo module is included in the 1.6 series, and in the upcoming 1.7
</span><br>
<span class="quotelev1">&gt; series. Can't say anything as to its state of repair.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 25, 2012, at 10:41 AM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Oct 25, 2012, at 17:54 , Lirong Jian &lt;lirong.misc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hi foks,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Sorry to bother you guys, but I have some questions about Open MPI and
</span><br>
<span class="quotelev1">&gt; really want your help.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; There are some papers (e.g., [1, 2, 3], although they are sort of
</span><br>
<span class="quotelev1">&gt; old-aged) mentioning that Open MPI is supporting NIC failover and message
</span><br>
<span class="quotelev1">&gt; stripping over multiple NICs. However, when I read the source code of
</span><br>
<span class="quotelev1">&gt; openmpi-1.6.2, I couldn't find any component named DR or TEG (which are
</span><br>
<span class="quotelev1">&gt; mentioned in those papers and are supposed to support NIC failover and
</span><br>
<span class="quotelev1">&gt; message stripping). So my question is:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Does the 1.6.2 release of Open MPI support such two kinds of
</span><br>
<span class="quotelev1">&gt; functionalities? If positive, which part of code is corresponding to these
</span><br>
<span class="quotelev1">&gt; functionalities?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Lirong,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; As you noticed the papers are quite old and dusty.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Due to a lack of interest from the community the DR PML has been retired
</span><br>
<span class="quotelev1">&gt; from out stable releases. In other terms no stable Open MPI version
</span><br>
<span class="quotelev1">&gt; supports network failover. However, the code is still available in the
</span><br>
<span class="quotelev1">&gt; trunk, but there is no guarantee it still does what it was designed for.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; TEG has been replaced with OB1, which is our current network management
</span><br>
<span class="quotelev1">&gt; layer. It does stripping over multiple NICs (identical or not) by default.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   george.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Many thanks in advance.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; P.S., I am a newbie of this domain. Maybe my questions are simple even
</span><br>
<span class="quotelev1">&gt; naive, but your help would be highly appreciated.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Best,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Lirong
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [1] Network Fault Tolerance in Open MPI.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [2] Open MPI: A High Performance, Flexible Implementation of MPI
</span><br>
<span class="quotelev1">&gt; Point-to-Point Communications.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [3] TEG: A High-Performance, Scalable, Multi-network, Point-to-Point,
</span><br>
<span class="quotelev1">&gt; Communications Methodology.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -------------- next part --------------
</span><br>
<span class="quotelev1">&gt; HTML attachment scrubbed and removed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; End of devel Digest, Vol 2285, Issue 2
</span><br>
<span class="quotelev1">&gt; **************************************
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11651/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11652.php">Guillaume.Papaure_at_[hidden]: "[OMPI devel] removal of grpcomm hier in openmpi 1.6.2 ?"</a>
<li><strong>Previous message:</strong> <a href="11650.php">Ralph Castain: "Re: [OMPI devel] 1.7.0rc3 available - PLEASE test"</a>
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
