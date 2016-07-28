<?
$subject_val = "Re: [OMPI users] openmpi 1.4 broken -mca coll_tuned_use_dynamic_rules 1";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 30 10:35:11 2009" -->
<!-- isoreceived="20091230153511" -->
<!-- sent="Wed, 30 Dec 2009 16:35:06 +0100" -->
<!-- isosent="20091230153506" -->
<!-- name="Daniel Sp&#229;ngberg" -->
<!-- email="daniels_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi 1.4 broken -mca coll_tuned_use_dynamic_rules 1" -->
<!-- id="op.u5rb8sb3hvmlko_at_girasole.cluster.mkem.uu.se" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="453d39990912300657n6052d4dfwedf25484f0c97046_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2009-12-30 10:35:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11664.php">Lenny Verkhovsky: "Re: [OMPI users] openmpi 1.4 broken -mca coll_tuned_use_dynamic_rules 1"</a>
<li><strong>Previous message:</strong> <a href="11662.php">Lenny Verkhovsky: "Re: [OMPI users] openmpi 1.4 broken -mca coll_tuned_use_dynamic_rules 1"</a>
<li><strong>In reply to:</strong> <a href="11662.php">Lenny Verkhovsky: "Re: [OMPI users] openmpi 1.4 broken -mca coll_tuned_use_dynamic_rules 1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11664.php">Lenny Verkhovsky: "Re: [OMPI users] openmpi 1.4 broken -mca coll_tuned_use_dynamic_rules 1"</a>
<li><strong>Reply:</strong> <a href="11664.php">Lenny Verkhovsky: "Re: [OMPI users] openmpi 1.4 broken -mca coll_tuned_use_dynamic_rules 1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the help with how to set up the collectives file. I am unable  
<br>
to make it work though,
<br>
<p>My simple alltoall test is still crashing, although I added even added a  
<br>
line specifically for my test commsize of 64 and 100 bytes using bruck.
<br>
<p>daniels_at_kalkyl1:~/.openmpi &gt; cat mca-params.conf
<br>
coll_tuned_use_dynamic_rules=1
<br>
coll_base_verbose=0
<br>
coll_tuned_dynamic_rules_filename=&quot;/home/daniels/.openmpi/dynamic_rules_file&quot;
<br>
daniels_at_kalkyl1:~/.openmpi &gt; cat dynamic_rules_file
<br>
1 # num of collectives
<br>
3 # ID = 3 Alltoall collective (ID in coll_tuned.h)
<br>
1 # number of com sizes
<br>
64 # comm size 64
<br>
3 # number of msg sizes
<br>
0 3 0 0 # for message size 0, bruck 1, topo 0, 0 segmentation
<br>
100 3 0 0 # for message size 100, bruck 1, topo 0, 0 segmentation
<br>
8192 2 0 0 # 8k+, pairwise 2, no topo or segmentation
<br>
# end of collective rule
<br>
<p>Still it useful to know how to do this, when this issue gets fixed in the  
<br>
future!
<br>
<p>Daniel
<br>
<p><p><p>Den 2009-12-30 15:57:50 skrev Lenny Verkhovsky  
<br>
&lt;lenny.verkhovsky_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; The only workaround that I found is a file with dynamic rules.
</span><br>
<span class="quotelev1">&gt; This is an example that George sent me once. It helped for me, until it  
</span><br>
<span class="quotelev1">&gt; will
</span><br>
<span class="quotelev1">&gt; be fixed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot; Lenny,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You asked for dynamic rules but it looks like you didn't provide them.
</span><br>
<span class="quotelev1">&gt; Dynamic rules allow the user to specify which algorithm to be used for  
</span><br>
<span class="quotelev1">&gt; each
</span><br>
<span class="quotelev1">&gt; collective based on a set of rules. I corrected the current behavior, so  
</span><br>
<span class="quotelev1">&gt; it
</span><br>
<span class="quotelev1">&gt; will not crash. However, as you didn't provide dynamic rules, it will  
</span><br>
<span class="quotelev1">&gt; just
</span><br>
<span class="quotelev1">&gt; switch back to default behavior (i.e. ignore the
</span><br>
<span class="quotelev1">&gt; coll_tuned_use_dynamic_rules MCA parameter).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As an example, here is a set of dynamic rules. I added some comment to
</span><br>
<span class="quotelev1">&gt; clarify it, but if you have any questions please ask.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2 # num of collectives
</span><br>
<span class="quotelev1">&gt; 3 # ID = 3 Alltoall collective (ID in coll_tuned.h)
</span><br>
<span class="quotelev1">&gt; 1 # number of com sizes
</span><br>
<span class="quotelev1">&gt; 64 # comm size 64
</span><br>
<span class="quotelev1">&gt; 2 # number of msg sizes
</span><br>
<span class="quotelev1">&gt; 0 3 0 0 # for message size 0, bruck 1, topo 0, 0 segmentation
</span><br>
<span class="quotelev1">&gt; 8192 2 0 0 # 8k+, pairwise 2, no topo or segmentation
</span><br>
<span class="quotelev1">&gt; # end of collective rule
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; 2 # ID = 2 Allreduce collective (ID in coll_tuned.h)
</span><br>
<span class="quotelev1">&gt; 1 # number of com sizes
</span><br>
<span class="quotelev1">&gt; 1 # comm size 2
</span><br>
<span class="quotelev1">&gt; 2 # number of msg sizes
</span><br>
<span class="quotelev1">&gt; 0 1 0 0 # for message size 0, basic linear 1, topo 0, 0 segmentation
</span><br>
<span class="quotelev1">&gt; 1024 2 0 0 # for messages size &gt; 1024, nonoverlapping 2, topo 0, 0
</span><br>
<span class="quotelev1">&gt; segmentation
</span><br>
<span class="quotelev1">&gt; # end of collective rule
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And here is what I have in my $(HOME)/.openmpi/mca-params.conf to  
</span><br>
<span class="quotelev1">&gt; activate
</span><br>
<span class="quotelev1">&gt; them:
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # Dealing with collective
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; coll_base_verbose = 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; coll_tuned_use_dynamic_rules = 1
</span><br>
<span class="quotelev1">&gt; coll_tuned_dynamic_rules_filename = **the name of the file where you  
</span><br>
<span class="quotelev1">&gt; saved
</span><br>
<span class="quotelev1">&gt; the rules **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Dec 30, 2009 at 4:44 PM, Daniel Sp&#229;ngberg  
</span><br>
<span class="quotelev1">&gt; &lt;daniels_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Interesting. I found your issue before I sent my report, but I did not
</span><br>
<span class="quotelev2">&gt;&gt; realise that this was the same problem. I see now that your example is
</span><br>
<span class="quotelev2">&gt;&gt; really for openmpi 1.3.4++
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Do you know of a work around? I have not used a rule file before and  
</span><br>
<span class="quotelev2">&gt;&gt; seem
</span><br>
<span class="quotelev2">&gt;&gt; to be unable to find the documentation for how to use one,  
</span><br>
<span class="quotelev2">&gt;&gt; unfortunately.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Daniel
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Den 2009-12-30 15:17:17 skrev Lenny Verkhovsky  
</span><br>
<span class="quotelev2">&gt;&gt; &lt;lenny.verkhovsky_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt;:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  This is the a knowing issue,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        <a href="https://svn.open-mpi.org/trac/ompi/ticket/2087">https://svn.open-mpi.org/trac/ompi/ticket/2087</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Maybe it's priority should be raised up.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Lenny.
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
<li><strong>Next message:</strong> <a href="11664.php">Lenny Verkhovsky: "Re: [OMPI users] openmpi 1.4 broken -mca coll_tuned_use_dynamic_rules 1"</a>
<li><strong>Previous message:</strong> <a href="11662.php">Lenny Verkhovsky: "Re: [OMPI users] openmpi 1.4 broken -mca coll_tuned_use_dynamic_rules 1"</a>
<li><strong>In reply to:</strong> <a href="11662.php">Lenny Verkhovsky: "Re: [OMPI users] openmpi 1.4 broken -mca coll_tuned_use_dynamic_rules 1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11664.php">Lenny Verkhovsky: "Re: [OMPI users] openmpi 1.4 broken -mca coll_tuned_use_dynamic_rules 1"</a>
<li><strong>Reply:</strong> <a href="11664.php">Lenny Verkhovsky: "Re: [OMPI users] openmpi 1.4 broken -mca coll_tuned_use_dynamic_rules 1"</a>
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
