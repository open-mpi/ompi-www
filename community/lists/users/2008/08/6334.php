<?
$subject_val = "Re: [OMPI users] MPI_ERR_TRUNCATE with MPI_Revc without Infinipath";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 13 11:49:09 2008" -->
<!-- isoreceived="20080813154909" -->
<!-- sent="Wed, 13 Aug 2008 08:49:04 -0700 (PDT)" -->
<!-- isosent="20080813154904" -->
<!-- name="Tom Riddle" -->
<!-- email="rarebitusa_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_ERR_TRUNCATE with MPI_Revc without Infinipath" -->
<!-- id="813061.14526.qm_at_web55407.mail.re4.yahoo.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] MPI_ERR_TRUNCATE with MPI_Revc without Infinipath" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_ERR_TRUNCATE with MPI_Revc without Infinipath<br>
<strong>From:</strong> Tom Riddle (<em>rarebitusa_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-13 11:49:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6335.php">Ron Brightwell: "Re: [OMPI users] SM btl slows down bandwidth?"</a>
<li><strong>Previous message:</strong> <a href="6333.php">Jeff Squyres: "Re: [OMPI users] SM btl slows down bandwidth?"</a>
<li><strong>Maybe in reply to:</strong> <a href="6316.php">Tom Riddle: "[OMPI users] MPI_ERR_TRUNCATE with MPI_Revc without Infinipath"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6372.php">George Bosilca: "Re: [OMPI users] MPI_ERR_TRUNCATE with MPI_Revc without Infinipath"</a>
<li><strong>Reply:</strong> <a href="6372.php">George Bosilca: "Re: [OMPI users] MPI_ERR_TRUNCATE with MPI_Revc without Infinipath"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, 
<br>
<p>A bit more info wrt the question below. I have run other releases of OpenMPI and they seem to be fine. The reason I need to run the latest is because it supports valgrind fully.
<br>
<p>openmpi-1.2.4
<br>
openmpi-1.3ar18303
<br>
<p>TIA, Tom
<br>
<p>--- On Tue, 8/12/08, Tom Riddle &lt;rarebitusa_at_[hidden]&gt; wrote:
<br>
<p>Hi,
<br>
<p>I am getting a curious error on a simple communications test. I have altered the std mvapich osu_latency test to accept receives from any source and I get the following error
<br>
<p>[d013.sc.net:15455] *** An error occurred in MPI_Recv
<br>
[d013.sc.net:15455] *** on communicator MPI_COMM_WORLD
<br>
[d013.sc.net:15455] *** MPI_ERR_TRUNCATE: message truncated
<br>
[d013.sc.net:15455] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
<p>the code change was...
<br>
<p>&#160;MPI_Recv(r_buf, size, MPI_CHAR, MPI_ANY_SOURCE, 1, MPI_COMM_WORLD, &amp;reqstat);
<br>
<p>the command line I run was
<br>
<p><span class="quotelev1">&gt; mpirun -np 2 ./osu_latency
</span><br>
<p>Now I run this on 2 types of host machine configurations. One that has Infinipath HCAs&#160; installed and another that doesn't. I run both of these in shared memory mode ie: dual processes on the same node. I have verified that when I am on
<br>
&nbsp;the host with Infinipath I am actually running the OpenMPI mpirun, not the mpi that comes with the HCA.
<br>
<p>I have built OpenMPI with psm support from a fairly recent svn pull and run the same bins on both host machines... The config was as follows:
<br>
<span class="quotelev1">&gt; $ ../configure --prefix=/opt/wkspace/openmpi-1.3 CC=gcc CXX=g++ 
</span><br>
<span class="quotelev1">&gt; --disable-mpi-f77 --enable-debug --enable-memchecker 
</span><br>
<span class="quotelev1">&gt; --with-psm=/usr/include --with-valgrind=/opt/wkspace/valgrind-3.3.0/
</span><br>
<span class="quotelev1">&gt; mpirun --version
</span><br>
mpirun (Open MPI) 1.4a1r18908
<br>
<p>The error presents itself only on the host that does not have Infinipath installed. I have combed through the mca args to see if there is a setting I am missing but I cannot see anything obvious. 
<br>
<p>Any input would be appreciated. Thanks. Tom
<br>
<p><p><p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


      
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6334/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6335.php">Ron Brightwell: "Re: [OMPI users] SM btl slows down bandwidth?"</a>
<li><strong>Previous message:</strong> <a href="6333.php">Jeff Squyres: "Re: [OMPI users] SM btl slows down bandwidth?"</a>
<li><strong>Maybe in reply to:</strong> <a href="6316.php">Tom Riddle: "[OMPI users] MPI_ERR_TRUNCATE with MPI_Revc without Infinipath"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6372.php">George Bosilca: "Re: [OMPI users] MPI_ERR_TRUNCATE with MPI_Revc without Infinipath"</a>
<li><strong>Reply:</strong> <a href="6372.php">George Bosilca: "Re: [OMPI users] MPI_ERR_TRUNCATE with MPI_Revc without Infinipath"</a>
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
