<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Mar 19 07:41:53 2007" -->
<!-- isoreceived="20070319114153" -->
<!-- sent="Mon, 19 Mar 2007 07:41:50 -0400" -->
<!-- isosent="20070319114150" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="Re: [OMPI users] remote execution problem" -->
<!-- id="F8626824-D4F4-4D9D-A567-7C545CB11311_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="45FE26AA.9050709_at_qlink.queensu.ca" -->
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
<strong>From:</strong> Tim Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-19 07:41:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2838.php">Bala: "Re: [OMPI users] orted takes 100 percent cpu, how to avoid this??"</a>
<li><strong>Previous message:</strong> <a href="2836.php">Jeff Squyres: "Re: [OMPI users] quadrics"</a>
<li><strong>In reply to:</strong> <a href="2831.php">David Burns: "Re: [OMPI users] remote execution problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2841.php">David Burns: "Re: [OMPI users] remote execution problem"</a>
<li><strong>Reply:</strong> <a href="2841.php">David Burns: "Re: [OMPI users] remote execution problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
David,
<br>
<p>Have you tried something like
<br>
<p>mpirun -np 1  --host talisker4 hostname
<br>
<p>If that hangs, try adding '--debug-daemons' to the command line and  
<br>
see if the output from that helps. If not, please send the output to  
<br>
the list.
<br>
<p>Thanks,
<br>
<p>Tim
<br>
<p>On Mar 19, 2007, at 1:59 AM, David Burns wrote:
<br>
<p><span class="quotelev1">&gt; I neglected to mention that the test is currently running on 100 Mbps
</span><br>
<span class="quotelev1">&gt; ethernet. I have also tested the setup using a simple &quot;hello world my
</span><br>
<span class="quotelev1">&gt; rank is_&quot; program and get the same hanging problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3db14_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt;&gt; If anyone could help me out with this I would greatly appreciate  
</span><br>
<span class="quotelev2">&gt;&gt; it. I
</span><br>
<span class="quotelev2">&gt;&gt; have already read through the entire FAQ and havent seen anyone  
</span><br>
<span class="quotelev2">&gt;&gt; with a
</span><br>
<span class="quotelev2">&gt;&gt; similar problem.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have successfully tested and run the ompi application I've coded  
</span><br>
<span class="quotelev2">&gt;&gt; locally
</span><br>
<span class="quotelev2">&gt;&gt; on both computers talisker2 and talisker4
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 1 --host localhost fdtd : -np 2 --host localhost rnode
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; However, when attempting to execute processes remotely, eg
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 1 --host localhost fdtd : -np 2 --host talisker4 rnode
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Nothing happens. The shell just sits there, nothing prints (despite
</span><br>
<span class="quotelev2">&gt;&gt; stdouts), and does not return until I kill it. I have set up ssh with
</span><br>
<span class="quotelev2">&gt;&gt; rsa-authentication, no passphrase. The paths are all set; I have  
</span><br>
<span class="quotelev2">&gt;&gt; tried
</span><br>
<span class="quotelev2">&gt;&gt; purposefully missetting them and the error is reported and returns as
</span><br>
<span class="quotelev2">&gt;&gt; expected (so it isnt that).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; More info about the system- fedora core 5, (Open MPI) 1.1.4.  
</span><br>
<span class="quotelev2">&gt;&gt; config.log
</span><br>
<span class="quotelev2">&gt;&gt; and ompi_info outputs attached. Any help or ideas of where to go next
</span><br>
<span class="quotelev2">&gt;&gt; would be greatly appreciated.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; David
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt; ---
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
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt; ---
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; No virus found in this incoming message.
</span><br>
<span class="quotelev2">&gt;&gt; Checked by AVG Free Edition.
</span><br>
<span class="quotelev2">&gt;&gt; Version: 7.5.446 / Virus Database: 268.18.13/725 - Release Date:  
</span><br>
<span class="quotelev2">&gt;&gt; 17/03/2007 12:33 PM
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li><strong>Next message:</strong> <a href="2838.php">Bala: "Re: [OMPI users] orted takes 100 percent cpu, how to avoid this??"</a>
<li><strong>Previous message:</strong> <a href="2836.php">Jeff Squyres: "Re: [OMPI users] quadrics"</a>
<li><strong>In reply to:</strong> <a href="2831.php">David Burns: "Re: [OMPI users] remote execution problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2841.php">David Burns: "Re: [OMPI users] remote execution problem"</a>
<li><strong>Reply:</strong> <a href="2841.php">David Burns: "Re: [OMPI users] remote execution problem"</a>
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
