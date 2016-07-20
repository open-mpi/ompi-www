<?
$subject_val = "Re: [hwloc-users] hwloc 1.9 and openmpi using intel compiler";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 11 17:59:09 2014" -->
<!-- isoreceived="20140711215909" -->
<!-- sent="Fri, 11 Jul 2014 23:59:05 +0200" -->
<!-- isosent="20140711215905" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] hwloc 1.9 and openmpi using intel compiler" -->
<!-- id="53C05E29.4050808_at_inria.fr" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAbhqc6KMoaiV2MUecx7kR5nRC=XFi52gBBMeQgRRt4FJVmh5w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [hwloc-users] hwloc 1.9 and openmpi using intel compiler<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-11 17:59:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1046.php">Brice Goglin: "Re: [hwloc-users] hwloc 1.9 and openmpi using intel compiler"</a>
<li><strong>Previous message:</strong> <a href="1044.php">Nick Papior Andersen: "Re: [hwloc-users] hwloc 1.9 and openmpi using intel compiler"</a>
<li><strong>In reply to:</strong> <a href="1044.php">Nick Papior Andersen: "Re: [hwloc-users] hwloc 1.9 and openmpi using intel compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1046.php">Brice Goglin: "Re: [hwloc-users] hwloc 1.9 and openmpi using intel compiler"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
OK I found the issue. Some of our internal code doesn't like the fact
<br>
that we fallback to strncmp when strncasecmp isn't available (and icc
<br>
basically says that that strncasecmp isn't usable). I'll try to fix this
<br>
strange remnants from long time ago.
<br>
Brice
<br>
<p><p><p>Le 09/07/2014 23:42, Nick Papior Andersen a &#195;&#169;crit :
<br>
<span class="quotelev1">&gt; Dear Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2014-07-09 21:34 GMT+00:00 Brice Goglin &lt;Brice.Goglin_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;mailto:Brice.Goglin_at_[hidden]&gt;&gt;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Le 09/07/2014 23:30, Nick Papior Andersen a &#195;&#169;crit :
</span><br>
<span class="quotelev2">&gt;&gt;     Dear Brice
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Here are my findings (apologies for not doing make check on
</span><br>
<span class="quotelev2">&gt;&gt;     before-hand!)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     2014-07-09 20:42 GMT+00:00 Brice Goglin &lt;Brice.Goglin_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;     &lt;mailto:Brice.Goglin_at_[hidden]&gt;&gt;:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         A quick look in Open MPI source code seems to say that it's
</span><br>
<span class="quotelev2">&gt;&gt;         manipulating XML topologies in these lines.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Please go into your hwloc-1.9 build directory, and run
</span><br>
<span class="quotelev2">&gt;&gt;         &quot;tests/xmlbuffer&quot; (you will may have to build it with run
</span><br>
<span class="quotelev2">&gt;&gt;         &quot;make xmlbuffer -C tests&quot;).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     This errors out with a segmentation fault. I tried recompiling
</span><br>
<span class="quotelev2">&gt;&gt;     with -g -traceback, to no avail, nothing shows up other than: 
</span><br>
<span class="quotelev2">&gt;&gt;     using default import and export
</span><br>
<span class="quotelev2">&gt;&gt;     exported to buffer 0x1240c40 length 40817
</span><br>
<span class="quotelev2">&gt;&gt;     Segmentation fault
</span><br>
<span class="quotelev2">&gt;&gt;     which is right before the &quot;re-exported&quot; statement. ulimit is not
</span><br>
<span class="quotelev2">&gt;&gt;     ridiculously low.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Can you run it under gdb?
</span><br>
<span class="quotelev1">&gt;     libtool --mode=execute gdb tests/xmlbuffer
</span><br>
<span class="quotelev1">&gt;     $ r
</span><br>
<span class="quotelev1">&gt;     $ bt full
</span><br>
<span class="quotelev1">&gt;     &lt;send this output&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  (gdb) r
</span><br>
<span class="quotelev1">&gt; Starting program:
</span><br>
<span class="quotelev1">&gt; /home/nick/phd/code/install/.compile/hwloc-1.9/tests/.libs/lt-xmlbuffer
</span><br>
<span class="quotelev1">&gt; using default import and export
</span><br>
<span class="quotelev1">&gt; exported to buffer 0x6b6c50 length 40817
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Program received signal SIGSEGV, Segmentation fault.
</span><br>
<span class="quotelev1">&gt; 0x00000000004017fb in one_test () at xmlbuffer.c:51
</span><br>
<span class="quotelev1">&gt; 51 if (strcmp(hwloc_obj_get_info_by_name(hwloc_get_root_obj(topology),
</span><br>
<span class="quotelev1">&gt; &quot;UglyString&quot;), s))
</span><br>
<span class="quotelev1">&gt; (gdb) bt full
</span><br>
<span class="quotelev1">&gt; #0 0x00000000004017fb in one_test () at xmlbuffer.c:51
</span><br>
<span class="quotelev1">&gt; topology = 0x615dc0
</span><br>
<span class="quotelev1">&gt; size1 = 40817
</span><br>
<span class="quotelev1">&gt; size2 = 45
</span><br>
<span class="quotelev1">&gt; buf1 = 0x6b6c50 &quot;&lt;?xml version=\&quot;1.0\&quot; encoding=\&quot;UTF-8\&quot;?&gt;\n&lt;!DOCTYPE
</span><br>
<span class="quotelev1">&gt; topology SYSTEM \&quot;hwloc.dtd\&quot;&gt;\n&lt;topology&gt;\n &lt;object type=\&quot;Machine\&quot;
</span><br>
<span class="quotelev1">&gt; os_index=\&quot;0\&quot; cpuset=\&quot;0x00ffffff\&quot; complete_cpuset=\&quot;0x00ffffff\&quot;
</span><br>
<span class="quotelev1">&gt; online_cpuset=\&quot;0x00fffff&quot;...
</span><br>
<span class="quotelev1">&gt; buf2 = 0x180 &lt;Address 0x180 out of bounds&gt;
</span><br>
<span class="quotelev1">&gt; err = 0
</span><br>
<span class="quotelev1">&gt; s = &quot; \t\n \r&quot;, ' ' &lt;repeats 19 times&gt;,
</span><br>
<span class="quotelev1">&gt; &quot;!\&quot;#$%&amp;'()*+,-./0123456789:;&lt;=&gt;?@ABCDEFGHIJKLMNOPQRSTUVWXYZ[\\]^_`abcdefghijklmnopqrstuvwxyz{|}~
</span><br>
<span class="quotelev1">&gt; &quot;
</span><br>
<span class="quotelev1">&gt; t = &quot;x\001\002\003\004\005\006\ay&quot;
</span><br>
<span class="quotelev1">&gt; #1 0x0000000000401495 in main () at xmlbuffer.c:83
</span><br>
<span class="quotelev1">&gt; No locals.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Also, can you try setting HWLOC_NO_LIBXML_IMPORT=1 and/or
</span><br>
<span class="quotelev1">&gt;     HWLOC_NO_LIBXML_EXPORT=1 in the environment to see if the problem
</span><br>
<span class="quotelev1">&gt;     comes from XML import or export?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You mean:
</span><br>
<span class="quotelev1">&gt; HWLOC_NO_LIBXML_EXPORT=1 ./xmlbuffer
</span><br>
<span class="quotelev1">&gt; HWLOC_NO_LIBXML_IMPORT=1 ./xmlbuffer
</span><br>
<span class="quotelev1">&gt; HWLOC_NO_LIBXML_IMPORT=1 HWLOC_NO_LIBXML_EXPORT=1 ./xmlbuffer
</span><br>
<span class="quotelev1">&gt; It does exactly the same thing, Segmentation fault.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Thanks
</span><br>
<span class="quotelev1">&gt;     Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Kind regards Nick
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-1045/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1046.php">Brice Goglin: "Re: [hwloc-users] hwloc 1.9 and openmpi using intel compiler"</a>
<li><strong>Previous message:</strong> <a href="1044.php">Nick Papior Andersen: "Re: [hwloc-users] hwloc 1.9 and openmpi using intel compiler"</a>
<li><strong>In reply to:</strong> <a href="1044.php">Nick Papior Andersen: "Re: [hwloc-users] hwloc 1.9 and openmpi using intel compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1046.php">Brice Goglin: "Re: [hwloc-users] hwloc 1.9 and openmpi using intel compiler"</a>
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
