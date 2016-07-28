<?
$subject_val = "Re: [OMPI users] Pointers for understanding failure messages on NetBSD";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  8 19:29:26 2009" -->
<!-- isoreceived="20091209002926" -->
<!-- sent="Wed, 9 Dec 2009 13:29:09 +1300" -->
<!-- isosent="20091209002909" -->
<!-- name="Kevin.Buckley_at_[hidden]" -->
<!-- email="Kevin.Buckley_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Pointers for understanding failure messages on NetBSD" -->
<!-- id="e33c4abf3877e647009247664489b2a9.squirrel_at_mail.ecs.vuw.ac.nz" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="04bd4ebe58341a8a2a55927367dba6cc.squirrel_at_mail.ecs.vuw.ac.nz" -->
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
<strong>Subject:</strong> Re: [OMPI users] Pointers for understanding failure messages on NetBSD<br>
<strong>From:</strong> <a href="mailto:Kevin.Buckley_at_[hidden]?Subject=Re:%20[OMPI%20users]%20Pointers%20for%20understanding%20failure%20messages%20on%20NetBSD"><em>Kevin.Buckley_at_[hidden]</em></a><br>
<strong>Date:</strong> 2009-12-08 19:29:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11464.php">Gus Correa: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)"</a>
<li><strong>Previous message:</strong> <a href="11462.php">Matthew MacManes: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)"</a>
<li><strong>In reply to:</strong> <a href="11459.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11465.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
OK, it works although there are some temporary errors.
<br>
<p>This is the NetBSD wip openmpi package as downloaded from the
<br>
webCVS a couple of days ago but with my patches as detailed
<br>
before (I have not tried comparing yours with mine as yet)
<br>
and the removal of the compilation and install of the Vampire
<br>
Tracing stuff at the config stage, via the previously detailed
<br>
change to the NetBSD package's Makefile.
<br>
<p><p>% cat my_mpirun_job.sh
<br>
#!/bin/sh
<br>
#
<br>
#$ -wd /vol/grid/sgeusers/kingstlind/SGE-MPI
<br>
#$ -S /bin/sh
<br>
#
<br>
/usr/pkg/bin/mpirun -n $NSLOTS /vol/grid/sgeusers/kingstlind/SGE-MPI/hello_c
<br>
<p><p>% qsub -pe kmbmpi 4 my_mpirun_job.sh
<br>
<p><p>% qstat -f
<br>
kmbmpi.q_at_[hidden]  BIP   0/1/1          0.02     nbsd-i386
<br>
&nbsp;419972 0.60500 my_mpirun_ kingstlind   r     12/09/2009 13:10:39     1
<br>
-------------------------------------------------------------------------------
<br>
kmbmpi.q_at_kipp-cafe.ecs.vuw.ac. BIP   0/1/1          0.03     nbsd-i386
<br>
&nbsp;419972 0.60500 my_mpirun_ kingstlind   r     12/09/2009 13:10:39     1
<br>
-------------------------------------------------------------------------------
<br>
kmbmpi.q_at_[hidden] BIP   0/1/1          0.02     nbsd-i386
<br>
&nbsp;419972 0.60500 my_mpirun_ kingstlind   r     12/09/2009 13:10:39     1
<br>
-------------------------------------------------------------------------------
<br>
kmbmpi.q_at_[hidden] BIP   0/1/1          0.05     nbsd-i386
<br>
&nbsp;419972 0.60500 my_mpirun_ kingstlind   r     12/09/2009 13:10:39     1
<br>
<p>% ls -ltr
<br>
-rw-r--r--  1 kingstlind  grid       0 Dec  9 13:10 my_mpirun_job.sh.po419972
<br>
-rw-r--r--  1 kingstlind  grid       0 Dec  9 13:10 my_mpirun_job.sh.pe419972
<br>
-rw-r--r--  1 kingstlind  grid     207 Dec  9 13:10 my_mpirun_job.sh.o419972
<br>
-rw-r--r--  1 kingstlind  grid     615 Dec  9 13:10 my_mpirun_job.sh.e419972
<br>
<p>% cat my_mpirun_job.sh.o419972
<br>
Hello world, I am 0 of 4 on kipp-cafe.ecs.vuw.ac.nz
<br>
Hello world, I am 2 of 4 on old-bailey.ecs.vuw.ac.nz
<br>
Hello world, I am 3 of 4 on matterhorn.ecs.vuw.ac.nz
<br>
Hello world, I am 1 of 4 on citron.ecs.vuw.ac.nz
<br>
<p><p>% cat my_mpirun_job.sh.e419972
<br>
[kipp-cafe.ecs.vuw.ac.nz:02387] opal_sockaddr2str failed:Temporary failure
<br>
in name resolution (return code 4)
<br>
[old-bailey.ecs.vuw.ac.nz:03279] opal_sockaddr2str failed:Temporary
<br>
failure in name resolution (return code 4)
<br>
[matterhorn.ecs.vuw.ac.nz:02443] opal_sockaddr2str failed:Temporary
<br>
failure in name resolution (return code 4)
<br>
[old-bailey.ecs.vuw.ac.nz:03279] opal_sockaddr2str failed:Unknown error
<br>
(return code 4)
<br>
[matterhorn.ecs.vuw.ac.nz:02443] opal_sockaddr2str failed:Unknown error
<br>
(return code 4)
<br>
[citron.ecs.vuw.ac.nz:02011] opal_sockaddr2str failed:Temporary failure in
<br>
name resolution (return code 4)
<br>
<p><p>Oddly enough, those were the non-fatal errors I was seeing for a
<br>
single machine MPI job that got me started on all this and so the
<br>
wheel has seemingly come full circle, albeit having moved forward,
<br>
by a circumference's length!
<br>
<p>But anyroad, by my reckoning, an OpenMPI job is running, under SGE,
<br>
on NetBSD.
<br>
<p>Just need to tidy up the loose ends and patch for OpenMPI 1.4 which
<br>
I see is just out.
<br>
<p>Kevin
<br>
<p><pre>
-- 
Kevin M. Buckley                                  Room:  CO327
School of Engineering and                         Phone: +64 4 463 5971
 Computer Science
Victoria University of Wellington
New Zealand
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11464.php">Gus Correa: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)"</a>
<li><strong>Previous message:</strong> <a href="11462.php">Matthew MacManes: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)"</a>
<li><strong>In reply to:</strong> <a href="11459.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11465.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
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
