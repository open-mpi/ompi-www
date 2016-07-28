<?
$subject_val = "Re: [OMPI users] Run-time problem";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  5 12:46:24 2009" -->
<!-- isoreceived="20090305174624" -->
<!-- sent="Thu, 5 Mar 2009 10:46:10 -0700" -->
<!-- isosent="20090305174610" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Run-time problem" -->
<!-- id="80CAA7FD-8324-4026-A0CF-E8D649CDFDD7_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="612307.10080.qm_at_web63004.mail.re1.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Run-time problem<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-05 12:46:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8329.php">Gus Correa: "Re: [OMPI users] Any scientific	application	heavilyusing	MPI_Barrier?"</a>
<li><strong>Previous message:</strong> <a href="8327.php">Ralph Castain: "Re: [OMPI users] Run-time problem"</a>
<li><strong>Maybe in reply to:</strong> <a href="8325.php">justin oppenheim: "[OMPI users] Run-time problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8353.php">justin oppenheim: "Re: [OMPI users] Run-time problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
First, you can add --launch-agent rsh to the command line and that  
<br>
will have OMPI use rsh.
<br>
<p>It sounds like your remote nodes may not be seeing your OMPI install  
<br>
directory. Several ways you can resolve that - here are a couple:
<br>
<p>1. add the install directory to your LD_LIBRARY_PATH in your .cshrc  
<br>
(or whatever shell rc you are using) - be sure this is being executed  
<br>
on the remote nodes
<br>
<p>2. add --prefix=path-to-install on your cmd line - this will direct  
<br>
your remote procs to the proper libraries
<br>
<p>Ralph
<br>
<p><p>On Mar 5, 2009, at 10:18 AM, justin oppenheim wrote:
<br>
<p><span class="quotelev1">&gt; Maybe I should also add that the program
</span><br>
<span class="quotelev1">&gt; my_mpi_executable is locally installed under the same root directory  
</span><br>
<span class="quotelev1">&gt; as that under which  openmpi-1.3 is installed. This root directory  
</span><br>
<span class="quotelev1">&gt; is NSF mounted on the working nodes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; JO
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --- On Thu, 3/5/09, justin oppenheim &lt;jl09981_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; From: justin oppenheim &lt;jl09981_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Run-time problem
</span><br>
<span class="quotelev1">&gt; To: &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date: Thursday, March 5, 2009, 12:04 PM
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Ralph:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for your prompt response. I am using openmpi-1.3, Suse 10.3.  
</span><br>
<span class="quotelev1">&gt; I installed openmpi-1.3 with the option
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/where/to/install
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and then just
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make all install
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I thought the default connection mode is rsh, but I had to invoke  
</span><br>
<span class="quotelev1">&gt; ssh-agent, in order not have to enter password one by one. How to  
</span><br>
<span class="quotelev1">&gt; change to rsh?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; JO
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --- On Thu, 3/5/09, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; From: Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Run-time problem
</span><br>
<span class="quotelev1">&gt; To: jl09981_at_[hidden], &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date: Thursday, March 5, 2009, 11:40 AM
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Could you tell us what version of Open MPI you are using, a little  
</span><br>
<span class="quotelev1">&gt; about your system (I would assume you are using ssh?), and how this  
</span><br>
<span class="quotelev1">&gt; was configured?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 5, 2009, at 9:31 AM, justin oppenheim wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When I execute something like
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -machinefile machinefile my_mpi_executable
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I get something like this
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; my_mpi_executable symbol lookup error: remote_openmpi/lib/ 
</span><br>
<span class="quotelev2">&gt;&gt; libmpi_cxx.so.0: undefined symbol: ompi_registered_datareps
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; where both my_mpi_executable and remote_openmpi are installed on  
</span><br>
<span class="quotelev2">&gt;&gt; NSF mounted locations.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any clue?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; thanks
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; JO
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8328/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8329.php">Gus Correa: "Re: [OMPI users] Any scientific	application	heavilyusing	MPI_Barrier?"</a>
<li><strong>Previous message:</strong> <a href="8327.php">Ralph Castain: "Re: [OMPI users] Run-time problem"</a>
<li><strong>Maybe in reply to:</strong> <a href="8325.php">justin oppenheim: "[OMPI users] Run-time problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8353.php">justin oppenheim: "Re: [OMPI users] Run-time problem"</a>
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
