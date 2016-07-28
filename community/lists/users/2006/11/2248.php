<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Nov 29 08:44:18 2006" -->
<!-- isoreceived="20061129134418" -->
<!-- sent="Wed, 29 Nov 2006 08:44:15 -0500" -->
<!-- isosent="20061129134415" -->
<!-- name="Scott Atchley" -->
<!-- email="atchley_at_[hidden]" -->
<!-- subject="Re: [OMPI users] myirnet problems on OSX" -->
<!-- id="1DE42E16-7325-4289-9961-EE307AD3E257_at_myri.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C0DDDAB2-F940-4BE2-987F-EE1A9819FCE1_at_umich.edu" -->
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
<strong>From:</strong> Scott Atchley (<em>atchley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-29 08:44:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2249.php">Jeff Squyres: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
<li><strong>Previous message:</strong> <a href="2247.php">Laurent.POREZ_at_[hidden]: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
<li><strong>In reply to:</strong> <a href="2200.php">Brock Palen: "[OMPI users] myirnet problems on OSX"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2251.php">Scott Atchley: "Re: [OMPI users] myirnet problems on OSX"</a>
<li><strong>Reply:</strong> <a href="2251.php">Scott Atchley: "Re: [OMPI users] myirnet problems on OSX"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 21, 2006, at 1:27 PM, Brock Palen wrote:
<br>
<p><span class="quotelev1">&gt; I had sent a message two weeks ago about this problem and talked with
</span><br>
<span class="quotelev1">&gt; jeff at SC06 about how it might not be a OMPI problem.  But it
</span><br>
<span class="quotelev1">&gt; appears now working with myricom that it is a problem in both
</span><br>
<span class="quotelev1">&gt; lam-7.1.2 and openmpi-1.1.2/1.1.1.   Basically the results from a HPL
</span><br>
<span class="quotelev1">&gt; run are wrong,  Also causes a large number of packets to be dropped
</span><br>
<span class="quotelev1">&gt; by the fabric.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This problem does not happen when using mpichgm.  The number of
</span><br>
<span class="quotelev1">&gt; dropped packets does not go up.  There is a ticket open with myircom
</span><br>
<span class="quotelev1">&gt; on this.  They are a member of the group working on OMPI but i sent
</span><br>
<span class="quotelev1">&gt; this out just to bring the list uptodate.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you have any questions feel free to ask me.  The details are in
</span><br>
<span class="quotelev1">&gt; the archive.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brock Palen
</span><br>
<p>Hi all,
<br>
<p>I am working on this ticket at Myricom.
<br>
<p>I am using Linux nodes since we do not have two OSX machines running  
<br>
10.3 available. Each has 1 GB of RAM and two Myrinet PCI-X cards, a  
<br>
single-port D card and a dual-port E card. I have disabled the E  
<br>
card. I am using GM-2.0.26. I am also using Open-MPI 1.2b1.
<br>
<p>I am running HPCC which includes HPL as well as other benchmarks.  
<br>
Using Brock's HPL.dat values in my hpccinf.txt, I do not see any  
<br>
failed HPL runs. I do see some runs hang and require a reboot (the  
<br>
machine is unresponsive), but it may happen in the HPL portion of the  
<br>
run or it may happen in another benchmark.
<br>
<p>My last few runs all completed successfully without hanging. The job  
<br>
I am currently running just hung one node (can respond to ping,  
<br>
cannot ssh into it, cannot use any terminals connected to it).
<br>
<p>There are no messages in dmesg and vmstat shows that the node is not  
<br>
swapping (before it hung).
<br>
<p>Any ideas where I should look next?
<br>
<p>Scott
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2249.php">Jeff Squyres: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
<li><strong>Previous message:</strong> <a href="2247.php">Laurent.POREZ_at_[hidden]: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
<li><strong>In reply to:</strong> <a href="2200.php">Brock Palen: "[OMPI users] myirnet problems on OSX"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2251.php">Scott Atchley: "Re: [OMPI users] myirnet problems on OSX"</a>
<li><strong>Reply:</strong> <a href="2251.php">Scott Atchley: "Re: [OMPI users] myirnet problems on OSX"</a>
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
