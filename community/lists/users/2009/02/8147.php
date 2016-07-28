<?
$subject_val = "Re: [OMPI users] OpenMPI 1.3.1 rpm build error";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 20 16:59:46 2009" -->
<!-- isoreceived="20090220215946" -->
<!-- sent="Fri, 20 Feb 2009 16:59:37 -0500" -->
<!-- isosent="20090220215937" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.3.1 rpm build error" -->
<!-- id="E5E5977C-9C31-49E3-884F-04428CAC28D8_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="df8c8a6d0902201251r6052b60aicb552ec18e59a594_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-20 16:59:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8148.php">Jeff Squyres: "Re: [OMPI users] ptrdiff_t undefined error on intel 64bit machine with intel compilers"</a>
<li><strong>Previous message:</strong> <a href="8146.php">Tamara Rogers: "Re: [OMPI users] ptrdiff_t undefined error on intel 64bit machine with intel compilers"</a>
<li><strong>In reply to:</strong> <a href="8145.php">Jim Kusznir: "Re: [OMPI users] OpenMPI 1.3.1 rpm build error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8167.php">Jim Kusznir: "Re: [OMPI users] OpenMPI 1.3.1 rpm build error"</a>
<li><strong>Reply:</strong> <a href="8167.php">Jim Kusznir: "Re: [OMPI users] OpenMPI 1.3.1 rpm build error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There won't be an official SRPM until 1.3.1 is released.
<br>
<p>But to test if 1.3.1 is on-track to deliver a proper solution to you,  
<br>
can you try a nightly tarball, perhaps in conjunction with our  
<br>
&quot;buildrpm.sh&quot; script?
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/source/xref/ompi_1.3/contrib/dist/linux/buildrpm.sh">https://svn.open-mpi.org/source/xref/ompi_1.3/contrib/dist/linux/buildrpm.sh</a>
<br>
<p>It should build a trivial SRPM for you from the tarball.  You'll  
<br>
likely need to get the specfile, too, and put it in the same dir as  
<br>
buildrpm.sh.  The specfile is in the same SVN directory:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/source/xref/ompi_1.3/contrib/dist/linux/openmpi.spec">https://svn.open-mpi.org/source/xref/ompi_1.3/contrib/dist/linux/openmpi.spec</a>
<br>
<p><p><p>On Feb 20, 2009, at 3:51 PM, Jim Kusznir wrote:
<br>
<p><span class="quotelev1">&gt; As long as I can still build the rpm for it and install it via rpm.
</span><br>
<span class="quotelev1">&gt; I'm running it on a ROCKS cluster, so it needs to be an RPM to get
</span><br>
<span class="quotelev1">&gt; pushed out to the compute nodes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --Jim
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, Feb 20, 2009 at 11:30 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt;  
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 20, 2009, at 2:20 PM, Jim Kusznir wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I just went to www.open-mpi.org, went to download, then source rpm.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Looks like it was actually 1.3-1.  Here's the src.rpm that I pulled
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/software/ompi/v1.3/downloads/openmpi-1.3-1.src.rpm">http://www.open-mpi.org/software/ompi/v1.3/downloads/openmpi-1.3-1.src.rpm</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ah, gotcha.  Yes, that's 1.3.0, SRPM version 1.  We didn't make up  
</span><br>
<span class="quotelev2">&gt;&gt; this
</span><br>
<span class="quotelev2">&gt;&gt; nomenclature.  :-(
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The reason for this upgrade is it seems a user found some bug that  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; may
</span><br>
<span class="quotelev3">&gt;&gt;&gt; be in the OpenMPI code that results in occasionally an MPI_Send()
</span><br>
<span class="quotelev3">&gt;&gt;&gt; message getting lost.  He's managed to reproduce it multiple times,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and we can't find anything in his code that can cause it...He's got
</span><br>
<span class="quotelev3">&gt;&gt;&gt; logs of mpi_send() going out, but the matching mpi_receive() never
</span><br>
<span class="quotelev3">&gt;&gt;&gt; getting anything, thus killing his code.  We're currently running
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1.2.8 with ofed support (Haven't tried turning off ofed, etc. yet).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ok.  1.3.x is much mo' betta' then 1.2 in many ways.  We could  
</span><br>
<span class="quotelev2">&gt;&gt; probably help
</span><br>
<span class="quotelev2">&gt;&gt; track down the problem, but if you're willing to upgrade to 1.3.x,  
</span><br>
<span class="quotelev2">&gt;&gt; it'll
</span><br>
<span class="quotelev2">&gt;&gt; hopefully just make the problem go away.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can you try a 1.3.1 nightly tarball?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
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
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8148.php">Jeff Squyres: "Re: [OMPI users] ptrdiff_t undefined error on intel 64bit machine with intel compilers"</a>
<li><strong>Previous message:</strong> <a href="8146.php">Tamara Rogers: "Re: [OMPI users] ptrdiff_t undefined error on intel 64bit machine with intel compilers"</a>
<li><strong>In reply to:</strong> <a href="8145.php">Jim Kusznir: "Re: [OMPI users] OpenMPI 1.3.1 rpm build error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8167.php">Jim Kusznir: "Re: [OMPI users] OpenMPI 1.3.1 rpm build error"</a>
<li><strong>Reply:</strong> <a href="8167.php">Jim Kusznir: "Re: [OMPI users] OpenMPI 1.3.1 rpm build error"</a>
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
