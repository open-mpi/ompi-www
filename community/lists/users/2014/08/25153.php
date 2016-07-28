<?
$subject_val = "Re: [OMPI users] OpenMPI Remote Execution Problem (Application does not start)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 26 10:44:12 2014" -->
<!-- isoreceived="20140826144412" -->
<!-- sent="Tue, 26 Aug 2014 07:43:35 -0700" -->
<!-- isosent="20140826144335" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI Remote Execution Problem (Application does not start)" -->
<!-- id="6C540325-3F04-4D4B-B47E-B6AB0585F431_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="77371F2938F4A84EAE592A132FF27D19AE673FC5D9_at_RZ-MERKUR.hs-ulm.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI Remote Execution Problem (Application does not start)<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-26 10:43:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25154.php">Timur Ismagilov: "Re: [OMPI users] long initialization"</a>
<li><strong>Previous message:</strong> <a href="25152.php">Benjamin Giehle: "[OMPI users] OpenMPI Remote Execution Problem (Application does not start)"</a>
<li><strong>In reply to:</strong> <a href="25152.php">Benjamin Giehle: "[OMPI users] OpenMPI Remote Execution Problem (Application does not start)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Add --enable-debug to your configure, and then re-run the --host test and add &quot;--leave-session-attached -mca plm_base_verbose 5 -ma oob_base_verbose 5&quot; and let's see what's going on
<br>
<p><p>On Aug 26, 2014, at 7:31 AM, Benjamin Giehle &lt;giehle_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i have a problem with running my mpi application on a remote machine.
</span><br>
<span class="quotelev1">&gt; If I start the application via ssh everything works just fine, but if I use mpirun the application won't start.
</span><br>
<span class="quotelev1">&gt; If I start the application on the local machine with mpi it works too.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ssh myhost ./myapp       &lt;- works
</span><br>
<span class="quotelev1">&gt; mpirun -np 2 ./myapp      &lt;- works
</span><br>
<span class="quotelev1">&gt; mpirun -np 2 --host myhost  ./myapp    &lt;- does not work
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I already configured ssh, so that I don't have to enter a password.
</span><br>
<span class="quotelev1">&gt; I am using the OpenMPI Version 1.8.1 on both machines.
</span><br>
<span class="quotelev1">&gt; I uploaded all required files, I hope you can help me...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Benjamin Giehle&lt;config.log.bz2&gt;&lt;mpirun.txt&gt;&lt;ompiinfo.txt.bz2&gt;&lt;ompiparseable.txt.bz2&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/25152.php">http://www.open-mpi.org/community/lists/users/2014/08/25152.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25154.php">Timur Ismagilov: "Re: [OMPI users] long initialization"</a>
<li><strong>Previous message:</strong> <a href="25152.php">Benjamin Giehle: "[OMPI users] OpenMPI Remote Execution Problem (Application does not start)"</a>
<li><strong>In reply to:</strong> <a href="25152.php">Benjamin Giehle: "[OMPI users] OpenMPI Remote Execution Problem (Application does not start)"</a>
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
