<?
$subject_val = "Re: [OMPI users] Is there an &quot;flush()&quot;-like function in MPI?";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Sep 26 12:45:22 2009" -->
<!-- isoreceived="20090926164522" -->
<!-- sent="Sun, 27 Sep 2009 00:45:17 +0800" -->
<!-- isosent="20090926164517" -->
<!-- name="guosong" -->
<!-- email="guosong1079_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Is there an &amp;quot;flush()&amp;quot;-like function in MPI?" -->
<!-- id="COL102-W9338DBC5CD8EA7E4BAE22A8D80_at_phx.gbl" -->
<!-- charset="gb2312" -->
<!-- inreplyto="4ABE366B.50505_at_sun.com" -->
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
<strong>Date:</strong> 2009-09-26 12:45:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10782.php">Eugene Loh: "Re: [OMPI users] Is there an &quot;flush()&quot;-like function in MPI?"</a>
<li><strong>Previous message:</strong> <a href="10780.php">Eugene Loh: "[OMPI users] -slot-list -stride"</a>
<li><strong>In reply to:</strong> <a href="10779.php">Eugene Loh: "Re: [OMPI users] Is there an &quot;flush()&quot;-like function in MPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10782.php">Eugene Loh: "Re: [OMPI users] Is there an &quot;flush()&quot;-like function in MPI?"</a>
<li><strong>Reply:</strong> <a href="10782.php">Eugene Loh: "Re: [OMPI users] Is there an &quot;flush()&quot;-like function in MPI?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for reply. One more thing I would like to know is that since the message has already left the sender, how to make sure that the receiver side receives this message? From the output of my program, it seems that the receiver side is waiting for the message(MPI_Recv).  
<br>
&nbsp;
<br>
<p><p>Date: Sat, 26 Sep 2009 08:42:35 -0700
<br>
From: Eugene.Loh_at_[hidden]
<br>
To: users_at_[hidden]
<br>
Subject: Re: [OMPI users] Is there an &quot;flush()&quot;-like function in MPI?
<br>
<p>guosong wrote: 
<br>
<p><p>Hi all,
<br>
I am wondering if there is an flush()-like function in MPI. I saw the output of my program. One sent something but some other process did not receive it, just sitting there waiting. I used MPI_Isend for sending and MPI_Recv for receiving. Is it possible the message was lost or the message was not flushed out and was still in the I/O buffer. Thanks.
<br>
If you send with MPI_Isend, the send operation is started.  In order to complete the send, you need a corresponding MPI_Wait (or MPI_Test or variant like MPI_Waitall, etc.).
<br>
<p>Even then, it is possible for the MPI implementation to buffer the message internally.  That is, the completion of the send operation only means that the message has left the user's send buffer -- not that the message has been received at the other end.
<br>
<p>There are also synchronous sends such as MPI_Ssend (or the non-blocking variant MPI_Issend).  This guarantees that the send completes not only once the message has left the user's send buffer but only only once the receiver has posted a matching receive.  It does not, however, guarantee that the full message has arrived at or been received by the receiver.
<br>
<p>I think once you've completed the send (e.g., adding an MPI_Wait to your MPI_Isend), there is nothing more to do on the sender's side to push the message along.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
_________________________________________________________________
<br>
Messenger&#176;&#178;&#200;&#171;&#177;&#163;&#187;&#164;&#214;&#208;&#208;&#196;&#163;&#172;&#195;&#226;&#183;&#209;&#208;&#222;&#184;&#180;&#207;&#181;&#205;&#179;&#194;&#169;&#182;&#180;&#163;&#172;&#177;&#163;&#187;&#164;Messenger&#176;&#178;&#200;&#171;&#163;&#161;
<br>
<a href="http://im.live.cn/safe/">http://im.live.cn/safe/</a>
<br>
--_56d69769-e2f3-44e9-9918-e61012370c83_
<br>
Content-Type: text/html; charset=&quot;gb2312&quot;
<br>
Content-Transfer-Encoding: 8bit
<br>
<p>&lt;html&gt;
<br>
&lt;head&gt;
<br>
&lt;style&gt;&lt;!--
<br>
.hmmessage P
<br>
{
<br>
margin:0px;
<br>
padding:0px
<br>
}
<br>
body.hmmessage
<br>
{
<br>
font-size: 10pt;
<br>
font-family:Verdana
<br>
}
<br>
--&gt;&lt;/style&gt;
<br>
&lt;/head&gt;
<br>
&lt;body class='hmmessage'&gt;
<br>
Thanks for&amp;nbsp;reply.&amp;nbsp;One more thing I would like to know&amp;nbsp;is that since the message has already left the sender, how to make sure that the receiver side receives this message? From the output of my program, it seems that the receiver side is waiting for the message(MPI_Recv). &amp;nbsp;&lt;BR&gt;&amp;nbsp;&lt;BR&gt;
<br>
&lt;HR id=stopSpelling&gt;
<br>
Date: Sat, 26 Sep 2009 08:42:35 -0700&lt;BR&gt;From: Eugene.Loh_at_[hidden]&lt;BR&gt;To: users_at_[hidden]&lt;BR&gt;Subject: Re: [OMPI users] Is there an &quot;flush()&quot;-like function in MPI?&lt;BR&gt;&lt;BR&gt;guosong wrote: 
<br>
&lt;BLOCKQUOTE cite=midCOL102-W5EEC171A7E39325BFD41AA8D80_at_phx.gbl&gt;
<br>
&lt;STYLE&gt;
<br>
.ExternalClass .ecxhmmessage P
<br>
{padding:0px;}
<br>
.ExternalClass body.ecxhmmessage
<br>
{font-size:10pt;font-family:Verdana;}
<br>
&lt;/STYLE&gt;
<br>
Hi all,&lt;BR&gt;I am wondering if there is&amp;nbsp;an flush()-like function in MPI. I saw the&amp;nbsp;output of my program. One sent something but some other process did not receive it, just sitting there waiting. I used MPI_Isend for sending and MPI_Recv for receiving. Is it possible the message was lost or the message&amp;nbsp;was not flushed out and was still in the I/O buffer. Thanks.&lt;BR&gt;&lt;/BLOCKQUOTE&gt;If you send with MPI_Isend, the send operation is started.&amp;nbsp; In order to complete the send, you need a corresponding MPI_Wait (or MPI_Test or variant like MPI_Waitall, etc.).&lt;BR&gt;&lt;BR&gt;Even then, it is possible for the MPI implementation to buffer the message internally.&amp;nbsp; That is, the completion of the send operation only means that the message has left the user's send buffer -- not that the message has been received at the other end.&lt;BR&gt;&lt;BR&gt;There are also synchronous sends such as MPI_Ssend (or the non-blocking variant MPI_Issend).&amp;nbsp; This guarantees that the send completes not only once the message has left the <br>
user's send buffer but only only once the receiver has posted a matching receive.&amp;nbsp; It does not, however, guarantee that the full message has arrived at or been received by the receiver.&lt;BR&gt;&lt;BR&gt;I think once you've completed the send (e.g., adding an MPI_Wait to your MPI_Isend), there is nothing more to do on the sender's side to push the message along.&lt;BR&gt; 		 	   		  &lt;br /&gt;&lt;hr /&gt;&#202;&#185;&#211;&#195;&#208;&#194;&#210;&#187;&#180;&#250; Windows Live Messenger &#199;&#225;&#203;&#201;&#189;&#187;&#193;&#247;&#186;&#205;&#185;&#178;&#207;&#237;&#163;&#161; &lt;a href='<a href="http://www.windowslive.cn/Messenger/">http://www.windowslive.cn/Messenger/</a>' target='_new'&gt;&#193;&#162;&#191;&#204;&#207;&#194;&#212;&#216;&#163;&#161;&lt;/a&gt;&lt;/body&gt;
<br>
&lt;/html&gt;
<br>
--_56d69769-e2f3-44e9-9918-e61012370c83_--
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10782.php">Eugene Loh: "Re: [OMPI users] Is there an &quot;flush()&quot;-like function in MPI?"</a>
<li><strong>Previous message:</strong> <a href="10780.php">Eugene Loh: "[OMPI users] -slot-list -stride"</a>
<li><strong>In reply to:</strong> <a href="10779.php">Eugene Loh: "Re: [OMPI users] Is there an &quot;flush()&quot;-like function in MPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10782.php">Eugene Loh: "Re: [OMPI users] Is there an &quot;flush()&quot;-like function in MPI?"</a>
<li><strong>Reply:</strong> <a href="10782.php">Eugene Loh: "Re: [OMPI users] Is there an &quot;flush()&quot;-like function in MPI?"</a>
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
