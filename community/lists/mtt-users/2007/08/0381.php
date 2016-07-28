<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Aug 29 14:19:08 2007" -->
<!-- isoreceived="20070829181908" -->
<!-- sent="Wed, 29 Aug 2007 13:19:04 -0500" -->
<!-- isosent="20070829181904" -->
<!-- name="Mohamad Chaarawi" -->
<!-- email="mschaara_at_[hidden]" -->
<!-- subject="[MTT users] starting mtt" -->
<!-- id="46D5B898.2070001_at_cs.uh.edu" -->
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
<strong>From:</strong> Mohamad Chaarawi (<em>mschaara_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-29 14:19:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0382.php">Jeff Squyres: "Re: [MTT users] starting mtt"</a>
<li><strong>Previous message:</strong> <a href="0380.php">Josh Hursey: "Re: [MTT users] Database submit error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0382.php">Jeff Squyres: "Re: [MTT users] starting mtt"</a>
<li><strong>Reply:</strong> <a href="0382.php">Jeff Squyres: "Re: [MTT users] starting mtt"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Im trying to execute mtt on our cluster at uh..
<br>
This is the first time we do mtt here so bare with me here..
<br>
<p>I edited the ompi-core-template.ini file to test only the trunk and
<br>
added the username/password/platform.
<br>
I allocated 4 nodes and ran:
<br>
<p>client/mtt -d --force -f samples/ompi-core-template.ini --trial -s scratch
<br>
<p>OMPI configures and compiles fine, and then IBM tests start.
<br>
<p>After the IBM tests complete mtt just exits with an error.
<br>
I copied some of the output that i saw was not right at the end..
<br>
any help is appreciated.
<br>
<p>Thanks,
<br>
-Mohamad
<br>
<p>********************************************************************
<br>
Making dir:
<br>
&nbsp;&nbsp;&nbsp;/home/mschaara/mtt/trunk/scratch/test_runs/test_runs/ompi-nightly-trunk/
<br>
&nbsp;&nbsp;&nbsp;1.3a1r15990/gcc_warnings/ibm/ibm/final (cwd:
<br>
&nbsp;&nbsp;&nbsp;/home/mschaara/mtt/trunk/scratch/installs/iCPw/tests/ibm/ibm)
<br>
/home/mschaara/mtt/trunk/scratch/test_runs/test_runs/ompi-nightly-trunk/1.3
<br>
&nbsp;&nbsp;&nbsp;a1r15990/gcc_warnings/ibm/ibm/final does not exist -- creating
<br>
chdir
<br>
&nbsp;&nbsp;&nbsp;/home/mschaara/mtt/trunk/scratch/test_runs/test_runs/ompi-nightly-trunk/
<br>
&nbsp;&nbsp;&nbsp;1.3a1r15990/gcc_warnings/ibm/ibm/final/
<br>
chdir /home/mschaara/mtt/trunk/scratch/installs/iCPw/tests/ibm/ibm
<br>
&nbsp;&nbsp;&nbsp;### Test progress: 181 of 181 section tests complete (100%)
<br>
Evaluating: require MTT::Reporter::MTTDatabase
<br>
Evaluating: $ret = &amp;MTT::Reporter::MTTDatabase::Submit(@args)
<br>
MTTDatabase reporter
<br>
Got hostname: shark
<br>
Submitting to MTTDatabase...
<br>
Running command: gzip --force /tmp/3omP2I6lK7.inc
<br>
MTTDatabase trying proxy:  / Default (none)
<br>
MTTDatabase got response: MTTDatabase server notice:
<br>
&nbsp;&nbsp;&nbsp;mpi_install_section_name is not in mtt database.
<br>
&nbsp;&nbsp;&nbsp;MTTDatabase server notice: fields is not in mtt database.
<br>
&nbsp;&nbsp;&nbsp;MTTDatabase server notice: phase is not in mtt database.
<br>
&nbsp;&nbsp;&nbsp;MTTDatabase server notice: test_build_section_name is not in mtt
<br>
&nbsp;&nbsp;&nbsp;database.
<br>
&nbsp;&nbsp;&nbsp;MTTDatabase server notice: variant is not in mtt database.
<br>
&nbsp;&nbsp;&nbsp;MTTDatabase server notice: number_of_results is not in mtt database.
<br>
&nbsp;&nbsp;&nbsp;MTTDatabase server notice: command is not in mtt database.
<br>
<p>&nbsp;&nbsp;&nbsp;MTT submission for test run
<br>
&nbsp;&nbsp;&nbsp;MTTDatabase server notice: The submitting client did not submit valid
<br>
&nbsp;&nbsp;&nbsp;IDs for one or more of the following
<br>
&nbsp;&nbsp;&nbsp;'launcher', 'resource_manager', 'paramters' or 'network'
<br>
<p>some output.....
<br>
<p><p>Evaluating: require MTT::Test::Specify::Simple
<br>
&nbsp;&nbsp;&nbsp;Simple
<br>
*** ERROR: Module aborted during require: MTT::Test::Specify::Simple
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Simple: syntax error at (eval 12728) line 4, near &quot;require
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MTT::Test::Specify::Simple
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Simple
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&quot;
<br>
<p><pre>
-- 
Mohamad Chaarawi
Instructional Assistant		  <a href="http://www.cs.uh.edu/~mschaara">http://www.cs.uh.edu/~mschaara</a>
Department of Computer Science	  University of Houston
4800 Calhoun, PGH Room 526        Houston, TX 77204, USA
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0382.php">Jeff Squyres: "Re: [MTT users] starting mtt"</a>
<li><strong>Previous message:</strong> <a href="0380.php">Josh Hursey: "Re: [MTT users] Database submit error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0382.php">Jeff Squyres: "Re: [MTT users] starting mtt"</a>
<li><strong>Reply:</strong> <a href="0382.php">Jeff Squyres: "Re: [MTT users] starting mtt"</a>
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
