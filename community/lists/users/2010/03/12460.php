<?
$subject_val = "[OMPI users] openMPI on Xgrid";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 29 14:57:11 2010" -->
<!-- isoreceived="20100329185711" -->
<!-- sent="Mon, 29 Mar 2010 14:56:46 -0400" -->
<!-- isosent="20100329185646" -->
<!-- name="Cristobal Navarro" -->
<!-- email="axischire_at_[hidden]" -->
<!-- subject="[OMPI users] openMPI on Xgrid" -->
<!-- id="b66245471003291156y21e97aa1p1769cc74481333af_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] openMPI on Xgrid<br>
<strong>From:</strong> Cristobal Navarro (<em>axischire_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-29 14:56:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12461.php">Ralph Castain: "Re: [OMPI users] openMPI on Xgrid"</a>
<li><strong>Previous message:</strong> <a href="12459.php">Jean Potsam: "Re: [OMPI users] Segmentation fault (11)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12461.php">Ralph Castain: "Re: [OMPI users] openMPI on Xgrid"</a>
<li><strong>Reply:</strong> <a href="12461.php">Ralph Castain: "Re: [OMPI users] openMPI on Xgrid"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
i am new on this mailing list!
<br>
i've read the other messages about configuring openMPI on Xgrid, but i
<br>
havent solved my problem yet and openMPI keeps running as if Xgrid didnt
<br>
exist.
<br>
<p>i configured xgrid properly, and can send simple C program jobs trough the
<br>
command line from my client, which is the same as the controller and the
<br>
same as the agent for the moment.
<br>
<span class="quotelev2">&gt;&gt; xgrid -h localhost -p pass -job run ./helloWorld
</span><br>
i also installed xgrid Admin for monitoring.
<br>
<p>then,
<br>
&nbsp;i compiled openMPI 1.4.1 with these options
<br>
<p>/configure --prefix=/usr/local/openmpi/ --enable-shared --disable-static
<br>
--with-xgrid
<br>
sudo make
<br>
sudo make install
<br>
<p>and i made a simple helloMPI example.
<br>
<p><p>/* MPI C Example */
<br>
#include &lt;stdio.h&gt;
<br>
#include &lt;mpi.h&gt;
<br>
<p>int main (argc, argv)
<br>
&nbsp;&nbsp;int argc;
<br>
&nbsp;&nbsp;char *argv[];
<br>
{
<br>
int rank, size;
<br>
<p>MPI_Init (&amp;argc, &amp;argv);       /* starts MPI */
<br>
MPI_Comm_rank (MPI_COMM_WORLD, &amp;rank); /* get current process id */
<br>
MPI_Comm_size (MPI_COMM_WORLD, &amp;size); /* get number of processes */
<br>
printf( &quot;Hello world from process %d of %d\n&quot;, rank, size );
<br>
MPI_Finalize();
<br>
return 0;
<br>
}
<br>
<p><p>and compiled succesfully
<br>
<p><span class="quotelev2">&gt;&gt; mpicc hellompi.c -o hellompi
</span><br>
<p>the i run it
<br>
<p><span class="quotelev2">&gt;&gt; mpirun -np 2 hellompi
</span><br>
I am running on ijorge.local
<br>
Hello World from process 0 of 2
<br>
I am running on ijorge.local
<br>
Hello World from process 1 of 2
<br>
<p>the results are correct, but when i check Xgrid Admin, i see that the
<br>
execution didnt go trought Xgrid since there arent any new jobs on the list.
<br>
in the end, openMPI and Xgrid are not comunicating to each other.
<br>
<p>what am i missing??
<br>
<p>my enviroment variables are these:
<br>
<p><span class="quotelev2">&gt;&gt;echo $XGRID_CONTROLLER_HOSTNAME
</span><br>
ijorge.local
<br>
<span class="quotelev2">&gt;&gt;echo $XGRID_CONTROLLER_PASSWORD
</span><br>
myPassword
<br>
<p><p>any help is welcome!!
<br>
thanks in advance
<br>
<p>Cristobal
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12460/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12461.php">Ralph Castain: "Re: [OMPI users] openMPI on Xgrid"</a>
<li><strong>Previous message:</strong> <a href="12459.php">Jean Potsam: "Re: [OMPI users] Segmentation fault (11)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12461.php">Ralph Castain: "Re: [OMPI users] openMPI on Xgrid"</a>
<li><strong>Reply:</strong> <a href="12461.php">Ralph Castain: "Re: [OMPI users] openMPI on Xgrid"</a>
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
