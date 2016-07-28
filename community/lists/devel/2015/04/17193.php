<?
$subject_val = "Re: [OMPI devel] 1.8.5rc1 is ready for testing";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  7 16:00:21 2015" -->
<!-- isoreceived="20150407200021" -->
<!-- sent="Tue, 7 Apr 2015 13:00:16 -0700" -->
<!-- isosent="20150407200016" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.8.5rc1 is ready for testing" -->
<!-- id="5BD399F0-BA07-4A6D-8AA3-4C8083FC3B08_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="55243220.4090108_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.8.5rc1 is ready for testing<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-07 16:00:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17194.php">Marco Atzeri: "Re: [OMPI devel] 1.8.5rc1 is ready for testing"</a>
<li><strong>Previous message:</strong> <a href="17192.php">Marco Atzeri: "Re: [OMPI devel] 1.8.5rc1 is ready for testing"</a>
<li><strong>In reply to:</strong> <a href="17192.php">Marco Atzeri: "Re: [OMPI devel] 1.8.5rc1 is ready for testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17194.php">Marco Atzeri: "Re: [OMPI devel] 1.8.5rc1 is ready for testing"</a>
<li><strong>Reply:</strong> <a href="17194.php">Marco Atzeri: "Re: [OMPI devel] 1.8.5rc1 is ready for testing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What version of libtool do you have? We require 2.4.2 - newer versions don&#226;&#128;&#153;t necessarily work, I fear.
<br>
<p><p><span class="quotelev1">&gt; On Apr 7, 2015, at 12:38 PM, Marco Atzeri &lt;marco.atzeri_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 4/5/2015 11:42 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Usual place:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/software/ompi/v1.8/">http://www.open-mpi.org/software/ompi/v1.8/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; building on cygwin64
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Making all in libltdl
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory '/cygdrive/e/cyg_pub/devel/openmpi/openmpi-1.8.5rc1-1.x86_64/build/opal/libltdl'
</span><br>
<span class="quotelev1">&gt; CDPATH=&quot;${ZSH_VERSION+.}:&quot; &amp;&amp; cd /pub/devel/openmpi/openmpi-1.8.5rc1-1.x86_64/src/openmpi-1.8.5rc1/opal/libltdl &amp;&amp; aclocal-1.15 -I ../../config
</span><br>
<span class="quotelev1">&gt; aclocal-1.15: error: ../../config/autogen_found_items.m4:304: file 'opal/mca/backtrace/configure.m4' does not exist
</span><br>
<span class="quotelev1">&gt; Makefile:539: recipe for target '/pub/devel/openmpi/openmpi-1.8.5rc1-1.x86_64/src/openmpi-1.8.5rc1/opal/libltdl/aclocal.m4' failed
</span><br>
<span class="quotelev1">&gt; make[2]: *** [/pub/devel/openmpi/openmpi-1.8.5rc1-1.x86_64/src/openmpi-1.8.5rc1/opal/libltdl/aclocal.m4] Error 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; configuration:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;               --disable-mca-dso \
</span><br>
<span class="quotelev1">&gt;                --disable-sysv-shmem \
</span><br>
<span class="quotelev1">&gt;                --enable-cxx-exceptions \
</span><br>
<span class="quotelev1">&gt;                --with-threads=posix \
</span><br>
<span class="quotelev1">&gt;                --without-cs-fs \
</span><br>
<span class="quotelev1">&gt;                --with-mpi-param_check=always \
</span><br>
<span class="quotelev1">&gt;                --enable-contrib-no-build=vt,libompitrace \
</span><br>
<span class="quotelev1">&gt; --enable-mca-no-build=paffinity,installdirs-windows,timer-windows,shmem-sysv
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/04/17192.php">http://www.open-mpi.org/community/lists/devel/2015/04/17192.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17194.php">Marco Atzeri: "Re: [OMPI devel] 1.8.5rc1 is ready for testing"</a>
<li><strong>Previous message:</strong> <a href="17192.php">Marco Atzeri: "Re: [OMPI devel] 1.8.5rc1 is ready for testing"</a>
<li><strong>In reply to:</strong> <a href="17192.php">Marco Atzeri: "Re: [OMPI devel] 1.8.5rc1 is ready for testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17194.php">Marco Atzeri: "Re: [OMPI devel] 1.8.5rc1 is ready for testing"</a>
<li><strong>Reply:</strong> <a href="17194.php">Marco Atzeri: "Re: [OMPI devel] 1.8.5rc1 is ready for testing"</a>
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
