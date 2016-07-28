<?
$subject_val = "Re: [OMPI users] InfiniBand path migration not working";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  8 10:44:28 2012" -->
<!-- isoreceived="20120308154428" -->
<!-- sent="Thu, 8 Mar 2012 10:44:22 -0500" -->
<!-- isosent="20120308154422" -->
<!-- name="Shamis, Pavel" -->
<!-- email="shamisp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] InfiniBand path migration not working" -->
<!-- id="4C9FF481-2934-4888-926C-25B462BD5A4C_at_ornl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CA+tOgLGngBccOkHi5YC9m5U62buDDeJ2+FoUjcjo9=Rd0nzchA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] InfiniBand path migration not working<br>
<strong>From:</strong> Shamis, Pavel (<em>shamisp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-08 10:44:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18714.php">Linton, Tom: "[OMPI users] Illegal Instruction on Checkpoint with BLCR"</a>
<li><strong>Previous message:</strong> <a href="18712.php">Kharche, Sanjay: "Re: [OMPI users] parallelising ADI"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/02/18622.php">Jeremy: "Re: [OMPI users] InfiniBand path migration not working"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18721.php">Jeremy: "Re: [OMPI users] InfiniBand path migration not working"</a>
<li><strong>Reply:</strong> <a href="18721.php">Jeremy: "Re: [OMPI users] InfiniBand path migration not working"</a>
<li><strong>Reply:</strong> <a href="18735.php">Yevgeny Kliteynik: "Re: [OMPI users] InfiniBand path migration not working"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeremy,
<br>
Finally I had a chance to look at log file.
<br>
<p>Initially all qps are created on port 1, and in the same time alternative path loaded (ports 2, lids 4 and 2 ). I guess in some point you switch off port 1, APM even is reported because the alternative path is active now, and from some reason IB message is dropped.
<br>
<p>You may ignore the APM warning. Essentially since the alternative path is active now, it is trying to see if OMPI may pre-load next good path for potential future failure on port 2. Since port 3 does not exist it reports the warning.
<br>
<p>My educated guess is that from some reason it is no direct connection path between lid-2 and lid-4. To prove it we have to look and the OpenSM routing information.
<br>
<p>On the mail list we have a representative from Mellanox that should be able to help us extract the routing information.
<br>
<p>Evgeny,
<br>
<p>Can you please help ?
<br>
<p><p>Regards,
<br>
<p>Pavel (Pasha) Shamis
<br>
<pre>
---
Application Performance Tools Group
Computer Science and Math Division
Oak Ridge National Laboratory
On Feb 29, 2012, at 5:38 PM, Jeremy wrote:
&gt; Hi Pasha,
&gt; 
&gt;&gt; On Wed, Feb 29, 2012 at 11:02 AM, Shamis, Pavel &lt;shamisp_at_[hidden]&gt; wrote:
&gt;&gt; 
&gt;&gt; I would like to see all the file.
&gt;&gt; 28MB is it the size after compression ?
&gt;&gt; 
&gt;&gt; I think gmail supports up to 25Mb.
&gt;&gt; You may try to create gzip file and then slice it using &quot;split&quot; command.
&gt; 
&gt; See attached. At about line 151311 is when I unplugged the cable from
&gt; Port 1. Then I see the APM error message at about line 178905.
&gt; 
&gt; Thanks,
&gt; 
&gt; -Jeremy
&gt; &lt;debug.txt.bz2&gt;_______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18714.php">Linton, Tom: "[OMPI users] Illegal Instruction on Checkpoint with BLCR"</a>
<li><strong>Previous message:</strong> <a href="18712.php">Kharche, Sanjay: "Re: [OMPI users] parallelising ADI"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/02/18622.php">Jeremy: "Re: [OMPI users] InfiniBand path migration not working"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18721.php">Jeremy: "Re: [OMPI users] InfiniBand path migration not working"</a>
<li><strong>Reply:</strong> <a href="18721.php">Jeremy: "Re: [OMPI users] InfiniBand path migration not working"</a>
<li><strong>Reply:</strong> <a href="18735.php">Yevgeny Kliteynik: "Re: [OMPI users] InfiniBand path migration not working"</a>
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
