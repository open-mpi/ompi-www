<?
$subject_val = "Re: [hwloc-users] hwloc 1.9 and openmpi using intel compiler";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jul 13 16:46:09 2014" -->
<!-- isoreceived="20140713204609" -->
<!-- sent="Sun, 13 Jul 2014 20:45:49 +0000" -->
<!-- isosent="20140713204549" -->
<!-- name="Nick Papior Andersen" -->
<!-- email="nickpapior_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] hwloc 1.9 and openmpi using intel compiler" -->
<!-- id="CAAbhqc7SBwF9wU9xAEaP=nf36PDb2xZB5uGx6ckmAk2WG0gYOg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="53C104D3.4050809_at_inria.fr" -->
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
<strong>From:</strong> Nick Papior Andersen (<em>nickpapior_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-13 16:45:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2014/08/1048.php">Andrej Prsa: "[hwloc-users] hwloc error"</a>
<li><strong>Previous message:</strong> <a href="1046.php">Brice Goglin: "Re: [hwloc-users] hwloc 1.9 and openmpi using intel compiler"</a>
<li><strong>In reply to:</strong> <a href="1046.php">Brice Goglin: "Re: [hwloc-users] hwloc 1.9 and openmpi using intel compiler"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Great, I just tested it and it passed all tests on my pc. :)
<br>
Thanks, I will await a new release.
<br>
<p><p>2014-07-12 9:50 GMT+00:00 Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt;  This commit should fix it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/open-mpi/hwloc/commit/f46c983df58a41ec8f994f30f57154bd78392de8.patch">https://github.com/open-mpi/hwloc/commit/f46c983df58a41ec8f994f30f57154bd78392de8.patch</a>
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Le 09/07/2014 23:42, Nick Papior Andersen a &#195;&#169;crit :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dear Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2014-07-09 21:34 GMT+00:00 Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Le 09/07/2014 23:30, Nick Papior Andersen a &#195;&#169;crit :
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Dear Brice
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Here are my findings (apologies for not doing make check on
</span><br>
<span class="quotelev2">&gt;&gt; before-hand!)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2014-07-09 20:42 GMT+00:00 Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt;:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Hello,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; A quick look in Open MPI source code seems to say that it's manipulating
</span><br>
<span class="quotelev3">&gt;&gt;&gt; XML topologies in these lines.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Please go into your hwloc-1.9 build directory, and run &quot;tests/xmlbuffer&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (you will may have to build it with run &quot;make xmlbuffer -C tests&quot;).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This errors out with a segmentation fault. I tried recompiling with -g
</span><br>
<span class="quotelev2">&gt;&gt; -traceback, to no avail, nothing shows up other than:
</span><br>
<span class="quotelev2">&gt;&gt; using default import and export
</span><br>
<span class="quotelev2">&gt;&gt; exported to buffer 0x1240c40 length 40817
</span><br>
<span class="quotelev2">&gt;&gt; Segmentation fault
</span><br>
<span class="quotelev2">&gt;&gt; which is right before the &quot;re-exported&quot; statement. ulimit is not
</span><br>
<span class="quotelev2">&gt;&gt; ridiculously low.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Can you run it under gdb?
</span><br>
<span class="quotelev2">&gt;&gt; libtool --mode=execute gdb tests/xmlbuffer
</span><br>
<span class="quotelev2">&gt;&gt; $ r
</span><br>
<span class="quotelev2">&gt;&gt; $ bt full
</span><br>
<span class="quotelev2">&gt;&gt; &lt;send this output&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Also, can you try setting HWLOC_NO_LIBXML_IMPORT=1 and/or
</span><br>
<span class="quotelev2">&gt;&gt; HWLOC_NO_LIBXML_EXPORT=1 in the environment to see if the problem comes
</span><br>
<span class="quotelev2">&gt;&gt; from XML import or export?
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; Brice
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;  Kind regards Nick
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Kind regards Nick
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-1047/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2014/08/1048.php">Andrej Prsa: "[hwloc-users] hwloc error"</a>
<li><strong>Previous message:</strong> <a href="1046.php">Brice Goglin: "Re: [hwloc-users] hwloc 1.9 and openmpi using intel compiler"</a>
<li><strong>In reply to:</strong> <a href="1046.php">Brice Goglin: "Re: [hwloc-users] hwloc 1.9 and openmpi using intel compiler"</a>
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
