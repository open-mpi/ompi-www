<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jun 13 11:50:33 2007" -->
<!-- isoreceived="20070613155033" -->
<!-- sent="Wed, 13 Jun 2007 11:50:07 -0400" -->
<!-- isosent="20070613155007" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15041" -->
<!-- id="B2073F59-CA6B-42F0-AB49-E709CF5AE708_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.WNT.4.64.0706131126540.2008_at_voyager" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-13 11:50:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1680.php">Galen Shipman: "Re: [OMPI devel] Problem with openib on demand connection bring up."</a>
<li><strong>Previous message:</strong> <a href="1678.php">Torsten Hoefler: "Re: [OMPI devel] Problem with openib on demand connection bring up."</a>
<li><strong>In reply to:</strong> <a href="1676.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15041"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1681.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15041"</a>
<li><strong>Reply:</strong> <a href="1681.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15041"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 13, 2007, at 11:32 AM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; Right ... blame me :) The problem is that we have to know the  
</span><br>
<span class="quotelev1">&gt; number of
</span><br>
<span class="quotelev1">&gt; interfaces in order to be able to generate the MCA parameters, and the
</span><br>
<span class="quotelev1">&gt; number of interfaces will only be know inside the init call (and I  
</span><br>
<span class="quotelev1">&gt; really
</span><br>
<span class="quotelev1">&gt; doon't think it's a good idea to move this part of the code in the  
</span><br>
<span class="quotelev1">&gt; open
</span><br>
<span class="quotelev1">&gt; function).
</span><br>
<p>Understood and agree.
<br>
<p><span class="quotelev1">&gt; I don't mind having some MCA parameters that are never showed by  
</span><br>
<span class="quotelev1">&gt; ompi_info
</span><br>
<span class="quotelev1">&gt; (we already have the hidden ones). Anyway, for TCP by default there  
</span><br>
<span class="quotelev1">&gt; is the
</span><br>
<span class="quotelev1">&gt; btl_tcp_latency and btl_tcp_bandwidth which will be used as a default
</span><br>
<span class="quotelev1">&gt; value for all NICs. For the others, a quick google search on our  
</span><br>
<span class="quotelev1">&gt; mailing
</span><br>
<span class="quotelev1">&gt; list will return all information about how to set the latency and
</span><br>
<span class="quotelev1">&gt; bandwidth by NIC. MX have a similar mechanism ...
</span><br>
<p>Are you saying that the TCP and MX BTLs have similar variable MCA  
<br>
parameters?
<br>
<p>I think the &quot;hidden&quot; MCA parameters are a different issue; they were  
<br>
created for a different purpose (users are not supposed to see/set  
<br>
them).  These variable parameters would be intended to be used by the  
<br>
users, but they would have no way of finding out a) that they exist,  
<br>
and b) what they are.  That's why I think that the MCA parameters may  
<br>
not be the right mechanism for this kind of information.
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
<li><strong>Next message:</strong> <a href="1680.php">Galen Shipman: "Re: [OMPI devel] Problem with openib on demand connection bring up."</a>
<li><strong>Previous message:</strong> <a href="1678.php">Torsten Hoefler: "Re: [OMPI devel] Problem with openib on demand connection bring up."</a>
<li><strong>In reply to:</strong> <a href="1676.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15041"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1681.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15041"</a>
<li><strong>Reply:</strong> <a href="1681.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15041"</a>
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
