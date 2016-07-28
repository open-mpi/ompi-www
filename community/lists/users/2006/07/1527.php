<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jul  3 10:48:53 2006" -->
<!-- isoreceived="20060703144853" -->
<!-- sent="Mon, 3 Jul 2006 10:47:49 -0400" -->
<!-- isosent="20060703144749" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] open-mpi on MacOS X" -->
<!-- id="98A61048-799F-4E59-BB55-6C1BD37314FA_at_umich.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20060703143515.6B6FB1000D_at_bromo.msbb.uc.edu" -->
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
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-07-03 10:47:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1528.php">Borenstein, Bernard S: "[OMPI users] Problem with Openmpi 1.1"</a>
<li><strong>Previous message:</strong> <a href="1526.php">Jack Howarth: "[OMPI users] open-mpi on MacOS X"</a>
<li><strong>In reply to:</strong> <a href="1526.php">Jack Howarth: "[OMPI users] open-mpi on MacOS X"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1549.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] open-mpi on MacOS X"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have built and ran gromacs test programs with ompi a few times in  
<br>
the last month.  It works great.  To keep track of nodes we use torque
<br>
<a href="http://www.clusterresources.com/pages/products/torque-resource">http://www.clusterresources.com/pages/products/torque-resource</a>- 
<br>
manager.php
<br>
With torque and OMPI built against it, you have no need to run orted....
<br>
Just mpirun mdrun    mpirun will get the hostnames and number of cpus  
<br>
from torque.  But thats heavy weight.  We use that with a cluster of  
<br>
300+ nodes.   I would for a small system use the
<br>
mpirun -machinefile  This works, and you dont need to start up orted  
<br>
when you use it.  But you will still have no way of monitoring free  
<br>
nodes.  (unlike torque)  that i know of.
<br>
<p>Brock Palen
<br>
Center for Advanced Computing
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<p><p>On Jul 3, 2006, at 10:35 AM, Jack Howarth wrote:
<br>
<p><span class="quotelev1">&gt;     I have created simple fink (<a href="http://fink.sourceforge.net">http://fink.sourceforge.net</a>) packaging
</span><br>
<span class="quotelev1">&gt; for open-mpi v1.1 on MacOS X. The packaging builds open-mpi with its
</span><br>
<span class="quotelev1">&gt; default settings in configure and appears to pass all of its make  
</span><br>
<span class="quotelev1">&gt; check
</span><br>
<span class="quotelev1">&gt; without problems. However, the lack of clear documentation for open- 
</span><br>
<span class="quotelev1">&gt; mpi
</span><br>
<span class="quotelev1">&gt; still is a problem. I seem able to manually run the test programs from
</span><br>
<span class="quotelev1">&gt; the open-mpi distribution using...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mdrun -np 2 ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; after starting the orted daemon with....
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; orted --seed --persistent --scope public
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can see both cpus spike when I do the mdrun's so I think
</span><br>
<span class="quotelev1">&gt; that works. However, I can't figure how the proper way to
</span><br>
<span class="quotelev1">&gt; monitor the status of the available nodes. Specifically,
</span><br>
<span class="quotelev1">&gt; what is the equivalent to the lamnodes program in open-mpi?
</span><br>
<span class="quotelev1">&gt; Also, is there a simple test program that runs for a significant
</span><br>
<span class="quotelev1">&gt; period of time that I can use to test the different options to
</span><br>
<span class="quotelev1">&gt; monitor and control the open-mpi jobs that are running under
</span><br>
<span class="quotelev1">&gt; orted? Thanks in advance for any clarifications.
</span><br>
<span class="quotelev1">&gt;          Jack
</span><br>
<span class="quotelev1">&gt; ps I assume that at v1.1, open-mpi is considered to be a usable
</span><br>
<span class="quotelev1">&gt; replacement for lam? Certainly, gromacs 3.3.1 seems to compile
</span><br>
<span class="quotelev1">&gt; its mpi support against open-mpi.
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1528.php">Borenstein, Bernard S: "[OMPI users] Problem with Openmpi 1.1"</a>
<li><strong>Previous message:</strong> <a href="1526.php">Jack Howarth: "[OMPI users] open-mpi on MacOS X"</a>
<li><strong>In reply to:</strong> <a href="1526.php">Jack Howarth: "[OMPI users] open-mpi on MacOS X"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1549.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] open-mpi on MacOS X"</a>
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
