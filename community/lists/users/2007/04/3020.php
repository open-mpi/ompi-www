<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Apr  4 13:31:07 2007" -->
<!-- isoreceived="20070404173107" -->
<!-- sent="Wed, 4 Apr 2007 13:32:15 -0400" -->
<!-- isosent="20070404173215" -->
<!-- name="Eric Thibodeau" -->
<!-- email="kyron_at_[hidden]" -->
<!-- subject="Re: [OMPI users] &amp;quot;Address not mapped&amp;quot; error on user defined MPI_OP function" -->
<!-- id="200704041332.15575.kyron_at_neuralbs.com" -->
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
<strong>Date:</strong> 2007-04-04 13:32:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3021.php">Jeff Squyres: "Re: [OMPI users] problem with MPI_Bcast over ethernet"</a>
<li><strong>Previous message:</strong> <a href="3019.php">hpetit_at_[hidden]: "[OMPI users] MPI 1.2 stuck in pthread_condition_wait"</a>
<li><strong>In reply to:</strong> <a href="3017.php">Eric Thibodeau: "[OMPI users] &quot;Address not mapped&quot; error on user defined MPI_OP function"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
hehe...don't we all love it when a problem &quot;fixes&quot; itself. I was missing a line in my Type creation to realigne the elements correctly:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// Displacement is RELATIVE to it's first structure element!
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for(i=2; i &gt;= 0; i--) Displacement[i] -= Displacement[0]; 
<br>
<p>I'm attaching the functionnal code so that others can maybe see this one as an example ;)
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
<span class="quotelev1">&gt; 
</span><br>
<p><pre>
-- 
Eric Thibodeau
Neural Bucket Solutions Inc.

</pre>
<hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3020/AllReduceTest.c">AllReduceTest.c</a>
</ul>
<!-- attachment="AllReduceTest.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3021.php">Jeff Squyres: "Re: [OMPI users] problem with MPI_Bcast over ethernet"</a>
<li><strong>Previous message:</strong> <a href="3019.php">hpetit_at_[hidden]: "[OMPI users] MPI 1.2 stuck in pthread_condition_wait"</a>
<li><strong>In reply to:</strong> <a href="3017.php">Eric Thibodeau: "[OMPI users] &quot;Address not mapped&quot; error on user defined MPI_OP function"</a>
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
