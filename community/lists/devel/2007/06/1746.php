<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jun 22 06:21:22 2007" -->
<!-- isoreceived="20070622102122" -->
<!-- sent="Fri, 22 Jun 2007 06:21:01 -0400" -->
<!-- isosent="20070622102101" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] (loose) SGE Integration fails, why?" -->
<!-- id="9776CF7A-E22D-4FB7-8078-E922372D23D0_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="467B7FB5.4040901_at_gmx.net" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-22 06:21:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1747.php">Markus Daene: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<li><strong>Previous message:</strong> <a href="1745.php">Pablo Casc&#195;&#179;n Katchadourian: "Re: [OMPI devel] create new btl"</a>
<li><strong>In reply to:</strong> <a href="1742.php">sadfub_at_[hidden]: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1749.php">Pak Lui: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<li><strong>Reply:</strong> <a href="1749.php">Pak Lui: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<li><strong>Reply:</strong> <a href="1751.php">sadfub_at_[hidden]: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 22, 2007, at 3:52 AM, sadfub_at_[hidden] wrote:
<br>
<p><span class="quotelev2">&gt;&gt; 1. You might want to update your version of Open MPI if possible; the
</span><br>
<span class="quotelev2">&gt;&gt; v1.1.1 version is quite old.  We have added many new bug fixes and
</span><br>
<span class="quotelev2">&gt;&gt; features since v1.1.1 (including tight SGE integration).  There is
</span><br>
<span class="quotelev2">&gt;&gt; nothing special about the Open MPI that is included in the OFED
</span><br>
<span class="quotelev2">&gt;&gt; distribution; you can download a new version from the Open MPI web
</span><br>
<span class="quotelev2">&gt;&gt; site (the current stable version is v1.2.3), configure, compile, and
</span><br>
<span class="quotelev2">&gt;&gt; install it with your current OFED installation.  You should be able
</span><br>
<span class="quotelev2">&gt;&gt; to configure Open MPI with:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hmm, I've heard about conflicts with OMPI 1.2.x and OFED 1.1 (sorry no
</span><br>
<span class="quotelev1">&gt; refference here),
</span><br>
<p>I'm unaware of any problems with OMPI 1.2.x and OFED 1.1.  I run OFED  
<br>
1.1 on my cluster at Cisco and have many different versions of OMPI  
<br>
installed (1.2, trunk, etc.).
<br>
<p><span class="quotelev1">&gt; and I've got no luck producing a working OMPI
</span><br>
<span class="quotelev1">&gt; installation (&quot;mpirun --help&quot; runs, and ./IMB-MPI compiles and runs  
</span><br>
<span class="quotelev1">&gt; too,
</span><br>
<span class="quotelev1">&gt; but &quot;mpirun -np 2 node03,node14 IMB-MPI1&quot; doesnt (segmentation
</span><br>
<span class="quotelev1">&gt; fault))...
</span><br>
<p>Can you send more information on this?  See <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a> 
<br>
community/help/
<br>
<p><span class="quotelev1">&gt; (beside that, I know that OFED 1.1 is quite old too) So I'm
</span><br>
<span class="quotelev1">&gt; tested it with OMPI 1.1.5 =&gt; same error.
</span><br>
<p>*IF* all goes well, OFED 1.2 should be released today (famous last  
<br>
words).
<br>
<p><span class="quotelev2">&gt;&gt; 2. I know little/nothing about SGE, but I'm assuming that you need to
</span><br>
<span class="quotelev2">&gt;&gt; have SGE pass the proper memory lock limits to new processes.  In an
</span><br>
<span class="quotelev2">&gt;&gt; interactive login, you showed that the max limit is &quot;8162952&quot; -- you
</span><br>
<span class="quotelev2">&gt;&gt; might just want to make it unlimited, unless you have a reason for
</span><br>
<span class="quotelev2">&gt;&gt; limiting it.  See <a href="http://www.open-mpi.org/faq/">http://www.open-mpi.org/faq/</a>?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; yes I allready read the faq, and even setting them to unlimited has
</span><br>
<span class="quotelev1">&gt; shown not be working. In the SGE one could specify the limits to
</span><br>
<span class="quotelev1">&gt; SGE-jobs by e.g. the qmon tool, (configuring queues &gt; select queue &gt;
</span><br>
<span class="quotelev1">&gt; modify &gt; limits) But there is everything set to infinity. (Beside  
</span><br>
<span class="quotelev1">&gt; that,
</span><br>
<span class="quotelev1">&gt; the job is running with a static machinefile (is this an
</span><br>
<span class="quotelev1">&gt; &quot;noninteractive&quot; job?)) How could I test ulimits of interactive and
</span><br>
<span class="quotelev1">&gt; noninteractive jobs?
</span><br>
<p>Launch an SGE job that calls the shell command &quot;limit&quot; (if you run C- 
<br>
shell variants) or &quot;ulimit -l&quot; (if you run Bourne shell variants).   
<br>
Ensure that the output is &quot;unlimited&quot;.
<br>
<p>What are the limits of the user that launches the SGE daemons?  I.e.,  
<br>
did the SGE daemons get started with proper &quot;unlimited&quot; limits?  If  
<br>
not, that could hamper SGE's ability to set the limits that you told  
<br>
it to via qmon (remember my disclaimer: I know nothing about SGE, so  
<br>
this is speculation).
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1747.php">Markus Daene: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<li><strong>Previous message:</strong> <a href="1745.php">Pablo Casc&#195;&#179;n Katchadourian: "Re: [OMPI devel] create new btl"</a>
<li><strong>In reply to:</strong> <a href="1742.php">sadfub_at_[hidden]: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1749.php">Pak Lui: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<li><strong>Reply:</strong> <a href="1749.php">Pak Lui: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<li><strong>Reply:</strong> <a href="1751.php">sadfub_at_[hidden]: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
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
