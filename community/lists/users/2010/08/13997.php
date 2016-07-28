<?
$subject_val = "Re: [OMPI users] OpenMPI Run-Time &quot;Freedom&quot; Question";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 12 20:49:00 2010" -->
<!-- isoreceived="20100813004900" -->
<!-- sent="Thu, 12 Aug 2010 19:48:53 -0500" -->
<!-- isosent="20100813004853" -->
<!-- name="Michael E. Thomadakis" -->
<!-- email="miket7777_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI Run-Time &amp;quot;Freedom&amp;quot; Question" -->
<!-- id="4C649675.1060409_at_gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="63FF222C-CBBC-4A1C-8CC5-9A3CB35D475C_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI Run-Time &quot;Freedom&quot; Question<br>
<strong>From:</strong> Michael E. Thomadakis (<em>miket7777_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-12 20:48:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13998.php">Michael E. Thomadakis: "Re: [OMPI users] OpenMPI Run-Time &quot;Freedom&quot; Question"</a>
<li><strong>Previous message:</strong> <a href="13996.php">Tim Prince: "Re: [OMPI users] OpenMPI Run-Time &quot;Freedom&quot; Question"</a>
<li><strong>In reply to:</strong> <a href="13995.php">Ralph Castain: "Re: [OMPI users] OpenMPI Run-Time &quot;Freedom&quot; Question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13937.php">Richard Treumann: "Re: [OMPI users] MPI_Bcast issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;&nbsp;On 08/12/10 17:27, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Ick - talk about confusing! I suppose there must be -some- rational 
</span><br>
<span class="quotelev1">&gt; reason why someone would want to do this, but I can't imagine what it 
</span><br>
<span class="quotelev1">&gt; would be....
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm no expert on compiler vs lib confusion, but some of my own 
</span><br>
<span class="quotelev1">&gt; experience would say that this is a bad idea regardless of whether or 
</span><br>
<span class="quotelev1">&gt; not OMPI is involved. Compiler version interoperability is usually 
</span><br>
<span class="quotelev1">&gt; questionable, depending upon how far apart the rev levels are.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Only answer I can offer is that you would have to try it. It will 
</span><br>
<span class="quotelev1">&gt; undoubtedly be a case-by-case basis: some combinations might work, 
</span><br>
<span class="quotelev1">&gt; others might fail.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 12, 2010, at 3:53 PM, Michael E. Thomadakis wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Hi Ralph, I believe the clean and rational solution when an MPI 
<br>
Application needs a specific combination of OMPI and Intel Compilers is 
<br>
to just build this OMPI against that compiler version statically or 
<br>
dynamically so the application can just use it. I feel that the OMPI 
<br>
libs + run-time is intimate part of the run-time of the application. 
<br>
What people think they can do is to build only ONCE against the same 
<br>
OMPI but freely swap in and out any Intel library run-time w/o worries 
<br>
and without REBUILDING the application. Nothing in life is free though.
<br>
Thanks for the reply ....
<br>
<p><p>Michael
<br>
<p><p><span class="quotelev2">&gt;&gt; Hello OpenMPI,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; we have deployed OpenMPI 1.4.1 and 1.4.2 on our Intel Nehalem cluster 
</span><br>
<span class="quotelev2">&gt;&gt; using Intel compilers V 11.1.059 and 11.1.072 respectively, and one 
</span><br>
<span class="quotelev2">&gt;&gt; user has the following request:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can we build OpenMPI version say O.1 against Intel compilers version 
</span><br>
<span class="quotelev2">&gt;&gt; say I.1 but  then built an application with OpenMPI O.1 BUT then use 
</span><br>
<span class="quotelev2">&gt;&gt; a DIFFERENT Intel compiler version say I.2 to built and run this MPI 
</span><br>
<span class="quotelev2">&gt;&gt; application?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I suggested to him to 1) simply try to built and run the application 
</span><br>
<span class="quotelev2">&gt;&gt; with O.1 but use Intel compilers version I.X whatever this X is and 
</span><br>
<span class="quotelev2">&gt;&gt; see if it has any issues.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OR 2) If the above does not work, I would build OpenMPI O.1 against 
</span><br>
<span class="quotelev2">&gt;&gt; Intel version I.X so he can use THIS combination for his hypothetical 
</span><br>
<span class="quotelev2">&gt;&gt; application.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; He insists that I build OpenMPI O.1 with some version of Intel 
</span><br>
<span class="quotelev2">&gt;&gt; compilers I.Y but then at run time he would like to use *different* 
</span><br>
<span class="quotelev2">&gt;&gt; Intel run time libs at will I.Z &lt;&gt; I.X.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can you provide me with a suggestion for a sane solution to this ? :-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Best regards
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Michael
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13997/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13998.php">Michael E. Thomadakis: "Re: [OMPI users] OpenMPI Run-Time &quot;Freedom&quot; Question"</a>
<li><strong>Previous message:</strong> <a href="13996.php">Tim Prince: "Re: [OMPI users] OpenMPI Run-Time &quot;Freedom&quot; Question"</a>
<li><strong>In reply to:</strong> <a href="13995.php">Ralph Castain: "Re: [OMPI users] OpenMPI Run-Time &quot;Freedom&quot; Question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13937.php">Richard Treumann: "Re: [OMPI users] MPI_Bcast issue"</a>
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
