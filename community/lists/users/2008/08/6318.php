<?
$subject_val = "[OMPI users] Fail to install openmpi 1.2.5 on bladecenter with OFED 1.3";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 12 13:32:43 2008" -->
<!-- isoreceived="20080812173243" -->
<!-- sent="Wed, 13 Aug 2008 01:32:39 +0800" -->
<!-- isosent="20080812173239" -->
<!-- name="Mohd Radzi Nurul Azri" -->
<!-- email="nurulazri_at_[hidden]" -->
<!-- subject="[OMPI users] Fail to install openmpi 1.2.5 on bladecenter with OFED 1.3" -->
<!-- id="995c92030808121032p49fe015by1a85e4a3c35208d7_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Fail to install openmpi 1.2.5 on bladecenter with OFED 1.3<br>
<strong>From:</strong> Mohd Radzi Nurul Azri (<em>nurulazri_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-12 13:32:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6319.php">Jeff Squyres: "Re: [OMPI users] Fail to install openmpi 1.2.5 on bladecenter with OFED 1.3"</a>
<li><strong>Previous message:</strong> <a href="6317.php">Gus Correa: "Re: [OMPI users] Setting up Open MPI to run on multiple servers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6319.php">Jeff Squyres: "Re: [OMPI users] Fail to install openmpi 1.2.5 on bladecenter with OFED 1.3"</a>
<li><strong>Reply:</strong> <a href="6319.php">Jeff Squyres: "Re: [OMPI users] Fail to install openmpi 1.2.5 on bladecenter with OFED 1.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p><p>I've been trying to install openmpi 1.2.5 on my cluster system running RHEL
<br>
4 (x64) with OFED 1.3. I need openmpi 1.2.5 (32 bit) and OFED seems to only
<br>
install 64 bit version. I tried to build OFED with 32 bit support but it
<br>
failed so I figure it's best to just compile 32 bit openmpi. I followed the
<br>
FAQ and few user experience on the web.
<br>
<p>I ran this command:
<br>
./configure --prefix=/usr/mpi/gcc/32bit --with-openib=/usr CFLAGS=-m32
<br>
CXXFLAGS=-m32 FFLAGS=-m32 FCFLAGS=-m32
<br>
<p>and after few scrolling lines, it stops here:
<br>
--- MCA component btl:openib (m4 configuration macro)
<br>
checking for MCA component btl:openib compile mode... dso
<br>
looking for header without includes
<br>
checking infiniband/verbs.h usability... yes
<br>
checking infiniband/verbs.h presence... yes
<br>
checking for infiniband/verbs.h... yes
<br>
looking for library without search path
<br>
checking for ibv_open_device in -libverbs... no
<br>
looking for library in lib
<br>
checking for ibv_open_device in -libverbs... no
<br>
looking for library in lib64
<br>
checking for ibv_open_device in -libverbs... no
<br>
checking for ibv_create_srq... no
<br>
checking for ibv_get_device_list... no
<br>
checking for ibv_resize_cq... no
<br>
configure: WARNING: OpenFabrics support requested (via --with-openib) but
<br>
not fo  und.
<br>
configure: WARNING: If you are using libibverbs v1.0 (i.e., OFED v1.0 or
<br>
v1.1),   you *MUST* have both the libsysfs headers and libraries installed.
<br>
Later versio  ns of libibverbs do not require libsysfs.
<br>
configure: error: Aborting.
<br>
<p><p>What went wrong? From the error it says early OFED version which is not the
<br>
one I'm using (running OFED 1.3 now).
<br>
<p>Any advice is greatly appreciated.
<br>
<p><p><pre>
-- 
Thank you.
azri
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6318/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6319.php">Jeff Squyres: "Re: [OMPI users] Fail to install openmpi 1.2.5 on bladecenter with OFED 1.3"</a>
<li><strong>Previous message:</strong> <a href="6317.php">Gus Correa: "Re: [OMPI users] Setting up Open MPI to run on multiple servers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6319.php">Jeff Squyres: "Re: [OMPI users] Fail to install openmpi 1.2.5 on bladecenter with OFED 1.3"</a>
<li><strong>Reply:</strong> <a href="6319.php">Jeff Squyres: "Re: [OMPI users] Fail to install openmpi 1.2.5 on bladecenter with OFED 1.3"</a>
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
