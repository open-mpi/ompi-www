<?
$subject_val = "[OMPI users] Redefine proc in cartesian topologies";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  1 13:58:05 2012" -->
<!-- isoreceived="20120301185805" -->
<!-- sent="Thu, 1 Mar 2012 16:57:59 -0200" -->
<!-- isosent="20120301185759" -->
<!-- name="Claudio Pastorino" -->
<!-- email="claudio.pastorino_at_[hidden]" -->
<!-- subject="[OMPI users] Redefine proc in cartesian topologies" -->
<!-- id="CAGZJBXSRjXBSjWySD5obb6nWOcuNj_G74A_xvsrOu8qOuDcbzA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Redefine proc in cartesian topologies<br>
<strong>From:</strong> Claudio Pastorino (<em>claudio.pastorino_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-01 13:57:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18643.php">Ralph Castain: "Re: [OMPI users] Redefine proc in cartesian topologies"</a>
<li><strong>Previous message:</strong> <a href="18641.php">Jeffrey Squyres: "Re: [OMPI users] compilation error with pgcc Unknown switch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18643.php">Ralph Castain: "Re: [OMPI users] Redefine proc in cartesian topologies"</a>
<li><strong>Reply:</strong> <a href="18643.php">Ralph Castain: "Re: [OMPI users] Redefine proc in cartesian topologies"</a>
<li><strong>Reply:</strong> <a href="18644.php">Jingcha Joba: "Re: [OMPI users] Redefine proc in cartesian topologies"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all,
<br>
I apologize in advance if this is not the right list to post this. I
<br>
am a newcomer and please let me know if I should be sending this to
<br>
another list.
<br>
<p>I program MPI trying to do HPC parallel programs. In particular I
<br>
wrote a parallel code
<br>
for molecular dynamics simulations. The program splits the work in a
<br>
matrix of procs and
<br>
I send messages along rows and columns in an equal basis. I learnt
<br>
that the typical
<br>
arrangement of  cartesian  topology is not usually  the best option,
<br>
because in a matrix, let's  say of 4x4 procs   with quad procs, the
<br>
procs are arranged so that
<br>
through columns one stays inside the same quad proc and through rows
<br>
you are always going out to the network.  This means procs are
<br>
arranged as one quad per row.
<br>
<p>I try to explain this for a 2x2 case. The cartesian topology does this
<br>
assignment, typically:
<br>
cartesian    mpi_comm_world
<br>
0,0 --&gt;  0
<br>
0,1 --&gt;  1
<br>
1,0 --&gt;  2
<br>
1,1 --&gt;  3
<br>
The question is, how do I get a &quot;user defined&quot; assignment such as:
<br>
0,0 --&gt;  0
<br>
0,1 --&gt;  2
<br>
1,0 --&gt;  1
<br>
1,1 --&gt;  3
<br>
<p>?
<br>
<p>Thanks in advance and I hope to have  made this more or less understandable.
<br>
Claudio
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18643.php">Ralph Castain: "Re: [OMPI users] Redefine proc in cartesian topologies"</a>
<li><strong>Previous message:</strong> <a href="18641.php">Jeffrey Squyres: "Re: [OMPI users] compilation error with pgcc Unknown switch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18643.php">Ralph Castain: "Re: [OMPI users] Redefine proc in cartesian topologies"</a>
<li><strong>Reply:</strong> <a href="18643.php">Ralph Castain: "Re: [OMPI users] Redefine proc in cartesian topologies"</a>
<li><strong>Reply:</strong> <a href="18644.php">Jingcha Joba: "Re: [OMPI users] Redefine proc in cartesian topologies"</a>
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
