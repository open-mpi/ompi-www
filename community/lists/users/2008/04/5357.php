<?
$subject_val = "Re: [OMPI users] problems with hostfile when doing MPMD";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 10 07:05:15 2008" -->
<!-- isoreceived="20080410110515" -->
<!-- sent="Thu, 10 Apr 2008 13:05:10 +0200" -->
<!-- isosent="20080410110510" -->
<!-- name="jody" -->
<!-- email="jody.xha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problems with hostfile when doing MPMD" -->
<!-- id="9b0da5ce0804100405w783b26a6sb9337a3a3380979f_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="9b0da5ce0804100340u1efc64f2ofd728426558865bd_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] problems with hostfile when doing MPMD<br>
<strong>From:</strong> jody (<em>jody.xha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-10 07:05:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5358.php">jody: "Re: [OMPI users] problems with hostfile when doing MPMD"</a>
<li><strong>Previous message:</strong> <a href="5356.php">jody: "[OMPI users] problems with hostfile when doing MPMD"</a>
<li><strong>In reply to:</strong> <a href="5356.php">jody: "[OMPI users] problems with hostfile when doing MPMD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5358.php">jody: "Re: [OMPI users] problems with hostfile when doing MPMD"</a>
<li><strong>Reply:</strong> <a href="5358.php">jody: "Re: [OMPI users] problems with hostfile when doing MPMD"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
Using a more realistic application than a simple &quot;Hello, world&quot;
<br>
even the --host version doesn't work correctly
<br>
Called this way
<br>
<p>mpirun -np 3 --host aim-plankton ./QHGLauncher
<br>
--read-config=pureveg_new.cfg -o output.txt  : -np 3 --host aim-fanta4
<br>
./QHGLauncher_64 --read-config=pureveg_new.cfg -o output.txt
<br>
<p>the application starts but seems to hang after a while.
<br>
<p>Running the application in gdb:
<br>
<p>mpirun -np 3 --host aim-plankton -x DISPLAY ./run_gdb.sh ./QHGLauncher
<br>
--read-config=pureveg_new.cfg -o output.txt  : -np 3 --host aim-fanta4
<br>
-x DISPLAY ./run_gdb.sh ./QHGLauncher_64 --read-config=pureveg_new.cfg
<br>
-o bruzlopf -n 12
<br>
--seasonality=3,data/cai_temp2.clim,data/cai_precip2.clim
<br>
<p>i can see that the processes on aim-fanta4 have indeed gotten stuck
<br>
after a few initial outputs,
<br>
and the processes on aim-plankton all have a messsage:
<br>
<p>[aim-plankton][0,1,1][btl_tcp_endpoint.c:572:mca_btl_tcp_endpoint_complete_connect]
<br>
connect() failed with errno=113
<br>
<p>If i opnly use aim-plankton alone or aim-fanta4 alone everythiung runs
<br>
as expected.
<br>
<p>BTW: i'm, using open MPI 1.2.2
<br>
<p>Thanks
<br>
&nbsp;&nbsp;Jody
<br>
On Thu, Apr 10, 2008 at 12:40 PM, jody &lt;jody.xha_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; HI
</span><br>
<span class="quotelev1">&gt;  In my network i have some 32 bit machines and some 64 bit machines.
</span><br>
<span class="quotelev1">&gt;  With --host i successfully call my application:
</span><br>
<span class="quotelev1">&gt;   mpirun -np 3 --host aim-plankton -x DISPLAY ./run_gdb.sh ./MPITest :
</span><br>
<span class="quotelev1">&gt;  -np 3 --host aim-fanta4 -x DISPLAY ./run_gdb.sh ./MPITest64
</span><br>
<span class="quotelev1">&gt;  (MPITest64 has the same code as MPITest, but was compiled on the 64 bit machine)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  But when i use hostfiles:
</span><br>
<span class="quotelev1">&gt;   mpirun -np 3 --hostfile hosts32 -x DISPLAY ./run_gdb.sh ./MPITest :
</span><br>
<span class="quotelev1">&gt;  -np 3 --hostfile hosts64 -x DISPLAY ./run_gdb.sh ./MPITest64
</span><br>
<span class="quotelev1">&gt;  all 6 processes are started on the 64 bit machine aim-fanta4.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  hosts32:
</span><br>
<span class="quotelev1">&gt;    aim-plankton slots=3
</span><br>
<span class="quotelev1">&gt;  hosts64
</span><br>
<span class="quotelev1">&gt;   aim-fanta4 slots
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Is this a bug or a feature?  ;)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Jody
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5358.php">jody: "Re: [OMPI users] problems with hostfile when doing MPMD"</a>
<li><strong>Previous message:</strong> <a href="5356.php">jody: "[OMPI users] problems with hostfile when doing MPMD"</a>
<li><strong>In reply to:</strong> <a href="5356.php">jody: "[OMPI users] problems with hostfile when doing MPMD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5358.php">jody: "Re: [OMPI users] problems with hostfile when doing MPMD"</a>
<li><strong>Reply:</strong> <a href="5358.php">jody: "Re: [OMPI users] problems with hostfile when doing MPMD"</a>
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
