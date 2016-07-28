<?
$subject_val = "Re: [OMPI users] dumping checkpoint at customized locations";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Sep 14 08:13:00 2008" -->
<!-- isoreceived="20080914121300" -->
<!-- sent="Sun, 14 Sep 2008 08:12:40 -0400" -->
<!-- isosent="20080914121240" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] dumping checkpoint at customized locations" -->
<!-- id="AE4CBEEC-CEAC-4F97-B2B0-E08A25F00E6F_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="838cb4200809131649h9672ca4p70d8ee6617feb7ef_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] dumping checkpoint at customized locations<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-14 08:12:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6535.php">Shafagh Jafer: "[OMPI users] errors returned from openmpi-1.2.7 source code"</a>
<li><strong>Previous message:</strong> <a href="6533.php">Enrico Barausse: "Re: [OMPI users] MPI_sendrecv = MPI_Send+ MPI_RECV ?"</a>
<li><strong>In reply to:</strong> <a href="6528.php">arun dhakne: "[OMPI users] dumping checkpoint at customized locations"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The document attached to the Open MPI Wiki discusses all of the MCA  
<br>
parameters for checkpoint/restart.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://svn.open-mpi.org/trac/ompi/wiki/ProcessFT_CR">http://svn.open-mpi.org/trac/ompi/wiki/ProcessFT_CR</a>
<br>
<p>There are two ways to save checkpoint file data. I would suggest that  
<br>
you set these parameters in your $HOME/.openmpi/mca-params.conf file  
<br>
so you don't have to pass them everytime to mpirun (Assuming $HOME is  
<br>
shared on all machines).
<br>
<p>1) If you save to a globally shared directory (e.g., NFS directory)  
<br>
then you can set the following MCA paramter in mpirun to point to  
<br>
this location. This overrides the default directory which is $HOME.
<br>
&nbsp;&nbsp;&nbsp;snapc_base_global_snapshot_dir=$HOME/my/ckpt/dir
<br>
<p>2) You can save to the local disk and have Open MPI transfer the  
<br>
files from local disk to stable storage in a two step process. There  
<br>
are three MCA parameters you will need to set for this.
<br>
To set the directory to save on the local disk you want to set the  
<br>
following MCA parameter:
<br>
&nbsp;&nbsp;&nbsp;crs_base_snapshot_dir=/tmp
<br>
Set the global directory where all of the local checkpoints should be  
<br>
saved:
<br>
&nbsp;&nbsp;&nbsp;snapc_base_global_snapshot_dir=$HOME/my/ckpt/dir
<br>
Activate the two step process:
<br>
&nbsp;&nbsp;&nbsp;snapc_base_store_in_place=0
<br>
<p>The C/R User Document on the wiki covers many of these and other  
<br>
parameters in more detail. I would encourage you to look through  
<br>
there as well.
<br>
<p>Best,
<br>
Josh
<br>
<p>On Sep 13, 2008, at 7:49 PM, arun dhakne wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have blcr installed and I am able to dump checkpoints in the $HOME
</span><br>
<span class="quotelev1">&gt; using ompi-checkpoint, i was wondering whether there is some option or
</span><br>
<span class="quotelev1">&gt; something, so that I would be able to  dump the checkpoints at my
</span><br>
<span class="quotelev1">&gt; customized location say in /tmp ??
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Thanks and Regards,
</span><br>
<span class="quotelev1">&gt; Arun
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
<li><strong>Next message:</strong> <a href="6535.php">Shafagh Jafer: "[OMPI users] errors returned from openmpi-1.2.7 source code"</a>
<li><strong>Previous message:</strong> <a href="6533.php">Enrico Barausse: "Re: [OMPI users] MPI_sendrecv = MPI_Send+ MPI_RECV ?"</a>
<li><strong>In reply to:</strong> <a href="6528.php">arun dhakne: "[OMPI users] dumping checkpoint at customized locations"</a>
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
