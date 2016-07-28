<?
$subject_val = "Re: [OMPI users] Debian MPI -- mpirun missing";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 17 11:32:23 2008" -->
<!-- isoreceived="20081017153223" -->
<!-- sent="Sat, 18 Oct 2008 02:32:13 +1100" -->
<!-- isosent="20081017153213" -->
<!-- name="Terry Frankcombe" -->
<!-- email="terry_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Debian MPI -- mpirun missing" -->
<!-- id="1224257533.5841.20.camel_at_rscpc28.anu.edu.au" -->
<!-- inreplyto="48F8AC60.2090901_at_kuicr.kyoto-u.ac.jp" -->
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
<strong>Subject:</strong> Re: [OMPI users] Debian MPI -- mpirun missing<br>
<strong>From:</strong> Terry Frankcombe (<em>terry_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-17 11:32:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7013.php">Jeff Squyres: "Re: [OMPI users] The --with-sge option"</a>
<li><strong>Previous message:</strong> <a href="7011.php">Raymond Wan: "[OMPI users] Debian MPI -- mpirun missing"</a>
<li><strong>In reply to:</strong> <a href="7011.php">Raymond Wan: "[OMPI users] Debian MPI -- mpirun missing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7017.php">Ashley Pittman: "Re: [OMPI users] Debian MPI -- mpirun missing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Er, shouldn't this be in the Debian support list?  A correctly installed
<br>
OpenMPI will give you mpirun.  If their openmpi-bin package doesn't,
<br>
then surely it's broken?  (Or is there a straight openmpi package?)
<br>
<p><p><p>On Sat, 2008-10-18 at 00:16 +0900, Raymond Wan wrote:
<br>
<span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm very new to MPI and am trying to install it on to a Debian Etch 
</span><br>
<span class="quotelev1">&gt; system.  I did have mpich installed and I believe that is causing me 
</span><br>
<span class="quotelev1">&gt; problems.  I completely uninstalled it and then ran:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; update-alternatives --remove-all mpicc
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Then, I installed the following packages:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; libibverbs1 openmpi-bin openmpi-common openmpi-libs0 openmpi-dbg openmpi-dev
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And it now says:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;  &gt;&gt; update-alternatives --display mpicc
</span><br>
<span class="quotelev1">&gt; mpicc - status is auto.
</span><br>
<span class="quotelev1">&gt;  link currently points to /usr/bin/mpicc.openmpi
</span><br>
<span class="quotelev1">&gt; /usr/bin/mpicc.openmpi - priority 40
</span><br>
<span class="quotelev1">&gt;  slave mpif90: /usr/bin/mpif90.openmpi
</span><br>
<span class="quotelev1">&gt;  slave mpiCC: /usr/bin/mpic++.openmpi
</span><br>
<span class="quotelev1">&gt;  slave mpic++: /usr/bin/mpic++.openmpi
</span><br>
<span class="quotelev1">&gt;  slave mpif77: /usr/bin/mpif77.openmpi
</span><br>
<span class="quotelev1">&gt;  slave mpicxx: /usr/bin/mpic++.openmpi
</span><br>
<span class="quotelev1">&gt; Current `best' version is /usr/bin/mpicc.openmpi.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; which seems ok to me...  So, I tried to compile something (I had sample 
</span><br>
<span class="quotelev1">&gt; code from a book I purchased a while back, but for mpich), however, I 
</span><br>
<span class="quotelev1">&gt; can run the program as-is, but I think I should be running it with 
</span><br>
<span class="quotelev1">&gt; mpirun -- the FAQ suggests there is one?  But, there is no mpirun 
</span><br>
<span class="quotelev1">&gt; anywhere.  It's not in /usr/bin.  I updated the filename database 
</span><br>
<span class="quotelev1">&gt; (updatedb) and tried a &quot;locate mpirun&quot;, and I get only one hit:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /usr/include/openmpi/ompi/runtime/mpiruntime.h
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there a package that I neglected to install?  I did an &quot;aptitude 
</span><br>
<span class="quotelev1">&gt; search openmpi&quot; and installed everything listed...  :-)  Or perhaps I 
</span><br>
<span class="quotelev1">&gt; haven't removed all trace of mpich?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you in advance!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ray
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
<li><strong>Next message:</strong> <a href="7013.php">Jeff Squyres: "Re: [OMPI users] The --with-sge option"</a>
<li><strong>Previous message:</strong> <a href="7011.php">Raymond Wan: "[OMPI users] Debian MPI -- mpirun missing"</a>
<li><strong>In reply to:</strong> <a href="7011.php">Raymond Wan: "[OMPI users] Debian MPI -- mpirun missing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7017.php">Ashley Pittman: "Re: [OMPI users] Debian MPI -- mpirun missing"</a>
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
