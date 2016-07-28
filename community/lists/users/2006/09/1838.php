<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Sep  7 06:02:04 2006" -->
<!-- isoreceived="20060907100204" -->
<!-- sent="Thu, 7 Sep 2006 11:02:01 +0100" -->
<!-- isosent="20060907100201" -->
<!-- name="Renato Golin" -->
<!-- email="rengolin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_LOOKUP_NAME BUG" -->
<!-- id="d9b9d95f0609070302k5bfe5ce8vc964ba29147cf3_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="10d871f9abb.alfonso.isola_at_tin.it" -->
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
<strong>From:</strong> Renato Golin (<em>rengolin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-09-07 06:02:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1839.php">Eng. A.A. Isola: "[OMPI users] R: Re:  MPI_LOOKUP_NAME BUG"</a>
<li><strong>Previous message:</strong> <a href="1837.php">Renato Golin: "Re: [OMPI users] configuration file problem?"</a>
<li><strong>In reply to:</strong> <a href="1836.php">Eng. A.A. Isola: "[OMPI users] MPI_LOOKUP_NAME BUG"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 9/7/06, Eng. A.A. Isola &lt;alfonso.isola_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; hy it is not possible to use the &quot;The MPI Extensions&quot; (yellow book)
</span><br>
<span class="quotelev1">&gt; Client-Server example?!?!?!?
</span><br>
<p>Hi, I don't have this book, can you point us the code, pls ?
<br>
<p><p><span class="quotelev1">&gt; In MPICH2 this example works properly.
</span><br>
<p>It was probably designed to MPICH2, I wouldn't expect everything that
<br>
works with MPICH2 work straight away with any other MPI
<br>
implementation.
<br>
<p><p><span class="quotelev1">&gt; *** An error occurred in MPI_Lookup_name
</span><br>
<span class="quotelev1">&gt; *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; *** MPI_ERR_NAME: invalid name argument
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt; [0.0.0]-[0.1.0] mca_oob_tcp_msg_recv: readv failed with errno=104
</span><br>
<p>The OS error code 104 is &quot;Connection reset by peer&quot;. Looks like your
<br>
server droped the connection on your client, probably because it
<br>
failed miserably.
<br>
<p>cheers,
<br>
--renato
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1839.php">Eng. A.A. Isola: "[OMPI users] R: Re:  MPI_LOOKUP_NAME BUG"</a>
<li><strong>Previous message:</strong> <a href="1837.php">Renato Golin: "Re: [OMPI users] configuration file problem?"</a>
<li><strong>In reply to:</strong> <a href="1836.php">Eng. A.A. Isola: "[OMPI users] MPI_LOOKUP_NAME BUG"</a>
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
