<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct 24 20:21:44 2007" -->
<!-- isoreceived="20071025002144" -->
<!-- sent="Wed, 24 Oct 2007 20:21:35 -0400" -->
<!-- isosent="20071025002135" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] PML cm and heterogeneous support" -->
<!-- id="9A93060F-2AAC-43CC-886C-0708A618E606_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="OFFBA2B8A2.2FF8510F-ON86257378.006C109D-86257378.006DD02B_at_us.ibm.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-24 20:21:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2497.php">Brian Barrett: "Re: [OMPI devel] PML cm and heterogeneous support"</a>
<li><strong>Previous message:</strong> <a href="2495.php">Jeff Squyres: "[OMPI devel] RFC: Add &quot;connect&quot; field to openib BTL INI file"</a>
<li><strong>In reply to:</strong> <a href="2468.php">Sajjad Tabib: "[OMPI devel] PML cm and heterogeneous support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2497.php">Brian Barrett: "Re: [OMPI devel] PML cm and heterogeneous support"</a>
<li><strong>Reply:</strong> <a href="2497.php">Brian Barrett: "Re: [OMPI devel] PML cm and heterogeneous support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George / Patrick / Rich / Christian --
<br>
<p>Any idea why that's there?  Is that because portals, MX, and PSM all  
<br>
require homogeneous environments?
<br>
<p><p>On Oct 18, 2007, at 3:59 PM, Sajjad Tabib wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am tried to run an MPI program in a heterogeneous environment  
</span><br>
<span class="quotelev1">&gt; using the pml cm component. However, open mpi returned with an  
</span><br>
<span class="quotelev1">&gt; error message indicating that PML add procs returned &quot;Not  
</span><br>
<span class="quotelev1">&gt; supported&quot;. I dived into the cm code to see what was wrong and I  
</span><br>
<span class="quotelev1">&gt; came upon the code below, which basically shows that if the  
</span><br>
<span class="quotelev1">&gt; processes are running on different architectures, then return &quot;not  
</span><br>
<span class="quotelev1">&gt; supported&quot;. Now, I'm wondering whether my interpretation is correct  
</span><br>
<span class="quotelev1">&gt; or not. Is it true that the cm component does not support a  
</span><br>
<span class="quotelev1">&gt; heterogeneous environment? If so, will the developers support this  
</span><br>
<span class="quotelev1">&gt; in the future? How could I get around this while still using the cm  
</span><br>
<span class="quotelev1">&gt; component? What will happen if I rebuilt openmpi without these  
</span><br>
<span class="quotelev1">&gt; statements?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I would appreciate your help.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Code:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mca_pml_cm_add_procs(....){
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #if OMPI_ENABLE_HETEROGENEOUS_SUPPORT
</span><br>
<span class="quotelev1">&gt; 107     for (i = 0 ; i &lt; nprocs ; ++i) {
</span><br>
<span class="quotelev1">&gt; 108         if (procs[i]-&gt;proc_arch != ompi_proc_local()-&gt;proc_arch) {
</span><br>
<span class="quotelev1">&gt; 109             return OMPI_ERR_NOT_SUPPORTED;
</span><br>
<span class="quotelev1">&gt; 110         }
</span><br>
<span class="quotelev1">&gt; 111     }
</span><br>
<span class="quotelev1">&gt; 112 #endif
</span><br>
<span class="quotelev1">&gt; .
</span><br>
<span class="quotelev1">&gt; .
</span><br>
<span class="quotelev1">&gt; .
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sajjad Tabib
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2497.php">Brian Barrett: "Re: [OMPI devel] PML cm and heterogeneous support"</a>
<li><strong>Previous message:</strong> <a href="2495.php">Jeff Squyres: "[OMPI devel] RFC: Add &quot;connect&quot; field to openib BTL INI file"</a>
<li><strong>In reply to:</strong> <a href="2468.php">Sajjad Tabib: "[OMPI devel] PML cm and heterogeneous support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2497.php">Brian Barrett: "Re: [OMPI devel] PML cm and heterogeneous support"</a>
<li><strong>Reply:</strong> <a href="2497.php">Brian Barrett: "Re: [OMPI devel] PML cm and heterogeneous support"</a>
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
