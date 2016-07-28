<?
$subject_val = "Re: [OMPI users] Automated tuning tool";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 11 16:45:17 2009" -->
<!-- isoreceived="20090811204517" -->
<!-- sent="Tue, 11 Aug 2009 16:45:08 -0400" -->
<!-- isosent="20090811204508" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Automated tuning tool" -->
<!-- id="4A81D854.60104_at_ldeo.columbia.edu" -->
<!-- charset="utf-8" -->
<!-- inreplyto="4A7CA2B7.3040907_at_cs.uh.edu" -->
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
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-11 16:45:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10310.php">Gus Correa: "Re: [OMPI users] Tuned collectives: How to choose them dynamically? (-mca coll_tuned_dynamic_rules_filename dyn_rules)&quot;"</a>
<li><strong>Previous message:</strong> <a href="10308.php">Jeff Squyres: "Re: [OMPI users] need help with a code segment"</a>
<li><strong>In reply to:</strong> <a href="10257.php">Edgar Gabriel: "Re: [OMPI users] Automated tuning tool"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10240.php">neeraj_at_[hidden]: "Re: [OMPI users] Performance question about OpenMPI and MVAPICH2 on	IB"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you, John Casu and Edgar Gabriel for the pointers
<br>
to the parameter space sweep script and the OTPO code.
<br>
<p>For simplicity,
<br>
I was thinking of testing each tuned collective separately,
<br>
instead of the applications, to have an idea
<br>
of which algorithms and parameters are best for our small cluster,
<br>
on a range of message and communicator sizes.
<br>
<p>We have several applications, different problem sizes,
<br>
different number of processes, etc,
<br>
and all use a bunch of different collectives, besides point-to-point.
<br>
<p>Gus Correa
<br>
<p>john casu wrote:
<br>
<span class="quotelev1"> &gt; I'm not sure that there is a general &quot;best set&quot; of parameters, given the
</span><br>
<span class="quotelev1"> &gt; dependence of that set on comms patterns, etc...
</span><br>
<span class="quotelev1"> &gt;
</span><br>
<span class="quotelev1"> &gt; Still, this *is* a classic parameter sweep and optimization problem
</span><br>
<span class="quotelev1"> &gt; (unlike ATLAS), with a small number of parameters, and is the sort of
</span><br>
<span class="quotelev1"> &gt; thing one should be able to hook up fairly easily in a python script
</span><br>
<span class="quotelev1"> &gt; connected to a batch scheduler. Especially since you'd be likely to
</span><br>
<span class="quotelev1"> &gt; submit and run either a single job, or a number of equal sized jobs in
</span><br>
<span class="quotelev1"> &gt; parallel.
</span><br>
<span class="quotelev1"> &gt;
</span><br>
<span class="quotelev1"> &gt; In fact, here is a python script that works with SGE
</span><br>
<span class="quotelev1"> &gt; <a href="http://www.cs.umass.edu/~swarm/index.php?n=Sge.Py">http://www.cs.umass.edu/~swarm/index.php?n=Sge.Py</a>
</span><br>
<span class="quotelev1"> &gt;
</span><br>
<span class="quotelev1"> &gt; Now, you'd just have to choose the app, or apps that are important to you
</span><br>
<span class="quotelev1"> &gt;
</span><br>
<span class="quotelev1"> &gt;
</span><br>
<p>Edgar Gabriel wrote:
<br>
<span class="quotelev1">&gt; Gus Correa wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Terry Frankcombe wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There's been quite some discussion here lately about the effect of OMPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tuning parameters, particularly w.r.t. collectives.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is there some tool to probe performance on any given network/collection
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of nodes to aid optimisation of these parameters?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (I'm thinking something along the philosophy of ATLAS.)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Terry
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We are also looking for this holy grail.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So far I found this 2008 reference to a certain
</span><br>
<span class="quotelev2">&gt;&gt; &quot;Open Tool for Parameter Optimization (OTPO)&quot;:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.springerlink.com/content/h5162153l184r7p0/">http://www.springerlink.com/content/h5162153l184r7p0/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OTPO defines itself as this:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &quot;OTPO systematically tests large numbers of combinations of Open MPI&#226;&#128;&#153;s 
</span><br>
<span class="quotelev2">&gt;&gt; run-time tunable parameters for common communication patterns and 
</span><br>
<span class="quotelev2">&gt;&gt; performance metrics to determine the &#226;&#128;&#156;best&#226;&#128;&#157; set for a given platform.&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; you can checkout the OTPO code at
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://svn.open-mpi.org/svn/otpo/trunk/">http://svn.open-mpi.org/svn/otpo/trunk/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It supports as of now netpipe and skampi collectives for tuning. It is 
</span><br>
<span class="quotelev1">&gt; far from perfect, but it is a starting point. If there are any issues,
</span><br>
<span class="quotelev1">&gt; please let us know...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Edgar
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; However, I couldn't find any reference to the actual code or scripts,
</span><br>
<span class="quotelev2">&gt;&gt; and whether it is available, tested, free, downloadable, etc.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; At this point I am doing these performance
</span><br>
<span class="quotelev2">&gt;&gt; tests in a laborious and inefficient manual way,
</span><br>
<span class="quotelev2">&gt;&gt; when I have the time to do it.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; As some of the aforementioned article authors
</span><br>
<span class="quotelev2">&gt;&gt; are list subscribers (and OpenMPI developers),
</span><br>
<span class="quotelev2">&gt;&gt; maybe they can shed some light about OTPO, tuned collective 
</span><br>
<span class="quotelev2">&gt;&gt; optimization, OpenMPI runtime parameter optimization, etc.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; IMHO, this topic deserves at least a FAQ.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Developers, Jeff:  Any suggestions?  :)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Many thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Gus Correa
</span><br>
<span class="quotelev2">&gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Gustavo Correa
</span><br>
<span class="quotelev2">&gt;&gt; Lamont-Doherty Earth Observatory - Columbia University
</span><br>
<span class="quotelev2">&gt;&gt; Palisades, NY, 10964-8000 - USA
</span><br>
<span class="quotelev2">&gt;&gt; ---------------------------------------------------------------------
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10310.php">Gus Correa: "Re: [OMPI users] Tuned collectives: How to choose them dynamically? (-mca coll_tuned_dynamic_rules_filename dyn_rules)&quot;"</a>
<li><strong>Previous message:</strong> <a href="10308.php">Jeff Squyres: "Re: [OMPI users] need help with a code segment"</a>
<li><strong>In reply to:</strong> <a href="10257.php">Edgar Gabriel: "Re: [OMPI users] Automated tuning tool"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10240.php">neeraj_at_[hidden]: "Re: [OMPI users] Performance question about OpenMPI and MVAPICH2 on	IB"</a>
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
