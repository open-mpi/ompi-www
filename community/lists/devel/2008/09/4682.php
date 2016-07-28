<?
$subject_val = "Re: [OMPI devel] proper way to shut down orted";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 22 13:37:40 2008" -->
<!-- isoreceived="20080922173740" -->
<!-- sent="Mon, 22 Sep 2008 11:37:33 -0600" -->
<!-- isosent="20080922173733" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] proper way to shut down orted" -->
<!-- id="E64181FA-0BE0-48D1-920E-8828EA4AABB8_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="48D7C2EE.7020908_at_mines.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] proper way to shut down orted<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-22 13:37:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4683.php">Richard Graham: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r19600"</a>
<li><strong>Previous message:</strong> <a href="4681.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r19600"</a>
<li><strong>In reply to:</strong> <a href="4676.php">Timothy Kaiser: "[OMPI devel] proper way to shut down orted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4694.php">Timothy Kaiser: "Re: [OMPI devel] proper way to shut down orted"</a>
<li><strong>Reply:</strong> <a href="4694.php">Timothy Kaiser: "Re: [OMPI devel] proper way to shut down orted"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmmm...well, there -used- to be a tool that was distributed with the  
<br>
1.2 series for doing just that, but I don't see it in the 1.2.7  
<br>
release. Not sure when or how that got dropped - probably fell through  
<br>
a crack.
<br>
<p>Unfortunately, minus that tool, there is no clean way to shut this  
<br>
down. However, you can re-use the universe name if you simply go to  
<br>
your tmp directory, find the session directory for you, and just rm - 
<br>
rf the directory with that universe name.
<br>
<p>So you want to look for something like &quot;/tmp/openmpi-sessions- 
<br>
username_at_hostname_0/univ3&quot; per your example below, and blow the  
<br>
&quot;univ3&quot; directory tree away.
<br>
<p>Sorry it isn't simpler - trying to re-release with that tool is  
<br>
probably more trouble than it is worth now, especially given that the  
<br>
&quot;seed&quot; operation isn't used anymore beginning with the upcoming 1.3  
<br>
release.
<br>
<p>Ralph
<br>
<p>On Sep 22, 2008, at 10:08 AM, Timothy Kaiser wrote:
<br>
<p><span class="quotelev1">&gt; Greetings,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have a manager/worker application.  The
</span><br>
<span class="quotelev1">&gt; manager is called &quot;t2a&quot; and the workers &quot;w2d&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I launch the manager and each worker with
</span><br>
<span class="quotelev1">&gt; its own mpiexec with n=1.  They connect using
</span><br>
<span class="quotelev1">&gt; various calls including MPI_Open_port,
</span><br>
<span class="quotelev1">&gt; MPI_Comm_accept, MPI_Comm_connect and
</span><br>
<span class="quotelev1">&gt; MPI_Intercomm_merge.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It works fine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am using the command:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; orted --persistent --seed --scope public --universe univ3 --set-sid
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; to set up the universe and the mpiexec commands are:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpiexec -np 1 --universe univ3 t2a
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpiexec -np 1 --universe univ3 w2d
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpiexec -np 1 --universe univ3 w2d
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpiexec -np 1 --universe univ3 w2d
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Question:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What is the proper way to shutdown orted?
</span><br>
<span class="quotelev1">&gt; I have found that if I just kill orted then
</span><br>
<span class="quotelev1">&gt; I can't reuse the universe name.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Platforms and OpenMPI versions:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OS X  openmpi-1.2.7 or openmpi-1.2.6 (ethernet)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Rocks openmpi-1.2.6 (Infiniband)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tim
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Timothy H. Kaiser, Ph.D. tkaiser_at_[hidden]  CSM::GECO
</span><br>
<span class="quotelev1">&gt; &quot;Nobody made a greater mistake than he who did nothing
</span><br>
<span class="quotelev1">&gt; because he could only do a little&quot; (Edmund Burke)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4683.php">Richard Graham: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r19600"</a>
<li><strong>Previous message:</strong> <a href="4681.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r19600"</a>
<li><strong>In reply to:</strong> <a href="4676.php">Timothy Kaiser: "[OMPI devel] proper way to shut down orted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4694.php">Timothy Kaiser: "Re: [OMPI devel] proper way to shut down orted"</a>
<li><strong>Reply:</strong> <a href="4694.php">Timothy Kaiser: "Re: [OMPI devel] proper way to shut down orted"</a>
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
