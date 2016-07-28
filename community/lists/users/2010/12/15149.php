<?
$subject_val = "[OMPI users] segmentation fault";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 15 17:47:17 2010" -->
<!-- isoreceived="20101215224717" -->
<!-- sent="Wed, 15 Dec 2010 22:47:07 +0000" -->
<!-- isosent="20101215224707" -->
<!-- name="Vaz, Guilherme" -->
<!-- email="G.Vaz_at_[hidden]" -->
<!-- subject="[OMPI users] segmentation fault" -->
<!-- id="528EE04830974E42B235D874D8EEAECB0552E1_at_MAR160N1.marin.local" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] segmentation fault<br>
<strong>From:</strong> Vaz, Guilherme (<em>G.Vaz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-15 17:47:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15150.php">Ralph Castain: "Re: [OMPI users] segmentation fault"</a>
<li><strong>Previous message:</strong> <a href="15148.php">Tom Rosmond: "[OMPI users] MPI-IO problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15150.php">Ralph Castain: "Re: [OMPI users] segmentation fault"</a>
<li><strong>Reply:</strong> <a href="15150.php">Ralph Castain: "Re: [OMPI users] segmentation fault"</a>
<li><strong>Reply:</strong> <a href="15151.php">Gus Correa: "Re: [OMPI users] segmentation fault"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all,
<br>

<br>
I have a problem with openmpi1.3, ifort+mkl v11.1 in Ubuntu10.04 systems (32 or 64bit). My code worked in Ubuntu8.04 and works in RedHat based systems, with slightly different version changes on mkl and ifort. There were no changes in the source code.
<br>
The problem is that the application works for small cell sizes per core, but not for large cell sizes per core. And it always works for 1 core.
<br>
Example: a grid with 1.2Million cells does not work with mpiexec -n 4 &lt;my_app&gt; but it works with mpiexec -n 32 &lt;my_app&gt;. It seems that there is a maximum of cell/core. And it works with &lt;my_app&gt;.
<br>

<br>
Is this a stack size (or any memory problem)? Should I set the ulimit -s unlimited not only on my bashrc but also in the ssh environment (and how)? Or is something else?
<br>
Any clues/tips?
<br>

<br>
Thanks for any help.
<br>

<br>
Gui
<br>

<br>

<br>

<br>

<br>
[cid:imagec393d1.JPG_at_6a0e8cd7.4e8e5733][cid:image4c4685.JPG_at_bd187555.4dac8a20]
<br>

<br>
dr. ir. Guilherme Vaz
<br>

<br>

<br>
CFD Researcher
<br>

<br>

<br>
Research &amp; Development
<br>

<br>

<br>

<br>

<br>
MARIN
<br>

<br>

<br>

<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2, Haagsteeg
<br>

<br>
E G.Vaz_at_[hidden]&lt;mailto:G.Vaz_at_[hidden]&gt; P.O. Box 28     T +31 317 49 39 11
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6700 AA Wageningen      F +31 317 49 32 45
<br>
T  +31 317 49 33 25     The Netherlands I  www.marin.nl&lt;<a href="http://www.marin.nl">http://www.marin.nl</a>&gt;
<br>

<br>

<br>
<p>
<p>

<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15149/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-15149/imagec393d1.JPG" alt="imagec393d1.JPG
">
<!-- attachment="imagec393d1.JPG" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-15149/image4c4685.JPG" alt="image4c4685.JPG
">
<!-- attachment="image4c4685.JPG" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15150.php">Ralph Castain: "Re: [OMPI users] segmentation fault"</a>
<li><strong>Previous message:</strong> <a href="15148.php">Tom Rosmond: "[OMPI users] MPI-IO problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15150.php">Ralph Castain: "Re: [OMPI users] segmentation fault"</a>
<li><strong>Reply:</strong> <a href="15150.php">Ralph Castain: "Re: [OMPI users] segmentation fault"</a>
<li><strong>Reply:</strong> <a href="15151.php">Gus Correa: "Re: [OMPI users] segmentation fault"</a>
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
