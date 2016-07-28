<?
$subject_val = "Re: [MTT users] Can not find my testing results in OMPI MTT DB";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 21 11:37:07 2008" -->
<!-- isoreceived="20080521153707" -->
<!-- sent="Wed, 21 May 2008 11:36:26 -0400" -->
<!-- isosent="20080521153626" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT users] Can not find my testing results in OMPI MTT DB" -->
<!-- id="20080521153626.GE51303_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="48342F80.8060509_at_dev.mellanox.co.il" -->
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
<strong>Subject:</strong> Re: [MTT users] Can not find my testing results in OMPI MTT DB<br>
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-21 11:36:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0578.php">Pavel Shamis (Pasha): "Re: [MTT users] Can not find my testing results in OMPI MTT DB"</a>
<li><strong>Previous message:</strong> <a href="0576.php">Pavel Shamis (Pasha): "Re: [MTT users] Can not find my testing results in OMPI MTT DB"</a>
<li><strong>In reply to:</strong> <a href="0576.php">Pavel Shamis (Pasha): "Re: [MTT users] Can not find my testing results in OMPI MTT DB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0578.php">Pavel Shamis (Pasha): "Re: [MTT users] Can not find my testing results in OMPI MTT DB"</a>
<li><strong>Reply:</strong> <a href="0578.php">Pavel Shamis (Pasha): "Re: [MTT users] Can not find my testing results in OMPI MTT DB"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, May/21/2008 05:19:44PM, Pavel Shamis (Pasha) wrote:
<br>
<span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Are we running into http max memory problems or http max upload size 
</span><br>
<span class="quotelev2">&gt; &gt; problems again?
</span><br>
<span class="quotelev1">&gt; I guess it is some server side issue, you need to check the 
</span><br>
<span class="quotelev1">&gt; /var/log/httpd/* log on the server.
</span><br>
<p>The only thing I found in the httpd logs
<br>
(/var/log/httpd/www.open-mpi.org/error_log*) was this PHP
<br>
warning, which I don't think would result in lost results:
<br>
<p>&nbsp;PHP Warning:  array_shift(): The argument should be an array in .../submit/index.php on line 1683
<br>
<p>I haven't received any emailed Postgres errors either. When
<br>
were these results submitted? I searched for &quot;mellanox&quot; over
<br>
the past four days. It seem the results aren't buried in
<br>
here, because I see no test run failures ...
<br>
<p>&nbsp;&nbsp;<a href="http://www.open-mpi.org/mtt/index.php?do_redir=659">http://www.open-mpi.org/mtt/index.php?do_redir=659</a>
<br>
<p>I'm assuming you're running with two Reporter INI sections:
<br>
Textfile and MTTDatabase? Can you send some MTT client
<br>
--verbose/--debug output from the below runs?
<br>
<p>Thanks,
<br>
Ethan
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On May 21, 2008, at 5:28 AM, Pavel Shamis (Pasha) wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Here is test result from my last mtt run:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +-------------+----------------+------+------+----------+------+
</span><br>
<span class="quotelev3">&gt; &gt;&gt; | Phase       | Section        | Pass | Fail | Time out | Skip |
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +-------------+----------------+------+------+----------+------+
</span><br>
<span class="quotelev3">&gt; &gt;&gt; | MPI install | ompi/gcc       | 1    | 0    | 0        | 0    |
</span><br>
<span class="quotelev3">&gt; &gt;&gt; | MPI install | ompi/intel-9.0 | 1    | 0    | 0        | 0    |
</span><br>
<span class="quotelev3">&gt; &gt;&gt; | Test Build  | trivial        | 1    | 0    | 0        | 0    |
</span><br>
<span class="quotelev3">&gt; &gt;&gt; | Test Build  | trivial        | 1    | 0    | 0        | 0    |
</span><br>
<span class="quotelev3">&gt; &gt;&gt; | Test Build  | intel-suite    | 1    | 0    | 0        | 0    |
</span><br>
<span class="quotelev3">&gt; &gt;&gt; | Test Build  | intel-suite    | 1    | 0    | 0        | 0    |
</span><br>
<span class="quotelev3">&gt; &gt;&gt; | Test Build  | imb            | 1    | 0    | 0        | 0    |
</span><br>
<span class="quotelev3">&gt; &gt;&gt; | Test Build  | imb            | 1    | 0    | 0        | 0    |
</span><br>
<span class="quotelev3">&gt; &gt;&gt; | Test Build  | presta         | 1    | 0    | 0        | 0    |
</span><br>
<span class="quotelev3">&gt; &gt;&gt; | Test Build  | presta         | 1    | 0    | 0        | 0    |
</span><br>
<span class="quotelev3">&gt; &gt;&gt; | Test Build  | osu_benchmarks | 1    | 0    | 0        | 0    |
</span><br>
<span class="quotelev3">&gt; &gt;&gt; | Test Build  | osu_benchmarks | 1    | 0    | 0        | 0    |
</span><br>
<span class="quotelev3">&gt; &gt;&gt; | Test Build  | netpipe        | 1    | 0    | 0        | 0    |
</span><br>
<span class="quotelev3">&gt; &gt;&gt; | Test Build  | netpipe        | 1    | 0    | 0        | 0    |
</span><br>
<span class="quotelev3">&gt; &gt;&gt; | Test Run    | trivial        | 64   | 0    | 0        | 0    |
</span><br>
<span class="quotelev3">&gt; &gt;&gt; | Test Run    | trivial        | 64   | 0    | 0        | 0    |
</span><br>
<span class="quotelev3">&gt; &gt;&gt; | Test Run    | intel-suite    | 3179 | 165  | 400      | 0    |
</span><br>
<span class="quotelev3">&gt; &gt;&gt; | Test Run    | intel-suite    | 492  | 0    | 0        | 0    |
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +-------------+----------------+------+------+----------+------+
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; In the OMPI MTT DB (<a href="http://www.open-mpi.org/mtt">http://www.open-mpi.org/mtt</a>) I found the follow
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &quot;test run&quot; results:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; | Test Run    | trivial        | 64   | 0    | 0        | 0    |
</span><br>
<span class="quotelev3">&gt; &gt;&gt; | Test Run    | trivial        | 64   | 0    | 0        | 0    |
</span><br>
<span class="quotelev3">&gt; &gt;&gt; | Test Run    | intel-suite    | 492  | 0    | 0        | 0    |
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; And I can not find this one:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; | Test Run    | intel-suite    | 3179 | 165  | 400      | 0    |
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; From the log I see that all tests results were submitted successfully.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Can you please check ?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Pasha
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0578.php">Pavel Shamis (Pasha): "Re: [MTT users] Can not find my testing results in OMPI MTT DB"</a>
<li><strong>Previous message:</strong> <a href="0576.php">Pavel Shamis (Pasha): "Re: [MTT users] Can not find my testing results in OMPI MTT DB"</a>
<li><strong>In reply to:</strong> <a href="0576.php">Pavel Shamis (Pasha): "Re: [MTT users] Can not find my testing results in OMPI MTT DB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0578.php">Pavel Shamis (Pasha): "Re: [MTT users] Can not find my testing results in OMPI MTT DB"</a>
<li><strong>Reply:</strong> <a href="0578.php">Pavel Shamis (Pasha): "Re: [MTT users] Can not find my testing results in OMPI MTT DB"</a>
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
