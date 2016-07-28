<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Oct 18 15:59:58 2007" -->
<!-- isoreceived="20071018195958" -->
<!-- sent="Thu, 18 Oct 2007 14:59:27 -0500" -->
<!-- isosent="20071018195927" -->
<!-- name="Sajjad Tabib" -->
<!-- email="stabib_at_[hidden]" -->
<!-- subject="[OMPI devel] PML cm and heterogeneous support" -->
<!-- id="OFFBA2B8A2.2FF8510F-ON86257378.006C109D-86257378.006DD02B_at_us.ibm.com" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Sajjad Tabib (<em>stabib_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-18 15:59:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2469.php">Tim Prins: "Re: [OMPI devel] Use of orte_pointer_array in openib and udapl btls"</a>
<li><strong>Previous message:</strong> <a href="2467.php">Terry Dontje: "Re: [OMPI devel] Hybrid examples"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2496.php">Jeff Squyres: "Re: [OMPI devel] PML cm and heterogeneous support"</a>
<li><strong>Reply:</strong> <a href="2496.php">Jeff Squyres: "Re: [OMPI devel] PML cm and heterogeneous support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I am tried to run an MPI program in a heterogeneous environment using the 
<br>
pml cm component. However, open mpi returned with an error message 
<br>
indicating that PML add procs returned &quot;Not supported&quot;. I dived into the 
<br>
cm code to see what was wrong and I came upon the code below, which 
<br>
basically shows that if the processes are running on different 
<br>
architectures, then return &quot;not supported&quot;. Now, I'm wondering whether my 
<br>
interpretation is correct or not. Is it true that the cm component does 
<br>
not support a heterogeneous environment? If so, will the developers 
<br>
support this in the future? How could I get around this while still using 
<br>
the cm component? What will happen if I rebuilt openmpi without these 
<br>
statements?
<br>
<p>I would appreciate your help.
<br>
<p>&nbsp;Code:
<br>
<p>mca_pml_cm_add_procs(....){
<br>
<p>#if OMPI_ENABLE_HETEROGENEOUS_SUPPORT
<br>
107     for (i = 0 ; i &lt; nprocs ; ++i) {
<br>
108         if (procs[i]-&gt;proc_arch != ompi_proc_local()-&gt;proc_arch) {
<br>
109             return OMPI_ERR_NOT_SUPPORTED;
<br>
110         }
<br>
111     }
<br>
112 #endif
<br>
.
<br>
.
<br>
.
<br>
}
<br>
<p>Sajjad Tabib
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-2468/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2469.php">Tim Prins: "Re: [OMPI devel] Use of orte_pointer_array in openib and udapl btls"</a>
<li><strong>Previous message:</strong> <a href="2467.php">Terry Dontje: "Re: [OMPI devel] Hybrid examples"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2496.php">Jeff Squyres: "Re: [OMPI devel] PML cm and heterogeneous support"</a>
<li><strong>Reply:</strong> <a href="2496.php">Jeff Squyres: "Re: [OMPI devel] PML cm and heterogeneous support"</a>
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
