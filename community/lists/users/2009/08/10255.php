<?
$subject_val = "Re: [OMPI users] Automated tuning tool";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug  7 17:06:24 2009" -->
<!-- isoreceived="20090807210624" -->
<!-- sent="Fri, 07 Aug 2009 14:06:11 -0700" -->
<!-- isosent="20090807210611" -->
<!-- name="john casu" -->
<!-- email="john_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Automated tuning tool" -->
<!-- id="4A7C9743.3050606_at_chiraldynamics.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="4A7C914B.5080508_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Automated tuning tool<br>
<strong>From:</strong> john casu (<em>john_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-07 17:06:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10256.php">Michael Di Domenico: "[OMPI users] x4100 with IB"</a>
<li><strong>Previous message:</strong> <a href="10254.php">Gus Correa: "Re: [OMPI users] Automated tuning tool"</a>
<li><strong>In reply to:</strong> <a href="10254.php">Gus Correa: "Re: [OMPI users] Automated tuning tool"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10257.php">Edgar Gabriel: "Re: [OMPI users] Automated tuning tool"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm not sure that there is a general &quot;best set&quot; of parameters, given the 
<br>
dependence of that set on comms patterns, etc...
<br>
<p>Still, this *is* a classic parameter sweep and optimization problem 
<br>
(unlike ATLAS), with a small number of parameters, and is the sort of 
<br>
thing one should be able to hook up fairly easily in a python script 
<br>
connected to a batch scheduler. Especially since you'd be likely to 
<br>
submit and run either a single job, or a number of equal sized jobs in 
<br>
parallel.
<br>
<p>In fact, here is a python script that works with SGE
<br>
<a href="http://www.cs.umass.edu/~swarm/index.php?n=Sge.Py">http://www.cs.umass.edu/~swarm/index.php?n=Sge.Py</a>
<br>
<p>Now, you'd just have to choose the app, or apps that are important to you
<br>
<p><p>Gus Correa wrote:
<br>
<span class="quotelev1">&gt; Terry Frankcombe wrote:
</span><br>
<span class="quotelev2">&gt;&gt; There's been quite some discussion here lately about the effect of OMPI
</span><br>
<span class="quotelev2">&gt;&gt; tuning parameters, particularly w.r.t. collectives.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is there some tool to probe performance on any given network/collection
</span><br>
<span class="quotelev2">&gt;&gt; of nodes to aid optimisation of these parameters?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (I'm thinking something along the philosophy of ATLAS.)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Terry
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We are also looking for this holy grail.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So far I found this 2008 reference to a certain
</span><br>
<span class="quotelev1">&gt; &quot;Open Tool for Parameter Optimization (OTPO)&quot;:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.springerlink.com/content/h5162153l184r7p0/">http://www.springerlink.com/content/h5162153l184r7p0/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; OTPO defines itself as this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;OTPO systematically tests large numbers of combinations of Open MPI&#226;&#128;&#153;s 
</span><br>
<span class="quotelev1">&gt; run-time tunable parameters for common communication patterns and 
</span><br>
<span class="quotelev1">&gt; performance metrics to determine the &#226;&#128;&#156;best&#226;&#128;&#157; set for a given platform.&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, I couldn't find any reference to the actual code or scripts,
</span><br>
<span class="quotelev1">&gt; and whether it is available, tested, free, downloadable, etc.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; At this point I am doing these performance
</span><br>
<span class="quotelev1">&gt; tests in a laborious and inefficient manual way,
</span><br>
<span class="quotelev1">&gt; when I have the time to do it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As some of the aforementioned article authors
</span><br>
<span class="quotelev1">&gt; are list subscribers (and OpenMPI developers),
</span><br>
<span class="quotelev1">&gt; maybe they can shed some light about OTPO, tuned collective 
</span><br>
<span class="quotelev1">&gt; optimization, OpenMPI runtime parameter optimization, etc.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; IMHO, this topic deserves at least a FAQ.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Developers, Jeff:  Any suggestions?  :)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Many thanks,
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Gustavo Correa
</span><br>
<span class="quotelev1">&gt; Lamont-Doherty Earth Observatory - Columbia University
</span><br>
<span class="quotelev1">&gt; Palisades, NY, 10964-8000 - USA
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------
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
<p><p><pre>
-- 
John Casu,
Chiral Dynamics, Inc
15525 Upper Ellen Road, Los Gatos, CA 95033.
Phone:  (831) 840 0142
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10256.php">Michael Di Domenico: "[OMPI users] x4100 with IB"</a>
<li><strong>Previous message:</strong> <a href="10254.php">Gus Correa: "Re: [OMPI users] Automated tuning tool"</a>
<li><strong>In reply to:</strong> <a href="10254.php">Gus Correa: "Re: [OMPI users] Automated tuning tool"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10257.php">Edgar Gabriel: "Re: [OMPI users] Automated tuning tool"</a>
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
