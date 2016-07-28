<?
$subject_val = "Re: [OMPI users] users Digest, Vol 1000, Issue 1";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  9 15:03:20 2008" -->
<!-- isoreceived="20080909190320" -->
<!-- sent="Tue, 9 Sep 2008 15:03:10 -0400" -->
<!-- isosent="20080909190310" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] users Digest, Vol 1000, Issue 1" -->
<!-- id="1BBAC7E3-6B98-42E0-BBD1-71C5065925C9_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="61DA3BB2-A82A-4E01-AE37-039D06E48AD7_at_gatech.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] users Digest, Vol 1000, Issue 1<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-09 15:03:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6486.php">Christopher Tanner: "Re: [OMPI users] users Digest, Vol 1000, Issue 1"</a>
<li><strong>Previous message:</strong> <a href="6484.php">Christopher Tanner: "Re: [OMPI users] users Digest, Vol 1000, Issue 1"</a>
<li><strong>In reply to:</strong> <a href="6484.php">Christopher Tanner: "Re: [OMPI users] users Digest, Vol 1000, Issue 1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6486.php">Christopher Tanner: "Re: [OMPI users] users Digest, Vol 1000, Issue 1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You might want to double check this; it's an easy thing to test  
<br>
incorrectly.
<br>
<p>What you want to check is that the LD_LIBRARY_PATH is set properly for  
<br>
*non-interactive logins* (I assume you are using the rsh/ssh launcher  
<br>
for Open MPI, vs. using a resource manager such as SLURM, Torque,  
<br>
etc.).  For example, try this:
<br>
<p>-----
<br>
shell$ ssh othernode env | grep LD_LIBRARY_PATH
<br>
-----
<br>
<p>This runs &quot;env&quot; on the other node and will show you what the  
<br>
LD_LIBRARY_PATH is over there.   This is what you want to check  
<br>
includes the right paths for the Intel libraries.  Note that it is  
<br>
different than:
<br>
<p>-----
<br>
shell$ ssh othernode
<br>
othernode$ env | grep LD_LIBRARY_PATH
<br>
-----
<br>
<p>Because shell startup files may differentiate between interactive and  
<br>
non-interactive logins.  It depends on your local system setup.
<br>
<p>Hope that helps.
<br>
<p><p><p>On Sep 9, 2008, at 2:58 PM, Christopher Tanner wrote:
<br>
<p><span class="quotelev1">&gt; Jeremy -
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for the help - this bit of advice came up quite a bit through  
</span><br>
<span class="quotelev1">&gt; internet searches. However, I made sure that the LD_LIBRARY_PATH was  
</span><br>
<span class="quotelev1">&gt; set and correct on all nodes -- and the error persists.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any other possible solutions? Thanks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -------------------------------------------
</span><br>
<span class="quotelev1">&gt; Chris Tanner
</span><br>
<span class="quotelev1">&gt; Space Systems Design Lab
</span><br>
<span class="quotelev1">&gt; Georgia Institute of Technology
</span><br>
<span class="quotelev1">&gt; christopher.tanner_at_[hidden]
</span><br>
<span class="quotelev1">&gt; -------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 9, 2008, at 12:00 PM, users-request_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The library you specified in your post (libimf.so) is part of the
</span><br>
<span class="quotelev2">&gt;&gt; Intel Compiler Suite (fce and cce). You'll need to make those
</span><br>
<span class="quotelev2">&gt;&gt; libraries available to your computation nodes and update the
</span><br>
<span class="quotelev2">&gt;&gt; LD_LIBRARY_PATH accordingly.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jeremy Stout
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="6486.php">Christopher Tanner: "Re: [OMPI users] users Digest, Vol 1000, Issue 1"</a>
<li><strong>Previous message:</strong> <a href="6484.php">Christopher Tanner: "Re: [OMPI users] users Digest, Vol 1000, Issue 1"</a>
<li><strong>In reply to:</strong> <a href="6484.php">Christopher Tanner: "Re: [OMPI users] users Digest, Vol 1000, Issue 1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6486.php">Christopher Tanner: "Re: [OMPI users] users Digest, Vol 1000, Issue 1"</a>
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
