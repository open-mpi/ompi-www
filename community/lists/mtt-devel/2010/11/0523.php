<?
$subject_val = "Re: [MTT devel] Best way to run ftb_database_server and ftb_agent";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  5 09:01:30 2010" -->
<!-- isoreceived="20101105130130" -->
<!-- sent="Fri, 05 Nov 2010 09:01:25 -0400" -->
<!-- isosent="20101105130125" -->
<!-- name="DongInn Kim" -->
<!-- email="dikim_at_[hidden]" -->
<!-- subject="Re: [MTT devel] Best way to run ftb_database_server and ftb_agent" -->
<!-- id="4CD40025.60409_at_osl.iu.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="635C5D37-3852-4F50-B844-6E4EDA286330_at_open-mpi.org" -->
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
<strong>From:</strong> DongInn Kim (<em>dikim_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-05 09:01:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0524.php">DongInn Kim: "Re: [MTT devel] Best way to run ftb_database_server and ftb_agent"</a>
<li><strong>Previous message:</strong> <a href="0522.php">Joshua Hursey: "Re: [MTT devel] Best way to run ftb_database_server and ftb_agent"</a>
<li><strong>In reply to:</strong> <a href="0522.php">Joshua Hursey: "Re: [MTT devel] Best way to run ftb_database_server and ftb_agent"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0524.php">DongInn Kim: "Re: [MTT devel] Best way to run ftb_database_server and ftb_agent"</a>
<li><strong>Reply:</strong> <a href="0524.php">DongInn Kim: "Re: [MTT devel] Best way to run ftb_database_server and ftb_agent"</a>
<li><strong>Reply:</strong> <a href="0525.php">Abhishek Kulkarni: "Re: [MTT devel] Best way to run ftb_database_server and ftb_agent"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Josh,
<br>
<span class="quotelev1">&gt; Do you need to restart the FTB daemons before every test, or just start them once before running an entire test suite?
</span><br>
I believe that the daemon needs to run once before running an entire test set. Abhishek, can you confirm?
<br>
<p>I would follow your suggestion(i.e., add the script to run the daemons to the &quot;Test Run&quot; phase) and I will let you know how it goes. Thanks.
<br>
<p>BTW, can I take a look at the script &quot;run-cr-correctness.pl&quot;? It seems that it is not under the mtt repository.
<br>
<p>Regards,
<br>
<p>On 11/5/10 8:40 AM, Joshua Hursey wrote:
<br>
<span class="quotelev1">&gt; DongInn,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Do you need to restart the FTB daemons before every test, or just start them once before running an entire test suite?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Adding another phase is pretty involved (will likely require changes to every piece of MTT - client, database, reporter), so I would suggest doing something like this in 'Test Run'. Something like a pre-exec hook.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As an alternative you could write a script that would encapsulate:
</span><br>
<span class="quotelev1">&gt;  - Launch FTB Daemons
</span><br>
<span class="quotelev1">&gt;  - Run a specific test
</span><br>
<span class="quotelev1">&gt;  - Shutdown FTB Daemons
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This would occur for each test in the 'Test Run' phase. This is similar to what I did for the C/R support. So in the 'MPI Details' section I have something like:
</span><br>
<span class="quotelev1">&gt; ============================
</span><br>
<span class="quotelev1">&gt; [MPI Details: OMPI]
</span><br>
<span class="quotelev1">&gt; exec = ./run-cr-correctness.pl -test &amp;test_executable() \
</span><br>
<span class="quotelev1">&gt;        -storage-dir /storage/tmp/snapshot/ \
</span><br>
<span class="quotelev1">&gt;        -np &amp;test_np() \
</span><br>
<span class="quotelev1">&gt;        -mca &quot;@fixes@ -am ft-enable-cr @pml@&quot; \
</span><br>
<span class="quotelev1">&gt;        --prefix &amp;test_prefix() -v 2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; fixes = -mca orte_base_help_aggregate 0
</span><br>
<span class="quotelev1">&gt; ============================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Then for each of the Test Runs the '&amp;test_executable()' funclet is filled in with the test name, and the perl script handles the rest of the launch from there.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If it is helpful, the C/R 'Test Get/Build/Run' phases are in ompi-tests/iu/mtt/etc/mtt2/ftcr.ini.
</span><br>
<span class="quotelev1">&gt; And the 'MPI Details' is under &quot;OMPI DETAILS COMMON FTCR TEST&quot; in ompi-tests/iu/mtt/odin/etc/general/generic-subs2.config
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Let me know if that helps.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- Josh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Nov 5, 2010, at 2:06 AM, DongInn Kim wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is there any way to put some lines to the mtt ini file to run the FTB daemons(ftb_database_server and ftb_agent)?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Should we make another &quot;FTB Run&quot; phase after &quot;FTB Install&quot; or run the two daemons inside &quot;Test run&quot; but run the daemons before running the test scripts?
</span><br>
<span class="quotelev2">&gt;&gt; I think either way would be fine if I have a working syntax for the both cases.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any help would be really appreciated.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; - DongInn
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; mtt-devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------
</span><br>
<span class="quotelev1">&gt; Joshua Hursey
</span><br>
<span class="quotelev1">&gt; Postdoctoral Research Associate
</span><br>
<span class="quotelev1">&gt; Oak Ridge National Laboratory
</span><br>
<span class="quotelev1">&gt; <a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
</span><br>
<span class="quotelev1">&gt; 
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
<p><pre>
-- 
- DongInn
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0524.php">DongInn Kim: "Re: [MTT devel] Best way to run ftb_database_server and ftb_agent"</a>
<li><strong>Previous message:</strong> <a href="0522.php">Joshua Hursey: "Re: [MTT devel] Best way to run ftb_database_server and ftb_agent"</a>
<li><strong>In reply to:</strong> <a href="0522.php">Joshua Hursey: "Re: [MTT devel] Best way to run ftb_database_server and ftb_agent"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0524.php">DongInn Kim: "Re: [MTT devel] Best way to run ftb_database_server and ftb_agent"</a>
<li><strong>Reply:</strong> <a href="0524.php">DongInn Kim: "Re: [MTT devel] Best way to run ftb_database_server and ftb_agent"</a>
<li><strong>Reply:</strong> <a href="0525.php">Abhishek Kulkarni: "Re: [MTT devel] Best way to run ftb_database_server and ftb_agent"</a>
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
