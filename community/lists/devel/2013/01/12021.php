<?
$subject_val = "[OMPI devel] Open MPI Configure Script";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 28 12:50:50 2013" -->
<!-- isoreceived="20130128175050" -->
<!-- sent="Mon, 28 Jan 2013 10:50:46 -0700" -->
<!-- isosent="20130128175046" -->
<!-- name="David Beer" -->
<!-- email="dbeer_at_[hidden]" -->
<!-- subject="[OMPI devel] Open MPI Configure Script" -->
<!-- id="CAFUQeZ23whazzMp7viFY0Ue0UB32y3RktASuuYHJp9HHjMr2=A_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] Open MPI Configure Script<br>
<strong>From:</strong> David Beer (<em>dbeer_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-28 12:50:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12022.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  Open MPI Configure Script"</a>
<li><strong>Previous message:</strong> <a href="12020.php">Ralph Castain: "Re: [OMPI devel] openib unloaded before last mem dereg"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12022.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  Open MPI Configure Script"</a>
<li><strong>Reply:</strong> <a href="12022.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  Open MPI Configure Script"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
All,
<br>
<p>By way of introduction, I'm a TORQUE developer and I probably should've
<br>
joined this list - even if only to keep myself informed - years ago.
<br>
<p>At any rate, we're in the process of changing TORQUE so that it compiles
<br>
using g++ instead of gcc. We're starting to use some C++ constructs to make
<br>
our lives easier. In doing this, we've noticed that OpenMPI doesn't like
<br>
TORQUE's libraries when built by gcc, it fails at the configure time
<br>
claiming in can't find tm_init() in libtorque.so. I've been trying to track
<br>
down exactly why, and where I am now is making me think that something in
<br>
the configure script is assuming that TORQUE's libraries are compiled by
<br>
gcc. Is there someone who could advise me on how to resolve this issue?
<br>
<p><pre>
-- 
David Beer | Senior Software Engineer
Adaptive Computing
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12021/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12022.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  Open MPI Configure Script"</a>
<li><strong>Previous message:</strong> <a href="12020.php">Ralph Castain: "Re: [OMPI devel] openib unloaded before last mem dereg"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12022.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  Open MPI Configure Script"</a>
<li><strong>Reply:</strong> <a href="12022.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  Open MPI Configure Script"</a>
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
