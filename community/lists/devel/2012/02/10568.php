<?
$subject_val = "Re: [OMPI devel] v1.5 r25914 DOA";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 22 18:12:49 2012" -->
<!-- isoreceived="20120222231249" -->
<!-- sent="Wed, 22 Feb 2012 18:12:42 -0500" -->
<!-- isosent="20120222231242" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] v1.5 r25914 DOA" -->
<!-- id="4F45766A.3030605_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="B7740524-9A7B-481C-A12F-6FC5955E1630_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] v1.5 r25914 DOA<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-22 18:12:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10569.php">Ralph Castain: "Re: [OMPI devel] v1.5 r25914 DOA"</a>
<li><strong>Previous message:</strong> <a href="10567.php">Jeffrey Squyres: "[OMPI devel] 1.5 supported systems"</a>
<li><strong>In reply to:</strong> <a href="10564.php">Ralph Castain: "Re: [OMPI devel] v1.5 r25914 DOA"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10569.php">Ralph Castain: "Re: [OMPI devel] v1.5 r25914 DOA"</a>
<li><strong>Reply:</strong> <a href="10569.php">Ralph Castain: "Re: [OMPI devel] v1.5 r25914 DOA"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 02/22/12 14:54, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; That doesn't really address the issue, though. What I want to know is: 
</span><br>
<span class="quotelev1">&gt; what happens when you try to bind processes? What about 
</span><br>
<span class="quotelev1">&gt; -bind-to-socket, and -persocket options? Etc. Reason I'm concerned: 
</span><br>
<span class="quotelev1">&gt; I'm not sure what happens if the socket layer isn't present. The logic 
</span><br>
<span class="quotelev1">&gt; in 1.5 is pretty old, but I believe it relies heavily on sockets being 
</span><br>
<span class="quotelev1">&gt; present.
</span><br>
Okay.  So,
<br>
<p>*)  &quot;out of the box&quot;, basically nothing works.  For example, &quot;mpirun 
<br>
hostname&quot; segfaults.
<br>
<p>*)  With &quot;--mca orte_num_sockets 1&quot;, stuff appears to work.
<br>
<p>*)  With &quot;--mca orte_num_sockets 1&quot; and adding either &quot;--bysocket 
<br>
--bind-to-socket&quot; or &quot;--npersocket &lt;n&gt;&quot;, I get:
<br>
<p>--------------------------------------------------------------------------
<br>
Unable to bind to socket -13 on node burl-ct-v20z-10.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
mpirun was unable to start the specified application as it encountered 
<br>
an error:
<br>
<p>Error name: Fatal
<br>
Node: burl-ct-v20z-10
<br>
<p>when attempting to start process rank 0.
<br>
--------------------------------------------------------------------------
<br>
2 total processes failed to start
<br>
<p>So, I hear Brice's comment that this is an old kernel.  And, I hear what 
<br>
you're saying about a &quot;real&quot; fix being expensive.  Nevertheless, to my 
<br>
taste, automatically setting num_sockets==1 when num_sockets==0 is 
<br>
detected makes a lot of sense.  It makes things &quot;basically&quot; work, 
<br>
turning a situation where everything including &quot;mpirun hostname&quot; 
<br>
segfaults into a situation where default usage works just fine.  What 
<br>
remains broken is binding, which generates an error message that gives 
<br>
the user a hope of making progress (turning off binding).  That's in 
<br>
contrast from expecting users to go from
<br>
<p>% mpirun hostname
<br>
Segmentation fault
<br>
<p>to knowing that they should set orte_num_sockets==1.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10569.php">Ralph Castain: "Re: [OMPI devel] v1.5 r25914 DOA"</a>
<li><strong>Previous message:</strong> <a href="10567.php">Jeffrey Squyres: "[OMPI devel] 1.5 supported systems"</a>
<li><strong>In reply to:</strong> <a href="10564.php">Ralph Castain: "Re: [OMPI devel] v1.5 r25914 DOA"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10569.php">Ralph Castain: "Re: [OMPI devel] v1.5 r25914 DOA"</a>
<li><strong>Reply:</strong> <a href="10569.php">Ralph Castain: "Re: [OMPI devel] v1.5 r25914 DOA"</a>
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
