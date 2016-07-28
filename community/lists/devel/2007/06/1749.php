<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jun 22 10:02:03 2007" -->
<!-- isoreceived="20070622140203" -->
<!-- sent="Fri, 22 Jun 2007 10:00:17 -0400" -->
<!-- isosent="20070622140017" -->
<!-- name="Pak Lui" -->
<!-- email="Pak.Lui_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] (loose) SGE Integration fails, why?" -->
<!-- id="467BD5F1.1070401_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="9776CF7A-E22D-4FB7-8078-E922372D23D0_at_cisco.com" -->
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
<strong>From:</strong> Pak Lui (<em>Pak.Lui_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-22 10:00:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1750.php">sadfub_at_[hidden]: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<li><strong>Previous message:</strong> <a href="1748.php">sadfub_at_[hidden]: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<li><strong>In reply to:</strong> <a href="1746.php">Jeff Squyres: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1750.php">sadfub_at_[hidden]: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<li><strong>Reply:</strong> <a href="1750.php">sadfub_at_[hidden]: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev3">&gt;&gt;&gt; 2. I know little/nothing about SGE, but I'm assuming that you need to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; have SGE pass the proper memory lock limits to new processes.  In an
</span><br>
<span class="quotelev3">&gt;&gt;&gt; interactive login, you showed that the max limit is &quot;8162952&quot; -- you
</span><br>
<span class="quotelev3">&gt;&gt;&gt; might just want to make it unlimited, unless you have a reason for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; limiting it.  See <a href="http://www.open-mpi.org/faq/">http://www.open-mpi.org/faq/</a>?
</span><br>
<span class="quotelev2">&gt;&gt; yes I allready read the faq, and even setting them to unlimited has
</span><br>
<span class="quotelev2">&gt;&gt; shown not be working. In the SGE one could specify the limits to
</span><br>
<span class="quotelev2">&gt;&gt; SGE-jobs by e.g. the qmon tool, (configuring queues &gt; select queue &gt;
</span><br>
<span class="quotelev2">&gt;&gt; modify &gt; limits) But there is everything set to infinity. (Beside  
</span><br>
<span class="quotelev2">&gt;&gt; that,
</span><br>
<span class="quotelev2">&gt;&gt; the job is running with a static machinefile (is this an
</span><br>
<span class="quotelev2">&gt;&gt; &quot;noninteractive&quot; job?)) How could I test ulimits of interactive and
</span><br>
<span class="quotelev2">&gt;&gt; noninteractive jobs?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Launch an SGE job that calls the shell command &quot;limit&quot; (if you run C- 
</span><br>
<span class="quotelev1">&gt; shell variants) or &quot;ulimit -l&quot; (if you run Bourne shell variants).   
</span><br>
<span class="quotelev1">&gt; Ensure that the output is &quot;unlimited&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What are the limits of the user that launches the SGE daemons?  I.e.,  
</span><br>
<span class="quotelev1">&gt; did the SGE daemons get started with proper &quot;unlimited&quot; limits?  If  
</span><br>
<span class="quotelev1">&gt; not, that could hamper SGE's ability to set the limits that you told  
</span><br>
<span class="quotelev1">&gt; it to via qmon (remember my disclaimer: I know nothing about SGE, so  
</span><br>
<span class="quotelev1">&gt; this is speculation).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>I am assuming you have tried without using SGE (like via ssh or others) 
<br>
to launch your job and that works correctly? If yes then you should 
<br>
compare the outputs of limit as Jeff suggested to see if they are any 
<br>
difference between the two (with and without using SGE).
<br>
<p>I know of a similar problem with SGE's limitation that it cannot set the 
<br>
file descriptor limit for the user processes (and I believe the SGE 
<br>
folks are aware of the problem.) The workaround was to put the setting 
<br>
into the ~/.tcshrc. So if SGE is not setting other resource limit 
<br>
correctly or doesn't provide the option, you may have to workaround into 
<br>
the ~/.tcshrc or simliar settings file for your shell. Otherwise it'll 
<br>
probably fall back to use the system default.
<br>
<p><pre>
-- 
- Pak Lui
pak.lui_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1750.php">sadfub_at_[hidden]: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<li><strong>Previous message:</strong> <a href="1748.php">sadfub_at_[hidden]: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<li><strong>In reply to:</strong> <a href="1746.php">Jeff Squyres: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1750.php">sadfub_at_[hidden]: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<li><strong>Reply:</strong> <a href="1750.php">sadfub_at_[hidden]: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
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
