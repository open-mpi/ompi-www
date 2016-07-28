<?
$subject_val = "Re: [OMPI users] opal_os_dirpath_create: Error: Unable to create the, sub-directory";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  3 15:31:19 2014" -->
<!-- isoreceived="20140203203119" -->
<!-- sent="Mon, 03 Feb 2014 15:31:15 -0500" -->
<!-- isosent="20140203203115" -->
<!-- name="Eric Chamberland" -->
<!-- email="Eric.Chamberland_at_[hidden]" -->
<!-- subject="Re: [OMPI users] opal_os_dirpath_create: Error: Unable to create the, sub-directory" -->
<!-- id="52EFFC93.2090309_at_giref.ulaval.ca" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EFCAD78B-0C67-40F0-A34A-DA8EB3DD4E13_at_open-mpi.org" -->
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
<strong>From:</strong> Eric Chamberland (<em>Eric.Chamberland_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-03 15:31:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23547.php">Ralph Castain: "Re: [OMPI users] opal_os_dirpath_create: Error: Unable to create the, sub-directory"</a>
<li><strong>Previous message:</strong> <a href="23545.php">Ralph Castain: "Re: [OMPI users] opal_os_dirpath_create: Error: Unable to create the, sub-directory"</a>
<li><strong>In reply to:</strong> <a href="23545.php">Ralph Castain: "Re: [OMPI users] opal_os_dirpath_create: Error: Unable to create the, sub-directory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23547.php">Ralph Castain: "Re: [OMPI users] opal_os_dirpath_create: Error: Unable to create the, sub-directory"</a>
<li><strong>Reply:</strong> <a href="23547.php">Ralph Castain: "Re: [OMPI users] opal_os_dirpath_create: Error: Unable to create the, sub-directory"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>On 02/03/2014 03:09 PM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; OMPI will error out in that case, as you originally reported. What seems to be happening is that you have a bunch of stale session directories, but I'm puzzled because the creation dates are so current - for whatever reason, OMPI seems to be getting the same jobid much more often than it should. Can you tell me something about the environment - e.g., is it managed or just using hostfile?
</span><br>
<p>This computer is used about 11 times a day to launch about 1500 
<br>
executions on our in-house (finite element) code.
<br>
<p>We do launch at most 12 single process executions at the same time, but 
<br>
we use PETSc, which always initialize the MPI environment...
<br>
<p>Also, we are launching some tests which use between 2 to 128 processes 
<br>
(on the same computer) just to ensure proper code testing.  In fact, 
<br>
performance is not quit an issue in these 128 processes tests and we set 
<br>
the following environment variable:
<br>
<p>export OMPI_MCA_mpi_yield_when_idle=1
<br>
<p>because we encountered timeout problems before...
<br>
<p>The whole testing lasts about 1 hour and the result is used to give a 
<br>
feed-back for users who &quot;pushed&quot; modifications to the code....
<br>
<p>So I would add: sometime the tests may be interrupted by segfaults, 
<br>
&quot;kill -TERM&quot; or anything you can imagine...  The problem now is that it 
<br>
won't even start if a mere file exists...
<br>
<p>I can flush those files right now, but I am almost sure they will 
<br>
reappear it the following days, leading to false &quot;bad results&quot; for the 
<br>
tests... and I will have to setup a cleanup procedure before launching 
<br>
all the tests... But that will not prevent the fact that those files may 
<br>
be created while running the firsts of the 1500 tests and have 1 or some 
<br>
of the rest to fail....
<br>
<p>I hope this is the information you wanted... Is it?
<br>
<p>Thanks,
<br>
<p>Eric
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 3, 2014, at 12:00 PM, Eric Chamberland &lt;Eric.Chamberland_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 02/03/2014 02:49 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Seems rather odd - is your /tmp by any chance network mounted?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; No it is a &quot;normal&quot; /tmp:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &quot;cd /tmp; df -h .&quot; gives:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Filesystem      Size  Used Avail Use% Mounted on
</span><br>
<span class="quotelev2">&gt;&gt; /dev/sda1        49G   17G   30G  37% /
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; And there is plenty of disk space...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I agree it is odd, but how should OpenMPI react when trying to create a directory over an existing file name?  I mean what is it programmed to do?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Eric
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23547.php">Ralph Castain: "Re: [OMPI users] opal_os_dirpath_create: Error: Unable to create the, sub-directory"</a>
<li><strong>Previous message:</strong> <a href="23545.php">Ralph Castain: "Re: [OMPI users] opal_os_dirpath_create: Error: Unable to create the, sub-directory"</a>
<li><strong>In reply to:</strong> <a href="23545.php">Ralph Castain: "Re: [OMPI users] opal_os_dirpath_create: Error: Unable to create the, sub-directory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23547.php">Ralph Castain: "Re: [OMPI users] opal_os_dirpath_create: Error: Unable to create the, sub-directory"</a>
<li><strong>Reply:</strong> <a href="23547.php">Ralph Castain: "Re: [OMPI users] opal_os_dirpath_create: Error: Unable to create the, sub-directory"</a>
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
