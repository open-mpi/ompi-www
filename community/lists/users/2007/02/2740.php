<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Feb 27 22:10:03 2007" -->
<!-- isoreceived="20070228031003" -->
<!-- sent="Tue, 27 Feb 2007 22:09:24 -0500" -->
<!-- isosent="20070228030924" -->
<!-- name="Eric Thibodeau" -->
<!-- email="kyron_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Compiling HPCC with OpenMPI" -->
<!-- id="200702272209.25218.kyron_at_neuralbs.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="05BA3F9E-85B4-4479-89BB-299339963A32_at_cisco.com" -->
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
<strong>From:</strong> Eric Thibodeau (<em>kyron_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-02-27 22:09:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2741.php">Tim Prins: "Re: [OMPI users] MPI_Comm_Spawn"</a>
<li><strong>Previous message:</strong> <a href="2739.php">Ganapathi Kamath: "[OMPI users] Cygwin build"</a>
<li><strong>In reply to:</strong> <a href="2734.php">Jeff Squyres: "Re: [OMPI users] Compiling HPCC with OpenMPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I had noticed the the library name switched but thanks for pointing it out 
<br>
still ;) As for the compilation route, I chose to use mpicc as the preferred 
<br>
approach and indeed let the wrapper do the work.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FWIW, I got HPCC running, now to find a nice way to sort through all the 
<br>
data ;)
<br>
<p>Eric
<br>
<p>Le lundi 26 f&#233;vrier 2007 06:53, Jeff Squyres a &#233;crit&#160;:
<br>
<span class="quotelev1">&gt; Note that George listed the v1.2 OMPI libraries (-lopen-rte and - 
</span><br>
<span class="quotelev1">&gt; lopenpal) -- the v.1.1.x names are slightly different (-lorte and - 
</span><br>
<span class="quotelev1">&gt; lopal).  We had to change the back-end library names between v1.1 and  
</span><br>
<span class="quotelev1">&gt; v1.2 because someone else out in the Linux community uses &quot;libopal&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I typically prefer using &quot;mpicc&quot; as CC and LINKER and therefore  
</span><br>
<span class="quotelev1">&gt; letting the OMPI wrapper handle everything for exactly this reason.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Feb 21, 2007, at 12:39 PM, Eric Thibodeau wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi George,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 	Would you say this is preferred to changing the default CC + LINKER?
</span><br>
<span class="quotelev2">&gt; &gt; Eric
</span><br>
<span class="quotelev2">&gt; &gt; Le mercredi 21 f&#233;vrier 2007 12:04, George Bosilca a &#233;crit :
</span><br>
<span class="quotelev3">&gt; &gt;&gt; You should use something like this
</span><br>
<span class="quotelev3">&gt; &gt;&gt; MPdir = /usr/local/mpi
</span><br>
<span class="quotelev3">&gt; &gt;&gt; MPinc = -I$(MPdir)/include
</span><br>
<span class="quotelev3">&gt; &gt;&gt; MPlib = -L$(MPdir)/lib -lmpi -lopen-rte -lopen-pal
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    george.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><pre>
-- 
Eric Thibodeau
Neural Bucket Solutions Inc.
T. (514) 736-1436
C. (514) 710-0517
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2741.php">Tim Prins: "Re: [OMPI users] MPI_Comm_Spawn"</a>
<li><strong>Previous message:</strong> <a href="2739.php">Ganapathi Kamath: "[OMPI users] Cygwin build"</a>
<li><strong>In reply to:</strong> <a href="2734.php">Jeff Squyres: "Re: [OMPI users] Compiling HPCC with OpenMPI"</a>
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
