<?
$subject_val = "Re: [OMPI users] Performance: MPICH2 vs OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct  9 10:24:05 2008" -->
<!-- isoreceived="20081009142405" -->
<!-- sent="Thu, 9 Oct 2008 10:24:01 -0400" -->
<!-- isosent="20081009142401" -->
<!-- name="Brian Dobbins" -->
<!-- email="bdobbins_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Performance: MPICH2 vs OpenMPI" -->
<!-- id="2b5e0c120810090724s19494344s5d5caf433b24cf35_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="404C6CF5-C1E0-4EF5-84FC-74197D5EC2C3_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Performance: MPICH2 vs OpenMPI<br>
<strong>From:</strong> Brian Dobbins (<em>bdobbins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-09 10:24:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6922.php">Eugene Loh: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="6920.php">Jeff Squyres: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="6920.php">Jeff Squyres: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6922.php">Eugene Loh: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<li><strong>Reply:</strong> <a href="6922.php">Eugene Loh: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Oct 9, 2008 at 10:13 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Oct 9, 2008, at 8:06 AM, Sangamesh B wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI : 120m 6s
</span><br>
<span class="quotelev2">&gt;&gt; MPICH2 :  67m 44s
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That seems to indicate that something else is going on -- with -np 1, there
</span><br>
<span class="quotelev1">&gt; should be no MPI communication, right?  I wonder if the memory allocator
</span><br>
<span class="quotelev1">&gt; performance is coming into play here.
</span><br>
<p><p>&nbsp;&nbsp;I'd be more inclined to double-check how the Gromacs app is being compiled
<br>
in the first place - I wouldn't think the OpenMPI memory allocator would
<br>
make anywhere near that much difference.  Sangamesh, do you know what
<br>
command line was used to compile both of these?  Someone correct me if I'm
<br>
wrong, but *if* MPICH2 embeds optimization flags in the 'mpicc' command and
<br>
OpenMPI does not, then if he's not specifying any optimization flags in the
<br>
compilation of Gromacs, MPICH2 will pass its embedded ones on to the Gromacs
<br>
compile and be faster.  I'm rusty on my GCC, too, though - does it default
<br>
to an O2 level, or does it default to no optimizations?
<br>
<p>&nbsp;&nbsp;Since the benchmark is readily available, I'll try running it later
<br>
today.. didn't get a chance last night.
<br>
<p>&nbsp;&nbsp;Cheers,
<br>
&nbsp;&nbsp;- Brian
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6921/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6922.php">Eugene Loh: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="6920.php">Jeff Squyres: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="6920.php">Jeff Squyres: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6922.php">Eugene Loh: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<li><strong>Reply:</strong> <a href="6922.php">Eugene Loh: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
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
