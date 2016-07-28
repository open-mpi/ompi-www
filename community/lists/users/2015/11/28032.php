<?
$subject_val = "Re: [OMPI users] openmpi-v2.x-dev-650-gb0365f9";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  9 21:13:17 2015" -->
<!-- isoreceived="20151110021317" -->
<!-- sent="Tue, 10 Nov 2015 11:13:14 +0900" -->
<!-- isosent="20151110021314" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi-v2.x-dev-650-gb0365f9" -->
<!-- id="CAAkFZ5s15kXo1-LcSDEFjtUO=rFBeqvkPfn-eHHia-NAzmO=qQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="5640C77C020000C500066ABA_at_fhfddvz1.rz.hs-fulda.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi-v2.x-dev-650-gb0365f9<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-11-09 21:13:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28033.php">Ray Sheppard: "Re: [OMPI users] Odd pipe error"</a>
<li><strong>Previous message:</strong> <a href="28031.php">Lev Givon: "Re: [OMPI users] 1.10.1 appears to break mpi4py"</a>
<li><strong>In reply to:</strong> <a href="28023.php">Siegmar Gross: "[OMPI users] openmpi-v2.x-dev-650-gb0365f9"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Siegmar,
<br>
<p><a href="https://github.com/open-mpi/ompi/commit/638a59adf35c1a7d2fdd8e8a86f5096bf7109d9d">https://github.com/open-mpi/ompi/commit/638a59adf35c1a7d2fdd8e8a86f5096bf7109d9d</a>
<br>
has not yet been back-ported to the v2.x series
<br>
<p>i made PR #750 <a href="https://github.com/open-mpi/ompi-release/pull/750">https://github.com/open-mpi/ompi-release/pull/750</a> for that
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p><p>On Tue, Nov 10, 2015 at 12:19 AM, Siegmar Gross
<br>
&lt;Siegmar.Gross_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; today I tried to build openmpi-v2.x-dev-650-gb0365f9 on my
</span><br>
<span class="quotelev1">&gt; machines (Solaris 10 Sparc, Solaris 10 x86_64, and openSUSE
</span><br>
<span class="quotelev1">&gt; Linux 12.1 x86_64) with gcc-5.1.0 and Sun C 5.13 and I got the
</span><br>
<span class="quotelev1">&gt; following error on all machines with both compilers.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; linpc1 openmpi-v2.x-dev-650-gb0365f9-Linux.x86_64.64_gcc 204 tail -20
</span><br>
<span class="quotelev1">&gt; log.make.*
</span><br>
<span class="quotelev1">&gt;   CC       proc/proc.lo
</span><br>
<span class="quotelev1">&gt; In file included from
</span><br>
<span class="quotelev1">&gt; ../../openmpi-v2.x-dev-650-gb0365f9/ompi/proc/proc.c:38:0:
</span><br>
<span class="quotelev1">&gt; ../../openmpi-v2.x-dev-650-gb0365f9/ompi/proc/proc.c: In function
</span><br>
<span class="quotelev1">&gt; &#195;&#162;ompi_proc_init&#195;&#162;:
</span><br>
<span class="quotelev1">&gt; ../../openmpi-v2.x-dev-650-gb0365f9/ompi/proc/proc.c:270:32: error:
</span><br>
<span class="quotelev1">&gt; &#195;&#162;PMIX_GLOBAL&#195;&#162; undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt;      OPAL_MODEX_SEND_VALUE(ret, PMIX_GLOBAL,
</span><br>
<span class="quotelev1">&gt;                                 ^
</span><br>
<span class="quotelev1">&gt; ../../openmpi-v2.x-dev-650-gb0365f9/opal/mca/pmix/pmix.h:61:54: note: in
</span><br>
<span class="quotelev1">&gt; definition of macro &#195;&#162;OPAL_MODEX_SEND_VALUE&#195;&#162;
</span><br>
<span class="quotelev1">&gt;              if (OPAL_SUCCESS != ((r) = opal_pmix.put(sc, &amp;(_kv)))) {
</span><br>
<span class="quotelev1">&gt;  \
</span><br>
<span class="quotelev1">&gt;                                                       ^
</span><br>
<span class="quotelev1">&gt; ../../openmpi-v2.x-dev-650-gb0365f9/ompi/proc/proc.c:270:32: note: each
</span><br>
<span class="quotelev1">&gt; undeclared identifier is reported only once for each function it appears
</span><br>
<span class="quotelev1">&gt; in
</span><br>
<span class="quotelev1">&gt;      OPAL_MODEX_SEND_VALUE(ret, PMIX_GLOBAL,
</span><br>
<span class="quotelev1">&gt;                                 ^
</span><br>
<span class="quotelev1">&gt; ../../openmpi-v2.x-dev-650-gb0365f9/opal/mca/pmix/pmix.h:61:54: note: in
</span><br>
<span class="quotelev1">&gt; definition of macro &#195;&#162;OPAL_MODEX_SEND_VALUE&#195;&#162;
</span><br>
<span class="quotelev1">&gt;              if (OPAL_SUCCESS != ((r) = opal_pmix.put(sc, &amp;(_kv)))) {
</span><br>
<span class="quotelev1">&gt;  \
</span><br>
<span class="quotelev1">&gt;                                                       ^
</span><br>
<span class="quotelev1">&gt; make[2]: *** [proc/proc.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/export2/src/openmpi-2.0.0/openmpi-v2.x-dev-650-gb0365f9-Linux.x86_64.64_gcc/ompi'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/export2/src/openmpi-2.0.0/openmpi-v2.x-dev-650-gb0365f9-Linux.x86_64.64_gcc/ompi'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; linpc1 openmpi-v2.x-dev-650-gb0365f9-Linux.x86_64.64_gcc 204
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I would be grateful if somebody can fix the problem. Thank you very much
</span><br>
<span class="quotelev1">&gt; for any help in advance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best regards
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Siegmar
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/11/28023.php">http://www.open-mpi.org/community/lists/users/2015/11/28023.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28033.php">Ray Sheppard: "Re: [OMPI users] Odd pipe error"</a>
<li><strong>Previous message:</strong> <a href="28031.php">Lev Givon: "Re: [OMPI users] 1.10.1 appears to break mpi4py"</a>
<li><strong>In reply to:</strong> <a href="28023.php">Siegmar Gross: "[OMPI users] openmpi-v2.x-dev-650-gb0365f9"</a>
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
