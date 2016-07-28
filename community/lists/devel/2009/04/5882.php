<?
$subject_val = "Re: [OMPI devel] MPI Message Communication over TCP/IP";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Apr 26 03:39:35 2009" -->
<!-- isoreceived="20090426073935" -->
<!-- sent="Sun, 26 Apr 2009 03:39:30 -0400" -->
<!-- isosent="20090426073930" -->
<!-- name="pranav jadhav" -->
<!-- email="pranavjadhav_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI Message Communication over TCP/IP" -->
<!-- id="1b1179850904260039u6b9c1aa1sec85cc1ed3ff474e_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="f6ed2720904250705od739a30r227b77e07a77d26b_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2009-04-26 03:39:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5883.php">Jeff Squyres: "Re: [OMPI devel] predefined ompi_t types break strict-aliasing rules"</a>
<li><strong>Previous message:</strong> <a href="5881.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Open MPI mirrors list"</a>
<li><strong>In reply to:</strong> <a href="5877.php">Timothy Hayes: "Re: [OMPI devel] MPI Message Communication over TCP/IP"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/05/5971.php">Jeff Squyres: "Re: [OMPI devel] MPI Message Communication over TCP/IP"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Thanks Jeff and Tim for providing the details about the layered structure of
<br>
<p>OpenMPI library source code. The document you sent on Xen based VM
<br>
communication for HEC clusters is indeed good and covered the extensive
<br>
details about the BTL components.It helped me a lot in understanding the
<br>
working of BTL layer.Thanks once again :)
<br>
<p>Regards
<br>
Pranav
<br>
<p>On Sat, Apr 25, 2009 at 10:05 AM, Timothy Hayes &lt;hayesti_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I uploaded it to <a href="http://www.hotshare.net/file/131218-829472246c.html">http://www.hotshare.net/file/131218-829472246c.html</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm not sure if it's any good or even if it's 100% accurate; but if someone
</span><br>
<span class="quotelev1">&gt; gets any use out of it, that would be good.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tim
</span><br>
<span class="quotelev1">&gt; 2009/4/17 Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  On Apr 16, 2009, at 11:38 AM, Timothy Hayes wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; From what I understand MPI_Send will hit 3 separate layers of code before
</span><br>
<span class="quotelev3">&gt;&gt;&gt; reaching the socket file descriptors you've found. The PML (Point to Point
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Messaging Layer) is a layer that bridges the MPI semantics from the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; underlying point to point communications. The standard PML implementation is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; called 'ob1' which is what indirectly calls the code you found. MPI_Send
</span><br>
<span class="quotelev3">&gt;&gt;&gt; should go through pml_isend() or pml_send() which will request a BTL (Byte
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Transfer Layer) modules from the BML (BTL Management Layer) and invoke the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; BTL's btl_prepare_src() or btl_alloc() functions before calling the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; btl_send(). It becomes clearer when you step through it all with a debugger
</span><br>
<span class="quotelev3">&gt;&gt;&gt; though ;-)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If you're interested, I've recently implemented a BTL component of my own
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and am now writing up a report on the process. It will be ready next week,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; so if you think it might be useful, just let me know.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ooohh... that would be positively yummy!  We can even host/link to that on
</span><br>
<span class="quotelev2">&gt;&gt; www.open-mpi.org.  :-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
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
<span class="quotelev2">&gt;&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-5882/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5883.php">Jeff Squyres: "Re: [OMPI devel] predefined ompi_t types break strict-aliasing rules"</a>
<li><strong>Previous message:</strong> <a href="5881.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Open MPI mirrors list"</a>
<li><strong>In reply to:</strong> <a href="5877.php">Timothy Hayes: "Re: [OMPI devel] MPI Message Communication over TCP/IP"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/05/5971.php">Jeff Squyres: "Re: [OMPI devel] MPI Message Communication over TCP/IP"</a>
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
