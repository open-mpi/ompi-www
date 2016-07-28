<?
$subject_val = "Re: [OMPI devel] minor atomics nit";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug  5 10:50:17 2014" -->
<!-- isoreceived="20140805145017" -->
<!-- sent="Tue, 5 Aug 2014 07:49:54 -0700" -->
<!-- isosent="20140805144954" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] minor atomics nit" -->
<!-- id="ACD646CB-DE26-428E-8C67-2F482B94E1F6_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAvDA15A8JMme2G5BEAUesfd4yGuGYfVf=Yg25Jv2PibKi4efA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] minor atomics nit<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-05 10:49:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15517.php">Ralph Castain: "Re: [OMPI devel] oshmem enabled by default"</a>
<li><strong>Previous message:</strong> <a href="15515.php">Ralph Castain: "Re: [OMPI devel] 1.8.2rc3 cosmetic issues in configure"</a>
<li><strong>In reply to:</strong> <a href="15506.php">Paul Hargrove: "[OMPI devel] minor atomics nit"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Done - thanks!
<br>
<p>On Aug 4, 2014, at 7:15 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Running &quot;make dist&quot; on trunk I see:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --&gt; Generating assembly for &quot;SPARC&quot; &quot;default-.text-.globl-:--.L-#-1-0-1-0-0&quot;
</span><br>
<span class="quotelev1">&gt; Could not open ../../../opal/asm/base/SPARC.asm: No such file or directory
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Which is apparent because the following lines were never removed from opal/asm/asm-data.txt
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # default compile mode on Solaris.  Evil.  equiv to about Sparc v8
</span><br>
<span class="quotelev1">&gt; SPARC   default-.text-.globl-:--.L-#-1-0-1-0-0  sparc-solaris
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; README is clear about having dropped support for SPARC &lt; v8plus.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15506.php">http://www.open-mpi.org/community/lists/devel/2014/08/15506.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15516/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15517.php">Ralph Castain: "Re: [OMPI devel] oshmem enabled by default"</a>
<li><strong>Previous message:</strong> <a href="15515.php">Ralph Castain: "Re: [OMPI devel] 1.8.2rc3 cosmetic issues in configure"</a>
<li><strong>In reply to:</strong> <a href="15506.php">Paul Hargrove: "[OMPI devel] minor atomics nit"</a>
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
