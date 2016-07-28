<?
$subject_val = "Re: [OMPI users] problem with .bashrc stetting of openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 13 10:38:19 2010" -->
<!-- isoreceived="20100813143819" -->
<!-- sent="Fri, 13 Aug 2010 10:39:35 -0400" -->
<!-- isosent="20100813143935" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem with .bashrc stetting of openmpi" -->
<!-- id="935CC1A4-4545-4ACD-91B7-78EC399CFD60_at_cisco.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-13 10:39:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14014.php">Gus Correa: "Re: [OMPI users] problem with .bashrc stetting of openmpi"</a>
<li><strong>Previous message:</strong> <a href="14012.php">Joshua Hursey: "Re: [OMPI users] users Digest, Vol 1658, Issue 2"</a>
<li><strong>In reply to:</strong> <a href="14008.php">sunita_at_[hidden]: "[OMPI users] problem with .bashrc stetting of openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14014.php">Gus Correa: "Re: [OMPI users] problem with .bashrc stetting of openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You might want to make sure that this .bashrc is both the same and is executated properly upon both interactive and non-interactive logins on all the systems that you are running on.
<br>
<p><p>On Aug 13, 2010, at 1:57 AM, sunita_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Dear Open-mpi users,
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14014.php">Gus Correa: "Re: [OMPI users] problem with .bashrc stetting of openmpi"</a>
<li><strong>Previous message:</strong> <a href="14012.php">Joshua Hursey: "Re: [OMPI users] users Digest, Vol 1658, Issue 2"</a>
<li><strong>In reply to:</strong> <a href="14008.php">sunita_at_[hidden]: "[OMPI users] problem with .bashrc stetting of openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14014.php">Gus Correa: "Re: [OMPI users] problem with .bashrc stetting of openmpi"</a>
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
