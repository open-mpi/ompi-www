<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Mar 27 10:20:28 2006" -->
<!-- isoreceived="20060327152028" -->
<!-- sent="Mon, 27 Mar 2006 10:20:27 -0500 (EST)" -->
<!-- isosent="20060327152027" -->
<!-- name="Chris Gottbrath" -->
<!-- email="chrisg_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to establish communication between two separate COM WORLD (fwd)" -->
<!-- id="Pine.LNX.4.61.0603271017030.18335_at_papua.etnus.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="[OMPI users] How to establish communication between two separate COM WORLD (fwd)" -->
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
<strong>From:</strong> Chris Gottbrath (<em>chrisg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-27 10:20:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0916.php">Edgar Gabriel: "Re: [OMPI users] MPI_ROOT - required where/when?"</a>
<li><strong>Previous message:</strong> <a href="0914.php">Michael Kluskens: "[OMPI users] MPI_ROOT - required where/when?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0917.php">Ralph Castain: "Re: [OMPI users] How to establish communication between two separate COM WORLD (fwd)"</a>
<li><strong>Reply:</strong> <a href="0917.php">Ralph Castain: "Re: [OMPI users] How to establish communication between two separate COM WORLD (fwd)"</a>
<li><strong>Maybe reply:</strong> <a href="0936.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] How to establish communication between two separate COM WORLD (fwd)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph, 
<br>
<p>Interesting. How would the two jobs be 'connected' in this
<br>
scheme? 
<br>
<p>Would they share a single MPI_COMM_WORLD or would they both 
<br>
be created with an intercommunicator to the other jobs
<br>
MPI_WORLD?
<br>
<p>If so, how would that intercommmunicator be obtained in each 
<br>
program? 
<br>
<p>Is this mode documented anywhere?
<br>
<p>Cheers,
<br>
Chris
<br>
<p><pre>
--
Chris Gottbrath
Partner Technologies Engineer    Etnus, LLC
Chris.Gottbrath_at_[hidden]        <a href="http://www.etnus.com/">http://www.etnus.com/</a>
Voice: 508-652-7700 x7735        Fax: 508-652-7787
---------- Forwarded message ----------
Date: Mon, 27 Mar 2006 06:44:04 -0700
From: Ralph Castain &lt;rhc_at_[hidden]&gt;
To: Open MPI Users &lt;users_at_[hidden]&gt;
Subject: Re: [OMPI users] How to establish communication between two separate
    COM WORLD
Actually, in a not-too-distant future release, there will be an option to mpirun called &quot;--connect&quot;
that will allow you to specify that this job is to be connected to a specified earlier job. The
run-time environment will then spawn the new job and exchange all required communication information
between the two jobs for you. You could therefore accomplish your desired operation by:
&gt; nohup mpirun --np xx app1
(system returns job number to you)
&gt; mpirun --np yy --connect job1 app2
(system starts app2 and connects it to job1)
Should be a little more transparent. No specific coding for making the connection would be required
in your application itself.
Ralph
Jean Latour wrote:
      Hello,
      It seems to me there is only one way to create a communication between
      two MPI_COMM_WORLD :  use MPI_Open_Port with a specific
      IP + port address, and then MPI_comm_connect / MPI_comm_accept.
      In order to ease the port number communication, the use of MPI_publish-name
      / MPI_lookup_name is also possible with the constraint that the &quot;publish&quot;
      must be done before the &quot;lookup&quot;, and this involves some synchronization
      between the processes anyway.
      Simple examples can be found in the handbook on MPI : &quot;Using MPI-2&quot;
      by William Gropp et al.
      Best Regards,
      Jean
      Ali Eghlima wrote:
            Hello,
            I have read MPI-2 documents as well as FAQ. I am confused as the best way to
            establish communication
            between two  MPI_COMM_WORLD which has been created by two mpiexec calls on
            the same node.
            mpiexec -conf  config1
                 This start 20 processes on 7 nodes
            mpiexec -conf  config2
                  This start 18 processes on 5 nodes
            I do appreciate any comments or pointer to a document or example.
            Thanks
            Ali,
             
            ------------------------------------------------------------------------
            _______________________________________________
            users mailing list
            users_at_[hidden]
            <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
     ________________________________________________________________________________________________
 _______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0916.php">Edgar Gabriel: "Re: [OMPI users] MPI_ROOT - required where/when?"</a>
<li><strong>Previous message:</strong> <a href="0914.php">Michael Kluskens: "[OMPI users] MPI_ROOT - required where/when?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0917.php">Ralph Castain: "Re: [OMPI users] How to establish communication between two separate COM WORLD (fwd)"</a>
<li><strong>Reply:</strong> <a href="0917.php">Ralph Castain: "Re: [OMPI users] How to establish communication between two separate COM WORLD (fwd)"</a>
<li><strong>Maybe reply:</strong> <a href="0936.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] How to establish communication between two separate COM WORLD (fwd)"</a>
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
