<?
$subject_val = "Re: [OMPI devel] btl tcp port to xensocket";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 15 19:07:10 2008" -->
<!-- isoreceived="20080116000710" -->
<!-- sent="Tue, 15 Jan 2008 16:07:02 -0800 (PST)" -->
<!-- isosent="20080116000702" -->
<!-- name="Muhammad Atif" -->
<!-- email="m_atif_s_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] btl tcp port to xensocket" -->
<!-- id="657294.70053.qm_at_web52104.mail.re2.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="[OMPI devel] btl tcp port to xensocket" -->
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
<strong>From:</strong> Muhammad Atif (<em>m_atif_s_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-15 19:07:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2982.php">Ralph Castain: "[OMPI devel] OMPI/ORTE and tools"</a>
<li><strong>Previous message:</strong> <a href="2980.php">Rainer Keller: "Re: [OMPI devel] Integrating the memchecker branch"</a>
<li><strong>Maybe in reply to:</strong> <a href="2947.php">Muhammad Atif: "[OMPI devel] btl tcp port to xensocket"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2990.php">Adrian Knoth: "Re: [OMPI devel] btl tcp port to xensocket"</a>
<li><strong>Reply:</strong> <a href="2990.php">Adrian Knoth: "Re: [OMPI devel] btl tcp port to xensocket"</a>
<li><strong>Reply:</strong> <a href="2993.php">Jeff Squyres: "Re: [OMPI devel] btl tcp port to xensocket"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you so much for the help and guidance. I think i partially understand the send process. To have a good feel of the OpenMPI code, if I try to exchange information through GPR, I am getting funny problem. Its funny as in, i know the reason, I just cant seem to locate it.

Just for reference, I am trying to port btl/tcp to xensockets. Now if i want to do modex send/recv , to my understanding, mca_btl_tcp_addr_t is used (ref code/function is mca_btl_tcp_component_exchange). For xensockets, I need to send only one additional integer remote_domU_id across to say all the peers (in refined code it would be specific to each domain, but i just want to have clear understanding before i move any further). Now I have changed the struct mca_btl_tcp_addr_t present in btl_tcp_addr.h and have added int r_domu_id. This makes the size of structure 12. Upon receive mca_btl_tcp_proc_create() gives an error after mca_pml_base_modex_recv() and at this statement if(0 != (size % sizeof(mca_btl_tcp_addr_t))) that size do not match. It is still expecting size 8, where as i have made the size 12.  I am unable to pin point the exact location where the size 8 is still embedded. Any ideas?

Second question is regarding the receive part of openmpi. In my understanding, once Recv api is called, the control goes through PML layer and everything initializes there. However, I am unable to get a lock at the layer/file/function where the receive socket polling is done. There are callbacks, but where or how exactly the openMPI knows that message has in fact arrived. Any pointer will do :)

 
Best Regards,
Muhammad AtifPS: Sorry if my questions are too basic. 

----- Original Message ----
From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
To: Open MPI Developers &lt;devel_at_[hidden]&gt;
Sent: Friday, January 11, 2008 1:02:31 PM
Subject: Re: [OMPI devel] btl tcp port to xensocket



On Jan 10, 2008, at 8:40 PM, Muhammad Atif wrote:

&gt; Hi,
&gt; Thanks for such a detailed reply. You are right, we have partitioned
  
&gt; (normalized) our system with Xen and have seen that virtualization  
&gt; overhead is not that great (for some applications) as compared to  
&gt; potential benefits that we can get. We have executed various  
&gt; benchmarks on different network/cluster configuration of Xen and  
&gt; Native linux and they are really encouraging. The only known problem
  
&gt; is inter-domain communication of Xen which is quite poor (1/6 of the
  
&gt; native memory transfer and not to mention 50%CPU utilization of  
&gt; host). We have tested out Xensocket, and these sockets give us  
&gt; really good performance boost in all respects.
&gt; Now that I am having a look at the complex yet wonderful  
&gt; architecture of openmpi, can you guys give me some guidance on  
&gt; couple of naive questions?
&gt;
&gt; 1- How do I view the console output of an mpi process which is not  
&gt; at headnode? Do I have to have some parallel debugger? Or is there  
&gt; any magical technique?

OMPI's run-time environment takes care of redirection stdout/stderr  
from each MPI process to the stdout/stderr of mpirun for you (this is  
another use of the &quot;out of band&quot; TCP channel that is setup between  
mpirun and all the MPI processes).

&gt;
&gt; 2- How do i setup GPR?

You don't.  The GPR is automatically instantiated in mpirun upon  
startup.

&gt; say i have a struct foo, and all processes have at least one such  
&gt; instance of foo. From what I gather, openmpi will create a linked  
&gt; list of foo's that were passed on (though I am unable to pass one  
&gt; on). Where do i have to define struct foo so that it can be  
&gt; exchanged b/w the processes? I know its a lame question, but I think
  
&gt; i am getting lost in the sea. :(

I assume you're asking about the modex.

Every BTL defines its own data that is passed around in the modex.  It
  
is assumed that only modules of the same BTL type will be able to read/
 
understand that data.  The modex just treats the data as a blob; all  
the modex blobs are gathered into mpirun and then broadcast out to  
every MPI process (I said scatter in my previous mail; broadcast is  
more accurate).

So when you modex_send, you just pass a pointer to a chunk of memory  
and a length (e.g., a pointer to a struct instance and a length).   
When you modex_receive, you can just dereference the blob that you  
return as the same struct type as you modex_send'ed previously  
(because you can only receive blobs from BTL modules that are the same
  
type as you, and therefore the data they sent is the same type of data
  
that you sent).

You can do more complex things in the modex if you need to, of  
course.  For example, we're changing the openib BTL to send variable  
length data in the modex, but that requires a bit more setup and I  
suspect you don't need to do this.

&gt;
&gt; Best Regards,
&gt; Muhammad Atif
&gt; PS: I am totally new to MPI internals. So if at all we decide to go  
&gt; ahead with the project, I would be regular bugger in the list.

That's what we're here for.  We don't always reply immediately, but we
  
try.  :-)

