<?
$subject_val = "Re: [OMPI users] MPI_BCAST and fortran subarrays";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 15 03:26:26 2011" -->
<!-- isoreceived="20111215082626" -->
<!-- sent="Thu, 15 Dec 2011 09:28:18 +0100" -->
<!-- isosent="20111215082818" -->
<!-- name="Patrick Begou" -->
<!-- email="Patrick.Begou_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_BCAST and fortran subarrays" -->
<!-- id="4EE9AFA2.1020103_at_hmg.inpg.fr" -->
<!-- charset="ISO-8859-15" -->
<!-- inreplyto="7B82887B-8FA9-41CC-AF0B-8A7B8B895EFC_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_BCAST and fortran subarrays<br>
<strong>From:</strong> Patrick Begou (<em>Patrick.Begou_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-15 03:28:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17984.php">Joao Amaral: "Re: [OMPI users] Open MPI 1.5.4 on windows g95 / mpif90 support"</a>
<li><strong>Previous message:</strong> <a href="17982.php">Shiqing Fan: "Re: [OMPI users] Open MPI 1.5.4 on windows g95 / mpif90 support"</a>
<li><strong>In reply to:</strong> <a href="17966.php">Gustavo Correa: "Re: [OMPI users] MPI_BCAST and fortran subarrays"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17986.php">Joao Amaral: "[OMPI users] &quot;almost there&quot; in getting MPI to run"</a>
<li><strong>Reply:</strong> <a href="17986.php">Joao Amaral: "[OMPI users] &quot;almost there&quot; in getting MPI to run"</a>
<li><strong>Reply:</strong> <a href="17990.php">Jeff Squyres: "Re: [OMPI users] MPI_BCAST and fortran subarrays"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks all for your converging point of view about my problem.
<br>
Portability is also an important point for this code so there is  only one 
<br>
solution: using user defined data type.
<br>
In my mind, this was more for C or C++ code without the fortran subarray 
<br>
behavior but I was in error.
<br>
<p>The problem is a little bit more complicated as the real code is a 3D 
<br>
application but I think it's not so complicated to implement this strategy.
<br>
<p>Now I'm convinced that  user defined data type is also an important MPI feature 
<br>
in Fortran.
<br>
<p>Patrick
<br>
<p><pre>
-- 
===============================================================
|  Equipe M.O.S.T.         | <a href="http://most.hmg.inpg.fr">http://most.hmg.inpg.fr</a>          |
|  Patrick BEGOU           |       ------------               |
|  LEGI                    | mailto:Patrick.Begou_at_[hidden] |
|  BP 53 X                 | Tel 04 76 82 51 35               |
|  38041 GRENOBLE CEDEX    | Fax 04 76 82 52 71               |
===============================================================
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17984.php">Joao Amaral: "Re: [OMPI users] Open MPI 1.5.4 on windows g95 / mpif90 support"</a>
<li><strong>Previous message:</strong> <a href="17982.php">Shiqing Fan: "Re: [OMPI users] Open MPI 1.5.4 on windows g95 / mpif90 support"</a>
<li><strong>In reply to:</strong> <a href="17966.php">Gustavo Correa: "Re: [OMPI users] MPI_BCAST and fortran subarrays"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17986.php">Joao Amaral: "[OMPI users] &quot;almost there&quot; in getting MPI to run"</a>
<li><strong>Reply:</strong> <a href="17986.php">Joao Amaral: "[OMPI users] &quot;almost there&quot; in getting MPI to run"</a>
<li><strong>Reply:</strong> <a href="17990.php">Jeff Squyres: "Re: [OMPI users] MPI_BCAST and fortran subarrays"</a>
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
