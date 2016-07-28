<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Oct 12 16:48:07 2006" -->
<!-- isoreceived="20061012204807" -->
<!-- sent="Thu, 12 Oct 2006 16:47:54 -0400" -->
<!-- isosent="20061012204754" -->
<!-- name="Michael Kluskens" -->
<!-- email="mklus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] BLACS Mac OS X" -->
<!-- id="78FE7A13-D41A-4581-AF82-FEA0D2B7B41F_at_ieee.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="6139E8BE-065E-42C7-8D34-37AF1267B6F7_at_apple.com" -->
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
<strong>From:</strong> Michael Kluskens (<em>mklus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-12 16:47:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1975.php">Adam Moody: "[OMPI users] mca_oob_tcp_accept: accept() failed with errno 24"</a>
<li><strong>Previous message:</strong> <a href="1973.php">Warner Yuen: "[OMPI users] BLACS Mac OS X"</a>
<li><strong>In reply to:</strong> <a href="1973.php">Warner Yuen: "[OMPI users] BLACS Mac OS X"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 12, 2006, at 4:14 PM, Warner Yuen wrote:
<br>
<p><span class="quotelev1">&gt;  I've just built BLACS using the latest beta: openmpi-1.1.2rc4 as  
</span><br>
<span class="quotelev1">&gt; well as openmpi-1.1.1.
</span><br>
<p>1.1.2rc4 should be fine; however, I don't think a new version named  
<br>
1.1.1 was released and it should fail on some or all platforms.
<br>
<p><span class="quotelev1">&gt; I am getting the following error when running BLACS tester. Does  
</span><br>
<span class="quotelev1">&gt; anyone know what might be going on? It worked with other MPIs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np 2 ./xCbtest_MPI-OSX-0
</span><br>
<p>I don't think you should run BLACS tester with only 2 processes, I  
<br>
think the minimum is 4 processes, page 9 (Section 3) of the document  
<br>
&quot;Installing and Testing the BLACSv1.1.&quot;  Also have you installed  
<br>
patch 3 to BLACS?
<br>
<p><span class="quotelev1">&gt; Signal:10 info.si_errno:0(Unknown error: 0) si_code:1(BUS_ADRALN)
</span><br>
<span class="quotelev1">&gt; Failing at addr:0xe3
</span><br>
<span class="quotelev1">&gt; *** End of error message ***
</span><br>
<span class="quotelev1">&gt; Signal:10 info.si_errno:0(Unknown error: 0) si_code:1(BUS_ADRALN)
</span><br>
<span class="quotelev1">&gt; Failing at addr:0xe3
</span><br>
<span class="quotelev1">&gt; *** End of error message ***
</span><br>
<span class="quotelev1">&gt; 2 additional processes aborted (not shown)
</span><br>
<p>What is the text before this?
<br>
<p>Michael
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1975.php">Adam Moody: "[OMPI users] mca_oob_tcp_accept: accept() failed with errno 24"</a>
<li><strong>Previous message:</strong> <a href="1973.php">Warner Yuen: "[OMPI users] BLACS Mac OS X"</a>
<li><strong>In reply to:</strong> <a href="1973.php">Warner Yuen: "[OMPI users] BLACS Mac OS X"</a>
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
