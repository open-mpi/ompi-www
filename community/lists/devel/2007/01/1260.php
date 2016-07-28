<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jan 22 10:14:44 2007" -->
<!-- isoreceived="20070122151444" -->
<!-- sent="Mon, 22 Jan 2007 08:14:37 -0700" -->
<!-- isosent="20070122151437" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.2b3 fails on bluesteel" -->
<!-- id="C1DA22ED.7154%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="44CD2991-9030-4C69-8B5E-23E344946475_at_lanl.gov" -->
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
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-01-22 10:14:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1261.php">Ralph H Castain: "Re: [OMPI devel] 1.2b3 fails on bluesteel"</a>
<li><strong>Previous message:</strong> <a href="1259.php">Ralph H Castain: "Re: [OMPI devel] 1.2b3 fails on bluesteel"</a>
<li><strong>In reply to:</strong> <a href="1258.php">Greg Watson: "Re: [OMPI devel] 1.2b3 fails on bluesteel"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1261.php">Ralph H Castain: "Re: [OMPI devel] 1.2b3 fails on bluesteel"</a>
<li><strong>Reply:</strong> <a href="1261.php">Ralph H Castain: "Re: [OMPI devel] 1.2b3 fails on bluesteel"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Oh yeah - Galen noted that you also have to do a preconnect, so what you
<br>
need to add to your command line is:
<br>
<p>-mca btl ^sm -mca mpi_preconnect_all 1
<br>
<p>Ralph
<br>
<p><p><p>On 1/22/07 8:02 AM, &quot;Greg Watson&quot; &lt;gwatson_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jan 19, 2007, at 4:39 PM, Li-Ta Lo wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Fri, 2007-01-19 at 14:42 -0700, Greg Watson wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The libraries required by the program are:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ ldd x
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          librt.so.1 =&gt; /lib64/tls/librt.so.1 (0x00002aaaaabc1000)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          libbproc.so.4 =&gt; /usr/lib64/libbproc.so.4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (0x00002aaaaacdb000)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          libdl.so.2 =&gt; /lib64/libdl.so.2 (0x00002aaaaade2000)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          libnsl.so.1 =&gt; /lib64/libnsl.so.1 (0x00002aaaaaee5000)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          libutil.so.1 =&gt; /lib64/libutil.so.1 (0x00002aaaaaffc000)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          libm.so.6 =&gt; /lib64/tls/libm.so.6 (0x00002aaaab100000)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          libpthread.so.0 =&gt; /lib64/tls/libpthread.so.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (0x00002aaaab286000)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          libc.so.6 =&gt; /lib64/tls/libc.so.6 (0x00002aaaab39b000)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          /lib64/ld-linux-x86-64.so.2 (0x00002aaaaaaab000)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; These all appear to be available on the nodes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I tried a recent (today/yesterday?) svn trunk. It works but it is
</span><br>
<span class="quotelev2">&gt;&gt; very slow (I am using tcp now).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ollie
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Does that mean that 1.2 does not support bproc?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Greg
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
<li><strong>Next message:</strong> <a href="1261.php">Ralph H Castain: "Re: [OMPI devel] 1.2b3 fails on bluesteel"</a>
<li><strong>Previous message:</strong> <a href="1259.php">Ralph H Castain: "Re: [OMPI devel] 1.2b3 fails on bluesteel"</a>
<li><strong>In reply to:</strong> <a href="1258.php">Greg Watson: "Re: [OMPI devel] 1.2b3 fails on bluesteel"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1261.php">Ralph H Castain: "Re: [OMPI devel] 1.2b3 fails on bluesteel"</a>
<li><strong>Reply:</strong> <a href="1261.php">Ralph H Castain: "Re: [OMPI devel] 1.2b3 fails on bluesteel"</a>
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
