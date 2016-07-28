<?
$subject_val = "Re: [OMPI devel] Trunk (RDMA and VT) warnings";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 29 09:41:29 2014" -->
<!-- isoreceived="20140529134129" -->
<!-- sent="Thu, 29 May 2014 06:41:26 -0700" -->
<!-- isosent="20140529134126" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Trunk (RDMA and VT) warnings" -->
<!-- id="C87FFB32-8771-40FA-8A0B-84F2A56D3ADD_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAAkFZ5uJq5uFKzh=cUp+ZW2g6hRW4qmykQDKHpn3oksNkdSUGA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Trunk (RDMA and VT) warnings<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-29 09:41:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14904.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: add STCI component to OMPI/RTE framework"</a>
<li><strong>Previous message:</strong> <a href="14902.php">Gilles Gouaillardet: "Re: [OMPI devel] Trunk (RDMA and VT) warnings"</a>
<li><strong>In reply to:</strong> <a href="14902.php">Gilles Gouaillardet: "Re: [OMPI devel] Trunk (RDMA and VT) warnings"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Not seeing it on fresh checkout of today's trunk head, so something may have resolved it since last test
<br>
<p><p>On May 28, 2014, at 10:27 PM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, May 28, 2014 at 9:53 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; gcc (GCC) 4.4.7 20120313 (Red Hat 4.4.7-4)
</span><br>
<span class="quotelev1">&gt;  ./configure --prefix=/home/common/openmpi/build/svn-trunk --enable-mpi-java --enable-orterun-prefix-by-default
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; More inline below
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; this looks like an up-to-date CentOS box.
</span><br>
<span class="quotelev1">&gt; i am unable to reproduce the warnings (may be uninitialized in this function) with a similar box :-(
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; On May 27, 2014, at 9:29 PM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; so far, it seems this is a false positive/compiler bug that could be triggered by inlining
</span><br>
<span class="quotelev2">&gt;&gt; /* i could not find any path in which the variable is used unitialized */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I just glanced at the first one (line 221 of osc_rdma_data_move.c), and I can see what the compiler is complaining about - have gotten this in other places as well. The problem is that you pass the address of ptr into a function without first initializing the value of ptr itself. There is no guarantee (so far as the compiler can see) that this function will in fact set the value of ptr - you are relying solely on the fact that (a) you checked that function at one point in time and saw that it always gets set to something if ret == OMPI_SUCCESS, and (b) nobody changed that function since you checked.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Newer compilers seem to be getting more defensive about such things and starting to &quot;bark&quot; when they see it. I think you are correct that inlining also impacts that situation, though I've also been seeing it when the functions aren't inlined.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i wrote the simple test program :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #include &lt;string.h&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; char * mystring = &quot;hello&quot;;
</span><br>
<span class="quotelev1">&gt; static inline int setif(int mustset, char **ptr) {
</span><br>
<span class="quotelev1">&gt;         if (!mustset) {
</span><br>
<span class="quotelev1">&gt;                 return 1;
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;         *ptr = mystring;
</span><br>
<span class="quotelev1">&gt;         return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; void good(int mustset) {
</span><br>
<span class="quotelev1">&gt;         char * ptr;
</span><br>
<span class="quotelev1">&gt;         char buf[256];
</span><br>
<span class="quotelev1">&gt;         if (setif(mustset, &amp;ptr) == 0) {
</span><br>
<span class="quotelev1">&gt;                 memcpy(buf, ptr, 6);
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; void bad(int mustset) {
</span><br>
<span class="quotelev1">&gt;         char * ptr;
</span><br>
<span class="quotelev1">&gt;         char buf[256];
</span><br>
<span class="quotelev1">&gt;         if (setif(mustset, &amp;ptr) != 0) {
</span><br>
<span class="quotelev1">&gt;                 memcpy(buf, ptr, 6);
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; please note that :
</span><br>
<span class="quotelev1">&gt; - the setif function is declared 'inline'
</span><br>
<span class="quotelev1">&gt; - the setif will set *ptr only if the 'mustset' parameter is nonzero and then return 0
</span><br>
<span class="quotelev1">&gt; - the setif will leave *ptr unmodified if the 'mustset' parameter is zero and then return 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; it is trivial that the 'good' function is ok whereas the 'bad' function has an issue :
</span><br>
<span class="quotelev1">&gt; the compiler has a way to figure out that ptr will be uninitialized when invoking memcpy
</span><br>
<span class="quotelev1">&gt; (since setif returned a non zero status)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; gcc -Wall -O0 test.c
</span><br>
<span class="quotelev1">&gt; does not complain
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; gcc -Wall -O1 test.c *does* complain
</span><br>
<span class="quotelev1">&gt; test.c:24: warning: &#145;ptr&#146; may be used uninitialized in this function
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; if the 'inline' keyword is omitted, -O2 is needed to get a compiler warning.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; bottom line, an optimized build (-O3 -finline-functions) correctly issues a warning.
</span><br>
<span class="quotelev1">&gt; i checked osc_rdma_data_move.c and osc_rdma_frag.h again and again and i could not find how ptr can be uninitialized in ompi_osc_rdma_control_send if
</span><br>
<span class="quotelev1">&gt; ompi_osc_rdma_frag_alloc returned OMPI_SUCCESS
</span><br>
<span class="quotelev1">&gt; /* not to mention i am unable to reproduce the warning */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; about the compiler getting more defensive :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; { int rank;
</span><br>
<span class="quotelev1">&gt;   MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev1">&gt;   rank++;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i never saw a compiler issue a warning about rank that could be used uninitialized
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Not sure what to suggest here - hate to add initialization steps in that sequence....
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; me too, and i do not see any warnings from the compiler
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; can you please confirm you can reproduce the issue on the most up to date trunk revision , on a x86_64 box (never knows ...) ?
</span><br>
<span class="quotelev1">&gt; then can you send the output of
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; cd ompi/mca/osc/rdma
</span><br>
<span class="quotelev1">&gt; touch osc_rdma_data_move.c
</span><br>
<span class="quotelev1">&gt; make -n osc_rdma_data_move.lo
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14902.php">http://www.open-mpi.org/community/lists/devel/2014/05/14902.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14903/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14904.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: add STCI component to OMPI/RTE framework"</a>
<li><strong>Previous message:</strong> <a href="14902.php">Gilles Gouaillardet: "Re: [OMPI devel] Trunk (RDMA and VT) warnings"</a>
<li><strong>In reply to:</strong> <a href="14902.php">Gilles Gouaillardet: "Re: [OMPI devel] Trunk (RDMA and VT) warnings"</a>
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
