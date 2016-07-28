<?
$subject_val = "Re: [OMPI users] OpenMPI Fortran with Intel 15 and OpenMP";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug  7 12:39:20 2015" -->
<!-- isoreceived="20150807163920" -->
<!-- sent="Fri, 7 Aug 2015 18:39:10 +0200" -->
<!-- isosent="20150807163910" -->
<!-- name="Thomas Jahns" -->
<!-- email="jahns_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI Fortran with Intel 15 and OpenMP" -->
<!-- id="6FEDA92A-61FB-4EDB-8B8E-B3376AD8E6AB_at_dkrz.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20150807123621.GH3622_at_pauling.cmth.ph.ic.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI Fortran with Intel 15 and OpenMP<br>
<strong>From:</strong> Thomas Jahns (<em>jahns_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-07 12:39:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27410.php">kishor sharma: "[OMPI users] Mumps Parallel version hanging with OpenMPI 1.8.1"</a>
<li><strong>Previous message:</strong> <a href="27408.php">James Spencer: "[OMPI users] OpenMPI Fortran with Intel 15 and OpenMP"</a>
<li><strong>In reply to:</strong> <a href="27408.php">James Spencer: "[OMPI users] OpenMPI Fortran with Intel 15 and OpenMP"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27413.php">James Spencer: "Re: [OMPI users] OpenMPI Fortran with Intel 15 and OpenMP"</a>
<li><strong>Reply:</strong> <a href="27413.php">James Spencer: "Re: [OMPI users] OpenMPI Fortran with Intel 15 and OpenMP"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>On Aug 7, 2015, at 14:36 , James Spencer wrote:
<br>
<span class="quotelev1">&gt; The Intel forum thread alleges that this is (at least for MVAPICH2)  
</span><br>
<span class="quotelev1">&gt; because incorrect Intel runtime sources are included in an MPI
</span><br>
<span class="quotelev1">&gt; library, which is backed up by looking at the OpenMPI and Intel  
</span><br>
<span class="quotelev1">&gt; libraries:
</span><br>
<p><p>this is already addressed, see [1]. It's meant to be fixed in 2015  
<br>
Update 5, but Georg gave some hints how to work around this with  
<br>
earlier compiler versions by changing LDFLAGS/LIBS (although I guess  
<br>
one needs to decide on whether to link libraries statically or  
<br>
dynamically).
<br>
<p>Ciao, Thomas
<br>
<p>[1] <a href="https://software.intel.com/en-us/forums/topic/549547">https://software.intel.com/en-us/forums/topic/549547</a>
<br>
<pre>
-- 
Thomas Jahns
DKRZ GmbH, Department: Application software
Deutsches Klimarechenzentrum
Bundesstra&#223;e 45a
D-20146 Hamburg
Phone: +49-40-460094-151
Fax: +49-40-460094-270
Email: Thomas Jahns &lt;jahns_at_[hidden]&gt;
</pre>
<p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27409/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27409/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27410.php">kishor sharma: "[OMPI users] Mumps Parallel version hanging with OpenMPI 1.8.1"</a>
<li><strong>Previous message:</strong> <a href="27408.php">James Spencer: "[OMPI users] OpenMPI Fortran with Intel 15 and OpenMP"</a>
<li><strong>In reply to:</strong> <a href="27408.php">James Spencer: "[OMPI users] OpenMPI Fortran with Intel 15 and OpenMP"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27413.php">James Spencer: "Re: [OMPI users] OpenMPI Fortran with Intel 15 and OpenMP"</a>
<li><strong>Reply:</strong> <a href="27413.php">James Spencer: "Re: [OMPI users] OpenMPI Fortran with Intel 15 and OpenMP"</a>
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
