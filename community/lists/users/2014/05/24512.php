<?
$subject_val = "Re: [OMPI users] Enable PMI build";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 29 13:49:51 2014" -->
<!-- isoreceived="20140529174951" -->
<!-- sent="Thu, 29 May 2014 13:49:46 -0400" -->
<!-- isosent="20140529174946" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Enable PMI build" -->
<!-- id="E730B825-0811-480D-A159-0C65B65E21F5_at_umich.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AE45F2F55FE69B4F99BB3455E821D7153A8BDC55_at_ECS-EXG-P-MB07.win.lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] Enable PMI build<br>
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-29 13:49:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24513.php">Fernando Cruz: "[OMPI users] MPI installation problem"</a>
<li><strong>Previous message:</strong> <a href="24511.php">Joshua Ladd: "Re: [OMPI users] intel compiler and openmpi 1.8.1"</a>
<li><strong>In reply to:</strong> <a href="24428.php">Hjelm, Nathan T: "Re: [OMPI users] Enable PMI build"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ok I have dug into this more.  Is this PMI the Slurm process manager?
<br>
<p>To use OpenMPI on Phi just build OPenMPI for it?  Does that mean I need to add CFLAGS FCFLAGS   -mmic ?
<br>
<p>How does one go about doing multi-phi MPI code?
<br>
<p>Brock Palen
<br>
www.umich.edu/~brockp
<br>
CAEN Advanced Computing
<br>
XSEDE Campus Champion
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<p><p><p>On May 16, 2014, at 5:40 PM, Hjelm, Nathan T &lt;hjelmn_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; PMI != phi. If you want to build for phi you will have to make two builds. One for the host and one for the phi.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Take a look in contrib/platform/lanl/darwin to get an idea of how to build for phi. The optimized-mic has most of what is needed to build a Phi version of Open MPI.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I usually run:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mkdir build-host ; cd build-host ; ../configure --prefix=path_to_host_build --with-platform=../contrib/platform/lanl/darwin/optimized ; make install
</span><br>
<span class="quotelev1">&gt; cd ../
</span><br>
<span class="quotelev1">&gt; mkdir build-pbi ; cd build-phi ; ../configure --prefix=path_to_phi_build --with-platform=..//contrib/platform/lanl/darwin/optimized-mic ; make install
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I then modify the share/openmpi/mpicc-wrapper-data.txt to add a section for -mmic and have it point to the phi build. This is a bit complicated but it works well since mpicc -mmic with then use the phi libraries. I can give you a sample modified wrapper if you like.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Nathan Hjelm
</span><br>
<span class="quotelev1">&gt; HPC-5, LANL
</span><br>
<span class="quotelev1">&gt; ________________________________________
</span><br>
<span class="quotelev1">&gt; From: users [users-bounces_at_[hidden]] on behalf of Brock Palen [brockp_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; Sent: Friday, May 16, 2014 3:31 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] Enable PMI build
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We are looking at enabling the use of OpenMPI on our Xeon Phis,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; One comment, i'm not sure that most users will know that pmi means phi,
</span><br>
<span class="quotelev1">&gt;  --with-pmi(=DIR)        Build PMI support, optionally adding DIR to the
</span><br>
<span class="quotelev1">&gt;                          search path (default: no)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; how about:
</span><br>
<span class="quotelev1">&gt;  --with-pmi(=DIR)        Build PMI support for the Xeon Phi/MIC, optionally adding DIR to the
</span><br>
<span class="quotelev1">&gt;                          search path (default: no)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Second, digging in my mpss install I am not finding pmi.h or anything like that that searching the mailing list shows. We recently found that Intel made a lot of changes to the MPSS stack and this Phi stuff is very infantile at the moment so minimal (decent) documentation,  does anyone know what current package provides PMI  for the Xeon Phi?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brock Palen
</span><br>
<span class="quotelev1">&gt; www.umich.edu/~brockp
</span><br>
<span class="quotelev1">&gt; CAEN Advanced Computing
</span><br>
<span class="quotelev1">&gt; XSEDE Campus Champion
</span><br>
<span class="quotelev1">&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev1">&gt; (734)936-1985
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
<p><p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24512/signature.asc">Message signed with OpenPGP using GPGMail</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24513.php">Fernando Cruz: "[OMPI users] MPI installation problem"</a>
<li><strong>Previous message:</strong> <a href="24511.php">Joshua Ladd: "Re: [OMPI users] intel compiler and openmpi 1.8.1"</a>
<li><strong>In reply to:</strong> <a href="24428.php">Hjelm, Nathan T: "Re: [OMPI users] Enable PMI build"</a>
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
