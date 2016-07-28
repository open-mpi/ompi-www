<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Oct 19 06:32:10 2007" -->
<!-- isoreceived="20071019103210" -->
<!-- sent="Fri, 19 Oct 2007 12:31:53 +0200" -->
<!-- isosent="20071019103153" -->
<!-- name="idesbald van den bosch" -->
<!-- email="vandenbosch.idesbald_at_[hidden]" -->
<!-- subject="[OMPI users] Recursive use of &amp;quot;orterun&amp;quot;" -->
<!-- id="d1e0809e0710190331k27d2bd3bocb0a13d84163162b_at_mail.gmail.com" -->
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
<strong>From:</strong> idesbald van den bosch (<em>vandenbosch.idesbald_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-19 06:31:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4255.php">Marcin Skoczylas: "Re: [OMPI users] which alternative to OpenMPI should I choose?"</a>
<li><strong>Previous message:</strong> <a href="4253.php">Jorge Parra: "[OMPI users] Syntax error in remote rsh execution"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4271.php">Tim Prins: "Re: [OMPI users] Recursive use of &quot;orterun&quot;"</a>
<li><strong>Reply:</strong> <a href="4271.php">Tim Prins: "Re: [OMPI users] Recursive use of &quot;orterun&quot;"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I've run into the same problem as discussed in the thread Lev Gelb: &quot;Re:
<br>
[OMPI users] Recursive use of &quot;orterun&quot; (Ralph H
<br>
Castain)&quot;&lt;<a href="http://www.open-mpi.org/community/lists/users/2007/07/3655.php">http://www.open-mpi.org/community/lists/users/2007/07/3655.php</a>&gt;
<br>
<p>I am running a parallel python code, then from python I launch a C++
<br>
parallel program using the python os.system command, then I come back in
<br>
python and keep going.
<br>
<p>With LAM/MPI there is no problem with this.
<br>
<p>But Open-mpi systematically crashes, because the python os.system command
<br>
launches the C++ program with the same OMPI_* environment variables as for
<br>
the Python program. As discussed in the thread, I have tried filtering the
<br>
OMPI_* variables prior to launching the C++ program with an
<br>
os.execvecommand, but then it fails to return the hand to python and
<br>
instead simply
<br>
terminates when the C++ program ends.
<br>
<p>There is a workaround (
<br>
<a href="http://thread.gmane.org/gmane.comp.clustering.open-mpi.user/986">http://thread.gmane.org/gmane.comp.clustering.open-mpi.user/986</a>): create a
<br>
*.sh file with the following lines:
<br>
<p>--------
<br>
for i in $(env | grep OMPI_MCA |sed 's/=/ /' | awk '{print $1}')
<br>
do
<br>
&nbsp;&nbsp;&nbsp;unset $i
<br>
done
<br>
<p># now the C++ call
<br>
mpirun -np 2  ./MoM/communicateMeshArrays
<br>
----------
<br>
<p>and then call the *.sh program through the python os.system command.
<br>
<p>What I would like to know is that if this &quot;problem&quot; will get fixed in
<br>
open-MPI? Is there another way to elegantly solve this issue? Meanwhile, I
<br>
will stick to the ugly *.sh hack listed above.
<br>
<p>Cheers
<br>
<p>Ides
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4254/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4255.php">Marcin Skoczylas: "Re: [OMPI users] which alternative to OpenMPI should I choose?"</a>
<li><strong>Previous message:</strong> <a href="4253.php">Jorge Parra: "[OMPI users] Syntax error in remote rsh execution"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4271.php">Tim Prins: "Re: [OMPI users] Recursive use of &quot;orterun&quot;"</a>
<li><strong>Reply:</strong> <a href="4271.php">Tim Prins: "Re: [OMPI users] Recursive use of &quot;orterun&quot;"</a>
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
