<?
$subject_val = "Re: [OMPI users] tester for cygwin openmpi-1.6.3 package";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  1 15:08:09 2012" -->
<!-- isoreceived="20121101190809" -->
<!-- sent="Thu, 01 Nov 2012 20:08:04 +0100" -->
<!-- isosent="20121101190804" -->
<!-- name="marco atzeri" -->
<!-- email="marco.atzeri_at_[hidden]" -->
<!-- subject="Re: [OMPI users] tester for cygwin openmpi-1.6.3 package" -->
<!-- id="5092C894.9070302_at_gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="3EA75157-5810-4D1B-BF85-6F7E032EECBF_at_open-mpi.org" -->
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
<strong>From:</strong> marco atzeri (<em>marco.atzeri_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-01 15:08:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20605.php">Richard Shaw: "Re: [OMPI users] 2 GB limitation of MPI_File_write_all"</a>
<li><strong>Previous message:</strong> <a href="20603.php">Ralph Castain: "Re: [OMPI users] tester for cygwin openmpi-1.6.3 package"</a>
<li><strong>In reply to:</strong> <a href="20603.php">Ralph Castain: "Re: [OMPI users] tester for cygwin openmpi-1.6.3 package"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20614.php">Ralph Castain: "Re: [OMPI users] tester for cygwin openmpi-1.6.3 package"</a>
<li><strong>Reply:</strong> <a href="20614.php">Ralph Castain: "Re: [OMPI users] tester for cygwin openmpi-1.6.3 package"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 11/1/2012 7:55 PM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 1, 2012, at 11:47 AM, marco atzeri &lt;marco.atzeri_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 11/1/2012 5:08 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I think we'd be interested in looking at possibly adding this to the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; code base. We still need to announce this (and will shortly), but our
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Windows maintainer has moved on to other pastures. So support for native
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Windows operations is ending with the 1.6 series, barring someone
</span><br>
<span class="quotelev3">&gt;&gt;&gt; stepping up to fill the void.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Having a cygwin alternative would let people at least continue to work
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on the Windows platform, albeit in a different mode. Is this something
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you are interested in pursuing?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Ralph,
</span><br>
<span class="quotelev2">&gt;&gt; there is no special code on my packages, so deploying a cygwin package
</span><br>
<span class="quotelev2">&gt;&gt; was already on my plan.
</span><br>
<span class="quotelev2">&gt;&gt; It will be just an addition to the other packages for which I am already
</span><br>
<span class="quotelev2">&gt;&gt; the cygwin package maintainer
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://cygwin.com/cygwin-pkg-maint">http://cygwin.com/cygwin-pkg-maint</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I want just to be sure that it works as expect before deploying it,
</span><br>
<span class="quotelev2">&gt;&gt; and testing on a notebook is a bit limited.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The only peculiarity I noticed is that the stripped binaries do
</span><br>
<span class="quotelev2">&gt;&gt; not work, so the current package is based on unstripped installation.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Other step is to look if other options can be enabled:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   LDFLAGS=&quot;-Wl,--export-all-symbols -no-undefined&quot;  \
</span><br>
<span class="quotelev2">&gt;&gt;   --disable-mca-dso \
</span><br>
<span class="quotelev2">&gt;&gt;   --without-udapl \
</span><br>
<span class="quotelev2">&gt;&gt;   --enable-cxx-exceptions \
</span><br>
<span class="quotelev2">&gt;&gt;   --with-threads=posix \
</span><br>
<span class="quotelev2">&gt;&gt;   --without-cs-fs \
</span><br>
<span class="quotelev2">&gt;&gt;   --enable-heterogeneous \
</span><br>
<span class="quotelev2">&gt;&gt;   --with-mpi-param_check=always \
</span><br>
<span class="quotelev2">&gt;&gt;   --enable-contrib-no-build=vt,libompitrace \
</span><br>
<span class="quotelev2">&gt;&gt; --enable-mca-no-build=memory_mallopt,paffinity,installdirs-windows,timer-windows,shmem-sysv
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; at least &quot;shmem-sysv&quot; should be possible.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I see - that is even better than I had hoped! One question for you: does this only allow single-machine operations, or can people run across machines, assuming both are executing cygwin?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Guess I'm not sure how the latter would work, but my knowledge of cygwin is very old.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>across machine with ssh should work, but I have no way to test in
<br>
this moment.
<br>
<p>Marco
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20605.php">Richard Shaw: "Re: [OMPI users] 2 GB limitation of MPI_File_write_all"</a>
<li><strong>Previous message:</strong> <a href="20603.php">Ralph Castain: "Re: [OMPI users] tester for cygwin openmpi-1.6.3 package"</a>
<li><strong>In reply to:</strong> <a href="20603.php">Ralph Castain: "Re: [OMPI users] tester for cygwin openmpi-1.6.3 package"</a>
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
