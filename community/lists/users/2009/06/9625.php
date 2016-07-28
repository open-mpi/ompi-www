<?
$subject_val = "Re: [OMPI users] Compiling and Building OPENMPI for checkpointing using self";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 16 13:01:14 2009" -->
<!-- isoreceived="20090616170114" -->
<!-- sent="Tue, 16 Jun 2009 13:01:09 -0400" -->
<!-- isosent="20090616170109" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Compiling and Building OPENMPI for checkpointing using self" -->
<!-- id="A1138A1E-E5FD-469B-9606-260C7C2D7E9F_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="237855.62973.qm_at_web31003.mail.mud.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Compiling and Building OPENMPI for checkpointing using self<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-16 13:01:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9626.php">Josh Hursey: "Re: [OMPI users] Segmentation fault (11)"</a>
<li><strong>Previous message:</strong> <a href="9624.php">Kritiraj Sajadah: "[OMPI users] vfs_write returned -14"</a>
<li><strong>In reply to:</strong> <a href="9559.php">Kritiraj Sajadah: "[OMPI users] Compiling and Building OPENMPI for checkpointing using self"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
(Sorry for the delay. I have been on travel, and just not getting  
<br>
caught up on email)
<br>
<p>The FT User's Guide has some information on working with the 'self'  
<br>
checkpoint component. The document can be found attached to the  
<br>
following wiki page:
<br>
&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/wiki/ProcessFT_CR">https://svn.open-mpi.org/trac/ompi/wiki/ProcessFT_CR</a>
<br>
<p>The main part is that there are some functions that your application  
<br>
must define that the 'self' component looks for in the binary. If it  
<br>
finds the functions then it will call them around a checkpoint event.
<br>
<p>Unfortunately I do not have an example program that uses the 'self'  
<br>
component in a state that I can send out at the moment. I can make  
<br>
one, but it will likely take me a little while before I can get around  
<br>
to it.
<br>
<p>Best,
<br>
Josh
<br>
<p>On Jun 6, 2009, at 4:01 PM, Kritiraj Sajadah wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; HI All,
</span><br>
<span class="quotelev1">&gt;       I have successfully install and configured openmpi to perfrom  
</span><br>
<span class="quotelev1">&gt; checkpointing using the BLCR mechanism. However, i now want to to  
</span><br>
<span class="quotelev1">&gt; try checkpointing using self.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Has anyone do that? If so, i would very much appreciate if anyone of  
</span><br>
<span class="quotelev1">&gt; you could sent be the steps necessary to enable slef checkpointing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Many thanks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Raj
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9626.php">Josh Hursey: "Re: [OMPI users] Segmentation fault (11)"</a>
<li><strong>Previous message:</strong> <a href="9624.php">Kritiraj Sajadah: "[OMPI users] vfs_write returned -14"</a>
<li><strong>In reply to:</strong> <a href="9559.php">Kritiraj Sajadah: "[OMPI users] Compiling and Building OPENMPI for checkpointing using self"</a>
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
