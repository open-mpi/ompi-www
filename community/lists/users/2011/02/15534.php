<?
$subject_val = "Re: [OMPI users] Unknown overhead in &quot;mpirun -am ft-enable-cr&quot;";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  9 01:40:39 2011" -->
<!-- isoreceived="20110209064039" -->
<!-- sent="Wed, 9 Feb 2011 15:40:32 +0900" -->
<!-- isosent="20110209064032" -->
<!-- name="Nguyen Toan" -->
<!-- email="nguyentoan1508_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Unknown overhead in &amp;quot;mpirun -am ft-enable-cr&amp;quot;" -->
<!-- id="AANLkTikSYgqw3fn2sA1HkrZW6h_zRcxRr8LEbrJNc=8K_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4B94634F-50FA-4436-B67A-48B44CD1E53E_at_open-mpi.org" -->
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
<strong>From:</strong> Nguyen Toan (<em>nguyentoan1508_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-09 01:40:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15535.php">Joshua Hursey: "Re: [OMPI users] Unknown overhead in &quot;mpirun -am ft-enable-cr&quot;"</a>
<li><strong>Previous message:</strong> <a href="15533.php">Ralph Castain: "Re: [OMPI users] Segmentation fault with SLURM and non-local nodes"</a>
<li><strong>In reply to:</strong> <a href="15528.php">Joshua Hursey: "Re: [OMPI users] Unknown overhead in &quot;mpirun -am ft-enable-cr&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15535.php">Joshua Hursey: "Re: [OMPI users] Unknown overhead in &quot;mpirun -am ft-enable-cr&quot;"</a>
<li><strong>Reply:</strong> <a href="15535.php">Joshua Hursey: "Re: [OMPI users] Unknown overhead in &quot;mpirun -am ft-enable-cr&quot;"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Josh,
<br>
Thanks for the reply. I did not use the '--enable-ft-thread' option. Here is
<br>
my build options:
<br>
<p>CFLAGS=-g \
<br>
./configure \
<br>
--with-ft=cr \
<br>
--enable-mpi-threads \
<br>
--with-blcr=/home/nguyen/opt/blcr \
<br>
--with-blcr-libdir=/home/nguyen/opt/blcr/lib \
<br>
--prefix=/home/nguyen/opt/openmpi \
<br>
--with-openib \
<br>
--enable-mpirun-prefix-by-default
<br>
<p>My application requires lots of communication in every loop, focusing on
<br>
MPI_Isend, MPI_Irecv and MPI_Wait. Also I want to make only one checkpoint
<br>
per application execution for my purpose, but the unknown overhead exists
<br>
even when no checkpoint was taken.
<br>
<p>Do you have any other idea?
<br>
<p>Regards,
<br>
Nguyen Toan
<br>
<p><p>On Wed, Feb 9, 2011 at 12:41 AM, Joshua Hursey &lt;jjhursey_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; There are a few reasons why this might be occurring. Did you build with the
</span><br>
<span class="quotelev1">&gt; '--enable-ft-thread' option?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If so, it looks like I didn't move over the thread_sleep_wait adjustment
</span><br>
<span class="quotelev1">&gt; from the trunk - the thread was being a bit too aggressive. Try adding the
</span><br>
<span class="quotelev1">&gt; following to your command line options, and see if it changes the
</span><br>
<span class="quotelev1">&gt; performance.
</span><br>
<span class="quotelev1">&gt;  &quot;-mca opal_cr_thread_sleep_wait 1000&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There are other places to look as well depending on how frequently your
</span><br>
<span class="quotelev1">&gt; application communicates, how often you checkpoint, process layout, ... But
</span><br>
<span class="quotelev1">&gt; usually the aggressive nature of the thread is the main problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Let me know if that helps.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 8, 2011, at 2:50 AM, Nguyen Toan wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi all,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am using the latest version of OpenMPI (1.5.1) and BLCR (0.8.2).
</span><br>
<span class="quotelev2">&gt; &gt; I found that when running an application,which uses MPI_Isend, MPI_Irecv
</span><br>
<span class="quotelev1">&gt; and MPI_Wait,
</span><br>
<span class="quotelev2">&gt; &gt; enabling C/R, i.e using &quot;-am ft-enable-cr&quot;, the application runtime is
</span><br>
<span class="quotelev1">&gt; much longer than the normal execution with mpirun (no checkpoint was taken).
</span><br>
<span class="quotelev2">&gt; &gt; This overhead becomes larger when the normal execution runtime is longer.
</span><br>
<span class="quotelev2">&gt; &gt; Does anybody have any idea about this overhead, and how to eliminate it?
</span><br>
<span class="quotelev2">&gt; &gt; Thanks.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Regards,
</span><br>
<span class="quotelev2">&gt; &gt; Nguyen
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------
</span><br>
<span class="quotelev1">&gt; Joshua Hursey
</span><br>
<span class="quotelev1">&gt; Postdoctoral Research Associate
</span><br>
<span class="quotelev1">&gt; Oak Ridge National Laboratory
</span><br>
<span class="quotelev1">&gt; <a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15534/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15535.php">Joshua Hursey: "Re: [OMPI users] Unknown overhead in &quot;mpirun -am ft-enable-cr&quot;"</a>
<li><strong>Previous message:</strong> <a href="15533.php">Ralph Castain: "Re: [OMPI users] Segmentation fault with SLURM and non-local nodes"</a>
<li><strong>In reply to:</strong> <a href="15528.php">Joshua Hursey: "Re: [OMPI users] Unknown overhead in &quot;mpirun -am ft-enable-cr&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15535.php">Joshua Hursey: "Re: [OMPI users] Unknown overhead in &quot;mpirun -am ft-enable-cr&quot;"</a>
<li><strong>Reply:</strong> <a href="15535.php">Joshua Hursey: "Re: [OMPI users] Unknown overhead in &quot;mpirun -am ft-enable-cr&quot;"</a>
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
