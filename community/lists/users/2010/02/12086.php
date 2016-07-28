<?
$subject_val = "Re: [OMPI users] Bad Infiniband latency with subounce";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 15 22:18:57 2010" -->
<!-- isoreceived="20100216031857" -->
<!-- sent="Mon, 15 Feb 2010 20:18:48 -0700" -->
<!-- isosent="20100216031848" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Bad Infiniband latency with subounce" -->
<!-- id="A27B1D4F-8675-48AD-ADCF-60029B330A47_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="293EA46E-5790-4C48-9EA2-B60611C85F54_at_mimectl" -->
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
<strong>Subject:</strong> Re: [OMPI users] Bad Infiniband latency with subounce<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-15 22:18:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12087.php">Terry Frankcombe: "Re: [OMPI users] Bad Infiniband latency with subounce"</a>
<li><strong>Previous message:</strong> <a href="12085.php">Repsher, Stephen J: "[OMPI users] Bad Infiniband latency with subounce"</a>
<li><strong>In reply to:</strong> <a href="12085.php">Repsher, Stephen J: "[OMPI users] Bad Infiniband latency with subounce"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12087.php">Terry Frankcombe: "Re: [OMPI users] Bad Infiniband latency with subounce"</a>
<li><strong>Reply:</strong> <a href="12087.php">Terry Frankcombe: "Re: [OMPI users] Bad Infiniband latency with subounce"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Did you run it with -mca mpi_paffinity_alone 1? Given this is 1.4.1, you can set the bindings to -bind-to-socket or -bind-to-core. Either will give you improved performance.
<br>
<p>IIRC, MVAPICH defaults to -bind-to-socket. OMPI defaults to no binding.
<br>
<p><p>On Feb 15, 2010, at 6:51 PM, Repsher, Stephen J wrote:
<br>
<p><span class="quotelev1">&gt; Hello again,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hopefully this is an easier question....
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My cluster uses Infiniband interconnects (Mellanox Infinihost III and some ConnectX).  I'm seeing terrible and sporadic latency (order ~1000 microseconds)  as measured by the subounce code (<a href="http://sourceforge.net/projects/subounce/">http://sourceforge.net/projects/subounce/</a>), but the bandwidth is as expected.  I'm used to seeing only 1-2 microseconds with MVAPICH and wondering why OpenMPI either isn't performing as well or doesn't play well with how bounce is measuring latency (by timing 0 byte messages).  I've tried to play with a few parameters with no success.  Here's how the build is configured:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; myflags=&quot;-O3 -xSSE2&quot;
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/part0/apps/MPI/intel/openmpi-1.4.1 \
</span><br>
<span class="quotelev1">&gt;            --disable-dlopen --with-wrapper-ldflags=&quot;-shared-intel&quot; \
</span><br>
<span class="quotelev1">&gt;            --enable-orterun-prefix-by-default \
</span><br>
<span class="quotelev1">&gt;            --with-openib --enable-openib-connectx-xrc --enable-openib-rdmacm \
</span><br>
<span class="quotelev1">&gt;            CC=icc CXX=icpc F77=ifort FC=ifort \
</span><br>
<span class="quotelev1">&gt;            CFLAGS=&quot;$myflags&quot; FFLAGS=&quot;$myflags&quot; CXXFLAGS=&quot;$myflags&quot; FCFLAGS=&quot;$myflags&quot; \
</span><br>
<span class="quotelev1">&gt;            OBJC=gcc OBJCFLAGS=&quot;-O3&quot;
</span><br>
<span class="quotelev1">&gt; Any ideas?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Steve
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12087.php">Terry Frankcombe: "Re: [OMPI users] Bad Infiniband latency with subounce"</a>
<li><strong>Previous message:</strong> <a href="12085.php">Repsher, Stephen J: "[OMPI users] Bad Infiniband latency with subounce"</a>
<li><strong>In reply to:</strong> <a href="12085.php">Repsher, Stephen J: "[OMPI users] Bad Infiniband latency with subounce"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12087.php">Terry Frankcombe: "Re: [OMPI users] Bad Infiniband latency with subounce"</a>
<li><strong>Reply:</strong> <a href="12087.php">Terry Frankcombe: "Re: [OMPI users] Bad Infiniband latency with subounce"</a>
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
