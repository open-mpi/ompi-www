<?
$subject_val = "Re: [OMPI users] tester for cygwin openmpi-1.6.3 package";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  1 14:56:03 2012" -->
<!-- isoreceived="20121101185603" -->
<!-- sent="Thu, 1 Nov 2012 11:55:56 -0700" -->
<!-- isosent="20121101185556" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] tester for cygwin openmpi-1.6.3 package" -->
<!-- id="3EA75157-5810-4D1B-BF85-6F7E032EECBF_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5092C3B5.2000600_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] tester for cygwin openmpi-1.6.3 package<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-01 14:55:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20615.php">marco atzeri: "Re: [OMPI users] tester for cygwin openmpi-1.6.3 package"</a>
<li><strong>Previous message:</strong> <a href="20613.php">marco atzeri: "Re: [OMPI users] tester for cygwin openmpi-1.6.3 package"</a>
<li><strong>In reply to:</strong> <a href="20613.php">marco atzeri: "Re: [OMPI users] tester for cygwin openmpi-1.6.3 package"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20615.php">marco atzeri: "Re: [OMPI users] tester for cygwin openmpi-1.6.3 package"</a>
<li><strong>Reply:</strong> <a href="20615.php">marco atzeri: "Re: [OMPI users] tester for cygwin openmpi-1.6.3 package"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 1, 2012, at 11:47 AM, marco atzeri &lt;marco.atzeri_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On 11/1/2012 5:08 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I think we'd be interested in looking at possibly adding this to the
</span><br>
<span class="quotelev2">&gt;&gt; code base. We still need to announce this (and will shortly), but our
</span><br>
<span class="quotelev2">&gt;&gt; Windows maintainer has moved on to other pastures. So support for native
</span><br>
<span class="quotelev2">&gt;&gt; Windows operations is ending with the 1.6 series, barring someone
</span><br>
<span class="quotelev2">&gt;&gt; stepping up to fill the void.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Having a cygwin alternative would let people at least continue to work
</span><br>
<span class="quotelev2">&gt;&gt; on the Windows platform, albeit in a different mode. Is this something
</span><br>
<span class="quotelev2">&gt;&gt; you are interested in pursuing?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt; there is no special code on my packages, so deploying a cygwin package
</span><br>
<span class="quotelev1">&gt; was already on my plan.
</span><br>
<span class="quotelev1">&gt; It will be just an addition to the other packages for which I am already
</span><br>
<span class="quotelev1">&gt; the cygwin package maintainer
</span><br>
<span class="quotelev1">&gt; <a href="http://cygwin.com/cygwin-pkg-maint">http://cygwin.com/cygwin-pkg-maint</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I want just to be sure that it works as expect before deploying it,
</span><br>
<span class="quotelev1">&gt; and testing on a notebook is a bit limited.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The only peculiarity I noticed is that the stripped binaries do
</span><br>
<span class="quotelev1">&gt; not work, so the current package is based on unstripped installation.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Other step is to look if other options can be enabled:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  LDFLAGS=&quot;-Wl,--export-all-symbols -no-undefined&quot;  \
</span><br>
<span class="quotelev1">&gt;  --disable-mca-dso \
</span><br>
<span class="quotelev1">&gt;  --without-udapl \
</span><br>
<span class="quotelev1">&gt;  --enable-cxx-exceptions \
</span><br>
<span class="quotelev1">&gt;  --with-threads=posix \
</span><br>
<span class="quotelev1">&gt;  --without-cs-fs \
</span><br>
<span class="quotelev1">&gt;  --enable-heterogeneous \
</span><br>
<span class="quotelev1">&gt;  --with-mpi-param_check=always \
</span><br>
<span class="quotelev1">&gt;  --enable-contrib-no-build=vt,libompitrace \
</span><br>
<span class="quotelev1">&gt; --enable-mca-no-build=memory_mallopt,paffinity,installdirs-windows,timer-windows,shmem-sysv
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; at least &quot;shmem-sysv&quot; should be possible.
</span><br>
<p>I see - that is even better than I had hoped! One question for you: does this only allow single-machine operations, or can people run across machines, assuming both are executing cygwin?
<br>
<p>Guess I'm not sure how the latter would work, but my knowledge of cygwin is very old.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt; Marco
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
<li><strong>Next message:</strong> <a href="20615.php">marco atzeri: "Re: [OMPI users] tester for cygwin openmpi-1.6.3 package"</a>
<li><strong>Previous message:</strong> <a href="20613.php">marco atzeri: "Re: [OMPI users] tester for cygwin openmpi-1.6.3 package"</a>
<li><strong>In reply to:</strong> <a href="20613.php">marco atzeri: "Re: [OMPI users] tester for cygwin openmpi-1.6.3 package"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20615.php">marco atzeri: "Re: [OMPI users] tester for cygwin openmpi-1.6.3 package"</a>
<li><strong>Reply:</strong> <a href="20615.php">marco atzeri: "Re: [OMPI users] tester for cygwin openmpi-1.6.3 package"</a>
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
