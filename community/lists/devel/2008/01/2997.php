<?
$subject_val = "Re: [OMPI devel] btl tcp port to xensocket";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 17 19:08:31 2008" -->
<!-- isoreceived="20080118000831" -->
<!-- sent="Thu, 17 Jan 2008 16:08:16 -0800 (PST)" -->
<!-- isosent="20080118000816" -->
<!-- name="Muhammad Atif" -->
<!-- email="m_atif_s_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] btl tcp port to xensocket" -->
<!-- id="208561.75787.qm_at_web52109.mail.re2.yahoo.com" -->
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
<strong>Date:</strong> 2008-01-17 19:08:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2998.php">Don Kerr: "Re: [OMPI devel] open ib btl and xrc"</a>
<li><strong>Previous message:</strong> <a href="2996.php">Pavel Shamis (Pasha): "Re: [OMPI devel] open ib btl and xrc"</a>
<li><strong>Maybe in reply to:</strong> <a href="2947.php">Muhammad Atif: "[OMPI devel] btl tcp port to xensocket"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3005.php">Jeff Squyres: "Re: [OMPI devel] btl tcp port to xensocket"</a>
<li><strong>Reply:</strong> <a href="3005.php">Jeff Squyres: "Re: [OMPI devel] btl tcp port to xensocket"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks again. Nope.. at the moment I am doing the lame stuff i.e. simply changing the tcp code. So I have not created another btl component. I know its not recommended thing, but I just wanted to try before committing. Apart from xensocket specific stuff, all what I have done inside the btl/tcp code is to change the structure

 struct  mca_btl_tcp_addr_t {
    struct in_addr addr_inet;     /**&lt; IPv4 address in network byte order */
    in_port_t      addr_port;     /**&lt; listen port */
    unsigned short addr_inuse;    /**&lt; local meaning only */
    int           xs_domU_ref;       /**&lt;xs: domU memory reference  */
};

I wanted this structure to be passed on to all peers through component exchange (modex send/recv).  This way I have the normal socket listen port, its address and xensocket memory reference (its not complete as it is missing some other info, but lets stick to basic stuff). 

The second question is regarding btl tcp recv. I have seen a couple of emails with some explanation specific to that particular user but cannot seem to answer this question (ref to previous email). 


Best Regards,
Muhammad Atif

PS: I would love if you do some explanation of modex recv as well. ;)
Thanks for all the support you guys are giving.


----- Original Message ----
From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
To: Open MPI Developers &lt;devel_at_[hidden]&gt;
Sent: Friday, January 18, 2008 1:42:41 AM
Subject: Re: [OMPI devel] btl tcp port to xensocket


On Jan 15, 2008, at 6:07 PM, Muhammad Atif wrote:

&gt; Just for reference, I am trying to port btl/tcp to xensockets. Now  
&gt; if i want to do modex send/recv , to my understanding,  
&gt; mca_btl_tcp_addr_t is used (ref code/function is  
&gt; mca_btl_tcp_component_exchange). For xensockets, I need to send only
  
&gt; one additional integer remote_domU_id across to say all the peers  
&gt; (in refined code it would be specific to each domain, but i just  
&gt; want to have clear understanding before i move any further). Now I  
&gt; have changed the struct mca_btl_tcp_addr_t present in btl_tcp_addr.h
  
&gt; and have added int r_domu_id. This makes the size of structure 12.  
&gt; Upon receive mca_btl_tcp_proc_create() gives an error after  
&gt; mca_pml_base_modex_recv() and at this statement if(0 != (size %  
&gt; sizeof(mca_btl_tcp_addr_t))) that size do not match. It is still  
&gt; expecting size 8, where as i have made the size 12.  I am unable to  
&gt; pin point the exact location where the size 8 is still embedded. Any
  
&gt; ideas?

Just to be clear -- you have copied the tcp btl to another new name  
and are modifying that, right?  E.g., ompi/mca/btl/xensocket?

If so, you need to modify the prefix of all the symbols to be  
btl_xensocket, and ensure to change the string name of your component  
in the component sturcture.  The modex indexes off this string name,  
so it's important that it doesn't share a name with any other  
component in the framework.

&gt; Second question is regarding the receive part of openmpi. In my  
&gt; understanding, once Recv api is called, the control goes through PML
  
&gt; layer and everything initializes there. However, I am unable to get  
&gt; a lock at the layer/file/function where the receive socket polling  
&gt; is done. There are callbacks, but where or how exactly the openMPI  
&gt; knows that message has in fact arrived. Any pointer will do :)

Which receive are you asking about here -- BTL receive or the modex  
receive?

