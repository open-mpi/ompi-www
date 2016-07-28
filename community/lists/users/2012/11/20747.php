<?
$subject_val = "[OMPI users] Building multiple RPM error";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 20 10:43:50 2012" -->
<!-- isoreceived="20121120154350" -->
<!-- sent="Tue, 20 Nov 2012 15:43:46 +0000" -->
<!-- isosent="20121120154346" -->
<!-- name="Jakub Nowacki" -->
<!-- email="jakub.nowacki_at_[hidden]" -->
<!-- subject="[OMPI users] Building multiple RPM error" -->
<!-- id="CAMrN5-mrM2jWoL7AirKfKP09YbHbQZrs6mfsG5fVt-FhU-FnmA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Building multiple RPM error<br>
<strong>From:</strong> Jakub Nowacki (<em>jakub.nowacki_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-20 10:43:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20748.php">Jeff Squyres: "Re: [OMPI users] Setting RPATH for Open MPI libraries"</a>
<li><strong>Previous message:</strong> <a href="20746.php">Jeff Squyres: "Re: [OMPI users] Setting RPATH for Open MPI libraries"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I tried to build OpenMPI 1.6.3 RPM on RHEL 5.5 and CentOS 6.3 for usage
<br>
with SGE (--with-sge) but the build of multiple RPMs fail with the error:
<br>
<p>Processing files: openmpi-runtime-1.6.3-1.x86_64
<br>
error: File not found:
<br>
/root/rpmbuild/BUILDROOT/openmpi-1.6.3-1.x86_64/usr/share/man/man3/MPI_Comm_remote_size.3
<br>
error: File not found:
<br>
/root/rpmbuild/BUILDROOT/openmpi-1.6.3-1.x86_64/usr/share/man/man3/MPI_Comm_remote_group.3
<br>
Executing(%doc): /bin/sh -e /var/tmp/rpm-tmp.0HfCky
<br>
<p>[...]
<br>
<p>RPM build errors:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;File not found:
<br>
/root/rpmbuild/BUILDROOT/openmpi-1.6.3-1.x86_64/usr/share/man/man3/MPI_Comm_remote_size.3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;File not found:
<br>
/root/rpmbuild/BUILDROOT/openmpi-1.6.3-1.x86_64/usr/share/man/man3/MPI_Comm_remote_group.3
<br>
*** FAILURE BUILDING MULTIPLE RPM!
<br>
<p>Indeed, these man pages does not seem to be there but there are gzipped
<br>
files there:
<br>
<p>-rw-r--r-- 1 root root 884 Nov 20 15:29
<br>
/root/rpmbuild/BUILDROOT/openmpi-1.6.3-1.x86_64/usr/share/man/man3/MPI_Comm_remote_group.3.gz
<br>
-rw-r--r-- 1 root root 904 Nov 20 15:29
<br>
/root/rpmbuild/BUILDROOT/openmpi-1.6.3-1.x86_64/usr/share/man/man3/MPI_Comm_remote_size.3.gz
<br>
<p>Interestingly, single RPM build is successful. I get the same error on both
<br>
RHEL 5.5 and CentOS 6.3 using SRPM and tar package along with buildrpm.sh
<br>
script. I have tried to find a solution but most of the sources I have
<br>
found use single RPM build.
<br>
<p>Thank you very much for the help.
<br>
<p>Regards,
<br>
<p>Jakub Nowacki
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20747/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20748.php">Jeff Squyres: "Re: [OMPI users] Setting RPATH for Open MPI libraries"</a>
<li><strong>Previous message:</strong> <a href="20746.php">Jeff Squyres: "Re: [OMPI users] Setting RPATH for Open MPI libraries"</a>
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
