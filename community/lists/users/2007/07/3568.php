<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jul  4 03:05:55 2007" -->
<!-- isoreceived="20070704070555" -->
<!-- sent="Wed, 4 Jul 2007 09:05:44 +0200" -->
<!-- isosent="20070704070544" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] nfs romio" -->
<!-- id="01B7C82C-185B-4D21-A342-3CEB2C128348_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="8BF06A36E7AD424197195998D9A0B8E1CD6FFA_at_FBRMLBR01.Enterprise.afmc.ds.af.mil" -->
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
<strong>Date:</strong> 2007-07-04 03:05:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3569.php">Jeff Squyres: "Re: [OMPI users] mpi with icc,icpc and ifort :: segfault"</a>
<li><strong>Previous message:</strong> <a href="3567.php">Ricardo Reis: "[OMPI users] mpi with icc,icpc and ifort :: segfault"</a>
<li><strong>In reply to:</strong> <a href="3565.php">Adams, Samuel D Contr AFRL/HEDR: "[OMPI users] nfs romio"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3584.php">Robert Latham: "Re: [OMPI users] nfs romio"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Bummer.  I know there's some kind of issue with the &quot;noac&quot; NFS value  
<br>
(no attribute caching; when I enabled that on my cluster, my entire  
<br>
cluster got veeerrrrryyy slooooowww with regards to NFS).
<br>
<p>We unfortunately don't have much ROMIO expertise here on the OMPI  
<br>
list; we pretty much import it from MPICH.  You might want to ping  
<br>
the MPICH list because it contains the ROMIO authors.
<br>
<p>Sorry I don't have a better answer...  :-\
<br>
<p><p>On Jul 2, 2007, at 7:49 PM, Adams, Samuel D Contr AFRL/HEDR wrote:
<br>
<p><span class="quotelev1">&gt; I wrote a code the other day to MPI IO to write files, and OpenMPI/ 
</span><br>
<span class="quotelev1">&gt; ROMIO
</span><br>
<span class="quotelev1">&gt; seems to be having problems with the NFS server. I have read that  
</span><br>
<span class="quotelev1">&gt; NFSv4
</span><br>
<span class="quotelev1">&gt; and ROMIO don't perform very well together, but my problem is  
</span><br>
<span class="quotelev1">&gt; probably a
</span><br>
<span class="quotelev1">&gt; misconfiguration of some kind.  Basically when I use MPI IO to write a
</span><br>
<span class="quotelev1">&gt; file on an exported file system, it basically hangs.  If I try to  
</span><br>
<span class="quotelev1">&gt; run it
</span><br>
<span class="quotelev1">&gt; to a local file system, it works great.  I also get mixed results
</span><br>
<span class="quotelev1">&gt; depending on which MPI I am using with our NFS server.  Sometimes my
</span><br>
<span class="quotelev1">&gt; code will work ok with some MPI implementations using the same NFS
</span><br>
<span class="quotelev1">&gt; server, and other times it will hang like it does with OpenMPI which
</span><br>
<span class="quotelev1">&gt; seems odd since I think MPICH, LAM-MPI, and OpenMPI all use ROMIO.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Anyway, so if anyone can tell me how I should configure my NFS server,
</span><br>
<span class="quotelev1">&gt; or OpenMPI to make ROMIO work properly, I would appreciate it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sam Adams
</span><br>
<span class="quotelev1">&gt; General Dynamics Information Technology
</span><br>
<span class="quotelev1">&gt; Phone: 210.536.5945
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3569.php">Jeff Squyres: "Re: [OMPI users] mpi with icc,icpc and ifort :: segfault"</a>
<li><strong>Previous message:</strong> <a href="3567.php">Ricardo Reis: "[OMPI users] mpi with icc,icpc and ifort :: segfault"</a>
<li><strong>In reply to:</strong> <a href="3565.php">Adams, Samuel D Contr AFRL/HEDR: "[OMPI users] nfs romio"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3584.php">Robert Latham: "Re: [OMPI users] nfs romio"</a>
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
