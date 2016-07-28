<?
$subject_val = "Re: [OMPI devel] make install (libtool) failure on Solaris 10 (1.5rc5 and 1.4.3rc1)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 26 01:29:23 2010" -->
<!-- isoreceived="20100826052923" -->
<!-- sent="Thu, 26 Aug 2010 07:29:17 +0200" -->
<!-- isosent="20100826052917" -->
<!-- name="Ralf Wildenhues" -->
<!-- email="Ralf.Wildenhues_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] make install (libtool) failure on Solaris 10 (1.5rc5 and 1.4.3rc1)" -->
<!-- id="20100826052917.GB7177_at_gmx.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4C75E173.2030901_at_lbl.gov" -->
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
<strong>From:</strong> Ralf Wildenhues (<em>Ralf.Wildenhues_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-26 01:29:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8374.php">ananda.mudar_at_[hidden]: "[OMPI devel] Question on the members of ompi_crcp_bkmrk_pml_drain_message_ref_t and ompi_crcp_bkmrk_pml_traffic_message_ref_t"</a>
<li><strong>Previous message:</strong> <a href="8372.php">Ralf Wildenhues: "Re: [OMPI devel] &quot;make check&quot; (libtool?) failure on Solaris/SPARC (1.5rc5 and 1.4.3rc1)"</a>
<li><strong>In reply to:</strong> <a href="8370.php">Paul H. Hargrove: "[OMPI devel] make install (libtool) failure on Solaris 10 (1.5rc5 and 1.4.3rc1)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8386.php">Ralf Wildenhues: "Re: [OMPI devel] make install (libtool) failure on Solaris 10 (1.5rc5 and 1.4.3rc1)"</a>
<li><strong>Reply:</strong> <a href="8386.php">Ralf Wildenhues: "Re: [OMPI devel] make install (libtool) failure on Solaris 10 (1.5rc5 and 1.4.3rc1)"</a>
<li><strong>Reply:</strong> <a href="8389.php">Paul H. Hargrove: "Re: [OMPI devel] make install (libtool) failure on Solaris 10 (1.5rc5 and 1.4.3rc1)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Paul,
<br>
<p>* Paul H. Hargrove wrote on Thu, Aug 26, 2010 at 05:37:23AM CEST:
<br>
<span class="quotelev1">&gt; This has got to be the stupidest failure I have ever seen!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ make install
</span><br>
<span class="quotelev1">&gt; [...]
</span><br>
<span class="quotelev1">&gt; make[3]: Entering directory
</span><br>
<span class="quotelev1">&gt; `/export/home/phargrov/openmpi-1.5rc5/BLD-gcc-vt/ompi'
</span><br>
<span class="quotelev1">&gt; test -z &quot;/usr/local/pkg/ompi-1.5rc5/lib&quot; || ../../config/install-sh
</span><br>
<span class="quotelev1">&gt; -c -d &quot;/usr/local/pkg/ompi-1.5rc5/lib&quot;
</span><br>
<span class="quotelev1">&gt; /bin/bash ../libtool   --mode=install ../../config/install-sh -c
</span><br>
<span class="quotelev1">&gt; libmpi.la '/usr/local/pkg/ompi-1.5rc5/lib'
</span><br>
<span class="quotelev1">&gt; libtool: install: ../../config/install-sh -c .libs/libmpi.so.0.0.2
</span><br>
<span class="quotelev1">&gt; /usr/local/pkg/ompi-1.5rc5/lib/libmpi.so.0.0.2
</span><br>
<span class="quotelev1">&gt; libtool: install: (cd /usr/local/pkg/ompi-1.5rc5/lib &amp;&amp; { ln -s -f
</span><br>
<span class="quotelev1">&gt; libmpi.so.0.0.2 libmpi.so.0 || { rm -f libmpi.so.0 &amp;&amp; ln -s
</span><br>
<span class="quotelev1">&gt; libmpi.so.0.0.2 libmpi.so.0; }; })
</span><br>
<span class="quotelev1">&gt; Usage: ln [-f] [-s] f1
</span><br>
<span class="quotelev1">&gt;       ln [-f] [-s] f1 f2
</span><br>
<span class="quotelev1">&gt;       ln [-f] [-s] f1 ... fn d1
</span><br>
<span class="quotelev1">&gt; [...]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is due to an incomprehensibly stupid &quot;ln&quot; that cares about the
</span><br>
<span class="quotelev1">&gt; order of the &quot;-s&quot; and &quot;-f&quot; options:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ rm -f b; touch a; ln -f -s a b
</span><br>
<span class="quotelev1">&gt; $ rm -f b; touch a; ln -s -f a b
</span><br>
<span class="quotelev1">&gt; Usage: ln [-f] [-s] f1
</span><br>
<span class="quotelev1">&gt;       ln [-f] [-s] f1 f2
</span><br>
<span class="quotelev1">&gt;       ln [-f] [-s] f1 ... fn d1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ which ln
</span><br>
<span class="quotelev1">&gt; /usr/ucb/ln
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ uname -a
</span><br>
<span class="quotelev1">&gt; SunOS lem.lbl.gov 5.10 s10_69 sun4u sparc SUNW,Ultra-5_10
</span><br>
<p>I'll fix that option order in libtool, but I don't see how it could have
<br>
caused a failed install for you, because we explicitly do
<br>
&nbsp;&nbsp;ln -s -f A B || { rm -f B &amp;&amp; ln -s A B; }
<br>
<p>Please also note that this ln does not do the right thing with -f -s
<br>
when the target file already exists:
<br>
<p>$ /usr/ucb/ln -f -s a b; echo $?
<br>
ln: b: File exists
<br>
1
<br>
<p>Generally, having /usr/ucb early in $PATH on Solaris doesn't seem ideal,
<br>
the Autoconf manual describes several issues with tools in that
<br>
directory.
<br>
<p>Cheers, and thanks for the report,
<br>
Ralf
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8374.php">ananda.mudar_at_[hidden]: "[OMPI devel] Question on the members of ompi_crcp_bkmrk_pml_drain_message_ref_t and ompi_crcp_bkmrk_pml_traffic_message_ref_t"</a>
<li><strong>Previous message:</strong> <a href="8372.php">Ralf Wildenhues: "Re: [OMPI devel] &quot;make check&quot; (libtool?) failure on Solaris/SPARC (1.5rc5 and 1.4.3rc1)"</a>
<li><strong>In reply to:</strong> <a href="8370.php">Paul H. Hargrove: "[OMPI devel] make install (libtool) failure on Solaris 10 (1.5rc5 and 1.4.3rc1)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8386.php">Ralf Wildenhues: "Re: [OMPI devel] make install (libtool) failure on Solaris 10 (1.5rc5 and 1.4.3rc1)"</a>
<li><strong>Reply:</strong> <a href="8386.php">Ralf Wildenhues: "Re: [OMPI devel] make install (libtool) failure on Solaris 10 (1.5rc5 and 1.4.3rc1)"</a>
<li><strong>Reply:</strong> <a href="8389.php">Paul H. Hargrove: "Re: [OMPI devel] make install (libtool) failure on Solaris 10 (1.5rc5 and 1.4.3rc1)"</a>
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
