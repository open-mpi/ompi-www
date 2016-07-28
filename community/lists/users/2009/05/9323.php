<?
$subject_val = "Re: [OMPI users] [Fwd: mpi alltoall memory requirement]";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 13 07:47:48 2009" -->
<!-- isoreceived="20090513114748" -->
<!-- sent="Wed, 13 May 2009 12:48:45 +0100" -->
<!-- isosent="20090513114845" -->
<!-- name="Ashley Pittman" -->
<!-- email="ashley_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [Fwd: mpi alltoall memory requirement]" -->
<!-- id="1242215325.8496.10.camel_at_alpha" -->
<!-- inreplyto="00163646ccde5195b2046833992d_at_google.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] [Fwd: mpi alltoall memory requirement]<br>
<strong>From:</strong> Ashley Pittman (<em>ashley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-13 07:48:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9324.php">Le Duy Khanh: "[OMPI users] How to override MPI functions such as MPI_Init, MPI_Recv..."</a>
<li><strong>Previous message:</strong> <a href="9322.php">Jeff Squyres: "Re: [OMPI users] ****---How to configure NIS and MPI on spreadNICs?----****"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/04/9050.php">viral.vkm_at_[hidden]: "Re: [OMPI users] [Fwd: mpi alltoall memory requirement]"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, 2009-04-23 at 07:12 +0000, viral.vkm_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt; Hi 
</span><br>
<span class="quotelev1">&gt; Thanks for your response. 
</span><br>
<span class="quotelev1">&gt; However, I am running 
</span><br>
<span class="quotelev1">&gt; mpiexec .... -ppn 24 -n 192 /opt/IMB-MPI1 alltaoll -msglen /root/temp 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And file /root/temp contains entry upto 65535 size only. That means
</span><br>
<span class="quotelev1">&gt; alltoall test will run upto 65K size only
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So, in that case I will require very less memory but then in that case
</span><br>
<span class="quotelev1">&gt; also test is running out-of-memory. Please help someone to understand
</span><br>
<span class="quotelev1">&gt; the scenario.
</span><br>
<span class="quotelev1">&gt; Or do I need to switch to some algorithm or do I need to set some
</span><br>
<span class="quotelev1">&gt; other environment variables ? or anything like that ?
</span><br>
<p>I'm not sure but I seem to remember that IMB uses two application
<br>
buffers and alternates which one it uses, this itself will double the
<br>
memory requirement.  You should be able to plot performance against max
<br>
message size and see where the drop off occurs.
<br>
<p>I've always used the compile options to specify max message size and rep
<br>
count, the -msglen option is not one I've seen before.
<br>
<p>Ashley Pittman.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9324.php">Le Duy Khanh: "[OMPI users] How to override MPI functions such as MPI_Init, MPI_Recv..."</a>
<li><strong>Previous message:</strong> <a href="9322.php">Jeff Squyres: "Re: [OMPI users] ****---How to configure NIS and MPI on spreadNICs?----****"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/04/9050.php">viral.vkm_at_[hidden]: "Re: [OMPI users] [Fwd: mpi alltoall memory requirement]"</a>
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
