<?
$subject_val = "Re: [OMPI users] Myrinet optimization with OMP1.3 and macosX";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  6 13:31:31 2009" -->
<!-- isoreceived="20090506173131" -->
<!-- sent="Wed, 6 May 2009 13:31:26 -0400" -->
<!-- isosent="20090506173126" -->
<!-- name="Scott Atchley" -->
<!-- email="atchley_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Myrinet optimization with OMP1.3 and macosX" -->
<!-- id="94EBB3FF-0A81-45B0-883A-4F82352FEE9D_at_myri.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="ebd2bd0b0905040754k13c3e72br55ccfb8abdbb5262_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Myrinet optimization with OMP1.3 and macosX<br>
<strong>From:</strong> Scott Atchley (<em>atchley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-06 13:31:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9240.php">Jeff Squyres: "Re: [OMPI users] LSF launch with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="9238.php">Ken Cain: "Re: [OMPI users] OMPI-1.3.2, openib/iWARP(cxgb3) problem: PML add procs failed (Unreachable)"</a>
<li><strong>In reply to:</strong> <a href="9187.php">Ricardo Fern&#225;ndez-Perea: "Re: [OMPI users] Myrinet optimization with OMP1.3 and macosX"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9250.php">Ricardo Fernández-Perea: "Re: [OMPI users] Myrinet optimization with OMP1.3 and macosX"</a>
<li><strong>Reply:</strong> <a href="9250.php">Ricardo Fernández-Perea: "Re: [OMPI users] Myrinet optimization with OMP1.3 and macosX"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 4, 2009, at 10:54 AM, Ricardo Fern&#225;ndez-Perea wrote:
<br>
<p><span class="quotelev1">&gt; I finally have opportunity to run the imb-3.2 benchmark over myrinet  
</span><br>
<span class="quotelev1">&gt; I am running in a cluster of 16 node Xservers connected with myrinet  
</span><br>
<span class="quotelev1">&gt; 15 of them are 8core ones and the last one is a 4 cores one. Having  
</span><br>
<span class="quotelev1">&gt; a limit of 124 process
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have run the test with the bynode option so from the 2 to the 16  
</span><br>
<span class="quotelev1">&gt; process test is always running 1 process by node.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; the following test  pingpong, pingping, sendrecv, exchange presents  
</span><br>
<span class="quotelev1">&gt; a strong drop in performance with the 64k packet size.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; any idea where I should look for the cause.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ricardo
</span><br>
<p>Hi Ricardo,
<br>
<p>I believe that the pingpong results show the drop that you are  
<br>
experiencing. There is a drop at 64 KB and 128 KB and it returns to  
<br>
the same level at 128 KB.
<br>
<p>What you are seeing in the pingpong results is the change over from  
<br>
eager to rendezvous within MX. Up to 32 KB, we use an eager protocol  
<br>
(send the data even if there is not a posted receive). After 32 KB, we  
<br>
switch to a rendezvous protocol.
<br>
<p>I do not believe that this limit can be changed. Have you tried the  
<br>
same application when using the MX BTL?
<br>
<p>Scott
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9240.php">Jeff Squyres: "Re: [OMPI users] LSF launch with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="9238.php">Ken Cain: "Re: [OMPI users] OMPI-1.3.2, openib/iWARP(cxgb3) problem: PML add procs failed (Unreachable)"</a>
<li><strong>In reply to:</strong> <a href="9187.php">Ricardo Fern&#225;ndez-Perea: "Re: [OMPI users] Myrinet optimization with OMP1.3 and macosX"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9250.php">Ricardo Fernández-Perea: "Re: [OMPI users] Myrinet optimization with OMP1.3 and macosX"</a>
<li><strong>Reply:</strong> <a href="9250.php">Ricardo Fernández-Perea: "Re: [OMPI users] Myrinet optimization with OMP1.3 and macosX"</a>
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
