<?
$subject_val = "Re: [OMPI users] mpi functions are slow when first called and become normal afterwards";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 12 00:04:22 2009" -->
<!-- isoreceived="20091112050422" -->
<!-- sent="Wed, 11 Nov 2009 23:04:18 -0600" -->
<!-- isosent="20091112050418" -->
<!-- name="RightCFD" -->
<!-- email="rightcfd_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpi functions are slow when first called and become normal afterwards" -->
<!-- id="661b788e0911112104i1bbab7afr8c1f0de54bf4bd3_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="[OMPI users] mpi functions are slow when first called and become normal afterwards" -->
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
<strong>From:</strong> RightCFD (<em>rightcfd_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-12 00:04:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11168.php">Stefan Kuhne: "[OMPI users] OFED-1.5rc1 with OpenMPI and IB"</a>
<li><strong>Previous message:</strong> <a href="11166.php">Martin Siegert: "Re: [OMPI users] How do you get static linkage for Intel compiler	libsfor the orterun executable?"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/10/11010.php">rightcfd: "[OMPI users] mpi functions are slow when first called and become normal afterwards"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11169.php">Ralph Castain: "Re: [OMPI users] mpi functions are slow when first called and become normal afterwards"</a>
<li><strong>Reply:</strong> <a href="11169.php">Ralph Castain: "Re: [OMPI users] mpi functions are slow when first called and become normal afterwards"</a>
<li><strong>Reply:</strong> <a href="11173.php">Eugene Loh: "Re: [OMPI users] mpi functions are slow when first called and	become normal afterwards"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Date: Thu, 29 Oct 2009 15:45:06 -0400
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
<span class="quotelev1">&gt; Thanks for your reply. I am surprised to know this is an expected behavior
</span><br>
<span class="quotelev1">&gt; of OMPI. I searched the archival but did not find many relevant messages. I
</span><br>
<span class="quotelev1">&gt; am wondering why other users of OMPI do not complain this. Is there a way to
</span><br>
<span class="quotelev1">&gt; avoid this when timing an MPI program?
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11167/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11168.php">Stefan Kuhne: "[OMPI users] OFED-1.5rc1 with OpenMPI and IB"</a>
<li><strong>Previous message:</strong> <a href="11166.php">Martin Siegert: "Re: [OMPI users] How do you get static linkage for Intel compiler	libsfor the orterun executable?"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/10/11010.php">rightcfd: "[OMPI users] mpi functions are slow when first called and become normal afterwards"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11169.php">Ralph Castain: "Re: [OMPI users] mpi functions are slow when first called and become normal afterwards"</a>
<li><strong>Reply:</strong> <a href="11169.php">Ralph Castain: "Re: [OMPI users] mpi functions are slow when first called and become normal afterwards"</a>
<li><strong>Reply:</strong> <a href="11173.php">Eugene Loh: "Re: [OMPI users] mpi functions are slow when first called and	become normal afterwards"</a>
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
