<?
$subject_val = "[OMPI users] Building Open MPI with LSF";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  7 10:09:46 2013" -->
<!-- isoreceived="20130507140946" -->
<!-- sent="Tue, 7 May 2013 17:09:42 +0300" -->
<!-- isosent="20130507140942" -->
<!-- name="Andrey Rubshtein" -->
<!-- email="andrey.rubshtein_at_[hidden]" -->
<!-- subject="[OMPI users] Building Open MPI with LSF" -->
<!-- id="CAL2K=Q9CD2JsDjo2xypmLCtz_zKsS1c+rrT9DWbxiaarQTdQHw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Building Open MPI with LSF<br>
<strong>From:</strong> Andrey Rubshtein (<em>andrey.rubshtein_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-07 10:09:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21864.php">Duke Nguyen: "Re: [OMPI users] running openmpi with specified lib path"</a>
<li><strong>Previous message:</strong> <a href="21862.php">Ralph Castain: "Re: [OMPI users] running openmpi with specified lib path"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21875.php">Ralph Castain: "Re: [OMPI users] Building Open MPI with LSF"</a>
<li><strong>Reply:</strong> <a href="21875.php">Ralph Castain: "Re: [OMPI users] Building Open MPI with LSF"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi everyone,
<br>
<p>I want to install OpenMPI on LSF cluster in our organization. I am not
<br>
proficient with Linux/LSF, and some of my questions might be from lack of
<br>
understanding of the system, and not related to OpenMPI directly.
<br>
<p>So far I found these bits of information on the site of OpenMPI
<br>
<p>*1.* *OpenMPI support for 1.6 seems to be broken, and was fixed maybe in
<br>
1.7?*
<br>
<a href="http://www.open-mpi.org/community/lists/users/2013/03/21640.php">http://www.open-mpi.org/community/lists/users/2013/03/21640.php</a>
<br>
<p>*2. The installation on LSF is supposed to be easy:*
<br>
<a href="http://www.open-mpi.org/faq/?category=building#build-rte-lsf">http://www.open-mpi.org/faq/?category=building#build-rte-lsf</a>
<br>
<p><p>My questions are:
<br>
*
<br>
*
<br>
*1*. What is the latest stable version that is known to integrate in a
<br>
native way with LSF?
<br>
*2*. When building with LSF support, in what directory should I run the
<br>
./configure and makes scripts from? Should I be logined into one of the
<br>
hosts of LSF cluster?
<br>
*3*. Will these scripts copy openmpi shared libraries into each host on the
<br>
cluster?
<br>
*4*. Where will the mpi compiler be after the installation? What include
<br>
pathes and libraries should I add to my C++ project to compile a simple MPI
<br>
program?
<br>
<p>Andrey
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21863/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21864.php">Duke Nguyen: "Re: [OMPI users] running openmpi with specified lib path"</a>
<li><strong>Previous message:</strong> <a href="21862.php">Ralph Castain: "Re: [OMPI users] running openmpi with specified lib path"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21875.php">Ralph Castain: "Re: [OMPI users] Building Open MPI with LSF"</a>
<li><strong>Reply:</strong> <a href="21875.php">Ralph Castain: "Re: [OMPI users] Building Open MPI with LSF"</a>
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
