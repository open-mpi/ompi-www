<?
$subject_val = "Re: [OMPI devel] Build failures on trunk? r21235";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 14 14:53:13 2009" -->
<!-- isoreceived="20090514185313" -->
<!-- sent="Thu, 14 May 2009 12:53:03 -0600" -->
<!-- isosent="20090514185303" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Build failures on trunk? r21235" -->
<!-- id="71d2d8cc0905141153x1e724ce3p9de1996028d57931_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4A0C65DE.4090809_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Build failures on trunk? r21235<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-14 14:53:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6041.php">Bryan Lally: "Re: [OMPI devel] Build failures on trunk? r21235"</a>
<li><strong>Previous message:</strong> <a href="6039.php">Bryan Lally: "Re: [OMPI devel] Build failures on trunk? r21235"</a>
<li><strong>In reply to:</strong> <a href="6039.php">Bryan Lally: "Re: [OMPI devel] Build failures on trunk? r21235"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Blast - wish I could remember, but I did see that once before and now can't
<br>
remember the fix. I can build non-tarballs just fine on my Mac, though, so
<br>
it could be a problem with the tarball not picking something up.
<br>
<p><p><p>On Thu, May 14, 2009 at 12:41 PM, Bryan Lally &lt;lally_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Argh.  This time with attachment attached ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Bryan Lally wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; While we're talking about build failures ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I haven't been able to build any of the 1.3.x releases on my OS X
</span><br>
<span class="quotelev2">&gt;&gt; machines.  OS X 10.5.6 (Leopard) on Intel macs.  Attached is the configure
</span><br>
<span class="quotelev2">&gt;&gt; command and the failure from last night's development tarball,
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.3.3a1r21223.tar.gz.  1.2.x builds fine.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    - Bryan
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Bryan Lally, lally_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 505.667.9954
</span><br>
<span class="quotelev1">&gt; CCS-2
</span><br>
<span class="quotelev1">&gt; Los Alamos National Laboratory
</span><br>
<span class="quotelev1">&gt; Los Alamos, New Mexico
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure                                \
</span><br>
<span class="quotelev1">&gt;    --prefix=/usr/local/openmpi-1.3.3x     \
</span><br>
<span class="quotelev1">&gt;    --disable-mpi-f77                      \
</span><br>
<span class="quotelev1">&gt;    --disable-mpi-f90                      \
</span><br>
<span class="quotelev1">&gt;    --disable-mpi-profile
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Making all in tools/orte-iof
</span><br>
<span class="quotelev1">&gt; /bin/sh ../../../libtool --tag=CC   --mode=link gcc  -O3 -DNDEBUG
</span><br>
<span class="quotelev1">&gt; -finline-functions -fno-strict-aliasing  -fvisibility=hidden
</span><br>
<span class="quotelev1">&gt;  -export-dynamic   -o orte-iof orte-iof.o ../../../orte/libopen-rte.la-lutil
</span><br>
<span class="quotelev1">&gt; libtool: link: gcc -O3 -DNDEBUG -finline-functions -fno-strict-aliasing
</span><br>
<span class="quotelev1">&gt; -fvisibility=hidden -o orte-iof orte-iof.o
</span><br>
<span class="quotelev1">&gt;  ../../../orte/.libs/libopen-rte.a
</span><br>
<span class="quotelev1">&gt; /Users/lally/Software/openmpi-1.3.3a1r21223/opal/.libs/libopen-pal.a -lutil
</span><br>
<span class="quotelev1">&gt; Undefined symbols:
</span><br>
<span class="quotelev1">&gt;  &quot;_orte_iof&quot;, referenced from:
</span><br>
<span class="quotelev1">&gt;      _orte_iof$non_lazy_ptr in orte-iof.o
</span><br>
<span class="quotelev1">&gt;  &quot;_orte_routed&quot;, referenced from:
</span><br>
<span class="quotelev1">&gt;      _orte_routed$non_lazy_ptr in libopen-rte.a(hnp_contact.o)
</span><br>
<span class="quotelev1">&gt;      _orte_routed$non_lazy_ptr in libopen-rte.a(rml_base_contact.o)
</span><br>
<span class="quotelev1">&gt; ld: symbol(s) not found
</span><br>
<span class="quotelev1">&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev1">&gt; make[2]: *** [orte-iof] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-6040/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6041.php">Bryan Lally: "Re: [OMPI devel] Build failures on trunk? r21235"</a>
<li><strong>Previous message:</strong> <a href="6039.php">Bryan Lally: "Re: [OMPI devel] Build failures on trunk? r21235"</a>
<li><strong>In reply to:</strong> <a href="6039.php">Bryan Lally: "Re: [OMPI devel] Build failures on trunk? r21235"</a>
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
