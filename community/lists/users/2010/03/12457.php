<?
$subject_val = "Re: [OMPI users] questions about checkpoint/restart on multiple clusters of MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 29 12:05:27 2010" -->
<!-- isoreceived="20100329160527" -->
<!-- sent="Mon, 29 Mar 2010 12:05:24 -0400" -->
<!-- isosent="20100329160524" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] questions about checkpoint/restart on multiple clusters of MPI" -->
<!-- id="7A98E041-8BDC-4A9D-A3FC-96D3B95C1EF2_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="958403f51003290853s2243966s1314cfcd997b6c07_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] questions about checkpoint/restart on multiple clusters of MPI<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-29 12:05:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12458.php">Josh Hursey: "Re: [OMPI users] Segmentation fault (11)"</a>
<li><strong>Previous message:</strong> <a href="12456.php">fengguang tian: "Re: [OMPI users] question about checkpoint on cluster, mpirun doesn't 	work on cluster"</a>
<li><strong>In reply to:</strong> <a href="12455.php">fengguang tian: "Re: [OMPI users] questions about checkpoint/restart on multiple clusters of MPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 29, 2010, at 11:53 AM, fengguang tian wrote:
<br>
<p><span class="quotelev1">&gt; hi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i have used the --term option,but the mpirun is still hanging,it is  
</span><br>
<span class="quotelev1">&gt; the same whether I include the ' / ' or not.I am installing the v1.4  
</span><br>
<span class="quotelev1">&gt; to see whether the problems are still there. I tried, but some  
</span><br>
<span class="quotelev1">&gt; problems are still there.
</span><br>
<p>What configure options did you use when building Open MPI?
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; BTW, my MPI program will have some input file, and will generate  
</span><br>
<span class="quotelev1">&gt; some output file after some computation, it can be checkpointed,but  
</span><br>
<span class="quotelev1">&gt; when restart it, some error happened,have you met this kind of  
</span><br>
<span class="quotelev1">&gt; problem?
</span><br>
<p>Try putting the 'snapc_base_global_snapshot_dir' in the $HOME/.openmpi/ 
<br>
mca-params.conf file instead of just on the command line. Like:
<br>
snapc_base_global_snapshot_dir=/shared-dir/
<br>
<p>I suspect that ompi-restart is looking in the wrong place for your  
<br>
checkpoint. By default it will search $HOME (since that is the default  
<br>
for snapc_base_global_snapshot_dir). If you put this parameter in the  
<br>
mca-params.conf file, then it is always set in any tool (mpirun/ompi- 
<br>
checkpoint/ompi-restart) to the specified value. So ompi-restart will  
<br>
search the correct location for the checkpoint files.
<br>
<p>-- Josh
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cheers
</span><br>
<span class="quotelev1">&gt; fengguang
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Mar 29, 2010 at 11:42 AM, Josh Hursey &lt;jjhursey_at_open- 
</span><br>
<span class="quotelev1">&gt; mpi.org&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 23, 2010, at 1:00 PM, Fernando Lemos wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Mar 23, 2010 at 12:55 PM, fengguang tian  
</span><br>
<span class="quotelev1">&gt; &lt;fernyabc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I use mpirun -np 50 -am ft-enable-cr --mca  
</span><br>
<span class="quotelev1">&gt; snapc_base_global_snapshot_dir
</span><br>
<span class="quotelev1">&gt; --hostfile .mpihostfile xxxx
</span><br>
<span class="quotelev1">&gt; to store the global checkpoint snapshot into the shared
</span><br>
<span class="quotelev1">&gt; directory:/mirror,but the problems are still there,
</span><br>
<span class="quotelev1">&gt; when ompi-checkpoint, the mpirun is still not killed,it is hanging
</span><br>
<span class="quotelev1">&gt; there.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So the 'ompi-checkpoint' command does not finish? By default 'ompi- 
</span><br>
<span class="quotelev1">&gt; checkpoint' does not terminate the MPI job. If you pass the '--term'  
</span><br>
<span class="quotelev1">&gt; option to it, then it will.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; when doing ompi-restart, it shows:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpiu_at_nimbus:/mirror$ ompi-restart ompi_global_snapshot_333.ckpt/
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Error: The filename (ompi_global_snapshot_333.ckpt/) is invalid  
</span><br>
<span class="quotelev1">&gt; because
</span><br>
<span class="quotelev1">&gt; either you have not provided a filename
</span><br>
<span class="quotelev1">&gt;       or provided an invalid filename.
</span><br>
<span class="quotelev1">&gt;       Please see --help for usage.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Try removing the trailing '/' in the command. The current ompi- 
</span><br>
<span class="quotelev1">&gt; restart is not good about differentiating between :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  ompi_global_snapshot_333.ckpt
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  ompi_global_snapshot_333.ckpt/
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Have you tried OpenMPI 1.5? I got it to work with 1.5, but not with
</span><br>
<span class="quotelev1">&gt; 1.4 (but then I didn't try 1.4 with a shared filesystem).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I would also suggest trying v1.4 or 1.5 to see if your problems  
</span><br>
<span class="quotelev1">&gt; persist with these versions.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="12458.php">Josh Hursey: "Re: [OMPI users] Segmentation fault (11)"</a>
<li><strong>Previous message:</strong> <a href="12456.php">fengguang tian: "Re: [OMPI users] question about checkpoint on cluster, mpirun doesn't 	work on cluster"</a>
<li><strong>In reply to:</strong> <a href="12455.php">fengguang tian: "Re: [OMPI users] questions about checkpoint/restart on multiple clusters of MPI"</a>
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
