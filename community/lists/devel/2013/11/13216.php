<?
$subject_val = "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn-full] svn:open-mpi r29615 - in trunk: . contrib contrib/dist/linux debian debian/source";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  6 18:13:54 2013" -->
<!-- isoreceived="20131106231354" -->
<!-- sent="Wed, 6 Nov 2013 23:13:32 +0000" -->
<!-- isosent="20131106231332" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn-full] svn:open-mpi r29615 - in trunk: . contrib contrib/dist/linux debian debian/source" -->
<!-- id="CEA01A9D.14F17%bwbarre_at_sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="712E1FA0-51CC-428E-9988-802E12D35CCD_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn-full] svn:open-mpi r29615 - in trunk: . contrib contrib/dist/linux debian debian/source<br>
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-06 18:13:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13217.php">Solibakke Per Bjarte: "[OMPI devel] MPIRUN error message after ./configure and sudo make all install..."</a>
<li><strong>Previous message:</strong> <a href="13215.php">Sylvestre Ledru: "Re: [OMPI devel] debian/ directory"</a>
<li><strong>In reply to:</strong> <a href="13214.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29615 - in trunk: . contrib contrib/dist/linux debian debian/source"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 11/6/13 4:07 PM, &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;Afraid I couldn't parse that debian link - no idea what any of it meant,
</span><br>
<span class="quotelev1">&gt;and there was no identified problem listed there.
</span><br>
<p>There's a bugs column you can click on the find the list of outstanding
<br>
bugs.
<br>
<p><span class="quotelev1">&gt;My concern here is that we seem to be putting something in the OMPI code
</span><br>
<span class="quotelev1">&gt;base that has nothing to do with OMPI itself. Debian has had an OMPI
</span><br>
<span class="quotelev1">&gt;package for awhile now, and inserting the required infrastructure to
</span><br>
<span class="quotelev1">&gt;create the desired package is part of that game. I have yet to see an
</span><br>
<span class="quotelev1">&gt;explanation for what changed at their level that now requires a change at
</span><br>
<span class="quotelev1">&gt;ours, so perhaps that would have been the place to start.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Can someone explain what happened at the Debian packaging level? Maybe a
</span><br>
<span class="quotelev1">&gt;directory is now required, or maybe some other solution would be
</span><br>
<span class="quotelev1">&gt;better/appropriate.
</span><br>
<p>I don't think anything changed on the Debian / Ubuntu front.  What
<br>
Sylvestre and Chris explained is that they're going to ignore what
<br>
Mellanox did and use their own packaging scripts.  What changed is that
<br>
Mellanox decided, with no prior discussion, to add a set of Debian
<br>
packages, for reasons that have yet to be explained.
<br>
<p>Mellanox, to be clear, I understand why you've put the files in /debian/
<br>
(as opposed to /contrib).  What I don't understand is why you added them
<br>
in the first place.  Could you please do so?
<br>
<p>Brian
<br>
<p><pre>
--
  Brian W. Barrett
  Scalable System Software Group
  Sandia National Laboratories
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13217.php">Solibakke Per Bjarte: "[OMPI devel] MPIRUN error message after ./configure and sudo make all install..."</a>
<li><strong>Previous message:</strong> <a href="13215.php">Sylvestre Ledru: "Re: [OMPI devel] debian/ directory"</a>
<li><strong>In reply to:</strong> <a href="13214.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29615 - in trunk: . contrib contrib/dist/linux debian debian/source"</a>
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
