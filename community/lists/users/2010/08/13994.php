<?
$subject_val = "[OMPI users] OpenMPI Run-Time &quot;Freedom&quot; Question";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 12 17:53:10 2010" -->
<!-- isoreceived="20100812215310" -->
<!-- sent="Thu, 12 Aug 2010 16:53:03 -0500" -->
<!-- isosent="20100812215303" -->
<!-- name="Michael E. Thomadakis" -->
<!-- email="miket7777_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI Run-Time &amp;quot;Freedom&amp;quot; Question" -->
<!-- id="4C646D3F.7070101_at_gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="OFF854D5CF.7C53854C-ON8525777A.00467DAD-8525777A.0046E94E_at_us.ibm.com" -->
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
<strong>Subject:</strong> [OMPI users] OpenMPI Run-Time &quot;Freedom&quot; Question<br>
<strong>From:</strong> Michael E. Thomadakis (<em>miket7777_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-12 17:53:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13995.php">Ralph Castain: "Re: [OMPI users] OpenMPI Run-Time &quot;Freedom&quot; Question"</a>
<li><strong>Previous message:</strong> <a href="13993.php">Jeff Squyres: "Re: [OMPI users] MPI_Bcast issue"</a>
<li><strong>In reply to:</strong> <a href="13936.php">Richard Treumann: "Re: [OMPI users] MPI_Bcast issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13995.php">Ralph Castain: "Re: [OMPI users] OpenMPI Run-Time &quot;Freedom&quot; Question"</a>
<li><strong>Reply:</strong> <a href="13995.php">Ralph Castain: "Re: [OMPI users] OpenMPI Run-Time &quot;Freedom&quot; Question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;&nbsp;Hello OpenMPI,
<br>
<p>we have deployed OpenMPI 1.4.1 and 1.4.2 on our Intel Nehalem cluster 
<br>
using Intel compilers V 11.1.059 and 11.1.072 respectively, and one user 
<br>
has the following request:
<br>
<p>Can we build OpenMPI version say O.1 against Intel compilers version say 
<br>
I.1 but  then built an application with OpenMPI O.1 BUT then use a 
<br>
DIFFERENT Intel compiler version say I.2 to built and run this MPI 
<br>
application?
<br>
<p>I suggested to him to 1) simply try to built and run the application 
<br>
with O.1 but use Intel compilers version I.X whatever this X is and see 
<br>
if it has any issues.
<br>
<p>OR 2) If the above does not work, I would build OpenMPI O.1 against 
<br>
Intel version I.X so he can use THIS combination for his hypothetical 
<br>
application.
<br>
<p>He insists that I build OpenMPI O.1 with some version of Intel compilers 
<br>
I.Y but then at run time he would like to use *different* Intel run time 
<br>
libs at will I.Z &lt;&gt; I.X.
<br>
<p>Can you provide me with a suggestion for a sane solution to this ? :-)
<br>
<p>Best regards
<br>
<p>Michael
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13994/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13995.php">Ralph Castain: "Re: [OMPI users] OpenMPI Run-Time &quot;Freedom&quot; Question"</a>
<li><strong>Previous message:</strong> <a href="13993.php">Jeff Squyres: "Re: [OMPI users] MPI_Bcast issue"</a>
<li><strong>In reply to:</strong> <a href="13936.php">Richard Treumann: "Re: [OMPI users] MPI_Bcast issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13995.php">Ralph Castain: "Re: [OMPI users] OpenMPI Run-Time &quot;Freedom&quot; Question"</a>
<li><strong>Reply:</strong> <a href="13995.php">Ralph Castain: "Re: [OMPI users] OpenMPI Run-Time &quot;Freedom&quot; Question"</a>
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
