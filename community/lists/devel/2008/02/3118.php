<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17307";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb  1 11:40:21 2008" -->
<!-- isoreceived="20080201164021" -->
<!-- sent="Fri, 01 Feb 2008 11:40:20 -0500" -->
<!-- isosent="20080201164020" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r17307" -->
<!-- id="47A34B74.7000609_at_cs.indiana.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20080131144218.GE11368_at_ltw.loris.tv" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r17307<br>
<strong>From:</strong> Tim Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-01 11:40:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3119.php">Ralf Wildenhues: "Re: [OMPI devel] More VT warnings"</a>
<li><strong>Previous message:</strong> <a href="3117.php">Jeff Squyres: "Re: [OMPI devel] VT in trunk + how to disable"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/01/3102.php">Adrian Knoth: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17307"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3220.php">Adrian Knoth: "[OMPI devel] New address selection for btl-tcp (was Re: [OMPI svn] svn:open-mpi r17307)"</a>
<li><strong>Reply:</strong> <a href="3220.php">Adrian Knoth: "[OMPI devel] New address selection for btl-tcp (was Re: [OMPI svn] svn:open-mpi r17307)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Adrian,
<br>
<p>For the most part this seems to work for me. But there are a few issues. 
<br>
I'm not sure which are introduced by this patch, and whether some may be 
<br>
expected behavior. But for completeness I will point them all out. 
<br>
First, let me explain I am working on a machine with 3 tcp interfaces, 
<br>
lo, eth0, and ib0. Both eth0 and ib0 connect all the compute nodes.
<br>
<p>1. There are some warnings when compiling:
<br>
btl_tcp_proc.c:171: warning: no previous prototype for 'evaluate_assignment'
<br>
btl_tcp_proc.c:206: warning: no previous prototype for 'visit'
<br>
btl_tcp_proc.c:224: warning: no previous prototype for 
<br>
'mca_btl_tcp_initialise_interface'
<br>
btl_tcp_proc.c: In function `mca_btl_tcp_proc_insert':
<br>
btl_tcp_proc.c:304: warning: pointer targets in passing arg 2 of 
<br>
`opal_ifindextomask' differ in signedness
<br>
btl_tcp_proc.c:313: warning: pointer targets in passing arg 2 of 
<br>
`opal_ifindextomask' differ in signedness
<br>
btl_tcp_proc.c:389: warning: comparison between signed and unsigned
<br>
btl_tcp_proc.c:400: warning: comparison between signed and unsigned
<br>
btl_tcp_proc.c:401: warning: comparison between signed and unsigned
<br>
btl_tcp_proc.c:459: warning: ISO C90 forbids variable-size array `a'
<br>
btl_tcp_proc.c:459: warning: ISO C90 forbids mixed declarations and code
<br>
btl_tcp_proc.c:465: warning: ISO C90 forbids mixed declarations and code
<br>
btl_tcp_proc.c:466: warning: comparison between signed and unsigned
<br>
btl_tcp_proc.c:480: warning: comparison between signed and unsigned
<br>
btl_tcp_proc.c:485: warning: comparison between signed and unsigned
<br>
btl_tcp_proc.c:495: warning: comparison between signed and unsigned
<br>
<p>2. If I exclude all my tcp interfaces, the connection fails properly, 
<br>
but I do get a malloc request for 0 bytes:
<br>
tprins_at_odin examples]$ mpirun -mca btl tcp,self  -mca btl_tcp_if_exclude 
<br>
eth0,ib0,lo -np 2 ./ring_c
<br>
malloc debug: Request for 0 bytes (btl_tcp_component.c, 844)
<br>
malloc debug: Request for 0 bytes (btl_tcp_component.c, 844)
<br>
&lt;snip&gt;
<br>
<p>3. If the exclude list does not contain 'lo', or the include list 
<br>
contains 'lo', the job hangs when using multiple nodes:
<br>
[tprins_at_odin examples]$ mpirun -mca btl tcp,self  -mca 
<br>
btl_tcp_if_exclude ib0 -np 2 -bynode ./ring_cProcess 0 sending 10 to 1, 
<br>
tag 201 (2 processes in ring)
<br>
[odin011][1,0][btl_tcp_endpoint.c:619:mca_btl_tcp_endpoint_complete_connect] 
<br>
connect() failed: Connection refused (111)
<br>
&lt;hang&gt;
<br>
[tprins_at_odin examples]$ mpirun -mca btl tcp,self  -mca 
<br>
btl_tcp_if_include eth0,lo -np 2 -bynode ./ring_c
<br>
Process 0 sending 10 to 1, tag 201 (2 processes in ring)
<br>
[odin011][1,0][btl_tcp_endpoint.c:619:mca_btl_tcp_endpoint_complete_connect] 
<br>
connect() failed: Connection refused (111)
<br>
&lt;hang&gt;
<br>
<p>However, the great news about this patch is that it appears to fix 
<br>
<a href="https://svn.open-mpi.org/trac/ompi/ticket/1027">https://svn.open-mpi.org/trac/ompi/ticket/1027</a> for me.
<br>
<p>Hope this helps,
<br>
<p>Tim
<br>
<p><p><p>Adrian Knoth wrote:
<br>
<span class="quotelev1">&gt; On Wed, Jan 30, 2008 at 06:48:54PM +0100, Adrian Knoth wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What is the real issue behind this whole discussion?
</span><br>
<span class="quotelev2">&gt;&gt; Hanging connections.
</span><br>
<span class="quotelev2">&gt;&gt; I'll have a look at it tomorrow.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; To everybody who's interested in BTL-TCP, especially George and (to a
</span><br>
<span class="quotelev1">&gt; minor degree) rhc:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've integrated something what I call &quot;magic address selection code&quot;.
</span><br>
<span class="quotelev1">&gt; See the comments in r17348.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can you check
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    <a href="https://svn.open-mpi.org/svn/ompi/tmp-public/btl-tcp">https://svn.open-mpi.org/svn/ompi/tmp-public/btl-tcp</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; if it's working for you? Read: multi-rail TCP, FNN, whatever is
</span><br>
<span class="quotelev1">&gt; important to you?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The code is proof of concept and could use a little tuning (if it's
</span><br>
<span class="quotelev1">&gt; working at all. Over here, it satisfies all tests).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I vaguely remember that at least Ralph doesn't like
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        int a[perm_size * sizeof(int)];
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; where perm_size is dynamically evaluated (read: array size is runtime
</span><br>
<span class="quotelev1">&gt; dependent)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There are also some large arrays, search for MAX_KERNEL_INTERFACE_INDEX.
</span><br>
<span class="quotelev1">&gt; Perhaps it's better to replace them with an appropriate OMPI data
</span><br>
<span class="quotelev1">&gt; structure. I don't know what fits best, you guys know the details...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So please give the code a try, and if it's working, feel free to cleanup
</span><br>
<span class="quotelev1">&gt; whatever is necessary to make it the OMPI style or give me some pointers
</span><br>
<span class="quotelev1">&gt; what to change.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'd like to point to Thomas' diploma thesis. The PDF explains the theory
</span><br>
<span class="quotelev1">&gt; behind the code, it's like an rationale. Unfortunately, the PDF has some
</span><br>
<span class="quotelev1">&gt; typos, but I guess you'll get the idea. It's a graph matching algorithm,
</span><br>
<span class="quotelev1">&gt; Chapter 3 covers everything in detail:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      <a href="http://cluster.inf-ra.uni-jena.de/~adi/peiselt-thesis.pdf">http://cluster.inf-ra.uni-jena.de/~adi/peiselt-thesis.pdf</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; HTH
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3119.php">Ralf Wildenhues: "Re: [OMPI devel] More VT warnings"</a>
<li><strong>Previous message:</strong> <a href="3117.php">Jeff Squyres: "Re: [OMPI devel] VT in trunk + how to disable"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/01/3102.php">Adrian Knoth: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17307"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3220.php">Adrian Knoth: "[OMPI devel] New address selection for btl-tcp (was Re: [OMPI svn] svn:open-mpi r17307)"</a>
<li><strong>Reply:</strong> <a href="3220.php">Adrian Knoth: "[OMPI devel] New address selection for btl-tcp (was Re: [OMPI svn] svn:open-mpi r17307)"</a>
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
