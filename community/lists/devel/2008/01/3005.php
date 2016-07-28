<?
$subject_val = "Re: [OMPI devel] btl tcp port to xensocket";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 18 19:54:25 2008" -->
<!-- isoreceived="20080119005425" -->
<!-- sent="Fri, 18 Jan 2008 19:54:09 -0500" -->
<!-- isosent="20080119005409" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] btl tcp port to xensocket" -->
<!-- id="6CD17D67-7194-4B67-B6AB-9B480097121F_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="208561.75787.qm_at_web52109.mail.re2.yahoo.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-18 19:54:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3006.php">Jeff Squyres: "Re: [OMPI devel] configure patch"</a>
<li><strong>Previous message:</strong> <a href="3004.php">Jeff Squyres: "Re: [OMPI devel] patch for mpirun.1 manpage"</a>
<li><strong>In reply to:</strong> <a href="2997.php">Muhammad Atif: "Re: [OMPI devel] btl tcp port to xensocket"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3013.php">Muhammad Atif: "Re: [OMPI devel] btl tcp port to xensocket"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 17, 2008, at 7:08 PM, Muhammad Atif wrote:
<br>
<p><span class="quotelev1">&gt; Thanks again. Nope.. at the moment I am doing the lame stuff i.e.  
</span><br>
<span class="quotelev1">&gt; simply changing the tcp code. So I have not created another btl  
</span><br>
<span class="quotelev1">&gt; component. I know its not recommended thing, but I just wanted to  
</span><br>
<span class="quotelev1">&gt; try before committing.
</span><br>
<p>That makes perfect sense.  Ok, so you're not running into a component  
<br>
name collision within the modex; that's good.
<br>
<p><span class="quotelev1">&gt; Apart from xensocket specific stuff, all what I have done inside the  
</span><br>
<span class="quotelev1">&gt; btl/tcp code is to change the structure
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  struct  mca_btl_tcp_addr_t {
</span><br>
<span class="quotelev1">&gt;     struct in_addr addr_inet;     /**&lt; IPv4 address in network byte  
</span><br>
<span class="quotelev1">&gt; order */
</span><br>
<span class="quotelev1">&gt;     in_port_t      addr_port;     /**&lt; listen port */
</span><br>
<span class="quotelev1">&gt;     unsigned short addr_inuse;    /**&lt; local meaning only */
</span><br>
<span class="quotelev1">&gt;     int           xs_domU_ref;       /**&lt;xs: domU memory reference  */
</span><br>
<span class="quotelev1">&gt; };
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I wanted this structure to be passed on to all peers through  
</span><br>
<span class="quotelev1">&gt; component exchange (modex send/recv).  This way I have the normal  
</span><br>
<span class="quotelev1">&gt; socket listen port, its address and xensocket memory reference (its  
</span><br>
<span class="quotelev1">&gt; not complete as it is missing some other info, but lets stick to  
</span><br>
<span class="quotelev1">&gt; basic stuff).
</span><br>
<p>Sounds reasonable.
<br>
<p><span class="quotelev1">&gt; The second question is regarding btl tcp recv. I have seen a couple  
</span><br>
<span class="quotelev1">&gt; of emails with some explanation specific to that particular user but  
</span><br>
<span class="quotelev1">&gt; cannot seem to answer this question (ref to previous email).
</span><br>
<p><span class="quotelev1"> &gt; Second question is regarding the receive part of openmpi. In my
</span><br>
<span class="quotelev1"> &gt; understanding, once Recv api is called, the control goes through PML
</span><br>
<span class="quotelev1"> &gt; layer and everything initializes there. However, I am unable to get
</span><br>
<span class="quotelev1"> &gt; a lock at the layer/file/function where the receive socket polling
</span><br>
<span class="quotelev1"> &gt; is done. There are callbacks, but where or how exactly the openMPI
</span><br>
<span class="quotelev1"> &gt; knows that message has in fact arrived. Any pointer will do :)
</span><br>
<p>All file descriptor process is handled by libevent down in opal.   
<br>
libevent is a third party library that we imported into Open MPI (and  
<br>
modified a bit) that handles generic fd issues.  For example, we  
<br>
register fd's with libevent and tell libevent that we want callbacks  
<br>
when the fd is ready for reading or writing (depending on the context).
<br>
<p>libevent's event loop is invoked by opal_progress(), which is called  
<br>
in lots of places.  Hence, the tcp btl can be called back whenever  
<br>
opal_progress() is invoked, because opal_progress() will invoke  
<br>
libevent, and if any socket fd's that the tcp btl registered are  
<br>
reading for reading, or if there are pending writes occurred on some  
<br>
socket fd's and those fd's are ready for writing, their callbacks will  
<br>
be invoked.
<br>
<p>Make sense?
<br>
<p><span class="quotelev1">&gt; PS: I would love if you do some explanation of modex recv as well. ;)
</span><br>
<span class="quotelev1">&gt; Thanks for all the support you guys are giving.
</span><br>
<p>I think Adrian was referring to how the modex works.  Remember that  
<br>
the modex send is just a local memcpy; all the modex data is them  
<br>
glommed up into a single network send communication later.  After  
<br>
that, it gets a big network message with *everyone's* modex data, that  
<br>
is then split up and categorized by component and sender.  The modex  
<br>
receive is then another memcpy.
<br>
<p>So as to why you're still getting sizeof(mca_btl_tcp_addr_t)==8 in the  
<br>
tcp modex receiver, the only thing I can think of is that you somehow  
<br>
didn't recompile properly.  Did you try making clean in the tcp btl  
<br>
dir and then a &quot;make all&quot; to ensure that everything recompiled  
<br>
properly with your modified struct in btl_tcp_addr.h?  Normally, the  
<br>
build system should take care of such dependencies, but...
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
<li><strong>Next message:</strong> <a href="3006.php">Jeff Squyres: "Re: [OMPI devel] configure patch"</a>
<li><strong>Previous message:</strong> <a href="3004.php">Jeff Squyres: "Re: [OMPI devel] patch for mpirun.1 manpage"</a>
<li><strong>In reply to:</strong> <a href="2997.php">Muhammad Atif: "Re: [OMPI devel] btl tcp port to xensocket"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3013.php">Muhammad Atif: "Re: [OMPI devel] btl tcp port to xensocket"</a>
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
