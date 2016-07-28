<?
$subject_val = "Re: [OMPI users] Multiple RPM build fails";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 26 07:42:06 2012" -->
<!-- isoreceived="20121126124206" -->
<!-- sent="Mon, 26 Nov 2012 12:41:58 +0000" -->
<!-- isosent="20121126124158" -->
<!-- name="Jakub Nowacki" -->
<!-- email="jakub.nowacki_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Multiple RPM build fails" -->
<!-- id="CAMrN5-mi67Oav_wgXno=Kj1Hgt8ptSjGVHfeB8+AqDSoe=MTXQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="D1CE0F68-E85A-42CC-9841-2ED3E5BDCDC3_at_cisco.com" -->
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
<strong>From:</strong> Jakub Nowacki (<em>jakub.nowacki_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-26 07:41:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20766.php">Jeff Squyres: "Re: [OMPI users] Multiple RPM build fails"</a>
<li><strong>Previous message:</strong> <a href="20764.php">George Markomanolis: "[OMPI users] Maximum number of MPI processes on a node + discovering faulty nodes"</a>
<li><strong>In reply to:</strong> <a href="20750.php">Jeff Squyres: "Re: [OMPI users] Multiple RPM build fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20766.php">Jeff Squyres: "Re: [OMPI users] Multiple RPM build fails"</a>
<li><strong>Reply:</strong> <a href="20766.php">Jeff Squyres: "Re: [OMPI users] Multiple RPM build fails"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>Thanks for the information. Sorry that I'm posting it here but bugs mailing
<br>
list/Trac rejected my e-mail.
<br>
<p>&nbsp;I've tested the SRPM and I was able to compile it correctly on both RHEL 5
<br>
and CentOS 6 with multiple packages on, i.e:
<br>
<p>rpmbuild -bb --define 'build_all_in_one_rpm 0' --define 'configure_options
<br>
--with-sge' /usr/src/redhat/SPECS/openmpi-
<br>
1.6.3.spec
<br>
<p>Hence, the modified spec-file seems to fix the issue.
<br>
<p>Cheers,
<br>
<p>Jakub
<br>
<p>On 21 November 2012 12:47, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Greetings Jakub; thanks for the bug report.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've replicated your error.  Off the top of my head, I don't see why this
</span><br>
<span class="quotelev1">&gt; is happening.  I see that rpmbuild has compressed the man pages in the
</span><br>
<span class="quotelev1">&gt; multi-build scenario (e.g., BUILDROOT contains
</span><br>
<span class="quotelev1">&gt; /usr/share/man/man3/MPI_&lt;foo&gt;.3.gz -- NOT .../man3/MPI_&lt;foo&gt;.3).  So I see
</span><br>
<span class="quotelev1">&gt; that the error is *correct*, but I'm not sure offhand why it's not picking
</span><br>
<span class="quotelev1">&gt; up the .3.gz files instead of the .3 files.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've opened <a href="https://svn.open-mpi.org/trac/ompi/ticket/3410">https://svn.open-mpi.org/trac/ompi/ticket/3410</a> to track this
</span><br>
<span class="quotelev1">&gt; issue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 21, 2012, at 4:06 AM, Jakub Nowacki wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I tried to build OpenMPI 1.6.3 RPM on RHEL 5.5 and CentOS 6.3 for usage
</span><br>
<span class="quotelev1">&gt; with SGE (--with-sge) but the build of multiple RPMs fail with the error:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Processing files: openmpi-runtime-1.6.3-1.x86_64
</span><br>
<span class="quotelev2">&gt; &gt; error: File not found: /root/rpmbuild/BUILDROOT/
</span><br>
<span class="quotelev2">&gt; &gt; openmpi-1.6.3-1.x86_64/usr/share/man/man3/MPI_Comm_remote_size.3
</span><br>
<span class="quotelev2">&gt; &gt; error: File not found:
</span><br>
<span class="quotelev1">&gt; /root/rpmbuild/BUILDROOT/openmpi-1.6.3-1.x86_64/usr/share/man/man3/MPI_Comm_remote_group.3
</span><br>
<span class="quotelev2">&gt; &gt; Executing(%doc): /bin/sh -e /var/tmp/rpm-tmp.0HfCky
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [...]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; RPM build errors:
</span><br>
<span class="quotelev2">&gt; &gt;     File not found:
</span><br>
<span class="quotelev1">&gt; /root/rpmbuild/BUILDROOT/openmpi-1.6.3-1.x86_64/usr/share/man/man3/MPI_Comm_remote_size.3
</span><br>
<span class="quotelev2">&gt; &gt;     File not found:
</span><br>
<span class="quotelev1">&gt; /root/rpmbuild/BUILDROOT/openmpi-1.6.3-1.x86_64/usr/share/man/man3/MPI_Comm_remote_group.3
</span><br>
<span class="quotelev2">&gt; &gt; *** FAILURE BUILDING MULTIPLE RPM!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Indeed, these man pages does not seem to be there but there are gzipped
</span><br>
<span class="quotelev1">&gt; files there:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -rw-r--r-- 1 root root 884 Nov 20 15:29
</span><br>
<span class="quotelev1">&gt; /root/rpmbuild/BUILDROOT/openmpi-1.6.3-1.x86_64/usr/share/man/man3/MPI_Comm_remote_group.3.gz
</span><br>
<span class="quotelev2">&gt; &gt; -rw-r--r-- 1 root root 904 Nov 20 15:29
</span><br>
<span class="quotelev1">&gt; /root/rpmbuild/BUILDROOT/openmpi-1.6.3-1.x86_64/usr/share/man/man3/MPI_Comm_remote_size.3.gz
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Interestingly, single RPM build is successful. I get the same error on
</span><br>
<span class="quotelev1">&gt; both RHEL 5.5 and CentOS 6.3 using SRPM and tar package along with
</span><br>
<span class="quotelev1">&gt; buildrpm.sh script. I have tried to find a solution but most of the sources
</span><br>
<span class="quotelev1">&gt; I have found use single RPM build.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thank you very much for the help.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Regards,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Jakub Nowacki
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20765/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20766.php">Jeff Squyres: "Re: [OMPI users] Multiple RPM build fails"</a>
<li><strong>Previous message:</strong> <a href="20764.php">George Markomanolis: "[OMPI users] Maximum number of MPI processes on a node + discovering faulty nodes"</a>
<li><strong>In reply to:</strong> <a href="20750.php">Jeff Squyres: "Re: [OMPI users] Multiple RPM build fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20766.php">Jeff Squyres: "Re: [OMPI users] Multiple RPM build fails"</a>
<li><strong>Reply:</strong> <a href="20766.php">Jeff Squyres: "Re: [OMPI users] Multiple RPM build fails"</a>
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
