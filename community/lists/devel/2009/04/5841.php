<?
$subject_val = "Re: [OMPI devel] MPI Message Communication over TCP/IP";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 17 08:30:42 2009" -->
<!-- isoreceived="20090417123042" -->
<!-- sent="Fri, 17 Apr 2009 08:30:35 -0400" -->
<!-- isosent="20090417123035" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI Message Communication over TCP/IP" -->
<!-- id="DD54983B-4B20-4FE7-B16E-C8629788536D_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1b1179850904161758n57be2eaalb5facb59b2bf51d5_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2009-04-17 08:30:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5842.php">Ralph Castain: "[OMPI devel] OMPI 1.3.2rc1 available - please test"</a>
<li><strong>Previous message:</strong> <a href="5840.php">Jeff Squyres: "Re: [OMPI devel] MPI Message Communication over TCP/IP"</a>
<li><strong>In reply to:</strong> <a href="5839.php">pranav jadhav: "Re: [OMPI devel] MPI Message Communication over TCP/IP"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5840.php">Jeff Squyres: "Re: [OMPI devel] MPI Message Communication over TCP/IP"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 16, 2009, at 8:58 PM, pranav jadhav wrote:
<br>
<p><span class="quotelev1">&gt; Thanks for providing the details. I was going through the code of  
</span><br>
<span class="quotelev1">&gt; MPI_Send and I found a function pointer being invoked mca_pml.send  
</span><br>
<span class="quotelev1">&gt; of struct mca_pml_base_module_t. I am trying to figureout when are  
</span><br>
<span class="quotelev1">&gt; these PML function pointers get initialized to call internal BTL  
</span><br>
<span class="quotelev1">&gt; functions.
</span><br>
<p>There's a somewhat-complicated setup dance during MPI_INIT when all  
<br>
those function pointers get initialized. See below.
<br>
<p><span class="quotelev1">&gt; I am trying to know how MPI program communicate over TPC/IP for  
</span><br>
<span class="quotelev1">&gt; message passing in a distributed setup and would appreciate if you  
</span><br>
<span class="quotelev1">&gt; can provide more details or any report that you would like to share.
</span><br>
<p>The BTL (Byte Transfer Layer) is OMPI's lowest-layer for point-to- 
<br>
point communications.  The layering looks like this:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI API
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PML (point-to-point messaging layer)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BTL (byte transfer layer)
<br>
<p>The PML also uses the BML (BTL multiplexing layer) to handle multiple  
<br>
BTLs simultaneously.  I don't really list it in the layering above  
<br>
because it's just accounting functionality (arrays of BTL function  
<br>
pointers); it's not really a &quot;layer&quot; in the traditional sense.
<br>
<p>BTW, know that the BTLs are only used by the OB1 and CSUM PMLs.   
<br>
There's a &quot;dr&quot; PML which is fairly dead at this point, and a CM PML,  
<br>
which, for lack of a longer description, is used with different kinds  
<br>
of networks (not TCP).  So let's focus on OB1 / the TCP BTL.
<br>
<p>At the bottom of MPI_SEND (and other point-to-point MPI API  
<br>
functions), you'll see a call to mca_pml.&lt;foo&gt;.  This calls a function  
<br>
in the selected PML -- in your case, OB1.  OB1 handles all the MPI  
<br>
logic for point-to-point message passing: all the rules, matching,  
<br>
ordering, and progression for MPI point-to-point message passing.  The  
<br>
BTLs are &quot;simple&quot; bit-pushers.  They know nothing about MPI.  They  
<br>
take fragments from the PML and send them to peers.  They receive  
<br>
fragments from peers and give them to the upper-level PML.
<br>
<p>That's the 50k foot level description.
<br>
<p>Most of the function pointers you care about are setup during  
<br>
MPI_INIT.  There's a PML &quot;selection&quot; process that occurs -- Open MPI  
<br>
queries every PML that it can find (e.g., those that were built as  
<br>
plugins) and says &quot;do you want to run?&quot;  If they answer yes, OMPI asks  
<br>
them &quot;what's your priority?&quot;  OMPI then selects the 1 PML that says  
<br>
&quot;yes, I want to run&quot; with the highest priority.  In your case, OB1 is  
<br>
getting selected.  All other PMLs are closed and OB1s function  
<br>
pointers are loaded into the mca_pml struct.  We then allow OB1 to  
<br>
initialize itself (since it &quot;won&quot; the selection process).
<br>
<p>Keep in mind that OB1 is an engine/state machine: it doesn't know how  
<br>
to connect to or communicate with peers.  It uses the BTLs for that.   
<br>
So part of OB1's initialization is selecting which BTLs to use (unlike  
<br>
the PML, where we only choose *1* PML to use at run-time, OB1 chooses  
<br>
as many BTLs as say &quot;yes, I want to run&quot;).  OB1 uses the BML to manage  
<br>
the arrays of pointers to BTLs, but as I mentioned above, this is  
<br>
simple accounting/bookkeeping code -- if you look in the R2 BML  
<br>
module, it's just array manipulation stuff.  Pretty straightforward.   
<br>
So OB1 (R2) opens up all the BTLs that it can find and queries them  
<br>
&quot;do you want to run?&quot;  If the BTL answers &quot;yes&quot;, then its function  
<br>
pointers get added to R2's internal store of pointers.  We then let  
<br>
each BTL initialize itself (e.g., in TCP's case, open up a listening  
<br>
socket).
<br>
<p>Open MPI's code tree is organized as follows:
<br>
<p>ompi/ -- top-level directory for all MPI-related code
<br>
&nbsp;&nbsp;&nbsp;mca/ -- top-level directory for all frameworks
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pml/ -- top-level directory for all pml components (plugins)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;base/ -- top-level directory for pml &quot;glue&quot; code (i.e., shared  
<br>
between all pml plugins)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ob1/ -- directory for all code in the ob1 component (plugin)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cm/ -- directory for all code in the cm component
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bml/ -- top-level directory for all bml components
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;base/ -- top-level directory for bml &quot;glue&quot; code (i.e., shared  
<br>
between all bml plugins)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;r2/ -- top-level directory for the r2 component
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;btl/ -- top-level directory for all btl components
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;base/ -- top-level directory for btl &quot;glue&quot; code (i.e., shared  
<br>
between all btl plugins)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;tcp/ -- top-level directory for the tcp component
<br>
<p>...I think you can see the pattern here:
<br>
<p>&nbsp;&nbsp;&nbsp;ompi/mca/&lt;framework name&gt;/&lt;component name&gt;
<br>
<p>where the &lt;component name&gt; of &quot;base&quot; is special: it's the &quot;glue&quot; code  
<br>
for that framework itself; it's not a component.
<br>
<p>The interface for all plugins is always in a file of this form:
<br>
<p>&nbsp;&nbsp;&nbsp;ompi/mca/&lt;framework&gt;/&lt;framework.h&gt;
<br>
<p>So look at ompi/mca/pml/pml.h and ompi/mca/btl/btl.h.  We usually have  
<br>
a decent overview of the component interface in those files.
<br>
<p>That's the short answer of how OB1 and the BTLs startup and setup all  
<br>
their function pointers.  :-)
<br>
<p>As for collectives, that's a different framework (e.g., as opposed to  
<br>
PML, BML, BTL): the coll framework.  We have a bunch of different  
<br>
collective plugins available; which one(s) is(are) used depends on  
<br>
several factors.
<br>
<p>The coll selection process is significantly different than that of the  
<br>
PML (e.g., OB1 and the BTLs), meaning that it's a bit more complex...   
<br>
Have a look in ompi/mca/coll/coll.h for a description of how that  
<br>
works.  Hopefully, with the background that I've listed above, you can  
<br>
read the comments in that file and have it make some semblance of  
<br>
sense...
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
<li><strong>Next message:</strong> <a href="5842.php">Ralph Castain: "[OMPI devel] OMPI 1.3.2rc1 available - please test"</a>
<li><strong>Previous message:</strong> <a href="5840.php">Jeff Squyres: "Re: [OMPI devel] MPI Message Communication over TCP/IP"</a>
<li><strong>In reply to:</strong> <a href="5839.php">pranav jadhav: "Re: [OMPI devel] MPI Message Communication over TCP/IP"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5840.php">Jeff Squyres: "Re: [OMPI devel] MPI Message Communication over TCP/IP"</a>
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
