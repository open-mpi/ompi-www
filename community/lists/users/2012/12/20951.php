<?
$subject_val = "Re: [OMPI users] questions to some open problems";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 14 15:00:59 2012" -->
<!-- isoreceived="20121214200059" -->
<!-- sent="Fri, 14 Dec 2012 12:00:47 -0800" -->
<!-- isosent="20121214200047" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] questions to some open problems" -->
<!-- id="E1E25A78-756C-4B51-AE37-AA7437078EBC_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201212141354.qBEDsLce022677_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] questions to some open problems<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-14 15:00:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20952.php">Blosch, Edwin L: "[OMPI users] Problems with shared libraries while launching jobs"</a>
<li><strong>Previous message:</strong> <a href="20950.php">Ralph Castain: "Re: [OMPI users] problem with data transfer in a heterogeneous environment"</a>
<li><strong>In reply to:</strong> <a href="20949.php">Siegmar Gross: "[OMPI users] questions to some open problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20961.php">Siegmar Gross: "Re: [OMPI users] questions to some open problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Siegmar
<br>
<p><p>On Dec 14, 2012, at 5:54 AM, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; some weeks ago (mainly in the beginning of October) I reported
</span><br>
<span class="quotelev1">&gt; several problems and I would be grateful if you can tell me if
</span><br>
<span class="quotelev1">&gt; and probably when somebody will try to solve them.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1) I don't get the expected results, when I try to send or scatter
</span><br>
<span class="quotelev1">&gt;   the columns of a matrix in Java. The received column values have
</span><br>
<span class="quotelev1">&gt;   nothing to do with the original values, if I use a homogeneous
</span><br>
<span class="quotelev1">&gt;   environment and the program breaks with &quot;An error occurred in
</span><br>
<span class="quotelev1">&gt;   MPI_Comm_dup&quot; and &quot;MPI_ERR_INTERN: internal error&quot;, if I use
</span><br>
<span class="quotelev1">&gt;   a heterogeneous environment. I would like to use the Java API.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2) I don't get the expected result, when I try to scatter an object
</span><br>
<span class="quotelev1">&gt;   in Java.
</span><br>
<span class="quotelev1">&gt;   <a href="https://svn.open-mpi.org/trac/ompi/ticket/3351">https://svn.open-mpi.org/trac/ompi/ticket/3351</a>
</span><br>
<p>Nothing has happened on these yet
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 3) I still get only a message that all nodes are already filled up
</span><br>
<span class="quotelev1">&gt;   when I use a &quot;rankfile&quot; and nothing else happens. I would like
</span><br>
<span class="quotelev1">&gt;   to use a rankfile. You filed a bug fix for it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>I believe rankfile was fixed, at least on the trunk - not sure if it was moved to 1.7. I assume that's the release you are talking about?
<br>
<p><span class="quotelev1">&gt; 4) I would like to have &quot;-cpus-per-proc&quot;, &quot;-npersocket&quot;, etc for
</span><br>
<span class="quotelev1">&gt;   every set of machines/applications and not globally for all
</span><br>
<span class="quotelev1">&gt;   machines/applications if I specify several colon-separated sets
</span><br>
<span class="quotelev1">&gt;   of machines or applications on the command line. You told me that
</span><br>
<span class="quotelev1">&gt;   it could be done.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 5) By the way, it seems that the option &quot;-cpus-per-proc&quot; isn't any
</span><br>
<span class="quotelev1">&gt;   longer supported in openmpi-1.7 and openmpi-1.9. How can I bind a
</span><br>
<span class="quotelev1">&gt;   multi-threaded process to more than one core in these versions?
</span><br>
<p>I'm afraid I haven't gotten around to working on cpus-per-proc, though I believe npersocket was fixed.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I can provide my small programs once more if you need them. Thank
</span><br>
<span class="quotelev1">&gt; you very much for any answer in advance.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Kind regards
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Siegmar
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20952.php">Blosch, Edwin L: "[OMPI users] Problems with shared libraries while launching jobs"</a>
<li><strong>Previous message:</strong> <a href="20950.php">Ralph Castain: "Re: [OMPI users] problem with data transfer in a heterogeneous environment"</a>
<li><strong>In reply to:</strong> <a href="20949.php">Siegmar Gross: "[OMPI users] questions to some open problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20961.php">Siegmar Gross: "Re: [OMPI users] questions to some open problems"</a>
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
