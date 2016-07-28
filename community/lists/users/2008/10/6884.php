<?
$subject_val = "Re: [OMPI users] OMPI link error with petsc 2.3.3";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct  7 12:21:26 2008" -->
<!-- isoreceived="20081007162126" -->
<!-- sent="Tue, 07 Oct 2008 18:21:21 +0200" -->
<!-- isosent="20081007162121" -->
<!-- name="Yann JOBIC" -->
<!-- email="jobic_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI link error with petsc 2.3.3" -->
<!-- id="48EB8C81.7060600_at_polytech.univ-mrs.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="48EB83E2.4090101_at_sun.com" -->
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
<strong>From:</strong> Yann JOBIC (<em>jobic_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-07 12:21:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6885.php">Hahn Kim: "Re: [OMPI users] Problem launching onto Bourne shell"</a>
<li><strong>Previous message:</strong> <a href="6883.php">Jeff Squyres: "Re: [OMPI users] Problem launching onto Bourne shell"</a>
<li><strong>In reply to:</strong> <a href="6882.php">Terry Dontje: "Re: [OMPI users] OMPI link error with petsc 2.3.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6893.php">Terry Dontje: "Re: [OMPI users] OMPI link error with petsc 2.3.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Terry Dontje wrote:
<br>
<span class="quotelev1">&gt; Yann,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'll take a look at this it looks like there definitely is an issue 
</span><br>
<span class="quotelev1">&gt; between our libmpi.so and libmpi_f90.so files.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I noticed that the linkage message is a warning does the code actually 
</span><br>
<span class="quotelev1">&gt; fail when running?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --td
</span><br>
Thanks for you fast answer.
<br>
No, the program is running and gives some good results (so far, for some 
<br>
small cases).
<br>
However i don't know if we'll have some strange behavior in some cases.
<br>
<p>Yann
<br>
<p><span class="quotelev1">&gt; Date: Tue, 07 Oct 2008 16:55:14 +0200
</span><br>
<span class="quotelev1">&gt; From: &quot;Yann JOBIC&quot; &lt;jobic_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] OMPI link error with petsc 2.3.3
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;48EB7852.6070404_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=ISO-8859-1; format=flowed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm using openmpi 1.3r19400 (ClusterTools 8.0), with sun studio 12, 
</span><br>
<span class="quotelev1">&gt; and solaris 10u5
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've got this error when linking a PETSc code :
</span><br>
<span class="quotelev1">&gt; ld: warning: symbol `mpi_fortran_status_ignore_' has differing sizes:
</span><br>
<span class="quotelev1">&gt;        (file /opt/SUNWhpc/HPC8.0/lib/amd64/libmpi.so value=0x8; file 
</span><br>
<span class="quotelev1">&gt; /opt/SUNWhpc/HPC8.0/lib/amd64/libmpi_f90.so value=0x14);
</span><br>
<span class="quotelev1">&gt;        /opt/SUNWhpc/HPC8.0/lib/amd64/libmpi.so definition taken
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Isn't it very strange ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Have you got any idea on the way to solve it ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Many thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yann
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
<p><p><pre>
-- 
___________________________
Yann JOBIC
HPC engineer
Polytech Marseille DME
IUSTI-CNRS UMR 6595
Technop&#244;le de Ch&#226;teau Gombert
5 rue Enrico Fermi
13453 Marseille cedex 13
Tel : (33) 4 91 10 69 39
  ou  (33) 4 91 10 69 43
Fax : (33) 4 91 10 69 69 
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6885.php">Hahn Kim: "Re: [OMPI users] Problem launching onto Bourne shell"</a>
<li><strong>Previous message:</strong> <a href="6883.php">Jeff Squyres: "Re: [OMPI users] Problem launching onto Bourne shell"</a>
<li><strong>In reply to:</strong> <a href="6882.php">Terry Dontje: "Re: [OMPI users] OMPI link error with petsc 2.3.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6893.php">Terry Dontje: "Re: [OMPI users] OMPI link error with petsc 2.3.3"</a>
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
