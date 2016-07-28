<?
$subject_val = "Re: [OMPI devel] btl tcp port to xensocket";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 17 09:43:11 2008" -->
<!-- isoreceived="20080117144311" -->
<!-- sent="Thu, 17 Jan 2008 08:42:41 -0600" -->
<!-- isosent="20080117144241" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] btl tcp port to xensocket" -->
<!-- id="A9D88E9B-D972-42F5-B725-08FF42C29EB2_at_cisco.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="657294.70053.qm_at_web52104.mail.re2.yahoo.com" -->
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
<strong>Date:</strong> 2008-01-17 09:42:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2994.php">Jeff Squyres: "Re: [OMPI devel] Integrating the memchecker branch"</a>
<li><strong>Previous message:</strong> <a href="2992.php">Muhammad Atif: "Re: [OMPI devel] btl tcp port to ..."</a>
<li><strong>In reply to:</strong> <a href="2981.php">Muhammad Atif: "Re: [OMPI devel] btl tcp port to xensocket"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2997.php">Muhammad Atif: "Re: [OMPI devel] btl tcp port to xensocket"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 15, 2008, at 6:07 PM, Muhammad Atif wrote:
<br>
<p><span class="quotelev1">&gt; Just for reference, I am trying to port btl/tcp to xensockets. Now  
</span><br>
<span class="quotelev1">&gt; if i want to do modex send/recv , to my understanding,  
</span><br>
<span class="quotelev1">&gt; mca_btl_tcp_addr_t is used (ref code/function is  
</span><br>
<span class="quotelev1">&gt; mca_btl_tcp_component_exchange). For xensockets, I need to send only  
</span><br>
<span class="quotelev1">&gt; one additional integer remote_domU_id across to say all the peers  
</span><br>
<span class="quotelev1">&gt; (in refined code it would be specific to each domain, but i just  
</span><br>
<span class="quotelev1">&gt; want to have clear understanding before i move any further). Now I  
</span><br>
<span class="quotelev1">&gt; have changed the struct mca_btl_tcp_addr_t present in btl_tcp_addr.h  
</span><br>
<span class="quotelev1">&gt; and have added int r_domu_id. This makes the size of structure 12.  
</span><br>
<span class="quotelev1">&gt; Upon receive mca_btl_tcp_proc_create() gives an error after  
</span><br>
<span class="quotelev1">&gt; mca_pml_base_modex_recv() and at this statement if(0 != (size %  
</span><br>
<span class="quotelev1">&gt; sizeof(mca_btl_tcp_addr_t))) that size do not match. It is still  
</span><br>
<span class="quotelev1">&gt; expecting size 8, where as i have made the size 12.  I am unable to  
</span><br>
<span class="quotelev1">&gt; pin point the exact location where the size 8 is still embedded. Any  
</span><br>
<span class="quotelev1">&gt; ideas?
</span><br>
<p>Just to be clear -- you have copied the tcp btl to another new name  
<br>
and are modifying that, right?  E.g., ompi/mca/btl/xensocket?
<br>
<p>If so, you need to modify the prefix of all the symbols to be  
<br>
btl_xensocket, and ensure to change the string name of your component  
<br>
in the component sturcture.  The modex indexes off this string name,  
<br>
so it's important that it doesn't share a name with any other  
<br>
component in the framework.
<br>
<p><span class="quotelev1">&gt; Second question is regarding the receive part of openmpi. In my  
</span><br>
<span class="quotelev1">&gt; understanding, once Recv api is called, the control goes through PML  
</span><br>
<span class="quotelev1">&gt; layer and everything initializes there. However, I am unable to get  
</span><br>
<span class="quotelev1">&gt; a lock at the layer/file/function where the receive socket polling  
</span><br>
<span class="quotelev1">&gt; is done. There are callbacks, but where or how exactly the openMPI  
</span><br>
<span class="quotelev1">&gt; knows that message has in fact arrived. Any pointer will do :)
</span><br>
<p>Which receive are you asking about here -- BTL receive or the modex  
<br>
receive?
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best Regards,
</span><br>
<span class="quotelev1">&gt; Muhammad Atif
</span><br>
<span class="quotelev1">&gt; PS: Sorry if my questions are too basic.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----- Original Message ----
</span><br>
<span class="quotelev1">&gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Sent: Friday, January 11, 2008 1:02:31 PM
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] btl tcp port to xensocket
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 10, 2008, at 8:40 PM, Muhammad Atif wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt; Thanks for such a detailed reply. You are right, we have partitioned
</span><br>
<span class="quotelev2">&gt; &gt; (normalized) our system with Xen and have seen that virtualization
</span><br>
<span class="quotelev2">&gt; &gt; overhead is not that great (for some applications) as compared to
</span><br>
<span class="quotelev2">&gt; &gt; potential benefits that we can get. We have executed various
</span><br>
<span class="quotelev2">&gt; &gt; benchmarks on different network/cluster configuration of Xen and
</span><br>
<span class="quotelev2">&gt; &gt; Native linux and they are really encouraging. The only known problem
</span><br>
<span class="quotelev2">&gt; &gt; is inter-domain communication of Xen which is quite poor (1/6 of the
</span><br>
<span class="quotelev2">&gt; &gt; native memory transfer and not to mention 50%CPU utilization of
</span><br>
<span class="quotelev2">&gt; &gt; host). We have tested out Xensocket, and these sockets give us
</span><br>
<span class="quotelev2">&gt; &gt; really good performance boost in all respects.
</span><br>
<span class="quotelev2">&gt; &gt; Now that I am having a look at the complex yet wonderful
</span><br>
<span class="quotelev2">&gt; &gt; architecture of openmpi, can you guys give me some guidance on
</span><br>
<span class="quotelev2">&gt; &gt; couple of naive questions?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 1- How do I view the console output of an mpi process which is not
</span><br>
<span class="quotelev2">&gt; &gt; at headnode? Do I have to have some parallel debugger? Or is there
</span><br>
<span class="quotelev2">&gt; &gt; any magical technique?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OMPI's run-time environment takes care of redirection stdout/stderr
</span><br>
<span class="quotelev1">&gt; from each MPI process to the stdout/stderr of mpirun for you (this is
</span><br>
<span class="quotelev1">&gt; another use of the &quot;out of band&quot; TCP channel that is setup between
</span><br>
<span class="quotelev1">&gt; mpirun and all the MPI processes).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 2- How do i setup GPR?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You don't.  The GPR is automatically instantiated in mpirun upon
</span><br>
<span class="quotelev1">&gt; startup.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; say i have a struct foo, and all processes have at least one such
</span><br>
<span class="quotelev2">&gt; &gt; instance of foo. From what I gather, openmpi will create a linked
</span><br>
<span class="quotelev2">&gt; &gt; list of foo's that were passed on (though I am unable to pass one
</span><br>
<span class="quotelev2">&gt; &gt; on). Where do i have to define struct foo so that it can be
</span><br>
<span class="quotelev2">&gt; &gt; exchanged b/w the processes? I know its a lame question, but I think
</span><br>
<span class="quotelev2">&gt; &gt; i am getting lost in the sea. :(
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I assume you're asking about the modex.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Every BTL defines its own data that is passed around in the modex.  It
</span><br>
<span class="quotelev1">&gt; is assumed that only modules of the same BTL type will be able to  
</span><br>
<span class="quotelev1">&gt; read/
</span><br>
<span class="quotelev1">&gt; understand that data.  The modex just treats the data as a blob; all
</span><br>
<span class="quotelev1">&gt; the modex blobs are gathered into mpirun and then broadcast out to
</span><br>
<span class="quotelev1">&gt; every MPI process (I said scatter in my previous mail; broadcast is
</span><br>
<span class="quotelev1">&gt; more accurate).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So when you modex_send, you just pass a pointer to a chunk of memory
</span><br>
<span class="quotelev1">&gt; and a length (e.g., a pointer to a struct instance and a length).
</span><br>
<span class="quotelev1">&gt; When you modex_receive, you can just dereference the blob that you
</span><br>
<span class="quotelev1">&gt; return as the same struct type as you modex_send'ed previously
</span><br>
<span class="quotelev1">&gt; (because you can only receive blobs from BTL modules that are the same
</span><br>
<span class="quotelev1">&gt; type as you, and therefore the data they sent is the same type of data
</span><br>
<span class="quotelev1">&gt; that you sent).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You can do more complex things in the modex if you need to, of
</span><br>
<span class="quotelev1">&gt; course.  For example, we're changing the openib BTL to send variable
</span><br>
<span class="quotelev1">&gt; length data in the modex, but that requires a bit more setup and I
</span><br>
<span class="quotelev1">&gt; suspect you don't need to do this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Best Regards,
</span><br>
<span class="quotelev2">&gt; &gt; Muhammad Atif
</span><br>
<span class="quotelev2">&gt; &gt; PS: I am totally new to MPI internals. So if at all we decide to go
</span><br>
<span class="quotelev2">&gt; &gt; ahead with the project, I would be regular bugger in the list.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That's what we're here for.  We don't always reply immediately, but we
</span><br>
<span class="quotelev1">&gt; try.  :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ----- Original Message ----
</span><br>
<span class="quotelev2">&gt; &gt; From: Adrian Knoth &lt;adi_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; To: Open MPI Developers &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Sent: Thursday, January 10, 2008 1:24:01 AM
</span><br>
<span class="quotelev2">&gt; &gt; Subject: Re: [OMPI devel] btl tcp port to xensocket
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Tue, Jan 08, 2008 at 10:51:45PM -0800, Muhammad Atif wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I am planning to port tcp component to xensocket, which is a fast
</span><br>
<span class="quotelev3">&gt; &gt; &gt; interdomain communication mechanism for guest domains in Xen. I  
</span><br>
<span class="quotelev1">&gt; may
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Just to get things right: You first partition your SMP/Multicore
</span><br>
<span class="quotelev2">&gt; &gt; system
</span><br>
<span class="quotelev2">&gt; &gt; with Xen, and then want to re-combine it later for MPI  
</span><br>
<span class="quotelev1">&gt; communication?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Wouldn't it be easier to leave the unpartitioned host alone and use
</span><br>
<span class="quotelev2">&gt; &gt; shared memory communication instead?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; As per design, and the fact that these sockets are not normal
</span><br>
<span class="quotelev2">&gt; &gt; sockets,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I have to pass certain information (basically memory references,
</span><br>
<span class="quotelev2">&gt; &gt; guest
</span><br>
<span class="quotelev3">&gt; &gt; &gt; domain info etc) to other peers once sockets have been created. I
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; There's ORTE, the runtime environment. It employs OOB/tcp to have  
</span><br>
<span class="quotelev1">&gt; a so
</span><br>
<span class="quotelev2">&gt; &gt; called out-of-band channel. ORTE also provides a general purpose
</span><br>
<span class="quotelev2">&gt; &gt; registry (GPR).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Once a TCP connection between the headnode process and all other  
</span><br>
<span class="quotelev1">&gt; peers
</span><br>
<span class="quotelev2">&gt; &gt; is established, you can store your required information in the GPR.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; understand that mca_pml_base_modex_send and recv (or simply using
</span><br>
<span class="quotelev3">&gt; &gt; &gt; mca_btl_tcp_component_exchange) can be used to exchange  
</span><br>
<span class="quotelev1">&gt; information,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Use mca_pml_base_modex_send (now ompi_modex_send) and encode your
</span><br>
<span class="quotelev2">&gt; &gt; required information. It's getting stored in the GPR. Read it back
</span><br>
<span class="quotelev2">&gt; &gt; with
</span><br>
<span class="quotelev2">&gt; &gt; mca_pml_base_modex_recv (ompi_modex_recv), as it is done in
</span><br>
<span class="quotelev2">&gt; &gt; mca_btl_tcp_component_exchange and mca_btl_tcp_proc_create.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; but I cannot seem to get them to communicate. So to put my
</span><br>
<span class="quotelev2">&gt; &gt; question in
</span><br>
<span class="quotelev3">&gt; &gt; &gt; a very simple way..... I want to create a socket structure
</span><br>
<span class="quotelev2">&gt; &gt; containing
</span><br>
<span class="quotelev3">&gt; &gt; &gt; necessary information, and then pass it to all other peers before
</span><br>
<span class="quotelev3">&gt; &gt; &gt; start of actual mpi communication. What is the easiest way to do  
</span><br>
<span class="quotelev1">&gt; it.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Quite the same way. mca_btl_tcp_component_exchange assembles the
</span><br>
<span class="quotelev2">&gt; &gt; required information and stores it in the GPR by calling
</span><br>
<span class="quotelev2">&gt; &gt; ompi_modex_send.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; mca_btl_tcp_proc_create (think of &quot;the other peers&quot;) reads this
</span><br>
<span class="quotelev2">&gt; &gt; information into local context.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I guess you might want to copy btl/tcp to let's say btl/xen, so you
</span><br>
<span class="quotelev2">&gt; &gt; can
</span><br>
<span class="quotelev2">&gt; &gt; modify internal structures, if required. Perhaps xensockets don't  
</span><br>
<span class="quotelev1">&gt; need
</span><br>
<span class="quotelev2">&gt; &gt; IP addresses, as they are actually memory sockets.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; However, you'll still need TCP communication between Xen guests for
</span><br>
<span class="quotelev2">&gt; &gt; the
</span><br>
<span class="quotelev2">&gt; &gt; OOB channel.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; As mentioned above, I'm not sure if it's reasonable to use Xen and  
</span><br>
<span class="quotelev1">&gt; MPI
</span><br>
<span class="quotelev2">&gt; &gt; at all. Virtualization overhead might decrease your performance, and
</span><br>
<span class="quotelev2">&gt; &gt; that's usually the last thing you want to have when using MPI ;)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; HTH
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Cluster and Metacomputing Working Group
</span><br>
<span class="quotelev2">&gt; &gt; Friedrich-Schiller-Universit&#228;t Jena, Germany
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; private: <a href="http://adi.thur.de">http://adi.thur.de</a>
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Be a better friend, newshound, and know-it-all with Yahoo! Mobile.
</span><br>
<span class="quotelev2">&gt; &gt; Try it now._______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<span class="quotelev1">&gt; Never miss a thing. Make Yahoo your homepage.  
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
<li><strong>Next message:</strong> <a href="2994.php">Jeff Squyres: "Re: [OMPI devel] Integrating the memchecker branch"</a>
<li><strong>Previous message:</strong> <a href="2992.php">Muhammad Atif: "Re: [OMPI devel] btl tcp port to ..."</a>
<li><strong>In reply to:</strong> <a href="2981.php">Muhammad Atif: "Re: [OMPI devel] btl tcp port to xensocket"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2997.php">Muhammad Atif: "Re: [OMPI devel] btl tcp port to xensocket"</a>
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
