<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jan 22 11:39:30 2007" -->
<!-- isoreceived="20070122163930" -->
<!-- sent="Mon, 22 Jan 2007 09:39:23 -0700" -->
<!-- isosent="20070122163923" -->
<!-- name="Greg Watson" -->
<!-- email="gwatson_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.2b3 fails on bluesteel" -->
<!-- id="8AAE9951-67AD-449C-B0AD-21B9176A08FA_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C1DA2A11.715A%rhc_at_lanl.gov" -->
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
<strong>Date:</strong> 2007-01-22 11:39:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1263.php">Ralph H Castain: "Re: [OMPI devel] 1.2b3 fails on bluesteel"</a>
<li><strong>Previous message:</strong> <a href="1261.php">Ralph H Castain: "Re: [OMPI devel] 1.2b3 fails on bluesteel"</a>
<li><strong>In reply to:</strong> <a href="1261.php">Ralph H Castain: "Re: [OMPI devel] 1.2b3 fails on bluesteel"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1263.php">Ralph H Castain: "Re: [OMPI devel] 1.2b3 fails on bluesteel"</a>
<li><strong>Reply:</strong> <a href="1263.php">Ralph H Castain: "Re: [OMPI devel] 1.2b3 fails on bluesteel"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I tried adding '-mca btl ^sm -mca mpi_preconnect_all 1' to the mpirun  
<br>
command line but it still fails with identical error messages.
<br>
<p>I don't understand the issue with allocating nodes under bproc. Older  
<br>
versions of OMPI have always just queried bproc for the nodes that  
<br>
have permissions set so I can execute on them. I've never had to  
<br>
allocate any nodes using a hostfile or any other mechanism. Are you  
<br>
saying that this no longer works?
<br>
<p>Greg
<br>
<p>On Jan 22, 2007, at 8:45 AM, Ralph H Castain wrote:
<br>
<p><span class="quotelev1">&gt; Actually, I just looked at my notes on bluesteel and see that it is an
</span><br>
<span class="quotelev1">&gt; unscheduled system - i.e., no LSF to allocate the nodes. That's a  
</span><br>
<span class="quotelev1">&gt; problem
</span><br>
<span class="quotelev1">&gt; with the current code.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I assume you must be feeding it a hostfile or something?? How are you
</span><br>
<span class="quotelev1">&gt; telling mpirun which nodes to use?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian and I just talked about the more general bproc allocator  
</span><br>
<span class="quotelev1">&gt; question and
</span><br>
<span class="quotelev1">&gt; I can commit a change later today to fix the situation for  
</span><br>
<span class="quotelev1">&gt; bluesteel. Until
</span><br>
<span class="quotelev1">&gt; then, I fear that we may not run on that system, though you could  
</span><br>
<span class="quotelev1">&gt; give it a
</span><br>
<span class="quotelev1">&gt; try anyway.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 1/22/07 8:14 AM, &quot;Ralph H Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Oh yeah - Galen noted that you also have to do a preconnect, so  
</span><br>
<span class="quotelev2">&gt;&gt; what you
</span><br>
<span class="quotelev2">&gt;&gt; need to add to your command line is:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -mca btl ^sm -mca mpi_preconnect_all 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 1/22/07 8:02 AM, &quot;Greg Watson&quot; &lt;gwatson_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jan 19, 2007, at 4:39 PM, Li-Ta Lo wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Fri, 2007-01-19 at 14:42 -0700, Greg Watson wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The libraries required by the program are:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; $ ldd x
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;          librt.so.1 =&gt; /lib64/tls/librt.so.1 (0x00002aaaaabc1000)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;          libbproc.so.4 =&gt; /usr/lib64/libbproc.so.4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (0x00002aaaaacdb000)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;          libdl.so.2 =&gt; /lib64/libdl.so.2 (0x00002aaaaade2000)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;          libnsl.so.1 =&gt; /lib64/libnsl.so.1 (0x00002aaaaaee5000)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;          libutil.so.1 =&gt; /lib64/libutil.so.1 (0x00002aaaaaffc000)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;          libm.so.6 =&gt; /lib64/tls/libm.so.6 (0x00002aaaab100000)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;          libpthread.so.0 =&gt; /lib64/tls/libpthread.so.0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (0x00002aaaab286000)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;          libc.so.6 =&gt; /lib64/tls/libc.so.6 (0x00002aaaab39b000)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;          /lib64/ld-linux-x86-64.so.2 (0x00002aaaaaaab000)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; These all appear to be available on the nodes.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I tried a recent (today/yesterday?) svn trunk. It works but it is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; very slow (I am using tcp now).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ollie
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Does that mean that 1.2 does not support bproc?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Greg
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1263.php">Ralph H Castain: "Re: [OMPI devel] 1.2b3 fails on bluesteel"</a>
<li><strong>Previous message:</strong> <a href="1261.php">Ralph H Castain: "Re: [OMPI devel] 1.2b3 fails on bluesteel"</a>
<li><strong>In reply to:</strong> <a href="1261.php">Ralph H Castain: "Re: [OMPI devel] 1.2b3 fails on bluesteel"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1263.php">Ralph H Castain: "Re: [OMPI devel] 1.2b3 fails on bluesteel"</a>
<li><strong>Reply:</strong> <a href="1263.php">Ralph H Castain: "Re: [OMPI devel] 1.2b3 fails on bluesteel"</a>
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
