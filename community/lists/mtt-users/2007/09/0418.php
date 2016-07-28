<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Sep 20 12:40:55 2007" -->
<!-- isoreceived="20070920164055" -->
<!-- sent="Thu, 20 Sep 2007 12:40:48 -0400 (EDT)" -->
<!-- isosent="20070920164048" -->
<!-- name="Jelena Pjesivac-Grbovic" -->
<!-- email="pjesa_at_[hidden]" -->
<!-- subject="Re: [MTT users] [devel-core] MTT collective bakeoff: now open for business" -->
<!-- id="Pine.LNX.4.62.0709201234250.25870_at_reliant.cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="DC690F4D-1DF4-49D1-91F9-46302BDA8D2F_at_cisco.com" -->
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
<strong>Date:</strong> 2007-09-20 12:40:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0419.php">Jeff Squyres: "Re: [MTT users] [devel-core] MTT collective bakeoff: now open for business"</a>
<li><strong>Previous message:</strong> <a href="0417.php">Ethan Mallove: "Re: [MTT users] Problem with reporter: selecting bitness"</a>
<li><strong>In reply to:</strong> <a href="0414.php">Jeff Squyres: "Re: [MTT users] [devel-core] MTT collective bakeoff: now open for business"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0419.php">Jeff Squyres: "Re: [MTT users] [devel-core] MTT collective bakeoff: now open for business"</a>
<li><strong>Reply:</strong> <a href="0419.php">Jeff Squyres: "Re: [MTT users] [devel-core] MTT collective bakeoff: now open for business"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks,
<br>
I have another question about MTT reporting.  I am not sure what part am I 
<br>
missing.
<br>
I executed tests on 8 nodes (included MPI Get, MPI Install, and all other 
<br>
phases)
<br>
and then I wanted to run 36 node test using something like:
<br>
&nbsp;&nbsp;./client/mtt --scratch /home/pjesa/mtt/scratch \
<br>
&nbsp;&nbsp;&nbsp;--file /home/pjesa/mtt/collective-bakeoff/samples/ompi-core-perf-testing_openmpi.ini \
<br>
&nbsp;&nbsp;&nbsp;--verbose --print-time --section 'run;skampi'
<br>
<p>The test runs but I receive no output/report.  Is there some additional 
<br>
flag to specify that I want to the output/report at the end?
<br>
<p>Here is the stdout of the test:
<br>
--------
<br>
** MTT: ./client/mtt --scratch /home/pjesa/mtt/scratch --file
<br>
&nbsp;&nbsp;&nbsp;/home/pjesa/mtt/collective-bakeoff/samples/ompi-core-perf-testing_openmpi
<br>
&nbsp;&nbsp;&nbsp;.ini --verbose --print-time --section run;skampi
<br>
*** Reporter initializing
<br>
*** Reporter initialized
<br>
*** MPI get phase starting
<br>
*** MPI get phase complete
<br>
<span class="quotelev2">&gt;&gt; Phase: MPI Get
</span><br>
&nbsp;&nbsp;&nbsp;&nbsp;Started:       Thu Sep 20 11:41:42 2007
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Stopped:       Thu Sep 20 11:41:42 2007
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Elapsed:       00:00:00
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Total elapsed: 00:00:00
<br>
*** MPI install phase starting
<br>
*** MPI install phase complete
<br>
<span class="quotelev2">&gt;&gt; Phase: MPI Install
</span><br>
&nbsp;&nbsp;&nbsp;&nbsp;Started:       Thu Sep 20 11:41:42 2007
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Stopped:       Thu Sep 20 11:41:42 2007
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Elapsed:       00:00:00
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Total elapsed: 00:00:00
<br>
*** Test get phase starting
<br>
*** Test get phase complete
<br>
<span class="quotelev2">&gt;&gt; Phase: Test Get
</span><br>
&nbsp;&nbsp;&nbsp;&nbsp;Started:       Thu Sep 20 11:41:42 2007
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Stopped:       Thu Sep 20 11:41:42 2007
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Elapsed:       00:00:00
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Total elapsed: 00:00:00
<br>
*** Test build phase starting
<br>
*** Test build phase complete
<br>
<span class="quotelev2">&gt;&gt; Phase: Test Build
</span><br>
&nbsp;&nbsp;&nbsp;&nbsp;Started:       Thu Sep 20 11:41:42 2007
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Stopped:       Thu Sep 20 11:41:42 2007
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Elapsed:       00:00:00
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Total elapsed: 00:00:00
<br>
*** Run test phase starting
<br>
<span class="quotelev2">&gt;&gt; Test run [skampi]
</span><br>
<span class="quotelev2">&gt;&gt; Running with [ompi-nightly-v1.2] / [1.2.4rc1r16161] /
</span><br>
&nbsp;&nbsp;&nbsp;[ompi/gnu-standard]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Using MPI Details [ompi] with MPI Install [ompi/gnu-standard]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Total of 1 tests to run in this section
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Test: skampi, np=36, variant=1: Passed
<br>
....
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Test: skampi, np=36, variant=70: Passed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;### Test progress: 1 of 1 section tests complete (100%)
<br>
*** Run test phase complete
<br>
<span class="quotelev2">&gt;&gt; Phase: Test Run
</span><br>
&nbsp;&nbsp;&nbsp;&nbsp;Started:       Thu Sep 20 11:41:42 2007
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Stopped:       Thu Sep 20 12:13:06 2007
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Elapsed:       00:31:24
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Total elapsed: 00:31:24
<br>
<span class="quotelev2">&gt;&gt; Phase: Trim
</span><br>
&nbsp;&nbsp;&nbsp;&nbsp;Started:       Thu Sep 20 12:13:06 2007
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Stopped:       Thu Sep 20 12:13:06 2007
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Elapsed:       00:00:00
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Total elapsed: 00:31:24
<br>
*** Reporter finalizing
<br>
*** Reporter finalized
<br>
--------
<br>
<p><p><p>On Tue, 18 Sep 2007, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Sep 18, 2007, at 6:36 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Doh -- looks like a corner case that I missed (if you use a hostfile,
</span><br>
<span class="quotelev2">&gt;&gt; it should automatically set the resource manager to &quot;none&quot;, I would
</span><br>
<span class="quotelev2">&gt;&gt; think).  Did you set a value for &quot;resource_manager&quot; in the INI file?
</span><br>
<span class="quotelev2">&gt;&gt; If so, take it out or just set it to none.  I'll file a bug to fix
</span><br>
<span class="quotelev2">&gt;&gt; this tomorrow (i.e., if you don't set it at all and are using a
</span><br>
<span class="quotelev2">&gt;&gt; hostlist/hostfile, the Right Thing happens).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Oops!  I missed your statement:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I think I should set resource manager to none - but I am not sure
</span><br>
<span class="quotelev3">&gt;&gt;&gt; where.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You can set &quot;resource_manager = none&quot; in the MPI Details section.
</span><br>
<span class="quotelev1">&gt; But MTT should be doing this for you automatically; I'll fix it
</span><br>
<span class="quotelev1">&gt; tomorrow.
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
<li><strong>Next message:</strong> <a href="0419.php">Jeff Squyres: "Re: [MTT users] [devel-core] MTT collective bakeoff: now open for business"</a>
<li><strong>Previous message:</strong> <a href="0417.php">Ethan Mallove: "Re: [MTT users] Problem with reporter: selecting bitness"</a>
<li><strong>In reply to:</strong> <a href="0414.php">Jeff Squyres: "Re: [MTT users] [devel-core] MTT collective bakeoff: now open for business"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0419.php">Jeff Squyres: "Re: [MTT users] [devel-core] MTT collective bakeoff: now open for business"</a>
<li><strong>Reply:</strong> <a href="0419.php">Jeff Squyres: "Re: [MTT users] [devel-core] MTT collective bakeoff: now open for business"</a>
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
