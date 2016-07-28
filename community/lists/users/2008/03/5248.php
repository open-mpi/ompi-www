<?
$subject_val = "[OMPI users] More on AlltoAll";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 20 13:27:18 2008" -->
<!-- isoreceived="20080320172718" -->
<!-- sent="Thu, 20 Mar 2008 10:27:09 -0700" -->
<!-- isosent="20080320172709" -->
<!-- name="Dave Grote" -->
<!-- email="dpgrote_at_[hidden]" -->
<!-- subject="[OMPI users] More on AlltoAll" -->
<!-- id="47E29E6D.5060708_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="30C8F6AB-370F-4C75-A57B-FACB1C48050B_at_umich.edu" -->
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
<strong>Subject:</strong> [OMPI users] More on AlltoAll<br>
<strong>From:</strong> Dave Grote (<em>dpgrote_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-20 13:27:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5249.php">Ashley Pittman: "Re: [OMPI users] More on AlltoAll"</a>
<li><strong>Previous message:</strong> <a href="5247.php">Eidson, Eric D: "[OMPI users] Unexpected compile error setting FILE_NULL Errhandler using C++ Bindings"</a>
<li><strong>In reply to:</strong> <a href="5193.php">Brock Palen: "Re: [OMPI users] MPI_Allreduce()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5249.php">Ashley Pittman: "Re: [OMPI users] More on AlltoAll"</a>
<li><strong>Reply:</strong> <a href="5249.php">Ashley Pittman: "Re: [OMPI users] More on AlltoAll"</a>
<li><strong>Reply:</strong> <a href="5253.php">Terry Frankcombe: "Re: [OMPI users] More on AlltoAll"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
After reading the previous discussion on AllReduce and AlltoAll, I 
<br>
thought I would ask my question. I have a case where I have data 
<br>
unevenly distributed among the processes (unevenly means that the 
<br>
processes have differing amounts of data) that I need to globally 
<br>
redistribute, resulting in a different uneven distribution. Writing the 
<br>
code to do the redistribution using AlltoAll is straightforward.
<br>
<p>The problem though is that there are often special cases where each 
<br>
process only needs to exchange data with it neighbors. So the question 
<br>
is that when two processors don't have data to exchange, is the OpenMPI 
<br>
AlltoAll is written in such a way so that they don't do any 
<br>
communication? Will the AlltoAll be as efficient (or at least nearly as 
<br>
efficient) as direct send/recv among neighbors?
<br>
&nbsp;&nbsp;Thanks!
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Dave
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5249.php">Ashley Pittman: "Re: [OMPI users] More on AlltoAll"</a>
<li><strong>Previous message:</strong> <a href="5247.php">Eidson, Eric D: "[OMPI users] Unexpected compile error setting FILE_NULL Errhandler using C++ Bindings"</a>
<li><strong>In reply to:</strong> <a href="5193.php">Brock Palen: "Re: [OMPI users] MPI_Allreduce()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5249.php">Ashley Pittman: "Re: [OMPI users] More on AlltoAll"</a>
<li><strong>Reply:</strong> <a href="5249.php">Ashley Pittman: "Re: [OMPI users] More on AlltoAll"</a>
<li><strong>Reply:</strong> <a href="5253.php">Terry Frankcombe: "Re: [OMPI users] More on AlltoAll"</a>
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
