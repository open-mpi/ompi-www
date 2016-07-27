<?
$subject_val = "[MTT devel] MTToGDS";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 29 15:21:37 2009" -->
<!-- isoreceived="20090929192137" -->
<!-- sent="Tue, 29 Sep 2009 21:21:30 +0200" -->
<!-- isosent="20090929192130" -->
<!-- name="Mike Dubman" -->
<!-- email="mike.ompi_at_[hidden]" -->
<!-- subject="[MTT devel] MTToGDS" -->
<!-- id="b20b52800909291221q3967701ai30bc784b288d8e8d_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [MTT devel] MTToGDS<br>
<strong>From:</strong> Mike Dubman (<em>mike.ompi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-29 15:21:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0443.php">Ethan Mallove: "Re: [MTT devel] MTToGDS"</a>
<li><strong>Previous message:</strong> <a href="0441.php">Ethan Mallove: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1320"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0443.php">Ethan Mallove: "Re: [MTT devel] MTToGDS"</a>
<li><strong>Reply:</strong> <a href="0443.php">Ethan Mallove: "Re: [MTT devel] MTToGDS"</a>
<li><strong>Reply:</strong> <a href="0445.php">Jeff Squyres: "Re: [MTT devel] MTToGDS"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2010/02/0462.php">Jeff Squyres: "Re: [MTT devel] MTToGDS"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2010/02/0464.php">Jeff Squyres: "Re: [MTT devel] MTToGDS"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2010/02/0469.php">Jeff Squyres: "Re: [MTT devel] MTToGDS"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2010/03/0505.php">Jeff Squyres (jsquyres): "Re: [MTT devel] MTToGDS"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2010/03/0506.php">Jeff Squyres (jsquyres): "Re: [MTT devel] MTToGDS"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello guys and gals,
<br>
<p>We have completed development and testing of Google DataStore support in MTT
<br>
and are glad to submit it for community tests.
<br>
<p><p>New Files:
<br>
<p>========
<br>
<p>The following new files were added to support GDS inside MTT:
<br>
<p>1. client/bquery.pl
<br>
<p>&nbsp;&nbsp;&nbsp;Perl-based GDS client, provides basic DB querying/fetching capabilities.
<br>
It creates resultset (files in YAML format) from user-provided sql-like
<br>
query
<br>
<p>2. client/breport.pl
<br>
<p>&nbsp;&nbsp;&nbsp;Perl-based report tool, creates excel reports from yaml files, generated
<br>
by bquery.pl tool.
<br>
<p>3. client/custom_launchers/
<br>
<p>&nbsp;&nbsp;&nbsp;For brave only: custom launchers for non-standard HPC, mpi-based
<br>
applications
<br>
<p>4. lib/MTT/Reporter/MTTGDS.pm
<br>
<p>&nbsp;&nbsp;&nbsp;GDS Reporter, saves mtt results to GDS (see samples/gds-demo.ini for
<br>
configuration examples)
<br>
<p>5. lib/MTT/Utils/ClusterInfo.pm
<br>
<p>&nbsp;&nbsp;&nbsp;Helper library to gather node hw/sw configuration information which is
<br>
saved in GDS together with tests results.
<br>
<p>6. New TestResults analyzers for HPC applications:
<br>
<p>&nbsp;&nbsp;&nbsp;lib/MTT/test/Analyze/Performance/Fluent.pm
<br>
<p>&nbsp;&nbsp;&nbsp;lib/MTT/test/Analyze/Performance/HPCC.pm
<br>
<p>&nbsp;&nbsp;&nbsp;lib/MTT/test/Analyze/Performance/HPLGDS.pm
<br>
<p>&nbsp;&nbsp;&nbsp;lib/MTT/test/Analyze/Performance/OpenFoam.pm
<br>
<p>&nbsp;&nbsp;&nbsp;lib/MTT/test/Analyze/Performance/PamCrash.pm
<br>
<p>7. samples/gds-demo.ini
<br>
<p>&nbsp;&nbsp;&nbsp;Example of howto configure GDS in MTT and run bquery/breport tools at the
<br>
end of MTT session
<br>
<p>8. server/gds/
<br>
<p>&nbsp;&nbsp;&nbsp;GDS backend part, which is running at Google and providing Object to
<br>
YAML, YAML to Object translation service as well as helper code for
<br>
bquery.pl DB client.
<br>
<p>9. docs/gds/
<br>
<p>&nbsp;&nbsp;&nbsp;Various documentation
<br>
<p><p>Known Issues and Limitations:
<br>
<p>======================
<br>
<p>* lib/MTT/Utils/ClusterInfo.pm uses &quot;sudo&quot; command to gather node`s hardware
<br>
information.
<br>
<p>* When using client/custom_launchers/ to run tests, it is impossible to kill
<br>
the test application when timeout reached.
<br>
<p><p>How to start using MTToGDS:
<br>
<p>======================
<br>
<p>* Contact Jeff to provide you with GDS login/password which is needed for
<br>
querying/saving to DB
<br>
(*<a href="http://open-mpi-mtt.appspot.com*<http://open-mpi-mtt.appspot.com/">http://open-mpi-mtt.appspot.com*<http://open-mpi-mtt.appspot.com/</a>&gt;
<br>
)
<br>
<p>* See samples/gds-demo.ini for configuration examples as well as for DB
<br>
querying and reports generation.
<br>
<p>* Read Google GQL syntax documentation and use it with bquery.pl in order to
<br>
query&amp;fetch objects from GDB.
<br>
* The following perl modules are required for all MTToGDS components:
<br>
&nbsp;libYAML
<br>
YAML::Syck
<br>
YAML::XS
<br>
<p>for breport:
<br>
GD::Graph
<br>
Spreadsheet::WriteExcel
<br>
<p>You can install it on linux systems with yum as following:
<br>
yum install perl-libyaml perl-YAML-Syck perl-YAML-XS perl-GD-Graph
<br>
perl-Spreadsheet-WriteExcel
<br>
<p>Special Thanks to:
<br>
<p>==============
<br>
<p>Igor Ivanov, Andrew Senin, Alexander Alekhin from Argus-Cv.com for they
<br>
contribution in developing and testing of this feature!
<br>
<p>Regards
<br>
<p>Mike
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/mtt-devel/att-0442/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0443.php">Ethan Mallove: "Re: [MTT devel] MTToGDS"</a>
<li><strong>Previous message:</strong> <a href="0441.php">Ethan Mallove: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1320"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0443.php">Ethan Mallove: "Re: [MTT devel] MTToGDS"</a>
<li><strong>Reply:</strong> <a href="0443.php">Ethan Mallove: "Re: [MTT devel] MTToGDS"</a>
<li><strong>Reply:</strong> <a href="0445.php">Jeff Squyres: "Re: [MTT devel] MTToGDS"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2010/02/0462.php">Jeff Squyres: "Re: [MTT devel] MTToGDS"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2010/02/0464.php">Jeff Squyres: "Re: [MTT devel] MTToGDS"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2010/02/0469.php">Jeff Squyres: "Re: [MTT devel] MTToGDS"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2010/03/0505.php">Jeff Squyres (jsquyres): "Re: [MTT devel] MTToGDS"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2010/03/0506.php">Jeff Squyres (jsquyres): "Re: [MTT devel] MTToGDS"</a>
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
