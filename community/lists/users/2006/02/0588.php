<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Feb  6 17:25:42 2006" -->
<!-- isoreceived="20060206222542" -->
<!-- sent="Mon, 6 Feb 2006 14:25:34 -0800" -->
<!-- isosent="20060206222534" -->
<!-- name="Warner Yuen" -->
<!-- email="wyuen_at_[hidden]" -->
<!-- subject="[O-MPI users] OpenMPI and Xgrid" -->
<!-- id="E391490F-DAF3-47EE-BF30-94CC6F1B98DF_at_apple.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="mailman.19.1139158821.30062.users_at_open-mpi.org" -->
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
<strong>From:</strong> Warner Yuen (<em>wyuen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-02-06 17:25:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0589.php">Glen Kaukola: "Re: [O-MPI users] A few benchmarks"</a>
<li><strong>Previous message:</strong> <a href="0587.php">Xiaoning (David) Yang: "Re: [O-MPI users] Configuring OPEN MPI 1.0.1 MAC OS X 10.4.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0592.php">Brian Barrett: "Re: [O-MPI users] OpenMPI and Xgrid"</a>
<li><strong>Reply:</strong> <a href="0592.php">Brian Barrett: "Re: [O-MPI users] OpenMPI and Xgrid"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brian help!!!!!! :-)
<br>
<p>On Feb 5, 2006, at 9:00 AM, users-request_at_[hidden] wrote:
<br>
<p><span class="quotelev2">&gt;&gt; If this is the case, my next question is, how do I supply the usual
</span><br>
<span class="quotelev2">&gt;&gt; xgrid options, such as working directory, standard input file, etc?
</span><br>
<span class="quotelev2">&gt;&gt; Or is that simply not possible?
</span><br>
<span class="quotelev2">&gt;&gt; Do I simply have to have some other way (eg ssh) to get files to/
</span><br>
<span class="quotelev2">&gt;&gt; from agent machines, like I would for a batch system like PBS?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It looks like I never implemented those options (shame on me).  I've
</span><br>
<span class="quotelev1">&gt; added that to my to-do list, although I can't give an accurate time-
</span><br>
<span class="quotelev1">&gt; table for implementation at this point.  One thing to note is that
</span><br>
<span class="quotelev1">&gt; rather than using XGrid's standard input/output forwarding services,
</span><br>
<span class="quotelev1">&gt; we use Open MPI's services.  So if you do:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    mpirun -np 2 ./myapp &lt; foo.txt
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Under Xgrid with Open MPI, I'm trying to run applications that  
<br>
require more than just reading standard input/output but also the  
<br>
creation and writing of other intermediate files. For an application  
<br>
that like HP Linpack that just reads and writes one file, things work  
<br>
fine. My guess is that this is where things are getting hung up.  
<br>
Below, my application was trying to write out a file called  
<br>
&quot;testrun.nex.run1.p&quot; and failed. The MrBayes application writes out  
<br>
two files for each mpi process.
<br>
<p>Initial log likelihoods for run 1:
<br>
Chain 1 -- -429.987779
<br>
Chain 2 -- -386.761468
<br>
Could not open file &quot;testrun.nex.run1.p&quot;
<br>
Memory allocation error on at least one processor
<br>
Error in command &quot;Mcmc&quot;
<br>
There was an error on at least one processor
<br>
Error in command &quot;Execute&quot;
<br>
Will exit with signal 1 (error) because quitonerror is set to yes
<br>
<p>Am I just misunderstanding how to set up Open MPI to work with Xgrid?
<br>
<p>Warner Yuen
<br>
Research Computing Consultant
<br>
Apple Computer
<br>
email: wyuen_at_[hidden]
<br>
Tel: 408.718.2859
<br>
Fax: 408.715.0133
<br>
<p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0588/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0589.php">Glen Kaukola: "Re: [O-MPI users] A few benchmarks"</a>
<li><strong>Previous message:</strong> <a href="0587.php">Xiaoning (David) Yang: "Re: [O-MPI users] Configuring OPEN MPI 1.0.1 MAC OS X 10.4.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0592.php">Brian Barrett: "Re: [O-MPI users] OpenMPI and Xgrid"</a>
<li><strong>Reply:</strong> <a href="0592.php">Brian Barrett: "Re: [O-MPI users] OpenMPI and Xgrid"</a>
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
