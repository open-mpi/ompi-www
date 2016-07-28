<?
$subject_val = "Re: [OMPI users] undefined reference to `MPI::Comm::Comm()";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul  9 09:41:20 2013" -->
<!-- isoreceived="20130709134120" -->
<!-- sent="Tue, 9 Jul 2013 14:41:17 +0100" -->
<!-- isosent="20130709134117" -->
<!-- name="Tomek Wlodarski" -->
<!-- email="tomek.wlodarski_at_[hidden]" -->
<!-- subject="Re: [OMPI users] undefined reference to `MPI::Comm::Comm()" -->
<!-- id="CANAOJCs9Jtr=omHxvsdr1S7jy=GPOQihXk-f3ij4sO4Z8CXdCw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC4F70487A_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] undefined reference to `MPI::Comm::Comm()<br>
<strong>From:</strong> Tomek Wlodarski (<em>tomek.wlodarski_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-09 09:41:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22301.php">Jeff Squyres (jsquyres): "Re: [OMPI users] undefined reference to `MPI::Comm::Comm()"</a>
<li><strong>Previous message:</strong> <a href="22299.php">Jeff Squyres (jsquyres): "Re: [OMPI users] undefined reference to `MPI::Comm::Comm()"</a>
<li><strong>In reply to:</strong> <a href="22299.php">Jeff Squyres (jsquyres): "Re: [OMPI users] undefined reference to `MPI::Comm::Comm()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22301.php">Jeff Squyres (jsquyres): "Re: [OMPI users] undefined reference to `MPI::Comm::Comm()"</a>
<li><strong>Reply:</strong> <a href="22301.php">Jeff Squyres (jsquyres): "Re: [OMPI users] undefined reference to `MPI::Comm::Comm()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I used mpicc but when I switched in Makefile to mpic++ it compiled
<br>
without errors.
<br>
Thanks a lot!
<br>
Best,
<br>
<p>tomek
<br>
<p>On Tue, Jul 9, 2013 at 2:31 PM, Jeff Squyres (jsquyres)
<br>
&lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; I don't see all the info requested from that web page, but it looks like OMPI built the C++ bindings ok.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Did you use mpic++ to build Gromacs?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 9, 2013, at 9:20 AM, Tomek Wlodarski &lt;tomek.wlodarski_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So I am running OpenMPi1.6.3 (config.log attached)
</span><br>
<span class="quotelev2">&gt;&gt; And I would like to install gromacs patched with plumed (scientific
</span><br>
<span class="quotelev2">&gt;&gt; computing). Both uses openmpi.
</span><br>
<span class="quotelev2">&gt;&gt; Gromacs alone compiles without errors (openMPI works). But when
</span><br>
<span class="quotelev2">&gt;&gt; patched I got one mentioned before.
</span><br>
<span class="quotelev2">&gt;&gt; I am sending config file for patched gromacs.
</span><br>
<span class="quotelev2">&gt;&gt; If you need any other file I would be happy to provide.
</span><br>
<span class="quotelev2">&gt;&gt; Thanks a lot!
</span><br>
<span class="quotelev2">&gt;&gt; Best,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; tomek
</span><br>
<span class="quotelev2">&gt;&gt; &lt;config_gromacs.log.bz2&gt;&lt;config_openmpi.log.bz2&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22301.php">Jeff Squyres (jsquyres): "Re: [OMPI users] undefined reference to `MPI::Comm::Comm()"</a>
<li><strong>Previous message:</strong> <a href="22299.php">Jeff Squyres (jsquyres): "Re: [OMPI users] undefined reference to `MPI::Comm::Comm()"</a>
<li><strong>In reply to:</strong> <a href="22299.php">Jeff Squyres (jsquyres): "Re: [OMPI users] undefined reference to `MPI::Comm::Comm()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22301.php">Jeff Squyres (jsquyres): "Re: [OMPI users] undefined reference to `MPI::Comm::Comm()"</a>
<li><strong>Reply:</strong> <a href="22301.php">Jeff Squyres (jsquyres): "Re: [OMPI users] undefined reference to `MPI::Comm::Comm()"</a>
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
