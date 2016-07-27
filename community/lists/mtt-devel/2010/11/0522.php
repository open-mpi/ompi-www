<?
$subject_val = "Re: [MTT devel] Best way to run ftb_database_server and ftb_agent";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  5 08:40:54 2010" -->
<!-- isoreceived="20101105124054" -->
<!-- sent="Fri, 5 Nov 2010 08:40:47 -0400" -->
<!-- isosent="20101105124047" -->
<!-- name="Joshua Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [MTT devel] Best way to run ftb_database_server and ftb_agent" -->
<!-- id="635C5D37-3852-4F50-B844-6E4EDA286330_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4CD39EEF.6080407_at_osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [MTT devel] Best way to run ftb_database_server and ftb_agent<br>
<strong>From:</strong> Joshua Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-05 08:40:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0523.php">DongInn Kim: "Re: [MTT devel] Best way to run ftb_database_server and ftb_agent"</a>
<li><strong>Previous message:</strong> <a href="0521.php">DongInn Kim: "[MTT devel] Best way to run ftb_database_server and ftb_agent"</a>
<li><strong>In reply to:</strong> <a href="0521.php">DongInn Kim: "[MTT devel] Best way to run ftb_database_server and ftb_agent"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0523.php">DongInn Kim: "Re: [MTT devel] Best way to run ftb_database_server and ftb_agent"</a>
<li><strong>Reply:</strong> <a href="0523.php">DongInn Kim: "Re: [MTT devel] Best way to run ftb_database_server and ftb_agent"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
DongInn,
<br>
<p>Do you need to restart the FTB daemons before every test, or just start them once before running an entire test suite?
<br>
<p><p>Adding another phase is pretty involved (will likely require changes to every piece of MTT - client, database, reporter), so I would suggest doing something like this in 'Test Run'. Something like a pre-exec hook.
<br>
<p>As an alternative you could write a script that would encapsulate:
<br>
&nbsp;- Launch FTB Daemons
<br>
&nbsp;- Run a specific test
<br>
&nbsp;- Shutdown FTB Daemons
<br>
<p>This would occur for each test in the 'Test Run' phase. This is similar to what I did for the C/R support. So in the 'MPI Details' section I have something like:
<br>
============================
<br>
[MPI Details: OMPI]
<br>
exec = ./run-cr-correctness.pl -test &amp;test_executable() \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-storage-dir /storage/tmp/snapshot/ \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-np &amp;test_np() \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-mca &quot;@fixes@ -am ft-enable-cr @pml@&quot; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--prefix &amp;test_prefix() -v 2
<br>
<p>fixes = -mca orte_base_help_aggregate 0
<br>
============================
<br>
<p>Then for each of the Test Runs the '&amp;test_executable()' funclet is filled in with the test name, and the perl script handles the rest of the launch from there.
<br>
<p>If it is helpful, the C/R 'Test Get/Build/Run' phases are in ompi-tests/iu/mtt/etc/mtt2/ftcr.ini.
<br>
And the 'MPI Details' is under &quot;OMPI DETAILS COMMON FTCR TEST&quot; in ompi-tests/iu/mtt/odin/etc/general/generic-subs2.config
<br>
<p>Let me know if that helps.
<br>
<p>-- Josh
<br>
<p>On Nov 5, 2010, at 2:06 AM, DongInn Kim wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there any way to put some lines to the mtt ini file to run the FTB daemons(ftb_database_server and ftb_agent)?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Should we make another &quot;FTB Run&quot; phase after &quot;FTB Install&quot; or run the two daemons inside &quot;Test run&quot; but run the daemons before running the test scripts?
</span><br>
<span class="quotelev1">&gt; I think either way would be fine if I have a working syntax for the both cases.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any help would be really appreciated.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; - DongInn
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-devel mailing list
</span><br>
<span class="quotelev1">&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>------------------------------------
<br>
Joshua Hursey
<br>
Postdoctoral Research Associate
<br>
Oak Ridge National Laboratory
<br>
<a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0523.php">DongInn Kim: "Re: [MTT devel] Best way to run ftb_database_server and ftb_agent"</a>
<li><strong>Previous message:</strong> <a href="0521.php">DongInn Kim: "[MTT devel] Best way to run ftb_database_server and ftb_agent"</a>
<li><strong>In reply to:</strong> <a href="0521.php">DongInn Kim: "[MTT devel] Best way to run ftb_database_server and ftb_agent"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0523.php">DongInn Kim: "Re: [MTT devel] Best way to run ftb_database_server and ftb_agent"</a>
<li><strong>Reply:</strong> <a href="0523.php">DongInn Kim: "Re: [MTT devel] Best way to run ftb_database_server and ftb_agent"</a>
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
