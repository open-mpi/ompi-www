<?
$subject_val = "Re: [OMPI users] simple test	problem	hangs	on	mpi_finalize	and	consumes all system resources";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 24 11:38:40 2014" -->
<!-- isoreceived="20140124163840" -->
<!-- sent="Fri, 24 Jan 2014 16:38:38 +0000" -->
<!-- isosent="20140124163838" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] simple test	problem	hangs	on	mpi_finalize	and	consumes all system resources" -->
<!-- id="892570AF-7617-42FE-BF62-CEA1DB95BFB5_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C86C7F6037A63C44BCCD0D77E9D59BFE13FBF4CC7B_at_SWEC9985.w-intra.net" -->
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
<strong>Subject:</strong> Re: [OMPI users] simple test	problem	hangs	on	mpi_finalize	and	consumes all system resources<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-24 11:38:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23443.php">Elisabeth Beer: "[OMPI users] OpenMPI 1.7.2-2.1.3 does not work with OpenFOAM 2.2.2 on OpenSUSE 13.1"</a>
<li><strong>Previous message:</strong> <a href="23441.php">Fischer, Greg A.: "Re: [OMPI users] simple test problem	hangs	on	mpi_finalize	and	consumes all system resources"</a>
<li><strong>In reply to:</strong> <a href="23441.php">Fischer, Greg A.: "Re: [OMPI users] simple test problem	hangs	on	mpi_finalize	and	consumes all system resources"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23444.php">Fischer, Greg A.: "Re: [OMPI users] simple	test	problem	hangs	on	mpi_finalize	and	consumes all system resources"</a>
<li><strong>Reply:</strong> <a href="23444.php">Fischer, Greg A.: "Re: [OMPI users] simple	test	problem	hangs	on	mpi_finalize	and	consumes all system resources"</a>
<li><strong>Reply:</strong> <a href="23447.php">Fischer, Greg A.: "Re: [OMPI users] simple	test	problem	hangs	on	mpi_finalize	and	consumes all system resources"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ok.  I only mention this because the &quot;mca_paffinity_linux.so: undefined symbol: mca_base_param_reg_int&quot; type of message is almost always an indicator of two different versions being installed into the same tree.
<br>
<p><p>On Jan 24, 2014, at 11:26 AM, &quot;Fischer, Greg A.&quot; &lt;fischega_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Version 1.4.3 and 1.6.5 were and are installed in separate trees:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1003 fischega_at_lxlogin2[~]&gt; ls /tools/casl_sles10/vera_clean/gcc-4.6.1/toolset/openmpi-1.*
</span><br>
<span class="quotelev1">&gt; /tools/casl_sles10/vera_clean/gcc-4.6.1/toolset/openmpi-1.4.3:
</span><br>
<span class="quotelev1">&gt; bin  etc  include  lib  share
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /tools/casl_sles10/vera_clean/gcc-4.6.1/toolset/openmpi-1.6.5:
</span><br>
<span class="quotelev1">&gt; bin  etc  include  lib  share
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm fairly sure I was careful to check that the LD_LIBRARY_PATH was set correctly, but I'll check again.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Jeff
</span><br>
<span class="quotelev2">&gt;&gt; Squyres (jsquyres)
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Friday, January 24, 2014 11:07 AM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] simple test problem hangs on mpi_finalize and
</span><br>
<span class="quotelev2">&gt;&gt; consumes all system resources
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 22, 2014, at 10:21 AM, &quot;Fischer, Greg A.&quot;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;fischega_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The reason for deleting the openmpi-1.6.5 installation was that I went back
</span><br>
<span class="quotelev2">&gt;&gt; and installed openmpi-1.4.3 and the problem (mostly) went away. Openmpi-
</span><br>
<span class="quotelev2">&gt;&gt; 1.4.3 can run the simple tests without issue, but on my &quot;real&quot; program, I'm
</span><br>
<span class="quotelev2">&gt;&gt; getting symbol lookup errors:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mca_paffinity_linux.so: undefined symbol: mca_base_param_reg_int
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This sounds like you are mixing 1.6.x and 1.4.x in the same installation tree.
</span><br>
<span class="quotelev2">&gt;&gt; This can definitely lead to sadness.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; More specifically: installing 1.6 over an existing 1.4 installation (and vice
</span><br>
<span class="quotelev2">&gt;&gt; versa) is definitely NOT supported.  The set of plugins that the two install are
</span><br>
<span class="quotelev2">&gt;&gt; different, and can lead to all manner of weird/undefined behavior.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; FWIW: I typically install Open MPI into a tree by itself.  And if I later want to
</span><br>
<span class="quotelev2">&gt;&gt; remove that installation, I just &quot;rm -rf&quot; that tree.  Then I can install a different
</span><br>
<span class="quotelev2">&gt;&gt; version of OMPI into that same tree (because the prior tree is completely
</span><br>
<span class="quotelev2">&gt;&gt; gone).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; However, if you can't install OMPI into a tree by itself, you can &quot;make
</span><br>
<span class="quotelev2">&gt;&gt; uninstall&quot; from the source tree, and that should surgically completely
</span><br>
<span class="quotelev2">&gt;&gt; remove OMPI from the installation tree.  Then it is safe to install a different
</span><br>
<span class="quotelev2">&gt;&gt; version of OMPI into that same tree.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Can you verify that you had installed OMPI into completely clean trees?  If
</span><br>
<span class="quotelev2">&gt;&gt; you didn't, I can imagine that causing the kinds of errors that you described.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23443.php">Elisabeth Beer: "[OMPI users] OpenMPI 1.7.2-2.1.3 does not work with OpenFOAM 2.2.2 on OpenSUSE 13.1"</a>
<li><strong>Previous message:</strong> <a href="23441.php">Fischer, Greg A.: "Re: [OMPI users] simple test problem	hangs	on	mpi_finalize	and	consumes all system resources"</a>
<li><strong>In reply to:</strong> <a href="23441.php">Fischer, Greg A.: "Re: [OMPI users] simple test problem	hangs	on	mpi_finalize	and	consumes all system resources"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23444.php">Fischer, Greg A.: "Re: [OMPI users] simple	test	problem	hangs	on	mpi_finalize	and	consumes all system resources"</a>
<li><strong>Reply:</strong> <a href="23444.php">Fischer, Greg A.: "Re: [OMPI users] simple	test	problem	hangs	on	mpi_finalize	and	consumes all system resources"</a>
<li><strong>Reply:</strong> <a href="23447.php">Fischer, Greg A.: "Re: [OMPI users] simple	test	problem	hangs	on	mpi_finalize	and	consumes all system resources"</a>
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
