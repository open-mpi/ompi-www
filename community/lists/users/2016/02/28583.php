<?
$subject_val = "Re: [OMPI users] Problem when installing OpenMPI during make all install";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 25 22:19:14 2016" -->
<!-- isoreceived="20160226031914" -->
<!-- sent="Fri, 26 Feb 2016 12:19:13 +0900" -->
<!-- isosent="20160226031913" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem when installing OpenMPI during make all install" -->
<!-- id="CAAkFZ5t-nruvCiOUnxRBDrtTowwJMWX4-_+1+okQT_f+xdcqOw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="14860FF57A1278409A7C321CB4466FE9F223B3_at_MBX01B.stf.nus.edu.sg" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-25 22:19:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28584.php">Eva: "Re: [OMPI users] openmpi-1.10.2rc3 is slower than 1.4.1"</a>
<li><strong>Previous message:</strong> <a href="28582.php">Tang Cheng Yee: "Re: [OMPI users] Problem when installing OpenMPI during make all install"</a>
<li><strong>In reply to:</strong> <a href="28582.php">Tang Cheng Yee: "Re: [OMPI users] Problem when installing OpenMPI during make all install"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
at first glance, you are building OpenMPI with a gcc you compiled by
<br>
yourself, and that appears busted
<br>
<p>for example, gnu_dev_major is an extern symbol, so the linker should
<br>
not complain about it being multiply defined (!)
<br>
<p>can you simply preprocess a file and post the output,
<br>
for example
<br>
cd opal
<br>
rm class/opal_bitmap.lo
<br>
make V=1 class/opal_bitmap.lo
<br>
look at the end how gcc is invoked, and then replace '-c' with '-E'
<br>
and run the command manually
<br>
the preprocessed file is in class/.libs/opal_bitmap.o
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Fri, Feb 26, 2016 at 11:39 AM, Tang Cheng Yee &lt;lsitang_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Attached are the log file for ./configure and make all install. I am using the openmpi-1.10.2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Jeff Squyres (jsquyres)
</span><br>
<span class="quotelev1">&gt; Sent: Friday, 26 February, 2016 10:13 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI User's List
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Problem when installing OpenMPI during make all install
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you send all the information listed here:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="https://www.open-mpi.org/community/help/">https://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 25, 2016, at 9:09 PM, Tang Cheng Yee &lt;lsitang_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi all,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am new to the bioinformatics world. When I was trying to install OpenMPI, I encountered the following error during &#226;&#128;&#152;make all install&#226;&#128;&#153;:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; class/.libs/opal_bitmap.o:opal_bitmap.c:(.text+0x200): first defined
</span><br>
<span class="quotelev2">&gt;&gt; here
</span><br>
<span class="quotelev2">&gt;&gt; mca/timer/linux/.libs/libmca_timer_linux.a(timer_linux_component.o): In function `pthread_equal':
</span><br>
<span class="quotelev2">&gt;&gt; timer_linux_component.c:(.text+0x8d0): multiple definition of `pthread_equal'
</span><br>
<span class="quotelev2">&gt;&gt; class/.libs/opal_free_list.o:opal_free_list.c:(.text+0x590): first
</span><br>
<span class="quotelev2">&gt;&gt; defined here
</span><br>
<span class="quotelev2">&gt;&gt; collect2: error: ld returned 1 exit status
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: *** [libopen-pal.la] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory `/data/chengyee/software/openmpi-1.10.2/opal'
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: Leaving directory `/data/chengyee/software/openmpi-1.10.2/opal'
</span><br>
<span class="quotelev2">&gt;&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I can&#226;&#128;&#153;t find solution on the internet, please help.
</span><br>
<span class="quotelev2">&gt;&gt; My configuration command was: ./configure --prefix=/local/bin/
</span><br>
<span class="quotelev2">&gt;&gt; --disable-mpi-fortran
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Part of my configuration log that I suspect might be helpful to track my error (but I do not understand):
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating opal/include/opal_config.h
</span><br>
<span class="quotelev2">&gt;&gt; config.status: opal/include/opal_config.h is unchanged
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating orte/include/orte_config.h
</span><br>
<span class="quotelev2">&gt;&gt; config.status: orte/include/orte_config.h is unchanged
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/include/mpi.h
</span><br>
<span class="quotelev2">&gt;&gt; config.status: ompi/include/mpi.h is unchanged
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating oshmem/include/shmem.h
</span><br>
<span class="quotelev2">&gt;&gt; config.status: oshmem/include/shmem.h is unchanged
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating
</span><br>
<span class="quotelev2">&gt;&gt; opal/mca/hwloc/hwloc191/hwloc/include/private/autogen/config.h
</span><br>
<span class="quotelev2">&gt;&gt; config.status:
</span><br>
<span class="quotelev2">&gt;&gt; opal/mca/hwloc/hwloc191/hwloc/include/private/autogen/config.h is
</span><br>
<span class="quotelev2">&gt;&gt; unchanged
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating
</span><br>
<span class="quotelev2">&gt;&gt; opal/mca/hwloc/hwloc191/hwloc/include/hwloc/autogen/config.h
</span><br>
<span class="quotelev2">&gt;&gt; config.status:
</span><br>
<span class="quotelev2">&gt;&gt; opal/mca/hwloc/hwloc191/hwloc/include/hwloc/autogen/config.h is
</span><br>
<span class="quotelev2">&gt;&gt; unchanged
</span><br>
<span class="quotelev2">&gt;&gt; config.status: executing depfiles commands
</span><br>
<span class="quotelev2">&gt;&gt; config.status: executing
</span><br>
<span class="quotelev2">&gt;&gt; opal/mca/event/libevent2021/libevent/include/event2/event-config.h
</span><br>
<span class="quotelev2">&gt;&gt; commands
</span><br>
<span class="quotelev2">&gt;&gt; opal/mca/event/libevent2021/libevent/include/event2/event-config.h is
</span><br>
<span class="quotelev2">&gt;&gt; unchanged
</span><br>
<span class="quotelev2">&gt;&gt; config.status: executing libtool commands
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Appreciate anyone who helps. Thanks.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; With regards,
</span><br>
<span class="quotelev2">&gt;&gt; CY
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Important: This email is confidential and may be privileged. If you are not the intended recipient, please delete it and notify us immediately; you should not copy or use it for any purpose, nor disclose its contents to any other person. Thank you.
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/02/28580.php">http://www.open-mpi.org/community/lists/users/2016/02/28580.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/02/28581.php">http://www.open-mpi.org/community/lists/users/2016/02/28581.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ________________________________
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Important: This email is confidential and may be privileged. If you are not the intended recipient, please delete it and notify us immediately; you should not copy or use it for any purpose, nor disclose its contents to any other person. Thank you.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/02/28582.php">http://www.open-mpi.org/community/lists/users/2016/02/28582.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28584.php">Eva: "Re: [OMPI users] openmpi-1.10.2rc3 is slower than 1.4.1"</a>
<li><strong>Previous message:</strong> <a href="28582.php">Tang Cheng Yee: "Re: [OMPI users] Problem when installing OpenMPI during make all install"</a>
<li><strong>In reply to:</strong> <a href="28582.php">Tang Cheng Yee: "Re: [OMPI users] Problem when installing OpenMPI during make all install"</a>
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
