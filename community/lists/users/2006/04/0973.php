<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Apr  7 10:12:50 2006" -->
<!-- isoreceived="20060407141250" -->
<!-- sent="Fri, 07 Apr 2006 10:12:34 -0400" -->
<!-- isosent="20060407141234" -->
<!-- name="Prakash Velayutham" -->
<!-- email="prakash.velayutham_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI and Torque error" -->
<!-- id="44367352.2040309_at_cchmc.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="443285F8.5010406_at_Sun.COM" -->
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
<strong>From:</strong> Prakash Velayutham (<em>prakash.velayutham_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-04-07 10:12:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0974.php">Adams Samuel D Contr AFRL/HEDR: "[OMPI users] job running question"</a>
<li><strong>Previous message:</strong> <a href="0972.php">john casu: "Re: [OMPI users] MPI_Allreduce error in 1.0.1 and 1.0.2rc1"</a>
<li><strong>In reply to:</strong> <a href="0959.php">Pak Lui: "Re: [OMPI users] Open MPI and Torque error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0977.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Open MPI and Torque error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Pak Lui wrote:
<br>
<span class="quotelev1">&gt; Prakash,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; tm_poll: protocol number dis error 11
</span><br>
<span class="quotelev1">&gt; ret is 17002 instead of 0: tm_init failed
</span><br>
<span class="quotelev1">&gt; 3 processes killed (possibly by Open MPI)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I encountered similar problem with OpenPBS before, which also uses the 
</span><br>
<span class="quotelev1">&gt; TM interfaces. It returns a TM_ENOTCONNECTED (17002) when I tried to 
</span><br>
<span class="quotelev1">&gt; call tm_init for the second time (which in turns call tm_poll and 
</span><br>
<span class="quotelev1">&gt; returned that errno).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think what you did to start tm_init from another node and connect to 
</span><br>
<span class="quotelev1">&gt; another mom which I do not think is allowed. The TM module in OpenMPI 
</span><br>
<span class="quotelev1">&gt; already called tm_init once. I am curious to know about the reason that 
</span><br>
<span class="quotelev1">&gt; you need to call tm_init again?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you are curious to know about the implementation for PBS, you can 
</span><br>
<span class="quotelev1">&gt; download the source from openpbs.org. OpenPBS source: 
</span><br>
<span class="quotelev1">&gt; v2.3.16/src/lib/Libifl/tm.c
</span><br>
I am interested in getting this to work as I am working on implementing 
<br>
support for dynamic scheduling in Torque. I want any node in an MPI-2 
<br>
job (basically Open MPI implementation) to be able to request the 
<br>
Torque/PBS server for more nodes. I am doing a little study in that 
<br>
right now. Instead of nodes talking directly to the server, I want them 
<br>
to be able to talk to Mother Superior and MS instead will talk to the 
<br>
Server.
<br>
<p>Could you please explain why this does not work now? And why it works 
<br>
when I do the tm_init from MS, and only does not work from any other MOM?
<br>
<p>Thanks,
<br>
Prakash
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0974.php">Adams Samuel D Contr AFRL/HEDR: "[OMPI users] job running question"</a>
<li><strong>Previous message:</strong> <a href="0972.php">john casu: "Re: [OMPI users] MPI_Allreduce error in 1.0.1 and 1.0.2rc1"</a>
<li><strong>In reply to:</strong> <a href="0959.php">Pak Lui: "Re: [OMPI users] Open MPI and Torque error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0977.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Open MPI and Torque error"</a>
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
