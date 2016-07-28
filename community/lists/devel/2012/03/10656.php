<?
$subject_val = "[OMPI devel] Replacing poll()";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar  2 06:26:52 2012" -->
<!-- isoreceived="20120302112652" -->
<!-- sent="Fri, 02 Mar 2012 13:26:44 +0200" -->
<!-- isosent="20120302112644" -->
<!-- name="Alex Margolin" -->
<!-- email="alex.margolin_at_[hidden]" -->
<!-- subject="[OMPI devel] Replacing poll()" -->
<!-- id="4F50AE74.3080409_at_mail.huji.ac.il" -->
<!-- charset="windows-1252" -->
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
<strong>Subject:</strong> [OMPI devel] Replacing poll()<br>
<strong>From:</strong> Alex Margolin (<em>alex.margolin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-02 06:26:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10657.php">Alex Margolin: "Re: [OMPI devel] Replacing poll()"</a>
<li><strong>Previous message:</strong> <a href="10655.php">Christopher Samuel: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26077 (fwd)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10657.php">Alex Margolin: "Re: [OMPI devel] Replacing poll()"</a>
<li><strong>Reply:</strong> <a href="10657.php">Alex Margolin: "Re: [OMPI devel] Replacing poll()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I'm trying to replace the poll() function with mine (say poll2() in 
<br>
poll2.c), and I got some building errors.
<br>
This is after I copied poll2.c into opal/events/ and added it in the 
<br>
sources list in Makefile.am in that folder.
<br>
<p>...
<br>
Making all in tools/wrappers
<br>
make[2]: Entering directory
<br>
`/home/alex/huji/openmpi-1.4.4/opal/tools/wrappers'
<br>
depbase=`echo opal_wrapper.o | sed 's|[^/]*$|.deps/&amp;|;s|\.o$||'`;\
<br>
gcc &quot;-DEXEEXT=\&quot;\&quot;&quot; -I. -I../../../opal/include -I../../../orte/include
<br>
-I../../../ompi/include
<br>
-I../../../opal/mca/paffinity/linux/plpa/src/libplpa -I../../.. -O3
<br>
-DNDEBUG -m64 -finline-functions -fno-strict-aliasing -pthread
<br>
-fvisibility=hidden -MT opal_wrapper.o -MD -MP -MF $depbase.Tpo -c -o
<br>
opal_wrapper.o opal_wrapper.c &amp;&amp;\
<br>
mv -f $depbase.Tpo $depbase.Po
<br>
opal_wrapper.c: In function &#145;main&#146;:
<br>
opal_wrapper.c:733:21: warning: ignoring return value of &#145;asprintf&#146;,
<br>
declared with attribute warn_unused_result [-Wunused-result]
<br>
opal_wrapper.c: In function &#145;data_init&#146;:
<br>
opal_wrapper.c:375:13: warning: ignoring return value of &#145;asprintf&#146;,
<br>
declared with attribute warn_unused_result [-Wunused-result]
<br>
opal_wrapper.c: In function &#145;data_callback&#146;:
<br>
opal_wrapper.c:333:25: warning: ignoring return value of &#145;asprintf&#146;,
<br>
declared with attribute warn_unused_result [-Wunused-result]
<br>
opal_wrapper.c:358:21: warning: ignoring return value of &#145;asprintf&#146;,
<br>
declared with attribute warn_unused_result [-Wunused-result]
<br>
opal_wrapper.c: In function &#145;add_extra_includes&#146;:
<br>
opal_wrapper.c:233:17: warning: ignoring return value of &#145;asprintf&#146;,
<br>
declared with attribute warn_unused_result [-Wunused-result]
<br>
opal_wrapper.c: In function &#145;load_env_data&#146;:
<br>
opal_wrapper.c:429:13: warning: ignoring return value of &#145;asprintf&#146;,
<br>
declared with attribute warn_unused_result [-Wunused-result]
<br>
opal_wrapper.c:432:17: warning: ignoring return value of &#145;asprintf&#146;,
<br>
declared with attribute warn_unused_result [-Wunused-result]
<br>
opal_wrapper.c: In function &#145;load_env_data_argv&#146;:
<br>
opal_wrapper.c:453:13: warning: ignoring return value of &#145;asprintf&#146;,
<br>
declared with attribute warn_unused_result [-Wunused-result]
<br>
opal_wrapper.c:456:17: warning: ignoring return value of &#145;asprintf&#146;,
<br>
declared with attribute warn_unused_result [-Wunused-result]
<br>
/bin/bash ../../../libtool --tag=CC --mode=link gcc -O3 -DNDEBUG -m64
<br>
-finline-functions -fno-strict-aliasing -pthread -fvisibility=hidden
<br>
-export-dynamic -o opal_wrapper opal_wrapper.o
<br>
../../../opal/libopen-pal.la -lnsl -lutil -lm
<br>
libtool: link: gcc -O3 -DNDEBUG -m64 -finline-functions
<br>
-fno-strict-aliasing -pthread -fvisibility=hidden -o .libs/opal_wrapper
<br>
opal_wrapper.o -Wl,--export-dynamic ../../../opal/.libs/libopen-pal.so
<br>
-ldl -lnsl -lutil -lm -pthread -Wl,-rpath -Wl,/home/alex/huji/ompi4/lib
<br>
../../../opal/.libs/libopen-pal.so: undefined reference to `poll2'
<br>
collect2: ld returned 1 exit status
<br>
make[2]: *** [opal_wrapper] Error 1
<br>
make[2]: Leaving directory
<br>
`/home/alex/huji/openmpi-1.4.4/opal/tools/wrappers'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory `/home/alex/huji/openmpi-1.4.4/opal'
<br>
make: *** [all-recursive] Error 1
<br>
alex_at_singularity:~/huji/openmpi-1.4.4$
<br>
<p>It seems that I need to add poll2.c to OMPI_LIBEVENT_SOURCES, but I 
<br>
can't find it anywhere other then Makefile files, which are regenerated...
<br>
Am I missing something?
<br>
<p>I know trying to replace poll() seems like I'm doing something very 
<br>
wrong, but I want to poll on events without a valid linux file 
<br>
descriptor (and existing events, specifically sockets, at the same 
<br>
time), and I see no other way. Obviously, my poll2 calls the linux poll 
<br>
in most cases.
<br>
<p>Thanks,
<br>
Alex
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10657.php">Alex Margolin: "Re: [OMPI devel] Replacing poll()"</a>
<li><strong>Previous message:</strong> <a href="10655.php">Christopher Samuel: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26077 (fwd)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10657.php">Alex Margolin: "Re: [OMPI devel] Replacing poll()"</a>
<li><strong>Reply:</strong> <a href="10657.php">Alex Margolin: "Re: [OMPI devel] Replacing poll()"</a>
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
