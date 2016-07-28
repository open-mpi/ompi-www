<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Sep  7 11:10:09 2006" -->
<!-- isoreceived="20060907151009" -->
<!-- sent="Thu, 7 Sep 2006 16:10:06 +0100" -->
<!-- isosent="20060907151006" -->
<!-- name="Renato Golin" -->
<!-- email="rengolin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] R: Re: MPI_LOOKUP_NAME BUG" -->
<!-- id="d9b9d95f0609070810g593329ccyd49042d1b98133db_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="10d88a14306.alfonso.isola_at_tin.it" -->
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
<strong>Date:</strong> 2006-09-07 11:10:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1843.php">Renato Golin: "Re: [OMPI users] R: Re: MPI_LOOKUP_NAME BUG"</a>
<li><strong>Previous message:</strong> <a href="1841.php">Eng. A.A. Isola: "[OMPI users]  R: Re: MPI_LOOKUP_NAME BUG"</a>
<li><strong>In reply to:</strong> <a href="1841.php">Eng. A.A. Isola: "[OMPI users]  R: Re: MPI_LOOKUP_NAME BUG"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1843.php">Renato Golin: "Re: [OMPI users] R: Re: MPI_LOOKUP_NAME BUG"</a>
<li><strong>Reply:</strong> <a href="1843.php">Renato Golin: "Re: [OMPI users] R: Re: MPI_LOOKUP_NAME BUG"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 9/7/06, Eng. A.A. Isola &lt;alfonso.isola_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; For the other
</span><br>
<span class="quotelev1">&gt; discussion...I have used only the MPI2 rouines inside my programs and
</span><br>
<span class="quotelev1">&gt; nothinf other. Then is not possible that it doesn't works. I can
</span><br>
<span class="quotelev1">&gt; understand, for example, that inside Open_MPI the threads or the
</span><br>
<span class="quotelev1">&gt; Client-
</span><br>
<span class="quotelev1">&gt; Server routines are realized in different way, but the output
</span><br>
<span class="quotelev1">&gt; have to
</span><br>
<span class="quotelev1">&gt; be the same and particularly has to be the same of the
</span><br>
<span class="quotelev1">&gt; protocol says.
</span><br>
<span class="quotelev1">&gt; Then is I generate a program under the rigorous respect
</span><br>
<span class="quotelev1">&gt; of the MPI
</span><br>
<span class="quotelev1">&gt; protocol, why this program has not to work in different
</span><br>
<span class="quotelev1">&gt; implementations?
</span><br>
<p><p>Should work, If you're using the standard, which I think you are. I'm
<br>
not a MPI expert myself to know if your code is 100% compliant but at
<br>
least you're using standard functions.
<br>
<p>Btw, which open-mpi version are you using ?
<br>
<p><p><span class="quotelev1">&gt; I want repeat again that I've compiled this program in
</span><br>
<span class="quotelev1">&gt; both implementations withouts error s or warnings, but when I
</span><br>
<span class="quotelev1">&gt; execute it in Open_MPI it doesn't work!
</span><br>
<p><p>Compilation does not means execution and execution does not means
<br>
right execution. But anyway, your code works for me on LAM-MPI (just
<br>
had to define MPI_ERR_PORT myself on server.c).
<br>
<p>I'm now compiling the openMPI 1.1.1 and will check against it as well.
<br>
<p>The output:
<br>
<p>sbornia$ lamexec -np 1 ./server foo
<br>
server Process Rank 0 ,TOT processes 1 on sbornia
<br>
Server foo available at n0:i11:323
<br>
<p>sbornia$ lamexec -np 1 ./client foo
<br>
Rank Client Process 0 ,TOT processes 1 on sbornia
<br>
Server Name found!
<br>
Connection OK!
<br>
Server address n0:i11:323
<br>
The server has written: HELLO CLIENT
<br>
The Client is disconnected!
<br>
<p>cheers,
<br>
--renato
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1843.php">Renato Golin: "Re: [OMPI users] R: Re: MPI_LOOKUP_NAME BUG"</a>
<li><strong>Previous message:</strong> <a href="1841.php">Eng. A.A. Isola: "[OMPI users]  R: Re: MPI_LOOKUP_NAME BUG"</a>
<li><strong>In reply to:</strong> <a href="1841.php">Eng. A.A. Isola: "[OMPI users]  R: Re: MPI_LOOKUP_NAME BUG"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1843.php">Renato Golin: "Re: [OMPI users] R: Re: MPI_LOOKUP_NAME BUG"</a>
<li><strong>Reply:</strong> <a href="1843.php">Renato Golin: "Re: [OMPI users] R: Re: MPI_LOOKUP_NAME BUG"</a>
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
