<?
$subject_val = "Re: [MTT users] Can not find my testing results in OMPI MTT DB";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 21 10:19:50 2008" -->
<!-- isoreceived="20080521141950" -->
<!-- sent="Wed, 21 May 2008 17:19:44 +0300" -->
<!-- isosent="20080521141944" -->
<!-- name="Pavel Shamis (Pasha)" -->
<!-- email="pasha_at_[hidden]" -->
<!-- subject="Re: [MTT users] Can not find my testing results in OMPI MTT DB" -->
<!-- id="48342F80.8060509_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5BD81A24-7A59-47F0-A380-E923EF0A3395_at_cisco.com" -->
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
<strong>From:</strong> Pavel Shamis (Pasha) (<em>pasha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-21 10:19:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0577.php">Ethan Mallove: "Re: [MTT users] Can not find my testing results in OMPI MTT DB"</a>
<li><strong>Previous message:</strong> <a href="0575.php">Jeff Squyres: "Re: [MTT users] Can not find my testing results in OMPI MTT DB"</a>
<li><strong>In reply to:</strong> <a href="0575.php">Jeff Squyres: "Re: [MTT users] Can not find my testing results in OMPI MTT DB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0577.php">Ethan Mallove: "Re: [MTT users] Can not find my testing results in OMPI MTT DB"</a>
<li><strong>Reply:</strong> <a href="0577.php">Ethan Mallove: "Re: [MTT users] Can not find my testing results in OMPI MTT DB"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Are we running into http max memory problems or http max upload size 
</span><br>
<span class="quotelev1">&gt; problems again?
</span><br>
I guess it is some server side issue, you need to check the 
<br>
/var/log/httpd/* log on the server.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 21, 2008, at 5:28 AM, Pavel Shamis (Pasha) wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here is test result from my last mtt run:
</span><br>
<span class="quotelev2">&gt;&gt; +-------------+----------------+------+------+----------+------+
</span><br>
<span class="quotelev2">&gt;&gt; | Phase       | Section        | Pass | Fail | Time out | Skip |
</span><br>
<span class="quotelev2">&gt;&gt; +-------------+----------------+------+------+----------+------+
</span><br>
<span class="quotelev2">&gt;&gt; | MPI install | ompi/gcc       | 1    | 0    | 0        | 0    |
</span><br>
<span class="quotelev2">&gt;&gt; | MPI install | ompi/intel-9.0 | 1    | 0    | 0        | 0    |
</span><br>
<span class="quotelev2">&gt;&gt; | Test Build  | trivial        | 1    | 0    | 0        | 0    |
</span><br>
<span class="quotelev2">&gt;&gt; | Test Build  | trivial        | 1    | 0    | 0        | 0    |
</span><br>
<span class="quotelev2">&gt;&gt; | Test Build  | intel-suite    | 1    | 0    | 0        | 0    |
</span><br>
<span class="quotelev2">&gt;&gt; | Test Build  | intel-suite    | 1    | 0    | 0        | 0    |
</span><br>
<span class="quotelev2">&gt;&gt; | Test Build  | imb            | 1    | 0    | 0        | 0    |
</span><br>
<span class="quotelev2">&gt;&gt; | Test Build  | imb            | 1    | 0    | 0        | 0    |
</span><br>
<span class="quotelev2">&gt;&gt; | Test Build  | presta         | 1    | 0    | 0        | 0    |
</span><br>
<span class="quotelev2">&gt;&gt; | Test Build  | presta         | 1    | 0    | 0        | 0    |
</span><br>
<span class="quotelev2">&gt;&gt; | Test Build  | osu_benchmarks | 1    | 0    | 0        | 0    |
</span><br>
<span class="quotelev2">&gt;&gt; | Test Build  | osu_benchmarks | 1    | 0    | 0        | 0    |
</span><br>
<span class="quotelev2">&gt;&gt; | Test Build  | netpipe        | 1    | 0    | 0        | 0    |
</span><br>
<span class="quotelev2">&gt;&gt; | Test Build  | netpipe        | 1    | 0    | 0        | 0    |
</span><br>
<span class="quotelev2">&gt;&gt; | Test Run    | trivial        | 64   | 0    | 0        | 0    |
</span><br>
<span class="quotelev2">&gt;&gt; | Test Run    | trivial        | 64   | 0    | 0        | 0    |
</span><br>
<span class="quotelev2">&gt;&gt; | Test Run    | intel-suite    | 3179 | 165  | 400      | 0    |
</span><br>
<span class="quotelev2">&gt;&gt; | Test Run    | intel-suite    | 492  | 0    | 0        | 0    |
</span><br>
<span class="quotelev2">&gt;&gt; +-------------+----------------+------+------+----------+------+
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In the OMPI MTT DB (<a href="http://www.open-mpi.org/mtt">http://www.open-mpi.org/mtt</a>) I found the follow
</span><br>
<span class="quotelev2">&gt;&gt; &quot;test run&quot; results:
</span><br>
<span class="quotelev2">&gt;&gt; | Test Run    | trivial        | 64   | 0    | 0        | 0    |
</span><br>
<span class="quotelev2">&gt;&gt; | Test Run    | trivial        | 64   | 0    | 0        | 0    |
</span><br>
<span class="quotelev2">&gt;&gt; | Test Run    | intel-suite    | 492  | 0    | 0        | 0    |
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; And I can not find this one:
</span><br>
<span class="quotelev2">&gt;&gt; | Test Run    | intel-suite    | 3179 | 165  | 400      | 0    |
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; From the log I see that all tests results were submitted successfully.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can you please check ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Pasha
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0577.php">Ethan Mallove: "Re: [MTT users] Can not find my testing results in OMPI MTT DB"</a>
<li><strong>Previous message:</strong> <a href="0575.php">Jeff Squyres: "Re: [MTT users] Can not find my testing results in OMPI MTT DB"</a>
<li><strong>In reply to:</strong> <a href="0575.php">Jeff Squyres: "Re: [MTT users] Can not find my testing results in OMPI MTT DB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0577.php">Ethan Mallove: "Re: [MTT users] Can not find my testing results in OMPI MTT DB"</a>
<li><strong>Reply:</strong> <a href="0577.php">Ethan Mallove: "Re: [MTT users] Can not find my testing results in OMPI MTT DB"</a>
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
