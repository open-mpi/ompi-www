<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Aug 29 15:30:26 2007" -->
<!-- isoreceived="20070829193026" -->
<!-- sent="Wed, 29 Aug 2007 15:29:59 -0400" -->
<!-- isosent="20070829192959" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] starting mtt" -->
<!-- id="07150386-04C8-4A55-BE8A-13EED20F851F_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="46D5B898.2070001_at_cs.uh.edu" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-29 15:29:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0383.php">Mohamad Chaarawi: "Re: [MTT users] starting mtt"</a>
<li><strong>Previous message:</strong> <a href="0381.php">Mohamad Chaarawi: "[MTT users] starting mtt"</a>
<li><strong>In reply to:</strong> <a href="0381.php">Mohamad Chaarawi: "[MTT users] starting mtt"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0383.php">Mohamad Chaarawi: "Re: [MTT users] starting mtt"</a>
<li><strong>Reply:</strong> <a href="0383.php">Mohamad Chaarawi: "Re: [MTT users] starting mtt"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 29, 2007, at 2:19 PM, Mohamad Chaarawi wrote:
<br>
<p><span class="quotelev1">&gt; Im trying to execute mtt on our cluster at uh..
</span><br>
<span class="quotelev1">&gt; This is the first time we do mtt here so bare with me here..
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I edited the ompi-core-template.ini file to test only the trunk and
</span><br>
<span class="quotelev1">&gt; added the username/password/platform.
</span><br>
<span class="quotelev1">&gt; I allocated 4 nodes and ran:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; client/mtt -d --force -f samples/ompi-core-template.ini --trial -s  
</span><br>
<span class="quotelev1">&gt; scratch
</span><br>
<p>Can you send your edited ini file?
<br>
<p><span class="quotelev1">&gt; OMPI configures and compiles fine, and then IBM tests start.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; After the IBM tests complete mtt just exits with an error.
</span><br>
<span class="quotelev1">&gt; I copied some of the output that i saw was not right at the end..
</span><br>
<span class="quotelev1">&gt; any help is appreciated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; -Mohamad
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ********************************************************************
</span><br>
<span class="quotelev1">&gt; Making dir:
</span><br>
<span class="quotelev1">&gt;    /home/mschaara/mtt/trunk/scratch/test_runs/test_runs/ompi- 
</span><br>
<span class="quotelev1">&gt; nightly-trunk/
</span><br>
<span class="quotelev1">&gt;    1.3a1r15990/gcc_warnings/ibm/ibm/final (cwd:
</span><br>
<span class="quotelev1">&gt;    /home/mschaara/mtt/trunk/scratch/installs/iCPw/tests/ibm/ibm)
</span><br>
<span class="quotelev1">&gt; /home/mschaara/mtt/trunk/scratch/test_runs/test_runs/ompi-nightly- 
</span><br>
<span class="quotelev1">&gt; trunk/1.3
</span><br>
<span class="quotelev1">&gt;    a1r15990/gcc_warnings/ibm/ibm/final does not exist -- creating
</span><br>
<span class="quotelev1">&gt; chdir
</span><br>
<span class="quotelev1">&gt;    /home/mschaara/mtt/trunk/scratch/test_runs/test_runs/ompi- 
</span><br>
<span class="quotelev1">&gt; nightly-trunk/
</span><br>
<span class="quotelev1">&gt;    1.3a1r15990/gcc_warnings/ibm/ibm/final/
</span><br>
<span class="quotelev1">&gt; chdir /home/mschaara/mtt/trunk/scratch/installs/iCPw/tests/ibm/ibm
</span><br>
<span class="quotelev1">&gt;    ### Test progress: 181 of 181 section tests complete (100%)
</span><br>
<span class="quotelev1">&gt; Evaluating: require MTT::Reporter::MTTDatabase
</span><br>
<span class="quotelev1">&gt; Evaluating: $ret = &amp;MTT::Reporter::MTTDatabase::Submit(@args)
</span><br>
<span class="quotelev1">&gt; MTTDatabase reporter
</span><br>
<span class="quotelev1">&gt; Got hostname: shark
</span><br>
<span class="quotelev1">&gt; Submitting to MTTDatabase...
</span><br>
<span class="quotelev1">&gt; Running command: gzip --force /tmp/3omP2I6lK7.inc
</span><br>
<span class="quotelev1">&gt; MTTDatabase trying proxy:  / Default (none)
</span><br>
<span class="quotelev1">&gt; MTTDatabase got response: MTTDatabase server notice:
</span><br>
<span class="quotelev1">&gt;    mpi_install_section_name is not in mtt database.
</span><br>
<span class="quotelev1">&gt;    MTTDatabase server notice: fields is not in mtt database.
</span><br>
<span class="quotelev1">&gt;    MTTDatabase server notice: phase is not in mtt database.
</span><br>
<span class="quotelev1">&gt;    MTTDatabase server notice: test_build_section_name is not in mtt
</span><br>
<span class="quotelev1">&gt;    database.
</span><br>
<span class="quotelev1">&gt;    MTTDatabase server notice: variant is not in mtt database.
</span><br>
<span class="quotelev1">&gt;    MTTDatabase server notice: number_of_results is not in mtt  
</span><br>
<span class="quotelev1">&gt; database.
</span><br>
<span class="quotelev1">&gt;    MTTDatabase server notice: command is not in mtt database.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    MTT submission for test run
</span><br>
<span class="quotelev1">&gt;    MTTDatabase server notice: The submitting client did not submit  
</span><br>
<span class="quotelev1">&gt; valid
</span><br>
<span class="quotelev1">&gt;    IDs for one or more of the following
</span><br>
<span class="quotelev1">&gt;    'launcher', 'resource_manager', 'paramters' or 'network'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; some output.....
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Evaluating: require MTT::Test::Specify::Simple
</span><br>
<span class="quotelev1">&gt;    Simple
</span><br>
<span class="quotelev1">&gt; *** ERROR: Module aborted during require: MTT::Test::Specify::Simple
</span><br>
<span class="quotelev1">&gt;     Simple: syntax error at (eval 12728) line 4, near &quot;require
</span><br>
<span class="quotelev1">&gt;     MTT::Test::Specify::Simple
</span><br>
<span class="quotelev1">&gt;     Simple
</span><br>
<span class="quotelev1">&gt;     &quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Mohamad Chaarawi
</span><br>
<span class="quotelev1">&gt; Instructional Assistant		  <a href="http://www.cs.uh.edu/~mschaara">http://www.cs.uh.edu/~mschaara</a>
</span><br>
<span class="quotelev1">&gt; Department of Computer Science	  University of Houston
</span><br>
<span class="quotelev1">&gt; 4800 Calhoun, PGH Room 526        Houston, TX 77204, USA
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0383.php">Mohamad Chaarawi: "Re: [MTT users] starting mtt"</a>
<li><strong>Previous message:</strong> <a href="0381.php">Mohamad Chaarawi: "[MTT users] starting mtt"</a>
<li><strong>In reply to:</strong> <a href="0381.php">Mohamad Chaarawi: "[MTT users] starting mtt"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0383.php">Mohamad Chaarawi: "Re: [MTT users] starting mtt"</a>
<li><strong>Reply:</strong> <a href="0383.php">Mohamad Chaarawi: "Re: [MTT users] starting mtt"</a>
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
