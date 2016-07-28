<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Sep 20 15:09:07 2007" -->
<!-- isoreceived="20070920190907" -->
<!-- sent="Thu, 20 Sep 2007 15:09:02 -0400" -->
<!-- isosent="20070920190902" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT users] [devel-core] MTT collective bakeoff: now open for	business" -->
<!-- id="20070920190901.GD12598_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="Pine.LNX.4.62.0709201308260.25870_at_reliant.cs.utk.edu" -->
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
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-20 15:09:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0422.php">Mohamad Chaarawi: "[MTT users] MVAPICH2 configuring problems"</a>
<li><strong>Previous message:</strong> <a href="0420.php">Jelena Pjesivac-Grbovic: "Re: [MTT users] [devel-core] MTT collective bakeoff: now open for business"</a>
<li><strong>In reply to:</strong> <a href="0420.php">Jelena Pjesivac-Grbovic: "Re: [MTT users] [devel-core] MTT collective bakeoff: now open for business"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0433.php">Jelena Pjesivac-Grbovic: "[MTT users] Problems running MTT with already installed MPICH-MX"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Sep/20/2007 01:55:49PM, Jelena Pjesivac-Grbovic
<br>
wrote:
<br>
<span class="quotelev1">&gt; I already have that - but it did not generate anything
</span><br>
<span class="quotelev1">&gt; when I call it second time (it generates output the first
</span><br>
<span class="quotelev1">&gt; time when I execute mtt client with all sections).  (I
</span><br>
<span class="quotelev1">&gt; even tried adding --section reporter to the command line)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>You did the right thing by adding &quot;reporter&quot; to --section.
<br>
Try this:
<br>
<p>&nbsp;&nbsp;$ client/mtt ... --section 'run.*skampi reporter' ...
<br>
<p>If that still does not work. Could you run with --debug and 
<br>
reply with the output?
<br>
<p>-Ethan
<br>
<p><p><span class="quotelev1">&gt; On Thu, 20 Sep 2007, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Yes, you can add another [reporter] section to the INI file to have
</span><br>
<span class="quotelev2">&gt; &gt; it give you a report locally.  For example, something like this would
</span><br>
<span class="quotelev2">&gt; &gt; give you a summary table at the end:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [Reporter: text file]
</span><br>
<span class="quotelev2">&gt; &gt; module = TextFile
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; textfile_filename =
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; # User-defined report headers/footers
</span><br>
<span class="quotelev2">&gt; &gt; textfile_summary_header = &lt;&lt;EOT
</span><br>
<span class="quotelev2">&gt; &gt; hostname: &amp;shell(&quot;hostname&quot;)
</span><br>
<span class="quotelev2">&gt; &gt; uname: &amp;shell(&quot;uname -a&quot;)
</span><br>
<span class="quotelev2">&gt; &gt; who am i: &amp;shell(&quot;who am i&quot;)
</span><br>
<span class="quotelev2">&gt; &gt; EOT
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; textfile_summary_footer =
</span><br>
<span class="quotelev2">&gt; &gt; textfile_detail_header  =
</span><br>
<span class="quotelev2">&gt; &gt; textfile_detail_footer  =
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; textfile_textwrap = 78
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Sep 20, 2007, at 12:40 PM, Jelena Pjesivac-Grbovic wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I have another question about MTT reporting.  I am not sure what
</span><br>
<span class="quotelev3">&gt; &gt;&gt; part am I
</span><br>
<span class="quotelev3">&gt; &gt;&gt; missing.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I executed tests on 8 nodes (included MPI Get, MPI Install, and all
</span><br>
<span class="quotelev3">&gt; &gt;&gt; other
</span><br>
<span class="quotelev3">&gt; &gt;&gt; phases)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; and then I wanted to run 36 node test using something like:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   ./client/mtt --scratch /home/pjesa/mtt/scratch \
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    --file /home/pjesa/mtt/collective-bakeoff/samples/ompi-core-perf-
</span><br>
<span class="quotelev3">&gt; &gt;&gt; testing_openmpi.ini \
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    --verbose --print-time --section 'run;skampi'
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The test runs but I receive no output/report.  Is there some
</span><br>
<span class="quotelev3">&gt; &gt;&gt; additional
</span><br>
<span class="quotelev3">&gt; &gt;&gt; flag to specify that I want to the output/report at the end?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Here is the stdout of the test:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --------
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ** MTT: ./client/mtt --scratch /home/pjesa/mtt/scratch --file
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    /home/pjesa/mtt/collective-bakeoff/samples/ompi-core-perf-
</span><br>
<span class="quotelev3">&gt; &gt;&gt; testing_openmpi
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    .ini --verbose --print-time --section run;skampi
</span><br>
<span class="quotelev3">&gt; &gt;&gt; *** Reporter initializing
</span><br>
<span class="quotelev3">&gt; &gt;&gt; *** Reporter initialized
</span><br>
<span class="quotelev3">&gt; &gt;&gt; *** MPI get phase starting
</span><br>
<span class="quotelev3">&gt; &gt;&gt; *** MPI get phase complete
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Phase: MPI Get
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     Started:       Thu Sep 20 11:41:42 2007
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     Stopped:       Thu Sep 20 11:41:42 2007
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     Elapsed:       00:00:00
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     Total elapsed: 00:00:00
</span><br>
<span class="quotelev3">&gt; &gt;&gt; *** MPI install phase starting
</span><br>
<span class="quotelev3">&gt; &gt;&gt; *** MPI install phase complete
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Phase: MPI Install
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     Started:       Thu Sep 20 11:41:42 2007
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     Stopped:       Thu Sep 20 11:41:42 2007
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     Elapsed:       00:00:00
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     Total elapsed: 00:00:00
</span><br>
<span class="quotelev3">&gt; &gt;&gt; *** Test get phase starting
</span><br>
<span class="quotelev3">&gt; &gt;&gt; *** Test get phase complete
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Phase: Test Get
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     Started:       Thu Sep 20 11:41:42 2007
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     Stopped:       Thu Sep 20 11:41:42 2007
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     Elapsed:       00:00:00
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     Total elapsed: 00:00:00
</span><br>
<span class="quotelev3">&gt; &gt;&gt; *** Test build phase starting
</span><br>
<span class="quotelev3">&gt; &gt;&gt; *** Test build phase complete
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Phase: Test Build
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     Started:       Thu Sep 20 11:41:42 2007
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     Stopped:       Thu Sep 20 11:41:42 2007
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     Elapsed:       00:00:00
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     Total elapsed: 00:00:00
</span><br>
<span class="quotelev3">&gt; &gt;&gt; *** Run test phase starting
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Test run [skampi]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Running with [ompi-nightly-v1.2] / [1.2.4rc1r16161] /
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    [ompi/gnu-standard]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     Using MPI Details [ompi] with MPI Install [ompi/gnu-standard]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     Total of 1 tests to run in this section
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     Test: skampi, np=36, variant=1: Passed
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ....
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     Test: skampi, np=36, variant=70: Passed
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     ### Test progress: 1 of 1 section tests complete (100%)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; *** Run test phase complete
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Phase: Test Run
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     Started:       Thu Sep 20 11:41:42 2007
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     Stopped:       Thu Sep 20 12:13:06 2007
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     Elapsed:       00:31:24
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     Total elapsed: 00:31:24
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Phase: Trim
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     Started:       Thu Sep 20 12:13:06 2007
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     Stopped:       Thu Sep 20 12:13:06 2007
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     Elapsed:       00:00:00
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     Total elapsed: 00:31:24
</span><br>
<span class="quotelev3">&gt; &gt;&gt; *** Reporter finalizing
</span><br>
<span class="quotelev3">&gt; &gt;&gt; *** Reporter finalized
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --------
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Tue, 18 Sep 2007, Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; On Sep 18, 2007, at 6:36 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Doh -- looks like a corner case that I missed (if you use a
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; hostfile,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; it should automatically set the resource manager to &quot;none&quot;, I would
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; think).  Did you set a value for &quot;resource_manager&quot; in the INI file?
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; If so, take it out or just set it to none.  I'll file a bug to fix
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; this tomorrow (i.e., if you don't set it at all and are using a
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; hostlist/hostfile, the Right Thing happens).
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Oops!  I missed your statement:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; I think I should set resource manager to none - but I am not sure
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; where.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; You can set &quot;resource_manager = none&quot; in the MPI Details section.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; But MTT should be doing this for you automatically; I'll fix it
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; tomorrow.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Jelena Pjesivac-Grbovic, Pjesa
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Graduate Research Assistant
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Innovative Computing Laboratory
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Computer Science Department, UTK
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Claxton Complex 350
</span><br>
<span class="quotelev3">&gt; &gt;&gt; (865) 974 - 6722
</span><br>
<span class="quotelev3">&gt; &gt;&gt; (865) 974 - 6321
</span><br>
<span class="quotelev3">&gt; &gt;&gt; jpjesiva_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &quot;The only difference between a problem and a solution is that
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   people understand the solution.&quot;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                                        -- Charles Kettering
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -- 
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; mtt-users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jelena Pjesivac-Grbovic, Pjesa
</span><br>
<span class="quotelev1">&gt; Graduate Research Assistant
</span><br>
<span class="quotelev1">&gt; Innovative Computing Laboratory
</span><br>
<span class="quotelev1">&gt; Computer Science Department, UTK
</span><br>
<span class="quotelev1">&gt; Claxton Complex 350
</span><br>
<span class="quotelev1">&gt; (865) 974 - 6722 
</span><br>
<span class="quotelev1">&gt; (865) 974 - 6321
</span><br>
<span class="quotelev1">&gt; jpjesiva_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;The only difference between a problem and a solution is that
</span><br>
<span class="quotelev1">&gt;   people understand the solution.&quot;
</span><br>
<span class="quotelev1">&gt;                                        -- Charles Kettering
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0422.php">Mohamad Chaarawi: "[MTT users] MVAPICH2 configuring problems"</a>
<li><strong>Previous message:</strong> <a href="0420.php">Jelena Pjesivac-Grbovic: "Re: [MTT users] [devel-core] MTT collective bakeoff: now open for business"</a>
<li><strong>In reply to:</strong> <a href="0420.php">Jelena Pjesivac-Grbovic: "Re: [MTT users] [devel-core] MTT collective bakeoff: now open for business"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0433.php">Jelena Pjesivac-Grbovic: "[MTT users] Problems running MTT with already installed MPICH-MX"</a>
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
