<?
$subject_val = "Re: [OMPI users] unable to access or execute";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 15 10:55:10 2009" -->
<!-- isoreceived="20090915145510" -->
<!-- sent="Tue, 15 Sep 2009 10:55:05 -0400" -->
<!-- isosent="20090915145505" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] unable to access or execute" -->
<!-- id="07DED785-68CA-4460-B5AD-C5C4CABA045C_at_cisco.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1253007406.4542.1.camel_at_eddy" -->
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
<strong>Subject:</strong> Re: [OMPI users] unable to access or execute<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-15 10:55:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10654.php">Dominik Táborský: "Re: [OMPI users] unable to access or execute"</a>
<li><strong>Previous message:</strong> <a href="10652.php">Lenny Verkhovsky: "Re: [OMPI users] unable to access or execute"</a>
<li><strong>In reply to:</strong> <a href="10650.php">Dominik T&#225;borsk&#253;: "Re: [OMPI users] unable to access or execute"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10654.php">Dominik Táborský: "Re: [OMPI users] unable to access or execute"</a>
<li><strong>Reply:</strong> <a href="10654.php">Dominik Táborský: "Re: [OMPI users] unable to access or execute"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 15, 2009, at 5:36 AM, Dominik T&#225;borsk&#253; wrote:
<br>
<p><span class="quotelev1">&gt; So I have to manually copy the compiled hello world program to all of
</span><br>
<span class="quotelev1">&gt; the nodes so that they can be executed? I really didn't expect that...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>How would you expect us to execute something that doesn't exist?  :-)
<br>
<p><span class="quotelev1">&gt; So, where (in the filesystem) does the executable have to be? On the
</span><br>
<span class="quotelev1">&gt; same place as on the master?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>That's one way to do it.  In general, if you specify a naked  
<br>
executable name, we look for it in the PATH on each of the target  
<br>
machines.  We automatically append &quot;.&quot; to your PATH on each node, so  
<br>
if you &quot;mpirun ... hello&quot; and hello is in your CWD, then we'll find it.
<br>
<p>As Lenny mentioned, it's a fairly common scenario to use NFS to export  
<br>
your executable to all nodes where it is needed to run.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10654.php">Dominik Táborský: "Re: [OMPI users] unable to access or execute"</a>
<li><strong>Previous message:</strong> <a href="10652.php">Lenny Verkhovsky: "Re: [OMPI users] unable to access or execute"</a>
<li><strong>In reply to:</strong> <a href="10650.php">Dominik T&#225;borsk&#253;: "Re: [OMPI users] unable to access or execute"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10654.php">Dominik Táborský: "Re: [OMPI users] unable to access or execute"</a>
<li><strong>Reply:</strong> <a href="10654.php">Dominik Táborský: "Re: [OMPI users] unable to access or execute"</a>
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
