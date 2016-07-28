<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct 24 23:05:00 2007" -->
<!-- isoreceived="20071025030500" -->
<!-- sent="Wed, 24 Oct 2007 21:04:52 -0600" -->
<!-- isosent="20071025030452" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] PML cm and heterogeneous support" -->
<!-- id="6F61A6BB-87ED-41F4-A252-46CE988D28B1_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="9A93060F-2AAC-43CC-886C-0708A618E606_at_cisco.com" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-24 23:04:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2498.php">Gleb Natapov: "Re: [OMPI devel] RFC: Add &quot;connect&quot; field to openib BTL INI file"</a>
<li><strong>Previous message:</strong> <a href="2496.php">Jeff Squyres: "Re: [OMPI devel] PML cm and heterogeneous support"</a>
<li><strong>In reply to:</strong> <a href="2496.php">Jeff Squyres: "Re: [OMPI devel] PML cm and heterogeneous support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2502.php">Sajjad Tabib: "Re: [OMPI devel] PML cm and heterogeneous support"</a>
<li><strong>Reply:</strong> <a href="2502.php">Sajjad Tabib: "Re: [OMPI devel] PML cm and heterogeneous support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
No, it's because the CM PML was never designed to be used in a  
<br>
heterogeneous environment :).  While the MX BTL does support  
<br>
heterogeneous operations (at one point, I believe I even had it  
<br>
working), none of the MTLs have ever been tested in heterogeneous  
<br>
environments and it's known the datatype usage in the CM PML won't  
<br>
support heterogeneous operation.
<br>
<p>Brian
<br>
<p>On Oct 24, 2007, at 6:21 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; George / Patrick / Rich / Christian --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any idea why that's there?  Is that because portals, MX, and PSM all
</span><br>
<span class="quotelev1">&gt; require homogeneous environments?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 18, 2007, at 3:59 PM, Sajjad Tabib wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am tried to run an MPI program in a heterogeneous environment
</span><br>
<span class="quotelev2">&gt;&gt; using the pml cm component. However, open mpi returned with an
</span><br>
<span class="quotelev2">&gt;&gt; error message indicating that PML add procs returned &quot;Not
</span><br>
<span class="quotelev2">&gt;&gt; supported&quot;. I dived into the cm code to see what was wrong and I
</span><br>
<span class="quotelev2">&gt;&gt; came upon the code below, which basically shows that if the
</span><br>
<span class="quotelev2">&gt;&gt; processes are running on different architectures, then return &quot;not
</span><br>
<span class="quotelev2">&gt;&gt; supported&quot;. Now, I'm wondering whether my interpretation is correct
</span><br>
<span class="quotelev2">&gt;&gt; or not. Is it true that the cm component does not support a
</span><br>
<span class="quotelev2">&gt;&gt; heterogeneous environment? If so, will the developers support this
</span><br>
<span class="quotelev2">&gt;&gt; in the future? How could I get around this while still using the cm
</span><br>
<span class="quotelev2">&gt;&gt; component? What will happen if I rebuilt openmpi without these
</span><br>
<span class="quotelev2">&gt;&gt; statements?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I would appreciate your help.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Code:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mca_pml_cm_add_procs(....){
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #if OMPI_ENABLE_HETEROGENEOUS_SUPPORT
</span><br>
<span class="quotelev2">&gt;&gt; 107     for (i = 0 ; i &lt; nprocs ; ++i) {
</span><br>
<span class="quotelev2">&gt;&gt; 108         if (procs[i]-&gt;proc_arch != ompi_proc_local()- 
</span><br>
<span class="quotelev3">&gt;&gt; &gt;proc_arch) {
</span><br>
<span class="quotelev2">&gt;&gt; 109             return OMPI_ERR_NOT_SUPPORTED;
</span><br>
<span class="quotelev2">&gt;&gt; 110         }
</span><br>
<span class="quotelev2">&gt;&gt; 111     }
</span><br>
<span class="quotelev2">&gt;&gt; 112 #endif
</span><br>
<span class="quotelev2">&gt;&gt; .
</span><br>
<span class="quotelev2">&gt;&gt; .
</span><br>
<span class="quotelev2">&gt;&gt; .
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sajjad Tabib
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2498.php">Gleb Natapov: "Re: [OMPI devel] RFC: Add &quot;connect&quot; field to openib BTL INI file"</a>
<li><strong>Previous message:</strong> <a href="2496.php">Jeff Squyres: "Re: [OMPI devel] PML cm and heterogeneous support"</a>
<li><strong>In reply to:</strong> <a href="2496.php">Jeff Squyres: "Re: [OMPI devel] PML cm and heterogeneous support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2502.php">Sajjad Tabib: "Re: [OMPI devel] PML cm and heterogeneous support"</a>
<li><strong>Reply:</strong> <a href="2502.php">Sajjad Tabib: "Re: [OMPI devel] PML cm and heterogeneous support"</a>
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
