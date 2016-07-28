<?
$subject_val = "[OMPI users] Tuned collectives: How to choose them dynamically? (-mca coll_tuned_dynamic_rules_filename dyn_rules)&quot;";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 22 23:48:51 2009" -->
<!-- isoreceived="20090723034851" -->
<!-- sent="Wed, 22 Jul 2009 23:48:39 -0400" -->
<!-- isosent="20090723034839" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="[OMPI users] Tuned collectives: How to choose them dynamically? (-mca coll_tuned_dynamic_rules_filename dyn_rules)&amp;quot;" -->
<!-- id="4A67DD97.7090200_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Tuned collectives: How to choose them dynamically? (-mca coll_tuned_dynamic_rules_filename dyn_rules)&quot;<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-22 23:48:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10046.php">vipin kumar: "Re: [OMPI users] Network connection check"</a>
<li><strong>Previous message:</strong> <a href="10044.php">Ralph Castain: "Re: [OMPI users] Open-MPI-1.3.2 compatibility with old torque?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10056.php">Igor Kozin: "Re: [OMPI users] Tuned collectives: How to choose them dynamically? (-mca coll_tuned_dynamic_rules_filename dyn_rules)&quot;"</a>
<li><strong>Reply:</strong> <a href="10056.php">Igor Kozin: "Re: [OMPI users] Tuned collectives: How to choose them dynamically? (-mca coll_tuned_dynamic_rules_filename dyn_rules)&quot;"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear OpenMPI experts
<br>
<p>I would like to experiment with the OpenMPI tuned collectives,
<br>
hoping to improve the performance of some programs we run
<br>
in production mode.
<br>
<p>However, I could not find any documentation on how to select the
<br>
different collective algorithms and other parameters.
<br>
In particular, I would love to read an explanation clarifying
<br>
the syntax and meaning of the lines on &quot;dyn_rules&quot;
<br>
file that is passed to
<br>
&quot;-mca coll_tuned_dynamic_rules_filename ./dyn_rules&quot;
<br>
<p>Recently there was an interesting discussion on the list
<br>
about this topic.  It showed that choosing the right collective
<br>
algorithm can make a big difference in overall performance:
<br>
<p><a href="http://www.open-mpi.org/community/lists/users/2009/05/9355.php">http://www.open-mpi.org/community/lists/users/2009/05/9355.php</a>
<br>
<a href="http://www.open-mpi.org/community/lists/users/2009/05/9399.php">http://www.open-mpi.org/community/lists/users/2009/05/9399.php</a>
<br>
<a href="http://www.open-mpi.org/community/lists/users/2009/05/9401.php">http://www.open-mpi.org/community/lists/users/2009/05/9401.php</a>
<br>
<a href="http://www.open-mpi.org/community/lists/users/2009/05/9419.php">http://www.open-mpi.org/community/lists/users/2009/05/9419.php</a>
<br>
<p>However, the thread was concentrated on &quot;MPI_Alltoall&quot;.
<br>
Nothing was said about other collective functions.
<br>
Not much was said about the
<br>
&quot;tuned collective dynamic rules&quot; file syntax,
<br>
the meaning of its parameters, etc.
<br>
<p>Is there any source of information about that which I missed?
<br>
Thank you for any pointers or clarifications.
<br>
<p>Gus Correa
<br>
---------------------------------------------------------------------
<br>
Gustavo Correa
<br>
Lamont-Doherty Earth Observatory - Columbia University
<br>
Palisades, NY, 10964-8000 - USA
<br>
---------------------------------------------------------------------
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10046.php">vipin kumar: "Re: [OMPI users] Network connection check"</a>
<li><strong>Previous message:</strong> <a href="10044.php">Ralph Castain: "Re: [OMPI users] Open-MPI-1.3.2 compatibility with old torque?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10056.php">Igor Kozin: "Re: [OMPI users] Tuned collectives: How to choose them dynamically? (-mca coll_tuned_dynamic_rules_filename dyn_rules)&quot;"</a>
<li><strong>Reply:</strong> <a href="10056.php">Igor Kozin: "Re: [OMPI users] Tuned collectives: How to choose them dynamically? (-mca coll_tuned_dynamic_rules_filename dyn_rules)&quot;"</a>
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
