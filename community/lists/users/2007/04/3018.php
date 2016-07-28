<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Apr  4 12:30:49 2007" -->
<!-- isoreceived="20070404163049" -->
<!-- sent="Wed, 4 Apr 2007 12:31:46 -0400" -->
<!-- isosent="20070404163146" -->
<!-- name="Eric Thibodeau" -->
<!-- email="kyron_at_[hidden]" -->
<!-- subject="Re: [OMPI users] &amp;quot;Address not mapped&amp;quot; error on user defined MPI_OP function" -->
<!-- id="200704041231.46356.kyron_at_neuralbs.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="200704041147.05897.kyron_at_neuralbs.com" -->
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
<strong>From:</strong> Eric Thibodeau (<em>kyron_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-04 12:31:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3019.php">hpetit_at_[hidden]: "[OMPI users] MPI 1.2 stuck in pthread_condition_wait"</a>
<li><strong>Previous message:</strong> <a href="3017.php">Eric Thibodeau: "[OMPI users] &quot;Address not mapped&quot; error on user defined MPI_OP function"</a>
<li><strong>In reply to:</strong> <a href="3017.php">Eric Thibodeau: "[OMPI users] &quot;Address not mapped&quot; error on user defined MPI_OP function"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3020.php">Eric Thibodeau: "Re: [OMPI users] &quot;Address not mapped&quot; error on user defined MPI_OP function"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I completely forgot to mention which version of OpenMPI I am using, I'll gladly post additional info if required :
<br>
<p>kyron_at_kyron ~/openmpi-1.2 $ ompi_info |head
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open MPI: 1.2
<br>
&nbsp;&nbsp;&nbsp;Open MPI SVN revision: r14027
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open RTE: 1.2
<br>
&nbsp;&nbsp;&nbsp;Open RTE SVN revision: r14027
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL: 1.2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL SVN revision: r14027
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Prefix: /home/kyron/openmpi_i686
<br>
&nbsp;Configured architecture: i686-pc-linux-gnu
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configured by: kyron
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configured on: Wed Apr  4 10:21:34 EDT 2007
<br>
<p>Le mercredi 4 avril 2007 11:47, Eric Thibodeau a &#233;crit&#160;:
<br>
<span class="quotelev1">&gt; Hello all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	First off, please excuse the attached code as I may be na&#195;&#175;ve in my attempts to implement my own MPI_OP.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	I am attempting to create my own MPI_OP to use with MPI_Allreduce. I have been able to find very little examples off the net of creating MPI_OPs. My present references are &quot;MPI The complete reference Volume 1 2nd edition&quot; and some rather good slides I found at <a href="http://www.mpi-hd.mpg.de/personalhomes/stiff/MPI/">http://www.mpi-hd.mpg.de/personalhomes/stiff/MPI/</a> . I am attaching my &quot;proof of concept&quot; code which fails with:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [kyron:14074] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [kyron:14074] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [kyron:14074] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [kyron:14074] Failing at address: 0x801da600
</span><br>
<span class="quotelev1">&gt; [kyron:14074] [ 0] [0x6ffa6440]
</span><br>
<span class="quotelev1">&gt; [kyron:14074] [ 1] /home/kyron/openmpi_i686/lib/openmpi/mca_coll_tuned.so(ompi_coll_tuned_allreduce_intra_recursivedoubling+0x700) [0x6fbb0dd0]
</span><br>
<span class="quotelev1">&gt; [kyron:14074] [ 2] /home/kyron/openmpi_i686/lib/openmpi/mca_coll_tuned.so(ompi_coll_tuned_allreduce_intra_dec_fixed+0xb2) [0x6fbae9a2]
</span><br>
<span class="quotelev1">&gt; [kyron:14074] [ 3] /home/kyron/openmpi_i686/lib/libmpi.so.0(PMPI_Allreduce+0x1a6) [0x6ff61e86]
</span><br>
<span class="quotelev1">&gt; [kyron:14074] [ 4] AllReduceTest(main+0x180) [0x8048ee8]
</span><br>
<span class="quotelev1">&gt; [kyron:14074] [ 5] /lib/libc.so.6(__libc_start_main+0xe3) [0x6fcbd823]
</span><br>
<span class="quotelev1">&gt; [kyron:14074] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Eric Thibodeau
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3018/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3019.php">hpetit_at_[hidden]: "[OMPI users] MPI 1.2 stuck in pthread_condition_wait"</a>
<li><strong>Previous message:</strong> <a href="3017.php">Eric Thibodeau: "[OMPI users] &quot;Address not mapped&quot; error on user defined MPI_OP function"</a>
<li><strong>In reply to:</strong> <a href="3017.php">Eric Thibodeau: "[OMPI users] &quot;Address not mapped&quot; error on user defined MPI_OP function"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3020.php">Eric Thibodeau: "Re: [OMPI users] &quot;Address not mapped&quot; error on user defined MPI_OP function"</a>
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
