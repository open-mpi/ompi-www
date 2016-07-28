<?
$subject_val = "Re: [OMPI users] MPI-I/O issues";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug  6 14:39:59 2014" -->
<!-- isoreceived="20140806183959" -->
<!-- sent="Wed, 06 Aug 2014 13:39:53 -0500" -->
<!-- isosent="20140806183953" -->
<!-- name="Mohamad Chaarawi" -->
<!-- email="mschaara_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI-I/O issues" -->
<!-- id="53E27679.6000703_at_cs.uh.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="53E274AF.1040606_at_mcs.anl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI-I/O issues<br>
<strong>From:</strong> Mohamad Chaarawi (<em>mschaara_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-06 14:39:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24934.php">Rob Latham: "Re: [OMPI users] MPI-I/O issues"</a>
<li><strong>Previous message:</strong> <a href="24932.php">Rob Latham: "Re: [OMPI users] MPI-I/O issues"</a>
<li><strong>In reply to:</strong> <a href="24932.php">Rob Latham: "Re: [OMPI users] MPI-I/O issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24934.php">Rob Latham: "Re: [OMPI users] MPI-I/O issues"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Rob,
<br>
<p>On 8/6/2014 1:32 PM, Rob Latham wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 08/06/2014 11:50 AM, Mohamad Chaarawi wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If I use mpich 3.1.2 , I don't see those issues.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What Mohamad forgot to tell you is that he doesn't see those issues 
</span><br>
<span class="quotelev1">&gt; because I patched them on monday.
</span><br>
<p>If I understood right, your patch was to fix the hindexed_block type in 
<br>
ROMIO.. However the failure in OMPI was in the datatype creation itself, 
<br>
which doesn't have to do with ROMIO or mpich.
<br>
<p>The other issue I reported (with using 0 sized datatypes for some 
<br>
processes), worked with an unpatched version of mpich 3.1.2 (I think), 
<br>
since I was using hindexed and hvector (not hindexed_block).
<br>
<p>Note that the replicator I have here is slightly different from the one 
<br>
I sent a few days ago.
<br>
<p>Thanks,
<br>
Mohamad
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ROMIO has some HINDEXED_BLOCK fixes that OMPI should pick up on the 
</span><br>
<span class="quotelev1">&gt; next romio resync.  You are on your own with ompio!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ==rob
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24934.php">Rob Latham: "Re: [OMPI users] MPI-I/O issues"</a>
<li><strong>Previous message:</strong> <a href="24932.php">Rob Latham: "Re: [OMPI users] MPI-I/O issues"</a>
<li><strong>In reply to:</strong> <a href="24932.php">Rob Latham: "Re: [OMPI users] MPI-I/O issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24934.php">Rob Latham: "Re: [OMPI users] MPI-I/O issues"</a>
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
