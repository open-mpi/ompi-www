<?
$subject_val = "Re: [OMPI users] Unknown overhead in &quot;mpirun -am ft-enable-cr&quot;";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  8 10:41:50 2011" -->
<!-- isoreceived="20110208154150" -->
<!-- sent="Tue, 8 Feb 2011 10:41:44 -0500" -->
<!-- isosent="20110208154144" -->
<!-- name="Joshua Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Unknown overhead in &amp;quot;mpirun -am ft-enable-cr&amp;quot;" -->
<!-- id="4B94634F-50FA-4436-B67A-48B44CD1E53E_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTikWW63bgyfj535MfkvOCRZi5z7uHsRfpuZhe-rG_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Unknown overhead in &quot;mpirun -am ft-enable-cr&quot;<br>
<strong>From:</strong> Joshua Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-08 10:41:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15529.php">Michael Curtis: "Re: [OMPI users] Segmentation fault with SLURM and non-local nodes"</a>
<li><strong>Previous message:</strong> <a href="15527.php">Ralph Castain: "Re: [OMPI users] Segmentation fault with SLURM and non-local nodes"</a>
<li><strong>In reply to:</strong> <a href="15525.php">Nguyen Toan: "[OMPI users]  Unknown overhead in &quot;mpirun -am ft-enable-cr&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15534.php">Nguyen Toan: "Re: [OMPI users] Unknown overhead in &quot;mpirun -am ft-enable-cr&quot;"</a>
<li><strong>Reply:</strong> <a href="15534.php">Nguyen Toan: "Re: [OMPI users] Unknown overhead in &quot;mpirun -am ft-enable-cr&quot;"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/03/15788.php">Joshua Hursey: "Re: [OMPI users] Unknown overhead in &quot;mpirun -am ft-enable-cr&quot;"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There are a few reasons why this might be occurring. Did you build with the '--enable-ft-thread' option?
<br>
<p>If so, it looks like I didn't move over the thread_sleep_wait adjustment from the trunk - the thread was being a bit too aggressive. Try adding the following to your command line options, and see if it changes the performance.
<br>
&nbsp;&nbsp;&quot;-mca opal_cr_thread_sleep_wait 1000&quot;
<br>
<p>There are other places to look as well depending on how frequently your application communicates, how often you checkpoint, process layout, ... But usually the aggressive nature of the thread is the main problem.
<br>
<p>Let me know if that helps.
<br>
<p>-- Josh
<br>
<p>On Feb 8, 2011, at 2:50 AM, Nguyen Toan wrote:
<br>
<p><span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am using the latest version of OpenMPI (1.5.1) and BLCR (0.8.2).
</span><br>
<span class="quotelev1">&gt; I found that when running an application,which uses MPI_Isend, MPI_Irecv and MPI_Wait,  
</span><br>
<span class="quotelev1">&gt; enabling C/R, i.e using &quot;-am ft-enable-cr&quot;, the application runtime is much longer than the normal execution with mpirun (no checkpoint was taken).
</span><br>
<span class="quotelev1">&gt; This overhead becomes larger when the normal execution runtime is longer.
</span><br>
<span class="quotelev1">&gt; Does anybody have any idea about this overhead, and how to eliminate it?
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Nguyen
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p>------------------------------------
<br>
Joshua Hursey
<br>
Postdoctoral Research Associate
<br>
Oak Ridge National Laboratory
<br>
<a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15529.php">Michael Curtis: "Re: [OMPI users] Segmentation fault with SLURM and non-local nodes"</a>
<li><strong>Previous message:</strong> <a href="15527.php">Ralph Castain: "Re: [OMPI users] Segmentation fault with SLURM and non-local nodes"</a>
<li><strong>In reply to:</strong> <a href="15525.php">Nguyen Toan: "[OMPI users]  Unknown overhead in &quot;mpirun -am ft-enable-cr&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15534.php">Nguyen Toan: "Re: [OMPI users] Unknown overhead in &quot;mpirun -am ft-enable-cr&quot;"</a>
<li><strong>Reply:</strong> <a href="15534.php">Nguyen Toan: "Re: [OMPI users] Unknown overhead in &quot;mpirun -am ft-enable-cr&quot;"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/03/15788.php">Joshua Hursey: "Re: [OMPI users] Unknown overhead in &quot;mpirun -am ft-enable-cr&quot;"</a>
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
