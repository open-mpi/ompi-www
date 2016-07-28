<?
$subject_val = "Re: [OMPI users] Axon BTL for OpenMPI?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 12 08:46:03 2008" -->
<!-- isoreceived="20081212134603" -->
<!-- sent="Fri, 12 Dec 2008 06:45:56 -0700" -->
<!-- isosent="20081212134556" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Axon BTL for OpenMPI?" -->
<!-- id="57392498-A30E-4781-B994-56223BCCE419_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4941A9E5.3070405_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] Axon BTL for OpenMPI?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-12 08:45:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7519.php">Marcus G. Daniels: "Re: [OMPI users] Axon BTL for OpenMPI?"</a>
<li><strong>Previous message:</strong> <a href="7517.php">Jeff Squyres: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
<li><strong>In reply to:</strong> <a href="7511.php">Marcus G. Daniels: "[OMPI users] Axon BTL for OpenMPI?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just to clarify: are you talking about using this on RoadRunner to  
<br>
move data from the Opteron to the Cell blades? Or are you talking  
<br>
about using OpenMPI on some other machine?
<br>
<p>If you are interested in RR, we should probably continue the  
<br>
discussion off-list. The short answer is that we have a mechanism for  
<br>
launching MPI procs on the cell blades, and there has indeed been work  
<br>
done to create a BTL so that OMPI can move data across between the  
<br>
Opterons and cells. However, it has never been added to the OMPI code  
<br>
base and/or fully completed to production quality.
<br>
<p>If there is interest in such capability, it can be done. We just  
<br>
hadn't heard any expressions of interest, and so it remains on the  
<br>
back burner.
<br>
<p>Ralph
<br>
<p>On Dec 11, 2008, at 5:01 PM, Marcus G. Daniels wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've heard some experimental work has been done to run OpenMPI over  
</span><br>
<span class="quotelev1">&gt; the Axon driver as found in IBM triblades.   Seems like that should  
</span><br>
<span class="quotelev1">&gt; work fine, as it's just another RDMA interface, no?  I'd like to use  
</span><br>
<span class="quotelev1">&gt; MPI for features like derived types, and moving around non-flat data.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Marcus Daniels
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
<li><strong>Next message:</strong> <a href="7519.php">Marcus G. Daniels: "Re: [OMPI users] Axon BTL for OpenMPI?"</a>
<li><strong>Previous message:</strong> <a href="7517.php">Jeff Squyres: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
<li><strong>In reply to:</strong> <a href="7511.php">Marcus G. Daniels: "[OMPI users] Axon BTL for OpenMPI?"</a>
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
