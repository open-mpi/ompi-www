<?
$subject_val = "Re: [OMPI users] exporting PATH ineffective for finding MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 14 21:58:30 2014" -->
<!-- isoreceived="20140315015830" -->
<!-- sent="Fri, 14 Mar 2014 18:58:28 -0700" -->
<!-- isosent="20140315015828" -->
<!-- name="Ross Boylan" -->
<!-- email="ross_at_[hidden]" -->
<!-- subject="Re: [OMPI users] exporting PATH ineffective for finding MPI" -->
<!-- id="5323B3C4.8010508_at_biostat.ucsf.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="BD9D6532-8878-4B32-B7A8-DE337AB6402A_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] exporting PATH ineffective for finding MPI<br>
<strong>From:</strong> Ross Boylan (<em>ross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-14 21:58:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23851.php">Ralph Castain: "Re: [OMPI users] exporting PATH ineffective for finding MPI"</a>
<li><strong>Previous message:</strong> <a href="23849.php">Ralph Castain: "Re: [OMPI users] exporting PATH ineffective for finding MPI"</a>
<li><strong>In reply to:</strong> <a href="23849.php">Ralph Castain: "Re: [OMPI users] exporting PATH ineffective for finding MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23851.php">Ralph Castain: "Re: [OMPI users] exporting PATH ineffective for finding MPI"</a>
<li><strong>Reply:</strong> <a href="23851.php">Ralph Castain: "Re: [OMPI users] exporting PATH ineffective for finding MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 3/14/2014 5:42 PM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Why not skip some of these problems and configure OMPI --enable-orterun-prefix-by-default?
</span><br>
Cool.  Thanks for the pointer.  If MPI is compiled with that option, can 
<br>
it be overridden by the command line?
<br>
That is, will orterun --prefix /a/b cause /a/b or the original config 
<br>
argument to be searched?
<br>
<p>Probably doesn't matter too much since I don't want to chance moving the 
<br>
files after make install....
<br>
Ross
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 14, 2014, at 5:14 PM, Ross Boylan &lt;ross_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I used this script to launch mpi:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; R_PROFILE_USER=~/KHC/sunbelt/Rmpiprofile LD_LIBRARY_PATH=/home/ross/install/lib:$LD_LIBRARY_PATH  PATH=/home/ross/install/bin:/home/ross/install/lib64/R/bin:$PATH orterun -x R_PROFILE_USER -x LD_LIBRARY_PATH \
</span><br>
<span class="quotelev2">&gt;&gt; -x PATH -hostfile ~/KHC/sunbelt/hosts -np 18 R --no-save -q
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; For each remote node I get a message like
</span><br>
<span class="quotelev2">&gt;&gt; [n11:07642] Error: unknown option &quot;--tree-spawn&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; According to previous exchanges on this list that is a sign that the remote nodes are picking up the old system version of MPI instead of my new local one.  Apparently the PATH values I exported are not used; presumably it's the same for LD_LIBRARY_PATH.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I found this surprising.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; RTFM disclosed the --prefix argument to orterun, and that seems to do the trick.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Am I missing anything?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ross Boylan
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="23851.php">Ralph Castain: "Re: [OMPI users] exporting PATH ineffective for finding MPI"</a>
<li><strong>Previous message:</strong> <a href="23849.php">Ralph Castain: "Re: [OMPI users] exporting PATH ineffective for finding MPI"</a>
<li><strong>In reply to:</strong> <a href="23849.php">Ralph Castain: "Re: [OMPI users] exporting PATH ineffective for finding MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23851.php">Ralph Castain: "Re: [OMPI users] exporting PATH ineffective for finding MPI"</a>
<li><strong>Reply:</strong> <a href="23851.php">Ralph Castain: "Re: [OMPI users] exporting PATH ineffective for finding MPI"</a>
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
