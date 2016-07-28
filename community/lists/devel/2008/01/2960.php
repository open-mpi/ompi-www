<?
$subject_val = "Re: [OMPI devel] btl tcp port to xensocket";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 10 20:58:20 2008" -->
<!-- isoreceived="20080111015820" -->
<!-- sent="Thu, 10 Jan 2008 20:57:41 -0500" -->
<!-- isosent="20080111015741" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] btl tcp port to xensocket" -->
<!-- id="94EA2513-825D-4943-83F5-7F032B1B1548_at_cisco.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20080109142401.GT11368_at_ltw.loris.tv" -->
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
<strong>Subject:</strong> Re: [OMPI devel] btl tcp port to xensocket<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-10 20:57:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2961.php">Jeff Squyres: "Re: [OMPI devel] btl tcp port to xensocket"</a>
<li><strong>Previous message:</strong> <a href="2959.php">Muhammad Atif: "Re: [OMPI devel] btl tcp port to xensocket"</a>
<li><strong>In reply to:</strong> <a href="2948.php">Adrian Knoth: "Re: [OMPI devel] btl tcp port to xensocket"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2959.php">Muhammad Atif: "Re: [OMPI devel] btl tcp port to xensocket"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Let me throw in a few clarifications on top of Adrian's information...
<br>
<p><p>On Jan 9, 2008, at 9:24 AM, Adrian Knoth wrote:
<br>
<p><span class="quotelev1">&gt; On Tue, Jan 08, 2008 at 10:51:45PM -0800, Muhammad Atif wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am planning to port tcp component to xensocket, which is a fast
</span><br>
<span class="quotelev2">&gt;&gt; interdomain communication mechanism for guest domains in Xen. I may
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just to get things right: You first partition your SMP/Multicore  
</span><br>
<span class="quotelev1">&gt; system
</span><br>
<span class="quotelev1">&gt; with Xen, and then want to re-combine it later for MPI communication?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Wouldn't it be easier to leave the unpartitioned host alone and use
</span><br>
<span class="quotelev1">&gt; shared memory communication instead?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; As per design, and the fact that these sockets are not normal  
</span><br>
<span class="quotelev2">&gt;&gt; sockets,
</span><br>
<span class="quotelev2">&gt;&gt; I have to pass certain information (basically memory references,  
</span><br>
<span class="quotelev2">&gt;&gt; guest
</span><br>
<span class="quotelev2">&gt;&gt; domain info etc) to other peers once sockets have been created. I
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There's ORTE, the runtime environment. It employs OOB/tcp to have a so
</span><br>
<span class="quotelev1">&gt; called out-of-band channel. ORTE also provides a general purpose
</span><br>
<span class="quotelev1">&gt; registry (GPR).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Once a TCP connection between the headnode process and all other peers
</span><br>
<span class="quotelev1">&gt; is established, you can store your required information in the GPR.
</span><br>
<p><p>mpirun automatically setups up TCP connections between the launched  
<br>
MPI processes and itself.  This &quot;out of band&quot; TCP channel is used for  
<br>
several things, such as exchanging meta information during startup  
<br>
(e.g., the modex information).
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; understand that mca_pml_base_modex_send and recv (or simply using
</span><br>
<span class="quotelev2">&gt;&gt; mca_btl_tcp_component_exchange) can be used to exchange information,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Use mca_pml_base_modex_send (now ompi_modex_send) and encode your
</span><br>
<span class="quotelev1">&gt; required information. It's getting stored in the GPR. Read it back  
</span><br>
<span class="quotelev1">&gt; with
</span><br>
<span class="quotelev1">&gt; mca_pml_base_modex_recv (ompi_modex_recv), as it is done in
</span><br>
<span class="quotelev1">&gt; mca_btl_tcp_component_exchange and mca_btl_tcp_proc_create.
</span><br>
<p>Note that there is a very specific model for the modex; each BTL  
<br>
module can only do a single send and then you can do a &quot;receive&quot; later  
<br>
to get the information from your peer BTL modules in other MPI  
<br>
processes.  Note that the modex information is not actually sent  
<br>
around during the modex send/receive function calls -- modex_send is  
<br>
just a buffering function for a gather operation that occurs later  
<br>
(all the data is gathered to mpirun).  Later during MPI_INIT, mpirun  
<br>
scatters all the information to the MPI processes.  Eventually, the  
<br>
BTL modules will call modex_recv to get their peer BTL information,  
<br>
but this is just a memcpy from the data that was previously received  
<br>
during the scatter from mpirun during MPI_INIT.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; but I cannot seem to get them to communicate. So to put my question  
</span><br>
<span class="quotelev2">&gt;&gt; in
</span><br>
<span class="quotelev2">&gt;&gt; a very simple way..... I want to create a socket structure containing
</span><br>
<span class="quotelev2">&gt;&gt; necessary information, and then pass it to all other peers before
</span><br>
<span class="quotelev2">&gt;&gt; start of actual mpi communication. What is the easiest way to do it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Quite the same way. mca_btl_tcp_component_exchange assembles the
</span><br>
<span class="quotelev1">&gt; required information and stores it in the GPR by calling
</span><br>
<span class="quotelev1">&gt; ompi_modex_send.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mca_btl_tcp_proc_create (think of &quot;the other peers&quot;) reads this
</span><br>
<span class="quotelev1">&gt; information into local context.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I guess you might want to copy btl/tcp to let's say btl/xen, so you  
</span><br>
<span class="quotelev1">&gt; can
</span><br>
<span class="quotelev1">&gt; modify internal structures, if required. Perhaps xensockets don't need
</span><br>
<span class="quotelev1">&gt; IP addresses, as they are actually memory sockets.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, you'll still need TCP communication between Xen guests for  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; OOB channel.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As mentioned above, I'm not sure if it's reasonable to use Xen and MPI
</span><br>
<span class="quotelev1">&gt; at all. Virtualization overhead might decrease your performance, and
</span><br>
<span class="quotelev1">&gt; that's usually the last thing you want to have when using MPI ;)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; HTH
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Cluster and Metacomputing Working Group
</span><br>
<span class="quotelev1">&gt; Friedrich-Schiller-Universit&#228;t Jena, Germany
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; private: <a href="http://adi.thur.de">http://adi.thur.de</a>
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
<li><strong>Next message:</strong> <a href="2961.php">Jeff Squyres: "Re: [OMPI devel] btl tcp port to xensocket"</a>
<li><strong>Previous message:</strong> <a href="2959.php">Muhammad Atif: "Re: [OMPI devel] btl tcp port to xensocket"</a>
<li><strong>In reply to:</strong> <a href="2948.php">Adrian Knoth: "Re: [OMPI devel] btl tcp port to xensocket"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2959.php">Muhammad Atif: "Re: [OMPI devel] btl tcp port to xensocket"</a>
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
