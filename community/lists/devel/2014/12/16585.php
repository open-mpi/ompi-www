<?
$subject_val = "Re: [OMPI devel] 1.8.4rc2 now available for testing";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Dec 13 14:12:15 2014" -->
<!-- isoreceived="20141213191215" -->
<!-- sent="Sat, 13 Dec 2014 14:12:13 -0500" -->
<!-- isosent="20141213191213" -->
<!-- name="Eric Chamberland" -->
<!-- email="Eric.Chamberland_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.8.4rc2 now available for testing" -->
<!-- id="548C8F8D.7090601_at_giref.ulaval.ca" -->
<!-- charset="utf-8" -->
<!-- inreplyto="604F8302-3A01-4726-A224-523D9E5CA303_at_open-mpi.org" -->
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
<strong>From:</strong> Eric Chamberland (<em>Eric.Chamberland_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-13 14:12:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16586.php">Ralph Castain: "[OMPI devel] 1.8.4rc4 now out for testing"</a>
<li><strong>Previous message:</strong> <a href="16584.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] autogen broken"</a>
<li><strong>In reply to:</strong> <a href="16557.php">Ralph Castain: "Re: [OMPI devel] 1.8.4rc2 now available for testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16587.php">Ralph Castain: "Re: [OMPI devel] 1.8.4rc2 now available for testing"</a>
<li><strong>Reply:</strong> <a href="16587.php">Ralph Castain: "Re: [OMPI devel] 1.8.4rc2 now available for testing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 12/12/2014 01:12 PM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; I just checked it with &#226;&#128;&#148;enable-memchecker &#226;&#128;&#148;with-valgrind and found that many of these are legitimate leaks. We can take a look at them, though as I said, perhaps may wait for 1.8.5 as I wouldn&#226;&#128;&#153;t hold up 1.8.4 for it.
</span><br>
<p>wait!
<br>
<p>When end-developpers of other software valgrind their code, they find 
<br>
leaks from openmpi and then they ask themself: &quot;Did I made a misuse of 
<br>
MPI?&quot;  So they have to look around, into the FAQ, and find this:
<br>
<p><a href="http://www.open-mpi.org/faq/?category=debugging#valgrind_clean">http://www.open-mpi.org/faq/?category=debugging#valgrind_clean</a>
<br>
<p>and tell theme self: &quot;Fine, now with this suppression file, I am sure 
<br>
the leaks are my fault!&quot; and try to find why theses leaks remains in 
<br>
their code...
<br>
<p>then, not understanding what is wrong... they ask the list to see if it 
<br>
is normal or not... ;-)
<br>
<p>May I suggest to give suppression name like 
<br>
&quot;real_leak_to_be_fixed_in_next_release_#&quot; so at least, you guys won't 
<br>
forget to fix it, and all of us won't be upset about misuse of the library?
<br>
<p>Or maybe put them into another suppression file?   But list them down 
<br>
somewhere: that would really help us!
<br>
<p>Thanks,
<br>
<p>Eric
<br>
<p>ps: we valgrind our code each night to be able to detect asap new leaks 
<br>
or defects...
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16586.php">Ralph Castain: "[OMPI devel] 1.8.4rc4 now out for testing"</a>
<li><strong>Previous message:</strong> <a href="16584.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] autogen broken"</a>
<li><strong>In reply to:</strong> <a href="16557.php">Ralph Castain: "Re: [OMPI devel] 1.8.4rc2 now available for testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16587.php">Ralph Castain: "Re: [OMPI devel] 1.8.4rc2 now available for testing"</a>
<li><strong>Reply:</strong> <a href="16587.php">Ralph Castain: "Re: [OMPI devel] 1.8.4rc2 now available for testing"</a>
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
