<?
$subject_val = "Re: [OMPI devel] Replacing poll()";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar  2 07:33:52 2012" -->
<!-- isoreceived="20120302123352" -->
<!-- sent="Fri, 02 Mar 2012 14:33:44 +0200" -->
<!-- isosent="20120302123344" -->
<!-- name="Alex Margolin" -->
<!-- email="alex.margolin_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Replacing poll()" -->
<!-- id="4F50BE28.9050608_at_mail.huji.ac.il" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="4F50AE74.3080409_at_mail.huji.ac.il" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Replacing poll()<br>
<strong>From:</strong> Alex Margolin (<em>alex.margolin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-02 07:33:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10658.php">Matthias Jurenz: "Re: [OMPI devel] poor btl sm latency"</a>
<li><strong>Previous message:</strong> <a href="10656.php">Alex Margolin: "[OMPI devel] Replacing poll()"</a>
<li><strong>In reply to:</strong> <a href="10656.php">Alex Margolin: "[OMPI devel] Replacing poll()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10662.php">Jeffrey Squyres: "Re: [OMPI devel] Replacing poll()"</a>
<li><strong>Reply:</strong> <a href="10662.php">Jeffrey Squyres: "Re: [OMPI devel] Replacing poll()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I added my poll2.c to config/ompi_setup_libevent.m4 next to poll.c and 
<br>
was able to build successfully, but even if poll2() just (prints and) 
<br>
calls poll() - I get the following error (btl is specified to avoid 
<br>
loading my module at this time):
<br>
<p>alex_at_singularity:~/huji/benchmarks/simple$ ~/huji/ompi4/bin/mpirun -mca 
<br>
btl self,tcp -n 2 ./pong
<br>
Inside poll2!
<br>
[singularity:32552] *** Process received signal ***
<br>
[singularity:32552] Signal: Segmentation fault (11)
<br>
[singularity:32552] Signal code: Address not mapped (1)
<br>
[singularity:32552] Failing at address: (nil)
<br>
[singularity:32552] [ 0] /lib/x86_64-linux-gnu/libpthread.so.0(+0x10060) 
<br>
[0x7f7d6ac26060]
<br>
[singularity:32552] *** End of error message ***
<br>
Segmentation fault
<br>
alex_at_singularity:~/huji/benchmarks/simple$
<br>
<p><p>Any ideas?
<br>
<p><p>On 03/02/2012 01:26 PM, Alex Margolin wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm trying to replace the poll() function with mine (say poll2() in 
</span><br>
<span class="quotelev1">&gt; poll2.c), and I got some building errors.
</span><br>
<span class="quotelev1">&gt; This is after I copied poll2.c into opal/events/ and added it in the 
</span><br>
<span class="quotelev1">&gt; sources list in Makefile.am in that folder.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; Making all in tools/wrappers
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory
</span><br>
<span class="quotelev1">&gt; `/home/alex/huji/openmpi-1.4.4/opal/tools/wrappers'
</span><br>
<span class="quotelev1">&gt; depbase=`echo opal_wrapper.o | sed 's|[^/]*$|.deps/&amp;|;s|\.o$||'`;\
</span><br>
<span class="quotelev1">&gt; gcc &quot;-DEXEEXT=\&quot;\&quot;&quot; -I. -I../../../opal/include -I../../../orte/include
</span><br>
<span class="quotelev1">&gt; -I../../../ompi/include
</span><br>
<span class="quotelev1">&gt; -I../../../opal/mca/paffinity/linux/plpa/src/libplpa -I../../.. -O3
</span><br>
<span class="quotelev1">&gt; -DNDEBUG -m64 -finline-functions -fno-strict-aliasing -pthread
</span><br>
<span class="quotelev1">&gt; -fvisibility=hidden -MT opal_wrapper.o -MD -MP -MF $depbase.Tpo -c -o
</span><br>
<span class="quotelev1">&gt; opal_wrapper.o opal_wrapper.c &amp;&amp;\
</span><br>
<span class="quotelev1">&gt; mv -f $depbase.Tpo $depbase.Po
</span><br>
<span class="quotelev1">&gt; opal_wrapper.c: In function &#145;main&#146;:
</span><br>
<span class="quotelev1">&gt; opal_wrapper.c:733:21: warning: ignoring return value of &#145;asprintf&#146;,
</span><br>
<span class="quotelev1">&gt; declared with attribute warn_unused_result [-Wunused-result]
</span><br>
<span class="quotelev1">&gt; opal_wrapper.c: In function &#145;data_init&#146;:
</span><br>
<span class="quotelev1">&gt; opal_wrapper.c:375:13: warning: ignoring return value of &#145;asprintf&#146;,
</span><br>
<span class="quotelev1">&gt; declared with attribute warn_unused_result [-Wunused-result]
</span><br>
<span class="quotelev1">&gt; opal_wrapper.c: In function &#145;data_callback&#146;:
</span><br>
<span class="quotelev1">&gt; opal_wrapper.c:333:25: warning: ignoring return value of &#145;asprintf&#146;,
</span><br>
<span class="quotelev1">&gt; declared with attribute warn_unused_result [-Wunused-result]
</span><br>
<span class="quotelev1">&gt; opal_wrapper.c:358:21: warning: ignoring return value of &#145;asprintf&#146;,
</span><br>
<span class="quotelev1">&gt; declared with attribute warn_unused_result [-Wunused-result]
</span><br>
<span class="quotelev1">&gt; opal_wrapper.c: In function &#145;add_extra_includes&#146;:
</span><br>
<span class="quotelev1">&gt; opal_wrapper.c:233:17: warning: ignoring return value of &#145;asprintf&#146;,
</span><br>
<span class="quotelev1">&gt; declared with attribute warn_unused_result [-Wunused-result]
</span><br>
<span class="quotelev1">&gt; opal_wrapper.c: In function &#145;load_env_data&#146;:
</span><br>
<span class="quotelev1">&gt; opal_wrapper.c:429:13: warning: ignoring return value of &#145;asprintf&#146;,
</span><br>
<span class="quotelev1">&gt; declared with attribute warn_unused_result [-Wunused-result]
</span><br>
<span class="quotelev1">&gt; opal_wrapper.c:432:17: warning: ignoring return value of &#145;asprintf&#146;,
</span><br>
<span class="quotelev1">&gt; declared with attribute warn_unused_result [-Wunused-result]
</span><br>
<span class="quotelev1">&gt; opal_wrapper.c: In function &#145;load_env_data_argv&#146;:
</span><br>
<span class="quotelev1">&gt; opal_wrapper.c:453:13: warning: ignoring return value of &#145;asprintf&#146;,
</span><br>
<span class="quotelev1">&gt; declared with attribute warn_unused_result [-Wunused-result]
</span><br>
<span class="quotelev1">&gt; opal_wrapper.c:456:17: warning: ignoring return value of &#145;asprintf&#146;,
</span><br>
<span class="quotelev1">&gt; declared with attribute warn_unused_result [-Wunused-result]
</span><br>
<span class="quotelev1">&gt; /bin/bash ../../../libtool --tag=CC --mode=link gcc -O3 -DNDEBUG -m64
</span><br>
<span class="quotelev1">&gt; -finline-functions -fno-strict-aliasing -pthread -fvisibility=hidden
</span><br>
<span class="quotelev1">&gt; -export-dynamic -o opal_wrapper opal_wrapper.o
</span><br>
<span class="quotelev1">&gt; ../../../opal/libopen-pal.la -lnsl -lutil -lm
</span><br>
<span class="quotelev1">&gt; libtool: link: gcc -O3 -DNDEBUG -m64 -finline-functions
</span><br>
<span class="quotelev1">&gt; -fno-strict-aliasing -pthread -fvisibility=hidden -o .libs/opal_wrapper
</span><br>
<span class="quotelev1">&gt; opal_wrapper.o -Wl,--export-dynamic ../../../opal/.libs/libopen-pal.so
</span><br>
<span class="quotelev1">&gt; -ldl -lnsl -lutil -lm -pthread -Wl,-rpath -Wl,/home/alex/huji/ompi4/lib
</span><br>
<span class="quotelev1">&gt; ../../../opal/.libs/libopen-pal.so: undefined reference to `poll2'
</span><br>
<span class="quotelev1">&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev1">&gt; make[2]: *** [opal_wrapper] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/home/alex/huji/openmpi-1.4.4/opal/tools/wrappers'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/home/alex/huji/openmpi-1.4.4/opal'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; alex_at_singularity:~/huji/openmpi-1.4.4$
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It seems that I need to add poll2.c to OMPI_LIBEVENT_SOURCES, but I 
</span><br>
<span class="quotelev1">&gt; can't find it anywhere other then Makefile files, which are 
</span><br>
<span class="quotelev1">&gt; regenerated...
</span><br>
<span class="quotelev1">&gt; Am I missing something?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I know trying to replace poll() seems like I'm doing something very 
</span><br>
<span class="quotelev1">&gt; wrong, but I want to poll on events without a valid linux file 
</span><br>
<span class="quotelev1">&gt; descriptor (and existing events, specifically sockets, at the same 
</span><br>
<span class="quotelev1">&gt; time), and I see no other way. Obviously, my poll2 calls the linux 
</span><br>
<span class="quotelev1">&gt; poll in most cases.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Alex
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10658.php">Matthias Jurenz: "Re: [OMPI devel] poor btl sm latency"</a>
<li><strong>Previous message:</strong> <a href="10656.php">Alex Margolin: "[OMPI devel] Replacing poll()"</a>
<li><strong>In reply to:</strong> <a href="10656.php">Alex Margolin: "[OMPI devel] Replacing poll()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10662.php">Jeffrey Squyres: "Re: [OMPI devel] Replacing poll()"</a>
<li><strong>Reply:</strong> <a href="10662.php">Jeffrey Squyres: "Re: [OMPI devel] Replacing poll()"</a>
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
