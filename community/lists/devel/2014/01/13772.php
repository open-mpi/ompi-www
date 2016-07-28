<?
$subject_val = "Re: [OMPI devel] 1.7.4rc1 install failure: NetBSD-6 amd64";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 14 08:15:14 2014" -->
<!-- isoreceived="20140114131514" -->
<!-- sent="Tue, 14 Jan 2014 13:15:13 +0000" -->
<!-- isosent="20140114131513" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.7.4rc1 install failure: NetBSD-6 amd64" -->
<!-- id="680B8A8D-85CE-47EC-B380-5A6D859AF2D8_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAvDA14vGDmC8ugNbx9=sfMF6X=CxHniGKGu-DdE09+mmiR3aw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.7.4rc1 install failure: NetBSD-6 amd64<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-14 08:15:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13773.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc1 install failure: NetBSD-6 amd64"</a>
<li><strong>Previous message:</strong> <a href="13771.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc1 install failure: NetBSD-6 amd64"</a>
<li><strong>In reply to:</strong> <a href="13770.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc1 install failure: NetBSD-6 amd64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13773.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc1 install failure: NetBSD-6 amd64"</a>
<li><strong>Reply:</strong> <a href="13773.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc1 install failure: NetBSD-6 amd64"</a>
<li><strong>Reply:</strong> <a href="13774.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc1 install failure: NetBSD-6 amd64"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 14, 2014, at 2:44 AM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; The problem surfaces on i386 too, and use of gfortran seems the best fix.
</span><br>
<span class="quotelev1">&gt; My recommended rewrite:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - On NetBSD-6 (at least AMD64 and i386) libtool misidentifies properties of
</span><br>
<span class="quotelev1">&gt;   f95/g95, leading to obscure compile-time failures if used to build Open MPI.
</span><br>
<span class="quotelev1">&gt;   You can work around this issue by either installing gfortran, removing f95
</span><br>
<span class="quotelev1">&gt;   and g95 from your path, or by configuring Open MPI to disable the fortran
</span><br>
<span class="quotelev1">&gt;   bindings.
</span><br>
<p>I tweaked a bit -- how's this:
<br>
<p>- On NetBSD-6 (at least AMD64 and i386), and possibly on OpenBSD,
<br>
&nbsp;&nbsp;libtool misidentifies properties of f95/g95, leading to obscure
<br>
&nbsp;&nbsp;compile-time failures if used to build Open MPI.  You can work
<br>
&nbsp;&nbsp;around this issue by ensuring that libtool will not find f95/g95
<br>
&nbsp;&nbsp;(e.g., by specifying FC=gfortran, or otherwise ensuring gfortran
<br>
&nbsp;&nbsp;will be found earlier in the path than f95/g95), or by configuring
<br>
&nbsp;&nbsp;Open MPI to disable the Fortran MPI bindings.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13773.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc1 install failure: NetBSD-6 amd64"</a>
<li><strong>Previous message:</strong> <a href="13771.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc1 install failure: NetBSD-6 amd64"</a>
<li><strong>In reply to:</strong> <a href="13770.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc1 install failure: NetBSD-6 amd64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13773.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc1 install failure: NetBSD-6 amd64"</a>
<li><strong>Reply:</strong> <a href="13773.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc1 install failure: NetBSD-6 amd64"</a>
<li><strong>Reply:</strong> <a href="13774.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc1 install failure: NetBSD-6 amd64"</a>
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
