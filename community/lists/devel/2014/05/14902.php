<?
$subject_val = "Re: [OMPI devel] Trunk (RDMA and VT) warnings";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 29 01:27:16 2014" -->
<!-- isoreceived="20140529052716" -->
<!-- sent="Thu, 29 May 2014 14:27:13 +0900" -->
<!-- isosent="20140529052713" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Trunk (RDMA and VT) warnings" -->
<!-- id="CAAkFZ5uJq5uFKzh=cUp+ZW2g6hRW4qmykQDKHpn3oksNkdSUGA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="F3A0FA4C-B322-4EE9-A829-476DD2DBCF05_at_open-mpi.org" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-29 01:27:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14903.php">Ralph Castain: "Re: [OMPI devel] Trunk (RDMA and VT) warnings"</a>
<li><strong>Previous message:</strong> <a href="14901.php">Nathan Hjelm: "Re: [OMPI devel] opal_free_list_t annoyance"</a>
<li><strong>In reply to:</strong> <a href="14889.php">Ralph Castain: "Re: [OMPI devel] Trunk (RDMA and VT) warnings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14903.php">Ralph Castain: "Re: [OMPI devel] Trunk (RDMA and VT) warnings"</a>
<li><strong>Reply:</strong> <a href="14903.php">Ralph Castain: "Re: [OMPI devel] Trunk (RDMA and VT) warnings"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p><p>On Wed, May 28, 2014 at 9:53 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; gcc (GCC) 4.4.7 20120313 (Red Hat 4.4.7-4)
</span><br>
<span class="quotelev1">&gt;  ./configure --prefix=/home/common/openmpi/build/svn-trunk
</span><br>
<span class="quotelev1">&gt; --enable-mpi-java --enable-orterun-prefix-by-default
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; More inline below
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
this looks like an up-to-date CentOS box.
<br>
i am unable to reproduce the warnings (may be uninitialized in this
<br>
function) with a similar box :-(
<br>
<p><p><p><span class="quotelev1">&gt; On May 27, 2014, at 9:29 PM, Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev1">&gt; gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; so far, it seems this is a false positive/compiler bug that could be
</span><br>
<span class="quotelev1">&gt; triggered by inlining
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /* i could not find any path in which the variable is used unitialized */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I just glanced at the first one (line 221 of osc_rdma_data_move.c), and I
</span><br>
<span class="quotelev1">&gt; can see what the compiler is complaining about - have gotten this in other
</span><br>
<span class="quotelev1">&gt; places as well. The problem is that you pass the address of ptr into a
</span><br>
<span class="quotelev1">&gt; function without first initializing the value of ptr itself. There is no
</span><br>
<span class="quotelev1">&gt; guarantee (so far as the compiler can see) that this function will in fact
</span><br>
<span class="quotelev1">&gt; set the value of ptr - you are relying solely on the fact that (a) you
</span><br>
<span class="quotelev1">&gt; checked that function at one point in time and saw that it always gets set
</span><br>
<span class="quotelev1">&gt; to something if ret == OMPI_SUCCESS, and (b) nobody changed that function
</span><br>
<span class="quotelev1">&gt; since you checked.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Newer compilers seem to be getting more defensive about such things and
</span><br>
<span class="quotelev1">&gt; starting to &quot;bark&quot; when they see it. I think you are correct that inlining
</span><br>
<span class="quotelev1">&gt; also impacts that situation, though I've also been seeing it when the
</span><br>
<span class="quotelev1">&gt; functions aren't inlined.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
i wrote the simple test program :
<br>
<p>#include &lt;string.h&gt;
<br>
<p>char * mystring = &quot;hello&quot;;
<br>
static inline int setif(int mustset, char **ptr) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (!mustset) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return 1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*ptr = mystring;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
<p>void good(int mustset) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;char * ptr;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;char buf[256];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (setif(mustset, &amp;ptr) == 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;memcpy(buf, ptr, 6);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
}
<br>
<p>void bad(int mustset) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;char * ptr;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;char buf[256];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (setif(mustset, &amp;ptr) != 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;memcpy(buf, ptr, 6);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
}
<br>
<p>please note that :
<br>
- the setif function is declared 'inline'
<br>
- the setif will set *ptr only if the 'mustset' parameter is nonzero and
<br>
then return 0
<br>
- the setif will leave *ptr unmodified if the 'mustset' parameter is zero
<br>
and then return 1
<br>
<p>it is trivial that the 'good' function is ok whereas the 'bad' function has
<br>
an issue :
<br>
the compiler has a way to figure out that ptr will be uninitialized when
<br>
invoking memcpy
<br>
(since setif returned a non zero status)
<br>
<p>gcc -Wall -O0 test.c
<br>
does not complain
<br>
<p>gcc -Wall -O1 test.c *does* complain
<br>
test.c:24: warning: &#226;&#128;&#152;ptr&#226;&#128;&#153; may be used uninitialized in this function
<br>
<p>if the 'inline' keyword is omitted, -O2 is needed to get a compiler warning.
<br>
<p>bottom line, an optimized build (-O3 -finline-functions) correctly issues a
<br>
warning.
<br>
i checked osc_rdma_data_move.c and osc_rdma_frag.h again and again and i
<br>
could not find how ptr can be uninitialized in ompi_osc_rdma_control_send if
<br>
ompi_osc_rdma_frag_alloc returned OMPI_SUCCESS
<br>
/* not to mention i am unable to reproduce the warning */
<br>
<p>about the compiler getting more defensive :
<br>
<p>{ int rank;
<br>
&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
<br>
&nbsp;&nbsp;rank++;
<br>
}
<br>
<p>i never saw a compiler issue a warning about rank that could be used
<br>
uninitialized
<br>
<p><p><p><span class="quotelev1">&gt; Not sure what to suggest here - hate to add initialization steps in that
</span><br>
<span class="quotelev1">&gt; sequence....
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; me too, and i do not see any warnings from the compiler
</span><br>
<p>can you please confirm you can reproduce the issue on the most up to date
<br>
trunk revision , on a x86_64 box (never knows ...) ?
<br>
then can you send the output of
<br>
<p>cd ompi/mca/osc/rdma
<br>
touch osc_rdma_data_move.c
<br>
make -n osc_rdma_data_move.lo
<br>
<p><p>Cheers,
<br>
<p>Gilles
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14902/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14903.php">Ralph Castain: "Re: [OMPI devel] Trunk (RDMA and VT) warnings"</a>
<li><strong>Previous message:</strong> <a href="14901.php">Nathan Hjelm: "Re: [OMPI devel] opal_free_list_t annoyance"</a>
<li><strong>In reply to:</strong> <a href="14889.php">Ralph Castain: "Re: [OMPI devel] Trunk (RDMA and VT) warnings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14903.php">Ralph Castain: "Re: [OMPI devel] Trunk (RDMA and VT) warnings"</a>
<li><strong>Reply:</strong> <a href="14903.php">Ralph Castain: "Re: [OMPI devel] Trunk (RDMA and VT) warnings"</a>
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
