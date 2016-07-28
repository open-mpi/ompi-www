<?
$subject_val = "Re: [OMPI devel] 1.5.5rc1 is out";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 15 15:50:19 2011" -->
<!-- isoreceived="20111215205019" -->
<!-- sent="Thu, 15 Dec 2011 20:50:09 +0000" -->
<!-- isosent="20111215205009" -->
<!-- name="Ashley Pittman" -->
<!-- email="ashley_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.5.5rc1 is out" -->
<!-- id="05B43811-8BF0-4301-B61A-9CF83ECE2730_at_pittman.co.uk" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5A20FC87-845B-47AC-927E-F8DFC1EA9B07_at_pittman.co.uk" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.5.5rc1 is out<br>
<strong>From:</strong> Ashley Pittman (<em>ashley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-15 15:50:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10145.php">Ashley Pittman: "[OMPI devel] MPIR attach from padb broken (1.5.5rc1)"</a>
<li><strong>Previous message:</strong> <a href="10143.php">Jeff Squyres: "Re: [OMPI devel] Totalview broken with 1.5/trunk"</a>
<li><strong>In reply to:</strong> <a href="10141.php">Ashley Pittman: "Re: [OMPI devel] 1.5.5rc1 is out"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 15 Dec 2011, at 20:16, Ashley Pittman wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 14 Dec 2011, at 04:36, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; In the usual place:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   <a href="http://www.open-mpi.org/software/ompi/v1.5/">http://www.open-mpi.org/software/ompi/v1.5/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Please test!  I would really like to get this out by the end of the week.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As with 1.4 I've tested it on two nodes of Ubuntu 11.10 (hpcloud) and confirm that it works as expected and that padb can attach to jobs and read the message queues correctly.
</span><br>
<p>I take this back, by parsing the output of otre-ps I can attach to jobs and read data from the ranks, I cannot however read the job state from the otrerun process, the symbol &quot;MPIR_proctable_size&quot; resolves and I can read it but the value is zero.
<br>
<p>I see the other thread about Totalview being broken but that seems to resolve around MPIR_Breakpoint in the application so I believe that is a different issue.
<br>
<p>To test for this with padb, run a job with orterun and on the same node run &quot;padb -axt -Ormgr=mpirun&quot;, 
<br>
<p>Ashley.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10145.php">Ashley Pittman: "[OMPI devel] MPIR attach from padb broken (1.5.5rc1)"</a>
<li><strong>Previous message:</strong> <a href="10143.php">Jeff Squyres: "Re: [OMPI devel] Totalview broken with 1.5/trunk"</a>
<li><strong>In reply to:</strong> <a href="10141.php">Ashley Pittman: "Re: [OMPI devel] 1.5.5rc1 is out"</a>
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
