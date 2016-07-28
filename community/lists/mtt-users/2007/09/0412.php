<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Sep 18 17:48:57 2007" -->
<!-- isoreceived="20070918214857" -->
<!-- sent="Tue, 18 Sep 2007 17:48:52 -0400 (EDT)" -->
<!-- isosent="20070918214852" -->
<!-- name="Jelena Pjesivac-Grbovic" -->
<!-- email="pjesa_at_[hidden]" -->
<!-- subject="Re: [MTT users] [devel-core] MTT collective bakeoff: now open for business" -->
<!-- id="Pine.LNX.4.62.0709181743520.6095_at_reliant.cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C13B14B5-D2C2-43E7-83FA-7FA96836EBAF_at_cisco.com" -->
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
<strong>Date:</strong> 2007-09-18 17:48:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0413.php">Jeff Squyres: "Re: [MTT users] [devel-core] MTT collective bakeoff: now open for business"</a>
<li><strong>Previous message:</strong> <a href="0411.php">Jeff Squyres: "Re: [MTT users] [devel-core] MTT collective bakeoff: now open for business"</a>
<li><strong>In reply to:</strong> <a href="0411.php">Jeff Squyres: "Re: [MTT users] [devel-core] MTT collective bakeoff: now open for business"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0413.php">Jeff Squyres: "Re: [MTT users] [devel-core] MTT collective bakeoff: now open for business"</a>
<li><strong>Reply:</strong> <a href="0413.php">Jeff Squyres: "Re: [MTT users] [devel-core] MTT collective bakeoff: now open for business"</a>
<li><strong>Reply:</strong> <a href="0415.php">Jeff Squyres: "Re: [MTT users] [devel-core] MTT collective bakeoff: now open for business"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the info.
<br>
so I handled the ssl stuff (installed module locally and added &quot;use lib &lt;path to CRYPT::SSleys&gt;&quot; to client)
<br>
I am still having problems understanding what is going on.
<br>
<p>The system I am running on uses PBS, but I wanted to use it in interactive 
<br>
mode so I wanted to specify hostfiles.
<br>
I am receiving the following warnings
<br>
---------
<br>
<span class="quotelev2">&gt;&gt; Test run [netpipe]
</span><br>
<span class="quotelev2">&gt;&gt; Running with [ompi-nightly-v1.2] / [1.2.4b1r16141] / 
</span><br>
[ompi/gnu-standard]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Using MPI Details [ompi] with MPI Install [ompi/gnu-standard]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Total of 1 tests to run in this section
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Test: NPmpi, np=2, variant=1: Passed
<br>
*** WARNING: Unrecognized resource manager name (hostfile); the only
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;permitted names are: &quot;slurm tm loadleveler n1ge none unknown&quot;; skipped
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Test: NPmpi, np=2, variant=2: Passed
<br>
*** WARNING: Unrecognized resource manager name (hostfile); the only
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;permitted names are: &quot;slurm tm loadleveler n1ge none unknown&quot;; skipped
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Test: NPmpi, np=2, variant=3: Passed
<br>
---------
<br>
<p>What is causing this warning? (apart from the fact that hostfile is not 
<br>
known_resource_manager_names in Defaults.pm) 
<br>
What does it mean?
<br>
I think I should set resource manager to none - but I am not sure where.
<br>
<p>I was able to submit trial results for NP to the database, but OSU tests 
<br>
are timing out.
<br>
<p>Thanks,
<br>
Jelena
<br>
On Tue, 18 Sep 2007, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Sep 17, 2007, at 11:26 PM, Jelena Pjesivac-Grbovic wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am trying to set up mtt client for collectives on UTK clusters and I
</span><br>
<span class="quotelev2">&gt;&gt; received the following error
</span><br>
<span class="quotelev2">&gt;&gt; ---
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./client/mtt --scratch /home/pjesa/mtt/scratch/ \
</span><br>
<span class="quotelev2">&gt;&gt;     --file /home/pjesa/mtt/collective-bakeoff/samples/ompi-core-
</span><br>
<span class="quotelev2">&gt;&gt; perf-testing.ini \
</span><br>
<span class="quotelev2">&gt;&gt;     --verbose --print-time
</span><br>
<span class="quotelev2">&gt;&gt; *** MTT: ./client/mtt --scratch /home/pjesa/mtt/scratch/ --file
</span><br>
<span class="quotelev2">&gt;&gt;    /home/pjesa/mtt/collective-bakeoff/samples/ompi-core-perf-
</span><br>
<span class="quotelev2">&gt;&gt; testing.ini
</span><br>
<span class="quotelev2">&gt;&gt;    --verbose --print-time
</span><br>
<span class="quotelev2">&gt;&gt; *** WARNING: Unable to read hostfile: /home/pjesa/machinefile  --
</span><br>
<span class="quotelev2">&gt;&gt; ignoring
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note this error as well -- make sure that this hostfile exists.  If
</span><br>
<span class="quotelev1">&gt; you're running under Torque, you probably don't need a hostfile (I'm
</span><br>
<span class="quotelev1">&gt; not sure how well we've tested under Torque, but it won't be hard to
</span><br>
<span class="quotelev1">&gt; fix if there's a problem).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *** Reporter initializing
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Initializing reporter module: MTTDatabase
</span><br>
<span class="quotelev2">&gt;&gt;     Set HTTP credentials for realm &quot;OMPI&quot;
</span><br>
<span class="quotelev2">&gt;&gt; *** WARNING: &gt;&gt; Failed test ping to MTTDatabase URL:
</span><br>
<span class="quotelev2">&gt;&gt;      <a href="https://www.open-mpi.org:443/mtt/submit/">https://www.open-mpi.org:443/mtt/submit/</a>
</span><br>
<span class="quotelev2">&gt;&gt; *** WARNING: &gt;&gt; Error was: 501 Protocol scheme 'https' is not
</span><br>
<span class="quotelev2">&gt;&gt; supported
</span><br>
<span class="quotelev2">&gt;&gt;      (Crypt::SSLeay not installed)
</span><br>
<span class="quotelev2">&gt;&gt;      LWP will support https URLs if the Crypt::SSLeay module is
</span><br>
<span class="quotelev2">&gt;&gt; installed.
</span><br>
<span class="quotelev2">&gt;&gt;      More information at &lt;<a href="http://www.linpro.no/lwp/libwww-perl/">http://www.linpro.no/lwp/libwww-perl/</a>
</span><br>
<span class="quotelev2">&gt;&gt; README.SSL&gt;.
</span><br>
<span class="quotelev2">&gt;&gt; *** ERROR: Module aborted: MTT::Reporter::MTTDatabase:Init: ***
</span><br>
<span class="quotelev2">&gt;&gt; ERROR: &gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      Do not want to continue with possible bad submission URL --
</span><br>
<span class="quotelev2">&gt;&gt;          aborting
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It's not that MTT itself requires SSL, it's that the OMPI test
</span><br>
<span class="quotelev1">&gt; results submission URL https because a password is sent.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry.  :-(
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
<span class="quotelev1">&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><pre>
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
<li><strong>Next message:</strong> <a href="0413.php">Jeff Squyres: "Re: [MTT users] [devel-core] MTT collective bakeoff: now open for business"</a>
<li><strong>Previous message:</strong> <a href="0411.php">Jeff Squyres: "Re: [MTT users] [devel-core] MTT collective bakeoff: now open for business"</a>
<li><strong>In reply to:</strong> <a href="0411.php">Jeff Squyres: "Re: [MTT users] [devel-core] MTT collective bakeoff: now open for business"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0413.php">Jeff Squyres: "Re: [MTT users] [devel-core] MTT collective bakeoff: now open for business"</a>
<li><strong>Reply:</strong> <a href="0413.php">Jeff Squyres: "Re: [MTT users] [devel-core] MTT collective bakeoff: now open for business"</a>
<li><strong>Reply:</strong> <a href="0415.php">Jeff Squyres: "Re: [MTT users] [devel-core] MTT collective bakeoff: now open for business"</a>
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