&gt;
&gt; ----- Original Message ----
&gt; From: Adrian Knoth &lt;adi_at_[hidden]&gt;
&gt; To: Open MPI Developers &lt;devel_at_[hidden]&gt;
&gt; Sent: Thursday, January 10, 2008 1:24:01 AM
&gt; Subject: Re: [OMPI devel] btl tcp port to xensocket
&gt;
&gt; On Tue, Jan 08, 2008 at 10:51:45PM -0800, Muhammad Atif wrote:
&gt;
&gt; &gt; I am planning to port tcp component to xensocket, which is a fast
&gt; &gt; interdomain communication mechanism for guest domains in Xen. I may
&gt;
&gt; Just to get things right: You first partition your SMP/Multicore  
&gt; system
&gt; with Xen, and then want to re-combine it later for MPI communication?
&gt;
&gt; Wouldn't it be easier to leave the unpartitioned host alone and use
&gt; shared memory communication instead?
&gt;
&gt; &gt; As per design, and the fact that these sockets are not normal  
&gt; sockets,
&gt; &gt; I have to pass certain information (basically memory references,  
&gt; guest
&gt; &gt; domain info etc) to other peers once sockets have been created. I
&gt;
&gt; There's ORTE, the runtime environment. It employs OOB/tcp to have a
 so
&gt; called out-of-band channel. ORTE also provides a general purpose
&gt; registry (GPR).
&gt;
&gt; Once a TCP connection between the headnode process and all other
 peers
&gt; is established, you can store your required information in the GPR.
&gt;
&gt; &gt; understand that mca_pml_base_modex_send and recv (or simply using
&gt; &gt; mca_btl_tcp_component_exchange) can be used to exchange
 information,
&gt;
&gt; Use mca_pml_base_modex_send (now ompi_modex_send) and encode your
&gt; required information. It's getting stored in the GPR. Read it back  
&gt; with
&gt; mca_pml_base_modex_recv (ompi_modex_recv), as it is done in
&gt; mca_btl_tcp_component_exchange and mca_btl_tcp_proc_create.
&gt;
&gt; &gt; but I cannot seem to get them to communicate. So to put my  
&gt; question in
&gt; &gt; a very simple way..... I want to create a socket structure  
&gt; containing
&gt; &gt; necessary information, and then pass it to all other peers before
&gt; &gt; start of actual mpi communication. What is the easiest way to do
 it.
&gt;
&gt;
&gt; Quite the same way. mca_btl_tcp_component_exchange assembles the
&gt; required information and stores it in the GPR by calling
&gt; ompi_modex_send.
&gt;
&gt; mca_btl_tcp_proc_create (think of &quot;the other peers&quot;) reads this
&gt; information into local context.
&gt;
&gt;
&gt; I guess you might want to copy btl/tcp to let's say btl/xen, so you  
&gt; can
&gt; modify internal structures, if required. Perhaps xensockets don't
 need
&gt; IP addresses, as they are actually memory sockets.
&gt;
&gt; However, you'll still need TCP communication between Xen guests for  
&gt; the
&gt; OOB channel.
&gt;
&gt;
&gt; As mentioned above, I'm not sure if it's reasonable to use Xen and
 MPI
&gt; at all. Virtualization overhead might decrease your performance, and
&gt; that's usually the last thing you want to have when using MPI ;)
&gt;
&gt;
&gt; HTH
&gt;
&gt; -- 
&gt; Cluster and Metacomputing Working Group
&gt; Friedrich-Schiller-Universit&#228;t Jena, Germany
&gt;
&gt; private: <a href="http://adi.thur.de">http://adi.thur.de</a>
&gt; _______________________________________________
&gt; devel mailing list
&gt; devel_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&gt;
&gt;
&gt; Be a better friend, newshound, and know-it-all with Yahoo! Mobile.  
&gt; Try it now._______________________________________________
&gt; devel mailing list
&gt; devel_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>


-- 
Jeff Squyres
Cisco Systems


_______________________________________________
devel mailing list
devel_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>






      ____________________________________________________________________________________
Never miss a thing.  Make Yahoo your home page. 
<a href="http://www.yahoo.com/r/hs">http://www.yahoo.com/r/hs</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-2981/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2982.php">Ralph Castain: "[OMPI devel] OMPI/ORTE and tools"</a>
<li><strong>Previous message:</strong> <a href="2980.php">Rainer Keller: "Re: [OMPI devel] Integrating the memchecker branch"</a>
<li><strong>Maybe in reply to:</strong> <a href="2947.php">Muhammad Atif: "[OMPI devel] btl tcp port to xensocket"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2990.php">Adrian Knoth: "Re: [OMPI devel] btl tcp port to xensocket"</a>
<li><strong>Reply:</strong> <a href="2990.php">Adrian Knoth: "Re: [OMPI devel] btl tcp port to xensocket"</a>
<li><strong>Reply:</strong> <a href="2993.php">Jeff Squyres: "Re: [OMPI devel] btl tcp port to xensocket"</a>
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
