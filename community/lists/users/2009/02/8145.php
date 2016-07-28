<?
$subject_val = "Re: [OMPI users] OpenMPI 1.3.1 rpm build error";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 20 15:51:26 2009" -->
<!-- isoreceived="20090220205126" -->
<!-- sent="Fri, 20 Feb 2009 12:51:19 -0800" -->
<!-- isosent="20090220205119" -->
<!-- name="Jim Kusznir" -->
<!-- email="jkusznir_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.3.1 rpm build error" -->
<!-- id="df8c8a6d0902201251r6052b60aicb552ec18e59a594_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="817188FB-FD0A-46F5-BC86-F32F297513F2_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI 1.3.1 rpm build error<br>
<strong>From:</strong> Jim Kusznir (<em>jkusznir_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-20 15:51:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8146.php">Tamara Rogers: "Re: [OMPI users] ptrdiff_t undefined error on intel 64bit machine with intel compilers"</a>
<li><strong>Previous message:</strong> <a href="8144.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.3.1 rpm build error"</a>
<li><strong>In reply to:</strong> <a href="8144.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.3.1 rpm build error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8147.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.3.1 rpm build error"</a>
<li><strong>Reply:</strong> <a href="8147.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.3.1 rpm build error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
As long as I can still build the rpm for it and install it via rpm.
<br>
I'm running it on a ROCKS cluster, so it needs to be an RPM to get
<br>
pushed out to the compute nodes.
<br>
<p>--Jim
<br>
<p>On Fri, Feb 20, 2009 at 11:30 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; On Feb 20, 2009, at 2:20 PM, Jim Kusznir wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I just went to www.open-mpi.org, went to download, then source rpm.
</span><br>
<span class="quotelev2">&gt;&gt; Looks like it was actually 1.3-1.  Here's the src.rpm that I pulled
</span><br>
<span class="quotelev2">&gt;&gt; in:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/software/ompi/v1.3/downloads/openmpi-1.3-1.src.rpm">http://www.open-mpi.org/software/ompi/v1.3/downloads/openmpi-1.3-1.src.rpm</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ah, gotcha.  Yes, that's 1.3.0, SRPM version 1.  We didn't make up this
</span><br>
<span class="quotelev1">&gt; nomenclature.  :-(
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The reason for this upgrade is it seems a user found some bug that may
</span><br>
<span class="quotelev2">&gt;&gt; be in the OpenMPI code that results in occasionally an MPI_Send()
</span><br>
<span class="quotelev2">&gt;&gt; message getting lost.  He's managed to reproduce it multiple times,
</span><br>
<span class="quotelev2">&gt;&gt; and we can't find anything in his code that can cause it...He's got
</span><br>
<span class="quotelev2">&gt;&gt; logs of mpi_send() going out, but the matching mpi_receive() never
</span><br>
<span class="quotelev2">&gt;&gt; getting anything, thus killing his code.  We're currently running
</span><br>
<span class="quotelev2">&gt;&gt; 1.2.8 with ofed support (Haven't tried turning off ofed, etc. yet).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ok.  1.3.x is much mo' betta' then 1.2 in many ways.  We could probably help
</span><br>
<span class="quotelev1">&gt; track down the problem, but if you're willing to upgrade to 1.3.x, it'll
</span><br>
<span class="quotelev1">&gt; hopefully just make the problem go away.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you try a 1.3.1 nightly tarball?
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8146.php">Tamara Rogers: "Re: [OMPI users] ptrdiff_t undefined error on intel 64bit machine with intel compilers"</a>
<li><strong>Previous message:</strong> <a href="8144.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.3.1 rpm build error"</a>
<li><strong>In reply to:</strong> <a href="8144.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.3.1 rpm build error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8147.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.3.1 rpm build error"</a>
<li><strong>Reply:</strong> <a href="8147.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.3.1 rpm build error"</a>
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
