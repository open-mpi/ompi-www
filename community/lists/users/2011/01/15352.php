<?
$subject_val = "Re: [OMPI users] More newbie question: --hostfile option";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 12 21:37:00 2011" -->
<!-- isoreceived="20110113023700" -->
<!-- sent="Wed, 12 Jan 2011 19:36:50 -0700" -->
<!-- isosent="20110113023650" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] More newbie question: --hostfile option" -->
<!-- id="C988A1F5-D348-4D87-AE17-22797ED8F955_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="C953A21D.DCB7%tsakai_at_gallo.ucsf.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] More newbie question: --hostfile option<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-12 21:36:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15353.php">David Zhang: "Re: [OMPI users] More newbie question: --hostfile option"</a>
<li><strong>Previous message:</strong> <a href="15351.php">Gus Correa: "Re: [OMPI users] More newbie question: LD_LIBRARY_PATH"</a>
<li><strong>In reply to:</strong> <a href="15350.php">Tena Sakai: "[OMPI users] More newbie question: --hostfile option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15353.php">David Zhang: "Re: [OMPI users] More newbie question: --hostfile option"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 12, 2011, at 7:23 PM, Tena Sakai wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I can execute the command below:
</span><br>
<span class="quotelev1">&gt;    $ mpirun -H vixen -np 1 hostname : -H compute-0-0,compute-0-1,compute-0-2 -np 3 hostname
</span><br>
<span class="quotelev1">&gt; and I get:
</span><br>
<span class="quotelev1">&gt;    vixen.egcrc.org
</span><br>
<span class="quotelev1">&gt;    compute-0-0.local
</span><br>
<span class="quotelev1">&gt;    compute-0-1.local
</span><br>
<span class="quotelev1">&gt;    compute-0-2.local
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have a file myhosts, which looks like:
</span><br>
<span class="quotelev1">&gt;    compute-0-0 slots=1
</span><br>
<span class="quotelev1">&gt;    compute-0-1 slots=1
</span><br>
<span class="quotelev1">&gt;    compute-0-2 slots=1
</span><br>
<span class="quotelev1">&gt; but when I execute:
</span><br>
<span class="quotelev1">&gt;    $ mpirun -H vixen -np 1 hostname : --hostfile myhosts -np 3 hostname
</span><br>
<span class="quotelev1">&gt; I get:
</span><br>
<span class="quotelev1">&gt;    There are no allocated resources for the application 
</span><br>
<span class="quotelev1">&gt;      hostname
</span><br>
<span class="quotelev1">&gt;    that match the requested mapping:
</span><br>
<span class="quotelev1">&gt;      
</span><br>
<span class="quotelev1">&gt;    Verify that you have mapped the allocated resources properly using the 
</span><br>
<span class="quotelev1">&gt;    --host or --hostfile specification.
</span><br>
<span class="quotelev1">&gt;    --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;    --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;    A daemon (pid unknown) died unexpectedly on signal 1  while attempting to
</span><br>
<span class="quotelev1">&gt;    launch so we are aborting.
</span><br>
<span class="quotelev1">&gt;    
</span><br>
<span class="quotelev1">&gt;    There may be more information reported by the environment (see above).
</span><br>
<span class="quotelev1">&gt;    
</span><br>
<span class="quotelev1">&gt;    This may be because the daemon was unable to find all the needed shared
</span><br>
<span class="quotelev1">&gt;    libraries on the remote node. You may set your LD_LIBRARY_PATH to have the
</span><br>
<span class="quotelev1">&gt;    location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev1">&gt;    automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev1">&gt;    --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;    --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;    mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev1">&gt;    that caused that situation.
</span><br>
<span class="quotelev1">&gt;    --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;    mpirun: clean termination accomplished
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Interestingly, this works:
</span><br>
<span class="quotelev1">&gt;    $ mpirun --hostfile myhosts -np 3 hostname
</span><br>
<span class="quotelev1">&gt;    compute-0-0.local
</span><br>
<span class="quotelev1">&gt;    compute-0-1.local
</span><br>
<span class="quotelev1">&gt;    compute-0-2.local
</span><br>
<span class="quotelev1">&gt;    $
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Am I correct in concluding that &#150;H and &#151;hostfile cannot be issued in the
</span><br>
<span class="quotelev1">&gt; same mpirun command which contains a colon (:)?
</span><br>
<p>It may depend on what version of OMPI you are using. Given what you see, the answer is &quot;correct&quot;.
<br>
<p><p><span class="quotelev1">&gt;  Or is there any trick
</span><br>
<span class="quotelev1">&gt; or work-around to have both &#150;H and &#151;hostfile?
</span><br>
<p>See the wiki page for an explanation of how the options are used:
<br>
<p><a href="https://svn.open-mpi.org/trac/ompi/wiki/HostFilePlan">https://svn.open-mpi.org/trac/ompi/wiki/HostFilePlan</a>
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Tena Sakai
</span><br>
<span class="quotelev1">&gt; tsakai_at_[hidden]
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15352/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15353.php">David Zhang: "Re: [OMPI users] More newbie question: --hostfile option"</a>
<li><strong>Previous message:</strong> <a href="15351.php">Gus Correa: "Re: [OMPI users] More newbie question: LD_LIBRARY_PATH"</a>
<li><strong>In reply to:</strong> <a href="15350.php">Tena Sakai: "[OMPI users] More newbie question: --hostfile option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15353.php">David Zhang: "Re: [OMPI users] More newbie question: --hostfile option"</a>
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
