<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Mar 17 10:35:21 2006" -->
<!-- isoreceived="20060317153521" -->
<!-- sent="Fri, 17 Mar 2006 16:35:13 +0100" -->
<!-- isosent="20060317153513" -->
<!-- name="Ralf Wildenhues" -->
<!-- email="Ralf.Wildenhues_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] bproc configure help" -->
<!-- id="20060317153513.GB609_at_iam.uni-bonn.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="34AED18B-0DF3-4DA3-9B90-712B25A6E700_at_lanl.gov" -->
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
<strong>From:</strong> Ralf Wildenhues (<em>Ralf.Wildenhues_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-17 10:35:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0760.php">Greg Watson: "Re: [OMPI devel] bproc configure help"</a>
<li><strong>Previous message:</strong> <a href="0758.php">Brian Barrett: "Re: [OMPI devel] bproc configure help"</a>
<li><strong>In reply to:</strong> <a href="0757.php">Greg Watson: "[OMPI devel] bproc configure help"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0761.php">Greg Watson: "Re: [OMPI devel] bproc configure help"</a>
<li><strong>Reply:</strong> <a href="0761.php">Greg Watson: "Re: [OMPI devel] bproc configure help"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Greg,
<br>
<p>* Greg Watson wrote on Fri, Mar 17, 2006 at 04:17:27PM CET:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./configure --enable-static --disable-shared --without-threads --with- 
</span><br>
<span class="quotelev1">&gt; devel-headers
</span><br>
<p><span class="quotelev1">&gt; ./configure --enable-static --disable-shared --without-threads -- 
</span><br>
<span class="quotelev1">&gt; without-mpi-threads --with-devel-headers
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In both cases, I'm still seeing the thread library linked in the  
</span><br>
<span class="quotelev1">&gt; final executable:
</span><br>
<p>Likely I could not help you much with your problem, but:
<br>
<p><span class="quotelev1">&gt; $ mpicc -o testmpi testmpi.c
</span><br>
<span class="quotelev1">&gt; $ ldd testmpi
</span><br>
<span class="quotelev1">&gt;          libutil.so.1 =&gt; /lib/libutil.so.1 (0x0f590000)
</span><br>
<span class="quotelev1">&gt;          libnsl.so.1 =&gt; /lib/libnsl.so.1 (0x0e850000)
</span><br>
<span class="quotelev1">&gt;          libdl.so.2 =&gt; /lib/libdl.so.2 (0x0fdc0000)
</span><br>
<span class="quotelev1">&gt;          libbproc.so.4 =&gt; /usr/lib/libbproc.so.4 (0x0fe50000)
</span><br>
<span class="quotelev1">&gt;          libpthread.so.0 =&gt; /lib/tls/libpthread.so.0 (0x0fc40000)
</span><br>
<span class="quotelev1">&gt;          librt.so.1 =&gt; /lib/tls/librt.so.1 (0x0f660000)
</span><br>
<span class="quotelev1">&gt;          libm.so.6 =&gt; /lib/tls/libm.so.6 (0x30013000)
</span><br>
<span class="quotelev1">&gt;          libc.so.6 =&gt; /lib/tls/libc.so.6 (0x0fe70000)
</span><br>
<span class="quotelev1">&gt;          /lib/ld.so.1 =&gt; /lib/ld.so.1 (0x0ffd0000)
</span><br>
<p>Please use &quot;objdump -p testmpi | grep NEEDED&quot; to find out whether
<br>
libpthread was linked in directly, or pulled in by one of the other
<br>
libraries (librt comes to mind).
<br>
<p>Cheers,
<br>
Ralf
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0760.php">Greg Watson: "Re: [OMPI devel] bproc configure help"</a>
<li><strong>Previous message:</strong> <a href="0758.php">Brian Barrett: "Re: [OMPI devel] bproc configure help"</a>
<li><strong>In reply to:</strong> <a href="0757.php">Greg Watson: "[OMPI devel] bproc configure help"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0761.php">Greg Watson: "Re: [OMPI devel] bproc configure help"</a>
<li><strong>Reply:</strong> <a href="0761.php">Greg Watson: "Re: [OMPI devel] bproc configure help"</a>
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
