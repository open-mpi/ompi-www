<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Apr 17 16:56:56 2007" -->
<!-- isoreceived="20070417205656" -->
<!-- sent="Tue, 17 Apr 2007 16:55:54 -0400" -->
<!-- isosent="20070417205554" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.1.4 vs. 1.2" -->
<!-- id="CE7EA377-4DA8-4029-ABF9-BC228219122F_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="70B9EBE8-534B-44EB-B64F-29739B88F126_at_ieee.org" -->
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
<strong>Date:</strong> 2007-04-17 16:55:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3081.php">Michael Gauckler: "Re: [OMPI users] Open MPI - Signal: Segmentation fault (11) Problem"</a>
<li><strong>Previous message:</strong> <a href="3079.php">Michael: "[OMPI users] OpenMPI 1.1.4 vs. 1.2"</a>
<li><strong>In reply to:</strong> <a href="3079.php">Michael: "[OMPI users] OpenMPI 1.1.4 vs. 1.2"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There were several improvements for TCP in the 1.2. We expect it to  
<br>
behave in a more optimized way compared with the 1.1.x. Can you share  
<br>
your code so I can take a look to see what's happening ?
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Apr 17, 2007, at 4:30 PM, Michael wrote:
<br>
<p><span class="quotelev1">&gt; To maintain compatibility with a major HPC center I upgraded(?) from
</span><br>
<span class="quotelev1">&gt; OpenMPI 1.1.4 to OpenMPI 1.2 on my local cluster.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In testing on my local cluster, 13 dual-Opteron Linux boxes with dual
</span><br>
<span class="quotelev1">&gt; gigabit ethernet, I discovered that my program runs slower using
</span><br>
<span class="quotelev1">&gt; OpenMPI 1.2 then OpenMPI 1.1.4 (780.3 versus 402.4 seconds with 3
</span><br>
<span class="quotelev1">&gt; processes--tested twice to be certain).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This particular version of my program was designed to minimize the
</span><br>
<span class="quotelev1">&gt; amount of communications and the only MPI calls that get used a lot
</span><br>
<span class="quotelev1">&gt; are MPI_SEND and MPI_RECV with MPI_PACKED data (so MPI_PACK and
</span><br>
<span class="quotelev1">&gt; MPI_UNPACK also get used a lot).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Was there a known problem with OpenMPI 1.2 (r14027) and ethernet
</span><br>
<span class="quotelev1">&gt; communication that got fixed later?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The same executable run at the major center seems fine, but they have
</span><br>
<span class="quotelev1">&gt; Myrinet.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Michael
</span><br>
<span class="quotelev1">&gt;
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
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3080/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3081.php">Michael Gauckler: "Re: [OMPI users] Open MPI - Signal: Segmentation fault (11) Problem"</a>
<li><strong>Previous message:</strong> <a href="3079.php">Michael: "[OMPI users] OpenMPI 1.1.4 vs. 1.2"</a>
<li><strong>In reply to:</strong> <a href="3079.php">Michael: "[OMPI users] OpenMPI 1.1.4 vs. 1.2"</a>
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
