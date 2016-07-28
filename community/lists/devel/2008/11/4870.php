<?
$subject_val = "Re: [OMPI devel] Amateur Guidance";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  7 13:52:48 2008" -->
<!-- isoreceived="20081107185248" -->
<!-- sent="Fri, 7 Nov 2008 13:52:40 -0500" -->
<!-- isosent="20081107185240" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Amateur Guidance" -->
<!-- id="085EAE15-B148-40F1-835A-70C7C1555D95_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="f6ed2720811070841o1c358b4eyf71974b35b18ebb0_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Amateur Guidance<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-07 13:52:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4871.php">Leonardo Fialho: "Re: [OMPI devel] libevent"</a>
<li><strong>Previous message:</strong> <a href="4869.php">George Bosilca: "Re: [OMPI devel] libevent"</a>
<li><strong>In reply to:</strong> <a href="4867.php">Timothy Hayes: "Re: [OMPI devel] Amateur Guidance"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 7, 2008, at 11:41 AM, Timothy Hayes wrote:
<br>
<p><span class="quotelev1">&gt; <a href="http://macneill.cs.tcd.ie/~hayesti/ompi.jpg">http://macneill.cs.tcd.ie/~hayesti/ompi.jpg</a>
</span><br>
<p>This is unfortunately not available to the outside world.
<br>
<p><span class="quotelev1">&gt; N.B. The XEN component in the BTL layer represents what I'm trying  
</span><br>
<span class="quotelev1">&gt; to make.
</span><br>
<p>So far so good, the BTL is what you need in order to move data between  
<br>
MPI processes.
<br>
<span class="quotelev1">&gt; When mpirun() is invoked, the following takes place
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1.       An out of band TCP channel is established between the  
</span><br>
<span class="quotelev1">&gt; process and every other process. This is located in the ORTE (Open  
</span><br>
<span class="quotelev1">&gt; Runtime Environment) -&gt; MCA (Modular Component Architecture) -&gt; OOB  
</span><br>
<span class="quotelev1">&gt; (Out of Band) -&gt; TCP.
</span><br>
<p>More or less. Usually each MPI process has an OOB channel to his  
<br>
daemon, and these daemons are connected in between. Any OOB message  
<br>
from a process to another process will go through these daemons.
<br>
<p><span class="quotelev1">&gt; 2.       A PML (Point-to-Point  Management Layer) is created,  
</span><br>
<span class="quotelev1">&gt; defaulting to 'ob1' which can handle multiple communication  
</span><br>
<span class="quotelev1">&gt; interfaces simultaneously. This is located in OMPI (Open MPI) -&gt; MCA  
</span><br>
<span class="quotelev1">&gt; (Modular Component Architecture) -&gt; PML (Point-to-Point Management  
</span><br>
<span class="quotelev1">&gt; Layer) -&gt; ob1
</span><br>
<p>In the MPI application yes. There is a trick for matching capable  
<br>
hardware (PSM or MX) but let's consider only the simplest process now.
<br>
<p><span class="quotelev1">&gt; 3.       'ob1' attempts to set up one or more BTLs (Byte Transport  
</span><br>
<span class="quotelev1">&gt; Layer) components. These components are for establishing a point of  
</span><br>
<span class="quotelev1">&gt; contact with another process for data transfer. Examples include  
</span><br>
<span class="quotelev1">&gt; loopback for itself, shared memory for inter-process communication,  
</span><br>
<span class="quotelev1">&gt; TCP/IP for processes located on separate machines. There exist  
</span><br>
<span class="quotelev1">&gt; specialist components like infinibands should hardware and  
</span><br>
<span class="quotelev1">&gt; infrastructure become available.
</span><br>
<span class="quotelev1">&gt; 4.       Each component is cohesive and is responsible for finding  
</span><br>
<span class="quotelev1">&gt; the availability of resources specific to its own operation. Each  
</span><br>
<span class="quotelev1">&gt; component will return zero, one or many module instances depending  
</span><br>
<span class="quotelev1">&gt; on circumstance.
</span><br>
<span class="quotelev1">&gt; 5.       The out of band TCP channel is then used to communicate  
</span><br>
<span class="quotelev1">&gt; each process' instantiated modules to every other process.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Questions with regard to the above
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is the OOB channel permanent for the duration of mpirun()?
</span><br>
<span class="quotelev1">&gt;
</span><br>
Yes, the OOB channel will exist as long as the job is running.
<br>
<span class="quotelev1">&gt; I've read in places that the functions modex_send() &amp; modex_recv()  
</span><br>
<span class="quotelev1">&gt; are used to communicate on the OOB channel, but I see  
</span><br>
<span class="quotelev1">&gt; mca_oob_tcp_send and mca_oob_tcp_recv declared in the header file.  
</span><br>
<span class="quotelev1">&gt; Is modex something else?
</span><br>
<span class="quotelev1">&gt;
</span><br>
These functions are high level functions allowing the components to  
<br>
send and receive informations required for startup. What they do, well  
<br>
they gather some data from each process and propagate it globally. You  
<br>
can see it as a allgather operation, a kind of global &quot;business card&quot;  
<br>
exchange.
<br>
<span class="quotelev1">&gt; What exactly is queried and returned when a BTL component creates  
</span><br>
<span class="quotelev1">&gt; modules. For example, if I run 4 MPI processes on the same machine,  
</span><br>
<span class="quotelev1">&gt; will the sm component return 1 sm module to communicate with each  
</span><br>
<span class="quotelev1">&gt; other process or 3 sm modules to communicate with 1 distinct module?
</span><br>
<span class="quotelev1">&gt;
</span><br>
sm will always return just one BTL module. Some devices (such as MX)  
<br>
will return one BTL per rail (physical NIC). For your specific case I  
<br>
will return only one BTL, and on the add_proc I will only allow  
<br>
connections to the processes on the same node (if what I understood  
<br>
from your previous email is valid).
<br>
<span class="quotelev1">&gt; Once again, those 5 points are really sparse and they're sparse  
</span><br>
<span class="quotelev1">&gt; because I don't know the detail myself. If anyone could shed some  
</span><br>
<span class="quotelev1">&gt; light on the process I would be really grateful.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Kind regards
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tim Hayes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2008/11/3 Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 3, 2008, at 10:39 AM, Eugene Loh wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Main answer: no great docs to look at.  I think I've asked some OMPI  
</span><br>
<span class="quotelev1">&gt; experts and that was basically the answer they gave me.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is unfortunately the current state of the art -- no one has had  
</span><br>
<span class="quotelev1">&gt; time to write up good docs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Galen pointed to the new papers -- our main PML these days is  
</span><br>
<span class="quotelev1">&gt; &quot;ob1&quot; (teg died a long time ago).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PML = Point to point messaging layer; it's basically the layer that  
</span><br>
<span class="quotelev1">&gt; is right behind MPI_SEND and friends.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The ob1 PML uses BTL modules underneath.  BTL = Byte transfer layer;  
</span><br>
<span class="quotelev1">&gt; individual modules that send bytes back and forth over individual  
</span><br>
<span class="quotelev1">&gt; transports (e.g., shared memory, TCP, openfabrics, etc.).  There's a  
</span><br>
<span class="quotelev1">&gt; BTL for each of the major transports that we support.  The protocols  
</span><br>
<span class="quotelev1">&gt; that ob1 uses are described nicely in the papers that Galen sent,  
</span><br>
<span class="quotelev1">&gt; but the specific function interfaces are only best described in ompi/ 
</span><br>
<span class="quotelev1">&gt; mca/btl/btl.h.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Alternatively, we have a &quot;cm&quot; PML which uses MTL modules  
</span><br>
<span class="quotelev1">&gt; underneath.  MTL = Matching transport layer; it's basically for  
</span><br>
<span class="quotelev1">&gt; transports that expose very MPI-like interfaces (e.g., elan, tports,  
</span><br>
<span class="quotelev1">&gt; PSM, portals, MX).  This cm component is extremely thin; it  
</span><br>
<span class="quotelev1">&gt; basically provides a shim between Open MPI and the underlying  
</span><br>
<span class="quotelev1">&gt; transport.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The big difference between cm and ob1 is that ob1 is a progress  
</span><br>
<span class="quotelev1">&gt; engine that tracks multiple transport interfaces (e.g., shared  
</span><br>
<span class="quotelev1">&gt; memory, tcp, openfabrics, ...etc. -- and therefore potentially  
</span><br>
<span class="quotelev1">&gt; multiple BTL module instances) and cm is a thin shim that simply  
</span><br>
<span class="quotelev1">&gt; translates between OMPI and the back-end interface -- cm will only  
</span><br>
<span class="quotelev1">&gt; use *ONE* MTL module instance.  Specifically: it is expected that  
</span><br>
<span class="quotelev1">&gt; the one MTL module will do all the progression, striping, ...or  
</span><br>
<span class="quotelev1">&gt; whatever it wants to do to move bytes from A to B by itself (very  
</span><br>
<span class="quotelev1">&gt; little/no help at all from OMPI's infrastructure).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does that help some?
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-4870/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4871.php">Leonardo Fialho: "Re: [OMPI devel] libevent"</a>
<li><strong>Previous message:</strong> <a href="4869.php">George Bosilca: "Re: [OMPI devel] libevent"</a>
<li><strong>In reply to:</strong> <a href="4867.php">Timothy Hayes: "Re: [OMPI devel] Amateur Guidance"</a>
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
