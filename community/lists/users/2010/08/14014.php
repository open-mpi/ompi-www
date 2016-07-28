<?
$subject_val = "Re: [OMPI users] problem with .bashrc stetting of openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 13 10:47:56 2010" -->
<!-- isoreceived="20100813144756" -->
<!-- sent="Fri, 13 Aug 2010 10:47:47 -0400" -->
<!-- isosent="20100813144747" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem with .bashrc stetting of openmpi" -->
<!-- id="4C655B13.3020204_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="59918.10.209.4.2.1281679058.squirrel_at_www.chem.iitb.ac.in" -->
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
<strong>Subject:</strong> Re: [OMPI users] problem with .bashrc stetting of openmpi<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-13 10:47:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14015.php">ananda.mudar_at_[hidden]: "Re: [OMPI users] Checkpointing mpi4py program"</a>
<li><strong>Previous message:</strong> <a href="14013.php">Jeff Squyres: "Re: [OMPI users] problem with .bashrc stetting of openmpi"</a>
<li><strong>In reply to:</strong> <a href="14008.php">sunita_at_[hidden]: "[OMPI users] problem with .bashrc stetting of openmpi"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Sunita
<br>
<p>My guess is that you are picking a wrong mpiexec,
<br>
because of the way you set your PATH.
<br>
What do you get from &quot;which mpiexec&quot;?
<br>
<p>Try *pre-pending&quot; the OpenMPI path to the existing PATH,
<br>
instead of appending it (that's what you did with the LD_LIBRARY_PATH):
<br>
<p>export PATH=/home/sunitap/soft/openmpi/bin:$PATH
<br>
<p>My $0.02
<br>
Gus Correa
<br>
---------------------------------------------------------------------
<br>
Gustavo Correa
<br>
Lamont-Doherty Earth Observatory - Columbia University
<br>
Palisades, NY, 10964-8000 - USA
<br>
---------------------------------------------------------------------
<br>
<p>sunita_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt; Dear Open-mpi users,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I installed openmpi-1.4.1 in my user area and then set the path for
</span><br>
<span class="quotelev1">&gt; openmpi in the .bashrc file as follow. However, am still getting following
</span><br>
<span class="quotelev1">&gt; error message whenever am starting the parallel molecular dynamics
</span><br>
<span class="quotelev1">&gt; simulation using GROMACS. So every time am starting the MD job, I need to
</span><br>
<span class="quotelev1">&gt; source the .bashrc file again.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Earlier in some other machine I did the same thing and was not getting any
</span><br>
<span class="quotelev1">&gt; problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Could you guys suggest what would be the problem?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ============.bashrc============
</span><br>
<span class="quotelev1">&gt; #path for openmpi
</span><br>
<span class="quotelev1">&gt; export PATH=$PATH:/home/sunitap/soft/openmpi/bin
</span><br>
<span class="quotelev1">&gt; export CFLAGS=&quot;-I/home/sunitap/soft/openmpi/include&quot;
</span><br>
<span class="quotelev1">&gt; export LDFLAGS=&quot;-L/home/sunitap/soft/openmpi/lib&quot;
</span><br>
<span class="quotelev1">&gt; export LD_LIBRARY_PATH=/home/sunitap/soft/openmpi/lib:$LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ============== error message ==============
</span><br>
<span class="quotelev1">&gt; mdrun_mpi: error while loading shared libraries: libmpi.so.0: cannot open
</span><br>
<span class="quotelev1">&gt; shared object file: No such file or directory
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ============================================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for any help.
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; Sunita
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
<li><strong>Next message:</strong> <a href="14015.php">ananda.mudar_at_[hidden]: "Re: [OMPI users] Checkpointing mpi4py program"</a>
<li><strong>Previous message:</strong> <a href="14013.php">Jeff Squyres: "Re: [OMPI users] problem with .bashrc stetting of openmpi"</a>
<li><strong>In reply to:</strong> <a href="14008.php">sunita_at_[hidden]: "[OMPI users] problem with .bashrc stetting of openmpi"</a>
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
