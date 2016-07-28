<?
$subject_val = "[OMPI devel] openmpi-1.2.6 and pvfs-2.7.0+ Support";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 30 18:07:15 2008" -->
<!-- isoreceived="20080530220715" -->
<!-- sent="Fri, 30 May 2008 18:07:07 -0400" -->
<!-- isosent="20080530220707" -->
<!-- name="Joseph Bane" -->
<!-- email="havocjoseph_at_[hidden]" -->
<!-- subject="[OMPI devel] openmpi-1.2.6 and pvfs-2.7.0+ Support" -->
<!-- id="9ca4a4f10805301507i15722406q85742fd706623689_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] openmpi-1.2.6 and pvfs-2.7.0+ Support<br>
<strong>From:</strong> Joseph Bane (<em>havocjoseph_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-30 18:07:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/06/4072.php">Pavel Shamis (Pasha): "[OMPI devel] r18551 - brakes ob1 compilation on Sles10"</a>
<li><strong>Previous message:</strong> <a href="4070.php">Roland Dreier: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/06/4091.php">Jeff Squyres: "Re: [OMPI devel] openmpi-1.2.6 and pvfs-2.7.0+ Support"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/06/4091.php">Jeff Squyres: "Re: [OMPI devel] openmpi-1.2.6 and pvfs-2.7.0+ Support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all.
<br>
I found a small issue compiling openmpi-1.2.6 with pvfs-2.7.0 support. There
<br>
is a new layout attribute for &quot;PVFS_sys_create&quot; calls and simply passing a
<br>
NULL in place of it for the &quot;fake_an_open&quot; function
<br>
(io_romio_ad_pvfs2_open.c) takes care of the issue. I found this solution
<br>
looking at MPICH2 source awhile ago, btw.
<br>
<p>For instance, after configuring openmpi with pvfs2 support (configure
<br>
--prefix=/usr/local
<br>
--with-io-romio-flags=&quot;--with-file-system=pvfs2+ufs+nfs&quot;) and then running
<br>
&quot;make all&quot;, the following errors appear:
<br>
<p>libtool: compile:  gcc -DHAVE_CONFIG_H -I. -I../../adio/include
<br>
-DOMPI_BUILDING=1
<br>
-I/usr/src/openmpi-1.2.6/ompi/mca/io/romio/romio/../../../../..
<br>
-I/usr/src/openmpi-1.2.6/ompi/mca/io/romio/romio/../../../../../opal/include
<br>
-I../../../../../../../opal/include -I../../../../../../../ompi/include
<br>
-I/usr/src/openmpi-1.2.6/ompi/mca/io/romio/romio/include
<br>
-I/usr/src/openmpi-1.2.6/ompi/mca/io/romio/romio/adio/include -O3 -DNDEBUG
<br>
-finline-functions -fno-strict-aliasing -pthread -O3 -DNDEBUG
<br>
-finline-functions -fno-strict-aliasing -pthread -D_LARGEFILE64_SOURCE
<br>
-D_FILE_OFFSET_BITS=64 -DHAVE_ROMIOCONF_H -DHAVE_ROMIOCONF_H -I../../include
<br>
-MT io_romio_ad_pvfs2_open.lo -MD -MP -MF .deps/io_romio_ad_pvfs2_open.Tpo
<br>
-c io_romio_ad_pvfs2_open.c  -fPIC -DPIC -o .libs/io_romio_ad_pvfs2_open.o
<br>
<p>io_romio_ad_pvfs2_open.c: In function 'fake_an_open':
<br>
io_romio_ad_pvfs2_open.c:86: warning: passing argument 6 of
<br>
'PVFS_sys_create' from incompatible pointer type
<br>
io_romio_ad_pvfs2_open.c:86: error: too few arguments to function
<br>
'PVFS_sys_create'
<br>
make[5]: *** [io_romio_ad_pvfs2_open.lo] Error 1
<br>
<p><p>Also, here is the new function prototype for pvfs-2.7.0+ for reference:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PVFS_error PVFS_sys_create(
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;char *object_name,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PVFS_object_ref parent_ref,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PVFS_sys_attr attr,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;const PVFS_credentials *credentials,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PVFS_sys_dist *dist,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PVFS_sys_layout *layout,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PVFS_sysresp_create *resp);
<br>
<p><p>So, long story short, I've attached a small patch file to this email.
<br>
If I should have echoed the text to the body of this email directly, I
<br>
apologize in advance.
<br>
<p>Cheers!
<br>
Sincerely,
<br>
Joe
<br>
<p><pre>
-- 
Joseph Bane
UMaine Computer Science Major/Mathematics Minor
ACM Member
Advanced Computing Research Laboratory at Target Technology Center
<a href="http://www.clusters.umaine.edu/">http://www.clusters.umaine.edu/</a>
</pre>
<p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-4071/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/x-diff attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-4071/romio.patch">romio.patch</a>
</ul>
<!-- attachment="romio.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/06/4072.php">Pavel Shamis (Pasha): "[OMPI devel] r18551 - brakes ob1 compilation on Sles10"</a>
<li><strong>Previous message:</strong> <a href="4070.php">Roland Dreier: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/06/4091.php">Jeff Squyres: "Re: [OMPI devel] openmpi-1.2.6 and pvfs-2.7.0+ Support"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/06/4091.php">Jeff Squyres: "Re: [OMPI devel] openmpi-1.2.6 and pvfs-2.7.0+ Support"</a>
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
