<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jun 22 03:52:12 2007" -->
<!-- isoreceived="20070622075212" -->
<!-- sent="Fri, 22 Jun 2007 09:52:21 +0200" -->
<!-- isosent="20070622075221" -->
<!-- name="sadfub_at_[hidden]" -->
<!-- email="sadfub_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] (loose) SGE Integration fails, why?" -->
<!-- id="467B7FB5.4040901_at_gmx.net" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C5289CDA-AD68-477C-84B4-EF517A5E4F33_at_cisco.com" -->
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
<strong>Date:</strong> 2007-06-22 03:52:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1743.php">Markus Daene: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<li><strong>Previous message:</strong> <a href="1741.php">George Bosilca: "Re: [OMPI devel] create new btl"</a>
<li><strong>In reply to:</strong> <a href="1738.php">Jeff Squyres: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1746.php">Jeff Squyres: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<li><strong>Reply:</strong> <a href="1746.php">Jeff Squyres: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, Jeff
<br>
<p>many thanks for your reply..
<br>
<p><span class="quotelev1">&gt; 1. You might want to update your version of Open MPI if possible; the  
</span><br>
<span class="quotelev1">&gt; v1.1.1 version is quite old.  We have added many new bug fixes and  
</span><br>
<span class="quotelev1">&gt; features since v1.1.1 (including tight SGE integration).  There is  
</span><br>
<span class="quotelev1">&gt; nothing special about the Open MPI that is included in the OFED  
</span><br>
<span class="quotelev1">&gt; distribution; you can download a new version from the Open MPI web  
</span><br>
<span class="quotelev1">&gt; site (the current stable version is v1.2.3), configure, compile, and  
</span><br>
<span class="quotelev1">&gt; install it with your current OFED installation.  You should be able  
</span><br>
<span class="quotelev1">&gt; to configure Open MPI with:
</span><br>
<p>Hmm, I've heard about conflicts with OMPI 1.2.x and OFED 1.1 (sorry no
<br>
refference here), and I've got no luck producing a working OMPI
<br>
installation (&quot;mpirun --help&quot; runs, and ./IMB-MPI compiles and runs too,
<br>
but &quot;mpirun -np 2 node03,node14 IMB-MPI1&quot; doesnt (segmentation
<br>
fault))... (beside that, I know that OFED 1.1 is quite old too) So I'm
<br>
tested it with OMPI 1.1.5 =&gt; same error.
<br>
<p><p><span class="quotelev1">&gt; 2. I know little/nothing about SGE, but I'm assuming that you need to  
</span><br>
<span class="quotelev1">&gt; have SGE pass the proper memory lock limits to new processes.  In an  
</span><br>
<span class="quotelev1">&gt; interactive login, you showed that the max limit is &quot;8162952&quot; -- you  
</span><br>
<span class="quotelev1">&gt; might just want to make it unlimited, unless you have a reason for  
</span><br>
<span class="quotelev1">&gt; limiting it.  See <a href="http://www.open-mpi.org/faq/">http://www.open-mpi.org/faq/</a>? 
</span><br>
<p>yes I allready read the faq, and even setting them to unlimited has
<br>
shown not be working. In the SGE one could specify the limits to
<br>
SGE-jobs by e.g. the qmon tool, (configuring queues &gt; select queue &gt;
<br>
modify &gt; limits) But there is everything set to infinity. (Beside that,
<br>
the job is running with a static machinefile (is this an
<br>
&quot;noninteractive&quot; job?)) How could I test ulimits of interactive and
<br>
noninteractive jobs?
<br>
<p>Thank you for your great help.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1743.php">Markus Daene: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<li><strong>Previous message:</strong> <a href="1741.php">George Bosilca: "Re: [OMPI devel] create new btl"</a>
<li><strong>In reply to:</strong> <a href="1738.php">Jeff Squyres: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1746.php">Jeff Squyres: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<li><strong>Reply:</strong> <a href="1746.php">Jeff Squyres: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
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
