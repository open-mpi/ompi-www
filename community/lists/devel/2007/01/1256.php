<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jan 19 16:42:16 2007" -->
<!-- isoreceived="20070119214216" -->
<!-- sent="Fri, 19 Jan 2007 14:42:03 -0700" -->
<!-- isosent="20070119214203" -->
<!-- name="Greg Watson" -->
<!-- email="gwatson_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.2b3 fails on bluesteel" -->
<!-- id="B1EF93EE-F778-44D5-96F0-CEB073042826_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1169241464.15251.177.camel_at_exponential.lanl.gov" -->
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
<strong>Date:</strong> 2007-01-19 16:42:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1257.php">Li-Ta Lo: "Re: [OMPI devel] 1.2b3 fails on bluesteel"</a>
<li><strong>Previous message:</strong> <a href="1255.php">Li-Ta Lo: "Re: [OMPI devel] 1.2b3 fails on bluesteel"</a>
<li><strong>In reply to:</strong> <a href="1255.php">Li-Ta Lo: "Re: [OMPI devel] 1.2b3 fails on bluesteel"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1257.php">Li-Ta Lo: "Re: [OMPI devel] 1.2b3 fails on bluesteel"</a>
<li><strong>Reply:</strong> <a href="1257.php">Li-Ta Lo: "Re: [OMPI devel] 1.2b3 fails on bluesteel"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 19, 2007, at 2:17 PM, Li-Ta Lo wrote:
<br>
<p><span class="quotelev1">&gt; On Fri, 2007-01-19 at 13:25 -0700, Greg Watson wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Bluesteel is a 64bit bproc machine. I configured with:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ./configure --with-devel-headers --disable-shared --enable-static
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When I attempt to run an MPI program:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [bluesteel.lanl.gov:28663] [0,0,0] ORTE_ERROR_LOG: Not available in
</span><br>
<span class="quotelev2">&gt;&gt; file ras_bjs.c at line 247
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt; ---
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; The bproc PLS component was not able to launch all the processes on
</span><br>
<span class="quotelev2">&gt;&gt; the remote
</span><br>
<span class="quotelev2">&gt;&gt; nodes and therefore cannot continue.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On node 0 the process pid was -2 and errno was set to 11.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Shared lib?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ollie
</span><br>
<p>The libraries required by the program are:
<br>
<p>$ ldd x
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;librt.so.1 =&gt; /lib64/tls/librt.so.1 (0x00002aaaaabc1000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libbproc.so.4 =&gt; /usr/lib64/libbproc.so.4 (0x00002aaaaacdb000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libdl.so.2 =&gt; /lib64/libdl.so.2 (0x00002aaaaade2000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libnsl.so.1 =&gt; /lib64/libnsl.so.1 (0x00002aaaaaee5000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libutil.so.1 =&gt; /lib64/libutil.so.1 (0x00002aaaaaffc000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libm.so.6 =&gt; /lib64/tls/libm.so.6 (0x00002aaaab100000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libpthread.so.0 =&gt; /lib64/tls/libpthread.so.0  
<br>
(0x00002aaaab286000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libc.so.6 =&gt; /lib64/tls/libc.so.6 (0x00002aaaab39b000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/lib64/ld-linux-x86-64.so.2 (0x00002aaaaaaab000)
<br>
<p>These all appear to be available on the nodes.
<br>
<p>Greg
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1257.php">Li-Ta Lo: "Re: [OMPI devel] 1.2b3 fails on bluesteel"</a>
<li><strong>Previous message:</strong> <a href="1255.php">Li-Ta Lo: "Re: [OMPI devel] 1.2b3 fails on bluesteel"</a>
<li><strong>In reply to:</strong> <a href="1255.php">Li-Ta Lo: "Re: [OMPI devel] 1.2b3 fails on bluesteel"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1257.php">Li-Ta Lo: "Re: [OMPI devel] 1.2b3 fails on bluesteel"</a>
<li><strong>Reply:</strong> <a href="1257.php">Li-Ta Lo: "Re: [OMPI devel] 1.2b3 fails on bluesteel"</a>
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
