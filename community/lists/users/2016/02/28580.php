<?
$subject_val = "[OMPI users] Problem when installing OpenMPI during make all install";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 25 21:09:45 2016" -->
<!-- isoreceived="20160226020945" -->
<!-- sent="Fri, 26 Feb 2016 02:09:40 +0000" -->
<!-- isosent="20160226020940" -->
<!-- name="Tang Cheng Yee" -->
<!-- email="lsitang_at_[hidden]" -->
<!-- subject="[OMPI users] Problem when installing OpenMPI during make all install" -->
<!-- id="14860FF57A1278409A7C321CB4466FE9F22387_at_MBX01B.stf.nus.edu.sg" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] Problem when installing OpenMPI during make all install<br>
<strong>From:</strong> Tang Cheng Yee (<em>lsitang_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-25 21:09:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28581.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem when installing OpenMPI during make all install"</a>
<li><strong>Previous message:</strong> <a href="28579.php">dpchoudh .: "Re: [OMPI users] Adding a new BTL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28581.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem when installing OpenMPI during make all install"</a>
<li><strong>Reply:</strong> <a href="28581.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem when installing OpenMPI during make all install"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>I am new to the bioinformatics world. When I was trying to install OpenMPI, I encountered the following error during 'make all install':
<br>
<p><p>class/.libs/opal_bitmap.o:opal_bitmap.c:(.text+0x200): first defined here
<br>
mca/timer/linux/.libs/libmca_timer_linux.a(timer_linux_component.o): In function `pthread_equal':
<br>
timer_linux_component.c:(.text+0x8d0): multiple definition of `pthread_equal'
<br>
class/.libs/opal_free_list.o:opal_free_list.c:(.text+0x590): first defined here
<br>
collect2: error: ld returned 1 exit status
<br>
make[2]: *** [libopen-pal.la] Error 1
<br>
make[2]: Leaving directory `/data/chengyee/software/openmpi-1.10.2/opal'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory `/data/chengyee/software/openmpi-1.10.2/opal'
<br>
make: *** [all-recursive] Error 1
<br>
<p>I can't find solution on the internet, please help.
<br>
My configuration command was: ./configure --prefix=/local/bin/ --disable-mpi-fortran
<br>
<p>Part of my configuration log that I suspect might be helpful to track my error (but I do not understand):
<br>
config.status: creating opal/include/opal_config.h
<br>
config.status: opal/include/opal_config.h is unchanged
<br>
config.status: creating orte/include/orte_config.h
<br>
config.status: orte/include/orte_config.h is unchanged
<br>
config.status: creating ompi/include/mpi.h
<br>
config.status: ompi/include/mpi.h is unchanged
<br>
config.status: creating oshmem/include/shmem.h
<br>
config.status: oshmem/include/shmem.h is unchanged
<br>
config.status: creating opal/mca/hwloc/hwloc191/hwloc/include/private/autogen/config.h
<br>
config.status: opal/mca/hwloc/hwloc191/hwloc/include/private/autogen/config.h is unchanged
<br>
config.status: creating opal/mca/hwloc/hwloc191/hwloc/include/hwloc/autogen/config.h
<br>
config.status: opal/mca/hwloc/hwloc191/hwloc/include/hwloc/autogen/config.h is unchanged
<br>
config.status: executing depfiles commands
<br>
config.status: executing opal/mca/event/libevent2021/libevent/include/event2/event-config.h commands
<br>
opal/mca/event/libevent2021/libevent/include/event2/event-config.h is unchanged
<br>
config.status: executing libtool commands
<br>
<p>Appreciate anyone who helps. Thanks.
<br>
<p>With regards,
<br>
CY
<br>
<p>________________________________
<br>
<p>Important: This email is confidential and may be privileged. If you are not the intended recipient, please delete it and notify us immediately; you should not copy or use it for any purpose, nor disclose its contents to any other person. Thank you.
<br>
<p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28580/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28581.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem when installing OpenMPI during make all install"</a>
<li><strong>Previous message:</strong> <a href="28579.php">dpchoudh .: "Re: [OMPI users] Adding a new BTL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28581.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem when installing OpenMPI during make all install"</a>
<li><strong>Reply:</strong> <a href="28581.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem when installing OpenMPI during make all install"</a>
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