&gt;
&gt;
&gt; Best Regards,
&gt; Muhammad Atif
&gt; PS: Sorry if my questions are too basic.
&gt;
&gt; ----- Original Message ----
&gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
&gt; To: Open MPI Developers &lt;devel_at_[hidden]&gt;
&gt; Sent: Friday, January 11, 2008 1:02:31 PM
&gt; Subject: Re: [OMPI devel] btl tcp port to xensocket
&gt;
&gt;
&gt; On Jan 10, 2008, at 8:40 PM, Muhammad Atif wrote:
&gt;
&gt; &gt; Hi,
&gt; &gt; Thanks for such a detailed reply. You are right, we have
 partitioned
&gt; &gt; (normalized) our system with Xen and have seen that virtualization
&gt; &gt; overhead is not that great (for some applications) as compared to
&gt; &gt; potential benefits that we can get. We have executed various
&gt; &gt; benchmarks on different network/cluster configuration of Xen and
&gt; &gt; Native linux and they are really encouraging. The only known
 problem
&gt; &gt; is inter-domain communication of Xen which is quite poor (1/6 of
 the
&gt; &gt; native memory transfer and not to mention 50%CPU utilization of
&gt; &gt; host). We have tested out Xensocket, and these sockets give us
&gt; &gt; really good performance boost in all respects.
&gt; &gt; Now that I am having a look at the complex yet wonderful
&gt; &gt; architecture of openmpi, can you guys give me some guidance on
&gt; &gt; couple of naive questions?
&gt; &gt;
&gt; &gt; 1- How do I view the console output of an mpi process which is not
&gt; &gt; at headnode? Do I have to have some parallel debugger? Or is there
&gt; &gt; any magical technique?
&gt;
&gt; OMPI's run-time environment takes care of redirection stdout/stderr
&gt; from each MPI process to the stdout/stderr of mpirun for you (this is
&gt; another use of the &quot;out of band&quot; TCP channel that is setup between
&gt; mpirun and all the MPI processes).
&gt;
&gt; &gt;
&gt; &gt; 2- How do i setup GPR?
&gt;
&gt; You don't.  The GPR is automatically instantiated in mpirun upon
&gt; startup.
&gt;
&gt; &gt; say i have a struct foo, and all processes have at least one such
&gt; &gt; instance of foo. From what I gather, openmpi will create a linked
&gt; &gt; list of foo's that were passed on (though I am unable to pass one
&gt; &gt; on). Where do i have to define struct foo so that it can be
&gt; &gt; exchanged b/w the processes? I know its a lame question, but I
 think
&gt; &gt; i am getting lost in the sea. :(
&gt;
&gt; I assume you're asking about the modex.
&gt;
&gt; Every BTL defines its own data that is passed around in the modex.
  It
&gt; is assumed that only modules of the same BTL type will be able to  
&gt; read/
&gt; understand that data.  The modex just treats the data as a blob; all
&gt; the modex blobs are gathered into mpirun and then broadcast out to
&gt; every MPI process (I said scatter in my previous mail; broadcast is
&gt; more accurate).
&gt;
&gt; So when you modex_send, you just pass a pointer to a chunk of memory
&gt; and a length (e.g., a pointer to a struct instance and a length).
&gt; When you modex_receive, you can just dereference the blob that you
&gt; return as the same struct type as you modex_send'ed previously
&gt; (because you can only receive blobs from BTL modules that are the
 same
&gt; type as you, and therefore the data they sent is the same type of
 data
&gt; that you sent).
&gt;
&gt; You can do more complex things in the modex if you need to, of
&gt; course.  For example, we're changing the openib BTL to send variable
&gt; length data in the modex, but that requires a bit more setup and I
&gt; suspect you don't need to do this.
&gt;
&gt; &gt;
&gt; &gt; Best Regards,
&gt; &gt; Muhammad Atif
&gt; &gt; PS: I am totally new to MPI internals. So if at all we decide to go
&gt; &gt; ahead with the project, I would be regular bugger in the list.
&gt;
&gt; That's what we're here for.  We don't always reply immediately, but
 we
&gt; try.  :-)
&gt;
&gt; &gt;
&gt; &gt; ----- Original Message ----
&gt; &gt; From: Adrian Knoth &lt;adi_at_[hidden]&gt;
&gt; &gt; To: Open MPI Developers &lt;devel_at_[hidden]&gt;
&gt; &gt; Sent: Thursday, January 10, 2008 1:24:01 AM
&gt; &gt; Subject: Re: [OMPI devel] btl tcp port to xensocket
&gt; &gt;
&gt; &gt; On Tue, Jan 08, 2008 at 10:51:45PM -0800, Muhammad Atif wrote:
&gt; &gt;
&gt; &gt; &gt; I am planning to port tcp component to xensocket, which is a fast
&gt; &gt; &gt; interdomain communication mechanism for guest domains in Xen. I  
&gt; may
&gt; &gt;
&gt; &gt; Just to get things right: You first partition your SMP/Multicore
&gt; &gt; system
&gt; &gt; with Xen, and then want to re-combine it later for MPI  
&gt; communication?
&gt; &gt;
&gt; &gt; Wouldn't it be easier to leave the unpartitioned host alone and use
&gt; &gt; shared memory communication instead?
&gt; &gt;
&gt; &gt; &gt; As per design, and the fact that these sockets are not normal
&gt; &gt; sockets,
&gt; &gt; &gt; I have to pass certain information (basically memory references,
&gt; &gt; guest
&gt; &gt; &gt; domain info etc) to other peers once sockets have been created. I
&gt; &gt;
&gt; &gt; There's ORTE, the runtime environment. It employs OOB/tcp to have  
&gt; a so
&gt; &gt; called out-of-band channel. ORTE also provides a general purpose
&gt; &gt; registry (GPR).
&gt; &gt;
&gt; &gt; Once a TCP connection between the headnode process and all other  
&gt; peers
&gt; &gt; is established, you can store your required information in the GPR.
&gt; &gt;
&gt; &gt; &gt; understand that mca_pml_base_modex_send and recv (or simply using
&gt; &gt; &gt; mca_btl_tcp_component_exchange) can be used to exchange  
&gt; information,
&gt; &gt;
&gt; &gt; Use mca_pml_base_modex_send (now ompi_modex_send) and encode your
&gt; &gt; required information. It's getting stored in the GPR. Read it back
&gt; &gt; with
&gt; &gt; mca_pml_base_modex_recv (ompi_modex_recv), as it is done in
&gt; &gt; mca_btl_tcp_component_exchange and mca_btl_tcp_proc_create.
&gt; &gt;
&gt; &gt; &gt; but I cannot seem to get them to communicate. So to put my
&gt; &gt; question in
&gt; &gt; &gt; a very simple way..... I want to create a socket structure
&gt; &gt; containing
&gt; &gt; &gt; necessary information, and then pass it to all other peers before
&gt; &gt; &gt; start of actual mpi communication. What is the easiest way to do
  
