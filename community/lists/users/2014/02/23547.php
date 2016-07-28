<?
$subject_val = "Re: [OMPI users] opal_os_dirpath_create: Error: Unable to create the, sub-directory";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  3 15:59:53 2014" -->
<!-- isoreceived="20140203205953" -->
<!-- sent="Mon, 3 Feb 2014 12:59:02 -0800" -->
<!-- isosent="20140203205902" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] opal_os_dirpath_create: Error: Unable to create the, sub-directory" -->
<!-- id="CC5C3622-CB0E-4DED-AA44-458453146B81_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="52EFFC93.2090309_at_giref.ulaval.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] opal_os_dirpath_create: Error: Unable to create the, sub-directory<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-03 15:59:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23548.php">Eric Chamberland: "Re: [OMPI users] opal_os_dirpath_create: Error: Unable to create the, sub-directory"</a>
<li><strong>Previous message:</strong> <a href="23546.php">Eric Chamberland: "Re: [OMPI users] opal_os_dirpath_create: Error: Unable to create the, sub-directory"</a>
<li><strong>In reply to:</strong> <a href="23546.php">Eric Chamberland: "Re: [OMPI users] opal_os_dirpath_create: Error: Unable to create the, sub-directory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23548.php">Eric Chamberland: "Re: [OMPI users] opal_os_dirpath_create: Error: Unable to create the, sub-directory"</a>
<li><strong>Reply:</strong> <a href="23548.php">Eric Chamberland: "Re: [OMPI users] opal_os_dirpath_create: Error: Unable to create the, sub-directory"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Very strange - even if you kill the job with SIGTERM, or have processes that segfault, OMPI should clean itself up and remove those session directories. Granted, the 1.6 series isn't as good about doing so as the 1.7 series, but it at least to-date has done pretty well.
<br>
<p>Best I can suggest for now is to do the following in your test script:
<br>
<p>(1) set TMPDIR=&lt;/tmp/regression&gt;
<br>
<p>(2) run your tests
<br>
<p>(3) rm -rf /tmp/regression/*
<br>
<p>That will ensure you only blow away the session dirs from your regression tests. Hopefully, you'll find the directory empty more often than not...
<br>
<p>HTH
<br>
Ralph
<br>
<p>On Feb 3, 2014, at 12:31 PM, Eric Chamberland &lt;Eric.Chamberland_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 02/03/2014 03:09 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; OMPI will error out in that case, as you originally reported. What seems to be happening is that you have a bunch of stale session directories, but I'm puzzled because the creation dates are so current - for whatever reason, OMPI seems to be getting the same jobid much more often than it should. Can you tell me something about the environment - e.g., is it managed or just using hostfile?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This computer is used about 11 times a day to launch about 1500 executions on our in-house (finite element) code.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We do launch at most 12 single process executions at the same time, but we use PETSc, which always initialize the MPI environment...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Also, we are launching some tests which use between 2 to 128 processes (on the same computer) just to ensure proper code testing.  In fact, performance is not quit an issue in these 128 processes tests and we set the following environment variable:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; export OMPI_MCA_mpi_yield_when_idle=1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; because we encountered timeout problems before...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The whole testing lasts about 1 hour and the result is used to give a feed-back for users who &quot;pushed&quot; modifications to the code....
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So I would add: sometime the tests may be interrupted by segfaults, &quot;kill -TERM&quot; or anything you can imagine...  The problem now is that it won't even start if a mere file exists...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I can flush those files right now, but I am almost sure they will reappear it the following days, leading to false &quot;bad results&quot; for the tests... and I will have to setup a cleanup procedure before launching all the tests... But that will not prevent the fact that those files may be created while running the firsts of the 1500 tests and have 1 or some of the rest to fail....
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I hope this is the information you wanted... Is it?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Eric
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 3, 2014, at 12:00 PM, Eric Chamberland &lt;Eric.Chamberland_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 02/03/2014 02:49 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Seems rather odd - is your /tmp by any chance network mounted?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; No it is a &quot;normal&quot; /tmp:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;cd /tmp; df -h .&quot; gives:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Filesystem      Size  Used Avail Use% Mounted on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /dev/sda1        49G   17G   30G  37% /
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; And there is plenty of disk space...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I agree it is odd, but how should OpenMPI react when trying to create a directory over an existing file name?  I mean what is it programmed to do?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Eric
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23548.php">Eric Chamberland: "Re: [OMPI users] opal_os_dirpath_create: Error: Unable to create the, sub-directory"</a>
<li><strong>Previous message:</strong> <a href="23546.php">Eric Chamberland: "Re: [OMPI users] opal_os_dirpath_create: Error: Unable to create the, sub-directory"</a>
<li><strong>In reply to:</strong> <a href="23546.php">Eric Chamberland: "Re: [OMPI users] opal_os_dirpath_create: Error: Unable to create the, sub-directory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23548.php">Eric Chamberland: "Re: [OMPI users] opal_os_dirpath_create: Error: Unable to create the, sub-directory"</a>
<li><strong>Reply:</strong> <a href="23548.php">Eric Chamberland: "Re: [OMPI users] opal_os_dirpath_create: Error: Unable to create the, sub-directory"</a>
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
