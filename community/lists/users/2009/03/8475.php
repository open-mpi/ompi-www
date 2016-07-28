<?
$subject_val = "[OMPI users] Selective file driven decision functions for Open MPI coll tuned";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 16 21:55:45 2009" -->
<!-- isoreceived="20090317015545" -->
<!-- sent="Tue, 17 Mar 2009 10:55:29 +0900" -->
<!-- isosent="20090317015529" -->
<!-- name="Norio Tamura" -->
<!-- email="tam_at_[hidden]" -->
<!-- subject="[OMPI users] Selective file driven decision functions for Open MPI coll tuned" -->
<!-- id="200903171055.BGI52194_at_smtp-b.css.fujitsu.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] Selective file driven decision functions for Open MPI coll tuned<br>
<strong>From:</strong> Norio Tamura (<em>tam_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-16 21:55:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8476.php">Raymond Wan: "Re: [OMPI users] Can't start program across network -- solved!"</a>
<li><strong>Previous message:</strong> <a href="8474.php">justin oppenheim: "Re: [OMPI users] Run-time problem"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello everyone,
<br>
<p>Could anybody let me know where I can find a manual or an web page that describes 
<br>
the specification for specifying the selective file driven decision functions 
<br>
in Open MPI's mpirun/mpiexec command as explained below ?
<br>
<p><span class="quotelev1">&gt; Jelena Pjesivac-Grbovic wrote:
</span><br>
<span class="quotelev1">&gt;This is an excellent solution if we have only one type of allreduce (large 
</span><br>
<span class="quotelev1">&gt;one). However, if your application has multiple types of allreduce (both 
</span><br>
<span class="quotelev1">&gt;small and large), this may not be a satisfactory solution.  In this case, 
</span><br>
<span class="quotelev1">&gt;Open MPI allows you to specify a file which contains rules which function 
</span><br>
<span class="quotelev1">&gt;to use when.  This option has slight learning curve and I am currently
</span><br>
<span class="quotelev1">&gt;evaluating its effectiveness, but if you are interested - I will send you 
</span><br>
<span class="quotelev1">&gt;more documentation about it.
</span><br>
<p><span class="quotelev1">&gt;Selective file driven decision functions Another alternative to forcing the
</span><br>
<span class="quotelev1">&gt;complete collective operations is to force only parts of the decision space in a
</span><br>
<span class="quotelev1">&gt;semi-fixed manner. An example of such a usage scenario would be in the case of
</span><br>
<span class="quotelev1">&gt;a user having tuned an MPI collective for a range of input parameters (message
</span><br>
<span class="quotelev1">&gt;size, communicator size) either manually or via some automated tool [6]. The
</span><br>
<span class="quotelev1">&gt;user could then tell the MPI collective component to use these values within a
</span><br>
<span class="quotelev1">&gt;set range by supplying a file that contains as many data points as the user knows.
</span><br>
<span class="quotelev1">&gt;To decrease both storage and evaluation time the file contents are stored using
</span><br>
<span class="quotelev1">&gt;a run-length technique that effectively only stores the switching points for each
</span><br>
<span class="quotelev1">&gt;algorithm. An example version for an MPI Alltoall operation is shown below:
</span><br>
<span class="quotelev1">&gt;1 # num of collectives
</span><br>
<span class="quotelev1">&gt;3 # ID = 3 Alltoall collective (ID in coll_tuned.h)
</span><br>
<span class="quotelev1">&gt;2 # number of com sizes
</span><br>
<span class="quotelev1">&gt;1 # comm size 1
</span><br>
<span class="quotelev1">&gt;1 # number of msg sizes 1
</span><br>
<span class="quotelev1">&gt;0 1 0 0 # for message size 0, linear 1, topo 0, 0 segmentation
</span><br>
<span class="quotelev1">&gt;8 # comm size 8
</span><br>
<span class="quotelev1">&gt;4 # number of msg sizes
</span><br>
<span class="quotelev1">&gt;0 1 0 0 # for message size 0, linear 1, topo 0, 0 segmentation
</span><br>
<span class="quotelev1">&gt;32768 2 0 0 # 32k, pairwise 2, no topo or segmentation
</span><br>
<span class="quotelev1">&gt;262144 1 0 0 # 256k, use linear 1, no topo or segmentation
</span><br>
<span class="quotelev1">&gt;524288 2 0 0 # message size 512k+, pairwise 2, topo 0, 0 segmentation
</span><br>
<span class="quotelev1">&gt;# end of first collective
</span><br>
<p>Best regards,
<br>
Norio
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8476.php">Raymond Wan: "Re: [OMPI users] Can't start program across network -- solved!"</a>
<li><strong>Previous message:</strong> <a href="8474.php">justin oppenheim: "Re: [OMPI users] Run-time problem"</a>
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
