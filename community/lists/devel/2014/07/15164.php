<?
$subject_val = "Re: [OMPI devel] Onesided failures";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 16 09:53:10 2014" -->
<!-- isoreceived="20140716135310" -->
<!-- sent="Wed, 16 Jul 2014 22:53:03 +0900" -->
<!-- isosent="20140716135303" -->
<!-- name="Gilles GOUAILLARDET" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Onesided failures" -->
<!-- id="epgxgjtx179bwfyyirx0e25k.1405518583105_at_email.android.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="[OMPI devel] Onesided failures" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Onesided failures<br>
<strong>From:</strong> Gilles GOUAILLARDET (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-16 09:53:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15165.php">Rolf vandeVaart: "Re: [OMPI devel] Onesided failures"</a>
<li><strong>Previous message:</strong> <a href="15163.php">Rolf vandeVaart: "[OMPI devel] Onesided failures"</a>
<li><strong>Maybe in reply to:</strong> <a href="15163.php">Rolf vandeVaart: "[OMPI devel] Onesided failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15165.php">Rolf vandeVaart: "Re: [OMPI devel] Onesided failures"</a>
<li><strong>Reply:</strong> <a href="15165.php">Rolf vandeVaart: "Re: [OMPI devel] Onesided failures"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Rolf,
<br>
<p>From the man page of MPI_Win_allocate_shared
<br>
<p>It is the user's responsibility to ensure that the communicator comm represents a group of processes that can create a shared memory segment that can be accessed by all processes in the group
<br>
<p>And from the mtt logs, you are running 4 tasks on 2 nodes.
<br>
<p>Unless I am missing something obvious, I will update the test tomorrow and add a comm split to ensure MPI_Win_allocate_shared is called from single node communicator and skip the test if this impossible
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>Rolf vandeVaart &lt;rvandevaart_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;&lt;!-- /* Font Definitions */ @font-face 	{font-family:&quot;Cambria Math&quot;; 	panose-1:2 4 5 3 5 4 6 3 2 4;} @font-face 	{font-family:Calibri; 	panose-1:2 15 5 2 2 2 4 3 2 4;} /* Style Definitions */ p.MsoNormal, li.MsoNormal, div.MsoNormal 	{margin:0in; 	margin-bottom:.0001pt; 	font-size:11.0pt; 	font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;;} a:link, span.MsoHyperlink 	{mso-style-priority:99; 	color:blue; 	text-decoration:underline;} a:visited, span.MsoHyperlinkFollowed 	{mso-style-priority:99; 	color:purple; 	text-decoration:underline;} span.EmailStyle17 	{mso-style-type:personal-compose; 	font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;; 	color:windowtext;} .MsoChpDefault 	{mso-style-type:export-only; 	font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;;} @page WordSection1 	{size:8.5in 11.0in; 	margin:1.0in 1.0in 1.0in 1.0in;} div.WordSection1 	{page:WordSection1;} --&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On both 1.8 and trunk (as Ralph mentioned in meeting) we are seeing three tests fail.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;<a href="http://mtt.open-mpi.org/index.php?do_redir=2205">http://mtt.open-mpi.org/index.php?do_redir=2205</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#194;&#160;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Ibm/onesided/win_allocate_shared
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Ibm/onesided/win_allocated_shared_mpifh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Ibm/onesided/win_allocated_shared_usempi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#194;&#160;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Is there a ticket that covers these failures?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#194;&#160;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Rolf
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;This email message is for the sole use of the intended recipient(s) and may contain confidential information.&#194;&#160; Any unauthorized review, use, disclosure or distribution is prohibited.&#194;&#160; If you are not the intended recipient, please contact the sender by reply email and destroy all copies of the original message. 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15164/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15165.php">Rolf vandeVaart: "Re: [OMPI devel] Onesided failures"</a>
<li><strong>Previous message:</strong> <a href="15163.php">Rolf vandeVaart: "[OMPI devel] Onesided failures"</a>
<li><strong>Maybe in reply to:</strong> <a href="15163.php">Rolf vandeVaart: "[OMPI devel] Onesided failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15165.php">Rolf vandeVaart: "Re: [OMPI devel] Onesided failures"</a>
<li><strong>Reply:</strong> <a href="15165.php">Rolf vandeVaart: "Re: [OMPI devel] Onesided failures"</a>
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
