<?
$subject_val = "[OMPI users] Open MPI program cannot complete";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Oct 24 14:23:14 2010" -->
<!-- isoreceived="20101024182314" -->
<!-- sent="Sun, 24 Oct 2010 12:23:09 -0600" -->
<!-- isosent="20101024182309" -->
<!-- name="Jack Bryan" -->
<!-- email="dtustudy68_at_[hidden]" -->
<!-- subject="[OMPI users] Open MPI program cannot complete" -->
<!-- id="SNT134-w220C99D239D1DF1DCB9C23CB400_at_phx.gbl" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Open MPI program cannot complete<br>
<strong>From:</strong> Jack Bryan (<em>dtustudy68_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-24 14:23:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14582.php">Gustavo Correa: "Re: [OMPI users] Open MPI program cannot complete"</a>
<li><strong>Previous message:</strong> <a href="14580.php">Brandon Fulcher: "Re: [OMPI users] Running simple MPI program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14582.php">Gustavo Correa: "Re: [OMPI users] Open MPI program cannot complete"</a>
<li><strong>Reply:</strong> <a href="14582.php">Gustavo Correa: "Re: [OMPI users] Open MPI program cannot complete"</a>
<li><strong>Maybe reply:</strong> <a href="14620.php">Jack Bryan: "Re: [OMPI users] Open MPI program cannot complete"</a>
<li><strong>Maybe reply:</strong> <a href="14623.php">Jack Bryan: "Re: [OMPI users] Open MPI program cannot complete"</a>
<li><strong>Maybe reply:</strong> <a href="14624.php">Jack Bryan: "Re: [OMPI users] Open MPI program cannot complete"</a>
<li><strong>Maybe reply:</strong> <a href="14636.php">Jack Bryan: "Re: [OMPI users] Open MPI program cannot complete"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi 
<br>
I got a problem of open MPI.
<br>
My program has 5 processes. 
<br>
All of them can run MPI_Finalize() and return 0. 
<br>
But, the whole program cannot be completed. 
<br>
In the MPI cluster job queue, it is strill in running status. 
<br>
If I use 1 process to run it, no problem.
<br>
Why ? 
<br>
My program:
<br>
int main (int argc, char **argv) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);	MPI_Comm_rank(MPI_COMM_WORLD, &amp;myRank);	MPI_Comm_size(MPI_COMM_WORLD, &amp;mySize);	MPI_Comm world;	world = MPI_COMM_WORLD;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (myRank == 0)        {		do some things. 	}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (myRank != 0)      	{		do some things. 		MPI_Finalize();		return 0 ;	}	if (myRank == 0)        {		MPI_Finalize(); 		return 0;	}	}
<br>
And, some output files get wrong codes, which can not be readible. In 1-process case, the program can print correct results to these output files . 
<br>
Any help is appreciated. 
<br>
thanks
<br>
Jack
<br>
Oct. 24 2010
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14581/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14582.php">Gustavo Correa: "Re: [OMPI users] Open MPI program cannot complete"</a>
<li><strong>Previous message:</strong> <a href="14580.php">Brandon Fulcher: "Re: [OMPI users] Running simple MPI program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14582.php">Gustavo Correa: "Re: [OMPI users] Open MPI program cannot complete"</a>
<li><strong>Reply:</strong> <a href="14582.php">Gustavo Correa: "Re: [OMPI users] Open MPI program cannot complete"</a>
<li><strong>Maybe reply:</strong> <a href="14620.php">Jack Bryan: "Re: [OMPI users] Open MPI program cannot complete"</a>
<li><strong>Maybe reply:</strong> <a href="14623.php">Jack Bryan: "Re: [OMPI users] Open MPI program cannot complete"</a>
<li><strong>Maybe reply:</strong> <a href="14624.php">Jack Bryan: "Re: [OMPI users] Open MPI program cannot complete"</a>
<li><strong>Maybe reply:</strong> <a href="14636.php">Jack Bryan: "Re: [OMPI users] Open MPI program cannot complete"</a>
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
