<?
$subject_val = "Re: [OMPI users] Problem when installing OpenMPI during make all install";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 25 21:40:14 2016" -->
<!-- isoreceived="20160226024014" -->
<!-- sent="Fri, 26 Feb 2016 02:39:59 +0000" -->
<!-- isosent="20160226023959" -->
<!-- name="Tang Cheng Yee" -->
<!-- email="lsitang_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem when installing OpenMPI during make all install" -->
<!-- id="14860FF57A1278409A7C321CB4466FE9F223B3_at_MBX01B.stf.nus.edu.sg" -->
<!-- charset="utf-8" -->
<!-- inreplyto="523F8FDD-7E45-4830-A93E-DD6FF12089CC_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem when installing OpenMPI during make all install<br>
<strong>From:</strong> Tang Cheng Yee (<em>lsitang_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-25 21:39:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28583.php">Gilles Gouaillardet: "Re: [OMPI users] Problem when installing OpenMPI during make all install"</a>
<li><strong>Previous message:</strong> <a href="28581.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem when installing OpenMPI during make all install"</a>
<li><strong>In reply to:</strong> <a href="28581.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem when installing OpenMPI during make all install"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28583.php">Gilles Gouaillardet: "Re: [OMPI users] Problem when installing OpenMPI during make all install"</a>
<li><strong>Reply:</strong> <a href="28583.php">Gilles Gouaillardet: "Re: [OMPI users] Problem when installing OpenMPI during make all install"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Attached are the log file for ./configure and make all install. I am using the openmpi-1.10.2
<br>

<br>
Thanks
<br>

<br>
-----Original Message-----
<br>
From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Jeff Squyres (jsquyres)
<br>
Sent: Friday, 26 February, 2016 10:13 AM
<br>
To: Open MPI User's List
<br>
Subject: Re: [OMPI users] Problem when installing OpenMPI during make all install
<br>

<br>
Can you send all the information listed here:
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://www.open-mpi.org/community/help/">https://www.open-mpi.org/community/help/</a>
<br>

<br>

<br>
<span class="quotelev1">&gt; On Feb 25, 2016, at 9:09 PM, Tang Cheng Yee &lt;lsitang_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am new to the bioinformatics world. When I was trying to install OpenMPI, I encountered the following error during &#226;&#128;&#152;make all install&#226;&#128;&#153;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; class/.libs/opal_bitmap.o:opal_bitmap.c:(.text+0x200): first defined
</span><br>
<span class="quotelev1">&gt; here
</span><br>
<span class="quotelev1">&gt; mca/timer/linux/.libs/libmca_timer_linux.a(timer_linux_component.o): In function `pthread_equal':
</span><br>
<span class="quotelev1">&gt; timer_linux_component.c:(.text+0x8d0): multiple definition of `pthread_equal'
</span><br>
<span class="quotelev1">&gt; class/.libs/opal_free_list.o:opal_free_list.c:(.text+0x590): first
</span><br>
<span class="quotelev1">&gt; defined here
</span><br>
<span class="quotelev1">&gt; collect2: error: ld returned 1 exit status
</span><br>
<span class="quotelev1">&gt; make[2]: *** [libopen-pal.la] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/data/chengyee/software/openmpi-1.10.2/opal'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/data/chengyee/software/openmpi-1.10.2/opal'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can&#226;&#128;&#153;t find solution on the internet, please help.
</span><br>
<span class="quotelev1">&gt; My configuration command was: ./configure --prefix=/local/bin/
</span><br>
<span class="quotelev1">&gt; --disable-mpi-fortran
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Part of my configuration log that I suspect might be helpful to track my error (but I do not understand):
</span><br>
<span class="quotelev1">&gt; config.status: creating opal/include/opal_config.h
</span><br>
<span class="quotelev1">&gt; config.status: opal/include/opal_config.h is unchanged
</span><br>
<span class="quotelev1">&gt; config.status: creating orte/include/orte_config.h
</span><br>
<span class="quotelev1">&gt; config.status: orte/include/orte_config.h is unchanged
</span><br>
<span class="quotelev1">&gt; config.status: creating ompi/include/mpi.h
</span><br>
<span class="quotelev1">&gt; config.status: ompi/include/mpi.h is unchanged
</span><br>
<span class="quotelev1">&gt; config.status: creating oshmem/include/shmem.h
</span><br>
<span class="quotelev1">&gt; config.status: oshmem/include/shmem.h is unchanged
</span><br>
<span class="quotelev1">&gt; config.status: creating
</span><br>
<span class="quotelev1">&gt; opal/mca/hwloc/hwloc191/hwloc/include/private/autogen/config.h
</span><br>
<span class="quotelev1">&gt; config.status:
</span><br>
<span class="quotelev1">&gt; opal/mca/hwloc/hwloc191/hwloc/include/private/autogen/config.h is
</span><br>
<span class="quotelev1">&gt; unchanged
</span><br>
<span class="quotelev1">&gt; config.status: creating
</span><br>
<span class="quotelev1">&gt; opal/mca/hwloc/hwloc191/hwloc/include/hwloc/autogen/config.h
</span><br>
<span class="quotelev1">&gt; config.status:
</span><br>
<span class="quotelev1">&gt; opal/mca/hwloc/hwloc191/hwloc/include/hwloc/autogen/config.h is
</span><br>
<span class="quotelev1">&gt; unchanged
</span><br>
<span class="quotelev1">&gt; config.status: executing depfiles commands
</span><br>
<span class="quotelev1">&gt; config.status: executing
</span><br>
<span class="quotelev1">&gt; opal/mca/event/libevent2021/libevent/include/event2/event-config.h
</span><br>
<span class="quotelev1">&gt; commands
</span><br>
<span class="quotelev1">&gt; opal/mca/event/libevent2021/libevent/include/event2/event-config.h is
</span><br>
<span class="quotelev1">&gt; unchanged
</span><br>
<span class="quotelev1">&gt; config.status: executing libtool commands
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Appreciate anyone who helps. Thanks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; With regards,
</span><br>
<span class="quotelev1">&gt; CY
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Important: This email is confidential and may be privileged. If you are not the intended recipient, please delete it and notify us immediately; you should not copy or use it for any purpose, nor disclose its contents to any other person. Thank you.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/02/28580.php">http://www.open-mpi.org/community/lists/users/2016/02/28580.php</a>
</span><br>

<br>

<br>
--
<br>
Jeff Squyres
<br>
jsquyres_at_[hidden]
<br>
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
<br>

<br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/02/28581.php">http://www.open-mpi.org/community/lists/users/2016/02/28581.php</a>
<br>

<br>
________________________________
<br>

<br>
Important: This email is confidential and may be privileged. If you are not the intended recipient, please delete it and notify us immediately; you should not copy or use it for any purpose, nor disclose its contents to any other person. Thank you.
<br>



<br><p>
<p><hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28582/config.out.gz">config.out.gz</a>
</ul>
<!-- attachment="config.out.gz" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28582/config.log.gz">config.log.gz</a>
</ul>
<!-- attachment="config.log.gz" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28582/make.out.gz">make.out.gz</a>
</ul>
<!-- attachment="make.out.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28583.php">Gilles Gouaillardet: "Re: [OMPI users] Problem when installing OpenMPI during make all install"</a>
<li><strong>Previous message:</strong> <a href="28581.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem when installing OpenMPI during make all install"</a>
<li><strong>In reply to:</strong> <a href="28581.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem when installing OpenMPI during make all install"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28583.php">Gilles Gouaillardet: "Re: [OMPI users] Problem when installing OpenMPI during make all install"</a>
<li><strong>Reply:</strong> <a href="28583.php">Gilles Gouaillardet: "Re: [OMPI users] Problem when installing OpenMPI during make all install"</a>
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
