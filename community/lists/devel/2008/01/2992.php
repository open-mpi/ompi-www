<?
$subject_val = "Re: [OMPI devel] btl tcp port to ...";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 17 09:27:50 2008" -->
<!-- isoreceived="20080117142750" -->
<!-- sent="Thu, 17 Jan 2008 06:27:44 -0800 (PST)" -->
<!-- isosent="20080117142744" -->
<!-- name="Muhammad Atif" -->
<!-- email="m_atif_s_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] btl tcp port to ..." -->
<!-- id="182796.6913.qm_at_web52111.mail.re2.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="[OMPI devel] btl tcp port to ..." -->
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
<strong>Subject:</strong> Re: [OMPI devel] btl tcp port to ...<br>
<strong>From:</strong> Muhammad Atif (<em>m_atif_s_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-17 09:27:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2993.php">Jeff Squyres: "Re: [OMPI devel] btl tcp port to xensocket"</a>
<li><strong>Previous message:</strong> <a href="2991.php">Don Kerr: "Re: [OMPI devel] Open IB BTL development question"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, 
Thanks a lot for the reply. You have understood my problem correctly but I am unable to comprehend your solution or suggestion where to look into . The btl_size is shown as 12 and size as 8. But my understanding of mca_btl_tcp_comonent_exchange function is a touch different or perhaps wrong, so please correct me if I am wrong.

Once we do the exchange i.e. mca_btl_tcp_component_exchange:(), the size is calculated as 

size_t size = mca_btl_tcp_component.tcp_num_btls * sizeof(mca_btl_tcp_addr_t);

This is giving me correct size. I have only one tcp_num_btls, therefore size is given as 12. Now we allocate memory by 

mca_btl_tcp_addr_t *addrs = (mca_btl_tcp_addr_t *)malloc(size)

As size is 12, hence it gives me the correct allocation. And lastly

rc =  mca_pml_base_modex_send(&amp;mca_btl_tcp_component.super.btl_version, addrs, size);

This sends addrs with the size 12. Should not that work out of the box? Or are there more things attached which are not transparent?

Can you please give me some more explanation of this statement.... which I think holds the key to my solution, but I am not able to comprehend correctly.
&quot;We copy the information to be sent into the addrs array and increase xfer_size afterwards (telling the function how many bytes to be transferred).&quot;
Where exactly are we increasing the size? 

 
Best Regards,
Muhammad Atif

----- Original Message ----
From: Adrian Knoth &lt;adi_at_[hidden]&gt;
To: Open MPI Developers &lt;devel_at_[hidden]&gt;
Sent: Thursday, January 17, 2008 11:43:24 PM
Subject: Re: [OMPI devel] btl tcp port to xensocket


On Tue, Jan 15, 2008 at 04:07:02PM -0800, Muhammad Atif wrote:

&gt; Just for reference, I am trying to port btl/tcp to xensockets. Now if
&gt; i want to do modex send/recv , to my understanding,
 mca_btl_tcp_addr_t
&gt; is used (ref code/function is mca_btl_tcp_component_exchange). For
&gt; xensockets, I need to send only one additional integer remote_domU_id
&gt; across to say all the peers (in refined code it would be specific to
&gt; each domain, but i just want to have clear understanding before i
 move
&gt; any further). Now I have changed the struct mca_btl_tcp_addr_t
 present
&gt; in btl_tcp_addr.h and have added int r_domu_id. This makes the size
 of
&gt; structure 12. Upon receive mca_btl_tcp_proc_create() gives an error
&gt; after mca_pml_base_modex_recv() and at this statement if(0 != (size %
&gt; sizeof(mca_btl_tcp_addr_t))) that size do not match. It is still
&gt; expecting size 8, where as i have made the size 12.  I am unable to
&gt; pin point the exact location where the size 8 is still embedded. Any
&gt; ideas?

Just an idea: the mca_base_modex_recv error gives you this error:

           BTL_ERROR((&quot;mca_base_modex_recv: invalid size %d: btl-size:
       %d\n&quot;, size, sizeof(mca_btl_tcp_addr_t)));


So what is wrong? Is btl-size shown as 12 or as 8? It should be 12. And
is size just 8? So this means you forgot to include your new socket in
your modex_send_request.

See mca_btl_tcp_component_exchange: We copy the information to be sent
into the addrs array and increase xfer_size afterwards (telling the
function how many bytes to be transferred).

Perhaps you missed something there.


-- 
Cluster and Metacomputing Working Group
Friedrich-Schiller-Universit&#228;t Jena, Germany

private: <a href="http://adi.thur.de">http://adi.thur.de</a>
_______________________________________________
devel mailing list
devel_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>






      ____________________________________________________________________________________
Looking for last minute shopping deals?  
Find them fast with Yahoo! Search.  <a href="http://tools.search.yahoo.com/newsearch/category.php?category=shopping">http://tools.search.yahoo.com/newsearch/category.php?category=shopping</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-2992/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2993.php">Jeff Squyres: "Re: [OMPI devel] btl tcp port to xensocket"</a>
<li><strong>Previous message:</strong> <a href="2991.php">Don Kerr: "Re: [OMPI devel] Open IB BTL development question"</a>
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
