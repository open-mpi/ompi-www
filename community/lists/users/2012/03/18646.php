<?
$subject_val = "Re: [OMPI users] Redefine proc in cartesian topologies";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  1 14:36:56 2012" -->
<!-- isoreceived="20120301193656" -->
<!-- sent="Thu, 1 Mar 2012 17:36:51 -0200" -->
<!-- isosent="20120301193651" -->
<!-- name="Claudio Pastorino" -->
<!-- email="claudio.pastorino_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Redefine proc in cartesian topologies" -->
<!-- id="CAGZJBXQr-fxQ=ekHKS1+PzDGjYFz4tr_z5SM2OiHWWwrKz0aOA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAOf_+-WoOdeCdhFARBokFeWTfmYgCg-VjKtNesBsqi5JFuD2jw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Redefine proc in cartesian topologies<br>
<strong>From:</strong> Claudio Pastorino (<em>claudio.pastorino_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-01 14:36:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18647.php">Gustavo Correa: "Re: [OMPI users] Redefine proc in cartesian topologies"</a>
<li><strong>Previous message:</strong> <a href="18645.php">Claudio Pastorino: "Re: [OMPI users] Redefine proc in cartesian topologies"</a>
<li><strong>In reply to:</strong> <a href="18644.php">Jingcha Joba: "Re: [OMPI users] Redefine proc in cartesian topologies"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Probably yes,
<br>
do I have a more systematic way?
<br>
Thanks
<br>
Claudio
<br>
<p><p>2012/3/1, Jingcha Joba &lt;pukkimonkey_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt; mpirun -np 4 --host node1,node2,node1,node2 ./app
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is this what you want?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Mar 1, 2012 at 10:57 AM, Claudio Pastorino &lt;
</span><br>
<span class="quotelev1">&gt; claudio.pastorino_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dear all,
</span><br>
<span class="quotelev2">&gt;&gt; I apologize in advance if this is not the right list to post this. I
</span><br>
<span class="quotelev2">&gt;&gt; am a newcomer and please let me know if I should be sending this to
</span><br>
<span class="quotelev2">&gt;&gt; another list.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I program MPI trying to do HPC parallel programs. In particular I
</span><br>
<span class="quotelev2">&gt;&gt; wrote a parallel code
</span><br>
<span class="quotelev2">&gt;&gt; for molecular dynamics simulations. The program splits the work in a
</span><br>
<span class="quotelev2">&gt;&gt; matrix of procs and
</span><br>
<span class="quotelev2">&gt;&gt; I send messages along rows and columns in an equal basis. I learnt
</span><br>
<span class="quotelev2">&gt;&gt; that the typical
</span><br>
<span class="quotelev2">&gt;&gt; arrangement of  cartesian  topology is not usually  the best option,
</span><br>
<span class="quotelev2">&gt;&gt; because in a matrix, let's  say of 4x4 procs   with quad procs, the
</span><br>
<span class="quotelev2">&gt;&gt; procs are arranged so that
</span><br>
<span class="quotelev2">&gt;&gt; through columns one stays inside the same quad proc and through rows
</span><br>
<span class="quotelev2">&gt;&gt; you are always going out to the network.  This means procs are
</span><br>
<span class="quotelev2">&gt;&gt; arranged as one quad per row.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I try to explain this for a 2x2 case. The cartesian topology does this
</span><br>
<span class="quotelev2">&gt;&gt; assignment, typically:
</span><br>
<span class="quotelev2">&gt;&gt; cartesian    mpi_comm_world
</span><br>
<span class="quotelev2">&gt;&gt; 0,0 --&gt;  0
</span><br>
<span class="quotelev2">&gt;&gt; 0,1 --&gt;  1
</span><br>
<span class="quotelev2">&gt;&gt; 1,0 --&gt;  2
</span><br>
<span class="quotelev2">&gt;&gt; 1,1 --&gt;  3
</span><br>
<span class="quotelev2">&gt;&gt; The question is, how do I get a &quot;user defined&quot; assignment such as:
</span><br>
<span class="quotelev2">&gt;&gt; 0,0 --&gt;  0
</span><br>
<span class="quotelev2">&gt;&gt; 0,1 --&gt;  2
</span><br>
<span class="quotelev2">&gt;&gt; 1,0 --&gt;  1
</span><br>
<span class="quotelev2">&gt;&gt; 1,1 --&gt;  3
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks in advance and I hope to have  made this more or less
</span><br>
<span class="quotelev2">&gt;&gt; understandable.
</span><br>
<span class="quotelev2">&gt;&gt; Claudio
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18647.php">Gustavo Correa: "Re: [OMPI users] Redefine proc in cartesian topologies"</a>
<li><strong>Previous message:</strong> <a href="18645.php">Claudio Pastorino: "Re: [OMPI users] Redefine proc in cartesian topologies"</a>
<li><strong>In reply to:</strong> <a href="18644.php">Jingcha Joba: "Re: [OMPI users] Redefine proc in cartesian topologies"</a>
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
