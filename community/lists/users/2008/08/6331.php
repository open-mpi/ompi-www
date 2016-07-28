<?
$subject_val = "Re: [OMPI users] Fail to install openmpi 1.2.5 on bladecenter with OFED 1.3";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 13 04:33:05 2008" -->
<!-- isoreceived="20080813083305" -->
<!-- sent="Wed, 13 Aug 2008 11:32:59 +0300" -->
<!-- isosent="20080813083259" -->
<!-- name="Pavel Shamis (Pasha)" -->
<!-- email="pasha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fail to install openmpi 1.2.5 on bladecenter with OFED 1.3" -->
<!-- id="48A29C3B.4020305_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="995c92030808121052u33fa590cp9ada4ab22939a028_at_mail.gmail.com" -->
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
<strong>From:</strong> Pavel Shamis (Pasha) (<em>pasha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-13 04:32:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6332.php">jody: "Re: [OMPI users] Setting up Open MPI to run on multiple servers"</a>
<li><strong>Previous message:</strong> <a href="6330.php">Rayne: "Re: [OMPI users] Setting up Open MPI to run on multiple servers"</a>
<li><strong>In reply to:</strong> <a href="6320.php">Mohd Radzi Nurul Azri: "Re: [OMPI users] Fail to install openmpi 1.2.5 on bladecenter with OFED 1.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6337.php">Mohd Radzi Nurul Azri: "Re: [OMPI users] Fail to install openmpi 1.2.5 on bladecenter with OFED 1.3"</a>
<li><strong>Reply:</strong> <a href="6337.php">Mohd Radzi Nurul Azri: "Re: [OMPI users] Fail to install openmpi 1.2.5 on bladecenter with OFED 1.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Usually OFED installs only 64 bit version of libibverbs. If you want to 
<br>
install 32bit and 64bit version  you need pass &quot;--build32&quot; flag to OFED 
<br>
install. So after reinstalling OFED with 32bit support, you may rebuild 
<br>
the OMPI for 32 bit support.
<br>
<p>Regards,
<br>
Pasha
<br>
<p><p>Mohd Radzi Nurul Azri wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for the prompt reply. This might be basic but typically where 
</span><br>
<span class="quotelev1">&gt; is the 32 bit ofed libs? I think the default install prefix is /usr 
</span><br>
<span class="quotelev1">&gt; and my guess is the 64 bit libs is in /usr/lib64 . Where do I look for 
</span><br>
<span class="quotelev1">&gt; the 32 bit ofed libs? I remembered during the ofed build that passing 
</span><br>
<span class="quotelev1">&gt; 32 bit build argument failed - will it still install an OFED 32 bit libs?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Aug 13, 2008 at 1:40 AM, Jeff Squyres &lt;jsquyres_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:jsquyres_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     You probably need to add
</span><br>
<span class="quotelev1">&gt;     --with-openib-libdir=/path/to/your/32/bit/ofed/libs.  I'm guessing
</span><br>
<span class="quotelev1">&gt;     that the system installed the 64 bit libs in the default location
</span><br>
<span class="quotelev1">&gt;     and the 32 bit libs in a different location.  If that's the case,
</span><br>
<span class="quotelev1">&gt;     then --with-openib-libdir will tell OMPI specifically where to
</span><br>
<span class="quotelev1">&gt;     look for those libs and use those instead.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     On Aug 12, 2008, at 1:32 PM, Mohd Radzi Nurul Azri wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         I've been trying to install openmpi 1.2.5 on my cluster system
</span><br>
<span class="quotelev1">&gt;         running RHEL 4 (x64) with OFED 1.3. I need openmpi 1.2.5 (32
</span><br>
<span class="quotelev1">&gt;         bit) and OFED seems to only install 64 bit version. I tried to
</span><br>
<span class="quotelev1">&gt;         build OFED with 32 bit support but it failed so I figure it's
</span><br>
<span class="quotelev1">&gt;         best to just compile 32 bit openmpi. I followed the FAQ and
</span><br>
<span class="quotelev1">&gt;         few user experience on the web.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         I ran this command:
</span><br>
<span class="quotelev1">&gt;         ./configure --prefix=/usr/mpi/gcc/32bit --with-openib=/usr
</span><br>
<span class="quotelev1">&gt;         CFLAGS=-m32 CXXFLAGS=-m32 FFLAGS=-m32 FCFLAGS=-m32
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         and after few scrolling lines, it stops here:
</span><br>
<span class="quotelev1">&gt;         --- MCA component btl:openib (m4 configuration macro)
</span><br>
<span class="quotelev1">&gt;         checking for MCA component btl:openib compile mode... dso
</span><br>
<span class="quotelev1">&gt;         looking for header without includes
</span><br>
<span class="quotelev1">&gt;         checking infiniband/verbs.h usability... yes
</span><br>
<span class="quotelev1">&gt;         checking infiniband/verbs.h presence... yes
</span><br>
<span class="quotelev1">&gt;         checking for infiniband/verbs.h... yes
</span><br>
<span class="quotelev1">&gt;         looking for library without search path
</span><br>
<span class="quotelev1">&gt;         checking for ibv_open_device in -libverbs... no
</span><br>
<span class="quotelev1">&gt;         looking for library in lib
</span><br>
<span class="quotelev1">&gt;         checking for ibv_open_device in -libverbs... no
</span><br>
<span class="quotelev1">&gt;         looking for library in lib64
</span><br>
<span class="quotelev1">&gt;         checking for ibv_open_device in -libverbs... no
</span><br>
<span class="quotelev1">&gt;         checking for ibv_create_srq... no
</span><br>
<span class="quotelev1">&gt;         checking for ibv_get_device_list... no
</span><br>
<span class="quotelev1">&gt;         checking for ibv_resize_cq... no
</span><br>
<span class="quotelev1">&gt;         configure: WARNING: OpenFabrics support requested (via
</span><br>
<span class="quotelev1">&gt;         --with-openib) but not fo  und.
</span><br>
<span class="quotelev1">&gt;         configure: WARNING: If you are using libibverbs v1.0 (i.e.,
</span><br>
<span class="quotelev1">&gt;         OFED v1.0 or v1.1),   you *MUST* have both the libsysfs
</span><br>
<span class="quotelev1">&gt;         headers and libraries installed.  Later versio  ns of
</span><br>
<span class="quotelev1">&gt;         libibverbs do not require libsysfs.
</span><br>
<span class="quotelev1">&gt;         configure: error: Aborting.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         What went wrong? From the error it says early OFED version
</span><br>
<span class="quotelev1">&gt;         which is not the one I'm using (running OFED 1.3 now).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Any advice is greatly appreciated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         -- 
</span><br>
<span class="quotelev1">&gt;         Thank you.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         azri
</span><br>
<span class="quotelev1">&gt;         _______________________________________________
</span><br>
<span class="quotelev1">&gt;         users mailing list
</span><br>
<span class="quotelev1">&gt;         users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;         <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     -- 
</span><br>
<span class="quotelev1">&gt;     Jeff Squyres
</span><br>
<span class="quotelev1">&gt;     Cisco Systems
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     users mailing list
</span><br>
<span class="quotelev1">&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Thank you.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Nurul Azri Mohd Radzi
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6332.php">jody: "Re: [OMPI users] Setting up Open MPI to run on multiple servers"</a>
<li><strong>Previous message:</strong> <a href="6330.php">Rayne: "Re: [OMPI users] Setting up Open MPI to run on multiple servers"</a>
<li><strong>In reply to:</strong> <a href="6320.php">Mohd Radzi Nurul Azri: "Re: [OMPI users] Fail to install openmpi 1.2.5 on bladecenter with OFED 1.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6337.php">Mohd Radzi Nurul Azri: "Re: [OMPI users] Fail to install openmpi 1.2.5 on bladecenter with OFED 1.3"</a>
<li><strong>Reply:</strong> <a href="6337.php">Mohd Radzi Nurul Azri: "Re: [OMPI users] Fail to install openmpi 1.2.5 on bladecenter with OFED 1.3"</a>
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
