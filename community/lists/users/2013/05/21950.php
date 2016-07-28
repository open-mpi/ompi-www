<?
$subject_val = "Re: [OMPI users] basic questions about compiling OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 22 12:24:39 2013" -->
<!-- isoreceived="20130522162439" -->
<!-- sent="Wed, 22 May 2013 12:24:28 -0400" -->
<!-- isosent="20130522162428" -->
<!-- name="Tim Prince" -->
<!-- email="n8tm_at_[hidden]" -->
<!-- subject="Re: [OMPI users] basic questions about compiling OpenMPI" -->
<!-- id="519CF13C.5010505_at_aol.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="519CE574.4050809_at_rz.rwth-aachen.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] basic questions about compiling OpenMPI<br>
<strong>From:</strong> Tim Prince (<em>n8tm_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-22 12:24:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21951.php">BRADLEY, PETER C          PW: "Re: [OMPI users] Compatibility between OS, OpenMPI, and OFED"</a>
<li><strong>Previous message:</strong> <a href="21949.php">Eric Chamberland: "Re: [OMPI users] MPIIO max record size"</a>
<li><strong>In reply to:</strong> <a href="21948.php">Paul Kapinos: "Re: [OMPI users] basic questions about compiling OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21955.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: basic questions about compiling OpenMPI"</a>
<li><strong>Reply:</strong> <a href="21955.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: basic questions about compiling OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 5/22/2013 11:34 AM, Paul Kapinos wrote:
<br>
<span class="quotelev1">&gt; On 05/22/13 17:08, Blosch, Edwin L wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Apologies for not exploring the FAQ first.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No comments =)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If I want to use Intel or PGI compilers but link against the OpenMPI 
</span><br>
<span class="quotelev2">&gt;&gt; that ships with RedHat Enterprise Linux 6 (compiled with g++ I 
</span><br>
<span class="quotelev2">&gt;&gt; presume), are there any issues to watch out for, during linking?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; At least, the Fortran-90 bindings (&quot;use mpi&quot;) won't work at all 
</span><br>
<span class="quotelev1">&gt; (they're compiler-dependent.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, our way is to compile a version of Open MPI with each compiler. I 
</span><br>
<span class="quotelev1">&gt; think this is recommended.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note also that the version of Open MPI shipped with Linux is usuallu a 
</span><br>
<span class="quotelev1">&gt; bit dusty.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
The gfortran build of Fortran library, as well as the .mod USE files, 
<br>
won't work with ifort or PGI compilers.  g++ built libraries ought to 
<br>
work with sufficiently recent versions of icpc.
<br>
As noted above, it's worth while to rebuild yourself, even if you use a 
<br>
(preferably more up to date version of) gcc, which you can use along 
<br>
with one of the commercial Fortran compilers for linux.
<br>
<p><pre>
-- 
Tim Prince
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21951.php">BRADLEY, PETER C          PW: "Re: [OMPI users] Compatibility between OS, OpenMPI, and OFED"</a>
<li><strong>Previous message:</strong> <a href="21949.php">Eric Chamberland: "Re: [OMPI users] MPIIO max record size"</a>
<li><strong>In reply to:</strong> <a href="21948.php">Paul Kapinos: "Re: [OMPI users] basic questions about compiling OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21955.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: basic questions about compiling OpenMPI"</a>
<li><strong>Reply:</strong> <a href="21955.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: basic questions about compiling OpenMPI"</a>
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
