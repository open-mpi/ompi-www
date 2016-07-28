<?
$subject_val = "Re: [OMPI users] NVCC mpi.h: error: attribute &quot;__deprecated__&quot; does not take arguments";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 18 10:41:54 2012" -->
<!-- isoreceived="20120618144154" -->
<!-- sent="Mon, 18 Jun 2012 16:41:49 +0200" -->
<!-- isosent="20120618144149" -->
<!-- name="Dmitry N. Mikushin" -->
<!-- email="maemarcus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] NVCC mpi.h: error: attribute &amp;quot;__deprecated__&amp;quot; does not take arguments" -->
<!-- id="CAGR4S9Gn-QBStaej2FkvhQ_=tskFftO4tQbJVuVKfWX4mTHvcg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="51A9BE28-F6CF-4955-B569-F8288EF703B3_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] NVCC mpi.h: error: attribute &quot;__deprecated__&quot; does not take arguments<br>
<strong>From:</strong> Dmitry N. Mikushin (<em>maemarcus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-18 10:41:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19613.php">Harald Servat: "Re: [OMPI users] Executions in two different machines"</a>
<li><strong>Previous message:</strong> <a href="19611.php">Jeff Squyres: "Re: [OMPI users] NVCC mpi.h: error: attribute &quot;__deprecated__&quot; does not take arguments"</a>
<li><strong>In reply to:</strong> <a href="19611.php">Jeff Squyres: "Re: [OMPI users] NVCC mpi.h: error: attribute &quot;__deprecated__&quot; does not take arguments"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19614.php">Jeff Squyres: "Re: [OMPI users] NVCC mpi.h: error: attribute &quot;__deprecated__&quot; does not take arguments"</a>
<li><strong>Reply:</strong> <a href="19614.php">Jeff Squyres: "Re: [OMPI users] NVCC mpi.h: error: attribute &quot;__deprecated__&quot; does not take arguments"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
No, I'm configuring with gcc, and for openmpi-1.6 it works with nvcc
<br>
without a problem.
<br>
Actually, nvcc always meant to be more or less compatible with gcc, as far
<br>
as I know. I'm guessing in case of trunk nvcc is the source of the issue.
<br>
<p>And with ./configure CC=nvcc ....etc. it won't build:
<br>
/home/dmikushin/forge/openmpi-trunk/opal/mca/event/libevent2019/libevent/include/event2/util.h:126:2:
<br>
error: #error &quot;No way to define ev_uint64_t&quot;
<br>
<p>Thanks,
<br>
- D.
<br>
<p>2012/6/18 Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; Did you configure and build Open MPI with nvcc?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I ask because Open MPI should auto-detect whether the underlying compiler
</span><br>
<span class="quotelev1">&gt; can handle a message argument with the deprecated directive or not.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You should be able to build Open MPI with:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    ./configure CC=nvcc ....etc.
</span><br>
<span class="quotelev1">&gt;    make clean all install
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you're building Open MPI with one compiler and then trying to compile
</span><br>
<span class="quotelev1">&gt; with another (like the command line in your mail implies), all bets are off
</span><br>
<span class="quotelev1">&gt; because Open MPI has tuned itself to the compiler that it was configured
</span><br>
<span class="quotelev1">&gt; with.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 18, 2012, at 10:20 AM, Dmitry N. Mikushin wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hello,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; With openmpi svn trunk as of
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Repository Root: <a href="http://svn.open-mpi.org/svn/ompi">http://svn.open-mpi.org/svn/ompi</a>
</span><br>
<span class="quotelev2">&gt; &gt; Repository UUID: 63e3feb5-37d5-0310-a306-e8a459e722fe
</span><br>
<span class="quotelev2">&gt; &gt; Revision: 26616
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; we are observing the following strange issue (see below). How do you
</span><br>
<span class="quotelev1">&gt; think, is it a problem of NVCC or OpenMPI?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks,
</span><br>
<span class="quotelev2">&gt; &gt; - Dima.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [dmikushin_at_tesla-apc mpitest]$ cat mpitest.cu
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; __global__ void kernel() { }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [dmikushin_at_tesla-apc mpitest]$ nvcc -I/opt/openmpi-trunk/include -c
</span><br>
<span class="quotelev1">&gt; mpitest.cu
</span><br>
<span class="quotelev2">&gt; &gt; /opt/openmpi-trunk/include/mpi.h(365): error: attribute &quot;__deprecated__&quot;
</span><br>
<span class="quotelev1">&gt; does not take arguments
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; /opt/openmpi-trunk/include/mpi.h(374): error: attribute &quot;__deprecated__&quot;
</span><br>
<span class="quotelev1">&gt; does not take arguments
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; /opt/openmpi-trunk/include/mpi.h(382): error: attribute &quot;__deprecated__&quot;
</span><br>
<span class="quotelev1">&gt; does not take arguments
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; /opt/openmpi-trunk/include/mpi.h(724): error: attribute &quot;__deprecated__&quot;
</span><br>
<span class="quotelev1">&gt; does not take arguments
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; /opt/openmpi-trunk/include/mpi.h(730): error: attribute &quot;__deprecated__&quot;
</span><br>
<span class="quotelev1">&gt; does not take arguments
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; /opt/openmpi-trunk/include/mpi.h(736): error: attribute &quot;__deprecated__&quot;
</span><br>
<span class="quotelev1">&gt; does not take arguments
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; /opt/openmpi-trunk/include/mpi.h(790): error: attribute &quot;__deprecated__&quot;
</span><br>
<span class="quotelev1">&gt; does not take arguments
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; /opt/openmpi-trunk/include/mpi.h(791): error: attribute &quot;__deprecated__&quot;
</span><br>
<span class="quotelev1">&gt; does not take arguments
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; /opt/openmpi-trunk/include/mpi.h(1049): error: attribute
</span><br>
<span class="quotelev1">&gt; &quot;__deprecated__&quot; does not take arguments
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; /opt/openmpi-trunk/include/mpi.h(1070): error: attribute
</span><br>
<span class="quotelev1">&gt; &quot;__deprecated__&quot; does not take arguments
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; /opt/openmpi-trunk/include/mpi.h(1072): error: attribute
</span><br>
<span class="quotelev1">&gt; &quot;__deprecated__&quot; does not take arguments
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; /opt/openmpi-trunk/include/mpi.h(1074): error: attribute
</span><br>
<span class="quotelev1">&gt; &quot;__deprecated__&quot; does not take arguments
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; /opt/openmpi-trunk/include/mpi.h(1145): error: attribute
</span><br>
<span class="quotelev1">&gt; &quot;__deprecated__&quot; does not take arguments
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; /opt/openmpi-trunk/include/mpi.h(1149): error: attribute
</span><br>
<span class="quotelev1">&gt; &quot;__deprecated__&quot; does not take arguments
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; /opt/openmpi-trunk/include/mpi.h(1151): error: attribute
</span><br>
<span class="quotelev1">&gt; &quot;__deprecated__&quot; does not take arguments
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; /opt/openmpi-trunk/include/mpi.h(1345): error: attribute
</span><br>
<span class="quotelev1">&gt; &quot;__deprecated__&quot; does not take arguments
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; /opt/openmpi-trunk/include/mpi.h(1347): error: attribute
</span><br>
<span class="quotelev1">&gt; &quot;__deprecated__&quot; does not take arguments
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; /opt/openmpi-trunk/include/mpi.h(1484): error: attribute
</span><br>
<span class="quotelev1">&gt; &quot;__deprecated__&quot; does not take arguments
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; /opt/openmpi-trunk/include/mpi.h(1507): error: attribute
</span><br>
<span class="quotelev1">&gt; &quot;__deprecated__&quot; does not take arguments
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; /opt/openmpi-trunk/include/mpi.h(1510): error: attribute
</span><br>
<span class="quotelev1">&gt; &quot;__deprecated__&quot; does not take arguments
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; /opt/openmpi-trunk/include/mpi.h(1515): error: attribute
</span><br>
<span class="quotelev1">&gt; &quot;__deprecated__&quot; does not take arguments
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; /opt/openmpi-trunk/include/mpi.h(1525): error: attribute
</span><br>
<span class="quotelev1">&gt; &quot;__deprecated__&quot; does not take arguments
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; /opt/openmpi-trunk/include/mpi.h(1527): error: attribute
</span><br>
<span class="quotelev1">&gt; &quot;__deprecated__&quot; does not take arguments
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; /opt/openmpi-trunk/include/mpi.h(1589): error: attribute
</span><br>
<span class="quotelev1">&gt; &quot;__deprecated__&quot; does not take arguments
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; /opt/openmpi-trunk/include/mpi.h(1610): error: attribute
</span><br>
<span class="quotelev1">&gt; &quot;__deprecated__&quot; does not take arguments
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; /opt/openmpi-trunk/include/mpi.h(1612): error: attribute
</span><br>
<span class="quotelev1">&gt; &quot;__deprecated__&quot; does not take arguments
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; /opt/openmpi-trunk/include/mpi.h(1614): error: attribute
</span><br>
<span class="quotelev1">&gt; &quot;__deprecated__&quot; does not take arguments
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; /opt/openmpi-trunk/include/mpi.h(1685): error: attribute
</span><br>
<span class="quotelev1">&gt; &quot;__deprecated__&quot; does not take arguments
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; /opt/openmpi-trunk/include/mpi.h(1689): error: attribute
</span><br>
<span class="quotelev1">&gt; &quot;__deprecated__&quot; does not take arguments
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; /opt/openmpi-trunk/include/mpi.h(1691): error: attribute
</span><br>
<span class="quotelev1">&gt; &quot;__deprecated__&quot; does not take arguments
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; /opt/openmpi-trunk/include/mpi.h(1886): error: attribute
</span><br>
<span class="quotelev1">&gt; &quot;__deprecated__&quot; does not take arguments
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; /opt/openmpi-trunk/include/mpi.h(1888): error: attribute
</span><br>
<span class="quotelev1">&gt; &quot;__deprecated__&quot; does not take arguments
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; /opt/openmpi-trunk/include/mpi.h(2024): error: attribute
</span><br>
<span class="quotelev1">&gt; &quot;__deprecated__&quot; does not take arguments
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; /opt/openmpi-trunk/include/mpi.h(2047): error: attribute
</span><br>
<span class="quotelev1">&gt; &quot;__deprecated__&quot; does not take arguments
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; /opt/openmpi-trunk/include/mpi.h(2050): error: attribute
</span><br>
<span class="quotelev1">&gt; &quot;__deprecated__&quot; does not take arguments
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; /opt/openmpi-trunk/include/mpi.h(2055): error: attribute
</span><br>
<span class="quotelev1">&gt; &quot;__deprecated__&quot; does not take arguments
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; /opt/openmpi-trunk/include/mpi.h(2065): error: attribute
</span><br>
<span class="quotelev1">&gt; &quot;__deprecated__&quot; does not take arguments
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; /opt/openmpi-trunk/include/mpi.h(2067): error: attribute
</span><br>
<span class="quotelev1">&gt; &quot;__deprecated__&quot; does not take arguments
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; /opt/openmpi-trunk/include/openmpi/ompi/mpi/cxx/comm.h(102): error:
</span><br>
<span class="quotelev1">&gt; attribute &quot;__deprecated__&quot; does not take arguments
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; /opt/openmpi-trunk/include/openmpi/ompi/mpi/cxx/win.h(90): error:
</span><br>
<span class="quotelev1">&gt; attribute &quot;__deprecated__&quot; does not take arguments
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; /opt/openmpi-trunk/include/openmpi/ompi/mpi/cxx/file.h(298): error:
</span><br>
<span class="quotelev1">&gt; attribute &quot;__deprecated__&quot; does not take arguments
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 41 errors detected in the compilation of
</span><br>
<span class="quotelev1">&gt; &quot;/tmp/tmpxft_00004a17_00000000-4_mpitest.cpp1.ii&quot;.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19612/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19613.php">Harald Servat: "Re: [OMPI users] Executions in two different machines"</a>
<li><strong>Previous message:</strong> <a href="19611.php">Jeff Squyres: "Re: [OMPI users] NVCC mpi.h: error: attribute &quot;__deprecated__&quot; does not take arguments"</a>
<li><strong>In reply to:</strong> <a href="19611.php">Jeff Squyres: "Re: [OMPI users] NVCC mpi.h: error: attribute &quot;__deprecated__&quot; does not take arguments"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19614.php">Jeff Squyres: "Re: [OMPI users] NVCC mpi.h: error: attribute &quot;__deprecated__&quot; does not take arguments"</a>
<li><strong>Reply:</strong> <a href="19614.php">Jeff Squyres: "Re: [OMPI users] NVCC mpi.h: error: attribute &quot;__deprecated__&quot; does not take arguments"</a>
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
