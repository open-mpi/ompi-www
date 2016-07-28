<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Apr 13 18:37:28 2007" -->
<!-- isoreceived="20070413223728" -->
<!-- sent="Fri, 13 Apr 2007 19:36:56 -0400 (EDT)" -->
<!-- isosent="20070413233656" -->
<!-- name="pooja_at_[hidden]" -->
<!-- email="pooja_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Is it possible to get BTL transport work directly with MPI level" -->
<!-- id="1506.128.61.119.175.1176507416.squirrel_at_webmail.cc.gatech.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="7BA805FA-B6B0-40C6-AD9A-3C2377460475_at_cisco.com" -->
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
<strong>From:</strong> <a href="mailto:pooja_at_[hidden]?Subject=Re:%20[OMPI%20devel]%20Is%20it%20possible%20to%20get%20BTL%20transport%20work%20directly%20with%20MPI%20level"><em>pooja_at_[hidden]</em></a><br>
<strong>Date:</strong> 2007-04-13 19:36:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1410.php">Jeff Squyres: "Re: [OMPI devel] Is it possible to get BTL transport work directly with MPI level"</a>
<li><strong>Previous message:</strong> <a href="1408.php">Brian Barrett: "Re: [OMPI devel] [Fwd: Re: [CIC600000217180] Still having strange MPI errors on coyote...]"</a>
<li><strong>In reply to:</strong> <a href="1391.php">Jeff Squyres: "Re: [OMPI devel] Is it possible to get BTL transport work directly with MPI level"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1410.php">Jeff Squyres: "Re: [OMPI devel] Is it possible to get BTL transport work directly with MPI level"</a>
<li><strong>Reply:</strong> <a href="1410.php">Jeff Squyres: "Re: [OMPI devel] Is it possible to get BTL transport work directly with MPI level"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
<p>I have downloaded the developer version of source code by downloading a
<br>
nightly Subversion snapshot tarball.And have installed the openmpi.
<br>
Using
<br>
<p>./configure --prefix=/usr/local
<br>
make all install.
<br>
<p>But I want to install with all the development headers.So that I can write
<br>
an application that can use Ompi internal headers.
<br>
<p><p>Thanks and Regards
<br>
Pooja
<br>
<p><p><p><p><p><span class="quotelev1">&gt; On Apr 1, 2007, at 3:12 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I can't help you with the BTL question. On the others:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, you can &quot;sorta&quot; call BTL's directly from application programs
</span><br>
<span class="quotelev1">&gt; (are you trying to use MPI alongside other communication libraries,
</span><br>
<span class="quotelev1">&gt; and using the BTL components as a sample?), but there are issues
</span><br>
<span class="quotelev1">&gt; involved with this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; First, you need to install Open MPI with all the development
</span><br>
<span class="quotelev1">&gt; headers.  Open MPI normally only installs &quot;mpi.h&quot; and a small number
</span><br>
<span class="quotelev1">&gt; of other heads; installing *all* the headers will allow you to write
</span><br>
<span class="quotelev1">&gt; applications that use OMPI's internal headers (such as btl.h) while
</span><br>
<span class="quotelev1">&gt; developing outside of the Open MPI source tree.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Second, you probably won't want to access the BTL's directly.  To
</span><br>
<span class="quotelev1">&gt; make this make sense, here's how the code is organized (even if the
</span><br>
<span class="quotelev1">&gt; specific call sequence is not exactly this layered for performance/
</span><br>
<span class="quotelev1">&gt; optimization reasons):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI layer (e.g., MPI_SEND)
</span><br>
<span class="quotelev1">&gt;   -&gt; PML
</span><br>
<span class="quotelev1">&gt;     -&gt; BML
</span><br>
<span class="quotelev1">&gt;       -&gt; BTL
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You have two choices:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. Go through the PML instead (this is what we do in the MPI
</span><br>
<span class="quotelev1">&gt; collectives, for example) -- but this imposes MPI semantics on
</span><br>
<span class="quotelev1">&gt; sending and receiving, which assumedly you are trying to avoid.
</span><br>
<span class="quotelev1">&gt; Check out ompi/mca/pml/pml.h.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. Go through the BML instead -- the BTL Management Layer.  This is
</span><br>
<span class="quotelev1">&gt; essentially a multiplexor for all the BTLs that have been
</span><br>
<span class="quotelev1">&gt; instantiated.  I'm guessing that this is what you want to do
</span><br>
<span class="quotelev1">&gt; (remember that OMPI has true multi-device support; using the BML and
</span><br>
<span class="quotelev1">&gt; multiple BTLs is one of the ways that we do this).  Have a look at
</span><br>
<span class="quotelev1">&gt; ompi/mca/bml/bml.h for the interface.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There is also currently no mechanism to get the BML and BTL pointers
</span><br>
<span class="quotelev1">&gt; that were instantiated by the PML.  However, if you're just doing
</span><br>
<span class="quotelev1">&gt; proof-of-concept code, you can extract these directly from the MPI
</span><br>
<span class="quotelev1">&gt; layer's global variables to see how this stuff works.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To have full interoperability of the underlying BTLs and between
</span><br>
<span class="quotelev1">&gt; multiple upper-layer communication libraries (e.g., between OMPI and
</span><br>
<span class="quotelev1">&gt; something else) is something that we have talked about a little, but
</span><br>
<span class="quotelev1">&gt; have not done much work on.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To see the BTL interface (just for completeness), see ompi/mca/btl/
</span><br>
<span class="quotelev1">&gt; btl.h.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You can probably see the pattern here...  In all of Open MPI's
</span><br>
<span class="quotelev1">&gt; frameworks, the public interface is in &lt;level&gt;/mca/&lt;framework&gt;/
</span><br>
<span class="quotelev1">&gt; &lt;framework&gt;.h, where &lt;level&gt; is one of opal, orte, or ompi, and
</span><br>
<span class="quotelev1">&gt; &lt;framework&gt; is the name of the framework.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1. states are reported via the orte/mca/smr framework. You will see
</span><br>
<span class="quotelev2">&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt; states listed in orte/mca/smr/smr_types.h. We track both process
</span><br>
<span class="quotelev2">&gt;&gt; and job
</span><br>
<span class="quotelev2">&gt;&gt; states. Hopefully, the state names will be somewhat self-
</span><br>
<span class="quotelev2">&gt;&gt; explanatory and
</span><br>
<span class="quotelev2">&gt;&gt; indicative of the order in which they are traversed. The job states
</span><br>
<span class="quotelev2">&gt;&gt; are set
</span><br>
<span class="quotelev2">&gt;&gt; when *all* of the processes in the job reach the corresponding state.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note that these are very coarse-grained process-level states (e.g.,
</span><br>
<span class="quotelev1">&gt; is a given process running or not?).  It's not clear what kind of
</span><br>
<span class="quotelev1">&gt; states you were asking about -- the Open MPI code base has many
</span><br>
<span class="quotelev1">&gt; internal state machines for various message passing and other
</span><br>
<span class="quotelev1">&gt; mechanisms.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What information are you looking for, specifically?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2. I'm not sure what you mean by mapping MPI processes to &quot;physical&quot;
</span><br>
<span class="quotelev2">&gt;&gt; processes, but I assume you mean how do we assign MPI ranks to
</span><br>
<span class="quotelev2">&gt;&gt; processes on
</span><br>
<span class="quotelev2">&gt;&gt; specific nodes. You will find that done in the orte/mca/rmaps
</span><br>
<span class="quotelev2">&gt;&gt; framework. We
</span><br>
<span class="quotelev2">&gt;&gt; currently only have one component in that framework - the round-robin
</span><br>
<span class="quotelev2">&gt;&gt; implementation - that maps either by slot or by node, as indicated
</span><br>
<span class="quotelev2">&gt;&gt; by the
</span><br>
<span class="quotelev2">&gt;&gt; user. That code is fairly heavily commented, so you hopefully can
</span><br>
<span class="quotelev2">&gt;&gt; understand
</span><br>
<span class="quotelev2">&gt;&gt; what it is doing.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hope that helps!
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 4/1/07 1:32 PM, &quot;pooja_at_[hidden]&quot; &lt;pooja_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am Pooja and I am working on a course project which requires me
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -&gt; to track the internal state changes of MPI and need me to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; figure out
</span><br>
<span class="quotelev3">&gt;&gt;&gt; how does ORTE maps MPi Process to actual physical processes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -&gt;Also I need to find way to get BTL transports work directly with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; level calls.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I just want to know is this posible and if yes what procedure I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; should
</span><br>
<span class="quotelev3">&gt;&gt;&gt; follow or I should look into which files (for change).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Please Help
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks and Regards
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Pooja
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
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1410.php">Jeff Squyres: "Re: [OMPI devel] Is it possible to get BTL transport work directly with MPI level"</a>
<li><strong>Previous message:</strong> <a href="1408.php">Brian Barrett: "Re: [OMPI devel] [Fwd: Re: [CIC600000217180] Still having strange MPI errors on coyote...]"</a>
<li><strong>In reply to:</strong> <a href="1391.php">Jeff Squyres: "Re: [OMPI devel] Is it possible to get BTL transport work directly with MPI level"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1410.php">Jeff Squyres: "Re: [OMPI devel] Is it possible to get BTL transport work directly with MPI level"</a>
<li><strong>Reply:</strong> <a href="1410.php">Jeff Squyres: "Re: [OMPI devel] Is it possible to get BTL transport work directly with MPI level"</a>
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
