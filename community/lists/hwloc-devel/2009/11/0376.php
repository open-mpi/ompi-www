<?
$subject_val = "Re: [hwloc-devel] towards PLPA-like API in 1.0";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 12 11:56:05 2009" -->
<!-- isoreceived="20091112165605" -->
<!-- sent="Thu, 12 Nov 2009 08:55:58 -0800" -->
<!-- isosent="20091112165558" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] towards PLPA-like API in 1.0" -->
<!-- id="0CB7ECF2-F031-4D52-BEFA-5A6713D1C900_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4AF2FBB7.7050009_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] towards PLPA-like API in 1.0<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-12 11:55:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0377.php">Jeff Squyres: "Re: [hwloc-devel] Pgcc issues fixed?"</a>
<li><strong>Previous message:</strong> <a href="0375.php">Samuel Thibault: "Re: [hwloc-devel] Pgcc issues fixed?"</a>
<li><strong>In reply to:</strong> <a href="0338.php">Brice Goglin: "[hwloc-devel] towards PLPA-like API in 1.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0381.php">Brice Goglin: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
<li><strong>Reply:</strong> <a href="0381.php">Brice Goglin: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
<li><strong>Reply:</strong> <a href="0386.php">Brice Goglin: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry for the delay in replying to this; been caught up in SC09 prep...
<br>
<p><p><p>On Nov 5, 2009, at 8:22 AM, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; * PLPA-like API is prefixed with hwloc_plpa_ and all functions get a  
</span><br>
<span class="quotelev1">&gt; new
</span><br>
<span class="quotelev1">&gt; hwloc_topology_t parameter. The problematic ones are:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; + int hwloc_plpa_sched_getaffinity(pid_t pid, hwloc_cpuset_t cpuset);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Hmm.  I'm a little confused.  If we don't provide a drop-in PLPA  
<br>
replacement API implementation, what's the point of implementing a  
<br>
PLPA-like API?  PLPA users will still need to modify their code --  
<br>
shouldn't we be pointing them to the more-powerful hwloc API instead?
<br>
<p>There's certainly some desirable PLPA API features that could be  
<br>
imported to the HWLOC API -- but I would think that if people want to  
<br>
keep using the PLPA API, they can.  It just won't [ever] be updated.   
<br>
The existing (and future) hwloc API is the migration path forward --  
<br>
I'm not convinced that providing a new API that's halfway between PLPA  
<br>
and hwloc is worthwhile...
<br>
<p>(I'm really sorry that I didn't reply about this earlier! :-( )
<br>
<p><span class="quotelev1">&gt; It's just a hwloc_get_cpubind(), but we don't have it since it would  
</span><br>
<span class="quotelev1">&gt; not
</span><br>
<span class="quotelev1">&gt; be supported on all OS. But I think we should add it anyway.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; + int hwloc_plpa_get_core_flags(hwloc_topology_t topology, int  
</span><br>
<span class="quotelev1">&gt; socket_id, int core_id, int *exists, int *online);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is says whether a core (given by core+socket os_index) exists and is
</span><br>
<span class="quotelev1">&gt; online. First, we don't have topology information about offline
</span><br>
<span class="quotelev1">&gt; processors. Secondly, on Nehalem you can disable a single thread  
</span><br>
<span class="quotelev1">&gt; within
</span><br>
<span class="quotelev1">&gt; a hyperthreaded core, so an &quot;offline core&quot; doesn't mean much. I would
</span><br>
<span class="quotelev1">&gt; just vote for returning whether the core exists and remove the online
</span><br>
<span class="quotelev1">&gt; return value here (see below for more about offline CPUs).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Good point.  PLPA was definitely not thought through well with regards  
<br>
to hardware threads.  This is another reason not to expose this  
<br>
function in hwloc at all.
<br>
<p><span class="quotelev1">&gt; * Then we have all count-spec related API, which lets you look for
</span><br>
<span class="quotelev1">&gt; information about all processors, or all online ones, or all offline  
</span><br>
<span class="quotelev1">&gt; ones.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If people are really interested with offline CPUs, they can look at  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; get_offline_cpuset below. There is no topology information about  
</span><br>
<span class="quotelev1">&gt; offline
</span><br>
<span class="quotelev1">&gt; CPUs on Linux anyway, so I am not sure it's worth trying to manage
</span><br>
<span class="quotelev1">&gt; offline and online CPUs in a uniform way. I would rather remove the
</span><br>
<span class="quotelev1">&gt; count-spec argument and just only work on available/online/enabled
</span><br>
<span class="quotelev1">&gt; processors with:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; + int hwloc_plpa_get_processor_data(hwloc_topology_t topology, int  
</span><br>
<span class="quotelev1">&gt; *num_processors, int *max_processor_id);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; + int hwloc_plpa_get_processor_id(int processor_num, int  
</span><br>
<span class="quotelev1">&gt; *processor_id);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I think Samuel pointed out that some OS's *do* return info about  
<br>
offline CPUs (Solaris?).  That would make exposing offline/unavailable/ 
<br>
otherwise-not-usage CPUs useful -- you can tell that they're *there*,  
<br>
even if you can't *use* them.  If nothing else, it's an excellent  
<br>
diagnostic tool.
<br>
<p><span class="quotelev1">&gt; * Probing
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;From what I understand, plpa_have_topology_information() tells  
</span><br>
<span class="quotelev1">&gt; whether
</span><br>
<span class="quotelev1">&gt; PLPA knows what's in the hardware, while plpa_api_probe() tells  
</span><br>
<span class="quotelev1">&gt; whether
</span><br>
<span class="quotelev1">&gt; binding is supported. We could add:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; + hwloc_topology_support(hwloc_topology_t topology, unsigned *support)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; which fills &quot;support&quot; with a bitmask of things like OS is supported,
</span><br>
<span class="quotelev1">&gt; binding a thread is possible, binding a processor is possible, getting
</span><br>
<span class="quotelev1">&gt; the binding of a process is possible, ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Then we could reimplement
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; + int hwloc_plpa_have_topology_information(hwloc_topology_t topology);
</span><br>
<span class="quotelev1">&gt; + int hwloc_plpa_api_probe(hwloc_topology_t topology);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I think it would be better to have a capabilities vector like you  
<br>
describe later -- might as well unify all this stuff.
<br>
<p><span class="quotelev1">&gt; * Finally, I plan to reimplement the PLPA tools, either in tests/plpa/
</span><br>
<span class="quotelev1">&gt; or as a real (installed) tools for a transition period.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; + plpa-info already works in my tree. Are there people that really  
</span><br>
<span class="quotelev1">&gt; need
</span><br>
<span class="quotelev1">&gt; it? &quot;lstopo -v -&quot; basically shows the same and even more (offline CPUs
</span><br>
<span class="quotelev1">&gt; are not reported in the trunk but I modified my tree to print the  
</span><br>
<span class="quotelev1">&gt; number
</span><br>
<span class="quotelev1">&gt; of offline CPUs and the corresponding cpuset).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I'm ok with not re-implementing plpa-info.  That tool still exists and  
<br>
people can use it if they have scripts that depend on its specific  
<br>
output.  We should be pushing people to the hwloc executables for all  
<br>
future work -- plpa-info output should be for legacy stuff only (IMHO).
<br>
<p><span class="quotelev1">&gt; + plpa-taskset needs a lot of work for convering its own cpuset stuff
</span><br>
<span class="quotelev1">&gt; into ours. It has an advanced binding syntax that some people may be
</span><br>
<span class="quotelev1">&gt; used to. hwloc-bind has an advanced but different syntax. Apart from
</span><br>
<span class="quotelev1">&gt; that, the features are the same.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I think it *might* be worthwhile to convert some of the command line  
<br>
syntax to be supported by hwloc-bind.  I (really, really, really)  
<br>
didn't like some of the syntax that was supported, but I stole a bunch  
<br>
of ideas from taskset(1) -- I was trying to make plpa-taskset be a  
<br>
drop-in replacement for taskset.  Hence, I had to support its syntax.   
<br>
I'm ok jettisoning much of that now -- hwloc-bind is just much mo'  
<br>
betta than taskset ever imagined.
<br>
<p>I like the core_at_socket ideas, but we might need to think this through  
<br>
a little more for threads -- thread_at_core@socket?  Hmm.  Seems weird.
<br>
<p><span class="quotelev1">&gt; By the way, I wonder if we want to add public functions converting
</span><br>
<span class="quotelev1">&gt; between cpusets (0x0f00ffff) and cpulist string (0-15,24-27)
</span><br>
<span class="quotelev1">&gt; (plpa-taskset uses something like this).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>I found it helpful when embedding plpa in other things -- having this  
<br>
kind of utility gorp function just meant helping other developers who  
<br>
were *using* plpa (e.g., if they expose their own argv command line  
<br>
options for specifying affinity, why not let them use the same string  
<br>
parsing functions that plpa used?).  So: +1 on this idea.  :-)
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
<li><strong>Next message:</strong> <a href="0377.php">Jeff Squyres: "Re: [hwloc-devel] Pgcc issues fixed?"</a>
<li><strong>Previous message:</strong> <a href="0375.php">Samuel Thibault: "Re: [hwloc-devel] Pgcc issues fixed?"</a>
<li><strong>In reply to:</strong> <a href="0338.php">Brice Goglin: "[hwloc-devel] towards PLPA-like API in 1.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0381.php">Brice Goglin: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
<li><strong>Reply:</strong> <a href="0381.php">Brice Goglin: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
<li><strong>Reply:</strong> <a href="0386.php">Brice Goglin: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
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
