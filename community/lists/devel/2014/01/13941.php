<?
$subject_val = "Re: [OMPI devel] 1.7.4rc2 is out";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 28 16:47:05 2014" -->
<!-- isoreceived="20140128214705" -->
<!-- sent="Tue, 28 Jan 2014 21:47:03 +0000" -->
<!-- isosent="20140128214703" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.7.4rc2 is out" -->
<!-- id="51873816-0BDE-410A-A672-3BE3E6A3F590_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="7D1D8562-0267-4687-AF71-9CB8129E63E8_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.7.4rc2 is out<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-28 16:47:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13942.php">Jeff Squyres (jsquyres): "[OMPI devel] (g)Fortran ABI breakage between 1.7.3 and 1.7.4"</a>
<li><strong>Previous message:</strong> <a href="13940.php">Marco Atzeri: "Re: [OMPI devel] 1.7.4rc2 is out"</a>
<li><strong>In reply to:</strong> <a href="13939.php">Dave Goodell (dgoodell): "Re: [OMPI devel] 1.7.4rc2 is out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13940.php">Marco Atzeri: "Re: [OMPI devel] 1.7.4rc2 is out"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Fixed - thanks for the heads-up.
<br>
<p><p>On Jan 28, 2014, at 3:40 PM, &quot;Dave Goodell (dgoodell)&quot; &lt;dgoodell_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Jan 28, 2014, at 2:18 PM, Orion Poplawski &lt;orion_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Why does mpio.h get installed?  For the Fedora package I end up with:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib64/openmpi/include/mpio.h
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; but it is listed here in openmpi-1.7.4rc2/ompi/mca/io/romio/romio/Makefile.am:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; # nodist_ b/c these are created by config.status and should not be distributed
</span><br>
<span class="quotelev2">&gt;&gt; nodist_include_HEADERS += include/mpio.h
</span><br>
<span class="quotelev2">&gt;&gt; noinst_HEADERS += include/io_romio_conv.h
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Confusion between nodist/noinst?  We define --includedir to be
</span><br>
<span class="quotelev2">&gt;&gt; /usr/include/openmpi-x86_64 so if it should be installed it should be
</span><br>
<span class="quotelev2">&gt;&gt; installed there.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't think there's any confusion.  This is just the way that ROMIO comes from upstream (the MPICH distribution).  The MPICH mpi.h file includes mpio.h by name, necessitating its installation:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://git.mpich.org/mpich.git/blob/HEAD:/src/include/mpi.h.in#l2159">http://git.mpich.org/mpich.git/blob/HEAD:/src/include/mpi.h.in#l2159</a>
</span><br>
<span class="quotelev1">&gt; <a href="http://git.mpich.org/mpich.git/blob/HEAD:/confdb/aclocal_mpi.m4#l509">http://git.mpich.org/mpich.git/blob/HEAD:/confdb/aclocal_mpi.m4#l509</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ----8&lt;----
</span><br>
<span class="quotelev1">&gt; $ cat -n mpi.h | grep -C4 'include &quot;mpio.h&quot;'
</span><br>
<span class="quotelev1">&gt;  2141  #define MPIIMPL_HAVE_MPI_GREQUEST 1      
</span><br>
<span class="quotelev1">&gt;  2142  #define MPIIMPL_HAVE_STATUS_SET_BYTES 1
</span><br>
<span class="quotelev1">&gt;  2143  #define MPIIMPL_HAVE_STATUS_SET_INFO 1
</span><br>
<span class="quotelev1">&gt;  2144
</span><br>
<span class="quotelev1">&gt;  2145  #include &quot;mpio.h&quot;
</span><br>
<span class="quotelev1">&gt;  2146
</span><br>
<span class="quotelev1">&gt;  2147  #if defined(__cplusplus)
</span><br>
<span class="quotelev1">&gt;  2148  }
</span><br>
<span class="quotelev1">&gt;  2149  /* Add the C++ bindings */
</span><br>
<span class="quotelev1">&gt; ----8&lt;----
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; IIRC, OMPI does not need this to be installed, so we could probably modify that Makefile.am to use noinst.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Dave
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13942.php">Jeff Squyres (jsquyres): "[OMPI devel] (g)Fortran ABI breakage between 1.7.3 and 1.7.4"</a>
<li><strong>Previous message:</strong> <a href="13940.php">Marco Atzeri: "Re: [OMPI devel] 1.7.4rc2 is out"</a>
<li><strong>In reply to:</strong> <a href="13939.php">Dave Goodell (dgoodell): "Re: [OMPI devel] 1.7.4rc2 is out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13940.php">Marco Atzeri: "Re: [OMPI devel] 1.7.4rc2 is out"</a>
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
