<?
$subject_val = "Re: [OMPI devel] [OMPI users] How can I tell (open-)mpi about the HW topology ofmy system?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 27 19:58:22 2009" -->
<!-- isoreceived="20091027235822" -->
<!-- sent="Tue, 27 Oct 2009 19:58:09 -0400" -->
<!-- isosent="20091027235809" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI users] How can I tell (open-)mpi about the HW topology ofmy system?" -->
<!-- id="CE30BFF5-B709-4E53-AFA3-E6301F45F148_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="ECCE2775-EBD1-490F-A858-68EA903A3364_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI users] How can I tell (open-)mpi about the HW topology ofmy system?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-27 19:58:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7042.php">Christopher Yeoh: "[OMPI devel] mpool rdma deadlock"</a>
<li><strong>Previous message:</strong> <a href="7040.php">Jeff Squyres: "[OMPI devel] Assigning 1.5 CMRs for approval"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 27, 2009, at 6:12 AM, Luigi Scorzato wrote:
<br>
<p><span class="quotelev2">&gt;  &gt;However, we do have the good foresight (if I do say so  
</span><br>
<span class="quotelev1">&gt; myself ;-) ) to
</span><br>
<span class="quotelev2">&gt;  &gt;make the MPI topology system be a plugin in Open MPI. The only  
</span><br>
<span class="quotelev1">&gt; plugin
</span><br>
<span class="quotelev2">&gt;  &gt;for this system is currently the &quot;do nothing&quot; plugin, but it would
</span><br>
<span class="quotelev2">&gt;  &gt;*not* be difficult to write one that actually did something  
</span><br>
<span class="quotelev1">&gt; meaningful
</span><br>
<span class="quotelev2">&gt;  &gt;in your torus.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;  &gt;If you're interested, I'd be happy to explain how to do it (and we
</span><br>
<span class="quotelev2">&gt;  &gt;should probably move to the devel list). OMPI doesn't require too
</span><br>
<span class="quotelev2">&gt;  &gt;much framework code; I would guess that the majority of the code  
</span><br>
<span class="quotelev1">&gt; would
</span><br>
<span class="quotelev2">&gt;  &gt;actually be implementing whatever algorithms you wanted for your
</span><br>
<span class="quotelev2">&gt;  &gt;torus. Heck, you could even write a blind-and-dumb algorithm that
</span><br>
<span class="quotelev2">&gt;  &gt;just looks up tables in files based on hostnames in your torus.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am very much interested. Could you please suggest me where I should
</span><br>
<span class="quotelev1">&gt; look into?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>(moved to devel from users list)
<br>
<p>Open MPI has two entities that you need to know about: frameworks and  
<br>
components (components are also referred to as &quot;plugins&quot;).  Frameworks  
<br>
are the glue for a specific kind of component (plugin).  For example,  
<br>
we have a framework for MPI point-to-point messages.  We have another  
<br>
framework for MPI collective operations.  We have another framework  
<br>
(the one you care about) for MPI topology operations.  And so on.  In  
<br>
each framework, there's one or more components (plugins) that are  
<br>
loaded and used at run-time to effect the functionality in that  
<br>
framework.
<br>
<p>Example: one of the MPI point-to-point messaging frameworks is called  
<br>
the &quot;BTL&quot; (byte transfer layer).  We have a bunch of BTL components:  
<br>
one for TCP, one for shared memory, one for process loopback, one for  
<br>
MX, one for OpenFabrics verbs, ...etc.  These plugins are effectively  
<br>
(eventually) called when you call MPI_SEND, MPI_RECV, ...etc.
<br>
<p>Example: another MPI framework is &quot;coll&quot; -- MPI collective  
<br>
operations.  We have several components that effect different  
<br>
algorithms and transports underneath.  These plugins are called when  
<br>
you call MPI_BARRIER, MPI_BCAST, MPI_SCATTER, ...etc.
<br>
<p>Example: the &quot;topo&quot; MPI framework is for MPI topology operations.  We  
<br>
currently only have one component in this framework, named  
<br>
&quot;unity&quot; (because it makes no transformation of ranks).  The functions  
<br>
in these components are called when you call MPI_CART_CREATE,  
<br>
MPI_GRAPH_CREATE, ...etc.
<br>
<p>Frameworks can be found in the OMPI source code in ompi/mca/ 
<br>
&lt;framework&gt;.  There's always a header file named ompi/mca/&lt;framework&gt;/ 
<br>
&lt;framework.h&gt;.  Components are always specific to a single framework,  
<br>
and can be found in the OMPI source code in ompi/mca/&lt;framework&gt;/ 
<br>
&lt;component&gt;.
<br>
<p>So you want to make a new topo component that can remap ranks based on  
<br>
your network topology, perhaps in ompi/mca/topo/luigi/ or ompi/mca/ 
<br>
topo/torus/ or whatever.
<br>
<p>See these wiki pages:
<br>
<p>&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/wiki/devel/CreateFramework">https://svn.open-mpi.org/trac/ompi/wiki/devel/CreateFramework</a>
<br>
&nbsp;&nbsp;&nbsp;--&gt; will give you an appreciation of what frameworks are
<br>
&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/wiki/devel/CreateComponent">https://svn.open-mpi.org/trac/ompi/wiki/devel/CreateComponent</a>
<br>
&nbsp;&nbsp;&nbsp;--&gt; step-by-step instructions on how to make a new luigi or torus  
<br>
or whatever component
<br>
<p>I would suggest getting an SVN checkout of the OMPI trunk (see <a href="http://www.open-mpi.org/svn/">http://www.open-mpi.org/svn/</a>) 
<br>
&nbsp;&nbsp;and working on your new component there.
<br>
<p>The file ompi/mca/topo/topo.h file has a decent description of the  
<br>
topo component interface (i.e., the functions that your new component  
<br>
will need to provide).  Note that the MPI cartesian and graph  
<br>
communicator interfaces were cleverly designed such that all the cart  
<br>
functions can be implemented in terms of MPI_CART_MAP and all the  
<br>
graph functions can be implemented in terms of MPI_GRAPH_MAP.  So  
<br>
aside from OMPI &quot;glue&quot; code, your plugins may only need to provide  
<br>
those two functions to be fully functional.
<br>
<p>I'd advise using the unity component as an example to create a new  
<br>
component, and then fill in whatever algorithms you want.
<br>
<p>Some more OMPI terminology: a &quot;module&quot; is an &quot;instance&quot; of a  
<br>
component.  Think of a &quot;component&quot; as a C++ class; think of a &quot;module&quot;  
<br>
as C++ object.  The &quot;base&quot; is the glue of a framework that makes it  
<br>
run (e.g., the functions for opening the framework, traversing found  
<br>
components, closing the framework, etc.).
<br>
<p>The basic startup sequence is that OMPI will call the init_query  
<br>
function on your component the first time MPI_CART_CREATE or  
<br>
MPI_GRAPH_CREATE is invoked and see if it wants to run.  If it does,  
<br>
the component is added to a list of &quot;available&quot; components.
<br>
<p>Every time a graph or cart communciator is created, the list of  
<br>
available topo components is traversed and the component comm_query  
<br>
function is invoked.  The comm_query function indicates whether it can  
<br>
be used or not by returning a module or a NULL.  The base maintains a  
<br>
list of modules that were returned and selects the one with the  
<br>
highest priority.  comm_unquery is called on all the losers;  
<br>
module_init is invoked on the winner.
<br>
<p>Check out the code in ompi/mca/topo/base/topo_base_comm_select.c --  
<br>
there's a good amount of comments in there about how per-communicator  
<br>
selection occurs.
<br>
<p>--&gt; Hmm.  I'm looking at the prototype for comm_query in topo.h and it  
<br>
doesn't take a list of processes.  This seems like a bad idea; a  
<br>
component may only be able to run on a subset of processes in the  
<br>
overall MPI job (e.g., if you have a shared-memory topology component,  
<br>
it would only allow itself to be used at run-time if all processes in  
<br>
the communicator are physically located on the same node).  Hmm.  We  
<br>
might want to update this prototype to include a list of processes  
<br>
that you can check to see if your component is eligible.   
<br>
Additionally, it seems weird that the comm_unquery function is on the  
<br>
component -- it really should be on the module (editor's note: this  
<br>
framework was created way back during the beginning of OMPI and likely  
<br>
hasn't been touched since...  I think it's showing its age :-\ ).
<br>
<p>Once a module is selected, its function pointers effectively become  
<br>
the back-ends to functions like MPI_CART_CREATE, MPI_GRAPH_CREATE,  
<br>
etc.  Note that you can implement all the topology functions in terms  
<br>
of MPI_CART_MAP and MPI_GRAPH_MAP (this is what unity does).  If you  
<br>
provide NULL for all the other function pointers, the base will  
<br>
automatically insert functions that implement themselves by calling  
<br>
your module's cart_map and graph_map functions.
<br>
<p>Note that in order to save some space, we overlap the meanings of some  
<br>
fields (graph dimensions or list of indexes).  In hindsight, I'm not  
<br>
sure why we didn't use a union.  :-\
<br>
<p>Finally, when the communicator is destroyed, the module_finalize  
<br>
function is invoked.
<br>
<p>=====
<br>
<p>Based on my &quot;Hmm...&quot; comment above, I think I want to revamp the  
<br>
selection logic a little before you dive too deeply into this -- to  
<br>
modernize it and make it a bit more like the rest of the OMPI code  
<br>
base; you can tell that this code was created a long time ago and then  
<br>
has been touched since (you're the first person to express interest in  
<br>
creating a real topo component! :-) ).  I've created a Mercurial  
<br>
branch of the OMPI trunk for this work and published it here:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://bitbucket.org/jsquyres/ompi-topo-fixes/">http://bitbucket.org/jsquyres/ompi-topo-fixes/</a>
<br>
<p>Give me a few days to get this branch into shape (and potentially to  
<br>
get it back to the SVN trunk).  I might even get inspired to make a  
<br>
template 2nd component for you (i.e., I might need a 2nd component  
<br>
just to ensure that the selection logic is working :-) ).
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7042.php">Christopher Yeoh: "[OMPI devel] mpool rdma deadlock"</a>
<li><strong>Previous message:</strong> <a href="7040.php">Jeff Squyres: "[OMPI devel] Assigning 1.5 CMRs for approval"</a>
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
