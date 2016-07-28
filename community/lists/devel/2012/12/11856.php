<?
$subject_val = "Re: [OMPI devel] openmpi-1.7rc5 on cygwin ; results and patches";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 20 07:59:34 2012" -->
<!-- isoreceived="20121220125934" -->
<!-- sent="Thu, 20 Dec 2012 07:59:25 -0500" -->
<!-- isosent="20121220125925" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] openmpi-1.7rc5 on cygwin ; results and patches" -->
<!-- id="97D9FC53-01F9-4C99-84AE-18A30AA9D4D3_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="50D1FE53.2020107_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] openmpi-1.7rc5 on cygwin ; results and patches<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-20 07:59:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11857.php">marco atzeri: "Re: [OMPI devel] openmpi-1.7rc5 on cygwin ; results and patches"</a>
<li><strong>Previous message:</strong> <a href="11855.php">marco atzeri: "[OMPI devel] openmpi-1.7rc5 on cygwin ; results and patches"</a>
<li><strong>In reply to:</strong> <a href="11855.php">marco atzeri: "[OMPI devel] openmpi-1.7rc5 on cygwin ; results and patches"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11857.php">marco atzeri: "Re: [OMPI devel] openmpi-1.7rc5 on cygwin ; results and patches"</a>
<li><strong>Reply:</strong> <a href="11857.php">marco atzeri: "Re: [OMPI devel] openmpi-1.7rc5 on cygwin ; results and patches"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you!  I've filed <a href="https://svn.open-mpi.org/trac/ompi/ticket/3437">https://svn.open-mpi.org/trac/ompi/ticket/3437</a> about this.
<br>
<p>Do you have any Open MPI v1.6-specific patches that would be useful to merge upstream?  I've looked through my email and don't see any, but I could be missing them.
<br>
<p><p>On Dec 19, 2012, at 12:50 PM, marco atzeri wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Built and tested openmpi-1.7rc5 on cygwin, same configuration
</span><br>
<span class="quotelev1">&gt; than 1.6.3-4 package
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        ./autogen.sh
</span><br>
<span class="quotelev1">&gt;        configure \
</span><br>
<span class="quotelev1">&gt;                LDFLAGS=&quot;-Wl,--export-all-symbols -no-undefined&quot;  \
</span><br>
<span class="quotelev1">&gt;                --disable-mca-dso \
</span><br>
<span class="quotelev1">&gt;                --disable-sysv-shmem \
</span><br>
<span class="quotelev1">&gt;                --without-udapl \
</span><br>
<span class="quotelev1">&gt;                --enable-cxx-exceptions \
</span><br>
<span class="quotelev1">&gt;                --with-threads=posix \
</span><br>
<span class="quotelev1">&gt;                --without-cs-fs \
</span><br>
<span class="quotelev1">&gt;                --enable-heterogeneous \
</span><br>
<span class="quotelev1">&gt;                --with-mpi-param_check=always \
</span><br>
<span class="quotelev1">&gt;                --enable-contrib-no-build=vt,libompitrace \
</span><br>
<span class="quotelev1">&gt; --enable-mca-no-build=paffinity,installdirs-windows,timer-windows,shmem-sysv
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In addition to the previous 3 patches:
</span><br>
<span class="quotelev1">&gt;  path_null.patch     : <a href="https://svn.open-mpi.org/trac/ompi/ticket/3371">https://svn.open-mpi.org/trac/ompi/ticket/3371</a>
</span><br>
<span class="quotelev1">&gt;  SHM.patch           : posix alternative at  &quot;SHM_R | SHM_W&quot;
</span><br>
<span class="quotelev1">&gt;  cygwin-dlname.patch : cygwin specific for .dll instead of .so suffix
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I needed additional patches:
</span><br>
<span class="quotelev1">&gt;  ERROR.patch         : ERROR is already defined, so another label
</span><br>
<span class="quotelev1">&gt;                        is needed for &quot;goto ERROR&quot;
</span><br>
<span class="quotelev1">&gt;  interface.patch     : same for interface , it seems a
</span><br>
<span class="quotelev1">&gt;                        struct somewhere else
</span><br>
<span class="quotelev1">&gt;  min.patch           : min already defined as macro
</span><br>
<span class="quotelev1">&gt;                        (I saw in the source also a MIN macro defined)
</span><br>
<span class="quotelev1">&gt;  mpifh.patch         : to avoid undefined error
</span><br>
<span class="quotelev1">&gt;                        libmpi_mpifh_la_LIBADD needs
</span><br>
<span class="quotelev1">&gt;                        $(top_builddir)/ompi/libmpi.la
</span><br>
<span class="quotelev1">&gt;  winsock.patch       : defense against &lt;winsock2.h&gt; usage
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Full package here :
</span><br>
<span class="quotelev1">&gt; <a href="http://matzeri.altervista.org/cygwin-1.7/openmpi/">http://matzeri.altervista.org/cygwin-1.7/openmpi/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Osu-micro-benchmarks-3.7 results here :
</span><br>
<span class="quotelev1">&gt; <a href="http://matzeri.altervista.org/works/ompi/">http://matzeri.altervista.org/works/ompi/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt; Marco
</span><br>
<span class="quotelev1">&gt; &lt;cygwin-dlname.patch&gt;&lt;ERROR.patch&gt;&lt;interface.patch&gt;&lt;min.patch&gt;&lt;mpifh.patch&gt;&lt;path_null.patch&gt;&lt;SHM.patch&gt;&lt;winsock.patch&gt;_______________________________________________
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
<li><strong>Next message:</strong> <a href="11857.php">marco atzeri: "Re: [OMPI devel] openmpi-1.7rc5 on cygwin ; results and patches"</a>
<li><strong>Previous message:</strong> <a href="11855.php">marco atzeri: "[OMPI devel] openmpi-1.7rc5 on cygwin ; results and patches"</a>
<li><strong>In reply to:</strong> <a href="11855.php">marco atzeri: "[OMPI devel] openmpi-1.7rc5 on cygwin ; results and patches"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11857.php">marco atzeri: "Re: [OMPI devel] openmpi-1.7rc5 on cygwin ; results and patches"</a>
<li><strong>Reply:</strong> <a href="11857.php">marco atzeri: "Re: [OMPI devel] openmpi-1.7rc5 on cygwin ; results and patches"</a>
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
