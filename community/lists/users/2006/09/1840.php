<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Sep  7 08:39:42 2006" -->
<!-- isoreceived="20060907123942" -->
<!-- sent="Thu, 7 Sep 2006 13:39:36 +0100" -->
<!-- isosent="20060907123936" -->
<!-- name="Renato Golin" -->
<!-- email="rengolin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] R: Re: MPI_LOOKUP_NAME BUG" -->
<!-- id="d9b9d95f0609070539q13e7c3f9o8c84b92a1705c107_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="10d88066fbf.alfonso.isola_at_tin.it" -->
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
<strong>Date:</strong> 2006-09-07 08:39:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1841.php">Eng. A.A. Isola: "[OMPI users]  R: Re: MPI_LOOKUP_NAME BUG"</a>
<li><strong>Previous message:</strong> <a href="1839.php">Eng. A.A. Isola: "[OMPI users] R: Re:  MPI_LOOKUP_NAME BUG"</a>
<li><strong>In reply to:</strong> <a href="1839.php">Eng. A.A. Isola: "[OMPI users] R: Re:  MPI_LOOKUP_NAME BUG"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Alfonso,
<br>
<p>I couldn't even compile your code directly, is it the one you're using
<br>
? It does not even makes sense... can you send the code you are using,
<br>
or at least a working portion of it that contains
<br>
MPI_LOOKUP_NAME with which we can reproduce your error ?
<br>
<p><p><span class="quotelev1">&gt; I have the
</span><br>
<span class="quotelev1">&gt; same problem also if I don't use the MPI_LOOKUP_NAME but by the
</span><br>
<span class="quotelev1">&gt; port_name recovered by the MPI_open_port.
</span><br>
<p>So maybe the problem is not only on MPI_LOOKUP_NAME... By the error
<br>
you sent (MPI_ERR_NAME) the name was not found (or is wrong) and by
<br>
your code it's not even initialized (ie. MPI_MAX_PORT_NAME bytes of
<br>
rubbish)
<br>
<p><p><span class="quotelev1">&gt; I have seen that the address
</span><br>
<span class="quotelev1">&gt; supplied by the system to the server is always the same 0.1.0:2000 , I
</span><br>
<span class="quotelev1">&gt; think that thi is very strange.
</span><br>
<p>Operating systems can choose whatever port they feel like. It may be
<br>
the lowest port MPI can get for you, or the lowest port the OS can get
<br>
for you and it didn't feel the necessity to allocate a different port,
<br>
maybe because you're alone in the system or maybe because it felt like
<br>
reserving that port for you was cool.
<br>
<p><p><span class="quotelev1">&gt; If I write an example where I use the
</span><br>
<span class="quotelev1">&gt; MPI routines that are in the MPI protocol, they have to work!! Is a
</span><br>
<span class="quotelev1">&gt; mistake to say that the same program can work and not dependently on
</span><br>
<span class="quotelev1">&gt; the implementation.
</span><br>
<p>If you write a MPI implementation, yes. But if you rely on the
<br>
smallest differences that MPICH2 have to other MPI implementations you
<br>
can write unportable code as well as you can do with C++ and even Perl
<br>
and Java.
<br>
<p><p><span class="quotelev1">&gt; Then this example has to work in
</span><br>
<span class="quotelev1">&gt; MPICH2 and also in OPEN_MPI. If this doesn't happen this means that
</span><br>
<span class="quotelev1">&gt; Open_MPI has some problems...
</span><br>
<p>Wrong. I cannot force GCC to compile any code I throw at it, even
<br>
being plain C code. Even between different GCC versions you're not
<br>
guaranteed to have no warnings.
<br>
<p>&quot;IF&quot; one write a completely generic code, folowing only the standards,
<br>
one could assume any compiler would work. And even on that case, I
<br>
would still not expect to work &quot;as is&quot;. Unfortunatelly the real world
<br>
is not as beautiful as we'd like.
<br>
<p><p><span class="quotelev1">&gt; The software has to be independent from
</span><br>
<span class="quotelev1">&gt; the implementation that you use.
</span><br>
<p>Up to some point, yes. But MPICH2 and OpenMPI can (and probably will)
<br>
make more things that just the basic because it's cool to have better
<br>
solutions that those the standard defines. It happens with databases,
<br>
programming languages implementations, unix distributions, web pages
<br>
etc etc.
<br>
<p>cheers,
<br>
--renato
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1841.php">Eng. A.A. Isola: "[OMPI users]  R: Re: MPI_LOOKUP_NAME BUG"</a>
<li><strong>Previous message:</strong> <a href="1839.php">Eng. A.A. Isola: "[OMPI users] R: Re:  MPI_LOOKUP_NAME BUG"</a>
<li><strong>In reply to:</strong> <a href="1839.php">Eng. A.A. Isola: "[OMPI users] R: Re:  MPI_LOOKUP_NAME BUG"</a>
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
