<?
$subject_val = "Re: [OMPI users] Problem with openmpi and infiniband";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan  2 09:22:08 2009" -->
<!-- isoreceived="20090102142208" -->
<!-- sent="Fri, 02 Jan 2009 14:21:29 +0000" -->
<!-- isosent="20090102142129" -->
<!-- name="Biagio Lucini" -->
<!-- email="B.Lucini_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with openmpi and infiniband" -->
<!-- id="495E22E9.3050303_at_swansea.ac.uk" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4957402B.7070803_at_dev.mellanox.co.il" -->
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
<strong>From:</strong> Biagio Lucini (<em>B.Lucini_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-02 09:21:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7617.php">Mahmoud Payami: "Re: [OMPI users] question running on heterogeneous systems"</a>
<li><strong>Previous message:</strong> <a href="7615.php">doriankrause: "Re: [OMPI users] question running on heterogeneous systems"</a>
<li><strong>In reply to:</strong> <a href="../../2008/12/7605.php">Pavel Shamis (Pasha): "Re: [OMPI users] Problem with openmpi and infiniband"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="../../2008/12/7603.php">Biagio Lucini: "Re: [OMPI users] Problem with openmpi and infiniband"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Pavel Shamis (Pasha) wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Another thing to try is a change that we made late in the Open MPI 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; v1.2 series with regards to IB:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/faq/?category=openfabrics#v1.2-use-early-completion">http://www.open-mpi.org/faq/?category=openfabrics#v1.2-use-early-completion</a> 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks, this is something worth investigating. What would be the 
</span><br>
<span class="quotelev2">&gt;&gt; exact syntax to use to turn off pml_ob1_use_early_completion? 
</span><br>
<span class="quotelev1">&gt; Your problem definitely maybe related to the know issue with early 
</span><br>
<span class="quotelev1">&gt; completions. The exact syntax is:|
</span><br>
<span class="quotelev1">&gt; --mca pml_ob1_use_early_completion 0|
</span><br>
<span class="quotelev1">&gt;
</span><br>
Unfortunately this did not help: still the same problem. Here is the 
<br>
script I run: last line for the tcp test, previous line for the openib 
<br>
test.
<br>
------------------------------------------------------------------------------------------------------------------------------
<br>
#!/bin/bash
<br>
#$ -S /bin/bash
<br>
<p>#Set out, error and job name
<br>
#$ -o run2.out
<br>
#$ -e run2.err
<br>
#$ -N su3_01Jan
<br>
<p>#Number of nodes for mpi (18 in this case)
<br>
#$ -pe make 38
<br>
<p># The batchsystem should use the current directory as working directory.
<br>
#$ -cwd
<br>
<p><p>export 
<br>
LD_LIBRARY_PATH=/opt/numactl-0.6.4/:/opt/sge-6.0u8/lib/lx24-amd64:/opt/ompi128-intel/lib
<br>
<p>echo LD_LIBRARY_PATH  $LD_LIBRARY_PATH
<br>
ldd ./k-string
<br>
<p>ulimit -l 8388608
<br>
ulimit -a
<br>
<p>export PATH=$PATH:/opt/ompi128-intel/bin
<br>
which mpirun
<br>
<p>#The actual mpirun command
<br>
#mpirun -np $NSLOTS -mca btl openib,sm,self --mca 
<br>
pml_ob1_use_early_completion 0 ./k-string
<br>
mpirun -np $NSLOTS -mca btl tcp,sm,self ./k-string
<br>
<p>-------------------------------------------------------------------------------------------------------------------------------------------
<br>
<p>This also contains extra diagnostic for the path, library path, memory 
<br>
locked etc. All seems ok, and as before the tcp run goes well, the 
<br>
openib run has communication problem (it looks like no communication 
<br>
channel can be open or recognised). I will try OMPI1.3 rc2 (as it has 
<br>
been suggested), failing that I will try to isolate a test case, to see 
<br>
if the problem can be reproduced on other systems. Meanwhile, I'm happy 
<br>
to listen to any suggestion you might have.
<br>
<p>Thanks,
<br>
Biagio
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7617.php">Mahmoud Payami: "Re: [OMPI users] question running on heterogeneous systems"</a>
<li><strong>Previous message:</strong> <a href="7615.php">doriankrause: "Re: [OMPI users] question running on heterogeneous systems"</a>
<li><strong>In reply to:</strong> <a href="../../2008/12/7605.php">Pavel Shamis (Pasha): "Re: [OMPI users] Problem with openmpi and infiniband"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="../../2008/12/7603.php">Biagio Lucini: "Re: [OMPI users] Problem with openmpi and infiniband"</a>
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
