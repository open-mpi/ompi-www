<?
$subject_val = "Re: [OMPI users] MPI Persistent Communication Question";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 28 14:14:15 2010" -->
<!-- isoreceived="20100628181415" -->
<!-- sent="Mon, 28 Jun 2010 14:14:04 -0400" -->
<!-- isosent="20100628181404" -->
<!-- name="amjad ali" -->
<!-- email="amjad11_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI Persistent Communication Question" -->
<!-- id="AANLkTinz6c5yqBEdJlzOHfNjMZNdYUw6HCkUy2Y7KzXn_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4C28CC60.8090505_at_oracle.com" -->
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
<strong>Date:</strong> 2010-06-28 14:14:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13429.php">Eugene Loh: "Re: [OMPI users] MPI Persistent Communication Question"</a>
<li><strong>Previous message:</strong> <a href="13427.php">Bowen Zhou: "[OMPI users] Any example for noncrashing bugs in MPI applications"</a>
<li><strong>In reply to:</strong> <a href="13425.php">Eugene Loh: "Re: [OMPI users] MPI Persistent Communication Question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13429.php">Eugene Loh: "Re: [OMPI users] MPI Persistent Communication Question"</a>
<li><strong>Reply:</strong> <a href="13429.php">Eugene Loh: "Re: [OMPI users] MPI Persistent Communication Question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You would break the MPI_Irecv and MPI_Isend calls up into two parts:
</span><br>
<span class="quotelev1">&gt; MPI_Send_init and MPI_Recv_init in the first part and MPI_Start[all] in the
</span><br>
<span class="quotelev1">&gt; second part.  The first part needs to be moved out of the subroutine... at
</span><br>
<span class="quotelev1">&gt; least outside of the loop in sub1() and maybe even outside the
</span><br>
<span class="quotelev1">&gt; 10000-iteration loop in the main program.  (There would also be
</span><br>
<span class="quotelev1">&gt; MPI_Request_free calls that would similarly have to be moved out.)  If the
</span><br>
<span class="quotelev1">&gt; overheads are small compared to the other work you're doing per message, the
</span><br>
<span class="quotelev1">&gt; savings would be small.  (And, I'm guessing this is the case for you.)
</span><br>
<span class="quotelev1">&gt; Further, the code refactoring might not be simple.  So, persistent
</span><br>
<span class="quotelev1">&gt; communications *might* not be a fruitful optimization strategy for you.
</span><br>
<span class="quotelev1">&gt; Just a warning.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>Well! If I follow this strategy then the picture should be as follows.
<br>
Correct??
<br>
Obviously the sub1 and sub2 exists outside separately. Following is just for
<br>
understanding.
<br>
<p>*
<br>
**Main program starts------@@@@@@@@@@@@@@@@@@@@@@@.*
<br>
*
<br>
**CALL MPI_RECV_INIT for each neighboring process
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
*   Loop A starts here &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (three passes)
<br>
&nbsp;&nbsp;&nbsp;Call subroutine2
<br>
<p>&nbsp;&nbsp;&nbsp;Subroutine2 starts----------------------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pick local data from array U in separate arrays for each
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
<p>*         -------perform work to update array U*
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
<p><p>But I think in the above case sending and receiving buffers would need to be
<br>
create in GLOBAL Module , or need to be passed in the subroutine headers. In
<br>
above there is one confusion. The sending buffer will be present in the
<br>
argument list of the MPI_SEND_INIT() but it will get the values to be sent
<br>
in the sub2? Is it possible/correct?
<br>
<p>The question is that, will above actually be communication efficient and
<br>
over-lapping communication-computation.
<br>
<p>best regards,
<br>
AA
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13428/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13429.php">Eugene Loh: "Re: [OMPI users] MPI Persistent Communication Question"</a>
<li><strong>Previous message:</strong> <a href="13427.php">Bowen Zhou: "[OMPI users] Any example for noncrashing bugs in MPI applications"</a>
<li><strong>In reply to:</strong> <a href="13425.php">Eugene Loh: "Re: [OMPI users] MPI Persistent Communication Question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13429.php">Eugene Loh: "Re: [OMPI users] MPI Persistent Communication Question"</a>
<li><strong>Reply:</strong> <a href="13429.php">Eugene Loh: "Re: [OMPI users] MPI Persistent Communication Question"</a>
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
