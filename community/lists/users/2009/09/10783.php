<?
$subject_val = "Re: [OMPI users] Is there an &quot;flush()&quot;-like function in MPI?";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Sep 26 14:05:44 2009" -->
<!-- isoreceived="20090926180544" -->
<!-- sent="Sun, 27 Sep 2009 02:05:40 +0800" -->
<!-- isosent="20090926180540" -->
<!-- name="guosong" -->
<!-- email="guosong1079_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Is there an &amp;quot;flush()&amp;quot;-like function in MPI?" -->
<!-- id="COL102-W24F6DDD133D44F63814158A8D80_at_phx.gbl" -->
<!-- charset="gb2312" -->
<!-- inreplyto="4ABE56C1.9000700_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Is there an &quot;flush()&quot;-like function in MPI?<br>
<strong>From:</strong> guosong (<em>guosong1079_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-26 14:05:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10784.php">Jonathan Dursi: "[OMPI users] Looped Barrier/Sendrecv hangs with btl sml: OMP1.3.3, 1.3.2, gcc44, intel 11"</a>
<li><strong>Previous message:</strong> <a href="10782.php">Eugene Loh: "Re: [OMPI users] Is there an &quot;flush()&quot;-like function in MPI?"</a>
<li><strong>In reply to:</strong> <a href="10782.php">Eugene Loh: "Re: [OMPI users] Is there an &quot;flush()&quot;-like function in MPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10786.php">Ashley Pittman: "Re: [OMPI users] Is there an &quot;flush()&quot;-like function in MPI?"</a>
<li><strong>Reply:</strong> <a href="10786.php">Ashley Pittman: "Re: [OMPI users] Is there an &quot;flush()&quot;-like function in MPI?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, I know there should be a bug. But I do not know where and why. The strange thing was sometimes it worked but at this time there will be a segmentation fault. If it did not work, some process must sit there waiting for the message. There are many iterations in my program(using a loop). It would after a few iterations the &quot;bug&quot; would appear, which means the previous a few iterations the communication worked. I am quite comfused now.
<br>
&nbsp;
<br>
<p><p>Date: Sat, 26 Sep 2009 11:00:33 -0700
<br>
From: Eugene.Loh_at_[hidden]
<br>
To: users_at_[hidden]
<br>
Subject: Re: [OMPI users] Is there an &quot;flush()&quot;-like function in MPI?
<br>
<p>guosong wrote: 
<br>
<p><p>Thanks for reply. One more thing I would like to know is that since the message has already left the sender, how to make sure that the receiver side receives this message? From the output of my program, it seems that the receiver side is waiting for the message(MPI_Recv).  
<br>
You mean how the sender can be sure to push the message all the way over to the receiver?  In practical terms, if the sender completes its send, the receiver should be able to poll and (in short order) see the message.  Sounds like you have a bug.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
_________________________________________________________________
<br>
Messenger&#176;&#178;&#200;&#171;&#177;&#163;&#187;&#164;&#214;&#208;&#208;&#196;&#163;&#172;&#195;&#226;&#183;&#209;&#208;&#222;&#184;&#180;&#207;&#181;&#205;&#179;&#194;&#169;&#182;&#180;&#163;&#172;&#177;&#163;&#187;&#164;Messenger&#176;&#178;&#200;&#171;&#163;&#161;
<br>
<a href="http://im.live.cn/safe/">http://im.live.cn/safe/</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10783/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10784.php">Jonathan Dursi: "[OMPI users] Looped Barrier/Sendrecv hangs with btl sml: OMP1.3.3, 1.3.2, gcc44, intel 11"</a>
<li><strong>Previous message:</strong> <a href="10782.php">Eugene Loh: "Re: [OMPI users] Is there an &quot;flush()&quot;-like function in MPI?"</a>
<li><strong>In reply to:</strong> <a href="10782.php">Eugene Loh: "Re: [OMPI users] Is there an &quot;flush()&quot;-like function in MPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10786.php">Ashley Pittman: "Re: [OMPI users] Is there an &quot;flush()&quot;-like function in MPI?"</a>
<li><strong>Reply:</strong> <a href="10786.php">Ashley Pittman: "Re: [OMPI users] Is there an &quot;flush()&quot;-like function in MPI?"</a>
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
