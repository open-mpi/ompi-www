<?
$subject_val = "Re: [OMPI users] openmpi -cc=&lt;compiler name&gt; option";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 22 17:09:47 2011" -->
<!-- isoreceived="20110922210947" -->
<!-- sent="Thu, 22 Sep 2011 17:09:38 -0400" -->
<!-- isosent="20110922210938" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi -cc=&amp;lt;compiler name&amp;gt; option" -->
<!-- id="4E7BA412.8030806_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="737AFE8D-A4A5-49EA-A9C3-5C9972828D27_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi -cc=&lt;compiler name&gt; option<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-22 17:09:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17399.php">Jeff Squyres: "Re: [OMPI users] openmpi -cc=&lt;compiler name&gt; option"</a>
<li><strong>Previous message:</strong> <a href="17397.php">Uday Kumar Reddy B: "Re: [OMPI users] openmpi -cc=&lt;compiler name&gt; option"</a>
<li><strong>In reply to:</strong> <a href="17396.php">Jeff Squyres: "Re: [OMPI users] openmpi -cc=&lt;compiler name&gt; option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17406.php">Uday Kumar Reddy B: "Re: [OMPI users] openmpi -cc=&lt;compiler name&gt; option"</a>
<li><strong>Reply:</strong> <a href="17406.php">Uday Kumar Reddy B: "Re: [OMPI users] openmpi -cc=&lt;compiler name&gt; option"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Sep 22, 2011, at 4:17 PM, Uday Kumar Reddy B wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Yes, but I can't find anything about -cc in openmpi's mpicc man page. So, -cc should either not be supported or work as per mpich's mpicc if you are wrapping around it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpicc has no way of knowing that an option is not supposed to work.  It only knows about a small number of options that it can understand (e.g., --showme).  Any other command line tokens are passed through to the underlying compiler.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; More specifically: how is mpicc supposed to know that any given option was intended for mpicc and not the underlying compiler, particularly the ones that it doesn't support?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Uday
<br>
<p>If you want to use icc (instead of gcc or whatever is under your OpenMPI),
<br>
just download the OpenMPI tarball
<br>
to say /home/uday/install/openmpi, untar it,
<br>
and build it with icc [and I would guess, with icpc and ifort as well].
<br>
Configure it with --prefix=/your/favorite/directory (e.g. something 
<br>
under your home directory, and pass the compiler names to it CC=icc,
<br>
CXX=icpc, F77=ifort, FC=ifort.
<br>
Use the prefix so as not to mix it
<br>
with other MPI flavors that may be there.
<br>
Building takes three steps: 1) configure; 2) make; 3) make install.
<br>
Then set your PATH and LD_LIBRARY_PATH to point to the bin and lib
<br>
subdirectories of /your/favorite/directory.
<br>
In case of doubts, read the README file and the OpenMPI FAQ.
<br>
You're good to go.
<br>
That one will have icc under mpicc's hood, which I guess
<br>
is what you want.
<br>
It is that simple.
<br>
<p>My two cents,
<br>
Gus Correa
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17399.php">Jeff Squyres: "Re: [OMPI users] openmpi -cc=&lt;compiler name&gt; option"</a>
<li><strong>Previous message:</strong> <a href="17397.php">Uday Kumar Reddy B: "Re: [OMPI users] openmpi -cc=&lt;compiler name&gt; option"</a>
<li><strong>In reply to:</strong> <a href="17396.php">Jeff Squyres: "Re: [OMPI users] openmpi -cc=&lt;compiler name&gt; option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17406.php">Uday Kumar Reddy B: "Re: [OMPI users] openmpi -cc=&lt;compiler name&gt; option"</a>
<li><strong>Reply:</strong> <a href="17406.php">Uday Kumar Reddy B: "Re: [OMPI users] openmpi -cc=&lt;compiler name&gt; option"</a>
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
