<?
$subject_val = "[OMPI users] MPI::WORLD_COMM.Send Complex class structure defined in boost::ptr_vector";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  2 14:38:19 2009" -->
<!-- isoreceived="20091202193819" -->
<!-- sent="Wed, 2 Dec 2009 17:37:55 -0200" -->
<!-- isosent="20091202193755" -->
<!-- name="Ivan Marin" -->
<!-- email="ispmarin_at_[hidden]" -->
<!-- subject="[OMPI users] MPI::WORLD_COMM.Send Complex class structure defined in boost::ptr_vector" -->
<!-- id="751c63ee0912021137n6e1f2535tbd7d5589f50d99c_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] MPI::WORLD_COMM.Send Complex class structure defined in boost::ptr_vector<br>
<strong>From:</strong> Ivan Marin (<em>ispmarin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-02 14:37:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11376.php">Jeff Squyres: "Re: [OMPI users] MPI::WORLD_COMM.Send Complex class structure definedin boost::ptr_vector"</a>
<li><strong>Previous message:</strong> <a href="11374.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn lots of times"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11376.php">Jeff Squyres: "Re: [OMPI users] MPI::WORLD_COMM.Send Complex class structure definedin boost::ptr_vector"</a>
<li><strong>Reply:</strong> <a href="11376.php">Jeff Squyres: "Re: [OMPI users] MPI::WORLD_COMM.Send Complex class structure definedin boost::ptr_vector"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello all,
<br>
<p>I'm developing an groundwater simulation application that will use openmpi
<br>
to distribute the data and solve a linear system. The problem is that my
<br>
primary data structure is composed of a base class and derived classes, and
<br>
they are inserted in a boost ptr_vector, as they are of different class
<br>
types, with &lt;goog_1259695724977&gt; inheritance and pointers to other members
<br>
of the vector. I would like to pass parts of this vector to the processes,
<br>
to build locally the matrix, but I don't know how to do it. I followed the
<br>
discussion on this thread (
<br>
<a href="http://www.open-mpi.org/community/lists/users/2009/07/9852.php">http://www.open-mpi.org/community/lists/users/2009/07/9852.php</a>), and the
<br>
route to use boost.MPI the only way out?
<br>
<p>I can provide the class template, if this would help. I'm using openmpi
<br>
1.3.3 on debian sid amd64.
<br>
<p>Ivan Marin
<br>
<p>Laborat&#243;rio de Hidr&#225;ulica Computacional - LHC
<br>
Departamento de Hidr&#225;ulica e Saneamento - SHS
<br>
Escola de Engenharia de S&#227;o Carlos - EESC
<br>
Universidade de S&#227;o Paulo - USP
<br>
<p><a href="http://albatroz.shs.eesc.usp.br">http://albatroz.shs.eesc.usp.br</a>
<br>
+55 16 3373 8270
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11375/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11376.php">Jeff Squyres: "Re: [OMPI users] MPI::WORLD_COMM.Send Complex class structure definedin boost::ptr_vector"</a>
<li><strong>Previous message:</strong> <a href="11374.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn lots of times"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11376.php">Jeff Squyres: "Re: [OMPI users] MPI::WORLD_COMM.Send Complex class structure definedin boost::ptr_vector"</a>
<li><strong>Reply:</strong> <a href="11376.php">Jeff Squyres: "Re: [OMPI users] MPI::WORLD_COMM.Send Complex class structure definedin boost::ptr_vector"</a>
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
