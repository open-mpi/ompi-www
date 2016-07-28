<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed May 10 03:41:07 2006" -->
<!-- isoreceived="20060510074107" -->
<!-- sent="Wed, 10 May 2006 09:41:02 +0200" -->
<!-- isosent="20060510074102" -->
<!-- name="Richard Wait" -->
<!-- email="Richard.Wait_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI and MPICH" -->
<!-- id="1147246862.4461990e2b799_at_mail.it.uu.se" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C835B9C9CB0F1C4E9DA48913C9E8F8AF7FB060_at_xmb-rtp-215.amer.cisco.com" -->
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
<strong>From:</strong> Richard Wait (<em>Richard.Wait_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-05-10 03:41:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1226.php">Brian Barrett: "Re: [OMPI users] Orted Command Not found"</a>
<li><strong>Previous message:</strong> <a href="1224.php">Mahesh Barve: "[OMPI users] Orted Command Not found"</a>
<li><strong>In reply to:</strong> <a href="1220.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Open MPI and MPICH"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1222.php">Rainer Keller: "Re: [OMPI users] Open MPI and MPICH"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Quoting &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; If you are looking for the path of least resistance, then going back to
</span><br>
<span class="quotelev1">&gt; MPICH is probably your best bet (there is certainly merit in &quot;it ain't
</span><br>
<span class="quotelev1">&gt; broke, so don't fix it&quot;).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>True - but where is your sense of adventure!!
<br>
<p><span class="quotelev1">&gt; However, there may be a few other factors to consider:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - Just because an app runs and completes with one MPI implementation
</span><br>
<span class="quotelev1">&gt; does not mean that the application is correct; running with a different
</span><br>
<span class="quotelev1">&gt; implementation can be a great way to find bugs that you were unaware of
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>This is precisely the situation I found since at three places in the code I had
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_TYPE_COMMIT(side,ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_TYPE_FREE(side)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;...
<br>
<p>&nbsp;Neither MPICH nor OpenMPI object on compilation but, as I mentioned MPICH
<br>
&nbsp;runs but OpenMPI needs the correct syntax
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_TYPE_FREE(side,ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;...
<br>
&nbsp;to run correctly.
<br>
<p>Thanks for email.
<br>
&nbsp;Richard Wait
<br>
&nbsp;Uppsala University
<br>
&nbsp;Department of Information Technology
<br>
&nbsp;Scientific Computing
<br>
&nbsp;Box 337
<br>
&nbsp;75105 UPPSALA
<br>
&nbsp;Tel:             018-4712757
<br>
&nbsp;Fax:             018-523049
<br>
<p>----------------------------------------------------------------
<br>
This message was sent using IMP, the Internet Messaging Program.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1226.php">Brian Barrett: "Re: [OMPI users] Orted Command Not found"</a>
<li><strong>Previous message:</strong> <a href="1224.php">Mahesh Barve: "[OMPI users] Orted Command Not found"</a>
<li><strong>In reply to:</strong> <a href="1220.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Open MPI and MPICH"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1222.php">Rainer Keller: "Re: [OMPI users] Open MPI and MPICH"</a>
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
