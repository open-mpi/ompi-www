<?
$subject_val = "Re: [OMPI users] Redefine proc in cartesian topologies";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  1 14:29:15 2012" -->
<!-- isoreceived="20120301192915" -->
<!-- sent="Thu, 1 Mar 2012 11:28:51 -0800" -->
<!-- isosent="20120301192851" -->
<!-- name="Jingcha Joba" -->
<!-- email="pukkimonkey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Redefine proc in cartesian topologies" -->
<!-- id="CAOf_+-WoOdeCdhFARBokFeWTfmYgCg-VjKtNesBsqi5JFuD2jw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAGZJBXSRjXBSjWySD5obb6nWOcuNj_G74A_xvsrOu8qOuDcbzA_at_mail.gmail.com" -->
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
<strong>From:</strong> Jingcha Joba (<em>pukkimonkey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-01 14:28:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18645.php">Claudio Pastorino: "Re: [OMPI users] Redefine proc in cartesian topologies"</a>
<li><strong>Previous message:</strong> <a href="18643.php">Ralph Castain: "Re: [OMPI users] Redefine proc in cartesian topologies"</a>
<li><strong>In reply to:</strong> <a href="18642.php">Claudio Pastorino: "[OMPI users] Redefine proc in cartesian topologies"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18646.php">Claudio Pastorino: "Re: [OMPI users] Redefine proc in cartesian topologies"</a>
<li><strong>Reply:</strong> <a href="18646.php">Claudio Pastorino: "Re: [OMPI users] Redefine proc in cartesian topologies"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
mpirun -np 4 --host node1,node2,node1,node2 ./app
<br>
<p>Is this what you want?
<br>
<p>On Thu, Mar 1, 2012 at 10:57 AM, Claudio Pastorino &lt;
<br>
claudio.pastorino_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Dear all,
</span><br>
<span class="quotelev1">&gt; I apologize in advance if this is not the right list to post this. I
</span><br>
<span class="quotelev1">&gt; am a newcomer and please let me know if I should be sending this to
</span><br>
<span class="quotelev1">&gt; another list.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I program MPI trying to do HPC parallel programs. In particular I
</span><br>
<span class="quotelev1">&gt; wrote a parallel code
</span><br>
<span class="quotelev1">&gt; for molecular dynamics simulations. The program splits the work in a
</span><br>
<span class="quotelev1">&gt; matrix of procs and
</span><br>
<span class="quotelev1">&gt; I send messages along rows and columns in an equal basis. I learnt
</span><br>
<span class="quotelev1">&gt; that the typical
</span><br>
<span class="quotelev1">&gt; arrangement of  cartesian  topology is not usually  the best option,
</span><br>
<span class="quotelev1">&gt; because in a matrix, let's  say of 4x4 procs   with quad procs, the
</span><br>
<span class="quotelev1">&gt; procs are arranged so that
</span><br>
<span class="quotelev1">&gt; through columns one stays inside the same quad proc and through rows
</span><br>
<span class="quotelev1">&gt; you are always going out to the network.  This means procs are
</span><br>
<span class="quotelev1">&gt; arranged as one quad per row.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I try to explain this for a 2x2 case. The cartesian topology does this
</span><br>
<span class="quotelev1">&gt; assignment, typically:
</span><br>
<span class="quotelev1">&gt; cartesian    mpi_comm_world
</span><br>
<span class="quotelev1">&gt; 0,0 --&gt;  0
</span><br>
<span class="quotelev1">&gt; 0,1 --&gt;  1
</span><br>
<span class="quotelev1">&gt; 1,0 --&gt;  2
</span><br>
<span class="quotelev1">&gt; 1,1 --&gt;  3
</span><br>
<span class="quotelev1">&gt; The question is, how do I get a &quot;user defined&quot; assignment such as:
</span><br>
<span class="quotelev1">&gt; 0,0 --&gt;  0
</span><br>
<span class="quotelev1">&gt; 0,1 --&gt;  2
</span><br>
<span class="quotelev1">&gt; 1,0 --&gt;  1
</span><br>
<span class="quotelev1">&gt; 1,1 --&gt;  3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance and I hope to have  made this more or less
</span><br>
<span class="quotelev1">&gt; understandable.
</span><br>
<span class="quotelev1">&gt; Claudio
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18644/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18645.php">Claudio Pastorino: "Re: [OMPI users] Redefine proc in cartesian topologies"</a>
<li><strong>Previous message:</strong> <a href="18643.php">Ralph Castain: "Re: [OMPI users] Redefine proc in cartesian topologies"</a>
<li><strong>In reply to:</strong> <a href="18642.php">Claudio Pastorino: "[OMPI users] Redefine proc in cartesian topologies"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18646.php">Claudio Pastorino: "Re: [OMPI users] Redefine proc in cartesian topologies"</a>
<li><strong>Reply:</strong> <a href="18646.php">Claudio Pastorino: "Re: [OMPI users] Redefine proc in cartesian topologies"</a>
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
