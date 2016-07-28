<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Apr 25 10:34:06 2007" -->
<!-- isoreceived="20070425143406" -->
<!-- sent="Wed, 25 Apr 2007 10:33:58 -0400" -->
<!-- isosent="20070425143358" -->
<!-- name="Jeremy Stout" -->
<!-- email="stout.jeremy_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Disabling Tight Integration with SGE" -->
<!-- id="a6bc6cc0704250733m13c74325q7d3a270e8bb273c3_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="37948.128.165.0.81.1177511238.squirrel_at_webmail.lanl.gov" -->
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
<strong>From:</strong> Jeremy Stout (<em>stout.jeremy_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-25 10:33:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3136.php">Christian Bell: "Re: [OMPI users] How do you switch off paffinity?"</a>
<li><strong>Previous message:</strong> <a href="3134.php">Brian W. Barrett: "Re: [OMPI users] Disabling Tight Integration with SGE"</a>
<li><strong>In reply to:</strong> <a href="3134.php">Brian W. Barrett: "Re: [OMPI users] Disabling Tight Integration with SGE"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 4/25/07, Brian W. Barrett &lt;bbarrett_at_[hidden]&gt; wrote:
<br>
<span class="quotelev2">&gt; &gt; Is there a command line compile or runtime option to disable tight
</span><br>
<span class="quotelev2">&gt; &gt; integration with Sun Grid Engine? I reviewed the FAQ and saw there was
</span><br>
<span class="quotelev2">&gt; &gt; a way not to build certain components at compile time. However, I'm
</span><br>
<span class="quotelev2">&gt; &gt; not quite sure what it would be in the case of gridengine. Any help
</span><br>
<span class="quotelev2">&gt; &gt; would be appreciated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; G&#246;tz was correct on how to disable a component at run-time.  There is a
</span><br>
<span class="quotelev1">&gt; way to disable building a list of components at configure time, with the
</span><br>
<span class="quotelev1">&gt; --enable-mca-no-build=&lt;components&gt; option.  To disable both of the
</span><br>
<span class="quotelev1">&gt; GridEngine components, you would specify:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     --enable-mca-no-build=ras-gridengine,pls-gridengine
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hope this helps,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian
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
<p>Thank you for the prompt responses. I was successful in disabling SGE
<br>
integration using the suggested methods.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3136.php">Christian Bell: "Re: [OMPI users] How do you switch off paffinity?"</a>
<li><strong>Previous message:</strong> <a href="3134.php">Brian W. Barrett: "Re: [OMPI users] Disabling Tight Integration with SGE"</a>
<li><strong>In reply to:</strong> <a href="3134.php">Brian W. Barrett: "Re: [OMPI users] Disabling Tight Integration with SGE"</a>
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
