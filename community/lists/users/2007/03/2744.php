<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Mar  1 06:44:42 2007" -->
<!-- isoreceived="20070301114442" -->
<!-- sent="Thu, 1 Mar 2007 12:44:37 +0100" -->
<!-- isosent="20070301114437" -->
<!-- name="G&#246;tz Waschk" -->
<!-- email="goetz.waschk_at_[hidden]" -->
<!-- subject="[OMPI users] mpirun does not set the PATH and LD_LIBRARY_PATH under zsh" -->
<!-- id="5711d990703010344o280b8f3fgc024766c3813cbb6_at_mail.gmail.com" -->
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
<strong>From:</strong> G&#246;tz Waschk (<em>goetz.waschk_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-01 06:44:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2745.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_Spawn"</a>
<li><strong>Previous message:</strong> <a href="2743.php">Rozzen.VINCONT_at_[hidden]: "Re: [OMPI users] MPI_Comm_Spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2749.php">Jeff Squyres: "Re: [OMPI users] mpirun does not set the PATH and LD_LIBRARY_PATH under zsh"</a>
<li><strong>Reply:</strong> <a href="2749.php">Jeff Squyres: "Re: [OMPI users] mpirun does not set the PATH and LD_LIBRARY_PATH under zsh"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi everybody,
<br>
<p>first I'd like to introduce myself, my name is G&#246;tz Waschk and I'm
<br>
working at DESY in the computing department.
<br>
<p>The default shell here is /bin/zsh. mpirun has support for setting
<br>
PATH and LD_LIBRARY_PATH for a list of known shells (bash, ksh, csh,
<br>
...) but not for zsh.
<br>
<p>This patch against openmpi 1.2beta4 adds zsh to the known shells, it
<br>
is interpreted as sh compatible.
<br>
<p>Regards, G&#246;tz Waschk
<br>
<p><p><p><pre>
-- 
AL I:40: Do what thou wilt shall be the whole of the Law.

</pre>
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2744/openmpi-1.2b4-zsh.patch">openmpi-1.2b4-zsh.patch</a>
</ul>
<!-- attachment="openmpi-1.2b4-zsh.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2745.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_Spawn"</a>
<li><strong>Previous message:</strong> <a href="2743.php">Rozzen.VINCONT_at_[hidden]: "Re: [OMPI users] MPI_Comm_Spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2749.php">Jeff Squyres: "Re: [OMPI users] mpirun does not set the PATH and LD_LIBRARY_PATH under zsh"</a>
<li><strong>Reply:</strong> <a href="2749.php">Jeff Squyres: "Re: [OMPI users] mpirun does not set the PATH and LD_LIBRARY_PATH under zsh"</a>
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
