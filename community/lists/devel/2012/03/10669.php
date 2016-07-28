<?
$subject_val = "Re: [OMPI devel] [PATCH]Incorrect algorithm choice using coll_tuned_dynamic_rules_filename (over 2GiB message)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar  2 15:36:05 2012" -->
<!-- isoreceived="20120302203605" -->
<!-- sent="Fri, 2 Mar 2012 15:36:00 -0500" -->
<!-- isosent="20120302203600" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [PATCH]Incorrect algorithm choice using coll_tuned_dynamic_rules_filename (over 2GiB message)" -->
<!-- id="8E712CF9-5FC8-4E59-935F-4E4B9FAC58C6_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4F4F264B.3020101_at_jp.fujitsu.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [PATCH]Incorrect algorithm choice using coll_tuned_dynamic_rules_filename (over 2GiB message)<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-02 15:36:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10670.php">George Bosilca: "Re: [OMPI devel] [PATCH]Incorrect algorithm choice using coll_tuned_dynamic_rules_filename (over 2GiB message)"</a>
<li><strong>Previous message:</strong> <a href="10668.php">Jeffrey Squyres: "Re: [OMPI devel] Replacing poll()"</a>
<li><strong>In reply to:</strong> <a href="10648.php">Y.MATSUMOTO: "[OMPI devel] [PATCH]Incorrect algorithm choice using coll_tuned_dynamic_rules_filename (over 2GiB message)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10670.php">George Bosilca: "Re: [OMPI devel] [PATCH]Incorrect algorithm choice using coll_tuned_dynamic_rules_filename (over 2GiB message)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yuki,
<br>
<p>I applied your patch and added your copyright in the corresponding files (r26080). I will make a CMR for the 1.4 and 1.5. However, as you might have noticed we're trying to close the 1.4 and move forward.
<br>
<p>&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Mar 1, 2012, at 02:33 , Y.MATSUMOTO wrote:
<br>
<p><span class="quotelev1">&gt; Dear All,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Next feedback is about &quot;coll_tuned_dynamic_rules_filename&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Incorrect algorithm is selected in following conditions:
</span><br>
<span class="quotelev1">&gt; 1:&quot;--mca coll_tuned_use_dynamic_rules 1&quot; is set.
</span><br>
<span class="quotelev1">&gt; 2:&quot;--mca coll_tuned_dynamic_rules_filename&quot; is set.
</span><br>
<span class="quotelev1">&gt; 3: Collective communication which is written in 2, called &gt;= 2GiB communication.
</span><br>
<span class="quotelev1">&gt; (ex) MPI_Bcast:data type size * count &gt;= 2GiB
</span><br>
<span class="quotelev1">&gt; MPI_Allgather: data type size * count * communication size &gt;= 2GiB)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please see attached patch(Patch is for V1.4.x).
</span><br>
<span class="quotelev1">&gt; But, we found problem when over 2GiB message is written in rulefile as &quot;message size&quot;.
</span><br>
<span class="quotelev1">&gt; (over 2GiB message cannot read correctly.)
</span><br>
<span class="quotelev1">&gt; And we do not fix it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best Regards,
</span><br>
<span class="quotelev1">&gt; yuki Matsumoto
</span><br>
<span class="quotelev1">&gt; MPI development team,
</span><br>
<span class="quotelev1">&gt; Fujitsu
</span><br>
<span class="quotelev1">&gt; &lt;dynamic_rule.patch&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10670.php">George Bosilca: "Re: [OMPI devel] [PATCH]Incorrect algorithm choice using coll_tuned_dynamic_rules_filename (over 2GiB message)"</a>
<li><strong>Previous message:</strong> <a href="10668.php">Jeffrey Squyres: "Re: [OMPI devel] Replacing poll()"</a>
<li><strong>In reply to:</strong> <a href="10648.php">Y.MATSUMOTO: "[OMPI devel] [PATCH]Incorrect algorithm choice using coll_tuned_dynamic_rules_filename (over 2GiB message)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10670.php">George Bosilca: "Re: [OMPI devel] [PATCH]Incorrect algorithm choice using coll_tuned_dynamic_rules_filename (over 2GiB message)"</a>
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
