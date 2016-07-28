<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Sep 17 23:26:17 2007" -->
<!-- isoreceived="20070918032617" -->
<!-- sent="Mon, 17 Sep 2007 23:26:12 -0400 (EDT)" -->
<!-- isosent="20070918032612" -->
<!-- name="Jelena Pjesivac-Grbovic" -->
<!-- email="pjesa_at_[hidden]" -->
<!-- subject="Re: [MTT users] [devel-core] MTT collective bakeoff: now open for business" -->
<!-- id="Pine.LNX.4.62.0709172321490.23331_at_reliant.cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="528CFCFC-41A4-4BCC-9380-E67065CE03C3_at_cisco.com" -->
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
<strong>From:</strong> Jelena Pjesivac-Grbovic (<em>pjesa_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-17 23:26:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0411.php">Jeff Squyres: "Re: [MTT users] [devel-core] MTT collective bakeoff: now open for business"</a>
<li><strong>Previous message:</strong> <a href="0409.php">Ethan Mallove: "Re: [MTT users] OSU parsing module issue?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0411.php">Jeff Squyres: "Re: [MTT users] [devel-core] MTT collective bakeoff: now open for business"</a>
<li><strong>Reply:</strong> <a href="0411.php">Jeff Squyres: "Re: [MTT users] [devel-core] MTT collective bakeoff: now open for business"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I am trying to set up mtt client for collectives on UTK clusters and I 
<br>
received the following error
<br>
<pre>
---
&gt; ./client/mtt --scratch /home/pjesa/mtt/scratch/ \
    --file /home/pjesa/mtt/collective-bakeoff/samples/ompi-core-perf-testing.ini \
    --verbose --print-time
*** MTT: ./client/mtt --scratch /home/pjesa/mtt/scratch/ --file
   /home/pjesa/mtt/collective-bakeoff/samples/ompi-core-perf-testing.ini
   --verbose --print-time
*** WARNING: Unable to read hostfile: /home/pjesa/machinefile  -- ignoring
*** Reporter initializing
&gt;&gt; Initializing reporter module: MTTDatabase
    Set HTTP credentials for realm &quot;OMPI&quot;
*** WARNING: &gt;&gt; Failed test ping to MTTDatabase URL:
     <a href="https://www.open-mpi.org:443/mtt/submit/">https://www.open-mpi.org:443/mtt/submit/</a>
*** WARNING: &gt;&gt; Error was: 501 Protocol scheme 'https' is not supported
     (Crypt::SSLeay not installed)
     LWP will support https URLs if the Crypt::SSLeay module is installed.
     More information at &lt;<a href="http://www.linpro.no/lwp/libwww-perl/README.SSL">http://www.linpro.no/lwp/libwww-perl/README.SSL</a>&gt;.
*** ERROR: Module aborted: MTT::Reporter::MTTDatabase:Init: *** ERROR: &gt;&gt;
     Do not want to continue with possible bad submission URL --
         aborting
---
Is there a way to run MTT without SSL?
Thanks,
Jelena
On Fri, 14 Sep 2007, Jeff Squyres wrote:
&gt; It has taken a while, but we are now finally open for business on the
&gt; MTT collective bakeoff.  Please start running your tests so that we
&gt; can have some results to discuss in Paris.  I have put up a wiki page
&gt; with the scope of what we are doing (largely taken from the notes
&gt; from the ABQ meeting) and instructions on how to setup MTT for the
&gt; bakeoff at your site:
&gt;
&gt;     <a href="https://svn.open-mpi.org/trac/mtt/wiki/CollPerformanceBakeoff">https://svn.open-mpi.org/trac/mtt/wiki/CollPerformanceBakeoff</a>
&gt;
&gt; Some brief notes:
&gt;
&gt; 1. The configuration file that is provided is a *template*.  You
&gt; *WILL* need to customize it for your site.  Those with SLURM may have
&gt; to do very little.  ;-)
&gt;
&gt; 2. I did not test MPICH-MX, Scali MPI, or Cray MPI.  Those are are
&gt; interested, please contact me.  A small amount of work needs to be
&gt; done to get MTT to understand these MPI's.
&gt;
&gt; 3. Please address all questions about MTT and the bakeoff to the mtt-
&gt; users list (<a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>).
&gt;
&gt; -- 
&gt; Jeff Squyres
&gt; Cisco Systems
&gt;
&gt; _______________________________________________
&gt; devel-core mailing list
&gt; devel-core_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel-core">http://www.open-mpi.org/mailman/listinfo.cgi/devel-core</a>
&gt;
--
Jelena Pjesivac-Grbovic, Pjesa
Graduate Research Assistant
Innovative Computing Laboratory
Computer Science Department, UTK
Claxton Complex 350
(865) 974 - 6722 
(865) 974 - 6321
jpjesiva_at_[hidden]
&quot;The only difference between a problem and a solution is that
  people understand the solution.&quot;
                                       -- Charles Kettering
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0411.php">Jeff Squyres: "Re: [MTT users] [devel-core] MTT collective bakeoff: now open for business"</a>
<li><strong>Previous message:</strong> <a href="0409.php">Ethan Mallove: "Re: [MTT users] OSU parsing module issue?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0411.php">Jeff Squyres: "Re: [MTT users] [devel-core] MTT collective bakeoff: now open for business"</a>
<li><strong>Reply:</strong> <a href="0411.php">Jeff Squyres: "Re: [MTT users] [devel-core] MTT collective bakeoff: now open for business"</a>
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
