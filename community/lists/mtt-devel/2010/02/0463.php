<?
$subject_val = "[MTT devel] [Fwd: Re:  MTToGDS]";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb  5 06:58:38 2010" -->
<!-- isoreceived="20100205115838" -->
<!-- sent="Fri, 05 Feb 2010 14:58:10 +0300" -->
<!-- isosent="20100205115810" -->
<!-- name="Igor Ivanov" -->
<!-- email="igor.ivanov_at_[hidden]" -->
<!-- subject="[MTT devel] [Fwd: Re:  MTToGDS]" -->
<!-- id="4B6C07D2.3020507_at_argus-cv.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [MTT devel] [Fwd: Re:  MTToGDS]<br>
<strong>From:</strong> Igor Ivanov (<em>igor.ivanov_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-05 06:58:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0464.php">Jeff Squyres: "Re: [MTT devel] MTToGDS"</a>
<li><strong>Previous message:</strong> <a href="0462.php">Jeff Squyres: "Re: [MTT devel] MTToGDS"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
__________ Information from ESET NOD32 Antivirus, version of virus signature database 4837 (20100205) __________
<br>
<p>The message was checked by ESET NOD32 Antivirus.
<br>
<p><a href="http://www.esetnod32.ru">http://www.esetnod32.ru</a>
<br>
<p><p>
<br><p><strong>attached mail follows:</strong><hr>
<br><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<head>
  <meta content="text/html;charset=ISO-8859-1" http-equiv="Content-Type">
</head>
<body bgcolor="#ffffff" text="#000000">
<font size="-1"><font face="Arial">Hi Jeff,<br>
<br>
Thank you to start playing with one. I hope you find it is useful.<br>
I am trying to answer questions you raised. <br>
<br>
1. Yes, you are correct. The implementation uses google account
authorization way to access web page only. Client applications use
separate approach to communicate with datastore.<br>
It is difficult to say what way is better from my point of view. In
both ways we need to manage list of valid accounts to answer "is this
username/password combo valid?" (Google does not do this task instead
of us) and send username/password information from a client to
application. Visible preference could exist in case web usage that was
not main goal.<br>
<br>
2. Current implementation of datastore environment is oriented on
client usage way mostly and does not grant users rich web possibility.
Existing web form can be considered as instrument for an administrator
now.<br>
There is special command line utility that allows to communicate with
datastore as bquery.pl located at &lt;mtt root&gt;/src/client. It is
able to do query data from datastore and view different information on
console using extended (more close to sql) gql syntax that is
implemented for users comfort. More detail information can be got from
document as
<a class="moz-txt-link-freetext" href="http://svn.open-mpi.org/svn/mtt/trunk/docs/gds/VBench_bquery.doc">http://svn.open-mpi.org/svn/mtt/trunk/docs/gds/VBench_bquery.doc</a><br>
<br>
For example: <br>
to get information related mpi install following command line can be
used<br>
<br>
$ ./bquery.pl --username=&lt;username&gt; --password=&lt;password&gt;
--server=<a class="moz-txt-link-freetext" href="http://">http://</a>&lt;appid&gt;.appspot.com<br>
--view --gqls="select description, mpi_path from MpiInstallPhase where
duration=1" --format=txt<br>
<br>
description&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; mpi_path<br>
----------------------------------&nbsp;&nbsp; ----------------<br>
Voltaire already installed MPI+OMA&nbsp;&nbsp; /opt/openmpi/1.3<br>
...<br>
<br>
3. In case we can collect all needed information about cluster using
transparent way we should do it. ClusterInfo.pm is attempt to get info
in one place in clear manner.<br>
<br>
4. You are right it can be done.<br>
<br>
</font></font><font size="-1"><font face="Arial">5. Results are cached
to keep link information between "test build" -&gt;"mpi install"; "test
run"-&gt;</font></font><font size="-1"><font face="Arial">"test build"
-&gt;"mpi install"</font></font><font size="-1"><font face="Arial">
phases.<br>
<br>
6. Could you send detail info about the issue (ini-file, mtt.log with
verbose info and command line), we will look on that.<br>
</font></font><br>
<font size="-1"><font face="Arial"><br>
Regards,<br>
Igor<br>
<br>
</font></font><br>
Jeff Squyres wrote:
<blockquote cite="mid:8CDB04AE-8FE4-42B3-848F-EE2CC79B3142@cisco.com"
 type="cite">
  <pre wrap="">Somehow I *TOTALLY* missed this email from late September.  YOW!  :-(

I am therefore just now trying to get up to speed.

Many thanks, Mike!  This stuff looks awesome, and I'm excited to start using it.

I have a few questions...

1. It looks like we have a separate username/password login system for the appspot to submit MTT results.  Is there a reason we're not using regular google accounts for authentication?  I thought that was part of the strength of appspot -- users just got regular google account, and we could add them to a whitelist in our appspot app.  That way, Google handles all the account maintenance stuff for us (username, email address, password, ...etc.).  And all we do is ship off a "is this username/password combo valid?" kind of query to Google during login/authentication (or use their cookie-based authentication scheme thingy so that our app never even sees the password, which is better).

2. I think that I have been submitting some mpi install and test build results to the DB.  How do I see these results in the db?

3. It looks like the ClusterInfo.pm stuff makes a bunch of assumptions about the target node (like how to launch on the target node via ssh, what commands and devices are available over there, etc.).  Can we generalize that a bit?

4. The name of the Reporter module is MTTGDS.pm -- can we rename to GDS.pm?  (the "MTT" is redundant, IMHO)

5. It looks like MTTGDS.pm caches all of its results to submit during Finalize.  Is there a reason for not submitting during the MTT run?

6. I'm trying some simple runs right now with an "already installed" MTT kind of setup.  I've successfully gotten through mpi get, mpi install, and test get, but when I run the test build phase (which builds the "trivial" section ok), I get the following during MTTGDS finalize:

*** ERROR: Module aborted: MTT::Reporter::MTTGDS:Finalize: Runtime Error at
    /home/jsquyres/svn/mtt/lib/MTT/Reporter/MTTGDS.pm line 772, &lt;HANDLE&gt;
    line 80.

Any idea how that can happen / how to fix it?






On Sep 29, 2009, at 3:21 PM, Mike Dubman wrote:

  </pre>
  <blockquote type="cite">
    <pre wrap="">Hello guys and gals,

We have completed development and testing of Google DataStore support in MTT and are glad to submit it for community tests.



New Files:

========

The following new files were added to support GDS inside MTT:

1. client/bquery.pl

   Perl-based GDS client, provides basic DB querying/fetching capabilities. It creates resultset (files in YAML format) from user-provided sql-like query

2. client/breport.pl

   Perl-based report tool, creates excel reports from yaml files, generated by bquery.pl tool.

3. client/custom_launchers/

   For brave only: custom launchers for non-standard HPC, mpi-based applications

4. lib/MTT/Reporter/MTTGDS.pm

   GDS Reporter, saves mtt results to GDS (see samples/gds-demo.ini for configuration examples)

5. lib/MTT/Utils/ClusterInfo.pm

   Helper library to gather node hw/sw configuration information which is saved in GDS together with tests results.

6. New TestResults analyzers for HPC applications:

   lib/MTT/test/Analyze/Performance/Fluent.pm

   lib/MTT/test/Analyze/Performance/HPCC.pm

   lib/MTT/test/Analyze/Performance/HPLGDS.pm

   lib/MTT/test/Analyze/Performance/OpenFoam.pm

   lib/MTT/test/Analyze/Performance/PamCrash.pm

7. samples/gds-demo.ini

   Example of howto configure GDS in MTT and run bquery/breport tools at the end of MTT session

8. server/gds/

   GDS backend part, which is running at Google and providing Object to YAML, YAML to Object translation service as well as helper code for bquery.pl DB client.

9. docs/gds/

   Various documentation 



Known Issues and Limitations:

======================

* lib/MTT/Utils/ClusterInfo.pm uses "sudo" command to gather node`s hardware information.

* When using client/custom_launchers/ to run tests, it is impossible to kill the test application when timeout reached.



How to start using MTToGDS:

======================

* Contact Jeff to provide you with GDS login/password which is needed for querying/saving to DB (<a class="moz-txt-link-freetext" href="http://open-mpi-mtt.appspot.com">http://open-mpi-mtt.appspot.com</a>)

* See samples/gds-demo.ini for configuration examples as well as for DB querying and reports generation.

* Read Google GQL syntax documentation and use it with bquery.pl in order to query&amp;fetch objects from GDB.

* The following perl modules are required for all MTToGDS components:
 libYAML
YAML::Syck
YAML::XS

for breport:
GD::Graph
Spreadsheet::WriteExcel

You can install it on linux systems with yum as following:
yum install perl-libyaml perl-YAML-Syck perl-YAML-XS perl-GD-Graph perl-Spreadsheet-WriteExcel

Special Thanks to:

==============

Igor Ivanov, Andrew Senin, Alexander Alekhin from Argus-Cv.com for they contribution in developing and testing of this feature!

Regards

Mike

_______________________________________________
mtt-devel mailing list
<a class="moz-txt-link-abbreviated" href="mailto:mtt-devel@open-mpi.org">mtt-devel@open-mpi.org</a>
<a class="moz-txt-link-freetext" href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
    </pre>
  </blockquote>
  <pre wrap=""><!---->

  </pre>
</blockquote>
<BR>
<BR>
__________ Information from ESET NOD32 Antivirus, version of virus signature database 4837 (20100205) __________<BR>
<BR>
The message was checked by ESET NOD32 Antivirus.<BR>
<BR>
<A HREF="http://www.esetnod32.ru">http://www.esetnod32.ru</A><BR>


</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0464.php">Jeff Squyres: "Re: [MTT devel] MTToGDS"</a>
<li><strong>Previous message:</strong> <a href="0462.php">Jeff Squyres: "Re: [MTT devel] MTToGDS"</a>
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
