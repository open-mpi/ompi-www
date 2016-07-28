<?
$subject_val = "[OMPI devel] btl tcp port to xensocket";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan  9 01:51:59 2008" -->
<!-- isoreceived="20080109065159" -->
<!-- sent="Tue, 8 Jan 2008 22:51:45 -0800 (PST)" -->
<!-- isosent="20080109065145" -->
<!-- name="Muhammad Atif" -->
<!-- email="m_atif_s_at_[hidden]" -->
<!-- subject="[OMPI devel] btl tcp port to xensocket" -->
<!-- id="247652.66285.qm_at_web52107.mail.re2.yahoo.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] btl tcp port to xensocket<br>
<strong>From:</strong> Muhammad Atif (<em>m_atif_s_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-09 01:51:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2948.php">Adrian Knoth: "Re: [OMPI devel] btl tcp port to xensocket"</a>
<li><strong>Previous message:</strong> <a href="2946.php">Elan Ruusam&#228;e: "[OMPI devel] configure patch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2948.php">Adrian Knoth: "Re: [OMPI devel] btl tcp port to xensocket"</a>
<li><strong>Reply:</strong> <a href="2948.php">Adrian Knoth: "Re: [OMPI devel] btl tcp port to xensocket"</a>
<li><strong>Maybe reply:</strong> <a href="2959.php">Muhammad Atif: "Re: [OMPI devel] btl tcp port to xensocket"</a>
<li><strong>Maybe reply:</strong> <a href="2981.php">Muhammad Atif: "Re: [OMPI devel] btl tcp port to xensocket"</a>
<li><strong>Maybe reply:</strong> <a href="2997.php">Muhammad Atif: "Re: [OMPI devel] btl tcp port to xensocket"</a>
<li><strong>Maybe reply:</strong> <a href="3013.php">Muhammad Atif: "Re: [OMPI devel] btl tcp port to xensocket"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Developers
<br>
I am planning to port tcp component to xensocket, which is a fast interdomain communication mechanism for guest domains in Xen. I may add that Xensocket is one way socket and I must admit before writing further that I am totally new to OpenMPI or any other mpi implementation for that matter. 
<br>
<p>As per design, and the fact that these sockets are not normal sockets, I have to pass certain information (basically memory references, guest domain info etc) to other peers once sockets have been created. I understand that mca_pml_base_modex_send and recv (or simply using  mca_btl_tcp_component_exchange) can be used to exchange information, but I cannot seem to get them to communicate. So to put my question in a very simple way..... I want to create a socket structure containing necessary information, and then pass it to all other peers before start of actual mpi communication. What is the easiest way to do it.
<br>
<p>Any pointer to right direction is appreciated. 
<br>
&nbsp;
<br>
Thanks and Best Regards
<br>
Atif
<br>
<p><p><p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;____________________________________________________________________________________
<br>
Be a better friend, newshound, and 
<br>
know-it-all with Yahoo! Mobile.  Try it now.  <a href="http://mobile.yahoo.com/;_ylt=Ahu06i62sR8HDtDypao8Wcj9tAcJ">http://mobile.yahoo.com/;_ylt=Ahu06i62sR8HDtDypao8Wcj9tAcJ</a> 
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-2947/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2948.php">Adrian Knoth: "Re: [OMPI devel] btl tcp port to xensocket"</a>
<li><strong>Previous message:</strong> <a href="2946.php">Elan Ruusam&#228;e: "[OMPI devel] configure patch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2948.php">Adrian Knoth: "Re: [OMPI devel] btl tcp port to xensocket"</a>
<li><strong>Reply:</strong> <a href="2948.php">Adrian Knoth: "Re: [OMPI devel] btl tcp port to xensocket"</a>
<li><strong>Maybe reply:</strong> <a href="2959.php">Muhammad Atif: "Re: [OMPI devel] btl tcp port to xensocket"</a>
<li><strong>Maybe reply:</strong> <a href="2981.php">Muhammad Atif: "Re: [OMPI devel] btl tcp port to xensocket"</a>
<li><strong>Maybe reply:</strong> <a href="2997.php">Muhammad Atif: "Re: [OMPI devel] btl tcp port to xensocket"</a>
<li><strong>Maybe reply:</strong> <a href="3013.php">Muhammad Atif: "Re: [OMPI devel] btl tcp port to xensocket"</a>
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
