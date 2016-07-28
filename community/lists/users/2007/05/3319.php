<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu May 24 11:54:50 2007" -->
<!-- isoreceived="20070524155450" -->
<!-- sent="Thu, 24 May 2007 11:54:40 -0400" -->
<!-- isosent="20070524155440" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] oob_tcp_if_include vs. oob_tcp_include" -->
<!-- id="57774186-D2BC-447B-90C8-5E562C8BCB2A_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4655B3C1.7000706_at_cs.vu.nl" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-24 11:54:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3320.php">Josh England: "[OMPI users] settings not read from env"</a>
<li><strong>Previous message:</strong> <a href="3318.php">Michael: "Re: [OMPI users] ethernet bonding"</a>
<li><strong>In reply to:</strong> <a href="3316.php">Kees Verstoep: "[OMPI users] oob_tcp_if_include vs. oob_tcp_include"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You are absolutely right; the MCA parameter names between the oob and  
<br>
btl tcp modules were slightly different (btl_tcp_if_[in|ex]clude and  
<br>
oob_tcp_[in|ex]clude).  And the FAQ is wrong -- I just updated it;  
<br>
sorry about that, and thanks for pointing it out!
<br>
<p>I literally just fixed this on the trunk this morning (https:// 
<br>
svn.open-mpi.org/trac/ompi/changeset/14746): both oob and btl tcp  
<br>
modules now use the form *_if_[in|ex]clude.  The old oob_tcp names  
<br>
still exist as deprecated synonyms in case anyone is still using them.
<br>
<p>I don't know if this change will make it over to a future 1.2.x  
<br>
release or not.
<br>
<p><p>On May 24, 2007, at 11:48 AM, Kees Verstoep wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For OpenMPI users struggling with cluster/grid setups in combination
</span><br>
<span class="quotelev1">&gt; with particular networks to use or avoid, it may be useful to know
</span><br>
<span class="quotelev1">&gt; that the documentation on <a href="http://www.open-mpi.org/faq/?category=tcp">http://www.open-mpi.org/faq/?category=tcp</a>
</span><br>
<span class="quotelev1">&gt; regarding the oob module is currently misleading.  The options that
</span><br>
<span class="quotelev1">&gt; actually implement this functionality are &quot;oob_tcp_include&quot; and
</span><br>
<span class="quotelev1">&gt; &quot;oob_tcp_exclude&quot; (not oob_tcp_if_include and oob_tcp_if_exclude).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The confusion probably arises from the fact that for the btl
</span><br>
<span class="quotelev1">&gt; layer the &quot;_if&quot; does need to be included.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Kees Verstoep
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3320.php">Josh England: "[OMPI users] settings not read from env"</a>
<li><strong>Previous message:</strong> <a href="3318.php">Michael: "Re: [OMPI users] ethernet bonding"</a>
<li><strong>In reply to:</strong> <a href="3316.php">Kees Verstoep: "[OMPI users] oob_tcp_if_include vs. oob_tcp_include"</a>
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
