<?
$subject_val = "Re: [OMPI users] GCC extendability to OpenMPI Specification";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  4 03:44:47 2008" -->
<!-- isoreceived="20080604074447" -->
<!-- sent="Wed, 4 Jun 2008 09:44:53 +0200" -->
<!-- isosent="20080604074453" -->
<!-- name="Andreas Sch&#228;fer" -->
<!-- email="gentryx_at_[hidden]" -->
<!-- subject="Re: [OMPI users] GCC extendability to OpenMPI Specification" -->
<!-- id="20080604074453.GA5627_at_hex.inf-ra.uni-jena.de" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="3efa6bfc0806040023qe7ee1e5ufe73b73e5976309_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] GCC extendability to OpenMPI Specification<br>
<strong>From:</strong> Andreas Sch&#228;fer (<em>gentryx_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-04 03:44:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5790.php">Andreas Schäfer: "Re: [OMPI users] Open MPI instructional videos"</a>
<li><strong>Previous message:</strong> <a href="5788.php">Mukesh K Srivastava: "[OMPI users] GCC extendability to OpenMPI Specification"</a>
<li><strong>In reply to:</strong> <a href="5788.php">Mukesh K Srivastava: "[OMPI users] GCC extendability to OpenMPI Specification"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5791.php">Joe Landman: "Re: [OMPI users] GCC extendability to OpenMPI Specification"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Mukesh,
<br>
<p>Open MPI is an implementation of the MPI standard. Its API is thus the
<br>
one of a library, which is contrary to, say OpenMP, which requires
<br>
changes to the compiler. 
<br>
<p>Open MPI already supports C, C++ and Fortran for virtually any
<br>
compiler and platform.
<br>
<p>For what it's worth, there is little room to modify a compiler to
<br>
improve MPI bindings (maybe except for this[1]) without breaking the
<br>
whole MPI interface. How would you envision such a change?
<br>
<p>HTH
<br>
-Andreas
<br>
<p><p>[1] 
<br>
@inproceedings{DBLP:conf/pvm/Renault07,
<br>
&nbsp;&nbsp;author    = {{\'E}ric Renault},
<br>
&nbsp;&nbsp;title     = {Extended MPICC to Generate MPI Derived Datatypes from C
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Datatypes Automatically},
<br>
&nbsp;&nbsp;booktitle = {PVM/MPI},
<br>
&nbsp;&nbsp;year      = {2007},
<br>
&nbsp;&nbsp;pages     = {307-314},
<br>
&nbsp;&nbsp;ee        = {<a href="http://dx.doi.org/10.1007/978-3-540-75416-9_42">http://dx.doi.org/10.1007/978-3-540-75416-9_42</a>},
<br>
&nbsp;&nbsp;crossref  = {DBLP:conf/pvm/2007},
<br>
&nbsp;&nbsp;bibsource = {DBLP, <a href="http://dblp.uni-trier.de">http://dblp.uni-trier.de</a>}
<br>
}
<br>
<p>@proceedings{DBLP:conf/pvm/2007,
<br>
&nbsp;&nbsp;editor    = {Franck Cappello and
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thomas H{\'e}rault and
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jack Dongarra},
<br>
&nbsp;&nbsp;title     = {Recent Advances in Parallel Virtual Machine and Message
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Passing Interface, 14th European PVM/MPI User's Group Meeting,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Paris, France, September 30 - October 3, 2007, Proceedings},
<br>
&nbsp;&nbsp;booktitle = {PVM/MPI},
<br>
&nbsp;&nbsp;publisher = {Springer},
<br>
&nbsp;&nbsp;series    = {Lecture Notes in Computer Science},
<br>
&nbsp;&nbsp;volume    = {4757},
<br>
&nbsp;&nbsp;year      = {2007},
<br>
&nbsp;&nbsp;isbn      = {978-3-540-75415-2},
<br>
&nbsp;&nbsp;bibsource = {DBLP, <a href="http://dblp.uni-trier.de">http://dblp.uni-trier.de</a>}
<br>
}
<br>
<p><p><pre>
-- 
============================================
Andreas Sch&#228;fer
Cluster and Metacomputing Working Group
Friedrich-Schiller-Universit&#228;t Jena, Germany
PGP/GPG key via keyserver
I'm a bright... <a href="http://www.the-brights.net">http://www.the-brights.net</a>
============================================
(\___/)
(+'.'+)
(&quot;)_(&quot;)
This is Bunny. Copy and paste Bunny into your 
signature to help him gain world domination!

</pre>
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5789/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5790.php">Andreas Schäfer: "Re: [OMPI users] Open MPI instructional videos"</a>
<li><strong>Previous message:</strong> <a href="5788.php">Mukesh K Srivastava: "[OMPI users] GCC extendability to OpenMPI Specification"</a>
<li><strong>In reply to:</strong> <a href="5788.php">Mukesh K Srivastava: "[OMPI users] GCC extendability to OpenMPI Specification"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5791.php">Joe Landman: "Re: [OMPI users] GCC extendability to OpenMPI Specification"</a>
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
