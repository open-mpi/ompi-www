<?
$subject_val = "Re: [OMPI users] [EXTERNAL] Re:  Errors on POWER8 Ubuntu 14.04u2";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 27 15:11:33 2015" -->
<!-- isoreceived="20150327191133" -->
<!-- sent="Fri, 27 Mar 2015 19:11:10 +0000" -->
<!-- isosent="20150327191110" -->
<!-- name="Hammond, Simon David (-EXP)" -->
<!-- email="sdhammo_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [EXTERNAL] Re:  Errors on POWER8 Ubuntu 14.04u2" -->
<!-- id="1427483600768.40223_at_sandia.gov" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="7830CC9C-5C49-4EA8-B52F-D04EB6DC4C79_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] [EXTERNAL] Re:  Errors on POWER8 Ubuntu 14.04u2<br>
<strong>From:</strong> Hammond, Simon David (-EXP) (<em>sdhammo_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-27 15:11:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26553.php">Lev Givon: "[OMPI users] segfault during MPI_Isend when transmitting GPU arrays between multiple GPUs"</a>
<li><strong>Previous message:</strong> <a href="26551.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Errors on POWER8 Ubuntu 14.04u2"</a>
<li><strong>In reply to:</strong> <a href="26551.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Errors on POWER8 Ubuntu 14.04u2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26579.php">Nysal Jan K A: "Re: [OMPI users] [EXTERNAL] Re: Errors on POWER8 Ubuntu 14.04u2"</a>
<li><strong>Reply:</strong> <a href="26579.php">Nysal Jan K A: "Re: [OMPI users] [EXTERNAL] Re: Errors on POWER8 Ubuntu 14.04u2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks guys,

I have tried two configure lines:

(1) ./configure --prefix=/home/projects/power8/openmpi/1.8.4/gnu/4.8.2/cuda/none --enable-mpi-thread-multiple CC=/usr/bin/gcc CXX=/usr/bin/g++ FC=/usr/bin/gfortran

(2) ./configure --prefix=/home/projects/power8/openmpi/1.8.4/gnu/4.8.2/cuda/none --enable-mpi-thread-multiple CC=/usr/bin/gcc CXX=/usr/bin/g++ FC=/usr/bin/gfortran --enable-shared --disable-static

The second was just to try and force the generation of shared libraries (I notice they are not in /home/projects/power8/openmpi/1.8.4/gnu/4.8.2/cuda/none/lib).

I also attached the config.log from (2) bzip2'd as requested on the help page.

Thanks for all of your help,


S.


--
Simon Hammond
Center for Computing Research (Scalable Computer Architectures)
Sandia National Laboratories, NM
[Sent from remote connection, please excuse typing errors]

________________________________________
From: users &lt;users-bounces_at_[hidden]&gt; on behalf of Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
Sent: Friday, March 27, 2015 11:15 AM
To: Open MPI User's List
Subject: [EXTERNAL] Re: [OMPI users] Errors on POWER8 Ubuntu 14.04u2

It might be helpful to send all the information listed here:

    <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>


&gt; On Mar 26, 2015, at 10:55 PM, Ralph Castain &lt;rhc.openmpi_at_[hidden]&gt; wrote:
&gt;
&gt; Could you please send us your configure line?
&gt;
&gt;&gt; On Mar 26, 2015, at 4:47 PM, Hammond, Simon David (-EXP) &lt;sdhammo_at_[hidden]&gt; wrote:
&gt;&gt;
&gt;&gt; Hi everyone,
&gt;&gt;
&gt;&gt; We are trying to compile custom installs of OpenMPI 1.8.4 on our POWER8 Ubuntu system. We can configure and build correctly but when running ompi_info we see many errors like those listed below. It appears that all of the libraries in the ./lib are static (.a) files. It appears that we are unable to get our IB system working as a result.
&gt;&gt;
&gt;&gt; Can you recommend what we should be doing to ensure this works correctly?
&gt;&gt;
&gt;&gt; [node11:104711] mca: base: component_find: unable to open /home/projects/power8/openmpi/1.8.4/gnu/4.8.2/cuda/none/lib/openmpi/mca_compress_bzip: lt_dlerror() returned NULL! (ignored)
&gt;&gt;
&gt;&gt; Thanks for your help,
&gt;&gt;
&gt;&gt;
&gt;&gt; --
&gt;&gt; Simon Hammond
&gt;&gt; Center for Computing Research (Scalable Computer Architectures)
&gt;&gt; Sandia National Laboratories, NM
&gt;&gt; [Sent from remote connection, please excuse typing errors]
&gt;&gt; _______________________________________________
&gt;&gt; users mailing list
&gt;&gt; users_at_[hidden]
&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/03/26547.php">http://www.open-mpi.org/community/lists/users/2015/03/26547.php</a>
&gt;
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/03/26550.php">http://www.open-mpi.org/community/lists/users/2015/03/26550.php</a>


--
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>

_______________________________________________
users mailing list
users_at_[hidden]
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/03/26551.php">http://www.open-mpi.org/community/lists/users/2015/03/26551.php</a>
<br>

<br><hr>
<ul>
<li>application/x-bzip2 attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26552/power8-config.log.bz2">power8-config.log.bz2</a>
</ul>
<!-- attachment="power8-config.log.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26553.php">Lev Givon: "[OMPI users] segfault during MPI_Isend when transmitting GPU arrays between multiple GPUs"</a>
<li><strong>Previous message:</strong> <a href="26551.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Errors on POWER8 Ubuntu 14.04u2"</a>
<li><strong>In reply to:</strong> <a href="26551.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Errors on POWER8 Ubuntu 14.04u2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26579.php">Nysal Jan K A: "Re: [OMPI users] [EXTERNAL] Re: Errors on POWER8 Ubuntu 14.04u2"</a>
<li><strong>Reply:</strong> <a href="26579.php">Nysal Jan K A: "Re: [OMPI users] [EXTERNAL] Re: Errors on POWER8 Ubuntu 14.04u2"</a>
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
