<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Apr  2 12:24:09 2007" -->
<!-- isoreceived="20070402162409" -->
<!-- sent="Mon, 2 Apr 2007 12:23:42 -0400" -->
<!-- isosent="20070402162342" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Is it possible to get BTL transport work directly with MPI level" -->
<!-- id="7BA805FA-B6B0-40C6-AD9A-3C2377460475_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C2356028.248A%rhc_at_lanl.gov" -->
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
<strong>Date:</strong> 2007-04-02 12:23:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1392.php">pooja_at_[hidden]: "Re: [OMPI devel] Is it possible to get BTL transport work directly with MPI level"</a>
<li><strong>Previous message:</strong> <a href="1390.php">Ralph Castain: "Re: [OMPI devel] Is it possible to get BTL transport work directly with MPI level"</a>
<li><strong>In reply to:</strong> <a href="1390.php">Ralph Castain: "Re: [OMPI devel] Is it possible to get BTL transport work directly with MPI level"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1392.php">pooja_at_[hidden]: "Re: [OMPI devel] Is it possible to get BTL transport work directly with MPI level"</a>
<li><strong>Reply:</strong> <a href="1392.php">pooja_at_[hidden]: "Re: [OMPI devel] Is it possible to get BTL transport work directly with MPI level"</a>
<li><strong>Reply:</strong> <a href="1400.php">Brian Barrett: "Re: [OMPI devel] Is it possible to get BTL transport work directly with MPI level"</a>
<li><strong>Reply:</strong> <a href="1409.php">pooja_at_[hidden]: "Re: [OMPI devel] Is it possible to get BTL transport work directly with MPI level"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 1, 2007, at 3:12 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; I can't help you with the BTL question. On the others:
</span><br>
<p>Yes, you can &quot;sorta&quot; call BTL's directly from application programs  
<br>
(are you trying to use MPI alongside other communication libraries,  
<br>
and using the BTL components as a sample?), but there are issues  
<br>
involved with this.
<br>
<p>First, you need to install Open MPI with all the development  
<br>
headers.  Open MPI normally only installs &quot;mpi.h&quot; and a small number  
<br>
of other heads; installing *all* the headers will allow you to write  
<br>
applications that use OMPI's internal headers (such as btl.h) while  
<br>
developing outside of the Open MPI source tree.
<br>
<p>Second, you probably won't want to access the BTL's directly.  To  
<br>
make this make sense, here's how the code is organized (even if the  
<br>
specific call sequence is not exactly this layered for performance/ 
<br>
optimization reasons):
<br>
<p>MPI layer (e.g., MPI_SEND)
<br>
&nbsp;&nbsp;-&gt; PML
<br>
&nbsp;&nbsp;&nbsp;&nbsp;-&gt; BML
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&gt; BTL
<br>
<p>You have two choices:
<br>
<p>1. Go through the PML instead (this is what we do in the MPI  
<br>
collectives, for example) -- but this imposes MPI semantics on  
<br>
sending and receiving, which assumedly you are trying to avoid.   
<br>
Check out ompi/mca/pml/pml.h.
<br>
<p>2. Go through the BML instead -- the BTL Management Layer.  This is  
<br>
essentially a multiplexor for all the BTLs that have been  
<br>
instantiated.  I'm guessing that this is what you want to do  
<br>
(remember that OMPI has true multi-device support; using the BML and  
<br>
multiple BTLs is one of the ways that we do this).  Have a look at  
<br>
ompi/mca/bml/bml.h for the interface.
<br>
<p>There is also currently no mechanism to get the BML and BTL pointers  
<br>
that were instantiated by the PML.  However, if you're just doing  
<br>
proof-of-concept code, you can extract these directly from the MPI  
<br>
layer's global variables to see how this stuff works.
<br>
<p>To have full interoperability of the underlying BTLs and between  
<br>
multiple upper-layer communication libraries (e.g., between OMPI and  
<br>
something else) is something that we have talked about a little, but  
<br>
have not done much work on.
<br>
<p>To see the BTL interface (just for completeness), see ompi/mca/btl/ 
<br>
btl.h.
<br>
<p>You can probably see the pattern here...  In all of Open MPI's  
<br>
frameworks, the public interface is in &lt;level&gt;/mca/&lt;framework&gt;/ 
<br>
&lt;framework&gt;.h, where &lt;level&gt; is one of opal, orte, or ompi, and  
<br>
&lt;framework&gt; is the name of the framework.
<br>
<p><span class="quotelev1">&gt; 1. states are reported via the orte/mca/smr framework. You will see  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; states listed in orte/mca/smr/smr_types.h. We track both process  
</span><br>
<span class="quotelev1">&gt; and job
</span><br>
<span class="quotelev1">&gt; states. Hopefully, the state names will be somewhat self- 
</span><br>
<span class="quotelev1">&gt; explanatory and
</span><br>
<span class="quotelev1">&gt; indicative of the order in which they are traversed. The job states  
</span><br>
<span class="quotelev1">&gt; are set
</span><br>
<span class="quotelev1">&gt; when *all* of the processes in the job reach the corresponding state.
</span><br>
<p>Note that these are very coarse-grained process-level states (e.g.,  
<br>
is a given process running or not?).  It's not clear what kind of  
<br>
states you were asking about -- the Open MPI code base has many  
<br>
internal state machines for various message passing and other  
<br>
mechanisms.
<br>
<p>What information are you looking for, specifically?
<br>
<p><span class="quotelev1">&gt; 2. I'm not sure what you mean by mapping MPI processes to &quot;physical&quot;
</span><br>
<span class="quotelev1">&gt; processes, but I assume you mean how do we assign MPI ranks to  
</span><br>
<span class="quotelev1">&gt; processes on
</span><br>
<span class="quotelev1">&gt; specific nodes. You will find that done in the orte/mca/rmaps  
</span><br>
<span class="quotelev1">&gt; framework. We
</span><br>
<span class="quotelev1">&gt; currently only have one component in that framework - the round-robin
</span><br>
<span class="quotelev1">&gt; implementation - that maps either by slot or by node, as indicated  
</span><br>
<span class="quotelev1">&gt; by the
</span><br>
<span class="quotelev1">&gt; user. That code is fairly heavily commented, so you hopefully can  
</span><br>
<span class="quotelev1">&gt; understand
</span><br>
<span class="quotelev1">&gt; what it is doing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hope that helps!
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 4/1/07 1:32 PM, &quot;pooja_at_[hidden]&quot; &lt;pooja_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi
</span><br>
<span class="quotelev2">&gt;&gt; I am Pooja and I am working on a course project which requires me
</span><br>
<span class="quotelev2">&gt;&gt; -&gt; to track the internal state changes of MPI and need me to  
</span><br>
<span class="quotelev2">&gt;&gt; figure out
</span><br>
<span class="quotelev2">&gt;&gt; how does ORTE maps MPi Process to actual physical processes
</span><br>
<span class="quotelev2">&gt;&gt; -&gt;Also I need to find way to get BTL transports work directly with  
</span><br>
<span class="quotelev2">&gt;&gt; MPI
</span><br>
<span class="quotelev2">&gt;&gt; level calls.
</span><br>
<span class="quotelev2">&gt;&gt; I just want to know is this posible and if yes what procedure I  
</span><br>
<span class="quotelev2">&gt;&gt; should
</span><br>
<span class="quotelev2">&gt;&gt; follow or I should look into which files (for change).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Please Help
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks and Regards
</span><br>
<span class="quotelev2">&gt;&gt; Pooja
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="1392.php">pooja_at_[hidden]: "Re: [OMPI devel] Is it possible to get BTL transport work directly with MPI level"</a>
<li><strong>Previous message:</strong> <a href="1390.php">Ralph Castain: "Re: [OMPI devel] Is it possible to get BTL transport work directly with MPI level"</a>
<li><strong>In reply to:</strong> <a href="1390.php">Ralph Castain: "Re: [OMPI devel] Is it possible to get BTL transport work directly with MPI level"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1392.php">pooja_at_[hidden]: "Re: [OMPI devel] Is it possible to get BTL transport work directly with MPI level"</a>
<li><strong>Reply:</strong> <a href="1392.php">pooja_at_[hidden]: "Re: [OMPI devel] Is it possible to get BTL transport work directly with MPI level"</a>
<li><strong>Reply:</strong> <a href="1400.php">Brian Barrett: "Re: [OMPI devel] Is it possible to get BTL transport work directly with MPI level"</a>
<li><strong>Reply:</strong> <a href="1409.php">pooja_at_[hidden]: "Re: [OMPI devel] Is it possible to get BTL transport work directly with MPI level"</a>
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
