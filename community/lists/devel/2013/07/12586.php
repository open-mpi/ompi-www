<?
$subject_val = "Re: [OMPI devel] Fwd: basename: a faulty warning 'extra operand --test-name' in tests causes test-driver to fail";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 11 08:36:18 2013" -->
<!-- isoreceived="20130711123618" -->
<!-- sent="Thu, 11 Jul 2013 14:36:13 +0200" -->
<!-- isosent="20130711123613" -->
<!-- name="Vasiliy" -->
<!-- email="testtest_2005_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fwd: basename: a faulty warning 'extra operand --test-name' in tests causes test-driver to fail" -->
<!-- id="CAHYyVz6GVBXt+cZaSkqEEDtfiR7zq47rGKdCs6e-9WvfaH3Wzg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="51DE9C5F.4020407_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Fwd: basename: a faulty warning 'extra operand --test-name' in tests causes test-driver to fail<br>
<strong>From:</strong> Vasiliy (<em>testtest_2005_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-11 08:36:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12587.php">Ralph Castain: "[OMPI devel] RFC: remove opal_trace macro"</a>
<li><strong>Previous message:</strong> <a href="12585.php">marco atzeri: "Re: [OMPI devel] Fwd: basename: a faulty warning 'extra operand --test-name' in tests causes test-driver to fail"</a>
<li><strong>In reply to:</strong> <a href="12585.php">marco atzeri: "Re: [OMPI devel] Fwd: basename: a faulty warning 'extra operand --test-name' in tests causes test-driver to fail"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12589.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] basename: a faulty warning 'extra operand --test-name' in tests causes test-driver to fail"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
no, it's not about automake 1.9, it's about automake 1.13-1.14, and I
<br>
have the latest 'config.guess', 'config.sub' and all the autotools
<br>
assembled from their sources, which do recognize Cygwin 64-bit
<br>
<p>config.sub: timestamp='2013-04-24'
<br>
config.guess: timestamp='2013-06-10'
<br>
<p>On Thu, Jul 11, 2013 at 1:51 PM, marco atzeri &lt;marco.atzeri_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Il 7/11/2013 1:47 PM, Vasiliy ha scritto:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I've also tracked down that problem with 'test-driver'. Look at that:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ gdb --args /usr/bin/sh /usr/share/automake-1.14/test-driver
</span><br>
<span class="quotelev2">&gt;&gt; GNU gdb (GDB) 7.6.50.20130320-cvs
</span><br>
<span class="quotelev2">&gt;&gt; Copyright (C) 2013 Free Software Foundation, Inc.
</span><br>
<span class="quotelev2">&gt;&gt; License GPLv3+: GNU GPL version 3 or later
</span><br>
<span class="quotelev2">&gt;&gt; &lt;<a href="http://gnu.org/licenses/gpl.html">http://gnu.org/licenses/gpl.html</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is free software: you are free to change and redistribute it.
</span><br>
<span class="quotelev2">&gt;&gt; There is NO WARRANTY, to the extent permitted by law.  Type &quot;show copying&quot;
</span><br>
<span class="quotelev2">&gt;&gt; and &quot;show warranty&quot; for details.
</span><br>
<span class="quotelev2">&gt;&gt; This GDB was configured as &quot;x86_64-unknown-cygwin&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; For bug reporting instructions, please see:
</span><br>
<span class="quotelev2">&gt;&gt; &lt;<a href="http://www.gnu.org/software/gdb/bugs/">http://www.gnu.org/software/gdb/bugs/</a>&gt;...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://cygwin.com/ml/cygwin-apps/2013-07/msg00102.html">http://cygwin.com/ml/cygwin-apps/2013-07/msg00102.html</a>
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
<li><strong>Next message:</strong> <a href="12587.php">Ralph Castain: "[OMPI devel] RFC: remove opal_trace macro"</a>
<li><strong>Previous message:</strong> <a href="12585.php">marco atzeri: "Re: [OMPI devel] Fwd: basename: a faulty warning 'extra operand --test-name' in tests causes test-driver to fail"</a>
<li><strong>In reply to:</strong> <a href="12585.php">marco atzeri: "Re: [OMPI devel] Fwd: basename: a faulty warning 'extra operand --test-name' in tests causes test-driver to fail"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12589.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] basename: a faulty warning 'extra operand --test-name' in tests causes test-driver to fail"</a>
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
