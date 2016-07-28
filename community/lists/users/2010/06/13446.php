<?
$subject_val = "Re: [OMPI users] MPI Persistent Communication Question";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 30 09:37:15 2010" -->
<!-- isoreceived="20100630133715" -->
<!-- sent="Wed, 30 Jun 2010 09:37:10 -0400" -->
<!-- isosent="20100630133710" -->
<!-- name="amjad ali" -->
<!-- email="amjad11_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI Persistent Communication Question" -->
<!-- id="AANLkTimhAZH-jzKsQvHdZ6ouBHApJ5XpI2xnTpZTHs9p_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4C292DAD.50803_at_oracle.com" -->
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
<strong>Date:</strong> 2010-06-30 09:37:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13447.php">Eugene Loh: "Re: [OMPI users] MPI Persistent Communication Question"</a>
<li><strong>Previous message:</strong> <a href="13445.php">Jeff Squyres: "Re: [OMPI users] about MPI"</a>
<li><strong>In reply to:</strong> <a href="13432.php">Eugene Loh: "Re: [OMPI users] MPI Persistent Communication Question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13447.php">Eugene Loh: "Re: [OMPI users] MPI Persistent Communication Question"</a>
<li><strong>Reply:</strong> <a href="13447.php">Eugene Loh: "Re: [OMPI users] MPI Persistent Communication Question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
and it's conceivable that you might have better performance with
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     CALL MPI_ISEND()
</span><br>
<span class="quotelev1">&gt;     DO I = 1, N
</span><br>
<span class="quotelev1">&gt;         call do_a_little_of_my_work()  ! no MPI progress is being made here
</span><br>
<span class="quotelev1">&gt;         CALL MPI_TEST()            ! enough MPI progress is being made here
</span><br>
<span class="quotelev1">&gt; that the receiver has something to do
</span><br>
<span class="quotelev1">&gt;     END DO
</span><br>
<span class="quotelev1">&gt;     CALL MPI_WAIT()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Whether performance improves or not is not guaranteed by the MPI standard.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And the SECOND desire is to use Persistent communication for even better
</span><br>
<span class="quotelev1">&gt; speedup.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Right.  That's a separate issue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>So actually I am focusing on the persistent communication at this time.
<br>
Based on your suggestions, I developed:
<br>
<p>sending, receiving buffers, and the request array is defined in declared in
<br>
the global module. And their sizes are allocated in the main program. But
<br>
following is not working. Segmentation fault messages at just from the
<br>
underline blue line lace.
<br>
<p>*Main program starts------@@@@@@@@@@@@@@@@@@@@@@@.*
<br>
*
<br>
**CALL MPI_RECV_INIT for each neighboring process  **
<br>
CALL MPI_SEND_INIT for each neighboring process*
<br>
*Loop Calling the subroutine1--------------------(10000 times in the main
<br>
program).
<br>
<p>** Call subroutine1*
<br>
*
<br>
**Subroutine1 starts===================================*
<br>
*
<br>
&nbsp;&nbsp;&nbsp;Loop A starts here &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (three passes)
<br>
&nbsp;&nbsp;&nbsp;Call subroutine2
<br>
<p>&nbsp;&nbsp;&nbsp;Subroutine2 starts----------------------------
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pick local data from array U in separate arrays for each
<br>
neighboring processor
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CALL MPI_STARTALL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-------perform work that could be done with local data
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CALL MPI_WAITALL( )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-------perform work using the received data
<br>
&nbsp;&nbsp;&nbsp;Subroutine**2** ends**----------------------------*
<br>
<p><p>*         -------perform work to update array U*
<br>
*   Loop A ends here &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;*
<br>
*Subroutine1 ends====================================*
<br>
<p>*Loop Calling the subroutine1 ends------------(10000 times in the main
<br>
program).*
<br>
<p>*CALL MPI_Request_free( )*
<br>
<p>*Main program ends------@@@@@@@@@@@@@@@@@@@@@@@.*
<br>
<p>How to tackle all this.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13446/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13447.php">Eugene Loh: "Re: [OMPI users] MPI Persistent Communication Question"</a>
<li><strong>Previous message:</strong> <a href="13445.php">Jeff Squyres: "Re: [OMPI users] about MPI"</a>
<li><strong>In reply to:</strong> <a href="13432.php">Eugene Loh: "Re: [OMPI users] MPI Persistent Communication Question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13447.php">Eugene Loh: "Re: [OMPI users] MPI Persistent Communication Question"</a>
<li><strong>Reply:</strong> <a href="13447.php">Eugene Loh: "Re: [OMPI users] MPI Persistent Communication Question"</a>
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
