<?
$subject_val = "Re: [OMPI users] Proper way to redirect GUI";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct  6 19:55:31 2011" -->
<!-- isoreceived="20111006235531" -->
<!-- sent="Fri, 7 Oct 2011 01:55:17 +0200" -->
<!-- isosent="20111006235517" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Proper way to redirect GUI" -->
<!-- id="D4199AFB-0330-4276-B752-6C65769DE089_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4E888300.3060506_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Proper way to redirect GUI<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-06 19:55:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17518.php">Devarshi Ghoshal: "[OMPI users] thread support in OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="17516.php">Yevgeny Kliteynik: "Re: [OMPI users] problem running with RoCE over 10GbE"</a>
<li><strong>In reply to:</strong> <a href="17489.php">Eugene Loh: "Re: [OMPI users] Proper way to redirect GUI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 02.10.2011 um 17:28 schrieb Eugene Loh:
<br>
<p><span class="quotelev1">&gt; Often you set the environment variable DISPLAY to any display you like.  Export environment variables with &quot;mpirun -x DISPLAY&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 10/2/2011 5:32 AM, Xin Tong wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I am launch a program with a GUI interface, How do i redirect the GUI to the machine i issued mpirun on ?
</span><br>
<p>Is each child generating his own GUI? I would expect to &quot;ssh -X -Y server&quot; and get the output thereto. Forwarding just DISPLAY would only work with a direct allowed connection via &quot;xhost +&quot;. As each &quot;ssh&quot; to start a slave task might get a different entry for DISPLAY otherwise, depending on the free display ports, so forwarding localhost:10.0 will most likely not work.
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; _______________________________________________
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
<li><strong>Next message:</strong> <a href="17518.php">Devarshi Ghoshal: "[OMPI users] thread support in OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="17516.php">Yevgeny Kliteynik: "Re: [OMPI users] problem running with RoCE over 10GbE"</a>
<li><strong>In reply to:</strong> <a href="17489.php">Eugene Loh: "Re: [OMPI users] Proper way to redirect GUI"</a>
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
