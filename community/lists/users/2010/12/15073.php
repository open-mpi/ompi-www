<?
$subject_val = "[OMPI users] Guaranteed run rank 0 on a given machine?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 10 13:46:29 2010" -->
<!-- isoreceived="20101210184629" -->
<!-- sent="Fri, 10 Dec 2010 10:46:25 -0800" -->
<!-- isosent="20101210184625" -->
<!-- name="David Mathog" -->
<!-- email="mathog_at_[hidden]" -->
<!-- subject="[OMPI users] Guaranteed run rank 0 on a given machine?" -->
<!-- id="E1PR7z7-0005Ae-FQ_at_mendel.bio.caltech.edu" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Guaranteed run rank 0 on a given machine?<br>
<strong>From:</strong> David Mathog (<em>mathog_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-10 13:46:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15074.php">Terry Dontje: "Re: [OMPI users] Guaranteed run rank 0 on a given machine?"</a>
<li><strong>Previous message:</strong> <a href="15072.php">Ashley Pittman: "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on a	single machine?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15074.php">Terry Dontje: "Re: [OMPI users] Guaranteed run rank 0 on a given machine?"</a>
<li><strong>Reply:</strong> <a href="15074.php">Terry Dontje: "Re: [OMPI users] Guaranteed run rank 0 on a given machine?"</a>
<li><strong>Reply:</strong> <a href="15081.php">Eugene Loh: "Re: [OMPI users] Guaranteed run rank 0 on a given machine?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The master is commonly very different from the workers, so I expected
<br>
there would be something like
<br>
<p>&nbsp;&nbsp;--rank0-on &lt;hostname&gt;
<br>
<p>but there doesn't seem to be a single switch on mpirun to do that.
<br>
<p>If &quot;mastermachine&quot; is the first entry in the hostfile, or the first
<br>
machine in a -hosts list, will rank 0 always run there?  If so, will it
<br>
always run in the first slot on the first machine listed?  That seems to
<br>
be the case in practice, but is it guaranteed?  Even if -loadbalance is
<br>
used?  
<br>
<p>Otherwise, there is the rankfile method.  In the situation where the
<br>
master must run on a specific node, but there is no preference for the
<br>
workers, would a rank file like this be sufficient?
<br>
<p>rank 0=mastermachine slot=0
<br>
<p>The mpirun man page gives an example where all nodes/slots are
<br>
specified, but it doesn't say explicitly what happens if the
<br>
configuration is only partially specified, or how it interacts with the
<br>
-np parameter.  Modifying the man page example:
<br>
<p>cat myrankfile
<br>
rank 0=aa slot=1:0-2
<br>
rank 1=bb slot=0:0,1
<br>
rank 2=cc slot=1-2
<br>
mpirun -H aa,bb,cc,dd -np 4 -rf myrankfile ./a.out
<br>
<p>Rank 0 runs on node aa, bound to socket 1, cores 0-2.
<br>
Rank 1 runs on node bb, bound to socket 0, cores 0 and 1.
<br>
Rank 2 runs on node cc, bound to cores 1 and 2.
<br>
<p>Rank 3 runs where?  not at all, or on dd, aa:slot=0, or ...? 
<br>
<p>Also, in my limited testing --host and -hostfile seem to be mutually
<br>
exclusive.  That is reasonable, but it isn't clear that it is intended.
<br>
&nbsp;Example, with a hostfile containing one entry for &quot;monkey02.cluster
<br>
slots=1&quot;:
<br>
<p>mpirun  --host monkey01   --mca plm_rsh_agent rsh  hostname
<br>
monkey01.cluster
<br>
mpirun  --host monkey02   --mca plm_rsh_agent rsh  hostname
<br>
monkey02.cluster
<br>
mpirun  -hostfile /usr/common/etc/openmpi.machines.test1 \
<br>
&nbsp;&nbsp;&nbsp;--mca plm_rsh_agent rsh  hostname
<br>
monkey02.cluster
<br>
mpirun  --host monkey01  \
<br>
&nbsp;&nbsp;-hostfile /usr/commom/etc/openmpi.machines.test1 \
<br>
&nbsp;&nbsp;--mca plm_rsh_agent rsh  hostname
<br>
--------------------------------------------------------------------------
<br>
There are no allocated resources for the application 
<br>
&nbsp;&nbsp;hostname
<br>
that match the requested mapping:
<br>
&nbsp;&nbsp;
<br>
<p>Verify that you have mapped the allocated resources properly using the 
<br>
--host or --hostfile specification.
<br>
--------------------------------------------------------------------------
<br>
<p><p><p><p>Thanks,
<br>
<p>David Mathog
<br>
mathog_at_[hidden]
<br>
Manager, Sequence Analysis Facility, Biology Division, Caltech
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15074.php">Terry Dontje: "Re: [OMPI users] Guaranteed run rank 0 on a given machine?"</a>
<li><strong>Previous message:</strong> <a href="15072.php">Ashley Pittman: "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on a	single machine?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15074.php">Terry Dontje: "Re: [OMPI users] Guaranteed run rank 0 on a given machine?"</a>
<li><strong>Reply:</strong> <a href="15074.php">Terry Dontje: "Re: [OMPI users] Guaranteed run rank 0 on a given machine?"</a>
<li><strong>Reply:</strong> <a href="15081.php">Eugene Loh: "Re: [OMPI users] Guaranteed run rank 0 on a given machine?"</a>
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
