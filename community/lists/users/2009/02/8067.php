<?
$subject_val = "Re: [OMPI users] /usr/bin/ld: skipping incompatible /usr/local/lib/libgcc_s.so when searching for -lgcc_s";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 13 11:45:44 2009" -->
<!-- isoreceived="20090213164544" -->
<!-- sent="Fri, 13 Feb 2009 11:37:41 -0500" -->
<!-- isosent="20090213163741" -->
<!-- name="Gary Draving" -->
<!-- email="gbd2_at_[hidden]" -->
<!-- subject="Re: [OMPI users] /usr/bin/ld: skipping incompatible /usr/local/lib/libgcc_s.so when searching for -lgcc_s" -->
<!-- id="4995A1D5.4070009_at_calvin.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="49959E63.1050803_at_rz.rwth-aachen.de" -->
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
<strong>From:</strong> Gary Draving (<em>gbd2_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-13 11:37:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8068.php">Jeff Squyres: "Re: [OMPI users] MPI_Test bug?"</a>
<li><strong>Previous message:</strong> <a href="8066.php">Samuel Sarholz: "Re: [OMPI users] /usr/bin/ld: skipping incompatible /usr/local/lib/libgcc_s.so when searching for -lgcc_s"</a>
<li><strong>In reply to:</strong> <a href="8066.php">Samuel Sarholz: "Re: [OMPI users] /usr/bin/ld: skipping incompatible /usr/local/lib/libgcc_s.so when searching for -lgcc_s"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks!, I was thinking is was something like that.
<br>
<p>Gary
<br>
<p>Samuel Sarholz wrote:
<br>
<span class="quotelev1">&gt; Hi Gary,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; that is a linker warning.
</span><br>
<span class="quotelev1">&gt; You probably have a libgcc_s.so in 32 and 64 bit. The linker finds the 
</span><br>
<span class="quotelev1">&gt; &quot;wrong&quot; version first and skips it. After that the matching one is 
</span><br>
<span class="quotelev1">&gt; linked and thus your program runs.
</span><br>
<span class="quotelev1">&gt; So nothing to worry about.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To avoid the warning you can switch the (default) search order.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; best regards,
</span><br>
<span class="quotelev1">&gt; Samuel
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gary Draving wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi Everyone,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm getting a &quot;/usr/bin/ld: skipping incompatible 
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/lib/libgcc_s.so when searching for -lgcc_s&quot; when compiling 
</span><br>
<span class="quotelev2">&gt;&gt; some of the openmpi 1.3 examples.  The programs still compile and 
</span><br>
<span class="quotelev2">&gt;&gt; run.  Does anyone know if this warning is something I should be 
</span><br>
<span class="quotelev2">&gt;&gt; concerned about and/or how I can get it resolved.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Gary
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [admin_at_compute-0-39 progs]$ /usr/local/bin/mpicc hello.c -o hello
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/ld: skipping incompatible /usr/local/lib/libgcc_s.so when 
</span><br>
<span class="quotelev2">&gt;&gt; searching for -lgcc_s
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8068.php">Jeff Squyres: "Re: [OMPI users] MPI_Test bug?"</a>
<li><strong>Previous message:</strong> <a href="8066.php">Samuel Sarholz: "Re: [OMPI users] /usr/bin/ld: skipping incompatible /usr/local/lib/libgcc_s.so when searching for -lgcc_s"</a>
<li><strong>In reply to:</strong> <a href="8066.php">Samuel Sarholz: "Re: [OMPI users] /usr/bin/ld: skipping incompatible /usr/local/lib/libgcc_s.so when searching for -lgcc_s"</a>
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
