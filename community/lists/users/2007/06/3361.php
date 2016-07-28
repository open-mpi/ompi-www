<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jun  4 10:01:02 2007" -->
<!-- isoreceived="20070604140102" -->
<!-- sent="Mon, 4 Jun 2007 15:00:47 +0100" -->
<!-- isosent="20070604140047" -->
<!-- name="Allan, Mark \(UK Filton\)" -->
<!-- email="Mark.Allan2_at_[hidden]" -->
<!-- subject="[OMPI users] Timing communication" -->
<!-- id="5861C625258167499D051F0CE1D0FE4B09C207_at_GLKMS2104.GREENLNK.NET" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Allan, Mark \(UK Filton\) (<em>Mark.Allan2_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-04 10:00:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3362.php">Aaron Thompson: "Re: [OMPI users] OpenMPI + GFortran compile issues on Mac OS X 10.4 -- solved"</a>
<li><strong>Previous message:</strong> <a href="3360.php">Ralph Castain: "Re: [OMPI users] Issues running a basic program with spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3438.php">Jeff Squyres: "Re: [OMPI users] Timing communication"</a>
<li><strong>Reply:</strong> <a href="3438.php">Jeff Squyres: "Re: [OMPI users] Timing communication"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
&nbsp;
<br>
I'm new to this list and wonder if anyone can help.  I'm trying to
<br>
measure communication time between parallel processes using openmpi.  As
<br>
an example I might be running on 4 dual core processors (8 processes in
<br>
total).  I was hoping that communication using shared memory (comms
<br>
between dual cores on the same chip) would be faster than that over the
<br>
network.  To measure communication time I'm sending a block of data to
<br>
each process (from each process) using a blocking send, and am timing
<br>
how long it takes.  I repeat this 50 times (for example) and take the
<br>
average time.  The code is something like:
<br>
&nbsp;
<br>
&nbsp;for(int i=0;i&lt;numProcs;i++)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;for(int j=0;j&lt;numProcs;j++)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(i!=j)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// // // i is the sending proc to j, others wait
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;double time = 0.0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for(int kk=0; kk&lt;50; kk++)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(i==my_rank)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;double start = MPI::Wtime();
<br>
&nbsp;
<br>
MPI::COMM_WORLD.Send(&amp;sendData[0],dataSize,MPI::DOUBLE,j,i);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;double end = MPI::Wtime();      
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;time+=(end-start);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(j==my_rank)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;
<br>
MPI::COMM_WORLD.Recv(&amp;recvData[0],dataSize,MPI::DOUBLE,i,i);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(i==my_rank)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;out &lt;&lt; i &lt;&lt; &quot; &quot; &lt;&lt; j &lt;&lt; &quot; &quot; &lt;&lt; time/50.0 &lt;&lt; std::endl;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI::COMM_WORLD.Barrier();     
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;
<br>
The problem I am having is that I'm not noticing any appreciable
<br>
difference in communication times between shared memory and network
<br>
protocols.  I expected shared memory to be faster(!?!).
<br>
&nbsp;
<br>
Does anyone have a better way of measuring communication times?
<br>
&nbsp;
<br>
Thanks,
<br>
&nbsp;
<br>
Mark.
<br>
<p><p>********************************************************************
<br>
This email and any attachments are confidential to the intended
<br>
recipient and may also be privileged. If you are not the intended
<br>
recipient please delete it from your system and notify the sender.
<br>
You should not copy it or use it for any purpose nor disclose or
<br>
distribute its contents to any other person.
<br>
********************************************************************
<br>
<p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3361/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3362.php">Aaron Thompson: "Re: [OMPI users] OpenMPI + GFortran compile issues on Mac OS X 10.4 -- solved"</a>
<li><strong>Previous message:</strong> <a href="3360.php">Ralph Castain: "Re: [OMPI users] Issues running a basic program with spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3438.php">Jeff Squyres: "Re: [OMPI users] Timing communication"</a>
<li><strong>Reply:</strong> <a href="3438.php">Jeff Squyres: "Re: [OMPI users] Timing communication"</a>
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
