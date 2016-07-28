<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Feb  7 09:36:49 2006" -->
<!-- isoreceived="20060207143649" -->
<!-- sent="Tue, 7 Feb 2006 09:36:43 -0500" -->
<!-- isosent="20060207143643" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] OpenMPI and Xgrid" -->
<!-- id="C89A404E-68B5-4369-A57C-35DB8CE401F2_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="E391490F-DAF3-47EE-BF30-94CC6F1B98DF_at_apple.com" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-02-07 09:36:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0593.php">Rainer Keller: "Re: [O-MPI users] mpirun with make"</a>
<li><strong>Previous message:</strong> <a href="0591.php">Andrew Friedley: "Re: [O-MPI users] mpirun with make"</a>
<li><strong>In reply to:</strong> <a href="0588.php">Warner Yuen: "[O-MPI users] OpenMPI and Xgrid"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 6, 2006, at 5:25 PM, Warner Yuen wrote:
<br>
<p><span class="quotelev1">&gt; Brian help!!!!!! :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 5, 2006, at 9:00 AM, users-request_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If this is the case, my next question is, how do I supply the usual
</span><br>
<span class="quotelev3">&gt;&gt;&gt; xgrid options, such as working directory, standard input file, etc?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Or is that simply not possible?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Do I simply have to have some other way (eg ssh) to get files to/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; from agent machines, like I would for a batch system like PBS?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It looks like I never implemented those options (shame on me).  I've
</span><br>
<span class="quotelev2">&gt;&gt; added that to my to-do list, although I can't give an accurate time-
</span><br>
<span class="quotelev2">&gt;&gt; table for implementation at this point.  One thing to note is that
</span><br>
<span class="quotelev2">&gt;&gt; rather than using XGrid's standard input/output forwarding services,
</span><br>
<span class="quotelev2">&gt;&gt; we use Open MPI's services.  So if you do:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    mpirun -np 2 ./myapp &lt; foo.txt
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Under Xgrid with Open MPI, I'm trying to run applications that  
</span><br>
<span class="quotelev1">&gt; require more than just reading standard input/output but also the  
</span><br>
<span class="quotelev1">&gt; creation and writing of other intermediate files. For an  
</span><br>
<span class="quotelev1">&gt; application that like HP Linpack that just reads and writes one  
</span><br>
<span class="quotelev1">&gt; file, things work fine. My guess is that this is where things are  
</span><br>
<span class="quotelev1">&gt; getting hung up. Below, my application was trying to write out a  
</span><br>
<span class="quotelev1">&gt; file called &quot;testrun.nex.run1.p&quot; and failed. The MrBayes  
</span><br>
<span class="quotelev1">&gt; application writes out two files for each mpi process.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Initial log likelihoods for run 1:
</span><br>
<span class="quotelev1">&gt; Chain 1 -- -429.987779
</span><br>
<span class="quotelev1">&gt; Chain 2 -- -386.761468
</span><br>
<span class="quotelev1">&gt; Could not open file &quot;testrun.nex.run1.p&quot;
</span><br>
<span class="quotelev1">&gt; Memory allocation error on at least one processor
</span><br>
<span class="quotelev1">&gt; Error in command &quot;Mcmc&quot;
</span><br>
<span class="quotelev1">&gt; There was an error on at least one processor
</span><br>
<span class="quotelev1">&gt; Error in command &quot;Execute&quot;
</span><br>
<span class="quotelev1">&gt; Will exit with signal 1 (error) because quitonerror is set to yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Am I just misunderstanding how to set up Open MPI to work with Xgrid?
</span><br>
<p>Ah, yes, this would make sense.  When password authentication is used  
<br>
to authenticate to an XGrid controller, all jobs run as user  
<br>
'nobody'.  So all the files that MrBayes (for example) are trying to  
<br>
read/write must have permissions for user 'nobody'.  If the files  
<br>
only need to be read, making them (and your home directory itself)  
<br>
world readable is an option.  If the files need to be written, then  
<br>
there's a bit of a problem, since you probably (in general) don't  
<br>
want to allow user nobody to write all over your home directory.  One  
<br>
solution (if possible) would be to have the application write into / 
<br>
tmp and then collect the files after the job completes.
<br>
<p>If kerberos authentication (aka Single Signon) is used for controller  
<br>
authentication, then the processes started by XGrid run as the user  
<br>
who submitted the job.  This makes I/O on the compute nodes  
<br>
significantly easier, but setting up the grid is more difficult.  All  
<br>
the computers have to use the same kerberos authentication realm, and  
<br>
I think there are some other restrictions.  Also, because I didn't  
<br>
have access to such a setup, Open MPI 1.0.x does not support process  
<br>
startup with single signon authentication.  This is something I'm  
<br>
hoping to have fixed for Open MPI 1.1, if I can find a properly  
<br>
configured cluster to test on.
<br>
<p><p>Hope this made some sense...
<br>
<p>Brian
<br>
<p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0593.php">Rainer Keller: "Re: [O-MPI users] mpirun with make"</a>
<li><strong>Previous message:</strong> <a href="0591.php">Andrew Friedley: "Re: [O-MPI users] mpirun with make"</a>
<li><strong>In reply to:</strong> <a href="0588.php">Warner Yuen: "[O-MPI users] OpenMPI and Xgrid"</a>
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
