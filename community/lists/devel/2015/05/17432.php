<?
$subject_val = "Re: [OMPI devel] Open MPI collectives algorithm selection";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 20 10:20:41 2015" -->
<!-- isoreceived="20150520142041" -->
<!-- sent="Wed, 20 May 2015 09:20:39 -0500" -->
<!-- isosent="20150520142039" -->
<!-- name="Edgar Gabriel" -->
<!-- email="gabriel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Open MPI collectives algorithm selection" -->
<!-- id="555C9837.6070305_at_cs.uh.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="555BEBFF.8040104_at_rist.or.jp" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Open MPI collectives algorithm selection<br>
<strong>From:</strong> Edgar Gabriel (<em>gabriel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-20 10:20:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17433.php">George Bosilca: "Re: [OMPI devel] Open MPI collectives algorithm selection"</a>
<li><strong>Previous message:</strong> <a href="17431.php">Ralph Castain: "Re: [OMPI devel] Proposal: update Open MPI's version number and release process"</a>
<li><strong>In reply to:</strong> <a href="17425.php">Gilles Gouaillardet: "[OMPI devel] Open MPI collectives algorithm selection"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I could be wrong (George, please feel free to correct me), but I *think* 
<br>
this was the designed behavior. If you read Jelena's paper,
<br>
<p><a href="http://www.open-mpi.org/papers/euro-pvmmpi-2006-collective-alg-selection/euro-pvmmpi-2006-collective-alg-selection.pdf">http://www.open-mpi.org/papers/euro-pvmmpi-2006-collective-alg-selection/euro-pvmmpi-2006-collective-alg-selection.pdf</a>
<br>
<p>you basically construct a new decision map with the input file, and the 
<br>
it replaces the previous decision map. I doubt that the original design 
<br>
intended to do what you ask to do.
<br>
<p>Thanks
<br>
Edgar
<br>
<p>On 5/19/2015 9:05 PM, Gilles Gouaillardet wrote:
<br>
<span class="quotelev1">&gt; Folks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; this is a follow-up of a discussion on the user ML started at
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/05/26882.php">http://www.open-mpi.org/community/lists/users/2015/05/26882.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1) it turns out the dynamic rule filename must be &quot;sorted&quot; :
</span><br>
<span class="quotelev1">&gt; - rules must be sorted by communicator size
</span><br>
<span class="quotelev1">&gt; - within a given communicator size, rules must be sorted by message size
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; if not, some rules are silently skipped, which is counter intuitive imho.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2) the algo picks the rule with the higher communicator size less or
</span><br>
<span class="quotelev1">&gt; equal than the current communicator size (same thing for message size).
</span><br>
<span class="quotelev1">&gt; The exception is if there are no such rule, the first rule is selected.
</span><br>
<span class="quotelev1">&gt; for example, if the config file has rules for comm size 4, 8 and 16
</span><br>
<span class="quotelev1">&gt; comm size 4 =&gt; pick rule for comm size 4
</span><br>
<span class="quotelev1">&gt; comm size 5 =&gt; pick rule for comm 4
</span><br>
<span class="quotelev1">&gt; comm size 8 =&gt; pick rule for comm 8
</span><br>
<span class="quotelev1">&gt; *but*
</span><br>
<span class="quotelev1">&gt; comm size 2 =&gt; pick rule for comm size 4 (!)
</span><br>
<span class="quotelev1">&gt; imho, this is also counter intuitive.
</span><br>
<span class="quotelev1">&gt; i would have expected no rule is picked and the default behaviour is used.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Same thing applies for message sizes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is this the intended design ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1) can be solved by inserting some qsort calls after parsing the config
</span><br>
<span class="quotelev1">&gt; file.
</span><br>
<span class="quotelev1">&gt; 2) can be solved by returning a NULL rule instead of the first rule ( or
</span><br>
<span class="quotelev1">&gt; by automatically inserting a rule for comm size 0 (and message size 0)
</span><br>
<span class="quotelev1">&gt; if no such rule is present in the config file).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; any thoughts ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/05/17425.php">http://www.open-mpi.org/community/lists/devel/2015/05/17425.php</a>
</span><br>
<p><pre>
-- 
Edgar Gabriel
Associate Professor
Parallel Software Technologies Lab      <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
Department of Computer Science          University of Houston
Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
Tel: +1 (713) 743-3857                  Fax: +1 (713) 743-3335
--
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17433.php">George Bosilca: "Re: [OMPI devel] Open MPI collectives algorithm selection"</a>
<li><strong>Previous message:</strong> <a href="17431.php">Ralph Castain: "Re: [OMPI devel] Proposal: update Open MPI's version number and release process"</a>
<li><strong>In reply to:</strong> <a href="17425.php">Gilles Gouaillardet: "[OMPI devel] Open MPI collectives algorithm selection"</a>
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
