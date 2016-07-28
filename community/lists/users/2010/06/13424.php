<?
$subject_val = "Re: [OMPI users] MPI Persistent Communication Question";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 28 11:42:18 2010" -->
<!-- isoreceived="20100628154218" -->
<!-- sent="Mon, 28 Jun 2010 11:42:09 -0400" -->
<!-- isosent="20100628154209" -->
<!-- name="amjad ali" -->
<!-- email="amjad11_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI Persistent Communication Question" -->
<!-- id="AANLkTilNAP8ilWgcy6d_F86rK-_Pk99UKQ424BKKesFd_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="DE53C264-99C2-4B44-8D8F-3A8822B795F3_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI Persistent Communication Question<br>
<strong>From:</strong> amjad ali (<em>amjad11_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-28 11:42:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13425.php">Eugene Loh: "Re: [OMPI users] MPI Persistent Communication Question"</a>
<li><strong>Previous message:</strong> <a href="13423.php">Jeff Squyres: "Re: [OMPI users] MPI Persistent Communication Question"</a>
<li><strong>In reply to:</strong> <a href="13423.php">Jeff Squyres: "Re: [OMPI users] MPI Persistent Communication Question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13425.php">Eugene Loh: "Re: [OMPI users] MPI Persistent Communication Question"</a>
<li><strong>Reply:</strong> <a href="13425.php">Eugene Loh: "Re: [OMPI users] MPI Persistent Communication Question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi   Jeff S.
<br>
Thank you very much for your reply.
<br>
I am still feeling some confusion. Please guide.
<br>
<p>&nbsp;The idea is to do this:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    MPI_Recv_init()
</span><br>
<span class="quotelev1">&gt;    MPI_Send_init()
</span><br>
<span class="quotelev1">&gt;    for (i = 0; i &lt; 1000; ++i) {
</span><br>
<span class="quotelev1">&gt;        MPI_Startall()
</span><br>
<span class="quotelev1">&gt;        /* do whatever */
</span><br>
<span class="quotelev1">&gt;        MPI_Waitall()
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;    for (i = 0; i &lt; 1000; ++i) {
</span><br>
<span class="quotelev1">&gt;        MPI_Request_free()
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So in your inner loop, you just call MPI_Startall() and a corresponding
</span><br>
<span class="quotelev1">&gt; MPI_Test* / MPI_Wait* call to complete those requests.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The idea is that the MPI_*_init() functions do some one-time setup on the
</span><br>
<span class="quotelev1">&gt; requests and then you just start and complete those same requests over and
</span><br>
<span class="quotelev1">&gt; over and over.  When you're done, you free them.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Actually in my code what I was doing is:
</span><br>
<p>*CALL a subroutine-(1) 10000 times in the main program.
<br>
<p>**Subroutine-(1) starts===================================*
<br>
*
<br>
&nbsp;&nbsp;&nbsp;Loop A starts here &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (three passes)
<br>
&nbsp;&nbsp;&nbsp;Call subroutine-(2)
<br>
<p>&nbsp;&nbsp;&nbsp;Subroutine-(2) starts----------------------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pick local data from array U in separate arrays for each
<br>
neighboring processor
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CALL MPI_IRECV for each neighboring process
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CALL MPI_ISEND for each neighboring process
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-------perform work that could be done with local data
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CALL MPI_WAITALL( )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-------perform work using the received data
<br>
&nbsp;&nbsp;&nbsp;Subroutine**-(2)** ends**----------------------------*
<br>
<p>*         -------perform work to update array U*
<br>
*   Loop A ends here &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;*
<br>
<p>*Subroutine-(1) ends====================================*
<br>
<p>I assume that the above setup will overlap computation with communication
<br>
(hiding communication behind computations), as well.
<br>
Now intention is to use persistent communication to get more efficiency. I
<br>
am facing confusion how to use your proposed model for my work. Please
<br>
suggest.
<br>
<p>best regards,
<br>
AA.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13424/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13425.php">Eugene Loh: "Re: [OMPI users] MPI Persistent Communication Question"</a>
<li><strong>Previous message:</strong> <a href="13423.php">Jeff Squyres: "Re: [OMPI users] MPI Persistent Communication Question"</a>
<li><strong>In reply to:</strong> <a href="13423.php">Jeff Squyres: "Re: [OMPI users] MPI Persistent Communication Question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13425.php">Eugene Loh: "Re: [OMPI users] MPI Persistent Communication Question"</a>
<li><strong>Reply:</strong> <a href="13425.php">Eugene Loh: "Re: [OMPI users] MPI Persistent Communication Question"</a>
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
