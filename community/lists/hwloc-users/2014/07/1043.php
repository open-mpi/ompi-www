<?
$subject_val = "Re: [hwloc-users] hwloc 1.9 and openmpi using intel compiler";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  9 17:34:39 2014" -->
<!-- isoreceived="20140709213439" -->
<!-- sent="Wed, 09 Jul 2014 23:34:36 +0200" -->
<!-- isosent="20140709213436" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] hwloc 1.9 and openmpi using intel compiler" -->
<!-- id="53BDB56C.2080800_at_inria.fr" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAbhqc4KPyFpDC13pN2F+rVQJPpQsT8+_VpeBwiCWS8fEmNXsw_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2014-07-09 17:34:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1044.php">Nick Papior Andersen: "Re: [hwloc-users] hwloc 1.9 and openmpi using intel compiler"</a>
<li><strong>Previous message:</strong> <a href="1042.php">Nick Papior Andersen: "Re: [hwloc-users] hwloc 1.9 and openmpi using intel compiler"</a>
<li><strong>In reply to:</strong> <a href="1042.php">Nick Papior Andersen: "Re: [hwloc-users] hwloc 1.9 and openmpi using intel compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1044.php">Nick Papior Andersen: "Re: [hwloc-users] hwloc 1.9 and openmpi using intel compiler"</a>
<li><strong>Reply:</strong> <a href="1044.php">Nick Papior Andersen: "Re: [hwloc-users] hwloc 1.9 and openmpi using intel compiler"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 09/07/2014 23:30, Nick Papior Andersen a &#195;&#169;crit :
<br>
<span class="quotelev1">&gt; Dear Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here are my findings (apologies for not doing make check on before-hand!)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2014-07-09 20:42 GMT+00:00 Brice Goglin &lt;Brice.Goglin_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;mailto:Brice.Goglin_at_[hidden]&gt;&gt;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     A quick look in Open MPI source code seems to say that it's
</span><br>
<span class="quotelev1">&gt;     manipulating XML topologies in these lines.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Please go into your hwloc-1.9 build directory, and run
</span><br>
<span class="quotelev1">&gt;     &quot;tests/xmlbuffer&quot; (you will may have to build it with run &quot;make
</span><br>
<span class="quotelev1">&gt;     xmlbuffer -C tests&quot;).
</span><br>
<span class="quotelev1">&gt;
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
<p>Can you run it under gdb?
<br>
libtool --mode=execute gdb tests/xmlbuffer
<br>
$ r
<br>
$ bt full
<br>
&lt;send this output&gt;
<br>
<p>Also, can you try setting HWLOC_NO_LIBXML_IMPORT=1 and/or
<br>
HWLOC_NO_LIBXML_EXPORT=1 in the environment to see if the problem comes
<br>
from XML import or export?
<br>
<p>Thanks
<br>
Brice
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-1043/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1044.php">Nick Papior Andersen: "Re: [hwloc-users] hwloc 1.9 and openmpi using intel compiler"</a>
<li><strong>Previous message:</strong> <a href="1042.php">Nick Papior Andersen: "Re: [hwloc-users] hwloc 1.9 and openmpi using intel compiler"</a>
<li><strong>In reply to:</strong> <a href="1042.php">Nick Papior Andersen: "Re: [hwloc-users] hwloc 1.9 and openmpi using intel compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1044.php">Nick Papior Andersen: "Re: [hwloc-users] hwloc 1.9 and openmpi using intel compiler"</a>
<li><strong>Reply:</strong> <a href="1044.php">Nick Papior Andersen: "Re: [hwloc-users] hwloc 1.9 and openmpi using intel compiler"</a>
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
