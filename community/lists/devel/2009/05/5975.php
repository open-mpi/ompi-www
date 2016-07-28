<?
$subject_val = "Re: [OMPI devel] MPI Message Communication over TCP/IP";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  6 17:23:15 2009" -->
<!-- isoreceived="20090506212315" -->
<!-- sent="Wed, 6 May 2009 17:23:04 -0400" -->
<!-- isosent="20090506212304" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI Message Communication over TCP/IP" -->
<!-- id="D9C0E5CB-EC21-4D1F-B492-860CEE2C5CEC_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="f6ed2720905061420s6cb7c1ecwbc5dc1cacc398b91_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-06 17:23:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5976.php">Timothy Hayes: "Re: [OMPI devel] MPI Message Communication over TCP/IP"</a>
<li><strong>Previous message:</strong> <a href="5974.php">Timothy Hayes: "Re: [OMPI devel] MPI Message Communication over TCP/IP"</a>
<li><strong>In reply to:</strong> <a href="5974.php">Timothy Hayes: "Re: [OMPI devel] MPI Message Communication over TCP/IP"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5976.php">Timothy Hayes: "Re: [OMPI devel] MPI Message Communication over TCP/IP"</a>
<li><strong>Reply:</strong> <a href="5976.php">Timothy Hayes: "Re: [OMPI devel] MPI Message Communication over TCP/IP"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, I'm talking about your document -- sorry -- I just replied to the  
<br>
wrong guy!  :-)
<br>
<p>If you have a bibtex reference for it, that would be most helpful.
<br>
<p><p>On May 6, 2009, at 5:20 PM, Timothy Hayes wrote:
<br>
<p><span class="quotelev1">&gt; Are you talking about my document? If so, that's no problem at all.  
</span><br>
<span class="quotelev1">&gt; If there are any mistakes in my facts just let me know and I'll  
</span><br>
<span class="quotelev1">&gt; change them.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tim
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2009/5/6 Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Thanks!
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm not sure if it's any good or even if it's 100% accurate; but if  
</span><br>
<span class="quotelev1">&gt; someone gets any use out of it, that would be good.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tim
</span><br>
<span class="quotelev1">&gt; 2009/4/17 Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 16, 2009, at 11:38 AM, Timothy Hayes wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; From what I understand MPI_Send will hit 3 separate layers of code  
</span><br>
<span class="quotelev1">&gt; before reaching the socket file descriptors you've found. The PML  
</span><br>
<span class="quotelev1">&gt; (Point to Point Messaging Layer) is a layer that bridges the MPI  
</span><br>
<span class="quotelev1">&gt; semantics from the underlying point to point communications. The  
</span><br>
<span class="quotelev1">&gt; standard PML implementation is called 'ob1' which is what indirectly  
</span><br>
<span class="quotelev1">&gt; calls the code you found. MPI_Send should go through pml_isend() or  
</span><br>
<span class="quotelev1">&gt; pml_send() which will request a BTL (Byte Transfer Layer) modules  
</span><br>
<span class="quotelev1">&gt; from the BML (BTL Management Layer) and invoke the BTL's  
</span><br>
<span class="quotelev1">&gt; btl_prepare_src() or btl_alloc() functions before calling the  
</span><br>
<span class="quotelev1">&gt; btl_send(). It becomes clearer when you step through it all with a  
</span><br>
<span class="quotelev1">&gt; debugger though ;-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you're interested, I've recently implemented a BTL component of  
</span><br>
<span class="quotelev1">&gt; my own and am now writing up a report on the process. It will be  
</span><br>
<span class="quotelev1">&gt; ready next week, so if you think it might be useful, just let me know.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ooohh... that would be positively yummy!  We can even host/link to  
</span><br>
<span class="quotelev1">&gt; that on www.open-mpi.org.  :-)
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
<li><strong>Next message:</strong> <a href="5976.php">Timothy Hayes: "Re: [OMPI devel] MPI Message Communication over TCP/IP"</a>
<li><strong>Previous message:</strong> <a href="5974.php">Timothy Hayes: "Re: [OMPI devel] MPI Message Communication over TCP/IP"</a>
<li><strong>In reply to:</strong> <a href="5974.php">Timothy Hayes: "Re: [OMPI devel] MPI Message Communication over TCP/IP"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5976.php">Timothy Hayes: "Re: [OMPI devel] MPI Message Communication over TCP/IP"</a>
<li><strong>Reply:</strong> <a href="5976.php">Timothy Hayes: "Re: [OMPI devel] MPI Message Communication over TCP/IP"</a>
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
