<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Aug  2 11:29:43 2007" -->
<!-- isoreceived="20070802152943" -->
<!-- sent="Thu, 2 Aug 2007 17:29:38 +0200" -->
<!-- isosent="20070802152938" -->
<!-- name="Uwe Hermann" -->
<!-- email="uwe_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [uwe@hermann-uwe.de: [Pkg-openmpi-maintainers]	Bug#435581: openmpi-bin: Segfault on Debian GNU/kFreeBSD]" -->
<!-- id="20070802152938.GB23143_at_greenwood" -->
<!-- charset="utf-8" -->
<!-- inreplyto="46B1CA62.7060004_at_hlrs.de" -->
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
<strong>From:</strong> Uwe Hermann (<em>uwe_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-02 11:29:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2071.php">Uwe Hermann: "Re: [OMPI devel] [uwe@hermann-uwe.de: [Pkg-openmpi-maintainers]	Bug#435581: openmpi-bin: Segfault on Debian GNU/kFreeBSD]"</a>
<li><strong>Previous message:</strong> <a href="2069.php">Andreas Kn&#252;pfer: "Re: [OMPI devel] vampir trace"</a>
<li><strong>In reply to:</strong> <a href="2068.php">Bettina Krammer: "Re: [OMPI devel] [uwe@hermann-uwe.de: [Pkg-openmpi-maintainers]	Bug#435581: openmpi-bin: Segfault on Debian GNU/kFreeBSD]"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>On Thu, Aug 02, 2007 at 02:13:22PM +0200, Bettina Krammer wrote:
<br>
<span class="quotelev1">&gt; my send finger was too fast, I wanted to add that according to the MPI 
</span><br>
<span class="quotelev1">&gt; standard, MPI_Comm_rank is defined as
</span><br>
<span class="quotelev1">&gt; int MPI_Comm_rank ( MPI_Comm comm, int *rank )
</span><br>
<span class="quotelev1">&gt; therefore I wouldn't recommend to use anything else than an int for rank...
</span><br>
<p>I tried that, same result.
<br>
<p>The problem seems to be pretty fundamental:
<br>
<p>$ cat a.c
<br>
int main(void) {}
<br>
$ mpicc a.c
<br>
$ ./a.out
<br>
$ &#225;&#185;&#129;pirun -np 1 ./a.out
<br>
[...]
<br>
Segmentation fault (core dumped) 
<br>
<p><p>I'll rebuild with more debug information and retry.
<br>
<p><p>Cheers, Uwe.
<br>
<pre>
-- 
<a href="http://www.hermann-uwe.de">http://www.hermann-uwe.de</a>  | <a href="http://www.holsham-traders.de">http://www.holsham-traders.de</a>
<a href="http://www.crazy-hacks.org">http://www.crazy-hacks.org</a> | <a href="http://www.unmaintained-free-software.org">http://www.unmaintained-free-software.org</a>

</pre>
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-2070/signature.asc">Digital signature</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2071.php">Uwe Hermann: "Re: [OMPI devel] [uwe@hermann-uwe.de: [Pkg-openmpi-maintainers]	Bug#435581: openmpi-bin: Segfault on Debian GNU/kFreeBSD]"</a>
<li><strong>Previous message:</strong> <a href="2069.php">Andreas Kn&#252;pfer: "Re: [OMPI devel] vampir trace"</a>
<li><strong>In reply to:</strong> <a href="2068.php">Bettina Krammer: "Re: [OMPI devel] [uwe@hermann-uwe.de: [Pkg-openmpi-maintainers]	Bug#435581: openmpi-bin: Segfault on Debian GNU/kFreeBSD]"</a>
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
