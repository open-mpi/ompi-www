<?
$subject_val = "Re: [OMPI users] simple	test	problem	hangs	on	mpi_finalize	and	consumes all system resources";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 24 13:26:51 2014" -->
<!-- isoreceived="20140124182651" -->
<!-- sent="Fri, 24 Jan 2014 13:26:50 -0500" -->
<!-- isosent="20140124182650" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] simple	test	problem	hangs	on	mpi_finalize	and	consumes all system resources" -->
<!-- id="52E2B06A.5000909_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C86C7F6037A63C44BCCD0D77E9D59BFE13FBF4CDE6_at_SWEC9985.w-intra.net" -->
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
<strong>Subject:</strong> Re: [OMPI users] simple	test	problem	hangs	on	mpi_finalize	and	consumes all system resources<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-24 13:26:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23452.php">etcamargo: "Re: [OMPI users] Connection to lifeline lost"</a>
<li><strong>Previous message:</strong> <a href="23450.php">Kenneth Adam Miller: "Re: [OMPI users] Specific use case - very very new to MPI"</a>
<li><strong>In reply to:</strong> <a href="23447.php">Fischer, Greg A.: "Re: [OMPI users] simple	test	problem	hangs	on	mpi_finalize	and	consumes all system resources"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23455.php">Jeff Squyres (jsquyres): "Re: [OMPI users] simple	test	problem	hangs	on	mpi_finalize	and	consumes all system resources"</a>
<li><strong>Reply:</strong> <a href="23455.php">Jeff Squyres (jsquyres): "Re: [OMPI users] simple	test	problem	hangs	on	mpi_finalize	and	consumes all system resources"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 01/24/2014 12:50 PM, Fischer, Greg A. wrote:
<br>
<span class="quotelev1">&gt; Yep. That was the problem. It works beautifully now.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for prodding me to take another look.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; With regards to openmpi-1.6.5, the system that I'm compiling and running on,
</span><br>
SLES10, contains some pretty dated software (e.g. Linux 2.6.x, python 2.4,
<br>
gcc 4.1.2). Is it possible there's simply an
<br>
incompatibility lurking in there somewhere that would trip
<br>
openmpi-1.6.5 but not openmpi-1.4.3?
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Greg
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Hi Greg
<br>
<p>FWIW, we have OpenMPI 1.6.5 installed
<br>
(and we have used OMPI 1.4.5, 1.4.4, 1.4.3, ..., 1.2.8, before)
<br>
in our older cluster that has CentOS 5.2, Linux kernel 2.6.18,
<br>
gcc 4.1.2, Python 2.4.3, etc.
<br>
Parallel programs compile and run with OMPI 1.6.5 without problems.
<br>
<p>I hope this helps,
<br>
Gus Correa
<br>
<p><span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: Fischer, Greg A.
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Friday, January 24, 2014 11:41 AM
</span><br>
<span class="quotelev2">&gt;&gt; To: 'Open MPI Users'
</span><br>
<span class="quotelev2">&gt;&gt; Cc: Fischer, Greg A.
</span><br>
<span class="quotelev2">&gt;&gt; Subject: RE: [OMPI users] simple test problem hangs on mpi_finalize and
</span><br>
<span class="quotelev2">&gt;&gt; consumes all system resources
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hmm... It looks like CMAKE was somehow finding openmpi-1.6.5 instead of
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.4.3, despite the environment variables being set otherwise. This
</span><br>
<span class="quotelev2">&gt;&gt; is likely the explanation. I'll try to chase that down.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Jeff
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Squyres (jsquyres)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sent: Friday, January 24, 2014 11:39 AM
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: Re: [OMPI users] simple test problem hangs on mpi_finalize and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; consumes all system resources
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ok.  I only mention this because the &quot;mca_paffinity_linux.so: undefined
</span><br>
<span class="quotelev3">&gt;&gt;&gt; symbol: mca_base_param_reg_int&quot; type of message is almost always an
</span><br>
<span class="quotelev3">&gt;&gt;&gt; indicator of two different versions being installed into the same tree.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jan 24, 2014, at 11:26 AM, &quot;Fischer, Greg A.&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;fischega_at_[hidden]&gt;  wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Version 1.4.3 and 1.6.5 were and are installed in separate trees:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1003 fischega_at_lxlogin2[~]&gt;  ls
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /tools/casl_sles10/vera_clean/gcc-4.6.1/toolset/openmpi-1.*
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /tools/casl_sles10/vera_clean/gcc-4.6.1/toolset/openmpi-1.4.3:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; bin  etc  include  lib  share
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /tools/casl_sles10/vera_clean/gcc-4.6.1/toolset/openmpi-1.6.5:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; bin  etc  include  lib  share
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'm fairly sure I was careful to check that the LD_LIBRARY_PATH was
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; set
</span><br>
<span class="quotelev3">&gt;&gt;&gt; correctly, but I'll check again.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Jeff
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Squyres (jsquyres)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Sent: Friday, January 24, 2014 11:07 AM
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subject: Re: [OMPI users] simple test problem hangs on mpi_finalize
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; and consumes all system resources
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Jan 22, 2014, at 10:21 AM, &quot;Fischer, Greg A.&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;fischega_at_[hidden]&gt;  wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; The reason for deleting the openmpi-1.6.5 installation was that I
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; went back
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; and installed openmpi-1.4.3 and the problem (mostly) went away.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Openmpi-
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 1.4.3 can run the simple tests without issue, but on my &quot;real&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; program, I'm getting symbol lookup errors:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; mca_paffinity_linux.so: undefined symbol: mca_base_param_reg_int
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; This sounds like you are mixing 1.6.x and 1.4.x in the same
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; installation
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tree.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; This can definitely lead to sadness.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; More specifically: installing 1.6 over an existing 1.4 installation
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (and vice
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; versa) is definitely NOT supported.  The set of plugins that the two
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; install are different, and can lead to all manner of weird/undefined
</span><br>
<span class="quotelev3">&gt;&gt;&gt; behavior.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; FWIW: I typically install Open MPI into a tree by itself.  And if I
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; later want to remove that installation, I just &quot;rm -rf&quot; that tree.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Then I can install a different version of OMPI into that same tree
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (because the prior tree is completely gone).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; However, if you can't install OMPI into a tree by itself, you can
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &quot;make uninstall&quot; from the source tree, and that should surgically
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; completely remove OMPI from the installation tree.  Then it is safe
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; to install a different version of OMPI into that same tree.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Can you verify that you had installed OMPI into completely clean
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; trees?  If you didn't, I can imagine that causing the kinds of
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; errors that you
</span><br>
<span class="quotelev3">&gt;&gt;&gt; described.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<li><strong>Next message:</strong> <a href="23452.php">etcamargo: "Re: [OMPI users] Connection to lifeline lost"</a>
<li><strong>Previous message:</strong> <a href="23450.php">Kenneth Adam Miller: "Re: [OMPI users] Specific use case - very very new to MPI"</a>
<li><strong>In reply to:</strong> <a href="23447.php">Fischer, Greg A.: "Re: [OMPI users] simple	test	problem	hangs	on	mpi_finalize	and	consumes all system resources"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23455.php">Jeff Squyres (jsquyres): "Re: [OMPI users] simple	test	problem	hangs	on	mpi_finalize	and	consumes all system resources"</a>
<li><strong>Reply:</strong> <a href="23455.php">Jeff Squyres (jsquyres): "Re: [OMPI users] simple	test	problem	hangs	on	mpi_finalize	and	consumes all system resources"</a>
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
