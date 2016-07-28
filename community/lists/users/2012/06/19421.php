<?
$subject_val = "Re: [OMPI users] seg fault with intel compiler";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun  1 11:26:50 2012" -->
<!-- isoreceived="20120601152650" -->
<!-- sent="Fri, 1 Jun 2012 09:26:46 -0600" -->
<!-- isosent="20120601152646" -->
<!-- name="Edmund Sumbar" -->
<!-- email="esumbar_at_[hidden]" -->
<!-- subject="Re: [OMPI users] seg fault with intel compiler" -->
<!-- id="CAPkgxczC2oUEsWxBrdEZmNounwQqM14U__4_bb_9NfYnfmeMHw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="E332808D-0D8A-4194-920C-65034359756D_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] seg fault with intel compiler<br>
<strong>From:</strong> Edmund Sumbar (<em>esumbar_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-01 11:26:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19422.php">Jeff Squyres: "Re: [OMPI users] Intra-node communication"</a>
<li><strong>Previous message:</strong> <a href="19420.php">Mudassar Majeed: "[OMPI users] Fw:  Intra-node communication"</a>
<li><strong>In reply to:</strong> <a href="19416.php">Jeff Squyres: "Re: [OMPI users] seg fault with intel compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19431.php">Gus Correa: "Re: [OMPI users] seg fault with intel compiler"</a>
<li><strong>Reply:</strong> <a href="19431.php">Gus Correa: "Re: [OMPI users] seg fault with intel compiler"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, Jun 1, 2012 at 8:09 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; It's been a loooong time since I've run under PBS, so I don't remember if
</span><br>
<span class="quotelev1">&gt; your script's environment is copied out to the remote nodes where your
</span><br>
<span class="quotelev1">&gt; application actually runs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you verify that PATH and LD_LIBRARY_PATH are the same on all nodes in
</span><br>
<span class="quotelev1">&gt; your PBS allocation after you module load?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I compiled the following program and invoked it with &quot;mpiexec -bynode
<br>
./test-env&quot; in a PBS script.
<br>
<p>#include &quot;mpi.h&quot;
<br>
#include &lt;stdio.h&gt;
<br>
#include &lt;string.h&gt;
<br>
#include &lt;stdlib.h&gt;
<br>
<p>int main (int argc, char *argv[])
<br>
{
<br>
&nbsp;&nbsp;int i, rank, size, namelen;
<br>
&nbsp;&nbsp;MPI_Status stat;
<br>
<p>&nbsp;&nbsp;MPI_Init (&amp;argc, &amp;argv);
<br>
<p>&nbsp;&nbsp;MPI_Comm_size (MPI_COMM_WORLD, &amp;size);
<br>
&nbsp;&nbsp;MPI_Comm_rank (MPI_COMM_WORLD, &amp;rank);
<br>
<p>&nbsp;&nbsp;printf(&quot;rank: %d: ld_library_path: %s\n&quot;, rank,
<br>
getenv(&quot;LD_LIBRARY_PATH&quot;));
<br>
<p>&nbsp;&nbsp;MPI_Finalize ();
<br>
<p>&nbsp;&nbsp;return (0);
<br>
}
<br>
<p>I submitted the script with &quot;qsub -l procs=24 job.pbs&quot;, and got
<br>
<p>rank: 4: ld_library_path:
<br>
/lustre/jasper/software/openmpi/openmpi-1.6-intel/lib:/lustre/jasper/software/intel//l_ics_2012.0.032/composer_xe_2011_sp1.6.233/ipp/lib/intel64:/lustre/jasper/software/intel//l_ics_2012.0.032/composer_xe_2011_sp1.6.233/mkl/lib/intel64:/lustre/jasper/software/intel//l_ics_2012.0.032/composer_xe_2011_sp1.6.233/compiler/lib/intel64:/lustre/jasper/software/intel//l_ics_2012.0.032/composer_xe_2011_sp1.6.233/tbb/lib/intel64:/home/esumbar/local/lib:/usr/lib/jvm/jre-1.6.0-sun/lib/amd64/server:/usr/lib/jvm/jre-1.6.0-sun/lib/amd64:/opt/sgi/sgimc/lib:/lustre/jasper/software/intel//l_ics_2012.0.032/composer_xe_2011_sp1.6.233/debugger/lib/intel64:/lustre/jasper/software/intel//l_ics_2012.0.032/composer_xe_2011_sp1.6.233/mpirt/lib/intel64
<br>
<p>rank: 3: ld_library_path:
<br>
/lustre/jasper/software/openmpi/openmpi-1.6-intel/lib:/lustre/jasper/software/intel//l_ics_2012.0.032/composer_xe_2011_sp1.6.233/ipp/lib/intel64:/lustre/jasper/software/intel//l_ics_2012.0.032/composer_xe_2011_sp1.6.233/mkl/lib/intel64:/lustre/jasper/software/intel//l_ics_2012.0.032/composer_xe_2011_sp1.6.233/compiler/lib/intel64:/lustre/jasper/software/intel//l_ics_2012.0.032/composer_xe_2011_sp1.6.233/tbb/lib/intel64:/home/esumbar/local/lib:/usr/lib/jvm/jre-1.6.0-sun/lib/amd64/server:/usr/lib/jvm/jre-1.6.0-sun/lib/amd64:/opt/sgi/sgimc/lib:/lustre/jasper/software/intel//l_ics_2012.0.032/composer_xe_2011_sp1.6.233/debugger/lib/intel64:/lustre/jasper/software/intel//l_ics_2012.0.032/composer_xe_2011_sp1.6.233/mpirt/lib/intel64
<br>
<p>...more of the same...
<br>
<p>When I submitted it with -l procs=48, I got
<br>
<p>[cl2n004:11617] *** Process received signal ***
<br>
[cl2n004:11617] Signal: Segmentation fault (11)
<br>
[cl2n004:11617] Signal code: Address not mapped (1)
<br>
[cl2n004:11617] Failing at address: 0x10
<br>
[cl2n004:11617] [ 0] /lib64/libpthread.so.0 [0x376ca0ebe0]
<br>
[cl2n004:11617] [ 1]
<br>
/lustre/jasper/software/openmpi/openmpi-1.6-intel/lib/libmpi.so.1(opal_memory_ptmalloc2_int_malloc+0x4b3)
<br>
[0x2af788a98113]
<br>
[cl2n004:11617] [ 2]
<br>
/lustre/jasper/software/openmpi/openmpi-1.6-intel/lib/libmpi.so.1(opal_memory_ptmalloc2_malloc+0x59)
<br>
[0x2af788a9a8a9]
<br>
[cl2n004:11617] [ 3]
<br>
/lustre/jasper/software/openmpi/openmpi-1.6-intel/lib/libmpi.so.1
<br>
[0x2af788a9a596]
<br>
[cl2n004:11617] [ 4]
<br>
/lustre/jasper/software/openmpi/openmpi-1.6-intel/lib/openmpi/mca_btl_openib.so
<br>
[0x2af78c916654]
<br>
[cl2n004:11617] [ 5] /lib64/libpthread.so.0 [0x376ca0677d]
<br>
[cl2n004:11617] [ 6] /lib64/libc.so.6(clone+0x6d) [0x376bed325d]
<br>
[cl2n004:11617] *** End of error message ***
<br>
--------------------------------------------------------------------------
<br>
mpiexec noticed that process rank 4 with PID 11617 on node cl2n004 exited
<br>
on signal 11 (Segmentation fault).
<br>
--------------------------------------------------------------------------
<br>
<p>It seems that failures happen for arbitrary reasons. When I added a line in
<br>
the PBS script to print out the node allocation, the procs=24 case failed,
<br>
but then it worked a few seconds later, with the same list of allocated
<br>
nodes. So there's definitely something amiss with the cluster, although I
<br>
wouldn't know where to start investigating. Perhaps there is a
<br>
pre-installed OMPI somewhere that's interfering, but I'm doubtful.
<br>
<p>By the way, thanks for all the support.
<br>
<p><pre>
-- 
Edmund Sumbar
University of Alberta
+1 780 492 9360
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19421/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19422.php">Jeff Squyres: "Re: [OMPI users] Intra-node communication"</a>
<li><strong>Previous message:</strong> <a href="19420.php">Mudassar Majeed: "[OMPI users] Fw:  Intra-node communication"</a>
<li><strong>In reply to:</strong> <a href="19416.php">Jeff Squyres: "Re: [OMPI users] seg fault with intel compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19431.php">Gus Correa: "Re: [OMPI users] seg fault with intel compiler"</a>
<li><strong>Reply:</strong> <a href="19431.php">Gus Correa: "Re: [OMPI users] seg fault with intel compiler"</a>
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
