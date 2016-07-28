<?
$subject_val = "Re: [OMPI users] Role of ethernet interfaces of startup of openmpi job using IB";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 30 06:29:39 2011" -->
<!-- isoreceived="20110930102939" -->
<!-- sent="Fri, 30 Sep 2011 12:29:31 +0200" -->
<!-- isosent="20110930102931" -->
<!-- name="Salvatore Podda" -->
<!-- email="salvatore.podda_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Role of ethernet interfaces of startup of openmpi job using IB" -->
<!-- id="97BA2EDA-2231-4282-B8F8-46D357A5A881_at_enea.it" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="web-59531369_at_enea.it" -->
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
<strong>Subject:</strong> Re: [OMPI users] Role of ethernet interfaces of startup of openmpi job using IB<br>
<strong>From:</strong> Salvatore Podda (<em>salvatore.podda_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-30 06:29:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17477.php">Jeff Squyres: "Re: [OMPI users] Role of ethernet interfaces of startup of openmpi job using IB"</a>
<li><strong>Previous message:</strong> <a href="17475.php">Matthias Jurenz: "Re: [OMPI users] VampirTrace integration with VT_GNU_NMFILE environment variable"</a>
<li><strong>Maybe in reply to:</strong> <a href="17441.php">Salvatore Podda: "[OMPI users] Role of ethernet interfaces of startup of openmpi job using IB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17477.php">Jeff Squyres: "Re: [OMPI users] Role of ethernet interfaces of startup of openmpi job using IB"</a>
<li><strong>Reply:</strong> <a href="17477.php">Jeff Squyres: "Re: [OMPI users] Role of ethernet interfaces of startup of openmpi job using IB"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the prompt reply!
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 27, 2011, at 6:35 AM, Salvatore Podda wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 	We would like to know if the ethernet interfaces play any role in  
</span><br>
<span class="quotelev2">&gt;&gt; the startup phase of an opempi job using InfiniBand
</span><br>
<span class="quotelev2">&gt;&gt; In this case, where we can found some literature on this topic?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Unfortunately, there's not a lot of docs about this other than  
</span><br>
<span class="quotelev1">&gt; people asking questions on this list.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>For the above reason, does anyone, in the list, know which the order/ 
<br>
ranking by which the
<br>
ethernet interfaces will be qeuried in the case of multiple ones?
<br>
And which are the rules?
<br>
<p>Regards
<br>
<p>Salvatore Podda
<br>
<span class="quotelev1">&gt; IP is used by default during Open MPI startup.  Specifically, it is  
</span><br>
<span class="quotelev1">&gt; used as our &quot;out of band&quot; communication channel for things like  
</span><br>
<span class="quotelev1">&gt; stdin/stdout/stderr redirection, launch command relaying, process  
</span><br>
<span class="quotelev1">&gt; control, etc.  The OOB channel is also used by default for  
</span><br>
<span class="quotelev1">&gt; bootstrapping IB queue pairs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To clarify, note that these are two different things:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. the out of band (OOB) channel used for process control, std*  
</span><br>
<span class="quotelev1">&gt; routing, etc.
</span><br>
<span class="quotelev1">&gt; 2. bootstrapping IB queue pairs
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You can change the IB QP bootstrapping to use the OpenFabrics RDMA  
</span><br>
<span class="quotelev1">&gt; communications manager (vs. our OOB channel) with the following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    mpirun --mca btl_openib_if_cpc rdmacm ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; See if that helps (although the OF RDMA CM has its own scalability  
</span><br>
<span class="quotelev1">&gt; issues, also associated with ARP).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If your cluster is large, you might want to check out the section on  
</span><br>
<span class="quotelev1">&gt; our FAQ about large clusters:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    <a href="http://www.open-mpi.org/faq/?category=large-clusters">http://www.open-mpi.org/faq/?category=large-clusters</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't think there's an entry on there yet about this, but it may  
</span><br>
<span class="quotelev1">&gt; also be worthwhile to try enabling the &quot;radix&quot; support; a more  
</span><br>
<span class="quotelev1">&gt; scalable version of our OOB channel (i.e., the tree across all the  
</span><br>
<span class="quotelev1">&gt; support daemons has a much larger radix and is therefore much  
</span><br>
<span class="quotelev1">&gt; flatter).  Los Alamos recently committed an IB UD OOB channel plugin  
</span><br>
<span class="quotelev1">&gt; to our development trunk and is comparing its performance to the  
</span><br>
<span class="quotelev1">&gt; radix tree to see if it's worthwhile.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17477.php">Jeff Squyres: "Re: [OMPI users] Role of ethernet interfaces of startup of openmpi job using IB"</a>
<li><strong>Previous message:</strong> <a href="17475.php">Matthias Jurenz: "Re: [OMPI users] VampirTrace integration with VT_GNU_NMFILE environment variable"</a>
<li><strong>Maybe in reply to:</strong> <a href="17441.php">Salvatore Podda: "[OMPI users] Role of ethernet interfaces of startup of openmpi job using IB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17477.php">Jeff Squyres: "Re: [OMPI users] Role of ethernet interfaces of startup of openmpi job using IB"</a>
<li><strong>Reply:</strong> <a href="17477.php">Jeff Squyres: "Re: [OMPI users] Role of ethernet interfaces of startup of openmpi job using IB"</a>
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
