<?
$subject_val = "Re: [OMPI users] Concerning infiniband support";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 20 07:51:57 2011" -->
<!-- isoreceived="20110120125157" -->
<!-- sent="Thu, 20 Jan 2011 07:51:48 -0500" -->
<!-- isosent="20110120125148" -->
<!-- name="Bowen Zhou" -->
<!-- email="bwzhou_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Concerning infiniband support" -->
<!-- id="BLU0-SMTP130C95F7559DCE30E957BC7D2F90_at_phx.gbl" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="001b01cbb86f$8b75e0b0$a261a210$_at_nd.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Concerning infiniband support<br>
<strong>From:</strong> Bowen Zhou (<em>bwzhou_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-20 07:51:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15377.php">Jeff Squyres: "Re: [OMPI users] Concerning infiniband support"</a>
<li><strong>Previous message:</strong> <a href="15375.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Concerning infiniband support"</a>
<li><strong>In reply to:</strong> <a href="15373.php">Zhigang Wei: "[OMPI users] Concerning infiniband support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15377.php">Jeff Squyres: "Re: [OMPI users] Concerning infiniband support"</a>
<li><strong>Reply:</strong> <a href="15377.php">Jeff Squyres: "Re: [OMPI users] Concerning infiniband support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Besides all these advices have been given, you may need to use --prefix 
<br>
in configure script to override default installation directory since you 
<br>
don't have root account. Also you might want to look at MVAPICH as an 
<br>
alternative, an variant of MPICH2 that supports infiniband.
<br>
<p>good luck,
<br>
<p>Bowen Zhou
<br>
On 01/20/2011 01:59 AM,
<br>
<span class="quotelev1">&gt; Dear all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I want to use infiniband, I am from a University in the US, my
</span><br>
<span class="quotelev1">&gt; University&#146;s high performance center don&#146;t have Gcc compiled openmpi
</span><br>
<span class="quotelev1">&gt; that support infiniband, so I want to compile myself.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But I have a few questions,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1.Is it ok to compile openmpi myself with infiniband support, if I don&#146;t
</span><br>
<span class="quotelev1">&gt; have the root privilege? Is it going to work?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2.If it is ok, how can I find out where is the infiniband installation
</span><br>
<span class="quotelev1">&gt; directory, any shell command to show it?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3.Which configuration is correct? For example, using
</span><br>
<span class="quotelev1">&gt; &#147;--with-openib=/usr/include/infiniband&#148; as told in openmpi FAQ, or I
</span><br>
<span class="quotelev1">&gt; need to use &quot;--with-openib=/usr/include/infiniband
</span><br>
<span class="quotelev1">&gt; --with-openib-libdir=/usr/lib64&quot; both?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks so much.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Daniel Wei
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ---------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; University of Notre Dame
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
<li><strong>Next message:</strong> <a href="15377.php">Jeff Squyres: "Re: [OMPI users] Concerning infiniband support"</a>
<li><strong>Previous message:</strong> <a href="15375.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Concerning infiniband support"</a>
<li><strong>In reply to:</strong> <a href="15373.php">Zhigang Wei: "[OMPI users] Concerning infiniband support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15377.php">Jeff Squyres: "Re: [OMPI users] Concerning infiniband support"</a>
<li><strong>Reply:</strong> <a href="15377.php">Jeff Squyres: "Re: [OMPI users] Concerning infiniband support"</a>
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
