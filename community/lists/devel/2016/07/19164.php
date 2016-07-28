<?
$subject_val = "Re: [OMPI devel] [2.0.0rc4] dlopen_test crash with xlc";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul  7 13:48:58 2016" -->
<!-- isoreceived="20160707174858" -->
<!-- sent="Thu, 7 Jul 2016 10:48:55 -0700" -->
<!-- isosent="20160707174855" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [2.0.0rc4] dlopen_test crash with xlc" -->
<!-- id="CAAvDA171Mqqi2FPuBzibgbwg2Rk=zr3tWPcn5wbOj=qnxW_qTg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAANzjEmw1032jzekabyq6XYf1wD21013NExoKMHf1Kggao8GnQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [2.0.0rc4] dlopen_test crash with xlc<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-07-07 13:48:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19165.php">Emani, Murali: "[OMPI devel] Class information in OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="19163.php">Josh Hursey: "Re: [OMPI devel] [2.0.0rc4] dlopen_test crash with xlc"</a>
<li><strong>In reply to:</strong> <a href="19163.php">Josh Hursey: "Re: [OMPI devel] [2.0.0rc4] dlopen_test crash with xlc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19166.php">Josh Hursey: "Re: [OMPI devel] [2.0.0rc4] dlopen_test crash with xlc"</a>
<li><strong>Reply:</strong> <a href="19166.php">Josh Hursey: "Re: [OMPI devel] [2.0.0rc4] dlopen_test crash with xlc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Josh,
<br>
<p>Big-endian Power7:
<br>
<p>$ xlc -qversion
<br>
IBM XL C/C++ for Linux, V13.1
<br>
Version: 13.01.0000.0000
<br>
<p>$ export OBJECT_MODE=64
<br>
<p>$ [...]/configure -prefix=[....] --enable-debug \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CC=xlc  CFLAGS=&quot;-q64&quot;   --with-wrapper-cflags=&quot;-q64&quot;   \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CXX=xlC CXXFLAGS=&quot;-q64&quot; --with-wrapper-cxxflags=&quot;-q64&quot; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FC=xlf  FCFLAGS=&quot;-q64&quot;  --with-wrapper-fcflags=&quot;-q64&quot;  \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--disable-oshmem-fortran --with-hwloc=$HOME/hwloc-1.11.3
<br>
<p><p>Note the --with-hwloc is there because this is the xlc version that was
<br>
crashing building the embedded hwloc.
<br>
Am retesting now without that flag, but don't expect it has any relation to
<br>
the SEGV in the patcher code.
<br>
<p>Little-endian Power8:
<br>
<p>$ xlc -qversion
<br>
IBM XL C/C++ for Linux, V13.1.2 (5725-C73, 5765-J08)
<br>
Version: 13.01.0002.0000
<br>
<p>$ [...]/configure -prefix=[....] --enable-debug \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CC=xlc CXX=xlC FC=xlf --disable-mpi-fortran
<br>
<p><p>There is no xlf installation on this system.
<br>
<p>-Paul
<br>
<p><p>On Thu, Jul 7, 2016 at 8:39 AM, Josh Hursey &lt;jjhursey_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Paul,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What was the configure string you used for this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We have a Jenkins CI mechanism for XL, but it is using XLC 13.1.3 on that
</span><br>
<span class="quotelev1">&gt; system and we haven't been runing 'make check'. I have another system that
</span><br>
<span class="quotelev1">&gt; has XLC 13.1.2 that I can test on as well. I'm not sure if I'll be able to
</span><br>
<span class="quotelev1">&gt; fix without Nathan's help, but I can at least try to reproduce.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Jul 6, 2016 at 4:58 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The issue reported in
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://www.open-mpi.org/community/lists/devel/2016/06/19107.php">https://www.open-mpi.org/community/lists/devel/2016/06/19107.php</a> is
</span><br>
<span class="quotelev2">&gt;&gt; still present on both my little-endian Power8 and big-endian Power7 systems.
</span><br>
<span class="quotelev2">&gt;&gt; I know Nathan had been working on this, but I've lost track of the issue
</span><br>
<span class="quotelev2">&gt;&gt; and/or pr number(s).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Paul
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev2">&gt;&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev2">&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/07/19156.php">http://www.open-mpi.org/community/lists/devel/2016/07/19156.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/07/19163.php">http://www.open-mpi.org/community/lists/devel/2016/07/19163.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-19164/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19165.php">Emani, Murali: "[OMPI devel] Class information in OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="19163.php">Josh Hursey: "Re: [OMPI devel] [2.0.0rc4] dlopen_test crash with xlc"</a>
<li><strong>In reply to:</strong> <a href="19163.php">Josh Hursey: "Re: [OMPI devel] [2.0.0rc4] dlopen_test crash with xlc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19166.php">Josh Hursey: "Re: [OMPI devel] [2.0.0rc4] dlopen_test crash with xlc"</a>
<li><strong>Reply:</strong> <a href="19166.php">Josh Hursey: "Re: [OMPI devel] [2.0.0rc4] dlopen_test crash with xlc"</a>
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
