<?
$subject_val = "Re: [OMPI devel] devel Digest, Vol 1080, Issue 3";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  9 17:49:59 2008" -->
<!-- isoreceived="20080609214959" -->
<!-- sent="Mon, 9 Jun 2008 17:49:44 -0400" -->
<!-- isosent="20080609214944" -->
<!-- name="Joseph Bane" -->
<!-- email="havocjoseph_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] devel Digest, Vol 1080, Issue 3" -->
<!-- id="9ca4a4f10806091449u47f87abah7bf1686f7c2ed58f_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="mailman.5875.1212614158.5420.devel_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] devel Digest, Vol 1080, Issue 3<br>
<strong>From:</strong> Joseph Bane (<em>havocjoseph_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-09 17:49:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4114.php">Brian Barrett: "[OMPI devel] Memory hooks change testing"</a>
<li><strong>Previous message:</strong> <a href="4112.php">Ralph H Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r18625"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi again.
<br>
Sorry for the late response - I was on vacation.
<br>
<p>The signature for the PVFS_sys_create function has indeed changed as of
<br>
version 2.7.0.
<br>
<p>As far as I can tell, this is a minor change.
<br>
<p>Cheers!
<br>
~Joe
<br>
<p><p><p><span class="quotelev1">&gt; ---------- Forwarded message ----------
</span><br>
<span class="quotelev1">&gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date: Wed, 4 Jun 2008 14:58:25 -0400
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] openmpi-1.2.6 and pvfs-2.7.0+ Support
</span><br>
<p><p><span class="quotelev1">&gt; Just to clarify -- are you saying that the function signature for
</span><br>
<span class="quotelev1">&gt; PVFS_sys_create() has changed over time and that in some versions it takes 6
</span><br>
<span class="quotelev1">&gt; parameters, and in other versions it takes 7 parameters?  (I know nothing
</span><br>
<span class="quotelev1">&gt; about PVFS)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 30, 2008, at 6:07 PM, Joseph Bane wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Hi all.
</span><br>
<span class="quotelev2">&gt;&gt; I found a small issue compiling openmpi-1.2.6 with pvfs-2.7.0 support.
</span><br>
<span class="quotelev2">&gt;&gt; There is a new layout attribute for &quot;PVFS_sys_create&quot; calls and simply
</span><br>
<span class="quotelev2">&gt;&gt; passing a NULL in place of it for the &quot;fake_an_open&quot; function
</span><br>
<span class="quotelev2">&gt;&gt; (io_romio_ad_pvfs2_open.c) takes care of the issue. I found this solution
</span><br>
<span class="quotelev2">&gt;&gt; looking at MPICH2 source awhile ago, btw.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; For instance, after configuring openmpi with pvfs2 support (configure
</span><br>
<span class="quotelev2">&gt;&gt; --prefix=/usr/local
</span><br>
<span class="quotelev2">&gt;&gt; --with-io-romio-flags=&quot;--with-file-system=pvfs2+ufs+nfs&quot;) and then running
</span><br>
<span class="quotelev2">&gt;&gt; &quot;make all&quot;, the following errors appear:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; libtool: compile:  gcc -DHAVE_CONFIG_H -I. -I../../adio/include
</span><br>
<span class="quotelev2">&gt;&gt; -DOMPI_BUILDING=1
</span><br>
<span class="quotelev2">&gt;&gt; -I/usr/src/openmpi-1.2.6/ompi/mca/io/romio/romio/../../../../..
</span><br>
<span class="quotelev2">&gt;&gt; -I/usr/src/openmpi-1.2.6/ompi/mca/io/romio/romio/../../../../../opal/include
</span><br>
<span class="quotelev2">&gt;&gt; -I../../../../../../../opal/include -I../../../../../../../ompi/include
</span><br>
<span class="quotelev2">&gt;&gt; -I/usr/src/openmpi-1.2.6/ompi/mca/io/romio/romio/include
</span><br>
<span class="quotelev2">&gt;&gt; -I/usr/src/openmpi-1.2.6/ompi/mca/io/romio/romio/adio/include -O3 -DNDEBUG
</span><br>
<span class="quotelev2">&gt;&gt; -finline-functions -fno-strict-aliasing -pthread -O3 -DNDEBUG
</span><br>
<span class="quotelev2">&gt;&gt; -finline-functions -fno-strict-aliasing -pthread -D_LARGEFILE64_SOURCE
</span><br>
<span class="quotelev2">&gt;&gt; -D_FILE_OFFSET_BITS=64 -DHAVE_ROMIOCONF_H -DHAVE_ROMIOCONF_H -I../../include
</span><br>
<span class="quotelev2">&gt;&gt; -MT io_romio_ad_pvfs2_open.lo -MD -MP -MF .deps/io_romio_ad_pvfs2_open.Tpo
</span><br>
<span class="quotelev2">&gt;&gt; -c io_romio_ad_pvfs2_open.c  -fPIC -DPIC -o .libs/io_romio_ad_pvfs2_open.o
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; io_romio_ad_pvfs2_open.c: In function 'fake_an_open':
</span><br>
<span class="quotelev2">&gt;&gt; io_romio_ad_pvfs2_open.c:86: warning: passing argument 6 of
</span><br>
<span class="quotelev2">&gt;&gt; 'PVFS_sys_create' from incompatible pointer type
</span><br>
<span class="quotelev2">&gt;&gt; io_romio_ad_pvfs2_open.c:86: error: too few arguments to function
</span><br>
<span class="quotelev2">&gt;&gt; 'PVFS_sys_create'
</span><br>
<span class="quotelev2">&gt;&gt; make[5]: *** [io_romio_ad_pvfs2_open.lo] Error 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Also, here is the new function prototype for pvfs-2.7.0+ for reference:
</span><br>
<span class="quotelev2">&gt;&gt;    PVFS_error PVFS_sys_create(
</span><br>
<span class="quotelev2">&gt;&gt;        char *object_name,
</span><br>
<span class="quotelev2">&gt;&gt;        PVFS_object_ref parent_ref,
</span><br>
<span class="quotelev2">&gt;&gt;        PVFS_sys_attr attr,
</span><br>
<span class="quotelev2">&gt;&gt;        const PVFS_credentials *credentials,
</span><br>
<span class="quotelev2">&gt;&gt;        PVFS_sys_dist *dist,
</span><br>
<span class="quotelev2">&gt;&gt;        PVFS_sys_layout *layout,
</span><br>
<span class="quotelev2">&gt;&gt;        PVFS_sysresp_create *resp);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So, long story short, I've attached a small patch file to this email.
</span><br>
<span class="quotelev2">&gt;&gt; If I should have echoed the text to the body of this email directly, I
</span><br>
<span class="quotelev2">&gt;&gt; apologize in advance.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers!
</span><br>
<span class="quotelev2">&gt;&gt; Sincerely,
</span><br>
<span class="quotelev2">&gt;&gt; Joe
</span><br>
<span class="quotelev2">&gt;&gt; &lt;<a href="http://www.clusters.umaine.edu/">http://www.clusters.umaine.edu/</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-4113/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4114.php">Brian Barrett: "[OMPI devel] Memory hooks change testing"</a>
<li><strong>Previous message:</strong> <a href="4112.php">Ralph H Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r18625"</a>
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
