<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Oct 25 12:08:30 2007" -->
<!-- isoreceived="20071025160830" -->
<!-- sent="Thu, 25 Oct 2007 11:08:23 -0500" -->
<!-- isosent="20071025160823" -->
<!-- name="Sajjad Tabib" -->
<!-- email="stabib_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] PML cm and heterogeneous support" -->
<!-- id="OF04ACA4E6.54346F1C-ON8625737F.0055C03E-8625737F.0058A8D2_at_us.ibm.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="6F61A6BB-87ED-41F4-A252-46CE988D28B1_at_open-mpi.org" -->
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
<strong>Date:</strong> 2007-10-25 12:08:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2503.php">Brian W. Barrett: "Re: [OMPI devel] PML cm and heterogeneous support"</a>
<li><strong>Previous message:</strong> <a href="2501.php">Jeff Squyres: "Re: [OMPI devel] FD leak in Altix timer code?"</a>
<li><strong>In reply to:</strong> <a href="2497.php">Brian Barrett: "Re: [OMPI devel] PML cm and heterogeneous support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2503.php">Brian W. Barrett: "Re: [OMPI devel] PML cm and heterogeneous support"</a>
<li><strong>Reply:</strong> <a href="2503.php">Brian W. Barrett: "Re: [OMPI devel] PML cm and heterogeneous support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Brian,
<br>
<p>I have actually created a new MTL, in which I have added heterogeneous 
<br>
support. To experiment whether CM worked in this environment, I took out 
<br>
the safeguards that prevented one to use CM in a heterogeneous 
<br>
environment. Miraculously, things have been working so far. I haven't 
<br>
examined data integrity to an extent that I could say everything works 
<br>
perfectly, but with MPI_INTS, I do not have any endian problems. Now, 
<br>
based on my initial tests, I have came to the understanding that the PML 
<br>
CM safeguard against heterogeneous environments was a mechanism to prevent 
<br>
users from using existing MTLs. But, if an MTL supports heterogeneous 
<br>
communication, then it is possible to use the CM component. What is your 
<br>
take on this? 
<br>
Anyways, going back to the datatype usage. When you say that: &quot;it's known 
<br>
the datatype usage in the CM PML won't support heterogeneous operation&quot; 
<br>
could you please breifly explain this in more detail? I have been using 
<br>
ompi_mtl_datatype_pack and ompi_mtl_datatype_unpack, which use 
<br>
ompi_convertor_pack and ompi_convertor_unpack, for data packing. Do you 
<br>
mean that these functions will not work correctly?
<br>
<p>Thank You, 
<br>
<p>Sajjad Tabib
<br>
<p><p><p><p>Brian Barrett &lt;brbarret_at_[hidden]&gt; 
<br>
Sent by: devel-bounces_at_[hidden]
<br>
10/24/07 10:04 PM
<br>
Please respond to
<br>
Open MPI Developers &lt;devel_at_[hidden]&gt;
<br>
<p><p>To
<br>
Open MPI Developers &lt;devel_at_[hidden]&gt;
<br>
cc
<br>
<p>Subject
<br>
Re: [OMPI devel] PML cm and heterogeneous support
<br>
<p><p><p><p><p><p>No, it's because the CM PML was never designed to be used in a 
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
<p>_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-2502/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2503.php">Brian W. Barrett: "Re: [OMPI devel] PML cm and heterogeneous support"</a>
<li><strong>Previous message:</strong> <a href="2501.php">Jeff Squyres: "Re: [OMPI devel] FD leak in Altix timer code?"</a>
<li><strong>In reply to:</strong> <a href="2497.php">Brian Barrett: "Re: [OMPI devel] PML cm and heterogeneous support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2503.php">Brian W. Barrett: "Re: [OMPI devel] PML cm and heterogeneous support"</a>
<li><strong>Reply:</strong> <a href="2503.php">Brian W. Barrett: "Re: [OMPI devel] PML cm and heterogeneous support"</a>
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
