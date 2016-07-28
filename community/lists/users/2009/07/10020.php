<?
$subject_val = "[OMPI users] Send variable size of matrices";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 21 02:23:55 2009" -->
<!-- isoreceived="20090721062355" -->
<!-- sent="Tue, 21 Jul 2009 11:53:50 +0530" -->
<!-- isosent="20090721062350" -->
<!-- name="Prasadcse Perera" -->
<!-- email="prasadcse0_at_[hidden]" -->
<!-- subject="[OMPI users] Send variable size of matrices" -->
<!-- id="610ca1a30907202323y65a89fefy79fe782b599f758d_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Send variable size of matrices<br>
<strong>From:</strong> Prasadcse Perera (<em>prasadcse0_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-21 02:23:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10021.php">Terry Frankcombe: "Re: [OMPI users] Send variable size of matrices"</a>
<li><strong>Previous message:</strong> <a href="10019.php">Ralph Castain: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10021.php">Terry Frankcombe: "Re: [OMPI users] Send variable size of matrices"</a>
<li><strong>Reply:</strong> <a href="10021.php">Terry Frankcombe: "Re: [OMPI users] Send variable size of matrices"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
I'm writing an application which requires sending some variable size of sub
<br>
matrices to a set of processes by a lead process who holds the original
<br>
matrix.  Here, the matrices are square matrices and the receiving process
<br>
doesn't  know the size of the receiving matrix. In MPI_Bcast, I have seen
<br>
that we can broadcast a whole matrix. Is there a similar way to do this with
<br>
a derived data type for the matrices which we can send a matrix without
<br>
looping the blocks ?.
<br>
<p>Thanks,
<br>
Prasad.
<br>
<pre>
-- 
<a href="http://www.codeproject.com/script/Articles/MemberArticles.aspx?amid=3489381">http://www.codeproject.com/script/Articles/MemberArticles.aspx?amid=3489381</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10020/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10021.php">Terry Frankcombe: "Re: [OMPI users] Send variable size of matrices"</a>
<li><strong>Previous message:</strong> <a href="10019.php">Ralph Castain: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10021.php">Terry Frankcombe: "Re: [OMPI users] Send variable size of matrices"</a>
<li><strong>Reply:</strong> <a href="10021.php">Terry Frankcombe: "Re: [OMPI users] Send variable size of matrices"</a>
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
