<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Feb 26 06:53:48 2007" -->
<!-- isoreceived="20070226115348" -->
<!-- sent="Mon, 26 Feb 2007 06:53:04 -0500" -->
<!-- isosent="20070226115304" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Compiling HPCC with OpenMPI" -->
<!-- id="05BA3F9E-85B4-4479-89BB-299339963A32_at_cisco.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="200702211239.08560.kyron_at_neuralbs.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-02-26 06:53:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2735.php">Rozzen.VINCONT_at_[hidden]: "[OMPI users] MPI_Comm_Spawn"</a>
<li><strong>Previous message:</strong> <a href="2733.php">Brian W. Barrett: "Re: [OMPI users] configure tests broken for pthreads in some situations"</a>
<li><strong>In reply to:</strong> <a href="2726.php">Eric Thibodeau: "Re: [OMPI users] Compiling HPCC with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2740.php">Eric Thibodeau: "Re: [OMPI users] Compiling HPCC with OpenMPI"</a>
<li><strong>Reply:</strong> <a href="2740.php">Eric Thibodeau: "Re: [OMPI users] Compiling HPCC with OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Note that George listed the v1.2 OMPI libraries (-lopen-rte and - 
<br>
lopenpal) -- the v.1.1.x names are slightly different (-lorte and - 
<br>
lopal).  We had to change the back-end library names between v1.1 and  
<br>
v1.2 because someone else out in the Linux community uses &quot;libopal&quot;.
<br>
<p>I typically prefer using &quot;mpicc&quot; as CC and LINKER and therefore  
<br>
letting the OMPI wrapper handle everything for exactly this reason.
<br>
<p><p>On Feb 21, 2007, at 12:39 PM, Eric Thibodeau wrote:
<br>
<p><span class="quotelev1">&gt; Hi George,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	Would you say this is preferred to changing the default CC + LINKER?
</span><br>
<span class="quotelev1">&gt; Eric
</span><br>
<span class="quotelev1">&gt; Le mercredi 21 f&#233;vrier 2007 12:04, George Bosilca a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; You should use something like this
</span><br>
<span class="quotelev2">&gt;&gt; MPdir = /usr/local/mpi
</span><br>
<span class="quotelev2">&gt;&gt; MPinc = -I$(MPdir)/include
</span><br>
<span class="quotelev2">&gt;&gt; MPlib = -L$(MPdir)/lib -lmpi -lopen-rte -lopen-pal
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    george.
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
<p><p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2735.php">Rozzen.VINCONT_at_[hidden]: "[OMPI users] MPI_Comm_Spawn"</a>
<li><strong>Previous message:</strong> <a href="2733.php">Brian W. Barrett: "Re: [OMPI users] configure tests broken for pthreads in some situations"</a>
<li><strong>In reply to:</strong> <a href="2726.php">Eric Thibodeau: "Re: [OMPI users] Compiling HPCC with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2740.php">Eric Thibodeau: "Re: [OMPI users] Compiling HPCC with OpenMPI"</a>
<li><strong>Reply:</strong> <a href="2740.php">Eric Thibodeau: "Re: [OMPI users] Compiling HPCC with OpenMPI"</a>
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
