<?
$subject_val = "Re: [OMPI devel] RFC: changes to modex";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr  3 11:35:49 2008" -->
<!-- isoreceived="20080403153549" -->
<!-- sent="Thu, 3 Apr 2008 11:35:39 -0400" -->
<!-- isosent="20080403153539" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: changes to modex" -->
<!-- id="6378DE5C-67CA-49A7-94D4-FBEDA38F4D65_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="73BCD70C-018C-4F52-BD07-574C5D29364B_at_cisco.com" -->
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
<strong>Date:</strong> 2008-04-03 11:35:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3650.php">Aurélien Bouteiller: "[OMPI devel] MPI_Comm_connect/Accept"</a>
<li><strong>Previous message:</strong> <a href="3648.php">Jeff Squyres: "Re: [OMPI devel] RFC: changes to modex"</a>
<li><strong>In reply to:</strong> <a href="3648.php">Jeff Squyres: "Re: [OMPI devel] RFC: changes to modex"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3617.php">Terry Dontje: "Re: [OMPI devel] RFC: changes to modex"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 3, 2008, at 11:16 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; The size of the openib modex is explained in btl_openib_component.c in
</span><br>
<span class="quotelev1">&gt; the branch.  It's a packed message now; we don't just blindly copy an
</span><br>
<span class="quotelev1">&gt; entire struct.  Here's the comment:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     /* The message is packed into multiple parts:
</span><br>
<span class="quotelev1">&gt;      * 1. a uint8_t indicating the number of modules (ports) in the
</span><br>
<span class="quotelev1">&gt; message
</span><br>
<span class="quotelev1">&gt;      * 2. for each module:
</span><br>
<span class="quotelev1">&gt;      *    a. the common module data
</span><br>
<span class="quotelev1">&gt;      *    b. a uint8_t indicating how many CPCs follow
</span><br>
<span class="quotelev1">&gt;      *    c. for each CPC:
</span><br>
<span class="quotelev1">&gt;      *       a. a uint8_t indicating the index of the CPC in the all[]
</span><br>
<span class="quotelev1">&gt;      *          array in btl_openib_connect_base.c
</span><br>
<span class="quotelev1">&gt;      *       b. a uint8_t indicating the priority of this CPC
</span><br>
<span class="quotelev1">&gt;      *       c. a uint8_t indicating the length of the blob to follow
</span><br>
<span class="quotelev1">&gt;      *       d. a blob that is only meaningful to that CPC
</span><br>
<span class="quotelev1">&gt;      */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The common module data is what I sent in the other message.
</span><br>
<p><p>Gaa.. I forgot to finish explaining the spreadsheet before I sent  
<br>
this; sorry...
<br>
<p>The 4 lines of oob/xoob/ibcm/rdmacm cpc sizes are how many bytes those  
<br>
cpc's contribute (on a per-port basis) to the modex.  &quot;size 1&quot; is what  
<br>
they currently contribute.  &quot;size 2&quot; is if Jon and I are able to shave  
<br>
off a few more bytes (not entirely sure that's possible yet).
<br>
<p>The machine 1 and machine 2 are three configurations each of two  
<br>
sample machines.
<br>
<p>The first block of numbers is how big the openib part of the modex is  
<br>
when only using the ibcm cpc, when only using the rdmacm cpc, and when  
<br>
using both the ibcm and rdmacm cpc's (i.e., both are sent in the  
<br>
modex; one will &quot;win&quot; and be used at run-time).  The overall number is  
<br>
a result of plugging in the numbers from the machine parameters  
<br>
(nodes, ppn, num ports) and the ibcm/rdmacm cpc sizes to the formula  
<br>
at the top of the spreadsheet.
<br>
<p>The second block of numbers if modifying the formula at the top of the  
<br>
spreadsheet to calculate basically sending the per-port information  
<br>
only once (this modified formula did not include sending a per-port  
<br>
bitmap as came up later in the thread).  The green numbers in that  
<br>
block are the differences between these numbers and the first block.
<br>
<p>The third block of numbers is the same as the second block, but using  
<br>
the &quot;size 2&quot; cpc sizes.  The green numbers are the differences between  
<br>
these numbers and the first block; the blue numbers are the  
<br>
differences between these numbers and the second block.
<br>
<p>-----
<br>
<p>Note: based on what came up later in the thread (e.g., not taking into  
<br>
account carto and whatnot), the 2nd and 3rd blocks of numbers are not  
<br>
entirely accurate.  But they're likely still in the right ballpark.   
<br>
My point was that the size differences from the 1st block and the 2nd/ 
<br>
3rd blocks seemed to be significant enough to warrant moving ahead  
<br>
with a &quot;reduce replication in the modex&quot; scheme.
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
<li><strong>Next message:</strong> <a href="3650.php">Aurélien Bouteiller: "[OMPI devel] MPI_Comm_connect/Accept"</a>
<li><strong>Previous message:</strong> <a href="3648.php">Jeff Squyres: "Re: [OMPI devel] RFC: changes to modex"</a>
<li><strong>In reply to:</strong> <a href="3648.php">Jeff Squyres: "Re: [OMPI devel] RFC: changes to modex"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3617.php">Terry Dontje: "Re: [OMPI devel] RFC: changes to modex"</a>
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
