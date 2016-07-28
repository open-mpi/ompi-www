<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Mar 17 10:58:50 2006" -->
<!-- isoreceived="20060317155850" -->
<!-- sent="Fri, 17 Mar 2006 08:58:08 -0700" -->
<!-- isosent="20060317155808" -->
<!-- name="Greg Watson" -->
<!-- email="gwatson_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] bproc configure help" -->
<!-- id="EB109C54-3EFB-47CE-9910-9896DBE33873_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20060317153513.GB609_at_iam.uni-bonn.de" -->
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
<strong>From:</strong> Greg Watson (<em>gwatson_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-17 10:58:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0762.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r9323 - Missing	datatype_memcpy.c"</a>
<li><strong>Previous message:</strong> <a href="0760.php">Greg Watson: "Re: [OMPI devel] bproc configure help"</a>
<li><strong>In reply to:</strong> <a href="0759.php">Ralf Wildenhues: "Re: [OMPI devel] bproc configure help"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralf,
<br>
<p>Here's what I see:
<br>
<p>$ objdump -p testmpi | grep NEEDED
<br>
&nbsp;&nbsp;&nbsp;NEEDED      libutil.so.1
<br>
&nbsp;&nbsp;&nbsp;NEEDED      libnsl.so.1
<br>
&nbsp;&nbsp;&nbsp;NEEDED      libdl.so.2
<br>
&nbsp;&nbsp;&nbsp;NEEDED      libbproc.so.4
<br>
&nbsp;&nbsp;&nbsp;NEEDED      libpthread.so.0
<br>
&nbsp;&nbsp;&nbsp;NEEDED      librt.so.1
<br>
&nbsp;&nbsp;&nbsp;NEEDED      libm.so.6
<br>
&nbsp;&nbsp;&nbsp;NEEDED      libc.so.6
<br>
<p>Seems like mpicc is definitely linking in the pthread library.
<br>
<p>Cheers,
<br>
<p>Greg
<br>
<p>On Mar 17, 2006, at 8:35 AM, Ralf Wildenhues wrote:
<br>
<p><span class="quotelev1">&gt; Hi Greg,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * Greg Watson wrote on Fri, Mar 17, 2006 at 04:17:27PM CET:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ./configure --enable-static --disable-shared --without-threads -- 
</span><br>
<span class="quotelev2">&gt;&gt; with-
</span><br>
<span class="quotelev2">&gt;&gt; devel-headers
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ./configure --enable-static --disable-shared --without-threads --
</span><br>
<span class="quotelev2">&gt;&gt; without-mpi-threads --with-devel-headers
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In both cases, I'm still seeing the thread library linked in the
</span><br>
<span class="quotelev2">&gt;&gt; final executable:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Likely I could not help you much with your problem, but:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ mpicc -o testmpi testmpi.c
</span><br>
<span class="quotelev2">&gt;&gt; $ ldd testmpi
</span><br>
<span class="quotelev2">&gt;&gt;          libutil.so.1 =&gt; /lib/libutil.so.1 (0x0f590000)
</span><br>
<span class="quotelev2">&gt;&gt;          libnsl.so.1 =&gt; /lib/libnsl.so.1 (0x0e850000)
</span><br>
<span class="quotelev2">&gt;&gt;          libdl.so.2 =&gt; /lib/libdl.so.2 (0x0fdc0000)
</span><br>
<span class="quotelev2">&gt;&gt;          libbproc.so.4 =&gt; /usr/lib/libbproc.so.4 (0x0fe50000)
</span><br>
<span class="quotelev2">&gt;&gt;          libpthread.so.0 =&gt; /lib/tls/libpthread.so.0 (0x0fc40000)
</span><br>
<span class="quotelev2">&gt;&gt;          librt.so.1 =&gt; /lib/tls/librt.so.1 (0x0f660000)
</span><br>
<span class="quotelev2">&gt;&gt;          libm.so.6 =&gt; /lib/tls/libm.so.6 (0x30013000)
</span><br>
<span class="quotelev2">&gt;&gt;          libc.so.6 =&gt; /lib/tls/libc.so.6 (0x0fe70000)
</span><br>
<span class="quotelev2">&gt;&gt;          /lib/ld.so.1 =&gt; /lib/ld.so.1 (0x0ffd0000)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please use &quot;objdump -p testmpi | grep NEEDED&quot; to find out whether
</span><br>
<span class="quotelev1">&gt; libpthread was linked in directly, or pulled in by one of the other
</span><br>
<span class="quotelev1">&gt; libraries (librt comes to mind).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Ralf
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0762.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r9323 - Missing	datatype_memcpy.c"</a>
<li><strong>Previous message:</strong> <a href="0760.php">Greg Watson: "Re: [OMPI devel] bproc configure help"</a>
<li><strong>In reply to:</strong> <a href="0759.php">Ralf Wildenhues: "Re: [OMPI devel] bproc configure help"</a>
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
