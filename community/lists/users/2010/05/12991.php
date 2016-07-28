<?
$subject_val = "Re: [OMPI users] Questions about binding processes";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 10 07:16:36 2010" -->
<!-- isoreceived="20100510111636" -->
<!-- sent="Mon, 10 May 2010 13:16:30 +0200" -->
<!-- isosent="20100510111630" -->
<!-- name="NGUYEN Laurent" -->
<!-- email="laurent.nguyen_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Questions about binding processes" -->
<!-- id="20100510131630.10716y5x6bbveeby_at_messagerie.si.c-s.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4BE7E2FF.7090507_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Questions about binding processes<br>
<strong>From:</strong> NGUYEN Laurent (<em>laurent.nguyen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-10 07:16:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12992.php">Dave Love: "[OMPI users] PGI problems"</a>
<li><strong>Previous message:</strong> <a href="12990.php">Shiqing Fan: "Re: [OMPI users] Fortran support on Windows Open-MPI"</a>
<li><strong>In reply to:</strong> <a href="12989.php">Terry Dontje: "Re: [OMPI users] Questions about binding processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12996.php">Terry Dontje: "Re: [OMPI users] Questions about binding processes"</a>
<li><strong>Reply:</strong> <a href="12996.php">Terry Dontje: "Re: [OMPI users] Questions about binding processes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ok, thank you for your answer. I think this rankfile feature is very  
<br>
interesting to run some jobs like MPMD jobs or hybrid jobs  
<br>
(multithreaded or GPU for examples).
<br>
<p>Regards,
<br>
<p><pre>
-- 
--
NGUYEN Laurent
HPC Engineer
CS:SI
email: laurent.nguyen_at_[hidden]
web: <a href="http://www.c-s.fr">http://www.c-s.fr</a>
CS:SI
22 avenue Galil&#233;e
92350  Le Plessis Robinson
Terry Dontje &lt;terry.dontje_at_[hidden]&gt; a &#233;crit&#160;:
&gt; NGUYEN Laurent wrote:
&gt;&gt; Hello,
&gt;&gt;
&gt;&gt; I'm trying to understand the difference between theses two options:
&gt;&gt;
&gt;&gt; &quot; --mca mpi_paffinity_alone 1 &quot;
&gt;&gt; and
&gt;&gt; &quot; --bind-to-core &quot;
&gt;&gt;
&gt;&gt; To me, it's the same thing (may be paffinity have maffinity in  
&gt;&gt; addition) but the purpose af theses options is to bind MPI process  
&gt;&gt; to processors. Which is the best to obtain performances?
&gt;&gt;
&gt; They are essentially the same thing.  The history is that  
&gt; mpi_paffinity_alone came first.  Then a group of us decided that we  
&gt; wanted to be able to do more than just core binding (like  
&gt; bind-to-socket and eventually others) so we decided a more  
&gt; descriptive name made sense.  I would suggest sticking with  
&gt; --bind-to-core just so thinks look clear in your mpirun command.   
&gt; That and the possibility that one day mpi_paffinity_alone is  
&gt; deprecated.
&gt;&gt; I have another question about processes bindings: I use rankfiles  
&gt;&gt; to have a precise binding of my process on processor or socket (it  
&gt;&gt; useful for hybrid computing like pthread or OpenMP). I read you  
&gt;&gt; don't want to maintain this feature: how can I substitute it?
&gt; IMO, I say we do support it and will until we find a suitable  
&gt; replacement (there is a proposal that Jeff and I have bounced around  
&gt; to each other intermittently but have not brought it to the  
&gt; community).   There have been discussion about lack of testing of  
&gt; rankfiles and other binding related items making it hard for some to  
&gt; feel comfortable about putting code back that may have side negative  
&gt; side affects.  But I don't equate that to mean we will not support  
&gt; or take bug reports on the rankfile feature.
&gt;
&gt; -- 
&gt; Oracle
&gt; Terry D. Dontje | Principal Software Engineer
&gt; Developer Tools Engineering | +1.650.633.7054
&gt; Oracle * - Performance Technologies*
&gt; 95 Network Drive, Burlington, MA 01803
&gt; Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
&gt;
&gt;
----------------------------------------------------------------
This message was sent using IMP, the Internet Messaging Program.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12992.php">Dave Love: "[OMPI users] PGI problems"</a>
<li><strong>Previous message:</strong> <a href="12990.php">Shiqing Fan: "Re: [OMPI users] Fortran support on Windows Open-MPI"</a>
<li><strong>In reply to:</strong> <a href="12989.php">Terry Dontje: "Re: [OMPI users] Questions about binding processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12996.php">Terry Dontje: "Re: [OMPI users] Questions about binding processes"</a>
<li><strong>Reply:</strong> <a href="12996.php">Terry Dontje: "Re: [OMPI users] Questions about binding processes"</a>
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
