<?
$subject_val = "[OMPI users] Setup of a two nodes cluster?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 24 11:09:01 2011" -->
<!-- isoreceived="20110224160901" -->
<!-- sent="Thu, 24 Feb 2011 11:08:12 -0500" -->
<!-- isosent="20110224160812" -->
<!-- name="Xianglong Kong" -->
<!-- email="dinosaur8312_at_[hidden]" -->
<!-- subject="[OMPI users] Setup of a two nodes cluster?" -->
<!-- id="AANLkTimseMoNdbNexxOpB1hq00Pfgp4gbNQRXnEz_jFL_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Setup of a two nodes cluster?<br>
<strong>From:</strong> Xianglong Kong (<em>dinosaur8312_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-24 11:08:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15735.php">Henderson, Brent: "Re: [OMPI users] SLURM environment variables at runtime"</a>
<li><strong>Previous message:</strong> <a href="15733.php">Ralph Castain: "Re: [OMPI users] SLURM environment variables at runtime"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, all,
<br>
<p>I asked for help for a code problem here days ago (
<br>
<a href="http://www.open-mpi.org/community/lists/users/2011/02/15656.php">http://www.open-mpi.org/community/lists/users/2011/02/15656.php</a> ).
<br>
Then I found that the code can be executed without any issue on other
<br>
cluster. So I suspected that there maybe something wrong in my cluster
<br>
environment configuration. So I reconfigured the nfs,ssh and other
<br>
related thing and reinstalled the openmpi library. The cluster
<br>
consists of two desktops which are connected using a crossover cable.
<br>
Both of the desktops have a Intel Core 2 Duo CPU and are using Ubuntu
<br>
10.04 LTS, and the version of openmpi intalled on the nfs (located at
<br>
the master node)   is 1.4.3.
<br>
<p>Now, things seems to be getting worse. I can't run any code
<br>
successfully that more complicated than the &quot;MPI hello world&quot;. But if
<br>
all of the processes are launched in the same node, the code  can be
<br>
executed without any issue.
<br>
<p>For example, the following code(only add one line to the &quot;MPI hello
<br>
world&quot;) would crash at the MPI_Barrier. However, if I delete the line
<br>
of MPI_Barrier, the code would run successfully.
<br>
****************************************************************************************************
<br>
#include &lt;stdio.h&gt;
<br>
#include &quot;mpi.h&quot;
<br>
<p>int main(int argc, char** argv) {
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int myrank, nprocs;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD, &amp;nprocs);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;myrank);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;First hello from processor %d of %d\n&quot;, myrank, nprocs);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Barrier(MPI_COMM_WORLD);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Second hello from processor %d of %d\n&quot;, myrank, nprocs);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
****************************************************************************************************
<br>
<p>The output of the above code is:
<br>
****************************************************************************************************
<br>
[kongdragon-master:16119] *** An error occurred in MPI_Barrier
<br>
[kongdragon-master:16119] *** on communicator MPI_COMM_WORLD
<br>
[kongdragon-master:16119] *** MPI_ERR_IN_STATUS: error code in status
<br>
[kongdragon-master:16119] *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
First hello from processor 0 of 2
<br>
--------------------------------------------------------------------------
<br>
mpirun has exited due to process rank 0 with PID 16119 on
<br>
node kongdragon-master exiting without calling &quot;finalize&quot;. This may
<br>
have caused other processes in the application to be
<br>
terminated by signals sent by mpirun (as reported here).
<br>
--------------------------------------------------------------------------
<br>
First hello from processor 1 of 2
<br>
<p>****************************************************************************************************
<br>
<p>Can anyone help to point out why things didn't work?
<br>
<p>Thanks!
<br>
<p><p>Kong
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15735.php">Henderson, Brent: "Re: [OMPI users] SLURM environment variables at runtime"</a>
<li><strong>Previous message:</strong> <a href="15733.php">Ralph Castain: "Re: [OMPI users] SLURM environment variables at runtime"</a>
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
