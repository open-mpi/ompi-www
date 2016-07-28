<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Nov 15 11:54:20 2005" -->
<!-- isoreceived="20051115165420" -->
<!-- sent="Tue, 15 Nov 2005 08:54:17 -0800" -->
<!-- isosent="20051115165417" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] HPL and TCP" -->
<!-- id="4d49ad1271d6e7a63741ccf8c0cfc910_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4379625A.60708_at_sympatico.ca" -->
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
<strong>Date:</strong> 2005-11-15 11:54:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0347.php">Jeff Squyres: "Re: [O-MPI users] hpl and tcp"</a>
<li><strong>Previous message:</strong> <a href="0345.php">Jeff Squyres: "Re: [O-MPI users] OMPI 1.0 rc6 --with-bproc errors"</a>
<li><strong>In reply to:</strong> <a href="0343.php">Allan Menezes: "[O-MPI users] HPL and TCP"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 14, 2005, at 8:21 PM, Allan Menezes wrote:
<br>
<p><span class="quotelev1">&gt;       I think the confusion was my fault because --mca pml teg did not
</span><br>
<span class="quotelev1">&gt; produce errors and gave almost the same performance as Mpich2 v 1.02p1.
</span><br>
<span class="quotelev1">&gt; The reason why I cannot do what you suggest below is because the
</span><br>
<span class="quotelev1">&gt; .openmpi/mca-params.conf file if I am not mistaken would reside in my
</span><br>
<span class="quotelev1">&gt; home NFS share directory.
</span><br>
<p>If I understand your setup, this should not be a problem.  See the Open 
<br>
MPI FAQ about setting MCA parameters -- this is just a different 
<br>
mechanism to do it instead of passing them in on the mpirun command 
<br>
line.  Having this file available on all nodes means that all nodes 
<br>
will get the same MCA parameters (which is typically what you want).
<br>
<p><span class="quotelev1">&gt;  I have installed a new 5.01 beta version of
</span><br>
<span class="quotelev1">&gt; Oscar and /home/allan is a shared directory of my head node where the
</span><br>
<span class="quotelev1">&gt; openmpi installation resides.[/home/allan/openmpi with paths in the
</span><br>
<span class="quotelev1">&gt; .bash_profile and .bashrc files] I would have to do an individual 16
</span><br>
<span class="quotelev1">&gt; installations of open mpi on each node for /opt/openmpi and the
</span><br>
<span class="quotelev1">&gt; mca-params file residing in there.
</span><br>
<p>You can install Open MPI on NFS or on each local disk.  We haven't 
<br>
migrated this information to the Open MPI FAQ yet, but the issues are 
<br>
the same as are discussed on the LAM/MPI FAQ -- 
<br>
<a href="http://www.lam-mpi.org/faq/">http://www.lam-mpi.org/faq/</a>.  See the &quot;Typical setup of LAM&quot; section, 
<br>
and the question &quot;Do I need a common filesystem on each node?&quot;.
<br>
<p><span class="quotelev1">&gt;  Tell me if I am wrong. I might have
</span><br>
<span class="quotelev1">&gt; to do this as this is a heterogenous cluster with different brands of
</span><br>
<span class="quotelev1">&gt; ethernet cards and CPU's.
</span><br>
<p>You might actually be ok -- Open MPI won't care what TCP cards you have 
<br>
because we just use the OS TCP stack.  Different CPUs *might* be a 
<br>
problem, but it depends on how you compile Open MPI.  Having different 
<br>
Linux distos/versions can definitely be a problem because you may have 
<br>
different versions of glibc across your nodes, etc.  I'm guessing 
<br>
that's homogeneous, though, since you're using OSCAR.  So having an 
<br>
NFS-install Open MPI might be ok.
<br>
<p>Check out the LAM/MPI FAQ questions on heterogeneity, too -- the issues 
<br>
are pretty much the same for Open MPI.
<br>
<p><span class="quotelev1">&gt; But it's a good test bed and I have no problems installing Oscar 4.2 
</span><br>
<span class="quotelev1">&gt; on it.
</span><br>
<span class="quotelev1">&gt; See my later post Hpl and TCP today where I tried 0b1 without mca  pml
</span><br>
<span class="quotelev1">&gt; teg and so on and get a good performance with 15 nodes and open mpi 
</span><br>
<span class="quotelev1">&gt; rc6.
</span><br>
<span class="quotelev1">&gt; Thank you very much,
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Allan
</span><br>
<p><pre>
-- 
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0347.php">Jeff Squyres: "Re: [O-MPI users] hpl and tcp"</a>
<li><strong>Previous message:</strong> <a href="0345.php">Jeff Squyres: "Re: [O-MPI users] OMPI 1.0 rc6 --with-bproc errors"</a>
<li><strong>In reply to:</strong> <a href="0343.php">Allan Menezes: "[O-MPI users] HPL and TCP"</a>
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
