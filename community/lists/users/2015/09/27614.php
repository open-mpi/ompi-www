<?
$subject_val = "Re: [OMPI users] Problem with using MPI in a Python extension";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 17 14:22:16 2015" -->
<!-- isoreceived="20150917182216" -->
<!-- sent="Thu, 17 Sep 2015 21:21:55 +0300" -->
<!-- isosent="20150917182155" -->
<!-- name="Lisandro Dalcin" -->
<!-- email="dalcinl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with using MPI in a Python extension" -->
<!-- id="CAEcYPwCqqvrt8ssUhCOFTL=5_7Xc5WYp-0ziWEm_=GQ-s=R1yw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="86C8071D-E68B-4724-9095-296E3EC0A7B8_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem with using MPI in a Python extension<br>
<strong>From:</strong> Lisandro Dalcin (<em>dalcinl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-17 14:21:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27615.php">Nick Papior: "Re: [OMPI users] Problem with using MPI in a Python extension"</a>
<li><strong>Previous message:</strong> <a href="27613.php">Joel Hermanns: "Re: [OMPI users] Problem with using MPI in a Python extension"</a>
<li><strong>In reply to:</strong> <a href="27611.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem with using MPI in a Python extension"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 17 September 2015 at 18:56, Jeff Squyres (jsquyres)
<br>
&lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; On Sep 17, 2015, at 11:44 AM, Joel Hermanns &lt;joel.hermanns_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for the quick answer!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Be sure to see Nick's answer, too -- mpi4py is a nice package.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have a few questions now:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1. Are there any downsides of using &#226;&#128;&#148;disable-dlopen?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You won't be able to add or remove plugins in the filesystem after you do the Open MPI installation.  But that's a pretty unusual thing to do, so I wouldn't worry about it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2. Are there any other options? We might not be able to change MPI installation, when this is running on a supercomputer.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm not super familiar with Python and its extension capabilities -- Nick's email implies that there's a different way to solve the problem, and I confess to not remembering what mpi4py does, offhand.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>mpi4py just calls
<br>
<p>dlopen(&quot;libmpi.so&quot;, RTLD_NOW | RTLD_GLOBAL | RTLD_NOLOAD);
<br>
<p>before calling MPI_Init(), see the code below:
<br>
<p><a href="https://bitbucket.org/mpi4py/mpi4py/src/master/src/lib-mpi/compat/openmpi.h?fileviewer=file-view-default#openmpi.h-52">https://bitbucket.org/mpi4py/mpi4py/src/master/src/lib-mpi/compat/openmpi.h?fileviewer=file-view-default#openmpi.h-52</a>
<br>
<p><p><p><pre>
-- 
Lisandro Dalcin
============
Research Scientist
Computer, Electrical and Mathematical Sciences &amp; Engineering (CEMSE)
Numerical Porous Media Center (NumPor)
King Abdullah University of Science and Technology (KAUST)
<a href="http://numpor.kaust.edu.sa/">http://numpor.kaust.edu.sa/</a>
4700 King Abdullah University of Science and Technology
al-Khawarizmi Bldg (Bldg 1), Office # 4332
Thuwal 23955-6900, Kingdom of Saudi Arabia
<a href="http://www.kaust.edu.sa">http://www.kaust.edu.sa</a>
Office Phone: +966 12 808-0459
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27615.php">Nick Papior: "Re: [OMPI users] Problem with using MPI in a Python extension"</a>
<li><strong>Previous message:</strong> <a href="27613.php">Joel Hermanns: "Re: [OMPI users] Problem with using MPI in a Python extension"</a>
<li><strong>In reply to:</strong> <a href="27611.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem with using MPI in a Python extension"</a>
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
