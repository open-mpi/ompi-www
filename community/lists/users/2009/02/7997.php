<?
$subject_val = "Re: [OMPI users] Job hangs when daemon does not report back from remote machine";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  9 08:54:41 2009" -->
<!-- isoreceived="20090209135441" -->
<!-- sent="Mon, 9 Feb 2009 06:54:32 -0700" -->
<!-- isosent="20090209135432" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Job hangs when daemon does not report back from remote machine" -->
<!-- id="C4443612-EC7B-4D1A-9715-1F83EFE0C372_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="7BE63288-C6AA-41E4-B445-A0399B4EB068_at_jsd.claremont.edu" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-09 08:54:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7998.php">Iannetti, Anthony C. (GRC-RTB0): "[OMPI users] Linux Itanium Configure and Make Logs for 1.2.8"</a>
<li><strong>Previous message:</strong> <a href="7996.php">Bernhard Knapp: "Re: [OMPI users] open-mpi ssh hostname problem"</a>
<li><strong>In reply to:</strong> <a href="7993.php">Kersey Black: "Re: [OMPI users] Job hangs when daemon does not report back from remote machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7999.php">Kersey Black: "Re: [OMPI users] Job hangs when daemon does not report back from remote machine"</a>
<li><strong>Reply:</strong> <a href="7999.php">Kersey Black: "Re: [OMPI users] Job hangs when daemon does not report back from remote machine"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The default launcher is ssh - the &quot;rsh&quot; things you see are the name of  
<br>
the particular component, not the name of the actual command being  
<br>
used. That launcher looks for &quot;ssh&quot; first, and then falls back to  
<br>
&quot;rsh&quot; if ssh isn't found.
<br>
<p>OMPI currently doesn't support restricted port ranges. We are working  
<br>
on a new release that does, but it won't be out for a few weeks. Until  
<br>
that time, my only suggestion would be to look at removing the  
<br>
firewall on every node in favor of a firewall on the outside of the  
<br>
cluster. I'm not sure any other solution is available just yet.
<br>
<p>Ralph
<br>
<p>On Feb 8, 2009, at 2:08 PM, Kersey Black wrote:
<br>
<p><span class="quotelev1">&gt; Many thanks.  The firewall is the issue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 9, 2009, at 5:56 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; It sounds to me like TCP communication isn't getting through for  
</span><br>
<span class="quotelev2">&gt;&gt; some reason. Try the following:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun --mca plm_base_verbose 5 --hostfile myh3 -pernode hostname
</span><br>
<span class="quotelev1">&gt; black_at_ccn3:~/Documents/mp&gt; mpirun --mca plm_base_verbose 5 -- 
</span><br>
<span class="quotelev1">&gt; hostfile myh3 -pernode hostname
</span><br>
<span class="quotelev1">&gt; [ccn3:26932] mca:base:select:(  plm) Querying component [rsh]
</span><br>
<span class="quotelev1">&gt; [ccn3:26932] mca:base:select:(  plm) Query of component [rsh] set  
</span><br>
<span class="quotelev1">&gt; priority to 10
</span><br>
<span class="quotelev1">&gt; [ccn3:26932] mca:base:select:(  plm) Querying component [slurm]
</span><br>
<span class="quotelev1">&gt; [ccn3:26932] mca:base:select:(  plm) Skipping component [slurm].  
</span><br>
<span class="quotelev1">&gt; Query failed to return a module
</span><br>
<span class="quotelev1">&gt; [ccn3:26932] mca:base:select:(  plm) Selected component [rsh]
</span><br>
<span class="quotelev1">&gt; -----hangs here
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But, when I turn off the firewall for a moment on both machines,  
</span><br>
<span class="quotelev1">&gt; local and remote, everything works:
</span><br>
<span class="quotelev1">&gt; black_at_ccn3:~/Documents/mp&gt; mpirun --mca plm_base_verbose 5 -- 
</span><br>
<span class="quotelev1">&gt; hostfile myh3 -pernode hostname
</span><br>
<span class="quotelev1">&gt; [ccn3:26442] mca:base:select:(  plm) Querying component [rsh]
</span><br>
<span class="quotelev1">&gt; [ccn3:26442] mca:base:select:(  plm) Query of component [rsh] set  
</span><br>
<span class="quotelev1">&gt; priority to 10
</span><br>
<span class="quotelev1">&gt; [ccn3:26442] mca:base:select:(  plm) Querying component [slurm]
</span><br>
<span class="quotelev1">&gt; [ccn3:26442] mca:base:select:(  plm) Skipping component [slurm].  
</span><br>
<span class="quotelev1">&gt; Query failed to return a module
</span><br>
<span class="quotelev1">&gt; [ccn3:26442] mca:base:select:(  plm) Selected component [rsh]
</span><br>
<span class="quotelev1">&gt; ccn3
</span><br>
<span class="quotelev1">&gt; ccn4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2 Questions:
</span><br>
<span class="quotelev1">&gt; 1)  Is it really trying to use 'rsh', or is that just part of the  
</span><br>
<span class="quotelev1">&gt; language in the debugging reporting?  I assume it is actually using  
</span><br>
<span class="quotelev1">&gt; ssh under the hood, but it is worth asking.  I am using the default  
</span><br>
<span class="quotelev1">&gt; configuration on this.
</span><br>
<span class="quotelev1">&gt; black_at_ccn3:~/Documents/mp&gt; ompi_info --param all all | grep pls
</span><br>
<span class="quotelev1">&gt;                 MCA plm: parameter &quot;plm_rsh_agent&quot; (current value:  
</span><br>
<span class="quotelev1">&gt; &quot;ssh : rsh&quot;, data source: default value, synonyms: pls_rsh_agent)
</span><br>
<span class="quotelev1">&gt; 2)  Since it is a firewall issue, I read what I could find and it  
</span><br>
<span class="quotelev1">&gt; seems there is not a means of restricting port ranges.  Right now,  
</span><br>
<span class="quotelev1">&gt; each node in this small cluster is running its own firewall rather  
</span><br>
<span class="quotelev1">&gt; than all being hidden behind some other machine or switch.  Any  
</span><br>
<span class="quotelev1">&gt; pointers for handling this most easily.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers, Kersey
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You should see output from the receipt of a daemon callback for  
</span><br>
<span class="quotelev2">&gt;&gt; each daemon, the the sending of the launch command. My guess is  
</span><br>
<span class="quotelev2">&gt;&gt; that you won't see all the daemons callback, which is why you hang.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This should tell you which node isn't getting a message back to  
</span><br>
<span class="quotelev2">&gt;&gt; wherever mpirun is executing. You might then check to ensure no  
</span><br>
<span class="quotelev2">&gt;&gt; firewalls are in the way to that node, there is a TCP path back  
</span><br>
<span class="quotelev2">&gt;&gt; from it, etc.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I can help with additional diagnostics once we get that far.
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 7, 2009, at 2:40 PM, Kersey Black wrote:
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
<li><strong>Next message:</strong> <a href="7998.php">Iannetti, Anthony C. (GRC-RTB0): "[OMPI users] Linux Itanium Configure and Make Logs for 1.2.8"</a>
<li><strong>Previous message:</strong> <a href="7996.php">Bernhard Knapp: "Re: [OMPI users] open-mpi ssh hostname problem"</a>
<li><strong>In reply to:</strong> <a href="7993.php">Kersey Black: "Re: [OMPI users] Job hangs when daemon does not report back from remote machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7999.php">Kersey Black: "Re: [OMPI users] Job hangs when daemon does not report back from remote machine"</a>
<li><strong>Reply:</strong> <a href="7999.php">Kersey Black: "Re: [OMPI users] Job hangs when daemon does not report back from remote machine"</a>
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