&gt; it.
&gt; &gt;
&gt; &gt;
&gt; &gt; Quite the same way. mca_btl_tcp_component_exchange assembles the
&gt; &gt; required information and stores it in the GPR by calling
&gt; &gt; ompi_modex_send.
&gt; &gt;
&gt; &gt; mca_btl_tcp_proc_create (think of &quot;the other peers&quot;) reads this
&gt; &gt; information into local context.
&gt; &gt;
&gt; &gt;
&gt; &gt; I guess you might want to copy btl/tcp to let's say btl/xen, so you
&gt; &gt; can
&gt; &gt; modify internal structures, if required. Perhaps xensockets don't  
&gt; need
&gt; &gt; IP addresses, as they are actually memory sockets.
&gt; &gt;
&gt; &gt; However, you'll still need TCP communication between Xen guests for
&gt; &gt; the
&gt; &gt; OOB channel.
&gt; &gt;
&gt; &gt;
&gt; &gt; As mentioned above, I'm not sure if it's reasonable to use Xen and
  
&gt; MPI
&gt; &gt; at all. Virtualization overhead might decrease your performance,
 and
&gt; &gt; that's usually the last thing you want to have when using MPI ;)
&gt; &gt;
&gt; &gt;
&gt; &gt; HTH
&gt; &gt;
&gt; &gt; --
&gt; &gt; Cluster and Metacomputing Working Group
&gt; &gt; Friedrich-Schiller-Universit&#228;t Jena, Germany
&gt; &gt;
&gt; &gt; private: <a href="http://adi.thur.de">http://adi.thur.de</a>
&gt; &gt; _______________________________________________
&gt; &gt; devel mailing list
&gt; &gt; devel_at_[hidden]
&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&gt; &gt;
&gt; &gt;
&gt; &gt; Be a better friend, newshound, and know-it-all with Yahoo! Mobile.
&gt; &gt; Try it now._______________________________________________
&gt; &gt; devel mailing list
&gt; &gt; devel_at_[hidden]
&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&gt;
&gt;
&gt; -- 
&gt; Jeff Squyres
&gt; Cisco Systems
&gt;
&gt;
&gt; _______________________________________________
&gt; devel mailing list
&gt; devel_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&gt;
&gt;
&gt; Never miss a thing. Make Yahoo your homepage.  
&gt; _______________________________________________
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-2997/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2998.php">Don Kerr: "Re: [OMPI devel] open ib btl and xrc"</a>
<li><strong>Previous message:</strong> <a href="2996.php">Pavel Shamis (Pasha): "Re: [OMPI devel] open ib btl and xrc"</a>
<li><strong>Maybe in reply to:</strong> <a href="2947.php">Muhammad Atif: "[OMPI devel] btl tcp port to xensocket"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3005.php">Jeff Squyres: "Re: [OMPI devel] btl tcp port to xensocket"</a>
<li><strong>Reply:</strong> <a href="3005.php">Jeff Squyres: "Re: [OMPI devel] btl tcp port to xensocket"</a>
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
