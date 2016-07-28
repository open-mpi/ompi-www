<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Apr 13 20:05:40 2007" -->
<!-- isoreceived="20070414000540" -->
<!-- sent="Fri, 13 Apr 2007 20:05:28 -0400" -->
<!-- isosent="20070414000528" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Is it possible to get BTL transport work directly with MPI level" -->
<!-- id="30FB401C-1070-4FB0-8B6A-E79F91CBD898_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1506.128.61.119.175.1176507416.squirrel_at_webmail.cc.gatech.edu" -->
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
<strong>Date:</strong> 2007-04-13 20:05:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1411.php">pooja_at_[hidden]: "Re: [OMPI devel] Is it possible to get BTL transport work directly with MPI level"</a>
<li><strong>Previous message:</strong> <a href="1409.php">pooja_at_[hidden]: "Re: [OMPI devel] Is it possible to get BTL transport work directly with MPI level"</a>
<li><strong>In reply to:</strong> <a href="1409.php">pooja_at_[hidden]: "Re: [OMPI devel] Is it possible to get BTL transport work directly with MPI level"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1411.php">pooja_at_[hidden]: "Re: [OMPI devel] Is it possible to get BTL transport work directly with MPI level"</a>
<li><strong>Reply:</strong> <a href="1411.php">pooja_at_[hidden]: "Re: [OMPI devel] Is it possible to get BTL transport work directly with MPI level"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Configure with the --with-devel-headers switch.  This will install  
<br>
all the developer headers.
<br>
<p>If you care, check out &quot;./configure --help&quot; -- that shows all the  
<br>
options available to the configure script (including --with-devel- 
<br>
headers).
<br>
<p><p>On Apr 13, 2007, at 7:36 PM, pooja_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have downloaded the developer version of source code by  
</span><br>
<span class="quotelev1">&gt; downloading a
</span><br>
<span class="quotelev1">&gt; nightly Subversion snapshot tarball.And have installed the openmpi.
</span><br>
<span class="quotelev1">&gt; Using
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/usr/local
</span><br>
<span class="quotelev1">&gt; make all install.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But I want to install with all the development headers.So that I  
</span><br>
<span class="quotelev1">&gt; can write
</span><br>
<span class="quotelev1">&gt; an application that can use Ompi internal headers.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks and Regards
</span><br>
<span class="quotelev1">&gt; Pooja
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 1, 2007, at 3:12 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I can't help you with the BTL question. On the others:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yes, you can &quot;sorta&quot; call BTL's directly from application programs
</span><br>
<span class="quotelev2">&gt;&gt; (are you trying to use MPI alongside other communication libraries,
</span><br>
<span class="quotelev2">&gt;&gt; and using the BTL components as a sample?), but there are issues
</span><br>
<span class="quotelev2">&gt;&gt; involved with this.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; First, you need to install Open MPI with all the development
</span><br>
<span class="quotelev2">&gt;&gt; headers.  Open MPI normally only installs &quot;mpi.h&quot; and a small number
</span><br>
<span class="quotelev2">&gt;&gt; of other heads; installing *all* the headers will allow you to write
</span><br>
<span class="quotelev2">&gt;&gt; applications that use OMPI's internal headers (such as btl.h) while
</span><br>
<span class="quotelev2">&gt;&gt; developing outside of the Open MPI source tree.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Second, you probably won't want to access the BTL's directly.  To
</span><br>
<span class="quotelev2">&gt;&gt; make this make sense, here's how the code is organized (even if the
</span><br>
<span class="quotelev2">&gt;&gt; specific call sequence is not exactly this layered for performance/
</span><br>
<span class="quotelev2">&gt;&gt; optimization reasons):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; MPI layer (e.g., MPI_SEND)
</span><br>
<span class="quotelev2">&gt;&gt;   -&gt; PML
</span><br>
<span class="quotelev2">&gt;&gt;     -&gt; BML
</span><br>
<span class="quotelev2">&gt;&gt;       -&gt; BTL
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You have two choices:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1. Go through the PML instead (this is what we do in the MPI
</span><br>
<span class="quotelev2">&gt;&gt; collectives, for example) -- but this imposes MPI semantics on
</span><br>
<span class="quotelev2">&gt;&gt; sending and receiving, which assumedly you are trying to avoid.
</span><br>
<span class="quotelev2">&gt;&gt; Check out ompi/mca/pml/pml.h.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2. Go through the BML instead -- the BTL Management Layer.  This is
</span><br>
<span class="quotelev2">&gt;&gt; essentially a multiplexor for all the BTLs that have been
</span><br>
<span class="quotelev2">&gt;&gt; instantiated.  I'm guessing that this is what you want to do
</span><br>
<span class="quotelev2">&gt;&gt; (remember that OMPI has true multi-device support; using the BML and
</span><br>
<span class="quotelev2">&gt;&gt; multiple BTLs is one of the ways that we do this).  Have a look at
</span><br>
<span class="quotelev2">&gt;&gt; ompi/mca/bml/bml.h for the interface.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; There is also currently no mechanism to get the BML and BTL pointers
</span><br>
<span class="quotelev2">&gt;&gt; that were instantiated by the PML.  However, if you're just doing
</span><br>
<span class="quotelev2">&gt;&gt; proof-of-concept code, you can extract these directly from the MPI
</span><br>
<span class="quotelev2">&gt;&gt; layer's global variables to see how this stuff works.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; To have full interoperability of the underlying BTLs and between
</span><br>
<span class="quotelev2">&gt;&gt; multiple upper-layer communication libraries (e.g., between OMPI and
</span><br>
<span class="quotelev2">&gt;&gt; something else) is something that we have talked about a little, but
</span><br>
<span class="quotelev2">&gt;&gt; have not done much work on.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; To see the BTL interface (just for completeness), see ompi/mca/btl/
</span><br>
<span class="quotelev2">&gt;&gt; btl.h.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You can probably see the pattern here...  In all of Open MPI's
</span><br>
<span class="quotelev2">&gt;&gt; frameworks, the public interface is in &lt;level&gt;/mca/&lt;framework&gt;/
</span><br>
<span class="quotelev2">&gt;&gt; &lt;framework&gt;.h, where &lt;level&gt; is one of opal, orte, or ompi, and
</span><br>
<span class="quotelev2">&gt;&gt; &lt;framework&gt; is the name of the framework.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1. states are reported via the orte/mca/smr framework. You will see
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; states listed in orte/mca/smr/smr_types.h. We track both process
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and job
</span><br>
<span class="quotelev3">&gt;&gt;&gt; states. Hopefully, the state names will be somewhat self-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; explanatory and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; indicative of the order in which they are traversed. The job states
</span><br>
<span class="quotelev3">&gt;&gt;&gt; are set
</span><br>
<span class="quotelev3">&gt;&gt;&gt; when *all* of the processes in the job reach the corresponding  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; state.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Note that these are very coarse-grained process-level states (e.g.,
</span><br>
<span class="quotelev2">&gt;&gt; is a given process running or not?).  It's not clear what kind of
</span><br>
<span class="quotelev2">&gt;&gt; states you were asking about -- the Open MPI code base has many
</span><br>
<span class="quotelev2">&gt;&gt; internal state machines for various message passing and other
</span><br>
<span class="quotelev2">&gt;&gt; mechanisms.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What information are you looking for, specifically?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2. I'm not sure what you mean by mapping MPI processes to &quot;physical&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processes, but I assume you mean how do we assign MPI ranks to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processes on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; specific nodes. You will find that done in the orte/mca/rmaps
</span><br>
<span class="quotelev3">&gt;&gt;&gt; framework. We
</span><br>
<span class="quotelev3">&gt;&gt;&gt; currently only have one component in that framework - the round- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; robin
</span><br>
<span class="quotelev3">&gt;&gt;&gt; implementation - that maps either by slot or by node, as indicated
</span><br>
<span class="quotelev3">&gt;&gt;&gt; by the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; user. That code is fairly heavily commented, so you hopefully can
</span><br>
<span class="quotelev3">&gt;&gt;&gt; understand
</span><br>
<span class="quotelev3">&gt;&gt;&gt; what it is doing.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hope that helps!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 4/1/07 1:32 PM, &quot;pooja_at_[hidden]&quot; &lt;pooja_at_[hidden]&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I am Pooja and I am working on a course project which requires me
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -&gt; to track the internal state changes of MPI and need me to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; figure out
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; how does ORTE maps MPi Process to actual physical processes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -&gt;Also I need to find way to get BTL transports work directly with
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; level calls.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I just want to know is this posible and if yes what procedure I
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; should
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; follow or I should look into which files (for change).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Please Help
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks and Regards
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Pooja
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
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
<span class="quotelev2">&gt;&gt;
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
<li><strong>Next message:</strong> <a href="1411.php">pooja_at_[hidden]: "Re: [OMPI devel] Is it possible to get BTL transport work directly with MPI level"</a>
<li><strong>Previous message:</strong> <a href="1409.php">pooja_at_[hidden]: "Re: [OMPI devel] Is it possible to get BTL transport work directly with MPI level"</a>
<li><strong>In reply to:</strong> <a href="1409.php">pooja_at_[hidden]: "Re: [OMPI devel] Is it possible to get BTL transport work directly with MPI level"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1411.php">pooja_at_[hidden]: "Re: [OMPI devel] Is it possible to get BTL transport work directly with MPI level"</a>
<li><strong>Reply:</strong> <a href="1411.php">pooja_at_[hidden]: "Re: [OMPI devel] Is it possible to get BTL transport work directly with MPI level"</a>
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
