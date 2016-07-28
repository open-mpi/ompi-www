<?
$subject_val = "Re: [OMPI users] Fail to install openmpi 1.2.5 on bladecenter with OFED 1.3";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 13 21:18:48 2008" -->
<!-- isoreceived="20080814011848" -->
<!-- sent="Thu, 14 Aug 2008 09:18:43 +0800" -->
<!-- isosent="20080814011843" -->
<!-- name="Mohd Radzi Nurul Azri" -->
<!-- email="nurulazri_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fail to install openmpi 1.2.5 on bladecenter with OFED 1.3" -->
<!-- id="995c92030808131818u387e577q1aee5b590c05ca62_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="48A29C3B.4020305_at_dev.mellanox.co.il" -->
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
<strong>Date:</strong> 2008-08-13 21:18:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6338.php">Rayne: "Re: [OMPI users] Setting up Open MPI to run on multiple servers"</a>
<li><strong>Previous message:</strong> <a href="6336.php">Yvan Fournier: "[OMPI users] bug in MPI_File_get_position_shared ?"</a>
<li><strong>In reply to:</strong> <a href="6331.php">Pavel Shamis (Pasha): "Re: [OMPI users] Fail to install openmpi 1.2.5 on bladecenter with OFED 1.3"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p><p>Yup some OFED build need the 32 bit flag. The earlier issue I had is OFED
<br>
1.3 can't install properly with --build32 option. If it worked, then openmpi
<br>
1.2.5 32 bit woulr be installed as well. It's a chicken and egg thing.
<br>
<p>However now what I've done is to re-install OFED 1.3.1 plus the 32 bit
<br>
stuff.
<br>
<p>./configure --prefix=/usr/mpi/gcc/32bit --with-openib=/usr CFLAGS=-m32
<br>
CXXFLAGS=-m32 FFLAGS=-m32 FCFLAGS=-m32
<br>
<p>worked without a problem. And then make and install worked too. Just need to
<br>
set the path then I'm done - I think.
<br>
<p>Thanks for the input. It's been helpful.
<br>
<p><p><p>On Wed, Aug 13, 2008 at 4:32 PM, Pavel Shamis (Pasha) &lt;
<br>
pasha_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Usually OFED installs only 64 bit version of libibverbs. If you want to
</span><br>
<span class="quotelev1">&gt; install 32bit and 64bit version  you need pass &quot;--build32&quot; flag to OFED
</span><br>
<span class="quotelev1">&gt; install. So after reinstalling OFED with 32bit support, you may rebuild the
</span><br>
<span class="quotelev1">&gt; OMPI for 32 bit support.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Pasha
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Mohd Radzi Nurul Azri wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for the prompt reply. This might be basic but typically where is
</span><br>
<span class="quotelev2">&gt;&gt; the 32 bit ofed libs? I think the default install prefix is /usr and my
</span><br>
<span class="quotelev2">&gt;&gt; guess is the 64 bit libs is in /usr/lib64 . Where do I look for the 32 bit
</span><br>
<span class="quotelev2">&gt;&gt; ofed libs? I remembered during the ofed build that passing 32 bit build
</span><br>
<span class="quotelev2">&gt;&gt; argument failed - will it still install an OFED 32 bit libs?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, Aug 13, 2008 at 1:40 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    You probably need to add
</span><br>
<span class="quotelev2">&gt;&gt;    --with-openib-libdir=/path/to/your/32/bit/ofed/libs.  I'm guessing
</span><br>
<span class="quotelev2">&gt;&gt;    that the system installed the 64 bit libs in the default location
</span><br>
<span class="quotelev2">&gt;&gt;    and the 32 bit libs in a different location.  If that's the case,
</span><br>
<span class="quotelev2">&gt;&gt;    then --with-openib-libdir will tell OMPI specifically where to
</span><br>
<span class="quotelev2">&gt;&gt;    look for those libs and use those instead.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    On Aug 12, 2008, at 1:32 PM, Mohd Radzi Nurul Azri wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        I've been trying to install openmpi 1.2.5 on my cluster system
</span><br>
<span class="quotelev2">&gt;&gt;        running RHEL 4 (x64) with OFED 1.3. I need openmpi 1.2.5 (32
</span><br>
<span class="quotelev2">&gt;&gt;        bit) and OFED seems to only install 64 bit version. I tried to
</span><br>
<span class="quotelev2">&gt;&gt;        build OFED with 32 bit support but it failed so I figure it's
</span><br>
<span class="quotelev2">&gt;&gt;        best to just compile 32 bit openmpi. I followed the FAQ and
</span><br>
<span class="quotelev2">&gt;&gt;        few user experience on the web.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        I ran this command:
</span><br>
<span class="quotelev2">&gt;&gt;        ./configure --prefix=/usr/mpi/gcc/32bit --with-openib=/usr
</span><br>
<span class="quotelev2">&gt;&gt;        CFLAGS=-m32 CXXFLAGS=-m32 FFLAGS=-m32 FCFLAGS=-m32
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        and after few scrolling lines, it stops here:
</span><br>
<span class="quotelev2">&gt;&gt;        --- MCA component btl:openib (m4 configuration macro)
</span><br>
<span class="quotelev2">&gt;&gt;        checking for MCA component btl:openib compile mode... dso
</span><br>
<span class="quotelev2">&gt;&gt;        looking for header without includes
</span><br>
<span class="quotelev2">&gt;&gt;        checking infiniband/verbs.h usability... yes
</span><br>
<span class="quotelev2">&gt;&gt;        checking infiniband/verbs.h presence... yes
</span><br>
<span class="quotelev2">&gt;&gt;        checking for infiniband/verbs.h... yes
</span><br>
<span class="quotelev2">&gt;&gt;        looking for library without search path
</span><br>
<span class="quotelev2">&gt;&gt;        checking for ibv_open_device in -libverbs... no
</span><br>
<span class="quotelev2">&gt;&gt;        looking for library in lib
</span><br>
<span class="quotelev2">&gt;&gt;        checking for ibv_open_device in -libverbs... no
</span><br>
<span class="quotelev2">&gt;&gt;        looking for library in lib64
</span><br>
<span class="quotelev2">&gt;&gt;        checking for ibv_open_device in -libverbs... no
</span><br>
<span class="quotelev2">&gt;&gt;        checking for ibv_create_srq... no
</span><br>
<span class="quotelev2">&gt;&gt;        checking for ibv_get_device_list... no
</span><br>
<span class="quotelev2">&gt;&gt;        checking for ibv_resize_cq... no
</span><br>
<span class="quotelev2">&gt;&gt;        configure: WARNING: OpenFabrics support requested (via
</span><br>
<span class="quotelev2">&gt;&gt;        --with-openib) but not fo  und.
</span><br>
<span class="quotelev2">&gt;&gt;        configure: WARNING: If you are using libibverbs v1.0 (i.e.,
</span><br>
<span class="quotelev2">&gt;&gt;        OFED v1.0 or v1.1),   you *MUST* have both the libsysfs
</span><br>
<span class="quotelev2">&gt;&gt;        headers and libraries installed.  Later versio  ns of
</span><br>
<span class="quotelev2">&gt;&gt;        libibverbs do not require libsysfs.
</span><br>
<span class="quotelev2">&gt;&gt;        configure: error: Aborting.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        What went wrong? From the error it says early OFED version
</span><br>
<span class="quotelev2">&gt;&gt;        which is not the one I'm using (running OFED 1.3 now).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        Any advice is greatly appreciated.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        --        Thank you.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        azri
</span><br>
<span class="quotelev2">&gt;&gt;        _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;        users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;        users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    --    Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt;    Cisco Systems
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;    users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;    users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt; Nurul Azri Mohd Radzi
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6337/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6338.php">Rayne: "Re: [OMPI users] Setting up Open MPI to run on multiple servers"</a>
<li><strong>Previous message:</strong> <a href="6336.php">Yvan Fournier: "[OMPI users] bug in MPI_File_get_position_shared ?"</a>
<li><strong>In reply to:</strong> <a href="6331.php">Pavel Shamis (Pasha): "Re: [OMPI users] Fail to install openmpi 1.2.5 on bladecenter with OFED 1.3"</a>
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
