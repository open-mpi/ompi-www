<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Aug 15 17:40:29 2006" -->
<!-- isoreceived="20060815214029" -->
<!-- sent="Tue, 15 Aug 2006 15:40:27 -0600" -->
<!-- isosent="20060815214027" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Testing 1-sided MPI again" -->
<!-- id="1155678027.23025.55.camel_at_boxtop.lanl.gov" -->
<!-- inreplyto="44E23B98.704_at_reachone.com" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-08-15 17:40:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1747.php">Andrew J Caird: "[OMPI users] C++ error: static object marked for destruction more than once"</a>
<li><strong>Previous message:</strong> <a href="1745.php">Tom Rosmond: "[OMPI users] Testing 1-sided MPI again"</a>
<li><strong>In reply to:</strong> <a href="1745.php">Tom Rosmond: "[OMPI users] Testing 1-sided MPI again"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1806.php">Robert Latham: "Re: [OMPI users] pvfs2 and romio"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, 2006-08-15 at 14:24 -0700, Tom Rosmond wrote:
<br>
<span class="quotelev1">&gt; I am continuing to test the MPI-2 features of 1.1, and have run into 
</span><br>
<span class="quotelev1">&gt; some puzzling behavior. I wrote a simple F90 program to test 'mpi_put' 
</span><br>
<span class="quotelev1">&gt; and 'mpi_get' on a coordinate transformation problem on a two dual-core 
</span><br>
<span class="quotelev1">&gt; processor Opteron workstation running the PGI 6.1 compiler. The program 
</span><br>
<span class="quotelev1">&gt; runs correctly for a variety of problem sizes and processor counts.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, my main interest is a large global weather prediction model 
</span><br>
<span class="quotelev1">&gt; that has been running in production with 1-sided message passing on an 
</span><br>
<span class="quotelev1">&gt; SGI Origin 3000 for several years. This code does not run with OMPI 
</span><br>
<span class="quotelev1">&gt; 1-sided message passing. I have investigated the difference between this 
</span><br>
<span class="quotelev1">&gt; code and the test program and noticed a critical difference. Both 
</span><br>
<span class="quotelev1">&gt; programs call 'mpi_win_create' to create an integer 'handle' to the RMA 
</span><br>
<span class="quotelev1">&gt; window used by 'mpi_put' and 'mpi_get'. In the test program this 
</span><br>
<span class="quotelev1">&gt; 'handle' returns with a value of '1', but in the large code the 'handle' 
</span><br>
<span class="quotelev1">&gt; returns with value '0'. Subsequent synchronization calls to 
</span><br>
<span class="quotelev1">&gt; 'mpi_win_fence' succeed in the small program (error status eq 0), while 
</span><br>
<span class="quotelev1">&gt; in the large code they fail (error status ne 0), and the transfers fail 
</span><br>
<span class="quotelev1">&gt; also (no data is passed).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Do you have any suggestions on what could cause this difference in 
</span><br>
<span class="quotelev1">&gt; behavior between the two codes, specifically why the 'handles' have 
</span><br>
<span class="quotelev1">&gt; different values? Are there any diagnostics I could produce that would 
</span><br>
<span class="quotelev1">&gt; provide information?
</span><br>
<p>The difference in handle values is irrelevant to the failures you are
<br>
seeing.  Our handle 0 is MPI_WIN_NULL, so you should never see that
<br>
returned from MPI_WIN_CREATE.
<br>
<p>Unfortunately, when I wrote the one-sided implementation, I didn't add
<br>
useful debugging messages the user can enable.  I can add some and make
<br>
a tarball, if you would be willing to give it a try.  What error
<br>
messages are coming out of the large code?
<br>
<p>By the way, just to make sure your expectations are set correctly, Open
<br>
MPI's one-sided performance in v1.1 and v1.2 is bad, as it's implemented
<br>
over the point-to-point engine.  You're not going to get Origin-like
<br>
performance out of the current implementation.
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1747.php">Andrew J Caird: "[OMPI users] C++ error: static object marked for destruction more than once"</a>
<li><strong>Previous message:</strong> <a href="1745.php">Tom Rosmond: "[OMPI users] Testing 1-sided MPI again"</a>
<li><strong>In reply to:</strong> <a href="1745.php">Tom Rosmond: "[OMPI users] Testing 1-sided MPI again"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1806.php">Robert Latham: "Re: [OMPI users] pvfs2 and romio"</a>
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
