<?
$subject_val = "Re: [OMPI users] Installing MPE on existing Open-MPI installation for C++ programs";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 12 11:27:52 2010" -->
<!-- isoreceived="20100412152752" -->
<!-- sent="Mon, 12 Apr 2010 10:27:46 -0500 (CDT)" -->
<!-- isosent="20100412152746" -->
<!-- name="chan_at_[hidden]" -->
<!-- email="chan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Installing MPE on existing Open-MPI installation for C++ programs" -->
<!-- id="94860.255881271086066750.JavaMail.root_at_zimbra" -->
<!-- charset="utf-8" -->
<!-- inreplyto="4221867.255491271085603249.JavaMail.root_at_zimbra" -->
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
<strong>Subject:</strong> Re: [OMPI users] Installing MPE on existing Open-MPI installation for C++ programs<br>
<strong>From:</strong> <a href="mailto:chan_at_[hidden]?Subject=Re:%20[OMPI%20users]%20Installing%20MPE%20on%20existing%20Open-MPI%20installation%20for%20C%2B%2B%20programs"><em>chan_at_[hidden]</em></a><br>
<strong>Date:</strong> 2010-04-12 11:27:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12612.php">Gabriele Fatigati: "[OMPI users] btl_tcp_if_exclude param"</a>
<li><strong>Previous message:</strong> <a href="12610.php">Fernando Lemos: "Re: [OMPI users] OpenMPI Checkpoint/Restart is failed"</a>
<li><strong>Maybe in reply to:</strong> <a href="12602.php">Ridhi Dua: "[OMPI users] Installing MPE on existing Open-MPI installation for C++ programs"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Try using &quot;mpecc -mpicc=&lt;path_to_mpicxx&gt;&quot; to compile your C++ program.
<br>
&quot;mpicc -mpilog&quot; is only available in the MPICH (not MPICH2 which provides
<br>
mpicc -mpe=mpilog).  Non-MPICH(2) based implementation needs to use
<br>
mpecc instead to enable MPE.
<br>
<p>A.Chan
<br>
<p>----- &quot;Ridhi Dua&quot; &lt;duaridhi_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; I have successfully installed MPE for my existing Open-MPI
</span><br>
<span class="quotelev1">&gt; installation and
</span><br>
<span class="quotelev1">&gt; have been able compile using the compiler wrapper 'mpecc'.
</span><br>
<span class="quotelev1">&gt; But, I have some C++ MPI programs which cannot be compiled using
</span><br>
<span class="quotelev1">&gt; mpecc. How
</span><br>
<span class="quotelev1">&gt; do I achieve this,or do I need to make changes to my MPE installation
</span><br>
<span class="quotelev1">&gt; procedure? I used the following command for my current installation.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/gpfs/fs3/home/xxx/mybin \
</span><br>
<span class="quotelev1">&gt; MPI_CC=/sw/openmpi/bin/mpicc \
</span><br>
<span class="quotelev1">&gt; --disable-f77 \
</span><br>
<span class="quotelev1">&gt; --with-java=/usr/java/jdk1.6.0_13
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (Also, I have managed to use mpecc, but not 'mpicc -mpilog hello.c' Is
</span><br>
<span class="quotelev1">&gt; this
</span><br>
<span class="quotelev1">&gt; assumption even correct for Open-MPI or is it an option only for MPICH
</span><br>
<span class="quotelev1">&gt; )
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you.
</span><br>
<span class="quotelev1">&gt; ~ ridZ
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
<li><strong>Next message:</strong> <a href="12612.php">Gabriele Fatigati: "[OMPI users] btl_tcp_if_exclude param"</a>
<li><strong>Previous message:</strong> <a href="12610.php">Fernando Lemos: "Re: [OMPI users] OpenMPI Checkpoint/Restart is failed"</a>
<li><strong>Maybe in reply to:</strong> <a href="12602.php">Ridhi Dua: "[OMPI users] Installing MPE on existing Open-MPI installation for C++ programs"</a>
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
