<?
$subject_val = "Re: [OMPI devel] 1.7.4rc2 is out";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 28 15:40:23 2014" -->
<!-- isoreceived="20140128204023" -->
<!-- sent="Tue, 28 Jan 2014 20:40:22 +0000" -->
<!-- isosent="20140128204022" -->
<!-- name="Dave Goodell (dgoodell)" -->
<!-- email="dgoodell_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.7.4rc2 is out" -->
<!-- id="7D1D8562-0267-4687-AF71-9CB8129E63E8_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="52E8107B.2050504_at_cora.nwra.com" -->
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
<strong>From:</strong> Dave Goodell (dgoodell) (<em>dgoodell_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-28 15:40:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13940.php">Marco Atzeri: "Re: [OMPI devel] 1.7.4rc2 is out"</a>
<li><strong>Previous message:</strong> <a href="13938.php">Orion Poplawski: "Re: [OMPI devel] 1.7.4rc2 is out"</a>
<li><strong>In reply to:</strong> <a href="13938.php">Orion Poplawski: "Re: [OMPI devel] 1.7.4rc2 is out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13941.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc2 is out"</a>
<li><strong>Reply:</strong> <a href="13941.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc2 is out"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 28, 2014, at 2:18 PM, Orion Poplawski &lt;orion_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Why does mpio.h get installed?  For the Fedora package I end up with:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /usr/lib64/openmpi/include/mpio.h
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; but it is listed here in openmpi-1.7.4rc2/ompi/mca/io/romio/romio/Makefile.am:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # nodist_ b/c these are created by config.status and should not be distributed
</span><br>
<span class="quotelev1">&gt; nodist_include_HEADERS += include/mpio.h
</span><br>
<span class="quotelev1">&gt; noinst_HEADERS += include/io_romio_conv.h
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Confusion between nodist/noinst?  We define --includedir to be
</span><br>
<span class="quotelev1">&gt; /usr/include/openmpi-x86_64 so if it should be installed it should be
</span><br>
<span class="quotelev1">&gt; installed there.
</span><br>
<p>I don't think there's any confusion.  This is just the way that ROMIO comes from upstream (the MPICH distribution).  The MPICH mpi.h file includes mpio.h by name, necessitating its installation:
<br>
<p><a href="http://git.mpich.org/mpich.git/blob/HEAD:/src/include/mpi.h.in#l2159">http://git.mpich.org/mpich.git/blob/HEAD:/src/include/mpi.h.in#l2159</a>
<br>
<a href="http://git.mpich.org/mpich.git/blob/HEAD:/confdb/aclocal_mpi.m4#l509">http://git.mpich.org/mpich.git/blob/HEAD:/confdb/aclocal_mpi.m4#l509</a>
<br>
<p>----8&lt;----
<br>
$ cat -n mpi.h | grep -C4 'include &quot;mpio.h&quot;'
<br>
&nbsp;&nbsp;2141  #define MPIIMPL_HAVE_MPI_GREQUEST 1      
<br>
&nbsp;&nbsp;2142  #define MPIIMPL_HAVE_STATUS_SET_BYTES 1
<br>
&nbsp;&nbsp;2143  #define MPIIMPL_HAVE_STATUS_SET_INFO 1
<br>
&nbsp;&nbsp;2144
<br>
&nbsp;&nbsp;2145  #include &quot;mpio.h&quot;
<br>
&nbsp;&nbsp;2146
<br>
&nbsp;&nbsp;2147  #if defined(__cplusplus)
<br>
&nbsp;&nbsp;2148  }
<br>
&nbsp;&nbsp;2149  /* Add the C++ bindings */
<br>
----8&lt;----
<br>
<p>IIRC, OMPI does not need this to be installed, so we could probably modify that Makefile.am to use noinst.
<br>
<p>-Dave
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13940.php">Marco Atzeri: "Re: [OMPI devel] 1.7.4rc2 is out"</a>
<li><strong>Previous message:</strong> <a href="13938.php">Orion Poplawski: "Re: [OMPI devel] 1.7.4rc2 is out"</a>
<li><strong>In reply to:</strong> <a href="13938.php">Orion Poplawski: "Re: [OMPI devel] 1.7.4rc2 is out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13941.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc2 is out"</a>
<li><strong>Reply:</strong> <a href="13941.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc2 is out"</a>
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
