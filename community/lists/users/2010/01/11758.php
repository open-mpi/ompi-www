<?
$subject_val = "Re: [OMPI users] configure script fails";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 13 20:06:41 2010" -->
<!-- isoreceived="20100114010641" -->
<!-- sent="Wed, 13 Jan 2010 17:06:35 -0800" -->
<!-- isosent="20100114010635" -->
<!-- name="Doug Reeder" -->
<!-- email="dlr1_at_[hidden]" -->
<!-- subject="Re: [OMPI users] configure script fails" -->
<!-- id="5F6A8694-0AB4-4DC3-B14B-2D67F227F460_at_cox.net" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="BD7CDAD5-8550-4DA9-B612-93D5E7035AAC_at_fu-berlin.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] configure script fails<br>
<strong>From:</strong> Doug Reeder (<em>dlr1_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-13 20:06:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11759.php">Ralph Castain: "Re: [OMPI users] OpenMPI less fast than MPICH"</a>
<li><strong>Previous message:</strong> <a href="11757.php">Aaron Knister: "Re: [OMPI users] OpenMPI less fast than MPICH"</a>
<li><strong>In reply to:</strong> <a href="11756.php">von Tycowicz, Christoph: "[OMPI users] configure script fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11770.php">von Tycowicz, Christoph: "[OMPI users] configure script fails - fixed?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Christoph,
<br>
<p>It looks like you need to add -L/usr/local/lib to the fortran and f90  
<br>
flags, either on the configure input or in the environment variables,  
<br>
so that the loader can find libgfortran.
<br>
<p>Doug
<br>
On Jan 13, 2010, at 4:09 PM, von Tycowicz, Christoph wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; when running the configure script it breaks with:
</span><br>
<span class="quotelev1">&gt; configure: error: Could not run a simple Fortran 77 program.   
</span><br>
<span class="quotelev1">&gt; Aborting.
</span><br>
<span class="quotelev1">&gt; (logs with details attached)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't know how to interpret this error since I already  
</span><br>
<span class="quotelev1">&gt; successfully compiled fortran code using these compilers(gcc/ 
</span><br>
<span class="quotelev1">&gt; gfortran 4.5).
</span><br>
<span class="quotelev1">&gt; If would be really grateful for any clues on this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; best regards
</span><br>
<span class="quotelev1">&gt; Christoph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;logs.tar.gz&gt;_______________________________________________
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
<li><strong>Next message:</strong> <a href="11759.php">Ralph Castain: "Re: [OMPI users] OpenMPI less fast than MPICH"</a>
<li><strong>Previous message:</strong> <a href="11757.php">Aaron Knister: "Re: [OMPI users] OpenMPI less fast than MPICH"</a>
<li><strong>In reply to:</strong> <a href="11756.php">von Tycowicz, Christoph: "[OMPI users] configure script fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11770.php">von Tycowicz, Christoph: "[OMPI users] configure script fails - fixed?"</a>
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
