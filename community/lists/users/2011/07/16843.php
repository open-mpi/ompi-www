<?
$subject_val = "Re: [OMPI users] a question about mpirun";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul  7 03:09:02 2011" -->
<!-- isoreceived="20110707070902" -->
<!-- sent="Thu, 7 Jul 2011 09:08:54 +0200" -->
<!-- isosent="20110707070854" -->
<!-- name="jody" -->
<!-- email="jody.xha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] a question about mpirun" -->
<!-- id="CAKbzMGe+=3VtibthwCDemO95M=3D8e-p2g51zD5pUcGPXEVsww_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="201107071444220719467_at_163.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] a question about mpirun<br>
<strong>From:</strong> jody (<em>jody.xha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-07 03:08:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16844.php">Reuti: "Re: [OMPI users] Error using hostfile"</a>
<li><strong>Previous message:</strong> <a href="16842.php">zhuangchao: "[OMPI users] a question about mpirun"</a>
<li><strong>In reply to:</strong> <a href="16842.php">zhuangchao: "[OMPI users] a question about mpirun"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
<p>It seems that you have mixed an &quot;old&quot; LAM-MPI installation with OpenMPI.
<br>
<p><p>To make sure your OpenMPI installation is ok you could try to use the
<br>
complete path to mpirun:
<br>
&nbsp;&nbsp;/data1/cluster/openmpi/bin/mpirun -np 1  /tmp/openmpi-1.4.3/examples/ring_c
<br>
<p>You should also make sure that the compile-command is the one of
<br>
OpenMPI and not of LAM MPI.
<br>
( /data1/cluster/openmpi/bin/mpiCC or     something like that)
<br>
<p>Check your PATH environment variable to make sure it doesn't contain
<br>
any of  the LAM MPI directories,
<br>
and make sure you set the LD_LIBRARY_PATH variable correctly (see
<br>
<a href="http://www.open-mpi.org/faq/?category=running#run-prereqs">http://www.open-mpi.org/faq/?category=running#run-prereqs</a>)
<br>
<p>Hope this helps
<br>
&nbsp;&nbsp;Jody
<br>
<p><p>On Thu, Jul 7, 2011 at 8:44 AM, zhuangchao &lt;freeoser_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; hello all :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160; I&#160; installed&#160; the openmpi-1.4.3&#160; on redhat as the following step :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160; 1.&#160; ./configure&#160;&#160;--prefix=/data1/cluster/openmpi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160; 2.&#160; make
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160; 3.&#160; make&#160; install
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;And &#160;I&#160;&#160; compiled&#160; the&#160; examples&#160; of&#160; openmpi-1.4.3&#160; as the following
</span><br>
<span class="quotelev1">&gt; step :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160; 1. make
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160; Then&#160; I&#160;&#160; run&#160;&#160; the example :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; ./mpirun&#160;&#160;-np&#160;1&#160;&#160;/tmp/openmpi-1.4.3/examples/ring_c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160; I&#160;&#160;get&#160; the following&#160; error :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It&#160;seems&#160;that&#160;there&#160;is&#160;no&#160;lamd&#160;running&#160;on&#160;the&#160;host&#160;node1.
</span><br>
<span class="quotelev1">&gt; This&#160;indicates&#160;that&#160;the&#160;LAM/MPI&#160;runtime&#160;environment&#160;is&#160;not&#160;operating.
</span><br>
<span class="quotelev1">&gt; The&#160;LAM/MPI&#160;runtime&#160;environment&#160;is&#160;necessary&#160;for&#160;MPI&#160;programs&#160;to&#160;run
</span><br>
<span class="quotelev1">&gt; (the&#160;MPI&#160;program&#160;tired&#160;to&#160;invoke&#160;the&#160;&quot;MPI_Init&quot;&#160;function).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please&#160;run&#160;the&#160;&quot;lamboot&quot;&#160;command&#160;the&#160;start&#160;the&#160;LAM/MPI&#160;runtime
</span><br>
<span class="quotelev1">&gt; environment.&#160;&#160;See&#160;the&#160;LAM/MPI&#160;documentation&#160;for&#160;how&#160;to&#160;invoke
</span><br>
<span class="quotelev1">&gt; &quot;lamboot&quot;&#160;across&#160;multiple&#160;machines.
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160; I&#160;&#160; run openmpi , but&#160;&#160;I&#160; get&#160; the error from lam-mpi .&#160; why ?
</span><br>
<span class="quotelev1">&gt; Can&#160; you&#160; help me ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;Thank you !
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16844.php">Reuti: "Re: [OMPI users] Error using hostfile"</a>
<li><strong>Previous message:</strong> <a href="16842.php">zhuangchao: "[OMPI users] a question about mpirun"</a>
<li><strong>In reply to:</strong> <a href="16842.php">zhuangchao: "[OMPI users] a question about mpirun"</a>
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
