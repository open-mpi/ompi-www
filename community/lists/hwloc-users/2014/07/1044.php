<?
$subject_val = "Re: [hwloc-users] hwloc 1.9 and openmpi using intel compiler";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  9 17:43:11 2014" -->
<!-- isoreceived="20140709214311" -->
<!-- sent="Wed, 9 Jul 2014 21:42:51 +0000" -->
<!-- isosent="20140709214251" -->
<!-- name="Nick Papior Andersen" -->
<!-- email="nickpapior_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] hwloc 1.9 and openmpi using intel compiler" -->
<!-- id="CAAbhqc6KMoaiV2MUecx7kR5nRC=XFi52gBBMeQgRRt4FJVmh5w_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="53BDB56C.2080800_at_inria.fr" -->
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
<strong>Date:</strong> 2014-07-09 17:42:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1045.php">Brice Goglin: "Re: [hwloc-users] hwloc 1.9 and openmpi using intel compiler"</a>
<li><strong>Previous message:</strong> <a href="1043.php">Brice Goglin: "Re: [hwloc-users] hwloc 1.9 and openmpi using intel compiler"</a>
<li><strong>In reply to:</strong> <a href="1043.php">Brice Goglin: "Re: [hwloc-users] hwloc 1.9 and openmpi using intel compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1045.php">Brice Goglin: "Re: [hwloc-users] hwloc 1.9 and openmpi using intel compiler"</a>
<li><strong>Reply:</strong> <a href="1045.php">Brice Goglin: "Re: [hwloc-users] hwloc 1.9 and openmpi using intel compiler"</a>
<li><strong>Reply:</strong> <a href="1046.php">Brice Goglin: "Re: [hwloc-users] hwloc 1.9 and openmpi using intel compiler"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Brice
<br>
<p><p>2014-07-09 21:34 GMT+00:00 Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt;  Le 09/07/2014 23:30, Nick Papior Andersen a &#195;&#169;crit :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Dear Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Here are my findings (apologies for not doing make check on before-hand!)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2014-07-09 20:42 GMT+00:00 Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; A quick look in Open MPI source code seems to say that it's manipulating
</span><br>
<span class="quotelev2">&gt;&gt; XML topologies in these lines.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Please go into your hwloc-1.9 build directory, and run &quot;tests/xmlbuffer&quot;
</span><br>
<span class="quotelev2">&gt;&gt; (you will may have to build it with run &quot;make xmlbuffer -C tests&quot;).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; This errors out with a segmentation fault. I tried recompiling with -g
</span><br>
<span class="quotelev1">&gt; -traceback, to no avail, nothing shows up other than:
</span><br>
<span class="quotelev1">&gt; using default import and export
</span><br>
<span class="quotelev1">&gt; exported to buffer 0x1240c40 length 40817
</span><br>
<span class="quotelev1">&gt; Segmentation fault
</span><br>
<span class="quotelev1">&gt; which is right before the &quot;re-exported&quot; statement. ulimit is not
</span><br>
<span class="quotelev1">&gt; ridiculously low.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you run it under gdb?
</span><br>
<span class="quotelev1">&gt; libtool --mode=execute gdb tests/xmlbuffer
</span><br>
<span class="quotelev1">&gt; $ r
</span><br>
<span class="quotelev1">&gt; $ bt full
</span><br>
<span class="quotelev1">&gt; &lt;send this output&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
&nbsp;(gdb) r
<br>
Starting program:
<br>
/home/nick/phd/code/install/.compile/hwloc-1.9/tests/.libs/lt-xmlbuffer
<br>
using default import and export
<br>
exported to buffer 0x6b6c50 length 40817
<br>
<p>Program received signal SIGSEGV, Segmentation fault.
<br>
0x00000000004017fb in one_test () at xmlbuffer.c:51
<br>
51 if (strcmp(hwloc_obj_get_info_by_name(hwloc_get_root_obj(topology),
<br>
&quot;UglyString&quot;), s))
<br>
(gdb) bt full
<br>
#0 0x00000000004017fb in one_test () at xmlbuffer.c:51
<br>
topology = 0x615dc0
<br>
size1 = 40817
<br>
size2 = 45
<br>
buf1 = 0x6b6c50 &quot;&lt;?xml version=\&quot;1.0\&quot; encoding=\&quot;UTF-8\&quot;?&gt;\n&lt;!DOCTYPE
<br>
topology SYSTEM \&quot;hwloc.dtd\&quot;&gt;\n&lt;topology&gt;\n &lt;object type=\&quot;Machine\&quot;
<br>
os_index=\&quot;0\&quot; cpuset=\&quot;0x00ffffff\&quot; complete_cpuset=\&quot;0x00ffffff\&quot;
<br>
online_cpuset=\&quot;0x00fffff&quot;...
<br>
buf2 = 0x180 &lt;Address 0x180 out of bounds&gt;
<br>
err = 0
<br>
s = &quot; \t\n \r&quot;, ' ' &lt;repeats 19 times&gt;,
<br>
&quot;!\&quot;#$%&amp;'()*+,-./0123456789:;&lt;=&gt;?@ABCDEFGHIJKLMNOPQRSTUVWXYZ[\\]^_`abcdefghijklmnopqrstuvwxyz{|}~
<br>
&quot;
<br>
t = &quot;x\001\002\003\004\005\006\ay&quot;
<br>
#1 0x0000000000401495 in main () at xmlbuffer.c:83
<br>
No locals.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also, can you try setting HWLOC_NO_LIBXML_IMPORT=1 and/or
</span><br>
<span class="quotelev1">&gt; HWLOC_NO_LIBXML_EXPORT=1 in the environment to see if the problem comes
</span><br>
<span class="quotelev1">&gt; from XML import or export?
</span><br>
<span class="quotelev1">&gt;
</span><br>
You mean:
<br>
HWLOC_NO_LIBXML_EXPORT=1 ./xmlbuffer
<br>
HWLOC_NO_LIBXML_IMPORT=1 ./xmlbuffer
<br>
HWLOC_NO_LIBXML_IMPORT=1 HWLOC_NO_LIBXML_EXPORT=1 ./xmlbuffer
<br>
It does exactly the same thing, Segmentation fault.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Brice
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-1044/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1045.php">Brice Goglin: "Re: [hwloc-users] hwloc 1.9 and openmpi using intel compiler"</a>
<li><strong>Previous message:</strong> <a href="1043.php">Brice Goglin: "Re: [hwloc-users] hwloc 1.9 and openmpi using intel compiler"</a>
<li><strong>In reply to:</strong> <a href="1043.php">Brice Goglin: "Re: [hwloc-users] hwloc 1.9 and openmpi using intel compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1045.php">Brice Goglin: "Re: [hwloc-users] hwloc 1.9 and openmpi using intel compiler"</a>
<li><strong>Reply:</strong> <a href="1045.php">Brice Goglin: "Re: [hwloc-users] hwloc 1.9 and openmpi using intel compiler"</a>
<li><strong>Reply:</strong> <a href="1046.php">Brice Goglin: "Re: [hwloc-users] hwloc 1.9 and openmpi using intel compiler"</a>
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
