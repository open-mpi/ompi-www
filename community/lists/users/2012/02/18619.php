<?
$subject_val = "Re: [OMPI users] ssh between nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 29 16:16:27 2012" -->
<!-- isoreceived="20120229211627" -->
<!-- sent="Wed, 29 Feb 2012 13:16:21 -0800" -->
<!-- isosent="20120229211621" -->
<!-- name="Randall Svancara" -->
<!-- email="rsvancara_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ssh between nodes" -->
<!-- id="CALYD9gL4BV7gk-FnB=SK9YM5MBU90xzfk-KfZf_1qfrNikF3cQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="2190BA584788164982F798330F63AC4042C3EC1D_at_mb03.aggies.usu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] ssh between nodes<br>
<strong>From:</strong> Randall Svancara (<em>rsvancara_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-29 16:16:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18620.php">Lloyd Brown: "Re: [OMPI users] ssh between nodes"</a>
<li><strong>Previous message:</strong> <a href="18618.php">Denver Smith: "[OMPI users] ssh between nodes"</a>
<li><strong>In reply to:</strong> <a href="18618.php">Denver Smith: "[OMPI users] ssh between nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18620.php">Lloyd Brown: "Re: [OMPI users] ssh between nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Depends on which launcher you are using.  My understanding is that you can
<br>
use torque to launch the MPI processes on remote nodes, but you must
<br>
compile this support into OpenMPI.  Please, someone correct me if I am
<br>
wrong.
<br>
<p>For most clusters I work with and manage, we use passwordless keys.  The
<br>
reason is that sometimes MPI implementations, like those provided by many
<br>
vendords do not supply the requisite functionality to integrate with
<br>
Torque, such as the Intel's OpenMPI tools or Comsol's bundled MPI
<br>
implementation as an example.
<br>
<p>So really, it boils down to your needs.
<br>
<p>Thanks
<br>
<p>Randall
<br>
<p>On Wed, Feb 29, 2012 at 1:09 PM, Denver Smith &lt;denver.smith_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  On my cluster running moab and torque, I cannot ssh without a password
</span><br>
<span class="quotelev1">&gt; between compute nodes. I can however request multiple node jobs fine. I was
</span><br>
<span class="quotelev1">&gt; wondering if passwordless ssh keys need to be set up between compute nodes
</span><br>
<span class="quotelev1">&gt; in order for mpi applications to run correctly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Thanks
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
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Randall Svancara
Know Your Linux? &lt;<a href="http://www.knowyourlinux.com/">http://www.knowyourlinux.com/</a>&gt;
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18619/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18620.php">Lloyd Brown: "Re: [OMPI users] ssh between nodes"</a>
<li><strong>Previous message:</strong> <a href="18618.php">Denver Smith: "[OMPI users] ssh between nodes"</a>
<li><strong>In reply to:</strong> <a href="18618.php">Denver Smith: "[OMPI users] ssh between nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18620.php">Lloyd Brown: "Re: [OMPI users] ssh between nodes"</a>
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
