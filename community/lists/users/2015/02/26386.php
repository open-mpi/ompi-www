<?
$subject_val = "Re: [OMPI users] MPIIO and OrangeFS";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 24 16:03:15 2015" -->
<!-- isoreceived="20150224210315" -->
<!-- sent="Tue, 24 Feb 2015 15:04:27 -0600" -->
<!-- isosent="20150224210427" -->
<!-- name="Rob Latham" -->
<!-- email="robl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPIIO and OrangeFS" -->
<!-- id="54ECE75B.6040705_at_mcs.anl.gov" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="5d5.F02x.4M1ymuEY6ge.1KxDXa_at_seznam.cz" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPIIO and OrangeFS<br>
<strong>From:</strong> Rob Latham (<em>robl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-24 16:04:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26387.php">Tom Wurgler: "Re: [OMPI users] Why are the static libs different if compiled with or	without dynamic switch?"</a>
<li><strong>Previous message:</strong> <a href="26385.php">Ralph Castain: "Re: [OMPI users] machinefile binding error"</a>
<li><strong>In reply to:</strong> <a href="26382.php">vithanousek: "[OMPI users] MPIIO and OrangeFS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26393.php">vithanousek: "Re: [OMPI users] MPIIO and OrangeFS"</a>
<li><strong>Reply:</strong> <a href="26393.php">vithanousek: "Re: [OMPI users] MPIIO and OrangeFS"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 02/24/2015 02:00 PM, vithanousek wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Im not sure if I have my OrangeFS (2.8.8) and OpenMPI (1.8.4) set up corectly. One short questin?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is it needed to have OrangeFS  mounted  through kernel module, if I want use MPIIO?
</span><br>
<p>nope!
<br>
<p><span class="quotelev1">&gt; My simple MPIIO hello world program doesnt work, If i havent mounted OrangeFS. When I mount OrangeFS, it works. So I'm not sure if OMPIO (or ROMIO) is using pvfs2 servers directly or if it is using kernel module.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry for stupid question, but I didnt find any documentation about it.
</span><br>
<p><a href="http://www.pvfs.org/cvs/pvfs-2-8-branch-docs/doc/pvfs2-quickstart/pvfs2-quickstart.php#sec:romio">http://www.pvfs.org/cvs/pvfs-2-8-branch-docs/doc/pvfs2-quickstart/pvfs2-quickstart.php#sec:romio</a>
<br>
<p>It sounds like you have not configured your MPI implementation with 
<br>
PVFS2 support (OrangeFS is a re-branding of PVFS2, but as far as MPI-IO 
<br>
is concerned, they are the same).
<br>
<p>OpenMPI passes flags to romio like this at configure time:
<br>
<p>&nbsp;&nbsp;--with-io-romio-flags=&quot;--with-file-system=pvfs2+ufs+nfs&quot;
<br>
<p>I'm not sure how OMPIO takes flags.
<br>
<p>If pvfs2-ping and pvfs2-cp and pvfs2-ls work, then you can bypass the 
<br>
kernel.
<br>
<p>also, please check return codes:
<br>
<p><a href="http://stackoverflow.com/questions/22859269/what-do-mpi-io-error-codes-mean/26373193#26373193">http://stackoverflow.com/questions/22859269/what-do-mpi-io-error-codes-mean/26373193#26373193</a>
<br>
<p>==rob
<br>
<p><p><span class="quotelev1">&gt; Thanks for replays
</span><br>
<span class="quotelev1">&gt; Hanousek V&#237;t
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/02/26382.php">http://www.open-mpi.org/community/lists/users/2015/02/26382.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
Rob Latham
Mathematics and Computer Science Division
Argonne National Lab, IL USA
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26387.php">Tom Wurgler: "Re: [OMPI users] Why are the static libs different if compiled with or	without dynamic switch?"</a>
<li><strong>Previous message:</strong> <a href="26385.php">Ralph Castain: "Re: [OMPI users] machinefile binding error"</a>
<li><strong>In reply to:</strong> <a href="26382.php">vithanousek: "[OMPI users] MPIIO and OrangeFS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26393.php">vithanousek: "Re: [OMPI users] MPIIO and OrangeFS"</a>
<li><strong>Reply:</strong> <a href="26393.php">vithanousek: "Re: [OMPI users] MPIIO and OrangeFS"</a>
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
