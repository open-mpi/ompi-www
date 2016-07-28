<?
$subject_val = "[OMPI docs] reorder mpi rank";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan  9 19:05:53 2008" -->
<!-- isoreceived="20080110000553" -->
<!-- sent="Wed, 9 Jan 2008 16:05:32 -0800" -->
<!-- isosent="20080110000532" -->
<!-- name="Sean Ross-Ross" -->
<!-- email="srossross_at_[hidden]" -->
<!-- subject="[OMPI docs] reorder mpi rank" -->
<!-- id="5465FBE3-11AB-48BF-8D22-019D18761AFD_at_gmail.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI docs] reorder mpi rank<br>
<strong>From:</strong> Sean Ross-Ross (<em>srossross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-09 19:05:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0096.php">e83aw6t02_at_[hidden]: "Re: [OMPI docs] reorder mpi rank"</a>
<li><strong>Previous message:</strong> <a href="0094.php">Richard Friedman: "Re: [OMPI docs] OOO environment"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0096.php">e83aw6t02_at_[hidden]: "Re: [OMPI docs] reorder mpi rank"</a>
<li><strong>Reply:</strong> <a href="0096.php">e83aw6t02_at_[hidden]: "Re: [OMPI docs] reorder mpi rank"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Is there a way to reorder the mpi rank at runtime or otherwise?
<br>
<p>I have a program that makes files on each local node in somewhat of a  
<br>
random fashion. I want to these files to correspond to a part of a  
<br>
PETSc Distributed array used in another software package. My problem  
<br>
is that PETSc expects these windows of data to be on a certain  
<br>
ranking node. It seems that an easy solution may be to change the  
<br>
rank of the nodes to correspond with the PETc array.
<br>
<p>Thank you for your help
<br>
~Sean
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0096.php">e83aw6t02_at_[hidden]: "Re: [OMPI docs] reorder mpi rank"</a>
<li><strong>Previous message:</strong> <a href="0094.php">Richard Friedman: "Re: [OMPI docs] OOO environment"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0096.php">e83aw6t02_at_[hidden]: "Re: [OMPI docs] reorder mpi rank"</a>
<li><strong>Reply:</strong> <a href="0096.php">e83aw6t02_at_[hidden]: "Re: [OMPI docs] reorder mpi rank"</a>
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
