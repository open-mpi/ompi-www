<?
$subject_val = "Re: [OMPI users] Newbie: API usage";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Aug 16 07:37:16 2008" -->
<!-- isoreceived="20080816113716" -->
<!-- sent="Sat, 16 Aug 2008 07:37:09 -0400" -->
<!-- isosent="20080816113709" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Newbie: API usage" -->
<!-- id="B6065B82-FD75-4189-BAE1-5DB37BDC216A_at_cisco.com" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="01B49D24DCA6104D925B3BCAC891D08C118C53_at_XMBTX133.northgrum.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Newbie: API usage<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-16 07:37:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6359.php">Jeff Squyres: "Re: [OMPI users] Segmentation fault (11) Address not mapped (1)"</a>
<li><strong>Previous message:</strong> <a href="6357.php">Dani&#235;l Mantione: "Re: [OMPI users] problem with alltoall with ppn=8"</a>
<li><strong>In reply to:</strong> <a href="6356.php">Hartzman, Les (MS): "[OMPI users] Newbie: API usage"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is allowable by the MPI API.  You're specifically telling MPI &quot;I  
<br>
don't care to know when that send has completed.&quot;  See the section for  
<br>
MPI_REQUEST_FREE here:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.mpi-forum.org/docs/mpi-11-html/node47.html#Node47">http://www.mpi-forum.org/docs/mpi-11-html/node47.html#Node47</a>
<br>
<p>It's debatable whether that's good programming practice or not (IMHO),  
<br>
but it is allowable.  :-)
<br>
<p>Note that there is a clarification going on in the MPI-2.2  
<br>
standardization process such that it may well be impossible to know  
<br>
when a request has completed if you use this pattern (freeing the  
<br>
request before testing for completion).  The current MPI-2.0 (and soon- 
<br>
to-be-published 2.1) spec says that you can know when it has completed  
<br>
by the presence of another event, such as receiving a message from a  
<br>
peer that implies that they must have received the send that you  
<br>
sent.  But this may not always be true -- successful completion of a  
<br>
receive, even from a peer process that must have received your send,  
<br>
does *not* imply successful completion of your send request.  The  
<br>
local side may still be doing some internal processing such that your  
<br>
send request has not completed yet.  For example, if the local side is  
<br>
still freeing registered memory, it would be disastrous for the user  
<br>
to free() the memory.
<br>
<p><p><p>On Aug 15, 2008, at 6:17 PM, Hartzman, Les (MS) wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I&#146;m looking over some MPI code and saw something that concerned me.  
</span><br>
<span class="quotelev1">&gt; Being a bit new to MPI I don&#146;t know if this is a bug or &#147;normal&#146;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A call to MPI_Isend was made and followed by an MPI_Reqest_free on  
</span><br>
<span class="quotelev1">&gt; the exact same request handle used in the Isend call. I saw the same  
</span><br>
<span class="quotelev1">&gt; thing for ISsend.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is this normal or is the person/persons doing this taking changes  
</span><br>
<span class="quotelev1">&gt; that all will work without ever checking for the completion of the  
</span><br>
<span class="quotelev1">&gt; issued Sends?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Les
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="6359.php">Jeff Squyres: "Re: [OMPI users] Segmentation fault (11) Address not mapped (1)"</a>
<li><strong>Previous message:</strong> <a href="6357.php">Dani&#235;l Mantione: "Re: [OMPI users] problem with alltoall with ppn=8"</a>
<li><strong>In reply to:</strong> <a href="6356.php">Hartzman, Les (MS): "[OMPI users] Newbie: API usage"</a>
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
