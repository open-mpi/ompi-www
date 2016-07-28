<?
$subject_val = "Re: [OMPI users] Not getting mpi.mod file from openmpi build and install";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 23 13:03:27 2010" -->
<!-- isoreceived="20100423170327" -->
<!-- sent="Fri, 23 Apr 2010 13:03:17 -0400" -->
<!-- isosent="20100423170317" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Not getting mpi.mod file from openmpi build and install" -->
<!-- id="1A23A2DC-EEE4-420D-8E7B-A2F3ADD2894C_at_cisco.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="07E77CF9C426584F8126A762FD1AFEA4145C044182_at_HDXMSPA.us.lmco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Not getting mpi.mod file from openmpi build and install<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-23 13:03:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12759.php">Francesco Iannone: "[OMPI users]  Openpi 1.4.1 PGI 10.2.1 libpgnuma issue"</a>
<li><strong>Previous message:</strong> <a href="12757.php">Ralph Castain: "Re: [OMPI users] Trouble using rankfile with gridengine"</a>
<li><strong>In reply to:</strong> <a href="12742.php">Price, Brian M (N-KCI): "[OMPI users] Not getting mpi.mod file from openmpi build and install"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
OMPI's configure script is probably somehow determining that it can't build the F90 bindings for some reason.  Can you send the stdout/stderr from running configure, and your config.log?  (please compress)
<br>
<p><p>On Apr 22, 2010, at 8:10 PM, Price, Brian M (N-KCI) wrote:
<br>
<p><span class="quotelev1">&gt; OpenMPI version: 1.3.3
</span><br>
<span class="quotelev1">&gt; Platform: IBM P5
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; If I configure with just the --prefix option for where to install, and then run &#147;make all install&#148;, I get an &#147;mpi.mod&#148; file in the &#147;lib&#148; directory of the prefix directory I specified.  ALL GOOD!
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; When I add compiler options to the configure script (e.g. &#147;CC=xlC_r CXX=xlC_r FC=xlf95_r&#148;), I no longer get the &#147;mpi.mod&#148; file.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I have traced this to the Makefile in the &#147;ompi/mpi/f90&#148; directory.  When I add the compiler options to the configure script, a bunch of lines get commented out of the Makefile, including the ones that look like they build the &#147;mpi.mod&#148; file.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Can anyone tell me why this happens?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12759.php">Francesco Iannone: "[OMPI users]  Openpi 1.4.1 PGI 10.2.1 libpgnuma issue"</a>
<li><strong>Previous message:</strong> <a href="12757.php">Ralph Castain: "Re: [OMPI users] Trouble using rankfile with gridengine"</a>
<li><strong>In reply to:</strong> <a href="12742.php">Price, Brian M (N-KCI): "[OMPI users] Not getting mpi.mod file from openmpi build and install"</a>
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
