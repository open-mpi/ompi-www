<?
$subject_val = "Re: [OMPI users] I encoutered Bus Error while running openMPI on IB.";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr  9 14:03:38 2009" -->
<!-- isoreceived="20090409180338" -->
<!-- sent="Thu, 9 Apr 2009 12:03:27 -0600" -->
<!-- isosent="20090409180327" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] I encoutered Bus Error while running openMPI on IB." -->
<!-- id="7CA1C08B-2E45-444B-9FBE-2C9A83EDB1D5_at_lanl.gov" -->
<!-- charset="BIG5" -->
<!-- inreplyto="84b2b5e30904090953n5f8ff82aif7a5269f7c751bc3_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] I encoutered Bus Error while running openMPI on IB.<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-09 14:03:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8850.php">Gus Correa: "Re: [OMPI users] shared libraries issue compiling 1.3.1/intel 10.1.022"</a>
<li><strong>Previous message:</strong> <a href="8848.php">Tsung Han Shie: "[OMPI users] I encoutered Bus Error while running openMPI on IB."</a>
<li><strong>In reply to:</strong> <a href="8848.php">Tsung Han Shie: "[OMPI users] I encoutered Bus Error while running openMPI on IB."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; --with-tm=/usr/local/torque2.1.8/
</span><br>
<p>If you are using rsh, then why did you specify to build with Torque?
<br>
<p>The deprecated parameter is just a warning and shouldn't cause a  
<br>
problem. The current param would be to specify -mca plm_rsh_agent rsh.  
<br>
No big deal, though - either will work.
<br>
<p>You might want to reconfigure with --enable-debug, and then run the  
<br>
job with -mca plm_base_verbose 5 to see what is going on. No idea off  
<br>
hand why you would hit a bus error.
<br>
<p>Ralph
<br>
<p>On Apr 9, 2009, at 10:53 AM, Tsung Han Shie wrote:
<br>
<p><span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've build an openmpi-1.3.1 binary on a machine with openSUSE 10.2,  
</span><br>
<span class="quotelev1">&gt; gcc 4.1.2&#161;C
</span><br>
<span class="quotelev1">&gt; The cluster I tried to run jobs on uses Silverstorm infiniband  
</span><br>
<span class="quotelev1">&gt; system and uses ibverbs as its IB driver. The configure parameters  
</span><br>
<span class="quotelev1">&gt; listed below:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/d/thshie/vp31/openmpi/ --with-openib=/usr/ 
</span><br>
<span class="quotelev1">&gt; local/ibverbs1.1.1/ --with-tm=/usr/local/torque2.1.8/ CFLAGS=-m64  
</span><br>
<span class="quotelev1">&gt; CXXFLAGS=-m64 FFLAGS=-m64 FCFLAGS=-m64 --disable-shared --enable- 
</span><br>
<span class="quotelev1">&gt; static
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The cluster system uses &quot;rsh&quot; as the process lauch system. While I  
</span><br>
<span class="quotelev1">&gt; ran a job with &quot;&lt;mpirun path&gt; --mca pls_rsh_agent rsh -np 128 - 
</span><br>
<span class="quotelev1">&gt; machinefile machines  -nolocal &lt;job command&gt;&quot;. I shows following  
</span><br>
<span class="quotelev1">&gt; messages:
</span><br>
<span class="quotelev1">&gt; ====================================================
</span><br>
<span class="quotelev1">&gt; A deprecated MCA parameter value was specified in the environment or
</span><br>
<span class="quotelev1">&gt; on the command line.  Deprecated MCA parameters should be avoided;
</span><br>
<span class="quotelev1">&gt; they may disappear in future releases.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Deprecated parameter: pls_rsh_agent
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Bus error
</span><br>
<span class="quotelev1">&gt; ====================================================
</span><br>
<span class="quotelev1">&gt; I've looked into maling lists. But the contents seemsto be related  
</span><br>
<span class="quotelev1">&gt; to the developments of openMPI. Can anyone gives me some guides  
</span><br>
<span class="quotelev1">&gt; about how this would happen and how do I fixed it?
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8850.php">Gus Correa: "Re: [OMPI users] shared libraries issue compiling 1.3.1/intel 10.1.022"</a>
<li><strong>Previous message:</strong> <a href="8848.php">Tsung Han Shie: "[OMPI users] I encoutered Bus Error while running openMPI on IB."</a>
<li><strong>In reply to:</strong> <a href="8848.php">Tsung Han Shie: "[OMPI users] I encoutered Bus Error while running openMPI on IB."</a>
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
