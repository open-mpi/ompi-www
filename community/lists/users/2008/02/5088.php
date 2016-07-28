<?
$subject_val = "Re: [OMPI users] Cannot build 1.2.5";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 27 15:20:26 2008" -->
<!-- isoreceived="20080227202026" -->
<!-- sent="Wed, 27 Feb 2008 15:20:25 -0500" -->
<!-- isosent="20080227202025" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Cannot build 1.2.5" -->
<!-- id="47C5C609.9_at_open-mpi.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20080227145138.gmei6ow7k8wg40og_at_webmail.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Cannot build 1.2.5<br>
<strong>From:</strong> Tim Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-27 15:20:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5089.php">Rainer Keller: "Re: [OMPI users] Help understanding build option and warning messages, OMPI 1.2.4"</a>
<li><strong>Previous message:</strong> <a href="5087.php">Teige,  Scott W: "[OMPI users] Cannot build 1.2.5"</a>
<li><strong>In reply to:</strong> <a href="5087.php">Teige,  Scott W: "[OMPI users] Cannot build 1.2.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5093.php">Tim Prins: "Re: [OMPI users] Cannot build 1.2.5"</a>
<li><strong>Reply:</strong> <a href="5093.php">Tim Prins: "Re: [OMPI users] Cannot build 1.2.5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Scott,
<br>
<p>I can replicate this on big red. Seems to be a libtool problem. I'll 
<br>
investigate...
<br>
<p>Thanks,
<br>
<p>Tim
<br>
<p>Teige, Scott W wrote:
<br>
<span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Attempting a build of 1.2.5 on a ppc machine, particulars:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; uname -a
</span><br>
<span class="quotelev1">&gt; Linux s10c2b2 2.6.5-7.286-pseries64-lustre-1.4.10.1 #2 SMP Tue Jun 26 
</span><br>
<span class="quotelev1">&gt; 11:36:04 EDT 2007 ppc64 ppc64 ppc64 GNU/Linux
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Error message (many times)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ../../../opal/.libs/libopen-pal.a(dlopen.o)(.opd+0x0): In function 
</span><br>
<span class="quotelev1">&gt; `__argz_next':
</span><br>
<span class="quotelev1">&gt; : multiple definition of `__argz_next'
</span><br>
<span class="quotelev1">&gt; ../../../opal/.libs/libopen-pal.a(libltdlc_la-ltdl.o)(.opd+0x0): first 
</span><br>
<span class="quotelev1">&gt; defined here
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Output from ./configure  and make all is attached.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for the help,
</span><br>
<span class="quotelev1">&gt; S.
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="5089.php">Rainer Keller: "Re: [OMPI users] Help understanding build option and warning messages, OMPI 1.2.4"</a>
<li><strong>Previous message:</strong> <a href="5087.php">Teige,  Scott W: "[OMPI users] Cannot build 1.2.5"</a>
<li><strong>In reply to:</strong> <a href="5087.php">Teige,  Scott W: "[OMPI users] Cannot build 1.2.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5093.php">Tim Prins: "Re: [OMPI users] Cannot build 1.2.5"</a>
<li><strong>Reply:</strong> <a href="5093.php">Tim Prins: "Re: [OMPI users] Cannot build 1.2.5"</a>
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
