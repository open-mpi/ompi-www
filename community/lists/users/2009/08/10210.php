<?
$subject_val = "Re: [OMPI users] Performance difference on OpenMPI, IntelMPI and ScaliMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug  5 10:08:10 2009" -->
<!-- isoreceived="20090805140810" -->
<!-- sent="Wed, 05 Aug 2009 10:06:35 -0400" -->
<!-- isosent="20090805140635" -->
<!-- name="Terry Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Performance difference on OpenMPI, IntelMPI and ScaliMPI" -->
<!-- id="4A7991EB.3050102_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="mailman.12687.1249480619.6040.users_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Performance difference on OpenMPI, IntelMPI and ScaliMPI<br>
<strong>From:</strong> Terry Dontje (<em>Terry.Dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-05 10:06:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10211.php">Torgny Faxen: "Re: [OMPI users] Performance difference on OpenMPI, IntelMPI and 	ScaliMPI"</a>
<li><strong>Previous message:</strong> <a href="10209.php">Pavel Shamis (Pasha): "Re: [OMPI users] Performance difference on OpenMPI, IntelMPI and ScaliMPI"</a>
<li><strong>Maybe in reply to:</strong> <a href="10202.php">Torgny Faxen: "[OMPI users] Performance difference on OpenMPI, IntelMPI and ScaliMPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
A comment to the below.  I meant the 2x performance was for shared 
<br>
memory communications.
<br>
<p>--td
<br>
<span class="quotelev1">&gt; Message: 3
</span><br>
<span class="quotelev1">&gt; Date: Wed, 05 Aug 2009 09:55:42 -0400
</span><br>
<span class="quotelev1">&gt; From: Terry Dontje &lt;Terry.Dontje_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Performance difference on OpenMPI, IntelMPI
</span><br>
<span class="quotelev1">&gt; 	and ScaliMPI
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;4A798F5E.3000002_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; CHARSET=US-ASCII; format=flowed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We've found on certain applications binding to processors can have up to 
</span><br>
<span class="quotelev1">&gt; a 2x difference.  ScaliMPI automatically binds processes by socket so if 
</span><br>
<span class="quotelev1">&gt; you are not running a one process per cpu job each process will land on 
</span><br>
<span class="quotelev1">&gt; a different socket. 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OMPI defaults to not binding at all.  You may want to try and use the 
</span><br>
<span class="quotelev1">&gt; rankfile option (see manpage) and see if that helps any.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If the above doesn't improve anything the next question is do you know 
</span><br>
<span class="quotelev1">&gt; what the sizes of the messages are?  For very small messages I believe 
</span><br>
<span class="quotelev1">&gt; Scali shows a 2x better performance than Intel and OMPI (I think this is 
</span><br>
<span class="quotelev1">&gt; due to a fastpath optimization).
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10211.php">Torgny Faxen: "Re: [OMPI users] Performance difference on OpenMPI, IntelMPI and 	ScaliMPI"</a>
<li><strong>Previous message:</strong> <a href="10209.php">Pavel Shamis (Pasha): "Re: [OMPI users] Performance difference on OpenMPI, IntelMPI and ScaliMPI"</a>
<li><strong>Maybe in reply to:</strong> <a href="10202.php">Torgny Faxen: "[OMPI users] Performance difference on OpenMPI, IntelMPI and ScaliMPI"</a>
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
