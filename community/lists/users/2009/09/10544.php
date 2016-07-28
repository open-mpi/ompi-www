<?
$subject_val = "Re: [OMPI users] [OT] : Programming on PS3 Cell BE chip ?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  1 23:28:43 2009" -->
<!-- isoreceived="20090902032843" -->
<!-- sent="Tue, 01 Sep 2009 22:28:37 -0500" -->
<!-- isosent="20090902032837" -->
<!-- name="Elvedin Trnjanin" -->
<!-- email="trnja001_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [OT] : Programming on PS3 Cell BE chip ?" -->
<!-- id="4A9DE665.4040403_at_umn.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4A9DE1C3.6030306_at_biggjapan.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] [OT] : Programming on PS3 Cell BE chip ?<br>
<strong>From:</strong> Elvedin Trnjanin (<em>trnja001_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-01 23:28:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10545.php">Jeff Squyres: "Re: [OMPI users] mca_pml_ob1_send blocks"</a>
<li><strong>Previous message:</strong> <a href="10543.php">Ashika Umanga Umagiliya: "[OMPI users] [OT] : Programming on PS3 Cell BE chip ?"</a>
<li><strong>In reply to:</strong> <a href="10543.php">Ashika Umanga Umagiliya: "[OMPI users] [OT] : Programming on PS3 Cell BE chip ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10554.php">Attila Börcs: "Re: [OMPI users] [OT] : Programming on PS3 Cell BE chip ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am not a game developer, but I don't think any games are actually 
<br>
using MPI in general, let alone to communicate with the SPEs (if that 
<br>
isn't what you were implying, my mistake - I apologize). If you're 
<br>
interested in learning about programming on the Cell BE, take a look at 
<br>
IBM's &quot;Redbook&quot; on it. The PDF is free and is a wonderful resource that 
<br>
I wish I had when starting to work on the CBE.
<br>
<p><a href="http://www.redbooks.ibm.com/abstracts/sg247575.html">http://www.redbooks.ibm.com/abstracts/sg247575.html</a>
<br>
<p>Keeping in mind that I'm not a game developer, what the SPUs are used 
<br>
for is the game physics and AI so there could be some shared data worked 
<br>
on in a &quot;parallel way&quot;. Not all games use all of the SPUs so those games 
<br>
could be multi-core sequential like the Xbox. I found a post that 
<br>
specifies the SPU usage per game -
<br>
<p><a href="http://www.neogaf.com/forum/showpost.php?p=7598043&amp;postcount=1">http://www.neogaf.com/forum/showpost.php?p=7598043&amp;postcount=1</a>
<br>
<p>Ashika Umanga Umagiliya wrote:
<br>
<span class="quotelev1">&gt; Are all the commercial PS3 games developed in &quot;parallel way&quot;.(unlike 
</span><br>
<span class="quotelev1">&gt; sequential like XBox development) ?
</span><br>
<span class="quotelev1">&gt; Do the developers have *think* in parallel way and use all the MPI_* 
</span><br>
<span class="quotelev1">&gt; like commands to communicate with  SPEs ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10545.php">Jeff Squyres: "Re: [OMPI users] mca_pml_ob1_send blocks"</a>
<li><strong>Previous message:</strong> <a href="10543.php">Ashika Umanga Umagiliya: "[OMPI users] [OT] : Programming on PS3 Cell BE chip ?"</a>
<li><strong>In reply to:</strong> <a href="10543.php">Ashika Umanga Umagiliya: "[OMPI users] [OT] : Programming on PS3 Cell BE chip ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10554.php">Attila Börcs: "Re: [OMPI users] [OT] : Programming on PS3 Cell BE chip ?"</a>
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
