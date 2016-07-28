<?
$subject_val = "Re: [OMPI devel] Problem of running 'mpirun' on a cross-compiled openmpi-1.6.5 for armv7";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 11 08:44:11 2014" -->
<!-- isoreceived="20140411124411" -->
<!-- sent="Fri, 11 Apr 2014 12:44:09 +0000" -->
<!-- isosent="20140411124409" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Problem of running 'mpirun' on a cross-compiled openmpi-1.6.5 for armv7" -->
<!-- id="6D9BD12D-3F11-4996-AB11-279C32FEAA4C_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAHT6FhMqGZVYiysSWv5ii8539Rvf2f498wPDZtOZyCABr7hiCQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Problem of running 'mpirun' on a cross-compiled openmpi-1.6.5 for armv7<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-11 08:44:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14492.php">Tim Mattox: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r31369 - trunk/ompi/include"</a>
<li><strong>Previous message:</strong> <a href="14490.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Face-to-face OMPI dev meeting: doodle"</a>
<li><strong>In reply to:</strong> <a href="14478.php">Allan Wu: "Re: [OMPI devel] Problem of running 'mpirun' on a cross-compiled openmpi-1.6.5 for armv7"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 8, 2014, at 6:58 PM, Allan Wu &lt;allwu_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; applications. For future references, here is the configuration script I used:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./configure --build=arm-linux-gnueabi --host=armv7-linux-gnueabi  \
</span><br>
<span class="quotelev1">&gt; --disable-mpi-fortran \
</span><br>
<span class="quotelev1">&gt; --disable-mpi-cxx \
</span><br>
<span class="quotelev1">&gt; --prefix=`pwd`/install \
</span><br>
<span class="quotelev1">&gt; --enable-static \
</span><br>
<span class="quotelev1">&gt; --disable-dlopen
</span><br>
<p>This is probably a good setup for ARM/embedded installs.  If you want to reduce the footprint even further, you might also want to add --disable-vt --disable-oshmem.  This disables the optional VampirTrace tool installation and the optional OpenSHMEM layer installation.  Neither of these affect the memory/resource footprint of running MPI jobs -- they just reduce the amount of stuff that is built/installed.
<br>
<p><span class="quotelev1">&gt; As I mentioned in my original post, I disabled the shmem components because I suspected the problem could be related to them. I thought since I do not need them I can just disable them to see if that helps. I guess the previous problem is more related to the specific ARM device than the shared memory support. 
</span><br>
<p>Probably so.  There was much ARM work done after the v1.6 series.
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
<li><strong>Next message:</strong> <a href="14492.php">Tim Mattox: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r31369 - trunk/ompi/include"</a>
<li><strong>Previous message:</strong> <a href="14490.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Face-to-face OMPI dev meeting: doodle"</a>
<li><strong>In reply to:</strong> <a href="14478.php">Allan Wu: "Re: [OMPI devel] Problem of running 'mpirun' on a cross-compiled openmpi-1.6.5 for armv7"</a>
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
