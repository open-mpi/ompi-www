<?
$subject_val = "Re: [OMPI users] [ompi-1.4.1] compiling without openib, running with openib + ompi141 and gcc3";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 26 10:32:58 2010" -->
<!-- isoreceived="20100126153258" -->
<!-- sent="Tue, 26 Jan 2010 10:32:53 -0500" -->
<!-- isosent="20100126153253" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [ompi-1.4.1] compiling without openib, running with openib + ompi141 and gcc3" -->
<!-- id="F6C607FC-B732-4633-B9B6-AFE3F32AD5ED_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4B5EB457.4090007_at_laposte.net" -->
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
<strong>Subject:</strong> Re: [OMPI users] [ompi-1.4.1] compiling without openib, running with openib + ompi141 and gcc3<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-26 10:32:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11894.php">Sangamesh B: "[OMPI users] How to check OMPI is using IB or not?"</a>
<li><strong>Previous message:</strong> <a href="11892.php">Shiqing Fan: "Re: [OMPI users] Windows CMake build problems ..."</a>
<li><strong>In reply to:</strong> <a href="11887.php">Mathieu Gontier: "Re: [OMPI users] [ompi-1.4.1] compiling without openib, running with openib + ompi141 and gcc3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/02/11954.php">Mathieu Gontier: "Re: [OMPI users] [ompi-1.4.1] compiling without openib, running with openib + ompi141 and gcc3"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/02/11954.php">Mathieu Gontier: "Re: [OMPI users] [ompi-1.4.1] compiling without openib, running with openib + ompi141 and gcc3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 26, 2010, at 4:22 AM, Mathieu Gontier wrote:
<br>
<p><span class="quotelev1">&gt; 1/ I rebuilt without --enable-dist (more secured indeed) and with explicit --without-openib/--with-openib : behaviors are better. Great.
</span><br>
<p>Excellent.  I didn't mention it in my prior email, but our configure behaviors are generally:
<br>
<p>--with-&lt;foo&gt;: Build with foo support.  If foo support is not available, fail/abort configure
<br>
--without-&lt;foo&gt;: Don't even check for foo support; don't build it at all.
<br>
neither: check for foo support.  If foo support is available, build it.  If not available, skip it.
<br>
<p><span class="quotelev1">&gt; 2/ Yes, my PATH and LD_LIBRARY_PATH are correctly set
</span><br>
<span class="quotelev1">&gt; 3/ There certainly were previous installations of OpenMPI on this machine, but not in the same directory; before rebuilt, I correctly uninstall the previous installations (thank you for the tip)
</span><br>
<span class="quotelev1">&gt; 4/ Is there a way to have the list of the plugins in OFED?
</span><br>
<p>Not really.  The verbs library (the &quot;native&quot; networking API for Openfabrics) has plugins similar to Open MPI, but they don't have an ompi_info-like command that shows what plugins are available.  IIRC, verbs has only 1 type a plugin: to service an underlying device type.  IIRC, the names of the drivers are:
<br>
<p>- nes: NetEffect / Intel RNICs
<br>
- cxgb3: Chelsio T3 RNICs
<br>
- mlx: Mellanox ConnectX HCAs
<br>
- mthca: Mellanox earlier HCAs
<br>
- ipath: QLogic HCAs
<br>
<p>That's off the top of my head and it may not be a comprehensive list.  Check the installed software on your machine to see what you have.
<br>
<p><span class="quotelev1">&gt; 5/ Yes, good messages about the device will be welcome, but with 1/ it is really better now
</span><br>
<span class="quotelev1">&gt; 6/ The message is really more explicit explained like that (thanks)
</span><br>
<span class="quotelev1">&gt; 7/ I built both my small test and OpenMPI-1.4.1 directly on my cluster with gcc-3.4 and I still have this error. Do you have any idea where the problem could come from? 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   opal_memchecker_base_select failed
</span><br>
<span class="quotelev1">&gt;   --&gt; Returned value -13 instead of OPAL_SUCCESS
</span><br>
<p>That's an odd one.  Can you send your exact configure line again, and perhaps the output from configure?  (please compress -- see <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>).
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11894.php">Sangamesh B: "[OMPI users] How to check OMPI is using IB or not?"</a>
<li><strong>Previous message:</strong> <a href="11892.php">Shiqing Fan: "Re: [OMPI users] Windows CMake build problems ..."</a>
<li><strong>In reply to:</strong> <a href="11887.php">Mathieu Gontier: "Re: [OMPI users] [ompi-1.4.1] compiling without openib, running with openib + ompi141 and gcc3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/02/11954.php">Mathieu Gontier: "Re: [OMPI users] [ompi-1.4.1] compiling without openib, running with openib + ompi141 and gcc3"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/02/11954.php">Mathieu Gontier: "Re: [OMPI users] [ompi-1.4.1] compiling without openib, running with openib + ompi141 and gcc3"</a>
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
