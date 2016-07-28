<?
$subject_val = "Re: [OMPI users] exporting PATH ineffective for finding MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 14 22:33:34 2014" -->
<!-- isoreceived="20140315023334" -->
<!-- sent="Fri, 14 Mar 2014 19:32:37 -0700" -->
<!-- isosent="20140315023237" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] exporting PATH ineffective for finding MPI" -->
<!-- id="CD181EAA-3BA4-4DE1-992A-5BC409C423C3_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5323B3C4.8010508_at_biostat.ucsf.edu" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-14 22:32:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23852.php">Jianyu Liu: "Re: [OMPI users] Question about '--mca btl tcp,self'"</a>
<li><strong>Previous message:</strong> <a href="23850.php">Ross Boylan: "Re: [OMPI users] exporting PATH ineffective for finding MPI"</a>
<li><strong>In reply to:</strong> <a href="23850.php">Ross Boylan: "Re: [OMPI users] exporting PATH ineffective for finding MPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 14, 2014, at 6:58 PM, Ross Boylan &lt;ross_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On 3/14/2014 5:42 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Why not skip some of these problems and configure OMPI --enable-orterun-prefix-by-default?
</span><br>
<span class="quotelev1">&gt; Cool.  Thanks for the pointer.  If MPI is compiled with that option, can it be overridden by the command line?
</span><br>
<span class="quotelev1">&gt; That is, will orterun --prefix /a/b cause /a/b or the original config argument to be searched?
</span><br>
<p>Good question - I honestly don't remember :-)
<br>
<p>I think you should be able to do so, but you'd have to try it.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Probably doesn't matter too much since I don't want to chance moving the files after make install....
</span><br>
<span class="quotelev1">&gt; Ross
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 14, 2014, at 5:14 PM, Ross Boylan &lt;ross_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I used this script to launch mpi:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; R_PROFILE_USER=~/KHC/sunbelt/Rmpiprofile LD_LIBRARY_PATH=/home/ross/install/lib:$LD_LIBRARY_PATH  PATH=/home/ross/install/bin:/home/ross/install/lib64/R/bin:$PATH orterun -x R_PROFILE_USER -x LD_LIBRARY_PATH \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -x PATH -hostfile ~/KHC/sunbelt/hosts -np 18 R --no-save -q
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For each remote node I get a message like
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [n11:07642] Error: unknown option &quot;--tree-spawn&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; According to previous exchanges on this list that is a sign that the remote nodes are picking up the old system version of MPI instead of my new local one.  Apparently the PATH values I exported are not used; presumably it's the same for LD_LIBRARY_PATH.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I found this surprising.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; RTFM disclosed the --prefix argument to orterun, and that seems to do the trick.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Am I missing anything?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ross Boylan
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23851/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23852.php">Jianyu Liu: "Re: [OMPI users] Question about '--mca btl tcp,self'"</a>
<li><strong>Previous message:</strong> <a href="23850.php">Ross Boylan: "Re: [OMPI users] exporting PATH ineffective for finding MPI"</a>
<li><strong>In reply to:</strong> <a href="23850.php">Ross Boylan: "Re: [OMPI users] exporting PATH ineffective for finding MPI"</a>
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
