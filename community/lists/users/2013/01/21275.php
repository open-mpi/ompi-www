<?
$subject_val = "Re: [OMPI users] [EXTERNAL] Re: problem building 32-bitopenmpi-1.9a1r27979 with Sun C";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 31 15:55:28 2013" -->
<!-- isoreceived="20130131205528" -->
<!-- sent="Thu, 31 Jan 2013 21:48:34 +0100 (CET)" -->
<!-- isosent="20130131204834" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [EXTERNAL] Re: problem building 32-bitopenmpi-1.9a1r27979 with Sun C" -->
<!-- id="201301312048.r0VKmYl7019189_at_tyr.informatik.hs-fulda.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] [EXTERNAL] Re: problem building 32-bitopenmpi-1.9a1r27979 with Sun C" -->
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
<strong>Subject:</strong> Re: [OMPI users] [EXTERNAL] Re: problem building 32-bitopenmpi-1.9a1r27979 with Sun C<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-31 15:48:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21276.php">Ralph Castain: "Re: [OMPI users] I have still a problem with rankfiles in openmpi-1.6.4rc3"</a>
<li><strong>Previous message:</strong> <a href="21274.php">Wesley Emeneker: "[OMPI users] unknown BTL transport in openmpi 1.5.4 and 1.6.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21277.php">Siegmar Gross: "Re: [OMPI users] [EXTERNAL] Re: problem building 32-bitopenmpi-1.9a1r27979 with Sun C"</a>
<li><strong>Maybe reply:</strong> <a href="21277.php">Siegmar Gross: "Re: [OMPI users] [EXTERNAL] Re: problem building 32-bitopenmpi-1.9a1r27979 with Sun C"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
<p>thank you very much for your patch atomic.diff. I applied it and get now
<br>
the following error.
<br>
<p>sunpc1 openmpi-1.9-SunOS.x86_64.32_cc 21 grep Error log.make.SunOS.x86_64.32_cc 
<br>
Creating mpi/man/man3/MPI_Error_class.3 man page...
<br>
Creating mpi/man/man3/MPI_Error_string.3 man page...
<br>
&quot;../../../../openmpi-1.9a1r27979/opal/include/opal/sys/atomic_impl.h&quot;, line 106: 
<br>
Error: opal_atomic_add_64(volatile long long*, long long) was previously 
<br>
declared &quot;extern&quot;, not &quot;inline&quot;.
<br>
&quot;../../../../openmpi-1.9a1r27979/opal/include/opal/sys/atomic_impl.h&quot;, line 121: 
<br>
Error: opal_atomic_sub_64(volatile long long*, long long) was previously 
<br>
declared &quot;extern&quot;, not &quot;inline&quot;.
<br>
2 Error(s) detected.
<br>
make[2]: *** [mpicxx.lo] Error 1
<br>
make[1]: *** [all-recursive] Error 1
<br>
make: *** [all-recursive] Error 1
<br>
sunpc1 openmpi-1.9-SunOS.x86_64.32_cc 22 
<br>
<p><p><p>linpc1 openmpi-1.9-Linux.x86_64.32_cc 116 grep Error log.make.Linux.x86_64.32_cc 
<br>
Creating mpi/man/man3/MPI_Error_class.3 man page...
<br>
Creating mpi/man/man3/MPI_Error_string.3 man page...
<br>
&quot;../../../../openmpi-1.9a1r27979/opal/include/opal/sys/atomic_impl.h&quot;, line 106: 
<br>
Error: opal_atomic_add_64(volatile long long*, long long) was previously 
<br>
declared &quot;extern&quot;, not &quot;inline&quot;.
<br>
&quot;../../../../openmpi-1.9a1r27979/opal/include/opal/sys/atomic_impl.h&quot;, line 121: 
<br>
Error: opal_atomic_sub_64(volatile long long*, long long) was previously 
<br>
declared &quot;extern&quot;, not &quot;inline&quot;.
<br>
2 Error(s) detected.
<br>
make[2]: *** [mpicxx.lo] Error 1
<br>
make[1]: *** [all-recursive] Error 1
<br>
make: *** [all-recursive] Error 1
<br>
linpc1 openmpi-1.9-Linux.x86_64.32_cc 116 
<br>
<p><p><p>Kind regards
<br>
<p>Siegmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21276.php">Ralph Castain: "Re: [OMPI users] I have still a problem with rankfiles in openmpi-1.6.4rc3"</a>
<li><strong>Previous message:</strong> <a href="21274.php">Wesley Emeneker: "[OMPI users] unknown BTL transport in openmpi 1.5.4 and 1.6.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21277.php">Siegmar Gross: "Re: [OMPI users] [EXTERNAL] Re: problem building 32-bitopenmpi-1.9a1r27979 with Sun C"</a>
<li><strong>Maybe reply:</strong> <a href="21277.php">Siegmar Gross: "Re: [OMPI users] [EXTERNAL] Re: problem building 32-bitopenmpi-1.9a1r27979 with Sun C"</a>
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
