<?
$subject_val = "Re: [OMPI users] Fail to install openmpi 1.2.5 on bladecenter with OFED 1.3";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 12 13:40:17 2008" -->
<!-- isoreceived="20080812174017" -->
<!-- sent="Tue, 12 Aug 2008 13:40:07 -0400" -->
<!-- isosent="20080812174007" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fail to install openmpi 1.2.5 on bladecenter with OFED 1.3" -->
<!-- id="B60B5203-7DFD-4932-9856-188760557F3D_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="995c92030808121032p49fe015by1a85e4a3c35208d7_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-12 13:40:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6320.php">Mohd Radzi Nurul Azri: "Re: [OMPI users] Fail to install openmpi 1.2.5 on bladecenter with OFED 1.3"</a>
<li><strong>Previous message:</strong> <a href="6318.php">Mohd Radzi Nurul Azri: "[OMPI users] Fail to install openmpi 1.2.5 on bladecenter with OFED 1.3"</a>
<li><strong>In reply to:</strong> <a href="6318.php">Mohd Radzi Nurul Azri: "[OMPI users] Fail to install openmpi 1.2.5 on bladecenter with OFED 1.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6320.php">Mohd Radzi Nurul Azri: "Re: [OMPI users] Fail to install openmpi 1.2.5 on bladecenter with OFED 1.3"</a>
<li><strong>Reply:</strong> <a href="6320.php">Mohd Radzi Nurul Azri: "Re: [OMPI users] Fail to install openmpi 1.2.5 on bladecenter with OFED 1.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You probably need to add --with-openib-libdir=/path/to/your/32/bit/ 
<br>
ofed/libs.  I'm guessing that the system installed the 64 bit libs in  
<br>
the default location and the 32 bit libs in a different location.  If  
<br>
that's the case, then --with-openib-libdir will tell OMPI specifically  
<br>
where to look for those libs and use those instead.
<br>
<p><p>On Aug 12, 2008, at 1:32 PM, Mohd Radzi Nurul Azri wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've been trying to install openmpi 1.2.5 on my cluster system  
</span><br>
<span class="quotelev1">&gt; running RHEL 4 (x64) with OFED 1.3. I need openmpi 1.2.5 (32 bit)  
</span><br>
<span class="quotelev1">&gt; and OFED seems to only install 64 bit version. I tried to build OFED  
</span><br>
<span class="quotelev1">&gt; with 32 bit support but it failed so I figure it's best to just  
</span><br>
<span class="quotelev1">&gt; compile 32 bit openmpi. I followed the FAQ and few user experience  
</span><br>
<span class="quotelev1">&gt; on the web.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I ran this command:
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/usr/mpi/gcc/32bit --with-openib=/usr CFLAGS=- 
</span><br>
<span class="quotelev1">&gt; m32 CXXFLAGS=-m32 FFLAGS=-m32 FCFLAGS=-m32
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and after few scrolling lines, it stops here:
</span><br>
<span class="quotelev1">&gt; --- MCA component btl:openib (m4 configuration macro)
</span><br>
<span class="quotelev1">&gt; checking for MCA component btl:openib compile mode... dso
</span><br>
<span class="quotelev1">&gt; looking for header without includes
</span><br>
<span class="quotelev1">&gt; checking infiniband/verbs.h usability... yes
</span><br>
<span class="quotelev1">&gt; checking infiniband/verbs.h presence... yes
</span><br>
<span class="quotelev1">&gt; checking for infiniband/verbs.h... yes
</span><br>
<span class="quotelev1">&gt; looking for library without search path
</span><br>
<span class="quotelev1">&gt; checking for ibv_open_device in -libverbs... no
</span><br>
<span class="quotelev1">&gt; looking for library in lib
</span><br>
<span class="quotelev1">&gt; checking for ibv_open_device in -libverbs... no
</span><br>
<span class="quotelev1">&gt; looking for library in lib64
</span><br>
<span class="quotelev1">&gt; checking for ibv_open_device in -libverbs... no
</span><br>
<span class="quotelev1">&gt; checking for ibv_create_srq... no
</span><br>
<span class="quotelev1">&gt; checking for ibv_get_device_list... no
</span><br>
<span class="quotelev1">&gt; checking for ibv_resize_cq... no
</span><br>
<span class="quotelev1">&gt; configure: WARNING: OpenFabrics support requested (via --with- 
</span><br>
<span class="quotelev1">&gt; openib) but not fo  und.
</span><br>
<span class="quotelev1">&gt; configure: WARNING: If you are using libibverbs v1.0 (i.e., OFED  
</span><br>
<span class="quotelev1">&gt; v1.0 or v1.1),   you *MUST* have both the libsysfs headers and  
</span><br>
<span class="quotelev1">&gt; libraries installed.  Later versio  ns of libibverbs do not require  
</span><br>
<span class="quotelev1">&gt; libsysfs.
</span><br>
<span class="quotelev1">&gt; configure: error: Aborting.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What went wrong? From the error it says early OFED version which is  
</span><br>
<span class="quotelev1">&gt; not the one I'm using (running OFED 1.3 now).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any advice is greatly appreciated.
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
<span class="quotelev1">&gt; azri
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="6320.php">Mohd Radzi Nurul Azri: "Re: [OMPI users] Fail to install openmpi 1.2.5 on bladecenter with OFED 1.3"</a>
<li><strong>Previous message:</strong> <a href="6318.php">Mohd Radzi Nurul Azri: "[OMPI users] Fail to install openmpi 1.2.5 on bladecenter with OFED 1.3"</a>
<li><strong>In reply to:</strong> <a href="6318.php">Mohd Radzi Nurul Azri: "[OMPI users] Fail to install openmpi 1.2.5 on bladecenter with OFED 1.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6320.php">Mohd Radzi Nurul Azri: "Re: [OMPI users] Fail to install openmpi 1.2.5 on bladecenter with OFED 1.3"</a>
<li><strong>Reply:</strong> <a href="6320.php">Mohd Radzi Nurul Azri: "Re: [OMPI users] Fail to install openmpi 1.2.5 on bladecenter with OFED 1.3"</a>
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
