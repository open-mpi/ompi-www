<?
$subject_val = "Re: [OMPI devel] MPI Message Communication over TCP/IP";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 16 20:58:04 2009" -->
<!-- isoreceived="20090417005804" -->
<!-- sent="Thu, 16 Apr 2009 20:58:00 -0400" -->
<!-- isosent="20090417005800" -->
<!-- name="pranav jadhav" -->
<!-- email="pranavjadhav_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI Message Communication over TCP/IP" -->
<!-- id="1b1179850904161758n57be2eaalb5facb59b2bf51d5_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="f6ed2720904160838l5290cfeaxbd7a043649abb14c_at_mail.gmail.com" -->
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
<strong>From:</strong> pranav jadhav (<em>pranavjadhav_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-16 20:58:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5840.php">Jeff Squyres: "Re: [OMPI devel] MPI Message Communication over TCP/IP"</a>
<li><strong>Previous message:</strong> <a href="5838.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r20003 (Solaris	malloc.h issue)"</a>
<li><strong>In reply to:</strong> <a href="5834.php">Timothy Hayes: "Re: [OMPI devel] MPI Message Communication over TCP/IP"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5841.php">Jeff Squyres: "Re: [OMPI devel] MPI Message Communication over TCP/IP"</a>
<li><strong>Reply:</strong> <a href="5841.php">Jeff Squyres: "Re: [OMPI devel] MPI Message Communication over TCP/IP"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Tim,
<br>
<p>Thanks for providing the details. I was going through the code of MPI_Send
<br>
and I found a function pointer being invoked mca_pml.send of struct
<br>
mca_pml_base_module_t. I am trying to figureout when are these PML function
<br>
pointers get initialized to call internal BTL functions. I am trying to know
<br>
how MPI program communicate over TPC/IP for message passing in a distributed
<br>
setup and would appreciate if you can provide more details or any report
<br>
that you would like to share.
<br>
<p>Regards
<br>
Pranav Jadhav
<br>
<p>On Thu, Apr 16, 2009 at 11:38 AM, Timothy Hayes &lt;hayesti_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; From what I understand MPI_Send will hit 3 seprate layers of code before
</span><br>
<span class="quotelev1">&gt; reaching the socket file descriptors you've found. The PML (Point to Point
</span><br>
<span class="quotelev1">&gt; Messaging Layer) is a layer that bridges the MPI semantics from the
</span><br>
<span class="quotelev1">&gt; underlying point to point communications. The standard PML implementation is
</span><br>
<span class="quotelev1">&gt; called 'ob1' which is what indirectly calls the code you found. MPI_Send
</span><br>
<span class="quotelev1">&gt; should go through pml_isend() or pml_send() which will request a BTL (Byte
</span><br>
<span class="quotelev1">&gt; Transfer Layer) modules from the BML (BTL Management Layer) and invoke the
</span><br>
<span class="quotelev1">&gt; BTL's btl_prepare_src() or btl_alloc() functions before calling the
</span><br>
<span class="quotelev1">&gt; btl_send(). It becomes clearer when you step through it all with a debugger
</span><br>
<span class="quotelev1">&gt; though ;-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you're interested, I've recently implemented a BTL component of my own
</span><br>
<span class="quotelev1">&gt; and am now writing up a report on the process. It will be ready next week,
</span><br>
<span class="quotelev1">&gt; so if you think it might be useful, just let me know.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tim
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2009/4/16 pranav jadhav &lt;pranavjadhav_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi All,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am new to MPI library. I downloaded and started using OpenMPI library to
</span><br>
<span class="quotelev2">&gt;&gt; build MPI programs. I wanted to know how does MPI program communicates over
</span><br>
<span class="quotelev2">&gt;&gt; the network. I am trying to trace the flow of MPI_Send and MPI_Bcast APIS to
</span><br>
<span class="quotelev2">&gt;&gt; find the actual send/recv calls being used for sending the packets over the
</span><br>
<span class="quotelev2">&gt;&gt; network. I was trying to look into the code , I found some tcp related
</span><br>
<span class="quotelev2">&gt;&gt; socket connections in code base in &quot;ompi/mca/btl/tcp/&quot; but I am not able to
</span><br>
<span class="quotelev2">&gt;&gt; figureout how does MPI_Send works. Please if anyone knows how MPI_Send and
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Recv APIs works for communicating over network,please let me know.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thankyou,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; Pranav Jadhav
</span><br>
<span class="quotelev2">&gt;&gt; Stony Brook University
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt;
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
<p><p><p><pre>
-- 
Pranav Jadhav
Graduate Student
Computer Science Department
Stony Brook University
NY-11790.
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-5839/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5840.php">Jeff Squyres: "Re: [OMPI devel] MPI Message Communication over TCP/IP"</a>
<li><strong>Previous message:</strong> <a href="5838.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r20003 (Solaris	malloc.h issue)"</a>
<li><strong>In reply to:</strong> <a href="5834.php">Timothy Hayes: "Re: [OMPI devel] MPI Message Communication over TCP/IP"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5841.php">Jeff Squyres: "Re: [OMPI devel] MPI Message Communication over TCP/IP"</a>
<li><strong>Reply:</strong> <a href="5841.php">Jeff Squyres: "Re: [OMPI devel] MPI Message Communication over TCP/IP"</a>
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
