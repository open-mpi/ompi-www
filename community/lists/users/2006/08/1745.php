<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Aug 15 17:19:22 2006" -->
<!-- isoreceived="20060815211922" -->
<!-- sent="Tue, 15 Aug 2006 14:24:40 -0700" -->
<!-- isosent="20060815212440" -->
<!-- name="Tom Rosmond" -->
<!-- email="rosmond_at_[hidden]" -->
<!-- subject="[OMPI users] Testing 1-sided MPI again" -->
<!-- id="44E23B98.704_at_reachone.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1155570836.8618.18.camel_at_boxtop.lanl.gov" -->
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
<strong>From:</strong> Tom Rosmond (<em>rosmond_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-08-15 17:24:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1746.php">Brian Barrett: "Re: [OMPI users] Testing 1-sided MPI again"</a>
<li><strong>Previous message:</strong> <a href="1744.php">Joachim Worringen: "[OMPI users] EuroPVM/MPI 2006: Early Registation Deadline ahead!"</a>
<li><strong>In reply to:</strong> <a href="1743.php">Brian Barrett: "Re: [OMPI users] pvfs2 and romio"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1746.php">Brian Barrett: "Re: [OMPI users] Testing 1-sided MPI again"</a>
<li><strong>Reply:</strong> <a href="1746.php">Brian Barrett: "Re: [OMPI users] Testing 1-sided MPI again"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am continuing to test the MPI-2 features of 1.1, and have run into 
<br>
some puzzling behavior. I wrote a simple F90 program to test 'mpi_put' 
<br>
and 'mpi_get' on a coordinate transformation problem on a two dual-core 
<br>
processor Opteron workstation running the PGI 6.1 compiler. The program 
<br>
runs correctly for a variety of problem sizes and processor counts.
<br>
<p>However, my main interest is a large global weather prediction model 
<br>
that has been running in production with 1-sided message passing on an 
<br>
SGI Origin 3000 for several years. This code does not run with OMPI 
<br>
1-sided message passing. I have investigated the difference between this 
<br>
code and the test program and noticed a critical difference. Both 
<br>
programs call 'mpi_win_create' to create an integer 'handle' to the RMA 
<br>
window used by 'mpi_put' and 'mpi_get'. In the test program this 
<br>
'handle' returns with a value of '1', but in the large code the 'handle' 
<br>
returns with value '0'. Subsequent synchronization calls to 
<br>
'mpi_win_fence' succeed in the small program (error status eq 0), while 
<br>
in the large code they fail (error status ne 0), and the transfers fail 
<br>
also (no data is passed).
<br>
<p>Do you have any suggestions on what could cause this difference in 
<br>
behavior between the two codes, specifically why the 'handles' have 
<br>
different values? Are there any diagnostics I could produce that would 
<br>
provide information?
<br>
<p>T. Rosmond
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1746.php">Brian Barrett: "Re: [OMPI users] Testing 1-sided MPI again"</a>
<li><strong>Previous message:</strong> <a href="1744.php">Joachim Worringen: "[OMPI users] EuroPVM/MPI 2006: Early Registation Deadline ahead!"</a>
<li><strong>In reply to:</strong> <a href="1743.php">Brian Barrett: "Re: [OMPI users] pvfs2 and romio"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1746.php">Brian Barrett: "Re: [OMPI users] Testing 1-sided MPI again"</a>
<li><strong>Reply:</strong> <a href="1746.php">Brian Barrett: "Re: [OMPI users] Testing 1-sided MPI again"</a>
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
