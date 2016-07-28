<?
$subject_val = "Re: [OMPI users] MPI_Recv hangs";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  9 11:32:12 2012" -->
<!-- isoreceived="20120509153212" -->
<!-- sent="Wed, 09 May 2012 17:33:12 +0200" -->
<!-- isosent="20120509153312" -->
<!-- name="Eduardo Morras" -->
<!-- email="nec556_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Recv hangs" -->
<!-- id="4FA8826F0008D9CB_at_" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1336573186.8607.2648.camel_at_hokuto" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Recv hangs<br>
<strong>From:</strong> Eduardo Morras (<em>nec556_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-09 11:33:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19237.php">Jorge Chiva Segura: "Re: [OMPI users] MPI_Recv hangs"</a>
<li><strong>Previous message:</strong> <a href="19235.php">Jingcha Joba: "Re: [OMPI users] Regarding the execution time"</a>
<li><strong>In reply to:</strong> <a href="19232.php">Jorge Chiva Segura: "Re: [OMPI users] MPI_Recv hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19237.php">Jorge Chiva Segura: "Re: [OMPI users] MPI_Recv hangs"</a>
<li><strong>Reply:</strong> <a href="19237.php">Jorge Chiva Segura: "Re: [OMPI users] MPI_Recv hangs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
At 16:19 09/05/2012, you wrote:
<br>
<p><span class="quotelev2">&gt; &gt; On your code, the only point where it could fail is if one of the
</span><br>
<span class="quotelev2">&gt; &gt; precalculated message size values is wrongly calculated and executes
</span><br>
<span class="quotelev2">&gt; &gt; the Recieve where it shouldn't.
</span><br>
<span class="quotelev1">&gt;Yes, but after the sizes are calculated they don't change and that's why
</span><br>
<span class="quotelev1">&gt;I find it weird to hang the 30th time the whole communication loop is
</span><br>
<span class="quotelev1">&gt;executed :S .
</span><br>
<p>If in your code you don't use sizeof with MPI Datatypes there should 
<br>
be no problem :)
<br>
<p><span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  From previous mails i understand that no if(ok!=MPI... line fires
</span><br>
<span class="quotelev2">&gt; &gt; and there's no Sender waiting. The Ssend ends when the Recv starts to
</span><br>
<span class="quotelev2">&gt; &gt; receive, not when the Recv ends the receive, so the sender may get an
</span><br>
<span class="quotelev2">&gt; &gt; Ok but if there's an error Recv keeps the block. As you are using
</span><br>
<span class="quotelev2">&gt; &gt; blocking communications, you can't do anything to prevent this, for
</span><br>
<span class="quotelev2">&gt; &gt; example, check the Recv status while receiving.
</span><br>
<span class="quotelev1">&gt;I don't know how to check the Recv status because the processor remains
</span><br>
<span class="quotelev1">&gt;waiting for the message at the Recv function.
</span><br>
<p>That's what i'm pointing. In block mode you can't check that until Recv ends.
<br>
<p><span class="quotelev2">&gt; &gt; Try to use Send instead Ssend (it should work but it could hang too)
</span><br>
<span class="quotelev2">&gt; &gt; or change design to a non-blocking approach.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;The problem is that it also hangs with non-blocking communications. The
</span><br>
<span class="quotelev1">&gt;real program is coded with non-blocking communications and it started to
</span><br>
<span class="quotelev1">&gt;hang when the size of the mesh got bigger. I just changed to blocking
</span><br>
<span class="quotelev1">&gt;communications to easy the debugging task.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Now it works, with blocking and non-blocking communications, just
</span><br>
<span class="quotelev1">&gt;changing the value of the mca parameter btl_openib_flags to 304 or 305
</span><br>
<span class="quotelev1">&gt;(the default value is 310). That means that the problem is with the RDMA
</span><br>
<span class="quotelev1">&gt;protocols in infiniband for large messages. As far as I know, with those
</span><br>
<span class="quotelev1">&gt;values the flags GET(4) and PUT(2) are deactivated and the protocol for
</span><br>
<span class="quotelev1">&gt;large messages remains the same as the one for small messages
</span><br>
<span class="quotelev1">&gt;(send/receive). For me, it seems that there is a bug (problably a memory
</span><br>
<span class="quotelev1">&gt;leak) in OMPI or OFED.
</span><br>
<p>Some memory leaks were solved in 1.4.5. that affects openib, see release notes.
<br>
<p><span class="quotelev1">&gt;Thanks for your help,
</span><br>
<span class="quotelev1">&gt;Jorge
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19237.php">Jorge Chiva Segura: "Re: [OMPI users] MPI_Recv hangs"</a>
<li><strong>Previous message:</strong> <a href="19235.php">Jingcha Joba: "Re: [OMPI users] Regarding the execution time"</a>
<li><strong>In reply to:</strong> <a href="19232.php">Jorge Chiva Segura: "Re: [OMPI users] MPI_Recv hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19237.php">Jorge Chiva Segura: "Re: [OMPI users] MPI_Recv hangs"</a>
<li><strong>Reply:</strong> <a href="19237.php">Jorge Chiva Segura: "Re: [OMPI users] MPI_Recv hangs"</a>
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
