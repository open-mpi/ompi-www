<?
$subject_val = "Re: [OMPI devel] System V Shared Memory forOpenMPI:Request	forCommunity Input and Testing";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 10 15:46:56 2010" -->
<!-- isoreceived="20100510194656" -->
<!-- sent="Mon, 10 May 2010 13:46:51 -0600" -->
<!-- isosent="20100510194651" -->
<!-- name="Samuel K. Gutierrez" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] System V Shared Memory forOpenMPI:Request	forCommunity Input and Testing" -->
<!-- id="1711A1DB-9253-4B7B-9731-E2CA16A6188F_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="437EFDE3-8F1B-447C-8CEE-8578C26954C8_at_lanl.gov" -->
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
<strong>Date:</strong> 2010-05-10 15:46:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7909.php">Kevin.Buckley_at_[hidden]: "[OMPI devel] The&quot; Missing Symbol&quot; issue and OpenMPI on NetBSD"</a>
<li><strong>Previous message:</strong> <a href="7907.php">Eugene Loh: "Re: [OMPI devel] Thread safety levels"</a>
<li><strong>In reply to:</strong> <a href="7895.php">Samuel K. Gutierrez: "Re: [OMPI devel] System V Shared Memory forOpenMPI:Request	forCommunity Input and Testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7894.php">Christopher Samuel: "Re: [OMPI devel] System V Shared Memory for	OpenMPI:Request	forCommunity Input and Testing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>A new run-time test for System V shared memory support has been added  
<br>
- hopefully addressing all of the concerns voiced earlier in this  
<br>
thread.  If not, please let me know.  I've tested the changes on  
<br>
various Linux systems, OS X, and Solaris 10.
<br>
<p>Testing is always appreciated!
<br>
<p><a href="http://bitbucket.org/samuelkgutierrez/ompi_sysv_sm">http://bitbucket.org/samuelkgutierrez/ompi_sysv_sm</a>
<br>
<p>Thanks,
<br>
<p><pre>
--
Samuel K. Gutierrez
Los Alamos National Laboratory
On May 5, 2010, at 7:53 AM, Samuel K. Gutierrez wrote:
&gt; On May 5, 2010, at 6:10 AM, Jeff Squyres wrote:
&gt;
&gt;&gt; On May 4, 2010, at 9:53 AM, Ashley Pittman wrote:
&gt;&gt;
&gt;&gt;&gt;&gt; Point noted.  But actually -- can you give specific reasons as to  
&gt;&gt;&gt;&gt; why a user should care?  Keep in mind that this would be a short- 
&gt;&gt;&gt;&gt; lived fork'ed process -- not &quot;spawn&quot; in the MPI sense of the word.
&gt;&gt;&gt;
&gt;&gt;&gt; You might be running the job under Valgrind or another debugger,  
&gt;&gt;&gt; bclr has some issues with fork as I remember and traditionally  
&gt;&gt;&gt; there have been IB mapping issues here as well.  I'm sure you  
&gt;&gt;&gt; could make a case against any of those points if you wanted to but  
&gt;&gt;&gt; I think the argument stands, doing this kind of run-time check  
&gt;&gt;&gt; shouldn't be needed.
&gt;&gt;
&gt;&gt; Mmm; good points (especially Valgrind).  BLCR and OpenFabrics verbs  
&gt;&gt; shouldn't be much of an issue here, but I can see that there might  
&gt;&gt; be unexpectedness if you're running under Valgrind or some other  
&gt;&gt; debugger.
&gt;&gt;
&gt;&gt;&gt; It might be possible to construct the code however so that if it  
&gt;&gt;&gt; failed to initialise it just wasn't used rather than aborted the  
&gt;&gt;&gt; job which would have much the same effect as a run-time test but  
&gt;&gt;&gt; without having to fork new processes and create short-lived shared  
&gt;&gt;&gt; memory regions.
&gt;&gt;
&gt;&gt; That's how most of the network transports are in OMPI today -- if  
&gt;&gt; they fail to init, they are just skipped.
&gt;&gt;
&gt;&gt; The problem here is that you really need 2 processes to do this  
&gt;&gt; test.  I suppose it could be done with local ranks 0 and 1 instead  
&gt;&gt; of forking a new process -- they would just need to communicate via  
&gt;&gt; RML to sync up, I suppose.
&gt;
&gt; I need to think about it a little more, but I like this solution.
&gt;
&gt; Thanks,
&gt;
&gt; --
&gt; Samuel K. Gutierrez
&gt; Los Alamos National Laboratory
&gt;
&gt;&gt;
&gt;&gt;&gt; I should of course said fork where I mentioned spawn above to  
&gt;&gt;&gt; avoid any confusion, spawn has a specific meaning in the context  
&gt;&gt;&gt; of MPI.
&gt;&gt;&gt;
&gt;&gt;&gt; I still think a better understanding of the issue is required  
&gt;&gt;&gt; before any decision here is made though, I'm surprised by Samuels  
&gt;&gt;&gt; description of the problem because it's not how I remember it and  
&gt;&gt;&gt; from what Chris says it doesn't reflect what is in linux Git code  
&gt;&gt;&gt; either.  I'd like to see why there is an apparent difference in  
&gt;&gt;&gt; behaviour before a decision is made to only support one.
&gt;&gt;
&gt;&gt; There's no intent to only support sysv or mmap.  Samuel's work was  
&gt;&gt; to extend OMPI to support sysv in the case where it would be  
&gt;&gt; advantageous (e.g., guaranteed cleanup of the shmem segment).  The  
&gt;&gt; mmap stuff is definitely not going to be removed.
&gt;&gt;
&gt;&gt; -- 
&gt;&gt; Jeff Squyres
&gt;&gt; jsquyres_at_[hidden]
&gt;&gt; For corporate legal information go to:
&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
&gt;&gt;
&gt;&gt;
&gt;&gt; _______________________________________________
&gt;&gt; devel mailing list
&gt;&gt; devel_at_[hidden]
&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="7909.php">Kevin.Buckley_at_[hidden]: "[OMPI devel] The&quot; Missing Symbol&quot; issue and OpenMPI on NetBSD"</a>
<li><strong>Previous message:</strong> <a href="7907.php">Eugene Loh: "Re: [OMPI devel] Thread safety levels"</a>
<li><strong>In reply to:</strong> <a href="7895.php">Samuel K. Gutierrez: "Re: [OMPI devel] System V Shared Memory forOpenMPI:Request	forCommunity Input and Testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7894.php">Christopher Samuel: "Re: [OMPI devel] System V Shared Memory for	OpenMPI:Request	forCommunity Input and Testing"</a>
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
