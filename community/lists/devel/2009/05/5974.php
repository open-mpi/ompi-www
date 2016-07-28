<?
$subject_val = "Re: [OMPI devel] MPI Message Communication over TCP/IP";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  6 17:20:58 2009" -->
<!-- isoreceived="20090506212058" -->
<!-- sent="Wed, 6 May 2009 22:20:52 +0100" -->
<!-- isosent="20090506212052" -->
<!-- name="Timothy Hayes" -->
<!-- email="hayesti_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI Message Communication over TCP/IP" -->
<!-- id="f6ed2720905061420s6cb7c1ecwbc5dc1cacc398b91_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="98602FE7-4FF8-494C-BE19-0EF4000AD3C7_at_cisco.com" -->
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
<strong>Date:</strong> 2009-05-06 17:20:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5975.php">Jeff Squyres: "Re: [OMPI devel] MPI Message Communication over TCP/IP"</a>
<li><strong>Previous message:</strong> <a href="5973.php">Jeff Squyres: "Re: [OMPI devel] MPI Message Communication over TCP/IP"</a>
<li><strong>In reply to:</strong> <a href="5971.php">Jeff Squyres: "Re: [OMPI devel] MPI Message Communication over TCP/IP"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5975.php">Jeff Squyres: "Re: [OMPI devel] MPI Message Communication over TCP/IP"</a>
<li><strong>Reply:</strong> <a href="5975.php">Jeff Squyres: "Re: [OMPI devel] MPI Message Communication over TCP/IP"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Are you talking about my document? If so, that's no problem at all. If there
<br>
are any mistakes in my facts just let me know and I'll change them.
<br>
<p>Tim
<br>
<p>2009/5/6 Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Would you mind if I posted this on www.open-mpi.org?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 25, 2009, at 10:05 AM, Timothy Hayes wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I uploaded it to <a href="http://www.hotshare.net/file/131218-829472246c.html">http://www.hotshare.net/file/131218-829472246c.html</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm not sure if it's any good or even if it's 100% accurate; but if
</span><br>
<span class="quotelev2">&gt;&gt; someone gets any use out of it, that would be good.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Tim
</span><br>
<span class="quotelev2">&gt;&gt; 2009/4/17 Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 16, 2009, at 11:38 AM, Timothy Hayes wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; From what I understand MPI_Send will hit 3 separate layers of code before
</span><br>
<span class="quotelev2">&gt;&gt; reaching the socket file descriptors you've found. The PML (Point to Point
</span><br>
<span class="quotelev2">&gt;&gt; Messaging Layer) is a layer that bridges the MPI semantics from the
</span><br>
<span class="quotelev2">&gt;&gt; underlying point to point communications. The standard PML implementation is
</span><br>
<span class="quotelev2">&gt;&gt; called 'ob1' which is what indirectly calls the code you found. MPI_Send
</span><br>
<span class="quotelev2">&gt;&gt; should go through pml_isend() or pml_send() which will request a BTL (Byte
</span><br>
<span class="quotelev2">&gt;&gt; Transfer Layer) modules from the BML (BTL Management Layer) and invoke the
</span><br>
<span class="quotelev2">&gt;&gt; BTL's btl_prepare_src() or btl_alloc() functions before calling the
</span><br>
<span class="quotelev2">&gt;&gt; btl_send(). It becomes clearer when you step through it all with a debugger
</span><br>
<span class="quotelev2">&gt;&gt; though ;-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If you're interested, I've recently implemented a BTL component of my own
</span><br>
<span class="quotelev2">&gt;&gt; and am now writing up a report on the process. It will be ready next week,
</span><br>
<span class="quotelev2">&gt;&gt; so if you think it might be useful, just let me know.
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
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-5974/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5975.php">Jeff Squyres: "Re: [OMPI devel] MPI Message Communication over TCP/IP"</a>
<li><strong>Previous message:</strong> <a href="5973.php">Jeff Squyres: "Re: [OMPI devel] MPI Message Communication over TCP/IP"</a>
<li><strong>In reply to:</strong> <a href="5971.php">Jeff Squyres: "Re: [OMPI devel] MPI Message Communication over TCP/IP"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5975.php">Jeff Squyres: "Re: [OMPI devel] MPI Message Communication over TCP/IP"</a>
<li><strong>Reply:</strong> <a href="5975.php">Jeff Squyres: "Re: [OMPI devel] MPI Message Communication over TCP/IP"</a>
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
