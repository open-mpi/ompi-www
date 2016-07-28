<?
$subject_val = "Re: [OMPI users] Questions about binding processes";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 10 06:42:37 2010" -->
<!-- isoreceived="20100510104237" -->
<!-- sent="Mon, 10 May 2010 06:42:07 -0400" -->
<!-- isosent="20100510104207" -->
<!-- name="Terry Dontje" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Questions about binding processes" -->
<!-- id="4BE7E2FF.7090507_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20100510111728.12036nqqfndvirl4_at_messagerie.si.c-s.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] Questions about binding processes<br>
<strong>From:</strong> Terry Dontje (<em>terry.dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-10 06:42:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12990.php">Shiqing Fan: "Re: [OMPI users] Fortran support on Windows Open-MPI"</a>
<li><strong>Previous message:</strong> <a href="12988.php">NGUYEN Laurent: "[OMPI users] Questions about binding processes"</a>
<li><strong>In reply to:</strong> <a href="12988.php">NGUYEN Laurent: "[OMPI users] Questions about binding processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12991.php">NGUYEN Laurent: "Re: [OMPI users] Questions about binding processes"</a>
<li><strong>Reply:</strong> <a href="12991.php">NGUYEN Laurent: "Re: [OMPI users] Questions about binding processes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
NGUYEN Laurent wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm trying to understand the difference between theses two options:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot; --mca mpi_paffinity_alone 1 &quot;
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev1">&gt; &quot; --bind-to-core &quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To me, it's the same thing (may be paffinity have maffinity in 
</span><br>
<span class="quotelev1">&gt; addition) but the purpose af theses options is to bind MPI process to 
</span><br>
<span class="quotelev1">&gt; processors. Which is the best to obtain performances?
</span><br>
<span class="quotelev1">&gt;
</span><br>
They are essentially the same thing.  The history is that 
<br>
mpi_paffinity_alone came first.  Then a group of us decided that we 
<br>
wanted to be able to do more than just core binding (like bind-to-socket 
<br>
and eventually others) so we decided a more descriptive name made 
<br>
sense.  I would suggest sticking with --bind-to-core just so thinks look 
<br>
clear in your mpirun command.  That and the possibility that one day 
<br>
mpi_paffinity_alone is deprecated.
<br>
<span class="quotelev1">&gt; I have another question about processes bindings: I use rankfiles to 
</span><br>
<span class="quotelev1">&gt; have a precise binding of my process on processor or socket (it useful 
</span><br>
<span class="quotelev1">&gt; for hybrid computing like pthread or OpenMP). I read you don't want to 
</span><br>
<span class="quotelev1">&gt; maintain this feature: how can I substitute it?
</span><br>
IMO, I say we do support it and will until we find a suitable 
<br>
replacement (there is a proposal that Jeff and I have bounced around to 
<br>
each other intermittently but have not brought it to the community).   
<br>
There have been discussion about lack of testing of rankfiles and other 
<br>
binding related items making it hard for some to feel comfortable about 
<br>
putting code back that may have side negative side affects.  But I don't 
<br>
equate that to mean we will not support or take bug reports on the 
<br>
rankfile feature.
<br>
<p><pre>
-- 
Oracle
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.650.633.7054
Oracle * - Performance Technologies*
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</pre>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12989/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-12989/02-part" alt="picture">
<!-- attachment="02-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12990.php">Shiqing Fan: "Re: [OMPI users] Fortran support on Windows Open-MPI"</a>
<li><strong>Previous message:</strong> <a href="12988.php">NGUYEN Laurent: "[OMPI users] Questions about binding processes"</a>
<li><strong>In reply to:</strong> <a href="12988.php">NGUYEN Laurent: "[OMPI users] Questions about binding processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12991.php">NGUYEN Laurent: "Re: [OMPI users] Questions about binding processes"</a>
<li><strong>Reply:</strong> <a href="12991.php">NGUYEN Laurent: "Re: [OMPI users] Questions about binding processes"</a>
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
