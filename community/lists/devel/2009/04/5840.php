<?
$subject_val = "Re: [OMPI devel] MPI Message Communication over TCP/IP";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 17 08:13:37 2009" -->
<!-- isoreceived="20090417121337" -->
<!-- sent="Fri, 17 Apr 2009 08:13:30 -0400" -->
<!-- isosent="20090417121330" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI Message Communication over TCP/IP" -->
<!-- id="9C791D48-54E8-4B46-B9B2-2D3BA90ACADC_at_cisco.com" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-17 08:13:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5841.php">Jeff Squyres: "Re: [OMPI devel] MPI Message Communication over TCP/IP"</a>
<li><strong>Previous message:</strong> <a href="5839.php">pranav jadhav: "Re: [OMPI devel] MPI Message Communication over TCP/IP"</a>
<li><strong>In reply to:</strong> <a href="5834.php">Timothy Hayes: "Re: [OMPI devel] MPI Message Communication over TCP/IP"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5877.php">Timothy Hayes: "Re: [OMPI devel] MPI Message Communication over TCP/IP"</a>
<li><strong>Reply:</strong> <a href="5877.php">Timothy Hayes: "Re: [OMPI devel] MPI Message Communication over TCP/IP"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 16, 2009, at 11:38 AM, Timothy Hayes wrote:
<br>
<p><span class="quotelev1">&gt; From what I understand MPI_Send will hit 3 separate layers of code  
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
<p>Ooohh... that would be positively yummy!  We can even host/link to  
<br>
that on www.open-mpi.org.  :-)
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5841.php">Jeff Squyres: "Re: [OMPI devel] MPI Message Communication over TCP/IP"</a>
<li><strong>Previous message:</strong> <a href="5839.php">pranav jadhav: "Re: [OMPI devel] MPI Message Communication over TCP/IP"</a>
<li><strong>In reply to:</strong> <a href="5834.php">Timothy Hayes: "Re: [OMPI devel] MPI Message Communication over TCP/IP"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5877.php">Timothy Hayes: "Re: [OMPI devel] MPI Message Communication over TCP/IP"</a>
<li><strong>Reply:</strong> <a href="5877.php">Timothy Hayes: "Re: [OMPI devel] MPI Message Communication over TCP/IP"</a>
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
