<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jun 22 10:43:25 2007" -->
<!-- isoreceived="20070622144325" -->
<!-- sent="Fri, 22 Jun 2007 16:43:42 +0200" -->
<!-- isosent="20070622144342" -->
<!-- name="sadfub_at_[hidden]" -->
<!-- email="sadfub_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] (loose) SGE Integration fails, why?" -->
<!-- id="467BE01E.1070003_at_gmx.net" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="467BD5F1.1070401_at_sun.com" -->
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
<strong>From:</strong> <a href="mailto:sadfub_at_[hidden]?Subject=Re:%20[OMPI%20devel]%20(loose)%20SGE%20Integration%20fails,%20why?"><em>sadfub_at_[hidden]</em></a><br>
<strong>Date:</strong> 2007-06-22 10:43:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1751.php">sadfub_at_[hidden]: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<li><strong>Previous message:</strong> <a href="1749.php">Pak Lui: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<li><strong>In reply to:</strong> <a href="1749.php">Pak Lui: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1751.php">sadfub_at_[hidden]: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Pak,
<br>
<p><span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2. I know little/nothing about SGE, but I'm assuming that you need to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; have SGE pass the proper memory lock limits to new processes.  In an
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; interactive login, you showed that the max limit is &quot;8162952&quot; -- you
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; might just want to make it unlimited, unless you have a reason for
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; limiting it.  See <a href="http://www.open-mpi.org/faq/">http://www.open-mpi.org/faq/</a>?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; yes I allready read the faq, and even setting them to unlimited has
</span><br>
<span class="quotelev3">&gt;&gt;&gt; shown not be working. In the SGE one could specify the limits to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; SGE-jobs by e.g. the qmon tool, (configuring queues &gt; select queue &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; modify &gt; limits) But there is everything set to infinity. (Beside  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the job is running with a static machinefile (is this an
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;noninteractive&quot; job?)) How could I test ulimits of interactive and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; noninteractive jobs?
</span><br>
<span class="quotelev2">&gt;&gt; Launch an SGE job that calls the shell command &quot;limit&quot; (if you run C- 
</span><br>
<span class="quotelev2">&gt;&gt; shell variants) or &quot;ulimit -l&quot; (if you run Bourne shell variants).   
</span><br>
<span class="quotelev2">&gt;&gt; Ensure that the output is &quot;unlimited&quot;.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What are the limits of the user that launches the SGE daemons?  I.e.,  
</span><br>
<span class="quotelev2">&gt;&gt; did the SGE daemons get started with proper &quot;unlimited&quot; limits?  If  
</span><br>
<span class="quotelev2">&gt;&gt; not, that could hamper SGE's ability to set the limits that you told  
</span><br>
<span class="quotelev2">&gt;&gt; it to via qmon (remember my disclaimer: I know nothing about SGE, so  
</span><br>
<span class="quotelev2">&gt;&gt; this is speculation).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am assuming you have tried without using SGE (like via ssh or others) 
</span><br>
<span class="quotelev1">&gt; to launch your job and that works correctly? If yes then you should 
</span><br>
<span class="quotelev1">&gt; compare the outputs of limit as Jeff suggested to see if they are any 
</span><br>
<span class="quotelev1">&gt; difference between the two (with and without using SGE).
</span><br>
<p>Yes, without SGE all works, with SGE it does work too if I use a static
<br>
machinefile (see initial post), or -H h1,...,hn does work too! Just with
<br>
the SGE's generate $TMPDIR/machines file (which in turn is valid! I
<br>
checked this), the job doesn't run. And the ulimits are (in every three
<br>
possibilities every time) unlimited:
<br>
<p>pos1: pdsh -R shh -w node[XX-YY] ulimit -a =&gt; unlimited
<br>
<p>(loose coupled)
<br>
pos2: qsub jobscribt, where jobscript just calls the command as in pos1
<br>
<p>(thight coupled?)
<br>
pos3: qsub jobscribt, where jobscript calls another script (containing
<br>
the same command as in pos1) and additionally passing $TMPDIR/machines
<br>
as argument to it.
<br>
<p>Thanks for your help.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1751.php">sadfub_at_[hidden]: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<li><strong>Previous message:</strong> <a href="1749.php">Pak Lui: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<li><strong>In reply to:</strong> <a href="1749.php">Pak Lui: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1751.php">sadfub_at_[hidden]: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
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
