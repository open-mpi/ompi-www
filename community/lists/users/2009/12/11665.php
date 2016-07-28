<?
$subject_val = "Re: [OMPI users] openmpi 1.4 broken -mca coll_tuned_use_dynamic_rules 1";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 30 11:42:48 2009" -->
<!-- isoreceived="20091230164248" -->
<!-- sent="Wed, 30 Dec 2009 17:42:43 +0100" -->
<!-- isosent="20091230164243" -->
<!-- name="Daniel Sp&#229;ngberg" -->
<!-- email="daniels_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi 1.4 broken -mca coll_tuned_use_dynamic_rules 1" -->
<!-- id="op.u5rfdhhihvmlko_at_girasole.cluster.mkem.uu.se" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="453d39990912300744i1518857emf31058fc294e4439_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi 1.4 broken -mca coll_tuned_use_dynamic_rules 1<br>
<strong>From:</strong> Daniel Sp&#229;ngberg (<em>daniels_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-30 11:42:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11666.php">Gus Correa: "Re: [OMPI users] Problem with HPL while using OpenMPI 1.3.3"</a>
<li><strong>Previous message:</strong> <a href="11664.php">Lenny Verkhovsky: "Re: [OMPI users] openmpi 1.4 broken -mca coll_tuned_use_dynamic_rules 1"</a>
<li><strong>In reply to:</strong> <a href="11664.php">Lenny Verkhovsky: "Re: [OMPI users] openmpi 1.4 broken -mca coll_tuned_use_dynamic_rules 1"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That works! Many thanks!
<br>
<p>Daniel
<br>
<p>Den 2009-12-30 16:44:52 skrev Lenny Verkhovsky  
<br>
&lt;lenny.verkhovsky_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; it may crash if it doesnt see a file with rules.
</span><br>
<span class="quotelev1">&gt; try providing it through the command line
</span><br>
<span class="quotelev1">&gt; $mpirun -mca coll_tuned_use_dynamic_rules 1 -mca
</span><br>
<span class="quotelev1">&gt; coll_tuned_dynamic_rules_filename full_path_to_file_  .....
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Dec 30, 2009 at 5:35 PM, Daniel Sp&#229;ngberg  
</span><br>
<span class="quotelev1">&gt; &lt;daniels_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for the help with how to set up the collectives file. I am  
</span><br>
<span class="quotelev2">&gt;&gt; unable to
</span><br>
<span class="quotelev2">&gt;&gt; make it work though,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My simple alltoall test is still crashing, although I added even added a
</span><br>
<span class="quotelev2">&gt;&gt; line specifically for my test commsize of 64 and 100 bytes using bruck.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; daniels_at_kalkyl1:~/.openmpi &gt; cat mca-params.conf
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; coll_tuned_use_dynamic_rules=1
</span><br>
<span class="quotelev2">&gt;&gt; coll_base_verbose=0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; coll_tuned_dynamic_rules_filename=&quot;/home/daniels/.openmpi/dynamic_rules_file&quot;
</span><br>
<span class="quotelev2">&gt;&gt; daniels_at_kalkyl1:~/.openmpi &gt; cat dynamic_rules_file
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1 # num of collectives
</span><br>
<span class="quotelev2">&gt;&gt; 3 # ID = 3 Alltoall collective (ID in coll_tuned.h)
</span><br>
<span class="quotelev2">&gt;&gt; 1 # number of com sizes
</span><br>
<span class="quotelev2">&gt;&gt; 64 # comm size 64
</span><br>
<span class="quotelev2">&gt;&gt; 3 # number of msg sizes
</span><br>
<span class="quotelev2">&gt;&gt; 0 3 0 0 # for message size 0, bruck 1, topo 0, 0 segmentation
</span><br>
<span class="quotelev2">&gt;&gt; 100 3 0 0 # for message size 100, bruck 1, topo 0, 0 segmentation
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 8192 2 0 0 # 8k+, pairwise 2, no topo or segmentation
</span><br>
<span class="quotelev2">&gt;&gt; # end of collective rule
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Still it useful to know how to do this, when this issue gets fixed in  
</span><br>
<span class="quotelev2">&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt; future!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Daniel
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Den 2009-12-30 15:57:50 skrev Lenny Verkhovsky  
</span><br>
<span class="quotelev2">&gt;&gt; &lt;lenny.verkhovsky_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt;:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  The only workaround that I found is a file with dynamic rules.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This is an example that George sent me once. It helped for me, until it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; will
</span><br>
<span class="quotelev3">&gt;&gt;&gt; be fixed.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot; Lenny,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You asked for dynamic rules but it looks like you didn't provide them.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dynamic rules allow the user to specify which algorithm to be used for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; each
</span><br>
<span class="quotelev3">&gt;&gt;&gt; collective based on a set of rules. I corrected the current behavior,  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; so
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; will not crash. However, as you didn't provide dynamic rules, it will  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; just
</span><br>
<span class="quotelev3">&gt;&gt;&gt; switch back to default behavior (i.e. ignore the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; coll_tuned_use_dynamic_rules MCA parameter).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; As an example, here is a set of dynamic rules. I added some comment to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; clarify it, but if you have any questions please ask.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2 # num of collectives
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3 # ID = 3 Alltoall collective (ID in coll_tuned.h)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1 # number of com sizes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 64 # comm size 64
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2 # number of msg sizes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0 3 0 0 # for message size 0, bruck 1, topo 0, 0 segmentation
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 8192 2 0 0 # 8k+, pairwise 2, no topo or segmentation
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # end of collective rule
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2 # ID = 2 Allreduce collective (ID in coll_tuned.h)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1 # number of com sizes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1 # comm size 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2 # number of msg sizes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0 1 0 0 # for message size 0, basic linear 1, topo 0, 0 segmentation
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1024 2 0 0 # for messages size &gt; 1024, nonoverlapping 2, topo 0, 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; segmentation
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # end of collective rule
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; And here is what I have in my $(HOME)/.openmpi/mca-params.conf to  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; activate
</span><br>
<span class="quotelev3">&gt;&gt;&gt; them:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # Dealing with collective
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #
</span><br>
<span class="quotelev3">&gt;&gt;&gt; coll_base_verbose = 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; coll_tuned_use_dynamic_rules = 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; coll_tuned_dynamic_rules_filename = **the name of the file where you  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; saved
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the rules **
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Wed, Dec 30, 2009 at 4:44 PM, Daniel Sp&#229;ngberg &lt;daniels_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Interesting. I found your issue before I sent my report, but I did not
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; realise that this was the same problem. I see now that your example is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; really for openmpi 1.3.4++
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Do you know of a work around? I have not used a rule file before and  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; seem
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to be unable to find the documentation for how to use one,  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; unfortunately.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Daniel
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Den 2009-12-30 15:17:17 skrev Lenny Verkhovsky &lt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; lenny.verkhovsky_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  This is the a knowing issue,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;       <a href="https://svn.open-mpi.org/trac/ompi/ticket/2087">https://svn.open-mpi.org/trac/ompi/ticket/2087</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Maybe it's priority should be raised up.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Lenny.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Daniel Sp&#229;ngberg
</span><br>
<span class="quotelev2">&gt;&gt; Materialkemi
</span><br>
<span class="quotelev2">&gt;&gt; Uppsala Universitet
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
<li><strong>Next message:</strong> <a href="11666.php">Gus Correa: "Re: [OMPI users] Problem with HPL while using OpenMPI 1.3.3"</a>
<li><strong>Previous message:</strong> <a href="11664.php">Lenny Verkhovsky: "Re: [OMPI users] openmpi 1.4 broken -mca coll_tuned_use_dynamic_rules 1"</a>
<li><strong>In reply to:</strong> <a href="11664.php">Lenny Verkhovsky: "Re: [OMPI users] openmpi 1.4 broken -mca coll_tuned_use_dynamic_rules 1"</a>
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
