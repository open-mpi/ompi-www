<?
$subject_val = "Re: [OMPI devel] Amateur Guidance";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  7 11:41:39 2008" -->
<!-- isoreceived="20081107164139" -->
<!-- sent="Fri, 7 Nov 2008 16:41:33 +0000" -->
<!-- isosent="20081107164133" -->
<!-- name="Timothy Hayes" -->
<!-- email="hayesti_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Amateur Guidance" -->
<!-- id="f6ed2720811070841o1c358b4eyf71974b35b18ebb0_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="27C34DDE-7C8D-4F00-B8DA-7D948FBF68E3_at_cisco.com" -->
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
<strong>From:</strong> Timothy Hayes (<em>hayesti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-07 11:41:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4868.php">Leonardo Fialho: "[OMPI devel] libevent"</a>
<li><strong>Previous message:</strong> <a href="4866.php">Adrian Knoth: "Re: [OMPI devel] Additional excluded tcp inteface"</a>
<li><strong>In reply to:</strong> <a href="4845.php">Jeff Squyres: "Re: [OMPI devel] Amateur Guidance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4870.php">George Bosilca: "Re: [OMPI devel] Amateur Guidance"</a>
<li><strong>Reply:</strong> <a href="4870.php">George Bosilca: "Re: [OMPI devel] Amateur Guidance"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi everyone,
<br>
<p>Thank you all for your replies. I've now read those additional papers and
<br>
went through the slides of the Open MPI workshop. I'm still a bit hazy on
<br>
the architecture of Open MPI (especially relevant to my project) so what
<br>
I've done is written what I think I understand about process to process
<br>
communication. I have a few specific questions, but maybe you could point me
<br>
in the right direction if I'm way off or maybe expand on areas where I'm a
<br>
little vague.
<br>
<p><a href="http://macneill.cs.tcd.ie/~hayesti/ompi.jpg<http://macneill.cs.tcd.ie/%7Ehayesti/ompi.jpg">http://macneill.cs.tcd.ie/~hayesti/ompi.jpg<http://macneill.cs.tcd.ie/%7Ehayesti/ompi.jpg</a>&gt;
<br>
<p>N.B. The XEN component in the BTL layer represents what I'm trying to make.
<br>
<p>When mpirun() is invoked, the following takes place
<br>
<p>1.       An out of band TCP channel is established between the process and
<br>
every other process. This is located in the ORTE (Open Runtime Environment)
<br>
-&gt; MCA (Modular Component Architecture) -&gt; OOB (Out of Band) -&gt; TCP.
<br>
<p>2.       A PML (Point-to-Point  Management Layer) is created, defaulting to
<br>
'ob1' which can handle multiple communication interfaces simultaneously.
<br>
This is located in OMPI (Open MPI) -&gt; MCA (Modular Component Architecture)
<br>
-&gt; PML (Point-to-Point Management Layer) -&gt; ob1
<br>
<p>3.       'ob1' attempts to set up one or more BTLs (Byte Transport Layer)
<br>
components. These components are for establishing a point of contact with
<br>
another process for data transfer. Examples include loopback for itself,
<br>
shared memory for inter-process communication, TCP/IP for processes located
<br>
on separate machines. There exist specialist components like infinibands
<br>
should hardware and infrastructure become available.
<br>
<p>4.       Each component is cohesive and is responsible for finding the
<br>
availability of resources specific to its own operation. Each component will
<br>
return zero, one or many module instances depending on circumstance.
<br>
<p>5.       The out of band TCP channel is then used to communicate each
<br>
process' instantiated modules to every other process.
<br>
<p>Questions with regard to the above
<br>
<p>Is the OOB channel permanent for the duration of mpirun()?
<br>
<p>I've read in places that the functions modex_send() &amp; modex_recv() are used
<br>
to communicate on the OOB channel, but I see mca_oob_tcp_send and
<br>
mca_oob_tcp_recv declared in the header file. Is modex something else?
<br>
<p>What exactly is queried and returned when a BTL component creates modules.
<br>
For example, if I run 4 MPI processes on the same machine, will the sm
<br>
component return 1 sm module to communicate with each other process or 3 sm
<br>
modules to communicate with 1 distinct module?
<br>
<p>Once again, those 5 points are really sparse and they're sparse because I
<br>
don't know the detail myself. If anyone could shed some light on the process
<br>
I would be really grateful.
<br>
<p>Kind regards
<br>
<p>Tim Hayes
<br>
<p>2008/11/3 Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; On Nov 3, 2008, at 10:39 AM, Eugene Loh wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Main answer: no great docs to look at.  I think I've asked some OMPI
</span><br>
<span class="quotelev2">&gt;&gt; experts and that was basically the answer they gave me.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is unfortunately the current state of the art -- no one has had time
</span><br>
<span class="quotelev1">&gt; to write up good docs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Galen pointed to the new papers -- our main PML these days is &quot;ob1&quot; (teg
</span><br>
<span class="quotelev1">&gt; died a long time ago).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PML = Point to point messaging layer; it's basically the layer that is
</span><br>
<span class="quotelev1">&gt; right behind MPI_SEND and friends.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The ob1 PML uses BTL modules underneath.  BTL = Byte transfer layer;
</span><br>
<span class="quotelev1">&gt; individual modules that send bytes back and forth over individual transports
</span><br>
<span class="quotelev1">&gt; (e.g., shared memory, TCP, openfabrics, etc.).  There's a BTL for each of
</span><br>
<span class="quotelev1">&gt; the major transports that we support.  The protocols that ob1 uses are
</span><br>
<span class="quotelev1">&gt; described nicely in the papers that Galen sent, but the specific function
</span><br>
<span class="quotelev1">&gt; interfaces are only best described in ompi/mca/btl/btl.h.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Alternatively, we have a &quot;cm&quot; PML which uses MTL modules underneath.  MTL =
</span><br>
<span class="quotelev1">&gt; Matching transport layer; it's basically for transports that expose very
</span><br>
<span class="quotelev1">&gt; MPI-like interfaces (e.g., elan, tports, PSM, portals, MX).  This cm
</span><br>
<span class="quotelev1">&gt; component is extremely thin; it basically provides a shim between Open MPI
</span><br>
<span class="quotelev1">&gt; and the underlying transport.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The big difference between cm and ob1 is that ob1 is a progress engine that
</span><br>
<span class="quotelev1">&gt; tracks multiple transport interfaces (e.g., shared memory, tcp, openfabrics,
</span><br>
<span class="quotelev1">&gt; ...etc. -- and therefore potentially multiple BTL module instances) and cm
</span><br>
<span class="quotelev1">&gt; is a thin shim that simply translates between OMPI and the back-end
</span><br>
<span class="quotelev1">&gt; interface -- cm will only use *ONE* MTL module instance.  Specifically: it
</span><br>
<span class="quotelev1">&gt; is expected that the one MTL module will do all the progression, striping,
</span><br>
<span class="quotelev1">&gt; ...or whatever it wants to do to move bytes from A to B by itself (very
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-4867/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4868.php">Leonardo Fialho: "[OMPI devel] libevent"</a>
<li><strong>Previous message:</strong> <a href="4866.php">Adrian Knoth: "Re: [OMPI devel] Additional excluded tcp inteface"</a>
<li><strong>In reply to:</strong> <a href="4845.php">Jeff Squyres: "Re: [OMPI devel] Amateur Guidance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4870.php">George Bosilca: "Re: [OMPI devel] Amateur Guidance"</a>
<li><strong>Reply:</strong> <a href="4870.php">George Bosilca: "Re: [OMPI devel] Amateur Guidance"</a>
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
