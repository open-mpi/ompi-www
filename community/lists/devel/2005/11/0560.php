<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Nov 29 14:00:15 2005" -->
<!-- isoreceived="20051129190015" -->
<!-- sent="Tue, 29 Nov 2005 10:57:54 -0800" -->
<!-- isosent="20051129185754" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re:  Linux processor affinity" -->
<!-- id="438CA4B2.1070005_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="47a7d5e91c5e5c352d1f4c8f6f144391_at_open-mpi.org" -->
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
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-11-29 13:57:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0561.php">Galen M. Shipman: "Re:  MPI_Probe_tag_c mvapi hand"</a>
<li><strong>Previous message:</strong> <a href="0559.php">Tim S. Woodall: "Re:  TCP performance"</a>
<li><strong>In reply to:</strong> <a href="0558.php">Jeff Squyres: "Linux processor affinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0562.php">Paul H. Hargrove: "Re:  Linux processor affinity"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff, et al.,
<br>
<p>&nbsp;&nbsp;&nbsp;My own &quot;research&quot; into processor affinity for the GASNet runtime 
<br>
began by &quot;borrowing&quot; the related autoconf code from OpenMPI.  My 
<br>
experience is the same as Jeff's when it comes to looking for a 
<br>
correlation between the API and any system parameter such as libc or 
<br>
kernel version: not an exhaustive search, but enough to see that there 
<br>
is no simple mapping.
<br>
&nbsp;&nbsp;&nbsp;While far from &quot;ideal&quot;, one option might be to perform an 
<br>
installation-time probe w/ a dumbed down version of the autoconf probes 
<br>
used at build time.  This probe would then set the proper processor 
<br>
affinity setting in a config file, an env var in the ISV's wrapper 
<br>
around mpirun, or similar place.  One can then have processor affinity 
<br>
disabled if no setting is found and use the one selected at install time 
<br>
if the setting is found.
<br>
<p>-Paul
<br>
<p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Greetings all.  I'm writing this to ask for help from the general 
</span><br>
<span class="quotelev1">&gt; development community.  We've run into a problem with Linux processor 
</span><br>
<span class="quotelev1">&gt; affinity, and although I've individually talked to a lot of people 
</span><br>
<span class="quotelev1">&gt; about this, no one has been able to come up with a solution.  So I 
</span><br>
<span class="quotelev1">&gt; thought I'd open this to a wider audience.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is a long-ish e-mail; bear with me.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As you may or may not know, Open MPI includes support for processor and 
</span><br>
<span class="quotelev1">&gt; memory affinity.  There are a number of benefits, but I'll skip that 
</span><br>
<span class="quotelev1">&gt; discussion for now.  For more information, see the following:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=building#build-paffinity">http://www.open-mpi.org/faq/?category=building#build-paffinity</a>
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=building#build-maffinity">http://www.open-mpi.org/faq/?category=building#build-maffinity</a>
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=tuning#paffinity-defs">http://www.open-mpi.org/faq/?category=tuning#paffinity-defs</a>
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=tuning#maffinity-defs">http://www.open-mpi.org/faq/?category=tuning#maffinity-defs</a>
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=tuning#using-paffinity">http://www.open-mpi.org/faq/?category=tuning#using-paffinity</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here's the problem: there are 3 different APIs for processor affinity 
</span><br>
<span class="quotelev1">&gt; in Linux.  I have not done exhaustive research on this, but which API 
</span><br>
<span class="quotelev1">&gt; you have seems to depend on your version of kernel, glibc, and/or Linux 
</span><br>
<span class="quotelev1">&gt; vendor (i.e., some vendors appear to port different versions of the API 
</span><br>
<span class="quotelev1">&gt; to their particular kernel/glibc).  The issue is that all 3 versions of 
</span><br>
<span class="quotelev1">&gt; the API use the same function names (sched_setaffinity() and 
</span><br>
<span class="quotelev1">&gt; sched_getaffinity()), but they change the number and types of the 
</span><br>
<span class="quotelev1">&gt; parameters to these functions.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is not a big problem for source distributions of Open MPI -- our 
</span><br>
<span class="quotelev1">&gt; configure script figures out which one you have and uses preprocessor 
</span><br>
<span class="quotelev1">&gt; directives to select the Right stuff in our code base for your 
</span><br>
<span class="quotelev1">&gt; platform.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What *is* a big problem, however, is that ISVs can therefore not ship a 
</span><br>
<span class="quotelev1">&gt; binary Open MPI installation and reasonably expect the processor 
</span><br>
<span class="quotelev1">&gt; affinity aspects of it to work on multiple Linux platforms.  That is, 
</span><br>
<span class="quotelev1">&gt; if the ISV compiles for API #X and ships a binary to a system that has 
</span><br>
<span class="quotelev1">&gt; API #Y, there are two options:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. Processor affinity is disabled.  This means that the benefits of 
</span><br>
<span class="quotelev1">&gt; processor affinity won't be visible (not hugely important on 2-way 
</span><br>
<span class="quotelev1">&gt; SMPs, but as the number of processors/cores increases, this is going to 
</span><br>
<span class="quotelev1">&gt; become more important), and Open MPI's NUMA-aware collectives won't be 
</span><br>
<span class="quotelev1">&gt; able to be used (because memory affinity may not be useful without 
</span><br>
<span class="quotelev1">&gt; processor affinity guarantees).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. Processor affinity is enabled, but the code invokes API #X on a 
</span><br>
<span class="quotelev1">&gt; system with API #Y.  This will have unpredictable results, the best 
</span><br>
<span class="quotelev1">&gt; case of which will be that processor affinity is simply [effectively] 
</span><br>
<span class="quotelev1">&gt; ignored; the worst case of which will be that the application will fail 
</span><br>
<span class="quotelev1">&gt; (e.g., seg fault).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Clearly, neither of these solutions are attractive.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My question to the developer crowd out there -- can you think of a way 
</span><br>
<span class="quotelev1">&gt; around this?  More specifically, is there a way to know -- at run time 
</span><br>
<span class="quotelev1">&gt; -- which API to use?  We can do some compiler trickery to compile all 
</span><br>
<span class="quotelev1">&gt; three APIs into a single Open MPI installation and then run-time 
</span><br>
<span class="quotelev1">&gt; dispatch to the Right one, but this is contingent upon being able to 
</span><br>
<span class="quotelev1">&gt; determine which API to dispatch to.  A bunch of us have poked around 
</span><br>
<span class="quotelev1">&gt; and not found anything on the system that indicates which API you have 
</span><br>
<span class="quotelev1">&gt; (e.g., looked in /proc and /sys), but not found anything.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Does anyone have any suggestions here?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Many thanks for your time.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
HPC Research Department                   Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0561.php">Galen M. Shipman: "Re:  MPI_Probe_tag_c mvapi hand"</a>
<li><strong>Previous message:</strong> <a href="0559.php">Tim S. Woodall: "Re:  TCP performance"</a>
<li><strong>In reply to:</strong> <a href="0558.php">Jeff Squyres: "Linux processor affinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0562.php">Paul H. Hargrove: "Re:  Linux processor affinity"</a>
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
