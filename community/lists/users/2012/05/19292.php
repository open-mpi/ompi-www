<?
$subject_val = "[OMPI users] MPI - memory sharing?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 16 08:08:17 2012" -->
<!-- isoreceived="20120516120817" -->
<!-- sent="Wed, 16 May 2012 20:08:13 +0800" -->
<!-- isosent="20120516120813" -->
<!-- name="Rohan Deshpande" -->
<!-- email="rohand87_at_[hidden]" -->
<!-- subject="[OMPI users] MPI - memory sharing?" -->
<!-- id="CAFAE9jjuYQ9WnVnKO+b5GdO1DSELkbPat5=TTBChJ0TuwNrKfw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] MPI - memory sharing?<br>
<strong>From:</strong> Rohan Deshpande (<em>rohand87_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-16 08:08:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19293.php">Jim Maas: "[OMPI users] fork() warning message"</a>
<li><strong>Previous message:</strong> <a href="19291.php">devendra rai: "[OMPI users] Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19300.php">Jeff Squyres: "Re: [OMPI users] MPI - memory sharing?"</a>
<li><strong>Reply:</strong> <a href="19300.php">Jeff Squyres: "Re: [OMPI users] MPI - memory sharing?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have following structure of  MPI code -
<br>
<p>int main(){
<br>
<p>MPI_INIT.....
<br>
//initialize MPI
<br>
data = malloc(sizeof(int)*200);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;//initialize data
<br>
&nbsp;&nbsp;&nbsp;/*--------Master---------*/
<br>
&nbsp;&nbsp;if(taskid == 0){
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;//send data to each slave
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_SEND....
<br>
&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;/*----Slaves-------*/
<br>
&nbsp;&nbsp;if(taskid &gt; 0){
<br>
<p>&nbsp;&nbsp;&nbsp;//accept data from master
<br>
&nbsp;&nbsp;MPI_RECV....
<br>
&nbsp;&nbsp;//do some calculations
<br>
&nbsp;}
<br>
<p>&nbsp;MPI_Finalize()
<br>
}
<br>
<p>I have few doubts about the code above.
<br>
In above code, the data is allocated memory in the main program. If I run
<br>
this program on cluster where
<br>
node 1 is slave and node 0 is master, does node 1 actually shares the
<br>
memory location of node 0 to perform the calculations?
<br>
<p>If I do not want to share the memory, how can i make task on node 1 work
<br>
independently ?
<br>
<p>Thanks in advance.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19292/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19293.php">Jim Maas: "[OMPI users] fork() warning message"</a>
<li><strong>Previous message:</strong> <a href="19291.php">devendra rai: "[OMPI users] Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19300.php">Jeff Squyres: "Re: [OMPI users] MPI - memory sharing?"</a>
<li><strong>Reply:</strong> <a href="19300.php">Jeff Squyres: "Re: [OMPI users] MPI - memory sharing?"</a>
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
