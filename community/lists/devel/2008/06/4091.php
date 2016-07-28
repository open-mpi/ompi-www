<?
$subject_val = "Re: [OMPI devel] openmpi-1.2.6 and pvfs-2.7.0+ Support";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  4 14:58:31 2008" -->
<!-- isoreceived="20080604185831" -->
<!-- sent="Wed, 4 Jun 2008 14:58:25 -0400" -->
<!-- isosent="20080604185825" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] openmpi-1.2.6 and pvfs-2.7.0+ Support" -->
<!-- id="0D3E521D-7AB2-468B-8186-D9A11576D2FF_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="9ca4a4f10805301507i15722406q85742fd706623689_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] openmpi-1.2.6 and pvfs-2.7.0+ Support<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-04 14:58:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4092.php">Jeff Squyres: "Re: [OMPI devel] memory manager RFC"</a>
<li><strong>Previous message:</strong> <a href="4090.php">Mukesh K Srivastava: "Re: [OMPI devel] devel Digest, Vol 1080, Issue 2"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/05/4071.php">Joseph Bane: "[OMPI devel] openmpi-1.2.6 and pvfs-2.7.0+ Support"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just to clarify -- are you saying that the function signature for  
<br>
PVFS_sys_create() has changed over time and that in some versions it  
<br>
takes 6 parameters, and in other versions it takes 7 parameters?  (I  
<br>
know nothing about PVFS)
<br>
<p>Thanks!
<br>
<p><p><p>On May 30, 2008, at 6:07 PM, Joseph Bane wrote:
<br>
<p><span class="quotelev1">&gt; Hi all.
</span><br>
<span class="quotelev1">&gt; I found a small issue compiling openmpi-1.2.6 with pvfs-2.7.0  
</span><br>
<span class="quotelev1">&gt; support. There is a new layout attribute for &quot;PVFS_sys_create&quot; calls  
</span><br>
<span class="quotelev1">&gt; and simply passing a NULL in place of it for the &quot;fake_an_open&quot;  
</span><br>
<span class="quotelev1">&gt; function (io_romio_ad_pvfs2_open.c) takes care of the issue. I found  
</span><br>
<span class="quotelev1">&gt; this solution looking at MPICH2 source awhile ago, btw.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For instance, after configuring openmpi with pvfs2 support  
</span><br>
<span class="quotelev1">&gt; (configure --prefix=/usr/local --with-io-romio-flags=&quot;--with-file- 
</span><br>
<span class="quotelev1">&gt; system=pvfs2+ufs+nfs&quot;) and then running &quot;make all&quot;, the following  
</span><br>
<span class="quotelev1">&gt; errors appear:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; libtool: compile:  gcc -DHAVE_CONFIG_H -I. -I../../adio/include - 
</span><br>
<span class="quotelev1">&gt; DOMPI_BUILDING=1 -I/usr/src/openmpi-1.2.6/ompi/mca/io/romio/ 
</span><br>
<span class="quotelev1">&gt; romio/../../../../.. -I/usr/src/openmpi-1.2.6/ompi/mca/io/romio/ 
</span><br>
<span class="quotelev1">&gt; romio/../../../../../opal/include -I../../../../../../../opal/ 
</span><br>
<span class="quotelev1">&gt; include -I../../../../../../../ompi/include -I/usr/src/openmpi-1.2.6/ 
</span><br>
<span class="quotelev1">&gt; ompi/mca/io/romio/romio/include -I/usr/src/openmpi-1.2.6/ompi/mca/io/ 
</span><br>
<span class="quotelev1">&gt; romio/romio/adio/include -O3 -DNDEBUG -finline-functions -fno-strict- 
</span><br>
<span class="quotelev1">&gt; aliasing -pthread -O3 -DNDEBUG -finline-functions -fno-strict- 
</span><br>
<span class="quotelev1">&gt; aliasing -pthread -D_LARGEFILE64_SOURCE -D_FILE_OFFSET_BITS=64 - 
</span><br>
<span class="quotelev1">&gt; DHAVE_ROMIOCONF_H -DHAVE_ROMIOCONF_H -I../../include -MT  
</span><br>
<span class="quotelev1">&gt; io_romio_ad_pvfs2_open.lo -MD -MP -MF .deps/ 
</span><br>
<span class="quotelev1">&gt; io_romio_ad_pvfs2_open.Tpo -c io_romio_ad_pvfs2_open.c  -fPIC -DPIC - 
</span><br>
<span class="quotelev1">&gt; o .libs/io_romio_ad_pvfs2_open.o
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; io_romio_ad_pvfs2_open.c: In function 'fake_an_open':
</span><br>
<span class="quotelev1">&gt; io_romio_ad_pvfs2_open.c:86: warning: passing argument 6 of  
</span><br>
<span class="quotelev1">&gt; 'PVFS_sys_create' from incompatible pointer type
</span><br>
<span class="quotelev1">&gt; io_romio_ad_pvfs2_open.c:86: error: too few arguments to function  
</span><br>
<span class="quotelev1">&gt; 'PVFS_sys_create'
</span><br>
<span class="quotelev1">&gt; make[5]: *** [io_romio_ad_pvfs2_open.lo] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also, here is the new function prototype for pvfs-2.7.0+ for  
</span><br>
<span class="quotelev1">&gt; reference:
</span><br>
<span class="quotelev1">&gt;     PVFS_error PVFS_sys_create(
</span><br>
<span class="quotelev1">&gt;         char *object_name,
</span><br>
<span class="quotelev1">&gt;         PVFS_object_ref parent_ref,
</span><br>
<span class="quotelev1">&gt;         PVFS_sys_attr attr,
</span><br>
<span class="quotelev1">&gt;         const PVFS_credentials *credentials,
</span><br>
<span class="quotelev1">&gt;         PVFS_sys_dist *dist,
</span><br>
<span class="quotelev1">&gt;         PVFS_sys_layout *layout,
</span><br>
<span class="quotelev1">&gt;         PVFS_sysresp_create *resp);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, long story short, I've attached a small patch file to this email.
</span><br>
<span class="quotelev1">&gt; If I should have echoed the text to the body of this email directly,  
</span><br>
<span class="quotelev1">&gt; I apologize in advance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers!
</span><br>
<span class="quotelev1">&gt; Sincerely,
</span><br>
<span class="quotelev1">&gt; Joe
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Joseph Bane
</span><br>
<span class="quotelev1">&gt; UMaine Computer Science Major/Mathematics Minor
</span><br>
<span class="quotelev1">&gt; ACM Member
</span><br>
<span class="quotelev1">&gt; Advanced Computing Research Laboratory at Target Technology Center
</span><br>
<span class="quotelev1">&gt; <a href="http://www.clusters.umaine.edu/">http://www.clusters.umaine.edu/</a>  
</span><br>
<span class="quotelev1">&gt; &lt;romio.patch&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4092.php">Jeff Squyres: "Re: [OMPI devel] memory manager RFC"</a>
<li><strong>Previous message:</strong> <a href="4090.php">Mukesh K Srivastava: "Re: [OMPI devel] devel Digest, Vol 1080, Issue 2"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/05/4071.php">Joseph Bane: "[OMPI devel] openmpi-1.2.6 and pvfs-2.7.0+ Support"</a>
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
