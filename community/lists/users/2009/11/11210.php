<?
$subject_val = "Re: [OMPI users] OFED-1.5rc1 with OpenMPI and IB";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 16 09:44:11 2009" -->
<!-- isoreceived="20091116144411" -->
<!-- sent="Mon, 16 Nov 2009 06:44:05 -0800" -->
<!-- isosent="20091116144405" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OFED-1.5rc1 with OpenMPI and IB" -->
<!-- id="215D8D1E-4625-4AD4-84AC-436D4C6233F7_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4B013213.7090605_at_dialup.fh-aachen.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] OFED-1.5rc1 with OpenMPI and IB<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-16 09:44:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11211.php">Eugene Loh: "Re: [OMPI users] Array Declaration different approaches"</a>
<li><strong>Previous message:</strong> <a href="11209.php">Stefan Kuhne: "Re: [OMPI users] OFED-1.5rc1 with OpenMPI and IB"</a>
<li><strong>In reply to:</strong> <a href="11208.php">Stefan Kuhne: "Re: [OMPI users] OFED-1.5rc1 with OpenMPI and IB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/12/11449.php">Stefan Kuhne: "Re: [OMPI users] OFED-1.5rc1 with OpenMPI and IB"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 16, 2009, at 3:05 AM, Stefan Kuhne wrote:
<br>
<p><span class="quotelev1">&gt; user_at_head:~$ ulimit -l
</span><br>
<span class="quotelev1">&gt; unlimited
</span><br>
<span class="quotelev1">&gt; user_at_head:~$
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; it works.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Good.
<br>
<p><span class="quotelev1">&gt; Who can i resolve if really IB is used?
</span><br>
<span class="quotelev1">&gt; My switch shows no packages.
</span><br>
<span class="quotelev1">&gt; (I use: --mca btl openib,self)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>You might want to use --mca btl openib,sm,self.  This allows Open MPI  
<br>
to use shared memory for communications with MPI processes on the same  
<br>
server.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11211.php">Eugene Loh: "Re: [OMPI users] Array Declaration different approaches"</a>
<li><strong>Previous message:</strong> <a href="11209.php">Stefan Kuhne: "Re: [OMPI users] OFED-1.5rc1 with OpenMPI and IB"</a>
<li><strong>In reply to:</strong> <a href="11208.php">Stefan Kuhne: "Re: [OMPI users] OFED-1.5rc1 with OpenMPI and IB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/12/11449.php">Stefan Kuhne: "Re: [OMPI users] OFED-1.5rc1 with OpenMPI and IB"</a>
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
