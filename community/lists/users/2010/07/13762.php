<?
$subject_val = "[OMPI users] Communication between objects on different nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 23 11:53:40 2010" -->
<!-- isoreceived="20100723155340" -->
<!-- sent="Fri, 23 Jul 2010 11:48:10 -0400" -->
<!-- isosent="20100723154810" -->
<!-- name="Alexandru Blidaru" -->
<!-- email="alexsb92_at_[hidden]" -->
<!-- subject="[OMPI users] Communication between objects on different nodes" -->
<!-- id="AANLkTikLp-3z1GGx1U0etLvT09OkAqwS+TjqTT9Vuxyc_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Communication between objects on different nodes<br>
<strong>From:</strong> Alexandru Blidaru (<em>alexsb92_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-23 11:48:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13763.php">Alexandru Blidaru: "Re: [OMPI users] Communication between objects on different nodes"</a>
<li><strong>Previous message:</strong> <a href="13761.php">Jeff Squyres: "Re: [OMPI users] Do MPI calls ever sleep?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13763.php">Alexandru Blidaru: "Re: [OMPI users] Communication between objects on different nodes"</a>
<li><strong>Reply:</strong> <a href="13763.php">Alexandru Blidaru: "Re: [OMPI users] Communication between objects on different nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hey guys,
<br>
<p>I need to write an implementation of a 4D array with a variable 4th
<br>
dimension based on where in 3D you are. So it's basically like a normal
<br>
rectangular prism, except for each unit it might have a variable number of
<br>
values. The program is also supposed to communicate by sending ghost nodes
<br>
between each slice, in order for the actual data-modifying code to work. The
<br>
data-modifying code is to be added by others depending on what they need to
<br>
do with this 4d array.
<br>
<p>&nbsp;So what I am really asking is how does MPI work when you have different
<br>
objects on different computers and you try sending stuff between the
<br>
objects?
<br>
<p>Just some explanations for my code, which is attached, in case you can give
<br>
some code-specific tips:
<br>
<p>&nbsp;&nbsp;&nbsp;- Nx2, Nz2, Ny2 are the lengths of the big prism
<br>
&nbsp;&nbsp;&nbsp;- DOFArr holds how many values there will be for each space in 3D, by
<br>
&nbsp;&nbsp;&nbsp;transforming the 3D coordinates into 1D this way: index of
<br>
&nbsp;&nbsp;&nbsp;DOFArr=i+Nx*j+Nx*Ny*k
<br>
&nbsp;&nbsp;&nbsp;- So the way i was thinking of doing is for the master to get the big
<br>
&nbsp;&nbsp;&nbsp;array, and split into relatively equal parts and send each part to a node.
<br>
&nbsp;&nbsp;&nbsp;The node would then do whatever it had to do, send ghost nodes to its
<br>
&nbsp;&nbsp;&nbsp;neighbors, maybe do whatever it had to do again and in the end it would send
<br>
&nbsp;&nbsp;&nbsp;everything back to the master node, which would take the pieces of array and
<br>
&nbsp;&nbsp;&nbsp;put them together.
<br>
<p><p>I am also a bit confused with when do you have to call MPI_Finaliza(). I
<br>
mean, for it to run, the program required me to put it into the constructor,
<br>
and if I call print() at the and of the constructor, it would tell me this:
<br>
<p>job aborted:
<br>
<p>rank: node: exit code[: error message]
<br>
<p>0: C7June2010: 123
<br>
<p>1: C7June2010: -1073740777: process 1 exited without calling finalize
<br>
<p>2: C7June2010: -1073740777: process 2 exited without calling finalize
<br>
<p><p>If i would place it after Finalize() nothing would show when i run the exe.
<br>
<p><p>I just finished grade 12, and got a summer job at a research lab, and this
<br>
is my project. Thanks a lot for your help.
<br>
<p>Alex
<br>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13762/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13762/main.cpp">main.cpp</a>
</ul>
<!-- attachment="main.cpp" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13763.php">Alexandru Blidaru: "Re: [OMPI users] Communication between objects on different nodes"</a>
<li><strong>Previous message:</strong> <a href="13761.php">Jeff Squyres: "Re: [OMPI users] Do MPI calls ever sleep?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13763.php">Alexandru Blidaru: "Re: [OMPI users] Communication between objects on different nodes"</a>
<li><strong>Reply:</strong> <a href="13763.php">Alexandru Blidaru: "Re: [OMPI users] Communication between objects on different nodes"</a>
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
