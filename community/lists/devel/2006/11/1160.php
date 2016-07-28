<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Nov  4 03:38:08 2006" -->
<!-- isoreceived="20061104083808" -->
<!-- sent="Sat, 4 Nov 2006 14:07:58 +0530" -->
<!-- isosent="20061104083758" -->
<!-- name="Nysal Jan" -->
<!-- email="jnysal_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI between amd64 and x86" -->
<!-- id="5d5f7eba0611040037j95f0cev3ab4565c9eb36da8_at_mail.gmail.com" -->
<!-- charset="ANSI_X3.4-1968" -->
<!-- inreplyto="C63206E8-5B17-4CE4-983C-2E40C65E9765_at_cs.utk.edu" -->
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
<strong>From:</strong> Nysal Jan (<em>jnysal_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-04 03:37:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1161.php">Adrian Knoth: "Re: [OMPI devel] MPI between amd64 and x86"</a>
<li><strong>Previous message:</strong> <a href="1159.php">Orion Poplawski: "Re: [OMPI devel] [GE users] OpenMPI 1.2 integration and dedicated MPI networks"</a>
<li><strong>In reply to:</strong> <a href="1155.php">George Bosilca: "Re: [OMPI devel] MPI between amd64 and x86"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1161.php">Adrian Knoth: "Re: [OMPI devel] MPI between amd64 and x86"</a>
<li><strong>Reply:</strong> <a href="1161.php">Adrian Knoth: "Re: [OMPI devel] MPI between amd64 and x86"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt;come from the BTL headers where the fields do not have the same
</span><br>
<span class="quotelev1">&gt;alignment inside. The original question was asked by Nysal Jan on an
</span><br>
<span class="quotelev1">&gt;email with the subject &quot;SEGV in EM64T &lt;--&gt; PPC64 communication&quot; on
</span><br>
<span class="quotelev1">&gt;Oct. 11 2006. Unfortunately, we still have the same problem.
</span><br>
<p>I'm forwarding that email. Further investigation showed that the same issue
<br>
exists with a few other ob1 headers as well. A 64-bit build doesn't have
<br>
this problem. I'm not sure if this might be the same issue that you are
<br>
facing. You could test if the attached patch works for you (Although this is
<br>
not the right solution). Maybe using -malign-double for the build might also
<br>
work, but I haven't tried that out.
<br>
<p>******************************************************************
<br>
Hi Jeff,
<br>
I'm using the r12014M revision of the trunk.
<br>
I'm getting a SEGV (backtrace included) when running the osu b/w benchmark
<br>
on a heterogeneous set of 2 nodes (a EM64T  &amp;  PPC64).
<br>
A 32 bit build, compiled with gcc, was used. The problem was tracked down to
<br>
a difference in the size of the mca_btl_tcp_hdr_t structure on these two
<br>
architectures.
<br>
<p>struct mca_btl_tcp_hdr_t {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mca_btl_base_header_t base;  /* a uint8_t */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;uint8_t  type;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;uint16_t count;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;uint64_t size;
<br>
};
<br>
<p>This structure has a size of 12 bytes on EM64T(no padding here) &amp; 16 bytes
<br>
on PPC64(some padding is added before 'size').
<br>
<a href="http://docs.sun.com/app/docs/doc/816-5138/6mba6ua5t?a=view">http://docs.sun.com/app/docs/doc/816-5138/6mba6ua5t?a=view</a>   mentions that
<br>
'long long' has a 4 byte alignment on i386, which might explain why the
<br>
structure is only 12 bytes on EM64T.
<br>
<p>The failure happens in mca_btl_tcp_endpoint_recv_handler() when trying to
<br>
invoke reg-&gt;cbfunc() and reg-&gt;cbfunc is NULL.
<br>
Assuming the receiver side is EM64T:
<br>
&nbsp;frag-&gt;iov[0].iov_len = sizeof(frag-&gt;hdr) (so assigned 12 bytes on EM64T)
<br>
&nbsp;thus the readv() in mca_btl_tcp_frag_recv() reads 12 bytes into the first
<br>
vector instead of 16 and from there on everything goes wrong.
<br>
******************************************************************
<br>
<p><p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-1160/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-1160/hetero.txt">hetero.txt</a>
</ul>
<!-- attachment="hetero.txt" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1161.php">Adrian Knoth: "Re: [OMPI devel] MPI between amd64 and x86"</a>
<li><strong>Previous message:</strong> <a href="1159.php">Orion Poplawski: "Re: [OMPI devel] [GE users] OpenMPI 1.2 integration and dedicated MPI networks"</a>
<li><strong>In reply to:</strong> <a href="1155.php">George Bosilca: "Re: [OMPI devel] MPI between amd64 and x86"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1161.php">Adrian Knoth: "Re: [OMPI devel] MPI between amd64 and x86"</a>
<li><strong>Reply:</strong> <a href="1161.php">Adrian Knoth: "Re: [OMPI devel] MPI between amd64 and x86"</a>
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
