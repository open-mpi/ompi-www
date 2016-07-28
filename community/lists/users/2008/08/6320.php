<?
$subject_val = "Re: [OMPI users] Fail to install openmpi 1.2.5 on bladecenter with OFED 1.3";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 12 13:52:34 2008" -->
<!-- isoreceived="20080812175234" -->
<!-- sent="Wed, 13 Aug 2008 01:52:29 +0800" -->
<!-- isosent="20080812175229" -->
<!-- name="Mohd Radzi Nurul Azri" -->
<!-- email="nurulazri_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fail to install openmpi 1.2.5 on bladecenter with OFED 1.3" -->
<!-- id="995c92030808121052u33fa590cp9ada4ab22939a028_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="B60B5203-7DFD-4932-9856-188760557F3D_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Fail to install openmpi 1.2.5 on bladecenter with OFED 1.3<br>
<strong>From:</strong> Mohd Radzi Nurul Azri (<em>nurulazri_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-12 13:52:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6321.php">Daniël Mantione: "[OMPI users] SM btl slows down bandwidth?"</a>
<li><strong>Previous message:</strong> <a href="6319.php">Jeff Squyres: "Re: [OMPI users] Fail to install openmpi 1.2.5 on bladecenter with OFED 1.3"</a>
<li><strong>In reply to:</strong> <a href="6319.php">Jeff Squyres: "Re: [OMPI users] Fail to install openmpi 1.2.5 on bladecenter with OFED 1.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6328.php">Lenny Verkhovsky: "Re: [OMPI users] Fail to install openmpi 1.2.5 on bladecenter with OFED 1.3"</a>
<li><strong>Reply:</strong> <a href="6328.php">Lenny Verkhovsky: "Re: [OMPI users] Fail to install openmpi 1.2.5 on bladecenter with OFED 1.3"</a>
<li><strong>Reply:</strong> <a href="6331.php">Pavel Shamis (Pasha): "Re: [OMPI users] Fail to install openmpi 1.2.5 on bladecenter with OFED 1.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p><p>Thanks for the prompt reply. This might be basic but typically where is the
<br>
32 bit ofed libs? I think the default install prefix is /usr and my guess is
<br>
the 64 bit libs is in /usr/lib64 . Where do I look for the 32 bit ofed libs?
<br>
I remembered during the ofed build that passing 32 bit build argument failed
<br>
- will it still install an OFED 32 bit libs?
<br>
<p><p><p>On Wed, Aug 13, 2008 at 1:40 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; You probably need to add
</span><br>
<span class="quotelev1">&gt; --with-openib-libdir=/path/to/your/32/bit/ofed/libs.  I'm guessing that the
</span><br>
<span class="quotelev1">&gt; system installed the 64 bit libs in the default location and the 32 bit libs
</span><br>
<span class="quotelev1">&gt; in a different location.  If that's the case, then --with-openib-libdir will
</span><br>
<span class="quotelev1">&gt; tell OMPI specifically where to look for those libs and use those instead.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 12, 2008, at 1:32 PM, Mohd Radzi Nurul Azri wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I've been trying to install openmpi 1.2.5 on my cluster system running
</span><br>
<span class="quotelev2">&gt;&gt; RHEL 4 (x64) with OFED 1.3. I need openmpi 1.2.5 (32 bit) and OFED seems to
</span><br>
<span class="quotelev2">&gt;&gt; only install 64 bit version. I tried to build OFED with 32 bit support but
</span><br>
<span class="quotelev2">&gt;&gt; it failed so I figure it's best to just compile 32 bit openmpi. I followed
</span><br>
<span class="quotelev2">&gt;&gt; the FAQ and few user experience on the web.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I ran this command:
</span><br>
<span class="quotelev2">&gt;&gt; ./configure --prefix=/usr/mpi/gcc/32bit --with-openib=/usr CFLAGS=-m32
</span><br>
<span class="quotelev2">&gt;&gt; CXXFLAGS=-m32 FFLAGS=-m32 FCFLAGS=-m32
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; and after few scrolling lines, it stops here:
</span><br>
<span class="quotelev2">&gt;&gt; --- MCA component btl:openib (m4 configuration macro)
</span><br>
<span class="quotelev2">&gt;&gt; checking for MCA component btl:openib compile mode... dso
</span><br>
<span class="quotelev2">&gt;&gt; looking for header without includes
</span><br>
<span class="quotelev2">&gt;&gt; checking infiniband/verbs.h usability... yes
</span><br>
<span class="quotelev2">&gt;&gt; checking infiniband/verbs.h presence... yes
</span><br>
<span class="quotelev2">&gt;&gt; checking for infiniband/verbs.h... yes
</span><br>
<span class="quotelev2">&gt;&gt; looking for library without search path
</span><br>
<span class="quotelev2">&gt;&gt; checking for ibv_open_device in -libverbs... no
</span><br>
<span class="quotelev2">&gt;&gt; looking for library in lib
</span><br>
<span class="quotelev2">&gt;&gt; checking for ibv_open_device in -libverbs... no
</span><br>
<span class="quotelev2">&gt;&gt; looking for library in lib64
</span><br>
<span class="quotelev2">&gt;&gt; checking for ibv_open_device in -libverbs... no
</span><br>
<span class="quotelev2">&gt;&gt; checking for ibv_create_srq... no
</span><br>
<span class="quotelev2">&gt;&gt; checking for ibv_get_device_list... no
</span><br>
<span class="quotelev2">&gt;&gt; checking for ibv_resize_cq... no
</span><br>
<span class="quotelev2">&gt;&gt; configure: WARNING: OpenFabrics support requested (via --with-openib) but
</span><br>
<span class="quotelev2">&gt;&gt; not fo  und.
</span><br>
<span class="quotelev2">&gt;&gt; configure: WARNING: If you are using libibverbs v1.0 (i.e., OFED v1.0 or
</span><br>
<span class="quotelev2">&gt;&gt; v1.1),   you *MUST* have both the libsysfs headers and libraries installed.
</span><br>
<span class="quotelev2">&gt;&gt;  Later versio  ns of libibverbs do not require libsysfs.
</span><br>
<span class="quotelev2">&gt;&gt; configure: error: Aborting.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What went wrong? From the error it says early OFED version which is not
</span><br>
<span class="quotelev2">&gt;&gt; the one I'm using (running OFED 1.3 now).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any advice is greatly appreciated.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Thank you.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; azri
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Thank you.
Nurul Azri Mohd Radzi
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6320/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6321.php">Daniël Mantione: "[OMPI users] SM btl slows down bandwidth?"</a>
<li><strong>Previous message:</strong> <a href="6319.php">Jeff Squyres: "Re: [OMPI users] Fail to install openmpi 1.2.5 on bladecenter with OFED 1.3"</a>
<li><strong>In reply to:</strong> <a href="6319.php">Jeff Squyres: "Re: [OMPI users] Fail to install openmpi 1.2.5 on bladecenter with OFED 1.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6328.php">Lenny Verkhovsky: "Re: [OMPI users] Fail to install openmpi 1.2.5 on bladecenter with OFED 1.3"</a>
<li><strong>Reply:</strong> <a href="6328.php">Lenny Verkhovsky: "Re: [OMPI users] Fail to install openmpi 1.2.5 on bladecenter with OFED 1.3"</a>
<li><strong>Reply:</strong> <a href="6331.php">Pavel Shamis (Pasha): "Re: [OMPI users] Fail to install openmpi 1.2.5 on bladecenter with OFED 1.3"</a>
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
