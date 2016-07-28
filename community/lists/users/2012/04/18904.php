<?
$subject_val = "Re: [OMPI users] Error while loading shared libraries";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  2 06:24:38 2012" -->
<!-- isoreceived="20120402102438" -->
<!-- sent="Mon, 2 Apr 2012 12:24:23 +0200" -->
<!-- isosent="20120402102423" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error while loading shared libraries" -->
<!-- id="4630E26F-9742-469B-8BC6-DE6BDACBB981_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAFAE9jgvkzrQWiB7ZHyaLcsjYUf9VjEvEn9ja1SXypMLR-O6TA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Error while loading shared libraries<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-02 06:24:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18905.php">Nico Mittenzwey: "Re: [OMPI users] Help with multicore AMD machine performance"</a>
<li><strong>Previous message:</strong> <a href="18903.php">vladimir marjanovic: "[OMPI users] (no subject)"</a>
<li><strong>In reply to:</strong> <a href="18902.php">Rohan Deshpande: "Re: [OMPI users] Error while loading shared libraries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18914.php">Rohan Deshpande: "Re: [OMPI users] Error while loading shared libraries"</a>
<li><strong>Reply:</strong> <a href="18914.php">Rohan Deshpande: "Re: [OMPI users] Error while loading shared libraries"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 02.04.2012 um 09:56 schrieb Rohan Deshpande:
<br>
<p><span class="quotelev1">&gt; Yes, I am trying to run the program using multiple hosts. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The program executes fine but does not use any slaves when I run
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   mpirun -np 8 hello --hostfile slaves
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The program throws error saying shared libraries not found when I run
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   mpirun --hostfile slaves -np 8
</span><br>
<p>a) As Rayson mentioned: the libraries are available on the slaves?
<br>
<p>b) It might be necassary to export an LD_LIBRARY_PATH in you .bashrc or forward the variable by Open MPI to point to the location of the libraries.
<br>
<p>c) It could also work to create a static version of Open MPI by --enable-static --disable-shared and recompile the application.
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, Apr 2, 2012 at 2:52 PM, Rayson Ho &lt;raysonlogin_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; On Sun, Apr 1, 2012 at 11:27 PM, Rohan Deshpande &lt;rohand87_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;   error while loading shared libraries: libmpi.so.0: cannot open shared
</span><br>
<span class="quotelev2">&gt; &gt; object file no such object file: No such file or directory.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Were you trying to run the MPI program on a remote machine?? If you
</span><br>
<span class="quotelev1">&gt; are, then make sure that each machine has the libraries installed (or
</span><br>
<span class="quotelev1">&gt; you can install Open MPI on an NFS directory).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Rayson
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; =================================
</span><br>
<span class="quotelev1">&gt; Open Grid Scheduler / Grid Engine
</span><br>
<span class="quotelev1">&gt; <a href="http://gridscheduler.sourceforge.net/">http://gridscheduler.sourceforge.net/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Scalable Grid Engine Support Program
</span><br>
<span class="quotelev1">&gt; <a href="http://www.scalablelogic.com/">http://www.scalablelogic.com/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; When I run using - mpirun -np 1 ldd hello the following libraries are not
</span><br>
<span class="quotelev2">&gt; &gt; found
</span><br>
<span class="quotelev2">&gt; &gt;   1. libmpi.so.0
</span><br>
<span class="quotelev2">&gt; &gt;   2. libopen-rte.so.0
</span><br>
<span class="quotelev2">&gt; &gt;   3. libopen.pal.so.0
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am using openmpi version 1.4.5. Also PATH and LD_LIBRARY_PATH variables
</span><br>
<span class="quotelev2">&gt; &gt; are correctly set and 'which mpicc' returns correct path
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Any help would be highly appreciated.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best Regards,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ROHAN DESHPANDE  
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="18905.php">Nico Mittenzwey: "Re: [OMPI users] Help with multicore AMD machine performance"</a>
<li><strong>Previous message:</strong> <a href="18903.php">vladimir marjanovic: "[OMPI users] (no subject)"</a>
<li><strong>In reply to:</strong> <a href="18902.php">Rohan Deshpande: "Re: [OMPI users] Error while loading shared libraries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18914.php">Rohan Deshpande: "Re: [OMPI users] Error while loading shared libraries"</a>
<li><strong>Reply:</strong> <a href="18914.php">Rohan Deshpande: "Re: [OMPI users] Error while loading shared libraries"</a>
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
