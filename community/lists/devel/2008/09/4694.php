<?
$subject_val = "Re: [OMPI devel] proper way to shut down orted";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 23 12:36:10 2008" -->
<!-- isoreceived="20080923163610" -->
<!-- sent="Tue, 23 Sep 2008 10:36:06 -0600" -->
<!-- isosent="20080923163606" -->
<!-- name="Timothy Kaiser" -->
<!-- email="tkaiser_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] proper way to shut down orted" -->
<!-- id="48D91AF6.2090406_at_mines.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="E64181FA-0BE0-48D1-920E-8828EA4AABB8_at_lanl.gov" -->
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
<strong>From:</strong> Timothy Kaiser (<em>tkaiser_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-23 12:36:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4695.php">Jeff Squyres: "[OMPI devel] MPI F90"</a>
<li><strong>Previous message:</strong> <a href="4693.php">Lenny Verkhovsky: "[OMPI devel] #1506"</a>
<li><strong>In reply to:</strong> <a href="4682.php">Ralph Castain: "Re: [OMPI devel] proper way to shut down orted"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Rlaph,
<br>
<p>Thanks for the reply.  I should be able to build my own.
<br>
<p>Tim
<br>
<p>Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Hmmm...well, there -used- to be a tool that was distributed with the 
</span><br>
<span class="quotelev1">&gt; 1.2 series for doing just that, but I don't see it in the 1.2.7 
</span><br>
<span class="quotelev1">&gt; release. Not sure when or how that got dropped - probably fell through 
</span><br>
<span class="quotelev1">&gt; a crack.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Unfortunately, minus that tool, there is no clean way to shut this 
</span><br>
<span class="quotelev1">&gt; down. However, you can re-use the universe name if you simply go to 
</span><br>
<span class="quotelev1">&gt; your tmp directory, find the session directory for you, and just rm 
</span><br>
<span class="quotelev1">&gt; -rf the directory with that universe name.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So you want to look for something like 
</span><br>
<span class="quotelev1">&gt; &quot;/tmp/openmpi-sessions-username_at_hostname_0/univ3&quot; per your example 
</span><br>
<span class="quotelev1">&gt; below, and blow the &quot;univ3&quot; directory tree away.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry it isn't simpler - trying to re-release with that tool is 
</span><br>
<span class="quotelev1">&gt; probably more trouble than it is worth now, especially given that the 
</span><br>
<span class="quotelev1">&gt; &quot;seed&quot; operation isn't used anymore beginning with the upcoming 1.3 
</span><br>
<span class="quotelev1">&gt; release.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 22, 2008, at 10:08 AM, Timothy Kaiser wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Greetings,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have a manager/worker application.  The
</span><br>
<span class="quotelev2">&gt;&gt; manager is called &quot;t2a&quot; and the workers &quot;w2d&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I launch the manager and each worker with
</span><br>
<span class="quotelev2">&gt;&gt; its own mpiexec with n=1.  They connect using
</span><br>
<span class="quotelev2">&gt;&gt; various calls including MPI_Open_port,
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Comm_accept, MPI_Comm_connect and
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Intercomm_merge.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It works fine.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am using the command:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; orted --persistent --seed --scope public --universe univ3 --set-sid
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; to set up the universe and the mpiexec commands are:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpiexec -np 1 --universe univ3 t2a
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpiexec -np 1 --universe univ3 w2d
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpiexec -np 1 --universe univ3 w2d
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpiexec -np 1 --universe univ3 w2d
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Question:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What is the proper way to shutdown orted?
</span><br>
<span class="quotelev2">&gt;&gt; I have found that if I just kill orted then
</span><br>
<span class="quotelev2">&gt;&gt; I can't reuse the universe name.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Platforms and OpenMPI versions:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OS X  openmpi-1.2.7 or openmpi-1.2.6 (ethernet)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Rocks openmpi-1.2.6 (Infiniband)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Tim
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Timothy H. Kaiser, Ph.D. tkaiser_at_[hidden]  CSM::GECO
</span><br>
<span class="quotelev2">&gt;&gt; &quot;Nobody made a greater mistake than he who did nothing
</span><br>
<span class="quotelev2">&gt;&gt; because he could only do a little&quot; (Edmund Burke)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
------------------------------------------------------
Timothy H. Kaiser, Ph.D. tkaiser_at_[hidden]  CSM::GECO
&quot;Nobody made a greater mistake than he who did nothing
 because he could only do a little&quot; (Edmund Burke)
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4695.php">Jeff Squyres: "[OMPI devel] MPI F90"</a>
<li><strong>Previous message:</strong> <a href="4693.php">Lenny Verkhovsky: "[OMPI devel] #1506"</a>
<li><strong>In reply to:</strong> <a href="4682.php">Ralph Castain: "Re: [OMPI devel] proper way to shut down orted"</a>
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
