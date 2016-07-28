<?
$subject_val = "Re: [OMPI devel] [OMPI users] openmpi 1.4 broken -mca coll_tuned_use_dynamic_rules 1";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 30 09:57:56 2009" -->
<!-- isoreceived="20091230145756" -->
<!-- sent="Wed, 30 Dec 2009 16:57:50 +0200" -->
<!-- isosent="20091230145750" -->
<!-- name="Lenny Verkhovsky" -->
<!-- email="lenny.verkhovsky_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI users] openmpi 1.4 broken -mca coll_tuned_use_dynamic_rules 1" -->
<!-- id="453d39990912300657n6052d4dfwedf25484f0c97046_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="op.u5q9wquihvmlko_at_girasole.cluster.mkem.uu.se" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI users] openmpi 1.4 broken -mca coll_tuned_use_dynamic_rules 1<br>
<strong>From:</strong> Lenny Verkhovsky (<em>lenny.verkhovsky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-30 09:57:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/01/7271.php">Eugene Loh: "Re: [OMPI devel] [Open MPI] #2043: sm BTL hang with GCC 4.4.x"</a>
<li><strong>Previous message:</strong> <a href="7269.php">Lenny Verkhovsky: "Re: [OMPI devel] [OMPI users] openmpi 1.4 broken -mca coll_tuned_use_dynamic_rules 1"</a>
<li><strong>Maybe in reply to:</strong> <a href="7269.php">Lenny Verkhovsky: "Re: [OMPI devel] [OMPI users] openmpi 1.4 broken -mca coll_tuned_use_dynamic_rules 1"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The only workaround that I found is a file with dynamic rules.
<br>
This is an example that George sent me once. It helped for me, until it will
<br>
be fixed.
<br>
<p>&quot; Lenny,
<br>
<p>You asked for dynamic rules but it looks like you didn't provide them.
<br>
Dynamic rules allow the user to specify which algorithm to be used for each
<br>
collective based on a set of rules. I corrected the current behavior, so it
<br>
will not crash. However, as you didn't provide dynamic rules, it will just
<br>
switch back to default behavior (i.e. ignore the
<br>
coll_tuned_use_dynamic_rules MCA parameter).
<br>
<p>As an example, here is a set of dynamic rules. I added some comment to
<br>
clarify it, but if you have any questions please ask.
<br>
<p>2 # num of collectives
<br>
3 # ID = 3 Alltoall collective (ID in coll_tuned.h)
<br>
1 # number of com sizes
<br>
64 # comm size 64
<br>
2 # number of msg sizes
<br>
0 3 0 0 # for message size 0, bruck 1, topo 0, 0 segmentation
<br>
8192 2 0 0 # 8k+, pairwise 2, no topo or segmentation
<br>
# end of collective rule
<br>
#
<br>
2 # ID = 2 Allreduce collective (ID in coll_tuned.h)
<br>
1 # number of com sizes
<br>
1 # comm size 2
<br>
2 # number of msg sizes
<br>
0 1 0 0 # for message size 0, basic linear 1, topo 0, 0 segmentation
<br>
1024 2 0 0 # for messages size &gt; 1024, nonoverlapping 2, topo 0, 0
<br>
segmentation
<br>
# end of collective rule
<br>
#
<br>
<p>And here is what I have in my $(HOME)/.openmpi/mca-params.conf to activate
<br>
them:
<br>
#
<br>
# Dealing with collective
<br>
#
<br>
coll_base_verbose = 0
<br>
<p>coll_tuned_use_dynamic_rules = 1
<br>
coll_tuned_dynamic_rules_filename = **the name of the file where you saved
<br>
the rules **
<br>
<p>&quot;
<br>
<p>On Wed, Dec 30, 2009 at 4:44 PM, Daniel Sp&#229;ngberg &lt;daniels_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; Interesting. I found your issue before I sent my report, but I did not
</span><br>
<span class="quotelev1">&gt; realise that this was the same problem. I see now that your example is
</span><br>
<span class="quotelev1">&gt; really for openmpi 1.3.4++
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do you know of a work around? I have not used a rule file before and seem
</span><br>
<span class="quotelev1">&gt; to be unable to find the documentation for how to use one, unfortunately.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Daniel
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Den 2009-12-30 15:17:17 skrev Lenny Verkhovsky &lt;lenny.verkhovsky_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  This is the a knowing issue,
</span><br>
<span class="quotelev2">&gt;&gt;        <a href="https://svn.open-mpi.org/trac/ompi/ticket/2087">https://svn.open-mpi.org/trac/ompi/ticket/2087</a>
</span><br>
<span class="quotelev2">&gt;&gt; Maybe it's priority should be raised up.
</span><br>
<span class="quotelev2">&gt;&gt; Lenny.
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-7270/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/01/7271.php">Eugene Loh: "Re: [OMPI devel] [Open MPI] #2043: sm BTL hang with GCC 4.4.x"</a>
<li><strong>Previous message:</strong> <a href="7269.php">Lenny Verkhovsky: "Re: [OMPI devel] [OMPI users] openmpi 1.4 broken -mca coll_tuned_use_dynamic_rules 1"</a>
<li><strong>Maybe in reply to:</strong> <a href="7269.php">Lenny Verkhovsky: "Re: [OMPI devel] [OMPI users] openmpi 1.4 broken -mca coll_tuned_use_dynamic_rules 1"</a>
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
