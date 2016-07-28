<?
$subject_val = "Re: [OMPI users] MPI_Recv hangs";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  9 10:22:30 2012" -->
<!-- isoreceived="20120509142230" -->
<!-- sent="Wed, 09 May 2012 16:19:46 +0200" -->
<!-- isosent="20120509141946" -->
<!-- name="Jorge Chiva Segura" -->
<!-- email="jordic_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Recv hangs" -->
<!-- id="1336573186.8607.2648.camel_at_hokuto" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="4FA882800008551A_at_" -->
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
<strong>From:</strong> Jorge Chiva Segura (<em>jordic_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-09 10:19:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19233.php">Jingcha Joba: "Re: [OMPI users] Regarding the execution time calculation"</a>
<li><strong>Previous message:</strong> <a href="19231.php">Jeff Squyres: "Re: [OMPI users] Regarding the execution time"</a>
<li><strong>In reply to:</strong> <a href="19229.php">Eduardo Morras: "Re: [OMPI users] MPI_Recv hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19236.php">Eduardo Morras: "Re: [OMPI users] MPI_Recv hangs"</a>
<li><strong>Reply:</strong> <a href="19236.php">Eduardo Morras: "Re: [OMPI users] MPI_Recv hangs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, 2012-05-09 at 15:24 +0200, Eduardo Morras wrote:
<br>
<span class="quotelev1">&gt; Sorry for the delay, and sorry again because in last mail i had the 
</span><br>
<span class="quotelev1">&gt; wrong taste that it was some kind of homework problem.
</span><br>
Don't worry ;). 
<br>
I simplified the core of the problem just to make it easier to
<br>
understand (at least that was my intention xD) . And I wrote all the
<br>
information that I found relevant in the opening post (320 CPU's,
<br>
versions of OMPI, operative system and infiniband, etc.) precisely
<br>
because I wanted to show that it wasn't a homework or anything like
<br>
that.
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; At 17:41 04/05/2012, you wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; The logic of send/recv looks ok. Now, in 5 and 7, recvSize(p2) and
</span><br>
<span class="quotelev3">&gt; &gt; &gt; recvSize(p1) function what value returns?
</span><br>
<span class="quotelev2">&gt; &gt;All the sendSizes and RecvSizes are constant between iterations and are
</span><br>
<span class="quotelev2">&gt; &gt;calculated as a setup before all the calculations start.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;snip&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;Do you know what could cause the program to hang with the default value
</span><br>
<span class="quotelev2">&gt; &gt;(310) and to work fine with 305? I also tested it with 311 but it hanged
</span><br>
<span class="quotelev2">&gt; &gt;so it seems that it is not enough to activate the SEND flag.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On your code, the only point where it could fail is if one of the 
</span><br>
<span class="quotelev1">&gt; precalculated message size values is wrongly calculated and executes 
</span><br>
<span class="quotelev1">&gt; the Recieve where it shouldn't.
</span><br>
Yes, but after the sizes are calculated they don't change and that's why
<br>
I find it weird to hang the 30th time the whole communication loop is
<br>
executed :S .
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  From previous mails i understand that no if(ok!=MPI... line fires 
</span><br>
<span class="quotelev1">&gt; and there's no Sender waiting. The Ssend ends when the Recv starts to 
</span><br>
<span class="quotelev1">&gt; receive, not when the Recv ends the receive, so the sender may get an 
</span><br>
<span class="quotelev1">&gt; Ok but if there's an error Recv keeps the block. As you are using 
</span><br>
<span class="quotelev1">&gt; blocking communications, you can't do anything to prevent this, for 
</span><br>
<span class="quotelev1">&gt; example, check the Recv status while receiving.
</span><br>
I don't know how to check the Recv status because the processor remains
<br>
waiting for the message at the Recv function.
<br>
<span class="quotelev1">&gt; Try to use Send instead Ssend (it should work but it could hang too) 
</span><br>
<span class="quotelev1">&gt; or change design to a non-blocking approach.
</span><br>
<p>The problem is that it also hangs with non-blocking communications. The
<br>
real program is coded with non-blocking communications and it started to
<br>
hang when the size of the mesh got bigger. I just changed to blocking
<br>
communications to easy the debugging task.
<br>
<p>Now it works, with blocking and non-blocking communications, just
<br>
changing the value of the mca parameter btl_openib_flags to 304 or 305
<br>
(the default value is 310). That means that the problem is with the RDMA
<br>
protocols in infiniband for large messages. As far as I know, with those
<br>
values the flags GET(4) and PUT(2) are deactivated and the protocol for
<br>
large messages remains the same as the one for small messages
<br>
(send/receive). For me, it seems that there is a bug (problably a memory
<br>
leak) in OMPI or OFED.
<br>
<p>Thanks for your help,
<br>
Jorge
<br>
<p><p><pre>
-- 
Aquest missatge ha estat analitzat per MailScanner
a la cerca de virus i d'altres continguts perillosos,
i es considera que est&#224; net.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19233.php">Jingcha Joba: "Re: [OMPI users] Regarding the execution time calculation"</a>
<li><strong>Previous message:</strong> <a href="19231.php">Jeff Squyres: "Re: [OMPI users] Regarding the execution time"</a>
<li><strong>In reply to:</strong> <a href="19229.php">Eduardo Morras: "Re: [OMPI users] MPI_Recv hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19236.php">Eduardo Morras: "Re: [OMPI users] MPI_Recv hangs"</a>
<li><strong>Reply:</strong> <a href="19236.php">Eduardo Morras: "Re: [OMPI users] MPI_Recv hangs"</a>
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
