<?
$subject_val = "Re: [OMPI users] Fail to install openmpi 1.2.5 on bladecenter with OFED 1.3";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 13 03:21:13 2008" -->
<!-- isoreceived="20080813072113" -->
<!-- sent="Wed, 13 Aug 2008 10:21:09 +0300" -->
<!-- isosent="20080813072109" -->
<!-- name="Lenny Verkhovsky" -->
<!-- email="lenny.verkhovsky_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fail to install openmpi 1.2.5 on bladecenter with OFED 1.3" -->
<!-- id="453d39990808130021y41a51bfap7bf8c51ba1106401_at_mail.gmail.com" -->
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
<strong>From:</strong> Lenny Verkhovsky (<em>lenny.verkhovsky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-13 03:21:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6329.php">Lenny Verkhovsky: "Re: [OMPI users] SM btl slows down bandwidth?"</a>
<li><strong>Previous message:</strong> <a href="6327.php">jody: "Re: [OMPI users] Setting up Open MPI to run on multiple servers"</a>
<li><strong>In reply to:</strong> <a href="6320.php">Mohd Radzi Nurul Azri: "Re: [OMPI users] Fail to install openmpi 1.2.5 on bladecenter with OFED 1.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6331.php">Pavel Shamis (Pasha): "Re: [OMPI users] Fail to install openmpi 1.2.5 on bladecenter with OFED 1.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>check in /usr/lib  it's usually folder for 32bit libraries.
<br>
<p>I think OFED1.3 comes already with Open MPI  so it should be installed by
<br>
default.
<br>
<p>BTW, OFED1.3.1 comes with Open MPI 1.2.6 .
<br>
<p>Lenny.
<br>
<p>On 8/12/08, Mohd Radzi Nurul Azri &lt;nurulazri_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for the prompt reply. This might be basic but typically where is the
</span><br>
<span class="quotelev1">&gt; 32 bit ofed libs? I think the default install prefix is /usr and my guess is
</span><br>
<span class="quotelev1">&gt; the 64 bit libs is in /usr/lib64 . Where do I look for the 32 bit ofed libs?
</span><br>
<span class="quotelev1">&gt; I remembered during the ofed build that passing 32 bit build argument failed
</span><br>
<span class="quotelev1">&gt; - will it still install an OFED 32 bit libs?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Aug 13, 2008 at 1:40 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You probably need to add
</span><br>
<span class="quotelev2">&gt;&gt; --with-openib-libdir=/path/to/your/32/bit/ofed/libs.  I'm guessing that the
</span><br>
<span class="quotelev2">&gt;&gt; system installed the 64 bit libs in the default location and the 32 bit libs
</span><br>
<span class="quotelev2">&gt;&gt; in a different location.  If that's the case, then --with-openib-libdir will
</span><br>
<span class="quotelev2">&gt;&gt; tell OMPI specifically where to look for those libs and use those instead.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 12, 2008, at 1:32 PM, Mohd Radzi Nurul Azri wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I've been trying to install openmpi 1.2.5 on my cluster system running
</span><br>
<span class="quotelev3">&gt;&gt;&gt; RHEL 4 (x64) with OFED 1.3. I need openmpi 1.2.5 (32 bit) and OFED seems to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; only install 64 bit version. I tried to build OFED with 32 bit support but
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it failed so I figure it's best to just compile 32 bit openmpi. I followed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the FAQ and few user experience on the web.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I ran this command:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./configure --prefix=/usr/mpi/gcc/32bit --with-openib=/usr CFLAGS=-m32
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CXXFLAGS=-m32 FFLAGS=-m32 FCFLAGS=-m32
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and after few scrolling lines, it stops here:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- MCA component btl:openib (m4 configuration macro)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking for MCA component btl:openib compile mode... dso
</span><br>
<span class="quotelev3">&gt;&gt;&gt; looking for header without includes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking infiniband/verbs.h usability... yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking infiniband/verbs.h presence... yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking for infiniband/verbs.h... yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; looking for library without search path
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking for ibv_open_device in -libverbs... no
</span><br>
<span class="quotelev3">&gt;&gt;&gt; looking for library in lib
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking for ibv_open_device in -libverbs... no
</span><br>
<span class="quotelev3">&gt;&gt;&gt; looking for library in lib64
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking for ibv_open_device in -libverbs... no
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking for ibv_create_srq... no
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking for ibv_get_device_list... no
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking for ibv_resize_cq... no
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure: WARNING: OpenFabrics support requested (via --with-openib) but
</span><br>
<span class="quotelev3">&gt;&gt;&gt; not fo  und.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure: WARNING: If you are using libibverbs v1.0 (i.e., OFED v1.0 or
</span><br>
<span class="quotelev3">&gt;&gt;&gt; v1.1),   you *MUST* have both the libsysfs headers and libraries installed.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Later versio  ns of libibverbs do not require libsysfs.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure: error: Aborting.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What went wrong? From the error it says early OFED version which is not
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the one I'm using (running OFED 1.3 now).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Any advice is greatly appreciated.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thank you.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; azri
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6328/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6329.php">Lenny Verkhovsky: "Re: [OMPI users] SM btl slows down bandwidth?"</a>
<li><strong>Previous message:</strong> <a href="6327.php">jody: "Re: [OMPI users] Setting up Open MPI to run on multiple servers"</a>
<li><strong>In reply to:</strong> <a href="6320.php">Mohd Radzi Nurul Azri: "Re: [OMPI users] Fail to install openmpi 1.2.5 on bladecenter with OFED 1.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6331.php">Pavel Shamis (Pasha): "Re: [OMPI users] Fail to install openmpi 1.2.5 on bladecenter with OFED 1.3"</a>
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
