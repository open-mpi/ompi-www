<?
$subject_val = "[OMPI users] OpenMPI status on NetBSD (works!)";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Dec 13 23:18:20 2009" -->
<!-- isoreceived="20091214041820" -->
<!-- sent="Mon, 14 Dec 2009 07:18:14 +0300" -->
<!-- isosent="20091214041814" -->
<!-- name="Aleksej Saushev" -->
<!-- email="asau_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI status on NetBSD (works!)" -->
<!-- id="87638a89yx.fsf_at_inbox.ru" -->
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
<strong>Subject:</strong> [OMPI users] OpenMPI status on NetBSD (works!)<br>
<strong>From:</strong> Aleksej Saushev (<em>asau_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-13 23:18:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11527.php">Sergio Díaz: "Re: [OMPI users] checkpoint opempi-1.3.3+sge62"</a>
<li><strong>Previous message:</strong> <a href="11525.php">Kritiraj Sajadah: "[OMPI users] problem restarting multiprocess mpi application"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;&nbsp;Hello!
<br>
<p>As result of our joint efforts (mostly of Kevin Buckley),
<br>
I'm able to run SKaMPI benchmarks on NetBSD 5.99.22.
<br>
You can find the resulting pkgsrc package at
<br>
<p><a href="http://cvsweb.netbsd.org/bsdweb.cgi/pkgsrc/parallel/openmpi/?only_with_tag=MAIN">http://cvsweb.netbsd.org/bsdweb.cgi/pkgsrc/parallel/openmpi/?only_with_tag=MAIN</a>
<br>
<p>Patches are at:
<br>
<p><a href="http://cvsweb.netbsd.org/bsdweb.cgi/pkgsrc/parallel/openmpi/patches/?only_with_tag=MAIN">http://cvsweb.netbsd.org/bsdweb.cgi/pkgsrc/parallel/openmpi/patches/?only_with_tag=MAIN</a>
<br>
<p>Of those:
<br>
&nbsp;- patch-aa deals with RPATH, it was needed at some point and I want to
<br>
revisit it to check if it is needed still;
<br>
&nbsp;- patches patch-a[b-g] deal with deficiency in OpenMPI build system,
<br>
which doesn't allow using our libltdl and insist on using
<br>
non-functioning bundled one;
<br>
&nbsp;- patch-ah implements configuration using getifaddrs,
<br>
it is unclear why OpenMPI skips link local addresses preventing thus
<br>
zeroconf usage, I have disabled it after some thought,
<br>
it is unclear what to do for IPv6 configuration in similar case,
<br>
I've left that part unchanged;
<br>
&nbsp;- patches patch-a[ijk] adapt to packaging conventions.
<br>
<p>OpenMPI package will be in the next quarterly stable snapshot/branch 2009Q4.
<br>
<p>Compiler wrappers seem to work inside pkgsrc framework, I haven't tested
<br>
them outside yet (though by Kevin words they should work outside pkgsrc).
<br>
<p>Intermediate packages worked on Dragonfly 2.5.1 and FreeBSD 6.3.
<br>
<p><p><pre>
-- 
HE CE3OH...
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11527.php">Sergio Díaz: "Re: [OMPI users] checkpoint opempi-1.3.3+sge62"</a>
<li><strong>Previous message:</strong> <a href="11525.php">Kritiraj Sajadah: "[OMPI users] problem restarting multiprocess mpi application"</a>
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
