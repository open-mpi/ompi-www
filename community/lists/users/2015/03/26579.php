<?
$subject_val = "Re: [OMPI users] [EXTERNAL] Re: Errors on POWER8 Ubuntu 14.04u2";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 30 10:33:26 2015" -->
<!-- isoreceived="20150330143326" -->
<!-- sent="Mon, 30 Mar 2015 20:03:25 +0530" -->
<!-- isosent="20150330143325" -->
<!-- name="Nysal Jan K A" -->
<!-- email="jnysal_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [EXTERNAL] Re: Errors on POWER8 Ubuntu 14.04u2" -->
<!-- id="CAMQsnoYg_VF52sPx9pBKNnsvKTpiTwfh5dSSQhyeDPUbv+ObTg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="1427483600768.40223_at_sandia.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] [EXTERNAL] Re: Errors on POWER8 Ubuntu 14.04u2<br>
<strong>From:</strong> Nysal Jan K A (<em>jnysal_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-30 10:33:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26580.php">Subhra Mazumdar: "Re: [OMPI users] MPI_THREAD_MULTIPLE and openib btl"</a>
<li><strong>Previous message:</strong> <a href="26578.php">Rolf vandeVaart: "Re: [OMPI users] segfault during MPI_Isend when transmitting GPU arrays between multiple GPUs"</a>
<li><strong>In reply to:</strong> <a href="26552.php">Hammond, Simon David (-EXP): "Re: [OMPI users] [EXTERNAL] Re:  Errors on POWER8 Ubuntu 14.04u2"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If this is Power 8 in LE mode, its most likely a libtool issue. You need
<br>
libtool &gt;= 2.4.3, which has the LE patches, and need to run autogen.pl
<br>
again. I have an issue open for this -
<br>
<a href="https://github.com/open-mpi/ompi/issues/396">https://github.com/open-mpi/ompi/issues/396</a>
<br>
<p>Regards
<br>
--Nysal
<br>
<p>On Sat, Mar 28, 2015 at 12:41 AM, Hammond, Simon David (-EXP) &lt;
<br>
sdhammo_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Thanks guys,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have tried two configure lines:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (1) ./configure
</span><br>
<span class="quotelev1">&gt; --prefix=/home/projects/power8/openmpi/1.8.4/gnu/4.8.2/cuda/none
</span><br>
<span class="quotelev1">&gt; --enable-mpi-thread-multiple CC=/usr/bin/gcc CXX=/usr/bin/g++
</span><br>
<span class="quotelev1">&gt; FC=/usr/bin/gfortran
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (2) ./configure
</span><br>
<span class="quotelev1">&gt; --prefix=/home/projects/power8/openmpi/1.8.4/gnu/4.8.2/cuda/none
</span><br>
<span class="quotelev1">&gt; --enable-mpi-thread-multiple CC=/usr/bin/gcc CXX=/usr/bin/g++
</span><br>
<span class="quotelev1">&gt; FC=/usr/bin/gfortran --enable-shared --disable-static
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The second was just to try and force the generation of shared libraries (I
</span><br>
<span class="quotelev1">&gt; notice they are not in
</span><br>
<span class="quotelev1">&gt; /home/projects/power8/openmpi/1.8.4/gnu/4.8.2/cuda/none/lib).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I also attached the config.log from (2) bzip2'd as requested on the help
</span><br>
<span class="quotelev1">&gt; page.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for all of your help,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; S.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Simon Hammond
</span><br>
<span class="quotelev1">&gt; Center for Computing Research (Scalable Computer Architectures)
</span><br>
<span class="quotelev1">&gt; Sandia National Laboratories, NM
</span><br>
<span class="quotelev1">&gt; [Sent from remote connection, please excuse typing errors]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ________________________________________
</span><br>
<span class="quotelev1">&gt; From: users &lt;users-bounces_at_[hidden]&gt; on behalf of Jeff Squyres
</span><br>
<span class="quotelev1">&gt; (jsquyres) &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Sent: Friday, March 27, 2015 11:15 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI User's List
</span><br>
<span class="quotelev1">&gt; Subject: [EXTERNAL] Re: [OMPI users] Errors on POWER8 Ubuntu 14.04u2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It might be helpful to send all the information listed here:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Mar 26, 2015, at 10:55 PM, Ralph Castain &lt;rhc.openmpi_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Could you please send us your configure line?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Mar 26, 2015, at 4:47 PM, Hammond, Simon David (-EXP) &lt;
</span><br>
<span class="quotelev1">&gt; sdhammo_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hi everyone,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; We are trying to compile custom installs of OpenMPI 1.8.4 on our POWER8
</span><br>
<span class="quotelev1">&gt; Ubuntu system. We can configure and build correctly but when running
</span><br>
<span class="quotelev1">&gt; ompi_info we see many errors like those listed below. It appears that all
</span><br>
<span class="quotelev1">&gt; of the libraries in the ./lib are static (.a) files. It appears that we are
</span><br>
<span class="quotelev1">&gt; unable to get our IB system working as a result.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Can you recommend what we should be doing to ensure this works
</span><br>
<span class="quotelev1">&gt; correctly?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [node11:104711] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /home/projects/power8/openmpi/1.8.4/gnu/4.8.2/cuda/none/lib/openmpi/mca_compress_bzip:
</span><br>
<span class="quotelev1">&gt; lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thanks for your help,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Simon Hammond
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Center for Computing Research (Scalable Computer Architectures)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Sandia National Laboratories, NM
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Sent from remote connection, please excuse typing errors]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/03/26547.php">http://www.open-mpi.org/community/lists/users/2015/03/26547.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/03/26550.php">http://www.open-mpi.org/community/lists/users/2015/03/26550.php</a>
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/03/26551.php">http://www.open-mpi.org/community/lists/users/2015/03/26551.php</a>
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/03/26552.php">http://www.open-mpi.org/community/lists/users/2015/03/26552.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26579/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26580.php">Subhra Mazumdar: "Re: [OMPI users] MPI_THREAD_MULTIPLE and openib btl"</a>
<li><strong>Previous message:</strong> <a href="26578.php">Rolf vandeVaart: "Re: [OMPI users] segfault during MPI_Isend when transmitting GPU arrays between multiple GPUs"</a>
<li><strong>In reply to:</strong> <a href="26552.php">Hammond, Simon David (-EXP): "Re: [OMPI users] [EXTERNAL] Re:  Errors on POWER8 Ubuntu 14.04u2"</a>
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
