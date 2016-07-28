<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Sep 18 18:10:27 2006" -->
<!-- isoreceived="20060918221027" -->
<!-- sent="Mon, 18 Sep 2006 17:10:19 -0500" -->
<!-- isosent="20060918221019" -->
<!-- name="Jeffrey M Ceason" -->
<!-- email="ceason_at_[hidden]" -->
<!-- subject="[OMPI users] Mpirun no output without --debug-daemons flag" -->
<!-- id="OF3F9CD009.765D2C11-ON862571ED.0077BD62-862571ED.0079CC14_at_us.ibm.com" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Jeffrey M Ceason (<em>ceason_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-09-18 18:10:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1883.php">Renato Golin: "[OMPI users] Boost bindings to MPI"</a>
<li><strong>Previous message:</strong> <a href="1881.php">Brian Barrett: "Re: [OMPI users] linux alpha ev6 openmpi 1.1.1"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Folks!
<br>
<p>I am cross-compiling and using the Open-MPI on the Cell SDK 1.1 simulator.
<br>
<p>Here is my config log.
<br>
<p><p><p>When I try to use mpirun I get no output with or without --verbose.  If I 
<br>
use --debug I run into a different bug that trys to malloc 1.5GB?? 
<br>
Anyhoo.. here is some output.
<br>
[root@(none) ~]# mpirun --verbose -np 1 mpihello
<br>
&lt;nothing happens&gt;
<br>
<p>When I use the --debug-daemons flag is seems to work.
<br>
<p>[root@(none) ~]# mpirun --debug-daemons  -np 1 mpihello
<br>
My rank 0 of 1
<br>
[root@(none) ~]# 
<br>
<p>mpihello is a super simple test program.
<br>
Compiled with:
<br>
/opt/sce/toolchain-3.2/ppu/bin/ppu32-gcc -m32 -mabi=altivec -maltivec 
<br>
-I/usr/local/ppu-openmpi/include -L/usr/local/ppu-openmpi/lib  mpihello.c 
<br>
-o mpihello -pthread -L/usr/local/ppu-openmpi/lib -lmpi -lorte -lopal -ldl 
<br>
-Wl,--export-dynamic -lnsl -lutil -lm -ld
<br>
<p>#include &lt;stdio.h&gt;
<br>
#include &lt;mpi.h&gt;
<br>
<p>int main (int argc,char **argv) {
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int ierr = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int rank;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int np;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ierr = MPI_Init(&amp;argc,&amp;argv);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ierr = MPI_Comm_size(MPI_COMM_WORLD,&amp;np);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ierr = MPI_Comm_rank(MPI_COMM_WORLD,&amp;rank);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;My rank %d of %d\n&quot;,rank,np);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return ierr;
<br>
}
<br>
<p><p>Any ideas where to look?  I know the Cell simulator isn't a standard env. 
<br>
but any info on the --debug-daemons command will be helpful.
<br>
<p><p>Jeff  Ceason 
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Internet ceason_at_[hidden]
<br>

<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1882/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1882/config.log.gz">config.log.gz</a>
</ul>
<!-- attachment="config.log.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1883.php">Renato Golin: "[OMPI users] Boost bindings to MPI"</a>
<li><strong>Previous message:</strong> <a href="1881.php">Brian Barrett: "Re: [OMPI users] linux alpha ev6 openmpi 1.1.1"</a>
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
