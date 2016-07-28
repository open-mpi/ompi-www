<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Oct 25 12:13:32 2007" -->
<!-- isoreceived="20071025161332" -->
<!-- sent="Thu, 25 Oct 2007 12:13:30 -0400 (EDT)" -->
<!-- isosent="20071025161330" -->
<!-- name="Brian W. Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] PML cm and heterogeneous support" -->
<!-- id="Pine.LNX.4.64.0710251210100.9690_at_milliways.osl.iu.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="OF04ACA4E6.54346F1C-ON8625737F.0055C03E-8625737F.0058A8D2_at_us.ibm.com" -->
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
<strong>From:</strong> Brian W. Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-25 12:13:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2504.php">Jeff Squyres: "Re: [OMPI devel] RFC: Add &quot;connect&quot; field to openib BTL INI file"</a>
<li><strong>Previous message:</strong> <a href="2502.php">Sajjad Tabib: "Re: [OMPI devel] PML cm and heterogeneous support"</a>
<li><strong>In reply to:</strong> <a href="2502.php">Sajjad Tabib: "Re: [OMPI devel] PML cm and heterogeneous support"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm surprised that ompi_mtl_datatype_{pack, unpack} are properly handling 
<br>
the heterogeneous issues - I certainly didn't take that into account when 
<br>
I wrote them.  The CM code has never been audited for heterogeneous 
<br>
safety, which is why there was protection at that level for not running in 
<br>
heterogeneous environments.  The various MTLs likewise have not been 
<br>
audited for heterogeneous safety, nor has the mtl base datatype 
<br>
manipulation functions.
<br>
<p>If someone wanted, they could do such an audit, push the heterogeneous 
<br>
disabling code down to the MTLs, and figure out what to do with the 
<br>
datatype usage.  The CM code likely doesn't do anything 
<br>
heterogeneous-evil, but I can't say for sure.
<br>
<p>Brian
<br>
<p>On Thu, 25 Oct 2007, Sajjad Tabib wrote:
<br>
<p><span class="quotelev1">&gt; Hi Brian,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have actually created a new MTL, in which I have added heterogeneous
</span><br>
<span class="quotelev1">&gt; support. To experiment whether CM worked in this environment, I took out
</span><br>
<span class="quotelev1">&gt; the safeguards that prevented one to use CM in a heterogeneous
</span><br>
<span class="quotelev1">&gt; environment. Miraculously, things have been working so far. I haven't
</span><br>
<span class="quotelev1">&gt; examined data integrity to an extent that I could say everything works
</span><br>
<span class="quotelev1">&gt; perfectly, but with MPI_INTS, I do not have any endian problems. Now,
</span><br>
<span class="quotelev1">&gt; based on my initial tests, I have came to the understanding that the PML
</span><br>
<span class="quotelev1">&gt; CM safeguard against heterogeneous environments was a mechanism to prevent
</span><br>
<span class="quotelev1">&gt; users from using existing MTLs. But, if an MTL supports heterogeneous
</span><br>
<span class="quotelev1">&gt; communication, then it is possible to use the CM component. What is your
</span><br>
<span class="quotelev1">&gt; take on this?
</span><br>
<span class="quotelev1">&gt; Anyways, going back to the datatype usage. When you say that: &quot;it's known
</span><br>
<span class="quotelev1">&gt; the datatype usage in the CM PML won't support heterogeneous operation&quot;
</span><br>
<span class="quotelev1">&gt; could you please breifly explain this in more detail? I have been using
</span><br>
<span class="quotelev1">&gt; ompi_mtl_datatype_pack and ompi_mtl_datatype_unpack, which use
</span><br>
<span class="quotelev1">&gt; ompi_convertor_pack and ompi_convertor_unpack, for data packing. Do you
</span><br>
<span class="quotelev1">&gt; mean that these functions will not work correctly?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank You,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sajjad Tabib
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian Barrett &lt;brbarret_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Sent by: devel-bounces_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 10/24/07 10:04 PM
</span><br>
<span class="quotelev1">&gt; Please respond to
</span><br>
<span class="quotelev1">&gt; Open MPI Developers &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To
</span><br>
<span class="quotelev1">&gt; Open MPI Developers &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; cc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Subject
</span><br>
<span class="quotelev1">&gt; Re: [OMPI devel] PML cm and heterogeneous support
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No, it's because the CM PML was never designed to be used in a
</span><br>
<span class="quotelev1">&gt; heterogeneous environment :).  While the MX BTL does support
</span><br>
<span class="quotelev1">&gt; heterogeneous operations (at one point, I believe I even had it
</span><br>
<span class="quotelev1">&gt; working), none of the MTLs have ever been tested in heterogeneous
</span><br>
<span class="quotelev1">&gt; environments and it's known the datatype usage in the CM PML won't
</span><br>
<span class="quotelev1">&gt; support heterogeneous operation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 24, 2007, at 6:21 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; George / Patrick / Rich / Christian --
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any idea why that's there?  Is that because portals, MX, and PSM all
</span><br>
<span class="quotelev2">&gt;&gt; require homogeneous environments?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 18, 2007, at 3:59 PM, Sajjad Tabib wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am tried to run an MPI program in a heterogeneous environment
</span><br>
<span class="quotelev3">&gt;&gt;&gt; using the pml cm component. However, open mpi returned with an
</span><br>
<span class="quotelev3">&gt;&gt;&gt; error message indicating that PML add procs returned &quot;Not
</span><br>
<span class="quotelev3">&gt;&gt;&gt; supported&quot;. I dived into the cm code to see what was wrong and I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; came upon the code below, which basically shows that if the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processes are running on different architectures, then return &quot;not
</span><br>
<span class="quotelev3">&gt;&gt;&gt; supported&quot;. Now, I'm wondering whether my interpretation is correct
</span><br>
<span class="quotelev3">&gt;&gt;&gt; or not. Is it true that the cm component does not support a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; heterogeneous environment? If so, will the developers support this
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in the future? How could I get around this while still using the cm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; component? What will happen if I rebuilt openmpi without these
</span><br>
<span class="quotelev3">&gt;&gt;&gt; statements?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I would appreciate your help.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Code:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mca_pml_cm_add_procs(....){
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #if OMPI_ENABLE_HETEROGENEOUS_SUPPORT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 107     for (i = 0 ; i &lt; nprocs ; ++i) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 108         if (procs[i]-&gt;proc_arch != ompi_proc_local()-
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; proc_arch) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 109             return OMPI_ERR_NOT_SUPPORTED;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 110         }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 111     }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 112 #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; .
</span><br>
<span class="quotelev3">&gt;&gt;&gt; .
</span><br>
<span class="quotelev3">&gt;&gt;&gt; .
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sajjad Tabib
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2504.php">Jeff Squyres: "Re: [OMPI devel] RFC: Add &quot;connect&quot; field to openib BTL INI file"</a>
<li><strong>Previous message:</strong> <a href="2502.php">Sajjad Tabib: "Re: [OMPI devel] PML cm and heterogeneous support"</a>
<li><strong>In reply to:</strong> <a href="2502.php">Sajjad Tabib: "Re: [OMPI devel] PML cm and heterogeneous support"</a>
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
