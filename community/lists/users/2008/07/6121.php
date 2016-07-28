<?
$subject_val = "Re: [OMPI users] Can't use tcp instead of openib/infinipath";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 23 17:36:00 2008" -->
<!-- isoreceived="20080723213600" -->
<!-- sent="Wed, 23 Jul 2008 14:35:34 -0700" -->
<!-- isosent="20080723213534" -->
<!-- name="Bill Broadley" -->
<!-- email="bill_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Can't use tcp instead of openib/infinipath" -->
<!-- id="4887A426.6000708_at_cse.ucdavis.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="48611D34-C8AF-4910-BD06-64C5BCCB6952_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Can't use tcp instead of openib/infinipath<br>
<strong>From:</strong> Bill Broadley (<em>bill_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-23 17:35:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6122.php">Jeff Squyres: "Re: [OMPI users] Can't use tcp instead of openib/infinipath"</a>
<li><strong>Previous message:</strong> <a href="6120.php">Jeff Squyres: "Re: [OMPI users] runtime warnings with MPI_File_write_ordered"</a>
<li><strong>In reply to:</strong> <a href="6118.php">Jeff Squyres: "Re: [OMPI users] Can't use tcp instead of openib/infinipath"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6122.php">Jeff Squyres: "Re: [OMPI users] Can't use tcp instead of openib/infinipath"</a>
<li><strong>Reply:</strong> <a href="6122.php">Jeff Squyres: "Re: [OMPI users] Can't use tcp instead of openib/infinipath"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Sorry for the delay in replying.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What exactly is the relay program timing?  Can you run a standard 
</span><br>
<span class="quotelev1">&gt; benchmark like NetPIPE, perchance?  (<a href="http://www.scl.ameslab.gov/netpipe/">http://www.scl.ameslab.gov/netpipe/</a>)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>It gives very similar numbers to osu_latency.  Turns out the mca btl seems to 
<br>
be completely ignored, I.e.:
<br>
[bill_at_compute-0-0 relay]$ mpirun -np 2 -mca btl foo -machinefile m ./relay 1
<br>
compute-0-0.local compute-0-1.local
<br>
size=    1, 131072 hops, 2 nodes in  0.266 sec ( 2.027 us/hop)   1928 KB/sec
<br>
<p>Or:
<br>
mpirun -np 2 -mca btl foo -machinefile m \ 
<br>
/usr/mpi/gcc/openmpi-1.2.6/tests/osu_benchmarks-3.0/osu_bw
<br>
# OSU MPI Bandwidth Test v3.0
<br>
# Size        Bandwidth (MB/s)
<br>
1                         2.40
<br>
...
<br>
<p>My understanding is that -mca btl foo should fail since there isn't a 
<br>
transport layer called foo.
<br>
<p>[bill_at_compute-0-0 relay]$ which mpirun
<br>
/usr/mpi/gcc/openmpi-1.2.6/bin/mpirun
<br>
<p>ldd ./relay
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libm.so.6 =&gt; /lib64/libm.so.6 (0x00002aaaaacc7000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libmpi.so.0 =&gt; /usr/mpi/gcc/openmpi-1.2.6/lib64/libmpi.so.0 (0x00002aaaaaf4a000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libopen-rte.so.0 =&gt; /usr/mpi/gcc/openmpi-1.2.6/lib64/libopen-rte.so.0 
<br>
(0x00002aaaab1d8000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libopen-pal.so.0 =&gt; /usr/mpi/gcc/openmpi-1.2.6/lib64/libopen-pal.so.0 
<br>
(0x00002aaaab433000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libdl.so.2 =&gt; /lib64/libdl.so.2 (0x00002aaaab692000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libnsl.so.1 =&gt; /lib64/libnsl.so.1 (0x00002aaaab896000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libutil.so.1 =&gt; /lib64/libutil.so.1 (0x00002aaaabaaf000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libpthread.so.0 =&gt; /lib64/libpthread.so.0 (0x00002aaaabcb2000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libc.so.6 =&gt; /lib64/libc.so.6 (0x00002aaaabecc000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/lib64/ld-linux-x86-64.so.2 (0x00002aaaaaaab000)
<br>
<p><p>So OFED-1.3.1 (or an openmpi build from source) ./install.pl works with TCP, 
<br>
but not infinipath (because of a missing psm library).  All the &quot;-mca btl&quot; 
<br>
functionality works as expected.
<br>
<p>OFED-1.3.1 (or an openmpi build from source) when I add &quot;--with-psm&quot; works 
<br>
with infinipath, but all -mca parameters are ignored.  Is there a way to get 
<br>
openmpi working with infinipath without the psm library?  Or a suggestion on 
<br>
how to get the -mca functionality working?
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6122.php">Jeff Squyres: "Re: [OMPI users] Can't use tcp instead of openib/infinipath"</a>
<li><strong>Previous message:</strong> <a href="6120.php">Jeff Squyres: "Re: [OMPI users] runtime warnings with MPI_File_write_ordered"</a>
<li><strong>In reply to:</strong> <a href="6118.php">Jeff Squyres: "Re: [OMPI users] Can't use tcp instead of openib/infinipath"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6122.php">Jeff Squyres: "Re: [OMPI users] Can't use tcp instead of openib/infinipath"</a>
<li><strong>Reply:</strong> <a href="6122.php">Jeff Squyres: "Re: [OMPI users] Can't use tcp instead of openib/infinipath"</a>
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
