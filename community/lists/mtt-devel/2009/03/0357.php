<?
$subject_val = "Re: [MTT devel] mtt text report oddity";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 19 03:19:22 2009" -->
<!-- isoreceived="20090319071922" -->
<!-- sent="Thu, 19 Mar 2009 09:19:16 +0200" -->
<!-- isosent="20090319071916" -->
<!-- name="Mike Dubman" -->
<!-- email="mike.ompi_at_[hidden]" -->
<!-- subject="Re: [MTT devel] mtt text report oddity" -->
<!-- id="b20b52800903190019p31c5a8a2gff5bf3f6e99475f0_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="F59617CD-CE19-4E6F-9792-EAC10908C14C_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [MTT devel] mtt text report oddity<br>
<strong>From:</strong> Mike Dubman (<em>mike.ompi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-19 03:19:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0358.php">Jeff Squyres: "Re: [MTT devel] mtt text report oddity"</a>
<li><strong>Previous message:</strong> <a href="0356.php">Jeff Squyres: "[MTT devel] mtt text report oddity"</a>
<li><strong>In reply to:</strong> <a href="0356.php">Jeff Squyres: "[MTT devel] mtt text report oddity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0358.php">Jeff Squyres: "Re: [MTT devel] mtt text report oddity"</a>
<li><strong>Reply:</strong> <a href="0358.php">Jeff Squyres: "Re: [MTT devel] mtt text report oddity"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
because the results are rendered in chunks during reporting phase. (100
<br>
pieces every flush)
<br>
This caused same benchmark line to appear more then once in the final
<br>
report.
<br>
<p>You can configure the reporter to issue results not by number, but for same
<br>
benchmark at once:
<br>
<p>put this in the ini file:
<br>
<p>[MTT]
<br>
submit_group_results=1
<br>
<p><p>Also, html report is nicer and allows you easy navigation to the errors
<br>
<p>regards
<br>
<p>Mike
<br>
<p><p>2009/3/19 Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; I got a fairly odd mtt text report (it's super wide, sorry):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; | Test Run    | intel             | 1.3.1rc5    | 00:12    | 5    |      |
</span><br>
<span class="quotelev1">&gt;          |      | Test_Run-intel-developer-1.3.1rc5.html                |
</span><br>
<span class="quotelev1">&gt; | Test Run    | intel             | 1.3.1rc5    | 02:59    | 101  |      |
</span><br>
<span class="quotelev1">&gt;          |      | Test_Run-intel-developer-1.3.1rc5.html                |
</span><br>
<span class="quotelev1">&gt; | Test Run    | intel             | 1.3.1rc5    | 03:08    | 101  |      |
</span><br>
<span class="quotelev1">&gt;          |      | Test_Run-intel-developer-1.3.1rc5.html                |
</span><br>
<span class="quotelev1">&gt; | Test Run    | intel             | 1.3.1rc5    | 02:51    | 101  |      |
</span><br>
<span class="quotelev1">&gt;          |      | Test_Run-intel-developer-1.3.1rc5.html                |
</span><br>
<span class="quotelev1">&gt; | Test Run    | intel             | 1.3.1rc5    | 02:59    | 101  |      |
</span><br>
<span class="quotelev1">&gt;          |      | Test_Run-intel-developer-1.3.1rc5.html                |
</span><br>
<span class="quotelev1">&gt; | Test Run    | intel             | 1.3.1rc5    | 03:48    | 101  |      |
</span><br>
<span class="quotelev1">&gt;          |      | Test_Run-intel-developer-1.3.1rc5.html                |
</span><br>
<span class="quotelev1">&gt; | Test Run    | intel             | 1.3.1rc5    | 03:10    | 101  |      |
</span><br>
<span class="quotelev1">&gt;          |      | Test_Run-intel-developer-1.3.1rc5.html                |
</span><br>
<span class="quotelev1">&gt; | Test Run    | intel             | 1.3.1rc5    | 03:05    | 101  |      |
</span><br>
<span class="quotelev1">&gt;          |      | Test_Run-intel-developer-1.3.1rc5.html                |
</span><br>
<span class="quotelev1">&gt; | Test Run    | intel             | 1.3.1rc5    | 03:09    | 101  |      |
</span><br>
<span class="quotelev1">&gt;          |      | Test_Run-intel-developer-1.3.1rc5.html                |
</span><br>
<span class="quotelev1">&gt; | Test Run    | intel             | 1.3.1rc5    | 03:25    | 101  |      |
</span><br>
<span class="quotelev1">&gt;          |      | Test_Run-intel-developer-1.3.1rc5.html                |
</span><br>
<span class="quotelev1">&gt; | Test Run    | intel             | 1.3.1rc5    | 02:46    | 101  |      |
</span><br>
<span class="quotelev1">&gt;          |      | Test_Run-intel-developer-1.3.1rc5.html                |
</span><br>
<span class="quotelev1">&gt; | Test Run    | intel             | 1.3.1rc5    | 02:59    | 101  |      |
</span><br>
<span class="quotelev1">&gt;          |      | Test_Run-intel-developer-1.3.1rc5.html                |
</span><br>
<span class="quotelev1">&gt; | Test Run    | intel             | 1.3.1rc5    | 03:23    | 101  |      |
</span><br>
<span class="quotelev1">&gt;          |      | Test_Run-intel-developer-1.3.1rc5.html                |
</span><br>
<span class="quotelev1">&gt; | Test Run    | intel             | 1.3.1rc5    | 02:50    | 100  | 1    |
</span><br>
<span class="quotelev1">&gt;          |      | Test_Run-intel-developer-1.3.1rc5.html                |
</span><br>
<span class="quotelev1">&gt; | Test Run    | intel             | 1.3.1rc5    | 02:56    | 101  |      |
</span><br>
<span class="quotelev1">&gt;          |      | Test_Run-intel-developer-1.3.1rc5.html                |
</span><br>
<span class="quotelev1">&gt; | Test Run    | intel             | 1.3.1rc5    | 02:53    | 101  |      |
</span><br>
<span class="quotelev1">&gt;          |      | Test_Run-intel-developer-1.3.1rc5.html                |
</span><br>
<span class="quotelev1">&gt; | Test Run    | intel             | 1.3.1rc5    | 03:22    | 101  |      |
</span><br>
<span class="quotelev1">&gt;          |      | Test_Run-intel-developer-1.3.1rc5.html                |
</span><br>
<span class="quotelev1">&gt; | Test Run    | intel             | 1.3.1rc5    | 04:21    | 100  |      |
</span><br>
<span class="quotelev1">&gt; 1        |      | Test_Run-intel-developer-1.3.1rc5.html                |
</span><br>
<span class="quotelev1">&gt; | Test Run    | intel             | 1.3.1rc5    | 04:12    | 101  |      |
</span><br>
<span class="quotelev1">&gt;          |      | Test_Run-intel-developer-1.3.1rc5.html                |
</span><br>
<span class="quotelev1">&gt; | Test Run    | intel             | 1.3.1rc5    | 03:36    | 101  |      |
</span><br>
<span class="quotelev1">&gt;          |      | Test_Run-intel-developer-1.3.1rc5.html                |
</span><br>
<span class="quotelev1">&gt; | Test Run    | intel             | 1.3.1rc5    | 02:48    | 101  |      |
</span><br>
<span class="quotelev1">&gt;          |      | Test_Run-intel-developer-1.3.1rc5.html                |
</span><br>
<span class="quotelev1">&gt; | Test Run    | intel             | 1.3.1rc5    | 02:47    | 101  |      |
</span><br>
<span class="quotelev1">&gt;          |      | Test_Run-intel-developer-1.3.1rc5.html                |
</span><br>
<span class="quotelev1">&gt; | Test Run    | intel             | 1.3.1rc5    | 03:08    | 101  |      |
</span><br>
<span class="quotelev1">&gt;          |      | Test_Run-intel-developer-1.3.1rc5.html                |
</span><br>
<span class="quotelev1">&gt; | Test Run    | intel             | 1.3.1rc5    | 02:57    | 101  |      |
</span><br>
<span class="quotelev1">&gt;          |      | Test_Run-intel-developer-1.3.1rc5.html                |
</span><br>
<span class="quotelev1">&gt; | Test Run    | intel             | 1.3.1rc5    | 02:43    | 101  |      |
</span><br>
<span class="quotelev1">&gt;          |      | Test_Run-intel-developer-1.3.1rc5.html                |
</span><br>
<span class="quotelev1">&gt; | Test Run    | intel             | 1.3.1rc5    | 02:48    | 101  |      |
</span><br>
<span class="quotelev1">&gt;          |      | Test_Run-intel-developer-1.3.1rc5.html                |
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Notice that there are *many* &quot;intel&quot; lines, each with 101 passes.  The only
</span><br>
<span class="quotelev1">&gt; difference between them is the times that they ran -- but there's even
</span><br>
<span class="quotelev1">&gt; repeats of that.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do we know why there is so many different lines for the intel test suite?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Did this get changed in the text reporter changes from Voltaire (somewhat)
</span><br>
<span class="quotelev1">&gt; recently?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/mtt-devel/att-0357/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0358.php">Jeff Squyres: "Re: [MTT devel] mtt text report oddity"</a>
<li><strong>Previous message:</strong> <a href="0356.php">Jeff Squyres: "[MTT devel] mtt text report oddity"</a>
<li><strong>In reply to:</strong> <a href="0356.php">Jeff Squyres: "[MTT devel] mtt text report oddity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0358.php">Jeff Squyres: "Re: [MTT devel] mtt text report oddity"</a>
<li><strong>Reply:</strong> <a href="0358.php">Jeff Squyres: "Re: [MTT devel] mtt text report oddity"</a>
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
