<?
$subject_val = "Re: [OMPI users] Windows: msv*.dll files presence in Release build";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul  5 04:13:03 2011" -->
<!-- isoreceived="20110705081303" -->
<!-- sent="Tue, 05 Jul 2011 10:12:59 +0200" -->
<!-- isosent="20110705081259" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Windows: msv*.dll files presence in Release build" -->
<!-- id="4E12C78B.7020703_at_hlrs.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAAfbs8tcAALhrNOg3DeavhaFYRq-Gkd20yoPsjbuwdqNVK2NeA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Windows: msv*.dll files presence in Release build<br>
<strong>From:</strong> Shiqing Fan (<em>fan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-05 04:12:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16815.php">Charles Bouillaguet: "[OMPI users] OpenMPI on Tile architectures (no atomic primitives)"</a>
<li><strong>Previous message:</strong> <a href="16813.php">Miguel Vargas Felix: "Re: [OMPI users] Anyone with Visual Studio + MPI Experience"</a>
<li><strong>In reply to:</strong> <a href="16809.php">hi: "Re: [OMPI users] Windows: msv*.dll files presence in Release build"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Hiral,
<br>
<p><span class="quotelev2">&gt;&gt; They are dependent libraries for OMPI libraries. It's the default behavior using CMake.
</span><br>
<span class="quotelev1">&gt; How to aviod this? Any workaround or fix?
</span><br>
<p>I'm not sure if it's possible. The msvc dll files are copied for new 
<br>
installation on computers, which might not have the required dependencies.
<br>
<p><span class="quotelev2">&gt;&gt; The postfix d means it's a debug version library. You can build release libraries which do not have this postfix.
</span><br>
<span class="quotelev1">&gt; I am building &quot;Release version&quot; from VS2008, even then it builds
</span><br>
<span class="quotelev1">&gt; *d.dll; how to resolve this?
</span><br>
<p>You have to change CMAKE_BUILD_TYPE to &quot;release&quot; first in the cmake GUI, 
<br>
and then change correspondingly the build type in VS.
<br>
<p><p>Regards,
<br>
Shiqing
<br>
<p><p><span class="quotelev1">&gt; Thank you.
</span><br>
<span class="quotelev1">&gt; -Hiral
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Jul 4, 2011 at 5:27 PM, Shiqing Fan&lt;fan_at_[hidden]&gt;  wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In this regard I have following two questions...
</span><br>
<span class="quotelev2">&gt;&gt; 1) For Release build using VS2008, why it generates msv*.dll files?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; They are dependent libraries for OMPI libraries. It's the default behavior using CMake.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2) For Release build using VS2008, why it generates *d.dll files (i.e. debug libraries)?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The postfix d means it's a debug version library. You can build release libraries which do not have this postfix.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; Shiqing
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; ---------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Shiqing Fan
</span><br>
<span class="quotelev2">&gt;&gt; High Performance Computing Center Stuttgart (HLRS)
</span><br>
<span class="quotelev2">&gt;&gt; Tel: ++49(0)711-685-87234      Nobelstrasse 19
</span><br>
<span class="quotelev2">&gt;&gt; Fax: ++49(0)711-685-65832      70569 Stuttgart
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.hlrs.de/organization/people/shiqing-fan/">http://www.hlrs.de/organization/people/shiqing-fan/</a>
</span><br>
<span class="quotelev2">&gt;&gt; email: fan_at_[hidden]
</span><br>
<p><p><pre>
-- 
---------------------------------------------------------------
Shiqing Fan
High Performance Computing Center Stuttgart (HLRS)
Tel: ++49(0)711-685-87234      Nobelstrasse 19
Fax: ++49(0)711-685-65832      70569 Stuttgart
<a href="http://www.hlrs.de/organization/people/shiqing-fan/">http://www.hlrs.de/organization/people/shiqing-fan/</a>
email: fan_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16815.php">Charles Bouillaguet: "[OMPI users] OpenMPI on Tile architectures (no atomic primitives)"</a>
<li><strong>Previous message:</strong> <a href="16813.php">Miguel Vargas Felix: "Re: [OMPI users] Anyone with Visual Studio + MPI Experience"</a>
<li><strong>In reply to:</strong> <a href="16809.php">hi: "Re: [OMPI users] Windows: msv*.dll files presence in Release build"</a>
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
