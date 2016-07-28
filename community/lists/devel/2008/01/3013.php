<?
$subject_val = "Re: [OMPI devel] btl tcp port to xensocket";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 21 05:09:40 2008" -->
<!-- isoreceived="20080121100940" -->
<!-- sent="Mon, 21 Jan 2008 02:09:10 -0800 (PST)" -->
<!-- isosent="20080121100910" -->
<!-- name="Muhammad Atif" -->
<!-- email="m_atif_s_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] btl tcp port to xensocket" -->
<!-- id="557832.65708.qm_at_web52111.mail.re2.yahoo.com" -->
<!-- charset="us-ascii" -->
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
<strong>Date:</strong> 2008-01-21 05:09:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3014.php">Dean Dauger, Ph. D.: "Re: [OMPI devel] dropping a pls module into an Open MPI build"</a>
<li><strong>Previous message:</strong> <a href="3012.php">Gleb Natapov: "Re: [OMPI devel] open ib btl and xrc"</a>
<li><strong>Maybe in reply to:</strong> <a href="2947.php">Muhammad Atif: "[OMPI devel] btl tcp port to xensocket"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks a lot.. You and  Adrian have cleared a lot of my concepts and its time for me to develop a functional framework. I will get back to you guys when I am done with framework..... and having more problems and/or conceptual issues. 
<br>
<p>The mca_btl_tcp_addr_t issue was resolved as correctly pointed by you.  I didnt go into the detail, but i think I must have had corrupted the code somewhere. The fresh tar, configure and make all install did the trick.
<br>
&nbsp;
<br>
Best Regards,
<br>
Muhammad Atif
<br>
<p>----- Original Message ----
<br>
From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
<br>
To: Open MPI Developers &lt;devel_at_[hidden]&gt;
<br>
Sent: Saturday, January 19, 2008 11:54:09 AM
<br>
Subject: Re: [OMPI devel] btl tcp port to xensocket
<br>
<p><p>On Jan 17, 2008, at 7:08 PM, Muhammad Atif wrote:
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
&nbsp;&nbsp;
<br>
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
<span class="quotelev1">&gt;     int           xs_domU_ref;       /**&lt;xs: domU memory reference
</span><br>
&nbsp;&nbsp;*/
<br>
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
&nbsp;&nbsp;
<br>
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
&nbsp;&nbsp;
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
&nbsp;&nbsp;
<br>
is then split up and categorized by component and sender.  The modex  
<br>
receive is then another memcpy.
<br>
<p>So as to why you're still getting sizeof(mca_btl_tcp_addr_t)==8 in the
<br>
&nbsp;&nbsp;
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
_______________________________________________
devel mailing list
devel_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
      ____________________________________________________________________________________
Looking for last minute shopping deals?  
Find them fast with Yahoo! Search.  <a href="http://tools.search.yahoo.com/newsearch/category.php?category=shopping">http://tools.search.yahoo.com/newsearch/category.php?category=shopping</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-3013/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3014.php">Dean Dauger, Ph. D.: "Re: [OMPI devel] dropping a pls module into an Open MPI build"</a>
<li><strong>Previous message:</strong> <a href="3012.php">Gleb Natapov: "Re: [OMPI devel] open ib btl and xrc"</a>
<li><strong>Maybe in reply to:</strong> <a href="2947.php">Muhammad Atif: "[OMPI devel] btl tcp port to xensocket"</a>
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
