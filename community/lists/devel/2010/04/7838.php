<?
$subject_val = "Re: [OMPI devel] Porting OpenMPI to a new system";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 29 02:30:05 2010" -->
<!-- isoreceived="20100429063005" -->
<!-- sent="Thu, 29 Apr 2010 09:29:50 +0300" -->
<!-- isosent="20100429062950" -->
<!-- name="Ioannis E. Venetis" -->
<!-- email="venetis_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Porting OpenMPI to a new system" -->
<!-- id="4BD9275E.7010402_at_capsl.udel.edu" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="20100429060226.GB25584_at_gmx.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Porting OpenMPI to a new system<br>
<strong>From:</strong> Ioannis E. Venetis (<em>venetis_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-29 02:29:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7839.php">Jeff Squyres: "Re: [OMPI devel] Porting OpenMPI to a new system"</a>
<li><strong>Previous message:</strong> <a href="7837.php">Ralf Wildenhues: "Re: [OMPI devel] Porting OpenMPI to a new system"</a>
<li><strong>In reply to:</strong> <a href="7837.php">Ralf Wildenhues: "Re: [OMPI devel] Porting OpenMPI to a new system"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7839.php">Jeff Squyres: "Re: [OMPI devel] Porting OpenMPI to a new system"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Ralf,
<br>
<p>Thank you for answering.
<br>
<p>On 29/4/2010 9:02 &#207;&#128;&#206;&#188;, Ralf Wildenhues wrote:
<br>
<span class="quotelev1">&gt; Hello Ioannis,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * Ioannis E. Venetis wrote on Wed, Apr 28, 2010 at 05:34:47PM CEST:
</span><br>
<span class="quotelev2">&gt;&gt;    b) The cross-compilation environment should be run on a Linux x86_64
</span><br>
<span class="quotelev2">&gt;&gt; system. The cross-compiler, libraries, etc are already working, which
</span><br>
<span class="quotelev2">&gt;&gt; means that only OpenMPI needs to be ported right now. We use this
</span><br>
<span class="quotelev2">&gt;&gt; environment together with a simulator of the system, in order to
</span><br>
<span class="quotelev2">&gt;&gt; evaluate any changes in the architecture of the system. Using the
</span><br>
<span class="quotelev2">&gt;&gt; typical configure options of most applications, we would like to have
</span><br>
<span class="quotelev2">&gt;&gt; something like the following options in this case when building OpenMPI:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --host=x86_64-linux-gnu --build=&lt;our system triplet&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It looks like you are mixing up host and build.  build is the system you
</span><br>
<span class="quotelev1">&gt; run configure on, host is the system the generated OpenMPI will run on.
</span><br>
<span class="quotelev1">&gt; Also, x86_64-linux-gnu is not a valid triplet, as it is missing the
</span><br>
<span class="quotelev1">&gt; vendor bit.  x86_64-unknown-linux-gnu is valid.
</span><br>
<p>Oops, yes you are right of course.
<br>
<p><span class="quotelev1">&gt; If your new system is sufficiently different from existing systems, then
</span><br>
<span class="quotelev1">&gt; all kinds of files from the build system may need updating: config.guess
</span><br>
<span class="quotelev1">&gt; and config.sub (email to send patches to is listed in the files), the
</span><br>
<span class="quotelev1">&gt; Libtool macro files (write to bug-libtool_at_[hidden]).  But if you already
</span><br>
<span class="quotelev1">&gt; have a working cross compiler it doesn't seem to me like these steps
</span><br>
<span class="quotelev1">&gt; would be necessary.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>So, I should start from the config files, right? I am not certain why I 
<br>
would not need to change them, because of the existence of the 
<br>
cross-compiler. Now I need to config OpenMPI for my new system, so I 
<br>
assume that I need to make these changes. I will have a look and come 
<br>
back with any questions/problems.
<br>
<p>Thank you,
<br>
<p>Ioannis
<br>
<p><span class="quotelev1">&gt; For proper OpenMPI code I can't tell you which parts would need
</span><br>
<span class="quotelev1">&gt; adjustment.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Ralf
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7839.php">Jeff Squyres: "Re: [OMPI devel] Porting OpenMPI to a new system"</a>
<li><strong>Previous message:</strong> <a href="7837.php">Ralf Wildenhues: "Re: [OMPI devel] Porting OpenMPI to a new system"</a>
<li><strong>In reply to:</strong> <a href="7837.php">Ralf Wildenhues: "Re: [OMPI devel] Porting OpenMPI to a new system"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7839.php">Jeff Squyres: "Re: [OMPI devel] Porting OpenMPI to a new system"</a>
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
