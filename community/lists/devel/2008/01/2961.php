<?
$subject_val = "Re: [OMPI devel] btl tcp port to xensocket";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 10 21:02:51 2008" -->
<!-- isoreceived="20080111020251" -->
<!-- sent="Thu, 10 Jan 2008 21:02:31 -0500" -->
<!-- isosent="20080111020231" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] btl tcp port to xensocket" -->
<!-- id="4D6D0CDE-3C29-4DBF-9F81-43568861CBEF_at_cisco.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="700913.45173.qm_at_web52106.mail.re2.yahoo.com" -->
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
<strong>Date:</strong> 2008-01-10 21:02:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2962.php">Pak Lui: "Re: [OMPI devel] processor affinity -- OpenMPI/batch system integration"</a>
<li><strong>Previous message:</strong> <a href="2960.php">Jeff Squyres: "Re: [OMPI devel] btl tcp port to xensocket"</a>
<li><strong>In reply to:</strong> <a href="2959.php">Muhammad Atif: "Re: [OMPI devel] btl tcp port to xensocket"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2981.php">Muhammad Atif: "Re: [OMPI devel] btl tcp port to xensocket"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 10, 2008, at 8:40 PM, Muhammad Atif wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; Thanks for such a detailed reply. You are right, we have partitioned  
</span><br>
<span class="quotelev1">&gt; (normalized) our system with Xen and have seen that virtualization  
</span><br>
<span class="quotelev1">&gt; overhead is not that great (for some applications) as compared to  
</span><br>
<span class="quotelev1">&gt; potential benefits that we can get. We have executed various  
</span><br>
<span class="quotelev1">&gt; benchmarks on different network/cluster configuration of Xen and  
</span><br>
<span class="quotelev1">&gt; Native linux and they are really encouraging. The only known problem  
</span><br>
<span class="quotelev1">&gt; is inter-domain communication of Xen which is quite poor (1/6 of the  
</span><br>
<span class="quotelev1">&gt; native memory transfer and not to mention 50%CPU utilization of  
</span><br>
<span class="quotelev1">&gt; host). We have tested out Xensocket, and these sockets give us  
</span><br>
<span class="quotelev1">&gt; really good performance boost in all respects.
</span><br>
<span class="quotelev1">&gt; Now that I am having a look at the complex yet wonderful  
</span><br>
<span class="quotelev1">&gt; architecture of openmpi, can you guys give me some guidance on  
</span><br>
<span class="quotelev1">&gt; couple of naive questions?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1- How do I view the console output of an mpi process which is not  
</span><br>
<span class="quotelev1">&gt; at headnode? Do I have to have some parallel debugger? Or is there  
</span><br>
<span class="quotelev1">&gt; any magical technique?
</span><br>
<p>OMPI's run-time environment takes care of redirection stdout/stderr  
<br>
from each MPI process to the stdout/stderr of mpirun for you (this is  
<br>
another use of the &quot;out of band&quot; TCP channel that is setup between  
<br>
mpirun and all the MPI processes).
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2- How do i setup GPR?
</span><br>
<p>You don't.  The GPR is automatically instantiated in mpirun upon  
<br>
startup.
<br>
<p><span class="quotelev1">&gt; say i have a struct foo, and all processes have at least one such  
</span><br>
<span class="quotelev1">&gt; instance of foo. From what I gather, openmpi will create a linked  
</span><br>
<span class="quotelev1">&gt; list of foo's that were passed on (though I am unable to pass one  
</span><br>
<span class="quotelev1">&gt; on). Where do i have to define struct foo so that it can be  
</span><br>
<span class="quotelev1">&gt; exchanged b/w the processes? I know its a lame question, but I think  
</span><br>
<span class="quotelev1">&gt; i am getting lost in the sea. :(
</span><br>
<p>I assume you're asking about the modex.
<br>
<p>Every BTL defines its own data that is passed around in the modex.  It  
<br>
is assumed that only modules of the same BTL type will be able to read/ 
<br>
understand that data.  The modex just treats the data as a blob; all  
<br>
the modex blobs are gathered into mpirun and then broadcast out to  
<br>
every MPI process (I said scatter in my previous mail; broadcast is  
<br>
more accurate).
<br>
<p>So when you modex_send, you just pass a pointer to a chunk of memory  
<br>
and a length (e.g., a pointer to a struct instance and a length).   
<br>
When you modex_receive, you can just dereference the blob that you  
<br>
return as the same struct type as you modex_send'ed previously  
<br>
(because you can only receive blobs from BTL modules that are the same  
<br>
type as you, and therefore the data they sent is the same type of data  
<br>
that you sent).
<br>
<p>You can do more complex things in the modex if you need to, of  
<br>
course.  For example, we're changing the openib BTL to send variable  
<br>
length data in the modex, but that requires a bit more setup and I  
<br>
suspect you don't need to do this.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best Regards,
</span><br>
<span class="quotelev1">&gt; Muhammad Atif
</span><br>
<span class="quotelev1">&gt; PS: I am totally new to MPI internals. So if at all we decide to go  
</span><br>
<span class="quotelev1">&gt; ahead with the project, I would be regular bugger in the list.
</span><br>
<p>That's what we're here for.  We don't always reply immediately, but we  
<br>
try.  :-)
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----- Original Message ----
</span><br>
<span class="quotelev1">&gt; From: Adrian Knoth &lt;adi_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Sent: Thursday, January 10, 2008 1:24:01 AM
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] btl tcp port to xensocket
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Jan 08, 2008 at 10:51:45PM -0800, Muhammad Atif wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am planning to port tcp component to xensocket, which is a fast
</span><br>
<span class="quotelev2">&gt; &gt; interdomain communication mechanism for guest domains in Xen. I may
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
<span class="quotelev2">&gt; &gt; As per design, and the fact that these sockets are not normal  
</span><br>
<span class="quotelev1">&gt; sockets,
</span><br>
<span class="quotelev2">&gt; &gt; I have to pass certain information (basically memory references,  
</span><br>
<span class="quotelev1">&gt; guest
</span><br>
<span class="quotelev2">&gt; &gt; domain info etc) to other peers once sockets have been created. I
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; understand that mca_pml_base_modex_send and recv (or simply using
</span><br>
<span class="quotelev2">&gt; &gt; mca_btl_tcp_component_exchange) can be used to exchange information,
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; but I cannot seem to get them to communicate. So to put my  
</span><br>
<span class="quotelev1">&gt; question in
</span><br>
<span class="quotelev2">&gt; &gt; a very simple way..... I want to create a socket structure  
</span><br>
<span class="quotelev1">&gt; containing
</span><br>
<span class="quotelev2">&gt; &gt; necessary information, and then pass it to all other peers before
</span><br>
<span class="quotelev2">&gt; &gt; start of actual mpi communication. What is the easiest way to do it.
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Be a better friend, newshound, and know-it-all with Yahoo! Mobile.  
</span><br>
<span class="quotelev1">&gt; Try it now._______________________________________________
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
<li><strong>Next message:</strong> <a href="2962.php">Pak Lui: "Re: [OMPI devel] processor affinity -- OpenMPI/batch system integration"</a>
<li><strong>Previous message:</strong> <a href="2960.php">Jeff Squyres: "Re: [OMPI devel] btl tcp port to xensocket"</a>
<li><strong>In reply to:</strong> <a href="2959.php">Muhammad Atif: "Re: [OMPI devel] btl tcp port to xensocket"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2981.php">Muhammad Atif: "Re: [OMPI devel] btl tcp port to xensocket"</a>
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
