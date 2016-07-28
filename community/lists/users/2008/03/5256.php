<?
$subject_val = "[OMPI users] some NUMA / affinity questions";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 24 06:29:39 2008" -->
<!-- isoreceived="20080324102939" -->
<!-- sent="Mon, 24 Mar 2008 06:29:32 -0400" -->
<!-- isosent="20080324102932" -->
<!-- name="Mark Kosmowski" -->
<!-- email="mark.kosmowski_at_[hidden]" -->
<!-- subject="[OMPI users] some NUMA / affinity questions" -->
<!-- id="c84311bb0803240329i73c6843g666bb0854dc8d1a_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] some NUMA / affinity questions<br>
<strong>From:</strong> Mark Kosmowski (<em>mark.kosmowski_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-24 06:29:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5257.php">Jeff Squyres: "Re: [OMPI users] RHEL 5.2 and SLES10 SP2 support"</a>
<li><strong>Previous message:</strong> <a href="5255.php">Wen Hao Wang: "[OMPI users] RHEL 5.2 and SLES10 SP2 support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5258.php">Jeff Squyres: "Re: [OMPI users] some NUMA / affinity questions"</a>
<li><strong>Reply:</strong> <a href="5258.php">Jeff Squyres: "Re: [OMPI users] some NUMA / affinity questions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have a successful ompi installation and my software runs across my
<br>
humble cluster of three dual-Opteron (single core) nodes on OpenSUSE
<br>
10.2.  I'm planning to upgrade some RAM soon and have been thinking of
<br>
playing with affinity, since each cpu will have it's own DIMMs after
<br>
the upgrade.  I have read the FAQ and know to use &quot;--mca
<br>
mpi_paffinity_alone 1&quot; to enable affinity.
<br>
<p>It looks like I am running ompi 1.1.4 (see below).
<br>
<p>mark_at_LT:~&gt; ompi_info | grep affinity
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA paffinity: linux (MCA v1.0, API v1.0, Component v1.1.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA maffinity: first_use (MCA v1.0, API v1.0, Component v1.1.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA maffinity: libnuma (MCA v1.0, API v1.0, Component v1.1.4)
<br>
<p>Does this old version of ompi do a good job of implementing affinity
<br>
or would it behoove me to use the current version if I am interested
<br>
in trying affinity?
<br>
<p>What sorts of time gains do people typically see with affinity?  (I'm
<br>
a chemistry student running planewave solid state calculation software
<br>
if this helps with the question).
<br>
<p>Lastly, two of the three machines will have all of their DIMM slots
<br>
populated by equal sized DIMMs.  However, one of my machines has two
<br>
processors, each of which having four DIMM slots.  This machine will
<br>
be getting 4 @ 1 Gb DIMMs and 2 @ 2 Gb DIMMs.  i am assuming that the
<br>
best thing for affinity would be to put all of the 1 Gb DIMMs to one
<br>
processor and the 2 Gb DIMMs to the other and to put the 2 Gb DIMMs in
<br>
slots 0 and 1.  Does it matter which processor gets which set of
<br>
DIMMs?
<br>
<p>Thank you,
<br>
<p>Mark
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5257.php">Jeff Squyres: "Re: [OMPI users] RHEL 5.2 and SLES10 SP2 support"</a>
<li><strong>Previous message:</strong> <a href="5255.php">Wen Hao Wang: "[OMPI users] RHEL 5.2 and SLES10 SP2 support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5258.php">Jeff Squyres: "Re: [OMPI users] some NUMA / affinity questions"</a>
<li><strong>Reply:</strong> <a href="5258.php">Jeff Squyres: "Re: [OMPI users] some NUMA / affinity questions"</a>
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
