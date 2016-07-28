<?
$subject_val = "[OMPI users] Newbie question continues, a step toward real app";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 13 16:02:15 2011" -->
<!-- isoreceived="20110113210215" -->
<!-- sent="Thu, 13 Jan 2011 12:57:30 -0800" -->
<!-- isosent="20110113205730" -->
<!-- name="Tena Sakai" -->
<!-- email="tsakai_at_[hidden]" -->
<!-- subject="[OMPI users] Newbie question continues, a step toward real app" -->
<!-- id="C954A73A.DD09%tsakai_at_gallo.ucsf.edu" -->
<!-- charset="Windows-1252" -->
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
<strong>Subject:</strong> [OMPI users] Newbie question continues, a step toward real app<br>
<strong>From:</strong> Tena Sakai (<em>tsakai_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-13 15:57:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15363.php">Tena Sakai: "Re: [OMPI users] Error from mpirun command"</a>
<li><strong>Previous message:</strong> <a href="15361.php">Hicham Mouline: "Re: [OMPI users] Error from mpirun command"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15364.php">Gus Correa: "Re: [OMPI users] Newbie question continues, a step toward real app"</a>
<li><strong>Reply:</strong> <a href="15364.php">Gus Correa: "Re: [OMPI users] Newbie question continues, a step toward real app"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I have a script I call fib.r.  It looks like:
<br>
<p>&nbsp;&nbsp;&nbsp;#!/usr/bin/env r
<br>
<p>&nbsp;&nbsp;&nbsp;fib &lt;- function( n ) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a &lt;- 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;b &lt;- 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for ( i in 1:n ) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;t &lt;- b
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;b &lt;- a
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a &lt;- a + t
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;print( fib(argv[1]) )
<br>
<p>When I run this script with a parameter, it generates a fibonocci number:
<br>
<p>&nbsp;&nbsp;&nbsp;$ fib.r 5
<br>
&nbsp;&nbsp;&nbsp;5
<br>
&nbsp;&nbsp;&nbsp;$ fib.r 6
<br>
&nbsp;&nbsp;&nbsp;8
<br>
<p>and if I stick this into &lt;program&gt; part of MIMD example I have used previously:
<br>
<p>&nbsp;&nbsp;&nbsp;$ mpirun -H vixen -np 1 hostname : --hostfile myhosts -np 8 fib.r 7
<br>
<p>I get:
<br>
<p>&nbsp;&nbsp;&nbsp;vixen.egcrc.org
<br>
&nbsp;&nbsp;&nbsp;[1] 13
<br>
&nbsp;&nbsp;&nbsp;[1] 13
<br>
&nbsp;&nbsp;&nbsp;[1] 13
<br>
&nbsp;&nbsp;&nbsp;[1] 13
<br>
&nbsp;&nbsp;&nbsp;[1] 13
<br>
&nbsp;&nbsp;&nbsp;[1] 13
<br>
&nbsp;&nbsp;&nbsp;[1] 13
<br>
&nbsp;&nbsp;&nbsp;[1] 13
<br>
<p>This is good as proof of concept, but what I really want to do is to have that 7
<br>
different for each (slave) process.  Ie., I want to run &#147;rfib 5&#148; on node 0, &#147;rfib 6&#148;
<br>
on node 1, &#147;rfib 7&#148; on node 2, and so on.  Is there any way to give a different
<br>
parameter(s) to different process/slot?
<br>
<p>I thought maybe I can use &#150;rf option to do this, but I am leaning toward &#150;app
<br>
option.  Unfortunately, I see no example for the application context file.  Would
<br>
someone kindly explain how I can do what I describe?
<br>
<p>Thank you.
<br>
<p>Tena Sakai
<br>
tsakai_at_[hidden]
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15362/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15363.php">Tena Sakai: "Re: [OMPI users] Error from mpirun command"</a>
<li><strong>Previous message:</strong> <a href="15361.php">Hicham Mouline: "Re: [OMPI users] Error from mpirun command"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15364.php">Gus Correa: "Re: [OMPI users] Newbie question continues, a step toward real app"</a>
<li><strong>Reply:</strong> <a href="15364.php">Gus Correa: "Re: [OMPI users] Newbie question continues, a step toward real app"</a>
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
