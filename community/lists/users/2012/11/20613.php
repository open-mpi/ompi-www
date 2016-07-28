<?
$subject_val = "Re: [OMPI users] tester for cygwin openmpi-1.6.3 package";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  1 14:47:24 2012" -->
<!-- isoreceived="20121101184724" -->
<!-- sent="Thu, 01 Nov 2012 19:47:17 +0100" -->
<!-- isosent="20121101184717" -->
<!-- name="marco atzeri" -->
<!-- email="marco.atzeri_at_[hidden]" -->
<!-- subject="Re: [OMPI users] tester for cygwin openmpi-1.6.3 package" -->
<!-- id="5092C3B5.2000600_at_gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="58A3CFCC-4322-417B-9E59-CAF4E040284C_at_open-mpi.org" -->
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
<strong>From:</strong> marco atzeri (<em>marco.atzeri_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-01 14:47:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20614.php">Ralph Castain: "Re: [OMPI users] tester for cygwin openmpi-1.6.3 package"</a>
<li><strong>Previous message:</strong> <a href="20612.php">Ralph Castain: "Re: [OMPI users] tester for cygwin openmpi-1.6.3 package"</a>
<li><strong>In reply to:</strong> <a href="20612.php">Ralph Castain: "Re: [OMPI users] tester for cygwin openmpi-1.6.3 package"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20614.php">Ralph Castain: "Re: [OMPI users] tester for cygwin openmpi-1.6.3 package"</a>
<li><strong>Reply:</strong> <a href="20614.php">Ralph Castain: "Re: [OMPI users] tester for cygwin openmpi-1.6.3 package"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 11/1/2012 5:08 PM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; I think we'd be interested in looking at possibly adding this to the
</span><br>
<span class="quotelev1">&gt; code base. We still need to announce this (and will shortly), but our
</span><br>
<span class="quotelev1">&gt; Windows maintainer has moved on to other pastures. So support for native
</span><br>
<span class="quotelev1">&gt; Windows operations is ending with the 1.6 series, barring someone
</span><br>
<span class="quotelev1">&gt; stepping up to fill the void.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Having a cygwin alternative would let people at least continue to work
</span><br>
<span class="quotelev1">&gt; on the Windows platform, albeit in a different mode. Is this something
</span><br>
<span class="quotelev1">&gt; you are interested in pursuing?
</span><br>
<p>Hi Ralph,
<br>
there is no special code on my packages, so deploying a cygwin package
<br>
was already on my plan.
<br>
It will be just an addition to the other packages for which I am already
<br>
the cygwin package maintainer
<br>
<a href="http://cygwin.com/cygwin-pkg-maint">http://cygwin.com/cygwin-pkg-maint</a>
<br>
<p>I want just to be sure that it works as expect before deploying it,
<br>
and testing on a notebook is a bit limited.
<br>
<p>The only peculiarity I noticed is that the stripped binaries do
<br>
not work, so the current package is based on unstripped installation.
<br>
<p>Other step is to look if other options can be enabled:
<br>
<p>&nbsp;&nbsp;&nbsp;LDFLAGS=&quot;-Wl,--export-all-symbols -no-undefined&quot;  \
<br>
&nbsp;&nbsp;&nbsp;--disable-mca-dso \
<br>
&nbsp;&nbsp;&nbsp;--without-udapl \
<br>
&nbsp;&nbsp;&nbsp;--enable-cxx-exceptions \
<br>
&nbsp;&nbsp;&nbsp;--with-threads=posix \
<br>
&nbsp;&nbsp;&nbsp;--without-cs-fs \
<br>
&nbsp;&nbsp;&nbsp;--enable-heterogeneous \
<br>
&nbsp;&nbsp;&nbsp;--with-mpi-param_check=always \
<br>
&nbsp;&nbsp;&nbsp;--enable-contrib-no-build=vt,libompitrace \
<br>
&nbsp;
<br>
--enable-mca-no-build=memory_mallopt,paffinity,installdirs-windows,timer-windows,shmem-sysv
<br>
<p>at least &quot;shmem-sysv&quot; should be possible.
<br>
<p>Regards
<br>
Marco
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20614.php">Ralph Castain: "Re: [OMPI users] tester for cygwin openmpi-1.6.3 package"</a>
<li><strong>Previous message:</strong> <a href="20612.php">Ralph Castain: "Re: [OMPI users] tester for cygwin openmpi-1.6.3 package"</a>
<li><strong>In reply to:</strong> <a href="20612.php">Ralph Castain: "Re: [OMPI users] tester for cygwin openmpi-1.6.3 package"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20614.php">Ralph Castain: "Re: [OMPI users] tester for cygwin openmpi-1.6.3 package"</a>
<li><strong>Reply:</strong> <a href="20614.php">Ralph Castain: "Re: [OMPI users] tester for cygwin openmpi-1.6.3 package"</a>
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
