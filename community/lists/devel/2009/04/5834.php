<?
$subject_val = "Re: [OMPI devel] MPI Message Communication over TCP/IP";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 16 11:38:10 2009" -->
<!-- isoreceived="20090416153810" -->
<!-- sent="Thu, 16 Apr 2009 16:38:05 +0100" -->
<!-- isosent="20090416153805" -->
<!-- name="Timothy Hayes" -->
<!-- email="hayesti_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI Message Communication over TCP/IP" -->
<!-- id="f6ed2720904160838l5290cfeaxbd7a043649abb14c_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1b1179850904160250k6d146749n948acdc3a41cc049_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] MPI Message Communication over TCP/IP<br>
<strong>From:</strong> Timothy Hayes (<em>hayesti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-16 11:38:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5835.php">Rayson Ho: "Re: [OMPI devel] MIPS/Linux port?"</a>
<li><strong>Previous message:</strong> <a href="5833.php">Jeff Squyres: "[OMPI devel] 1.3.2 rc"</a>
<li><strong>In reply to:</strong> <a href="5830.php">pranav jadhav: "Re: [OMPI devel] MPI Message Communication over TCP/IP"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5839.php">pranav jadhav: "Re: [OMPI devel] MPI Message Communication over TCP/IP"</a>
<li><strong>Reply:</strong> <a href="5839.php">pranav jadhav: "Re: [OMPI devel] MPI Message Communication over TCP/IP"</a>
<li><strong>Reply:</strong> <a href="5840.php">Jeff Squyres: "Re: [OMPI devel] MPI Message Communication over TCP/IP"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt;From what I understand MPI_Send will hit 3 separate layers of code before
</span><br>
reaching the socket file descriptors you've found. The PML (Point to Point
<br>
Messaging Layer) is a layer that bridges the MPI semantics from the
<br>
underlying point to point communications. The standard PML implementation is
<br>
called 'ob1' which is what indirectly calls the code you found. MPI_Send
<br>
should go through pml_isend() or pml_send() which will request a BTL (Byte
<br>
Transfer Layer) modules from the BML (BTL Management Layer) and invoke the
<br>
BTL's btl_prepare_src() or btl_alloc() functions before calling the
<br>
btl_send(). It becomes clearer when you step through it all with a debugger
<br>
though ;-)
<br>
<p>If you're interested, I've recently implemented a BTL component of my own
<br>
and am now writing up a report on the process. It will be ready next week,
<br>
so if you think it might be useful, just let me know.
<br>
<p>Tim
<br>
<p><p>2009/4/16 pranav jadhav &lt;pranavjadhav_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi All,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am new to MPI library. I downloaded and started using OpenMPI library to
</span><br>
<span class="quotelev1">&gt; build MPI programs. I wanted to know how does MPI program communicates over
</span><br>
<span class="quotelev1">&gt; the network. I am trying to trace the flow of MPI_Send and MPI_Bcast APIS to
</span><br>
<span class="quotelev1">&gt; find the actual send/recv calls being used for sending the packets over the
</span><br>
<span class="quotelev1">&gt; network. I was trying to look into the code , I found some tcp related
</span><br>
<span class="quotelev1">&gt; socket connections in code base in &quot;ompi/mca/btl/tcp/&quot; but I am not able to
</span><br>
<span class="quotelev1">&gt; figureout how does MPI_Send works. Please if anyone knows how MPI_Send and
</span><br>
<span class="quotelev1">&gt; MPI_Recv APIs works for communicating over network,please let me know.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thankyou,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Pranav Jadhav
</span><br>
<span class="quotelev1">&gt; Stony Brook University
</span><br>
<span class="quotelev1">&gt;
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-5834/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5835.php">Rayson Ho: "Re: [OMPI devel] MIPS/Linux port?"</a>
<li><strong>Previous message:</strong> <a href="5833.php">Jeff Squyres: "[OMPI devel] 1.3.2 rc"</a>
<li><strong>In reply to:</strong> <a href="5830.php">pranav jadhav: "Re: [OMPI devel] MPI Message Communication over TCP/IP"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5839.php">pranav jadhav: "Re: [OMPI devel] MPI Message Communication over TCP/IP"</a>
<li><strong>Reply:</strong> <a href="5839.php">pranav jadhav: "Re: [OMPI devel] MPI Message Communication over TCP/IP"</a>
<li><strong>Reply:</strong> <a href="5840.php">Jeff Squyres: "Re: [OMPI devel] MPI Message Communication over TCP/IP"</a>
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
