<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Aug 16 00:25:08 2005" -->
<!-- isoreceived="20050816052508" -->
<!-- sent="Tue, 16 Aug 2005 00:24:53 -0500" -->
<!-- isosent="20050816052453" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="another mind bending mca configure update from Brian" -->
<!-- id="8E0924C0-74A1-4A95-B0F5-E6C021C1B0E5_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-08-16 00:24:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0156.php">Gleb Natapov: "configure of openib module"</a>
<li><strong>Previous message:</strong> <a href="0154.php">Jeff Squyres: "Re:  linux paffinity component"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all -
<br>
<p>It's been a week or so since I horribly broke configure, so I thought  
<br>
it was time for another stab at it.  This time, the motivation was  
<br>
the high resolution timers.  The timers are different on pretty much  
<br>
every platform, and have some weird intersections (for example, on  
<br>
all IA64 Linux machines except the Altix, you have to use assembly to  
<br>
get the counters.  On the Altix, you use SGI's interface so you don't  
<br>
have quite as much per-cpu jitter.  This seems to scream for two  
<br>
different components).  We want at most one component to ever be  
<br>
built - anything more and any rational scheme for doing inline  
<br>
functions into the components will fail.
<br>
<p>A framework can now (via a file configure.options in the mca/ 
<br>
[framework]/ directory) set options about how the framework should be  
<br>
configured.  Currently, the only option is STOP_AT_FIRST, which will  
<br>
cause configure to only successfully configure at most one component  
<br>
for the framework type.  Any other option is taken to mean the  
<br>
default &quot;try to configure all components&quot; system that has always been  
<br>
in place.  The way this works is that all the no configure components  
<br>
are configured in the order specified by autogen.sh, then all the m4  
<br>
configure components are configured in the order specified by  
<br>
autogen.sh.  As soon as one of them succeeds, no more components are  
<br>
configured.  For now, configure.stub components can not be used with  
<br>
STOP_AT_FIRST (but can be with the default, usual system, yadda, yadda).
<br>
<p>Now, you're probably asking yourself &quot;what order does autogen.sh  
<br>
specify?&quot;, and the answer would be &quot;alphabetical&quot;.  That not  
<br>
necessarily being useful for stopping at the first useable component,  
<br>
you can now specify a &quot;listing priority&quot; in configure.params for a  
<br>
component which is, you guessed it, an integer that gives a sorting  
<br>
ranking for the given components, higher numbers are earlier in the  
<br>
list.  Components default to a priority of 0, and the sort is stable  
<br>
(so components with the same priority stay in alphabetical order).
<br>
<p>This is probably not useful for anything outside of OPAL, but seems  
<br>
to be fairly useful for all three OPAL frameworks.  I haven't had a  
<br>
chance to write up the documentation in the design doc just yet  
<br>
(coming soon, I promise!) and the timer framework isn't quite ready  
<br>
to commit yet, so there isn't a good example.  I should have at least  
<br>
the base of the timer framework and the x86 linux component committed  
<br>
tomorrow evening, so there will be an example then of what I'm  
<br>
talking about.
<br>
<p>Anyway, I'm 99.99% sure that I didn't break anything.  Let me know  
<br>
what I missed...
<br>
<p>Brian
<br>
<p><p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0156.php">Gleb Natapov: "configure of openib module"</a>
<li><strong>Previous message:</strong> <a href="0154.php">Jeff Squyres: "Re:  linux paffinity component"</a>
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
