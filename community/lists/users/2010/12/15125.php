<?
$subject_val = "Re: [OMPI users] curious behavior during wait for broadcast: 100% cpu";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 14 11:51:04 2010" -->
<!-- isoreceived="20101214165104" -->
<!-- sent="Tue, 14 Dec 2010 08:50:07 -0800" -->
<!-- isosent="20101214165007" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] curious behavior during wait for broadcast: 100% cpu" -->
<!-- id="4D07A03F.60509_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="E1PSBgB-0006tP-Si_at_mendel.bio.caltech.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] curious behavior during wait for broadcast: 100% cpu<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-14 11:50:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15126.php">David Mathog: "Re: [OMPI users] MPI_Bcast vs. per worker MPI_Send?"</a>
<li><strong>Previous message:</strong> <a href="15124.php">Lydia Heck: "[OMPI users] jobs with more that 2, 500 processes will not even start"</a>
<li><strong>In reply to:</strong> <a href="15109.php">David Mathog: "Re: [OMPI users] curious behavior during wait for broadcast: 100%	cpu"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15042.php">Eugene Loh: "Re: [OMPI users] curious behavior during wait for broadcast: 100% cpu"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
David Mathog wrote:
<br>
<p><span class="quotelev1">&gt; Is there a tool in openmpi that will reveal how much &quot;spin time&quot; the 
</span><br>
<span class="quotelev1">&gt; processes are using?
</span><br>
<p>I don't know what sort of answer is helpful for you, but I'll describe 
<br>
one option.
<br>
<p>With Oracle Message Passing Toolkit (formerly Sun ClusterTools, anyhow, 
<br>
an OMPI distribution from Oracle/Sun) and Oracle Solaris Studio 
<br>
Performance Analyzer (formerly Sun Studio Performance Analyzer) you can 
<br>
see how much time is spent in MPI work, MPI wait, and so on.  
<br>
Specifically, by process, you could see (I'm making an example up) that 
<br>
process 2 spent:
<br>
* 35% of its time in application-level computation
<br>
* 5% of its time in MPI moving data
<br>
* 60% of its time in MPI waiting
<br>
but process 7 spent:
<br>
* 90% of its time in application-level computation
<br>
* 5% of its time in MPI moving data
<br>
* only 5% of its time in MPI waiting
<br>
That is, beyond the usual profiling support you might find in other 
<br>
tools, with Performance Analyzer you can distinguish time spent in MPI 
<br>
moving data from time spent in MPI waiting.
<br>
<p>On the other hand, you perhaps don't need that much detail.  For your 
<br>
purposes, it may suffice just to know how much time each process is 
<br>
spending in MPI.  There are various profiling tools that will give you 
<br>
that.  See <a href="http://www.open-mpi.org/faq/?category=perftools">http://www.open-mpi.org/faq/?category=perftools</a>  Load 
<br>
balancing is a common problem people investigate with such tools.
<br>
<p>Finally, if you want to stick to tools like top, maybe another 
<br>
alternative is to get your application to go into sleep waits.  I can't 
<br>
say this is the best choice, but it could be fun/interesting.  Let's say 
<br>
your application only calls a handful of different MPI functions.  Write 
<br>
PMPI wrappers for them that convert blocking functions 
<br>
(MPI_Send/MPI_Recv) to non-blocking ones mixed with short sleep calls.  
<br>
Not pretty, but might just be doable for your case.  I don't know.  
<br>
Anyhow, that might make MPI wait time detectable with tools like top.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15126.php">David Mathog: "Re: [OMPI users] MPI_Bcast vs. per worker MPI_Send?"</a>
<li><strong>Previous message:</strong> <a href="15124.php">Lydia Heck: "[OMPI users] jobs with more that 2, 500 processes will not even start"</a>
<li><strong>In reply to:</strong> <a href="15109.php">David Mathog: "Re: [OMPI users] curious behavior during wait for broadcast: 100%	cpu"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15042.php">Eugene Loh: "Re: [OMPI users] curious behavior during wait for broadcast: 100% cpu"</a>
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
