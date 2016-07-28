<?
$subject_val = "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 22 11:14:54 2008" -->
<!-- isoreceived="20080922151454" -->
<!-- sent="Mon, 22 Sep 2008 09:14:46 -0600" -->
<!-- isosent="20080922151446" -->
<!-- name="Brian Harker" -->
<!-- email="brian.harker_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Configure and Build ok, but mpi module not recognized?" -->
<!-- id="48535380809220814t4ed70fb7k8bc7faf339881aeb_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AD9E2A2B-5DDE-45B0-8114-61B4099F0048_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Configure and Build ok, but mpi module not recognized?<br>
<strong>From:</strong> Brian Harker (<em>brian.harker_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-22 11:14:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6658.php">Jeff Squyres: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<li><strong>Previous message:</strong> <a href="6656.php">Jeff Squyres: "Re: [OMPI users] Segmentation Fault--libc.so.6(__libc_start_main..."</a>
<li><strong>In reply to:</strong> <a href="6653.php">Jeff Squyres: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6658.php">Jeff Squyres: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<li><strong>Reply:</strong> <a href="6658.php">Jeff Squyres: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<li><strong>Reply:</strong> <a href="6659.php">Gus Correa: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I built and installed both MPICH2 and openMPI from source, so no
<br>
distribution packages or anything.  MPICH2 has the modules located in
<br>
/usr/local/include, which I assume would be found (since its in my
<br>
path), were it not for specifying -I$OPENMPI_HOME/lib at compile time,
<br>
right?  I can't imagine that if you tell it where to look for the
<br>
correct modules, it would search through your path first before going
<br>
to where you tell it to go.  Or am I too optimistic?  Thanks again for
<br>
the input!
<br>
<p>On Mon, Sep 22, 2008 at 8:58 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; On Sep 22, 2008, at 10:10 AM, Brian Harker wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for the reply...crap, $HOME/openmpi/lib does contains all the
</span><br>
<span class="quotelev2">&gt;&gt; various lilbmpi* files as well as mpi.mod,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That should be correct.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; but still get the same
</span><br>
<span class="quotelev2">&gt;&gt; error at compile-time.  Yes, I made sure to specifically build openMPI
</span><br>
<span class="quotelev2">&gt;&gt; with ifort 10.1.012, and did run the --showme command right after
</span><br>
<span class="quotelev2">&gt;&gt; installation to make sure the wrapper compiler was using ifort as
</span><br>
<span class="quotelev2">&gt;&gt; well.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ok, good.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Before posting to this mailing list, I did uninstall and re-install
</span><br>
<span class="quotelev2">&gt;&gt; openMPI several times to make sure I had a clean install.  Still no
</span><br>
<span class="quotelev2">&gt;&gt; luck.  :(
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ok.  Have you checked around your machine to ensure that there is no other
</span><br>
<span class="quotelev1">&gt; mpi.mod that the compiler is finding first?  E.g., in your MPICH2
</span><br>
<span class="quotelev1">&gt; installation?  Or is Open MPI installed by your distro, perchance?  You
</span><br>
<span class="quotelev1">&gt; might want to try a &quot;rpm -qa | grep openmpi&quot; (or whatever your distro's
</span><br>
<span class="quotelev1">&gt; equivalent is to check already-installed packages).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<p><p><p><pre>
-- 
Cheers,
Brian
brian.harker_at_[hidden]
&quot;In science, there is only physics; all the rest is stamp-collecting.&quot;
 -Ernest Rutherford
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6658.php">Jeff Squyres: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<li><strong>Previous message:</strong> <a href="6656.php">Jeff Squyres: "Re: [OMPI users] Segmentation Fault--libc.so.6(__libc_start_main..."</a>
<li><strong>In reply to:</strong> <a href="6653.php">Jeff Squyres: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6658.php">Jeff Squyres: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<li><strong>Reply:</strong> <a href="6658.php">Jeff Squyres: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<li><strong>Reply:</strong> <a href="6659.php">Gus Correa: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
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
