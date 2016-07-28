<?
$subject_val = "[OMPI users] Does multiple Irecv means concurrent receiving ?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 20 03:37:27 2014" -->
<!-- isoreceived="20140820073727" -->
<!-- sent="Wed, 20 Aug 2014 07:37:18 +0000" -->
<!-- isosent="20140820073718" -->
<!-- name="Zhang,Lei(Ecom)" -->
<!-- email="zhanglei14_at_[hidden]" -->
<!-- subject="[OMPI users] Does multiple Irecv means concurrent receiving ?" -->
<!-- id="674183CE400B8344A5F8DC3AA8A8080A2D14B6BC_at_M1-MAIL-HQ01.internal.baidu.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] Does multiple Irecv means concurrent receiving ?<br>
<strong>From:</strong> Zhang,Lei(Ecom) (<em>zhanglei14_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-20 03:37:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25083.php">Reuti: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
<li><strong>Previous message:</strong> <a href="25081.php">Tetsuya Mishima: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25140.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Does multiple Irecv means concurrent receiving ?"</a>
<li><strong>Reply:</strong> <a href="25140.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Does multiple Irecv means concurrent receiving ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have a performance problem with receiving. In a single master thread, I made several Irecv calls:
<br>
<p>Irecv(buf1, ..., tag, ANY_SOURCE, COMM_WORLD)
<br>
Irecv(buf2, ..., tag, ANY_SOURCE, COMM_WORLD)
<br>
...
<br>
Irecv(bufn, ..., tag, ANY_SOURCE, COMM_WORLD)
<br>
<p>all of which try to receive from any node for messages with the same tag.
<br>
<p>Then, whenever any of the Irecv completes (using Testany), a separate thread is dispatched to work on the received message.
<br>
In my program, many nodes will send to this master thread.
<br>
<p>However, I noticed that the speed of recv is almost unaffected no matter how many Irecv calls were made.
<br>
It seems that multiple Irecv calls does not mean concurrently receiving from many nodes.
<br>
By profiling the node running the master thread, I can see that the network input bandwidth is quite low.
<br>
<p>Is my understanding correct ? or How to maximize the recv throughput of the master thread ?
<br>
<p>Thanks !
<br>
<p>Zhang Lei
<br>
@ Baidu, Inc.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25082/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25083.php">Reuti: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
<li><strong>Previous message:</strong> <a href="25081.php">Tetsuya Mishima: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25140.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Does multiple Irecv means concurrent receiving ?"</a>
<li><strong>Reply:</strong> <a href="25140.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Does multiple Irecv means concurrent receiving ?"</a>
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
