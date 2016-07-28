<?
$subject_val = "Re: [OMPI users] problem with .bashrc stetting of openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 13 09:59:29 2010" -->
<!-- isoreceived="20100813135929" -->
<!-- sent="Fri, 13 Aug 2010 09:23:57 -0400" -->
<!-- isosent="20100813132357" -->
<!-- name="Terry Dontje" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem with .bashrc stetting of openmpi" -->
<!-- id="4C65476D.1060808_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Terry Dontje (<em>terry.dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-13 09:23:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14011.php">ananda.mudar_at_[hidden]: "Re: [OMPI users] users Digest, Vol 1658, Issue 2"</a>
<li><strong>Previous message:</strong> <a href="14009.php">Cristobal Navarro: "Re: [OMPI users] problem with .bashrc stetting of openmpi"</a>
<li><strong>In reply to:</strong> <a href="14008.php">sunita_at_[hidden]: "[OMPI users] problem with .bashrc stetting of openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14032.php">sunita_at_[hidden]: "Re: [OMPI users] problem with .bashrc stetting of openmpi"</a>
<li><strong>Reply:</strong> <a href="14032.php">sunita_at_[hidden]: "Re: [OMPI users] problem with .bashrc stetting of openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
sunita_at_[hidden] wrote:
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
<span class="quotelev1">&gt;   
</span><br>
Have you set OPAL_PREFIX to /home/sunitap/soft/openmpi?
<br>
<p>If you do a ldd on mdrun_mpi does libmpi.so.0 come up not found?
<br>
If so and there truly is a libmpi.so.0 in /home/sunitap/soft/openmpi/lib
<br>
you may want to make sure the bitness of libmpi.so.0 and mdrun_mpi are 
<br>
the same by
<br>
doing a file command on both.
<br>
<p>--td
<br>
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
<span class="quotelev1">&gt;   
</span><br>
<p><p><pre>
-- 
Oracle
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.650.633.7054
Oracle * - Performance Technologies*
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</pre>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14010/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-14010/02-part" alt="picture">
<!-- attachment="02-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14011.php">ananda.mudar_at_[hidden]: "Re: [OMPI users] users Digest, Vol 1658, Issue 2"</a>
<li><strong>Previous message:</strong> <a href="14009.php">Cristobal Navarro: "Re: [OMPI users] problem with .bashrc stetting of openmpi"</a>
<li><strong>In reply to:</strong> <a href="14008.php">sunita_at_[hidden]: "[OMPI users] problem with .bashrc stetting of openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14032.php">sunita_at_[hidden]: "Re: [OMPI users] problem with .bashrc stetting of openmpi"</a>
<li><strong>Reply:</strong> <a href="14032.php">sunita_at_[hidden]: "Re: [OMPI users] problem with .bashrc stetting of openmpi"</a>
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
