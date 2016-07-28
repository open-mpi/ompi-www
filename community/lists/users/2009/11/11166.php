<?
$subject_val = "Re: [OMPI users] How do you get static linkage for Intel compiler	libsfor the orterun executable?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 11 16:00:21 2009" -->
<!-- isoreceived="20091111210021" -->
<!-- sent="Wed, 11 Nov 2009 13:00:16 -0800" -->
<!-- isosent="20091111210016" -->
<!-- name="Martin Siegert" -->
<!-- email="siegert_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How do you get static linkage for Intel compiler	libsfor the orterun executable?" -->
<!-- id="20091111210016.GB16862_at_stikine.its.sfu.ca" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="E9F276A0010AF44ABD2C03ED2EDAE7DB49A25921_at_HDXMSPB.us.lmco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] How do you get static linkage for Intel compiler	libsfor the orterun executable?<br>
<strong>From:</strong> Martin Siegert (<em>siegert_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-11 16:00:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11167.php">RightCFD: "Re: [OMPI users] mpi functions are slow when first called and become normal afterwards"</a>
<li><strong>Previous message:</strong> <a href="11165.php">Eugene Loh: "Re: [OMPI users] MPI Derived datatype + Persistent communication"</a>
<li><strong>In reply to:</strong> <a href="11158.php">Blosch, Edwin L: "Re: [OMPI users] How do you get static linkage for Intel compiler	libsfor the orterun executable?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Nov 11, 2009 at 07:49:25AM -0700, Blosch, Edwin L wrote:
<br>
<span class="quotelev1">&gt; Thanks for the reply, Jeff,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think -i-static is an Intel 9 option, but unfortunately it didn't make a difference switching to -static-intel:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; libtool: link: /appserv/intel/cce/10.1.021/bin/icc -DNDEBUG -finline-functions -fno-strict-aliasing -restrict -pthread -fvisibility=hidden -g -static-intel -o .libs/orterun main.o orterun.o debuggers.o -Wl,--export-dynamic  ../../../orte/.libs/libopen-rte.so /home/bloscel/builds/openmpi/opal/.libs/libopen-pal.so -ldl -lnsl -lutil -pthread -Wl,-rpath -Wl,/release/cfd/openmpi-intel/lib
</span><br>
<span class="quotelev1">&gt; /appserv/intel/cce/10.1.021/lib/libimf.so: warning: warning: feupdateenv is not implemented and will always fail
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The option is passed, but ldd gives:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ldd ./orterun
</span><br>
<span class="quotelev1">&gt;         libopen-rte.so.0 =&gt; &lt;some path&gt;/lib/libopen-rte.so.0 (0x00002b1cd4a01000)
</span><br>
<span class="quotelev1">&gt;         libopen-pal.so.0 =&gt; &lt;some path&gt;/lib/libopen-pal.so.0 (0x00002b1cd4ba9000)
</span><br>
<span class="quotelev1">&gt;         libdl.so.2 =&gt; /lib64/libdl.so.2 (0x00002b1cd4d5f000)
</span><br>
<span class="quotelev1">&gt;         libnsl.so.1 =&gt; /lib64/libnsl.so.1 (0x00002b1cd4e63000)
</span><br>
<span class="quotelev1">&gt;         libutil.so.1 =&gt; /lib64/libutil.so.1 (0x00002b1cd4f7a000)
</span><br>
<span class="quotelev1">&gt;         libm.so.6 =&gt; /lib64/libm.so.6 (0x00002b1cd507d000)
</span><br>
<span class="quotelev1">&gt;         libgcc_s.so.1 =&gt; /lib64/libgcc_s.so.1 (0x00002b1cd51d2000)
</span><br>
<span class="quotelev1">&gt;         libpthread.so.0 =&gt; /lib64/libpthread.so.0 (0x00002b1cd52e0000)
</span><br>
<span class="quotelev1">&gt;         libc.so.6 =&gt; /lib64/libc.so.6 (0x00002b1cd53f9000)
</span><br>
<span class="quotelev1">&gt;         /lib64/ld-linux-x86-64.so.2 (0x00002b1cd48e5000)
</span><br>
<span class="quotelev1">&gt;         libimf.so =&gt; not found
</span><br>
<span class="quotelev1">&gt;         libsvml.so =&gt; not found
</span><br>
<span class="quotelev1">&gt;         libintlc.so.5 =&gt; not found
</span><br>
<span class="quotelev1">&gt;         libimf.so =&gt; not found
</span><br>
<span class="quotelev1">&gt;         libsvml.so =&gt; not found
</span><br>
<span class="quotelev1">&gt;         libintlc.so.5 =&gt; not found
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The Intel libs are listed twice.  I presume that means something.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is it possible that the -static-intel option needs to be somewhere different within the link line?  Is it possible that open-rte.so or open-pal.so require libimf.so instead of libimf.a?
</span><br>
<p>Just add the line
<br>
<p>-Wl,-rpath,/appserv/intel/cce-10.1.021/lib
<br>
<p>to your Intel compiler config file icc.cfg (probably in
<br>
/appserv/intel/cce-10.1.021/bin) and then recompile.
<br>
(this won't give you statically linked binaries, but allows to runtime
<br>
loader to find the Intel libraries).
<br>
<p>Cheers,
<br>
Martin
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11167.php">RightCFD: "Re: [OMPI users] mpi functions are slow when first called and become normal afterwards"</a>
<li><strong>Previous message:</strong> <a href="11165.php">Eugene Loh: "Re: [OMPI users] MPI Derived datatype + Persistent communication"</a>
<li><strong>In reply to:</strong> <a href="11158.php">Blosch, Edwin L: "Re: [OMPI users] How do you get static linkage for Intel compiler	libsfor the orterun executable?"</a>
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
