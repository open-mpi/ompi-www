<?
$subject_val = "Re: [OMPI users] Multiple RPM build fails";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 21 07:47:14 2012" -->
<!-- isoreceived="20121121124714" -->
<!-- sent="Wed, 21 Nov 2012 07:47:10 -0500" -->
<!-- isosent="20121121124710" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Multiple RPM build fails" -->
<!-- id="D1CE0F68-E85A-42CC-9841-2ED3E5BDCDC3_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAMrN5-kydJMBzntbqy3SekHQ5aVAAfDoM3JkAs8gLSQqqMjUZA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Multiple RPM build fails<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-21 07:47:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20751.php">Diego Avesani: "[OMPI users] configuration openMPI problem"</a>
<li><strong>Previous message:</strong> <a href="20749.php">Jakub Nowacki: "[OMPI users] Multiple RPM build fails"</a>
<li><strong>In reply to:</strong> <a href="20749.php">Jakub Nowacki: "[OMPI users] Multiple RPM build fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20765.php">Jakub Nowacki: "Re: [OMPI users] Multiple RPM build fails"</a>
<li><strong>Reply:</strong> <a href="20765.php">Jakub Nowacki: "Re: [OMPI users] Multiple RPM build fails"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Greetings Jakub; thanks for the bug report.
<br>
<p>I've replicated your error.  Off the top of my head, I don't see why this is happening.  I see that rpmbuild has compressed the man pages in the multi-build scenario (e.g., BUILDROOT contains /usr/share/man/man3/MPI_&lt;foo&gt;.3.gz -- NOT .../man3/MPI_&lt;foo&gt;.3).  So I see that the error is *correct*, but I'm not sure offhand why it's not picking up the .3.gz files instead of the .3 files.
<br>
<p>I've opened <a href="https://svn.open-mpi.org/trac/ompi/ticket/3410">https://svn.open-mpi.org/trac/ompi/ticket/3410</a> to track this issue.
<br>
<p><p>On Nov 21, 2012, at 4:06 AM, Jakub Nowacki wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I tried to build OpenMPI 1.6.3 RPM on RHEL 5.5 and CentOS 6.3 for usage with SGE (--with-sge) but the build of multiple RPMs fail with the error:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Processing files: openmpi-runtime-1.6.3-1.x86_64
</span><br>
<span class="quotelev1">&gt; error: File not found: /root/rpmbuild/BUILDROOT/
</span><br>
<span class="quotelev1">&gt; openmpi-1.6.3-1.x86_64/usr/share/man/man3/MPI_Comm_remote_size.3
</span><br>
<span class="quotelev1">&gt; error: File not found: /root/rpmbuild/BUILDROOT/openmpi-1.6.3-1.x86_64/usr/share/man/man3/MPI_Comm_remote_group.3
</span><br>
<span class="quotelev1">&gt; Executing(%doc): /bin/sh -e /var/tmp/rpm-tmp.0HfCky
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [...]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; RPM build errors:
</span><br>
<span class="quotelev1">&gt;     File not found: /root/rpmbuild/BUILDROOT/openmpi-1.6.3-1.x86_64/usr/share/man/man3/MPI_Comm_remote_size.3
</span><br>
<span class="quotelev1">&gt;     File not found: /root/rpmbuild/BUILDROOT/openmpi-1.6.3-1.x86_64/usr/share/man/man3/MPI_Comm_remote_group.3
</span><br>
<span class="quotelev1">&gt; *** FAILURE BUILDING MULTIPLE RPM!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Indeed, these man pages does not seem to be there but there are gzipped files there:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -rw-r--r-- 1 root root 884 Nov 20 15:29 /root/rpmbuild/BUILDROOT/openmpi-1.6.3-1.x86_64/usr/share/man/man3/MPI_Comm_remote_group.3.gz
</span><br>
<span class="quotelev1">&gt; -rw-r--r-- 1 root root 904 Nov 20 15:29 /root/rpmbuild/BUILDROOT/openmpi-1.6.3-1.x86_64/usr/share/man/man3/MPI_Comm_remote_size.3.gz
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Interestingly, single RPM build is successful. I get the same error on both RHEL 5.5 and CentOS 6.3 using SRPM and tar package along with buildrpm.sh script. I have tried to find a solution but most of the sources I have found use single RPM build.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you very much for the help.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jakub Nowacki
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
<li><strong>Next message:</strong> <a href="20751.php">Diego Avesani: "[OMPI users] configuration openMPI problem"</a>
<li><strong>Previous message:</strong> <a href="20749.php">Jakub Nowacki: "[OMPI users] Multiple RPM build fails"</a>
<li><strong>In reply to:</strong> <a href="20749.php">Jakub Nowacki: "[OMPI users] Multiple RPM build fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20765.php">Jakub Nowacki: "Re: [OMPI users] Multiple RPM build fails"</a>
<li><strong>Reply:</strong> <a href="20765.php">Jakub Nowacki: "Re: [OMPI users] Multiple RPM build fails"</a>
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
