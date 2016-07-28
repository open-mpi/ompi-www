<?
$subject_val = "Re: [OMPI users] bizarre failure with IMB/openib";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 21 11:20:25 2011" -->
<!-- isoreceived="20110321152025" -->
<!-- sent="Mon, 21 Mar 2011 15:19:51 +0000" -->
<!-- isosent="20110321151951" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="Re: [OMPI users] bizarre failure with IMB/openib" -->
<!-- id="87fwqgsdpk.fsf_at_liv.ac.uk" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="201103211504.44849.cap_at_nsc.liu.se" -->
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
<strong>Subject:</strong> Re: [OMPI users] bizarre failure with IMB/openib<br>
<strong>From:</strong> Dave Love (<em>d.love_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-21 11:19:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15929.php">Dave Love: "Re: [OMPI users] 1.5.3 and SGE integration?"</a>
<li><strong>Previous message:</strong> <a href="15927.php">Terry Dontje: "Re: [OMPI users] 1.5.3 and SGE integration?"</a>
<li><strong>In reply to:</strong> <a href="15926.php">Peter Kjellstr&#246;m: "Re: [OMPI users] bizarre failure with IMB/openib"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15956.php">Dave Love: "Re: [OMPI users] bizarre failure with IMB/openib"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Peter Kjellstr&#246;m &lt;cap_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev1">&gt; Are you sure you launched it correctly and that you have (re)built OpenMPI 
</span><br>
<span class="quotelev1">&gt; against your Redhat-5 ib stack?
</span><br>
<p>Yes.  I had to rebuild because I'd omitted openib when we only needed
<br>
psm.  As I said, I did exactly the same thing successfully with PMB
<br>
(initially because I wanted to try an old binary, and PMB was lying
<br>
around).
<br>
<p><span class="quotelev2">&gt;&gt;   Your MPI job is now going to abort; sorry.
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt;   [lvgig116:07931] 19 more processes have sent help message
</span><br>
<span class="quotelev2">&gt;&gt; help-mca-bml-r2.txt / unreachable proc [lvgig116:07931] Set MCA parameter
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Seems to me that OpenMPI gave up because it didn't succeed in initializing any 
</span><br>
<span class="quotelev1">&gt; inter-node btl/mtl.
</span><br>
<p>Sure, but why won't it load the btl under IMB when it will under PMB
<br>
(and other codes like XHPL), and how do I get any diagnostics?
<br>
<p>My boss has just stumbled upon a reference while looking for something
<br>
else It looks as if it's an OFED bug entry, but I can't find an
<br>
operational version of an OFED tracker or any other reference to the bug
<br>
than (the equivalent of)
<br>
<a href="http://lists.openfabrics.org/pipermail/ewg/2010-March/014983.html">http://lists.openfabrics.org/pipermail/ewg/2010-March/014983.html</a> :
<br>
<p>&nbsp;&nbsp;1976 	maj 	jsquyres at cisco.com 		errors running IMB over openmpi-1.4.1
<br>
<p>I guess Jeff will enlighten me if/when he spots this.  (Thanks in
<br>
advance, obviously.)
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15929.php">Dave Love: "Re: [OMPI users] 1.5.3 and SGE integration?"</a>
<li><strong>Previous message:</strong> <a href="15927.php">Terry Dontje: "Re: [OMPI users] 1.5.3 and SGE integration?"</a>
<li><strong>In reply to:</strong> <a href="15926.php">Peter Kjellstr&#246;m: "Re: [OMPI users] bizarre failure with IMB/openib"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15956.php">Dave Love: "Re: [OMPI users] bizarre failure with IMB/openib"</a>
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
