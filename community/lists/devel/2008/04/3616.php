<?
$subject_val = "Re: [OMPI devel] RFC: changes to modex";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  2 10:35:19 2008" -->
<!-- isoreceived="20080402143519" -->
<!-- sent="Wed, 2 Apr 2008 10:35:03 -0400" -->
<!-- isosent="20080402143503" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: changes to modex" -->
<!-- id="EE439991-E02B-4598-9AE8-BB92552076B5_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20080402142727.GD3614_at_minantech.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: changes to modex<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-02 10:35:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3617.php">Terry Dontje: "Re: [OMPI devel] RFC: changes to modex"</a>
<li><strong>Previous message:</strong> <a href="3615.php">Gleb Natapov: "Re: [OMPI devel] RFC: changes to modex"</a>
<li><strong>In reply to:</strong> <a href="3615.php">Gleb Natapov: "Re: [OMPI devel] RFC: changes to modex"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3619.php">Gleb Natapov: "Re: [OMPI devel] RFC: changes to modex"</a>
<li><strong>Reply:</strong> <a href="3619.php">Gleb Natapov: "Re: [OMPI devel] RFC: changes to modex"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 2, 2008, at 10:27 AM, Gleb Natapov wrote:
<br>
<span class="quotelev1">&gt; In the case of openib BTL what part of modex are you going to send  
</span><br>
<span class="quotelev1">&gt; using
</span><br>
<span class="quotelev1">&gt; proc_send() and what part using node_send()?
</span><br>
<p><p>In the /tmp-public/openib-cpc2 branch, almost all of it will go to the  
<br>
node_send().  The CPC's will likely now get 2 buffers: one for  
<br>
node_send, and one for proc_send.
<br>
<p>The ibcm CPC, for example, can do everything in node_send (the  
<br>
service_id that I use in the ibcm calls is the proc's PID; ORTE may  
<br>
supply peer PIDs directly -- haven't decided if that's a good idea yet  
<br>
or not -- if it doesn't, the PID can be sent in the proc_send data).   
<br>
The rdmacm CPC may need a proc_send for the listening TCP port number;  
<br>
still need to figure that one out.
<br>
<p>If we use carto to limit hcas/ports are used on a given host on a per- 
<br>
proc basis, then we can include some proc_send data to say &quot;this proc  
<br>
only uses indexes X,Y,Z from the node data&quot;.  The indexes can be  
<br>
either uint8_ts, or maybe even a variable length bitmap.
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
<li><strong>Next message:</strong> <a href="3617.php">Terry Dontje: "Re: [OMPI devel] RFC: changes to modex"</a>
<li><strong>Previous message:</strong> <a href="3615.php">Gleb Natapov: "Re: [OMPI devel] RFC: changes to modex"</a>
<li><strong>In reply to:</strong> <a href="3615.php">Gleb Natapov: "Re: [OMPI devel] RFC: changes to modex"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3619.php">Gleb Natapov: "Re: [OMPI devel] RFC: changes to modex"</a>
<li><strong>Reply:</strong> <a href="3619.php">Gleb Natapov: "Re: [OMPI devel] RFC: changes to modex"</a>
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
