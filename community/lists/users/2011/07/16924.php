<?
$subject_val = "Re: [OMPI users] Mixed Mellanox and Qlogic problems";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 14 20:22:02 2011" -->
<!-- isoreceived="20110715002202" -->
<!-- sent="Thu, 14 Jul 2011 17:21:54 -0700" -->
<!-- isosent="20110715002154" -->
<!-- name="David Warren" -->
<!-- email="warren_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Mixed Mellanox and Qlogic problems" -->
<!-- id="4E1F8822.70309_at_atmos.washington.edu" -->
<!-- charset="utf-8" -->
<!-- inreplyto="4D8D3673-78FA-4713-A3AB-61E658A5F998_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Mixed Mellanox and Qlogic problems<br>
<strong>From:</strong> David Warren (<em>warren_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-14 20:21:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16925.php">dave fournier: "Re: [OMPI users] MPI_Isend delay"</a>
<li><strong>Previous message:</strong> <a href="16923.php">Jeff Squyres: "Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE."</a>
<li><strong>In reply to:</strong> <a href="16917.php">Jeff Squyres: "Re: [OMPI users] Mixed Mellanox and Qlogic problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16938.php">Jeff Squyres: "Re: [OMPI users] Mixed Mellanox and Qlogic problems"</a>
<li><strong>Reply:</strong> <a href="16938.php">Jeff Squyres: "Re: [OMPI users] Mixed Mellanox and Qlogic problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On my test runs (wrf run just long enough to go beyond the spinup influence)
<br>
On just 6 of the the old mlx4 machines I get about 00:05:30 runtime
<br>
On 3 mlx4 and 3 qib nodes I get avg of 00:06:20
<br>
So the slow down is about 11+%
<br>
When this is a full run 11% becomes a evry long time.  This has held for 
<br>
some longer tests as well before I went to ofed 1.6.
<br>
<p>On 07/14/11 05:55, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Jul 13, 2011, at 7:46 PM, David Warren wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    
</span><br>
<span class="quotelev2">&gt;&gt; I finally got access to the systems again (the original ones are part of our real time system). I thought I would try one other test I had set up first.  I went to OFED 1.6 and it started running with no errors. It must have been an OFED bug. Now I just have the speed problem. Anyone have a way to make the mixture of mlx4 and qlogic work together without slowing down?
</span><br>
<span class="quotelev2">&gt;&gt;      
</span><br>
<span class="quotelev1">&gt; What do you mean by &quot;slowing down&quot;?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    
</span><br>
<p><!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16925.php">dave fournier: "Re: [OMPI users] MPI_Isend delay"</a>
<li><strong>Previous message:</strong> <a href="16923.php">Jeff Squyres: "Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE."</a>
<li><strong>In reply to:</strong> <a href="16917.php">Jeff Squyres: "Re: [OMPI users] Mixed Mellanox and Qlogic problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16938.php">Jeff Squyres: "Re: [OMPI users] Mixed Mellanox and Qlogic problems"</a>
<li><strong>Reply:</strong> <a href="16938.php">Jeff Squyres: "Re: [OMPI users] Mixed Mellanox and Qlogic problems"</a>
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
