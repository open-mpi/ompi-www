<?
$subject_val = "Re: [hwloc-users] Thread binding problem";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  5 09:55:40 2012" -->
<!-- isoreceived="20120905135540" -->
<!-- sent="Wed, 05 Sep 2012 15:55:34 +0200" -->
<!-- isosent="20120905135534" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Thread binding problem" -->
<!-- id="504759D6.4020308_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAJNPZUWoHXe+cqkoakoRgwCkU1ghAfWm0CtXoNYML+c1hK1qOA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [hwloc-users] Thread binding problem<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-05 09:55:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0685.php">Gabriele Fatigati: "Re: [hwloc-users] Thread binding problem"</a>
<li><strong>Previous message:</strong> <a href="0683.php">Gabriele Fatigati: "Re: [hwloc-users] Thread binding problem"</a>
<li><strong>In reply to:</strong> <a href="0683.php">Gabriele Fatigati: "Re: [hwloc-users] Thread binding problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0685.php">Gabriele Fatigati: "Re: [hwloc-users] Thread binding problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What does errno contain?
<br>
Aside of ENOSYS and EXDEV, you may also get the &quot;usual&quot; error codes such
<br>
as ENOMEM, EPERM or EINVAL.
<br>
We didn't document all of them, it mostly depends on the underlying
<br>
kernel and mbind implementations.
<br>
Brice
<br>
<p><p><p>Le 05/09/2012 15:44, Gabriele Fatigati a &#233;crit :
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've noted that hwloc_set_area_membind_nodeset return -1 but errno is
</span><br>
<span class="quotelev1">&gt; not equal to EXDEV or ENOSYS. I supposed that these two case was the
</span><br>
<span class="quotelev1">&gt; two unique possibly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; From the hwloc documentation:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -1 with errno set to ENOSYS if the action is not supported
</span><br>
<span class="quotelev1">&gt; -1 with errno set to EXDEV if the binding cannot be enforced
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any other binding failure reason? The memory available is enought.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2012/9/5 Brice Goglin &lt;Brice.Goglin_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;mailto:Brice.Goglin_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Hello Gabriele,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     The only limit that I would think of is the available physical
</span><br>
<span class="quotelev1">&gt;     memory on each NUMA node (numactl -H will tell you how much of
</span><br>
<span class="quotelev1">&gt;     each NUMA node memory is still available).
</span><br>
<span class="quotelev1">&gt;     malloc usually only fails (it returns NULL?) when there no
</span><br>
<span class="quotelev1">&gt;     *virtual* memory anymore, that's different. If you don't allocate
</span><br>
<span class="quotelev1">&gt;     tons of terabytes of virtual memory, this shouldn't happen easily.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Le 05/09/2012 14:27, Gabriele Fatigati a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt;     Dear Hwloc users and developers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     I'm using hwloc 1.4.1 on a multithreaded program in a Linux
</span><br>
<span class="quotelev2">&gt;&gt;     platform, where each thread bind many non contiguos pieces of a
</span><br>
<span class="quotelev2">&gt;&gt;     big matrix using in a very intensive way
</span><br>
<span class="quotelev2">&gt;&gt;     hwloc_set_area_membind_nodeset function:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     hwloc_set_area_membind_nodeset(topology, punt+offset, len,
</span><br>
<span class="quotelev2">&gt;&gt;     nodeset, HWLOC_MEMBIND_BIND, HWLOC_MEMBIND_THREAD |
</span><br>
<span class="quotelev2">&gt;&gt;     HWLOC_MEMBIND_MIGRATE);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Binding seems works well, since the returned code from function
</span><br>
<span class="quotelev2">&gt;&gt;     is 0 for every calls.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     The problems is that after binding, a simple little new malloc
</span><br>
<span class="quotelev2">&gt;&gt;     fails, without any apparent reason.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Disabling memory binding, the allocations works well.  Is there
</span><br>
<span class="quotelev2">&gt;&gt;     any knows problem if  hwloc_set_area_membind_nodeset is used
</span><br>
<span class="quotelev2">&gt;&gt;     intensively?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Is there some operating system limit for memory pages binding?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Thanks in advance.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     -- 
</span><br>
<span class="quotelev2">&gt;&gt;     Ing. Gabriele Fatigati
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     HPC specialist
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     SuperComputing Applications and Innovation Department
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     www.cineca.it &lt;<a href="http://www.cineca.it">http://www.cineca.it</a>&gt;                    Tel:  
</span><br>
<span class="quotelev2">&gt;&gt;     +39 051 6171722 &lt;tel:%2B39%20051%206171722&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     g.fatigati [AT] cineca.it &lt;<a href="http://cineca.it">http://cineca.it</a>&gt;          
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;     hwloc-users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;     hwloc-users_at_[hidden] &lt;mailto:hwloc-users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Ing. Gabriele Fatigati
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; HPC specialist
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; SuperComputing Applications and Innovation Department
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; www.cineca.it &lt;<a href="http://www.cineca.it">http://www.cineca.it</a>&gt;                    Tel:   +39 051
</span><br>
<span class="quotelev1">&gt; 6171722
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; g.fatigati [AT] cineca.it &lt;<a href="http://cineca.it">http://cineca.it</a>&gt;          
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0684/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0685.php">Gabriele Fatigati: "Re: [hwloc-users] Thread binding problem"</a>
<li><strong>Previous message:</strong> <a href="0683.php">Gabriele Fatigati: "Re: [hwloc-users] Thread binding problem"</a>
<li><strong>In reply to:</strong> <a href="0683.php">Gabriele Fatigati: "Re: [hwloc-users] Thread binding problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0685.php">Gabriele Fatigati: "Re: [hwloc-users] Thread binding problem"</a>
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
