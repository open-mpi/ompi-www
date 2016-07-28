<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Mar 27 09:28:41 2006" -->
<!-- isoreceived="20060327142841" -->
<!-- sent="Mon, 27 Mar 2006 09:27:56 -0500" -->
<!-- isosent="20060327142756" -->
<!-- name="Ali Eghlima" -->
<!-- email="Ali_Eghlima_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to establish communication between two separate COM WORLD" -->
<!-- id="OFE84CFD76.F0099B2D-ON8525713E.004F280C-8525713E.004F73F8_at_mck.us.ray.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4427EC24.50207_at_lanl.gov" -->
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
<strong>From:</strong> Ali Eghlima (<em>Ali_Eghlima_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-27 09:27:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0913.php">Joachim Worringen: "[OMPI users] 2nd Call for Papers: EuroPVM/MPI (Bonn, Germany, September 17-20)"</a>
<li><strong>Previous message:</strong> <a href="0911.php">Ralph Castain: "Re: [OMPI users] How to establish communication between two separate COM WORLD"</a>
<li><strong>In reply to:</strong> <a href="0911.php">Ralph Castain: "Re: [OMPI users] How to establish communication between two separate COM WORLD"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;&nbsp;Thanks Ralph and Jean.
<br>
<p>Is there any chances that this feature be added to the next release of 
<br>
mpiexec (mpirun).
<br>
<p>Thanks again
<br>
<p>Ali,
<br>
<p><p><p><p><p><p>&nbsp;
<br>
&nbsp;
<br>
<p><p><p>Ralph Castain &lt;rhc_at_[hidden]&gt; 
<br>
Sent by: users-bounces_at_[hidden]
<br>
03/27/2006 08:44 AM
<br>
Please respond to
<br>
rhc_at_[hidden]; Please respond to
<br>
Open MPI Users &lt;users_at_[hidden]&gt;
<br>
<p><p>To
<br>
Open MPI Users &lt;users_at_[hidden]&gt;
<br>
cc
<br>
<p>Subject
<br>
Re: [OMPI users] How to establish communication between two separate COM 
<br>
WORLD
<br>
<p><p><p><p><p><p>Actually, in a not-too-distant future release, there will be an option to 
<br>
mpirun called &quot;--connect&quot; that will allow you to specify that this job is 
<br>
to be connected to a specified earlier job. The run-time environment will 
<br>
then spawn the new job and exchange all required communication information 
<br>
between the two jobs for you. You could therefore accomplish your desired 
<br>
operation by:
<br>
<p><span class="quotelev1">&gt; nohup mpirun --np xx app1
</span><br>
(system returns job number to you)
<br>
<span class="quotelev1">&gt; mpirun --np yy --connect job1 app2
</span><br>
(system starts app2 and connects it to job1)
<br>
<p>Should be a little more transparent. No specific coding for making the 
<br>
connection would be required in your application itself.
<br>
<p>Ralph
<br>
<p><p>Jean Latour wrote: 
<br>
Hello, 
<br>
<p>It seems to me there is only one way to create a communication between 
<br>
two MPI_COMM_WORLD :  use MPI_Open_Port with a specific 
<br>
IP + port address, and then MPI_comm_connect / MPI_comm_accept. 
<br>
<p>In order to ease the port number communication, the use of 
<br>
MPI_publish-name 
<br>
/ MPI_lookup_name is also possible with the constraint that the &quot;publish&quot; 
<br>
must be done before the &quot;lookup&quot;, and this involves some synchronization 
<br>
between the processes anyway. 
<br>
<p>Simple examples can be found in the handbook on MPI : &quot;Using MPI-2&quot; 
<br>
by William Gropp et al. 
<br>
<p>Best Regards, 
<br>
Jean 
<br>
<p>Ali Eghlima wrote: 
<br>
<p><p><p>Hello, 
<br>
<p>I have read MPI-2 documents as well as FAQ. I am confused as the best way 
<br>
to establish communication 
<br>
between two  MPI_COMM_WORLD which has been created by two mpiexec calls on 
<br>
the same node. 
<br>
<p>mpiexec -conf  config1 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This start 20 processes on 7 nodes 
<br>
<p>mpiexec -conf  config2 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This start 18 processes on 5 nodes 
<br>
<p>I do appreciate any comments or pointer to a document or example. 
<br>
<p>Thanks 
<br>
<p>Ali, 
<br>
<p>&nbsp;
<br>
<p>------------------------------------------------------------------------ 
<br>
<p>_______________________________________________ 
<br>
users mailing list 
<br>
users_at_[hidden] 
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> 
<br>
<p><p><p><p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0912/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0913.php">Joachim Worringen: "[OMPI users] 2nd Call for Papers: EuroPVM/MPI (Bonn, Germany, September 17-20)"</a>
<li><strong>Previous message:</strong> <a href="0911.php">Ralph Castain: "Re: [OMPI users] How to establish communication between two separate COM WORLD"</a>
<li><strong>In reply to:</strong> <a href="0911.php">Ralph Castain: "Re: [OMPI users] How to establish communication between two separate COM WORLD"</a>
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
