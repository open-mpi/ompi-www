<?
$subject_val = "Re: [OMPI users] /usr/bin/ld: skipping incompatible /usr/local/lib/libgcc_s.so when searching for -lgcc_s";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 13 11:23:10 2009" -->
<!-- isoreceived="20090213162310" -->
<!-- sent="Fri, 13 Feb 2009 17:22:59 +0100" -->
<!-- isosent="20090213162259" -->
<!-- name="Samuel Sarholz" -->
<!-- email="sarholz_at_[hidden]" -->
<!-- subject="Re: [OMPI users] /usr/bin/ld: skipping incompatible /usr/local/lib/libgcc_s.so when searching for -lgcc_s" -->
<!-- id="49959E63.1050803_at_rz.rwth-aachen.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="499584AB.3010806_at_calvin.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] /usr/bin/ld: skipping incompatible /usr/local/lib/libgcc_s.so when searching for -lgcc_s<br>
<strong>From:</strong> Samuel Sarholz (<em>sarholz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-13 11:22:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8067.php">Gary Draving: "Re: [OMPI users] /usr/bin/ld: skipping incompatible /usr/local/lib/libgcc_s.so when searching for -lgcc_s"</a>
<li><strong>Previous message:</strong> <a href="8065.php">Gary Draving: "[OMPI users] /usr/bin/ld: skipping incompatible /usr/local/lib/libgcc_s.so when searching for -lgcc_s"</a>
<li><strong>In reply to:</strong> <a href="8065.php">Gary Draving: "[OMPI users] /usr/bin/ld: skipping incompatible /usr/local/lib/libgcc_s.so when searching for -lgcc_s"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8067.php">Gary Draving: "Re: [OMPI users] /usr/bin/ld: skipping incompatible /usr/local/lib/libgcc_s.so when searching for -lgcc_s"</a>
<li><strong>Reply:</strong> <a href="8067.php">Gary Draving: "Re: [OMPI users] /usr/bin/ld: skipping incompatible /usr/local/lib/libgcc_s.so when searching for -lgcc_s"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Gary,
<br>
<p>that is a linker warning.
<br>
You probably have a libgcc_s.so in 32 and 64 bit. The linker finds the 
<br>
&quot;wrong&quot; version first and skips it. After that the matching one is 
<br>
linked and thus your program runs.
<br>
So nothing to worry about.
<br>
<p>To avoid the warning you can switch the (default) search order.
<br>
<p>best regards,
<br>
Samuel
<br>
<p><p><p>Gary Draving wrote:
<br>
<span class="quotelev1">&gt; Hi Everyone,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm getting a &quot;/usr/bin/ld: skipping incompatible 
</span><br>
<span class="quotelev1">&gt; /usr/local/lib/libgcc_s.so when searching for -lgcc_s&quot; when compiling 
</span><br>
<span class="quotelev1">&gt; some of the openmpi 1.3 examples.  The programs still compile and run.  
</span><br>
<span class="quotelev1">&gt; Does anyone know if this warning is something I should be concerned 
</span><br>
<span class="quotelev1">&gt; about and/or how I can get it resolved.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Gary
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [admin_at_compute-0-39 progs]$ /usr/local/bin/mpicc hello.c -o hello
</span><br>
<span class="quotelev1">&gt; /usr/bin/ld: skipping incompatible /usr/local/lib/libgcc_s.so when 
</span><br>
<span class="quotelev1">&gt; searching for -lgcc_s
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/x-pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8066/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8067.php">Gary Draving: "Re: [OMPI users] /usr/bin/ld: skipping incompatible /usr/local/lib/libgcc_s.so when searching for -lgcc_s"</a>
<li><strong>Previous message:</strong> <a href="8065.php">Gary Draving: "[OMPI users] /usr/bin/ld: skipping incompatible /usr/local/lib/libgcc_s.so when searching for -lgcc_s"</a>
<li><strong>In reply to:</strong> <a href="8065.php">Gary Draving: "[OMPI users] /usr/bin/ld: skipping incompatible /usr/local/lib/libgcc_s.so when searching for -lgcc_s"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8067.php">Gary Draving: "Re: [OMPI users] /usr/bin/ld: skipping incompatible /usr/local/lib/libgcc_s.so when searching for -lgcc_s"</a>
<li><strong>Reply:</strong> <a href="8067.php">Gary Draving: "Re: [OMPI users] /usr/bin/ld: skipping incompatible /usr/local/lib/libgcc_s.so when searching for -lgcc_s"</a>
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
