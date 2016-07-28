<?
$subject_val = "[OMPI users] OpenMPI/NAG Fortran: Missing libf52.so.1";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 17 02:23:18 2010" -->
<!-- isoreceived="20100317062318" -->
<!-- sent="Tue, 16 Mar 2010 23:22:48 -0700" -->
<!-- isosent="20100317062248" -->
<!-- name="Vedran Coralic" -->
<!-- email="vcoralic_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI/NAG Fortran: Missing libf52.so.1" -->
<!-- id="48b85f861003162322v60879d01yf2500025e974eb62_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] OpenMPI/NAG Fortran: Missing libf52.so.1<br>
<strong>From:</strong> Vedran Coralic (<em>vcoralic_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-17 02:22:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12369.php">uriz.49949_at_[hidden]: "[OMPI users] Problem in remote nodes"</a>
<li><strong>Previous message:</strong> <a href="12367.php">Shiqing Fan: "Re: [OMPI users] Windows: problems running on a second system."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12371.php">Tim Prince: "Re: [OMPI users] OpenMPI/NAG Fortran: Missing libf52.so.1"</a>
<li><strong>Reply:</strong> <a href="12371.php">Tim Prince: "Re: [OMPI users] OpenMPI/NAG Fortran: Missing libf52.so.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>Through my search of the archives I have come across similar problems such
<br>
as mine. However, after having tried several suggestions and still remaining
<br>
unsuccessful, I have decided to post my dilemma.
<br>
<p>Basically, I have successfully compiled OpenMPI with the following
<br>
configuration parameters
<br>
<p>shell$ ../configure --prefix=/home/vcoralic --enable-static --disable-shared
<br>
F77=nagfor FC=nagfor FCFLAGS=-mismatch
<br>
<p>I have also successfully executed a parallel job by directly invoking mpirun.
<br>
However, when I try using the queuing system on the cluster, qsub, for a job
<br>
on say 8 processors, I get the following set of error messages (8 total)
<br>
<p>./hello_f90: error while loading shared libraries: libf52.so.1: cannot open
<br>
shared object file: No such file or directory
<br>
./hello_f90: error while loading shared libraries: libf52.so.1: cannot open
<br>
shared object file: No such file or directory
<br>
./hello_f90: error while loading shared libraries: libf52.so.1: cannot open
<br>
shared object file: No such file or directory
<br>
./hello_f90: error while loading shared libraries: libf52.so.1: cannot open
<br>
shared object file: No such file or directory
<br>
./hello_f90: error while loading shared libraries: libf52.so.1: cannot open
<br>
shared object file: No such file or directory
<br>
./hello_f90: error while loading shared libraries: libf52.so.1: cannot open
<br>
shared object file: No such file or directory
<br>
./hello_f90: error while loading shared libraries: libf52.so.1: cannot open
<br>
shared object file: No such file or directory
<br>
./hello_f90: error while loading shared libraries: libf52.so.1: cannot open
<br>
shared object file: No such file or directory
<br>
<p>where libf52.so.1 is shared object file belong ton the NAG Fortran compiler.
<br>
<p>Now, I think I know what the problem is. Basically, the NAG Fortran compiler
<br>
and its libraries are only available on the master node so that the
<br>
remaining nodes cannot access/find the required files. From my
<br>
understanding, the only way to fix this would be put to copy the NAG Fortran
<br>
compiler to all of the nodes in the cluster. Is that correct?
<br>
<p>Or, I suppose that a possible workaround would be to create a symbolic link
<br>
on all of the nodes through which each node could access the NAG Fortran
<br>
components available on the master node. This would additionally require
<br>
that the LD_LIBRARY_PATH be modified on all of the nodes so that the address
<br>
of the symbolic link be included globally (for all nodes).
<br>
<p>The bottom line is that I am looking for some guidance on how to properly
<br>
fix the above error. I have a feeling that conceptually both of the above
<br>
ideas may work. However, at this time I am a bit hesitant to begin
<br>
implementing them since I am not absolutely sure that I know what I am doing
<br>
or that these &quot;fixes&quot; will work. It also doesn't help that others use this
<br>
cluster and I'd hate to be the one that breaks the whole thing down so that
<br>
no one can use it.
<br>
<p>I appreciate any feedback that you can give me!
<br>
<p><pre>
-- 
Vedran Coralic
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12368/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12369.php">uriz.49949_at_[hidden]: "[OMPI users] Problem in remote nodes"</a>
<li><strong>Previous message:</strong> <a href="12367.php">Shiqing Fan: "Re: [OMPI users] Windows: problems running on a second system."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12371.php">Tim Prince: "Re: [OMPI users] OpenMPI/NAG Fortran: Missing libf52.so.1"</a>
<li><strong>Reply:</strong> <a href="12371.php">Tim Prince: "Re: [OMPI users] OpenMPI/NAG Fortran: Missing libf52.so.1"</a>
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
