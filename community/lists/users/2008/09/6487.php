<?
$subject_val = "Re: [OMPI users] users Digest, Vol 1000, Issue 1";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  9 15:06:34 2008" -->
<!-- isoreceived="20080909190634" -->
<!-- sent="Tue, 9 Sep 2008 15:06:30 -0400" -->
<!-- isosent="20080909190630" -->
<!-- name="Jeremy Stout" -->
<!-- email="stout.jeremy_at_[hidden]" -->
<!-- subject="Re: [OMPI users] users Digest, Vol 1000, Issue 1" -->
<!-- id="a6bc6cc0809091206y74db6eb4pc64bb05008cb8b86_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Jeremy Stout (<em>stout.jeremy_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-09 15:06:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6488.php">Jeff Squyres: "Re: [OMPI users] users Digest, Vol 1000, Issue 1"</a>
<li><strong>Previous message:</strong> <a href="6486.php">Christopher Tanner: "Re: [OMPI users] users Digest, Vol 1000, Issue 1"</a>
<li><strong>In reply to:</strong> <a href="6484.php">Christopher Tanner: "Re: [OMPI users] users Digest, Vol 1000, Issue 1"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On clusters where I'm using the Intel compilers and OpenMPI, I setup
<br>
the compiler directory (usually /opt/intel) as a NFS export. The
<br>
computation nodes then mount that export. Next, I add the following
<br>
lines to the ld.so.conf file and distribute it to the computation
<br>
nodes:
<br>
/opt/intel/cce/version_number/lib/em64t
<br>
/opt/intel/fce/version_number/lib/em64t
<br>
<p>That will depend on the path and version of the compiler set you are
<br>
using. Do a '/sbin/ldconfig' on each node and you should be good to
<br>
go.
<br>
<p>You can also try updating the library path in your submission file.
<br>
<p>Jeremy Stout
<br>
<p>On Tue, Sep 9, 2008 at 2:58 PM, Christopher Tanner
<br>
&lt;christopher.tanner_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Jeremy -
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for the help - this bit of advice came up quite a bit through
</span><br>
<span class="quotelev1">&gt; internet searches. However, I made sure that the LD_LIBRARY_PATH was set and
</span><br>
<span class="quotelev1">&gt; correct on all nodes -- and the error persists.
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6488.php">Jeff Squyres: "Re: [OMPI users] users Digest, Vol 1000, Issue 1"</a>
<li><strong>Previous message:</strong> <a href="6486.php">Christopher Tanner: "Re: [OMPI users] users Digest, Vol 1000, Issue 1"</a>
<li><strong>In reply to:</strong> <a href="6484.php">Christopher Tanner: "Re: [OMPI users] users Digest, Vol 1000, Issue 1"</a>
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
