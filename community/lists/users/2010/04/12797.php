<?
$subject_val = "Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and 	CentOS";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 26 12:54:25 2010" -->
<!-- isoreceived="20100426165425" -->
<!-- sent="Mon, 26 Apr 2010 12:54:15 -0400" -->
<!-- isosent="20100426165415" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and 	CentOS" -->
<!-- id="4BD5C537.50209_at_ldeo.columbia.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="8739yiyzeh.fsf_at_liv.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and 	CentOS<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-26 12:54:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12798.php">Jeff Squyres: "Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and 	CentOS"</a>
<li><strong>Previous message:</strong> <a href="12796.php">TRINH Minh Hieu: "Re: [OMPI users] Segmentation fault when Send/Recv on heterogeneouscluster (32/64 bit machines) (Timur Magomedov)"</a>
<li><strong>In reply to:</strong> <a href="12793.php">Dave Love: "Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and 	CentOS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12823.php">Dave Love: "Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and 	CentOS"</a>
<li><strong>Reply:</strong> <a href="12823.php">Dave Love: "Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and 	CentOS"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dave Love wrote:
<br>
<span class="quotelev1">&gt; Asad Ali &lt;asad06_at_[hidden]&gt; writes:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt;From run to run the results can only be different if you either use
</span><br>
<span class="quotelev2">&gt;&gt; different input/output or use different random number seeds. Here in my case
</span><br>
<span class="quotelev2">&gt;&gt; the random number seeds are the same as well.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sorry, but that's na&#239;ve, even if you can prove your code is well-defined
</span><br>
<span class="quotelev1">&gt; according to the language and floating-point standards.  You should
</span><br>
<span class="quotelev1">&gt; listen to Ashley, and if it worries you, you really need just to debug
</span><br>
<span class="quotelev1">&gt; it.  If you believe it's a problem with open-mpi, you at least have to
</span><br>
<span class="quotelev1">&gt; demonstrate results with a different MPI.
</span><br>
<p>Or run a serial version on the same set of machines,
<br>
compiled in similar ways (compiler version, opt flags, etc)
<br>
to the parallel versions, and compare results.
<br>
If the results don't differ, then you can start blaming MPI.
<br>
<p>In my experience, most of the time MPI doesn't
<br>
contribute significantly or at all to the numerical
<br>
difference in results.
<br>
On the other hand, compiler flags (particularly optimization),
<br>
compiler versions, different hardware,
<br>
different OS, different libraries (e.g. math libraries),
<br>
have a significant effect.
<br>
<p>Bit-by-bit matching can be hardly achieved in complex programs.
<br>
It is a chimera.
<br>
You only give it a chance if you enforce IEEE standard
<br>
(which somebody already suggested to you),
<br>
and hope that the compiler really does it right.
<br>
However, beware that enforcing IEEE standard brings along a performance
<br>
penalty.
<br>
<p>Well designed algorithms are also important.
<br>
There are some old famous (infamous?) FFTs still in use out there
<br>
that can boost your round-off errors in a few iterations.
<br>
On different hardware, or with different optimization flags,
<br>
the error amplification can differ also.
<br>
<p>We run many complex programs that produce results that differ slightly.
<br>
The good ones produce differences at the round-off level.
<br>
But the world is not always so good.
<br>
<p>I hope this helps.
<br>
Gus Correa
<br>
<p><span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="12798.php">Jeff Squyres: "Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and 	CentOS"</a>
<li><strong>Previous message:</strong> <a href="12796.php">TRINH Minh Hieu: "Re: [OMPI users] Segmentation fault when Send/Recv on heterogeneouscluster (32/64 bit machines) (Timur Magomedov)"</a>
<li><strong>In reply to:</strong> <a href="12793.php">Dave Love: "Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and 	CentOS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12823.php">Dave Love: "Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and 	CentOS"</a>
<li><strong>Reply:</strong> <a href="12823.php">Dave Love: "Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and 	CentOS"</a>
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
