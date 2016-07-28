<?
$subject_val = "Re: [OMPI users] opal_os_dirpath_create: Error: Unable to create the, sub-directory";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  3 15:10:30 2014" -->
<!-- isoreceived="20140203201030" -->
<!-- sent="Mon, 3 Feb 2014 12:09:38 -0800" -->
<!-- isosent="20140203200938" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] opal_os_dirpath_create: Error: Unable to create the, sub-directory" -->
<!-- id="EFCAD78B-0C67-40F0-A34A-DA8EB3DD4E13_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="52EFF554.9080304_at_giref.ulaval.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] opal_os_dirpath_create: Error: Unable to create the, sub-directory<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-03 15:09:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23546.php">Eric Chamberland: "Re: [OMPI users] opal_os_dirpath_create: Error: Unable to create the, sub-directory"</a>
<li><strong>Previous message:</strong> <a href="23544.php">Eric Chamberland: "Re: [OMPI users] opal_os_dirpath_create: Error: Unable to create the, sub-directory"</a>
<li><strong>In reply to:</strong> <a href="23544.php">Eric Chamberland: "Re: [OMPI users] opal_os_dirpath_create: Error: Unable to create the, sub-directory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23546.php">Eric Chamberland: "Re: [OMPI users] opal_os_dirpath_create: Error: Unable to create the, sub-directory"</a>
<li><strong>Reply:</strong> <a href="23546.php">Eric Chamberland: "Re: [OMPI users] opal_os_dirpath_create: Error: Unable to create the, sub-directory"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
OMPI will error out in that case, as you originally reported. What seems to be happening is that you have a bunch of stale session directories, but I'm puzzled because the creation dates are so current - for whatever reason, OMPI seems to be getting the same jobid much more often than it should. Can you tell me something about the environment - e.g., is it managed or just using hostfile?
<br>
<p><p>On Feb 3, 2014, at 12:00 PM, Eric Chamberland &lt;Eric.Chamberland_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On 02/03/2014 02:49 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Seems rather odd - is your /tmp by any chance network mounted?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; No it is a &quot;normal&quot; /tmp:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;cd /tmp; df -h .&quot; gives:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Filesystem      Size  Used Avail Use% Mounted on
</span><br>
<span class="quotelev1">&gt; /dev/sda1        49G   17G   30G  37% /
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And there is plenty of disk space...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I agree it is odd, but how should OpenMPI react when trying to create a directory over an existing file name?  I mean what is it programmed to do?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Eric
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23546.php">Eric Chamberland: "Re: [OMPI users] opal_os_dirpath_create: Error: Unable to create the, sub-directory"</a>
<li><strong>Previous message:</strong> <a href="23544.php">Eric Chamberland: "Re: [OMPI users] opal_os_dirpath_create: Error: Unable to create the, sub-directory"</a>
<li><strong>In reply to:</strong> <a href="23544.php">Eric Chamberland: "Re: [OMPI users] opal_os_dirpath_create: Error: Unable to create the, sub-directory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23546.php">Eric Chamberland: "Re: [OMPI users] opal_os_dirpath_create: Error: Unable to create the, sub-directory"</a>
<li><strong>Reply:</strong> <a href="23546.php">Eric Chamberland: "Re: [OMPI users] opal_os_dirpath_create: Error: Unable to create the, sub-directory"</a>
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
