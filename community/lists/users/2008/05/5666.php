<?
$subject_val = "Re: [OMPI users] Open-MPI spawn problem";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 14 10:10:48 2008" -->
<!-- isoreceived="20080514141048" -->
<!-- sent="Wed, 14 May 2008 10:09:48 -0400" -->
<!-- isosent="20080514140948" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open-MPI spawn problem" -->
<!-- id="EC459334-BE0A-4EA1-B9D9-72665B9CF2E1_at_umich.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1210766198.13106.60.camel_at_jacobi.fy.chalmers.se" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open-MPI spawn problem<br>
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-14 10:09:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5667.php">Josh Hursey: "Re: [OMPI users] openmpi-1.3a1r18241  ompi-restart issue"</a>
<li><strong>Previous message:</strong> <a href="5665.php">Robert Rehammar: "[OMPI users] Open-MPI spawn problem"</a>
<li><strong>In reply to:</strong> <a href="5665.php">Robert Rehammar: "[OMPI users] Open-MPI spawn problem"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sounds like you didn't actually compile meep with MPI enabled.  Thus  
<br>
mpirun is launching four copies of the serial version of meep.  Note,  
<br>
i have never ran meep before.
<br>
<p>Brock Palen
<br>
www.umich.edu/~brockp
<br>
Center for Advanced Computing
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<p><p><p>On May 14, 2008, at 7:56 AM, Robert Rehammar wrote:
<br>
<span class="quotelev1">&gt; Dear Open-MPI users,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am new to MPI in general and also specifically to open-MPI. I am  
</span><br>
<span class="quotelev1">&gt; using
</span><br>
<span class="quotelev1">&gt; an MPI ready tool (meep) for computations. Now I have installed  
</span><br>
<span class="quotelev1">&gt; meep-mpi
</span><br>
<span class="quotelev1">&gt; compiled with latest version of open-mpi which I downloaded and
</span><br>
<span class="quotelev1">&gt; installed locally (there is also a system wide open-mpi version
</span><br>
<span class="quotelev1">&gt; available in my system) on a quad-processor PC. Now I have a, probably
</span><br>
<span class="quotelev1">&gt; trivial, problem when trying to run meep-mpi with
</span><br>
<span class="quotelev1">&gt; /local/bin/mpirun -np 4 /local/bin/meep-mpi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And that is that this command seems to spawn four copies of meep that
</span><br>
<span class="quotelev1">&gt; does not collaborate, they run the same thing all of them some how. I
</span><br>
<span class="quotelev1">&gt; have searched both the opmi and meep mail archives without finding
</span><br>
<span class="quotelev1">&gt; anything about this and would very much appreciate any input  
</span><br>
<span class="quotelev1">&gt; available!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; Robert Rehammar
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Robert Rehammar
</span><br>
<span class="quotelev1">&gt; PhD-Student
</span><br>
<span class="quotelev1">&gt; Applied Physics, Chalmers University of Technology
</span><br>
<span class="quotelev1">&gt; Department of Physics, G&#246;teborg University
</span><br>
<span class="quotelev1">&gt; SE-421 96 G&#246;teborg
</span><br>
<span class="quotelev1">&gt; Sweden
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tel +46 (0)31 772 3156
</span><br>
<span class="quotelev1">&gt; Fax +46 (0)31 416 984
</span><br>
<span class="quotelev1">&gt; Cel +46 (0)738 328834
</span><br>
<span class="quotelev1">&gt; Web fy.chalmers.se/~e9ravn
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5667.php">Josh Hursey: "Re: [OMPI users] openmpi-1.3a1r18241  ompi-restart issue"</a>
<li><strong>Previous message:</strong> <a href="5665.php">Robert Rehammar: "[OMPI users] Open-MPI spawn problem"</a>
<li><strong>In reply to:</strong> <a href="5665.php">Robert Rehammar: "[OMPI users] Open-MPI spawn problem"</a>
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
