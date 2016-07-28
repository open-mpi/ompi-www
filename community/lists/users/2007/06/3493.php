<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jun 14 03:18:25 2007" -->
<!-- isoreceived="20070614071825" -->
<!-- sent="Thu, 14 Jun 2007 09:18:21 +0200" -->
<!-- isosent="20070614071821" -->
<!-- name="jody" -->
<!-- email="jody.xha_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI output over several ssh-hops?" -->
<!-- id="9b0da5ce0706140018yae407b1l18132e35f35b3d94_at_mail.gmail.com" -->
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
<strong>From:</strong> jody (<em>jody.xha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-14 03:18:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3494.php">Jeff Squyres: "Re: [OMPI users] can't run parallel job on cluster"</a>
<li><strong>Previous message:</strong> <a href="3492.php">Luis Kornblueh: "Re: [OMPI users] C++ error: static object marked for destruction more than once"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/07/3603.php">Tim Prins: "Re: [OMPI users] OpenMPI output over several ssh-hops?"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/07/3603.php">Tim Prins: "Re: [OMPI users] OpenMPI output over several ssh-hops?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
For debugging i usually run each process in a separate X-window.
<br>
This works well if i set the DISPLAY variable to the computer
<br>
from which i am starting my OpenMPI application.
<br>
<p>This method fails however, if i log in (via ssh) to my workstation
<br>
from a third computer and then start my OpenMPI application,
<br>
only the processes running on the workstation i logged into can
<br>
open their windows on the third computers. The processes on
<br>
the other computers cant open their windows.
<br>
<p>This is how i start the processes
<br>
<p>mpirun -np 4 -x DISPLAY run_gdb.sh ./TestApp
<br>
<p>where run_gdb.sh looks like this
<br>
-------------------------
<br>
#!/bin/csh -f
<br>
<p>echo &quot;Running GDB on node `hostname`&quot;
<br>
xterm -e gdb $*
<br>
exit 0
<br>
-------------------------
<br>
The output from the processes on the other computer:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;xterm Xt error: Can't open display: localhost:12.0
<br>
<p>I there a way to tell OpenMPI to forward the X windows
<br>
over yet another ssh connection?
<br>
<p>Thanks
<br>
&nbsp;&nbsp;Jody
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3494.php">Jeff Squyres: "Re: [OMPI users] can't run parallel job on cluster"</a>
<li><strong>Previous message:</strong> <a href="3492.php">Luis Kornblueh: "Re: [OMPI users] C++ error: static object marked for destruction more than once"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/07/3603.php">Tim Prins: "Re: [OMPI users] OpenMPI output over several ssh-hops?"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/07/3603.php">Tim Prins: "Re: [OMPI users] OpenMPI output over several ssh-hops?"</a>
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
