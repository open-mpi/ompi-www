<?
$subject_val = "Re: [OMPI devel] System V Shared Memory forOpenMPI:Request	forCommunity Input and Testing";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  5 09:53:29 2010" -->
<!-- isoreceived="20100505135329" -->
<!-- sent="Wed, 5 May 2010 07:53:24 -0600" -->
<!-- isosent="20100505135324" -->
<!-- name="Samuel K. Gutierrez" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] System V Shared Memory forOpenMPI:Request	forCommunity Input and Testing" -->
<!-- id="437EFDE3-8F1B-447C-8CEE-8578C26954C8_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="48829BE3-66EB-403A-A96F-267D376DB779_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] System V Shared Memory forOpenMPI:Request	forCommunity Input and Testing<br>
<strong>From:</strong> Samuel K. Gutierrez (<em>samuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-05 09:53:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7896.php">Lisandro Dalcin: "[OMPI devel] malloc(0) warnings"</a>
<li><strong>Previous message:</strong> <a href="7894.php">Christopher Samuel: "Re: [OMPI devel] System V Shared Memory for	OpenMPI:Request	forCommunity Input and Testing"</a>
<li><strong>In reply to:</strong> <a href="7892.php">Jeff Squyres: "Re: [OMPI devel] System V Shared Memory forOpenMPI:Request	forCommunity Input and Testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7908.php">Samuel K. Gutierrez: "Re: [OMPI devel] System V Shared Memory forOpenMPI:Request	forCommunity Input and Testing"</a>
<li><strong>Reply:</strong> <a href="7908.php">Samuel K. Gutierrez: "Re: [OMPI devel] System V Shared Memory forOpenMPI:Request	forCommunity Input and Testing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 5, 2010, at 6:10 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On May 4, 2010, at 9:53 AM, Ashley Pittman wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Point noted.  But actually -- can you give specific reasons as to  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; why a user should care?  Keep in mind that this would be a short- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lived fork'ed process -- not &quot;spawn&quot; in the MPI sense of the word.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You might be running the job under Valgrind or another debugger,  
</span><br>
<span class="quotelev2">&gt;&gt; bclr has some issues with fork as I remember and traditionally  
</span><br>
<span class="quotelev2">&gt;&gt; there have been IB mapping issues here as well.  I'm sure you could  
</span><br>
<span class="quotelev2">&gt;&gt; make a case against any of those points if you wanted to but I  
</span><br>
<span class="quotelev2">&gt;&gt; think the argument stands, doing this kind of run-time check  
</span><br>
<span class="quotelev2">&gt;&gt; shouldn't be needed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Mmm; good points (especially Valgrind).  BLCR and OpenFabrics verbs  
</span><br>
<span class="quotelev1">&gt; shouldn't be much of an issue here, but I can see that there might  
</span><br>
<span class="quotelev1">&gt; be unexpectedness if you're running under Valgrind or some other  
</span><br>
<span class="quotelev1">&gt; debugger.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It might be possible to construct the code however so that if it  
</span><br>
<span class="quotelev2">&gt;&gt; failed to initialise it just wasn't used rather than aborted the  
</span><br>
<span class="quotelev2">&gt;&gt; job which would have much the same effect as a run-time test but  
</span><br>
<span class="quotelev2">&gt;&gt; without having to fork new processes and create short-lived shared  
</span><br>
<span class="quotelev2">&gt;&gt; memory regions.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That's how most of the network transports are in OMPI today -- if  
</span><br>
<span class="quotelev1">&gt; they fail to init, they are just skipped.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The problem here is that you really need 2 processes to do this  
</span><br>
<span class="quotelev1">&gt; test.  I suppose it could be done with local ranks 0 and 1 instead  
</span><br>
<span class="quotelev1">&gt; of forking a new process -- they would just need to communicate via  
</span><br>
<span class="quotelev1">&gt; RML to sync up, I suppose.
</span><br>
<p>I need to think about it a little more, but I like this solution.
<br>
<p>Thanks,
<br>
<p><pre>
--
Samuel K. Gutierrez
Los Alamos National Laboratory
&gt;
&gt;&gt; I should of course said fork where I mentioned spawn above to avoid  
&gt;&gt; any confusion, spawn has a specific meaning in the context of MPI.
&gt;&gt;
&gt;&gt; I still think a better understanding of the issue is required  
&gt;&gt; before any decision here is made though, I'm surprised by Samuels  
&gt;&gt; description of the problem because it's not how I remember it and  
&gt;&gt; from what Chris says it doesn't reflect what is in linux Git code  
&gt;&gt; either.  I'd like to see why there is an apparent difference in  
&gt;&gt; behaviour before a decision is made to only support one.
&gt;
&gt; There's no intent to only support sysv or mmap.  Samuel's work was  
&gt; to extend OMPI to support sysv in the case where it would be  
&gt; advantageous (e.g., guaranteed cleanup of the shmem segment).  The  
&gt; mmap stuff is definitely not going to be removed.
&gt;
&gt; -- 
&gt; Jeff Squyres
&gt; jsquyres_at_[hidden]
&gt; For corporate legal information go to:
&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
&gt;
&gt;
&gt; _______________________________________________
&gt; devel mailing list
&gt; devel_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7896.php">Lisandro Dalcin: "[OMPI devel] malloc(0) warnings"</a>
<li><strong>Previous message:</strong> <a href="7894.php">Christopher Samuel: "Re: [OMPI devel] System V Shared Memory for	OpenMPI:Request	forCommunity Input and Testing"</a>
<li><strong>In reply to:</strong> <a href="7892.php">Jeff Squyres: "Re: [OMPI devel] System V Shared Memory forOpenMPI:Request	forCommunity Input and Testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7908.php">Samuel K. Gutierrez: "Re: [OMPI devel] System V Shared Memory forOpenMPI:Request	forCommunity Input and Testing"</a>
<li><strong>Reply:</strong> <a href="7908.php">Samuel K. Gutierrez: "Re: [OMPI devel] System V Shared Memory forOpenMPI:Request	forCommunity Input and Testing"</a>
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
