<?
$subject_val = "Re: [OMPI users] SIGV at MPI_Cart_sub";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 10 12:33:10 2012" -->
<!-- isoreceived="20120110173310" -->
<!-- sent="Tue, 10 Jan 2012 18:33:06 +0100" -->
<!-- isosent="20120110173306" -->
<!-- name="Anas Al-Trad" -->
<!-- email="anas.altrad_at_[hidden]" -->
<!-- subject="Re: [OMPI users] SIGV at MPI_Cart_sub" -->
<!-- id="CA+H1izN31AcuObZV-Dr=P0_aCdgYeJFq4goBker1joY6fWT8kA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CA+H1izOJ=8eq7E7kE7GUGfjFB1=JbiNm4pWHVjYZ3JdYw8bn1A_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] SIGV at MPI_Cart_sub<br>
<strong>From:</strong> Anas Al-Trad (<em>anas.altrad_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-10 12:33:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18126.php">John Doe: "[OMPI users] OMPI C++ Bindings problems"</a>
<li><strong>Previous message:</strong> <a href="18124.php">Anas Al-Trad: "Re: [OMPI users] SIGV at MPI_Cart_sub"</a>
<li><strong>In reply to:</strong> <a href="18124.php">Anas Al-Trad: "Re: [OMPI users] SIGV at MPI_Cart_sub"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Anyway, after compiling my code with icc/11.1.069, the job is running
<br>
without stuck or that sigv which it occurred before when using icc/12.1.0
<br>
module.
<br>
<p>Also I have to point that when I was using icc/12.1.0 I was getting strange
<br>
outputs or stuck, and I solved them by changing the name of parameters
<br>
inside the function, for example, if I call a func like this
<br>
<p>time( ..., size_t *P, ...){}
<br>
<p>and call it like this:
<br>
time(..,p,..);
<br>
<p>then I have to change the name of *P inside the time functions as follows:
<br>
time( ..., size_t *P, ...)
<br>
{
<br>
int bestP = *P; // and maybe again as the later bug that I solved
<br>
int bP = bestP;
<br>
// then start using bP :)
<br>
...
<br>
}
<br>
<p>Thanks guys for the help, I guess that the problem is solved when compiling
<br>
with the old one.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18125/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18126.php">John Doe: "[OMPI users] OMPI C++ Bindings problems"</a>
<li><strong>Previous message:</strong> <a href="18124.php">Anas Al-Trad: "Re: [OMPI users] SIGV at MPI_Cart_sub"</a>
<li><strong>In reply to:</strong> <a href="18124.php">Anas Al-Trad: "Re: [OMPI users] SIGV at MPI_Cart_sub"</a>
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
