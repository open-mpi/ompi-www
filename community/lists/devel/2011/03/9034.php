<?
$subject_val = "[OMPI devel] BTL preferred_protocol , large message";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  8 12:09:32 2011" -->
<!-- isoreceived="20110308170932" -->
<!-- sent="Tue, 08 Mar 2011 18:12:26 +0100" -->
<!-- isosent="20110308171226" -->
<!-- name="Damien Guinier" -->
<!-- email="damien.guinier_at_[hidden]" -->
<!-- subject="[OMPI devel] BTL preferred_protocol , large message" -->
<!-- id="4D76637A.2020900_at_bull.net" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] BTL preferred_protocol , large message<br>
<strong>From:</strong> Damien Guinier (<em>damien.guinier_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-08 12:12:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9035.php">George Bosilca: "Re: [OMPI devel] BTL preferred_protocol , large message"</a>
<li><strong>Previous message:</strong> <a href="9033.php">George Bosilca: "Re: [OMPI devel] Communication Failure with orted_comm.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9035.php">George Bosilca: "Re: [OMPI devel] BTL preferred_protocol , large message"</a>
<li><strong>Reply:</strong> <a href="9035.php">George Bosilca: "Re: [OMPI devel] BTL preferred_protocol , large message"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff
<br>
<p>I'm working on large message exchange optimization. My optimization 
<br>
consists in &quot;choosing
<br>
the best protocol for each large message&quot;.
<br>
In fact,
<br>
- for each device, the way to chose the best protocol is different.
<br>
- the faster protocol for a given device depends on that device hardware 
<br>
and on the message
<br>
specifications.
<br>
<p>So the device/BTL itself is the best place to dynamically select the 
<br>
fastest protocol.
<br>
<p>Presently, for large messages, the protocol selection is only based on 
<br>
device capabilities.
<br>
My optimization consists in asking the device/BTL for a &quot;preferred 
<br>
protocol&quot; and
<br>
then make a choice based on :
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- the device capabilities and the BTL's recommendation.
<br>
<p><p>Technical view:
<br>
The optimization is located in mca_pml_ob1_send_request_start_btl(), 
<br>
after the device/btl selection.
<br>
In the large message section, I call a new function :
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mca_pml_ob1_preferred_protocol() =&gt; mca_bml_base_preferred_protocol()
<br>
This one will try to launch
<br>
&nbsp;&nbsp;&nbsp;&nbsp;btl-&gt;btl_preferred_protocol()
<br>
So, selecting a protocol before a large message in not in the critical 
<br>
path.
<br>
It is the BTL's responsibility to define this function to select a 
<br>
preferred protocol.
<br>
<p>If this function is not defined, nothing changes in the code path
<br>
To do this optimization , I had to add an interface to the btl module 
<br>
structure in &quot;btl.h&quot;, this is the drawback.
<br>
<p><pre>
----
I have already used this feature to optimize the &quot;shared memory&quot; 
device/BTL. I use the &quot;preferred_protocol&quot; feature to enable/disable
KNEM according to intra/inter socket communication. This optimization 
increases a &quot;IMB pingping benchmark&quot; bandwidth by ~36%.
----
The next step is now to use the &quot;preferred protocol&quot; feature with openib 
( with many IB cards)
Attached 2 patches:
1) BTL_preferred.patch:
    introduces the new preferred protocol interface
2) SM_KNEM_intra_socket.patch:
    defines the preferred protocol for the sm btl
    Note: Since the &quot;ess&quot; framework can't give us the &quot;socket locality
          information&quot;, I used hitopo that has been proposed in an RFC
          some times ago:
          <a href="http://www.open-mpi.org/community/lists/devel/2010/11/8677.php">http://www.open-mpi.org/community/lists/devel/2010/11/8677.php</a>


</pre>
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9034/BTL_preferred.path">BTL_preferred.path</a>
</ul>
<!-- attachment="BTL_preferred.path" -->
<hr>
<ul>
<li>text/x-diff attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9034/SM_KNEM_intra_socket.patch">SM_KNEM_intra_socket.patch</a>
</ul>
<!-- attachment="SM_KNEM_intra_socket.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9035.php">George Bosilca: "Re: [OMPI devel] BTL preferred_protocol , large message"</a>
<li><strong>Previous message:</strong> <a href="9033.php">George Bosilca: "Re: [OMPI devel] Communication Failure with orted_comm.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9035.php">George Bosilca: "Re: [OMPI devel] BTL preferred_protocol , large message"</a>
<li><strong>Reply:</strong> <a href="9035.php">George Bosilca: "Re: [OMPI devel] BTL preferred_protocol , large message"</a>
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
