<?
$subject_val = "Re: [OMPI devel] a bogus warning: undefined symbols not allowed in x86_64-pc-cygwin shared libraries";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul  9 08:01:51 2013" -->
<!-- isoreceived="20130709120151" -->
<!-- sent="Tue, 9 Jul 2013 14:01:47 +0200" -->
<!-- isosent="20130709120147" -->
<!-- name="Vasiliy" -->
<!-- email="testtest_2005_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] a bogus warning: undefined symbols not allowed in x86_64-pc-cygwin shared libraries" -->
<!-- id="CAHYyVz7DkQHMii+Qt9-w080noduMQjnAMXFDckFju8O1n6Bv6A_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="51DB0F71.8050900_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] a bogus warning: undefined symbols not allowed in x86_64-pc-cygwin shared libraries<br>
<strong>From:</strong> Vasiliy (<em>testtest_2005_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-09 08:01:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12567.php">Joshua Ladd: "Re: [OMPI devel] a bogus warning: undefined symbols not allowed in x86_64-pc-cygwin shared libraries"</a>
<li><strong>Previous message:</strong> <a href="12565.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] a bogus warning: undefined symbols not allowed in x86_64-pc-cygwin shared libraries"</a>
<li><strong>In reply to:</strong> <a href="12548.php">marco atzeri: "Re: [OMPI devel] a bogus warning: undefined symbols not allowed in x86_64-pc-cygwin shared libraries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12569.php">marco atzeri: "Re: [OMPI devel] a bogus warning: undefined symbols not allowed in x86_64-pc-cygwin shared libraries"</a>
<li><strong>Reply:</strong> <a href="12569.php">marco atzeri: "Re: [OMPI devel] a bogus warning: undefined symbols not allowed in x86_64-pc-cygwin shared libraries"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, Marco,
<br>
<p>It is a looong string of characters, times as yours, and I'm actually
<br>
making a DSO build with everything included. Yes, it is the
<br>
bleeding-edge, however, patched Open MPI version 1.9a1 sources, on
<br>
Cygwin 64-bit version 1.7.21-6.
<br>
<p>I have updated dozens of Cygwin packages to their 'bleeding-edge'
<br>
revisions, and successfully tested and compiled many of those,
<br>
flexible enough, further with -Ofast and &quot;plus&quot; optimization for my
<br>
projects. This has resulted in a tremendous speed increase, full
<br>
multithreading, and hot deliverables due to faster execution time.
<br>
<p>While I don't represent any organization view it's still an amateur
<br>
work done to the detriment of time for job hunting. I probably need to
<br>
pay more attention to the latter, so, to find out if I could complete
<br>
a DSO build before the hunting season starts. There is a well-funded
<br>
hope, though.
<br>
<p>Regards,
<br>
Vasiliy
<br>
<p>On Mon, Jul 8, 2013 at 9:13 PM, marco atzeri wrote:
<br>
<span class="quotelev1">&gt; Hi Vasiliy
</span><br>
<span class="quotelev1">&gt; how do you called configure ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have not tested 1.9 on cygwin 64, but
</span><br>
<span class="quotelev1">&gt; 1.7.1 cygwin64 package was built with
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; configure \
</span><br>
<span class="quotelev1">&gt;                 LDFLAGS=&quot;-Wl,--export-all-symbols -Wl,-no-undefined&quot;  \
</span><br>
<span class="quotelev1">&gt;                 --disable-mca-dso \
</span><br>
<span class="quotelev1">&gt;                 --disable-sysv-shmem \
</span><br>
<span class="quotelev1">&gt;                 --without-udapl \
</span><br>
<span class="quotelev1">&gt;                 --enable-cxx-exceptions \
</span><br>
<span class="quotelev1">&gt;                 --with-threads=posix \
</span><br>
<span class="quotelev1">&gt;                 --without-cs-fs \
</span><br>
<span class="quotelev1">&gt;                 --enable-heterogeneous \
</span><br>
<span class="quotelev1">&gt;                 --with-mpi-param_check=always \
</span><br>
<span class="quotelev1">&gt;                 --enable-contrib-no-build=vt,libompitrace \
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --enable-mca-no-build=paffinity,installdirs-windows,timer-windows,shmem-sysv
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt; Marco
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12567.php">Joshua Ladd: "Re: [OMPI devel] a bogus warning: undefined symbols not allowed in x86_64-pc-cygwin shared libraries"</a>
<li><strong>Previous message:</strong> <a href="12565.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] a bogus warning: undefined symbols not allowed in x86_64-pc-cygwin shared libraries"</a>
<li><strong>In reply to:</strong> <a href="12548.php">marco atzeri: "Re: [OMPI devel] a bogus warning: undefined symbols not allowed in x86_64-pc-cygwin shared libraries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12569.php">marco atzeri: "Re: [OMPI devel] a bogus warning: undefined symbols not allowed in x86_64-pc-cygwin shared libraries"</a>
<li><strong>Reply:</strong> <a href="12569.php">marco atzeri: "Re: [OMPI devel] a bogus warning: undefined symbols not allowed in x86_64-pc-cygwin shared libraries"</a>
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
