<?
$subject_val = "Re: [OMPI users] Job hangs when daemon does not report back from remote machine";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Feb  8 16:09:05 2009" -->
<!-- isoreceived="20090208210905" -->
<!-- sent="Mon, 9 Feb 2009 10:08:56 +1300" -->
<!-- isosent="20090208210856" -->
<!-- name="Kersey Black" -->
<!-- email="kblack_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Job hangs when daemon does not report back from remote machine" -->
<!-- id="7BE63288-C6AA-41E4-B445-A0399B4EB068_at_jsd.claremont.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="0882DE55-D0E7-4376-BB9C-DE205FDB943A_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] Job hangs when daemon does not report back from remote machine<br>
<strong>From:</strong> Kersey Black (<em>kblack_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-08 16:08:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7994.php">Brian Blank: "[OMPI users] MPI_Reduce hangs in multi-node configuration"</a>
<li><strong>Previous message:</strong> <a href="7992.php">Ralph Castain: "Re: [OMPI users] Job hangs when daemon does not report back from remote machine"</a>
<li><strong>In reply to:</strong> <a href="7992.php">Ralph Castain: "Re: [OMPI users] Job hangs when daemon does not report back from remote machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7997.php">Ralph Castain: "Re: [OMPI users] Job hangs when daemon does not report back from remote machine"</a>
<li><strong>Reply:</strong> <a href="7997.php">Ralph Castain: "Re: [OMPI users] Job hangs when daemon does not report back from remote machine"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Many thanks.  The firewall is the issue.
<br>
<p>On Feb 9, 2009, at 5:56 AM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; It sounds to me like TCP communication isn't getting through for  
</span><br>
<span class="quotelev1">&gt; some reason. Try the following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun --mca plm_base_verbose 5 --hostfile myh3 -pernode hostname
</span><br>
black_at_ccn3:~/Documents/mp&gt; mpirun --mca plm_base_verbose 5 --hostfile  
<br>
myh3 -pernode hostname
<br>
[ccn3:26932] mca:base:select:(  plm) Querying component [rsh]
<br>
[ccn3:26932] mca:base:select:(  plm) Query of component [rsh] set  
<br>
priority to 10
<br>
[ccn3:26932] mca:base:select:(  plm) Querying component [slurm]
<br>
[ccn3:26932] mca:base:select:(  plm) Skipping component [slurm]. Query  
<br>
failed to return a module
<br>
[ccn3:26932] mca:base:select:(  plm) Selected component [rsh]
<br>
-----hangs here
<br>
<p>But, when I turn off the firewall for a moment on both machines, local  
<br>
and remote, everything works:
<br>
black_at_ccn3:~/Documents/mp&gt; mpirun --mca plm_base_verbose 5 --hostfile  
<br>
myh3 -pernode hostname
<br>
[ccn3:26442] mca:base:select:(  plm) Querying component [rsh]
<br>
[ccn3:26442] mca:base:select:(  plm) Query of component [rsh] set  
<br>
priority to 10
<br>
[ccn3:26442] mca:base:select:(  plm) Querying component [slurm]
<br>
[ccn3:26442] mca:base:select:(  plm) Skipping component [slurm]. Query  
<br>
failed to return a module
<br>
[ccn3:26442] mca:base:select:(  plm) Selected component [rsh]
<br>
ccn3
<br>
ccn4
<br>
<p>2 Questions:
<br>
1)  Is it really trying to use 'rsh', or is that just part of the  
<br>
language in the debugging reporting?  I assume it is actually using  
<br>
ssh under the hood, but it is worth asking.  I am using the default  
<br>
configuration on this.
<br>
black_at_ccn3:~/Documents/mp&gt; ompi_info --param all all | grep pls
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA plm: parameter &quot;plm_rsh_agent&quot; (current value:  
<br>
&quot;ssh : rsh&quot;, data source: default value, synonyms: pls_rsh_agent)
<br>
2)  Since it is a firewall issue, I read what I could find and it  
<br>
seems there is not a means of restricting port ranges.  Right now,  
<br>
each node in this small cluster is running its own firewall rather  
<br>
than all being hidden behind some other machine or switch.  Any  
<br>
pointers for handling this most easily.
<br>
<p>Cheers, Kersey
<br>
<p><span class="quotelev1">&gt; You should see output from the receipt of a daemon callback for each  
</span><br>
<span class="quotelev1">&gt; daemon, the the sending of the launch command. My guess is that you  
</span><br>
<span class="quotelev1">&gt; won't see all the daemons callback, which is why you hang.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This should tell you which node isn't getting a message back to  
</span><br>
<span class="quotelev1">&gt; wherever mpirun is executing. You might then check to ensure no  
</span><br>
<span class="quotelev1">&gt; firewalls are in the way to that node, there is a TCP path back from  
</span><br>
<span class="quotelev1">&gt; it, etc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can help with additional diagnostics once we get that far.
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 7, 2009, at 2:40 PM, Kersey Black wrote:
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7994.php">Brian Blank: "[OMPI users] MPI_Reduce hangs in multi-node configuration"</a>
<li><strong>Previous message:</strong> <a href="7992.php">Ralph Castain: "Re: [OMPI users] Job hangs when daemon does not report back from remote machine"</a>
<li><strong>In reply to:</strong> <a href="7992.php">Ralph Castain: "Re: [OMPI users] Job hangs when daemon does not report back from remote machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7997.php">Ralph Castain: "Re: [OMPI users] Job hangs when daemon does not report back from remote machine"</a>
<li><strong>Reply:</strong> <a href="7997.php">Ralph Castain: "Re: [OMPI users] Job hangs when daemon does not report back from remote machine"</a>
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
