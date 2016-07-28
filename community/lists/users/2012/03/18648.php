<?
$subject_val = "Re: [OMPI users] Redefine proc in cartesian topologies";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  1 14:45:15 2012" -->
<!-- isoreceived="20120301194515" -->
<!-- sent="Thu, 1 Mar 2012 12:45:07 -0700" -->
<!-- isosent="20120301194507" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Redefine proc in cartesian topologies" -->
<!-- id="0CCE4BB6-C99A-4160-9E97-141FAEF977F1_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="26243650-EEE0-41E1-A74A-216973CA3235_at_ldeo.columbia.edu" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-01 14:45:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18649.php">Yiguang Yan: "Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes"</a>
<li><strong>Previous message:</strong> <a href="18647.php">Gustavo Correa: "Re: [OMPI users] Redefine proc in cartesian topologies"</a>
<li><strong>In reply to:</strong> <a href="18647.php">Gustavo Correa: "Re: [OMPI users] Redefine proc in cartesian topologies"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18644.php">Jingcha Joba: "Re: [OMPI users] Redefine proc in cartesian topologies"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Also the sequential mapper may be of help - allows you to specify the node each rank is to be place on, one line/rank.
<br>
<p><p>On Mar 1, 2012, at 12:40 PM, Gustavo Correa wrote:
<br>
<p><span class="quotelev1">&gt; Hi Claudio
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Check 'man mpirun'.  
</span><br>
<span class="quotelev1">&gt; You will find examples of the
</span><br>
<span class="quotelev1">&gt; '-byslot', '-bynode', '-loadbalance', and rankfile options, 
</span><br>
<span class="quotelev1">&gt; which allow some control of how ranks are mapped into processors/cores.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I hope this helps,
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mar 1, 2012, at 2:34 PM, Claudio Pastorino wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi, thanks for the answer.
</span><br>
<span class="quotelev2">&gt;&gt; You are right is not the rank what matters but how do I arrange
</span><br>
<span class="quotelev2">&gt;&gt; the physical procs in the cartesian topology. I don't care about the label.
</span><br>
<span class="quotelev2">&gt;&gt; So, how do I achieve that?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; Claudio
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 2012/3/1, Ralph Castain &lt;rhc_at_[hidden]&gt;:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is it really the rank that matters, or where the rank is located? For
</span><br>
<span class="quotelev3">&gt;&gt;&gt; example, you could leave the ranks as assigned by the cartesian topology,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but then map them so that ranks 0 and 2 share a node, 1 and 3 share a node,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; etc.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is that what you are trying to achieve?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Mar 1, 2012, at 11:57 AM, Claudio Pastorino wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Dear all,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I apologize in advance if this is not the right list to post this. I
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; am a newcomer and please let me know if I should be sending this to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; another list.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I program MPI trying to do HPC parallel programs. In particular I
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; wrote a parallel code
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; for molecular dynamics simulations. The program splits the work in a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; matrix of procs and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I send messages along rows and columns in an equal basis. I learnt
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; that the typical
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; arrangement of  cartesian  topology is not usually  the best option,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; because in a matrix, let's  say of 4x4 procs   with quad procs, the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; procs are arranged so that
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; through columns one stays inside the same quad proc and through rows
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; you are always going out to the network.  This means procs are
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; arranged as one quad per row.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I try to explain this for a 2x2 case. The cartesian topology does this
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; assignment, typically:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; cartesian    mpi_comm_world
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0,0 --&gt;  0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0,1 --&gt;  1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1,0 --&gt;  2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1,1 --&gt;  3
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The question is, how do I get a &quot;user defined&quot; assignment such as:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0,0 --&gt;  0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0,1 --&gt;  2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1,0 --&gt;  1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1,1 --&gt;  3
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks in advance and I hope to have  made this more or less
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; understandable.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Claudio
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="18649.php">Yiguang Yan: "Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes"</a>
<li><strong>Previous message:</strong> <a href="18647.php">Gustavo Correa: "Re: [OMPI users] Redefine proc in cartesian topologies"</a>
<li><strong>In reply to:</strong> <a href="18647.php">Gustavo Correa: "Re: [OMPI users] Redefine proc in cartesian topologies"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18644.php">Jingcha Joba: "Re: [OMPI users] Redefine proc in cartesian topologies"</a>
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
