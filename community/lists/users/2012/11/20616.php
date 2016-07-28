<?
$subject_val = "Re: [OMPI users] 2 GB limitation of MPI_File_write_all";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  1 18:21:35 2012" -->
<!-- isoreceived="20121101222135" -->
<!-- sent="Thu, 1 Nov 2012 18:21:25 -0400" -->
<!-- isosent="20121101222125" -->
<!-- name="Richard Shaw" -->
<!-- email="jrs65_at_[hidden]" -->
<!-- subject="Re: [OMPI users] 2 GB limitation of MPI_File_write_all" -->
<!-- id="769BB7C3460E4747BAF340B9BAB4B0D0_at_gmail.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAHwLALOaWgqwR1qjTdY_7bmO28FpYvX-HQ4whHE4Wh_AooKTgw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] 2 GB limitation of MPI_File_write_all<br>
<strong>From:</strong> Richard Shaw (<em>jrs65_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-01 18:21:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20617.php">David Turner: "[OMPI users] limiting tasks/ranks"</a>
<li><strong>Previous message:</strong> <a href="20615.php">marco atzeri: "Re: [OMPI users] tester for cygwin openmpi-1.6.3 package"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/10/20514.php">Rayson Ho: "Re: [OMPI users] 2 GB limitation of MPI_File_write_all"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Rayson, 
<br>
<p>Just seen this.
<br>
<p>In the end we've worked around it, by creating successive views of the file that are all else than 2GB and then offsetting them to eventually read in everything. It's a bit of a pain to keep track of, but it works at the moment.
<br>
<p>I was intending on following your hints and trying to fix the bug myself, but I've been short on time so haven't gotten around to it yet.
<br>
<p>Richard 
<br>
<p><p>On Saturday, 20 October, 2012 at 10:12 AM, Rayson Ho wrote:
<br>
<p><span class="quotelev1">&gt; Hi Eric,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sounds like it's also related to this problem reported by Scinet back in July:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2012/07/19762.php">http://www.open-mpi.org/community/lists/users/2012/07/19762.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And I think I found the issue, but I still have not followed up with
</span><br>
<span class="quotelev1">&gt; the ROMIO guys yet. And I was not sure if Scinet was waiting for the
</span><br>
<span class="quotelev1">&gt; fix or not - next time I visit U of Toronto, I will see if I can visit
</span><br>
<span class="quotelev1">&gt; the Scinet office and meet with the Scinet guys!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
&nbsp;
<br>
<p><p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20616/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20617.php">David Turner: "[OMPI users] limiting tasks/ranks"</a>
<li><strong>Previous message:</strong> <a href="20615.php">marco atzeri: "Re: [OMPI users] tester for cygwin openmpi-1.6.3 package"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/10/20514.php">Rayson Ho: "Re: [OMPI users] 2 GB limitation of MPI_File_write_all"</a>
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
