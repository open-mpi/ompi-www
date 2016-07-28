<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Feb  8 04:02:31 2007" -->
<!-- isoreceived="20070208090231" -->
<!-- sent="Thu, 08 Feb 2007 14:31:39 +0530" -->
<!-- isosent="20070208090139" -->
<!-- name="Alok G Singh" -->
<!-- email="alokgs_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI C++ serialisation" -->
<!-- id="x7abzpdnv0.fsf_at_mobius.cdacb.ernet.in" -->
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
<strong>From:</strong> Alok G Singh (<em>alokgs_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-02-08 04:01:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2641.php">Jeff Squyres: "Re: [OMPI users] Does Open MPI  &quot;Realy&quot; support AIX?"</a>
<li><strong>Previous message:</strong> <a href="2639.php">Alex Tumanov: "Re: [OMPI users] first time user - can run mpi job SMP but not over cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2648.php">Doug Gregor: "Re: [OMPI users] OpenMPI C++ serialisation"</a>
<li><strong>Reply:</strong> <a href="2648.php">Doug Gregor: "Re: [OMPI users] OpenMPI C++ serialisation"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Before I begin, I apologise if this has been answered already. I did
<br>
search the archives but I didn't find a complete answer.
<br>
<p>I would like to send and receive MPI messages consisting of the stdlib
<br>
(STL) containers -- map, list, etc.
<br>
<p>Upon searching the archives, I came upon this [1] which seemed to
<br>
something like what OOMPI aimed for. (I did try OOMPI but I couldn't
<br>
find a way to send stdlib containers, building a user defined datatype
<br>
but it was too cumbersome and the mailing list and development seems
<br>
to be dead).
<br>
<p>I also came across a presentation [2] from PVM/MPI 06, but I could
<br>
find any code to go with it. The author seems to suggest the Boost
<br>
serialisation library (which does support stdlib containers). Is this
<br>
the way to go ? I have never used to Boost before.
<br>
<p>Pointers to any other methodologies would also be welcome.
<br>
<p>TIA.
<br>
<p>Footnotes: 
<br>
[1]  <a href="https://sourcehaven.osl.iu.edu/svn/trillium/trunk/lamtests/dtyp/datatype_cxx.cc">https://sourcehaven.osl.iu.edu/svn/trillium/trunk/lamtests/dtyp/datatype_cxx.cc</a>
<br>
[2]  <a href="http://www.pvmmpi06.org/talks/ObjMsgPass/kambadur.pdf">http://www.pvmmpi06.org/talks/ObjMsgPass/kambadur.pdf</a>
<br>
<p><pre>
-- 
Alok
NOWPRINT. NOWPRINT. Clemclone, back to the shadows again.
		-- The Firesign Theater
-- 
This message has been scanned for viruses and
dangerous content by MailScanner, and is
believed to be clean.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2641.php">Jeff Squyres: "Re: [OMPI users] Does Open MPI  &quot;Realy&quot; support AIX?"</a>
<li><strong>Previous message:</strong> <a href="2639.php">Alex Tumanov: "Re: [OMPI users] first time user - can run mpi job SMP but not over cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2648.php">Doug Gregor: "Re: [OMPI users] OpenMPI C++ serialisation"</a>
<li><strong>Reply:</strong> <a href="2648.php">Doug Gregor: "Re: [OMPI users] OpenMPI C++ serialisation"</a>
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
