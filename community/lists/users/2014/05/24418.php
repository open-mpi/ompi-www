<?
$subject_val = "Re: [OMPI users] Question about scheduler support";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 16 10:00:19 2014" -->
<!-- isoreceived="20140516140019" -->
<!-- sent="Fri, 16 May 2014 10:00:16 -0400" -->
<!-- isosent="20140516140016" -->
<!-- name="Maxime Boissonneault" -->
<!-- email="maxime.boissonneault_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question about scheduler support" -->
<!-- id="537619F0.9050409_at_calculquebec.ca" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="29C44E31-2E31-4731-AAB4-E0305C1C4E56_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Question about scheduler support<br>
<strong>From:</strong> Maxime Boissonneault (<em>maxime.boissonneault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-16 10:00:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24419.php">Sylvain Huet: "[OMPI users] can't disable infiniband communication"</a>
<li><strong>Previous message:</strong> <a href="24417.php">CANELA-XANDRI Oriol: "Re: [OMPI users] bug in MPI_File_set_view?"</a>
<li><strong>In reply to:</strong> <a href="24416.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Question about scheduler support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24420.php">Fabricio Cannini: "Re: [OMPI users] Question about scheduler support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 2014-05-16 09:06, Jeff Squyres (jsquyres) a &#233;crit :
<br>
<span class="quotelev1">&gt; On May 15, 2014, at 8:00 PM, Fabricio Cannini &lt;fcannini_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Nobody is disagreeing that one could find a way to make CMake work - all we are saying is that (a) CMake has issues too, just like autotools, and (b) we have yet to see a compelling reason to undertake the transition...which would have to be a *very* compelling one.
</span><br>
<span class="quotelev2">&gt;&gt; I was simply agreeing with Maxime about why it could work. ;)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But if you and the other devels are fine with it, i'm fine too.
</span><br>
<span class="quotelev1">&gt; FWIW, simply for my own curiosity's sake, if someone could confirm deny whether cmake:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. Supports the following compiler suites: GNU (that's a given, I assume), Clang, OS X native (which is variants of GNU and Clang), Absoft, PGI, Intel, Cray, HP-UX, Oracle Solaris (Linux and Solaris), Tru64, Microsoft Visual, IBM BlueGene (I think that's gcc, but am not entirely sure).  (some of these matter mainly to hwloc, not necessarily OMPI)
</span><br>
I have built projects with CMake using GNU, Intel, PGI, OS X native. 
<br>
CMake claims to make MSV projects, so I'm assuming MS Visual works. I 
<br>
can't say about the others.
<br>
<span class="quotelev1">&gt; 2. Bootstrap a tarball such that an end user does not need to have cmake installed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
That, I have no clue, but they do have a page about bootstrapping cmake 
<br>
itself
<br>
<a href="http://www.cmake.org/cmake/help/install.html">http://www.cmake.org/cmake/help/install.html</a>
<br>
I am not sure if this is what you mean.
<br>
<p>If there is no existing CMake installation, a bootstrap script is provided:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;./bootstrap
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;make
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;make install
<br>
<p>(Note: the make install step is optional, cmake will run from the build 
<br>
directory.)
<br>
<p>According to this, you could have a tarball including CMake and instruct 
<br>
the users to run some variant of (or make your own bootstrap script 
<br>
including this)
<br>
&nbsp;&nbsp;./bootstrap &amp;&amp; make &amp;&amp; ./cmake . &amp;&amp; make &amp;&amp; make install
<br>
<p>Now that I think about it, OpenFOAM uses CMake and bootstraps it if it 
<br>
is not install, so it is certainly possible.
<br>
<p><p>Maxime
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24418/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24419.php">Sylvain Huet: "[OMPI users] can't disable infiniband communication"</a>
<li><strong>Previous message:</strong> <a href="24417.php">CANELA-XANDRI Oriol: "Re: [OMPI users] bug in MPI_File_set_view?"</a>
<li><strong>In reply to:</strong> <a href="24416.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Question about scheduler support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24420.php">Fabricio Cannini: "Re: [OMPI users] Question about scheduler support"</a>
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
