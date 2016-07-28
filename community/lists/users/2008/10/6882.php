<?
$subject_val = "Re: [OMPI users] OMPI link error with petsc 2.3.3";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct  7 11:44:52 2008" -->
<!-- isoreceived="20081007154452" -->
<!-- sent="Tue, 07 Oct 2008 11:44:34 -0400" -->
<!-- isosent="20081007154434" -->
<!-- name="Terry Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI link error with petsc 2.3.3" -->
<!-- id="48EB83E2.4090101_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="mailman.2889.1223392161.16379.users_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] OMPI link error with petsc 2.3.3<br>
<strong>From:</strong> Terry Dontje (<em>Terry.Dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-07 11:44:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6883.php">Jeff Squyres: "Re: [OMPI users] Problem launching onto Bourne shell"</a>
<li><strong>Previous message:</strong> <a href="6881.php">Rolf Vandevaart: "Re: [OMPI users] OMPI link error with petsc 2.3.3"</a>
<li><strong>Maybe in reply to:</strong> <a href="6878.php">Yann JOBIC: "[OMPI users] OMPI link error with petsc 2.3.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6884.php">Yann JOBIC: "Re: [OMPI users] OMPI link error with petsc 2.3.3"</a>
<li><strong>Reply:</strong> <a href="6884.php">Yann JOBIC: "Re: [OMPI users] OMPI link error with petsc 2.3.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yann,
<br>
<p>I'll take a look at this it looks like there definitely is an issue between our libmpi.so and libmpi_f90.so files.
<br>
<p>I noticed that the linkage message is a warning does the code actually fail when running?
<br>
<p>--td
<br>
<p>Date: Tue, 07 Oct 2008 16:55:14 +0200
<br>
From: &quot;Yann JOBIC&quot; &lt;jobic_at_[hidden]&gt;
<br>
Subject: [OMPI users] OMPI link error with petsc 2.3.3
<br>
To: Open MPI Users &lt;users_at_[hidden]&gt;
<br>
Message-ID: &lt;48EB7852.6070404_at_[hidden]&gt;
<br>
Content-Type: text/plain; charset=ISO-8859-1; format=flowed
<br>
<p>Hello,
<br>
<p>I'm using openmpi 1.3r19400 (ClusterTools 8.0), with sun studio 12, and 
<br>
solaris 10u5
<br>
<p>I've got this error when linking a PETSc code :
<br>
ld: warning: symbol `mpi_fortran_status_ignore_' has differing sizes:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(file /opt/SUNWhpc/HPC8.0/lib/amd64/libmpi.so value=0x8; file 
<br>
/opt/SUNWhpc/HPC8.0/lib/amd64/libmpi_f90.so value=0x14);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/opt/SUNWhpc/HPC8.0/lib/amd64/libmpi.so definition taken
<br>
<p><p>Isn't it very strange ?
<br>
<p>Have you got any idea on the way to solve it ?
<br>
<p>Many thanks,
<br>
<p>Yann
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6883.php">Jeff Squyres: "Re: [OMPI users] Problem launching onto Bourne shell"</a>
<li><strong>Previous message:</strong> <a href="6881.php">Rolf Vandevaart: "Re: [OMPI users] OMPI link error with petsc 2.3.3"</a>
<li><strong>Maybe in reply to:</strong> <a href="6878.php">Yann JOBIC: "[OMPI users] OMPI link error with petsc 2.3.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6884.php">Yann JOBIC: "Re: [OMPI users] OMPI link error with petsc 2.3.3"</a>
<li><strong>Reply:</strong> <a href="6884.php">Yann JOBIC: "Re: [OMPI users] OMPI link error with petsc 2.3.3"</a>
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
