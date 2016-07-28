<?
$subject_val = "Re: [OMPI users] mpi functions are slow when first called and become normal afterwards";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 12 08:42:08 2009" -->
<!-- isoreceived="20091112134208" -->
<!-- sent="Thu, 12 Nov 2009 06:41:55 -0700" -->
<!-- isosent="20091112134155" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpi functions are slow when first called and become normal afterwards" -->
<!-- id="7CAFDDD3-C4C0-4F45-BA41-0FCEB8F4F227_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="661b788e0911112104i1bbab7afr8c1f0de54bf4bd3_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpi functions are slow when first called and become normal afterwards<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-12 08:41:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11170.php">Jeff Squyres: "Re: [OMPI users] OFED-1.5rc1 with OpenMPI and IB"</a>
<li><strong>Previous message:</strong> <a href="11168.php">Stefan Kuhne: "[OMPI users] OFED-1.5rc1 with OpenMPI and IB"</a>
<li><strong>In reply to:</strong> <a href="11167.php">RightCFD: "Re: [OMPI users] mpi functions are slow when first called and become normal afterwards"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11173.php">Eugene Loh: "Re: [OMPI users] mpi functions are slow when first called and	become normal afterwards"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You can have OMPI wireup -all- available connections at startup of he  
<br>
processes with
<br>
<p>-mca mpi_preconnect_all 1
<br>
<p>Be aware of Brock's caution. Also, note that this occurs at MPI_Init  
<br>
so you can adjust your timing marks accordingly.
<br>
<p><p>On Nov 11, 2009, at 10:04 PM, RightCFD wrote:
<br>
<p><span class="quotelev1">&gt; Date: Thu, 29 Oct 2009 15:45:06 -0400
</span><br>
<span class="quotelev1">&gt; From: Brock Palen &lt;brockp_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] mpi functions are slow when first called and
</span><br>
<span class="quotelev1">&gt;        become normal afterwards
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;890CC430-68B0-4307-8260-24A6FADAE319_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=US-ASCII; format=flowed; delsp=yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; When MPI_Bcast and MPI_Reduce are called for the first time, they
</span><br>
<span class="quotelev2">&gt; &gt; are very slow. But after that, they run at normal and stable speed.
</span><br>
<span class="quotelev2">&gt; &gt; Is there anybody out there who have encountered such problem? If you
</span><br>
<span class="quotelev2">&gt; &gt; need any other information, please let me know and I'll provide.
</span><br>
<span class="quotelev2">&gt; &gt; Thanks in advance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is expected, and I think you can dig though the message archive
</span><br>
<span class="quotelev1">&gt; to find the answer.  OMPI does not wireup all the communication at
</span><br>
<span class="quotelev1">&gt; startup, thus the first time you communicate with a host the
</span><br>
<span class="quotelev1">&gt; connection is made, but after that it is fast because it is already
</span><br>
<span class="quotelev1">&gt; open.  This behavior is expected, and is needed for very large systems
</span><br>
<span class="quotelev1">&gt; where you could run out of sockets for some types of communication
</span><br>
<span class="quotelev1">&gt; with so many hosts.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brock Palen
</span><br>
<span class="quotelev1">&gt; www.umich.edu/~brockp
</span><br>
<span class="quotelev1">&gt; Center for Advanced Computing
</span><br>
<span class="quotelev1">&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev1">&gt; (734)936-1985
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for your reply. I am surprised to know this is an expected  
</span><br>
<span class="quotelev1">&gt; behavior of OMPI. I searched the archival but did not find many  
</span><br>
<span class="quotelev1">&gt; relevant messages. I am wondering why other users of OMPI do not  
</span><br>
<span class="quotelev1">&gt; complain this. Is there a way to avoid this when timing an MPI  
</span><br>
<span class="quotelev1">&gt; program?
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11169/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11170.php">Jeff Squyres: "Re: [OMPI users] OFED-1.5rc1 with OpenMPI and IB"</a>
<li><strong>Previous message:</strong> <a href="11168.php">Stefan Kuhne: "[OMPI users] OFED-1.5rc1 with OpenMPI and IB"</a>
<li><strong>In reply to:</strong> <a href="11167.php">RightCFD: "Re: [OMPI users] mpi functions are slow when first called and become normal afterwards"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11173.php">Eugene Loh: "Re: [OMPI users] mpi functions are slow when first called and	become normal afterwards"</a>
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
