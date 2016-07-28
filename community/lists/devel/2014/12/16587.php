<?
$subject_val = "Re: [OMPI devel] 1.8.4rc2 now available for testing";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Dec 13 18:07:56 2014" -->
<!-- isoreceived="20141213230756" -->
<!-- sent="Sat, 13 Dec 2014 15:07:52 -0800" -->
<!-- isosent="20141213230752" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.8.4rc2 now available for testing" -->
<!-- id="E6402A2E-5CA8-4C46-98AB-6002400798AE_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="548C8F8D.7090601_at_giref.ulaval.ca" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.8.4rc2 now available for testing<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-13 18:07:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16588.php">Paul Hargrove: "Re: [OMPI devel] 1.8.4rc4 now out for testing"</a>
<li><strong>Previous message:</strong> <a href="16586.php">Ralph Castain: "[OMPI devel] 1.8.4rc4 now out for testing"</a>
<li><strong>In reply to:</strong> <a href="16585.php">Eric Chamberland: "Re: [OMPI devel] 1.8.4rc2 now available for testing"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I&#226;&#128;&#153;ll raise the point at our Tues telecon and see who among them might have the cycles to address this as I&#226;&#128;&#153;ll be on the road with limited time over the next week, and then we&#226;&#128;&#153;ll be hitting the holidays.
<br>
<p><p><span class="quotelev1">&gt; On Dec 13, 2014, at 11:12 AM, Eric Chamberland &lt;Eric.Chamberland_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 12/12/2014 01:12 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I just checked it with &#226;&#128;&#148;enable-memchecker &#226;&#128;&#148;with-valgrind and found that many of these are legitimate leaks. We can take a look at them, though as I said, perhaps may wait for 1.8.5 as I wouldn&#226;&#128;&#153;t hold up 1.8.4 for it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; wait!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When end-developpers of other software valgrind their code, they find leaks from openmpi and then they ask themself: &quot;Did I made a misuse of MPI?&quot;  So they have to look around, into the FAQ, and find this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=debugging#valgrind_clean">http://www.open-mpi.org/faq/?category=debugging#valgrind_clean</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and tell theme self: &quot;Fine, now with this suppression file, I am sure the leaks are my fault!&quot; and try to find why theses leaks remains in their code...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; then, not understanding what is wrong... they ask the list to see if it is normal or not... ;-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; May I suggest to give suppression name like &quot;real_leak_to_be_fixed_in_next_release_#&quot; so at least, you guys won't forget to fix it, and all of us won't be upset about misuse of the library?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Or maybe put them into another suppression file?   But list them down somewhere: that would really help us!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Eric
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ps: we valgrind our code each night to be able to detect asap new leaks or defects...
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16585.php">http://www.open-mpi.org/community/lists/devel/2014/12/16585.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16588.php">Paul Hargrove: "Re: [OMPI devel] 1.8.4rc4 now out for testing"</a>
<li><strong>Previous message:</strong> <a href="16586.php">Ralph Castain: "[OMPI devel] 1.8.4rc4 now out for testing"</a>
<li><strong>In reply to:</strong> <a href="16585.php">Eric Chamberland: "Re: [OMPI devel] 1.8.4rc2 now available for testing"</a>
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
