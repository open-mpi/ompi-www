<?
$subject_val = "Re: [MTT devel] Best way to run ftb_database_server and ftb_agent";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  5 10:50:28 2010" -->
<!-- isoreceived="20101105145028" -->
<!-- sent="Fri, 5 Nov 2010 10:50:23 -0400" -->
<!-- isosent="20101105145023" -->
<!-- name="Abhishek Kulkarni" -->
<!-- email="adkulkar_at_[hidden]" -->
<!-- subject="Re: [MTT devel] Best way to run ftb_database_server and ftb_agent" -->
<!-- id="AANLkTi=jZHp7+iBv-Tj35spz+ZycSbU0gBiNFS2ZTnRu_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4CD40025.60409_at_osl.iu.edu" -->
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
<strong>From:</strong> Abhishek Kulkarni (<em>adkulkar_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-05 10:50:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0526.php">Joshua Hursey: "Re: [MTT devel] Best way to run ftb_database_server and ftb_agent"</a>
<li><strong>Previous message:</strong> <a href="0524.php">DongInn Kim: "Re: [MTT devel] Best way to run ftb_database_server and ftb_agent"</a>
<li><strong>In reply to:</strong> <a href="0523.php">DongInn Kim: "Re: [MTT devel] Best way to run ftb_database_server and ftb_agent"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, Nov 5, 2010 at 9:01 AM, DongInn Kim &lt;dikim_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Josh,
</span><br>
<span class="quotelev2">&gt; &gt; Do you need to restart the FTB daemons before every test, or just start
</span><br>
<span class="quotelev1">&gt; them once before running an entire test suite?
</span><br>
<span class="quotelev1">&gt; I believe that the daemon needs to run once before running an entire test
</span><br>
<span class="quotelev1">&gt; set. Abhishek, can you confirm?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
I believe you would want to run the testsuite with a variable number of
<br>
nodes participating in the FTB. Ergo, it would be good to respawn the
<br>
daemons before every testsuite. Some tests might also involve killing a FTB
<br>
daemon (ftb_agent) while a test is being run to test the fault-tolerant
<br>
routing in the network.
<br>
<p>The ft/correctness examples in the ompi-tests/ are really a good way to
<br>
start. You'd also want a wrapper similar to run-cr-correctness.pl to maybe
<br>
check if the tests have passed successfully or not.
<br>
<p>Abhishek
<br>
<p><p><span class="quotelev1">&gt; I would follow your suggestion(i.e., add the script to run the daemons to
</span><br>
<span class="quotelev1">&gt; the &quot;Test Run&quot; phase) and I will let you know how it goes. Thanks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; BTW, can I take a look at the script &quot;run-cr-correctness.pl&quot;? It seems
</span><br>
<span class="quotelev1">&gt; that it is not under the mtt repository.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Regards,
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 11/5/10 8:40 AM, Joshua Hursey wrote:
</span><br>
<span class="quotelev2">&gt; &gt; DongInn,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Do you need to restart the FTB daemons before every test, or just start
</span><br>
<span class="quotelev1">&gt; them once before running an entire test suite?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Adding another phase is pretty involved (will likely require changes to
</span><br>
<span class="quotelev1">&gt; every piece of MTT - client, database, reporter), so I would suggest doing
</span><br>
<span class="quotelev1">&gt; something like this in 'Test Run'. Something like a pre-exec hook.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; As an alternative you could write a script that would encapsulate:
</span><br>
<span class="quotelev2">&gt; &gt;  - Launch FTB Daemons
</span><br>
<span class="quotelev2">&gt; &gt;  - Run a specific test
</span><br>
<span class="quotelev2">&gt; &gt;  - Shutdown FTB Daemons
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This would occur for each test in the 'Test Run' phase. This is similar
</span><br>
<span class="quotelev1">&gt; to what I did for the C/R support. So in the 'MPI Details' section I have
</span><br>
<span class="quotelev1">&gt; something like:
</span><br>
<span class="quotelev2">&gt; &gt; ============================
</span><br>
<span class="quotelev2">&gt; &gt; [MPI Details: OMPI]
</span><br>
<span class="quotelev2">&gt; &gt; exec = ./run-cr-correctness.pl -test &amp;test_executable() \
</span><br>
<span class="quotelev2">&gt; &gt;        -storage-dir /storage/tmp/snapshot/ \
</span><br>
<span class="quotelev2">&gt; &gt;        -np &amp;test_np() \
</span><br>
<span class="quotelev2">&gt; &gt;        -mca &quot;@fixes@ -am ft-enable-cr @pml@&quot; \
</span><br>
<span class="quotelev2">&gt; &gt;        --prefix &amp;test_prefix() -v 2
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; fixes = -mca orte_base_help_aggregate 0
</span><br>
<span class="quotelev2">&gt; &gt; ============================
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Then for each of the Test Runs the '&amp;test_executable()' funclet is filled
</span><br>
<span class="quotelev1">&gt; in with the test name, and the perl script handles the rest of the launch
</span><br>
<span class="quotelev1">&gt; from there.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; If it is helpful, the C/R 'Test Get/Build/Run' phases are in
</span><br>
<span class="quotelev1">&gt; ompi-tests/iu/mtt/etc/mtt2/ftcr.ini.
</span><br>
<span class="quotelev2">&gt; &gt; And the 'MPI Details' is under &quot;OMPI DETAILS COMMON FTCR TEST&quot; in
</span><br>
<span class="quotelev1">&gt; ompi-tests/iu/mtt/odin/etc/general/generic-subs2.config
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Let me know if that helps.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -- Josh
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Nov 5, 2010, at 2:06 AM, DongInn Kim wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Is there any way to put some lines to the mtt ini file to run the FTB
</span><br>
<span class="quotelev1">&gt; daemons(ftb_database_server and ftb_agent)?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Should we make another &quot;FTB Run&quot; phase after &quot;FTB Install&quot; or run the
</span><br>
<span class="quotelev1">&gt; two daemons inside &quot;Test run&quot; but run the daemons before running the test
</span><br>
<span class="quotelev1">&gt; scripts?
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I think either way would be fine if I have a working syntax for the both
</span><br>
<span class="quotelev1">&gt; cases.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Any help would be really appreciated.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Regards,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --
</span><br>
<span class="quotelev3">&gt; &gt;&gt; - DongInn
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mtt-devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; Joshua Hursey
</span><br>
<span class="quotelev2">&gt; &gt; Postdoctoral Research Associate
</span><br>
<span class="quotelev2">&gt; &gt; Oak Ridge National Laboratory
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; mtt-devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/mtt-devel/att-0525/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0526.php">Joshua Hursey: "Re: [MTT devel] Best way to run ftb_database_server and ftb_agent"</a>
<li><strong>Previous message:</strong> <a href="0524.php">DongInn Kim: "Re: [MTT devel] Best way to run ftb_database_server and ftb_agent"</a>
<li><strong>In reply to:</strong> <a href="0523.php">DongInn Kim: "Re: [MTT devel] Best way to run ftb_database_server and ftb_agent"</a>
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
