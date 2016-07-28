<?
$subject_val = "Re: [OMPI users] problems with hostfile when doing MPMD";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Apr 13 19:13:57 2008" -->
<!-- isoreceived="20080413231357" -->
<!-- sent="Sun, 13 Apr 2008 17:13:14 -0600" -->
<!-- isosent="20080413231314" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problems with hostfile when doing MPMD" -->
<!-- id="C427EFAA.4D44%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-13 19:13:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5389.php">Ralph Castain: "Re: [OMPI users] problems with hostfile when doing MPMD"</a>
<li><strong>Previous message:</strong> <a href="5387.php">&#197;ke Sandgren: "Re: [OMPI users] Problems using Intel MKL with OpenMPI and	Pathscale"</a>
<li><strong>In reply to:</strong> <a href="5356.php">jody: "[OMPI users] problems with hostfile when doing MPMD"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jody
<br>
<p>Simple answer - the 1.2.x series does not support multiple hostfiles. I
<br>
believe you will find that documented in the FAQ section.
<br>
<p>What you have to do here is have -one- hostfile that includes all the hosts,
<br>
and then -host each app-context to indicate which of those hosts are to be
<br>
used for that specific app-context.
<br>
<p>Or you can just use -host for each app_context, with no hostfile specified.
<br>
<p>If you specify a hostfile and -host, then -all- the nodes listed in your
<br>
-host's must be in the hostfile or we will error out.
<br>
<p>This will change in 1.3 where we will support a separate hostfile for each
<br>
app_context, as well as one for the entire job, in combination with -host
<br>
args as well. You can see that documented on the open-mpi wiki.
<br>
<p>Hope that helps
<br>
Ralph
<br>
<p><p>On 4/10/08 4:40 AM, &quot;jody&quot; &lt;jody.xha_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; HI
</span><br>
<span class="quotelev1">&gt; In my network i have some 32 bit machines and some 64 bit machines.
</span><br>
<span class="quotelev1">&gt; With --host i successfully call my application:
</span><br>
<span class="quotelev1">&gt;   mpirun -np 3 --host aim-plankton -x DISPLAY ./run_gdb.sh ./MPITest :
</span><br>
<span class="quotelev1">&gt; -np 3 --host aim-fanta4 -x DISPLAY ./run_gdb.sh ./MPITest64
</span><br>
<span class="quotelev1">&gt; (MPITest64 has the same code as MPITest, but was compiled on the 64
</span><br>
<span class="quotelev1">&gt; bit machine)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But when i use hostfiles:
</span><br>
<span class="quotelev1">&gt;   mpirun -np 3 --hostfile hosts32 -x DISPLAY ./run_gdb.sh ./MPITest :
</span><br>
<span class="quotelev1">&gt; -np 3 --hostfile hosts64 -x DISPLAY ./run_gdb.sh ./MPITest64
</span><br>
<span class="quotelev1">&gt; all 6 processes are started on the 64 bit machine aim-fanta4.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; hosts32:
</span><br>
<span class="quotelev1">&gt;    aim-plankton slots=3
</span><br>
<span class="quotelev1">&gt; hosts64
</span><br>
<span class="quotelev1">&gt;   aim-fanta4 slots
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is this a bug or a feature?  ;)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jody
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
<li><strong>Next message:</strong> <a href="5389.php">Ralph Castain: "Re: [OMPI users] problems with hostfile when doing MPMD"</a>
<li><strong>Previous message:</strong> <a href="5387.php">&#197;ke Sandgren: "Re: [OMPI users] Problems using Intel MKL with OpenMPI and	Pathscale"</a>
<li><strong>In reply to:</strong> <a href="5356.php">jody: "[OMPI users] problems with hostfile when doing MPMD"</a>
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
