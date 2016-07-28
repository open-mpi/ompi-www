<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Nov 29 12:21:50 2005" -->
<!-- isoreceived="20051129172150" -->
<!-- sent="Tue, 29 Nov 2005 12:21:43 -0500" -->
<!-- isosent="20051129172143" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Linux processor affinity" -->
<!-- id="47a7d5e91c5e5c352d1f4c8f6f144391_at_open-mpi.org" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-11-29 12:21:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0559.php">Tim S. Woodall: "Re:  TCP performance"</a>
<li><strong>Previous message:</strong> <a href="0557.php">George Bosilca: "TCP performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0560.php">Paul H. Hargrove: "Re:  Linux processor affinity"</a>
<li><strong>Reply:</strong> <a href="0560.php">Paul H. Hargrove: "Re:  Linux processor affinity"</a>
<li><strong>Reply:</strong> <a href="0562.php">Paul H. Hargrove: "Re:  Linux processor affinity"</a>
<li><strong>Reply:</strong> <a href="0563.php">Bogdan Costescu: "Re:  Linux processor affinity"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Greetings all.  I'm writing this to ask for help from the general 
<br>
development community.  We've run into a problem with Linux processor 
<br>
affinity, and although I've individually talked to a lot of people 
<br>
about this, no one has been able to come up with a solution.  So I 
<br>
thought I'd open this to a wider audience.
<br>
<p>This is a long-ish e-mail; bear with me.
<br>
<p>As you may or may not know, Open MPI includes support for processor and 
<br>
memory affinity.  There are a number of benefits, but I'll skip that 
<br>
discussion for now.  For more information, see the following:
<br>
<p><a href="http://www.open-mpi.org/faq/?category=building#build-paffinity">http://www.open-mpi.org/faq/?category=building#build-paffinity</a>
<br>
<a href="http://www.open-mpi.org/faq/?category=building#build-maffinity">http://www.open-mpi.org/faq/?category=building#build-maffinity</a>
<br>
<a href="http://www.open-mpi.org/faq/?category=tuning#paffinity-defs">http://www.open-mpi.org/faq/?category=tuning#paffinity-defs</a>
<br>
<a href="http://www.open-mpi.org/faq/?category=tuning#maffinity-defs">http://www.open-mpi.org/faq/?category=tuning#maffinity-defs</a>
<br>
<a href="http://www.open-mpi.org/faq/?category=tuning#using-paffinity">http://www.open-mpi.org/faq/?category=tuning#using-paffinity</a>
<br>
<p>Here's the problem: there are 3 different APIs for processor affinity 
<br>
in Linux.  I have not done exhaustive research on this, but which API 
<br>
you have seems to depend on your version of kernel, glibc, and/or Linux 
<br>
vendor (i.e., some vendors appear to port different versions of the API 
<br>
to their particular kernel/glibc).  The issue is that all 3 versions of 
<br>
the API use the same function names (sched_setaffinity() and 
<br>
sched_getaffinity()), but they change the number and types of the 
<br>
parameters to these functions.
<br>
<p>This is not a big problem for source distributions of Open MPI -- our 
<br>
configure script figures out which one you have and uses preprocessor 
<br>
directives to select the Right stuff in our code base for your 
<br>
platform.
<br>
<p>What *is* a big problem, however, is that ISVs can therefore not ship a 
<br>
binary Open MPI installation and reasonably expect the processor 
<br>
affinity aspects of it to work on multiple Linux platforms.  That is, 
<br>
if the ISV compiles for API #X and ships a binary to a system that has 
<br>
API #Y, there are two options:
<br>
<p>1. Processor affinity is disabled.  This means that the benefits of 
<br>
processor affinity won't be visible (not hugely important on 2-way 
<br>
SMPs, but as the number of processors/cores increases, this is going to 
<br>
become more important), and Open MPI's NUMA-aware collectives won't be 
<br>
able to be used (because memory affinity may not be useful without 
<br>
processor affinity guarantees).
<br>
<p>2. Processor affinity is enabled, but the code invokes API #X on a 
<br>
system with API #Y.  This will have unpredictable results, the best 
<br>
case of which will be that processor affinity is simply [effectively] 
<br>
ignored; the worst case of which will be that the application will fail 
<br>
(e.g., seg fault).
<br>
<p>Clearly, neither of these solutions are attractive.
<br>
<p>My question to the developer crowd out there -- can you think of a way 
<br>
around this?  More specifically, is there a way to know -- at run time 
<br>
-- which API to use?  We can do some compiler trickery to compile all 
<br>
three APIs into a single Open MPI installation and then run-time 
<br>
dispatch to the Right one, but this is contingent upon being able to 
<br>
determine which API to dispatch to.  A bunch of us have poked around 
<br>
and not found anything on the system that indicates which API you have 
<br>
(e.g., looked in /proc and /sys), but not found anything.
<br>
<p>Does anyone have any suggestions here?
<br>
<p>Many thanks for your time.
<br>
<p><pre>
-- 
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0559.php">Tim S. Woodall: "Re:  TCP performance"</a>
<li><strong>Previous message:</strong> <a href="0557.php">George Bosilca: "TCP performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0560.php">Paul H. Hargrove: "Re:  Linux processor affinity"</a>
<li><strong>Reply:</strong> <a href="0560.php">Paul H. Hargrove: "Re:  Linux processor affinity"</a>
<li><strong>Reply:</strong> <a href="0562.php">Paul H. Hargrove: "Re:  Linux processor affinity"</a>
<li><strong>Reply:</strong> <a href="0563.php">Bogdan Costescu: "Re:  Linux processor affinity"</a>
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
