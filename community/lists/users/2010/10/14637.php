<?
$subject_val = "Re: [OMPI users] Using hostfile with default hostfile";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 27 11:40:23 2010" -->
<!-- isoreceived="20101027154023" -->
<!-- sent="Wed, 27 Oct 2010 08:38:59 -0700" -->
<!-- isosent="20101027153859" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Using hostfile with default hostfile" -->
<!-- id="4CC84793.80001_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTimzGBG9GxeqjhbiMDK3WbUhp-989G=mar3CeK_A_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Using hostfile with default hostfile<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-27 11:38:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14638.php">jody: "[OMPI users] Help with a strange error"</a>
<li><strong>Previous message:</strong> <a href="14636.php">Jack Bryan: "Re: [OMPI users] Open MPI program cannot complete"</a>
<li><strong>In reply to:</strong> <a href="14634.php">jody: "Re: [OMPI users] Using hostfile with default hostfile"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
jody wrote:
<br>
<p><span class="quotelev1">&gt;Where is the option 'default-hostfile' described?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
Try &quot;mpirun --help&quot;.  Not everything makes it to the man page.  Heck, 
<br>
not everything is documented!
<br>
<p><span class="quotelev1">&gt;It does not appear in mpirun's man page (for v. 1.4.2)
</span><br>
<span class="quotelev1">&gt;and i couldn't find anything like that with googling.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Wed, Oct 27, 2010 at 4:02 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Specify your hostfile as the default one:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;mpirun --default-hostfile ./Cluster.hosts
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Otherwise, we take the default hostfile and then apply the hostfile as a filter to select hosts from within it. Sounds strange, I suppose, but the idea is that the default hostfile can contain configuration info (#sockets, #cores/socket, etc.) that you might not want to have to put in every hostfile.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14638.php">jody: "[OMPI users] Help with a strange error"</a>
<li><strong>Previous message:</strong> <a href="14636.php">Jack Bryan: "Re: [OMPI users] Open MPI program cannot complete"</a>
<li><strong>In reply to:</strong> <a href="14634.php">jody: "Re: [OMPI users] Using hostfile with default hostfile"</a>
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
