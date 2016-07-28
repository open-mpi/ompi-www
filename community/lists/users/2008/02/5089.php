<?
$subject_val = "Re: [OMPI users] Help understanding build option and warning messages, OMPI 1.2.4";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 27 15:28:38 2008" -->
<!-- isoreceived="20080227202838" -->
<!-- sent="Wed, 27 Feb 2008 21:27:41 +0100" -->
<!-- isosent="20080227202741" -->
<!-- name="Rainer Keller" -->
<!-- email="keller_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Help understanding build option and warning messages, OMPI 1.2.4" -->
<!-- id="200802272127.42591.keller_at_hlrs.de" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="411593EC-DF0C-46FF-BB6A-29E67B66CE01_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] Help understanding build option and warning messages, OMPI 1.2.4<br>
<strong>From:</strong> Rainer Keller (<em>keller_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-27 15:27:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5090.php">Albert Babinskas: "[OMPI users] Error compiling open-mpi"</a>
<li><strong>Previous message:</strong> <a href="5088.php">Tim Prins: "Re: [OMPI users] Cannot build 1.2.5"</a>
<li><strong>In reply to:</strong> <a href="5084.php">David Gunter: "[OMPI users] Help understanding build option and warning messages, OMPI 1.2.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5091.php">Brian W. Barrett: "Re: [OMPI users] Help understanding build option and warning messages, OMPI 1.2.4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Jenny and David,
<br>
On Wednesday 27 February 2008 17:42, David Gunter wrote:
<br>
<span class="quotelev1">&gt; We are trying to build OMPI-1.2.4 for a BProc/Ethernet-based cluster.
</span><br>
<span class="quotelev1">&gt; Here are the configure options:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=${PREFIX} \
</span><br>
<span class="quotelev1">&gt;    --libdir=${LIBDIR} \
</span><br>
<span class="quotelev1">&gt;    --enable-shared \
</span><br>
<span class="quotelev1">&gt;    --with-bproc \
</span><br>
<span class="quotelev1">&gt;    --with-tm=/opt/PBS \
</span><br>
<span class="quotelev1">&gt;    --with-io_romio_flags=--with-file-system=ufs+nfs \
</span><br>
<span class="quotelev1">&gt;    --disable-pty_support \
</span><br>
<span class="quotelev1">&gt;    --enable-mca-no-build=&quot;ras_tm,pls_tm&quot;
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; Isn't the --enable-mca-no-build=&quot;ras_tm,pls_tm&quot; option supposed to
</span><br>
<span class="quotelev1">&gt; remove these warnings?
</span><br>
In fact You may really want to build it, if You are using Torque. So please 
<br>
follow George's suggestion.
<br>
<p>However, for the record:
<br>
In order to *not* build the mca, You'd need to pass
<br>
--enable-mca-no-build=&quot;ras-tm,pls-tm&quot;
<br>
<p>If however, a dynamic library not being found proves to be the culprit, you 
<br>
may of course build those libraries statically:
<br>
--enable-mca-static=&quot;ras-tm,pls-tm&quot;.
<br>
<p>With best regards,
<br>
Rainer
<br>
<pre>
-- 
----------------------------------------------------------------
Dipl.-Inf. Rainer Keller   <a href="http://www.hlrs.de/people/keller">http://www.hlrs.de/people/keller</a>
 HLRS                          Tel: ++49 (0)711-685 6 5858
 Nobelstrasse 19                  Fax: ++49 (0)711-685 6 5832
 70550 Stuttgart                    email: keller_at_[hidden]     
 Germany                             AIM/Skype:rusraink
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5090.php">Albert Babinskas: "[OMPI users] Error compiling open-mpi"</a>
<li><strong>Previous message:</strong> <a href="5088.php">Tim Prins: "Re: [OMPI users] Cannot build 1.2.5"</a>
<li><strong>In reply to:</strong> <a href="5084.php">David Gunter: "[OMPI users] Help understanding build option and warning messages, OMPI 1.2.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5091.php">Brian W. Barrett: "Re: [OMPI users] Help understanding build option and warning messages, OMPI 1.2.4"</a>
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
