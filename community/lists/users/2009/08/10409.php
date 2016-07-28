<?
$subject_val = "Re: [OMPI users] How to make a job abort when one host dies?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 18 11:35:29 2009" -->
<!-- isoreceived="20090818153529" -->
<!-- sent="Tue, 18 Aug 2009 11:35:16 -0400" -->
<!-- isosent="20090818153516" -->
<!-- name="Scott Atchley" -->
<!-- email="atchley_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to make a job abort when one host dies?" -->
<!-- id="76DBCC48-39FB-4B17-B139-665947EEB0DB_at_myri.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4A8AC1CD.3010904_at_lysator.liu.se" -->
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
<strong>Subject:</strong> Re: [OMPI users] How to make a job abort when one host dies?<br>
<strong>From:</strong> Scott Atchley (<em>atchley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-18 11:35:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10410.php">Jean Potsam: "[OMPI users] OPEN MPI with self"</a>
<li><strong>Previous message:</strong> <a href="10408.php">Oskar Enoksson: "Re: [OMPI users] How to make a job abort when one host dies?"</a>
<li><strong>In reply to:</strong> <a href="10408.php">Oskar Enoksson: "Re: [OMPI users] How to make a job abort when one host dies?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10417.php">Patrick Geoffray: "Re: [OMPI users] How to make a job abort when one host dies?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 18, 2009, at 10:59 AM, Oskar Enoksson wrote:
<br>
<p><span class="quotelev2">&gt;&gt; The question is, however, why is cl120 not acking messages? What  
</span><br>
<span class="quotelev2">&gt;&gt; is  the application? What MPI calls does this application use?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Scott
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The reason in this case was that cl120 had some kind of hardware  
</span><br>
<span class="quotelev1">&gt; problem, perhaps memory error or myrinet NIC hardware error. The  
</span><br>
<span class="quotelev1">&gt; system hung.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I will try MX_ZOMBIE_SEND=0, thanks for the hint!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But still I'm curious, is there no way to have some kind of time out  
</span><br>
<span class="quotelev1">&gt; time limit on the waiting hosts? E.g. one hour?
</span><br>
<p>There is a send timeout in MX. There is no receive timeout in MPI or MX.
<br>
<p>The application could add pending receives with a timestamp to a  
<br>
pending queue and walk the queue periodically. If it finds a receive  
<br>
that has exceeded the application's threshold, it could call  
<br>
MPI_Cancel().
<br>
<p>Scott
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10410.php">Jean Potsam: "[OMPI users] OPEN MPI with self"</a>
<li><strong>Previous message:</strong> <a href="10408.php">Oskar Enoksson: "Re: [OMPI users] How to make a job abort when one host dies?"</a>
<li><strong>In reply to:</strong> <a href="10408.php">Oskar Enoksson: "Re: [OMPI users] How to make a job abort when one host dies?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10417.php">Patrick Geoffray: "Re: [OMPI users] How to make a job abort when one host dies?"</a>
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
