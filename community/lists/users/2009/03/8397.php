<?
$subject_val = "Re: [OMPI users] pcart_coords_f.c:74: error: lvaluerequiredasdecrement operand";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 11 13:55:31 2009" -->
<!-- isoreceived="20090311175531" -->
<!-- sent="Wed, 11 Mar 2009 13:55:26 -0400" -->
<!-- isosent="20090311175526" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] pcart_coords_f.c:74: error: lvaluerequiredasdecrement operand" -->
<!-- id="182EEB2D-0C32-45BB-AFC6-D3561E4E8CA4_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="42A5E0AD-4CEB-4A54-8DA0-20422DB39322_at_hhmi.umbc.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] pcart_coords_f.c:74: error: lvaluerequiredasdecrement operand<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-11 13:55:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8398.php">Yu Chen: "Re: [OMPI users] pcart_coords_f.c:74: error: lvaluerequiredasdecrement operand"</a>
<li><strong>Previous message:</strong> <a href="8396.php">Yu Chen: "Re: [OMPI users] pcart_coords_f.c:74: error: lvalue requiredasdecrement operand"</a>
<li><strong>In reply to:</strong> <a href="8396.php">Yu Chen: "Re: [OMPI users] pcart_coords_f.c:74: error: lvalue requiredasdecrement operand"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8398.php">Yu Chen: "Re: [OMPI users] pcart_coords_f.c:74: error: lvaluerequiredasdecrement operand"</a>
<li><strong>Reply:</strong> <a href="8398.php">Yu Chen: "Re: [OMPI users] pcart_coords_f.c:74: error: lvaluerequiredasdecrement operand"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The rc would be your best yet.
<br>
<p>On Mar 11, 2009, at 1:44 PM, Yu Chen wrote:
<br>
<p><span class="quotelev2">&gt; &gt; On Mar 11, 2009, at 10:19 AM, Yu Chen wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thanks for the quick reply.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I think this is the same as this thread in development email list:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2009/02/5367.php">http://www.open-mpi.org/community/lists/devel/2009/02/5367.php</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Ah, yes it probably is.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; It seems this is going to be fixed in 1.3.1, but meanwhile is there
</span><br>
<span class="quotelev3">&gt; &gt;&gt; an
</span><br>
<span class="quotelev3">&gt; &gt;&gt; easy way to get around for now?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Are you compiling with -i8, perchance?  If so, there probably isn't
</span><br>
<span class="quotelev2">&gt; &gt; an easy workaround other than to take the latest Open MPI 1.3.1rc
</span><br>
<span class="quotelev2">&gt; &gt; tarball (should be pretty close to the final version).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No, I am not compiling with -i8 (I don't even know what it does). So
</span><br>
<span class="quotelev1">&gt; is there a fix then?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I might give the rc  a try.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Chen
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;    <a href="http://www.open-mpi.org/software/ompi/v1.3/">http://www.open-mpi.org/software/ompi/v1.3/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I will send all the information in next email if you would still  
</span><br>
<span class="quotelev1">&gt; like
</span><br>
<span class="quotelev3">&gt; &gt;&gt; to look at it.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; If this is the same issue, then it's probably not worth it.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
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
<li><strong>Next message:</strong> <a href="8398.php">Yu Chen: "Re: [OMPI users] pcart_coords_f.c:74: error: lvaluerequiredasdecrement operand"</a>
<li><strong>Previous message:</strong> <a href="8396.php">Yu Chen: "Re: [OMPI users] pcart_coords_f.c:74: error: lvalue requiredasdecrement operand"</a>
<li><strong>In reply to:</strong> <a href="8396.php">Yu Chen: "Re: [OMPI users] pcart_coords_f.c:74: error: lvalue requiredasdecrement operand"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8398.php">Yu Chen: "Re: [OMPI users] pcart_coords_f.c:74: error: lvaluerequiredasdecrement operand"</a>
<li><strong>Reply:</strong> <a href="8398.php">Yu Chen: "Re: [OMPI users] pcart_coords_f.c:74: error: lvaluerequiredasdecrement operand"</a>
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
