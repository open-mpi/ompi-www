<?
$subject_val = "Re: [OMPI users] single CPU vs four CPU result differences, is it normal?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 28 19:36:43 2015" -->
<!-- isoreceived="20151028233643" -->
<!-- sent="Wed, 28 Oct 2015 19:36:32 -0400" -->
<!-- isosent="20151028233632" -->
<!-- name="Noam Bernstein" -->
<!-- email="noam.bernstein_at_[hidden]" -->
<!-- subject="Re: [OMPI users] single CPU vs four CPU result differences, is it normal?" -->
<!-- id="F1034698-0D4C-4016-90B2-3D41B7D6D606_at_nrl.navy.mil" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAG8o1y5N-SbNHYtMcXeWAY3CJEzhRr6QCJyqsd4=zJJZyM4_UQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] single CPU vs four CPU result differences, is it normal?<br>
<strong>From:</strong> Noam Bernstein (<em>noam.bernstein_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-28 19:36:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27939.php">Gilles Gouaillardet: "Re: [OMPI users] single CPU vs four CPU result differences, is it normal?"</a>
<li><strong>Previous message:</strong> <a href="27937.php">Bibrak Qamar: "Re: [OMPI users] single CPU vs four CPU result differences, is it normal?"</a>
<li><strong>In reply to:</strong> <a href="27936.php">Diego Avesani: "Re: [OMPI users] single CPU vs four CPU result differences, is it normal?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27939.php">Gilles Gouaillardet: "Re: [OMPI users] single CPU vs four CPU result differences, is it normal?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; On Oct 28, 2015, at 6:58 PM, Diego Avesani &lt;diego.avesani_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; dear Damin,
</span><br>
<span class="quotelev1">&gt; I wrote the solver by myself. I have not understood your answer. 
</span><br>
<p>Floating point addition is not associative.  Doing a long sum in different orders, as might happen when different numbers of nodes do local sums that are then summed globally, will not get the same results.  Even mpi global reduce sum is not guaranteed by the standard to always get exactly the same answer even with all the same arguments and number of tasks, it&#226;&#128;&#153;s just recommended.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Noam
<br>
<p>------------------------------------------------------------
<br>
Noam Bernstein
<br>
Center for Materials Physics and Technology
<br>
NRL Code 6390
<br>
noam.bernstein_at_[hidden]
<br>
phone: 703 683 2783
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27938/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27939.php">Gilles Gouaillardet: "Re: [OMPI users] single CPU vs four CPU result differences, is it normal?"</a>
<li><strong>Previous message:</strong> <a href="27937.php">Bibrak Qamar: "Re: [OMPI users] single CPU vs four CPU result differences, is it normal?"</a>
<li><strong>In reply to:</strong> <a href="27936.php">Diego Avesani: "Re: [OMPI users] single CPU vs four CPU result differences, is it normal?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27939.php">Gilles Gouaillardet: "Re: [OMPI users] single CPU vs four CPU result differences, is it normal?"</a>
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
