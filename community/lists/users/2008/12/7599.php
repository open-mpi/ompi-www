<?
$subject_val = "Re: [OMPI users] mpiblast + openmpi + gridengine job faila to run";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 24 09:33:04 2008" -->
<!-- isoreceived="20081224143304" -->
<!-- sent="Wed, 24 Dec 2008 09:33:00 -0500" -->
<!-- isosent="20081224143300" -->
<!-- name="Joe Landman" -->
<!-- email="landman_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpiblast + openmpi + gridengine job faila to run" -->
<!-- id="4952481C.3010203_at_scalableinformatics.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EB680CFD-B212-48BD-A405-5E296914D81E_at_staff.uni-marburg.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpiblast + openmpi + gridengine job faila to run<br>
<strong>From:</strong> Joe Landman (<em>landman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-24 09:33:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7600.php">Tim Mattox: "Re: [OMPI users] Problem with openmpi and infiniband"</a>
<li><strong>Previous message:</strong> <a href="7598.php">Pavel Shamis (Pasha): "Re: [OMPI users] Problem with openmpi and infiniband"</a>
<li><strong>In reply to:</strong> <a href="7596.php">Reuti: "Re: [OMPI users] mpiblast + openmpi + gridengine job faila to run"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Reuti wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Am 24.12.2008 um 07:55 schrieb Sangamesh B:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks Reuti. That sorted out the problem.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Now mpiblast is able to run, but only on single node. i.e. mpiformatdb
</span><br>
<span class="quotelev2">&gt;&gt; -&gt; 4 fragments, mpiblast - 4 processes. Since each node is having 4
</span><br>
<span class="quotelev2">&gt;&gt; cores, the job will run on a single node and works fine. With 8
</span><br>
<span class="quotelev2">&gt;&gt; processes, the job fails with following error message:
</span><br>
<p>First, there is an mpiblast list I'd suggest subscribing to.
<br>
<p>Second, mpiformatdb, despite its name, is not an mpi code.  It doesn't 
<br>
run across multiple nodes, or with multiple threads.  See the mpiblast 
<br>
site (www.mpiblast.org) for more details and documentation on how to 
<br>
use/run it.
<br>
<p>Joe
<br>
<p><p><p><pre>
-- 
Joseph Landman, Ph.D
Founder and CEO
Scalable Informatics LLC,
email: landman_at_[hidden]
web  : <a href="http://www.scalableinformatics.com">http://www.scalableinformatics.com</a>
        <a href="http://jackrabbit.scalableinformatics.com">http://jackrabbit.scalableinformatics.com</a>
phone: +1 734 786 8423 x121
fax  : +1 866 888 3112
cell : +1 734 612 4615
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7600.php">Tim Mattox: "Re: [OMPI users] Problem with openmpi and infiniband"</a>
<li><strong>Previous message:</strong> <a href="7598.php">Pavel Shamis (Pasha): "Re: [OMPI users] Problem with openmpi and infiniband"</a>
<li><strong>In reply to:</strong> <a href="7596.php">Reuti: "Re: [OMPI users] mpiblast + openmpi + gridengine job faila to run"</a>
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
