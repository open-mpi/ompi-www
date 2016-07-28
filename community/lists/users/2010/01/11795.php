<?
$subject_val = "Re: [OMPI users] dynamic rules";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 15 09:10:17 2010" -->
<!-- isoreceived="20100115141017" -->
<!-- sent="Fri, 15 Jan 2010 15:10:07 +0100" -->
<!-- isosent="20100115141007" -->
<!-- name="Daniel Sp&#229;ngberg" -->
<!-- email="daniels_at_[hidden]" -->
<!-- subject="Re: [OMPI users] dynamic rules" -->
<!-- id="op.u6kuy5zvhvmlko_at_girasole.cluster.mkem.uu.se" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="d21ea44c1001150454y554cc87ax53acdc195e791217_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] dynamic rules<br>
<strong>From:</strong> Daniel Sp&#229;ngberg (<em>daniels_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-15 09:10:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11796.php">Andreea Costea: "Re: [OMPI users] Checkpoint/Restart error"</a>
<li><strong>Previous message:</strong> <a href="11794.php">Scott Atchley: "Re: [OMPI users] Rapid I/O support"</a>
<li><strong>In reply to:</strong> <a href="11791.php">Roman Martonak: "[OMPI users] dynamic rules"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11797.php">Roman Martonak: "Re: [OMPI users] dynamic rules"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have done this according to suggestion on this list, until a fix comes  
<br>
that makes it possible to change via command line:
<br>
<p>To choose bruck for all message sizes / mpi sizes with openmpi-1.4
<br>
<p>File $HOME/.openmpi/mca-params.conf (replace /homeXXXXX) so it points to  
<br>
the correct file:
<br>
coll_tuned_use_dynamic_rules=1
<br>
coll_tuned_dynamic_rules_filename=&quot;/homeXXXX/.openmpi/dynamic_rules_file&quot;
<br>
<p>file $HOME/.openmpi/dynamic_rules_file:
<br>
1 # num of collectives
<br>
3 # ID = 3 Alltoall collective (ID in coll_tuned.h)
<br>
1 # number of com sizes
<br>
0 # comm size
<br>
1 # number of msg sizes
<br>
0 3 0 0 # for message size 0, bruck, topo 0, 0 segmentation
<br>
# end of collective rule
<br>
<p>Change the number 3 to something else for other algoritms (can be found  
<br>
with ompi_info -a for example):
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: information &quot;coll_tuned_alltoall_algorithm_count&quot; (value: &quot;4&quot;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Number of alltoall algorithms available
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: parameter &quot;coll_tuned_alltoall_algorithm&quot;  
<br>
(current value: &quot;0&quot;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Which alltoall algorithm is used. Can be locked  
<br>
down to choice of: 0 ignore, 1 basic linear, 2 pairwise, 3: modified  
<br>
bruck, 4: two proc only.
<br>
<p>HTH
<br>
Daniel Sp&#229;ngberg
<br>
<p><p><p>Den 2010-01-15 13:54:33 skrev Roman Martonak &lt;r.martonak_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; On my machine I need to use dynamic rules to enforce the bruck or  
</span><br>
<span class="quotelev1">&gt; pairwise
</span><br>
<span class="quotelev1">&gt; algorithm for alltoall, since unfortunately the default basic linear
</span><br>
<span class="quotelev1">&gt; algorithm performs quite poorly on my
</span><br>
<span class="quotelev1">&gt; Infiniband network. Few months ago I noticed that in case of VASP,
</span><br>
<span class="quotelev1">&gt; however, the use of dynamic
</span><br>
<span class="quotelev1">&gt; rules via --mca coll_tuned_use_dynamic_rules 1 -mca
</span><br>
<span class="quotelev1">&gt; coll_tuned_dynamic_rules_filename dyn_rules
</span><br>
<span class="quotelev1">&gt; has no effect at all. Later it was identified that there was a bug
</span><br>
<span class="quotelev1">&gt; causing the dynamic rules to
</span><br>
<span class="quotelev1">&gt; apply only to the MPI_COMM_WORLD but not to other communicators. As
</span><br>
<span class="quotelev1">&gt; far as I understand, the bug
</span><br>
<span class="quotelev1">&gt; was fixed in openmpi-1.3.4. I tried now the openmpi-1.4 version and
</span><br>
<span class="quotelev1">&gt; expected that tuning of alltoall via dynamic
</span><br>
<span class="quotelev1">&gt; rules would work, but there is still no effect at all. Even worse, now
</span><br>
<span class="quotelev1">&gt; it is not even possible to use static rules
</span><br>
<span class="quotelev1">&gt; (which worked previously) such as -mca coll_tuned_alltoall_algorithm
</span><br>
<span class="quotelev1">&gt; 3, because the code would crash (as discussed in the list recently).
</span><br>
<span class="quotelev1">&gt; When running with --mca coll_base_verbose 1000, I get messages like
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [compute-0-0.local:08011] coll:sm:comm_query (0/MPI_COMM_WORLD):
</span><br>
<span class="quotelev1">&gt; intercomm, comm is too small, or not all peers local; disqualifying
</span><br>
<span class="quotelev1">&gt; myself
</span><br>
<span class="quotelev1">&gt; [compute-0-0.local:08011] coll:base:comm_select: component not  
</span><br>
<span class="quotelev1">&gt; available: sm
</span><br>
<span class="quotelev1">&gt; [compute-0-0.local:08011] coll:base:comm_select: component available:
</span><br>
<span class="quotelev1">&gt; sync, priority: 50
</span><br>
<span class="quotelev1">&gt; [compute-0-3.local:26116] coll:base:comm_select: component available:
</span><br>
<span class="quotelev1">&gt; self, priority: 75
</span><br>
<span class="quotelev1">&gt; [compute-0-3.local:26116] coll:sm:comm_query (1/MPI_COMM_SELF):
</span><br>
<span class="quotelev1">&gt; intercomm, comm is too small, or not all peers local; disqualifying
</span><br>
<span class="quotelev1">&gt; myself
</span><br>
<span class="quotelev1">&gt; [compute-0-3.local:26116] coll:base:comm_select: component not  
</span><br>
<span class="quotelev1">&gt; available: sm
</span><br>
<span class="quotelev1">&gt; [compute-0-3.local:26116] coll:base:comm_select: component available:
</span><br>
<span class="quotelev1">&gt; sync, priority: 50
</span><br>
<span class="quotelev1">&gt; [compute-0-3.local:26116] coll:base:comm_select: component not  
</span><br>
<span class="quotelev1">&gt; available: tuned
</span><br>
<span class="quotelev1">&gt; [compute-0-0.local:08011] coll:base:comm_select: component available:
</span><br>
<span class="quotelev1">&gt; tuned, priority: 30
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there now a way to use other alltoall algorithms instead of the
</span><br>
<span class="quotelev1">&gt; basic linear algorithm in openmpi-1.4.x ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance for any suggestion.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best regards
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Roman Martonak
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Daniel Sp&#229;ngberg
Materialkemi
Uppsala Universitet
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11796.php">Andreea Costea: "Re: [OMPI users] Checkpoint/Restart error"</a>
<li><strong>Previous message:</strong> <a href="11794.php">Scott Atchley: "Re: [OMPI users] Rapid I/O support"</a>
<li><strong>In reply to:</strong> <a href="11791.php">Roman Martonak: "[OMPI users] dynamic rules"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11797.php">Roman Martonak: "Re: [OMPI users] dynamic rules"</a>
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
