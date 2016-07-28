<?
$subject_val = "Re: [OMPI users] Reducing Varying Length Arrays";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Nov  9 20:15:23 2013" -->
<!-- isoreceived="20131110011523" -->
<!-- sent="Sat, 9 Nov 2013 19:15:20 -0600" -->
<!-- isosent="20131110011520" -->
<!-- name="Jeff Hammond" -->
<!-- email="jeff.science_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Reducing Varying Length Arrays" -->
<!-- id="8371435407429591854_at_unknownmsgid" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CA+ssbKUNJeL4czT0wZsxMoNj4SKMSPs1XSDEFkhWaNQAjUiAGw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Reducing Varying Length Arrays<br>
<strong>From:</strong> Jeff Hammond (<em>jeff.science_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-09 20:15:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22934.php">Saliya Ekanayake: "Re: [OMPI users] Reducing Varying Length Arrays"</a>
<li><strong>Previous message:</strong> <a href="22932.php">Saliya Ekanayake: "[OMPI users] Reducing Varying Length Arrays"</a>
<li><strong>In reply to:</strong> <a href="22932.php">Saliya Ekanayake: "[OMPI users] Reducing Varying Length Arrays"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22934.php">Saliya Ekanayake: "Re: [OMPI users] Reducing Varying Length Arrays"</a>
<li><strong>Reply:</strong> <a href="22934.php">Saliya Ekanayake: "Re: [OMPI users] Reducing Varying Length Arrays"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
MPI_{Gather,Allgather}v are appropriate for this. See docs for details.
<br>
<p>Jeff
<br>
<p>Sent from my iPhone
<br>
<p>On Nov 9, 2013, at 6:15 PM, Saliya Ekanayake &lt;esaliya_at_[hidden]&gt; wrote:
<br>
<p>Hi,
<br>
<p>I want to contact bunch of strings from MPI processes. For example, say
<br>
with 2 processes,
<br>
<p>P1 has text &quot;hi&quot;
<br>
P2 has text &quot;world&quot;
<br>
<p>I have these stored as char arrays in processes. Is there a simple way to
<br>
do a reduce operation to concat these?
<br>
<p>Thank you,
<br>
Saliya
<br>
<p><pre>
-- 
Saliya Ekanayake esaliya_at_[hidden]
Cell 812-391-4914 Home 812-961-6383
<a href="http://saliya.org">http://saliya.org</a>
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22933/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22934.php">Saliya Ekanayake: "Re: [OMPI users] Reducing Varying Length Arrays"</a>
<li><strong>Previous message:</strong> <a href="22932.php">Saliya Ekanayake: "[OMPI users] Reducing Varying Length Arrays"</a>
<li><strong>In reply to:</strong> <a href="22932.php">Saliya Ekanayake: "[OMPI users] Reducing Varying Length Arrays"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22934.php">Saliya Ekanayake: "Re: [OMPI users] Reducing Varying Length Arrays"</a>
<li><strong>Reply:</strong> <a href="22934.php">Saliya Ekanayake: "Re: [OMPI users] Reducing Varying Length Arrays"</a>
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
