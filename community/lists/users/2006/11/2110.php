<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Nov  2 04:09:18 2006" -->
<!-- isoreceived="20061102090918" -->
<!-- sent="Thu, 2 Nov 2006 14:39:09 +0530" -->
<!-- isosent="20061102090909" -->
<!-- name="calin pal" -->
<!-- email="calin.fc_at_[hidden]" -->
<!-- subject="[OMPI users] openmpi problem" -->
<!-- id="e0973f090611020109x57f57bcav9a3dca694535f4d5_at_mail.gmail.com" -->
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
<strong>From:</strong> calin pal (<em>calin.fc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-02 04:09:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2111.php">Kevin Radican: "[OMPI users] Scalapack testing fails with openmpi"</a>
<li><strong>Previous message:</strong> <a href="2109.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn multiple bproc support"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
sir,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;in   four machine of our college i have installed in this way..that i
<br>
m sending u....
<br>
i start four machine from root...
<br>
then i installed the openmpi1.1.1 -tar.gz using the commands.....
<br>
<span class="quotelev2">&gt;&gt;tar -xvzf openmpi-1.1.1
</span><br>
<span class="quotelev2">&gt;&gt;cd openmpi-1.1.1
</span><br>
<span class="quotelev2">&gt;&gt;./configure --prefix=/usr/local
</span><br>
<span class="quotelev2">&gt;&gt;make
</span><br>
<span class="quotelev2">&gt;&gt;make all install
</span><br>
<span class="quotelev2">&gt;&gt;ompi_info
</span><br>
that i did in root
<br>
<p>then according to u r suggestion i went to user(where i did my program
<br>
jacobi.c)
<br>
gave the password
<br>
then i wrote
<br>
<span class="quotelev2">&gt;&gt;cd .bashrc
</span><br>
<span class="quotelev2">&gt;&gt;export LD_LIBRARY_PATH=/usr/local/lib:$LD_LIBRARY_PATH
</span><br>
<span class="quotelev2">&gt;&gt;source .bashrc
</span><br>
<span class="quotelev2">&gt;&gt;mpicc mpihello.c -o mpihello
</span><br>
<span class="quotelev2">&gt;&gt;mpirun -np 4 mpihello
</span><br>
<p>after did all this thing i m getting the problem libmpi:so file
<br>
......&quot;mpihello&quot; is not working
<br>
<p>what i supposed to do???????
<br>
<p>should i have to install again???
<br>
<p>anything wrong in the installation ????   sir i cant undersatnd from the FAQ
<br>
whatever u have suggested to see me....thats why i m asking again sir please
<br>
tell me whatever i have done in our computer is this okay or anything i have
<br>
to change in the code what i have written in the above code please check it
<br>
out sir ........and tell me whats wrong in my code ........please
<br>
sir.....please sir read the command also which i have used for installation
<br>
in root and user for running the openmpi-1.1.1.tar.gz .......please see it.
<br>
<p>calin pal
<br>
fergusson college
<br>
india
<br>
msc.tech(maths and comp.sc)
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2110/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2111.php">Kevin Radican: "[OMPI users] Scalapack testing fails with openmpi"</a>
<li><strong>Previous message:</strong> <a href="2109.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn multiple bproc support"</a>
<!-- nextthread="start" -->
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
