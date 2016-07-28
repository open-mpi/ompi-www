<?
$subject_val = "Re: [OMPI users] libtool *.la files with references to install dir";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  6 21:29:56 2013" -->
<!-- isoreceived="20130507012956" -->
<!-- sent="Tue, 7 May 2013 01:29:50 +0000" -->
<!-- isosent="20130507012950" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] libtool *.la files with references to install dir" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F609EEF_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20130503141903.GL7147_at_woyzeck" -->
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
<strong>Subject:</strong> Re: [OMPI users] libtool *.la files with references to install dir<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-06 21:29:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21856.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Help diagnosing problem: not being able to run MPI	code across computers"</a>
<li><strong>Previous message:</strong> <a href="21854.php">Ralph Castain: "Re: [OMPI users] Help diagnosing problem: not being able to run MPI code across computers"</a>
<li><strong>In reply to:</strong> <a href="21850.php">Stefan Friedel: "[OMPI users] libtool *.la files with references to install dir"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 3, 2013, at 10:19 AM, Stefan Friedel &lt;stefan.friedel_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; dependency_libs=' -L/root/openmpi-1.6.4/opal/mca/hwloc/hwloc132/hwloc/src  -ldl -lrt -lnsl -lutil -lm'
</span><br>
<p>Yow; it looks like .la's are picking up an internal intermediate library path.  Hmm.  I wonder how that's happening...
<br>
<p>[...time passes...]
<br>
<p>Ok, I see the issue.  It looks like a minor bug in the hwloc distribution itself (hwloc is a software package that OMPI wholly embeds).  I've committed a fix in OMPI, hwloc, and have queued up the change to be in the next releases of Open MPI.  Thanks for bringing it to our attention!
<br>
<p>As a workaround, you can simply remove this -L from the .la files.
<br>
<p>I am somewhat amused to note that this has been OMPI's behavior for quite some time -- you're the first to notice it!
<br>
<p><span class="quotelev1">&gt; # are the *.la files necessary at all?
</span><br>
<span class="quotelev1">&gt; (probably the answer is no: we tested this by deleting all *.la files in
</span><br>
<span class="quotelev1">&gt; /usr/opt/openmpi-1.6.4  and it helped: application is compiling+running)
</span><br>
<p>Yes; they're really only an aid for projects that build with Libtool.  But the libtool that installs these files automatically, anyway; I don't know of an easy way to *not* install these .la files.
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
<li><strong>Next message:</strong> <a href="21856.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Help diagnosing problem: not being able to run MPI	code across computers"</a>
<li><strong>Previous message:</strong> <a href="21854.php">Ralph Castain: "Re: [OMPI users] Help diagnosing problem: not being able to run MPI code across computers"</a>
<li><strong>In reply to:</strong> <a href="21850.php">Stefan Friedel: "[OMPI users] libtool *.la files with references to install dir"</a>
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
