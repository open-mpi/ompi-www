<?
$subject_val = "Re: [OMPI devel] 1.8.5rc1 MacOS X 10.8 build failure (libltdl?)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  6 20:13:28 2015" -->
<!-- isoreceived="20150407001328" -->
<!-- sent="Mon, 6 Apr 2015 17:13:23 -0700" -->
<!-- isosent="20150407001323" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.8.5rc1 MacOS X 10.8 build failure (libltdl?)" -->
<!-- id="3B4BDD39-10D1-40FE-8A64-FCAF0C137D60_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAAvDA16EoggzsLOwJGRQMyAc+yceNTmG1bvj7+-0kixYk8KutA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.8.5rc1 MacOS X 10.8 build failure (libltdl?)<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-06 20:13:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17188.php">Paul Hargrove: "Re: [OMPI devel] 1.8.5rc1 MacOS X 10.8 build failure (libltdl?)"</a>
<li><strong>Previous message:</strong> <a href="17186.php">Ralph Castain: "Re: [OMPI devel] dlclose of libmpi, java gc, and pthread_key destructors"</a>
<li><strong>In reply to:</strong> <a href="17184.php">Paul Hargrove: "[OMPI devel] 1.8.5rc1 MacOS X 10.8 build failure (libltdl?)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17188.php">Paul Hargrove: "Re: [OMPI devel] 1.8.5rc1 MacOS X 10.8 build failure (libltdl?)"</a>
<li><strong>Reply:</strong> <a href="17188.php">Paul Hargrove: "Re: [OMPI devel] 1.8.5rc1 MacOS X 10.8 build failure (libltdl?)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FWIW: this is on Mac 10.10.2, using clang and clang++
<br>
<p>OMPI master - bunch of warnings, but it successfully builds:
<br>
In file included from ./libevent/event-internal.h:38:
<br>
./libevent/minheap-internal.h:64:6: warning: unused function 'min_heap_ctor' [-Wunused-function]
<br>
void min_heap_ctor(min_heap_t* s) { s-&gt;p = 0; s-&gt;n = 0; s-&gt;a = 0; }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
./libevent/minheap-internal.h:65:6: warning: unused function 'min_heap_dtor' [-Wunused-function]
<br>
void min_heap_dtor(min_heap_t* s) { if (s-&gt;p) mm_free(s-&gt;p); }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
./libevent/minheap-internal.h:66:6: warning: unused function 'min_heap_elem_init' [-Wunused-function]
<br>
void min_heap_elem_init(struct event* e) { e-&gt;ev_timeout_pos.min_heap_idx = -1; }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
./libevent/minheap-internal.h:67:5: warning: unused function 'min_heap_empty' [-Wunused-function]
<br>
int min_heap_empty(min_heap_t* s) { return 0u == s-&gt;n; }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
./libevent/minheap-internal.h:68:10: warning: unused function 'min_heap_size' [-Wunused-function]
<br>
unsigned min_heap_size(min_heap_t* s) { return s-&gt;n; }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
./libevent/minheap-internal.h:69:15: warning: unused function 'min_heap_top' [-Wunused-function]
<br>
struct event* min_heap_top(min_heap_t* s) { return s-&gt;n ? *s-&gt;p : 0; }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
./libevent/minheap-internal.h:71:5: warning: unused function 'min_heap_push' [-Wunused-function]
<br>
int min_heap_push(min_heap_t* s, struct event* e)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
./libevent/minheap-internal.h:79:15: warning: unused function 'min_heap_pop' [-Wunused-function]
<br>
struct event* min_heap_pop(min_heap_t* s)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
./libevent/minheap-internal.h:91:5: warning: unused function 'min_heap_elt_is_top' [-Wunused-function]
<br>
int min_heap_elt_is_top(const struct event *e)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
./libevent/minheap-internal.h:96:5: warning: unused function 'min_heap_erase' [-Wunused-function]
<br>
int min_heap_erase(min_heap_t* s, struct event* e)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
osc_sm_passive_target.c:161:16: warning: variable 'ret' is used uninitialized whenever 'if' condition is false [-Wsometimes-uninitialized]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;} else if (module-&gt;outstanding_locks[target] == lock_shared) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
<br>
osc_sm_passive_target.c:167:12: note: uninitialized use occurs here
<br>
&nbsp;&nbsp;&nbsp;&nbsp;return ret;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^~~
<br>
osc_sm_passive_target.c:161:12: note: remove the 'if' if its condition is always true
<br>
&nbsp;&nbsp;&nbsp;&nbsp;} else if (module-&gt;outstanding_locks[target] == lock_shared) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
<br>
osc_sm_passive_target.c:148:12: note: initialize the variable 'ret' to silence this warning
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int ret;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;= 0
<br>
1 warning generated.
<br>
pml_cm_recv.c:85:6: warning: no previous prototype for function 'mca_pml_cm_recv_fast_completion' [-Wmissing-prototypes]
<br>
void mca_pml_cm_recv_fast_completion(struct mca_mtl_request_t *mtl_request)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p><p>OMPI v1.8 fails for me at an earlier stage:
<br>
<p>make
<br>
Making all in config
<br>
make[1]: Nothing to be done for `all'.
<br>
Making all in contrib
<br>
make[1]: Nothing to be done for `all'.
<br>
Making all in opal
<br>
Making all in include
<br>
/Applications/Xcode.app/Contents/Developer/usr/bin/make  all-am
<br>
make[3]: Nothing to be done for `all-am'.
<br>
Making all in libltdl
<br>
CDPATH=&quot;${ZSH_VERSION+.}:&quot; &amp;&amp; cd . &amp;&amp; /bin/sh /Users/rhc/openmpi/ompi-release/config/missing aclocal-1.15 -I ../../config
<br>
aclocal-1.15: error: ../../config/autogen_found_items.m4:304: file 'opal/mca/backtrace/configure.m4' does not exist
<br>
make[2]: *** [aclocal.m4] Error 1
<br>
make[1]: *** [all-recursive] Error 1
<br>
make: *** [all-recursive] Error 1
<br>
<p>I believe we have seen this before, and it was an issue caused by a change in libtool itself. The Mac automatically updated to the new version, which triggers the problem.
<br>
<p>This is why we embedded ltdl directly into the OMPI master, and is why the master is building while the 1.8 branch is not.
<br>
<p>I don&#146;t have a ready fix at hand - might have to wait for Jeff to return next week to advise.
<br>
<p><p><span class="quotelev1">&gt; On Apr 6, 2015, at 2:41 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On MacOS X 10.8 (where cc and c++ are clang and clang++, and the default ABI is LP64) I've configured the release candidate with
</span><br>
<span class="quotelev1">&gt; --prefix=.... --enable-debug CC=cc CXX=c++
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The build fails linking opal_wrapper as shown in the &quot;make V=1&quot; output below.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Based on the undefined symbol (_lt_libltdlc_LTX_preloaded_symbols) I am guessing this is a libltdl issue.  If relevant, note that configure picks the embedded libltdl:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *** GNU libltdl setup
</span><br>
<span class="quotelev1">&gt; checking location of libltdl... internal copy
</span><br>
<span class="quotelev1">&gt; configure: OMPI configuring in opal/libltdl
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Oddly enough, I have no problems with a build configured for the ILP32 ABI as follows:
</span><br>
<span class="quotelev1">&gt; --prefix=.... --enable-debug CC=cc CXX=c++ \
</span><br>
<span class="quotelev1">&gt; CFLAGS=-m32 --with-wrapper-cflags=-m32 \
</span><br>
<span class="quotelev1">&gt; CXXFLAGS=-m32 --with-wrapper-cxxflags=-m32 \
</span><br>
<span class="quotelev1">&gt; FCFLAGS=-m32 --with-wrapper-fcflags=-m32
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I can send (off-list) the config.log and configure's complete stdout for both the LP64 and ILP32 builds if requested.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /bin/sh ../../../libtool  --tag=CC   --mode=link cc  -g -finline-functions -fno-strict-aliasing   -export-dynamic  -Wl,-flat_namespace  -o opal_wrapper opal_wrapper.o ../../../opal/libopen-pal.la &lt;<a href="http://libopen-pal.la/">http://libopen-pal.la/</a>&gt; 
</span><br>
<span class="quotelev1">&gt; libtool: link: cc -g -finline-functions -fno-strict-aliasing -Wl,-flat_namespace -o .libs/opal_wrapper opal_wrapper.o  ../../../opal/.libs/libopen-pal.dylib -lm
</span><br>
<span class="quotelev1">&gt; Undefined symbols for architecture x86_64:
</span><br>
<span class="quotelev1">&gt;   &quot;_lt_libltdlc_LTX_preloaded_symbols&quot;, referenced from:
</span><br>
<span class="quotelev1">&gt;       import-atom in libopen-pal.dylib
</span><br>
<span class="quotelev1">&gt; ld: symbol(s) not found for architecture x86_64
</span><br>
<span class="quotelev1">&gt; clang: error: linker command failed with exit code 1 (use -v to see invocation)
</span><br>
<span class="quotelev1">&gt; make[2]: *** [opal_wrapper] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden] &lt;mailto:PHHargrove_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev1">&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/04/17184.php">http://www.open-mpi.org/community/lists/devel/2015/04/17184.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17187/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17188.php">Paul Hargrove: "Re: [OMPI devel] 1.8.5rc1 MacOS X 10.8 build failure (libltdl?)"</a>
<li><strong>Previous message:</strong> <a href="17186.php">Ralph Castain: "Re: [OMPI devel] dlclose of libmpi, java gc, and pthread_key destructors"</a>
<li><strong>In reply to:</strong> <a href="17184.php">Paul Hargrove: "[OMPI devel] 1.8.5rc1 MacOS X 10.8 build failure (libltdl?)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17188.php">Paul Hargrove: "Re: [OMPI devel] 1.8.5rc1 MacOS X 10.8 build failure (libltdl?)"</a>
<li><strong>Reply:</strong> <a href="17188.php">Paul Hargrove: "Re: [OMPI devel] 1.8.5rc1 MacOS X 10.8 build failure (libltdl?)"</a>
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
