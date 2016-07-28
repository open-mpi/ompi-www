<?
$subject_val = "Re: [OMPI devel] make install (libtool) failure on Solaris 10 (1.5rc5 and 1.4.3rc1)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 26 14:23:46 2010" -->
<!-- isoreceived="20100826182346" -->
<!-- sent="Thu, 26 Aug 2010 11:23:36 -0700" -->
<!-- isosent="20100826182336" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] make install (libtool) failure on Solaris 10 (1.5rc5 and 1.4.3rc1)" -->
<!-- id="4C76B128.1020903_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20100826052917.GB7177_at_gmx.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] make install (libtool) failure on Solaris 10 (1.5rc5 and 1.4.3rc1)<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-26 14:23:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8390.php">Paul H. Hargrove: "Re: [OMPI devel] make install (libtool) failure on Solaris 10 (1.5rc5 and 1.4.3rc1)"</a>
<li><strong>Previous message:</strong> <a href="8388.php">Paul H. Hargrove: "Re: [OMPI devel] Problem w/ documented SPARC/gcc flags (1.5rc5 and 1.4.3rc1)"</a>
<li><strong>In reply to:</strong> <a href="8373.php">Ralf Wildenhues: "Re: [OMPI devel] make install (libtool) failure on Solaris 10 (1.5rc5 and 1.4.3rc1)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I agree w/ Ralph that
<br>
&nbsp;&nbsp;&nbsp;&nbsp;ln -s -f A B || { rm -f B &amp;&amp; ln -s A B; }
<br>
should have worked despite the error message from the failing &quot;ln -s -f 
<br>
A B&quot;.
<br>
So, I don't think there was a real error here - sorry.
<br>
<p>-Paul
<br>
<p>Ralf Wildenhues wrote:
<br>
<span class="quotelev1">&gt; Hi Paul,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * Paul H. Hargrove wrote on Thu, Aug 26, 2010 at 05:37:23AM CEST:
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; This has got to be the stupidest failure I have ever seen!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ make install
</span><br>
<span class="quotelev2">&gt;&gt; [...]
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: Entering directory
</span><br>
<span class="quotelev2">&gt;&gt; `/export/home/phargrov/openmpi-1.5rc5/BLD-gcc-vt/ompi'
</span><br>
<span class="quotelev2">&gt;&gt; test -z &quot;/usr/local/pkg/ompi-1.5rc5/lib&quot; || ../../config/install-sh
</span><br>
<span class="quotelev2">&gt;&gt; -c -d &quot;/usr/local/pkg/ompi-1.5rc5/lib&quot;
</span><br>
<span class="quotelev2">&gt;&gt; /bin/bash ../libtool   --mode=install ../../config/install-sh -c
</span><br>
<span class="quotelev2">&gt;&gt; libmpi.la '/usr/local/pkg/ompi-1.5rc5/lib'
</span><br>
<span class="quotelev2">&gt;&gt; libtool: install: ../../config/install-sh -c .libs/libmpi.so.0.0.2
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/pkg/ompi-1.5rc5/lib/libmpi.so.0.0.2
</span><br>
<span class="quotelev2">&gt;&gt; libtool: install: (cd /usr/local/pkg/ompi-1.5rc5/lib &amp;&amp; { ln -s -f
</span><br>
<span class="quotelev2">&gt;&gt; libmpi.so.0.0.2 libmpi.so.0 || { rm -f libmpi.so.0 &amp;&amp; ln -s
</span><br>
<span class="quotelev2">&gt;&gt; libmpi.so.0.0.2 libmpi.so.0; }; })
</span><br>
<span class="quotelev2">&gt;&gt; Usage: ln [-f] [-s] f1
</span><br>
<span class="quotelev2">&gt;&gt;       ln [-f] [-s] f1 f2
</span><br>
<span class="quotelev2">&gt;&gt;       ln [-f] [-s] f1 ... fn d1
</span><br>
<span class="quotelev2">&gt;&gt; [...]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is due to an incomprehensibly stupid &quot;ln&quot; that cares about the
</span><br>
<span class="quotelev2">&gt;&gt; order of the &quot;-s&quot; and &quot;-f&quot; options:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ rm -f b; touch a; ln -f -s a b
</span><br>
<span class="quotelev2">&gt;&gt; $ rm -f b; touch a; ln -s -f a b
</span><br>
<span class="quotelev2">&gt;&gt; Usage: ln [-f] [-s] f1
</span><br>
<span class="quotelev2">&gt;&gt;       ln [-f] [-s] f1 f2
</span><br>
<span class="quotelev2">&gt;&gt;       ln [-f] [-s] f1 ... fn d1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ which ln
</span><br>
<span class="quotelev2">&gt;&gt; /usr/ucb/ln
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ uname -a
</span><br>
<span class="quotelev2">&gt;&gt; SunOS lem.lbl.gov 5.10 s10_69 sun4u sparc SUNW,Ultra-5_10
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'll fix that option order in libtool, but I don't see how it could have
</span><br>
<span class="quotelev1">&gt; caused a failed install for you, because we explicitly do
</span><br>
<span class="quotelev1">&gt;   ln -s -f A B || { rm -f B &amp;&amp; ln -s A B; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please also note that this ln does not do the right thing with -f -s
</span><br>
<span class="quotelev1">&gt; when the target file already exists:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ /usr/ucb/ln -f -s a b; echo $?
</span><br>
<span class="quotelev1">&gt; ln: b: File exists
</span><br>
<span class="quotelev1">&gt; 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Generally, having /usr/ucb early in $PATH on Solaris doesn't seem ideal,
</span><br>
<span class="quotelev1">&gt; the Autoconf manual describes several issues with tools in that
</span><br>
<span class="quotelev1">&gt; directory.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers, and thanks for the report,
</span><br>
<span class="quotelev1">&gt; Ralf
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
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
HPC Research Department                   Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8390.php">Paul H. Hargrove: "Re: [OMPI devel] make install (libtool) failure on Solaris 10 (1.5rc5 and 1.4.3rc1)"</a>
<li><strong>Previous message:</strong> <a href="8388.php">Paul H. Hargrove: "Re: [OMPI devel] Problem w/ documented SPARC/gcc flags (1.5rc5 and 1.4.3rc1)"</a>
<li><strong>In reply to:</strong> <a href="8373.php">Ralf Wildenhues: "Re: [OMPI devel] make install (libtool) failure on Solaris 10 (1.5rc5 and 1.4.3rc1)"</a>
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
