<?
$subject_val = "Re: [MTT devel] MTToGDS";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  4 13:56:22 2010" -->
<!-- isoreceived="20100204185622" -->
<!-- sent="Thu, 4 Feb 2010 13:56:16 -0500" -->
<!-- isosent="20100204185616" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT devel] MTToGDS" -->
<!-- id="8CDB04AE-8FE4-42B3-848F-EE2CC79B3142_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="b20b52800909291221q3967701ai30bc784b288d8e8d_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [MTT devel] MTToGDS<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-04 13:56:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0463.php">Igor Ivanov: "[MTT devel] [Fwd: Re:  MTToGDS]"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2010/01/0461.php">Jeff Squyres: "Re: [MTT devel] mtt not working on sles 11up2 perl 5.10.0"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2009/09/0442.php">Mike Dubman: "[MTT devel] MTToGDS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0464.php">Jeff Squyres: "Re: [MTT devel] MTToGDS"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Somehow I *TOTALLY* missed this email from late September.  YOW!  :-(
<br>
<p>I am therefore just now trying to get up to speed.
<br>
<p>Many thanks, Mike!  This stuff looks awesome, and I'm excited to start using it.
<br>
<p>I have a few questions...
<br>
<p>1. It looks like we have a separate username/password login system for the appspot to submit MTT results.  Is there a reason we're not using regular google accounts for authentication?  I thought that was part of the strength of appspot -- users just got regular google account, and we could add them to a whitelist in our appspot app.  That way, Google handles all the account maintenance stuff for us (username, email address, password, ...etc.).  And all we do is ship off a &quot;is this username/password combo valid?&quot; kind of query to Google during login/authentication (or use their cookie-based authentication scheme thingy so that our app never even sees the password, which is better).
<br>
<p>2. I think that I have been submitting some mpi install and test build results to the DB.  How do I see these results in the db?
<br>
<p>3. It looks like the ClusterInfo.pm stuff makes a bunch of assumptions about the target node (like how to launch on the target node via ssh, what commands and devices are available over there, etc.).  Can we generalize that a bit?
<br>
<p>4. The name of the Reporter module is MTTGDS.pm -- can we rename to GDS.pm?  (the &quot;MTT&quot; is redundant, IMHO)
<br>
<p>5. It looks like MTTGDS.pm caches all of its results to submit during Finalize.  Is there a reason for not submitting during the MTT run?
<br>
<p>6. I'm trying some simple runs right now with an &quot;already installed&quot; MTT kind of setup.  I've successfully gotten through mpi get, mpi install, and test get, but when I run the test build phase (which builds the &quot;trivial&quot; section ok), I get the following during MTTGDS finalize:
<br>
<p>*** ERROR: Module aborted: MTT::Reporter::MTTGDS:Finalize: Runtime Error at
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/home/jsquyres/svn/mtt/lib/MTT/Reporter/MTTGDS.pm line 772, &lt;HANDLE&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;line 80.
<br>
<p>Any idea how that can happen / how to fix it?
<br>
<p><p><p><p><p><p>On Sep 29, 2009, at 3:21 PM, Mike Dubman wrote:
<br>
<p><span class="quotelev1">&gt; Hello guys and gals,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We have completed development and testing of Google DataStore support in MTT and are glad to submit it for community tests.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; New Files:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ========
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The following new files were added to support GDS inside MTT:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. client/bquery.pl
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Perl-based GDS client, provides basic DB querying/fetching capabilities. It creates resultset (files in YAML format) from user-provided sql-like query
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. client/breport.pl
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Perl-based report tool, creates excel reports from yaml files, generated by bquery.pl tool.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 3. client/custom_launchers/
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    For brave only: custom launchers for non-standard HPC, mpi-based applications
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 4. lib/MTT/Reporter/MTTGDS.pm
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    GDS Reporter, saves mtt results to GDS (see samples/gds-demo.ini for configuration examples)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 5. lib/MTT/Utils/ClusterInfo.pm
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Helper library to gather node hw/sw configuration information which is saved in GDS together with tests results.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 6. New TestResults analyzers for HPC applications:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    lib/MTT/test/Analyze/Performance/Fluent.pm
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    lib/MTT/test/Analyze/Performance/HPCC.pm
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    lib/MTT/test/Analyze/Performance/HPLGDS.pm
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    lib/MTT/test/Analyze/Performance/OpenFoam.pm
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    lib/MTT/test/Analyze/Performance/PamCrash.pm
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 7. samples/gds-demo.ini
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Example of howto configure GDS in MTT and run bquery/breport tools at the end of MTT session
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 8. server/gds/
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    GDS backend part, which is running at Google and providing Object to YAML, YAML to Object translation service as well as helper code for bquery.pl DB client.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 9. docs/gds/
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Various documentation 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Known Issues and Limitations:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ======================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * lib/MTT/Utils/ClusterInfo.pm uses &quot;sudo&quot; command to gather node`s hardware information.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * When using client/custom_launchers/ to run tests, it is impossible to kill the test application when timeout reached.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; How to start using MTToGDS:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ======================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * Contact Jeff to provide you with GDS login/password which is needed for querying/saving to DB (<a href="http://open-mpi-mtt.appspot.com">http://open-mpi-mtt.appspot.com</a>)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * See samples/gds-demo.ini for configuration examples as well as for DB querying and reports generation.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * Read Google GQL syntax documentation and use it with bquery.pl in order to query&amp;fetch objects from GDB.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * The following perl modules are required for all MTToGDS components:
</span><br>
<span class="quotelev1">&gt;  libYAML
</span><br>
<span class="quotelev1">&gt; YAML::Syck
</span><br>
<span class="quotelev1">&gt; YAML::XS
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; for breport:
</span><br>
<span class="quotelev1">&gt; GD::Graph
</span><br>
<span class="quotelev1">&gt; Spreadsheet::WriteExcel
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You can install it on linux systems with yum as following:
</span><br>
<span class="quotelev1">&gt; yum install perl-libyaml perl-YAML-Syck perl-YAML-XS perl-GD-Graph perl-Spreadsheet-WriteExcel
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Special Thanks to:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ==============
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Igor Ivanov, Andrew Senin, Alexander Alekhin from Argus-Cv.com for they contribution in developing and testing of this feature!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Mike
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-devel mailing list
</span><br>
<span class="quotelev1">&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0463.php">Igor Ivanov: "[MTT devel] [Fwd: Re:  MTToGDS]"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2010/01/0461.php">Jeff Squyres: "Re: [MTT devel] mtt not working on sles 11up2 perl 5.10.0"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2009/09/0442.php">Mike Dubman: "[MTT devel] MTToGDS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0464.php">Jeff Squyres: "Re: [MTT devel] MTToGDS"</a>
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
