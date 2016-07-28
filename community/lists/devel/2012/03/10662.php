<?
$subject_val = "Re: [OMPI devel] Replacing poll()";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar  2 09:33:45 2012" -->
<!-- isoreceived="20120302143345" -->
<!-- sent="Fri, 2 Mar 2012 09:33:40 -0500" -->
<!-- isosent="20120302143340" -->
<!-- name="Jeffrey Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Replacing poll()" -->
<!-- id="DAADA9D9-CF16-4BDD-A5CC-EF02D373697D_at_cisco.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="4F50BE28.9050608_at_mail.huji.ac.il" -->
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
<strong>From:</strong> Jeffrey Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-02 09:33:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10663.php">Matthias Jurenz: "Re: [OMPI devel] poor btl sm latency"</a>
<li><strong>Previous message:</strong> <a href="10661.php">Jeffrey Squyres: "Re: [OMPI devel] poor btl sm latency"</a>
<li><strong>In reply to:</strong> <a href="10657.php">Alex Margolin: "Re: [OMPI devel] Replacing poll()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10667.php">Alex Margolin: "Re: [OMPI devel] Replacing poll()"</a>
<li><strong>Reply:</strong> <a href="10667.php">Alex Margolin: "Re: [OMPI devel] Replacing poll()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Note that the OMPI 1.4.x series is about to be retired.  If you're doing new stuff, I'd advise you to be working with the Open MPI SVN trunk.  In the trunk, we've changed how we build libevent, so if you're adding to it, you probably want to be working there for max forward-compatibility.
<br>
<p>That being said:
<br>
<p><span class="quotelev1">&gt; I know trying to replace poll() seems like I'm doing something very wrong, but I want to poll on events without a valid linux file descriptor (and existing events, specifically sockets, at the same time), and I see no other way. Obviously, my poll2 calls the linux poll in most cases.
</span><br>
<p>What exactly are you trying to do?  OMPI has some internal hooks for non-fd-or-event-based progress.  Indeed, libevent is typically called with fairly low frequency (e.g., if you're running with OpenFabrics or some other high-speed/not-fd-based networking interconnect).
<br>
<p><p><p>On Mar 2, 2012, at 7:33 AM, Alex Margolin wrote:
<br>
<p><span class="quotelev1">&gt; I added my poll2.c to config/ompi_setup_libevent.m4 next to poll.c and was able to build successfully, but even if poll2() just (prints and) calls poll() - I get the following error (btl is specified to avoid loading my module at this time):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; alex_at_singularity:~/huji/benchmarks/simple$ ~/huji/ompi4/bin/mpirun -mca btl self,tcp -n 2 ./pong
</span><br>
<span class="quotelev1">&gt; Inside poll2!
</span><br>
<span class="quotelev1">&gt; [singularity:32552] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [singularity:32552] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [singularity:32552] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [singularity:32552] Failing at address: (nil)
</span><br>
<span class="quotelev1">&gt; [singularity:32552] [ 0] /lib/x86_64-linux-gnu/libpthread.so.0(+0x10060) [0x7f7d6ac26060]
</span><br>
<span class="quotelev1">&gt; [singularity:32552] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; Segmentation fault
</span><br>
<span class="quotelev1">&gt; alex_at_singularity:~/huji/benchmarks/simple$
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any ideas?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 03/02/2012 01:26 PM, Alex Margolin wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm trying to replace the poll() function with mine (say poll2() in poll2.c), and I got some building errors.
</span><br>
<span class="quotelev2">&gt;&gt; This is after I copied poll2.c into opal/events/ and added it in the sources list in Makefile.am in that folder.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; Making all in tools/wrappers
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Entering directory
</span><br>
<span class="quotelev2">&gt;&gt; `/home/alex/huji/openmpi-1.4.4/opal/tools/wrappers'
</span><br>
<span class="quotelev2">&gt;&gt; depbase=`echo opal_wrapper.o | sed 's|[^/]*$|.deps/&amp;|;s|\.o$||'`;\
</span><br>
<span class="quotelev2">&gt;&gt; gcc &quot;-DEXEEXT=\&quot;\&quot;&quot; -I. -I../../../opal/include -I../../../orte/include
</span><br>
<span class="quotelev2">&gt;&gt; -I../../../ompi/include
</span><br>
<span class="quotelev2">&gt;&gt; -I../../../opal/mca/paffinity/linux/plpa/src/libplpa -I../../.. -O3
</span><br>
<span class="quotelev2">&gt;&gt; -DNDEBUG -m64 -finline-functions -fno-strict-aliasing -pthread
</span><br>
<span class="quotelev2">&gt;&gt; -fvisibility=hidden -MT opal_wrapper.o -MD -MP -MF $depbase.Tpo -c -o
</span><br>
<span class="quotelev2">&gt;&gt; opal_wrapper.o opal_wrapper.c &amp;&amp;\
</span><br>
<span class="quotelev2">&gt;&gt; mv -f $depbase.Tpo $depbase.Po
</span><br>
<span class="quotelev2">&gt;&gt; opal_wrapper.c: In function &#145;main&#146;:
</span><br>
<span class="quotelev2">&gt;&gt; opal_wrapper.c:733:21: warning: ignoring return value of &#145;asprintf&#146;,
</span><br>
<span class="quotelev2">&gt;&gt; declared with attribute warn_unused_result [-Wunused-result]
</span><br>
<span class="quotelev2">&gt;&gt; opal_wrapper.c: In function &#145;data_init&#146;:
</span><br>
<span class="quotelev2">&gt;&gt; opal_wrapper.c:375:13: warning: ignoring return value of &#145;asprintf&#146;,
</span><br>
<span class="quotelev2">&gt;&gt; declared with attribute warn_unused_result [-Wunused-result]
</span><br>
<span class="quotelev2">&gt;&gt; opal_wrapper.c: In function &#145;data_callback&#146;:
</span><br>
<span class="quotelev2">&gt;&gt; opal_wrapper.c:333:25: warning: ignoring return value of &#145;asprintf&#146;,
</span><br>
<span class="quotelev2">&gt;&gt; declared with attribute warn_unused_result [-Wunused-result]
</span><br>
<span class="quotelev2">&gt;&gt; opal_wrapper.c:358:21: warning: ignoring return value of &#145;asprintf&#146;,
</span><br>
<span class="quotelev2">&gt;&gt; declared with attribute warn_unused_result [-Wunused-result]
</span><br>
<span class="quotelev2">&gt;&gt; opal_wrapper.c: In function &#145;add_extra_includes&#146;:
</span><br>
<span class="quotelev2">&gt;&gt; opal_wrapper.c:233:17: warning: ignoring return value of &#145;asprintf&#146;,
</span><br>
<span class="quotelev2">&gt;&gt; declared with attribute warn_unused_result [-Wunused-result]
</span><br>
<span class="quotelev2">&gt;&gt; opal_wrapper.c: In function &#145;load_env_data&#146;:
</span><br>
<span class="quotelev2">&gt;&gt; opal_wrapper.c:429:13: warning: ignoring return value of &#145;asprintf&#146;,
</span><br>
<span class="quotelev2">&gt;&gt; declared with attribute warn_unused_result [-Wunused-result]
</span><br>
<span class="quotelev2">&gt;&gt; opal_wrapper.c:432:17: warning: ignoring return value of &#145;asprintf&#146;,
</span><br>
<span class="quotelev2">&gt;&gt; declared with attribute warn_unused_result [-Wunused-result]
</span><br>
<span class="quotelev2">&gt;&gt; opal_wrapper.c: In function &#145;load_env_data_argv&#146;:
</span><br>
<span class="quotelev2">&gt;&gt; opal_wrapper.c:453:13: warning: ignoring return value of &#145;asprintf&#146;,
</span><br>
<span class="quotelev2">&gt;&gt; declared with attribute warn_unused_result [-Wunused-result]
</span><br>
<span class="quotelev2">&gt;&gt; opal_wrapper.c:456:17: warning: ignoring return value of &#145;asprintf&#146;,
</span><br>
<span class="quotelev2">&gt;&gt; declared with attribute warn_unused_result [-Wunused-result]
</span><br>
<span class="quotelev2">&gt;&gt; /bin/bash ../../../libtool --tag=CC --mode=link gcc -O3 -DNDEBUG -m64
</span><br>
<span class="quotelev2">&gt;&gt; -finline-functions -fno-strict-aliasing -pthread -fvisibility=hidden
</span><br>
<span class="quotelev2">&gt;&gt; -export-dynamic -o opal_wrapper opal_wrapper.o
</span><br>
<span class="quotelev2">&gt;&gt; ../../../opal/libopen-pal.la -lnsl -lutil -lm
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: gcc -O3 -DNDEBUG -m64 -finline-functions
</span><br>
<span class="quotelev2">&gt;&gt; -fno-strict-aliasing -pthread -fvisibility=hidden -o .libs/opal_wrapper
</span><br>
<span class="quotelev2">&gt;&gt; opal_wrapper.o -Wl,--export-dynamic ../../../opal/.libs/libopen-pal.so
</span><br>
<span class="quotelev2">&gt;&gt; -ldl -lnsl -lutil -lm -pthread -Wl,-rpath -Wl,/home/alex/huji/ompi4/lib
</span><br>
<span class="quotelev2">&gt;&gt; ../../../opal/.libs/libopen-pal.so: undefined reference to `poll2'
</span><br>
<span class="quotelev2">&gt;&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: *** [opal_wrapper] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory
</span><br>
<span class="quotelev2">&gt;&gt; `/home/alex/huji/openmpi-1.4.4/opal/tools/wrappers'
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: Leaving directory `/home/alex/huji/openmpi-1.4.4/opal'
</span><br>
<span class="quotelev2">&gt;&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; alex_at_singularity:~/huji/openmpi-1.4.4$
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It seems that I need to add poll2.c to OMPI_LIBEVENT_SOURCES, but I can't find it anywhere other then Makefile files, which are regenerated...
</span><br>
<span class="quotelev2">&gt;&gt; Am I missing something?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I know trying to replace poll() seems like I'm doing something very wrong, but I want to poll on events without a valid linux file descriptor (and existing events, specifically sockets, at the same time), and I see no other way. Obviously, my poll2 calls the linux poll in most cases.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Alex
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10663.php">Matthias Jurenz: "Re: [OMPI devel] poor btl sm latency"</a>
<li><strong>Previous message:</strong> <a href="10661.php">Jeffrey Squyres: "Re: [OMPI devel] poor btl sm latency"</a>
<li><strong>In reply to:</strong> <a href="10657.php">Alex Margolin: "Re: [OMPI devel] Replacing poll()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10667.php">Alex Margolin: "Re: [OMPI devel] Replacing poll()"</a>
<li><strong>Reply:</strong> <a href="10667.php">Alex Margolin: "Re: [OMPI devel] Replacing poll()"</a>
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
