<?
$subject_val = "Re: [OMPI users] Some Questions on Building OMPI on Linux Em64t";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 26 15:32:30 2010" -->
<!-- isoreceived="20100526193230" -->
<!-- sent="Wed, 26 May 2010 14:32:23 -0500" -->
<!-- isosent="20100526193223" -->
<!-- name="Michael E. Thomadakis" -->
<!-- email="miket7777_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Some Questions on Building OMPI on Linux Em64t" -->
<!-- id="4BFD7747.5070905_at_gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="51CE91E4-CC4C-4476-BE68-6F776BF4F003_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Some Questions on Building OMPI on Linux Em64t<br>
<strong>From:</strong> Michael E. Thomadakis (<em>miket7777_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-26 15:32:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13168.php">Gijsbert Wiesenekker: "Re: [OMPI users] Deadlock question"</a>
<li><strong>Previous message:</strong> <a href="13166.php">Michael E. Thomadakis: "Re: [OMPI users] Some Questions on Building OMPI on Linux Em64t"</a>
<li><strong>In reply to:</strong> <a href="13160.php">Jeff Squyres: "Re: [OMPI users] Some Questions on Building OMPI on Linux Em64t"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13170.php">Jeff Squyres: "Re: [OMPI users] Some Questions on Building OMPI on Linux Em64t"</a>
<li><strong>Reply:</strong> <a href="13170.php">Jeff Squyres: "Re: [OMPI users] Some Questions on Building OMPI on Linux Em64t"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi jeff,
<br>
<p>thanks for the reply. Pls see below .
<br>
<p>And a new question:
<br>
<p>How do you handle thread/task and memory affinity? Do you pass the 
<br>
requested affinity desires to the batch scheduler and them let it issue 
<br>
the specific placements for threads to the nodes ?
<br>
<p>This is something we are concerned as we are running multiple jobs on 
<br>
same node and we don't want to oversubscribe cores by binding there 
<br>
threads inadvertandly.
<br>
<p>Looking at ompi_info
<br>
&nbsp;&nbsp;$ ompi_info | grep -i aff
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA paffinity: linux (MCA v2.0, API v2.0, Component v1.4.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA maffinity: first_use (MCA v2.0, API v2.0, Component v1.4.2)
<br>
<p>does this mean we have the full affinity support included or do I need 
<br>
to involve HWLOC in any way ?
<br>
<p><p><p>On 05/25/10 08:35, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On May 24, 2010, at 2:02 PM, Michael E. Thomadakis wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    
</span><br>
<span class="quotelev2">&gt;&gt; |&gt;  1) high-resolution timers: how do I specify the HRT linux timers in the
</span><br>
<span class="quotelev2">&gt;&gt; |&gt;      --with-timer=TYPE
</span><br>
<span class="quotelev2">&gt;&gt; |&gt;   line of ./configure ?
</span><br>
<span class="quotelev2">&gt;&gt; |
</span><br>
<span class="quotelev2">&gt;&gt; | You shouldn't need to do anything; the &quot;linux&quot; timer component of Open MPI
</span><br>
<span class="quotelev2">&gt;&gt; | should get automatically selected.  You should be able to see this in the
</span><br>
<span class="quotelev2">&gt;&gt; | stdout of Open MPI's &quot;configure&quot;, and/or if you run ompi_info | grep timer
</span><br>
<span class="quotelev2">&gt;&gt; | -- there should only be one entry: linux.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If nothing is menioned, will it by default select 'linux' timers?
</span><br>
<span class="quotelev2">&gt;&gt;      
</span><br>
<span class="quotelev1">&gt; Yes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    
</span><br>
<span class="quotelev2">&gt;&gt; Or I have to specify in th configure
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;          --with-timer=linux ?
</span><br>
<span class="quotelev2">&gt;&gt;      
</span><br>
<span class="quotelev1">&gt; Nope.  The philosophy of Open MPI is that whenever possible, we try to choose a sensible default.  It never hurts to double check, but we try to do the Right Thing whenever it's possible to automatically choose it (within reason, of course).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You can also check the output of ompi_info -- ompi_info tells you lots of things about your Open MPI installation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    
</span><br>
<span class="quotelev2">&gt;&gt; I actually spent some time looking around in the source trying to see which
</span><br>
<span class="quotelev2">&gt;&gt; actual timer is the base. Is this a high-resolution timer such as a POSIX
</span><br>
<span class="quotelev2">&gt;&gt; timers (timer_gettime or clock_nanosleep, etc.) or Intel processor's TSC ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am just trying to stay away from gettimeofday()
</span><br>
<span class="quotelev2">&gt;&gt;      
</span><br>
<span class="quotelev1">&gt; Understood.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ugh; I just poked into the code -- it's complicated how we resolve the timer functions.  It looks like we put in the infrastructure into getting high resolution timers, but at least for Linux, we don't use it (the code falls back to gettimeofday).  It looks like we're only using the high-resolution timers on AIX (!) and Solaris.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Patches would be greatly appreciated; I'd be happy to walk someone through what to do.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    
</span><br>
<p>Which HRtimer is recommended for a Linux environment ? timer_gettime 
<br>
usually gives decent resolution and it is portable. I don't want to 
<br>
promise anything as I am already bogged down with several ongoing 
<br>
projects. You can give me *brief*  instructions to see if this can be 
<br>
squeezed in.
<br>
...
<br>
<p><span class="quotelev2">&gt;&gt; Justr as a feedback from one of the many HPC centers, for us it is most
</span><br>
<span class="quotelev2">&gt;&gt; important to have
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; a) a light-weight efficient MPI stack which makes the underlying IB h/w
</span><br>
<span class="quotelev2">&gt;&gt; capabilities available and
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; b) it can smoothly cooperate withe a batch scheduler / resource manager so
</span><br>
<span class="quotelev2">&gt;&gt; that a mixture of jobs get a decent allocation of the cluster resources.
</span><br>
<span class="quotelev2">&gt;&gt;      
</span><br>
<span class="quotelev1">&gt; Cools; good to know.  We try to make these things very workable in Open MPI -- it's been a goal from day 1 to integrate with job schedulers, etc.  And without high performance, we wouldn't have much to talk about.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please be sure to let us know of questions / problems / etc.  I admit that we're sometimes a little slow to answer on the users list, but we do the best we can.  So don't hesitate to bump us if we don't reply.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    
</span><br>
<p>Thanks again...
<br>
michael
<br>
<p><p><pre>
-- 
% -------------------------------------------------------------------- \
% Michael E. Thomadakis, Ph.D.  Senior Lead Supercomputer Engineer/Res \
% E-mail: miket AT tamu DOT edu                   Texas A&amp;M University \
% web:    <a href="http://alphamike.tamu.edu">http://alphamike.tamu.edu</a>              Supercomputing Center \
% Voice:  979-862-3931                    Teague Research Center, 104B \
% FAX:    979-847-8643                  College Station, TX 77843, USA \
% -------------------------------------------------------------------- \
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13167/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13168.php">Gijsbert Wiesenekker: "Re: [OMPI users] Deadlock question"</a>
<li><strong>Previous message:</strong> <a href="13166.php">Michael E. Thomadakis: "Re: [OMPI users] Some Questions on Building OMPI on Linux Em64t"</a>
<li><strong>In reply to:</strong> <a href="13160.php">Jeff Squyres: "Re: [OMPI users] Some Questions on Building OMPI on Linux Em64t"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13170.php">Jeff Squyres: "Re: [OMPI users] Some Questions on Building OMPI on Linux Em64t"</a>
<li><strong>Reply:</strong> <a href="13170.php">Jeff Squyres: "Re: [OMPI users] Some Questions on Building OMPI on Linux Em64t"</a>
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
