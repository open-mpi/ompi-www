<?
$subject_val = "Re: [OMPI users] OpenMPI 1.3.3 with Boost.MPI ?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 31 22:04:50 2009" -->
<!-- isoreceived="20090901020450" -->
<!-- sent="Tue, 01 Sep 2009 10:57:38 +0900" -->
<!-- isosent="20090901015738" -->
<!-- name="Ashika Umanga Umagiliya" -->
<!-- email="aumanga_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.3.3 with Boost.MPI ?" -->
<!-- id="4A9C7F92.9010507_at_biggjapan.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="b88e40560908310846p73322dbel751af7a4934316f0_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI 1.3.3 with Boost.MPI ?<br>
<strong>From:</strong> Ashika Umanga Umagiliya (<em>aumanga_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-31 21:57:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/09/10531.php">amjad ali: "[OMPI users] Running problem"</a>
<li><strong>Previous message:</strong> <a href="10529.php">Ralph Castain: "Re: [OMPI users] Problem with repeatedly spawning a few processes"</a>
<li><strong>In reply to:</strong> <a href="10522.php">Federico Golfr&#232; Andreasi: "Re: [OMPI users] OpenMPI 1.3.3 with Boost.MPI ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/09/10548.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.3.3 with Boost.MPI ?"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/09/10548.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.3.3 with Boost.MPI ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Federico,
<br>
It worked fine.But I have small issue.Following code demonstrates how I 
<br>
use mpi::intercommunicator.But in the spawned child processes, the 
<br>
intercommunicator size is same as number of spawned processes.But it 
<br>
should be 1 ,right?
<br>
Because,I execute the manager process (manager.cpp) as &quot;mpirun -np 1 
<br>
manager&quot; .So there should be only one process.
<br>
<p>thanks in advance
<br>
umanga
<br>
<p><p>manager.cpp (manager process which spawns child processes) - rank 0
<br>
------------------------------------------------------------
<br>
<p>int main(int argc,char *argv[]) {
<br>
&nbsp;mpi::environment evn(argc,argv);
<br>
&nbsp;mpi::communicator world;
<br>
&nbsp;MPI_Comm everyone;
<br>
<p>//spawn 5 child processes.
<br>
MPI_Comm_spawn(&quot;./worker&quot;, MPI_ARGV_NULL, 5,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_INFO_NULL, 0, MPI_COMM_SELF, &amp;everyone,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_ERRCODES_IGNORE);
<br>
<p>&nbsp;intercommunicator intcomm(everyone,comm_duplicate);
<br>
<p>&nbsp;if(rank==0){
<br>
&nbsp;&nbsp;&nbsp;GPSPosition *obj=new GPSPosition(100,200,300);
<br>
&nbsp;&nbsp;&nbsp;shared_ptr&lt;Position&gt; pos(new Position);
<br>
&nbsp;&nbsp;&nbsp;pos-&gt;setVals();
<br>
&nbsp;&nbsp;&nbsp;obj-&gt;addP(pos);
<br>
&nbsp;&nbsp;&nbsp;intcomm.send(0,100,obj);
<br>
&nbsp;&nbsp;}
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
<p>worker.cpp (child process)- rank 0-4
<br>
-----------------------------------------------------------------------------------
<br>
<p>int main(int argc,char *argv[]) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mpi::environment evn(argc,argv);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm parent;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_get_parent(&amp;parent);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;intercommunicator incomm(parent,comm_duplicate);
<br>
&nbsp;&nbsp;&nbsp;communicator world;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if(parent==MPI_COMM_NULL){
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cout &lt;&lt; &quot;Intercommunicator is Null !&quot;&lt;&lt;endl;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}else{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int size=incomm.size() ; //Size should be 1 but gives 5 ???
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int worldsize=world.size(); //Size 5
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int r=incomm.rank();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cout &lt;&lt;&quot;Rank !&quot;&lt;&lt;r&lt;&lt; endl; //get 0-4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(r==1){
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//try receiving data send from manager process
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;return 0;
<br>
}
<br>
<p>Federico Golfr&#232; Andreasi wrote:
<br>
<span class="quotelev1">&gt; Look at 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.boost.org/doc/libs/1_40_0/doc/html/boost/mpi/intercommunicator.html">http://www.boost.org/doc/libs/1_40_0/doc/html/boost/mpi/intercommunicator.html</a>
</span><br>
<span class="quotelev1">&gt; to have a Boost wrapper for an Intercommunicator.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Federico
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2009/8/28 Ashika Umanga Umagiliya &lt;aumanga_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:aumanga_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Greetings all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I wanted to send come complex user defined types between MPI
</span><br>
<span class="quotelev1">&gt;     processes and found out that Boost.MPI is  quite easy to use for
</span><br>
<span class="quotelev1">&gt;     my requirement.So far it worked well and I received my object
</span><br>
<span class="quotelev1">&gt;     model in every process without problems.
</span><br>
<span class="quotelev1">&gt;     Now I am going to spawn processes (using MPI_Comm_spawn, because
</span><br>
<span class="quotelev1">&gt;     Boot.MPI doesn't have such a function) and then use Boost.MPI to
</span><br>
<span class="quotelev1">&gt;     send the objects across newly created child processes.
</span><br>
<span class="quotelev1">&gt;     Is there any issues with this procedure?
</span><br>
<span class="quotelev1">&gt;     And Boost.MPI says it only support OpenMPI 1.0.x
</span><br>
<span class="quotelev1">&gt;     (<a href="http://www.boost.org/doc/libs/1_40_0/doc/html/mpi/getting_started.html#mpi.mpi_impl">http://www.boost.org/doc/libs/1_40_0/doc/html/mpi/getting_started.html#mpi.mpi_impl</a>)
</span><br>
<span class="quotelev1">&gt;     Will there be any version incompatibilities ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     thanks in advance,
</span><br>
<span class="quotelev1">&gt;     umanga
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     users mailing list
</span><br>
<span class="quotelev1">&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10530/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/09/10531.php">amjad ali: "[OMPI users] Running problem"</a>
<li><strong>Previous message:</strong> <a href="10529.php">Ralph Castain: "Re: [OMPI users] Problem with repeatedly spawning a few processes"</a>
<li><strong>In reply to:</strong> <a href="10522.php">Federico Golfr&#232; Andreasi: "Re: [OMPI users] OpenMPI 1.3.3 with Boost.MPI ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/09/10548.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.3.3 with Boost.MPI ?"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/09/10548.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.3.3 with Boost.MPI ?"</a>
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
