<?
$subject_val = "Re: [OMPI users] More newbie question: --hostfile option";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 12 21:40:46 2011" -->
<!-- isoreceived="20110113024046" -->
<!-- sent="Wed, 12 Jan 2011 18:40:21 -0800" -->
<!-- isosent="20110113024021" -->
<!-- name="David Zhang" -->
<!-- email="solarbikedz_at_[hidden]" -->
<!-- subject="Re: [OMPI users] More newbie question: --hostfile option" -->
<!-- id="AANLkTi=6HuKG9dYqppaq-dxXLJ_8OQ1AVqf77B+BXR=T_at_mail.gmail.com" -->
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
<strong>From:</strong> David Zhang (<em>solarbikedz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-12 21:40:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15354.php">Gus Correa: "Re: [OMPI users] More newbie question: --hostfile option"</a>
<li><strong>Previous message:</strong> <a href="15352.php">Ralph Castain: "Re: [OMPI users] More newbie question: --hostfile option"</a>
<li><strong>In reply to:</strong> <a href="15350.php">Tena Sakai: "[OMPI users] More newbie question: --hostfile option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15356.php">Tena Sakai: "Re: [OMPI users] More newbie question: --hostfile option"</a>
<li><strong>Reply:</strong> <a href="15356.php">Tena Sakai: "Re: [OMPI users] More newbie question: --hostfile option"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think you just make a hostfile with
<br>
<p>vixen
<br>
compute-0-0
<br>
...
<br>
<p>and load the file in the first -H before the colon.
<br>
<p>On Wed, Jan 12, 2011 at 6:23 PM, Tena Sakai &lt;tsakai_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can execute the command below:
</span><br>
<span class="quotelev1">&gt;    $ mpirun -H vixen -np 1 hostname : -H
</span><br>
<span class="quotelev1">&gt; compute-0-0,compute-0-1,compute-0-2 -np 3 hostname
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;    A daemon (pid unknown) died unexpectedly on signal 1  while attempting
</span><br>
<span class="quotelev1">&gt; to
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
<span class="quotelev1">&gt;    libraries on the remote node. You may set your LD_LIBRARY_PATH to have
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt;    location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev1">&gt;    automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;    mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev1">&gt;    that caused that situation.
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; same mpirun command which contains a colon (:)?  Or is there any trick
</span><br>
<span class="quotelev1">&gt; or work-around to have both &#150;H and &#151;hostfile?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tena Sakai
</span><br>
<span class="quotelev1">&gt; tsakai_at_[hidden]
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
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
David Zhang
University of California, San Diego
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15353/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15354.php">Gus Correa: "Re: [OMPI users] More newbie question: --hostfile option"</a>
<li><strong>Previous message:</strong> <a href="15352.php">Ralph Castain: "Re: [OMPI users] More newbie question: --hostfile option"</a>
<li><strong>In reply to:</strong> <a href="15350.php">Tena Sakai: "[OMPI users] More newbie question: --hostfile option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15356.php">Tena Sakai: "Re: [OMPI users] More newbie question: --hostfile option"</a>
<li><strong>Reply:</strong> <a href="15356.php">Tena Sakai: "Re: [OMPI users] More newbie question: --hostfile option"</a>
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
