<?
$subject_val = "[OMPI devel] Amateur Guidance";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Nov  2 12:18:50 2008" -->
<!-- isoreceived="20081102171850" -->
<!-- sent="Sun, 2 Nov 2008 17:18:46 +0000" -->
<!-- isosent="20081102171846" -->
<!-- name="Timothy Hayes" -->
<!-- email="hayesti_at_[hidden]" -->
<!-- subject="[OMPI devel] Amateur Guidance" -->
<!-- id="f6ed2720811020918t54eb447ft57b4a7d229288aa5_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] Amateur Guidance<br>
<strong>From:</strong> Timothy Hayes (<em>hayesti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-02 12:18:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4842.php">Eugene Loh: "Re: [OMPI devel] Amateur Guidance"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/10/4840.php">Ralph Castain: "Re: [OMPI devel] Commit r19868"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4842.php">Eugene Loh: "Re: [OMPI devel] Amateur Guidance"</a>
<li><strong>Reply:</strong> <a href="4842.php">Eugene Loh: "Re: [OMPI devel] Amateur Guidance"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello everyone,
<br>
<p>I'm a regular OpenMPI user but I'm new to the strange world of development
<br>
and hence this mailing list. I'm currently working on a project that
<br>
involves OpenMPI and I was wondering if I might get some guidance and
<br>
pointers in the right direction.
<br>
In brief, my project is trying to make an efficient transport module in
<br>
OpenMPI for use in virtualised environments (specifically Xen). At the
<br>
moment, Xen has a very inefficient way of inter-domain communication, and
<br>
although a myriad of solutions have appeared, they are all usually quite
<br>
application specific. I'm basing my project on a paper I read about
<br>
efficient message passing in interdomain virtualised guests.
<br>
The problem I'm having is jumping into the OpenMPI code. I've read two
<br>
papers I found on the homepage: &quot;Open MPI: Goals, Concept, and Design of a
<br>
Next Generation MPI Implementation&quot; and &quot;TEG: A High-Performance, Scalable,
<br>
Multi-Network Point-to-Point Communications Methodology&quot; which gave me some
<br>
insight about the MCA, PML and PTL. However, I'm finding it quite difficult
<br>
to get a foothold into the codebase and I'm wondering if anyone might be
<br>
able to point me to a guide or some documentation that might help get me
<br>
started.
<br>
<p>I have a vague idea that I'm going to need to make a specific PML that uses
<br>
my own PTL for inter-domain Xen guests. Should the PTL fail (e.g. if the
<br>
guest migrated to another physical machine), the PML would then switch to
<br>
TCP/IP instead. Migrating back and switching back to my own PTL sounds
<br>
trickier. I've read there's an out of band communication socket between all
<br>
guests for this sort of thing, but once again I'm a bit lost in the detail.
<br>
<p>I'm very eager to do this project well and contribute to the OpenMPI
<br>
community, and if anyone has some advice or pointers I'd really appreciate
<br>
it.
<br>
<p>Kind regards
<br>
<p>Tim
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-4841/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4842.php">Eugene Loh: "Re: [OMPI devel] Amateur Guidance"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/10/4840.php">Ralph Castain: "Re: [OMPI devel] Commit r19868"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4842.php">Eugene Loh: "Re: [OMPI devel] Amateur Guidance"</a>
<li><strong>Reply:</strong> <a href="4842.php">Eugene Loh: "Re: [OMPI devel] Amateur Guidance"</a>
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
