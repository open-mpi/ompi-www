<?
$subject_val = "Re: [MTT devel] Best way to run ftb_database_server and ftb_agent";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  5 11:32:48 2010" -->
<!-- isoreceived="20101105153248" -->
<!-- sent="Fri, 5 Nov 2010 11:32:41 -0400" -->
<!-- isosent="20101105153241" -->
<!-- name="Joshua Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [MTT devel] Best way to run ftb_database_server and ftb_agent" -->
<!-- id="57CCCD91-7C3C-4EFD-96C1-D630E95E88E0_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4CD4107A.6000704_at_osl.iu.edu" -->
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
<strong>Date:</strong> 2010-11-05 11:32:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0527.php">DongInn Kim: "Re: [MTT devel] Best way to run ftb_database_server and ftb_agent"</a>
<li><strong>Previous message:</strong> <a href="0525.php">Abhishek Kulkarni: "Re: [MTT devel] Best way to run ftb_database_server and ftb_agent"</a>
<li><strong>In reply to:</strong> <a href="0524.php">DongInn Kim: "Re: [MTT devel] Best way to run ftb_database_server and ftb_agent"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0527.php">DongInn Kim: "Re: [MTT devel] Best way to run ftb_database_server and ftb_agent"</a>
<li><strong>Reply:</strong> <a href="0527.php">DongInn Kim: "Re: [MTT devel] Best way to run ftb_database_server and ftb_agent"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 5, 2010, at 10:11 AM, DongInn Kim wrote:
<br>
<p><span class="quotelev1">&gt; Josh, I have another question.
</span><br>
<span class="quotelev1">&gt; How can mtt find the script to run?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; exec = ./run-cr-correctness.pl -test ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I can write a similar script like run-correctness.pl but if I put my script(e.g., run-ftb-tests.pl) to ftb-tests/iu/ftt/ftb/, how can I make mtt recognize this path and file?
</span><br>
<p>The file is in the ompi-tests repo, under:
<br>
&nbsp;&nbsp;&nbsp;ompi-tests/iu/ft/correctness/run-correctness.pl
<br>
<p>Remember that the Test Run phase will 'cd' into the base directory of the test suite that you specify in the Test Get/Build phase. So you can reference a relative path with respect to the test suite. So just put the script in with the test suite, and the Test Get phase will grab it for you.
<br>
<p>-- Josh
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 11/5/10 9:01 AM, DongInn Kim wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi Josh,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Do you need to restart the FTB daemons before every test, or just start them once before running an entire test suite?
</span><br>
<span class="quotelev2">&gt;&gt; I believe that the daemon needs to run once before running an entire test set. Abhishek, can you confirm?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I would follow your suggestion(i.e., add the script to run the daemons to the &quot;Test Run&quot; phase) and I will let you know how it goes. Thanks.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; BTW, can I take a look at the script &quot;run-cr-correctness.pl&quot;? It seems that it is not under the mtt repository.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 11/5/10 8:40 AM, Joshua Hursey wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; DongInn,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Do you need to restart the FTB daemons before every test, or just start them once before running an entire test suite?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Adding another phase is pretty involved (will likely require changes to every piece of MTT - client, database, reporter), so I would suggest doing something like this in 'Test Run'. Something like a pre-exec hook.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; As an alternative you could write a script that would encapsulate:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - Launch FTB Daemons
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - Run a specific test
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - Shutdown FTB Daemons
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This would occur for each test in the 'Test Run' phase. This is similar to what I did for the C/R support. So in the 'MPI Details' section I have something like:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ============================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [MPI Details: OMPI]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; exec = ./run-cr-correctness.pl -test &amp;test_executable() \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       -storage-dir /storage/tmp/snapshot/ \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       -np &amp;test_np() \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       -mca &quot;@fixes@ -am ft-enable-cr @pml@&quot; \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       --prefix &amp;test_prefix() -v 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fixes = -mca orte_base_help_aggregate 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ============================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Then for each of the Test Runs the '&amp;test_executable()' funclet is filled in with the test name, and the perl script handles the rest of the launch from there.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If it is helpful, the C/R 'Test Get/Build/Run' phases are in ompi-tests/iu/mtt/etc/mtt2/ftcr.ini.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; And the 'MPI Details' is under &quot;OMPI DETAILS COMMON FTCR TEST&quot; in ompi-tests/iu/mtt/odin/etc/general/generic-subs2.config
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Let me know if that helps.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- Josh
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Nov 5, 2010, at 2:06 AM, DongInn Kim wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Is there any way to put some lines to the mtt ini file to run the FTB daemons(ftb_database_server and ftb_agent)?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Should we make another &quot;FTB Run&quot; phase after &quot;FTB Install&quot; or run the two daemons inside &quot;Test run&quot; but run the daemons before running the test scripts?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I think either way would be fine if I have a working syntax for the both cases.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Any help would be really appreciated.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - DongInn
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mtt-devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Joshua Hursey
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Postdoctoral Research Associate
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Oak Ridge National Laboratory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mtt-devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<li><strong>Next message:</strong> <a href="0527.php">DongInn Kim: "Re: [MTT devel] Best way to run ftb_database_server and ftb_agent"</a>
<li><strong>Previous message:</strong> <a href="0525.php">Abhishek Kulkarni: "Re: [MTT devel] Best way to run ftb_database_server and ftb_agent"</a>
<li><strong>In reply to:</strong> <a href="0524.php">DongInn Kim: "Re: [MTT devel] Best way to run ftb_database_server and ftb_agent"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0527.php">DongInn Kim: "Re: [MTT devel] Best way to run ftb_database_server and ftb_agent"</a>
<li><strong>Reply:</strong> <a href="0527.php">DongInn Kim: "Re: [MTT devel] Best way to run ftb_database_server and ftb_agent"</a>
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
